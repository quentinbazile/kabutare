<?php
defined('BASEPATH') or exit('No direct script access allowed');

class nut_rehab_update extends CI_Controller
{
    public function index()
    {
        $this->load->model('nut_rehab_model');
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

            $hosp_1m = $this->input->post('hosp_1m');
            $hosp_1f = $this->input->post('hosp_1f');

            $deaths_1m = $this->input->post('deaths_1m');
            $deaths_1f = $this->input->post('deaths_1f');

            $insured_dis = $this->input->post('insured_dis');
            $no_paying_dis = $this->input->post('no_paying_dis');
            $no_paying_ind = $this->input->post('no_paying_ind');

            $road_acc_ad = $this->input->post('road_acc_ad');
            $road_acc_deaths = $this->input->post('road_acc_deaths');
            $natural_disa_ad = $this->input->post('natural_disa_ad');
            $natural_disa_deaths = $this->input->post('natural_disa_deaths');
            $work_inj_ad = $this->input->post('work_inj_ad');
            $work_inj_deaths = $this->input->post('work_inj_deaths');

            $screened_6 = $this->input->post('screened_6');
            $screened_7 = $this->input->post('screened_7');
            $screened_2 = $this->input->post('screened_2');
            $screened_5 = $this->input->post('screened_5');
            $screened_15 = $this->input->post('screened_15');

            $malnourished_6 = $this->input->post('malnourished_6');
            $malnourished_7 = $this->input->post('malnourished_7');
            $malnourished_2 = $this->input->post('malnourished_2');
            $malnourished_5 = $this->input->post('malnourished_5');
            $malnourished_15 = $this->input->post('malnourished_15');

            $acute_sev_6 = $this->input->post('acute_sev_6');
            $acute_sev_7 = $this->input->post('acute_sev_7');
            $acute_sev_2 = $this->input->post('acute_sev_2');
            $acute_sev_5 = $this->input->post('acute_sev_5');
            $acute_sev_15 = $this->input->post('acute_sev_15');

            $acute_mod_6 = $this->input->post('acute_mod_6');
            $acute_mod_7 = $this->input->post('acute_mod_7');
            $acute_mod_2 = $this->input->post('acute_mod_2');
            $acute_mod_5 = $this->input->post('acute_mod_5');
            $acute_mod_15 = $this->input->post('acute_mod_15');

            $under_sev_6 = $this->input->post('under_sev_6');
            $under_sev_7 = $this->input->post('under_sev_7');
            $under_sev_2 = $this->input->post('under_sev_2');
            $under_sev_5 = $this->input->post('under_sev_5');

            $under_mod_6 = $this->input->post('under_mod_6');
            $under_mod_7 = $this->input->post('under_mod_7');
            $under_mod_2 = $this->input->post('under_mod_2');
            $under_mod_5 = $this->input->post('under_mod_5');

            $chronic_sev_6 = $this->input->post('chronic_sev_6');
            $chronic_sev_7 = $this->input->post('chronic_sev_7');
            $chronic_sev_2 = $this->input->post('chronic_sev_2');
            $chronic_sev_5 = $this->input->post('chronic_sev_5');

            $chronic_mod_6 = $this->input->post('chronic_mod_6');
            $chronic_mod_7 = $this->input->post('chronic_mod_7');
            $chronic_mod_2 = $this->input->post('chronic_mod_2');
            $chronic_mod_5 = $this->input->post('chronic_mod_5');

            $outpatient_6 = $this->input->post('outpatient_6');
            $outpatient_7 = $this->input->post('outpatient_7');
            $outpatient_2 = $this->input->post('outpatient_2');
            $outpatient_5 = $this->input->post('outpatient_5');
            $outpatient_15 = $this->input->post('outpatient_15');

            $inpatient_6 = $this->input->post('inpatient_6');
            $inpatient_7 = $this->input->post('inpatient_7');
            $inpatient_2 = $this->input->post('inpatient_2');
            $inpatient_5 = $this->input->post('inpatient_5');
            $inpatient_15 = $this->input->post('inpatient_15');

            $present_start_mod4 = $this->input->post('present_start_mod4');
            $present_start_mod5 = $this->input->post('present_start_mod5');
            $present_start_sev4 = $this->input->post('present_start_sev4');
            $present_start_sev5 = $this->input->post('present_start_sev5');
            $present_start_pw = $this->input->post('present_start_pw');
            $present_start_lw = $this->input->post('present_start_lw');

            $nc_mod4 = $this->input->post('nc_mod4');
            $nc_mod5 = $this->input->post('nc_mod5');
            $nc_sev4 = $this->input->post('nc_sev4');
            $nc_sev5 = $this->input->post('nc_sev5');
            $nc_pw = $this->input->post('nc_pw');
            $nc_lw = $this->input->post('nc_lw');

            $relapsed_mod4 = $this->input->post('relapsed_mod4');
            $relapsed_mod5 = $this->input->post('relapsed_mod5');
            $relapsed_sev4 = $this->input->post('relapsed_sev4');
            $relapsed_sev5 = $this->input->post('relapsed_sev5');
            $relapsed_pw = $this->input->post('relapsed_pw');
            $relapsed_lw = $this->input->post('relapsed_lw');

            $cured_mod4 = $this->input->post('cured_mod4');
            $cured_mod5 = $this->input->post('cured_mod5');
            $cured_sev4 = $this->input->post('cured_sev4');
            $cured_sev5 = $this->input->post('cured_sev5');
            $cured_pw = $this->input->post('cured_pw');
            $cured_lw = $this->input->post('cured_lw');

            $referred_mod4 = $this->input->post('referred_mod4');
            $referred_mod5 = $this->input->post('referred_mod5');
            $referred_sev4 = $this->input->post('referred_sev4');
            $referred_sev5 = $this->input->post('referred_sev5');
            $referred_pw = $this->input->post('referred_pw');
            $referred_lw = $this->input->post('referred_lw');

            $abandoned_mod4 = $this->input->post('abandoned_mod4');
            $abandoned_mod5 = $this->input->post('abandoned_mod5');
            $abandoned_sev4 = $this->input->post('abandoned_sev4');
            $abandoned_sev5 = $this->input->post('abandoned_sev5');
            $abandoned_pw = $this->input->post('abandoned_pw');
            $abandoned_lw = $this->input->post('abandoned_lw');

            $died_mod4 = $this->input->post('died_mod4');
            $died_mod5 = $this->input->post('died_mod5');
            $died_sev4 = $this->input->post('died_sev4');
            $died_sev5 = $this->input->post('died_sev5');
            $died_pw = $this->input->post('died_pw');
            $died_lw = $this->input->post('died_lw');

            $present_end_mod4 = $this->input->post('present_end_mod4');
            $present_end_mod5 = $this->input->post('present_end_mod5');
            $present_end_sev4 = $this->input->post('present_end_sev4');
            $present_end_sev5 = $this->input->post('present_end_sev5');
            $present_end_pw = $this->input->post('present_end_pw');
            $present_end_lw = $this->input->post('present_end_lw');

            $this->nut_rehab_model->update_data1(
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
            );
            $this->nut_rehab_model->update_data2(
              $hosp_1m,
              $hosp_1f,

              $deaths_1m,
              $deaths_1f,

              $insured_dis,
              $no_paying_dis,
              $no_paying_ind,

              $road_acc_ad,
              $road_acc_deaths,
              $natural_disa_ad,
              $natural_disa_deaths,
              $work_inj_ad,
              $work_inj_deaths
            );
            $this->nut_rehab_model->update_data3(
              $screened_6,
              $screened_7,
              $screened_2,
              $screened_5,
              $screened_15,
              $malnourished_6,
              $malnourished_7,
              $malnourished_2,
              $malnourished_5,
              $malnourished_15,
              $acute_sev_6,
              $acute_sev_7,
              $acute_sev_2,
              $acute_sev_5,
              $acute_sev_15,
              $acute_mod_6,
              $acute_mod_7,
              $acute_mod_2,
              $acute_mod_5,
              $acute_mod_15,
              $under_sev_6,
              $under_sev_7,
              $under_sev_2,
              $under_sev_5,
              $under_mod_6,
              $under_mod_7,
              $under_mod_2,
              $under_mod_5,
              $chronic_sev_6,
              $chronic_sev_7,
              $chronic_sev_2,
              $chronic_sev_5,
              $chronic_mod_6,
              $chronic_mod_7,
              $chronic_mod_2,
              $chronic_mod_5,
              $outpatient_6,
              $outpatient_7,
              $outpatient_2,
              $outpatient_5,
              $outpatient_15,
              $inpatient_6,
              $inpatient_7,
              $inpatient_2,
              $inpatient_5,
              $inpatient_15
            );
            $this->nut_rehab_model->update_data4(
            $present_start_mod4,
            $present_start_mod5,
            $present_start_sev4,
            $present_start_sev5,
            $present_start_pw,
            $present_start_lw,
            $nc_mod4,
            $nc_mod5,
            $nc_sev4,
            $nc_sev5,
            $nc_pw,
            $nc_lw,
            $relapsed_mod4,
            $relapsed_mod5,
            $relapsed_sev4,
            $relapsed_sev5,
            $relapsed_pw,
            $relapsed_lw,
            $cured_mod4,
            $cured_mod5,
            $cured_sev4,
            $cured_sev5,
            $cured_pw,
            $cured_lw,
            $referred_mod4,
            $referred_mod5,
            $referred_sev4,
            $referred_sev5,
            $referred_pw,
            $referred_lw,
            $abandoned_mod4,
            $abandoned_mod5,
            $abandoned_sev4,
            $abandoned_sev5,
            $abandoned_pw,
            $abandoned_lw,
            $died_mod4,
            $died_mod5,
            $died_sev4,
            $died_sev5,
            $died_pw,
            $died_lw,
            $present_end_mod4,
            $present_end_mod5,
            $present_end_sev4,
            $present_end_sev5,
            $present_end_pw,
            $present_end_lw
            );
            $this->session->unset_userdata('update_date');
            redirect('home', 'refresh');
        } else {
            $data['table1'] = $this->nut_rehab_model->show_table1();
            $data['table2'] = $this->nut_rehab_model->show_table2();
            $data['table3'] = $this->nut_rehab_model->show_table3();
            $data['table4'] = $this->nut_rehab_model->show_table4();
            $this->load->view('nut_rehab_update_view',$data);
        }
    }
}
