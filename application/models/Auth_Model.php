<?php

class Auth_Model extends CI_Model
{

  public function login($data)
  {
    $user = $this->db->get('user', ['username' => $data['username']])->row_array();

    if ($user['password'] == $data['password']) {
      $this->session->set_userdata('sess_user_id', $user['id']);
      return true;
    } else {
      return false;
    }
  }
}
