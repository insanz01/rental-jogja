<?php

class Transaksi_Model extends CI_Model
{

  public function tampil($choose = NULL)
  {
    if ($choose == "booked") {
      $this->db->select("*");
      $this->db->from('order');
      $this->db->where('status', 'booked');
      return $this->db->get()->result_array();
    } else if ($choose == "selesai") {
      $this->db->select("*");
      $this->db->from('order');
      $this->db->where('status', 'selesai');
      return $this->db->get()->result_array();
    } else {
      $this->db->select("*");
      $this->db->from('order');
      return $this->db->get()->result_array();
    }
  }

  public function tampil_satu($id)
  {
    $this->db->select('transaksi.id, transaksi.kode_ref, transaksi.plat_nomor, transaksi.id_cust, transaksi.tanggal_pesan, transaksi.tanggal_kembalikan, transaksi.status, customer.nama');
    $this->db->from('transaksi');
    $this->db->join('customer', 'transaksi.id_cust = customer.id');
    $this->db->where('transaksi.id', $id);
    return $this->db->get()->row_array();
  }

  public function hapus($id)
  {
    return $this->db->delete('order', ['id' => $id]);
  }

  public function tambah($data)
  {
    return $this->db->insert('transaksi', $data);
  }

  public function ubah_transaksi($kode)
  {
    $res = $this->db->get_where('transaksi', ['kode_ref' => $kode])->row_array();

    if ($res['status'] == 'booked') {
      $this->db->set('status', 'digunakan');
      $this->db->where('kode_ref', $kode);
      $this->db->update('transaksi');

      return $this->db->rows_affected();
    } else if ($res['status'] == 'digunakan') {
      $this->db->set('status', 'selesai');
      $this->db->where('kode_ref', $kode);
      $this->db->update('transaksi');

      return $this->db->rows_affected();
    } else {
      return false;
    }
  }
}

// walau kau tau diriku masih bersamanya
