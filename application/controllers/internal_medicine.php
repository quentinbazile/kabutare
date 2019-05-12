<?php
defined('BASEPATH') or exit('No direct script access allowed');

class internal_medicine extends CI_Controller
{
    public function index()
    {
        $this->load->model('internal_medicine_model');
        if ($this->session->userdata('num_user') != '') {
            $this->fetch();
        } else {
            redirect('login', 'refresh');
        }
    }

    public function fetch()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('e_beds', '"e_beds"', 'numeric');
        if ($this->form_validation->run()) {
            $e_beds = $this->input->post('e_beds');
            $e_present_start = $this->input->post('e_present_start');
            $e_admissions = $this->input->post('e_admissions');
            $e_referred = $this->input->post('e_referred');
            $e_no_referred = $this->input->post('e_no_referred');
            $e_discharges = $this->input->post('e_discharges');
            $e_authorized = $this->input->post('e_authorized');
            $e_abandoned = $this->input->post('e_abandoned');
            $e_deaths = $this->input->post('e_deaths');
            $e_dis_referred = $this->input->post('e_dis_referred');
            $e_counter = $this->input->post('e_counter');
            $e_present_end = $this->input->post('e_present_end');
            $e_total = $this->input->post('e_total');
            $e_actual = $this->input->post('e_actual');

            $hosp_19m = $this->input->post('hosp_19m');
            $hosp_19f = $this->input->post('hosp_19f');
            $hosp_20m = $this->input->post('hosp_20m');
            $hosp_20f = $this->input->post('hosp_20f');

            $deaths_19m = $this->input->post('deaths_19m');
            $deaths_19f = $this->input->post('deaths_19f');
            $deaths_20m = $this->input->post('deaths_20m');
            $deaths_20f = $this->input->post('deaths_20f');

            $insured_dis = $this->input->post('insured_dis');
            $no_paying_dis = $this->input->post('no_paying_dis');
            $no_paying_ind = $this->input->post('no_paying_ind');

            $road_acc_ad = $this->input->post('road_acc_ad');
            $road_acc_deaths = $this->input->post('road_acc_deaths');
            $natural_disa_ad = $this->input->post('natural_disa_ad');
            $natural_disa_deaths = $this->input->post('natural_disa_deaths');
            $work_inj_ad = $this->input->post('work_inj_ad');
            $work_inj_deaths = $this->input->post('work_inj_deaths');

            $malaria_sim_hos19m = $this->input->post('malaria_sim_hos19m');
            $malaria_sim_hos19f = $this->input->post('malaria_sim_hos19f');
            $malaria_sim_hos20m = $this->input->post('malaria_sim_hos20m');
            $malaria_sim_hos20f = $this->input->post('malaria_sim_hos20f');

            $malaria_sev_hos19m = $this->input->post('malaria_sev_hos19m');
            $malaria_sev_hos19f = $this->input->post('malaria_sev_hos19f');
            $malaria_sev_hos20m = $this->input->post('malaria_sev_hos20m');
            $malaria_sev_hos20f = $this->input->post('malaria_sev_hos20f');
            $malaria_sev_deaths19m = $this->input->post('malaria_sev_deaths19m');
            $malaria_sev_deaths19f = $this->input->post('malaria_sev_deaths19f');
            $malaria_sev_deaths20m = $this->input->post('malaria_sev_deaths20m');
            $malaria_sev_deaths20f = $this->input->post('malaria_sev_deaths20f');

            $borreliosis_hos19m = $this->input->post('borreliosis_hos19m');
            $borreliosis_hos19f = $this->input->post('borreliosis_hos19f');
            $borreliosis_hos20m = $this->input->post('borreliosis_hos20m');
            $borreliosis_hos20f = $this->input->post('borreliosis_hos20f');
            $borreliosis_deaths19m = $this->input->post('borreliosis_deaths19m');
            $borreliosis_deaths19f = $this->input->post('borreliosis_deaths19f');
            $borreliosis_deaths20m = $this->input->post('borreliosis_deaths20m');
            $borreliosis_deaths20f = $this->input->post('borreliosis_deaths20f');

            $pneumonia_sim_hos19m = $this->input->post('pneumonia_sim_hos19m');
            $pneumonia_sim_hos19f = $this->input->post('pneumonia_sim_hos19f');
            $pneumonia_sim_hos20m = $this->input->post('pneumonia_sim_hos20m');
            $pneumonia_sim_hos20f = $this->input->post('pneumonia_sim_hos20f');
            $pneumonia_sim_deaths19m = $this->input->post('pneumonia_sim_deaths19m');
            $pneumonia_sim_deaths19f = $this->input->post('pneumonia_sim_deaths19f');
            $pneumonia_sim_deaths20m = $this->input->post('pneumonia_sim_deaths20m');
            $pneumonia_sim_deaths20f = $this->input->post('pneumonia_sim_deaths20f');

            $pneumonia_sev_hos19m = $this->input->post('pneumonia_sev_hos19m');
            $pneumonia_sev_hos19f = $this->input->post('pneumonia_sev_hos19f');
            $pneumonia_sev_hos20m = $this->input->post('pneumonia_sev_hos20m');
            $pneumonia_sev_hos20f = $this->input->post('pneumonia_sev_hos20f');
            $pneumonia_sev_deaths19m = $this->input->post('pneumonia_sev_deaths19m');
            $pneumonia_sev_deaths19f = $this->input->post('pneumonia_sev_deaths19f');
            $pneumonia_sev_deaths20m = $this->input->post('pneumonia_sev_deaths20m');
            $pneumonia_sev_deaths20f = $this->input->post('pneumonia_sev_deaths20f');

            $pleurisy_hos19m = $this->input->post('pleurisy_hos19m');
            $pleurisy_hos19f = $this->input->post('pleurisy_hos19f');
            $pleurisy_hos20m = $this->input->post('pleurisy_hos20m');
            $pleurisy_hos20f = $this->input->post('pleurisy_hos20f');
            $pleurisy_deaths19m = $this->input->post('pleurisy_deaths19m');
            $pleurisy_deaths19f = $this->input->post('pleurisy_deaths19f');
            $pleurisy_deaths20m = $this->input->post('pleurisy_deaths20m');
            $pleurisy_deaths20f = $this->input->post('pleurisy_deaths20f');

            $ari_hos19m = $this->input->post('ari_hos19m');
            $ari_hos19f = $this->input->post('ari_hos19f');
            $ari_hos20m = $this->input->post('ari_hos20m');
            $ari_hos20f = $this->input->post('ari_hos20f');
            $ari_deaths19m = $this->input->post('ari_deaths19m');
            $ari_deaths19f = $this->input->post('ari_deaths19f');
            $ari_deaths20m = $this->input->post('ari_deaths20m');
            $ari_deaths20f = $this->input->post('ari_deaths20f');

            $diarr_bloody_hos19m = $this->input->post('diarr_bloody_hos19m');
            $diarr_bloody_hos19f = $this->input->post('diarr_bloody_hos19f');
            $diarr_bloody_hos20m = $this->input->post('diarr_bloody_hos20m');
            $diarr_bloody_hos20f = $this->input->post('diarr_bloody_hos20f');
            $diarr_bloody_deaths19m = $this->input->post('diarr_bloody_deaths19m');
            $diarr_bloody_deaths19f = $this->input->post('diarr_bloody_deaths19f');
            $diarr_bloody_deaths20m = $this->input->post('diarr_bloody_deaths20m');
            $diarr_bloody_deaths20f = $this->input->post('diarr_bloody_deaths20f');

            $diarr_dehy_hos19m = $this->input->post('diarr_dehy_hos19m');
            $diarr_dehy_hos19f = $this->input->post('diarr_dehy_hos19f');
            $diarr_dehy_hos20m = $this->input->post('diarr_dehy_hos20m');
            $diarr_dehy_hos20f = $this->input->post('diarr_dehy_hos20f');
            $diarr_dehy_deaths19m = $this->input->post('diarr_dehy_deaths19m');
            $diarr_dehy_deaths19f = $this->input->post('diarr_dehy_deaths19f');
            $diarr_dehy_deaths20m = $this->input->post('diarr_dehy_deaths20m');
            $diarr_dehy_deaths20f = $this->input->post('diarr_dehy_deaths20f');

            $diarr_no_dehy_hos19m = $this->input->post('diarr_no_dehy_hos19m');
            $diarr_no_dehy_hos19f = $this->input->post('diarr_no_dehy_hos19f');
            $diarr_no_dehy_hos20m = $this->input->post('diarr_no_dehy_hos20m');
            $diarr_no_dehy_hos20f = $this->input->post('diarr_no_dehy_hos20f');
            $diarr_no_dehy_deaths19m = $this->input->post('diarr_no_dehy_deaths19m');
            $diarr_no_dehy_deaths19f = $this->input->post('diarr_no_dehy_deaths19f');
            $diarr_no_dehy_deaths20m = $this->input->post('diarr_no_dehy_deaths20m');
            $diarr_no_dehy_deaths20f = $this->input->post('diarr_no_dehy_deaths20f');

            $cholera_hos19m = $this->input->post('cholera_hos19m');
            $cholera_hos19f = $this->input->post('cholera_hos19f');
            $cholera_hos20m = $this->input->post('cholera_hos20m');
            $cholera_hos20f = $this->input->post('cholera_hos20f');
            $cholera_deaths19m = $this->input->post('cholera_deaths19m');
            $cholera_deaths19f = $this->input->post('cholera_deaths19f');
            $cholera_deaths20m = $this->input->post('cholera_deaths20m');
            $cholera_deaths20f = $this->input->post('cholera_deaths20f');

            $typhoid_hos19m = $this->input->post('typhoid_hos19m');
            $typhoid_hos19f = $this->input->post('typhoid_hos19f');
            $typhoid_hos20m = $this->input->post('typhoid_hos20m');
            $typhoid_hos20f = $this->input->post('typhoid_hos20f');
            $typhoid_deaths19m = $this->input->post('typhoid_deaths19m');
            $typhoid_deaths19f = $this->input->post('typhoid_deaths19f');
            $typhoid_deaths20m = $this->input->post('typhoid_deaths20m');
            $typhoid_deaths20f = $this->input->post('typhoid_deaths20f');

            $meningitis_hos19m = $this->input->post('meningitis_hos19m');
            $meningitis_hos19f = $this->input->post('meningitis_hos19f');
            $meningitis_hos20m = $this->input->post('meningitis_hos20m');
            $meningitis_hos20f = $this->input->post('meningitis_hos20f');
            $meningitis_deaths19m = $this->input->post('meningitis_deaths19m');
            $meningitis_deaths19f = $this->input->post('meningitis_deaths19f');
            $meningitis_deaths20m = $this->input->post('meningitis_deaths20m');
            $meningitis_deaths20f = $this->input->post('meningitis_deaths20f');

            $measles_hos19m = $this->input->post('measles_hos19m');
            $measles_hos19f = $this->input->post('measles_hos19f');
            $measles_hos20m = $this->input->post('measles_hos20m');
            $measles_hos20f = $this->input->post('measles_hos20f');
            $measles_deaths19m = $this->input->post('measles_deaths19m');
            $measles_deaths19f = $this->input->post('measles_deaths19f');
            $measles_deaths20m = $this->input->post('measles_deaths20m');
            $measles_deaths20f = $this->input->post('measles_deaths20f');

            $tb_conf_hos19m = $this->input->post('tb_conf_hos19m');
            $tb_conf_hos19f = $this->input->post('tb_conf_hos19f');
            $tb_conf_hos20m = $this->input->post('tb_conf_hos20m');
            $tb_conf_hos20f = $this->input->post('tb_conf_hos20f');
            $tb_conf_deaths19m = $this->input->post('tb_conf_deaths19m');
            $tb_conf_deaths19f = $this->input->post('tb_conf_deaths19f');
            $tb_conf_deaths20m = $this->input->post('tb_conf_deaths20m');
            $tb_conf_deaths20f = $this->input->post('tb_conf_deaths20f');

            $tb_diag_hos19m = $this->input->post('tb_diag_hos19m');
            $tb_diag_hos19f = $this->input->post('tb_diag_hos19f');
            $tb_diag_hos20m = $this->input->post('tb_diag_hos20m');
            $tb_diag_hos20f = $this->input->post('tb_diag_hos20f');
            $tb_diag_deaths19m = $this->input->post('tb_diag_deaths19m');
            $tb_diag_deaths19f = $this->input->post('tb_diag_deaths19f');
            $tb_diag_deaths20m = $this->input->post('tb_diag_deaths20m');
            $tb_diag_deaths20f = $this->input->post('tb_diag_deaths20f');

            $fever_hos19m = $this->input->post('fever_hos19m');
            $fever_hos19f = $this->input->post('fever_hos19f');
            $fever_hos20m = $this->input->post('fever_hos20m');
            $fever_hos20f = $this->input->post('fever_hos20f');
            $fever_deaths19m = $this->input->post('fever_deaths19m');
            $fever_deaths19f = $this->input->post('fever_deaths19f');
            $fever_deaths20m = $this->input->post('fever_deaths20m');
            $fever_deaths20f = $this->input->post('fever_deaths20f');

            $encephalitis_hos19m = $this->input->post('encephalitis_hos19m');
            $encephalitis_hos19f = $this->input->post('encephalitis_hos19f');
            $encephalitis_hos20m = $this->input->post('encephalitis_hos20m');
            $encephalitis_hos20f = $this->input->post('encephalitis_hos20f');
            $encephalitis_deaths19m = $this->input->post('encephalitis_deaths19m');
            $encephalitis_deaths19f = $this->input->post('encephalitis_deaths19f');
            $encephalitis_deaths20m = $this->input->post('encephalitis_deaths20m');
            $encephalitis_deaths20f = $this->input->post('encephalitis_deaths20f');

            $mening_crypto_hos19m = $this->input->post('mening_crypto_hos19m');
            $mening_crypto_hos19f = $this->input->post('mening_crypto_hos19f');
            $mening_crypto_hos20m = $this->input->post('mening_crypto_hos20m');
            $mening_crypto_hos20f = $this->input->post('mening_crypto_hos20f');
            $mening_crypto_deaths19m = $this->input->post('mening_crypto_deaths19m');
            $mening_crypto_deaths19f = $this->input->post('mening_crypto_deaths19f');
            $mening_crypto_deaths20m = $this->input->post('mening_crypto_deaths20m');
            $mening_crypto_deaths20f = $this->input->post('mening_crypto_deaths20f');

            $skin_hos19m = $this->input->post('skin_hos19m');
            $skin_hos19f = $this->input->post('skin_hos19f');
            $skin_hos20m = $this->input->post('skin_hos20m');
            $skin_hos20f = $this->input->post('skin_hos20f');
            $skin_deaths19m = $this->input->post('skin_deaths19m');
            $skin_deaths19f = $this->input->post('skin_deaths19f');
            $skin_deaths20m = $this->input->post('skin_deaths20m');
            $skin_deaths20f = $this->input->post('skin_deaths20f');

            $diarr_chronic_hos19m = $this->input->post('diarr_chronic_hos19m');
            $diarr_chronic_hos19f = $this->input->post('diarr_chronic_hos19f');
            $diarr_chronic_hos20m = $this->input->post('diarr_chronic_hos20m');
            $diarr_chronic_hos20f = $this->input->post('diarr_chronic_hos20f');
            $diarr_chronic_deaths19m = $this->input->post('diarr_chronic_deaths19m');
            $diarr_chronic_deaths19f = $this->input->post('diarr_chronic_deaths19f');
            $diarr_chronic_deaths20m = $this->input->post('diarr_chronic_deaths20m');
            $diarr_chronic_deaths20f = $this->input->post('diarr_chronic_deaths20f');

            $hiv_hos19m = $this->input->post('hiv_hos19m');
            $hiv_hos19f = $this->input->post('hiv_hos19f');
            $hiv_hos20m = $this->input->post('hiv_hos20m');
            $hiv_hos20f = $this->input->post('hiv_hos20f');
            $hiv_deaths19m = $this->input->post('hiv_deaths19m');
            $hiv_deaths19f = $this->input->post('hiv_deaths19f');
            $hiv_deaths20m = $this->input->post('hiv_deaths20m');
            $hiv_deaths20f = $this->input->post('hiv_deaths20f');

            $trauma_hos19m = $this->input->post('trauma_hos19m');
            $trauma_hos19f = $this->input->post('trauma_hos19f');
            $trauma_hos20m = $this->input->post('trauma_hos20m');
            $trauma_hos20f = $this->input->post('trauma_hos20f');
            $trauma_deaths19m = $this->input->post('trauma_deaths19m');
            $trauma_deaths19f = $this->input->post('trauma_deaths19f');
            $trauma_deaths20m = $this->input->post('trauma_deaths20m');
            $trauma_deaths20f = $this->input->post('trauma_deaths20f');

            $spleen_hos19m = $this->input->post('spleen_hos19m');
            $spleen_hos19f = $this->input->post('spleen_hos19f');
            $spleen_hos20m = $this->input->post('spleen_hos20m');
            $spleen_hos20f = $this->input->post('spleen_hos20f');
            $spleen_deaths19m = $this->input->post('spleen_deaths19m');
            $spleen_deaths19f = $this->input->post('spleen_deaths19f');
            $spleen_deaths20m = $this->input->post('spleen_deaths20m');
            $spleen_deaths20f = $this->input->post('spleen_deaths20f');

            $frac_open_hos19m = $this->input->post('frac_open_hos19m');
            $frac_open_hos19f = $this->input->post('frac_open_hos19f');
            $frac_open_hos20m = $this->input->post('frac_open_hos20m');
            $frac_open_hos20f = $this->input->post('frac_open_hos20f');
            $frac_open_deaths19m = $this->input->post('frac_open_deaths19m');
            $frac_open_deaths19f = $this->input->post('frac_open_deaths19f');
            $frac_open_deaths20m = $this->input->post('frac_open_deaths20m');
            $frac_open_deaths20f = $this->input->post('frac_open_deaths20f');

            $frac_int_hos19m = $this->input->post('frac_int_hos19m');
            $frac_int_hos19f = $this->input->post('frac_int_hos19f');
            $frac_int_hos20m = $this->input->post('frac_int_hos20m');
            $frac_int_hos20f = $this->input->post('frac_int_hos20f');
            $frac_int_deaths19m = $this->input->post('frac_int_deaths19m');
            $frac_int_deaths19f = $this->input->post('frac_int_deaths19f');
            $frac_int_deaths20m = $this->input->post('frac_int_deaths20m');
            $frac_int_deaths20f = $this->input->post('frac_int_deaths20f');

            $trauma_other_hos19m = $this->input->post('trauma_other_hos19m');
            $trauma_other_hos19f = $this->input->post('trauma_other_hos19f');
            $trauma_other_hos20m = $this->input->post('trauma_other_hos20m');
            $trauma_other_hos20f = $this->input->post('trauma_other_hos20f');
            $trauma_other_deaths19m = $this->input->post('trauma_other_deaths19m');
            $trauma_other_deaths19f = $this->input->post('trauma_other_deaths19f');
            $trauma_other_deaths20m = $this->input->post('trauma_other_deaths20m');
            $trauma_other_deaths20f = $this->input->post('trauma_other_deaths20f');

            $burns_hos19m = $this->input->post('burns_hos19m');
            $burns_hos19f = $this->input->post('burns_hos19f');
            $burns_hos20m = $this->input->post('burns_hos20m');
            $burns_hos20f = $this->input->post('burns_hos20f');
            $burns_deaths19m = $this->input->post('burns_deaths19m');
            $burns_deaths19f = $this->input->post('burns_deaths19f');
            $burns_deaths20m = $this->input->post('burns_deaths20m');
            $burns_deaths20f = $this->input->post('burns_deaths20f');

            $hepatitis_hos19m = $this->input->post('hepatitis_hos19m');
            $hepatitis_hos19f = $this->input->post('hepatitis_hos19f');
            $hepatitis_hos20m = $this->input->post('hepatitis_hos20m');
            $hepatitis_hos20f = $this->input->post('hepatitis_hos20f');
            $hepatitis_deaths19m = $this->input->post('hepatitis_deaths19m');
            $hepatitis_deaths19f = $this->input->post('hepatitis_deaths19f');
            $hepatitis_deaths20m = $this->input->post('hepatitis_deaths20m');
            $hepatitis_deaths20f = $this->input->post('hepatitis_deaths20f');

            $cirrhosis_hos19m = $this->input->post('cirrhosis_hos19m');
            $cirrhosis_hos19f = $this->input->post('cirrhosis_hos19f');
            $cirrhosis_hos20m = $this->input->post('cirrhosis_hos20m');
            $cirrhosis_hos20f = $this->input->post('cirrhosis_hos20f');
            $cirrhosis_deaths19m = $this->input->post('cirrhosis_deaths19m');
            $cirrhosis_deaths19f = $this->input->post('cirrhosis_deaths19f');
            $cirrhosis_deaths20m = $this->input->post('cirrhosis_deaths20m');
            $cirrhosis_deaths20f = $this->input->post('cirrhosis_deaths20f');

            $digestive_hos19m = $this->input->post('digestive_hos19m');
            $digestive_hos19f = $this->input->post('digestive_hos19f');
            $digestive_hos20m = $this->input->post('digestive_hos20m');
            $digestive_hos20f = $this->input->post('digestive_hos20f');
            $digestive_deaths19m = $this->input->post('digestive_deaths19m');
            $digestive_deaths19f = $this->input->post('digestive_deaths19f');
            $digestive_deaths20m = $this->input->post('digestive_deaths20m');
            $digestive_deaths20f = $this->input->post('digestive_deaths20f');

            $gastritis_hos19m = $this->input->post('gastritis_hos19m');
            $gastritis_hos19f = $this->input->post('gastritis_hos19f');
            $gastritis_hos20m = $this->input->post('gastritis_hos20m');
            $gastritis_hos20f = $this->input->post('gastritis_hos20f');
            $gastritis_death19m = $this->input->post('gastritis_death19m');
            $gastritis_death19f = $this->input->post('gastritis_death19f');
            $gastritis_death20m = $this->input->post('gastritis_death20m');
            $gastritis_death20f = $this->input->post('gastritis_death20f');

            $ulcer_hos19m = $this->input->post('ulcer_hos19m');
            $ulcer_hos19f = $this->input->post('ulcer_hos19f');
            $ulcer_hos20m = $this->input->post('ulcer_hos20m');
            $ulcer_hos20f = $this->input->post('ulcer_hos20f');
            $ulcer_deaths19m = $this->input->post('ulcer_deaths19m');
            $ulcer_deaths19f = $this->input->post('ulcer_deaths19f');
            $ulcer_deaths20m = $this->input->post('ulcer_deaths20m');
            $ulcer_deaths20f = $this->input->post('ulcer_deaths20f');

            $appendi_hos19m = $this->input->post('appendi_hos19m');
            $appendi_hos19f = $this->input->post('appendi_hos19f');
            $appendi_hos20m = $this->input->post('appendi_hos20m');
            $appendi_hos20f = $this->input->post('appendi_hos20f');
            $appendi_deaths19m = $this->input->post('appendi_deaths19m');
            $appendi_deaths19f = $this->input->post('appendi_deaths19f');
            $appendi_deaths20m = $this->input->post('appendi_deaths20m');
            $appendi_deaths20f = $this->input->post('appendi_deaths20f');

            $hernia_hos19m = $this->input->post('hernia_hos19m');
            $hernia_hos19f = $this->input->post('hernia_hos19f');
            $hernia_hos20m = $this->input->post('hernia_hos20m');
            $hernia_hos20f = $this->input->post('hernia_hos20f');
            $hernia_deaths19m = $this->input->post('hernia_deaths19m');
            $hernia_deaths19f = $this->input->post('hernia_deaths19f');
            $hernia_deaths20m = $this->input->post('hernia_deaths20m');
            $hernia_deaths20f = $this->input->post('hernia_deaths20f');

            $peritonitis_hos19m = $this->input->post('peritonitis_hos19m');
            $peritonitis_hos19f = $this->input->post('peritonitis_hos19f');
            $peritonitis_hos20m = $this->input->post('peritonitis_hos20m');
            $peritonitis_hos20f = $this->input->post('peritonitis_hos20f');
            $peritonitis_deaths19m = $this->input->post('peritonitis_deaths19m');
            $peritonitis_deaths19f = $this->input->post('peritonitis_deaths19f');
            $peritonitis_deaths20m = $this->input->post('peritonitis_deaths20m');
            $peritonitis_deaths20f = $this->input->post('peritonitis_deaths20f');

            $intestinal_hos19m = $this->input->post('intestinal_hos19m');
            $intestinal_hos19f = $this->input->post('intestinal_hos19f');
            $intestinal_hos20m = $this->input->post('intestinal_hos20m');
            $intestinal_hos20f = $this->input->post('intestinal_hos20f');
            $intestinal_deaths19m = $this->input->post('intestinal_deaths19m');
            $intestinal_deaths19f = $this->input->post('intestinal_deaths19f');
            $intestinal_deaths20m = $this->input->post('intestinal_deaths20m');
            $intestinal_deaths20f = $this->input->post('intestinal_deaths20f');

            $urinary_hos19m = $this->input->post('urinary_hos19m');
            $urinary_hos19f = $this->input->post('urinary_hos19f');
            $urinary_hos20m = $this->input->post('urinary_hos20m');
            $urinary_hos20f = $this->input->post('urinary_hos20f');
            $urinary_deaths19m = $this->input->post('urinary_deaths19m');
            $urinary_deaths19f = $this->input->post('urinary_deaths19f');
            $urinary_deaths20m = $this->input->post('urinary_deaths20m');
            $urinary_deaths20f = $this->input->post('urinary_deaths20f');

            $bone_inf_hos19m = $this->input->post('bone_inf_hos19m');
            $bone_inf_hos19f = $this->input->post('bone_inf_hos19f');
            $bone_inf_hos20m = $this->input->post('bone_inf_hos20m');
            $bone_inf_hos20f = $this->input->post('bone_inf_hos20f');
            $bone_inf_deaths19m = $this->input->post('bone_inf_deaths19m');
            $bone_inf_deaths19f = $this->input->post('bone_inf_deaths19f');
            $bone_inf_deaths20m = $this->input->post('bone_inf_deaths20m');
            $bone_inf_deaths20f = $this->input->post('bone_inf_deaths20f');

            $bone_other_hos19m = $this->input->post('bone_other_hos19m');
            $bone_other_hos19f = $this->input->post('bone_other_hos19f');
            $bone_other_hos20m = $this->input->post('bone_other_hos20m');
            $bone_other_hos20f = $this->input->post('bone_other_hos20f');
            $bone_other_deaths19m = $this->input->post('bone_other_deaths19m');
            $bone_other_deaths19f = $this->input->post('bone_other_deaths19f');
            $bone_other_deaths20m = $this->input->post('bone_other_deaths20m');
            $bone_other_deaths20f = $this->input->post('bone_other_deaths20f');

            $acute_hos19m = $this->input->post('acute_hos19m');
            $acute_hos19f = $this->input->post('acute_hos19f');
            $acute_hos20m = $this->input->post('acute_hos20m');
            $acute_hos20f = $this->input->post('acute_hos20f');
            $acute_deaths19m = $this->input->post('acute_deaths19m');
            $acute_deaths19f = $this->input->post('acute_deaths19f');
            $acute_deaths20m = $this->input->post('acute_deaths20m');
            $acute_deaths20f = $this->input->post('acute_deaths20f');

            $gyneco_hos19f = $this->input->post('gyneco_hos19f');
            $gyneco_hos20f = $this->input->post('gyneco_hos20f');
            $gyneco_deaths19f = $this->input->post('gyneco_deaths19f');
            $gyneco_deaths20f = $this->input->post('gyneco_deaths20f');

            $mastoditis_hos19m = $this->input->post('mastoditis_hos19m');
            $mastoditis_hos19f = $this->input->post('mastoditis_hos19f');
            $mastoditis_hos20m = $this->input->post('mastoditis_hos20m');
            $mastoditis_hos20f = $this->input->post('mastoditis_hos20f');
            $mastoditis_deaths19m = $this->input->post('mastoditis_deaths19m');
            $mastoditis_deaths19f = $this->input->post('mastoditis_deaths19f');
            $mastoditis_deaths20m = $this->input->post('mastoditis_deaths20m');
            $mastoditis_deaths20f = $this->input->post('mastoditis_deaths20f');

            $tetanus_hos19m = $this->input->post('tetanus_hos19m');
            $tetanus_hos19f = $this->input->post('tetanus_hos19f');
            $tetanus_hos20m = $this->input->post('tetanus_hos20m');
            $tetanus_hos20f = $this->input->post('tetanus_hos20f');
            $tetanus_deaths19m = $this->input->post('tetanus_deaths19m');
            $tetanus_deaths19f = $this->input->post('tetanus_deaths19f');
            $tetanus_deaths20m = $this->input->post('tetanus_deaths20m');
            $tetanus_deaths20f = $this->input->post('tetanus_deaths20f');

            $cancer_hos19m = $this->input->post('cancer_hos19m');
            $cancer_hos19f = $this->input->post('cancer_hos19f');
            $cancer_hos20m = $this->input->post('cancer_hos20m');
            $cancer_hos20f = $this->input->post('cancer_hos20f');
            $cancer_deaths19m = $this->input->post('cancer_deaths19m');
            $cancer_deaths19f = $this->input->post('cancer_deaths19f');
            $cancer_deaths20m = $this->input->post('cancer_deaths20m');
            $cancer_deaths20f = $this->input->post('cancer_deaths20f');

            $this->internal_medicine_model->new_report();

            $num_rapport = $this->internal_medicine_model->num_rapport()->num_rapport;

            $this->internal_medicine_model->fetch_data1(
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
                );
                $this->internal_medicine_model->fetch_data2(
                  $hosp_19m,
                  $hosp_19f,
                  $hosp_20m,
                  $hosp_20f,

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

                  $malaria_sim_hos19m,
                  $malaria_sim_hos19f,
                  $malaria_sim_hos20m,
                  $malaria_sim_hos20f,

                  $malaria_sev_hos19m,
                  $malaria_sev_hos19f,
                  $malaria_sev_hos20m,
                  $malaria_sev_hos20f,
                  $malaria_sev_deaths19m,
                  $malaria_sev_deaths19f,
                  $malaria_sev_deaths20m,
                  $malaria_sev_deaths20f,

                  $borreliosis_hos19m,
                  $borreliosis_hos19f,
                  $borreliosis_hos20m,
                  $borreliosis_hos20f,
                  $borreliosis_deaths19m,
                  $borreliosis_deaths19f,
                  $borreliosis_deaths20m,
                  $borreliosis_deaths20f,

                  $pneumonia_sim_hos19m,
                  $pneumonia_sim_hos19f,
                  $pneumonia_sim_hos20m,
                  $pneumonia_sim_hos20f,
                  $pneumonia_sim_deaths19m,
                  $pneumonia_sim_deaths19f,
                  $pneumonia_sim_deaths20m,
                  $pneumonia_sim_deaths20f,

                  $pneumonia_sev_hos19m,
                  $pneumonia_sev_hos19f,
                  $pneumonia_sev_hos20m,
                  $pneumonia_sev_hos20f,
                  $pneumonia_sev_deaths19m,
                  $pneumonia_sev_deaths19f,
                  $pneumonia_sev_deaths20m,
                  $pneumonia_sev_deaths20f,

                  $pleurisy_hos19m,
                  $pleurisy_hos19f,
                  $pleurisy_hos20m,
                  $pleurisy_hos20f,
                  $pleurisy_deaths19m,
                  $pleurisy_deaths19f,
                  $pleurisy_deaths20m,
                  $pleurisy_deaths20f,

                  $ari_hos19m,
                  $ari_hos19f,
                  $ari_hos20m,
                  $ari_hos20f,
                  $ari_deaths19m,
                  $ari_deaths19f,
                  $ari_deaths20m,
                  $ari_deaths20f,

                  $diarr_bloody_hos19m,
                  $diarr_bloody_hos19f,
                  $diarr_bloody_hos20m,
                  $diarr_bloody_hos20f,
                  $diarr_bloody_deaths19m,
                  $diarr_bloody_deaths19f,
                  $diarr_bloody_deaths20m,
                  $diarr_bloody_deaths20f,

                  $diarr_dehy_hos19m,
                  $diarr_dehy_hos19f,
                  $diarr_dehy_hos20m,
                  $diarr_dehy_hos20f,
                  $diarr_dehy_deaths19m,
                  $diarr_dehy_deaths19f,
                  $diarr_dehy_deaths20m,
                  $diarr_dehy_deaths20f,

                  $diarr_no_dehy_hos19m,
                  $diarr_no_dehy_hos19f,
                  $diarr_no_dehy_hos20m,
                  $diarr_no_dehy_hos20f,
                  $diarr_no_dehy_deaths19m,
                  $diarr_no_dehy_deaths19f,
                  $diarr_no_dehy_deaths20m,
                  $diarr_no_dehy_deaths20f,

                  $cholera_hos19m,
                  $cholera_hos19f,
                  $cholera_hos20m,
                  $cholera_hos20f,
                  $cholera_deaths19m,
                  $cholera_deaths19f,
                  $cholera_deaths20m,
                  $cholera_deaths20f,

                  $typhoid_hos19m,
                  $typhoid_hos19f,
                  $typhoid_hos20m,
                  $typhoid_hos20f,
                  $typhoid_deaths19m,
                  $typhoid_deaths19f,
                  $typhoid_deaths20m,
                  $typhoid_deaths20f,

                  $meningitis_hos19m,
                  $meningitis_hos19f,
                  $meningitis_hos20m,
                  $meningitis_hos20f,
                  $meningitis_deaths19m,
                  $meningitis_deaths19f,
                  $meningitis_deaths20m,
                  $meningitis_deaths20f,

                  $measles_hos19m,
                  $measles_hos19f,
                  $measles_hos20m,
                  $measles_hos20f,
                  $measles_deaths19m,
                  $measles_deaths19f,
                  $measles_deaths20m,
                  $measles_deaths20f,

                  $tb_conf_hos19m,
                  $tb_conf_hos19f,
                  $tb_conf_hos20m,
                  $tb_conf_hos20f,
                  $tb_conf_deaths19m,
                  $tb_conf_deaths19f,
                  $tb_conf_deaths20m,
                  $tb_conf_deaths20f,

                  $tb_diag_hos19m,
                  $tb_diag_hos19f,
                  $tb_diag_hos20m,
                  $tb_diag_hos20f,
                  $tb_diag_deaths19m,
                  $tb_diag_deaths19f,
                  $tb_diag_deaths20m,
                  $tb_diag_deaths20f,

                  $fever_hos19m,
                  $fever_hos19f,
                  $fever_hos20m,
                  $fever_hos20f,
                  $fever_deaths19m,
                  $fever_deaths19f,
                  $fever_deaths20m,
                  $fever_deaths20f,

                  $encephalitis_hos19m,
                  $encephalitis_hos19f,
                  $encephalitis_hos20m,
                  $encephalitis_hos20f,
                  $encephalitis_deaths19m,
                  $encephalitis_deaths19f,
                  $encephalitis_deaths20m,
                  $encephalitis_deaths20f,

                  $mening_crypto_hos19m,
                  $mening_crypto_hos19f,
                  $mening_crypto_hos20m,
                  $mening_crypto_hos20f,
                  $mening_crypto_deaths19m,
                  $mening_crypto_deaths19f,
                  $mening_crypto_deaths20m,
                  $mening_crypto_deaths20f,

                  $skin_hos19m,
                  $skin_hos19f,
                  $skin_hos20m,
                  $skin_hos20f,
                  $skin_deaths19m,
                  $skin_deaths19f,
                  $skin_deaths20m,
                  $skin_deaths20f,

                  $diarr_chronic_hos19m,
                  $diarr_chronic_hos19f,
                  $diarr_chronic_hos20m,
                  $diarr_chronic_hos20f,
                  $diarr_chronic_deaths19m,
                  $diarr_chronic_deaths19f,
                  $diarr_chronic_deaths20m,
                  $diarr_chronic_deaths20f,

                  $hiv_hos19m,
                  $hiv_hos19f,
                  $hiv_hos20m,
                  $hiv_hos20f,
                  $hiv_deaths19m,
                  $hiv_deaths19f,
                  $hiv_deaths20m,
                  $hiv_deaths20f,

                  $trauma_hos19m,
                  $trauma_hos19f,
                  $trauma_hos20m,
                  $trauma_hos20f,
                  $trauma_deaths19m,
                  $trauma_deaths19f,
                  $trauma_deaths20m,
                  $trauma_deaths20f,

                  $spleen_hos19m,
                  $spleen_hos19f,
                  $spleen_hos20m,
                  $spleen_hos20f,
                  $spleen_deaths19m,
                  $spleen_deaths19f,
                  $spleen_deaths20m,
                  $spleen_deaths20f,

                  $frac_open_hos19m,
                  $frac_open_hos19f,
                  $frac_open_hos20m,
                  $frac_open_hos20f,
                  $frac_open_deaths19m,
                  $frac_open_deaths19f,
                  $frac_open_deaths20m,
                  $frac_open_deaths20f,

                  $frac_int_hos19m,
                  $frac_int_hos19f,
                  $frac_int_hos20m,
                  $frac_int_hos20f,
                  $frac_int_deaths19m,
                  $frac_int_deaths19f,
                  $frac_int_deaths20m,
                  $frac_int_deaths20f,

                  $trauma_other_hos19m,
                  $trauma_other_hos19f,
                  $trauma_other_hos20m,
                  $trauma_other_hos20f,
                  $trauma_other_deaths19m,
                  $trauma_other_deaths19f,
                  $trauma_other_deaths20m,
                  $trauma_other_deaths20f,

                  $burns_hos19m,
                  $burns_hos19f,
                  $burns_hos20m,
                  $burns_hos20f,
                  $burns_deaths19m,
                  $burns_deaths19f,
                  $burns_deaths20m,
                  $burns_deaths20f,

                  $hepatitis_hos19m,
                  $hepatitis_hos19f,
                  $hepatitis_hos20m,
                  $hepatitis_hos20f,
                  $hepatitis_deaths19m,
                  $hepatitis_deaths19f,
                  $hepatitis_deaths20m,
                  $hepatitis_deaths20f,

                  $cirrhosis_hos19m,
                  $cirrhosis_hos19f,
                  $cirrhosis_hos20m,
                  $cirrhosis_hos20f,
                  $cirrhosis_deaths19m,
                  $cirrhosis_deaths19f,
                  $cirrhosis_deaths20m,
                  $cirrhosis_deaths20f,

                  $digestive_hos19m,
                  $digestive_hos19f,
                  $digestive_hos20m,
                  $digestive_hos20f,
                  $digestive_deaths19m,
                  $digestive_deaths19f,
                  $digestive_deaths20m,
                  $digestive_deaths20f,

                  $gastritis_hos19m,
                  $gastritis_hos19f,
                  $gastritis_hos20m,
                  $gastritis_hos20f,
                  $gastritis_death19m,
                  $gastritis_death19f,
                  $gastritis_death20m,
                  $gastritis_death20f,

                  $ulcer_hos19m,
                  $ulcer_hos19f,
                  $ulcer_hos20m,
                  $ulcer_hos20f,
                  $ulcer_deaths19m,
                  $ulcer_deaths19f,
                  $ulcer_deaths20m,
                  $ulcer_deaths20f,

                  $appendi_hos19m,
                  $appendi_hos19f,
                  $appendi_hos20m,
                  $appendi_hos20f,
                  $appendi_deaths19m,
                  $appendi_deaths19f,
                  $appendi_deaths20m,
                  $appendi_deaths20f,

                  $hernia_hos19m,
                  $hernia_hos19f,
                  $hernia_hos20m,
                  $hernia_hos20f,
                  $hernia_deaths19m,
                  $hernia_deaths19f,
                  $hernia_deaths20m,
                  $hernia_deaths20f,

                  $peritonitis_hos19m,
                  $peritonitis_hos19f,
                  $peritonitis_hos20m,
                  $peritonitis_hos20f,
                  $peritonitis_deaths19m,
                  $peritonitis_deaths19f,
                  $peritonitis_deaths20m,
                  $peritonitis_deaths20f,

                  $intestinal_hos19m,
                  $intestinal_hos19f,
                  $intestinal_hos20m,
                  $intestinal_hos20f,
                  $intestinal_deaths19m,
                  $intestinal_deaths19f,
                  $intestinal_deaths20m,
                  $intestinal_deaths20f,

                  $urinary_hos19m,
                  $urinary_hos19f,
                  $urinary_hos20m,
                  $urinary_hos20f,
                  $urinary_deaths19m,
                  $urinary_deaths19f,
                  $urinary_deaths20m,
                  $urinary_deaths20f,

                  $bone_inf_hos19m,
                  $bone_inf_hos19f,
                  $bone_inf_hos20m,
                  $bone_inf_hos20f,
                  $bone_inf_deaths19m,
                  $bone_inf_deaths19f,
                  $bone_inf_deaths20m,
                  $bone_inf_deaths20f,

                  $bone_other_hos19m,
                  $bone_other_hos19f,
                  $bone_other_hos20m,
                  $bone_other_hos20f,
                  $bone_other_deaths19m,
                  $bone_other_deaths19f,
                  $bone_other_deaths20m,
                  $bone_other_deaths20f,

                  $acute_hos19m,
                  $acute_hos19f,
                  $acute_hos20m,
                  $acute_hos20f,
                  $acute_deaths19m,
                  $acute_deaths19f,
                  $acute_deaths20m,
                  $acute_deaths20f,

                  $gyneco_hos19f,
                  $gyneco_hos20f,
                  $gyneco_deaths19f,
                  $gyneco_deaths20f,

                  $mastoditis_hos19m,
                  $mastoditis_hos19f,
                  $mastoditis_hos20m,
                  $mastoditis_hos20f,
                  $mastoditis_deaths19m,
                  $mastoditis_deaths19f,
                  $mastoditis_deaths20m,
                  $mastoditis_deaths20f,

                  $tetanus_hos19m,
                  $tetanus_hos19f,
                  $tetanus_hos20m,
                  $tetanus_hos20f,
                  $tetanus_deaths19m,
                  $tetanus_deaths19f,
                  $tetanus_deaths20m,
                  $tetanus_deaths20f,

                  $cancer_hos19m,
                  $cancer_hos19f,
                  $cancer_hos20m,
                  $cancer_hos20f,
                  $cancer_deaths19m,
                  $cancer_deaths19f,
                  $cancer_deaths20m,
                  $cancer_deaths20f,
                  $num_rapport
                    );
            $this->session->unset_userdata('add_date');
            redirect('home', 'refresh');
        } else {
            $this->load->view('internal_medicine_add_view');
        }
    }
}
