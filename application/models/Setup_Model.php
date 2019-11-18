<?php

class Setup_Model extends CI_Model
{
  public function tampil()
  {
    return $this->db->get('informasi')->row_array();
  }

  public function ubah($data)
  {
    $this->db->set('nama_perusahaan', $data['nama_perusahaan']);
    $this->db->set('nomor_hp', $data['nomor_hp']);
    $this->db->set('alamat', $data['alamat']);
    $this->db->set('logo', $data['logo']);
    $this->db->where('id', $data['id']);
    $this->db->update('informasi');

    return $this->db->rows_affected();
  }

  public function cek_gambar($file)
  {
    return $this->db->get_where('informasi', ['logo_perusahaan' => $file])->row_array();
  }
}
