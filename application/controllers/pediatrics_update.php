<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pediatrics_update extends CI_Controller
{
    public function index()
    {
        $this->load->model('pediatrics_model');
        if ($this->session->userdata('num_user') != '') {
            $this->fetch();
        } else {
            redirect('login', 'refresh');
        }
    }

    public function fetch()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('p_beds', '"p_beds"', 'numeric');
        if ($this->form_validation->run()) {
            $p_beds = $this->input->post('p_beds');
            $p_present_start = $this->input->post('p_present_start');
            $p_admissions = $this->input->post('p_admissions');
            $p_referred = $this->input->post('p_referred');
            $p_no_referred = $this->input->post('p_no_referred');
            $p_discharges = $this->input->post('p_discharges');
            $p_authorized = $this->input->post('p_authorized');
            $p_abandoned = $this->input->post('p_abandoned');
            $p_deaths = $this->input->post('p_deaths');
            $p_dis_referred = $this->input->post('p_dis_referred');
            $p_counter = $this->input->post('p_counter');
            $p_present_end = $this->input->post('p_present_end');
            $p_total = $this->input->post('p_total');
            $p_actual = $this->input->post('p_actual');

            $hosp_1m = $this->input->post('hosp_1m');
            $hosp_1f = $this->input->post('hosp_1f');
            $hosp_4m = $this->input->post('hosp_4m');
            $hosp_4f = $this->input->post('hosp_4f');
            $hosp_19m = $this->input->post('hosp_19m');
            $hosp_19f = $this->input->post('hosp_19f');

            $deaths_1m = $this->input->post('deaths_1m');
            $deaths_1f = $this->input->post('deaths_1f');
            $deaths_4m = $this->input->post('deaths_4m');
            $deaths_4f = $this->input->post('deaths_4f');
            $deaths_19m = $this->input->post('deaths_19m');
            $deaths_19f = $this->input->post('deaths_19f');

            $insured_dis = $this->input->post('insured_dis');
            $no_paying_dis = $this->input->post('no_paying_dis');
            $no_paying_ind = $this->input->post('no_paying_ind');

            $road_acc_ad = $this->input->post('road_acc_ad');
            $road_acc_deaths = $this->input->post('road_acc_deaths');
            $natural_disa_ad = $this->input->post('natural_disa_ad');
            $natural_disa_deaths = $this->input->post('natural_disa_deaths');
            $work_inj_ad = $this->input->post('work_inj_ad');
            $work_inj_deaths = $this->input->post('work_inj_deaths');

            $malaria_sim_hos5m = $this->input->post('malaria_sim_hos5m');
            $malaria_sim_hos5f = $this->input->post('malaria_sim_hos5f');
            $malaria_sim_hos19m = $this->input->post('malaria_sim_hos19m');
            $malaria_sim_hos19f = $this->input->post('malaria_sim_hos19f');

            $malaria_sev_hos5m = $this->input->post('malaria_sev_hos5m');
            $malaria_sev_hos5f = $this->input->post('malaria_sev_hos5f');
            $malaria_sev_hos19m = $this->input->post('malaria_sev_hos19m');
            $malaria_sev_hos19f = $this->input->post('malaria_sev_hos19f');
            $malaria_sev_deaths5m = $this->input->post('malaria_sev_deaths5m');
            $malaria_sev_deaths5f = $this->input->post('malaria_sev_deaths5f');
            $malaria_sev_deaths19m = $this->input->post('malaria_sev_deaths19m');
            $malaria_sev_deaths19f = $this->input->post('malaria_sev_deaths19f');

            $borreliosis_hos5m = $this->input->post('borreliosis_hos5m');
            $borreliosis_hos5f = $this->input->post('borreliosis_hos5f');
            $borreliosis_hos19m = $this->input->post('borreliosis_hos19m');
            $borreliosis_hos19f = $this->input->post('borreliosis_hos19f');
            $borreliosis_deaths5m = $this->input->post('borreliosis_deaths5m');
            $borreliosis_deaths5f = $this->input->post('borreliosis_deaths5f');
            $borreliosis_deaths19m = $this->input->post('borreliosis_deaths19m');
            $borreliosis_deaths19f = $this->input->post('borreliosis_deaths19f');

            $pneumonia_sim_hos5m = $this->input->post('pneumonia_sim_hos5m');
            $pneumonia_sim_hos5f = $this->input->post('pneumonia_sim_hos5f');
            $pneumonia_sim_hos19m = $this->input->post('pneumonia_sim_hos19m');
            $pneumonia_sim_hos19f = $this->input->post('pneumonia_sim_hos19f');
            $pneumonia_sim_deaths5m = $this->input->post('pneumonia_sim_deaths5m');
            $pneumonia_sim_deaths5f = $this->input->post('pneumonia_sim_deaths5f');
            $pneumonia_sim_deaths19m = $this->input->post('pneumonia_sim_deaths19m');
            $pneumonia_sim_deaths19f = $this->input->post('pneumonia_sim_deaths19f');

            $pneumonia_sev_hos5m = $this->input->post('pneumonia_sev_hos5m');
            $pneumonia_sev_hos5f = $this->input->post('pneumonia_sev_hos5f');
            $pneumonia_sev_hos19m = $this->input->post('pneumonia_sev_hos19m');
            $pneumonia_sev_hos19f = $this->input->post('pneumonia_sev_hos19f');
            $pneumonia_sev_deaths5m = $this->input->post('pneumonia_sev_deaths5m');
            $pneumonia_sev_deaths5f = $this->input->post('pneumonia_sev_deaths5f');
            $pneumonia_sev_deaths19m = $this->input->post('pneumonia_sev_deaths19m');
            $pneumonia_sev_deaths19f = $this->input->post('pneumonia_sev_deaths19f');

            $pleurisy_hos5m = $this->input->post('pleurisy_hos5m');
            $pleurisy_hos5f = $this->input->post('pleurisy_hos5f');
            $pleurisy_hos19m = $this->input->post('pleurisy_hos19m');
            $pleurisy_hos19f = $this->input->post('pleurisy_hos19f');
            $pleurisy_deaths5m = $this->input->post('pleurisy_deaths5m');
            $pleurisy_deaths5f = $this->input->post('pleurisy_deaths5f');
            $pleurisy_deaths19m = $this->input->post('pleurisy_deaths19m');
            $pleurisy_deaths19f = $this->input->post('pleurisy_deaths19f');

            $ari_hos5m = $this->input->post('ari_hos5m');
            $ari_hos5f = $this->input->post('ari_hos5f');
            $ari_hos19m = $this->input->post('ari_hos19m');
            $ari_hos19f = $this->input->post('ari_hos19f');
            $ari_deaths5m = $this->input->post('ari_deaths5m');
            $ari_deaths5f = $this->input->post('ari_deaths5f');
            $ari_deaths19m = $this->input->post('ari_deaths19m');
            $ari_deaths19f = $this->input->post('ari_deaths19f');

            $diarr_bloody_hos5m = $this->input->post('diarr_bloody_hos5m');
            $diarr_bloody_hos5f = $this->input->post('diarr_bloody_hos5f');
            $diarr_bloody_hos19m = $this->input->post('diarr_bloody_hos19m');
            $diarr_bloody_hos19f = $this->input->post('diarr_bloody_hos19f');
            $diarr_bloody_deaths5m = $this->input->post('diarr_bloody_deaths5m');
            $diarr_bloody_deaths5f = $this->input->post('diarr_bloody_deaths5f');
            $diarr_bloody_deaths19m = $this->input->post('diarr_bloody_deaths19m');
            $diarr_bloody_deaths19f = $this->input->post('diarr_bloody_deaths19f');

            $diarr_dehy_hos5m = $this->input->post('diarr_dehy_hos5m');
            $diarr_dehy_hos5f = $this->input->post('diarr_dehy_hos5f');
            $diarr_dehy_hos19m = $this->input->post('diarr_dehy_hos19m');
            $diarr_dehy_hos19f = $this->input->post('diarr_dehy_hos19f');
            $diarr_dehy_deaths5m = $this->input->post('diarr_dehy_deaths5m');
            $diarr_dehy_deaths5f = $this->input->post('diarr_dehy_deaths5f');
            $diarr_dehy_deaths19m = $this->input->post('diarr_dehy_deaths19m');
            $diarr_dehy_deaths19f = $this->input->post('diarr_dehy_deaths19f');

            $diarr_no_dehy_hos5m = $this->input->post('diarr_no_dehy_hos5m');
            $diarr_no_dehy_hos5f = $this->input->post('diarr_no_dehy_hos5f');
            $diarr_no_dehy_hos19m = $this->input->post('diarr_no_dehy_hos19m');
            $diarr_no_dehy_hos19f = $this->input->post('diarr_no_dehy_hos19f');
            $diarr_no_dehy_deaths5m = $this->input->post('diarr_no_dehy_deaths5m');
            $diarr_no_dehy_deaths5f = $this->input->post('diarr_no_dehy_deaths5f');
            $diarr_no_dehy_deaths19m = $this->input->post('diarr_no_dehy_deaths19m');
            $diarr_no_dehy_deaths19f = $this->input->post('diarr_no_dehy_deaths19f');

            $cholera_hos5m = $this->input->post('cholera_hos5m');
            $cholera_hos5f = $this->input->post('cholera_hos5f');
            $cholera_hos19m = $this->input->post('cholera_hos19m');
            $cholera_hos19f = $this->input->post('cholera_hos19f');
            $cholera_deaths5m = $this->input->post('cholera_deaths5m');
            $cholera_deaths5f = $this->input->post('cholera_deaths5f');
            $cholera_deaths19m = $this->input->post('cholera_deaths19m');
            $cholera_deaths19f = $this->input->post('cholera_deaths19f');

            $typhoid_hos5m = $this->input->post('typhoid_hos5m');
            $typhoid_hos5f = $this->input->post('typhoid_hos5f');
            $typhoid_hos19m = $this->input->post('typhoid_hos19m');
            $typhoid_hos19f = $this->input->post('typhoid_hos19f');
            $typhoid_deaths5m = $this->input->post('typhoid_deaths5m');
            $typhoid_deaths5f = $this->input->post('typhoid_deaths5f');
            $typhoid_deaths19m = $this->input->post('typhoid_deaths19m');
            $typhoid_deaths19f = $this->input->post('typhoid_deaths19f');

            $meningitis_hos5m = $this->input->post('meningitis_hos5m');
            $meningitis_hos5f = $this->input->post('meningitis_hos5f');
            $meningitis_hos19m = $this->input->post('meningitis_hos19m');
            $meningitis_hos19f = $this->input->post('meningitis_hos19f');
            $meningitis_deaths5m = $this->input->post('meningitis_deaths5m');
            $meningitis_deaths5f = $this->input->post('meningitis_deaths5f');
            $meningitis_deaths19m = $this->input->post('meningitis_deaths19m');
            $meningitis_deaths19f = $this->input->post('meningitis_deaths19f');

            $measles_hos5m = $this->input->post('measles_hos5m');
            $measles_hos5f = $this->input->post('measles_hos5f');
            $measles_hos19m = $this->input->post('measles_hos19m');
            $measles_hos19f = $this->input->post('measles_hos19f');
            $measles_deaths5m = $this->input->post('measles_deaths5m');
            $measles_deaths5f = $this->input->post('measles_deaths5f');
            $measles_deaths19m = $this->input->post('measles_deaths19m');
            $measles_deaths19f = $this->input->post('measles_deaths19f');

            $tb_conf_hos5m = $this->input->post('tb_conf_hos5m');
            $tb_conf_hos5f = $this->input->post('tb_conf_hos5f');
            $tb_conf_hos19m = $this->input->post('tb_conf_hos19m');
            $tb_conf_hos19f = $this->input->post('tb_conf_hos19f');
            $tb_conf_deaths5m = $this->input->post('tb_conf_deaths5m');
            $tb_conf_deaths5f = $this->input->post('tb_conf_deaths5f');
            $tb_conf_deaths19m = $this->input->post('tb_conf_deaths19m');
            $tb_conf_deaths19f = $this->input->post('tb_conf_deaths19f');

            $tb_diag_hos5m = $this->input->post('tb_diag_hos5m');
            $tb_diag_hos5f = $this->input->post('tb_diag_hos5f');
            $tb_diag_hos19m = $this->input->post('tb_diag_hos19m');
            $tb_diag_hos19f = $this->input->post('tb_diag_hos19f');
            $tb_diag_deaths5m = $this->input->post('tb_diag_deaths5m');
            $tb_diag_deaths5f = $this->input->post('tb_diag_deaths5f');
            $tb_diag_deaths19m = $this->input->post('tb_diag_deaths19m');
            $tb_diag_deaths19f = $this->input->post('tb_diag_deaths19f');

            $fever_hos5m = $this->input->post('fever_hos5m');
            $fever_hos5f = $this->input->post('fever_hos5f');
            $fever_hos19m = $this->input->post('fever_hos19m');
            $fever_hos19f = $this->input->post('fever_hos19f');
            $fever_deaths5m = $this->input->post('fever_deaths5m');
            $fever_deaths5f = $this->input->post('fever_deaths5f');
            $fever_deaths19m = $this->input->post('fever_deaths19m');
            $fever_deaths19f = $this->input->post('fever_deaths19f');

            $encephalitis_hos5m = $this->input->post('encephalitis_hos5m');
            $encephalitis_hos5f = $this->input->post('encephalitis_hos5f');
            $encephalitis_hos19m = $this->input->post('encephalitis_hos19m');
            $encephalitis_hos19f = $this->input->post('encephalitis_hos19f');
            $encephalitis_deaths5m = $this->input->post('encephalitis_deaths5m');
            $encephalitis_deaths5f = $this->input->post('encephalitis_deaths5f');
            $encephalitis_deaths19m = $this->input->post('encephalitis_deaths19m');
            $encephalitis_deaths19f = $this->input->post('encephalitis_deaths19f');

            $mening_crypto_hos5m = $this->input->post('mening_crypto_hos5m');
            $mening_crypto_hos5f = $this->input->post('mening_crypto_hos5f');
            $mening_crypto_hos19m = $this->input->post('mening_crypto_hos19m');
            $mening_crypto_hos19f = $this->input->post('mening_crypto_hos19f');
            $mening_crypto_deaths5m = $this->input->post('mening_crypto_deaths5m');
            $mening_crypto_deaths5f = $this->input->post('mening_crypto_deaths5f');
            $mening_crypto_deaths19m = $this->input->post('mening_crypto_deaths19m');
            $mening_crypto_deaths19f = $this->input->post('mening_crypto_deaths19f');

            $skin_hos5m = $this->input->post('skin_hos5m');
            $skin_hos5f = $this->input->post('skin_hos5f');
            $skin_hos19m = $this->input->post('skin_hos19m');
            $skin_hos19f = $this->input->post('skin_hos19f');
            $skin_deaths5m = $this->input->post('skin_deaths5m');
            $skin_deaths5f = $this->input->post('skin_deaths5f');
            $skin_deaths19m = $this->input->post('skin_deaths19m');
            $skin_deaths19f = $this->input->post('skin_deaths19f');

            $diarr_chronic_hos5m = $this->input->post('diarr_chronic_hos5m');
            $diarr_chronic_hos5f = $this->input->post('diarr_chronic_hos5f');
            $diarr_chronic_hos19m = $this->input->post('diarr_chronic_hos19m');
            $diarr_chronic_hos19f = $this->input->post('diarr_chronic_hos19f');
            $diarr_chronic_deaths5m = $this->input->post('diarr_chronic_deaths5m');
            $diarr_chronic_deaths5f = $this->input->post('diarr_chronic_deaths5f');
            $diarr_chronic_deaths19m = $this->input->post('diarr_chronic_deaths19m');
            $diarr_chronic_deaths19f = $this->input->post('diarr_chronic_deaths19f');

            $hiv_hos5m = $this->input->post('hiv_hos5m');
            $hiv_hos5f = $this->input->post('hiv_hos5f');
            $hiv_hos19m = $this->input->post('hiv_hos19m');
            $hiv_hos19f = $this->input->post('hiv_hos19f');
            $hiv_deaths5m = $this->input->post('hiv_deaths5m');
            $hiv_deaths5f = $this->input->post('hiv_deaths5f');
            $hiv_deaths19m = $this->input->post('hiv_deaths19m');
            $hiv_deaths19f = $this->input->post('hiv_deaths19f');

            $trauma_hos5m = $this->input->post('trauma_hos5m');
            $trauma_hos5f = $this->input->post('trauma_hos5f');
            $trauma_hos19m = $this->input->post('trauma_hos19m');
            $trauma_hos19f = $this->input->post('trauma_hos19f');
            $trauma_deaths5m = $this->input->post('trauma_deaths5m');
            $trauma_deaths5f = $this->input->post('trauma_deaths5f');
            $trauma_deaths19m = $this->input->post('trauma_deaths19m');
            $trauma_deaths19f = $this->input->post('trauma_deaths19f');

            $spleen_hos5m = $this->input->post('spleen_hos5m');
            $spleen_hos5f = $this->input->post('spleen_hos5f');
            $spleen_hos19m = $this->input->post('spleen_hos19m');
            $spleen_hos19f = $this->input->post('spleen_hos19f');
            $spleen_deaths5m = $this->input->post('spleen_deaths5m');
            $spleen_deaths5f = $this->input->post('spleen_deaths5f');
            $spleen_deaths19m = $this->input->post('spleen_deaths19m');
            $spleen_deaths19f = $this->input->post('spleen_deaths19f');

            $frac_open_hos5m = $this->input->post('frac_open_hos5m');
            $frac_open_hos5f = $this->input->post('frac_open_hos5f');
            $frac_open_hos19m = $this->input->post('frac_open_hos19m');
            $frac_open_hos19f = $this->input->post('frac_open_hos19f');
            $frac_open_deaths5m = $this->input->post('frac_open_deaths5m');
            $frac_open_deaths5f = $this->input->post('frac_open_deaths5f');
            $frac_open_deaths19m = $this->input->post('frac_open_deaths19m');
            $frac_open_deaths19f = $this->input->post('frac_open_deaths19f');

            $frac_int_hos5m = $this->input->post('frac_int_hos5m');
            $frac_int_hos5f = $this->input->post('frac_int_hos5f');
            $frac_int_hos19m = $this->input->post('frac_int_hos19m');
            $frac_int_hos19f = $this->input->post('frac_int_hos19f');
            $frac_int_deaths5m = $this->input->post('frac_int_deaths5m');
            $frac_int_deaths5f = $this->input->post('frac_int_deaths5f');
            $frac_int_deaths19m = $this->input->post('frac_int_deaths19m');
            $frac_int_deaths19f = $this->input->post('frac_int_deaths19f');

            $trauma_other_hos5m = $this->input->post('trauma_other_hos5m');
            $trauma_other_hos5f = $this->input->post('trauma_other_hos5f');
            $trauma_other_hos19m = $this->input->post('trauma_other_hos19m');
            $trauma_other_hos19f = $this->input->post('trauma_other_hos19f');
            $trauma_other_deaths5m = $this->input->post('trauma_other_deaths5m');
            $trauma_other_deaths5f = $this->input->post('trauma_other_deaths5f');
            $trauma_other_deaths19m = $this->input->post('trauma_other_deaths19m');
            $trauma_other_deaths19f = $this->input->post('trauma_other_deaths19f');

            $burns_hos5m = $this->input->post('burns_hos5m');
            $burns_hos5f = $this->input->post('burns_hos5f');
            $burns_hos19m = $this->input->post('burns_hos19m');
            $burns_hos19f = $this->input->post('burns_hos19f');
            $burns_deaths5m = $this->input->post('burns_deaths5m');
            $burns_deaths5f = $this->input->post('burns_deaths5f');
            $burns_deaths19m = $this->input->post('burns_deaths19m');
            $burns_deaths19f = $this->input->post('burns_deaths19f');

            $hepatitis_hos5m = $this->input->post('hepatitis_hos5m');
            $hepatitis_hos5f = $this->input->post('hepatitis_hos5f');
            $hepatitis_hos19m = $this->input->post('hepatitis_hos19m');
            $hepatitis_hos19f = $this->input->post('hepatitis_hos19f');
            $hepatitis_deaths5m = $this->input->post('hepatitis_deaths5m');
            $hepatitis_deaths5f = $this->input->post('hepatitis_deaths5f');
            $hepatitis_deaths19m = $this->input->post('hepatitis_deaths19m');
            $hepatitis_deaths19f = $this->input->post('hepatitis_deaths19f');

            $cirrhosis_hos5m = $this->input->post('cirrhosis_hos5m');
            $cirrhosis_hos5f = $this->input->post('cirrhosis_hos5f');
            $cirrhosis_hos19m = $this->input->post('cirrhosis_hos19m');
            $cirrhosis_hos19f = $this->input->post('cirrhosis_hos19f');
            $cirrhosis_deaths5m = $this->input->post('cirrhosis_deaths5m');
            $cirrhosis_deaths5f = $this->input->post('cirrhosis_deaths5f');
            $cirrhosis_deaths19m = $this->input->post('cirrhosis_deaths19m');
            $cirrhosis_deaths19f = $this->input->post('cirrhosis_deaths19f');

            $digestive_hos5m = $this->input->post('digestive_hos5m');
            $digestive_hos5f = $this->input->post('digestive_hos5f');
            $digestive_hos19m = $this->input->post('digestive_hos19m');
            $digestive_hos19f = $this->input->post('digestive_hos19f');
            $digestive_deaths5m = $this->input->post('digestive_deaths5m');
            $digestive_deaths5f = $this->input->post('digestive_deaths5f');
            $digestive_deaths19m = $this->input->post('digestive_deaths19m');
            $digestive_deaths19f = $this->input->post('digestive_deaths19f');

            $gastritis_hos5m = $this->input->post('gastritis_hos5m');
            $gastritis_hos5f = $this->input->post('gastritis_hos5f');
            $gastritis_hos19m = $this->input->post('gastritis_hos19m');
            $gastritis_hos19f = $this->input->post('gastritis_hos19f');
            $gastritis_deaths5m = $this->input->post('gastritis_deaths5m');
            $gastritis_deaths5f = $this->input->post('gastritis_deaths5f');
            $gastritis_deaths19m = $this->input->post('gastritis_deaths19m');
            $gastritis_deaths19f = $this->input->post('gastritis_deaths19f');

            $ulcer_hos5m = $this->input->post('ulcer_hos5m');
            $ulcer_hos5f = $this->input->post('ulcer_hos5f');
            $ulcer_hos19m = $this->input->post('ulcer_hos19m');
            $ulcer_hos19f = $this->input->post('ulcer_hos19f');
            $ulcer_deaths5m = $this->input->post('ulcer_deaths5m');
            $ulcer_deaths5f = $this->input->post('ulcer_deaths5f');
            $ulcer_deaths19m = $this->input->post('ulcer_deaths19m');
            $ulcer_deaths19f = $this->input->post('ulcer_deaths19f');

            $appendi_hos5m = $this->input->post('appendi_hos5m');
            $appendi_hos5f = $this->input->post('appendi_hos5f');
            $appendi_hos19m = $this->input->post('appendi_hos19m');
            $appendi_hos19f = $this->input->post('appendi_hos19f');
            $appendi_deaths5m = $this->input->post('appendi_deaths5m');
            $appendi_deaths5f = $this->input->post('appendi_deaths5f');
            $appendi_deaths19m = $this->input->post('appendi_deaths19m');
            $appendi_deaths19f = $this->input->post('appendi_deaths19f');

            $hernia_hos5m = $this->input->post('hernia_hos5m');
            $hernia_hos5f = $this->input->post('hernia_hos5f');
            $hernia_hos19m = $this->input->post('hernia_hos19m');
            $hernia_hos19f = $this->input->post('hernia_hos19f');
            $hernia_deaths5m = $this->input->post('hernia_deaths5m');
            $hernia_deaths5f = $this->input->post('hernia_deaths5f');
            $hernia_deaths19m = $this->input->post('hernia_deaths19m');
            $hernia_deaths19f = $this->input->post('hernia_deaths19f');

            $peritonitis_hos5m = $this->input->post('peritonitis_hos5m');
            $peritonitis_hos5f = $this->input->post('peritonitis_hos5f');
            $peritonitis_hos19m = $this->input->post('peritonitis_hos19m');
            $peritonitis_hos19f = $this->input->post('peritonitis_hos19f');
            $peritonitis_deaths5m = $this->input->post('peritonitis_deaths5m');
            $peritonitis_deaths5f = $this->input->post('peritonitis_deaths5f');
            $peritonitis_deaths19m = $this->input->post('peritonitis_deaths19m');
            $peritonitis_deaths19f = $this->input->post('peritonitis_deaths19f');

            $intestinal_hos5m = $this->input->post('intestinal_hos5m');
            $intestinal_hos5f = $this->input->post('intestinal_hos5f');
            $intestinal_hos19m = $this->input->post('intestinal_hos19m');
            $intestinal_hos19f = $this->input->post('intestinal_hos19f');
            $intestinal_deaths5m = $this->input->post('intestinal_deaths5m');
            $intestinal_deaths5f = $this->input->post('intestinal_deaths5f');
            $intestinal_deaths19m = $this->input->post('intestinal_deaths19m');
            $intestinal_deaths19f = $this->input->post('intestinal_deaths19f');

            $urinary_hos5m = $this->input->post('urinary_hos5m');
            $urinary_hos5f = $this->input->post('urinary_hos5f');
            $urinary_hos19m = $this->input->post('urinary_hos19m');
            $urinary_hos19f = $this->input->post('urinary_hos19f');
            $urinary_deaths5m = $this->input->post('urinary_deaths5m');
            $urinary_deaths5f = $this->input->post('urinary_deaths5f');
            $urinary_deaths19m = $this->input->post('urinary_deaths19m');
            $urinary_deaths19f = $this->input->post('urinary_deaths19f');

            $bone_inf_hos5m = $this->input->post('bone_inf_hos5m');
            $bone_inf_hos5f = $this->input->post('bone_inf_hos5f');
            $bone_inf_hos19m = $this->input->post('bone_inf_hos19m');
            $bone_inf_hos19f = $this->input->post('bone_inf_hos19f');
            $bone_inf_deaths5m = $this->input->post('bone_inf_deaths5m');
            $bone_inf_deaths5f = $this->input->post('bone_inf_deaths5f');
            $bone_inf_deaths19m = $this->input->post('bone_inf_deaths19m');
            $bone_inf_deaths19f = $this->input->post('bone_inf_deaths19f');

            $bone_other_hos5m = $this->input->post('bone_other_hos5m');
            $bone_other_hos5f = $this->input->post('bone_other_hos5f');
            $bone_other_hos19m = $this->input->post('bone_other_hos19m');
            $bone_other_hos19f = $this->input->post('bone_other_hos19f');
            $bone_other_deaths5m = $this->input->post('bone_other_deaths5m');
            $bone_other_deaths5f = $this->input->post('bone_other_deaths5f');
            $bone_other_deaths19m = $this->input->post('bone_other_deaths19m');
            $bone_other_deaths19f = $this->input->post('bone_other_deaths19f');

            $acute_hos5m = $this->input->post('acute_hos5m');
            $acute_hos5f = $this->input->post('acute_hos5f');
            $acute_hos19m = $this->input->post('acute_hos19m');
            $acute_hos19f = $this->input->post('acute_hos19f');
            $acute_deaths5m = $this->input->post('acute_deaths5m');
            $acute_deaths5f = $this->input->post('acute_deaths5f');
            $acute_deaths19m = $this->input->post('acute_deaths19m');
            $acute_deaths19f = $this->input->post('acute_deaths19f');

            $gyneco_hos19f = $this->input->post('gyneco_hos19f');
            $gyneco_deaths19f = $this->input->post('gyneco_deaths19f');

            $mastoditis_hos5m = $this->input->post('mastoditis_hos5m');
            $mastoditis_hos5f = $this->input->post('mastoditis_hos5f');
            $mastoditis_hos19m = $this->input->post('mastoditis_hos19m');
            $mastoditis_hos19f = $this->input->post('mastoditis_hos19f');
            $mastoditis_deaths5m = $this->input->post('mastoditis_deaths5m');
            $mastoditis_deaths5f = $this->input->post('mastoditis_deaths5f');
            $mastoditis_deaths19m = $this->input->post('mastoditis_deaths19m');
            $mastoditis_deaths19f = $this->input->post('mastoditis_deaths19f');

            $tetanus_hos5m = $this->input->post('tetanus_hos5m');
            $tetanus_hos5f = $this->input->post('tetanus_hos5f');
            $tetanus_hos19m = $this->input->post('tetanus_hos19m');
            $tetanus_hos19f = $this->input->post('tetanus_hos19f');
            $tetanus_deaths5m = $this->input->post('tetanus_deaths5m');
            $tetanus_deaths5f = $this->input->post('tetanus_deaths5f');
            $tetanus_deaths19m = $this->input->post('tetanus_deaths19m');
            $tetanus_deaths19f = $this->input->post('tetanus_deaths19f');

            $cancer_hos5m = $this->input->post('cancer_hos5m');
            $cancer_hos5f = $this->input->post('cancer_hos5f');
            $cancer_hos19m = $this->input->post('cancer_hos19m');
            $cancer_hos19f = $this->input->post('cancer_hos19f');
            $cancer_deaths5m = $this->input->post('cancer_deaths5m');
            $cancer_deaths5f = $this->input->post('cancer_deaths5f');
            $cancer_deaths19m = $this->input->post('cancer_deaths19m');
            $cancer_deaths19f = $this->input->post('cancer_deaths19f');

            $this->pediatrics_model->update_data1(
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
            );

            $this->pediatrics_model->update_data2(
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
            );

            $this->session->unset_userdata('update_date');
            redirect('home', 'refresh');
        } else {
            $data['table1'] = $this->pediatrics_model->show_table1();
            $data['table2'] = $this->pediatrics_model->show_table2();
            $this->load->view('pediatrics_update_view', $data);
        }
    }
}
