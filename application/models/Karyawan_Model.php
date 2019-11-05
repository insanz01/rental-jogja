<?php

class Karyawan_Model extends CI_Model
{

  public function tampil()
  {
    return $this->db->get('karyawan')->result_array();
  }

  public function tampil_satu($id)
  {
    return $this->db->get('karyawan', ['kode' => $id])->row_array();
  }

  public function tambah($data)
  {
    return $this->db->insert('karyawan', $data);
  }

  public function ubah($data)
  {
    $this->db->set('nama', $data['nama']);
    $this->db->set('nomor', $data['nomor']);
    $this->db->set('gaji', $data['gaji']);
    $this->db->set('alamat', $data['alamat']);
    $this->db->where('kode', $data['kode']);
    $this->db->update('karyawan');

    return $this->db->affected_rows();
  }
}
