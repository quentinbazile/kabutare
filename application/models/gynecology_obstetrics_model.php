<?php
class gynecology_obstetrics_model extends CI_Model
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
      $go_beds,
      $go_present_start,
      $go_admissions,
      $go_referred,
      $go_no_referred,
      $go_discharges,
      $go_authorized,
      $go_abandoned,
      $go_deaths,
      $go_dis_referred,
      $go_counter,
      $go_present_end,
      $go_total,
      $go_actual,
      $num_rapport
    ) {
      $this->db->where('date_hospitalization_a', $this->session->userdata('add_date'));
      $q = $this->db->get('Hospitalization_a');
      if ($q->num_rows() == 0) {
        return $this->db->set(array(
          'go_beds' => $go_beds,
          'go_present_start' => $go_present_start,
          'go_admissions' => $go_admissions,
          'go_referred' => $go_referred,
          'go_no_referred' => $go_no_referred,
          'go_discharges' => $go_discharges,
          'go_authorized' => $go_authorized,
          'go_abandoned' => $go_abandoned,
          'go_deaths' => $go_deaths,
          'go_dis_referred' => $go_dis_referred,
          'go_counter' => $go_counter,
          'go_present_end' => $go_present_end,
          'go_total' => $go_total,
          'go_actual' => $go_actual,

      'num_rapport' => $num_rapport
    ))
            ->set('date_hospitalization_a', $this->session->userdata('add_date'))
            ->insert('Hospitalization_a');
    }else {
        $this->db->set(array(
            'go_beds' => $go_beds,
            'go_present_start' => $go_present_start,
            'go_admissions' => $go_admissions,
            'go_referred' => $go_referred,
            'go_no_referred' => $go_no_referred,
            'go_discharges' => $go_discharges,
            'go_authorized' => $go_authorized,
            'go_abandoned' => $go_abandoned,
            'go_deaths' => $go_deaths,
            'go_dis_referred' => $go_dis_referred,
            'go_counter' => $go_counter,
            'go_present_end' => $go_present_end,
            'go_total' => $go_total,
            'go_actual' => $go_actual,

        'num_rapport' => $num_rapport
      ))
      ->where('date_hospitalization_a', $this->session->userdata('update_date'));
        return $this->db->update('Hospitalization_a');
    }
  }

    public function fetch_data2(
      $hosp_19f,
      $hosp_20f,
      $deaths_19f,
      $deaths_20f,

      $insured_dis,
      $no_paying_dis,
      $no_paying_ind,

      $road_acc_ad,
      $road_acc_deaths,
      $natural_disa_ad,
      $natural_disa_deaths,
      $work_inj_ad,
      $work_inj_deaths,
      $num_rapport
    ) {
        return $this->db->set(array(
          'hosp_19f' => $hosp_19f,
          'hosp_20f' => $hosp_20f,
          'deaths_19f' => $deaths_19f,
          'deaths_20f' => $deaths_20f,

          'insured_dis' => $insured_dis,
          'no_paying_dis' => $no_paying_dis,
          'no_paying_ind' => $no_paying_ind,

          'road_acc_ad' => $road_acc_ad,
          'road_acc_deaths' => $road_acc_deaths,
          'natural_disa_ad' => $natural_disa_ad,
          'natural_disa_deaths' => $natural_disa_deaths,
          'work_inj_ad' => $work_inj_ad,
          'work_inj_deaths' => $work_inj_deaths,


      'num_rapport' => $num_rapport,
      'num_user' => $this->session->userdata('num_user')
    ))
            ->set('date_hospitalization_bcde', $this->session->userdata('add_date'))
            ->insert('Hospitalization_bcde');

    }

    public function fetch_data3(
      $complications_hos19,
      $complications_hos20,
      $complications_deaths19,
      $complications_deaths20,
      $ectopic_hos19,
      $ectopic_hos20,
      $ectopic_deaths19,
      $ectopic_deaths20,
      $antepartum_hos19,
      $antepartum_hos20,
      $antepartum_deaths19,
      $antepartum_deaths20,
      $postpartum_hos19,
      $postpartum_hos20,
      $postpartum_deaths19,
      $postpartum_deaths20,
      $eclampsia_hos19,
      $eclampsia_hos20,
      $eclampsia_deaths19,
      $eclampsia_deaths20,
      $postc_hos19,
      $postc_hos20,
      $postc_deaths19,
      $postc_deaths20,
      $postpartum_other_hos19,
      $postpartum_other_hos20,
      $postpartum_other_deaths19,
      $postpartum_other_deaths20,
      $prolonged_hos19,
      $prolonged_hos20,
      $uterine_rup_hos19,
      $uterine_rup_hos20,
      $uterine_rup_deaths19,
      $uterine_rup_deaths20,
      $amniotic_deaths19,
      $amniotic_deaths20,
      $compli_anesthesia_deaths19,
      $compli_anesthesia_deaths20,
      $other_direct_obste_hos19,
      $other_direct_obste_hos20,
      $other_direct_obste_deaths19,
      $other_direct_obste_deaths20,
      $anemia_sev_hos19,
      $anemia_sev_hos20,
      $anemia_sev_deaths19,
      $anemia_sev_deaths20,
      $malaria_sim_hos19,
      $malaria_sim_hos20,
      $malaria_dig_hos19,
      $malaria_dig_hos20,
      $malaria_sev_hos19,
      $malaria_sev_hos20,
      $malaria_sev_deaths19,
      $malaria_sev_deaths20,
      $hiv_hos19,
      $hiv_hos20,
      $hiv_deaths19,
      $hiv_deaths20,
      $pulmonary_hos19,
      $pulmonary_hos20,
      $pulmonary_deaths19,
      $pulmonary_deaths20,
      $pneumonia_hos19,
      $pneumonia_hos20,
      $pneumonia_deaths19,
      $pneumonia_deaths20,
      $other_ind_obstet_hos19,
      $other_ind_obstet_hos20,
      $other_ind_obstet_deaths19,
      $other_ind_obstet_deaths20,
      $num_rapport
    ) {
        return $this->db->set(array(
          'complications_hos19' => $complications_hos19,
          'complications_hos20' => $complications_hos20,
          'complications_deaths19' => $complications_deaths19,
          'complications_deaths20' => $complications_deaths20,
          'ectopic_hos19' => $ectopic_hos19,
          'ectopic_hos20' => $ectopic_hos20,
          'ectopic_deaths19' => $ectopic_deaths19,
          'ectopic_deaths20' => $ectopic_deaths20,
          'antepartum_hos19' => $antepartum_hos19,
          'antepartum_hos20' => $antepartum_hos20,
          'antepartum_deaths19' => $antepartum_deaths19,
          'antepartum_deaths20' => $antepartum_deaths20,
          'postpartum_hos19' => $postpartum_hos19,
          'postpartum_hos20' => $postpartum_hos20,
          'postpartum_deaths19' => $postpartum_deaths19,
          'postpartum_deaths20' => $postpartum_deaths20,
          'eclampsia_hos19' => $eclampsia_hos19,
          'eclampsia_hos20' => $eclampsia_hos20,
          'eclampsia_deaths19' => $eclampsia_deaths19,
          'eclampsia_deaths20' => $eclampsia_deaths20,
          'postc_hos19' => $postc_hos19,
          'postc_hos20' => $postc_hos20,
          'postc_deaths19' => $postc_deaths19,
          'postc_deaths20' => $postc_deaths20,
          'postpartum_other_hos19' => $postpartum_other_hos19,
          'postpartum_other_hos20' => $postpartum_other_hos20,
          'postpartum_other_deaths19' => $postpartum_other_deaths19,
          'postpartum_other_deaths20' => $postpartum_other_deaths20,
          'prolonged_hos19' => $prolonged_hos19,
          'prolonged_hos20' => $prolonged_hos20,
          'uterine_rup_hos19' => $uterine_rup_hos19,
          'uterine_rup_hos20' => $uterine_rup_hos20,
          'uterine_rup_deaths19' => $uterine_rup_deaths19,
          'uterine_rup_deaths20' => $uterine_rup_deaths20,
          'amniotic_deaths19' => $amniotic_deaths19,
          'amniotic_deaths20' => $amniotic_deaths20,
          'compli_anesthesia_deaths19' => $compli_anesthesia_deaths19,
          'compli_anesthesia_deaths20' => $compli_anesthesia_deaths20,
          'other_direct_obste_hos19' => $other_direct_obste_hos19,
          'other_direct_obste_hos20' => $other_direct_obste_hos20,
          'other_direct_obste_deaths19' => $other_direct_obste_deaths19,
          'other_direct_obste_deaths20' => $other_direct_obste_deaths20,
          'anemia_sev_hos19' => $anemia_sev_hos19,
          'anemia_sev_hos20' => $anemia_sev_hos20,
          'anemia_sev_deaths19' => $anemia_sev_deaths19,
          'anemia_sev_deaths20' => $anemia_sev_deaths20,
          'malaria_sim_hos19' => $malaria_sim_hos19,
          'malaria_sim_hos20' => $malaria_sim_hos20,
          'malaria_dig_hos19' => $malaria_dig_hos19,
          'malaria_dig_hos20' => $malaria_dig_hos20,
          'malaria_sev_hos19' => $malaria_sev_hos19,
          'malaria_sev_hos20' => $malaria_sev_hos20,
          'malaria_sev_deaths19' => $malaria_sev_deaths19,
          'malaria_sev_deaths20' => $malaria_sev_deaths20,
          'hiv_hos19' => $hiv_hos19,
          'hiv_hos20' => $hiv_hos20,
          'hiv_deaths19' => $hiv_deaths19,
          'hiv_deaths20' => $hiv_deaths20,
          'pulmonary_hos19' => $pulmonary_hos19,
          'pulmonary_hos20' => $pulmonary_hos20,
          'pulmonary_deaths19' => $pulmonary_deaths19,
          'pulmonary_deaths20' => $pulmonary_deaths20,
          'pneumonia_hos19' => $pneumonia_hos19,
          'pneumonia_hos20' => $pneumonia_hos20,
          'pneumonia_deaths19' => $pneumonia_deaths19,
          'pneumonia_deaths20' => $pneumonia_deaths20,
          'other_ind_obstet_hos19' => $other_ind_obstet_hos19,
          'other_ind_obstet_hos20' => $other_ind_obstet_hos20,
          'other_ind_obstet_deaths19' => $other_ind_obstet_deaths19,
          'other_ind_obstet_deaths20' => $other_ind_obstet_deaths20,


      'num_rapport' => $num_rapport
    ))
            ->set('date_obstetrical_complication_a', $this->session->userdata('add_date'))
            ->insert('Obstetrical_Complication_a');

    }

    public function fetch_data4(
      $intra_antibio,
      $mother_uterotonic,
      $manual_placenta,
      $post_abortion,
      $vacuum_extraction,
      $Preeclampsia,
      $caesarean,
      $blood_tranf,
      $women_w_obste_compli,
      $num_rapport
    ) {
        return $this->db->set(array(
          'intra_antibio' => $intra_antibio,
          'mother_uterotonic' => $mother_uterotonic,
          'manual_placenta' => $manual_placenta,
          'post_abortion' => $post_abortion,
          'vacuum_extraction' => $vacuum_extraction,
          'Preeclampsia' => $Preeclampsia,
          'caesarean' => $caesarean,
          'blood_tranf' => $blood_tranf,
          'women_w_obste_compli' => $women_w_obste_compli,


      'num_rapport' => $num_rapport,
      'num_user' => $this->session->userdata('num_user')
    ))
            ->set('date_obstetrical_complication_bc', $this->session->userdata('add_date'))
            ->insert('Obstetrical_Complication_bc');

    }

    public function fetch_data5(
      $delive_total,
      $delive_eutocic,
      $delive_dystocic,
      $delive_w_episiotomy,
      $delive_w_oxytocin,
      $delive_complicated,
      $birth_trauma,
      $cleft_palate,
      $omphalocel,
      $laparoschisis,
      $spina_bifida,
      $hydrocephalus,
      $delive_15,
      $delive_19,
      $delive_24,
      $delive_35,
      $received_oxytocin,
      $multi_pregnancies,
      $women_cons_risk_prema,
      $received_corticosteroid,
      $cons_preterm_ruptu_memb,
      $cons_preterm_ruptu_memb_prophylactic,
      $maternal_deaths,
      $births_live,
      $births_weight2500,
      $premature_newborn,
      $births_weight2000,
      $births_macerated,
      $births_fresh_1000,
      $births_fresh_2500,
      $deaths_birth,
      $deaths_birth_2500,
      $newborns_breastfed,
      $newborns_skintoskin,
      $newborns_no_cry,
      $newborns_no_cry_ambubag,
      $newborns_no_cry_success,
      $fistula,
      $fistula_treatment,
      $complications_higher_level,
      $observation_24,
      $num_rapport
    ) {
        return $this->db->set(array(
          'delive_total' => $delive_total,
          'delive_eutocic' => $delive_eutocic,
          'delive_dystocic' => $delive_dystocic,
          'delive_w_episiotomy' => $delive_w_episiotomy,
          'delive_w_oxytocin' => $delive_w_oxytocin,
          'delive_complicated' => $delive_complicated,
          'birth_trauma' => $birth_trauma,
          'cleft_palate' => $cleft_palate,
          'omphalocel' => $omphalocel,
          'laparoschisis' => $laparoschisis,
          'spina_bifida' => $spina_bifida,
          'hydrocephalus' => $hydrocephalus,
          'delive_15' => $delive_15,
          'delive_19' => $delive_19,
          'delive_24' => $delive_24,
          'delive_35' => $delive_35,
          'received_oxytocin' => $received_oxytocin,
          'multi_pregnancies' => $multi_pregnancies,
          'women_cons_risk_prema' => $women_cons_risk_prema,
          'received_corticosteroid' => $received_corticosteroid,
          'cons_preterm_ruptu_memb' => $cons_preterm_ruptu_memb,
          'cons_preterm_ruptu_memb_prophylactic' => $cons_preterm_ruptu_memb_prophylactic,
          'maternal_deaths' => $maternal_deaths,
          'births_live' => $births_live,
          'births_weight2500' => $births_weight2500,
          'premature_newborn' => $premature_newborn,
          'births_weight2000' => $births_weight2000,
          'births_macerated' => $births_macerated,
          'births_fresh_1000' => $births_fresh_1000,
          'births_fresh_2500' => $births_fresh_2500,
          'deaths_birth' => $deaths_birth,
          'deaths_birth_2500' => $deaths_birth_2500,
          'newborns_breastfed' => $newborns_breastfed,
          'newborns_skintoskin' => $newborns_skintoskin,
          'newborns_no_cry' => $newborns_no_cry,
          'newborns_no_cry_ambubag' => $newborns_no_cry_ambubag,
          'newborns_no_cry_success' => $newborns_no_cry_success,
          'fistula' => $fistula,
          'fistula_treatment' => $fistula_treatment,
          'complications_higher_level' => $complications_higher_level,
          'observation_24' => $observation_24,


      'num_rapport' => $num_rapport
    ))
            ->set('date_delivery_birth', $this->session->userdata('add_date'))
            ->insert('Delivery_birth');

    }

    public function fetch_data6(
      $pnc1_m,
      $pnc1_nb,
      $anemia_pnc1_m,
      $iron_pnc1_m,
      $muac_pnc1_m,
      $malnourished_pnc1_m,
      $pnc2_m,
      $pnc2_nb,
      $pnc3_m,
      $pnc3_nb,
      $anemia_pnc3_m,
      $anemia_pnc_m,
      $complications_m,
      $complications_nb,
      $referrals_m,
      $referrals_nb,
      $ppfp_m,
      $num_rapport
    ) {
        return $this->db->set(array(
          'pnc1_m' => $pnc1_m,
          'pnc1_nb' => $pnc1_nb,
          'anemia_pnc1_m' => $anemia_pnc1_m,
          'iron_pnc1_m' => $iron_pnc1_m,
          'muac_pnc1_m' => $muac_pnc1_m,
          'malnourished_pnc1_m' => $malnourished_pnc1_m,
          'pnc2_m' => $pnc2_m,
          'pnc2_nb' => $pnc2_nb,
          'pnc3_m' => $pnc3_m,
          'pnc3_nb' => $pnc3_nb,
          'anemia_pnc3_m' => $anemia_pnc3_m,
          'anemia_pnc_m' => $anemia_pnc_m,
          'complications_m' => $complications_m,
          'complications_nb' => $complications_nb,
          'referrals_m' => $referrals_m,
          'referrals_nb' => $referrals_nb,
          'ppfp_m' => $ppfp_m,


      'num_rapport' => $num_rapport
    ))
            ->set('date_postnatal_care', $this->session->userdata('add_date'))
            ->insert('Postnatal_Care');

    }

    public function show_table1()
    {
        return $this->db->where('date_hospitalization_a', $this->session->userdata('update_date'))
                        ->get('Hospitalization_a')
                        ->row();
    }

    public function show_table2()
    {
        return $this->db->where('date_hospitalization_bcde', $this->session->userdata('update_date'))
                        ->where('num_user', $this->session->userdata('num_user'))
                        ->get('Hospitalization_bcde')
                        ->row();
    }

    public function show_table3()
    {
        return $this->db->where('date_obstetrical_complication_a', $this->session->userdata('update_date'))
                        ->get('Obstetrical_Complication_a')
                        ->row();
    }

    public function show_table4()
    {
        return $this->db->where('date_obstetrical_complication_bc', $this->session->userdata('update_date'))
                        ->where('num_user', $this->session->userdata('num_user'))
                        ->get('Obstetrical_Complication_bc')
                        ->row();
    }

    public function show_table5()
    {
        return $this->db->where('date_delivery_birth', $this->session->userdata('update_date'))
                        ->get('Delivery_birth')
                        ->row();
    }

    public function show_table6()
    {
        return $this->db->where('date_postnatal_care', $this->session->userdata('update_date'))
                        ->get('Postnatal_Care')
                        ->row();
    }

    public function num_rapport()
    {
        return $this->db->where('date_rapport', $this->session->userdata('add_date'))
                      ->get('rapport')
                      ->row();
    }

    public function update_data1(
      $go_beds,
      $go_present_start,
      $go_admissions,
      $go_referred,
      $go_no_referred,
      $go_discharges,
      $go_authorized,
      $go_abandoned,
      $go_deaths,
      $go_dis_referred,
      $go_counter,
      $go_present_end,
      $go_total,
      $go_actual

    ) {
        $this->db->set('go_beds', $go_beds);
        $this->db->set('go_present_start', $go_present_start);
        $this->db->set('go_admissions', $go_admissions);
        $this->db->set('go_referred', $go_referred);
        $this->db->set('go_no_referred', $go_no_referred);
        $this->db->set('go_discharges', $go_discharges);
        $this->db->set('go_authorized', $go_authorized);
        $this->db->set('go_abandoned', $go_abandoned);
        $this->db->set('go_deaths', $go_deaths);
        $this->db->set('go_dis_referred', $go_dis_referred);
        $this->db->set('go_counter', $go_counter);
        $this->db->set('go_present_end', $go_present_end);
        $this->db->set('go_total', $go_total);
        $this->db->set('go_actual', $go_actual);


        $this->db->where('date_hospitalization_a', $this->session->userdata('update_date'));
        return $this->db->update('Hospitalization_a');
    }

    public function update_data2(
      $hosp_19f,
      $hosp_20f,
      $deaths_19f,
      $deaths_20f,

      $insured_dis,
      $no_paying_dis,
      $no_paying_ind,

      $road_acc_ad,
      $road_acc_deaths,
      $natural_disa_ad,
      $natural_disa_deaths,
      $work_inj_ad,
      $work_inj_deaths

    ) {
        $this->db->set('hosp_19f', $hosp_19f);
        $this->db->set('hosp_20f', $hosp_20f);
        $this->db->set('deaths_19f', $deaths_19f);
        $this->db->set('deaths_20f', $deaths_20f);

        $this->db->set('insured_dis', $insured_dis);
        $this->db->set('no_paying_dis', $no_paying_dis);
        $this->db->set('no_paying_ind', $no_paying_ind);

        $this->db->set('road_acc_ad', $road_acc_ad);
        $this->db->set('road_acc_deaths', $road_acc_deaths);
        $this->db->set('natural_disa_ad', $natural_disa_ad);
        $this->db->set('natural_disa_deaths', $natural_disa_deaths);
        $this->db->set('work_inj_ad', $work_inj_ad);
        $this->db->set('work_inj_deaths', $work_inj_deaths);


        $this->db->where('date_hospitalization_bcde', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Hospitalization_bcde');
    }

    public function update_data3(
      $complications_hos19,
      $complications_hos20,
      $complications_deaths19,
      $complications_deaths20,
      $ectopic_hos19,
      $ectopic_hos20,
      $ectopic_deaths19,
      $ectopic_deaths20,
      $antepartum_hos19,
      $antepartum_hos20,
      $antepartum_deaths19,
      $antepartum_deaths20,
      $postpartum_hos19,
      $postpartum_hos20,
      $postpartum_deaths19,
      $postpartum_deaths20,
      $eclampsia_hos19,
      $eclampsia_hos20,
      $eclampsia_deaths19,
      $eclampsia_deaths20,
      $postc_hos19,
      $postc_hos20,
      $postc_deaths19,
      $postc_deaths20,
      $postpartum_other_hos19,
      $postpartum_other_hos20,
      $postpartum_other_deaths19,
      $postpartum_other_deaths20,
      $prolonged_hos19,
      $prolonged_hos20,
      $uterine_rup_hos19,
      $uterine_rup_hos20,
      $uterine_rup_deaths19,
      $uterine_rup_deaths20,
      $amniotic_deaths19,
      $amniotic_deaths20,
      $compli_anesthesia_deaths19,
      $compli_anesthesia_deaths20,
      $other_direct_obste_hos19,
      $other_direct_obste_hos20,
      $other_direct_obste_deaths19,
      $other_direct_obste_deaths20,
      $anemia_sev_hos19,
      $anemia_sev_hos20,
      $anemia_sev_deaths19,
      $anemia_sev_deaths20,
      $malaria_sim_hos19,
      $malaria_sim_hos20,
      $malaria_dig_hos19,
      $malaria_dig_hos20,
      $malaria_sev_hos19,
      $malaria_sev_hos20,
      $malaria_sev_deaths19,
      $malaria_sev_deaths20,
      $hiv_hos19,
      $hiv_hos20,
      $hiv_deaths19,
      $hiv_deaths20,
      $pulmonary_hos19,
      $pulmonary_hos20,
      $pulmonary_deaths19,
      $pulmonary_deaths20,
      $pneumonia_hos19,
      $pneumonia_hos20,
      $pneumonia_deaths19,
      $pneumonia_deaths20,
      $other_ind_obstet_hos19,
      $other_ind_obstet_hos20,
      $other_ind_obstet_deaths19,
      $other_ind_obstet_deaths20

    ) {
        $this->db->set('complications_hos19', $complications_hos19);
        $this->db->set('complications_hos20', $complications_hos20);
        $this->db->set('complications_deaths19', $complications_deaths19);
        $this->db->set('complications_deaths20', $complications_deaths20);
        $this->db->set('ectopic_hos19', $ectopic_hos19);
        $this->db->set('ectopic_hos20', $ectopic_hos20);
        $this->db->set('ectopic_deaths19', $ectopic_deaths19);
        $this->db->set('ectopic_deaths20', $ectopic_deaths20);
        $this->db->set('antepartum_hos19', $antepartum_hos19);
        $this->db->set('antepartum_hos20', $antepartum_hos20);
        $this->db->set('antepartum_deaths19', $antepartum_deaths19);
        $this->db->set('antepartum_deaths20', $antepartum_deaths20);
        $this->db->set('postpartum_hos19', $postpartum_hos19);
        $this->db->set('postpartum_hos20', $postpartum_hos20);
        $this->db->set('postpartum_deaths19', $postpartum_deaths19);
        $this->db->set('postpartum_deaths20', $postpartum_deaths20);
        $this->db->set('eclampsia_hos19', $eclampsia_hos19);
        $this->db->set('eclampsia_hos20', $eclampsia_hos20);
        $this->db->set('eclampsia_deaths19', $eclampsia_deaths19);
        $this->db->set('eclampsia_deaths20', $eclampsia_deaths20);
        $this->db->set('postc_hos19', $postc_hos19);
        $this->db->set('postc_hos20', $postc_hos20);
        $this->db->set('postc_deaths19', $postc_deaths19);
        $this->db->set('postc_deaths20', $postc_deaths20);
        $this->db->set('postpartum_other_hos19', $postpartum_other_hos19);
        $this->db->set('postpartum_other_hos20', $postpartum_other_hos20);
        $this->db->set('postpartum_other_deaths19', $postpartum_other_deaths19);
        $this->db->set('postpartum_other_deaths20', $postpartum_other_deaths20);
        $this->db->set('prolonged_hos19', $prolonged_hos19);
        $this->db->set('prolonged_hos20', $prolonged_hos20);
        $this->db->set('uterine_rup_hos19', $uterine_rup_hos19);
        $this->db->set('uterine_rup_hos20', $uterine_rup_hos20);
        $this->db->set('uterine_rup_deaths19', $uterine_rup_deaths19);
        $this->db->set('uterine_rup_deaths20', $uterine_rup_deaths20);
        $this->db->set('amniotic_deaths19', $amniotic_deaths19);
        $this->db->set('amniotic_deaths20', $amniotic_deaths20);
        $this->db->set('compli_anesthesia_deaths19', $compli_anesthesia_deaths19);
        $this->db->set('compli_anesthesia_deaths20', $compli_anesthesia_deaths20);
        $this->db->set('other_direct_obste_hos19', $other_direct_obste_hos19);
        $this->db->set('other_direct_obste_hos20', $other_direct_obste_hos20);
        $this->db->set('other_direct_obste_deaths19', $other_direct_obste_deaths19);
        $this->db->set('other_direct_obste_deaths20', $other_direct_obste_deaths20);
        $this->db->set('anemia_sev_hos19', $anemia_sev_hos19);
        $this->db->set('anemia_sev_hos20', $anemia_sev_hos20);
        $this->db->set('anemia_sev_deaths19', $anemia_sev_deaths19);
        $this->db->set('anemia_sev_deaths20', $anemia_sev_deaths20);
        $this->db->set('malaria_sim_hos19', $malaria_sim_hos19);
        $this->db->set('malaria_sim_hos20', $malaria_sim_hos20);
        $this->db->set('malaria_dig_hos19', $malaria_dig_hos19);
        $this->db->set('malaria_dig_hos20', $malaria_dig_hos20);
        $this->db->set('malaria_sev_hos19', $malaria_sev_hos19);
        $this->db->set('malaria_sev_hos20', $malaria_sev_hos20);
        $this->db->set('malaria_sev_deaths19', $malaria_sev_deaths19);
        $this->db->set('malaria_sev_deaths20', $malaria_sev_deaths20);
        $this->db->set('hiv_hos19', $hiv_hos19);
        $this->db->set('hiv_hos20', $hiv_hos20);
        $this->db->set('hiv_deaths19', $hiv_deaths19);
        $this->db->set('hiv_deaths20', $hiv_deaths20);
        $this->db->set('pulmonary_hos19', $pulmonary_hos19);
        $this->db->set('pulmonary_hos20', $pulmonary_hos20);
        $this->db->set('pulmonary_deaths19', $pulmonary_deaths19);
        $this->db->set('pulmonary_deaths20', $pulmonary_deaths20);
        $this->db->set('pneumonia_hos19', $pneumonia_hos19);
        $this->db->set('pneumonia_hos20', $pneumonia_hos20);
        $this->db->set('pneumonia_deaths19', $pneumonia_deaths19);
        $this->db->set('pneumonia_deaths20', $pneumonia_deaths20);
        $this->db->set('other_ind_obstet_hos19', $other_ind_obstet_hos19);
        $this->db->set('other_ind_obstet_hos20', $other_ind_obstet_hos20);
        $this->db->set('other_ind_obstet_deaths19', $other_ind_obstet_deaths19);
        $this->db->set('other_ind_obstet_deaths20', $other_ind_obstet_deaths20);


        $this->db->where('date_obstetrical_complication_a', $this->session->userdata('update_date'));
        return $this->db->update('Obstetrical_Complication_a');
    }

    public function update_data4(
      $intra_antibio,
      $mother_uterotonic,
      $manual_placenta,
      $post_abortion,
      $vacuum_extraction,
      $Preeclampsia,
      $caesarean,
      $blood_tranf,
      $women_w_obste_compli

    ) {
        $this->db->set('intra_antibio', $intra_antibio);
        $this->db->set('mother_uterotonic', $mother_uterotonic);
        $this->db->set('manual_placenta', $manual_placenta);
        $this->db->set('post_abortion', $post_abortion);
        $this->db->set('vacuum_extraction', $vacuum_extraction);
        $this->db->set('Preeclampsia', $Preeclampsia);
        $this->db->set('caesarean', $caesarean);
        $this->db->set('blood_tranf', $blood_tranf);
        $this->db->set('women_w_obste_compli', $women_w_obste_compli);


        $this->db->where('date_obstetrical_complication_bc', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Obstetrical_Complication_bc');
    }

    public function update_data5(
      $delive_total,
      $delive_eutocic,
      $delive_dystocic,
      $delive_w_episiotomy,
      $delive_w_oxytocin,
      $delive_complicated,
      $birth_trauma,
      $cleft_palate,
      $omphalocel,
      $laparoschisis,
      $spina_bifida,
      $hydrocephalus,
      $delive_15,
      $delive_19,
      $delive_24,
      $delive_35,
      $received_oxytocin,
      $multi_pregnancies,
      $women_cons_risk_prema,
      $received_corticosteroid,
      $cons_preterm_ruptu_memb,
      $cons_preterm_ruptu_memb_prophylactic,
      $maternal_deaths,
      $births_live,
      $births_weight2500,
      $premature_newborn,
      $births_weight2000,
      $births_macerated,
      $births_fresh_1000,
      $births_fresh_2500,
      $deaths_birth,
      $deaths_birth_2500,
      $newborns_breastfed,
      $newborns_skintoskin,
      $newborns_no_cry,
      $newborns_no_cry_ambubag,
      $newborns_no_cry_success,
      $fistula,
      $fistula_treatment,
      $complications_higher_level,
      $observation_24

    ) {
        $this->db->set('delive_total', $delive_total);
        $this->db->set('delive_eutocic', $delive_eutocic);
        $this->db->set('delive_dystocic', $delive_dystocic);
        $this->db->set('delive_w_episiotomy', $delive_w_episiotomy);
        $this->db->set('delive_w_oxytocin', $delive_w_oxytocin);
        $this->db->set('delive_complicated', $delive_complicated);
        $this->db->set('birth_trauma', $birth_trauma);
        $this->db->set('cleft_palate', $cleft_palate);
        $this->db->set('omphalocel', $omphalocel);
        $this->db->set('laparoschisis', $laparoschisis);
        $this->db->set('spina_bifida', $spina_bifida);
        $this->db->set('hydrocephalus', $hydrocephalus);
        $this->db->set('delive_15', $delive_15);
        $this->db->set('delive_19', $delive_19);
        $this->db->set('delive_24', $delive_24);
        $this->db->set('delive_35', $delive_35);
        $this->db->set('received_oxytocin', $received_oxytocin);
        $this->db->set('multi_pregnancies', $multi_pregnancies);
        $this->db->set('women_cons_risk_prema', $women_cons_risk_prema);
        $this->db->set('received_corticosteroid', $received_corticosteroid);
        $this->db->set('cons_preterm_ruptu_memb', $cons_preterm_ruptu_memb);
        $this->db->set('cons_preterm_ruptu_memb_prophylactic', $cons_preterm_ruptu_memb_prophylactic);
        $this->db->set('maternal_deaths', $maternal_deaths);
        $this->db->set('births_live', $births_live);
        $this->db->set('births_weight2500', $births_weight2500);
        $this->db->set('premature_newborn', $premature_newborn);
        $this->db->set('births_weight2000', $births_weight2000);
        $this->db->set('births_macerated', $births_macerated);
        $this->db->set('births_fresh_1000', $births_fresh_1000);
        $this->db->set('births_fresh_2500', $births_fresh_2500);
        $this->db->set('deaths_birth', $deaths_birth);
        $this->db->set('deaths_birth_2500', $deaths_birth_2500);
        $this->db->set('newborns_breastfed', $newborns_breastfed);
        $this->db->set('newborns_skintoskin', $newborns_skintoskin);
        $this->db->set('newborns_no_cry', $newborns_no_cry);
        $this->db->set('newborns_no_cry_ambubag', $newborns_no_cry_ambubag);
        $this->db->set('newborns_no_cry_success', $newborns_no_cry_success);
        $this->db->set('fistula', $fistula);
        $this->db->set('fistula_treatment', $fistula_treatment);
        $this->db->set('complications_higher_level', $complications_higher_level);
        $this->db->set('observation_24', $observation_24);


        $this->db->where('date_delivery_birth', $this->session->userdata('update_date'));
        return $this->db->update('Delivery_birth');
    }

    public function update_data6(
      $pnc1_m,
      $pnc1_nb,
      $anemia_pnc1_m,
      $iron_pnc1_m,
      $muac_pnc1_m,
      $malnourished_pnc1_m,
      $pnc2_m,
      $pnc2_nb,
      $pnc3_m,
      $pnc3_nb,
      $anemia_pnc3_m,
      $anemia_pnc_m,
      $complications_m,
      $complications_nb,
      $referrals_m,
      $referrals_nb,
      $ppfp_m

    ) {
        $this->db->set('pnc1_m', $pnc1_m);
        $this->db->set('pnc1_nb', $pnc1_nb);
        $this->db->set('anemia_pnc1_m', $anemia_pnc1_m);
        $this->db->set('iron_pnc1_m', $iron_pnc1_m);
        $this->db->set('muac_pnc1_m', $muac_pnc1_m);
        $this->db->set('malnourished_pnc1_m', $malnourished_pnc1_m);
        $this->db->set('pnc2_m', $pnc2_m);
        $this->db->set('pnc2_nb', $pnc2_nb);
        $this->db->set('pnc3_m', $pnc3_m);
        $this->db->set('pnc3_nb', $pnc3_nb);
        $this->db->set('anemia_pnc3_m', $anemia_pnc3_m);
        $this->db->set('anemia_pnc_m', $anemia_pnc_m);
        $this->db->set('complications_m', $complications_m);
        $this->db->set('complications_nb', $complications_nb);
        $this->db->set('referrals_m', $referrals_m);
        $this->db->set('referrals_nb', $referrals_nb);
        $this->db->set('ppfp_m', $ppfp_m);


        $this->db->where('date_postnatal_care', $this->session->userdata('update_date'));
        return $this->db->update('Postnatal_Care');
    }
}
