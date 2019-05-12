<?php
class operating_room_model extends CI_Model
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
        $cesarean_urg,
        $cesarean_plan,
        $gyneco_urg,
        $gyneco_plan,
        $obste_urg,
        $obste_plan,
        $laparo_preg_urg,
        $laparo_preg_plan,
        $laparo_rupt_urg,
        $laparo_rupt_plan,
        $laparo_perit_urg,
        $laparo_perit_plan,
        $laparo_myomec_urg,
        $laparo_myomec_plan,
        $vesico_plan,
        $recto_plan,
        $ureteric_plan,
        $biopsy_plan,
        $go_other_urg,
        $go_other_plan,
        $go_total,
        $total_urg,
        $total_plan,
        $major_urg,
        $major_plan,
        $minor_urg,
        $minor_plan,
        $num_rapport
    ) {
        return $this->db->set(array(
          'cesarean_urg' => $cesarean_urg,
          'cesarean_plan' => $cesarean_plan,
          'gyneco_urg' => $gyneco_urg,
          'gyneco_plan' => $gyneco_plan,
          'obste_urg' => $obste_urg,
          'obste_plan' => $obste_plan,
          'laparo_preg_urg' => $laparo_preg_urg,
          'laparo_preg_plan' => $laparo_preg_plan,
          'laparo_rupt_urg' => $laparo_rupt_urg,
          'laparo_rupt_plan' => $laparo_rupt_plan,
          'laparo_perit_urg' => $laparo_perit_urg,
          'laparo_perit_plan' => $laparo_perit_plan,
          'laparo_myomec_urg' => $laparo_myomec_urg,
          'laparo_myomec_plan' => $laparo_myomec_plan,
          'vesico_plan' => $vesico_plan,
          'recto_plan' => $recto_plan,
          'ureteric_plan' => $ureteric_plan,
          'biopsy_plan' => $biopsy_plan,
          'go_other_urg' => $go_other_urg,
          'go_other_plan' => $go_other_plan,
          'go_total' => $go_total,

          'total_urg' => $total_urg,
          'total_plan' => $total_plan,
          'major_urg' => $major_urg,
          'major_plan' => $major_plan,
          'minor_urg' => $minor_urg,
          'minor_plan' => $minor_plan,

          'num_rapport' => $num_rapport,
          'num_user' => $this->session->userdata('num_user')
        ))
            ->set('date_surgery', $this->session->userdata('add_date'))
            ->insert('Surgery');
    }

    public function fetch_data2(
        $general,
        $regional,
        $local,
        $other_type,
        $num_rapport
    ) {
        return $this->db->set(array(
            'general' => $general,
            'regional' => $regional,
            'local' => $local,
            'other_type' => $other_type,

            'num_rapport' => $num_rapport,
            'num_user' => $this->session->userdata('num_user')
        ))
              ->set('date_anesthesia', $this->session->userdata('add_date'))
              ->insert('Anesthesia');
    }

    public function show_table1()
    {
        return $this->db->where('date_surgery', $this->session->userdata('update_date'))
                        ->where('num_user', $this->session->userdata('num_user'))
                        ->get('Surgery')
                        ->row();
    }

    public function show_table2()
    {
        return $this->db->where('date_anesthesia', $this->session->userdata('update_date'))
                        ->where('num_user', $this->session->userdata('num_user'))
                        ->get('Anesthesia')
                        ->row();
    }

    public function num_rapport()
    {
        return $this->db->where('date_rapport', $this->session->userdata('add_date'))
                      ->get('rapport')
                      ->row();
    }

    public function update_data1(
      $cesarean_urg,
      $cesarean_plan,
      $gyneco_urg,
      $gyneco_plan,
      $obste_urg,
      $obste_plan,
      $laparo_preg_urg,
      $laparo_preg_plan,
      $laparo_rupt_urg,
      $laparo_rupt_plan,
      $laparo_perit_urg,
      $laparo_perit_plan,
      $laparo_myomec_urg,
      $laparo_myomec_plan,
      $vesico_plan,
      $recto_plan,
      $ureteric_plan,
      $biopsy_plan,
      $go_other_urg,
      $go_other_plan,
      $go_total,
      $total_urg,
      $total_plan,
      $major_urg,
      $major_plan,
      $minor_urg,
      $minor_plan
    ) {
        $this->db->set('cesarean_urg', $cesarean_urg);
        $this->db->set('cesarean_plan', $cesarean_plan);
        $this->db->set('gyneco_urg', $gyneco_urg);
        $this->db->set('gyneco_plan', $gyneco_plan);
        $this->db->set('obste_urg', $obste_urg);
        $this->db->set('obste_plan', $obste_plan);
        $this->db->set('laparo_preg_urg', $laparo_preg_urg);
        $this->db->set('laparo_preg_plan', $laparo_preg_plan);
        $this->db->set('laparo_rupt_urg', $laparo_rupt_urg);
        $this->db->set('laparo_rupt_plan', $laparo_rupt_plan);
        $this->db->set('laparo_perit_urg', $laparo_perit_urg);
        $this->db->set('laparo_perit_plan', $laparo_perit_plan);
        $this->db->set('laparo_myomec_urg', $laparo_myomec_urg);
        $this->db->set('laparo_myomec_plan', $laparo_myomec_plan);
        $this->db->set('vesico_plan', $vesico_plan);
        $this->db->set('recto_plan', $recto_plan);
        $this->db->set('ureteric_plan', $ureteric_plan);
        $this->db->set('biopsy_plan', $biopsy_plan);
        $this->db->set('go_other_urg', $go_other_urg);
        $this->db->set('go_other_plan', $go_other_plan);
        $this->db->set('go_total', $go_total);

        $this->db->set('total_urg', $total_urg);
        $this->db->set('total_plan', $total_plan);
        $this->db->set('major_urg', $major_urg);
        $this->db->set('major_plan', $major_plan);
        $this->db->set('minor_urg', $minor_urg);
        $this->db->set('minor_plan', $minor_plan);

        $this->db->where('date_surgery', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Surgery');
    }

    public function update_data2(
      $general,
      $regional,
      $local,
      $other_type
    ) {
        $this->db->set('general', $general);
        $this->db->set('regional', $regional);
        $this->db->set('local', $local);
        $this->db->set('other_type', $other_type);

        $this->db->where('date_anesthesia', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Anesthesia');
    }
}
