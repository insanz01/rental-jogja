<?php

class Transaksi_Model extends CI_Model
{

  public function tampil()
  {
    $this->db->select('transaksi.id, transaksi.kode_ref, transaksi.plat_nomor, transaksi.id_cust, transaksi.tanggal_pesan, transaksi.tanggal_kembalikan, transaksi.status, customer.nama');
    $this->db->from('transaksi');
    $this->db->join('customer', 'transaksi.id_cust = customer.id');
    return $this->db->get()->result_array();
  }

  public function tampil_satu($id)
  {
    $this->db->select('transaksi.id, transaksi.kode_ref, transaksi.plat_nomor, transaksi.id_cust, transaksi.tanggal_pesan, transaksi.tanggal_kembalikan, transaksi.status, customer.nama');
    $this->db->from('transaksi');
    $this->db->join('customer', 'transaksi.id_cust = customer.id');
    $this->db->where('transaksi.id', $id);
    return $this->db->get()->row_array();
  }

  public function tambah($data)
  {
    return $this->db->insert('transaksi', $data);
  }
}

// walau kau tau diriku masih bersamanya
