<?php
class pregnant_woman_model extends CI_Model
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
        $complications_opd19,
        $complications_opd20,
        $ectopic_opd19,
        $ectopic_opd20,
        $antepartum_opd19,
        $antepartum_opd20,
        $postpartum_opd19,
        $postpartum_opd20,
        $eclampsia_opd19,
        $eclampsia_opd20,
        $postc_opd19,
        $postc_opd20,
        $postpartum_other_opd19,
        $postpartum_other_opd20,
        $prolonged_opd19,
        $prolonged_opd20,
        $uterine_rup_opd19,
        $uterine_rup_opd20,
        $other_direct_obste_opd19,
        $other_direct_obste_opd20,
        $anemia_sev_opd19,
        $anemia_sev_opd20,
        $malaria_sim_opd19,
        $malaria_sim_opd20,
        $malaria_dig_opd19,
        $malaria_dig_opd20,
        $malaria_sev_opd19,
        $malaria_sev_opd20,
        $hiv_opd19,
        $hiv_opd20,
        $pulmonary_opd19,
        $pulmonary_opd20,
        $pneumonia_opd19,
        $pneumonia_opd20,
        $other_ind_obstet_opd19,
        $other_ind_obstet_opd20,
        $num_rapport
    ) {
        $this->db->where('date_obstetrical_complication_a', $this->session->userdata('add_date'));
        $q = $this->db->get('Obstetrical_Complication_A');
        if ($q->num_rows() == 0) {
            return $this->db->set(array(
              'complications_opd19' => $complications_opd19,
              'complications_opd20' => $complications_opd20,
              'ectopic_opd19' => $ectopic_opd19,
              'ectopic_opd20' => $ectopic_opd20,
              'antepartum_opd19' => $antepartum_opd19,
              'antepartum_opd20' => $antepartum_opd20,
              'postpartum_opd19' => $postpartum_opd19,
              'postpartum_opd20' => $postpartum_opd20,
              'eclampsia_opd19' => $eclampsia_opd19,
              'eclampsia_opd20' => $eclampsia_opd20,
              'postc_opd19' => $postc_opd19,
              'postc_opd20' => $postc_opd20,
              'postpartum_other_opd19' => $postpartum_other_opd19,
              'postpartum_other_opd20' => $postpartum_other_opd20,
              'prolonged_opd19' => $prolonged_opd19,
              'prolonged_opd20' => $prolonged_opd20,
              'uterine_rup_opd19' => $uterine_rup_opd19,
              'uterine_rup_opd20' => $uterine_rup_opd20,
              'other_direct_obste_opd19' => $other_direct_obste_opd19,
              'other_direct_obste_opd20' => $other_direct_obste_opd20,
              'anemia_sev_opd19' => $anemia_sev_opd19,
              'anemia_sev_opd20' => $anemia_sev_opd20,
              'malaria_sim_opd19' => $malaria_sim_opd19,
              'malaria_sim_opd20' => $malaria_sim_opd20,
              'malaria_dig_opd19' => $malaria_dig_opd19,
              'malaria_dig_opd20' => $malaria_dig_opd20,
              'malaria_sev_opd19' => $malaria_sev_opd19,
              'malaria_sev_opd20' => $malaria_sev_opd20,
              'hiv_opd19' => $hiv_opd19,
              'hiv_opd20' => $hiv_opd20,
              'pulmonary_opd19' => $pulmonary_opd19,
              'pulmonary_opd20' => $pulmonary_opd20,
              'pneumonia_opd19' => $pneumonia_opd19,
              'pneumonia_opd20' => $pneumonia_opd20,
              'other_ind_obstet_opd19' => $other_ind_obstet_opd19,
              'other_ind_obstet_opd20' => $other_ind_obstet_opd20,

              'num_rapport' => $num_rapport
            ))
                ->set('date_obstetrical_complication_a', $this->session->userdata('add_date'))
                ->insert('Obstetrical_Complication_A');
        } else {
            $this->db->set(array(
              'complications_opd19' => $complications_opd19,
              'complications_opd20' => $complications_opd20,
              'ectopic_opd19' => $ectopic_opd19,
              'ectopic_opd20' => $ectopic_opd20,
              'antepartum_opd19' => $antepartum_opd19,
              'antepartum_opd20' => $antepartum_opd20,
              'postpartum_opd19' => $postpartum_opd19,
              'postpartum_opd20' => $postpartum_opd20,
              'eclampsia_opd19' => $eclampsia_opd19,
              'eclampsia_opd20' => $eclampsia_opd20,
              'postc_opd19' => $postc_opd19,
              'postc_opd20' => $postc_opd20,
              'postpartum_other_opd19' => $postpartum_other_opd19,
              'postpartum_other_opd20' => $postpartum_other_opd20,
              'prolonged_opd19' => $prolonged_opd19,
              'prolonged_opd20' => $prolonged_opd20,
              'uterine_rup_opd19' => $uterine_rup_opd19,
              'uterine_rup_opd20' => $uterine_rup_opd20,
              'other_direct_obste_opd19' => $other_direct_obste_opd19,
              'other_direct_obste_opd20' => $other_direct_obste_opd20,
              'anemia_sev_opd19' => $anemia_sev_opd19,
              'anemia_sev_opd20' => $anemia_sev_opd20,
              'malaria_sim_opd19' => $malaria_sim_opd19,
              'malaria_sim_opd20' => $malaria_sim_opd20,
              'malaria_dig_opd19' => $malaria_dig_opd19,
              'malaria_dig_opd20' => $malaria_dig_opd20,
              'malaria_sev_opd19' => $malaria_sev_opd19,
              'malaria_sev_opd20' => $malaria_sev_opd20,
              'hiv_opd19' => $hiv_opd19,
              'hiv_opd20' => $hiv_opd20,
              'pulmonary_opd19' => $pulmonary_opd19,
              'pulmonary_opd20' => $pulmonary_opd20,
              'pneumonia_opd19' => $pneumonia_opd19,
              'pneumonia_opd20' => $pneumonia_opd20,
              'other_ind_obstet_opd19' => $other_ind_obstet_opd19,
              'other_ind_obstet_opd20' => $other_ind_obstet_opd20,

              'num_rapport' => $num_rapport
          ))
              ->where('date_obstetrical_complication_a', $this->session->userdata('add_date'));
            return $this->db->update('Obstetrical_Complication_A');
        }
    }

    public function fetch_data3(
        $lung,
        $bones,
        $abdomen_without,
        $abdomen_with,
        $other_xray,
        $gastroscopy,
        $ultrasound,
        $ecg,
        $other_medical_img,
        $num_rapport
    ) {
        return $this->db->set(array(
          'lung' => $lung,
          'bones' => $bones,
          'abdomen_without' => $abdomen_without,
          'abdomen_with' => $abdomen_with,
          'other_xray' => $other_xray,
          'gastroscopy' => $gastroscopy,
          'ultrasound' => $ultrasound,
          'ecg' => $ecg,
          'other_medical_img' => $other_medical_img,

          'num_rapport' => $num_rapport
        ))
            ->set('date_medical_imagery', $this->session->userdata('add_date'))
            ->insert('Medical_Imagery');
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
        return $this->db->where('date_obstetrical_complication_a', $this->session->userdata('update_date'))
                        ->get('Obstetrical_Complication_A')
                        ->row();
    }

    public function show_table3()
    {
        return $this->db->where('date_medical_imagery', $this->session->userdata('update_date'))
                        ->get('Medical_Imagery')
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
      $complications_opd19,
      $complications_opd20,
      $ectopic_opd19,
      $ectopic_opd20,
      $antepartum_opd19,
      $antepartum_opd20,
      $postpartum_opd19,
      $postpartum_opd20,
      $eclampsia_opd19,
      $eclampsia_opd20,
      $postc_opd19,
      $postc_opd20,
      $postpartum_other_opd19,
      $postpartum_other_opd20,
      $prolonged_opd19,
      $prolonged_opd20,
      $uterine_rup_opd19,
      $uterine_rup_opd20,
      $other_direct_obste_opd19,
      $other_direct_obste_opd20,
      $anemia_sev_opd19,
      $anemia_sev_opd20,
      $malaria_sim_opd19,
      $malaria_sim_opd20,
      $malaria_dig_opd19,
      $malaria_dig_opd20,
      $malaria_sev_opd19,
      $malaria_sev_opd20,
      $hiv_opd19,
      $hiv_opd20,
      $pulmonary_opd19,
      $pulmonary_opd20,
      $pneumonia_opd19,
      $pneumonia_opd20,
      $other_ind_obstet_opd19,
      $other_ind_obstet_opd20
    ) {
        $this->db->set('complications_opd19', $complications_opd19);
        $this->db->set('complications_opd20', $complications_opd20);
        $this->db->set('ectopic_opd19', $ectopic_opd19);
        $this->db->set('ectopic_opd20', $ectopic_opd20);
        $this->db->set('antepartum_opd19', $antepartum_opd19);
        $this->db->set('antepartum_opd20', $antepartum_opd20);
        $this->db->set('postpartum_opd19', $postpartum_opd19);
        $this->db->set('postpartum_opd20', $postpartum_opd20);
        $this->db->set('eclampsia_opd19', $eclampsia_opd19);
        $this->db->set('eclampsia_opd20', $eclampsia_opd20);
        $this->db->set('postc_opd19', $postc_opd19);
        $this->db->set('postc_opd20', $postc_opd20);
        $this->db->set('postpartum_other_opd19', $postpartum_other_opd19);
        $this->db->set('postpartum_other_opd20', $postpartum_other_opd20);
        $this->db->set('prolonged_opd19', $prolonged_opd19);
        $this->db->set('prolonged_opd20', $prolonged_opd20);
        $this->db->set('uterine_rup_opd19', $uterine_rup_opd19);
        $this->db->set('uterine_rup_opd20', $uterine_rup_opd20);
        $this->db->set('other_direct_obste_opd19', $other_direct_obste_opd19);
        $this->db->set('other_direct_obste_opd20', $other_direct_obste_opd20);
        $this->db->set('anemia_sev_opd19', $anemia_sev_opd19);
        $this->db->set('anemia_sev_opd20', $anemia_sev_opd20);
        $this->db->set('malaria_sim_opd19', $malaria_sim_opd19);
        $this->db->set('malaria_sim_opd20', $malaria_sim_opd20);
        $this->db->set('malaria_dig_opd19', $malaria_dig_opd19);
        $this->db->set('malaria_dig_opd20', $malaria_dig_opd20);
        $this->db->set('malaria_sev_opd19', $malaria_sev_opd19);
        $this->db->set('malaria_sev_opd20', $malaria_sev_opd20);
        $this->db->set('hiv_opd19', $hiv_opd19);
        $this->db->set('hiv_opd20', $hiv_opd20);
        $this->db->set('pulmonary_opd19', $pulmonary_opd19);
        $this->db->set('pulmonary_opd20', $pulmonary_opd20);
        $this->db->set('pneumonia_opd19', $pneumonia_opd19);
        $this->db->set('pneumonia_opd20', $pneumonia_opd20);
        $this->db->set('other_ind_obstet_opd19', $other_ind_obstet_opd19);
        $this->db->set('other_ind_obstet_opd20', $other_ind_obstet_opd20);

        $this->db->where('date_obstetrical_complication_a', $this->session->userdata('update_date'));
        return $this->db->update('Obstetrical_Complication_A');
    }

    public function update_data3(
      $lung,
      $bones,
      $abdomen_without,
      $abdomen_with,
      $other_xray,
      $gastroscopy,
      $ultrasound,
      $ecg,
      $other_medical_img
    ) {
        $this->db->set('lung', $lung);
        $this->db->set('bones', $bones);
        $this->db->set('abdomen_without', $abdomen_without);
        $this->db->set('abdomen_with', $abdomen_with);
        $this->db->set('other_xray', $other_xray);
        $this->db->set('gastroscopy', $gastroscopy);
        $this->db->set('ultrasound', $ultrasound);
        $this->db->set('ecg', $ecg);
        $this->db->set('other_medical_img', $other_medical_img);

        $this->db->where('date_medical_imagery', $this->session->userdata('update_date'));
        return $this->db->update('Medical_Imagery');
    }
}
