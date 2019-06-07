<?php
class loginpws_model extends CI_Model
{
  public function pws()
  {
      return $this->db->get('user');
  }

}
