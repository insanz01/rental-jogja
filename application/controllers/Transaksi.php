<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('Transaksi_Model', 'transaksi');
  }

  public function index()
  {
    $data['transaksi'] = $this->transaksi->tampil();

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('main/transaksi/index', $data);
    $this->load->view('template/footer');
  }
}
