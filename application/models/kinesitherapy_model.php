<?php
class kinesitherapy_model extends CI_Model
{
    public function new_report()
    {
        $this->db->where('date_rapport', $this->session->userdata('add_date'));
        $q = $this->db->get('rapport');
        if ($q->num_rows() == 0) {
            return $this->db->set('date_rapport', $this->session->userdata('add_date'))
                            ->insert('rapport');
        }
    }

    public function fetch_data1(
      $nc5m,
        $nc5f,
        $nc19f,
        $nc19m,
      $nc20m,
        $nc20f,
      $oc5m,
        $oc5f,
        $oc19f,
        $oc19m,
      $oc20m,
        $oc20f,
      $insured,
        $nc_non_paying,
        $nc_indigent,
      $other_levels,
        $counter_received,
      $nc_catch,
        $nc,
        $international,
        $num_rapport
    ) {
        return $this->db->set(array(
      'nc5m' => $nc5m,
      'nc5f' => $nc5f,
      'nc19m' => $nc19m,
      'nc19f' => $nc19f,
      'nc20m' => $nc20m,
      'nc20f' => $nc20f,

      'oc5m' => $oc5m,
      'oc5f' => $oc5f,
      'oc19m' => $oc19m,
      'oc19f' => $oc19f,
      'oc20m' => $oc20m,
      'oc20f' => $oc20f,

      'insured' => $insured,
      'nc_non_paying' => $nc_non_paying,
      'nc_indigent' => $nc_indigent,

      'other_levels' => $other_levels,
      'counter_received' => $counter_received,

      'nc_catch' => $nc_catch,
      'nc' => $nc,
      'international' => $international,

      'num_rapport' => $num_rapport,
      'num_user' => $this->session->userdata('num_user')
    ))
            ->set('date_consultation_abcde', $this->session->userdata('add_date'))
            ->insert('Consultation_abcde');
    }

    public function fetch_data2(
      $physical_therapy,
      $audiology,
      $speech_therapy,
      $physical_therapy_hos,
      $audiology_hos,
      $speech_therapy_hos,
      $num_rapport
    ) {
        return $this->db->set(array(
          'physical_therapy' => $physical_therapy,
          'audiology' => $audiology,
          'speech_therapy' => $speech_therapy,
          'physical_therapy_hos' => $physical_therapy_hos,
          'audiology_hos' => $audiology_hos,
          'speech_therapy_hos' => $speech_therapy_hos,

      'num_rapport' => $num_rapport
    ))
            ->set('date_physiotherapy', $this->session->userdata('add_date'))
            ->insert('Physiotherapy');
    }

    public function show_table1()
    {
        return $this->db->where('date_consultation_abcde', $this->session->userdata('update_date'))
                        ->where('num_user', $this->session->userdata('num_user'))
                        ->get('Consultation_abcde')
                        ->row();
    }

    public function show_table2()
    {
        return $this->db->where('date_physiotherapy', $this->session->userdata('update_date'))
                        ->get('Physiotherapy')
                        ->row();
    }

    public function num_rapport()
    {
        return $this->db->where('date_rapport', $this->session->userdata('add_date'))
                      ->get('rapport')
                      ->row();
    }

    public function update_data1(
      $nc5m,
        $nc5f,
        $nc19f,
        $nc19m,
      $nc20m,
        $nc20f,
      $oc5m,
        $oc5f,
        $oc19f,
        $oc19m,
      $oc20m,
        $oc20f,
      $insured,
        $nc_non_paying,
        $nc_indigent,
      $other_levels,
        $counter_received,
      $nc_catch,
        $nc,
        $international
    ) {
        $this->db->set('nc5m', $nc5m);
        $this->db->set('nc5f', $nc5f);
        $this->db->set('nc19m', $nc19m);
        $this->db->set('nc19f', $nc19f);
        $this->db->set('nc20m', $nc20m);
        $this->db->set('nc20f', $nc20f);

        $this->db->set('oc5m', $oc5m);
        $this->db->set('oc5f', $oc5f);
        $this->db->set('oc19m', $oc19m);
        $this->db->set('oc19f', $oc19f);
        $this->db->set('oc20m', $oc20m);
        $this->db->set('oc20f', $oc20f);

        $this->db->set('insured', $insured);
        $this->db->set('nc_non_paying', $nc_non_paying);
        $this->db->set('nc_indigent', $nc_indigent);

        $this->db->set('other_levels', $other_levels);
        $this->db->set('counter_received', $counter_received);

        $this->db->set('nc_catch', $nc_catch);
        $this->db->set('nc', $nc);
        $this->db->set('international', $international);

        $this->db->where('date_consultation_abcde', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Consultation_abcde');
    }

    public function update_data2(
      $physical_therapy,
      $audiology,
      $speech_therapy,
      $physical_therapy_hos,
      $audiology_hos,
      $speech_therapy_hos
    ) {
      $this->db->set('physical_therapy', $physical_therapy);
      $this->db->set('audiology', $audiology);
      $this->db->set('speech_therapy', $speech_therapy);
      $this->db->set('physical_therapy_hos', $physical_therapy_hos);
      $this->db->set('audiology_hos', $audiology_hos);
      $this->db->set('speech_therapy_hos', $speech_therapy_hos);

        $this->db->where('date_physiotherapy', $this->session->userdata('update_date'));
        return $this->db->update('Physiotherapy');
    }
}
