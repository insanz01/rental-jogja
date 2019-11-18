<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if (!$this->session->has_userdata('sess_user_id')) {
      redirect('auth');
    }

    $this->load->model('Transaksi_Model', 'transaksi');
  }

  public function index()
  {
    $data['transaksi'] = $this->transaksi->tampil('booked');

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('main/transaksi/index', $data);
    $this->load->view('template/footer');
  }

  public function selesai()
  {
    $data['transaksi'] = $this->transaksi->tampil('selesai');

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('main/transaksi/index', $data);
    $this->load->view('template/footer');
  }

  public function semua()
  {
    $data['transaksi'] = $this->transaksi->tampil();

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('main/transaksi/index', $data);
    $this->load->view('template/footer');
  }

  public function ubah_transaksi()
  {
    if ($this->input->post('kode_ref')) {
      $kode_ref = $this->input->post('kode_ref');

      if ($this->transaksi->ubah_transaksi($kode_ref)) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Kendaraan sudah diambil</div>');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Kode transaksi gagal digunakan</div>');
      }
    }

    redirect('transaksi');
  }

  public function hapus()
  {
    $id = $this->input->post('kode');

    if ($this->transaksi->hapus($id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Transaksi berhasil dihapus</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Transaksi gagal dihapus</div>');
    }

    redirect('transaksi');
  }
}
