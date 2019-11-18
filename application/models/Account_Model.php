<?php

class Account_Model extends CI_Model
{
  public function tampil()
  {
    return $this->db->get('user')->result_array();
  }

  public function tambah($data)
  {
    return $this->db->insert('user', $data);
  }

  public function ubah($old, $new, $id)
  {
    $user = $this->db->get_where('user', ['password' => $old])->row_array();

    if ($user['username']) {
      $this->db->set('password', $new);
      $this->db->where('id', $id);
      $this->db->update('user');

      return $this->db->rows_affected();
    } else {
      return false;
    }
  }

  public function hapus($id)
  {
    return $this->db->delete('user', ['id' => $id]);
  }
}
