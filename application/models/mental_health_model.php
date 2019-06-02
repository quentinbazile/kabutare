<?php
class mental_health_model extends CI_Model
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
      $follow_up,
        $higher_level,
        $hospitalized,
      $anxiety_nc19m,
        $anxiety_nc19f,
        $anxiety_nc39m,
        $anxiety_nc39f,
        $anxiety_nc40m,
        $anxiety_nc40f,
      $anxiety_oc19m,
        $anxiety_oc19f,
        $anxiety_oc39m,
        $anxiety_oc39f,
        $anxiety_oc40m,
        $anxiety_oc40f,
      $stress_nc19m,
        $stress_nc19f,
        $stress_nc39m,
        $stress_nc39f,
        $stress_nc40m,
        $stress_nc40f,
      $stress_oc19m,
        $stress_oc19f,
        $stress_oc39m,
        $stress_oc39f,
        $stress_oc40m,
        $stress_oc40f,
      $schizo_nc19m,
        $schizo_nc19f,
        $schizo_nc39m,
        $schizo_nc39f,
        $schizo_nc40m,
        $schizo_nc40f,
      $schizo_oc19m,
        $schizo_oc19f,
        $schizo_oc39m,
        $schizo_oc39f,
        $schizo_oc40m,
        $schizo_oc40f,
      $soma_nc19m,
        $soma_nc19f,
        $soma_nc39m,
        $soma_nc39f,
        $soma_nc40m,
        $soma_nc40f,
      $soma_oc19m,
        $soma_oc19f,
        $soma_oc39m,
        $soma_oc39f,
        $soma_oc40m,
        $soma_oc40f,
      $child_nc19m,
        $child_nc19f,
        $child_nc39m,
        $child_nc39f,
        $child_nc40m,
        $child_nc40f,
      $child_oc19m,
        $child_oc19f,
        $child_oc39m,
        $child_oc39f,
        $child_oc40m,
        $child_oc40f,
      $alcohol_nc19m,
        $alcohol_nc19f,
        $alcohol_nc39m,
        $alcohol_nc39f,
        $alcohol_nc40m,
        $alcohol_nc40f,
      $alcohol_oc19m,
        $alcohol_oc19f,
        $alcohol_oc39m,
        $alcohol_oc39f,
        $alcohol_oc40m,
        $alcohol_oc40f,
      $drugs_nc19m,
        $drugs_nc19f,
        $drugs_nc39m,
        $drugs_nc39f,
        $drugs_nc40m,
        $drugs_nc40f,
      $drugs_oc19m,
        $drugs_oc19f,
        $drugs_oc39m,
        $drugs_oc39f,
        $drugs_oc40m,
        $drugs_oc40f,
      $dep_nc19m,
        $dep_nc19f,
        $dep_nc39m,
        $dep_nc39f,
        $dep_nc40m,
        $dep_nc40f,
      $dep_oc19m,
        $dep_oc19f,
        $dep_oc39m,
        $dep_oc39f,
        $dep_oc40m,
        $dep_oc40f,
      $suicid_att_nc19m,
        $suicid_att_nc19f,
        $suicid_att_nc39m,
        $suicid_att_nc39f,
        $suicid_att_nc40m,
        $suicid_att_nc40f,
      $suicid_att_oc19m,
        $suicid_att_oc19f,
        $suicid_att_oc39m,
        $suicid_att_oc39f,
        $suicid_att_oc40m,
        $suicid_att_oc40f,
      $suicid_d_nc19m,
        $suicid_d_nc19f,
        $suicid_d_nc39m,
        $suicid_d_nc39f,
        $suicid_d_nc40m,
        $suicid_d_nc40f,
      $suicid_d_oc19m,
        $suicid_d_oc19f,
        $suicid_d_oc39m,
        $suicid_d_oc39f,
        $suicid_d_oc40m,
        $suicid_d_oc40f,
      $maniac_nc19m,
        $maniac_nc19f,
        $maniac_nc39m,
        $maniac_nc39f,
        $maniac_nc40m,
        $maniac_nc40f,
      $maniac_oc19m,
        $maniac_oc19f,
        $maniac_oc39m,
        $maniac_oc39f,
        $maniac_oc40m,
        $maniac_oc40f,
      $bipolar_nc19m,
        $bipolar_nc19f,
        $bipolar_nc39m,
        $bipolar_nc39f,
        $bipolar_nc40m,
        $bipolar_nc40f,
      $bipolar_oc19m,
        $bipolar_oc19f,
        $bipolar_oc39m,
        $bipolar_oc39f,
        $bipolar_oc40m,
        $bipolar_oc40f,
      $other_psy_nc19m,
        $other_psy_nc19f,
        $other_psy_nc39m,
        $other_psy_nc39f,
        $other_psy_nc40m,
        $other_psy_nc40f,
      $other_psy_oc19m,
        $other_psy_oc19f,
        $other_psy_oc39m,
        $other_psy_oc39f,
        $other_psy_oc40m,
        $other_psy_oc40f,
      $epilepsy_nc19m,
        $epilepsy_nc19f,
        $epilepsy_nc39m,
        $epilepsy_nc39f,
        $epilepsy_nc40m,
        $epilepsy_nc40f,
      $epilepsy_oc19m,
        $epilepsy_oc19f,
        $epilepsy_oc39m,
        $epilepsy_oc39f,
        $epilepsy_oc40m,
        $epilepsy_oc40f,
      $other_neuro_nc19m,
        $other_neuro_nc19f,
        $other_neuro_nc39m,
        $other_neuro_nc39f,
        $other_neuro_nc40m,
        $other_neuro_nc40f,
      $other_neuro_oc19m,
        $other_neuro_oc19f,
        $other_neuro_oc39m,
        $other_neuro_oc39f,
        $other_neuro_oc40m,
        $other_neuro_oc40f,
        $num_rapport
    ) {
        return $this->db->set(array(
          'follow_up' => $follow_up,
          'higher_level' => $higher_level,
          'hospitalized' => $hospitalized,

      'anxiety_nc19m' => $anxiety_nc19m,
      'anxiety_nc19f' => $anxiety_nc19f,
      'anxiety_nc39m' => $anxiety_nc39m,
      'anxiety_nc39f' => $anxiety_nc39f,
      'anxiety_nc40m' => $anxiety_nc40m,
      'anxiety_nc40f' => $anxiety_nc40f,

      'anxiety_oc19m' => $anxiety_oc19m,
      'anxiety_oc19f' => $anxiety_oc19f,
      'anxiety_oc39m' => $anxiety_oc39m,
      'anxiety_oc39f' => $anxiety_oc39f,
      'anxiety_oc40m' => $anxiety_oc40m,
      'anxiety_oc40f' => $anxiety_oc40f,

      'stress_nc19m' => $stress_nc19m,
      'stress_nc19f' => $stress_nc19f,
      'stress_nc39m' => $stress_nc39m,
      'stress_nc39f' => $stress_nc39f,
      'stress_nc40m' => $stress_nc40m,
      'stress_nc40f' => $stress_nc40f,

      'stress_oc19m' => $stress_oc19m,
      'stress_oc19f' => $stress_oc19f,
      'stress_oc39m' => $stress_oc39m,
      'stress_oc39f' => $stress_oc39f,
      'stress_oc40m' => $stress_oc40m,
      'stress_oc40f' => $stress_oc40f,

      'schizo_nc19m' => $schizo_nc19m,
      'schizo_nc19f' => $schizo_nc19f,
      'schizo_nc39m' => $schizo_nc39m,
      'schizo_nc39f' => $schizo_nc39f,
      'schizo_nc40m' => $schizo_nc40m,
      'schizo_nc40f' => $schizo_nc40f,

      'schizo_oc19m' => $schizo_oc19m,
      'schizo_oc19f' => $schizo_oc19f,
      'schizo_oc39m' => $schizo_oc39m,
      'schizo_oc39f' => $schizo_oc39f,
      'schizo_oc40m' => $schizo_oc40m,
      'schizo_oc40f' => $schizo_oc40f,

      'soma_nc19m' => $soma_nc19m,
      'soma_nc19f' => $soma_nc19f,
      'soma_nc39m' => $soma_nc39m,
      'soma_nc39f' => $soma_nc39f,
      'soma_nc40m' => $soma_nc40m,
      'soma_nc40f' => $soma_nc40f,

      'soma_oc19m' => $soma_oc19m,
      'soma_oc19f' => $soma_oc19f,
      'soma_oc39m' => $soma_oc39m,
      'soma_oc39f' => $soma_oc39f,
      'soma_oc40m' => $soma_oc40m,
      'soma_oc40f' => $soma_oc40f,

      'child_nc19m' => $child_nc19m,
      'child_nc19f' => $child_nc19f,
      'child_nc39m' => $child_nc39m,
      'child_nc39f' => $child_nc39f,
      'child_nc40m' => $child_nc40m,
      'child_nc40f' => $child_nc40f,

      'child_oc19m' => $child_oc19m,
      'child_oc19f' => $child_oc19f,
      'child_oc39m' => $child_oc39m,
      'child_oc39f' => $child_oc39f,
      'child_oc40m' => $child_oc40m,
      'child_oc40f' => $child_oc40f,

      'alcohol_nc19m' => $alcohol_nc19m,
      'alcohol_nc19f' => $alcohol_nc19f,
      'alcohol_nc39m' => $alcohol_nc39m,
      'alcohol_nc39f' => $alcohol_nc39f,
      'alcohol_nc40m' => $alcohol_nc40m,
      'alcohol_nc40f' => $alcohol_nc40f,

      'alcohol_oc19m' => $alcohol_oc19m,
      'alcohol_oc19f' => $alcohol_oc19f,
      'alcohol_oc39m' => $alcohol_oc39m,
      'alcohol_oc39f' => $alcohol_oc39f,
      'alcohol_oc40m' => $alcohol_oc40m,
      'alcohol_oc40f' => $alcohol_oc40f,

      'drugs_nc19m' => $drugs_nc19m,
      'drugs_nc19f' => $drugs_nc19f,
      'drugs_nc39m' => $drugs_nc39m,
      'drugs_nc39f' => $drugs_nc39f,
      'drugs_nc40m' => $drugs_nc40m,
      'drugs_nc40f' => $drugs_nc40f,

      'drugs_oc19m' => $drugs_oc19m,
      'drugs_oc19f' => $drugs_oc19f,
      'drugs_oc39m' => $drugs_oc39m,
      'drugs_oc39f' => $drugs_oc39f,
      'drugs_oc40m' => $drugs_oc40m,
      'drugs_oc40f' => $drugs_oc40f,

      'dep_nc19m' => $dep_nc19m,
      'dep_nc19f' => $dep_nc19f,
      'dep_nc39m' => $dep_nc39m,
      'dep_nc39f' => $dep_nc39f,
      'dep_nc40m' => $dep_nc40m,
      'dep_nc40f' => $dep_nc40f,

      'dep_oc19m' => $dep_oc19m,
      'dep_oc19f' => $dep_oc19f,
      'dep_oc39m' => $dep_oc39m,
      'dep_oc39f' => $dep_oc39f,
      'dep_oc40m' => $dep_oc40m,
      'dep_oc40f' => $dep_oc40f,

      'suicid_att_nc19m' => $suicid_att_nc19m,
      'suicid_att_nc19f' => $suicid_att_nc19f,
      'suicid_att_nc39m' => $suicid_att_nc39m,
      'suicid_att_nc39f' => $suicid_att_nc39f,
      'suicid_att_nc40m' => $suicid_att_nc40m,
      'suicid_att_nc40f' => $suicid_att_nc40f,

      'suicid_att_oc19m' => $suicid_att_oc19m,
      'suicid_att_oc19f' => $suicid_att_oc19f,
      'suicid_att_oc39m' => $suicid_att_oc39m,
      'suicid_att_oc39f' => $suicid_att_oc39f,
      'suicid_att_oc40m' => $suicid_att_oc40m,
      'suicid_att_oc40f' => $suicid_att_oc40f,

      'suicid_d_nc19m' => $suicid_d_nc19m,
      'suicid_d_nc19f' => $suicid_d_nc19f,
      'suicid_d_nc39m' => $suicid_d_nc39m,
      'suicid_d_nc39f' => $suicid_d_nc39f,
      'suicid_d_nc40m' => $suicid_d_nc40m,
      'suicid_d_nc40f' => $suicid_d_nc40f,

      'suicid_d_oc19m' => $suicid_d_oc19m,
      'suicid_d_oc19f' => $suicid_d_oc19f,
      'suicid_d_oc39m' => $suicid_d_oc39m,
      'suicid_d_oc39f' => $suicid_d_oc39f,
      'suicid_d_oc40m' => $suicid_d_oc40m,
      'suicid_d_oc40f' => $suicid_d_oc40f,

      'maniac_nc19m' => $maniac_nc19m,
      'maniac_nc19f' => $maniac_nc19f,
      'maniac_nc39m' => $maniac_nc39m,
      'maniac_nc39f' => $maniac_nc39f,
      'maniac_nc40m' => $maniac_nc40m,
      'maniac_nc40f' => $maniac_nc40f,

      'maniac_oc19m' => $maniac_oc19m,
      'maniac_oc19f' => $maniac_oc19f,
      'maniac_oc39m' => $maniac_oc39m,
      'maniac_oc39f' => $maniac_oc39f,
      'maniac_oc40m' => $maniac_oc40m,
      'maniac_oc40f' => $maniac_oc40f,

      'bipolar_nc19m' => $bipolar_nc19m,
      'bipolar_nc19f' => $bipolar_nc19f,
      'bipolar_nc39m' => $bipolar_nc39m,
      'bipolar_nc39f' => $bipolar_nc39f,
      'bipolar_nc40m' => $bipolar_nc40m,
      'bipolar_nc40f' => $bipolar_nc40f,

      'bipolar_oc19m' => $bipolar_oc19m,
      'bipolar_oc19f' => $bipolar_oc19f,
      'bipolar_oc39m' => $bipolar_oc39m,
      'bipolar_oc39f' => $bipolar_oc39f,
      'bipolar_oc40m' => $bipolar_oc40m,
      'bipolar_oc40f' => $bipolar_oc40f,

      'other_psy_nc19m' => $other_psy_nc19m,
      'other_psy_nc19f' => $other_psy_nc19f,
      'other_psy_nc39m' => $other_psy_nc39m,
      'other_psy_nc39f' => $other_psy_nc39f,
      'other_psy_nc40m' => $other_psy_nc40m,
      'other_psy_nc40f' => $other_psy_nc40f,

      'other_psy_oc19m' => $other_psy_oc19m,
      'other_psy_oc19f' => $other_psy_oc19f,
      'other_psy_oc39m' => $other_psy_oc39m,
      'other_psy_oc39f' => $other_psy_oc39f,
      'other_psy_oc40m' => $other_psy_oc40m,
      'other_psy_oc40f' => $other_psy_oc40f,

      'epilepsy_nc19m' => $epilepsy_nc19m,
      'epilepsy_nc19f' => $epilepsy_nc19f,
      'epilepsy_nc39m' => $epilepsy_nc39m,
      'epilepsy_nc39f' => $epilepsy_nc39f,
      'epilepsy_nc40m' => $epilepsy_nc40m,
      'epilepsy_nc40f' => $epilepsy_nc40f,

      'epilepsy_oc19m' => $epilepsy_oc19m,
      'epilepsy_oc19f' => $epilepsy_oc19f,
      'epilepsy_oc39m' => $epilepsy_oc39m,
      'epilepsy_oc39f' => $epilepsy_oc39f,
      'epilepsy_oc40m' => $epilepsy_oc40m,
      'epilepsy_oc40f' => $epilepsy_oc40f,

      'other_neuro_nc19m' => $other_neuro_nc19m,
      'other_neuro_nc19f' => $other_neuro_nc19f,
      'other_neuro_nc39m' => $other_neuro_nc39m,
      'other_neuro_nc39f' => $other_neuro_nc39f,
      'other_neuro_nc40m' => $other_neuro_nc40m,
      'other_neuro_nc40f' => $other_neuro_nc40f,

      'other_neuro_oc19m' => $other_neuro_oc19m,
      'other_neuro_oc19f' => $other_neuro_oc19f,
      'other_neuro_oc39m' => $other_neuro_oc39m,
      'other_neuro_oc39f' => $other_neuro_oc39f,
      'other_neuro_oc40m' => $other_neuro_oc40m,
      'other_neuro_oc40f' => $other_neuro_oc40f,
      'num_user' => $this->session->userdata('num_user'),
      'num_rapport' => $num_rapport
    ))
            ->set('date_mental_health', $this->session->userdata('add_date'))
            ->insert('Mental_Health');

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
        return $this->db->where('date_mental_health', $this->session->userdata('update_date'))
                        ->where('num_user', $this->session->userdata('num_user'))
                        ->get('Mental_Health')
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
      $follow_up,
        $higher_level,
        $hospitalized,
      $anxiety_nc19m,
        $anxiety_nc19f,
        $anxiety_nc39m,
        $anxiety_nc39f,
        $anxiety_nc40m,
        $anxiety_nc40f,
      $anxiety_oc19m,
        $anxiety_oc19f,
        $anxiety_oc39m,
        $anxiety_oc39f,
        $anxiety_oc40m,
        $anxiety_oc40f,
      $stress_nc19m,
        $stress_nc19f,
        $stress_nc39m,
        $stress_nc39f,
        $stress_nc40m,
        $stress_nc40f,
      $stress_oc19m,
        $stress_oc19f,
        $stress_oc39m,
        $stress_oc39f,
        $stress_oc40m,
        $stress_oc40f,
      $schizo_nc19m,
        $schizo_nc19f,
        $schizo_nc39m,
        $schizo_nc39f,
        $schizo_nc40m,
        $schizo_nc40f,
      $schizo_oc19m,
        $schizo_oc19f,
        $schizo_oc39m,
        $schizo_oc39f,
        $schizo_oc40m,
        $schizo_oc40f,
      $soma_nc19m,
        $soma_nc19f,
        $soma_nc39m,
        $soma_nc39f,
        $soma_nc40m,
        $soma_nc40f,
      $soma_oc19m,
        $soma_oc19f,
        $soma_oc39m,
        $soma_oc39f,
        $soma_oc40m,
        $soma_oc40f,
      $child_nc19m,
        $child_nc19f,
        $child_nc39m,
        $child_nc39f,
        $child_nc40m,
        $child_nc40f,
      $child_oc19m,
        $child_oc19f,
        $child_oc39m,
        $child_oc39f,
        $child_oc40m,
        $child_oc40f,
      $alcohol_nc19m,
        $alcohol_nc19f,
        $alcohol_nc39m,
        $alcohol_nc39f,
        $alcohol_nc40m,
        $alcohol_nc40f,
      $alcohol_oc19m,
        $alcohol_oc19f,
        $alcohol_oc39m,
        $alcohol_oc39f,
        $alcohol_oc40m,
        $alcohol_oc40f,
      $drugs_nc19m,
        $drugs_nc19f,
        $drugs_nc39m,
        $drugs_nc39f,
        $drugs_nc40m,
        $drugs_nc40f,
      $drugs_oc19m,
        $drugs_oc19f,
        $drugs_oc39m,
        $drugs_oc39f,
        $drugs_oc40m,
        $drugs_oc40f,
      $dep_nc19m,
        $dep_nc19f,
        $dep_nc39m,
        $dep_nc39f,
        $dep_nc40m,
        $dep_nc40f,
      $dep_oc19m,
        $dep_oc19f,
        $dep_oc39m,
        $dep_oc39f,
        $dep_oc40m,
        $dep_oc40f,
      $suicid_att_nc19m,
        $suicid_att_nc19f,
        $suicid_att_nc39m,
        $suicid_att_nc39f,
        $suicid_att_nc40m,
        $suicid_att_nc40f,
      $suicid_att_oc19m,
        $suicid_att_oc19f,
        $suicid_att_oc39m,
        $suicid_att_oc39f,
        $suicid_att_oc40m,
        $suicid_att_oc40f,
      $suicid_d_nc19m,
        $suicid_d_nc19f,
        $suicid_d_nc39m,
        $suicid_d_nc39f,
        $suicid_d_nc40m,
        $suicid_d_nc40f,
      $suicid_d_oc19m,
        $suicid_d_oc19f,
        $suicid_d_oc39m,
        $suicid_d_oc39f,
        $suicid_d_oc40m,
        $suicid_d_oc40f,
      $maniac_nc19m,
        $maniac_nc19f,
        $maniac_nc39m,
        $maniac_nc39f,
        $maniac_nc40m,
        $maniac_nc40f,
      $maniac_oc19m,
        $maniac_oc19f,
        $maniac_oc39m,
        $maniac_oc39f,
        $maniac_oc40m,
        $maniac_oc40f,
      $bipolar_nc19m,
        $bipolar_nc19f,
        $bipolar_nc39m,
        $bipolar_nc39f,
        $bipolar_nc40m,
        $bipolar_nc40f,
      $bipolar_oc19m,
        $bipolar_oc19f,
        $bipolar_oc39m,
        $bipolar_oc39f,
        $bipolar_oc40m,
        $bipolar_oc40f,
      $other_psy_nc19m,
        $other_psy_nc19f,
        $other_psy_nc39m,
        $other_psy_nc39f,
        $other_psy_nc40m,
        $other_psy_nc40f,
      $other_psy_oc19m,
        $other_psy_oc19f,
        $other_psy_oc39m,
        $other_psy_oc39f,
        $other_psy_oc40m,
        $other_psy_oc40f,
      $epilepsy_nc19m,
        $epilepsy_nc19f,
        $epilepsy_nc39m,
        $epilepsy_nc39f,
        $epilepsy_nc40m,
        $epilepsy_nc40f,
      $epilepsy_oc19m,
        $epilepsy_oc19f,
        $epilepsy_oc39m,
        $epilepsy_oc39f,
        $epilepsy_oc40m,
        $epilepsy_oc40f,
      $other_neuro_nc19m,
        $other_neuro_nc19f,
        $other_neuro_nc39m,
        $other_neuro_nc39f,
        $other_neuro_nc40m,
        $other_neuro_nc40f,
      $other_neuro_oc19m,
        $other_neuro_oc19f,
        $other_neuro_oc39m,
        $other_neuro_oc39f,
        $other_neuro_oc40m,
        $other_neuro_oc40f
    ) {
        $this->db->set('follow_up', $follow_up);
        $this->db->set('higher_level', $higher_level);
        $this->db->set('hospitalized', $hospitalized);

    $this->db->set('anxiety_nc19m', $anxiety_nc19m);
    $this->db->set('anxiety_nc19f', $anxiety_nc19f);
    $this->db->set('anxiety_nc39m', $anxiety_nc39m);
    $this->db->set('anxiety_nc39f', $anxiety_nc39f);
    $this->db->set('anxiety_nc40m', $anxiety_nc40m);
    $this->db->set('anxiety_nc40f', $anxiety_nc40f);

    $this->db->set('anxiety_oc19m', $anxiety_oc19m);
    $this->db->set('anxiety_oc19f', $anxiety_oc19f);
    $this->db->set('anxiety_oc39m', $anxiety_oc39m);
    $this->db->set('anxiety_oc39f', $anxiety_oc39f);
    $this->db->set('anxiety_oc40m', $anxiety_oc40m);
    $this->db->set('anxiety_oc40f', $anxiety_oc40f);

    $this->db->set('stress_nc19m', $stress_nc19m);
    $this->db->set('stress_nc19f', $stress_nc19f);
    $this->db->set('stress_nc39m', $stress_nc39m);
    $this->db->set('stress_nc39f', $stress_nc39f);
    $this->db->set('stress_nc40m', $stress_nc40m);
    $this->db->set('stress_nc40f', $stress_nc40f);

    $this->db->set('stress_oc19m', $stress_oc19m);
    $this->db->set('stress_oc19f', $stress_oc19f);
    $this->db->set('stress_oc39m', $stress_oc39m);
    $this->db->set('stress_oc39f', $stress_oc39f);
    $this->db->set('stress_oc40m', $stress_oc40m);
    $this->db->set('stress_oc40f', $stress_oc40f);

    $this->db->set('schizo_nc19m', $schizo_nc19m);
    $this->db->set('schizo_nc19f', $schizo_nc19f);
    $this->db->set('schizo_nc39m', $schizo_nc39m);
    $this->db->set('schizo_nc39f', $schizo_nc39f);
    $this->db->set('schizo_nc40m', $schizo_nc40m);
    $this->db->set('schizo_nc40f', $schizo_nc40f);

    $this->db->set('schizo_oc19m', $schizo_oc19m);
    $this->db->set('schizo_oc19f', $schizo_oc19f);
    $this->db->set('schizo_oc39m', $schizo_oc39m);
    $this->db->set('schizo_oc39f', $schizo_oc39f);
    $this->db->set('schizo_oc40m', $schizo_oc40m);
    $this->db->set('schizo_oc40f', $schizo_oc40f);

    $this->db->set('soma_nc19m', $soma_nc19m);
    $this->db->set('soma_nc19f', $soma_nc19f);
    $this->db->set('soma_nc39m', $soma_nc39m);
    $this->db->set('soma_nc39f', $soma_nc39f);
    $this->db->set('soma_nc40m', $soma_nc40m);
    $this->db->set('soma_nc40f', $soma_nc40f);

    $this->db->set('soma_oc19m', $soma_oc19m);
    $this->db->set('soma_oc19f', $soma_oc19f);
    $this->db->set('soma_oc39m', $soma_oc39m);
    $this->db->set('soma_oc39f', $soma_oc39f);
    $this->db->set('soma_oc40m', $soma_oc40m);
    $this->db->set('soma_oc40f', $soma_oc40f);

    $this->db->set('child_nc19m', $child_nc19m);
    $this->db->set('child_nc19f', $child_nc19f);
    $this->db->set('child_nc39m', $child_nc39m);
    $this->db->set('child_nc39f', $child_nc39f);
    $this->db->set('child_nc40m', $child_nc40m);
    $this->db->set('child_nc40f', $child_nc40f);

    $this->db->set('child_oc19m', $child_oc19m);
    $this->db->set('child_oc19f', $child_oc19f);
    $this->db->set('child_oc39m', $child_oc39m);
    $this->db->set('child_oc39f', $child_oc39f);
    $this->db->set('child_oc40m', $child_oc40m);
    $this->db->set('child_oc40f', $child_oc40f);

    $this->db->set('alcohol_nc19m', $alcohol_nc19m);
    $this->db->set('alcohol_nc19f', $alcohol_nc19f);
    $this->db->set('alcohol_nc39m', $alcohol_nc39m);
    $this->db->set('alcohol_nc39f', $alcohol_nc39f);
    $this->db->set('alcohol_nc40m', $alcohol_nc40m);
    $this->db->set('alcohol_nc40f', $alcohol_nc40f);

    $this->db->set('alcohol_oc19m', $alcohol_oc19m);
    $this->db->set('alcohol_oc19f', $alcohol_oc19f);
    $this->db->set('alcohol_oc39m', $alcohol_oc39m);
    $this->db->set('alcohol_oc39f', $alcohol_oc39f);
    $this->db->set('alcohol_oc40m', $alcohol_oc40m);
    $this->db->set('alcohol_oc40f', $alcohol_oc40f);

    $this->db->set('drugs_nc19m', $drugs_nc19m);
    $this->db->set('drugs_nc19f', $drugs_nc19f);
    $this->db->set('drugs_nc39m', $drugs_nc39m);
    $this->db->set('drugs_nc39f', $drugs_nc39f);
    $this->db->set('drugs_nc40m', $drugs_nc40m);
    $this->db->set('drugs_nc40f', $drugs_nc40f);

    $this->db->set('drugs_oc19m', $drugs_oc19m);
    $this->db->set('drugs_oc19f', $drugs_oc19f);
    $this->db->set('drugs_oc39m', $drugs_oc39m);
    $this->db->set('drugs_oc39f', $drugs_oc39f);
    $this->db->set('drugs_oc40m', $drugs_oc40m);
    $this->db->set('drugs_oc40f', $drugs_oc40f);

    $this->db->set('dep_nc19m', $dep_nc19m);
    $this->db->set('dep_nc19f', $dep_nc19f);
    $this->db->set('dep_nc39m', $dep_nc39m);
    $this->db->set('dep_nc39f', $dep_nc39f);
    $this->db->set('dep_nc40m', $dep_nc40m);
    $this->db->set('dep_nc40f', $dep_nc40f);

    $this->db->set('dep_oc19m', $dep_oc19m);
    $this->db->set('dep_oc19f', $dep_oc19f);
    $this->db->set('dep_oc39m', $dep_oc39m);
    $this->db->set('dep_oc39f', $dep_oc39f);
    $this->db->set('dep_oc40m', $dep_oc40m);
    $this->db->set('dep_oc40f', $dep_oc40f);

    $this->db->set('suicid_att_nc19m', $suicid_att_nc19m);
    $this->db->set('suicid_att_nc19f', $suicid_att_nc19f);
    $this->db->set('suicid_att_nc39m', $suicid_att_nc39m);
    $this->db->set('suicid_att_nc39f', $suicid_att_nc39f);
    $this->db->set('suicid_att_nc40m', $suicid_att_nc40m);
    $this->db->set('suicid_att_nc40f', $suicid_att_nc40f);

    $this->db->set('suicid_att_oc19m', $suicid_att_oc19m);
    $this->db->set('suicid_att_oc19f', $suicid_att_oc19f);
    $this->db->set('suicid_att_oc39m', $suicid_att_oc39m);
    $this->db->set('suicid_att_oc39f', $suicid_att_oc39f);
    $this->db->set('suicid_att_oc40m', $suicid_att_oc40m);
    $this->db->set('suicid_att_oc40f', $suicid_att_oc40f);

    $this->db->set('suicid_d_nc19m', $suicid_d_nc19m);
    $this->db->set('suicid_d_nc19f', $suicid_d_nc19f);
    $this->db->set('suicid_d_nc39m', $suicid_d_nc39m);
    $this->db->set('suicid_d_nc39f', $suicid_d_nc39f);
    $this->db->set('suicid_d_nc40m', $suicid_d_nc40m);
    $this->db->set('suicid_d_nc40f', $suicid_d_nc40f);

    $this->db->set('suicid_d_oc19m', $suicid_d_oc19m);
    $this->db->set('suicid_d_oc19f', $suicid_d_oc19f);
    $this->db->set('suicid_d_oc39m', $suicid_d_oc39m);
    $this->db->set('suicid_d_oc39f', $suicid_d_oc39f);
    $this->db->set('suicid_d_oc40m', $suicid_d_oc40m);
    $this->db->set('suicid_d_oc40f', $suicid_d_oc40f);

    $this->db->set('maniac_nc19m', $maniac_nc19m);
    $this->db->set('maniac_nc19f', $maniac_nc19f);
    $this->db->set('maniac_nc39m', $maniac_nc39m);
    $this->db->set('maniac_nc39f', $maniac_nc39f);
    $this->db->set('maniac_nc40m', $maniac_nc40m);
    $this->db->set('maniac_nc40f', $maniac_nc40f);

    $this->db->set('maniac_oc19m', $maniac_oc19m);
    $this->db->set('maniac_oc19f', $maniac_oc19f);
    $this->db->set('maniac_oc39m', $maniac_oc39m);
    $this->db->set('maniac_oc39f', $maniac_oc39f);
    $this->db->set('maniac_oc40m', $maniac_oc40m);
    $this->db->set('maniac_oc40f', $maniac_oc40f);

    $this->db->set('bipolar_nc19m', $bipolar_nc19m);
    $this->db->set('bipolar_nc19f', $bipolar_nc19f);
    $this->db->set('bipolar_nc39m', $bipolar_nc39m);
    $this->db->set('bipolar_nc39f', $bipolar_nc39f);
    $this->db->set('bipolar_nc40m', $bipolar_nc40m);
    $this->db->set('bipolar_nc40f', $bipolar_nc40f);

    $this->db->set('bipolar_oc19m', $bipolar_oc19m);
    $this->db->set('bipolar_oc19f', $bipolar_oc19f);
    $this->db->set('bipolar_oc39m', $bipolar_oc39m);
    $this->db->set('bipolar_oc39f', $bipolar_oc39f);
    $this->db->set('bipolar_oc40m', $bipolar_oc40m);
    $this->db->set('bipolar_oc40f', $bipolar_oc40f);

    $this->db->set('other_psy_nc19m', $other_psy_nc19m);
    $this->db->set('other_psy_nc19f', $other_psy_nc19f);
    $this->db->set('other_psy_nc39m', $other_psy_nc39m);
    $this->db->set('other_psy_nc39f', $other_psy_nc39f);
    $this->db->set('other_psy_nc40m', $other_psy_nc40m);
    $this->db->set('other_psy_nc40f', $other_psy_nc40f);

    $this->db->set('other_psy_oc19m', $other_psy_oc19m);
    $this->db->set('other_psy_oc19f', $other_psy_oc19f);
    $this->db->set('other_psy_oc39m', $other_psy_oc39m);
    $this->db->set('other_psy_oc39f', $other_psy_oc39f);
    $this->db->set('other_psy_oc40m', $other_psy_oc40m);
    $this->db->set('other_psy_oc40f', $other_psy_oc40f);

    $this->db->set('epilepsy_nc19m', $epilepsy_nc19m);
    $this->db->set('epilepsy_nc19f', $epilepsy_nc19f);
    $this->db->set('epilepsy_nc39m', $epilepsy_nc39m);
    $this->db->set('epilepsy_nc39f', $epilepsy_nc39f);
    $this->db->set('epilepsy_nc40m', $epilepsy_nc40m);
    $this->db->set('epilepsy_nc40f', $epilepsy_nc40f);

    $this->db->set('epilepsy_oc19m', $epilepsy_oc19m);
    $this->db->set('epilepsy_oc19f', $epilepsy_oc19f);
    $this->db->set('epilepsy_oc39m', $epilepsy_oc39m);
    $this->db->set('epilepsy_oc39f', $epilepsy_oc39f);
    $this->db->set('epilepsy_oc40m', $epilepsy_oc40m);
    $this->db->set('epilepsy_oc40f', $epilepsy_oc40f);

    $this->db->set('other_neuro_nc19m', $other_neuro_nc19m);
    $this->db->set('other_neuro_nc19f', $other_neuro_nc19f);
    $this->db->set('other_neuro_nc39m', $other_neuro_nc39m);
    $this->db->set('other_neuro_nc39f', $other_neuro_nc39f);
    $this->db->set('other_neuro_nc40m', $other_neuro_nc40m);
    $this->db->set('other_neuro_nc40f', $other_neuro_nc40f);

    $this->db->set('other_neuro_oc19m', $other_neuro_oc19m);
    $this->db->set('other_neuro_oc19f', $other_neuro_oc19f);
    $this->db->set('other_neuro_oc39m', $other_neuro_oc39m);
    $this->db->set('other_neuro_oc39f', $other_neuro_oc39f);
    $this->db->set('other_neuro_oc40m', $other_neuro_oc40m);
    $this->db->set('other_neuro_oc40f', $other_neuro_oc40f);

        $this->db->where('date_mental_health', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Mental_Health');
    }
}
