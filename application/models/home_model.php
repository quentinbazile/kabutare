<?php

class home_model extends CI_Model
{
    public function show_dates()
    {
        return $this->db->select('date_rapport')
              ->from('rapport')
              ->where('date_rapport >', date('Y-m-d', strtotime('-5 days')))
              ->where('date_rapport <=', date('Y-m-d'))
              ->get()
              ->result();
    }

    public function check_service($service)
    {
        $this->db->select('*')
              ->from('user')
              ->where('num_user', $this->session->userdata('num_user'))
              ->where('service', $service);
        if ($this->db->get()->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
