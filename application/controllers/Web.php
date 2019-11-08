<?php


class Web extends CI_Controller
{
  private $data;
  private $book = [];
  public function __construct()
  {
    parent::__construct();

    $this->data['cart'] = false;

    $this->load->model('Web_Model', 'web');
    $this->load->library('cart');
  }

  public function index()
  {

    $data['promo'] = $this->web->tampil_promo();
    $data['display'] = $this->web->tampil(9);

    $this->load->view('template/app/header', $this->data);
    $this->load->view('template/app/menu');
    $this->load->view('main/web/index', $data);
    $this->load->view('template/app/footer');
  }

  public function lebih()
  {
    $data['mobil'] = $this->web->tampil();

    $this->load->view('template/app/header', $this->data);
    $this->load->view('template/app/menu');
    $this->load->view('main/web/lebih', $data);
    $this->load->view('template/app/footer');
  }

  public function keranjang()
  {
    $data['book'] = $this->session->userdata('sess_book');
    $this->data['cart'] = true;

    $data['lama'] = NULL;
    $data['ref_code'] = NULL;
    $data['tanggal_pesan'] = NULL;
    $data['tanggal_kembali'] = NULL;

    if ($data['book']) {
      $data['lama'] = $data['book']['lama'];
      $data['ref_code'] = random_string('alnum', 7);
      $data['tanggal_pesan'] = $data['book']['tanggal'];

      $tgl = date_create($data['tanggal_pesan']);

      if ($data['lama'] == 1) {
        date_add($tgl, date_interval_create_from_date_string("1 day"));
      } else {
        date_add($tgl, date_interval_create_from_date_string($data['lama'] . " days"));
      }

      $data['tanggal_kembali'] = $tgl;

      $data['book']['tanggal_kembali'] = date_format($data['tanggal_kembali'], 'Y-m-d');
      $data['book']['kode_ref'] = $data['ref_code'];

      $this->session->set_userdata('sess_book', $data['book']);
    } else {
      $data['book'] = [];
    }

    $this->load->view('template/app/header', $this->data);
    $this->load->view('template/app/menu');
    $this->load->view('main/web/cart', $data);
    $this->load->view('template/app/footer', $this->data);
  }

  public function checkout()
  {
    $book = $this->session->userdata('sess_book');

    $cust = [
      'id' => '',
      'ktp' => $this->input->post('ktp'),
      'nama' => $this->input->post('nama'),
      'nohp' => $this->input->post('nomor'),
      'alamat' => $this->input->post('alamat'),
      'tanggal_transaksi' => date('Y-m-d', time())
    ];

    $this->web->simpan_customer($cust);
    $cust_id = $this->web->ambil_customer_id_terakhir();

    if ($cust_id) {
      $data = [
        'id' => '',
        'kode_ref' => $book['kode_ref'],
        'plat_nomor' => $book['plat'],
        'id_cust' => $cust_id['id'],
        'tanggal_pesan' => $book['tanggal'],
        'tanggal_kembalikan' => $book['tanggal_kembali'],
        'status' => 'booked'
      ];

      if ($this->web->simpan_transaksi($data)) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Memesan!</div>');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal Memesan!</div>');
      }

      $this->session->unset_userdata('sess_book');

      redirect('web');
    }
  }

  public function tambahkan_ke_keranjang()
  {
    $plat_nomor = $this->input->post('plat');
    $tanggal = $this->input->post('tanggal');
    $lama = $this->input->post('lama');

    if ($this->web->cek_ketersediaan($plat_nomor, $tanggal, $lama) or strtotime($tanggal) < time()) {
      $this->session->set_flashdata('gagal', 'true');
      $this->session->set_flashdata('pesan', 'Kendaraan sedang dipesan pada tanggal tersebut..');
      redirect('web');
    }

    $mobil = $this->web->dapatkan_url($plat_nomor);

    $x = [
      'plat' => $plat_nomor,
      'lama' => $lama,
      'tanggal' => $tanggal,
      'jenis' => $mobil['jenis'],
      'harga' => $mobil['harga'],
      'url' => $mobil['url'],
      'nama' => $mobil['nama']
    ];

    $this->session->set_userdata('sess_book', $x);

    $this->session->set_flashdata('sukses', true);

    redirect('web');
  }

  public function hapus_keranjang()
  {
    if ($this->session->has_userdata('sess_book')) {
      $this->session->unset_userdata('sess_book');
      $this->session->set_flashdata('hapus', true);
    }

    redirect('web');
  }

  public function pesanan()
  {
    $this->form_validation->set_rules('nomor', 'Nomor', 'required');
    $this->form_validation->set_rules('kode', 'Kode', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('main/web/pesanan/index');
    } else {
      $data = [
        'nohp' => $this->input->post('nomor'),
        'kode_ref' => $this->input->post('kode')
      ];

      if ($this->web->check_pesanan($data)) {
        redirect('web/detail_pesanan');
      } else {
        redirect('web/pesanan');
      }
    }
  }

  public function detail_pesanan()
  {
    if (!$this->session->has_userdata('sess_pesanan_user_id')) {
      redirect('web/pesanan');
    }

    $this->data['cart'] = true;

    $id = $this->session->userdata('sess_pesanan_id');

    $data['order'] = $this->web->lihat_detail_pesanan($id);

    $this->load->view('template/app/header', $this->data);
    $this->load->view('template/app/menu');
    $this->load->view('main/web/pesanan/detail', $data);
    $this->load->view('template/app/footer');
  }
}
