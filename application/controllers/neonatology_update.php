<?php
defined('BASEPATH') or exit('No direct script access allowed');

class neonatology_update extends CI_Controller
{
    public function index()
    {
        $this->load->model('neonatology_model');
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
          if ($this->home_model->check_service('neonatology')) {
            $this->fetch();
          } else {
              $this->logout();
              redirect('login', 'refresh');
          }
        } else {
            redirect('login', 'refresh');
        }
    }

    public function logout(){
      $user_data = $this->session->all_userdata();
      foreach ($user_data as $key => $value){
        $this->session->unset_userdata($key);
      }
      $this->session->sess_destroy();
      redirect('login', 'refresh');
    }

    public function fetch()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('n_beds', '"n_beds"', 'numeric');
        if ($this->form_validation->run()) {

            $n_beds = $this->input->post('n_beds');
            $n_present_start = $this->input->post('n_present_start');
            $n_admissions = $this->input->post('n_admissions');
            $n_referred = $this->input->post('n_referred');
            $n_no_referred = $this->input->post('n_no_referred');
            $n_discharges = $this->input->post('n_discharges');
            $n_authorized = $this->input->post('n_authorized');
            $n_abandoned = $this->input->post('n_abandoned');
            $n_deaths = $this->input->post('n_deaths');
            $n_dis_referred = $this->input->post('n_dis_referred');
            $n_counter = $this->input->post('n_counter');
            $n_present_end = $this->input->post('n_present_end');
            $n_total = $this->input->post('n_total');
            $n_actual = $this->input->post('n_actual');

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

            $low_birth = $this->input->post('low_birth');
            $newborns = $this->input->post('newborns');
            $kmc_deaths = $this->input->post('kmc_deaths');
            $kmc_standard = $this->input->post('kmc_standard');

            $asphyxia_ad7m = $this->input->post('asphyxia_ad7m');
            $asphyxia_ad7f = $this->input->post('asphyxia_ad7f');
            $asphyxia_ad8m = $this->input->post('asphyxia_ad8m');
            $asphyxia_ad8f = $this->input->post('asphyxia_ad8f');
            $asphyxia_d7m = $this->input->post('asphyxia_d7m');
            $asphyxia_d7f = $this->input->post('asphyxia_d7f');
            $asphyxia_d8m = $this->input->post('asphyxia_d8m');
            $asphyxia_d8f = $this->input->post('asphyxia_d8f');

            $prematurity_ad7m = $this->input->post('prematurity_ad7m');
            $prematurity_ad7f = $this->input->post('prematurity_ad7f');
            $prematurity_ad8m = $this->input->post('prematurity_ad8m');
            $prematurity_ad8f = $this->input->post('prematurity_ad8f');
            $prematurity_d7m = $this->input->post('prematurity_d7m');
            $prematurity_d7f = $this->input->post('prematurity_d7f');
            $prematurity_d8m = $this->input->post('prematurity_d8m');
            $prematurity_d8f = $this->input->post('prematurity_d8f');

            $congenital_ad7m = $this->input->post('congenital_ad7m');
            $congenital_ad7f = $this->input->post('congenital_ad7f');
            $congenital_ad8m = $this->input->post('congenital_ad8m');
            $congenital_ad8f = $this->input->post('congenital_ad8f');
            $congenital_d7m = $this->input->post('congenital_d7m');
            $congenital_d7f = $this->input->post('congenital_d7f');
            $congenital_d8m = $this->input->post('congenital_d8m');
            $congenital_d8f = $this->input->post('congenital_d8f');

            $pneumonia_ad7m = $this->input->post('pneumonia_ad7m');
            $pneumonia_ad7f = $this->input->post('pneumonia_ad7f');
            $pneumonia_ad8m = $this->input->post('pneumonia_ad8m');
            $pneumonia_ad8f = $this->input->post('pneumonia_ad8f');
            $pneumonia_d7m = $this->input->post('pneumonia_d7m');
            $pneumonia_d7f = $this->input->post('pneumonia_d7f');
            $pneumonia_d8m = $this->input->post('pneumonia_d8m');
            $pneumonia_d8f = $this->input->post('pneumonia_d8f');

            $meningitis_ad7m = $this->input->post('meningitis_ad7m');
            $meningitis_ad7f = $this->input->post('meningitis_ad7f');
            $meningitis_ad8m = $this->input->post('meningitis_ad8m');
            $meningitis_ad8f = $this->input->post('meningitis_ad8f');
            $meningitis_d7m = $this->input->post('meningitis_d7m');
            $meningitis_d7f = $this->input->post('meningitis_d7f');
            $meningitis_d8m = $this->input->post('meningitis_d8m');
            $meningitis_d8f = $this->input->post('meningitis_d8f');

            $skin_ad7m = $this->input->post('skin_ad7m');
            $skin_ad7f = $this->input->post('skin_ad7f');
            $skin_ad8m = $this->input->post('skin_ad8m');
            $skin_ad8f = $this->input->post('skin_ad8f');
            $skin_d7m = $this->input->post('skin_d7m');
            $skin_d7f = $this->input->post('skin_d7f');
            $skin_d8m = $this->input->post('skin_d8m');
            $skin_d8f = $this->input->post('skin_d8f');

            $sepsis_ad7m = $this->input->post('sepsis_ad7m');
            $sepsis_ad7f = $this->input->post('sepsis_ad7f');
            $sepsis_ad8m = $this->input->post('sepsis_ad8m');
            $sepsis_ad8f = $this->input->post('sepsis_ad8f');
            $sepsis_d7m = $this->input->post('sepsis_d7m');
            $sepsis_d7f = $this->input->post('sepsis_d7f');
            $sepsis_d8m = $this->input->post('sepsis_d8m');
            $sepsis_d8f = $this->input->post('sepsis_d8f');

            $tetanus_ad7m = $this->input->post('tetanus_ad7m');
            $tetanus_ad7f = $this->input->post('tetanus_ad7f');
            $tetanus_ad8m = $this->input->post('tetanus_ad8m');
            $tetanus_ad8f = $this->input->post('tetanus_ad8f');
            $tetanus_d7m = $this->input->post('tetanus_d7m');
            $tetanus_d7f = $this->input->post('tetanus_d7f');
            $tetanus_d8m = $this->input->post('tetanus_d8m');
            $tetanus_d8f = $this->input->post('tetanus_d8f');

            $others_neonatal_ad7m = $this->input->post('others_neonatal_ad7m');
            $others_neonatal_ad7f = $this->input->post('others_neonatal_ad7f');
            $others_neonatal_ad8m = $this->input->post('others_neonatal_ad8m');
            $others_neonatal_ad8f = $this->input->post('others_neonatal_ad8f');
            $others_neonatal_d7m = $this->input->post('others_neonatal_d7m');
            $others_neonatal_d7f = $this->input->post('others_neonatal_d7f');
            $others_neonatal_d8m = $this->input->post('others_neonatal_d8m');
            $others_neonatal_d8f = $this->input->post('others_neonatal_d8f');

            $others_causes_ad7m = $this->input->post('others_causes_ad7m');
            $others_causes_ad7f = $this->input->post('others_causes_ad7f');
            $others_causes_ad8m = $this->input->post('others_causes_ad8m');
            $others_causes_ad8f = $this->input->post('others_causes_ad8f');
            $others_causes_d7m = $this->input->post('others_causes_d7m');
            $others_causes_d7f = $this->input->post('others_causes_d7f');
            $others_causes_d8m = $this->input->post('others_causes_d8m');
            $others_causes_d8f = $this->input->post('others_causes_d8f');

            $total_born_in_ad7m = $this->input->post('total_born_in_ad7m');
            $total_born_in_ad7f = $this->input->post('total_born_in_ad7f');
            $total_born_in_ad8m = $this->input->post('total_born_in_ad8m');
            $total_born_in_ad8f = $this->input->post('total_born_in_ad8f');
            $total_born_in_d7m = $this->input->post('total_born_in_d7m');
            $total_born_in_d7f = $this->input->post('total_born_in_d7f');
            $total_born_in_d8m = $this->input->post('total_born_in_d8m');
            $total_born_in_d8f = $this->input->post('total_born_in_d8f');

            $total_born_out_ad7m = $this->input->post('total_born_out_ad7m');
            $total_born_out_ad7f = $this->input->post('total_born_out_ad7f');
            $total_born_out_ad8m = $this->input->post('total_born_out_ad8m');
            $total_born_out_ad8f = $this->input->post('total_born_out_ad8f');
            $total_born_out_d7m = $this->input->post('total_born_out_d7m');
            $total_born_out_d7f = $this->input->post('total_born_out_d7f');
            $total_born_out_d8m = $this->input->post('total_born_out_d8m');
            $total_born_out_d8f = $this->input->post('total_born_out_d8f');

            $hypothermia = $this->input->post('hypothermia');
            $risk_follow_up = $this->input->post('risk_follow_up');
            $one_follow_up = $this->input->post('one_follow_up');
            $deaths_24 = $this->input->post('deaths_24');

            $this->neonatology_model->update_data1(
              $n_beds,
              $n_present_start,
              $n_admissions,
              $n_referred,
              $n_no_referred,
              $n_discharges,
              $n_authorized,
              $n_abandoned,
              $n_deaths,
              $n_dis_referred,
              $n_counter,
              $n_present_end,
              $n_total,
              $n_actual
            );
            $this->neonatology_model->update_data2(
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
            $this->neonatology_model->update_data3(
              $low_birth,
              $newborns,
              $kmc_deaths,
              $kmc_standard
            );
            $this->neonatology_model->update_data4(
              $asphyxia_ad7m,
              $asphyxia_ad7f,
              $asphyxia_ad8m,
              $asphyxia_ad8f,
              $asphyxia_d7m,
              $asphyxia_d7f,
              $asphyxia_d8m,
              $asphyxia_d8f,

              $prematurity_ad7m,
              $prematurity_ad7f,
              $prematurity_ad8m,
              $prematurity_ad8f,
              $prematurity_d7m,
              $prematurity_d7f,
              $prematurity_d8m,
              $prematurity_d8f,

              $congenital_ad7m,
              $congenital_ad7f,
              $congenital_ad8m,
              $congenital_ad8f,
              $congenital_d7m,
              $congenital_d7f,
              $congenital_d8m,
              $congenital_d8f,

              $pneumonia_ad7m,
              $pneumonia_ad7f,
              $pneumonia_ad8m,
              $pneumonia_ad8f,
              $pneumonia_d7m,
              $pneumonia_d7f,
              $pneumonia_d8m,
              $pneumonia_d8f,

              $meningitis_ad7m,
              $meningitis_ad7f,
              $meningitis_ad8m,
              $meningitis_ad8f,
              $meningitis_d7m,
              $meningitis_d7f,
              $meningitis_d8m,
              $meningitis_d8f,

              $skin_ad7m,
              $skin_ad7f,
              $skin_ad8m,
              $skin_ad8f,
              $skin_d7m,
              $skin_d7f,
              $skin_d8m,
              $skin_d8f,

              $sepsis_ad7m,
              $sepsis_ad7f,
              $sepsis_ad8m,
              $sepsis_ad8f,
              $sepsis_d7m,
              $sepsis_d7f,
              $sepsis_d8m,
              $sepsis_d8f,

              $tetanus_ad7m,
              $tetanus_ad7f,
              $tetanus_ad8m,
              $tetanus_ad8f,
              $tetanus_d7m,
              $tetanus_d7f,
              $tetanus_d8m,
              $tetanus_d8f,

              $others_neonatal_ad7m,
              $others_neonatal_ad7f,
              $others_neonatal_ad8m,
              $others_neonatal_ad8f,
              $others_neonatal_d7m,
              $others_neonatal_d7f,
              $others_neonatal_d8m,
              $others_neonatal_d8f,

              $others_causes_ad7m,
              $others_causes_ad7f,
              $others_causes_ad8m,
              $others_causes_ad8f,
              $others_causes_d7m,
              $others_causes_d7f,
              $others_causes_d8m,
              $others_causes_d8f,

              $total_born_in_ad7m,
              $total_born_in_ad7f,
              $total_born_in_ad8m,
              $total_born_in_ad8f,
              $total_born_in_d7m,
              $total_born_in_d7f,
              $total_born_in_d8m,
              $total_born_in_d8f,

              $total_born_out_ad7m,
              $total_born_out_ad7f,
              $total_born_out_ad8m,
              $total_born_out_ad8f,
              $total_born_out_d7m,
              $total_born_out_d7f,
              $total_born_out_d8m,
              $total_born_out_d8f,

              $hypothermia,
              $risk_follow_up,
              $one_follow_up,
              $deaths_24
            );
            $this->session->unset_userdata('update_date');
            redirect('home', 'refresh');
        } else {
          $data['table1'] = $this->neonatology_model->show_table1();
          $data['table2'] = $this->neonatology_model->show_table2();
          $data['table3'] = $this->neonatology_model->show_table3();
          $data['table4'] = $this->neonatology_model->show_table4();
          $this->load->view('neonatology_update_view', $data);
        }
    }
}
