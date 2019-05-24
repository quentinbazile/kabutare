<?php
class comme_je_veux_model extends CI_Model
{
  public function comme_tu_veux($date) {
    $this->db->select("SUM(nc5m) as nc5m_total, SUM(nc5f) as nc5f_total, SUM(nc19m) as nc19m_total,
      SUM(nc19f) as nc19f_total, SUM(nc20m) as nc20m_total, SUM(nc20f) as nc20f_total, SUM(oc5m) as oc5m_total,
       SUM(oc5f) as oc5f_total, SUM(oc19m) as oc19m_total,
        SUM(oc19f) as oc19f_total, SUM(oc20m) as oc20m_total, SUM(oc20f) as oc20f_total,
         SUM(insured) as insured_total, SUM(nc_non_paying) as nc_non_paying_total, SUM(nc_indigent) as nc_indigent_total");
   $this->db->from('consultation_abcde');
   $this->db->where('date_consultation_abcde', $date);
   return $this->db->get()->row();
  }
}
