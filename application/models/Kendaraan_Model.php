<?php

class Kendaraan_Model extends CI_Model
{

  public function tampil()
  {
    return $this->db->get('kendaraan')->result_array();
  }

  public function tampil_satu($id)
  {
    // var_dump($id);
    return $this->db->get_where('kendaraan', array('plat_nomor' => $id))->row_array();
  }

  public function tambah($data)
  {
    return $this->db->insert('kendaraan', $data);
  }

  public function ubah($data)
  {
    $this->db->set('nama', $data['nama']);
    $this->db->set('kursi', $data['kursi']);
    $this->db->set('jenis', $data['jenis']);
    $this->db->set('harga', $data['harga']);
    $this->db->set('gambar', $data['gambar']);
    $this->db->set('url', $data['url']);
    $this->db->where('plat_nomor', $data['plat_nomor']);
    $this->db->update('kendaraan');

    return $this->db->affected_rows();
  }

  public function hapus($id)
  {
    return $this->db->delete('kendaraan', ['plat_nomor' => $id]);
  }

  public function cek_gambar($file)
  {
    return $this->db->get_where('kendaraan', ['gambar' => $file])->row_array();
  }
}

// walau kau tau diriku masih bersamanya
