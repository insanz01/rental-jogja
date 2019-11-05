<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['customer'] = [];

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('main/customer/index', $data);
    $this->load->view('template/footer');
  }
}
