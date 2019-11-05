<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('Auth_Model', 'auth');
  }

  public function index()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('auth/login');
    } else {
      $data = [
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
      ];

      if ($this->auth->login($data)) {
        redirect('main/index');
      } else {
        redirect('auth/index');
      }
    }
  }

  public function registrasi()
  {
    $this->load->view('auth/registrasi');
  }

  public function logout()
  {
    $this->session->unset_userdata('sess_user_id');

    redirect('auth/index');
  }
}
