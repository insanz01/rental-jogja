<?php

class Transaksi_Model extends CI_Model
{

  public function tampil()
  {
    return $this->db->get('transaksi')->result_array();
  }

  public function tambah($data)
  {
    return $this->db->insert('transaksi', $data);
  }
}

// walau kau tau diriku masih bersamanya
