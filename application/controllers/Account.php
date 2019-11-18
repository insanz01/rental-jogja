<?php

class Account extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('Account_Model', 'akun');
  }

  public function index()
  {
    $data['akun'] = $this->akun->tampil();

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('main/akun/index', $data);
    $this->load->view('template/footer');
  }

  public function tambah()
  {
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('template/topbar');
      $this->load->view('main/akun/tambah');
      $this->load->view('template/footer');
    } else {
      $data = [
        'id' => '',
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'tanggal_dibuat' => date('Y-m-d', time())
      ];

      if ($this->akun->tambah($data)) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Akun berhasil ditambah</div>');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun gagal ditambah</div>');
      }
      redirect('Account/index');
    }
  }

  public function ubah($id)
  {
    $this->form_validation->set_rules('old_password', 'old', 'required');
    $this->form_validation->set_rules('new_password', 'new', 'required');
    $this->form_validation->set_rules('new_password2', 'new2', 'required');

    if ($this->form_validation->run() == FALSE) {
      $data['id'] = $id;

      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('template/topbar');
      $this->load->view('main/akun/ubah', $data);
      $this->load->view('template/footer');
    } else {
      $op = $this->input->post('old_password');
      $p1 = $this->input->post('new_password');
      $p2 = $this->input->post('new_password2');
      if ($p1 == $p2) {
        if ($this->akun->ubah($op, $p1, $id)) {
          $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Password berhasil diubah</div>');
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password gagal diubah</div>');
        }
      }
      redirect('Account/index');
    }
  }

  public function hapus()
  {
    $id = $this->input->post('kode');
    if ($this->akun->hapus($id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Akun berhasil dihapus</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun gagal dihapus</div>');
    }

    redirect('account/index');
  }
}
