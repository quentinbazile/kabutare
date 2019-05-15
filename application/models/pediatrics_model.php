<?php
class pediatrics_model extends CI_Model
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
      $p_beds,
      $p_present_start,
      $p_admissions,
      $p_referred,
      $p_no_referred,
      $p_discharges,
      $p_authorized,
      $p_abandoned,
      $p_deaths,
      $p_dis_referred,
      $p_counter,
      $p_present_end,
      $p_total,
      $p_actual,
      $num_rapport
    ) {
        $this->db->where('date_hospitalization_a', $this->session->userdata('add_date'));
        $q = $this->db->get('Hospitalization_a');
        if ($q->num_rows() == 0) {
            return $this->db->set(array(
          'p_beds' => $p_beds,
          'p_present_start' => $p_present_start,
          'p_admissions' => $p_admissions,
          'p_referred' => $p_referred,
          'p_no_referred' => $p_no_referred,
          'p_discharges' => $p_discharges,
          'p_authorized' => $p_authorized,
          'p_abandoned' => $p_abandoned,
          'p_deaths' => $p_deaths,
          'p_dis_referred' => $p_dis_referred,
          'p_counter' => $p_counter,
          'p_present_end' => $p_present_end,
          'p_total' => $p_total,
          'p_actual' => $p_actual,

      'num_rapport' => $num_rapport
    ))
            ->set('date_hospitalization_a', $this->session->userdata('add_date'))
            ->insert('Hospitalization_a');
        } else {
            $this->db->set(array(
                'p_beds' => $p_beds,
                'p_present_start' => $p_present_start,
                'p_admissions' => $p_admissions,
                'p_referred' => $p_referred,
                'p_no_referred' => $p_no_referred,
                'p_discharges' => $p_discharges,
                'p_authorized' => $p_authorized,
                'p_abandoned' => $p_abandoned,
                'p_deaths' => $p_deaths,
                'p_dis_referred' => $p_dis_referred,
                'p_counter' => $p_counter,
                'p_present_end' => $p_present_end,
                'p_total' => $p_total,
                'p_actual' => $p_actual,

            'num_rapport' => $num_rapport
          ))
          ->where('date_hospitalization_a', $this->session->userdata('add_date'));
            return $this->db->update('Hospitalization_a');
        }
    }

    public function fetch_data2(
      $hosp_1m,
      $hosp_1f,
      $hosp_4m,
      $hosp_4f,
      $hosp_19m,
      $hosp_19f,

      $deaths_1m,
      $deaths_1f,
      $deaths_4m,
      $deaths_4f,
      $deaths_19m,
      $deaths_19f,

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

      $malaria_sev_hos5m,
      $malaria_sev_hos5f,
      $malaria_sev_hos19m,
      $malaria_sev_hos19f,
      $malaria_sev_deaths5m,
      $malaria_sev_deaths5f,
      $malaria_sev_deaths19m,
      $malaria_sev_deaths19f,

      $borreliosis_hos5m,
      $borreliosis_hos5f,
      $borreliosis_hos19m,
      $borreliosis_hos19f,
      $borreliosis_deaths5m,
      $borreliosis_deaths5f,
      $borreliosis_deaths19m,
      $borreliosis_deaths19f,

      $pneumonia_sim_hos5m,
      $pneumonia_sim_hos5f,
      $pneumonia_sim_hos19m,
      $pneumonia_sim_hos19f,
      $pneumonia_sim_deaths5m,
      $pneumonia_sim_deaths5f,
      $pneumonia_sim_deaths19m,
      $pneumonia_sim_deaths19f,

      $pneumonia_sev_hos5m,
      $pneumonia_sev_hos5f,
      $pneumonia_sev_hos19m,
      $pneumonia_sev_hos19f,
      $pneumonia_sev_deaths5m,
      $pneumonia_sev_deaths5f,
      $pneumonia_sev_deaths19m,
      $pneumonia_sev_deaths19f,

      $pleurisy_hos5m,
      $pleurisy_hos5f,
      $pleurisy_hos19m,
      $pleurisy_hos19f,
      $pleurisy_deaths5m,
      $pleurisy_deaths5f,
      $pleurisy_deaths19m,
      $pleurisy_deaths19f,

      $ari_hos5m,
      $ari_hos5f,
      $ari_hos19m,
      $ari_hos19f,
      $ari_deaths5m,
      $ari_deaths5f,
      $ari_deaths19m,
      $ari_deaths19f,

      $diarr_bloody_hos5m,
      $diarr_bloody_hos5f,
      $diarr_bloody_hos19m,
      $diarr_bloody_hos19f,
      $diarr_bloody_deaths5m,
      $diarr_bloody_deaths5f,
      $diarr_bloody_deaths19m,
      $diarr_bloody_deaths19f,

      $diarr_dehy_hos5m,
      $diarr_dehy_hos5f,
      $diarr_dehy_hos19m,
      $diarr_dehy_hos19f,
      $diarr_dehy_deaths5m,
      $diarr_dehy_deaths5f,
      $diarr_dehy_deaths19m,
      $diarr_dehy_deaths19f,

      $diarr_no_dehy_hos5m,
      $diarr_no_dehy_hos5f,
      $diarr_no_dehy_hos19m,
      $diarr_no_dehy_hos19f,
      $diarr_no_dehy_deaths5m,
      $diarr_no_dehy_deaths5f,
      $diarr_no_dehy_deaths19m,
      $diarr_no_dehy_deaths19f,

      $cholera_hos5m,
      $cholera_hos5f,
      $cholera_hos19m,
      $cholera_hos19f,
      $cholera_deaths5m,
      $cholera_deaths5f,
      $cholera_deaths19m,
      $cholera_deaths19f,

      $typhoid_hos5m,
      $typhoid_hos5f,
      $typhoid_hos19m,
      $typhoid_hos19f,
      $typhoid_deaths5m,
      $typhoid_deaths5f,
      $typhoid_deaths19m,
      $typhoid_deaths19f,

      $meningitis_hos5m,
      $meningitis_hos5f,
      $meningitis_hos19m,
      $meningitis_hos19f,
      $meningitis_deaths5m,
      $meningitis_deaths5f,
      $meningitis_deaths19m,
      $meningitis_deaths19f,

      $measles_hos5m,
      $measles_hos5f,
      $measles_hos19m,
      $measles_hos19f,
      $measles_deaths5m,
      $measles_deaths5f,
      $measles_deaths19m,
      $measles_deaths19f,

      $tb_conf_hos5m,
      $tb_conf_hos5f,
      $tb_conf_hos19m,
      $tb_conf_hos19f,
      $tb_conf_deaths5m,
      $tb_conf_deaths5f,
      $tb_conf_deaths19m,
      $tb_conf_deaths19f,

      $tb_diag_hos5m,
      $tb_diag_hos5f,
      $tb_diag_hos19m,
      $tb_diag_hos19f,
      $tb_diag_deaths5m,
      $tb_diag_deaths5f,
      $tb_diag_deaths19m,
      $tb_diag_deaths19f,

      $fever_hos5m,
      $fever_hos5f,
      $fever_hos19m,
      $fever_hos19f,
      $fever_deaths5m,
      $fever_deaths5f,
      $fever_deaths19m,
      $fever_deaths19f,

      $encephalitis_hos5m,
      $encephalitis_hos5f,
      $encephalitis_hos19m,
      $encephalitis_hos19f,
      $encephalitis_deaths5m,
      $encephalitis_deaths5f,
      $encephalitis_deaths19m,
      $encephalitis_deaths19f,

      $mening_crypto_hos5m,
      $mening_crypto_hos5f,
      $mening_crypto_hos19m,
      $mening_crypto_hos19f,
      $mening_crypto_deaths5m,
      $mening_crypto_deaths5f,
      $mening_crypto_deaths19m,
      $mening_crypto_deaths19f,

      $skin_hos5m,
      $skin_hos5f,
      $skin_hos19m,
      $skin_hos19f,
      $skin_deaths5m,
      $skin_deaths5f,
      $skin_deaths19m,
      $skin_deaths19f,

      $diarr_chronic_hos5m,
      $diarr_chronic_hos5f,
      $diarr_chronic_hos19m,
      $diarr_chronic_hos19f,
      $diarr_chronic_deaths5m,
      $diarr_chronic_deaths5f,
      $diarr_chronic_deaths19m,
      $diarr_chronic_deaths19f,

      $hiv_hos5m,
      $hiv_hos5f,
      $hiv_hos19m,
      $hiv_hos19f,
      $hiv_deaths5m,
      $hiv_deaths5f,
      $hiv_deaths19m,
      $hiv_deaths19f,

      $trauma_hos5m,
      $trauma_hos5f,
      $trauma_hos19m,
      $trauma_hos19f,
      $trauma_deaths5m,
      $trauma_deaths5f,
      $trauma_deaths19m,
      $trauma_deaths19f,

      $spleen_hos5m,
      $spleen_hos5f,
      $spleen_hos19m,
      $spleen_hos19f,
      $spleen_deaths5m,
      $spleen_deaths5f,
      $spleen_deaths19m,
      $spleen_deaths19f,

      $frac_open_hos5m,
      $frac_open_hos5f,
      $frac_open_hos19m,
      $frac_open_hos19f,
      $frac_open_deaths5m,
      $frac_open_deaths5f,
      $frac_open_deaths19m,
      $frac_open_deaths19f,

      $frac_int_hos5m,
      $frac_int_hos5f,
      $frac_int_hos19m,
      $frac_int_hos19f,
      $frac_int_deaths5m,
      $frac_int_deaths5f,
      $frac_int_deaths19m,
      $frac_int_deaths19f,

      $trauma_other_hos5m,
      $trauma_other_hos5f,
      $trauma_other_hos19m,
      $trauma_other_hos19f,
      $trauma_other_deaths5m,
      $trauma_other_deaths5f,
      $trauma_other_deaths19m,
      $trauma_other_deaths19f,

      $burns_hos5m,
      $burns_hos5f,
      $burns_hos19m,
      $burns_hos19f,
      $burns_deaths5m,
      $burns_deaths5f,
      $burns_deaths19m,
      $burns_deaths19f,

      $hepatitis_hos5m,
      $hepatitis_hos5f,
      $hepatitis_hos19m,
      $hepatitis_hos19f,
      $hepatitis_deaths5m,
      $hepatitis_deaths5f,
      $hepatitis_deaths19m,
      $hepatitis_deaths19f,

      $cirrhosis_hos5m,
      $cirrhosis_hos5f,
      $cirrhosis_hos19m,
      $cirrhosis_hos19f,
      $cirrhosis_deaths5m,
      $cirrhosis_deaths5f,
      $cirrhosis_deaths19m,
      $cirrhosis_deaths19f,

      $digestive_hos5m,
      $digestive_hos5f,
      $digestive_hos19m,
      $digestive_hos19f,
      $digestive_deaths5m,
      $digestive_deaths5f,
      $digestive_deaths19m,
      $digestive_deaths19f,

      $gastritis_hos5m,
      $gastritis_hos5f,
      $gastritis_hos19m,
      $gastritis_hos19f,
      $gastritis_deaths5m,
      $gastritis_deaths5f,
      $gastritis_deaths19m,
      $gastritis_deaths19f,

      $ulcer_hos5m,
      $ulcer_hos5f,
      $ulcer_hos19m,
      $ulcer_hos19f,
      $ulcer_deaths5m,
      $ulcer_deaths5f,
      $ulcer_deaths19m,
      $ulcer_deaths19f,

      $appendi_hos5m,
      $appendi_hos5f,
      $appendi_hos19m,
      $appendi_hos19f,
      $appendi_deaths5m,
      $appendi_deaths5f,
      $appendi_deaths19m,
      $appendi_deaths19f,

      $hernia_hos5m,
      $hernia_hos5f,
      $hernia_hos19m,
      $hernia_hos19f,
      $hernia_deaths5m,
      $hernia_deaths5f,
      $hernia_deaths19m,
      $hernia_deaths19f,

      $peritonitis_hos5m,
      $peritonitis_hos5f,
      $peritonitis_hos19m,
      $peritonitis_hos19f,
      $peritonitis_deaths5m,
      $peritonitis_deaths5f,
      $peritonitis_deaths19m,
      $peritonitis_deaths19f,

      $intestinal_hos5m,
      $intestinal_hos5f,
      $intestinal_hos19m,
      $intestinal_hos19f,
      $intestinal_deaths5m,
      $intestinal_deaths5f,
      $intestinal_deaths19m,
      $intestinal_deaths19f,

      $urinary_hos5m,
      $urinary_hos5f,
      $urinary_hos19m,
      $urinary_hos19f,
      $urinary_deaths5m,
      $urinary_deaths5f,
      $urinary_deaths19m,
      $urinary_deaths19f,

      $bone_inf_hos5m,
      $bone_inf_hos5f,
      $bone_inf_hos19m,
      $bone_inf_hos19f,
      $bone_inf_deaths5m,
      $bone_inf_deaths5f,
      $bone_inf_deaths19m,
      $bone_inf_deaths19f,

      $bone_other_hos5m,
      $bone_other_hos5f,
      $bone_other_hos19m,
      $bone_other_hos19f,
      $bone_other_deaths5m,
      $bone_other_deaths5f,
      $bone_other_deaths19m,
      $bone_other_deaths19f,

      $acute_hos5m,
      $acute_hos5f,
      $acute_hos19m,
      $acute_hos19f,
      $acute_deaths5m,
      $acute_deaths5f,
      $acute_deaths19m,
      $acute_deaths19f,

      $gyneco_hos19f,
      $gyneco_deaths19f,

      $mastoditis_hos5m,
      $mastoditis_hos5f,
      $mastoditis_hos19m,
      $mastoditis_hos19f,
      $mastoditis_deaths5m,
      $mastoditis_deaths5f,
      $mastoditis_deaths19m,
      $mastoditis_deaths19f,

      $tetanus_hos5m,
      $tetanus_hos5f,
      $tetanus_hos19m,
      $tetanus_hos19f,
      $tetanus_deaths5m,
      $tetanus_deaths5f,
      $tetanus_deaths19m,
      $tetanus_deaths19f,

      $cancer_hos5m,
      $cancer_hos5f,
      $cancer_hos19m,
      $cancer_hos19f,
      $cancer_deaths5m,
      $cancer_deaths5f,
      $cancer_deaths19m,
      $cancer_deaths19f,
      $num_rapport
    ) {
        return $this->db->set(array(
          'hosp_1m' => $hosp_1m,
          'hosp_1f' => $hosp_1f,
          'hosp_4m' => $hosp_4m,
          'hosp_4f' => $hosp_4f,
          'hosp_19m' => $hosp_19m,
          'hosp_19f' => $hosp_19f,

          'deaths_1m' => $deaths_1m,
          'deaths_1f' => $deaths_1f,
          'deaths_4m' => $deaths_4m,
          'deaths_4f' => $deaths_4f,
          'deaths_19m' => $deaths_19m,
          'deaths_19f' => $deaths_19f,

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

          'malaria_sev_hos5m' => $malaria_sev_hos5m,
          'malaria_sev_hos5f' => $malaria_sev_hos5f,
          'malaria_sev_hos19m' => $malaria_sev_hos19m,
          'malaria_sev_hos19f' => $malaria_sev_hos19f,
          'malaria_sev_deaths5m' => $malaria_sev_deaths5m,
          'malaria_sev_deaths5f' => $malaria_sev_deaths5f,
          'malaria_sev_deaths19m' => $malaria_sev_deaths19m,
          'malaria_sev_deaths19f' => $malaria_sev_deaths19f,

          'borreliosis_hos5m' => $borreliosis_hos5m,
          'borreliosis_hos5f' => $borreliosis_hos5f,
          'borreliosis_hos19m' => $borreliosis_hos19m,
          'borreliosis_hos19f' => $borreliosis_hos19f,
          'borreliosis_deaths5m' => $borreliosis_deaths5m,
          'borreliosis_deaths5f' => $borreliosis_deaths5f,
          'borreliosis_deaths19m' => $borreliosis_deaths19m,
          'borreliosis_deaths19f' => $borreliosis_deaths19f,

          'pneumonia_sim_hos5m' => $pneumonia_sim_hos5m,
          'pneumonia_sim_hos5f' => $pneumonia_sim_hos5f,
          'pneumonia_sim_hos19m' => $pneumonia_sim_hos19m,
          'pneumonia_sim_hos19f' => $pneumonia_sim_hos19f,
          'pneumonia_sim_deaths5m' => $pneumonia_sim_deaths5m,
          'pneumonia_sim_deaths5f' => $pneumonia_sim_deaths5f,
          'pneumonia_sim_deaths19m' => $pneumonia_sim_deaths19m,
          'pneumonia_sim_deaths19f' => $pneumonia_sim_deaths19f,

          'pneumonia_sev_hos5m' => $pneumonia_sev_hos5m,
          'pneumonia_sev_hos5f' => $pneumonia_sev_hos5f,
          'pneumonia_sev_hos19m' => $pneumonia_sev_hos19m,
          'pneumonia_sev_hos19f' => $pneumonia_sev_hos19f,
          'pneumonia_sev_deaths5m' => $pneumonia_sev_deaths5m,
          'pneumonia_sev_deaths5f' => $pneumonia_sev_deaths5f,
          'pneumonia_sev_deaths19m' => $pneumonia_sev_deaths19m,
          'pneumonia_sev_deaths19f' => $pneumonia_sev_deaths19f,

          'pleurisy_hos5m' => $pleurisy_hos5m,
          'pleurisy_hos5f' => $pleurisy_hos5f,
          'pleurisy_hos19m' => $pleurisy_hos19m,
          'pleurisy_hos19f' => $pleurisy_hos19f,
          'pleurisy_deaths5m' => $pleurisy_deaths5m,
          'pleurisy_deaths5f' => $pleurisy_deaths5f,
          'pleurisy_deaths19m' => $pleurisy_deaths19m,
          'pleurisy_deaths19f' => $pleurisy_deaths19f,

          'ari_hos5m' => $ari_hos5m,
          'ari_hos5f' => $ari_hos5f,
          'ari_hos19m' => $ari_hos19m,
          'ari_hos19f' => $ari_hos19f,
          'ari_deaths5m' => $ari_deaths5m,
          'ari_deaths5f' => $ari_deaths5f,
          'ari_deaths19m' => $ari_deaths19m,
          'ari_deaths19f' => $ari_deaths19f,

          'diarr_bloody_hos5m' => $diarr_bloody_hos5m,
          'diarr_bloody_hos5f' => $diarr_bloody_hos5f,
          'diarr_bloody_hos19m' => $diarr_bloody_hos19m,
          'diarr_bloody_hos19f' => $diarr_bloody_hos19f,
          'diarr_bloody_deaths5m' => $diarr_bloody_deaths5m,
          'diarr_bloody_deaths5f' => $diarr_bloody_deaths5f,
          'diarr_bloody_deaths19m' => $diarr_bloody_deaths19m,
          'diarr_bloody_deaths19f' => $diarr_bloody_deaths19f,

          'diarr_dehy_hos5m' => $diarr_dehy_hos5m,
          'diarr_dehy_hos5f' => $diarr_dehy_hos5f,
          'diarr_dehy_hos19m' => $diarr_dehy_hos19m,
          'diarr_dehy_hos19f' => $diarr_dehy_hos19f,
          'diarr_dehy_deaths5m' => $diarr_dehy_deaths5m,
          'diarr_dehy_deaths5f' => $diarr_dehy_deaths5f,
          'diarr_dehy_deaths19m' => $diarr_dehy_deaths19m,
          'diarr_dehy_deaths19f' => $diarr_dehy_deaths19f,

          'diarr_no_dehy_hos5m' => $diarr_no_dehy_hos5m,
          'diarr_no_dehy_hos5f' => $diarr_no_dehy_hos5f,
          'diarr_no_dehy_hos19m' => $diarr_no_dehy_hos19m,
          'diarr_no_dehy_hos19f' => $diarr_no_dehy_hos19f,
          'diarr_no_dehy_deaths5m' => $diarr_no_dehy_deaths5m,
          'diarr_no_dehy_deaths5f' => $diarr_no_dehy_deaths5f,
          'diarr_no_dehy_deaths19m' => $diarr_no_dehy_deaths19m,
          'diarr_no_dehy_deaths19f' => $diarr_no_dehy_deaths19f,

          'cholera_hos5m' => $cholera_hos5m,
          'cholera_hos5f' => $cholera_hos5f,
          'cholera_hos19m' => $cholera_hos19m,
          'cholera_hos19f' => $cholera_hos19f,
          'cholera_deaths5m' => $cholera_deaths5m,
          'cholera_deaths5f' => $cholera_deaths5f,
          'cholera_deaths19m' => $cholera_deaths19m,
          'cholera_deaths19f' => $cholera_deaths19f,

          'typhoid_hos5m' => $typhoid_hos5m,
          'typhoid_hos5f' => $typhoid_hos5f,
          'typhoid_hos19m' => $typhoid_hos19m,
          'typhoid_hos19f' => $typhoid_hos19f,
          'typhoid_deaths5m' => $typhoid_deaths5m,
          'typhoid_deaths5f' => $typhoid_deaths5f,
          'typhoid_deaths19m' => $typhoid_deaths19m,
          'typhoid_deaths19f' => $typhoid_deaths19f,

          'meningitis_hos5m' => $meningitis_hos5m,
          'meningitis_hos5f' => $meningitis_hos5f,
          'meningitis_hos19m' => $meningitis_hos19m,
          'meningitis_hos19f' => $meningitis_hos19f,
          'meningitis_deaths5m' => $meningitis_deaths5m,
          'meningitis_deaths5f' => $meningitis_deaths5f,
          'meningitis_deaths19m' => $meningitis_deaths19m,
          'meningitis_deaths19f' => $meningitis_deaths19f,

          'measles_hos5m' => $measles_hos5m,
          'measles_hos5f' => $measles_hos5f,
          'measles_hos19m' => $measles_hos19m,
          'measles_hos19f' => $measles_hos19f,
          'measles_deaths5m' => $measles_deaths5m,
          'measles_deaths5f' => $measles_deaths5f,
          'measles_deaths19m' => $measles_deaths19m,
          'measles_deaths19f' => $measles_deaths19f,

          'tb_conf_hos5m' => $tb_conf_hos5m,
          'tb_conf_hos5f' => $tb_conf_hos5f,
          'tb_conf_hos19m' => $tb_conf_hos19m,
          'tb_conf_hos19f' => $tb_conf_hos19f,
          'tb_conf_deaths5m' => $tb_conf_deaths5m,
          'tb_conf_deaths5f' => $tb_conf_deaths5f,
          'tb_conf_deaths19m' => $tb_conf_deaths19m,
          'tb_conf_deaths19f' => $tb_conf_deaths19f,

          'tb_diag_hos5m' => $tb_diag_hos5m,
          'tb_diag_hos5f' => $tb_diag_hos5f,
          'tb_diag_hos19m' => $tb_diag_hos19m,
          'tb_diag_hos19f' => $tb_diag_hos19f,
          'tb_diag_deaths5m' => $tb_diag_deaths5m,
          'tb_diag_deaths5f' => $tb_diag_deaths5f,
          'tb_diag_deaths19m' => $tb_diag_deaths19m,
          'tb_diag_deaths19f' => $tb_diag_deaths19f,

          'fever_hos5m' => $fever_hos5m,
          'fever_hos5f' => $fever_hos5f,
          'fever_hos19m' => $fever_hos19m,
          'fever_hos19f' => $fever_hos19f,
          'fever_deaths5m' => $fever_deaths5m,
          'fever_deaths5f' => $fever_deaths5f,
          'fever_deaths19m' => $fever_deaths19m,
          'fever_deaths19f' => $fever_deaths19f,

          'encephalitis_hos5m' => $encephalitis_hos5m,
          'encephalitis_hos5f' => $encephalitis_hos5f,
          'encephalitis_hos19m' => $encephalitis_hos19m,
          'encephalitis_hos19f' => $encephalitis_hos19f,
          'encephalitis_deaths5m' => $encephalitis_deaths5m,
          'encephalitis_deaths5f' => $encephalitis_deaths5f,
          'encephalitis_deaths19m' => $encephalitis_deaths19m,
          'encephalitis_deaths19f' => $encephalitis_deaths19f,

          'mening_crypto_hos5m' => $mening_crypto_hos5m,
          'mening_crypto_hos5f' => $mening_crypto_hos5f,
          'mening_crypto_hos19m' => $mening_crypto_hos19m,
          'mening_crypto_hos19f' => $mening_crypto_hos19f,
          'mening_crypto_deaths5m' => $mening_crypto_deaths5m,
          'mening_crypto_deaths5f' => $mening_crypto_deaths5f,
          'mening_crypto_deaths19m' => $mening_crypto_deaths19m,
          'mening_crypto_deaths19f' => $mening_crypto_deaths19f,

          'skin_hos5m' => $skin_hos5m,
          'skin_hos5f' => $skin_hos5f,
          'skin_hos19m' => $skin_hos19m,
          'skin_hos19f' => $skin_hos19f,
          'skin_deaths5m' => $skin_deaths5m,
          'skin_deaths5f' => $skin_deaths5f,
          'skin_deaths19m' => $skin_deaths19m,
          'skin_deaths19f' => $skin_deaths19f,

          'diarr_chronic_hos5m' => $diarr_chronic_hos5m,
          'diarr_chronic_hos5f' => $diarr_chronic_hos5f,
          'diarr_chronic_hos19m' => $diarr_chronic_hos19m,
          'diarr_chronic_hos19f' => $diarr_chronic_hos19f,
          'diarr_chronic_deaths5m' => $diarr_chronic_deaths5m,
          'diarr_chronic_deaths5f' => $diarr_chronic_deaths5f,
          'diarr_chronic_deaths19m' => $diarr_chronic_deaths19m,
          'diarr_chronic_deaths19f' => $diarr_chronic_deaths19f,

          'hiv_hos5m' => $hiv_hos5m,
          'hiv_hos5f' => $hiv_hos5f,
          'hiv_hos19m' => $hiv_hos19m,
          'hiv_hos19f' => $hiv_hos19f,
          'hiv_deaths5m' => $hiv_deaths5m,
          'hiv_deaths5f' => $hiv_deaths5f,
          'hiv_deaths19m' => $hiv_deaths19m,
          'hiv_deaths19f' => $hiv_deaths19f,

          'trauma_hos5m' => $trauma_hos5m,
          'trauma_hos5f' => $trauma_hos5f,
          'trauma_hos19m' => $trauma_hos19m,
          'trauma_hos19f' => $trauma_hos19f,
          'trauma_deaths5m' => $trauma_deaths5m,
          'trauma_deaths5f' => $trauma_deaths5f,
          'trauma_deaths19m' => $trauma_deaths19m,
          'trauma_deaths19f' => $trauma_deaths19f,

          'spleen_hos5m' => $spleen_hos5m,
          'spleen_hos5f' => $spleen_hos5f,
          'spleen_hos19m' => $spleen_hos19m,
          'spleen_hos19f' => $spleen_hos19f,
          'spleen_deaths5m' => $spleen_deaths5m,
          'spleen_deaths5f' => $spleen_deaths5f,
          'spleen_deaths19m' => $spleen_deaths19m,
          'spleen_deaths19f' => $spleen_deaths19f,

          'frac_open_hos5m' => $frac_open_hos5m,
          'frac_open_hos5f' => $frac_open_hos5f,
          'frac_open_hos19m' => $frac_open_hos19m,
          'frac_open_hos19f' => $frac_open_hos19f,
          'frac_open_deaths5m' => $frac_open_deaths5m,
          'frac_open_deaths5f' => $frac_open_deaths5f,
          'frac_open_deaths19m' => $frac_open_deaths19m,
          'frac_open_deaths19f' => $frac_open_deaths19f,

          'frac_int_hos5m' => $frac_int_hos5m,
          'frac_int_hos5f' => $frac_int_hos5f,
          'frac_int_hos19m' => $frac_int_hos19m,
          'frac_int_hos19f' => $frac_int_hos19f,
          'frac_int_deaths5m' => $frac_int_deaths5m,
          'frac_int_deaths5f' => $frac_int_deaths5f,
          'frac_int_deaths19m' => $frac_int_deaths19m,
          'frac_int_deaths19f' => $frac_int_deaths19f,

          'trauma_other_hos5m' => $trauma_other_hos5m,
          'trauma_other_hos5f' => $trauma_other_hos5f,
          'trauma_other_hos19m' => $trauma_other_hos19m,
          'trauma_other_hos19f' => $trauma_other_hos19f,
          'trauma_other_deaths5m' => $trauma_other_deaths5m,
          'trauma_other_deaths5f' => $trauma_other_deaths5f,
          'trauma_other_deaths19m' => $trauma_other_deaths19m,
          'trauma_other_deaths19f' => $trauma_other_deaths19f,

          'burns_hos5m' => $burns_hos5m,
          'burns_hos5f' => $burns_hos5f,
          'burns_hos19m' => $burns_hos19m,
          'burns_hos19f' => $burns_hos19f,
          'burns_deaths5m' => $burns_deaths5m,
          'burns_deaths5f' => $burns_deaths5f,
          'burns_deaths19m' => $burns_deaths19m,
          'burns_deaths19f' => $burns_deaths19f,

          'hepatitis_hos5m' => $hepatitis_hos5m,
          'hepatitis_hos5f' => $hepatitis_hos5f,
          'hepatitis_hos19m' => $hepatitis_hos19m,
          'hepatitis_hos19f' => $hepatitis_hos19f,
          'hepatitis_deaths5m' => $hepatitis_deaths5m,
          'hepatitis_deaths5f' => $hepatitis_deaths5f,
          'hepatitis_deaths19m' => $hepatitis_deaths19m,
          'hepatitis_deaths19f' => $hepatitis_deaths19f,

          'cirrhosis_hos5m' => $cirrhosis_hos5m,
          'cirrhosis_hos5f' => $cirrhosis_hos5f,
          'cirrhosis_hos19m' => $cirrhosis_hos19m,
          'cirrhosis_hos19f' => $cirrhosis_hos19f,
          'cirrhosis_deaths5m' => $cirrhosis_deaths5m,
          'cirrhosis_deaths5f' => $cirrhosis_deaths5f,
          'cirrhosis_deaths19m' => $cirrhosis_deaths19m,
          'cirrhosis_deaths19f' => $cirrhosis_deaths19f,

          'digestive_hos5m' => $digestive_hos5m,
          'digestive_hos5f' => $digestive_hos5f,
          'digestive_hos19m' => $digestive_hos19m,
          'digestive_hos19f' => $digestive_hos19f,
          'digestive_deaths5m' => $digestive_deaths5m,
          'digestive_deaths5f' => $digestive_deaths5f,
          'digestive_deaths19m' => $digestive_deaths19m,
          'digestive_deaths19f' => $digestive_deaths19f,

          'gastritis_hos5m' => $gastritis_hos5m,
          'gastritis_hos5f' => $gastritis_hos5f,
          'gastritis_hos19m' => $gastritis_hos19m,
          'gastritis_hos19f' => $gastritis_hos19f,
          'gastritis_deaths5m' => $gastritis_deaths5m,
          'gastritis_deaths5f' => $gastritis_deaths5f,
          'gastritis_deaths19m' => $gastritis_deaths19m,
          'gastritis_deaths19f' => $gastritis_deaths19f,

          'ulcer_hos5m' => $ulcer_hos5m,
          'ulcer_hos5f' => $ulcer_hos5f,
          'ulcer_hos19m' => $ulcer_hos19m,
          'ulcer_hos19f' => $ulcer_hos19f,
          'ulcer_deaths5m' => $ulcer_deaths5m,
          'ulcer_deaths5f' => $ulcer_deaths5f,
          'ulcer_deaths19m' => $ulcer_deaths19m,
          'ulcer_deaths19f' => $ulcer_deaths19f,

          'appendi_hos5m' => $appendi_hos5m,
          'appendi_hos5f' => $appendi_hos5f,
          'appendi_hos19m' => $appendi_hos19m,
          'appendi_hos19f' => $appendi_hos19f,
          'appendi_deaths5m' => $appendi_deaths5m,
          'appendi_deaths5f' => $appendi_deaths5f,
          'appendi_deaths19m' => $appendi_deaths19m,
          'appendi_deaths19f' => $appendi_deaths19f,

          'hernia_hos5m' => $hernia_hos5m,
          'hernia_hos5f' => $hernia_hos5f,
          'hernia_hos19m' => $hernia_hos19m,
          'hernia_hos19f' => $hernia_hos19f,
          'hernia_deaths5m' => $hernia_deaths5m,
          'hernia_deaths5f' => $hernia_deaths5f,
          'hernia_deaths19m' => $hernia_deaths19m,
          'hernia_deaths19f' => $hernia_deaths19f,

          'peritonitis_hos5m' => $peritonitis_hos5m,
          'peritonitis_hos5f' => $peritonitis_hos5f,
          'peritonitis_hos19m' => $peritonitis_hos19m,
          'peritonitis_hos19f' => $peritonitis_hos19f,
          'peritonitis_deaths5m' => $peritonitis_deaths5m,
          'peritonitis_deaths5f' => $peritonitis_deaths5f,
          'peritonitis_deaths19m' => $peritonitis_deaths19m,
          'peritonitis_deaths19f' => $peritonitis_deaths19f,

          'intestinal_hos5m' => $intestinal_hos5m,
          'intestinal_hos5f' => $intestinal_hos5f,
          'intestinal_hos19m' => $intestinal_hos19m,
          'intestinal_hos19f' => $intestinal_hos19f,
          'intestinal_deaths5m' => $intestinal_deaths5m,
          'intestinal_deaths5f' => $intestinal_deaths5f,
          'intestinal_deaths19m' => $intestinal_deaths19m,
          'intestinal_deaths19f' => $intestinal_deaths19f,

          'urinary_hos5m' => $urinary_hos5m,
          'urinary_hos5f' => $urinary_hos5f,
          'urinary_hos19m' => $urinary_hos19m,
          'urinary_hos19f' => $urinary_hos19f,
          'urinary_deaths5m' => $urinary_deaths5m,
          'urinary_deaths5f' => $urinary_deaths5f,
          'urinary_deaths19m' => $urinary_deaths19m,
          'urinary_deaths19f' => $urinary_deaths19f,

          'bone_inf_hos5m' => $bone_inf_hos5m,
          'bone_inf_hos5f' => $bone_inf_hos5f,
          'bone_inf_hos19m' => $bone_inf_hos19m,
          'bone_inf_hos19f' => $bone_inf_hos19f,
          'bone_inf_deaths5m' => $bone_inf_deaths5m,
          'bone_inf_deaths5f' => $bone_inf_deaths5f,
          'bone_inf_deaths19m' => $bone_inf_deaths19m,
          'bone_inf_deaths19f' => $bone_inf_deaths19f,

          'bone_other_hos5m' => $bone_other_hos5m,
          'bone_other_hos5f' => $bone_other_hos5f,
          'bone_other_hos19m' => $bone_other_hos19m,
          'bone_other_hos19f' => $bone_other_hos19f,
          'bone_other_deaths5m' => $bone_other_deaths5m,
          'bone_other_deaths5f' => $bone_other_deaths5f,
          'bone_other_deaths19m' => $bone_other_deaths19m,
          'bone_other_deaths19f' => $bone_other_deaths19f,

          'acute_hos5m' => $acute_hos5m,
          'acute_hos5f' => $acute_hos5f,
          'acute_hos19m' => $acute_hos19m,
          'acute_hos19f' => $acute_hos19f,
          'acute_deaths5m' => $acute_deaths5m,
          'acute_deaths5f' => $acute_deaths5f,
          'acute_deaths19m' => $acute_deaths19m,
          'acute_deaths19f' => $acute_deaths19f,

          'gyneco_hos19f' => $gyneco_hos19f,
          'gyneco_deaths19f' => $gyneco_deaths19f,

          'mastoditis_hos5m' => $mastoditis_hos5m,
          'mastoditis_hos5f' => $mastoditis_hos5f,
          'mastoditis_hos19m' => $mastoditis_hos19m,
          'mastoditis_hos19f' => $mastoditis_hos19f,
          'mastoditis_deaths5m' => $mastoditis_deaths5m,
          'mastoditis_deaths5f' => $mastoditis_deaths5f,
          'mastoditis_deaths19m' => $mastoditis_deaths19m,
          'mastoditis_deaths19f' => $mastoditis_deaths19f,

          'tetanus_hos5m' => $tetanus_hos5m,
          'tetanus_hos5f' => $tetanus_hos5f,
          'tetanus_hos19m' => $tetanus_hos19m,
          'tetanus_hos19f' => $tetanus_hos19f,
          'tetanus_deaths5m' => $tetanus_deaths5m,
          'tetanus_deaths5f' => $tetanus_deaths5f,
          'tetanus_deaths19m' => $tetanus_deaths19m,
          'tetanus_deaths19f' => $tetanus_deaths19f,

          'cancer_hos5m' => $cancer_hos5m,
          'cancer_hos5f' => $cancer_hos5f,
          'cancer_hos19m' => $cancer_hos19m,
          'cancer_hos19f' => $cancer_hos19f,
          'cancer_deaths5m' => $cancer_deaths5m,
          'cancer_deaths5f' => $cancer_deaths5f,
          'cancer_deaths19m' => $cancer_deaths19m,
          'cancer_deaths19f' => $cancer_deaths19f,

      'num_rapport' => $num_rapport,
      'num_user' => $this->session->userdata('num_user')
    ))
            ->set('date_hospitalization_bcde', $this->session->userdata('add_date'))
            ->insert('Hospitalization_bcde');
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
      $p_beds,
      $p_present_start,
      $p_admissions,
      $p_referred,
      $p_no_referred,
      $p_discharges,
      $p_authorized,
      $p_abandoned,
      $p_deaths,
      $p_dis_referred,
      $p_counter,
      $p_present_end,
      $p_total,
      $p_actual
    ) {
        $this->db->set('p_beds', $p_beds);
        $this->db->set('p_present_start', $p_present_start);
        $this->db->set('p_admissions', $p_admissions);
        $this->db->set('p_referred', $p_referred);
        $this->db->set('p_no_referred', $p_no_referred);
        $this->db->set('p_discharges', $p_discharges);
        $this->db->set('p_authorized', $p_authorized);
        $this->db->set('p_abandoned', $p_abandoned);
        $this->db->set('p_deaths', $p_deaths);
        $this->db->set('p_dis_referred', $p_dis_referred);
        $this->db->set('p_counter', $p_counter);
        $this->db->set('p_present_end', $p_present_end);
        $this->db->set('p_total', $p_total);
        $this->db->set('p_actual', $p_actual);

        $this->db->where('date_hospitalization_a', $this->session->userdata('update_date'));
        return $this->db->update('Hospitalization_a');
    }

    public function update_data2(
      $hosp_1m,
      $hosp_1f,
      $hosp_4m,
      $hosp_4f,
      $hosp_19m,
      $hosp_19f,

      $deaths_1m,
      $deaths_1f,
      $deaths_4m,
      $deaths_4f,
      $deaths_19m,
      $deaths_19f,

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

      $malaria_sev_hos5m,
      $malaria_sev_hos5f,
      $malaria_sev_hos19m,
      $malaria_sev_hos19f,
      $malaria_sev_deaths5m,
      $malaria_sev_deaths5f,
      $malaria_sev_deaths19m,
      $malaria_sev_deaths19f,

      $borreliosis_hos5m,
      $borreliosis_hos5f,
      $borreliosis_hos19m,
      $borreliosis_hos19f,
      $borreliosis_deaths5m,
      $borreliosis_deaths5f,
      $borreliosis_deaths19m,
      $borreliosis_deaths19f,

      $pneumonia_sim_hos5m,
      $pneumonia_sim_hos5f,
      $pneumonia_sim_hos19m,
      $pneumonia_sim_hos19f,
      $pneumonia_sim_deaths5m,
      $pneumonia_sim_deaths5f,
      $pneumonia_sim_deaths19m,
      $pneumonia_sim_deaths19f,

      $pneumonia_sev_hos5m,
      $pneumonia_sev_hos5f,
      $pneumonia_sev_hos19m,
      $pneumonia_sev_hos19f,
      $pneumonia_sev_deaths5m,
      $pneumonia_sev_deaths5f,
      $pneumonia_sev_deaths19m,
      $pneumonia_sev_deaths19f,

      $pleurisy_hos5m,
      $pleurisy_hos5f,
      $pleurisy_hos19m,
      $pleurisy_hos19f,
      $pleurisy_deaths5m,
      $pleurisy_deaths5f,
      $pleurisy_deaths19m,
      $pleurisy_deaths19f,

      $ari_hos5m,
      $ari_hos5f,
      $ari_hos19m,
      $ari_hos19f,
      $ari_deaths5m,
      $ari_deaths5f,
      $ari_deaths19m,
      $ari_deaths19f,

      $diarr_bloody_hos5m,
      $diarr_bloody_hos5f,
      $diarr_bloody_hos19m,
      $diarr_bloody_hos19f,
      $diarr_bloody_deaths5m,
      $diarr_bloody_deaths5f,
      $diarr_bloody_deaths19m,
      $diarr_bloody_deaths19f,

      $diarr_dehy_hos5m,
      $diarr_dehy_hos5f,
      $diarr_dehy_hos19m,
      $diarr_dehy_hos19f,
      $diarr_dehy_deaths5m,
      $diarr_dehy_deaths5f,
      $diarr_dehy_deaths19m,
      $diarr_dehy_deaths19f,

      $diarr_no_dehy_hos5m,
      $diarr_no_dehy_hos5f,
      $diarr_no_dehy_hos19m,
      $diarr_no_dehy_hos19f,
      $diarr_no_dehy_deaths5m,
      $diarr_no_dehy_deaths5f,
      $diarr_no_dehy_deaths19m,
      $diarr_no_dehy_deaths19f,

      $cholera_hos5m,
      $cholera_hos5f,
      $cholera_hos19m,
      $cholera_hos19f,
      $cholera_deaths5m,
      $cholera_deaths5f,
      $cholera_deaths19m,
      $cholera_deaths19f,

      $typhoid_hos5m,
      $typhoid_hos5f,
      $typhoid_hos19m,
      $typhoid_hos19f,
      $typhoid_deaths5m,
      $typhoid_deaths5f,
      $typhoid_deaths19m,
      $typhoid_deaths19f,

      $meningitis_hos5m,
      $meningitis_hos5f,
      $meningitis_hos19m,
      $meningitis_hos19f,
      $meningitis_deaths5m,
      $meningitis_deaths5f,
      $meningitis_deaths19m,
      $meningitis_deaths19f,

      $measles_hos5m,
      $measles_hos5f,
      $measles_hos19m,
      $measles_hos19f,
      $measles_deaths5m,
      $measles_deaths5f,
      $measles_deaths19m,
      $measles_deaths19f,

      $tb_conf_hos5m,
      $tb_conf_hos5f,
      $tb_conf_hos19m,
      $tb_conf_hos19f,
      $tb_conf_deaths5m,
      $tb_conf_deaths5f,
      $tb_conf_deaths19m,
      $tb_conf_deaths19f,

      $tb_diag_hos5m,
      $tb_diag_hos5f,
      $tb_diag_hos19m,
      $tb_diag_hos19f,
      $tb_diag_deaths5m,
      $tb_diag_deaths5f,
      $tb_diag_deaths19m,
      $tb_diag_deaths19f,

      $fever_hos5m,
      $fever_hos5f,
      $fever_hos19m,
      $fever_hos19f,
      $fever_deaths5m,
      $fever_deaths5f,
      $fever_deaths19m,
      $fever_deaths19f,

      $encephalitis_hos5m,
      $encephalitis_hos5f,
      $encephalitis_hos19m,
      $encephalitis_hos19f,
      $encephalitis_deaths5m,
      $encephalitis_deaths5f,
      $encephalitis_deaths19m,
      $encephalitis_deaths19f,

      $mening_crypto_hos5m,
      $mening_crypto_hos5f,
      $mening_crypto_hos19m,
      $mening_crypto_hos19f,
      $mening_crypto_deaths5m,
      $mening_crypto_deaths5f,
      $mening_crypto_deaths19m,
      $mening_crypto_deaths19f,

      $skin_hos5m,
      $skin_hos5f,
      $skin_hos19m,
      $skin_hos19f,
      $skin_deaths5m,
      $skin_deaths5f,
      $skin_deaths19m,
      $skin_deaths19f,

      $diarr_chronic_hos5m,
      $diarr_chronic_hos5f,
      $diarr_chronic_hos19m,
      $diarr_chronic_hos19f,
      $diarr_chronic_deaths5m,
      $diarr_chronic_deaths5f,
      $diarr_chronic_deaths19m,
      $diarr_chronic_deaths19f,

      $hiv_hos5m,
      $hiv_hos5f,
      $hiv_hos19m,
      $hiv_hos19f,
      $hiv_deaths5m,
      $hiv_deaths5f,
      $hiv_deaths19m,
      $hiv_deaths19f,

      $trauma_hos5m,
      $trauma_hos5f,
      $trauma_hos19m,
      $trauma_hos19f,
      $trauma_deaths5m,
      $trauma_deaths5f,
      $trauma_deaths19m,
      $trauma_deaths19f,

      $spleen_hos5m,
      $spleen_hos5f,
      $spleen_hos19m,
      $spleen_hos19f,
      $spleen_deaths5m,
      $spleen_deaths5f,
      $spleen_deaths19m,
      $spleen_deaths19f,

      $frac_open_hos5m,
      $frac_open_hos5f,
      $frac_open_hos19m,
      $frac_open_hos19f,
      $frac_open_deaths5m,
      $frac_open_deaths5f,
      $frac_open_deaths19m,
      $frac_open_deaths19f,

      $frac_int_hos5m,
      $frac_int_hos5f,
      $frac_int_hos19m,
      $frac_int_hos19f,
      $frac_int_deaths5m,
      $frac_int_deaths5f,
      $frac_int_deaths19m,
      $frac_int_deaths19f,

      $trauma_other_hos5m,
      $trauma_other_hos5f,
      $trauma_other_hos19m,
      $trauma_other_hos19f,
      $trauma_other_deaths5m,
      $trauma_other_deaths5f,
      $trauma_other_deaths19m,
      $trauma_other_deaths19f,

      $burns_hos5m,
      $burns_hos5f,
      $burns_hos19m,
      $burns_hos19f,
      $burns_deaths5m,
      $burns_deaths5f,
      $burns_deaths19m,
      $burns_deaths19f,

      $hepatitis_hos5m,
      $hepatitis_hos5f,
      $hepatitis_hos19m,
      $hepatitis_hos19f,
      $hepatitis_deaths5m,
      $hepatitis_deaths5f,
      $hepatitis_deaths19m,
      $hepatitis_deaths19f,

      $cirrhosis_hos5m,
      $cirrhosis_hos5f,
      $cirrhosis_hos19m,
      $cirrhosis_hos19f,
      $cirrhosis_deaths5m,
      $cirrhosis_deaths5f,
      $cirrhosis_deaths19m,
      $cirrhosis_deaths19f,

      $digestive_hos5m,
      $digestive_hos5f,
      $digestive_hos19m,
      $digestive_hos19f,
      $digestive_deaths5m,
      $digestive_deaths5f,
      $digestive_deaths19m,
      $digestive_deaths19f,

      $gastritis_hos5m,
      $gastritis_hos5f,
      $gastritis_hos19m,
      $gastritis_hos19f,
      $gastritis_deaths5m,
      $gastritis_deaths5f,
      $gastritis_deaths19m,
      $gastritis_deaths19f,

      $ulcer_hos5m,
      $ulcer_hos5f,
      $ulcer_hos19m,
      $ulcer_hos19f,
      $ulcer_deaths5m,
      $ulcer_deaths5f,
      $ulcer_deaths19m,
      $ulcer_deaths19f,

      $appendi_hos5m,
      $appendi_hos5f,
      $appendi_hos19m,
      $appendi_hos19f,
      $appendi_deaths5m,
      $appendi_deaths5f,
      $appendi_deaths19m,
      $appendi_deaths19f,

      $hernia_hos5m,
      $hernia_hos5f,
      $hernia_hos19m,
      $hernia_hos19f,
      $hernia_deaths5m,
      $hernia_deaths5f,
      $hernia_deaths19m,
      $hernia_deaths19f,

      $peritonitis_hos5m,
      $peritonitis_hos5f,
      $peritonitis_hos19m,
      $peritonitis_hos19f,
      $peritonitis_deaths5m,
      $peritonitis_deaths5f,
      $peritonitis_deaths19m,
      $peritonitis_deaths19f,

      $intestinal_hos5m,
      $intestinal_hos5f,
      $intestinal_hos19m,
      $intestinal_hos19f,
      $intestinal_deaths5m,
      $intestinal_deaths5f,
      $intestinal_deaths19m,
      $intestinal_deaths19f,

      $urinary_hos5m,
      $urinary_hos5f,
      $urinary_hos19m,
      $urinary_hos19f,
      $urinary_deaths5m,
      $urinary_deaths5f,
      $urinary_deaths19m,
      $urinary_deaths19f,

      $bone_inf_hos5m,
      $bone_inf_hos5f,
      $bone_inf_hos19m,
      $bone_inf_hos19f,
      $bone_inf_deaths5m,
      $bone_inf_deaths5f,
      $bone_inf_deaths19m,
      $bone_inf_deaths19f,

      $bone_other_hos5m,
      $bone_other_hos5f,
      $bone_other_hos19m,
      $bone_other_hos19f,
      $bone_other_deaths5m,
      $bone_other_deaths5f,
      $bone_other_deaths19m,
      $bone_other_deaths19f,

      $acute_hos5m,
      $acute_hos5f,
      $acute_hos19m,
      $acute_hos19f,
      $acute_deaths5m,
      $acute_deaths5f,
      $acute_deaths19m,
      $acute_deaths19f,

      $gyneco_hos19f,
      $gyneco_deaths19f,

      $mastoditis_hos5m,
      $mastoditis_hos5f,
      $mastoditis_hos19m,
      $mastoditis_hos19f,
      $mastoditis_deaths5m,
      $mastoditis_deaths5f,
      $mastoditis_deaths19m,
      $mastoditis_deaths19f,

      $tetanus_hos5m,
      $tetanus_hos5f,
      $tetanus_hos19m,
      $tetanus_hos19f,
      $tetanus_deaths5m,
      $tetanus_deaths5f,
      $tetanus_deaths19m,
      $tetanus_deaths19f,

      $cancer_hos5m,
      $cancer_hos5f,
      $cancer_hos19m,
      $cancer_hos19f,
      $cancer_deaths5m,
      $cancer_deaths5f,
      $cancer_deaths19m,
      $cancer_deaths19f
    ) {
        $this->db->set('hosp_1m', $hosp_1m);
        $this->db->set('hosp_1f', $hosp_1f);
        $this->db->set('hosp_4m', $hosp_4m);
        $this->db->set('hosp_4f', $hosp_4f);
        $this->db->set('hosp_19m', $hosp_19m);
        $this->db->set('hosp_19f', $hosp_19f);

        $this->db->set('deaths_1m', $deaths_1m);
        $this->db->set('deaths_1f', $deaths_1f);
        $this->db->set('deaths_4m', $deaths_4m);
        $this->db->set('deaths_4f', $deaths_4f);
        $this->db->set('deaths_19m', $deaths_19m);
        $this->db->set('deaths_19f', $deaths_19f);

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

        $this->db->set('malaria_sev_hos5m', $malaria_sev_hos5m);
        $this->db->set('malaria_sev_hos5f', $malaria_sev_hos5f);
        $this->db->set('malaria_sev_hos19m', $malaria_sev_hos19m);
        $this->db->set('malaria_sev_hos19f', $malaria_sev_hos19f);
        $this->db->set('malaria_sev_deaths5m', $malaria_sev_deaths5m);
        $this->db->set('malaria_sev_deaths5f', $malaria_sev_deaths5f);
        $this->db->set('malaria_sev_deaths19m', $malaria_sev_deaths19m);
        $this->db->set('malaria_sev_deaths19f', $malaria_sev_deaths19f);

        $this->db->set('borreliosis_hos5m', $borreliosis_hos5m);
        $this->db->set('borreliosis_hos5f', $borreliosis_hos5f);
        $this->db->set('borreliosis_hos19m', $borreliosis_hos19m);
        $this->db->set('borreliosis_hos19f', $borreliosis_hos19f);
        $this->db->set('borreliosis_deaths5m', $borreliosis_deaths5m);
        $this->db->set('borreliosis_deaths5f', $borreliosis_deaths5f);
        $this->db->set('borreliosis_deaths19m', $borreliosis_deaths19m);
        $this->db->set('borreliosis_deaths19f', $borreliosis_deaths19f);

        $this->db->set('pneumonia_sim_hos5m', $pneumonia_sim_hos5m);
        $this->db->set('pneumonia_sim_hos5f', $pneumonia_sim_hos5f);
        $this->db->set('pneumonia_sim_hos19m', $pneumonia_sim_hos19m);
        $this->db->set('pneumonia_sim_hos19f', $pneumonia_sim_hos19f);
        $this->db->set('pneumonia_sim_deaths5m', $pneumonia_sim_deaths5m);
        $this->db->set('pneumonia_sim_deaths5f', $pneumonia_sim_deaths5f);
        $this->db->set('pneumonia_sim_deaths19m', $pneumonia_sim_deaths19m);
        $this->db->set('pneumonia_sim_deaths19f', $pneumonia_sim_deaths19f);

        $this->db->set('pneumonia_sev_hos5m', $pneumonia_sev_hos5m);
        $this->db->set('pneumonia_sev_hos5f', $pneumonia_sev_hos5f);
        $this->db->set('pneumonia_sev_hos19m', $pneumonia_sev_hos19m);
        $this->db->set('pneumonia_sev_hos19f', $pneumonia_sev_hos19f);
        $this->db->set('pneumonia_sev_deaths5m', $pneumonia_sev_deaths5m);
        $this->db->set('pneumonia_sev_deaths5f', $pneumonia_sev_deaths5f);
        $this->db->set('pneumonia_sev_deaths19m', $pneumonia_sev_deaths19m);
        $this->db->set('pneumonia_sev_deaths19f', $pneumonia_sev_deaths19f);

        $this->db->set('pleurisy_hos5m', $pleurisy_hos5m);
        $this->db->set('pleurisy_hos5f', $pleurisy_hos5f);
        $this->db->set('pleurisy_hos19m', $pleurisy_hos19m);
        $this->db->set('pleurisy_hos19f', $pleurisy_hos19f);
        $this->db->set('pleurisy_deaths5m', $pleurisy_deaths5m);
        $this->db->set('pleurisy_deaths5f', $pleurisy_deaths5f);
        $this->db->set('pleurisy_deaths19m', $pleurisy_deaths19m);
        $this->db->set('pleurisy_deaths19f', $pleurisy_deaths19f);

        $this->db->set('ari_hos5m', $ari_hos5m);
        $this->db->set('ari_hos5f', $ari_hos5f);
        $this->db->set('ari_hos19m', $ari_hos19m);
        $this->db->set('ari_hos19f', $ari_hos19f);
        $this->db->set('ari_deaths5m', $ari_deaths5m);
        $this->db->set('ari_deaths5f', $ari_deaths5f);
        $this->db->set('ari_deaths19m', $ari_deaths19m);
        $this->db->set('ari_deaths19f', $ari_deaths19f);

        $this->db->set('diarr_bloody_hos5m', $diarr_bloody_hos5m);
        $this->db->set('diarr_bloody_hos5f', $diarr_bloody_hos5f);
        $this->db->set('diarr_bloody_hos19m', $diarr_bloody_hos19m);
        $this->db->set('diarr_bloody_hos19f', $diarr_bloody_hos19f);
        $this->db->set('diarr_bloody_deaths5m', $diarr_bloody_deaths5m);
        $this->db->set('diarr_bloody_deaths5f', $diarr_bloody_deaths5f);
        $this->db->set('diarr_bloody_deaths19m', $diarr_bloody_deaths19m);
        $this->db->set('diarr_bloody_deaths19f', $diarr_bloody_deaths19f);

        $this->db->set('diarr_dehy_hos5m', $diarr_dehy_hos5m);
        $this->db->set('diarr_dehy_hos5f', $diarr_dehy_hos5f);
        $this->db->set('diarr_dehy_hos19m', $diarr_dehy_hos19m);
        $this->db->set('diarr_dehy_hos19f', $diarr_dehy_hos19f);
        $this->db->set('diarr_dehy_deaths5m', $diarr_dehy_deaths5m);
        $this->db->set('diarr_dehy_deaths5f', $diarr_dehy_deaths5f);
        $this->db->set('diarr_dehy_deaths19m', $diarr_dehy_deaths19m);
        $this->db->set('diarr_dehy_deaths19f', $diarr_dehy_deaths19f);

        $this->db->set('diarr_no_dehy_hos5m', $diarr_no_dehy_hos5m);
        $this->db->set('diarr_no_dehy_hos5f', $diarr_no_dehy_hos5f);
        $this->db->set('diarr_no_dehy_hos19m', $diarr_no_dehy_hos19m);
        $this->db->set('diarr_no_dehy_hos19f', $diarr_no_dehy_hos19f);
        $this->db->set('diarr_no_dehy_deaths5m', $diarr_no_dehy_deaths5m);
        $this->db->set('diarr_no_dehy_deaths5f', $diarr_no_dehy_deaths5f);
        $this->db->set('diarr_no_dehy_deaths19m', $diarr_no_dehy_deaths19m);
        $this->db->set('diarr_no_dehy_deaths19f', $diarr_no_dehy_deaths19f);

        $this->db->set('cholera_hos5m', $cholera_hos5m);
        $this->db->set('cholera_hos5f', $cholera_hos5f);
        $this->db->set('cholera_hos19m', $cholera_hos19m);
        $this->db->set('cholera_hos19f', $cholera_hos19f);
        $this->db->set('cholera_deaths5m', $cholera_deaths5m);
        $this->db->set('cholera_deaths5f', $cholera_deaths5f);
        $this->db->set('cholera_deaths19m', $cholera_deaths19m);
        $this->db->set('cholera_deaths19f', $cholera_deaths19f);

        $this->db->set('typhoid_hos5m', $typhoid_hos5m);
        $this->db->set('typhoid_hos5f', $typhoid_hos5f);
        $this->db->set('typhoid_hos19m', $typhoid_hos19m);
        $this->db->set('typhoid_hos19f', $typhoid_hos19f);
        $this->db->set('typhoid_deaths5m', $typhoid_deaths5m);
        $this->db->set('typhoid_deaths5f', $typhoid_deaths5f);
        $this->db->set('typhoid_deaths19m', $typhoid_deaths19m);
        $this->db->set('typhoid_deaths19f', $typhoid_deaths19f);

        $this->db->set('meningitis_hos5m', $meningitis_hos5m);
        $this->db->set('meningitis_hos5f', $meningitis_hos5f);
        $this->db->set('meningitis_hos19m', $meningitis_hos19m);
        $this->db->set('meningitis_hos19f', $meningitis_hos19f);
        $this->db->set('meningitis_deaths5m', $meningitis_deaths5m);
        $this->db->set('meningitis_deaths5f', $meningitis_deaths5f);
        $this->db->set('meningitis_deaths19m', $meningitis_deaths19m);
        $this->db->set('meningitis_deaths19f', $meningitis_deaths19f);

        $this->db->set('measles_hos5m', $measles_hos5m);
        $this->db->set('measles_hos5f', $measles_hos5f);
        $this->db->set('measles_hos19m', $measles_hos19m);
        $this->db->set('measles_hos19f', $measles_hos19f);
        $this->db->set('measles_deaths5m', $measles_deaths5m);
        $this->db->set('measles_deaths5f', $measles_deaths5f);
        $this->db->set('measles_deaths19m', $measles_deaths19m);
        $this->db->set('measles_deaths19f', $measles_deaths19f);

        $this->db->set('tb_conf_hos5m', $tb_conf_hos5m);
        $this->db->set('tb_conf_hos5f', $tb_conf_hos5f);
        $this->db->set('tb_conf_hos19m', $tb_conf_hos19m);
        $this->db->set('tb_conf_hos19f', $tb_conf_hos19f);
        $this->db->set('tb_conf_deaths5m', $tb_conf_deaths5m);
        $this->db->set('tb_conf_deaths5f', $tb_conf_deaths5f);
        $this->db->set('tb_conf_deaths19m', $tb_conf_deaths19m);
        $this->db->set('tb_conf_deaths19f', $tb_conf_deaths19f);

        $this->db->set('tb_diag_hos5m', $tb_diag_hos5m);
        $this->db->set('tb_diag_hos5f', $tb_diag_hos5f);
        $this->db->set('tb_diag_hos19m', $tb_diag_hos19m);
        $this->db->set('tb_diag_hos19f', $tb_diag_hos19f);
        $this->db->set('tb_diag_deaths5m', $tb_diag_deaths5m);
        $this->db->set('tb_diag_deaths5f', $tb_diag_deaths5f);
        $this->db->set('tb_diag_deaths19m', $tb_diag_deaths19m);
        $this->db->set('tb_diag_deaths19f', $tb_diag_deaths19f);

        $this->db->set('fever_hos5m', $fever_hos5m);
        $this->db->set('fever_hos5f', $fever_hos5f);
        $this->db->set('fever_hos19m', $fever_hos19m);
        $this->db->set('fever_hos19f', $fever_hos19f);
        $this->db->set('fever_deaths5m', $fever_deaths5m);
        $this->db->set('fever_deaths5f', $fever_deaths5f);
        $this->db->set('fever_deaths19m', $fever_deaths19m);
        $this->db->set('fever_deaths19f', $fever_deaths19f);

        $this->db->set('encephalitis_hos5m', $encephalitis_hos5m);
        $this->db->set('encephalitis_hos5f', $encephalitis_hos5f);
        $this->db->set('encephalitis_hos19m', $encephalitis_hos19m);
        $this->db->set('encephalitis_hos19f', $encephalitis_hos19f);
        $this->db->set('encephalitis_deaths5m', $encephalitis_deaths5m);
        $this->db->set('encephalitis_deaths5f', $encephalitis_deaths5f);
        $this->db->set('encephalitis_deaths19m', $encephalitis_deaths19m);
        $this->db->set('encephalitis_deaths19f', $encephalitis_deaths19f);

        $this->db->set('mening_crypto_hos5m', $mening_crypto_hos5m);
        $this->db->set('mening_crypto_hos5f', $mening_crypto_hos5f);
        $this->db->set('mening_crypto_hos19m', $mening_crypto_hos19m);
        $this->db->set('mening_crypto_hos19f', $mening_crypto_hos19f);
        $this->db->set('mening_crypto_deaths5m', $mening_crypto_deaths5m);
        $this->db->set('mening_crypto_deaths5f', $mening_crypto_deaths5f);
        $this->db->set('mening_crypto_deaths19m', $mening_crypto_deaths19m);
        $this->db->set('mening_crypto_deaths19f', $mening_crypto_deaths19f);

        $this->db->set('skin_hos5m', $skin_hos5m);
        $this->db->set('skin_hos5f', $skin_hos5f);
        $this->db->set('skin_hos19m', $skin_hos19m);
        $this->db->set('skin_hos19f', $skin_hos19f);
        $this->db->set('skin_deaths5m', $skin_deaths5m);
        $this->db->set('skin_deaths5f', $skin_deaths5f);
        $this->db->set('skin_deaths19m', $skin_deaths19m);
        $this->db->set('skin_deaths19f', $skin_deaths19f);

        $this->db->set('diarr_chronic_hos5m', $diarr_chronic_hos5m);
        $this->db->set('diarr_chronic_hos5f', $diarr_chronic_hos5f);
        $this->db->set('diarr_chronic_hos19m', $diarr_chronic_hos19m);
        $this->db->set('diarr_chronic_hos19f', $diarr_chronic_hos19f);
        $this->db->set('diarr_chronic_deaths5m', $diarr_chronic_deaths5m);
        $this->db->set('diarr_chronic_deaths5f', $diarr_chronic_deaths5f);
        $this->db->set('diarr_chronic_deaths19m', $diarr_chronic_deaths19m);
        $this->db->set('diarr_chronic_deaths19f', $diarr_chronic_deaths19f);

        $this->db->set('hiv_hos5m', $hiv_hos5m);
        $this->db->set('hiv_hos5f', $hiv_hos5f);
        $this->db->set('hiv_hos19m', $hiv_hos19m);
        $this->db->set('hiv_hos19f', $hiv_hos19f);
        $this->db->set('hiv_deaths5m', $hiv_deaths5m);
        $this->db->set('hiv_deaths5f', $hiv_deaths5f);
        $this->db->set('hiv_deaths19m', $hiv_deaths19m);
        $this->db->set('hiv_deaths19f', $hiv_deaths19f);

        $this->db->set('trauma_hos5m', $trauma_hos5m);
        $this->db->set('trauma_hos5f', $trauma_hos5f);
        $this->db->set('trauma_hos19m', $trauma_hos19m);
        $this->db->set('trauma_hos19f', $trauma_hos19f);
        $this->db->set('trauma_deaths5m', $trauma_deaths5m);
        $this->db->set('trauma_deaths5f', $trauma_deaths5f);
        $this->db->set('trauma_deaths19m', $trauma_deaths19m);
        $this->db->set('trauma_deaths19f', $trauma_deaths19f);

        $this->db->set('spleen_hos5m', $spleen_hos5m);
        $this->db->set('spleen_hos5f', $spleen_hos5f);
        $this->db->set('spleen_hos19m', $spleen_hos19m);
        $this->db->set('spleen_hos19f', $spleen_hos19f);
        $this->db->set('spleen_deaths5m', $spleen_deaths5m);
        $this->db->set('spleen_deaths5f', $spleen_deaths5f);
        $this->db->set('spleen_deaths19m', $spleen_deaths19m);
        $this->db->set('spleen_deaths19f', $spleen_deaths19f);

        $this->db->set('frac_open_hos5m', $frac_open_hos5m);
        $this->db->set('frac_open_hos5f', $frac_open_hos5f);
        $this->db->set('frac_open_hos19m', $frac_open_hos19m);
        $this->db->set('frac_open_hos19f', $frac_open_hos19f);
        $this->db->set('frac_open_deaths5m', $frac_open_deaths5m);
        $this->db->set('frac_open_deaths5f', $frac_open_deaths5f);
        $this->db->set('frac_open_deaths19m', $frac_open_deaths19m);
        $this->db->set('frac_open_deaths19f', $frac_open_deaths19f);

        $this->db->set('frac_int_hos5m', $frac_int_hos5m);
        $this->db->set('frac_int_hos5f', $frac_int_hos5f);
        $this->db->set('frac_int_hos19m', $frac_int_hos19m);
        $this->db->set('frac_int_hos19f', $frac_int_hos19f);
        $this->db->set('frac_int_deaths5m', $frac_int_deaths5m);
        $this->db->set('frac_int_deaths5f', $frac_int_deaths5f);
        $this->db->set('frac_int_deaths19m', $frac_int_deaths19m);
        $this->db->set('frac_int_deaths19f', $frac_int_deaths19f);

        $this->db->set('trauma_other_hos5m', $trauma_other_hos5m);
        $this->db->set('trauma_other_hos5f', $trauma_other_hos5f);
        $this->db->set('trauma_other_hos19m', $trauma_other_hos19m);
        $this->db->set('trauma_other_hos19f', $trauma_other_hos19f);
        $this->db->set('trauma_other_deaths5m', $trauma_other_deaths5m);
        $this->db->set('trauma_other_deaths5f', $trauma_other_deaths5f);
        $this->db->set('trauma_other_deaths19m', $trauma_other_deaths19m);
        $this->db->set('trauma_other_deaths19f', $trauma_other_deaths19f);

        $this->db->set('burns_hos5m', $burns_hos5m);
        $this->db->set('burns_hos5f', $burns_hos5f);
        $this->db->set('burns_hos19m', $burns_hos19m);
        $this->db->set('burns_hos19f', $burns_hos19f);
        $this->db->set('burns_deaths5m', $burns_deaths5m);
        $this->db->set('burns_deaths5f', $burns_deaths5f);
        $this->db->set('burns_deaths19m', $burns_deaths19m);
        $this->db->set('burns_deaths19f', $burns_deaths19f);

        $this->db->set('hepatitis_hos5m', $hepatitis_hos5m);
        $this->db->set('hepatitis_hos5f', $hepatitis_hos5f);
        $this->db->set('hepatitis_hos19m', $hepatitis_hos19m);
        $this->db->set('hepatitis_hos19f', $hepatitis_hos19f);
        $this->db->set('hepatitis_deaths5m', $hepatitis_deaths5m);
        $this->db->set('hepatitis_deaths5f', $hepatitis_deaths5f);
        $this->db->set('hepatitis_deaths19m', $hepatitis_deaths19m);
        $this->db->set('hepatitis_deaths19f', $hepatitis_deaths19f);

        $this->db->set('cirrhosis_hos5m', $cirrhosis_hos5m);
        $this->db->set('cirrhosis_hos5f', $cirrhosis_hos5f);
        $this->db->set('cirrhosis_hos19m', $cirrhosis_hos19m);
        $this->db->set('cirrhosis_hos19f', $cirrhosis_hos19f);
        $this->db->set('cirrhosis_deaths5m', $cirrhosis_deaths5m);
        $this->db->set('cirrhosis_deaths5f', $cirrhosis_deaths5f);
        $this->db->set('cirrhosis_deaths19m', $cirrhosis_deaths19m);
        $this->db->set('cirrhosis_deaths19f', $cirrhosis_deaths19f);

        $this->db->set('digestive_hos5m', $digestive_hos5m);
        $this->db->set('digestive_hos5f', $digestive_hos5f);
        $this->db->set('digestive_hos19m', $digestive_hos19m);
        $this->db->set('digestive_hos19f', $digestive_hos19f);
        $this->db->set('digestive_deaths5m', $digestive_deaths5m);
        $this->db->set('digestive_deaths5f', $digestive_deaths5f);
        $this->db->set('digestive_deaths19m', $digestive_deaths19m);
        $this->db->set('digestive_deaths19f', $digestive_deaths19f);

        $this->db->set('gastritis_hos5m', $gastritis_hos5m);
        $this->db->set('gastritis_hos5f', $gastritis_hos5f);
        $this->db->set('gastritis_hos19m', $gastritis_hos19m);
        $this->db->set('gastritis_hos19f', $gastritis_hos19f);
        $this->db->set('gastritis_deaths5m', $gastritis_deaths5m);
        $this->db->set('gastritis_deaths5f', $gastritis_deaths5f);
        $this->db->set('gastritis_deaths19m', $gastritis_deaths19m);
        $this->db->set('gastritis_deaths19f', $gastritis_deaths19f);

        $this->db->set('ulcer_hos5m', $ulcer_hos5m);
        $this->db->set('ulcer_hos5f', $ulcer_hos5f);
        $this->db->set('ulcer_hos19m', $ulcer_hos19m);
        $this->db->set('ulcer_hos19f', $ulcer_hos19f);
        $this->db->set('ulcer_deaths5m', $ulcer_deaths5m);
        $this->db->set('ulcer_deaths5f', $ulcer_deaths5f);
        $this->db->set('ulcer_deaths19m', $ulcer_deaths19m);
        $this->db->set('ulcer_deaths19f', $ulcer_deaths19f);

        $this->db->set('appendi_hos5m', $appendi_hos5m);
        $this->db->set('appendi_hos5f', $appendi_hos5f);
        $this->db->set('appendi_hos19m', $appendi_hos19m);
        $this->db->set('appendi_hos19f', $appendi_hos19f);
        $this->db->set('appendi_deaths5m', $appendi_deaths5m);
        $this->db->set('appendi_deaths5f', $appendi_deaths5f);
        $this->db->set('appendi_deaths19m', $appendi_deaths19m);
        $this->db->set('appendi_deaths19f', $appendi_deaths19f);

        $this->db->set('hernia_hos5m', $hernia_hos5m);
        $this->db->set('hernia_hos5f', $hernia_hos5f);
        $this->db->set('hernia_hos19m', $hernia_hos19m);
        $this->db->set('hernia_hos19f', $hernia_hos19f);
        $this->db->set('hernia_deaths5m', $hernia_deaths5m);
        $this->db->set('hernia_deaths5f', $hernia_deaths5f);
        $this->db->set('hernia_deaths19m', $hernia_deaths19m);
        $this->db->set('hernia_deaths19f', $hernia_deaths19f);

        $this->db->set('peritonitis_hos5m', $peritonitis_hos5m);
        $this->db->set('peritonitis_hos5f', $peritonitis_hos5f);
        $this->db->set('peritonitis_hos19m', $peritonitis_hos19m);
        $this->db->set('peritonitis_hos19f', $peritonitis_hos19f);
        $this->db->set('peritonitis_deaths5m', $peritonitis_deaths5m);
        $this->db->set('peritonitis_deaths5f', $peritonitis_deaths5f);
        $this->db->set('peritonitis_deaths19m', $peritonitis_deaths19m);
        $this->db->set('peritonitis_deaths19f', $peritonitis_deaths19f);

        $this->db->set('intestinal_hos5m', $intestinal_hos5m);
        $this->db->set('intestinal_hos5f', $intestinal_hos5f);
        $this->db->set('intestinal_hos19m', $intestinal_hos19m);
        $this->db->set('intestinal_hos19f', $intestinal_hos19f);
        $this->db->set('intestinal_deaths5m', $intestinal_deaths5m);
        $this->db->set('intestinal_deaths5f', $intestinal_deaths5f);
        $this->db->set('intestinal_deaths19m', $intestinal_deaths19m);
        $this->db->set('intestinal_deaths19f', $intestinal_deaths19f);

        $this->db->set('urinary_hos5m', $urinary_hos5m);
        $this->db->set('urinary_hos5f', $urinary_hos5f);
        $this->db->set('urinary_hos19m', $urinary_hos19m);
        $this->db->set('urinary_hos19f', $urinary_hos19f);
        $this->db->set('urinary_deaths5m', $urinary_deaths5m);
        $this->db->set('urinary_deaths5f', $urinary_deaths5f);
        $this->db->set('urinary_deaths19m', $urinary_deaths19m);
        $this->db->set('urinary_deaths19f', $urinary_deaths19f);

        $this->db->set('bone_inf_hos5m', $bone_inf_hos5m);
        $this->db->set('bone_inf_hos5f', $bone_inf_hos5f);
        $this->db->set('bone_inf_hos19m', $bone_inf_hos19m);
        $this->db->set('bone_inf_hos19f', $bone_inf_hos19f);
        $this->db->set('bone_inf_deaths5m', $bone_inf_deaths5m);
        $this->db->set('bone_inf_deaths5f', $bone_inf_deaths5f);
        $this->db->set('bone_inf_deaths19m', $bone_inf_deaths19m);
        $this->db->set('bone_inf_deaths19f', $bone_inf_deaths19f);

        $this->db->set('bone_other_hos5m', $bone_other_hos5m);
        $this->db->set('bone_other_hos5f', $bone_other_hos5f);
        $this->db->set('bone_other_hos19m', $bone_other_hos19m);
        $this->db->set('bone_other_hos19f', $bone_other_hos19f);
        $this->db->set('bone_other_deaths5m', $bone_other_deaths5m);
        $this->db->set('bone_other_deaths5f', $bone_other_deaths5f);
        $this->db->set('bone_other_deaths19m', $bone_other_deaths19m);
        $this->db->set('bone_other_deaths19f', $bone_other_deaths19f);

        $this->db->set('acute_hos5m', $acute_hos5m);
        $this->db->set('acute_hos5f', $acute_hos5f);
        $this->db->set('acute_hos19m', $acute_hos19m);
        $this->db->set('acute_hos19f', $acute_hos19f);
        $this->db->set('acute_deaths5m', $acute_deaths5m);
        $this->db->set('acute_deaths5f', $acute_deaths5f);
        $this->db->set('acute_deaths19m', $acute_deaths19m);
        $this->db->set('acute_deaths19f', $acute_deaths19f);

        $this->db->set('gyneco_hos19f', $gyneco_hos19f);
        $this->db->set('gyneco_deaths19f', $gyneco_deaths19f);

        $this->db->set('mastoditis_hos5m', $mastoditis_hos5m);
        $this->db->set('mastoditis_hos5f', $mastoditis_hos5f);
        $this->db->set('mastoditis_hos19m', $mastoditis_hos19m);
        $this->db->set('mastoditis_hos19f', $mastoditis_hos19f);
        $this->db->set('mastoditis_deaths5m', $mastoditis_deaths5m);
        $this->db->set('mastoditis_deaths5f', $mastoditis_deaths5f);
        $this->db->set('mastoditis_deaths19m', $mastoditis_deaths19m);
        $this->db->set('mastoditis_deaths19f', $mastoditis_deaths19f);

        $this->db->set('tetanus_hos5m', $tetanus_hos5m);
        $this->db->set('tetanus_hos5f', $tetanus_hos5f);
        $this->db->set('tetanus_hos19m', $tetanus_hos19m);
        $this->db->set('tetanus_hos19f', $tetanus_hos19f);
        $this->db->set('tetanus_deaths5m', $tetanus_deaths5m);
        $this->db->set('tetanus_deaths5f', $tetanus_deaths5f);
        $this->db->set('tetanus_deaths19m', $tetanus_deaths19m);
        $this->db->set('tetanus_deaths19f', $tetanus_deaths19f);

        $this->db->set('cancer_hos5m', $cancer_hos5m);
        $this->db->set('cancer_hos5f', $cancer_hos5f);
        $this->db->set('cancer_hos19m', $cancer_hos19m);
        $this->db->set('cancer_hos19f', $cancer_hos19f);
        $this->db->set('cancer_deaths5m', $cancer_deaths5m);
        $this->db->set('cancer_deaths5f', $cancer_deaths5f);
        $this->db->set('cancer_deaths19m', $cancer_deaths19m);
        $this->db->set('cancer_deaths19f', $cancer_deaths19f);

        $this->db->where('date_hospitalization_bcde', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Hospitalization_bcde');
    }
}
