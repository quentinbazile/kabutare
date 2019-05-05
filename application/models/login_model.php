<?php

class login_model extends CI_Model
{
    public function check_login($pseudo, $mdp)
    {
        $this->db->select('*')
                ->from('user')
                ->where('login', $pseudo)
                ->where('password', $mdp);
        if ($this->db->get()->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function check_add()
    {
        $this->db->select('*')
              ->from('Gender_Based_Violence')
              ->where('date_gender_based_violence', date('Y-m-d'));
        if ($this->db->get()->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function num_user($pseudo)
    {
        return $this->db->select('num_user')
              ->from('user')
              ->where('login', $pseudo)
              ->get()
              ->row();
    }
}
