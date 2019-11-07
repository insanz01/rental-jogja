<?php

class Web_Model extends CI_Model
{
  public function tampil($jumlah = 0)
  {
    if ($jumlah) {
      $this->db->select('*');
      $this->db->from('kendaraan');
      $this->db->where('status', 'tersedia');
      $this->db->limit($jumlah);
      return $this->db->get()->result_array();
    } else {
      $this->db->select('*');
      $this->db->from('kendaraan');
      $this->db->where('status', 'tersedia');
      return $this->db->get()->result_array();
      // return $this->db->get('kendaraan')->result_array();
    }
  }

  public function tampil_promo()
  {
    return $this->db->get('kendaraan', 3)->result_array();
  }

  public function dapatkan_url($id)
  {
    return $this->db->get_where('kendaraan', ['plat_nomor' => $id])->row_array();
  }

  public function simpan_transaksi($data)
  {
    return $this->db->insert('transaksi', $data);
  }

  public function simpan_customer($data)
  {
    return $this->db->insert('customer', $data);
  }

  public function ambil_customer_id_terakhir()
  {
    $query = "SELECT id FROM customer ORDER BY id DESC LIMIT 1";
    return $this->db->query($query)->row_array();
  }

  public function check_pesanan($data)
  {
    $valid = $this->db->get_where('transaksi', ['kode_ref' => $data['kode_ref']])->row_array();
    $user = $this->db->get_where('customer', ['id' => $valid['id_cust']])->row_array();

    if ($user['nohp'] == $data['nohp']) {
      $this->session->set_userdata('sess_pesanan_user_id', $user['id']);
      $this->session->set_userdata('sess_pesanan_kode_ref', $valid['kode_ref']);
      $this->session->set_userdata('sess_pesanan_id', $valid['id']);
      return true;
    } else {
      return false;
    }
  }

  public function cek_ketersediaan($plat, $tanggal, $durasi)
  {
    $tgl = date_create($tanggal);

    if ($durasi == 1) {
      date_add($tgl, date_interval_create_from_date_string("1 day"));
    } else {
      date_add($tgl, date_interval_create_from_date_string($durasi . " days"));
    }

    $tanggal_max = date_format($tgl, 'Y-m-d');

    $query = "SELECT * FROM transaksi WHERE plat_nomor = '$plat' and ((tanggal_pesan between '$tanggal' and '$tanggal_max') or (tanggal_kembalikan between '$tanggal' and '$tanggal_max')) and `status` = 'booked'";

    return $this->db->query($query)->result_array();
  }

  public function lihat_detail_pesanan($id)
  {
    $this->db->select('transaksi.id, transaksi.kode_ref, transaksi.plat_nomor, transaksi.id_cust, transaksi.tanggal_pesan, transaksi.tanggal_kembalikan, transaksi.status, customer.nama');
    $this->db->from('transaksi');
    $this->db->join('customer', 'transaksi.id_cust = customer.id');
    $this->db->where('transaksi.id', $id);
    return $this->db->get()->row_array();
  }
}
