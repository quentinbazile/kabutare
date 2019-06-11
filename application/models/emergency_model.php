<?php
class emergency_model extends CI_Model
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
      $diar_w_dehy_5f,
        $diar_w_dehy_5m,
        $diar_w_dehy_19m,
        $diar_w_dehy_19f,
        $diar_w_dehy_20m,
        $diar_w_dehy_20f,
      $diar_no_dehy_5f,
        $diar_no_dehy_5m,
        $diar_no_dehy_19m,
        $diar_no_dehy_19f,
        $diar_no_dehy_20m,
        $diar_no_dehy_20f,
      $blood_diar_5f,
        $blood_diar_5m,
        $blood_diar_19m,
        $blood_diar_19f,
        $blood_diar_20m,
        $blood_diar_20f,
      $food_poison_5f,
        $food_poison_5m,
        $food_poison_19m,
        $food_poison_19f,
        $food_poison_20m,
        $food_poison_20f,
      $ear_infect_5f,
        $ear_infect_5m,
        $ear_infect_19m,
        $ear_infect_19f,
        $ear_infect_20m,
        $ear_infect_20f,
      $schisto_5f,
        $schisto_5m,
        $schisto_19m,
        $schisto_19f,
        $schisto_20m,
        $schisto_20f,
      $ascaris_5f,
        $ascaris_5m,
        $ascaris_19m,
        $ascaris_19f,
        $ascaris_20m,
        $ascaris_20f,
      $trichu_5m,
        $trichu_5f,
        $trichu_19m,
        $trichu_19f,
        $trichu_20m,
        $trichu_20f,
      $hook_5m,
        $hook_5f,
        $hook_19f,
        $hook_19m,
        $hook_20m,
        $hook_20f,
      $entam_5f,
        $entam_5m,
        $entam_19m,
        $entam_19f,
        $entam_20m,
        $entam_20f,
      $giardia_5f,
        $giardia_5m,
        $giardia_19m,
        $giardia_19f,
        $giardia_20m,
        $giardia_20f,
      $taenia_5f,
        $taenia_5m,
        $taenia_19m,
        $taenia_19f,
        $taenia_20m,
        $taenia_20f,
      $malaria_s_5f,
        $malaria_s_5m,
        $malaria_s_19m,
        $malaria_s_19f,
        $malaria_s_20m,
        $malaria_s_20f,
      $malaria_dig_5f,
        $malaria_dig_5m,
        $malaria_dig_19m,
        $malaria_dig_19f,
        $malaria_dig_20m,
        $malaria_dig_20f,
      $herpes_s_5f,
        $herpes_s_5m,
        $herpes_s_19m,
        $herpes_s_19f,
        $herpes_s_20m,
        $herpes_s_20f,
      $mening_5f,
        $mening_5m,
        $mening_19m,
        $mening_19f,
        $mening_20m,
        $mening_20f,
      $pneumonia_simp_5m,
        $pneumonia_simp_5f,
        $pneumonia_simp_19m,
        $pneumonia_simp_19f,
        $pneumonia_simp_20m,
        $pneumonia_simp_20f,
      $pneumonia_sev_5m,
        $pneumonia_sev_5f,
        $pneumonia_sev_19f,
        $pneumonia_sev_19m,
        $pneumonia_sev_20m,
        $pneumonia_sev_20f,
      $grip_5f,
        $grip_5m,
        $grip_19m,
        $grip_19f,
        $grip_20m,
        $grip_20f,
      $ari_5f,
        $ari_5m,
        $ari_19m,
        $ari_19f,
        $ari_20m,
        $ari_20f,
      $gast_duoden_5f,
        $gast_duoden_5m,
        $gast_duoden_19m,
        $gast_duoden_19f,
        $gast_duoden_20m,
        $gast_duoden_20f,
      $absces_5m,
        $absces_5f,
        $absces_19m,
        $absces_19f,
        $absces_20m,
        $absces_20f,
      $ulcers_5m,
        $ulcers_5f,
        $ulcers_19f,
        $ulcers_19m,
        $ulcers_20m,
        $ulcers_20f,
      $scabies_5f,
        $scabies_5m,
        $scabies_19m,
        $scabies_19f,
        $scabies_20m,
        $scabies_20f,
      $mycoses_5f,
        $mycoses_5m,
        $mycoses_19m,
        $mycoses_19f,
        $mycoses_20m,
        $mycoses_20f,
      $si_others_5f,
        $si_others_5m,
        $si_others_19m,
        $si_others_19f,
        $si_others_20m,
        $si_others_20f,
      $urinary_ti_5f,
        $urinary_ti_5m,
        $urinary_ti_19m,
        $urinary_ti_19f,
        $urinary_ti_20m,
        $urinary_ti_20f,
      $anemia_5f,
        $anemia_5m,
        $anemia_19m,
        $anemia_19f,
        $anemia_20m,
        $anemia_20f,
      $measles_susp_5f,
        $measles_susp_5m,
        $measles_susp_19m,
        $measles_susp_19f,
        $measles_susp_20m,
        $measles_susp_20f,
      $measles_conf_5f,
        $measles_conf_5m,
        $measles_conf_19m,
        $measles_conf_19f,
        $measles_conf_20m,
        $measles_conf_20f,
      $rubella_conf_5f,
        $rubella_conf_5m,
        $rubella_conf_19m,
        $rubella_conf_19f,
        $rubella_conf_20m,
        $rubella_conf_20f,
      $flaccid_paraly_5f,
        $flaccid_paraly_5m,
        $flaccid_paraly_19m,
        $flaccid_paraly_19f,
        $flaccid_paraly_20m,
        $flaccid_paraly_20f,
      $tetanus_5f,
        $tetanus_5m,
        $tetanus_19m,
        $tetanus_19f,
        $tetanus_20m,
        $tetanus_20f,
      $hepatitis_5f,
        $hepatitis_5m,
        $hepatitis_19m,
        $hepatitis_19f,
        $hepatitis_20m,
        $hepatitis_20f,

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

      'diar_w_dehy_5m' => $diar_w_dehy_5m,
      'diar_w_dehy_5f' => $diar_w_dehy_5f,
      'diar_w_dehy_19m' => $diar_w_dehy_19m,
      'diar_w_dehy_19f' => $diar_w_dehy_19f,
      'diar_w_dehy_20m' => $diar_w_dehy_20m,
      'diar_w_dehy_20f' => $diar_w_dehy_20f,

      'diar_no_dehy_5m' => $diar_no_dehy_5m,
      'diar_no_dehy_5f' => $diar_no_dehy_5f,
      'diar_no_dehy_19m' => $diar_no_dehy_19m,
      'diar_no_dehy_19f' => $diar_no_dehy_19f,
      'diar_no_dehy_20m' => $diar_no_dehy_20m,
      'diar_no_dehy_20f' => $diar_no_dehy_20f,

      'blood_diar_5m' => $blood_diar_5m,
      'blood_diar_5f' => $blood_diar_5f,
      'blood_diar_19m' => $blood_diar_19m,
      'blood_diar_19f' => $blood_diar_19f,
      'blood_diar_20m' => $blood_diar_20m,
      'blood_diar_20f' => $blood_diar_20f,

      'food_poison_5m' => $food_poison_5m,
      'food_poison_5f' => $food_poison_5f,
      'food_poison_19m' => $food_poison_19m,
      'food_poison_19f' => $food_poison_19f,
      'food_poison_20m' => $food_poison_20m,
      'food_poison_20f' => $food_poison_20f,

      'ear_infect_5m' => $ear_infect_5m,
      'ear_infect_5f' => $ear_infect_5f,
      'ear_infect_19m' => $ear_infect_19m,
      'ear_infect_19f' => $ear_infect_19f,
      'ear_infect_20m' => $ear_infect_20m,
      'ear_infect_20f' => $ear_infect_20f,

      'schisto_5m' => $schisto_5m,
      'schisto_5f' => $schisto_5f,
      'schisto_19m' => $schisto_19m,
      'schisto_19f' => $schisto_19f,
      'schisto_20m' => $schisto_20m,
      'schisto_20f' => $schisto_20f,

      'ascaris_5m' => $ascaris_5m,
      'ascaris_5f' => $ascaris_5f,
      'ascaris_19m' => $ascaris_19m,
      'ascaris_19f' => $ascaris_19f,
      'ascaris_20m' => $ascaris_20m,
      'ascaris_20f' => $ascaris_20f,

      'trichu_5m' => $trichu_5m,
      'trichu_5f' => $trichu_5f,
      'trichu_19m' => $trichu_19m,
      'trichu_19f' => $trichu_19f,
      'trichu_20m' => $trichu_20m,
      'trichu_20f' => $trichu_20f,

      'hook_5m' => $hook_5m,
      'hook_5f' => $hook_5f,
      'hook_19m' => $hook_19m,
      'hook_19f' => $hook_19f,
      'hook_20m' => $hook_20m,
      'hook_20f' => $hook_20f,

      'entam_5m' => $entam_5m,
      'entam_5f' => $entam_5f,
      'entam_19m' => $entam_19m,
      'entam_19f' => $entam_19f,
      'entam_20m' => $entam_20m,
      'entam_20f' => $entam_20f,

      'giardia_5m' => $giardia_5m,
      'giardia_5f' => $giardia_5f,
      'giardia_19m' => $giardia_19m,
      'giardia_19f' => $giardia_19f,
      'giardia_20m' => $giardia_20m,
      'giardia_20f' => $giardia_20f,

      'taenia_5m' => $taenia_5m,
      'taenia_5f' => $taenia_5f,
      'taenia_19m' => $taenia_19m,
      'taenia_19f' => $taenia_19f,
      'taenia_20m' => $taenia_20m,
      'taenia_20f' => $taenia_20f,

      'malaria_s_5m' => $malaria_s_5m,
      'malaria_s_5f' => $malaria_s_5f,
      'malaria_s_19m' => $malaria_s_19m,
      'malaria_s_19f' => $malaria_s_19f,
      'malaria_s_20m' => $malaria_s_20m,
      'malaria_s_20f' => $malaria_s_20f,

      'malaria_dig_5m' => $malaria_dig_5m,
      'malaria_dig_5f' => $malaria_dig_5f,
      'malaria_dig_19m' => $malaria_dig_19m,
      'malaria_dig_19f' => $malaria_dig_19f,
      'malaria_dig_20m' => $malaria_dig_20m,
      'malaria_dig_20f' => $malaria_dig_20f,

      'herpes_s_5m' => $herpes_s_5m,
      'herpes_s_5f' => $herpes_s_5f,
      'herpes_s_19m' => $herpes_s_19m,
      'herpes_s_19f' => $herpes_s_19f,
      'herpes_s_20m' => $herpes_s_20m,
      'herpes_s_20f' => $herpes_s_20f,

      'mening_5m' => $mening_5m,
      'mening_5f' => $mening_5f,
      'mening_19m' => $mening_19m,
      'mening_19f' => $mening_19f,
      'mening_20m' => $mening_20m,
      'mening_20f' => $mening_20f,

      'pneumonia_simp_5m' => $pneumonia_simp_5m,
      'pneumonia_simp_5f' => $pneumonia_simp_5f,
      'pneumonia_simp_19m' => $pneumonia_simp_19m,
      'pneumonia_simp_19f' => $pneumonia_simp_19f,
      'pneumonia_simp_20m' => $pneumonia_simp_20m,
      'pneumonia_simp_20f' => $pneumonia_simp_20f,

      'pneumonia_sev_5m' => $pneumonia_sev_5m,
      'pneumonia_sev_5f' => $pneumonia_sev_5f,
      'pneumonia_sev_19m' => $pneumonia_sev_19m,
      'pneumonia_sev_19f' => $pneumonia_sev_19f,
      'pneumonia_sev_20m' => $pneumonia_sev_20m,
      'pneumonia_sev_20f' => $pneumonia_sev_20f,

      'grip_5m' => $grip_5m,
      'grip_5f' => $grip_5f,
      'grip_19m' => $grip_19m,
      'grip_19f' => $grip_19f,
      'grip_20m' => $grip_20m,
      'grip_20f' => $grip_20f,

      'ari_5m' => $ari_5m,
      'ari_5f' => $ari_5f,
      'ari_19m' => $ari_19m,
      'ari_19f' => $ari_19f,
      'ari_20m' => $ari_20m,
      'ari_20f' => $ari_20f,

      'gast_duoden_5m' => $gast_duoden_5m,
      'gast_duoden_5f' => $gast_duoden_5f,
      'gast_duoden_19m' => $gast_duoden_19m,
      'gast_duoden_19f' => $gast_duoden_19f,
      'gast_duoden_20m' => $gast_duoden_20m,
      'gast_duoden_20f' => $gast_duoden_20f,

      'absces_5m' => $absces_5m,
      'absces_5f' => $absces_5f,
      'absces_19m' => $absces_19m,
      'absces_19f' => $absces_19f,
      'absces_20m' => $absces_20m,
      'absces_20f' => $absces_20f,

      'ulcers_5m' => $ulcers_5m,
      'ulcers_5f' => $ulcers_5f,
      'ulcers_19m' => $ulcers_19m,
      'ulcers_19f' => $ulcers_19f,
      'ulcers_20m' => $ulcers_20m,
      'ulcers_20f' => $ulcers_20f,

      'scabies_5m' => $scabies_5m,
      'scabies_5f' => $scabies_5f,
      'scabies_19m' => $scabies_19m,
      'scabies_19f' => $scabies_19f,
      'scabies_20m' => $scabies_20m,
      'scabies_20f' => $scabies_20f,

      'mycoses_5m' => $mycoses_5m,
      'mycoses_5f' => $mycoses_5f,
      'mycoses_19m' => $mycoses_19m,
      'mycoses_19f' => $mycoses_19f,
      'mycoses_20m' => $mycoses_20m,
      'mycoses_20f' => $mycoses_20f,

      'si_others_5m' => $si_others_5m,
      'si_others_5f' => $si_others_5f,
      'si_others_19m' => $si_others_19m,
      'si_others_19f' => $si_others_19f,
      'si_others_20m' => $si_others_20m,
      'si_others_20f' => $si_others_20f,

      'urinary_ti_5m' => $urinary_ti_5m,
      'urinary_ti_5f' => $urinary_ti_5f,
      'urinary_ti_19m' => $urinary_ti_19m,
      'urinary_ti_19f' => $urinary_ti_19f,
      'urinary_ti_20m' => $urinary_ti_20m,
      'urinary_ti_20f' => $urinary_ti_20f,

      'anemia_5m' => $anemia_5m,
      'anemia_5f' => $anemia_5f,
      'anemia_19m' => $anemia_19m,
      'anemia_19f' => $anemia_19f,
      'anemia_20m' => $anemia_20m,
      'anemia_20f' => $anemia_20f,

      'measles_susp_5m' => $measles_susp_5m,
      'measles_susp_5f' => $measles_susp_5f,
      'measles_susp_19m' => $measles_susp_19m,
      'measles_susp_19f' => $measles_susp_19f,
      'measles_susp_20m' => $measles_susp_20m,
      'measles_susp_20f' => $measles_susp_20f,

      'measles_conf_5m' => $measles_conf_5m,
      'measles_conf_5f' => $measles_conf_5f,
      'measles_conf_19m' => $measles_conf_19m,
      'measles_conf_19f' => $measles_conf_19f,
      'measles_conf_20m' => $measles_conf_20m,
      'measles_conf_20f' => $measles_conf_20f,

      'rubella_conf_5m' => $rubella_conf_5m,
      'rubella_conf_5f' => $rubella_conf_5f,
      'rubella_conf_19m' => $rubella_conf_19m,
      'rubella_conf_19f' => $rubella_conf_19f,
      'rubella_conf_20m' => $rubella_conf_20m,
      'rubella_conf_20f' => $rubella_conf_20f,

      'flaccid_paraly_5m' => $flaccid_paraly_5m,
      'flaccid_paraly_5f' => $flaccid_paraly_5f,
      'flaccid_paraly_19m' => $flaccid_paraly_19m,
      'flaccid_paraly_19f' => $flaccid_paraly_19f,
      'flaccid_paraly_20m' => $flaccid_paraly_20m,
      'flaccid_paraly_20f' => $flaccid_paraly_20f,

      'tetanus_5m' => $tetanus_5m,
      'tetanus_5f' => $tetanus_5f,
      'tetanus_19m' => $tetanus_19m,
      'tetanus_19f' => $tetanus_19f,
      'tetanus_20m' => $tetanus_20m,
      'tetanus_20f' => $tetanus_20f,

      'hepatitis_5m' => $hepatitis_5m,
      'hepatitis_5f' => $hepatitis_5f,
      'hepatitis_19m' => $hepatitis_19m,
      'hepatitis_19f' => $hepatitis_19f,
      'hepatitis_20m' => $hepatitis_20m,
      'hepatitis_20f' => $hepatitis_20f,

      'num_rapport' => $num_rapport,
      'num_user' => $this->session->userdata('num_user')
    ))
            ->set('date_consultation_abcde', $this->session->userdata('add_date'))
            ->insert('Consultation_abcde');
    }

    public function fetch_data2(
      $e_beds,
      $e_present_start,
      $e_admissions,
      $e_referred,
      $e_no_referred,
      $e_discharges,
      $e_authorized,
      $e_abandoned,
      $e_deaths,
      $e_dis_referred,
      $e_counter,
      $e_present_end,
      $e_total,
      $e_actual,
      $num_rapport
    ) {
        $this->db->where('date_hospitalization_a', $this->session->userdata('add_date'));
        $q = $this->db->get('Hospitalization_a');
        if ($q->num_rows() == 0) {
            return $this->db->set(array(
          'e_beds' => $e_beds,
          'e_present_start' => $e_present_start,
          'e_admissions' => $e_admissions,
          'e_referred' => $e_referred,
          'e_no_referred' => $e_no_referred,
          'e_discharges' => $e_discharges,
          'e_authorized' => $e_authorized,
          'e_abandoned' => $e_abandoned,
          'e_deaths' => $e_deaths,
          'e_dis_referred' => $e_dis_referred,
          'e_counter' => $e_counter,
          'e_present_end' => $e_present_end,
          'e_total' => $e_total,
          'e_actual' => $e_actual,

      'num_rapport' => $num_rapport
    ))
            ->set('date_hospitalization_a', $this->session->userdata('add_date'))
            ->insert('Hospitalization_a');
        } else {
            $this->db->set(array(
                'e_beds' => $e_beds,
                'e_present_start' => $e_present_start,
                'e_admissions' => $e_admissions,
                'e_referred' => $e_referred,
                'e_no_referred' => $e_no_referred,
                'e_discharges' => $e_discharges,
                'e_authorized' => $e_authorized,
                'e_abandoned' => $e_abandoned,
                'e_deaths' => $e_deaths,
                'e_dis_referred' => $e_dis_referred,
                'e_counter' => $e_counter,
                'e_present_end' => $e_present_end,
                'e_total' => $e_total,
                'e_actual' => $e_actual,

            'num_rapport' => $num_rapport
          ))
          ->where('date_hospitalization_a', $this->session->userdata('add_date'));
            return $this->db->update('Hospitalization_a');
        }
    }

    public function fetch_data3(
      $hosp_1m,
      $hosp_1f,
      $hosp_4m,
      $hosp_4f,
      $hosp_19m,
      $hosp_19f,
      $hosp_20m,
      $hosp_20f,

      $deaths_1m,
      $deaths_1f,
      $deaths_4m,
      $deaths_4f,
      $deaths_19m,
      $deaths_19f,
      $deaths_20m,
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

      $malaria_sim_hos5m,
      $malaria_sim_hos5f,
      $malaria_sim_hos19m,
      $malaria_sim_hos19f,
      $malaria_sim_hos20m,
      $malaria_sim_hos20f,

      $malaria_sev_hos5m,
      $malaria_sev_hos5f,
      $malaria_sev_hos19m,
      $malaria_sev_hos19f,
      $malaria_sev_hos20m,
      $malaria_sev_hos20f,
      $malaria_sev_deaths5m,
      $malaria_sev_deaths5f,
      $malaria_sev_deaths19m,
      $malaria_sev_deaths19f,
      $malaria_sev_deaths20m,
      $malaria_sev_deaths20f,

      $borreliosis_hos5m,
      $borreliosis_hos5f,
      $borreliosis_hos19m,
      $borreliosis_hos19f,
      $borreliosis_hos20m,
      $borreliosis_hos20f,
      $borreliosis_deaths5m,
      $borreliosis_deaths5f,
      $borreliosis_deaths19m,
      $borreliosis_deaths19f,
      $borreliosis_deaths20m,
      $borreliosis_deaths20f,

      $pneumonia_sim_hos5m,
      $pneumonia_sim_hos5f,
      $pneumonia_sim_hos19m,
      $pneumonia_sim_hos19f,
      $pneumonia_sim_hos20m,
      $pneumonia_sim_hos20f,
      $pneumonia_sim_deaths5m,
      $pneumonia_sim_deaths5f,
      $pneumonia_sim_deaths19m,
      $pneumonia_sim_deaths19f,
      $pneumonia_sim_deaths20m,
      $pneumonia_sim_deaths20f,

      $pneumonia_sev_hos5m,
      $pneumonia_sev_hos5f,
      $pneumonia_sev_hos19m,
      $pneumonia_sev_hos19f,
      $pneumonia_sev_hos20m,
      $pneumonia_sev_hos20f,
      $pneumonia_sev_deaths5m,
      $pneumonia_sev_deaths5f,
      $pneumonia_sev_deaths19m,
      $pneumonia_sev_deaths19f,
      $pneumonia_sev_deaths20m,
      $pneumonia_sev_deaths20f,

      $pleurisy_hos5m,
      $pleurisy_hos5f,
      $pleurisy_hos19m,
      $pleurisy_hos19f,
      $pleurisy_hos20m,
      $pleurisy_hos20f,
      $pleurisy_deaths5m,
      $pleurisy_deaths5f,
      $pleurisy_deaths19m,
      $pleurisy_deaths19f,
      $pleurisy_deaths20m,
      $pleurisy_deaths20f,

      $ari_hos5m,
      $ari_hos5f,
      $ari_hos19m,
      $ari_hos19f,
      $ari_hos20m,
      $ari_hos20f,
      $ari_deaths5m,
      $ari_deaths5f,
      $ari_deaths19m,
      $ari_deaths19f,
      $ari_deaths20m,
      $ari_deaths20f,

      $diarr_bloody_hos5m,
      $diarr_bloody_hos5f,
      $diarr_bloody_hos19m,
      $diarr_bloody_hos19f,
      $diarr_bloody_hos20m,
      $diarr_bloody_hos20f,
      $diarr_bloody_deaths5m,
      $diarr_bloody_deaths5f,
      $diarr_bloody_deaths19m,
      $diarr_bloody_deaths19f,
      $diarr_bloody_deaths20m,
      $diarr_bloody_deaths20f,

      $diarr_dehy_hos5m,
      $diarr_dehy_hos5f,
      $diarr_dehy_hos19m,
      $diarr_dehy_hos19f,
      $diarr_dehy_hos20m,
      $diarr_dehy_hos20f,
      $diarr_dehy_deaths5m,
      $diarr_dehy_deaths5f,
      $diarr_dehy_deaths19m,
      $diarr_dehy_deaths19f,
      $diarr_dehy_deaths20m,
      $diarr_dehy_deaths20f,

      $diarr_no_dehy_hos5m,
      $diarr_no_dehy_hos5f,
      $diarr_no_dehy_hos19m,
      $diarr_no_dehy_hos19f,
      $diarr_no_dehy_hos20m,
      $diarr_no_dehy_hos20f,
      $diarr_no_dehy_deaths5m,
      $diarr_no_dehy_deaths5f,
      $diarr_no_dehy_deaths19m,
      $diarr_no_dehy_deaths19f,
      $diarr_no_dehy_deaths20m,
      $diarr_no_dehy_deaths20f,

      $cholera_hos5m,
      $cholera_hos5f,
      $cholera_hos19m,
      $cholera_hos19f,
      $cholera_hos20m,
      $cholera_hos20f,
      $cholera_deaths5m,
      $cholera_deaths5f,
      $cholera_deaths19m,
      $cholera_deaths19f,
      $cholera_deaths20m,
      $cholera_deaths20f,

      $typhoid_hos5m,
      $typhoid_hos5f,
      $typhoid_hos19m,
      $typhoid_hos19f,
      $typhoid_hos20m,
      $typhoid_hos20f,
      $typhoid_deaths5m,
      $typhoid_deaths5f,
      $typhoid_deaths19m,
      $typhoid_deaths19f,
      $typhoid_deaths20m,
      $typhoid_deaths20f,

      $meningitis_hos5m,
      $meningitis_hos5f,
      $meningitis_hos19m,
      $meningitis_hos19f,
      $meningitis_hos20m,
      $meningitis_hos20f,
      $meningitis_deaths5m,
      $meningitis_deaths5f,
      $meningitis_deaths19m,
      $meningitis_deaths19f,
      $meningitis_deaths20m,
      $meningitis_deaths20f,

      $measles_hos5m,
      $measles_hos5f,
      $measles_hos19m,
      $measles_hos19f,
      $measles_hos20m,
      $measles_hos20f,
      $measles_deaths5m,
      $measles_deaths5f,
      $measles_deaths19m,
      $measles_deaths19f,
      $measles_deaths20m,
      $measles_deaths20f,

      $tb_conf_hos5m,
      $tb_conf_hos5f,
      $tb_conf_hos19m,
      $tb_conf_hos19f,
      $tb_conf_hos20m,
      $tb_conf_hos20f,
      $tb_conf_deaths5m,
      $tb_conf_deaths5f,
      $tb_conf_deaths19m,
      $tb_conf_deaths19f,
      $tb_conf_deaths20m,
      $tb_conf_deaths20f,

      $tb_diag_hos5m,
      $tb_diag_hos5f,
      $tb_diag_hos19m,
      $tb_diag_hos19f,
      $tb_diag_hos20m,
      $tb_diag_hos20f,
      $tb_diag_deaths5m,
      $tb_diag_deaths5f,
      $tb_diag_deaths19m,
      $tb_diag_deaths19f,
      $tb_diag_deaths20m,
      $tb_diag_deaths20f,

      $fever_hos5m,
      $fever_hos5f,
      $fever_hos19m,
      $fever_hos19f,
      $fever_hos20m,
      $fever_hos20f,
      $fever_deaths5m,
      $fever_deaths5f,
      $fever_deaths19m,
      $fever_deaths19f,
      $fever_deaths20m,
      $fever_deaths20f,

      $encephalitis_hos5m,
      $encephalitis_hos5f,
      $encephalitis_hos19m,
      $encephalitis_hos19f,
      $encephalitis_hos20m,
      $encephalitis_hos20f,
      $encephalitis_deaths5m,
      $encephalitis_deaths5f,
      $encephalitis_deaths19m,
      $encephalitis_deaths19f,
      $encephalitis_deaths20m,
      $encephalitis_deaths20f,

      $mening_crypto_hos5m,
      $mening_crypto_hos5f,
      $mening_crypto_hos19m,
      $mening_crypto_hos19f,
      $mening_crypto_hos20m,
      $mening_crypto_hos20f,
      $mening_crypto_deaths5m,
      $mening_crypto_deaths5f,
      $mening_crypto_deaths19m,
      $mening_crypto_deaths19f,
      $mening_crypto_deaths20m,
      $mening_crypto_deaths20f,

      $skin_hos5m,
      $skin_hos5f,
      $skin_hos19m,
      $skin_hos19f,
      $skin_hos20m,
      $skin_hos20f,
      $skin_deaths5m,
      $skin_deaths5f,
      $skin_deaths19m,
      $skin_deaths19f,
      $skin_deaths20m,
      $skin_deaths20f,

      $diarr_chronic_hos5m,
      $diarr_chronic_hos5f,
      $diarr_chronic_hos19m,
      $diarr_chronic_hos19f,
      $diarr_chronic_hos20m,
      $diarr_chronic_hos20f,
      $diarr_chronic_deaths5m,
      $diarr_chronic_deaths5f,
      $diarr_chronic_deaths19m,
      $diarr_chronic_deaths19f,
      $diarr_chronic_deaths20m,
      $diarr_chronic_deaths20f,

      $hiv_hos5m,
      $hiv_hos5f,
      $hiv_hos19m,
      $hiv_hos19f,
      $hiv_hos20m,
      $hiv_hos20f,
      $hiv_deaths5m,
      $hiv_deaths5f,
      $hiv_deaths19m,
      $hiv_deaths19f,
      $hiv_deaths20m,
      $hiv_deaths20f,

      $trauma_hos5m,
      $trauma_hos5f,
      $trauma_hos19m,
      $trauma_hos19f,
      $trauma_hos20m,
      $trauma_hos20f,
      $trauma_deaths5m,
      $trauma_deaths5f,
      $trauma_deaths19m,
      $trauma_deaths19f,
      $trauma_deaths20m,
      $trauma_deaths20f,

      $spleen_hos5m,
      $spleen_hos5f,
      $spleen_hos19m,
      $spleen_hos19f,
      $spleen_hos20m,
      $spleen_hos20f,
      $spleen_deaths5m,
      $spleen_deaths5f,
      $spleen_deaths19m,
      $spleen_deaths19f,
      $spleen_deaths20m,
      $spleen_deaths20f,

      $frac_open_hos5m,
      $frac_open_hos5f,
      $frac_open_hos19m,
      $frac_open_hos19f,
      $frac_open_hos20m,
      $frac_open_hos20f,
      $frac_open_deaths5m,
      $frac_open_deaths5f,
      $frac_open_deaths19m,
      $frac_open_deaths19f,
      $frac_open_deaths20m,
      $frac_open_deaths20f,

      $frac_int_hos5m,
      $frac_int_hos5f,
      $frac_int_hos19m,
      $frac_int_hos19f,
      $frac_int_hos20m,
      $frac_int_hos20f,
      $frac_int_deaths5m,
      $frac_int_deaths5f,
      $frac_int_deaths19m,
      $frac_int_deaths19f,
      $frac_int_deaths20m,
      $frac_int_deaths20f,

      $trauma_other_hos5m,
      $trauma_other_hos5f,
      $trauma_other_hos19m,
      $trauma_other_hos19f,
      $trauma_other_hos20m,
      $trauma_other_hos20f,
      $trauma_other_deaths5m,
      $trauma_other_deaths5f,
      $trauma_other_deaths19m,
      $trauma_other_deaths19f,
      $trauma_other_deaths20m,
      $trauma_other_deaths20f,

      $burns_hos5m,
      $burns_hos5f,
      $burns_hos19m,
      $burns_hos19f,
      $burns_hos20m,
      $burns_hos20f,
      $burns_deaths5m,
      $burns_deaths5f,
      $burns_deaths19m,
      $burns_deaths19f,
      $burns_deaths20m,
      $burns_deaths20f,

      $hepatitis_hos5m,
      $hepatitis_hos5f,
      $hepatitis_hos19m,
      $hepatitis_hos19f,
      $hepatitis_hos20m,
      $hepatitis_hos20f,
      $hepatitis_deaths5m,
      $hepatitis_deaths5f,
      $hepatitis_deaths19m,
      $hepatitis_deaths19f,
      $hepatitis_deaths20m,
      $hepatitis_deaths20f,

      $cirrhosis_hos5m,
      $cirrhosis_hos5f,
      $cirrhosis_hos19m,
      $cirrhosis_hos19f,
      $cirrhosis_hos20m,
      $cirrhosis_hos20f,
      $cirrhosis_deaths5m,
      $cirrhosis_deaths5f,
      $cirrhosis_deaths19m,
      $cirrhosis_deaths19f,
      $cirrhosis_deaths20m,
      $cirrhosis_deaths20f,

      $digestive_hos5m,
      $digestive_hos5f,
      $digestive_hos19m,
      $digestive_hos19f,
      $digestive_hos20m,
      $digestive_hos20f,
      $digestive_deaths5m,
      $digestive_deaths5f,
      $digestive_deaths19m,
      $digestive_deaths19f,
      $digestive_deaths20m,
      $digestive_deaths20f,

      $gastritis_hos5m,
      $gastritis_hos5f,
      $gastritis_hos19m,
      $gastritis_hos19f,
      $gastritis_hos20m,
      $gastritis_hos20f,
      $gastritis_deaths5m,
      $gastritis_deaths5f,
      $gastritis_deaths19m,
      $gastritis_deaths19f,
      $gastritis_deaths20m,
      $gastritis_deaths20f,

      $ulcer_hos5m,
      $ulcer_hos5f,
      $ulcer_hos19m,
      $ulcer_hos19f,
      $ulcer_hos20m,
      $ulcer_hos20f,
      $ulcer_deaths5m,
      $ulcer_deaths5f,
      $ulcer_deaths19m,
      $ulcer_deaths19f,
      $ulcer_deaths20m,
      $ulcer_deaths20f,

      $appendi_hos5m,
      $appendi_hos5f,
      $appendi_hos19m,
      $appendi_hos19f,
      $appendi_hos20m,
      $appendi_hos20f,
      $appendi_deaths5m,
      $appendi_deaths5f,
      $appendi_deaths19m,
      $appendi_deaths19f,
      $appendi_deaths20m,
      $appendi_deaths20f,

      $hernia_hos5m,
      $hernia_hos5f,
      $hernia_hos19m,
      $hernia_hos19f,
      $hernia_hos20m,
      $hernia_hos20f,
      $hernia_deaths5m,
      $hernia_deaths5f,
      $hernia_deaths19m,
      $hernia_deaths19f,
      $hernia_deaths20m,
      $hernia_deaths20f,

      $peritonitis_hos5m,
      $peritonitis_hos5f,
      $peritonitis_hos19m,
      $peritonitis_hos19f,
      $peritonitis_hos20m,
      $peritonitis_hos20f,
      $peritonitis_deaths5m,
      $peritonitis_deaths5f,
      $peritonitis_deaths19m,
      $peritonitis_deaths19f,
      $peritonitis_deaths20m,
      $peritonitis_deaths20f,

      $intestinal_hos5m,
      $intestinal_hos5f,
      $intestinal_hos19m,
      $intestinal_hos19f,
      $intestinal_hos20m,
      $intestinal_hos20f,
      $intestinal_deaths5m,
      $intestinal_deaths5f,
      $intestinal_deaths19m,
      $intestinal_deaths19f,
      $intestinal_deaths20m,
      $intestinal_deaths20f,

      $urinary_hos5m,
      $urinary_hos5f,
      $urinary_hos19m,
      $urinary_hos19f,
      $urinary_hos20m,
      $urinary_hos20f,
      $urinary_deaths5m,
      $urinary_deaths5f,
      $urinary_deaths19m,
      $urinary_deaths19f,
      $urinary_deaths20m,
      $urinary_deaths20f,

      $bone_inf_hos5m,
      $bone_inf_hos5f,
      $bone_inf_hos19m,
      $bone_inf_hos19f,
      $bone_inf_hos20m,
      $bone_inf_hos20f,
      $bone_inf_deaths5m,
      $bone_inf_deaths5f,
      $bone_inf_deaths19m,
      $bone_inf_deaths19f,
      $bone_inf_deaths20m,
      $bone_inf_deaths20f,

      $bone_other_hos5m,
      $bone_other_hos5f,
      $bone_other_hos19m,
      $bone_other_hos19f,
      $bone_other_hos20m,
      $bone_other_hos20f,
      $bone_other_deaths5m,
      $bone_other_deaths5f,
      $bone_other_deaths19m,
      $bone_other_deaths19f,
      $bone_other_deaths20m,
      $bone_other_deaths20f,

      $acute_hos5m,
      $acute_hos5f,
      $acute_hos19m,
      $acute_hos19f,
      $acute_hos20m,
      $acute_hos20f,
      $acute_deaths5m,
      $acute_deaths5f,
      $acute_deaths19m,
      $acute_deaths19f,
      $acute_deaths20m,
      $acute_deaths20f,

      $gyneco_hos19f,
      $gyneco_hos20f,
      $gyneco_deaths19f,
      $gyneco_deaths20f,

      $mastoditis_hos5m,
      $mastoditis_hos5f,
      $mastoditis_hos19m,
      $mastoditis_hos19f,
      $mastoditis_hos20m,
      $mastoditis_hos20f,
      $mastoditis_deaths5m,
      $mastoditis_deaths5f,
      $mastoditis_deaths19m,
      $mastoditis_deaths19f,
      $mastoditis_deaths20m,
      $mastoditis_deaths20f,

      $tetanus_hos5m,
      $tetanus_hos5f,
      $tetanus_hos19m,
      $tetanus_hos19f,
      $tetanus_hos20m,
      $tetanus_hos20f,
      $tetanus_deaths5m,
      $tetanus_deaths5f,
      $tetanus_deaths19m,
      $tetanus_deaths19f,
      $tetanus_deaths20m,
      $tetanus_deaths20f,

      $cancer_hos5m,
      $cancer_hos5f,
      $cancer_hos19m,
      $cancer_hos19f,
      $cancer_hos20m,
      $cancer_hos20f,
      $cancer_deaths5m,
      $cancer_deaths5f,
      $cancer_deaths19m,
      $cancer_deaths19f,
      $cancer_deaths20m,
      $cancer_deaths20f,
        $num_rapport
    ) {
        return $this->db->set(array(
          'hosp_1m' => $hosp_1m,
          'hosp_1f' => $hosp_1f,
          'hosp_4m' => $hosp_4m,
          'hosp_4f' => $hosp_4f,
          'hosp_19m' => $hosp_19m,
          'hosp_19f' => $hosp_19f,
          'hosp_20m' => $hosp_20m,
          'hosp_20f' => $hosp_20f,

          'deaths_1m' => $deaths_1m,
          'deaths_1f' => $deaths_1f,
          'deaths_4m' => $deaths_4m,
          'deaths_4f' => $deaths_4f,
          'deaths_19m' => $deaths_19m,
          'deaths_19f' => $deaths_19f,
          'deaths_20m' => $deaths_20m,
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

          'malaria_sim_hos5m' => $malaria_sim_hos5m,
          'malaria_sim_hos5f' => $malaria_sim_hos5f,
          'malaria_sim_hos19m' => $malaria_sim_hos19m,
          'malaria_sim_hos19f' => $malaria_sim_hos19f,
          'malaria_sim_hos20m' => $malaria_sim_hos20m,
          'malaria_sim_hos20f' => $malaria_sim_hos20f,

          'malaria_sev_hos5m' => $malaria_sev_hos5m,
          'malaria_sev_hos5f' => $malaria_sev_hos5f,
          'malaria_sev_hos19m' => $malaria_sev_hos19m,
          'malaria_sev_hos19f' => $malaria_sev_hos19f,
          'malaria_sev_hos20m' => $malaria_sev_hos20m,
          'malaria_sev_hos20f' => $malaria_sev_hos20f,
          'malaria_sev_deaths5m' => $malaria_sev_deaths5m,
          'malaria_sev_deaths5f' => $malaria_sev_deaths5f,
          'malaria_sev_deaths19m' => $malaria_sev_deaths19m,
          'malaria_sev_deaths19f' => $malaria_sev_deaths19f,
          'malaria_sev_deaths20m' => $malaria_sev_deaths20m,
          'malaria_sev_deaths20f' => $malaria_sev_deaths20f,

          'borreliosis_hos5m' => $borreliosis_hos5m,
          'borreliosis_hos5f' => $borreliosis_hos5f,
          'borreliosis_hos19m' => $borreliosis_hos19m,
          'borreliosis_hos19f' => $borreliosis_hos19f,
          'borreliosis_hos20m' => $borreliosis_hos20m,
          'borreliosis_hos20f' => $borreliosis_hos20f,
          'borreliosis_deaths5m' => $borreliosis_deaths5m,
          'borreliosis_deaths5f' => $borreliosis_deaths5f,
          'borreliosis_deaths19m' => $borreliosis_deaths19m,
          'borreliosis_deaths19f' => $borreliosis_deaths19f,
          'borreliosis_deaths20m' => $borreliosis_deaths20m,
          'borreliosis_deaths20f' => $borreliosis_deaths20f,

          'pneumonia_sim_hos5m' => $pneumonia_sim_hos5m,
          'pneumonia_sim_hos5f' => $pneumonia_sim_hos5f,
          'pneumonia_sim_hos19m' => $pneumonia_sim_hos19m,
          'pneumonia_sim_hos19f' => $pneumonia_sim_hos19f,
          'pneumonia_sim_hos20m' => $pneumonia_sim_hos20m,
          'pneumonia_sim_hos20f' => $pneumonia_sim_hos20f,
          'pneumonia_sim_deaths5m' => $pneumonia_sim_deaths5m,
          'pneumonia_sim_deaths5f' => $pneumonia_sim_deaths5f,
          'pneumonia_sim_deaths19m' => $pneumonia_sim_deaths19m,
          'pneumonia_sim_deaths19f' => $pneumonia_sim_deaths19f,
          'pneumonia_sim_deaths20m' => $pneumonia_sim_deaths20m,
          'pneumonia_sim_deaths20f' => $pneumonia_sim_deaths20f,

          'pneumonia_sev_hos5m' => $pneumonia_sev_hos5m,
          'pneumonia_sev_hos5f' => $pneumonia_sev_hos5f,
          'pneumonia_sev_hos19m' => $pneumonia_sev_hos19m,
          'pneumonia_sev_hos19f' => $pneumonia_sev_hos19f,
          'pneumonia_sev_hos20m' => $pneumonia_sev_hos20m,
          'pneumonia_sev_hos20f' => $pneumonia_sev_hos20f,
          'pneumonia_sev_deaths5m' => $pneumonia_sev_deaths5m,
          'pneumonia_sev_deaths5f' => $pneumonia_sev_deaths5f,
          'pneumonia_sev_deaths19m' => $pneumonia_sev_deaths19m,
          'pneumonia_sev_deaths19f' => $pneumonia_sev_deaths19f,
          'pneumonia_sev_deaths20m' => $pneumonia_sev_deaths20m,
          'pneumonia_sev_deaths20f' => $pneumonia_sev_deaths20f,

          'pleurisy_hos5m' => $pleurisy_hos5m,
          'pleurisy_hos5f' => $pleurisy_hos5f,
          'pleurisy_hos19m' => $pleurisy_hos19m,
          'pleurisy_hos19f' => $pleurisy_hos19f,
          'pleurisy_hos20m' => $pleurisy_hos20m,
          'pleurisy_hos20f' => $pleurisy_hos20f,
          'pleurisy_deaths5m' => $pleurisy_deaths5m,
          'pleurisy_deaths5f' => $pleurisy_deaths5f,
          'pleurisy_deaths19m' => $pleurisy_deaths19m,
          'pleurisy_deaths19f' => $pleurisy_deaths19f,
          'pleurisy_deaths20m' => $pleurisy_deaths20m,
          'pleurisy_deaths20f' => $pleurisy_deaths20f,

          'ari_hos5m' => $ari_hos5m,
          'ari_hos5f' => $ari_hos5f,
          'ari_hos19m' => $ari_hos19m,
          'ari_hos19f' => $ari_hos19f,
          'ari_hos20m' => $ari_hos20m,
          'ari_hos20f' => $ari_hos20f,
          'ari_deaths5m' => $ari_deaths5m,
          'ari_deaths5f' => $ari_deaths5f,
          'ari_deaths19m' => $ari_deaths19m,
          'ari_deaths19f' => $ari_deaths19f,
          'ari_deaths20m' => $ari_deaths20m,
          'ari_deaths20f' => $ari_deaths20f,

          'diarr_bloody_hos5m' => $diarr_bloody_hos5m,
          'diarr_bloody_hos5f' => $diarr_bloody_hos5f,
          'diarr_bloody_hos19m' => $diarr_bloody_hos19m,
          'diarr_bloody_hos19f' => $diarr_bloody_hos19f,
          'diarr_bloody_hos20m' => $diarr_bloody_hos20m,
          'diarr_bloody_hos20f' => $diarr_bloody_hos20f,
          'diarr_bloody_deaths5m' => $diarr_bloody_deaths5m,
          'diarr_bloody_deaths5f' => $diarr_bloody_deaths5f,
          'diarr_bloody_deaths19m' => $diarr_bloody_deaths19m,
          'diarr_bloody_deaths19f' => $diarr_bloody_deaths19f,
          'diarr_bloody_deaths20m' => $diarr_bloody_deaths20m,
          'diarr_bloody_deaths20f' => $diarr_bloody_deaths20f,

          'diarr_dehy_hos5m' => $diarr_dehy_hos5m,
          'diarr_dehy_hos5f' => $diarr_dehy_hos5f,
          'diarr_dehy_hos19m' => $diarr_dehy_hos19m,
          'diarr_dehy_hos19f' => $diarr_dehy_hos19f,
          'diarr_dehy_hos20m' => $diarr_dehy_hos20m,
          'diarr_dehy_hos20f' => $diarr_dehy_hos20f,
          'diarr_dehy_deaths5m' => $diarr_dehy_deaths5m,
          'diarr_dehy_deaths5f' => $diarr_dehy_deaths5f,
          'diarr_dehy_deaths19m' => $diarr_dehy_deaths19m,
          'diarr_dehy_deaths19f' => $diarr_dehy_deaths19f,
          'diarr_dehy_deaths20m' => $diarr_dehy_deaths20m,
          'diarr_dehy_deaths20f' => $diarr_dehy_deaths20f,

          'diarr_no_dehy_hos5m' => $diarr_no_dehy_hos5m,
          'diarr_no_dehy_hos5f' => $diarr_no_dehy_hos5f,
          'diarr_no_dehy_hos19m' => $diarr_no_dehy_hos19m,
          'diarr_no_dehy_hos19f' => $diarr_no_dehy_hos19f,
          'diarr_no_dehy_hos20m' => $diarr_no_dehy_hos20m,
          'diarr_no_dehy_hos20f' => $diarr_no_dehy_hos20f,
          'diarr_no_dehy_deaths5m' => $diarr_no_dehy_deaths5m,
          'diarr_no_dehy_deaths5f' => $diarr_no_dehy_deaths5f,
          'diarr_no_dehy_deaths19m' => $diarr_no_dehy_deaths19m,
          'diarr_no_dehy_deaths19f' => $diarr_no_dehy_deaths19f,
          'diarr_no_dehy_deaths20m' => $diarr_no_dehy_deaths20m,
          'diarr_no_dehy_deaths20f' => $diarr_no_dehy_deaths20f,

          'cholera_hos5m' => $cholera_hos5m,
          'cholera_hos5f' => $cholera_hos5f,
          'cholera_hos19m' => $cholera_hos19m,
          'cholera_hos19f' => $cholera_hos19f,
          'cholera_hos20m' => $cholera_hos20m,
          'cholera_hos20f' => $cholera_hos20f,
          'cholera_deaths5m' => $cholera_deaths5m,
          'cholera_deaths5f' => $cholera_deaths5f,
          'cholera_deaths19m' => $cholera_deaths19m,
          'cholera_deaths19f' => $cholera_deaths19f,
          'cholera_deaths20m' => $cholera_deaths20m,
          'cholera_deaths20f' => $cholera_deaths20f,

          'typhoid_hos5m' => $typhoid_hos5m,
          'typhoid_hos5f' => $typhoid_hos5f,
          'typhoid_hos19m' => $typhoid_hos19m,
          'typhoid_hos19f' => $typhoid_hos19f,
          'typhoid_hos20m' => $typhoid_hos20m,
          'typhoid_hos20f' => $typhoid_hos20f,
          'typhoid_deaths5m' => $typhoid_deaths5m,
          'typhoid_deaths5f' => $typhoid_deaths5f,
          'typhoid_deaths19m' => $typhoid_deaths19m,
          'typhoid_deaths19f' => $typhoid_deaths19f,
          'typhoid_deaths20m' => $typhoid_deaths20m,
          'typhoid_deaths20f' => $typhoid_deaths20f,

          'meningitis_hos5m' => $meningitis_hos5m,
          'meningitis_hos5f' => $meningitis_hos5f,
          'meningitis_hos19m' => $meningitis_hos19m,
          'meningitis_hos19f' => $meningitis_hos19f,
          'meningitis_hos20m' => $meningitis_hos20m,
          'meningitis_hos20f' => $meningitis_hos20f,
          'meningitis_deaths5m' => $meningitis_deaths5m,
          'meningitis_deaths5f' => $meningitis_deaths5f,
          'meningitis_deaths19m' => $meningitis_deaths19m,
          'meningitis_deaths19f' => $meningitis_deaths19f,
          'meningitis_deaths20m' => $meningitis_deaths20m,
          'meningitis_deaths20f' => $meningitis_deaths20f,

          'measles_hos5m' => $measles_hos5m,
          'measles_hos5f' => $measles_hos5f,
          'measles_hos19m' => $measles_hos19m,
          'measles_hos19f' => $measles_hos19f,
          'measles_hos20m' => $measles_hos20m,
          'measles_hos20f' => $measles_hos20f,
          'measles_deaths5m' => $measles_deaths5m,
          'measles_deaths5f' => $measles_deaths5f,
          'measles_deaths19m' => $measles_deaths19m,
          'measles_deaths19f' => $measles_deaths19f,
          'measles_deaths20m' => $measles_deaths20m,
          'measles_deaths20f' => $measles_deaths20f,

          'tb_conf_hos5m' => $tb_conf_hos5m,
          'tb_conf_hos5f' => $tb_conf_hos5f,
          'tb_conf_hos19m' => $tb_conf_hos19m,
          'tb_conf_hos19f' => $tb_conf_hos19f,
          'tb_conf_hos20m' => $tb_conf_hos20m,
          'tb_conf_hos20f' => $tb_conf_hos20f,
          'tb_conf_deaths5m' => $tb_conf_deaths5m,
          'tb_conf_deaths5f' => $tb_conf_deaths5f,
          'tb_conf_deaths19m' => $tb_conf_deaths19m,
          'tb_conf_deaths19f' => $tb_conf_deaths19f,
          'tb_conf_deaths20m' => $tb_conf_deaths20m,
          'tb_conf_deaths20f' => $tb_conf_deaths20f,

          'tb_diag_hos5m' => $tb_diag_hos5m,
          'tb_diag_hos5f' => $tb_diag_hos5f,
          'tb_diag_hos19m' => $tb_diag_hos19m,
          'tb_diag_hos19f' => $tb_diag_hos19f,
          'tb_diag_hos20m' => $tb_diag_hos20m,
          'tb_diag_hos20f' => $tb_diag_hos20f,
          'tb_diag_deaths5m' => $tb_diag_deaths5m,
          'tb_diag_deaths5f' => $tb_diag_deaths5f,
          'tb_diag_deaths19m' => $tb_diag_deaths19m,
          'tb_diag_deaths19f' => $tb_diag_deaths19f,
          'tb_diag_deaths20m' => $tb_diag_deaths20m,
          'tb_diag_deaths20f' => $tb_diag_deaths20f,

          'fever_hos5m' => $fever_hos5m,
          'fever_hos5f' => $fever_hos5f,
          'fever_hos19m' => $fever_hos19m,
          'fever_hos19f' => $fever_hos19f,
          'fever_hos20m' => $fever_hos20m,
          'fever_hos20f' => $fever_hos20f,
          'fever_deaths5m' => $fever_deaths5m,
          'fever_deaths5f' => $fever_deaths5f,
          'fever_deaths19m' => $fever_deaths19m,
          'fever_deaths19f' => $fever_deaths19f,
          'fever_deaths20m' => $fever_deaths20m,
          'fever_deaths20f' => $fever_deaths20f,

          'encephalitis_hos5m' => $encephalitis_hos5m,
          'encephalitis_hos5f' => $encephalitis_hos5f,
          'encephalitis_hos19m' => $encephalitis_hos19m,
          'encephalitis_hos19f' => $encephalitis_hos19f,
          'encephalitis_hos20m' => $encephalitis_hos20m,
          'encephalitis_hos20f' => $encephalitis_hos20f,
          'encephalitis_deaths5m' => $encephalitis_deaths5m,
          'encephalitis_deaths5f' => $encephalitis_deaths5f,
          'encephalitis_deaths19m' => $encephalitis_deaths19m,
          'encephalitis_deaths19f' => $encephalitis_deaths19f,
          'encephalitis_deaths20m' => $encephalitis_deaths20m,
          'encephalitis_deaths20f' => $encephalitis_deaths20f,

          'mening_crypto_hos5m' => $mening_crypto_hos5m,
          'mening_crypto_hos5f' => $mening_crypto_hos5f,
          'mening_crypto_hos19m' => $mening_crypto_hos19m,
          'mening_crypto_hos19f' => $mening_crypto_hos19f,
          'mening_crypto_hos20m' => $mening_crypto_hos20m,
          'mening_crypto_hos20f' => $mening_crypto_hos20f,
          'mening_crypto_deaths5m' => $mening_crypto_deaths5m,
          'mening_crypto_deaths5f' => $mening_crypto_deaths5f,
          'mening_crypto_deaths19m' => $mening_crypto_deaths19m,
          'mening_crypto_deaths19f' => $mening_crypto_deaths19f,
          'mening_crypto_deaths20m' => $mening_crypto_deaths20m,
          'mening_crypto_deaths20f' => $mening_crypto_deaths20f,

          'skin_hos5m' => $skin_hos5m,
          'skin_hos5f' => $skin_hos5f,
          'skin_hos19m' => $skin_hos19m,
          'skin_hos19f' => $skin_hos19f,
          'skin_hos20m' => $skin_hos20m,
          'skin_hos20f' => $skin_hos20f,
          'skin_deaths5m' => $skin_deaths5m,
          'skin_deaths5f' => $skin_deaths5f,
          'skin_deaths19m' => $skin_deaths19m,
          'skin_deaths19f' => $skin_deaths19f,
          'skin_deaths20m' => $skin_deaths20m,
          'skin_deaths20f' => $skin_deaths20f,

          'diarr_chronic_hos5m' => $diarr_chronic_hos5m,
          'diarr_chronic_hos5f' => $diarr_chronic_hos5f,
          'diarr_chronic_hos19m' => $diarr_chronic_hos19m,
          'diarr_chronic_hos19f' => $diarr_chronic_hos19f,
          'diarr_chronic_hos20m' => $diarr_chronic_hos20m,
          'diarr_chronic_hos20f' => $diarr_chronic_hos20f,
          'diarr_chronic_deaths5m' => $diarr_chronic_deaths5m,
          'diarr_chronic_deaths5f' => $diarr_chronic_deaths5f,
          'diarr_chronic_deaths19m' => $diarr_chronic_deaths19m,
          'diarr_chronic_deaths19f' => $diarr_chronic_deaths19f,
          'diarr_chronic_deaths20m' => $diarr_chronic_deaths20m,
          'diarr_chronic_deaths20f' => $diarr_chronic_deaths20f,

          'hiv_hos5m' => $hiv_hos5m,
          'hiv_hos5f' => $hiv_hos5f,
          'hiv_hos19m' => $hiv_hos19m,
          'hiv_hos19f' => $hiv_hos19f,
          'hiv_hos20m' => $hiv_hos20m,
          'hiv_hos20f' => $hiv_hos20f,
          'hiv_deaths5m' => $hiv_deaths5m,
          'hiv_deaths5f' => $hiv_deaths5f,
          'hiv_deaths19m' => $hiv_deaths19m,
          'hiv_deaths19f' => $hiv_deaths19f,
          'hiv_deaths20m' => $hiv_deaths20m,
          'hiv_deaths20f' => $hiv_deaths20f,

          'trauma_hos5m' => $trauma_hos5m,
          'trauma_hos5f' => $trauma_hos5f,
          'trauma_hos19m' => $trauma_hos19m,
          'trauma_hos19f' => $trauma_hos19f,
          'trauma_hos20m' => $trauma_hos20m,
          'trauma_hos20f' => $trauma_hos20f,
          'trauma_deaths5m' => $trauma_deaths5m,
          'trauma_deaths5f' => $trauma_deaths5f,
          'trauma_deaths19m' => $trauma_deaths19m,
          'trauma_deaths19f' => $trauma_deaths19f,
          'trauma_deaths20m' => $trauma_deaths20m,
          'trauma_deaths20f' => $trauma_deaths20f,

          'spleen_hos5m' => $spleen_hos5m,
          'spleen_hos5f' => $spleen_hos5f,
          'spleen_hos19m' => $spleen_hos19m,
          'spleen_hos19f' => $spleen_hos19f,
          'spleen_hos20m' => $spleen_hos20m,
          'spleen_hos20f' => $spleen_hos20f,
          'spleen_deaths5m' => $spleen_deaths5m,
          'spleen_deaths5f' => $spleen_deaths5f,
          'spleen_deaths19m' => $spleen_deaths19m,
          'spleen_deaths19f' => $spleen_deaths19f,
          'spleen_deaths20m' => $spleen_deaths20m,
          'spleen_deaths20f' => $spleen_deaths20f,

          'frac_open_hos5m' => $frac_open_hos5m,
          'frac_open_hos5f' => $frac_open_hos5f,
          'frac_open_hos19m' => $frac_open_hos19m,
          'frac_open_hos19f' => $frac_open_hos19f,
          'frac_open_hos20m' => $frac_open_hos20m,
          'frac_open_hos20f' => $frac_open_hos20f,
          'frac_open_deaths5m' => $frac_open_deaths5m,
          'frac_open_deaths5f' => $frac_open_deaths5f,
          'frac_open_deaths19m' => $frac_open_deaths19m,
          'frac_open_deaths19f' => $frac_open_deaths19f,
          'frac_open_deaths20m' => $frac_open_deaths20m,
          'frac_open_deaths20f' => $frac_open_deaths20f,

          'frac_int_hos5m' => $frac_int_hos5m,
          'frac_int_hos5f' => $frac_int_hos5f,
          'frac_int_hos19m' => $frac_int_hos19m,
          'frac_int_hos19f' => $frac_int_hos19f,
          'frac_int_hos20m' => $frac_int_hos20m,
          'frac_int_hos20f' => $frac_int_hos20f,
          'frac_int_deaths5m' => $frac_int_deaths5m,
          'frac_int_deaths5f' => $frac_int_deaths5f,
          'frac_int_deaths19m' => $frac_int_deaths19m,
          'frac_int_deaths19f' => $frac_int_deaths19f,
          'frac_int_deaths20m' => $frac_int_deaths20m,
          'frac_int_deaths20f' => $frac_int_deaths20f,

          'trauma_other_hos5m' => $trauma_other_hos5m,
          'trauma_other_hos5f' => $trauma_other_hos5f,
          'trauma_other_hos19m' => $trauma_other_hos19m,
          'trauma_other_hos19f' => $trauma_other_hos19f,
          'trauma_other_hos20m' => $trauma_other_hos20m,
          'trauma_other_hos20f' => $trauma_other_hos20f,
          'trauma_other_deaths5m' => $trauma_other_deaths5m,
          'trauma_other_deaths5f' => $trauma_other_deaths5f,
          'trauma_other_deaths19m' => $trauma_other_deaths19m,
          'trauma_other_deaths19f' => $trauma_other_deaths19f,
          'trauma_other_deaths20m' => $trauma_other_deaths20m,
          'trauma_other_deaths20f' => $trauma_other_deaths20f,

          'burns_hos5m' => $burns_hos5m,
          'burns_hos5f' => $burns_hos5f,
          'burns_hos19m' => $burns_hos19m,
          'burns_hos19f' => $burns_hos19f,
          'burns_hos20m' => $burns_hos20m,
          'burns_hos20f' => $burns_hos20f,
          'burns_deaths5m' => $burns_deaths5m,
          'burns_deaths5f' => $burns_deaths5f,
          'burns_deaths19m' => $burns_deaths19m,
          'burns_deaths19f' => $burns_deaths19f,
          'burns_deaths20m' => $burns_deaths20m,
          'burns_deaths20f' => $burns_deaths20f,

          'hepatitis_hos5m' => $hepatitis_hos5m,
          'hepatitis_hos5f' => $hepatitis_hos5f,
          'hepatitis_hos19m' => $hepatitis_hos19m,
          'hepatitis_hos19f' => $hepatitis_hos19f,
          'hepatitis_hos20m' => $hepatitis_hos20m,
          'hepatitis_hos20f' => $hepatitis_hos20f,
          'hepatitis_deaths5m' => $hepatitis_deaths5m,
          'hepatitis_deaths5f' => $hepatitis_deaths5f,
          'hepatitis_deaths19m' => $hepatitis_deaths19m,
          'hepatitis_deaths19f' => $hepatitis_deaths19f,
          'hepatitis_deaths20m' => $hepatitis_deaths20m,
          'hepatitis_deaths20f' => $hepatitis_deaths20f,

          'cirrhosis_hos5m' => $cirrhosis_hos5m,
          'cirrhosis_hos5f' => $cirrhosis_hos5f,
          'cirrhosis_hos19m' => $cirrhosis_hos19m,
          'cirrhosis_hos19f' => $cirrhosis_hos19f,
          'cirrhosis_hos20m' => $cirrhosis_hos20m,
          'cirrhosis_hos20f' => $cirrhosis_hos20f,
          'cirrhosis_deaths5m' => $cirrhosis_deaths5m,
          'cirrhosis_deaths5f' => $cirrhosis_deaths5f,
          'cirrhosis_deaths19m' => $cirrhosis_deaths19m,
          'cirrhosis_deaths19f' => $cirrhosis_deaths19f,
          'cirrhosis_deaths20m' => $cirrhosis_deaths20m,
          'cirrhosis_deaths20f' => $cirrhosis_deaths20f,

          'digestive_hos5m' => $digestive_hos5m,
          'digestive_hos5f' => $digestive_hos5f,
          'digestive_hos19m' => $digestive_hos19m,
          'digestive_hos19f' => $digestive_hos19f,
          'digestive_hos20m' => $digestive_hos20m,
          'digestive_hos20f' => $digestive_hos20f,
          'digestive_deaths5m' => $digestive_deaths5m,
          'digestive_deaths5f' => $digestive_deaths5f,
          'digestive_deaths19m' => $digestive_deaths19m,
          'digestive_deaths19f' => $digestive_deaths19f,
          'digestive_deaths20m' => $digestive_deaths20m,
          'digestive_deaths20f' => $digestive_deaths20f,

          'gastritis_hos5m' => $gastritis_hos5m,
          'gastritis_hos5f' => $gastritis_hos5f,
          'gastritis_hos19m' => $gastritis_hos19m,
          'gastritis_hos19f' => $gastritis_hos19f,
          'gastritis_hos20m' => $gastritis_hos20m,
          'gastritis_hos20f' => $gastritis_hos20f,
          'gastritis_deaths5m' => $gastritis_deaths5m,
          'gastritis_deaths5f' => $gastritis_deaths5f,
          'gastritis_deaths19m' => $gastritis_deaths19m,
          'gastritis_deaths19f' => $gastritis_deaths19f,
          'gastritis_deaths20m' => $gastritis_deaths20m,
          'gastritis_deaths20f' => $gastritis_deaths20f,

          'ulcer_hos5m' => $ulcer_hos5m,
          'ulcer_hos5f' => $ulcer_hos5f,
          'ulcer_hos19m' => $ulcer_hos19m,
          'ulcer_hos19f' => $ulcer_hos19f,
          'ulcer_hos20m' => $ulcer_hos20m,
          'ulcer_hos20f' => $ulcer_hos20f,
          'ulcer_deaths5m' => $ulcer_deaths5m,
          'ulcer_deaths5f' => $ulcer_deaths5f,
          'ulcer_deaths19m' => $ulcer_deaths19m,
          'ulcer_deaths19f' => $ulcer_deaths19f,
          'ulcer_deaths20m' => $ulcer_deaths20m,
          'ulcer_deaths20f' => $ulcer_deaths20f,

          'appendi_hos5m' => $appendi_hos5m,
          'appendi_hos5f' => $appendi_hos5f,
          'appendi_hos19m' => $appendi_hos19m,
          'appendi_hos19f' => $appendi_hos19f,
          'appendi_hos20m' => $appendi_hos20m,
          'appendi_hos20f' => $appendi_hos20f,
          'appendi_deaths5m' => $appendi_deaths5m,
          'appendi_deaths5f' => $appendi_deaths5f,
          'appendi_deaths19m' => $appendi_deaths19m,
          'appendi_deaths19f' => $appendi_deaths19f,
          'appendi_deaths20m' => $appendi_deaths20m,
          'appendi_deaths20f' => $appendi_deaths20f,

          'hernia_hos5m' => $hernia_hos5m,
          'hernia_hos5f' => $hernia_hos5f,
          'hernia_hos19m' => $hernia_hos19m,
          'hernia_hos19f' => $hernia_hos19f,
          'hernia_hos20m' => $hernia_hos20m,
          'hernia_hos20f' => $hernia_hos20f,
          'hernia_deaths5m' => $hernia_deaths5m,
          'hernia_deaths5f' => $hernia_deaths5f,
          'hernia_deaths19m' => $hernia_deaths19m,
          'hernia_deaths19f' => $hernia_deaths19f,
          'hernia_deaths20m' => $hernia_deaths20m,
          'hernia_deaths20f' => $hernia_deaths20f,

          'peritonitis_hos5m' => $peritonitis_hos5m,
          'peritonitis_hos5f' => $peritonitis_hos5f,
          'peritonitis_hos19m' => $peritonitis_hos19m,
          'peritonitis_hos19f' => $peritonitis_hos19f,
          'peritonitis_hos20m' => $peritonitis_hos20m,
          'peritonitis_hos20f' => $peritonitis_hos20f,
          'peritonitis_deaths5m' => $peritonitis_deaths5m,
          'peritonitis_deaths5f' => $peritonitis_deaths5f,
          'peritonitis_deaths19m' => $peritonitis_deaths19m,
          'peritonitis_deaths19f' => $peritonitis_deaths19f,
          'peritonitis_deaths20m' => $peritonitis_deaths20m,
          'peritonitis_deaths20f' => $peritonitis_deaths20f,

          'intestinal_hos5m' => $intestinal_hos5m,
          'intestinal_hos5f' => $intestinal_hos5f,
          'intestinal_hos19m' => $intestinal_hos19m,
          'intestinal_hos19f' => $intestinal_hos19f,
          'intestinal_hos20m' => $intestinal_hos20m,
          'intestinal_hos20f' => $intestinal_hos20f,
          'intestinal_deaths5m' => $intestinal_deaths5m,
          'intestinal_deaths5f' => $intestinal_deaths5f,
          'intestinal_deaths19m' => $intestinal_deaths19m,
          'intestinal_deaths19f' => $intestinal_deaths19f,
          'intestinal_deaths20m' => $intestinal_deaths20m,
          'intestinal_deaths20f' => $intestinal_deaths20f,

          'urinary_hos5m' => $urinary_hos5m,
          'urinary_hos5f' => $urinary_hos5f,
          'urinary_hos19m' => $urinary_hos19m,
          'urinary_hos19f' => $urinary_hos19f,
          'urinary_hos20m' => $urinary_hos20m,
          'urinary_hos20f' => $urinary_hos20f,
          'urinary_deaths5m' => $urinary_deaths5m,
          'urinary_deaths5f' => $urinary_deaths5f,
          'urinary_deaths19m' => $urinary_deaths19m,
          'urinary_deaths19f' => $urinary_deaths19f,
          'urinary_deaths20m' => $urinary_deaths20m,
          'urinary_deaths20f' => $urinary_deaths20f,

          'bone_inf_hos5m' => $bone_inf_hos5m,
          'bone_inf_hos5f' => $bone_inf_hos5f,
          'bone_inf_hos19m' => $bone_inf_hos19m,
          'bone_inf_hos19f' => $bone_inf_hos19f,
          'bone_inf_hos20m' => $bone_inf_hos20m,
          'bone_inf_hos20f' => $bone_inf_hos20f,
          'bone_inf_deaths5m' => $bone_inf_deaths5m,
          'bone_inf_deaths5f' => $bone_inf_deaths5f,
          'bone_inf_deaths19m' => $bone_inf_deaths19m,
          'bone_inf_deaths19f' => $bone_inf_deaths19f,
          'bone_inf_deaths20m' => $bone_inf_deaths20m,
          'bone_inf_deaths20f' => $bone_inf_deaths20f,

          'bone_other_hos5m' => $bone_other_hos5m,
          'bone_other_hos5f' => $bone_other_hos5f,
          'bone_other_hos19m' => $bone_other_hos19m,
          'bone_other_hos19f' => $bone_other_hos19f,
          'bone_other_hos20m' => $bone_other_hos20m,
          'bone_other_hos20f' => $bone_other_hos20f,
          'bone_other_deaths5m' => $bone_other_deaths5m,
          'bone_other_deaths5f' => $bone_other_deaths5f,
          'bone_other_deaths19m' => $bone_other_deaths19m,
          'bone_other_deaths19f' => $bone_other_deaths19f,
          'bone_other_deaths20m' => $bone_other_deaths20m,
          'bone_other_deaths20f' => $bone_other_deaths20f,

          'acute_hos5m' => $acute_hos5m,
          'acute_hos5f' => $acute_hos5f,
          'acute_hos19m' => $acute_hos19m,
          'acute_hos19f' => $acute_hos19f,
          'acute_hos20m' => $acute_hos20m,
          'acute_hos20f' => $acute_hos20f,
          'acute_deaths5m' => $acute_deaths5m,
          'acute_deaths5f' => $acute_deaths5f,
          'acute_deaths19m' => $acute_deaths19m,
          'acute_deaths19f' => $acute_deaths19f,
          'acute_deaths20m' => $acute_deaths20m,
          'acute_deaths20f' => $acute_deaths20f,

          'gyneco_hos19f' => $gyneco_hos19f,
          'gyneco_hos20f' => $gyneco_hos20f,
          'gyneco_deaths19f' => $gyneco_deaths19f,
          'gyneco_deaths20f' => $gyneco_deaths20f,

          'mastoditis_hos5m' => $mastoditis_hos5m,
          'mastoditis_hos5f' => $mastoditis_hos5f,
          'mastoditis_hos19m' => $mastoditis_hos19m,
          'mastoditis_hos19f' => $mastoditis_hos19f,
          'mastoditis_hos20m' => $mastoditis_hos20m,
          'mastoditis_hos20f' => $mastoditis_hos20f,
          'mastoditis_deaths5m' => $mastoditis_deaths5m,
          'mastoditis_deaths5f' => $mastoditis_deaths5f,
          'mastoditis_deaths19m' => $mastoditis_deaths19m,
          'mastoditis_deaths19f' => $mastoditis_deaths19f,
          'mastoditis_deaths20m' => $mastoditis_deaths20m,
          'mastoditis_deaths20f' => $mastoditis_deaths20f,

          'tetanus_hos5m' => $tetanus_hos5m,
          'tetanus_hos5f' => $tetanus_hos5f,
          'tetanus_hos19m' => $tetanus_hos19m,
          'tetanus_hos19f' => $tetanus_hos19f,
          'tetanus_hos20m' => $tetanus_hos20m,
          'tetanus_hos20f' => $tetanus_hos20f,
          'tetanus_deaths5m' => $tetanus_deaths5m,
          'tetanus_deaths5f' => $tetanus_deaths5f,
          'tetanus_deaths19m' => $tetanus_deaths19m,
          'tetanus_deaths19f' => $tetanus_deaths19f,
          'tetanus_deaths20m' => $tetanus_deaths20m,
          'tetanus_deaths20f' => $tetanus_deaths20f,

          'cancer_hos5m' => $cancer_hos5m,
          'cancer_hos5f' => $cancer_hos5f,
          'cancer_hos19m' => $cancer_hos19m,
          'cancer_hos19f' => $cancer_hos19f,
          'cancer_hos20m' => $cancer_hos20m,
          'cancer_hos20f' => $cancer_hos20f,
          'cancer_deaths5m' => $cancer_deaths5m,
          'cancer_deaths5f' => $cancer_deaths5f,
          'cancer_deaths19m' => $cancer_deaths19m,
          'cancer_deaths19f' => $cancer_deaths19f,
          'cancer_deaths20m' => $cancer_deaths20m,
          'cancer_deaths20f' => $cancer_deaths20f,

      'num_rapport' => $num_rapport,
      'num_user' => $this->session->userdata('num_user')
    ))
            ->set('date_hospitalization_bcde', $this->session->userdata('add_date'))
            ->insert('Hospitalization_bcde');
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
        return $this->db->where('date_hospitalization_a', $this->session->userdata('update_date'))
                        ->get('Hospitalization_a')
                        ->row();
    }

    public function show_table3()
    {
        return $this->db->where('date_hospitalization_bcde', $this->session->userdata('update_date'))
                        ->where('num_user', $this->session->userdata('num_user'))
                        ->get('Hospitalization_bcde')
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
        $international,
        $diar_w_dehy_5f,
          $diar_w_dehy_5m,
          $diar_w_dehy_19m,
          $diar_w_dehy_19f,
          $diar_w_dehy_20m,
          $diar_w_dehy_20f,
        $diar_no_dehy_5f,
          $diar_no_dehy_5m,
          $diar_no_dehy_19m,
          $diar_no_dehy_19f,
          $diar_no_dehy_20m,
          $diar_no_dehy_20f,
        $blood_diar_5f,
          $blood_diar_5m,
          $blood_diar_19m,
          $blood_diar_19f,
          $blood_diar_20m,
          $blood_diar_20f,
        $food_poison_5f,
          $food_poison_5m,
          $food_poison_19m,
          $food_poison_19f,
          $food_poison_20m,
          $food_poison_20f,
        $ear_infect_5f,
          $ear_infect_5m,
          $ear_infect_19m,
          $ear_infect_19f,
          $ear_infect_20m,
          $ear_infect_20f,
        $schisto_5f,
          $schisto_5m,
          $schisto_19m,
          $schisto_19f,
          $schisto_20m,
          $schisto_20f,
        $ascaris_5f,
          $ascaris_5m,
          $ascaris_19m,
          $ascaris_19f,
          $ascaris_20m,
          $ascaris_20f,
        $trichu_5m,
          $trichu_5f,
          $trichu_19m,
          $trichu_19f,
          $trichu_20m,
          $trichu_20f,
        $hook_5m,
          $hook_5f,
          $hook_19f,
          $hook_19m,
          $hook_20m,
          $hook_20f,
        $entam_5f,
          $entam_5m,
          $entam_19m,
          $entam_19f,
          $entam_20m,
          $entam_20f,
        $giardia_5f,
          $giardia_5m,
          $giardia_19m,
          $giardia_19f,
          $giardia_20m,
          $giardia_20f,
        $taenia_5f,
          $taenia_5m,
          $taenia_19m,
          $taenia_19f,
          $taenia_20m,
          $taenia_20f,
        $malaria_s_5f,
          $malaria_s_5m,
          $malaria_s_19m,
          $malaria_s_19f,
          $malaria_s_20m,
          $malaria_s_20f,
        $malaria_dig_5f,
          $malaria_dig_5m,
          $malaria_dig_19m,
          $malaria_dig_19f,
          $malaria_dig_20m,
          $malaria_dig_20f,
        $herpes_s_5f,
          $herpes_s_5m,
          $herpes_s_19m,
          $herpes_s_19f,
          $herpes_s_20m,
          $herpes_s_20f,
        $mening_5f,
          $mening_5m,
          $mening_19m,
          $mening_19f,
          $mening_20m,
          $mening_20f,
        $pneumonia_simp_5m,
          $pneumonia_simp_5f,
          $pneumonia_simp_19m,
          $pneumonia_simp_19f,
          $pneumonia_simp_20m,
          $pneumonia_simp_20f,
        $pneumonia_sev_5m,
          $pneumonia_sev_5f,
          $pneumonia_sev_19f,
          $pneumonia_sev_19m,
          $pneumonia_sev_20m,
          $pneumonia_sev_20f,
        $grip_5f,
          $grip_5m,
          $grip_19m,
          $grip_19f,
          $grip_20m,
          $grip_20f,
        $ari_5f,
          $ari_5m,
          $ari_19m,
          $ari_19f,
          $ari_20m,
          $ari_20f,
        $gast_duoden_5f,
          $gast_duoden_5m,
          $gast_duoden_19m,
          $gast_duoden_19f,
          $gast_duoden_20m,
          $gast_duoden_20f,
        $absces_5m,
          $absces_5f,
          $absces_19m,
          $absces_19f,
          $absces_20m,
          $absces_20f,
        $ulcers_5m,
          $ulcers_5f,
          $ulcers_19f,
          $ulcers_19m,
          $ulcers_20m,
          $ulcers_20f,
        $scabies_5f,
          $scabies_5m,
          $scabies_19m,
          $scabies_19f,
          $scabies_20m,
          $scabies_20f,
        $mycoses_5f,
          $mycoses_5m,
          $mycoses_19m,
          $mycoses_19f,
          $mycoses_20m,
          $mycoses_20f,
        $si_others_5f,
          $si_others_5m,
          $si_others_19m,
          $si_others_19f,
          $si_others_20m,
          $si_others_20f,
        $urinary_ti_5f,
          $urinary_ti_5m,
          $urinary_ti_19m,
          $urinary_ti_19f,
          $urinary_ti_20m,
          $urinary_ti_20f,
        $anemia_5f,
          $anemia_5m,
          $anemia_19m,
          $anemia_19f,
          $anemia_20m,
          $anemia_20f,
        $measles_susp_5f,
          $measles_susp_5m,
          $measles_susp_19m,
          $measles_susp_19f,
          $measles_susp_20m,
          $measles_susp_20f,
        $measles_conf_5f,
          $measles_conf_5m,
          $measles_conf_19m,
          $measles_conf_19f,
          $measles_conf_20m,
          $measles_conf_20f,
        $rubella_conf_5f,
          $rubella_conf_5m,
          $rubella_conf_19m,
          $rubella_conf_19f,
          $rubella_conf_20m,
          $rubella_conf_20f,
        $flaccid_paraly_5f,
          $flaccid_paraly_5m,
          $flaccid_paraly_19m,
          $flaccid_paraly_19f,
          $flaccid_paraly_20m,
          $flaccid_paraly_20f,
        $tetanus_5f,
          $tetanus_5m,
          $tetanus_19m,
          $tetanus_19f,
          $tetanus_20m,
          $tetanus_20f,
        $hepatitis_5f,
          $hepatitis_5m,
          $hepatitis_19m,
          $hepatitis_19f,
          $hepatitis_20m,
          $hepatitis_20f
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

        $this->db->set('diar_w_dehy_5m', $diar_w_dehy_5m);
        $this->db->set('diar_w_dehy_5f', $diar_w_dehy_5f);
        $this->db->set('diar_w_dehy_19m', $diar_w_dehy_19m);
        $this->db->set('diar_w_dehy_19f', $diar_w_dehy_19f);
        $this->db->set('diar_w_dehy_20m', $diar_w_dehy_20m);
        $this->db->set('diar_w_dehy_20f', $diar_w_dehy_20f);

        $this->db->set('diar_no_dehy_5m', $diar_no_dehy_5m);
        $this->db->set('diar_no_dehy_5f', $diar_no_dehy_5f);
        $this->db->set('diar_no_dehy_19m', $diar_no_dehy_19m);
        $this->db->set('diar_no_dehy_19f', $diar_no_dehy_19f);
        $this->db->set('diar_no_dehy_20m', $diar_no_dehy_20m);
        $this->db->set('diar_no_dehy_20f', $diar_no_dehy_20f);

        $this->db->set('blood_diar_5m', $blood_diar_5m);
        $this->db->set('blood_diar_5f', $blood_diar_5f);
        $this->db->set('blood_diar_19m', $blood_diar_19m);
        $this->db->set('blood_diar_19f', $blood_diar_19f);
        $this->db->set('blood_diar_20m', $blood_diar_20m);
        $this->db->set('blood_diar_20f', $blood_diar_20f);

        $this->db->set('food_poison_5m', $food_poison_5m);
        $this->db->set('food_poison_5f', $food_poison_5f);
        $this->db->set('food_poison_19m', $food_poison_19m);
        $this->db->set('food_poison_19f', $food_poison_19f);
        $this->db->set('food_poison_20m', $food_poison_20m);
        $this->db->set('food_poison_20f', $food_poison_20f);

        $this->db->set('ear_infect_5m', $ear_infect_5m);
        $this->db->set('ear_infect_5f', $ear_infect_5f);
        $this->db->set('ear_infect_19m', $ear_infect_19m);
        $this->db->set('ear_infect_19f', $ear_infect_19f);
        $this->db->set('ear_infect_20m', $ear_infect_20m);
        $this->db->set('ear_infect_20f', $ear_infect_20f);

        $this->db->set('schisto_5m', $schisto_5m);
        $this->db->set('schisto_5f', $schisto_5f);
        $this->db->set('schisto_19m', $schisto_19m);
        $this->db->set('schisto_19f', $schisto_19f);
        $this->db->set('schisto_20m', $schisto_20m);
        $this->db->set('schisto_20f', $schisto_20f);

        $this->db->set('ascaris_5m', $ascaris_5m);
        $this->db->set('ascaris_5f', $ascaris_5f);
        $this->db->set('ascaris_19m', $ascaris_19m);
        $this->db->set('ascaris_19f', $ascaris_19f);
        $this->db->set('ascaris_20m', $ascaris_20m);
        $this->db->set('ascaris_20f', $ascaris_20f);

        $this->db->set('trichu_5m', $trichu_5m);
        $this->db->set('trichu_5f', $trichu_5f);
        $this->db->set('trichu_19m', $trichu_19m);
        $this->db->set('trichu_19f', $trichu_19f);
        $this->db->set('trichu_20m', $trichu_20m);
        $this->db->set('trichu_20f', $trichu_20f);

        $this->db->set('hook_5m', $hook_5m);
        $this->db->set('hook_5f', $hook_5f);
        $this->db->set('hook_19m', $hook_19m);
        $this->db->set('hook_19f', $hook_19f);
        $this->db->set('hook_20m', $hook_20m);
        $this->db->set('hook_20f', $hook_20f);

        $this->db->set('entam_5m', $entam_5m);
        $this->db->set('entam_5f', $entam_5f);
        $this->db->set('entam_19m', $entam_19m);
        $this->db->set('entam_19f', $entam_19f);
        $this->db->set('entam_20m', $entam_20m);
        $this->db->set('entam_20f', $entam_20f);

        $this->db->set('giardia_5m', $giardia_5m);
        $this->db->set('giardia_5f', $giardia_5f);
        $this->db->set('giardia_19m', $giardia_19m);
        $this->db->set('giardia_19f', $giardia_19f);
        $this->db->set('giardia_20m', $giardia_20m);
        $this->db->set('giardia_20f', $giardia_20f);

        $this->db->set('taenia_5m', $taenia_5m);
        $this->db->set('taenia_5f', $taenia_5f);
        $this->db->set('taenia_19m', $taenia_19m);
        $this->db->set('taenia_19f', $taenia_19f);
        $this->db->set('taenia_20m', $taenia_20m);
        $this->db->set('taenia_20f', $taenia_20f);

        $this->db->set('malaria_s_5m', $malaria_s_5m);
        $this->db->set('malaria_s_5f', $malaria_s_5f);
        $this->db->set('malaria_s_19m', $malaria_s_19m);
        $this->db->set('malaria_s_19f', $malaria_s_19f);
        $this->db->set('malaria_s_20m', $malaria_s_20m);
        $this->db->set('malaria_s_20f', $malaria_s_20f);

        $this->db->set('malaria_dig_5m', $malaria_dig_5m);
        $this->db->set('malaria_dig_5f', $malaria_dig_5f);
        $this->db->set('malaria_dig_19m', $malaria_dig_19m);
        $this->db->set('malaria_dig_19f', $malaria_dig_19f);
        $this->db->set('malaria_dig_20m', $malaria_dig_20m);
        $this->db->set('malaria_dig_20f', $malaria_dig_20f);

        $this->db->set('herpes_s_5m', $herpes_s_5m);
        $this->db->set('herpes_s_5f', $herpes_s_5f);
        $this->db->set('herpes_s_19m', $herpes_s_19m);
        $this->db->set('herpes_s_19f', $herpes_s_19f);
        $this->db->set('herpes_s_20m', $herpes_s_20m);
        $this->db->set('herpes_s_20f', $herpes_s_20f);

        $this->db->set('mening_5m', $mening_5m);
        $this->db->set('mening_5f', $mening_5f);
        $this->db->set('mening_19m', $mening_19m);
        $this->db->set('mening_19f', $mening_19f);
        $this->db->set('mening_20m', $mening_20m);
        $this->db->set('mening_20f', $mening_20f);

        $this->db->set('pneumonia_simp_5m', $pneumonia_simp_5m);
        $this->db->set('pneumonia_simp_5f', $pneumonia_simp_5f);
        $this->db->set('pneumonia_simp_19m', $pneumonia_simp_19m);
        $this->db->set('pneumonia_simp_19f', $pneumonia_simp_19f);
        $this->db->set('pneumonia_simp_20m', $pneumonia_simp_20m);
        $this->db->set('pneumonia_simp_20f', $pneumonia_simp_20f);

        $this->db->set('pneumonia_sev_5m', $pneumonia_sev_5m);
        $this->db->set('pneumonia_sev_5f', $pneumonia_sev_5f);
        $this->db->set('pneumonia_sev_19m', $pneumonia_sev_19m);
        $this->db->set('pneumonia_sev_19f', $pneumonia_sev_19f);
        $this->db->set('pneumonia_sev_20m', $pneumonia_sev_20m);
        $this->db->set('pneumonia_sev_20f', $pneumonia_sev_20f);

        $this->db->set('grip_5m', $grip_5m);
        $this->db->set('grip_5f', $grip_5f);
        $this->db->set('grip_19m', $grip_19m);
        $this->db->set('grip_19f', $grip_19f);
        $this->db->set('grip_20m', $grip_20m);
        $this->db->set('grip_20f', $grip_20f);

        $this->db->set('ari_5m', $ari_5m);
        $this->db->set('ari_5f', $ari_5f);
        $this->db->set('ari_19m', $ari_19m);
        $this->db->set('ari_19f', $ari_19f);
        $this->db->set('ari_20m', $ari_20m);
        $this->db->set('ari_20f', $ari_20f);

        $this->db->set('gast_duoden_5m', $gast_duoden_5m);
        $this->db->set('gast_duoden_5f', $gast_duoden_5f);
        $this->db->set('gast_duoden_19m', $gast_duoden_19m);
        $this->db->set('gast_duoden_19f', $gast_duoden_19f);
        $this->db->set('gast_duoden_20m', $gast_duoden_20m);
        $this->db->set('gast_duoden_20f', $gast_duoden_20f);

        $this->db->set('absces_5m', $absces_5m);
        $this->db->set('absces_5f', $absces_5f);
        $this->db->set('absces_19m', $absces_19m);
        $this->db->set('absces_19f', $absces_19f);
        $this->db->set('absces_20m', $absces_20m);
        $this->db->set('absces_20f', $absces_20f);

        $this->db->set('ulcers_5m', $ulcers_5m);
        $this->db->set('ulcers_5f', $ulcers_5f);
        $this->db->set('ulcers_19m', $ulcers_19m);
        $this->db->set('ulcers_19f', $ulcers_19f);
        $this->db->set('ulcers_20m', $ulcers_20m);
        $this->db->set('ulcers_20f', $ulcers_20f);

        $this->db->set('scabies_5m', $scabies_5m);
        $this->db->set('scabies_5f', $scabies_5f);
        $this->db->set('scabies_19m', $scabies_19m);
        $this->db->set('scabies_19f', $scabies_19f);
        $this->db->set('scabies_20m', $scabies_20m);
        $this->db->set('scabies_20f', $scabies_20f);

        $this->db->set('mycoses_5m', $mycoses_5m);
        $this->db->set('mycoses_5f', $mycoses_5f);
        $this->db->set('mycoses_19m', $mycoses_19m);
        $this->db->set('mycoses_19f', $mycoses_19f);
        $this->db->set('mycoses_20m', $mycoses_20m);
        $this->db->set('mycoses_20f', $mycoses_20f);

        $this->db->set('si_others_5m', $si_others_5m);
        $this->db->set('si_others_5f', $si_others_5f);
        $this->db->set('si_others_19m', $si_others_19m);
        $this->db->set('si_others_19f', $si_others_19f);
        $this->db->set('si_others_20m', $si_others_20m);
        $this->db->set('si_others_20f', $si_others_20f);

        $this->db->set('urinary_ti_5m', $urinary_ti_5m);
        $this->db->set('urinary_ti_5f', $urinary_ti_5f);
        $this->db->set('urinary_ti_19m', $urinary_ti_19m);
        $this->db->set('urinary_ti_19f', $urinary_ti_19f);
        $this->db->set('urinary_ti_20m', $urinary_ti_20m);
        $this->db->set('urinary_ti_20f', $urinary_ti_20f);

        $this->db->set('anemia_5m', $anemia_5m);
        $this->db->set('anemia_5f', $anemia_5f);
        $this->db->set('anemia_19m', $anemia_19m);
        $this->db->set('anemia_19f', $anemia_19f);
        $this->db->set('anemia_20m', $anemia_20m);
        $this->db->set('anemia_20f', $anemia_20f);

        $this->db->set('measles_susp_5m', $measles_susp_5m);
        $this->db->set('measles_susp_5f', $measles_susp_5f);
        $this->db->set('measles_susp_19m', $measles_susp_19m);
        $this->db->set('measles_susp_19f', $measles_susp_19f);
        $this->db->set('measles_susp_20m', $measles_susp_20m);
        $this->db->set('measles_susp_20f', $measles_susp_20f);

        $this->db->set('measles_conf_5m', $measles_conf_5m);
        $this->db->set('measles_conf_5f', $measles_conf_5f);
        $this->db->set('measles_conf_19m', $measles_conf_19m);
        $this->db->set('measles_conf_19f', $measles_conf_19f);
        $this->db->set('measles_conf_20m', $measles_conf_20m);
        $this->db->set('measles_conf_20f', $measles_conf_20f);

        $this->db->set('rubella_conf_5m', $rubella_conf_5m);
        $this->db->set('rubella_conf_5f', $rubella_conf_5f);
        $this->db->set('rubella_conf_19m', $rubella_conf_19m);
        $this->db->set('rubella_conf_19f', $rubella_conf_19f);
        $this->db->set('rubella_conf_20m', $rubella_conf_20m);
        $this->db->set('rubella_conf_20f', $rubella_conf_20f);

        $this->db->set('flaccid_paraly_5m', $flaccid_paraly_5m);
        $this->db->set('flaccid_paraly_5f', $flaccid_paraly_5f);
        $this->db->set('flaccid_paraly_19m', $flaccid_paraly_19m);
        $this->db->set('flaccid_paraly_19f', $flaccid_paraly_19f);
        $this->db->set('flaccid_paraly_20m', $flaccid_paraly_20m);
        $this->db->set('flaccid_paraly_20f', $flaccid_paraly_20f);

        $this->db->set('tetanus_5m', $tetanus_5m);
        $this->db->set('tetanus_5f', $tetanus_5f);
        $this->db->set('tetanus_19m', $tetanus_19m);
        $this->db->set('tetanus_19f', $tetanus_19f);
        $this->db->set('tetanus_20m', $tetanus_20m);
        $this->db->set('tetanus_20f', $tetanus_20f);

        $this->db->set('hepatitis_5m', $hepatitis_5m);
        $this->db->set('hepatitis_5f', $hepatitis_5f);
        $this->db->set('hepatitis_19m', $hepatitis_19m);
        $this->db->set('hepatitis_19f', $hepatitis_19f);
        $this->db->set('hepatitis_20m', $hepatitis_20m);
        $this->db->set('hepatitis_20f', $hepatitis_20f);

        $this->db->where('date_consultation_abcde', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Consultation_abcde');
    }

    public function update_data2(
      $e_beds,
      $e_present_start,
      $e_admissions,
      $e_referred,
      $e_no_referred,
      $e_discharges,
      $e_authorized,
      $e_abandoned,
      $e_deaths,
      $e_dis_referred,
      $e_counter,
      $e_present_end,
      $e_total,
      $e_actual
    ) {
        $this->db->set('e_beds', $e_beds);
        $this->db->set('e_present_start', $e_present_start);
        $this->db->set('e_admissions', $e_admissions);
        $this->db->set('e_referred', $e_referred);
        $this->db->set('e_no_referred', $e_no_referred);
        $this->db->set('e_discharges', $e_discharges);
        $this->db->set('e_authorized', $e_authorized);
        $this->db->set('e_abandoned', $e_abandoned);
        $this->db->set('e_deaths', $e_deaths);
        $this->db->set('e_dis_referred', $e_dis_referred);
        $this->db->set('e_counter', $e_counter);
        $this->db->set('e_present_end', $e_present_end);
        $this->db->set('e_total', $e_total);
        $this->db->set('e_actual', $e_actual);

        $this->db->where('date_hospitalization_a', $this->session->userdata('update_date'));
        return $this->db->update('Hospitalization_a');
    }

    public function update_data3(
      $hosp_1m,
      $hosp_1f,
      $hosp_4m,
      $hosp_4f,
      $hosp_19m,
      $hosp_19f,
      $hosp_20m,
      $hosp_20f,

      $deaths_1m,
      $deaths_1f,
      $deaths_4m,
      $deaths_4f,
      $deaths_19m,
      $deaths_19f,
      $deaths_20m,
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

      $malaria_sim_hos5m,
      $malaria_sim_hos5f,
      $malaria_sim_hos19m,
      $malaria_sim_hos19f,
      $malaria_sim_hos20m,
      $malaria_sim_hos20f,

      $malaria_sev_hos5m,
      $malaria_sev_hos5f,
      $malaria_sev_hos19m,
      $malaria_sev_hos19f,
      $malaria_sev_hos20m,
      $malaria_sev_hos20f,
      $malaria_sev_deaths5m,
      $malaria_sev_deaths5f,
      $malaria_sev_deaths19m,
      $malaria_sev_deaths19f,
      $malaria_sev_deaths20m,
      $malaria_sev_deaths20f,

      $borreliosis_hos5m,
      $borreliosis_hos5f,
      $borreliosis_hos19m,
      $borreliosis_hos19f,
      $borreliosis_hos20m,
      $borreliosis_hos20f,
      $borreliosis_deaths5m,
      $borreliosis_deaths5f,
      $borreliosis_deaths19m,
      $borreliosis_deaths19f,
      $borreliosis_deaths20m,
      $borreliosis_deaths20f,

      $pneumonia_sim_hos5m,
      $pneumonia_sim_hos5f,
      $pneumonia_sim_hos19m,
      $pneumonia_sim_hos19f,
      $pneumonia_sim_hos20m,
      $pneumonia_sim_hos20f,
      $pneumonia_sim_deaths5m,
      $pneumonia_sim_deaths5f,
      $pneumonia_sim_deaths19m,
      $pneumonia_sim_deaths19f,
      $pneumonia_sim_deaths20m,
      $pneumonia_sim_deaths20f,

      $pneumonia_sev_hos5m,
      $pneumonia_sev_hos5f,
      $pneumonia_sev_hos19m,
      $pneumonia_sev_hos19f,
      $pneumonia_sev_hos20m,
      $pneumonia_sev_hos20f,
      $pneumonia_sev_deaths5m,
      $pneumonia_sev_deaths5f,
      $pneumonia_sev_deaths19m,
      $pneumonia_sev_deaths19f,
      $pneumonia_sev_deaths20m,
      $pneumonia_sev_deaths20f,

      $pleurisy_hos5m,
      $pleurisy_hos5f,
      $pleurisy_hos19m,
      $pleurisy_hos19f,
      $pleurisy_hos20m,
      $pleurisy_hos20f,
      $pleurisy_deaths5m,
      $pleurisy_deaths5f,
      $pleurisy_deaths19m,
      $pleurisy_deaths19f,
      $pleurisy_deaths20m,
      $pleurisy_deaths20f,

      $ari_hos5m,
      $ari_hos5f,
      $ari_hos19m,
      $ari_hos19f,
      $ari_hos20m,
      $ari_hos20f,
      $ari_deaths5m,
      $ari_deaths5f,
      $ari_deaths19m,
      $ari_deaths19f,
      $ari_deaths20m,
      $ari_deaths20f,

      $diarr_bloody_hos5m,
      $diarr_bloody_hos5f,
      $diarr_bloody_hos19m,
      $diarr_bloody_hos19f,
      $diarr_bloody_hos20m,
      $diarr_bloody_hos20f,
      $diarr_bloody_deaths5m,
      $diarr_bloody_deaths5f,
      $diarr_bloody_deaths19m,
      $diarr_bloody_deaths19f,
      $diarr_bloody_deaths20m,
      $diarr_bloody_deaths20f,

      $diarr_dehy_hos5m,
      $diarr_dehy_hos5f,
      $diarr_dehy_hos19m,
      $diarr_dehy_hos19f,
      $diarr_dehy_hos20m,
      $diarr_dehy_hos20f,
      $diarr_dehy_deaths5m,
      $diarr_dehy_deaths5f,
      $diarr_dehy_deaths19m,
      $diarr_dehy_deaths19f,
      $diarr_dehy_deaths20m,
      $diarr_dehy_deaths20f,

      $diarr_no_dehy_hos5m,
      $diarr_no_dehy_hos5f,
      $diarr_no_dehy_hos19m,
      $diarr_no_dehy_hos19f,
      $diarr_no_dehy_hos20m,
      $diarr_no_dehy_hos20f,
      $diarr_no_dehy_deaths5m,
      $diarr_no_dehy_deaths5f,
      $diarr_no_dehy_deaths19m,
      $diarr_no_dehy_deaths19f,
      $diarr_no_dehy_deaths20m,
      $diarr_no_dehy_deaths20f,

      $cholera_hos5m,
      $cholera_hos5f,
      $cholera_hos19m,
      $cholera_hos19f,
      $cholera_hos20m,
      $cholera_hos20f,
      $cholera_deaths5m,
      $cholera_deaths5f,
      $cholera_deaths19m,
      $cholera_deaths19f,
      $cholera_deaths20m,
      $cholera_deaths20f,

      $typhoid_hos5m,
      $typhoid_hos5f,
      $typhoid_hos19m,
      $typhoid_hos19f,
      $typhoid_hos20m,
      $typhoid_hos20f,
      $typhoid_deaths5m,
      $typhoid_deaths5f,
      $typhoid_deaths19m,
      $typhoid_deaths19f,
      $typhoid_deaths20m,
      $typhoid_deaths20f,

      $meningitis_hos5m,
      $meningitis_hos5f,
      $meningitis_hos19m,
      $meningitis_hos19f,
      $meningitis_hos20m,
      $meningitis_hos20f,
      $meningitis_deaths5m,
      $meningitis_deaths5f,
      $meningitis_deaths19m,
      $meningitis_deaths19f,
      $meningitis_deaths20m,
      $meningitis_deaths20f,

      $measles_hos5m,
      $measles_hos5f,
      $measles_hos19m,
      $measles_hos19f,
      $measles_hos20m,
      $measles_hos20f,
      $measles_deaths5m,
      $measles_deaths5f,
      $measles_deaths19m,
      $measles_deaths19f,
      $measles_deaths20m,
      $measles_deaths20f,

      $tb_conf_hos5m,
      $tb_conf_hos5f,
      $tb_conf_hos19m,
      $tb_conf_hos19f,
      $tb_conf_hos20m,
      $tb_conf_hos20f,
      $tb_conf_deaths5m,
      $tb_conf_deaths5f,
      $tb_conf_deaths19m,
      $tb_conf_deaths19f,
      $tb_conf_deaths20m,
      $tb_conf_deaths20f,

      $tb_diag_hos5m,
      $tb_diag_hos5f,
      $tb_diag_hos19m,
      $tb_diag_hos19f,
      $tb_diag_hos20m,
      $tb_diag_hos20f,
      $tb_diag_deaths5m,
      $tb_diag_deaths5f,
      $tb_diag_deaths19m,
      $tb_diag_deaths19f,
      $tb_diag_deaths20m,
      $tb_diag_deaths20f,

      $fever_hos5m,
      $fever_hos5f,
      $fever_hos19m,
      $fever_hos19f,
      $fever_hos20m,
      $fever_hos20f,
      $fever_deaths5m,
      $fever_deaths5f,
      $fever_deaths19m,
      $fever_deaths19f,
      $fever_deaths20m,
      $fever_deaths20f,

      $encephalitis_hos5m,
      $encephalitis_hos5f,
      $encephalitis_hos19m,
      $encephalitis_hos19f,
      $encephalitis_hos20m,
      $encephalitis_hos20f,
      $encephalitis_deaths5m,
      $encephalitis_deaths5f,
      $encephalitis_deaths19m,
      $encephalitis_deaths19f,
      $encephalitis_deaths20m,
      $encephalitis_deaths20f,

      $mening_crypto_hos5m,
      $mening_crypto_hos5f,
      $mening_crypto_hos19m,
      $mening_crypto_hos19f,
      $mening_crypto_hos20m,
      $mening_crypto_hos20f,
      $mening_crypto_deaths5m,
      $mening_crypto_deaths5f,
      $mening_crypto_deaths19m,
      $mening_crypto_deaths19f,
      $mening_crypto_deaths20m,
      $mening_crypto_deaths20f,

      $skin_hos5m,
      $skin_hos5f,
      $skin_hos19m,
      $skin_hos19f,
      $skin_hos20m,
      $skin_hos20f,
      $skin_deaths5m,
      $skin_deaths5f,
      $skin_deaths19m,
      $skin_deaths19f,
      $skin_deaths20m,
      $skin_deaths20f,

      $diarr_chronic_hos5m,
      $diarr_chronic_hos5f,
      $diarr_chronic_hos19m,
      $diarr_chronic_hos19f,
      $diarr_chronic_hos20m,
      $diarr_chronic_hos20f,
      $diarr_chronic_deaths5m,
      $diarr_chronic_deaths5f,
      $diarr_chronic_deaths19m,
      $diarr_chronic_deaths19f,
      $diarr_chronic_deaths20m,
      $diarr_chronic_deaths20f,

      $hiv_hos5m,
      $hiv_hos5f,
      $hiv_hos19m,
      $hiv_hos19f,
      $hiv_hos20m,
      $hiv_hos20f,
      $hiv_deaths5m,
      $hiv_deaths5f,
      $hiv_deaths19m,
      $hiv_deaths19f,
      $hiv_deaths20m,
      $hiv_deaths20f,

      $trauma_hos5m,
      $trauma_hos5f,
      $trauma_hos19m,
      $trauma_hos19f,
      $trauma_hos20m,
      $trauma_hos20f,
      $trauma_deaths5m,
      $trauma_deaths5f,
      $trauma_deaths19m,
      $trauma_deaths19f,
      $trauma_deaths20m,
      $trauma_deaths20f,

      $spleen_hos5m,
      $spleen_hos5f,
      $spleen_hos19m,
      $spleen_hos19f,
      $spleen_hos20m,
      $spleen_hos20f,
      $spleen_deaths5m,
      $spleen_deaths5f,
      $spleen_deaths19m,
      $spleen_deaths19f,
      $spleen_deaths20m,
      $spleen_deaths20f,

      $frac_open_hos5m,
      $frac_open_hos5f,
      $frac_open_hos19m,
      $frac_open_hos19f,
      $frac_open_hos20m,
      $frac_open_hos20f,
      $frac_open_deaths5m,
      $frac_open_deaths5f,
      $frac_open_deaths19m,
      $frac_open_deaths19f,
      $frac_open_deaths20m,
      $frac_open_deaths20f,

      $frac_int_hos5m,
      $frac_int_hos5f,
      $frac_int_hos19m,
      $frac_int_hos19f,
      $frac_int_hos20m,
      $frac_int_hos20f,
      $frac_int_deaths5m,
      $frac_int_deaths5f,
      $frac_int_deaths19m,
      $frac_int_deaths19f,
      $frac_int_deaths20m,
      $frac_int_deaths20f,

      $trauma_other_hos5m,
      $trauma_other_hos5f,
      $trauma_other_hos19m,
      $trauma_other_hos19f,
      $trauma_other_hos20m,
      $trauma_other_hos20f,
      $trauma_other_deaths5m,
      $trauma_other_deaths5f,
      $trauma_other_deaths19m,
      $trauma_other_deaths19f,
      $trauma_other_deaths20m,
      $trauma_other_deaths20f,

      $burns_hos5m,
      $burns_hos5f,
      $burns_hos19m,
      $burns_hos19f,
      $burns_hos20m,
      $burns_hos20f,
      $burns_deaths5m,
      $burns_deaths5f,
      $burns_deaths19m,
      $burns_deaths19f,
      $burns_deaths20m,
      $burns_deaths20f,

      $hepatitis_hos5m,
      $hepatitis_hos5f,
      $hepatitis_hos19m,
      $hepatitis_hos19f,
      $hepatitis_hos20m,
      $hepatitis_hos20f,
      $hepatitis_deaths5m,
      $hepatitis_deaths5f,
      $hepatitis_deaths19m,
      $hepatitis_deaths19f,
      $hepatitis_deaths20m,
      $hepatitis_deaths20f,

      $cirrhosis_hos5m,
      $cirrhosis_hos5f,
      $cirrhosis_hos19m,
      $cirrhosis_hos19f,
      $cirrhosis_hos20m,
      $cirrhosis_hos20f,
      $cirrhosis_deaths5m,
      $cirrhosis_deaths5f,
      $cirrhosis_deaths19m,
      $cirrhosis_deaths19f,
      $cirrhosis_deaths20m,
      $cirrhosis_deaths20f,

      $digestive_hos5m,
      $digestive_hos5f,
      $digestive_hos19m,
      $digestive_hos19f,
      $digestive_hos20m,
      $digestive_hos20f,
      $digestive_deaths5m,
      $digestive_deaths5f,
      $digestive_deaths19m,
      $digestive_deaths19f,
      $digestive_deaths20m,
      $digestive_deaths20f,

      $gastritis_hos5m,
      $gastritis_hos5f,
      $gastritis_hos19m,
      $gastritis_hos19f,
      $gastritis_hos20m,
      $gastritis_hos20f,
      $gastritis_deaths5m,
      $gastritis_deaths5f,
      $gastritis_deaths19m,
      $gastritis_deaths19f,
      $gastritis_deaths20m,
      $gastritis_deaths20f,

      $ulcer_hos5m,
      $ulcer_hos5f,
      $ulcer_hos19m,
      $ulcer_hos19f,
      $ulcer_hos20m,
      $ulcer_hos20f,
      $ulcer_deaths5m,
      $ulcer_deaths5f,
      $ulcer_deaths19m,
      $ulcer_deaths19f,
      $ulcer_deaths20m,
      $ulcer_deaths20f,

      $appendi_hos5m,
      $appendi_hos5f,
      $appendi_hos19m,
      $appendi_hos19f,
      $appendi_hos20m,
      $appendi_hos20f,
      $appendi_deaths5m,
      $appendi_deaths5f,
      $appendi_deaths19m,
      $appendi_deaths19f,
      $appendi_deaths20m,
      $appendi_deaths20f,

      $hernia_hos5m,
      $hernia_hos5f,
      $hernia_hos19m,
      $hernia_hos19f,
      $hernia_hos20m,
      $hernia_hos20f,
      $hernia_deaths5m,
      $hernia_deaths5f,
      $hernia_deaths19m,
      $hernia_deaths19f,
      $hernia_deaths20m,
      $hernia_deaths20f,

      $peritonitis_hos5m,
      $peritonitis_hos5f,
      $peritonitis_hos19m,
      $peritonitis_hos19f,
      $peritonitis_hos20m,
      $peritonitis_hos20f,
      $peritonitis_deaths5m,
      $peritonitis_deaths5f,
      $peritonitis_deaths19m,
      $peritonitis_deaths19f,
      $peritonitis_deaths20m,
      $peritonitis_deaths20f,

      $intestinal_hos5m,
      $intestinal_hos5f,
      $intestinal_hos19m,
      $intestinal_hos19f,
      $intestinal_hos20m,
      $intestinal_hos20f,
      $intestinal_deaths5m,
      $intestinal_deaths5f,
      $intestinal_deaths19m,
      $intestinal_deaths19f,
      $intestinal_deaths20m,
      $intestinal_deaths20f,

      $urinary_hos5m,
      $urinary_hos5f,
      $urinary_hos19m,
      $urinary_hos19f,
      $urinary_hos20m,
      $urinary_hos20f,
      $urinary_deaths5m,
      $urinary_deaths5f,
      $urinary_deaths19m,
      $urinary_deaths19f,
      $urinary_deaths20m,
      $urinary_deaths20f,

      $bone_inf_hos5m,
      $bone_inf_hos5f,
      $bone_inf_hos19m,
      $bone_inf_hos19f,
      $bone_inf_hos20m,
      $bone_inf_hos20f,
      $bone_inf_deaths5m,
      $bone_inf_deaths5f,
      $bone_inf_deaths19m,
      $bone_inf_deaths19f,
      $bone_inf_deaths20m,
      $bone_inf_deaths20f,

      $bone_other_hos5m,
      $bone_other_hos5f,
      $bone_other_hos19m,
      $bone_other_hos19f,
      $bone_other_hos20m,
      $bone_other_hos20f,
      $bone_other_deaths5m,
      $bone_other_deaths5f,
      $bone_other_deaths19m,
      $bone_other_deaths19f,
      $bone_other_deaths20m,
      $bone_other_deaths20f,

      $acute_hos5m,
      $acute_hos5f,
      $acute_hos19m,
      $acute_hos19f,
      $acute_hos20m,
      $acute_hos20f,
      $acute_deaths5m,
      $acute_deaths5f,
      $acute_deaths19m,
      $acute_deaths19f,
      $acute_deaths20m,
      $acute_deaths20f,

      $gyneco_hos19f,
      $gyneco_hos20f,
      $gyneco_deaths19f,
      $gyneco_deaths20f,

      $mastoditis_hos5m,
      $mastoditis_hos5f,
      $mastoditis_hos19m,
      $mastoditis_hos19f,
      $mastoditis_hos20m,
      $mastoditis_hos20f,
      $mastoditis_deaths5m,
      $mastoditis_deaths5f,
      $mastoditis_deaths19m,
      $mastoditis_deaths19f,
      $mastoditis_deaths20m,
      $mastoditis_deaths20f,

      $tetanus_hos5m,
      $tetanus_hos5f,
      $tetanus_hos19m,
      $tetanus_hos19f,
      $tetanus_hos20m,
      $tetanus_hos20f,
      $tetanus_deaths5m,
      $tetanus_deaths5f,
      $tetanus_deaths19m,
      $tetanus_deaths19f,
      $tetanus_deaths20m,
      $tetanus_deaths20f,

      $cancer_hos5m,
      $cancer_hos5f,
      $cancer_hos19m,
      $cancer_hos19f,
      $cancer_hos20m,
      $cancer_hos20f,
      $cancer_deaths5m,
      $cancer_deaths5f,
      $cancer_deaths19m,
      $cancer_deaths19f,
      $cancer_deaths20m,
      $cancer_deaths20f
    ) {
        $this->db->set('hosp_1m', $hosp_1m);
        $this->db->set('hosp_1f', $hosp_1f);
        $this->db->set('hosp_4m', $hosp_4m);
        $this->db->set('hosp_4f', $hosp_4f);
        $this->db->set('hosp_19m', $hosp_19m);
        $this->db->set('hosp_19f', $hosp_19f);
        $this->db->set('hosp_20m', $hosp_20m);
        $this->db->set('hosp_20f', $hosp_20f);

        $this->db->set('deaths_1m', $deaths_1m);
        $this->db->set('deaths_1f', $deaths_1f);
        $this->db->set('deaths_4m', $deaths_4m);
        $this->db->set('deaths_4f', $deaths_4f);
        $this->db->set('deaths_19m', $deaths_19m);
        $this->db->set('deaths_19f', $deaths_19f);
        $this->db->set('deaths_20m', $deaths_20m);
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

        $this->db->set('malaria_sim_hos5m', $malaria_sim_hos5m);
        $this->db->set('malaria_sim_hos5f', $malaria_sim_hos5f);
        $this->db->set('malaria_sim_hos19m', $malaria_sim_hos19m);
        $this->db->set('malaria_sim_hos19f', $malaria_sim_hos19f);
        $this->db->set('malaria_sim_hos20m', $malaria_sim_hos20m);
        $this->db->set('malaria_sim_hos20f', $malaria_sim_hos20f);

        $this->db->set('malaria_sev_hos5m', $malaria_sev_hos5m);
        $this->db->set('malaria_sev_hos5f', $malaria_sev_hos5f);
        $this->db->set('malaria_sev_hos19m', $malaria_sev_hos19m);
        $this->db->set('malaria_sev_hos19f', $malaria_sev_hos19f);
        $this->db->set('malaria_sev_hos20m', $malaria_sev_hos20m);
        $this->db->set('malaria_sev_hos20f', $malaria_sev_hos20f);
        $this->db->set('malaria_sev_deaths5m', $malaria_sev_deaths5m);
        $this->db->set('malaria_sev_deaths5f', $malaria_sev_deaths5f);
        $this->db->set('malaria_sev_deaths19m', $malaria_sev_deaths19m);
        $this->db->set('malaria_sev_deaths19f', $malaria_sev_deaths19f);
        $this->db->set('malaria_sev_deaths20m', $malaria_sev_deaths20m);
        $this->db->set('malaria_sev_deaths20f', $malaria_sev_deaths20f);

        $this->db->set('borreliosis_hos5m', $borreliosis_hos5m);
        $this->db->set('borreliosis_hos5f', $borreliosis_hos5f);
        $this->db->set('borreliosis_hos19m', $borreliosis_hos19m);
        $this->db->set('borreliosis_hos19f', $borreliosis_hos19f);
        $this->db->set('borreliosis_hos20m', $borreliosis_hos20m);
        $this->db->set('borreliosis_hos20f', $borreliosis_hos20f);
        $this->db->set('borreliosis_deaths5m', $borreliosis_deaths5m);
        $this->db->set('borreliosis_deaths5f', $borreliosis_deaths5f);
        $this->db->set('borreliosis_deaths19m', $borreliosis_deaths19m);
        $this->db->set('borreliosis_deaths19f', $borreliosis_deaths19f);
        $this->db->set('borreliosis_deaths20m', $borreliosis_deaths20m);
        $this->db->set('borreliosis_deaths20f', $borreliosis_deaths20f);

        $this->db->set('pneumonia_sim_hos5m', $pneumonia_sim_hos5m);
        $this->db->set('pneumonia_sim_hos5f', $pneumonia_sim_hos5f);
        $this->db->set('pneumonia_sim_hos19m', $pneumonia_sim_hos19m);
        $this->db->set('pneumonia_sim_hos19f', $pneumonia_sim_hos19f);
        $this->db->set('pneumonia_sim_hos20m', $pneumonia_sim_hos20m);
        $this->db->set('pneumonia_sim_hos20f', $pneumonia_sim_hos20f);
        $this->db->set('pneumonia_sim_deaths5m', $pneumonia_sim_deaths5m);
        $this->db->set('pneumonia_sim_deaths5f', $pneumonia_sim_deaths5f);
        $this->db->set('pneumonia_sim_deaths19m', $pneumonia_sim_deaths19m);
        $this->db->set('pneumonia_sim_deaths19f', $pneumonia_sim_deaths19f);
        $this->db->set('pneumonia_sim_deaths20m', $pneumonia_sim_deaths20m);
        $this->db->set('pneumonia_sim_deaths20f', $pneumonia_sim_deaths20f);

        $this->db->set('pneumonia_sev_hos5m', $pneumonia_sev_hos5m);
        $this->db->set('pneumonia_sev_hos5f', $pneumonia_sev_hos5f);
        $this->db->set('pneumonia_sev_hos19m', $pneumonia_sev_hos19m);
        $this->db->set('pneumonia_sev_hos19f', $pneumonia_sev_hos19f);
        $this->db->set('pneumonia_sev_hos20m', $pneumonia_sev_hos20m);
        $this->db->set('pneumonia_sev_hos20f', $pneumonia_sev_hos20f);
        $this->db->set('pneumonia_sev_deaths5m', $pneumonia_sev_deaths5m);
        $this->db->set('pneumonia_sev_deaths5f', $pneumonia_sev_deaths5f);
        $this->db->set('pneumonia_sev_deaths19m', $pneumonia_sev_deaths19m);
        $this->db->set('pneumonia_sev_deaths19f', $pneumonia_sev_deaths19f);
        $this->db->set('pneumonia_sev_deaths20m', $pneumonia_sev_deaths20m);
        $this->db->set('pneumonia_sev_deaths20f', $pneumonia_sev_deaths20f);

        $this->db->set('pleurisy_hos5m', $pleurisy_hos5m);
        $this->db->set('pleurisy_hos5f', $pleurisy_hos5f);
        $this->db->set('pleurisy_hos19m', $pleurisy_hos19m);
        $this->db->set('pleurisy_hos19f', $pleurisy_hos19f);
        $this->db->set('pleurisy_hos20m', $pleurisy_hos20m);
        $this->db->set('pleurisy_hos20f', $pleurisy_hos20f);
        $this->db->set('pleurisy_deaths5m', $pleurisy_deaths5m);
        $this->db->set('pleurisy_deaths5f', $pleurisy_deaths5f);
        $this->db->set('pleurisy_deaths19m', $pleurisy_deaths19m);
        $this->db->set('pleurisy_deaths19f', $pleurisy_deaths19f);
        $this->db->set('pleurisy_deaths20m', $pleurisy_deaths20m);
        $this->db->set('pleurisy_deaths20f', $pleurisy_deaths20f);

        $this->db->set('ari_hos5m', $ari_hos5m);
        $this->db->set('ari_hos5f', $ari_hos5f);
        $this->db->set('ari_hos19m', $ari_hos19m);
        $this->db->set('ari_hos19f', $ari_hos19f);
        $this->db->set('ari_hos20m', $ari_hos20m);
        $this->db->set('ari_hos20f', $ari_hos20f);
        $this->db->set('ari_deaths5m', $ari_deaths5m);
        $this->db->set('ari_deaths5f', $ari_deaths5f);
        $this->db->set('ari_deaths19m', $ari_deaths19m);
        $this->db->set('ari_deaths19f', $ari_deaths19f);
        $this->db->set('ari_deaths20m', $ari_deaths20m);
        $this->db->set('ari_deaths20f', $ari_deaths20f);

        $this->db->set('diarr_bloody_hos5m', $diarr_bloody_hos5m);
        $this->db->set('diarr_bloody_hos5f', $diarr_bloody_hos5f);
        $this->db->set('diarr_bloody_hos19m', $diarr_bloody_hos19m);
        $this->db->set('diarr_bloody_hos19f', $diarr_bloody_hos19f);
        $this->db->set('diarr_bloody_hos20m', $diarr_bloody_hos20m);
        $this->db->set('diarr_bloody_hos20f', $diarr_bloody_hos20f);
        $this->db->set('diarr_bloody_deaths5m', $diarr_bloody_deaths5m);
        $this->db->set('diarr_bloody_deaths5f', $diarr_bloody_deaths5f);
        $this->db->set('diarr_bloody_deaths19m', $diarr_bloody_deaths19m);
        $this->db->set('diarr_bloody_deaths19f', $diarr_bloody_deaths19f);
        $this->db->set('diarr_bloody_deaths20m', $diarr_bloody_deaths20m);
        $this->db->set('diarr_bloody_deaths20f', $diarr_bloody_deaths20f);

        $this->db->set('diarr_dehy_hos5m', $diarr_dehy_hos5m);
        $this->db->set('diarr_dehy_hos5f', $diarr_dehy_hos5f);
        $this->db->set('diarr_dehy_hos19m', $diarr_dehy_hos19m);
        $this->db->set('diarr_dehy_hos19f', $diarr_dehy_hos19f);
        $this->db->set('diarr_dehy_hos20m', $diarr_dehy_hos20m);
        $this->db->set('diarr_dehy_hos20f', $diarr_dehy_hos20f);
        $this->db->set('diarr_dehy_deaths5m', $diarr_dehy_deaths5m);
        $this->db->set('diarr_dehy_deaths5f', $diarr_dehy_deaths5f);
        $this->db->set('diarr_dehy_deaths19m', $diarr_dehy_deaths19m);
        $this->db->set('diarr_dehy_deaths19f', $diarr_dehy_deaths19f);
        $this->db->set('diarr_dehy_deaths20m', $diarr_dehy_deaths20m);
        $this->db->set('diarr_dehy_deaths20f', $diarr_dehy_deaths20f);

        $this->db->set('diarr_no_dehy_hos5m', $diarr_no_dehy_hos5m);
        $this->db->set('diarr_no_dehy_hos5f', $diarr_no_dehy_hos5f);
        $this->db->set('diarr_no_dehy_hos19m', $diarr_no_dehy_hos19m);
        $this->db->set('diarr_no_dehy_hos19f', $diarr_no_dehy_hos19f);
        $this->db->set('diarr_no_dehy_hos20m', $diarr_no_dehy_hos20m);
        $this->db->set('diarr_no_dehy_hos20f', $diarr_no_dehy_hos20f);
        $this->db->set('diarr_no_dehy_deaths5m', $diarr_no_dehy_deaths5m);
        $this->db->set('diarr_no_dehy_deaths5f', $diarr_no_dehy_deaths5f);
        $this->db->set('diarr_no_dehy_deaths19m', $diarr_no_dehy_deaths19m);
        $this->db->set('diarr_no_dehy_deaths19f', $diarr_no_dehy_deaths19f);
        $this->db->set('diarr_no_dehy_deaths20m', $diarr_no_dehy_deaths20m);
        $this->db->set('diarr_no_dehy_deaths20f', $diarr_no_dehy_deaths20f);

        $this->db->set('cholera_hos5m', $cholera_hos5m);
        $this->db->set('cholera_hos5f', $cholera_hos5f);
        $this->db->set('cholera_hos19m', $cholera_hos19m);
        $this->db->set('cholera_hos19f', $cholera_hos19f);
        $this->db->set('cholera_hos20m', $cholera_hos20m);
        $this->db->set('cholera_hos20f', $cholera_hos20f);
        $this->db->set('cholera_deaths5m', $cholera_deaths5m);
        $this->db->set('cholera_deaths5f', $cholera_deaths5f);
        $this->db->set('cholera_deaths19m', $cholera_deaths19m);
        $this->db->set('cholera_deaths19f', $cholera_deaths19f);
        $this->db->set('cholera_deaths20m', $cholera_deaths20m);
        $this->db->set('cholera_deaths20f', $cholera_deaths20f);

        $this->db->set('typhoid_hos5m', $typhoid_hos5m);
        $this->db->set('typhoid_hos5f', $typhoid_hos5f);
        $this->db->set('typhoid_hos19m', $typhoid_hos19m);
        $this->db->set('typhoid_hos19f', $typhoid_hos19f);
        $this->db->set('typhoid_hos20m', $typhoid_hos20m);
        $this->db->set('typhoid_hos20f', $typhoid_hos20f);
        $this->db->set('typhoid_deaths5m', $typhoid_deaths5m);
        $this->db->set('typhoid_deaths5f', $typhoid_deaths5f);
        $this->db->set('typhoid_deaths19m', $typhoid_deaths19m);
        $this->db->set('typhoid_deaths19f', $typhoid_deaths19f);
        $this->db->set('typhoid_deaths20m', $typhoid_deaths20m);
        $this->db->set('typhoid_deaths20f', $typhoid_deaths20f);

        $this->db->set('meningitis_hos5m', $meningitis_hos5m);
        $this->db->set('meningitis_hos5f', $meningitis_hos5f);
        $this->db->set('meningitis_hos19m', $meningitis_hos19m);
        $this->db->set('meningitis_hos19f', $meningitis_hos19f);
        $this->db->set('meningitis_hos20m', $meningitis_hos20m);
        $this->db->set('meningitis_hos20f', $meningitis_hos20f);
        $this->db->set('meningitis_deaths5m', $meningitis_deaths5m);
        $this->db->set('meningitis_deaths5f', $meningitis_deaths5f);
        $this->db->set('meningitis_deaths19m', $meningitis_deaths19m);
        $this->db->set('meningitis_deaths19f', $meningitis_deaths19f);
        $this->db->set('meningitis_deaths20m', $meningitis_deaths20m);
        $this->db->set('meningitis_deaths20f', $meningitis_deaths20f);

        $this->db->set('measles_hos5m', $measles_hos5m);
        $this->db->set('measles_hos5f', $measles_hos5f);
        $this->db->set('measles_hos19m', $measles_hos19m);
        $this->db->set('measles_hos19f', $measles_hos19f);
        $this->db->set('measles_hos20m', $measles_hos20m);
        $this->db->set('measles_hos20f', $measles_hos20f);
        $this->db->set('measles_deaths5m', $measles_deaths5m);
        $this->db->set('measles_deaths5f', $measles_deaths5f);
        $this->db->set('measles_deaths19m', $measles_deaths19m);
        $this->db->set('measles_deaths19f', $measles_deaths19f);
        $this->db->set('measles_deaths20m', $measles_deaths20m);
        $this->db->set('measles_deaths20f', $measles_deaths20f);

        $this->db->set('tb_conf_hos5m', $tb_conf_hos5m);
        $this->db->set('tb_conf_hos5f', $tb_conf_hos5f);
        $this->db->set('tb_conf_hos19m', $tb_conf_hos19m);
        $this->db->set('tb_conf_hos19f', $tb_conf_hos19f);
        $this->db->set('tb_conf_hos20m', $tb_conf_hos20m);
        $this->db->set('tb_conf_hos20f', $tb_conf_hos20f);
        $this->db->set('tb_conf_deaths5m', $tb_conf_deaths5m);
        $this->db->set('tb_conf_deaths5f', $tb_conf_deaths5f);
        $this->db->set('tb_conf_deaths19m', $tb_conf_deaths19m);
        $this->db->set('tb_conf_deaths19f', $tb_conf_deaths19f);
        $this->db->set('tb_conf_deaths20m', $tb_conf_deaths20m);
        $this->db->set('tb_conf_deaths20f', $tb_conf_deaths20f);

        $this->db->set('tb_diag_hos5m', $tb_diag_hos5m);
        $this->db->set('tb_diag_hos5f', $tb_diag_hos5f);
        $this->db->set('tb_diag_hos19m', $tb_diag_hos19m);
        $this->db->set('tb_diag_hos19f', $tb_diag_hos19f);
        $this->db->set('tb_diag_hos20m', $tb_diag_hos20m);
        $this->db->set('tb_diag_hos20f', $tb_diag_hos20f);
        $this->db->set('tb_diag_deaths5m', $tb_diag_deaths5m);
        $this->db->set('tb_diag_deaths5f', $tb_diag_deaths5f);
        $this->db->set('tb_diag_deaths19m', $tb_diag_deaths19m);
        $this->db->set('tb_diag_deaths19f', $tb_diag_deaths19f);
        $this->db->set('tb_diag_deaths20m', $tb_diag_deaths20m);
        $this->db->set('tb_diag_deaths20f', $tb_diag_deaths20f);

        $this->db->set('fever_hos5m', $fever_hos5m);
        $this->db->set('fever_hos5f', $fever_hos5f);
        $this->db->set('fever_hos19m', $fever_hos19m);
        $this->db->set('fever_hos19f', $fever_hos19f);
        $this->db->set('fever_hos20m', $fever_hos20m);
        $this->db->set('fever_hos20f', $fever_hos20f);
        $this->db->set('fever_deaths5m', $fever_deaths5m);
        $this->db->set('fever_deaths5f', $fever_deaths5f);
        $this->db->set('fever_deaths19m', $fever_deaths19m);
        $this->db->set('fever_deaths19f', $fever_deaths19f);
        $this->db->set('fever_deaths20m', $fever_deaths20m);
        $this->db->set('fever_deaths20f', $fever_deaths20f);

        $this->db->set('encephalitis_hos5m', $encephalitis_hos5m);
        $this->db->set('encephalitis_hos5f', $encephalitis_hos5f);
        $this->db->set('encephalitis_hos19m', $encephalitis_hos19m);
        $this->db->set('encephalitis_hos19f', $encephalitis_hos19f);
        $this->db->set('encephalitis_hos20m', $encephalitis_hos20m);
        $this->db->set('encephalitis_hos20f', $encephalitis_hos20f);
        $this->db->set('encephalitis_deaths5m', $encephalitis_deaths5m);
        $this->db->set('encephalitis_deaths5f', $encephalitis_deaths5f);
        $this->db->set('encephalitis_deaths19m', $encephalitis_deaths19m);
        $this->db->set('encephalitis_deaths19f', $encephalitis_deaths19f);
        $this->db->set('encephalitis_deaths20m', $encephalitis_deaths20m);
        $this->db->set('encephalitis_deaths20f', $encephalitis_deaths20f);

        $this->db->set('mening_crypto_hos5m', $mening_crypto_hos5m);
        $this->db->set('mening_crypto_hos5f', $mening_crypto_hos5f);
        $this->db->set('mening_crypto_hos19m', $mening_crypto_hos19m);
        $this->db->set('mening_crypto_hos19f', $mening_crypto_hos19f);
        $this->db->set('mening_crypto_hos20m', $mening_crypto_hos20m);
        $this->db->set('mening_crypto_hos20f', $mening_crypto_hos20f);
        $this->db->set('mening_crypto_deaths5m', $mening_crypto_deaths5m);
        $this->db->set('mening_crypto_deaths5f', $mening_crypto_deaths5f);
        $this->db->set('mening_crypto_deaths19m', $mening_crypto_deaths19m);
        $this->db->set('mening_crypto_deaths19f', $mening_crypto_deaths19f);
        $this->db->set('mening_crypto_deaths20m', $mening_crypto_deaths20m);
        $this->db->set('mening_crypto_deaths20f', $mening_crypto_deaths20f);

        $this->db->set('skin_hos5m', $skin_hos5m);
        $this->db->set('skin_hos5f', $skin_hos5f);
        $this->db->set('skin_hos19m', $skin_hos19m);
        $this->db->set('skin_hos19f', $skin_hos19f);
        $this->db->set('skin_hos20m', $skin_hos20m);
        $this->db->set('skin_hos20f', $skin_hos20f);
        $this->db->set('skin_deaths5m', $skin_deaths5m);
        $this->db->set('skin_deaths5f', $skin_deaths5f);
        $this->db->set('skin_deaths19m', $skin_deaths19m);
        $this->db->set('skin_deaths19f', $skin_deaths19f);
        $this->db->set('skin_deaths20m', $skin_deaths20m);
        $this->db->set('skin_deaths20f', $skin_deaths20f);

        $this->db->set('diarr_chronic_hos5m', $diarr_chronic_hos5m);
        $this->db->set('diarr_chronic_hos5f', $diarr_chronic_hos5f);
        $this->db->set('diarr_chronic_hos19m', $diarr_chronic_hos19m);
        $this->db->set('diarr_chronic_hos19f', $diarr_chronic_hos19f);
        $this->db->set('diarr_chronic_hos20m', $diarr_chronic_hos20m);
        $this->db->set('diarr_chronic_hos20f', $diarr_chronic_hos20f);
        $this->db->set('diarr_chronic_deaths5m', $diarr_chronic_deaths5m);
        $this->db->set('diarr_chronic_deaths5f', $diarr_chronic_deaths5f);
        $this->db->set('diarr_chronic_deaths19m', $diarr_chronic_deaths19m);
        $this->db->set('diarr_chronic_deaths19f', $diarr_chronic_deaths19f);
        $this->db->set('diarr_chronic_deaths20m', $diarr_chronic_deaths20m);
        $this->db->set('diarr_chronic_deaths20f', $diarr_chronic_deaths20f);

        $this->db->set('hiv_hos5m', $hiv_hos5m);
        $this->db->set('hiv_hos5f', $hiv_hos5f);
        $this->db->set('hiv_hos19m', $hiv_hos19m);
        $this->db->set('hiv_hos19f', $hiv_hos19f);
        $this->db->set('hiv_hos20m', $hiv_hos20m);
        $this->db->set('hiv_hos20f', $hiv_hos20f);
        $this->db->set('hiv_deaths5m', $hiv_deaths5m);
        $this->db->set('hiv_deaths5f', $hiv_deaths5f);
        $this->db->set('hiv_deaths19m', $hiv_deaths19m);
        $this->db->set('hiv_deaths19f', $hiv_deaths19f);
        $this->db->set('hiv_deaths20m', $hiv_deaths20m);
        $this->db->set('hiv_deaths20f', $hiv_deaths20f);

        $this->db->set('trauma_hos5m', $trauma_hos5m);
        $this->db->set('trauma_hos5f', $trauma_hos5f);
        $this->db->set('trauma_hos19m', $trauma_hos19m);
        $this->db->set('trauma_hos19f', $trauma_hos19f);
        $this->db->set('trauma_hos20m', $trauma_hos20m);
        $this->db->set('trauma_hos20f', $trauma_hos20f);
        $this->db->set('trauma_deaths5m', $trauma_deaths5m);
        $this->db->set('trauma_deaths5f', $trauma_deaths5f);
        $this->db->set('trauma_deaths19m', $trauma_deaths19m);
        $this->db->set('trauma_deaths19f', $trauma_deaths19f);
        $this->db->set('trauma_deaths20m', $trauma_deaths20m);
        $this->db->set('trauma_deaths20f', $trauma_deaths20f);

        $this->db->set('spleen_hos5m', $spleen_hos5m);
        $this->db->set('spleen_hos5f', $spleen_hos5f);
        $this->db->set('spleen_hos19m', $spleen_hos19m);
        $this->db->set('spleen_hos19f', $spleen_hos19f);
        $this->db->set('spleen_hos20m', $spleen_hos20m);
        $this->db->set('spleen_hos20f', $spleen_hos20f);
        $this->db->set('spleen_deaths5m', $spleen_deaths5m);
        $this->db->set('spleen_deaths5f', $spleen_deaths5f);
        $this->db->set('spleen_deaths19m', $spleen_deaths19m);
        $this->db->set('spleen_deaths19f', $spleen_deaths19f);
        $this->db->set('spleen_deaths20m', $spleen_deaths20m);
        $this->db->set('spleen_deaths20f', $spleen_deaths20f);

        $this->db->set('frac_open_hos5m', $frac_open_hos5m);
        $this->db->set('frac_open_hos5f', $frac_open_hos5f);
        $this->db->set('frac_open_hos19m', $frac_open_hos19m);
        $this->db->set('frac_open_hos19f', $frac_open_hos19f);
        $this->db->set('frac_open_hos20m', $frac_open_hos20m);
        $this->db->set('frac_open_hos20f', $frac_open_hos20f);
        $this->db->set('frac_open_deaths5m', $frac_open_deaths5m);
        $this->db->set('frac_open_deaths5f', $frac_open_deaths5f);
        $this->db->set('frac_open_deaths19m', $frac_open_deaths19m);
        $this->db->set('frac_open_deaths19f', $frac_open_deaths19f);
        $this->db->set('frac_open_deaths20m', $frac_open_deaths20m);
        $this->db->set('frac_open_deaths20f', $frac_open_deaths20f);

        $this->db->set('frac_int_hos5m', $frac_int_hos5m);
        $this->db->set('frac_int_hos5f', $frac_int_hos5f);
        $this->db->set('frac_int_hos19m', $frac_int_hos19m);
        $this->db->set('frac_int_hos19f', $frac_int_hos19f);
        $this->db->set('frac_int_hos20m', $frac_int_hos20m);
        $this->db->set('frac_int_hos20f', $frac_int_hos20f);
        $this->db->set('frac_int_deaths5m', $frac_int_deaths5m);
        $this->db->set('frac_int_deaths5f', $frac_int_deaths5f);
        $this->db->set('frac_int_deaths19m', $frac_int_deaths19m);
        $this->db->set('frac_int_deaths19f', $frac_int_deaths19f);
        $this->db->set('frac_int_deaths20m', $frac_int_deaths20m);
        $this->db->set('frac_int_deaths20f', $frac_int_deaths20f);

        $this->db->set('trauma_other_hos5m', $trauma_other_hos5m);
        $this->db->set('trauma_other_hos5f', $trauma_other_hos5f);
        $this->db->set('trauma_other_hos19m', $trauma_other_hos19m);
        $this->db->set('trauma_other_hos19f', $trauma_other_hos19f);
        $this->db->set('trauma_other_hos20m', $trauma_other_hos20m);
        $this->db->set('trauma_other_hos20f', $trauma_other_hos20f);
        $this->db->set('trauma_other_deaths5m', $trauma_other_deaths5m);
        $this->db->set('trauma_other_deaths5f', $trauma_other_deaths5f);
        $this->db->set('trauma_other_deaths19m', $trauma_other_deaths19m);
        $this->db->set('trauma_other_deaths19f', $trauma_other_deaths19f);
        $this->db->set('trauma_other_deaths20m', $trauma_other_deaths20m);
        $this->db->set('trauma_other_deaths20f', $trauma_other_deaths20f);

        $this->db->set('burns_hos5m', $burns_hos5m);
        $this->db->set('burns_hos5f', $burns_hos5f);
        $this->db->set('burns_hos19m', $burns_hos19m);
        $this->db->set('burns_hos19f', $burns_hos19f);
        $this->db->set('burns_hos20m', $burns_hos20m);
        $this->db->set('burns_hos20f', $burns_hos20f);
        $this->db->set('burns_deaths5m', $burns_deaths5m);
        $this->db->set('burns_deaths5f', $burns_deaths5f);
        $this->db->set('burns_deaths19m', $burns_deaths19m);
        $this->db->set('burns_deaths19f', $burns_deaths19f);
        $this->db->set('burns_deaths20m', $burns_deaths20m);
        $this->db->set('burns_deaths20f', $burns_deaths20f);

        $this->db->set('hepatitis_hos5m', $hepatitis_hos5m);
        $this->db->set('hepatitis_hos5f', $hepatitis_hos5f);
        $this->db->set('hepatitis_hos19m', $hepatitis_hos19m);
        $this->db->set('hepatitis_hos19f', $hepatitis_hos19f);
        $this->db->set('hepatitis_hos20m', $hepatitis_hos20m);
        $this->db->set('hepatitis_hos20f', $hepatitis_hos20f);
        $this->db->set('hepatitis_deaths5m', $hepatitis_deaths5m);
        $this->db->set('hepatitis_deaths5f', $hepatitis_deaths5f);
        $this->db->set('hepatitis_deaths19m', $hepatitis_deaths19m);
        $this->db->set('hepatitis_deaths19f', $hepatitis_deaths19f);
        $this->db->set('hepatitis_deaths20m', $hepatitis_deaths20m);
        $this->db->set('hepatitis_deaths20f', $hepatitis_deaths20f);

        $this->db->set('cirrhosis_hos5m', $cirrhosis_hos5m);
        $this->db->set('cirrhosis_hos5f', $cirrhosis_hos5f);
        $this->db->set('cirrhosis_hos19m', $cirrhosis_hos19m);
        $this->db->set('cirrhosis_hos19f', $cirrhosis_hos19f);
        $this->db->set('cirrhosis_hos20m', $cirrhosis_hos20m);
        $this->db->set('cirrhosis_hos20f', $cirrhosis_hos20f);
        $this->db->set('cirrhosis_deaths5m', $cirrhosis_deaths5m);
        $this->db->set('cirrhosis_deaths5f', $cirrhosis_deaths5f);
        $this->db->set('cirrhosis_deaths19m', $cirrhosis_deaths19m);
        $this->db->set('cirrhosis_deaths19f', $cirrhosis_deaths19f);
        $this->db->set('cirrhosis_deaths20m', $cirrhosis_deaths20m);
        $this->db->set('cirrhosis_deaths20f', $cirrhosis_deaths20f);

        $this->db->set('digestive_hos5m', $digestive_hos5m);
        $this->db->set('digestive_hos5f', $digestive_hos5f);
        $this->db->set('digestive_hos19m', $digestive_hos19m);
        $this->db->set('digestive_hos19f', $digestive_hos19f);
        $this->db->set('digestive_hos20m', $digestive_hos20m);
        $this->db->set('digestive_hos20f', $digestive_hos20f);
        $this->db->set('digestive_deaths5m', $digestive_deaths5m);
        $this->db->set('digestive_deaths5f', $digestive_deaths5f);
        $this->db->set('digestive_deaths19m', $digestive_deaths19m);
        $this->db->set('digestive_deaths19f', $digestive_deaths19f);
        $this->db->set('digestive_deaths20m', $digestive_deaths20m);
        $this->db->set('digestive_deaths20f', $digestive_deaths20f);

        $this->db->set('gastritis_hos5m', $gastritis_hos5m);
        $this->db->set('gastritis_hos5f', $gastritis_hos5f);
        $this->db->set('gastritis_hos19m', $gastritis_hos19m);
        $this->db->set('gastritis_hos19f', $gastritis_hos19f);
        $this->db->set('gastritis_hos20m', $gastritis_hos20m);
        $this->db->set('gastritis_hos20f', $gastritis_hos20f);
        $this->db->set('gastritis_deaths5m', $gastritis_deaths5m);
        $this->db->set('gastritis_deaths5f', $gastritis_deaths5f);
        $this->db->set('gastritis_deaths19m', $gastritis_deaths19m);
        $this->db->set('gastritis_deaths19f', $gastritis_deaths19f);
        $this->db->set('gastritis_deaths20m', $gastritis_deaths20m);
        $this->db->set('gastritis_deaths20f', $gastritis_deaths20f);

        $this->db->set('ulcer_hos5m', $ulcer_hos5m);
        $this->db->set('ulcer_hos5f', $ulcer_hos5f);
        $this->db->set('ulcer_hos19m', $ulcer_hos19m);
        $this->db->set('ulcer_hos19f', $ulcer_hos19f);
        $this->db->set('ulcer_hos20m', $ulcer_hos20m);
        $this->db->set('ulcer_hos20f', $ulcer_hos20f);
        $this->db->set('ulcer_deaths5m', $ulcer_deaths5m);
        $this->db->set('ulcer_deaths5f', $ulcer_deaths5f);
        $this->db->set('ulcer_deaths19m', $ulcer_deaths19m);
        $this->db->set('ulcer_deaths19f', $ulcer_deaths19f);
        $this->db->set('ulcer_deaths20m', $ulcer_deaths20m);
        $this->db->set('ulcer_deaths20f', $ulcer_deaths20f);

        $this->db->set('appendi_hos5m', $appendi_hos5m);
        $this->db->set('appendi_hos5f', $appendi_hos5f);
        $this->db->set('appendi_hos19m', $appendi_hos19m);
        $this->db->set('appendi_hos19f', $appendi_hos19f);
        $this->db->set('appendi_hos20m', $appendi_hos20m);
        $this->db->set('appendi_hos20f', $appendi_hos20f);
        $this->db->set('appendi_deaths5m', $appendi_deaths5m);
        $this->db->set('appendi_deaths5f', $appendi_deaths5f);
        $this->db->set('appendi_deaths19m', $appendi_deaths19m);
        $this->db->set('appendi_deaths19f', $appendi_deaths19f);
        $this->db->set('appendi_deaths20m', $appendi_deaths20m);
        $this->db->set('appendi_deaths20f', $appendi_deaths20f);

        $this->db->set('hernia_hos5m', $hernia_hos5m);
        $this->db->set('hernia_hos5f', $hernia_hos5f);
        $this->db->set('hernia_hos19m', $hernia_hos19m);
        $this->db->set('hernia_hos19f', $hernia_hos19f);
        $this->db->set('hernia_hos20m', $hernia_hos20m);
        $this->db->set('hernia_hos20f', $hernia_hos20f);
        $this->db->set('hernia_deaths5m', $hernia_deaths5m);
        $this->db->set('hernia_deaths5f', $hernia_deaths5f);
        $this->db->set('hernia_deaths19m', $hernia_deaths19m);
        $this->db->set('hernia_deaths19f', $hernia_deaths19f);
        $this->db->set('hernia_deaths20m', $hernia_deaths20m);
        $this->db->set('hernia_deaths20f', $hernia_deaths20f);

        $this->db->set('peritonitis_hos5m', $peritonitis_hos5m);
        $this->db->set('peritonitis_hos5f', $peritonitis_hos5f);
        $this->db->set('peritonitis_hos19m', $peritonitis_hos19m);
        $this->db->set('peritonitis_hos19f', $peritonitis_hos19f);
        $this->db->set('peritonitis_hos20m', $peritonitis_hos20m);
        $this->db->set('peritonitis_hos20f', $peritonitis_hos20f);
        $this->db->set('peritonitis_deaths5m', $peritonitis_deaths5m);
        $this->db->set('peritonitis_deaths5f', $peritonitis_deaths5f);
        $this->db->set('peritonitis_deaths19m', $peritonitis_deaths19m);
        $this->db->set('peritonitis_deaths19f', $peritonitis_deaths19f);
        $this->db->set('peritonitis_deaths20m', $peritonitis_deaths20m);
        $this->db->set('peritonitis_deaths20f', $peritonitis_deaths20f);

        $this->db->set('intestinal_hos5m', $intestinal_hos5m);
        $this->db->set('intestinal_hos5f', $intestinal_hos5f);
        $this->db->set('intestinal_hos19m', $intestinal_hos19m);
        $this->db->set('intestinal_hos19f', $intestinal_hos19f);
        $this->db->set('intestinal_hos20m', $intestinal_hos20m);
        $this->db->set('intestinal_hos20f', $intestinal_hos20f);
        $this->db->set('intestinal_deaths5m', $intestinal_deaths5m);
        $this->db->set('intestinal_deaths5f', $intestinal_deaths5f);
        $this->db->set('intestinal_deaths19m', $intestinal_deaths19m);
        $this->db->set('intestinal_deaths19f', $intestinal_deaths19f);
        $this->db->set('intestinal_deaths20m', $intestinal_deaths20m);
        $this->db->set('intestinal_deaths20f', $intestinal_deaths20f);

        $this->db->set('urinary_hos5m', $urinary_hos5m);
        $this->db->set('urinary_hos5f', $urinary_hos5f);
        $this->db->set('urinary_hos19m', $urinary_hos19m);
        $this->db->set('urinary_hos19f', $urinary_hos19f);
        $this->db->set('urinary_hos20m', $urinary_hos20m);
        $this->db->set('urinary_hos20f', $urinary_hos20f);
        $this->db->set('urinary_deaths5m', $urinary_deaths5m);
        $this->db->set('urinary_deaths5f', $urinary_deaths5f);
        $this->db->set('urinary_deaths19m', $urinary_deaths19m);
        $this->db->set('urinary_deaths19f', $urinary_deaths19f);
        $this->db->set('urinary_deaths20m', $urinary_deaths20m);
        $this->db->set('urinary_deaths20f', $urinary_deaths20f);

        $this->db->set('bone_inf_hos5m', $bone_inf_hos5m);
        $this->db->set('bone_inf_hos5f', $bone_inf_hos5f);
        $this->db->set('bone_inf_hos19m', $bone_inf_hos19m);
        $this->db->set('bone_inf_hos19f', $bone_inf_hos19f);
        $this->db->set('bone_inf_hos20m', $bone_inf_hos20m);
        $this->db->set('bone_inf_hos20f', $bone_inf_hos20f);
        $this->db->set('bone_inf_deaths5m', $bone_inf_deaths5m);
        $this->db->set('bone_inf_deaths5f', $bone_inf_deaths5f);
        $this->db->set('bone_inf_deaths19m', $bone_inf_deaths19m);
        $this->db->set('bone_inf_deaths19f', $bone_inf_deaths19f);
        $this->db->set('bone_inf_deaths20m', $bone_inf_deaths20m);
        $this->db->set('bone_inf_deaths20f', $bone_inf_deaths20f);

        $this->db->set('bone_other_hos5m', $bone_other_hos5m);
        $this->db->set('bone_other_hos5f', $bone_other_hos5f);
        $this->db->set('bone_other_hos19m', $bone_other_hos19m);
        $this->db->set('bone_other_hos19f', $bone_other_hos19f);
        $this->db->set('bone_other_hos20m', $bone_other_hos20m);
        $this->db->set('bone_other_hos20f', $bone_other_hos20f);
        $this->db->set('bone_other_deaths5m', $bone_other_deaths5m);
        $this->db->set('bone_other_deaths5f', $bone_other_deaths5f);
        $this->db->set('bone_other_deaths19m', $bone_other_deaths19m);
        $this->db->set('bone_other_deaths19f', $bone_other_deaths19f);
        $this->db->set('bone_other_deaths20m', $bone_other_deaths20m);
        $this->db->set('bone_other_deaths20f', $bone_other_deaths20f);

        $this->db->set('acute_hos5m', $acute_hos5m);
        $this->db->set('acute_hos5f', $acute_hos5f);
        $this->db->set('acute_hos19m', $acute_hos19m);
        $this->db->set('acute_hos19f', $acute_hos19f);
        $this->db->set('acute_hos20m', $acute_hos20m);
        $this->db->set('acute_hos20f', $acute_hos20f);
        $this->db->set('acute_deaths5m', $acute_deaths5m);
        $this->db->set('acute_deaths5f', $acute_deaths5f);
        $this->db->set('acute_deaths19m', $acute_deaths19m);
        $this->db->set('acute_deaths19f', $acute_deaths19f);
        $this->db->set('acute_deaths20m', $acute_deaths20m);
        $this->db->set('acute_deaths20f', $acute_deaths20f);

        $this->db->set('gyneco_hos19f', $gyneco_hos19f);
        $this->db->set('gyneco_hos20f', $gyneco_hos20f);
        $this->db->set('gyneco_deaths19f', $gyneco_deaths19f);
        $this->db->set('gyneco_deaths20f', $gyneco_deaths20f);

        $this->db->set('mastoditis_hos5m', $mastoditis_hos5m);
        $this->db->set('mastoditis_hos5f', $mastoditis_hos5f);
        $this->db->set('mastoditis_hos19m', $mastoditis_hos19m);
        $this->db->set('mastoditis_hos19f', $mastoditis_hos19f);
        $this->db->set('mastoditis_hos20m', $mastoditis_hos20m);
        $this->db->set('mastoditis_hos20f', $mastoditis_hos20f);
        $this->db->set('mastoditis_deaths5m', $mastoditis_deaths5m);
        $this->db->set('mastoditis_deaths5f', $mastoditis_deaths5f);
        $this->db->set('mastoditis_deaths19m', $mastoditis_deaths19m);
        $this->db->set('mastoditis_deaths19f', $mastoditis_deaths19f);
        $this->db->set('mastoditis_deaths20m', $mastoditis_deaths20m);
        $this->db->set('mastoditis_deaths20f', $mastoditis_deaths20f);

        $this->db->set('tetanus_hos5m', $tetanus_hos5m);
        $this->db->set('tetanus_hos5f', $tetanus_hos5f);
        $this->db->set('tetanus_hos19m', $tetanus_hos19m);
        $this->db->set('tetanus_hos19f', $tetanus_hos19f);
        $this->db->set('tetanus_hos20m', $tetanus_hos20m);
        $this->db->set('tetanus_hos20f', $tetanus_hos20f);
        $this->db->set('tetanus_deaths5m', $tetanus_deaths5m);
        $this->db->set('tetanus_deaths5f', $tetanus_deaths5f);
        $this->db->set('tetanus_deaths19m', $tetanus_deaths19m);
        $this->db->set('tetanus_deaths19f', $tetanus_deaths19f);
        $this->db->set('tetanus_deaths20m', $tetanus_deaths20m);
        $this->db->set('tetanus_deaths20f', $tetanus_deaths20f);

        $this->db->set('cancer_hos5m', $cancer_hos5m);
        $this->db->set('cancer_hos5f', $cancer_hos5f);
        $this->db->set('cancer_hos19m', $cancer_hos19m);
        $this->db->set('cancer_hos19f', $cancer_hos19f);
        $this->db->set('cancer_hos20m', $cancer_hos20m);
        $this->db->set('cancer_hos20f', $cancer_hos20f);
        $this->db->set('cancer_deaths5m', $cancer_deaths5m);
        $this->db->set('cancer_deaths5f', $cancer_deaths5f);
        $this->db->set('cancer_deaths19m', $cancer_deaths19m);
        $this->db->set('cancer_deaths19f', $cancer_deaths19f);
        $this->db->set('cancer_deaths20m', $cancer_deaths20m);
        $this->db->set('cancer_deaths20f', $cancer_deaths20f);

        $this->db->where('date_hospitalization_bcde', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Hospitalization_bcde');
    }
}
