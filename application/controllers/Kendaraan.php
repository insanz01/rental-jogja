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
      $data = [
        'plat_nomor' => $this->input->post('plat_nomor'),
        'nama' => $this->input->post('nama'),
        'kursi' => $this->input->post('kursi'),
        'jenis' => $this->input->post('jenis'),
        'harga' => $this->input->post('harga')
      ];

      if ($this->kendaraan->tambah($data)) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
        redirect('Kendaraan/index');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan!</div>');
        redirect('Kendaraan/tambah');
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

      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('template/topbar');
      $this->load->view('main/kendaraan/ubah', $data);
      $this->load->view('template/footer');
    } else {
      $data = [
        'plat_nomor' => $this->input->post('plat_nomor'),
        'nama' => $this->input->post('nama'),
        'kursi' => $this->input->post('kursi'),
        'jenis' => $this->input->post('jenis'),
        'harga' => $this->input->post('harga')
      ];

      if ($this->kendaraan->ubah($data)) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
        redirect('Kendaraan/index');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal diubah!</div>');
        redirect('Kendaraan/ubah');
      }
    }
  }
}
