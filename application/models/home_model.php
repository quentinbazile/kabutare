<?php

class home_model extends CI_Model
{
    public function show_dates()
    {
        return $this->db->select('date_consultation_abcde')
              ->from('consultation_abcde')
              ->where('date_consultation_abcde >', date('Y-m-d', strtotime('-5 days')))
              ->where('date_consultation_abcde <=', date('Y-m-d'))
              ->where('num_user', $this->session->userdata('num_user'))
              ->get()
              ->result();
    }

    public function show_dates_surgery()
    {
        return $this->db->select('date_surgery')
              ->from('surgery')
              ->where('date_surgery >', date('Y-m-d', strtotime('-5 days')))
              ->where('date_surgery <=', date('Y-m-d'))
              ->where('num_user', $this->session->userdata('num_user'))
              ->get()
              ->result();
    }

    public function show_dates_im()
    {
        return $this->db->select('date_hospitalization_bcde')
              ->from('Hospitalization_BCDE')
              ->where('date_hospitalization_bcde >', date('Y-m-d', strtotime('-5 days')))
              ->where('date_hospitalization_bcde <=', date('Y-m-d'))
              ->where('num_user', $this->session->userdata('num_user'))
              ->get()
              ->result();
    }

    public function show_dates_fp() 
    {
        return $this->db->select('date_family_planning')
              ->from('family_planning')
              ->where('date_family_planning >', date('Y-m-d', strtotime('-5 days')))
              ->where('date_family_planning <=', date('Y-m-d'))
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
