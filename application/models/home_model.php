<?php

class home_model extends CI_Model
{
    public function get_user($id)
    {
        $this->db->where('num_user', $id);
        $query = $this->db->get('user');
        return $query->row();
    }

    public function update_user($id, $userdata)
    {
        $this->db->where('num_user', $id);
        $this->db->update('user', $userdata);
    }

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

    public function show_dates_pharm()
    {
        return $this->db->select('date_pharmacy')
              ->from('Pharmacy')
              ->where('date_pharmacy >', date('Y-m-d', strtotime('-5 days')))
              ->where('date_pharmacy <=', date('Y-m-d'))
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

    public function show_dates_hr()
    {
        return $this->db->select('date_staff')
              ->from('Staff')
              ->where('date_staff >', date('Y-m-d', strtotime('-5 days')))
              ->where('date_staff <=', date('Y-m-d'))
              ->get()
              ->result();
    }

    public function show_dates_lab()
    {
        return $this->db->select('date_laboratory')
              ->from('Laboratory')
              ->where('date_laboratory >', date('Y-m-d', strtotime('-5 days')))
              ->where('date_laboratory <=', date('Y-m-d'))
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
