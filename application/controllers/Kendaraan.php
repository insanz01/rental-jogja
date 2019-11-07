<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kendaraan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('Kendaraan_Model', 'kendaraan');
  }

  public function index()
  {
    $data['kendaraan'] = $this->kendaraan->tampil();

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('main/kendaraan/index', $data);
    $this->load->view('template/footer');
  }

  public function tambah()
  {
    $this->form_validation->set_rules('plat_nomor', 'Plat', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('kursi', 'Kursi', 'required');
    $this->form_validation->set_rules('jenis', 'Jenis', 'required');
    $this->form_validation->set_rules('harga', 'Harga', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('template/topbar');
      $this->load->view('main/kendaraan/tambah');
      $this->load->view('template/footer');
    } else {

      $config['upload_path'] = 'mobil/';
      $config['allowed_types'] = 'jpg|jpeg|png';

      $mobil = [
        'plat_nomor' => $this->input->post('plat_nomor'),
        'nama' => $this->input->post('nama'),
        'kursi' => $this->input->post('kursi'),
        'jenis' => $this->input->post('jenis'),
        'harga' => $this->input->post('harga'),
        'url' => 'mobil/',
        'status' => 'tesedia'
      ];

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('gambar')) {
        $error = array('error' => $this->upload->display_errors());

        var_dump($error);
        // die;
        redirect('kendaraan/tambah');
        // $this->load->view('main/kendaraan/tambah', $error);
      } else {
        $data = array('image_metadata' => $this->upload->data());

        $mobil['gambar'] = $data['image_metadata']['file_name'];
        $mobil['url'] = $mobil['url'] . $mobil['gambar'];

        if ($this->kendaraan->tambah($mobil)) {
          $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
          redirect('Kendaraan/index');
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan!</div>');
          redirect('Kendaraan/tambah');
        }
      }
    }
  }

  public function ubah($id)
  {
    // $this->form_validation->set_rules('plat_nomor', 'Plat', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('kursi', 'Kursi', 'required');
    $this->form_validation->set_rules('jenis', 'Jenis', 'required');
    $this->form_validation->set_rules('harga', 'Harga', 'required');

    if ($this->form_validation->run() == FALSE) {
      $data['kendaraan'] = $this->kendaraan->tampil_satu($id);
      $data['id'] = $id;

      // var_dump($data['kendaraan']);
      // die;

      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('template/topbar');
      $this->load->view('main/kendaraan/ubah', $data);
      $this->load->view('template/footer');
    } else {
      $config['upload_path'] = 'mobil/';
      $config['allowed_types'] = 'jpg|jpeg|png';

      $mobil = [
        'plat_nomor' => $this->input->post('plat_nomor'),
        'nama' => $this->input->post('nama'),
        'kursi' => $this->input->post('kursi'),
        'jenis' => $this->input->post('jenis'),
        'harga' => $this->input->post('harga'),
        'gambar' => $this->input->post('foto'),
        'url' => 'mobil/'
      ];

      $old_img_path = $this->input->post('url');

      $this->load->library('upload', $config);

      // var_dump($_FILES['gambar']['name']);
      // var_dump($this->kendaraan->cek_gambar($_FILES['gambar']['name']));
      // die;

      if (!$this->kendaraan->cek_gambar($_FILES['gambar']['name'])) {
        if (!$this->upload->do_upload('gambar')) {
          $error = array('error' => $this->upload->display_errors());
          var_dump($error);
          die;

          unlink($old_img_path);

          redirect('kendaraan/ubah');
          // $this->load->view('main/kendaraan/tambah', $error);
        } else {
          $data = array('image_metadata' => $this->upload->data());

          $mobil['gambar'] = $data['image_metadata']['file_name'];
          $mobil['url'] = $mobil['url'] . $mobil['gambar'];

          if ($this->kendaraan->ubah($mobil)) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('Kendaraan/index');
          } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal diubah!</div>');
            redirect('Kendaraan/ubah/' . $id);
          }
        }
      } else {
        var_dump('ada yang salah');
        die;
        $mobil['url'] = $mobil['url'] . $mobil['gambar'];
        if ($this->kendaraan->ubah($mobil)) {
          $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
          redirect('Kendaraan/index');
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal diubah!</div>');
          redirect('Kendaraan/ubah/' . $id);
        }
      }
    }
  }

  public function hapus()
  {
    $path = $this->input->post('url_foto');
    $id = $this->input->post('kode');
    if ($this->kendaraan->hapus($id)) {
      unlink($path);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data gagal dihapus!</div>');
    }
    redirect('Kendaraan/index');
  }
}
