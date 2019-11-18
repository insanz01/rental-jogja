<?php

class Setup extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('Setup_Model', 'setup');
  }

  public function index()
  {
    $this->form_validation->set_rules('nama_perusahaan', 'Nama', 'required');
    $this->form_validation->set_rules('nomor_hp', 'Nomor', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('moto', 'Moto', 'required');

    if ($this->form_validation->run() == FALSE) {
      $data['setup'] = $this->setup->tampil();

      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('template/topbar');
      $this->load->view('main/setup/index', $data);
      $this->load->view('template/footer');
    } else {

      $config['upload_path'] = 'informasi/';
      $config['allowed_types'] = 'jpg|jpeg|png|svg';

      $old_img_path = $this->input->post('url');

      $this->load->library('upload', $config);

      $x = [
        'nama_perusahaan' => $this->input->post('nama_perusahaan'),
        'nomor_hp' => $this->input->post('nomor_hp'),
        'alamat' => $this->input->post('alamat'),
        'moto' => $this->input->post('moto'),
      ];

      if ($this->setup->cek_gambar($_FILES['logo_perusahaan']['name'])) {
        if (!$this->upload->do_upload('logo_perusahaan')) {
          $error = array('error' => $this->upload->display_errors());

          var_dump($error);
          // $this->load->view('main/kendaraan/tambah', $error);
        } else {
          $data = array('image_metadata' => $this->upload->data());
          unlink($old_img_path);

          $x['logo_perusahaan'] = 'informasi/' . $data['image_metadata']['file_name'];

          if ($this->setup->ubah($x)) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Informasi berhasil diubah!</div>');
          } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Informasi gagal diubah!</div>');
          }
        }
      } else {
        $data = array('image_metadata' => $this->upload->data());
        unlink($old_img_path);

        $x['logo_perusahaan'] = 'informasi/' . $data['image_metadata']['file_name'];

        if ($this->setup->ubah($x)) {
          $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Informasi berhasil diubah!</div>');
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Informasi gagal diubah!</div>');
        }
      }

      redirect('setup');
    }
  }
}
