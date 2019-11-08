<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if (!$this->session->has_userdata('sess_user_id')) {
      redirect('auth');
    }

    $this->load->model('Karyawan_Model', 'karyawan');
  }

  public function index()
  {
    $data['karyawan'] = $this->karyawan->tampil();

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('main/karyawan/index', $data);
    $this->load->view('template/footer');
  }

  public function tambah()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nomor', 'Nomor', 'required');
    $this->form_validation->set_rules('gaji', 'Gaji', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('template/topbar');
      $this->load->view('main/karyawan/tambah');
      $this->load->view('template/footer');
    } else {
      $data = [
        'kode' => '',
        'nama' => $this->input->post('nama'),
        'alamat' => $this->input->post('alamat'),
        'nohp' => $this->input->post('nomor'),
        'gaji' => $this->input->post('gaji')
      ];

      // see who i am.. dont wanna lose you now, gloria estefan

      if ($this->karyawan->tambah($data)) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
        redirect('Karyawan/index');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan!</div>');
        redirect('Karyawan/tambah');
      }
    }
  }

  public function ubah($id)
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nomor', 'Nomor', 'required');
    $this->form_validation->set_rules('gaji', 'Gaji', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');

    if ($this->form_validation->run() == FALSE) {
      $data['karyawan'] = $this->karyawan->tampil_satu($id);
      $data['id'] = $id;

      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('template/topbar');
      $this->load->view('main/karyawan/ubah', $data);
      $this->load->view('template/footer');
    } else {
      $data = [
        'kode' => $id,
        'nama' => $this->input->post('nama'),
        'nomor' => $this->input->post('nomor'),
        'gaji' => $this->input->post('gaji'),
        'alamat' => $this->input->post('alamat')
      ];

      if ($this->karyawan->ubah($data)) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
        redirect('Karyawan/index');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal diubah!</div>');
        redirect('Karyawan/ubah/' . $id);
      }
    }
  }

  public function hapus()
  {
    $id = $this->input->post('kode');
    if ($this->karyawan->hapus($id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data gagal dihapus!</div>');
    }

    redirect('Karyawan/index');
  }
}
