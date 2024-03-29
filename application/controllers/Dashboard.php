<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if (!$this->session->has_userdata('sess_user_id')) {
      redirect('auth');
    }
  }

  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('main/dashboard');
    $this->load->view('template/footer');
  }
}
