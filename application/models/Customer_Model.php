<?php

class Customer_Model extends CI_Model
{

  public function tampil()
  {
    return $this->db->get('customer')->result_array();
  }

  public function tambah($data)
  {
    return $this->db->insert('customer', $data);
  }
}

// walau kau tau diriku masih bersamanya
