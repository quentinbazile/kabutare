<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pregnant_woman extends CI_Controller
{
    public function index()
    {
        $this->load->model('pregnant_woman_model');
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
          if ($this->home_model->check_service('pregnant_woman')) {
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
        $this->form_validation->set_rules('nc5m', '"nc5m"', 'numeric');
        if ($this->form_validation->run()) {
            $nc5m = $this->input->post('nc5m');
            $nc5f = $this->input->post('nc5f');
            $nc19m = $this->input->post('nc19m');
            $nc19f = $this->input->post('nc19f');
            $nc20m = $this->input->post('nc20m');
            $nc20f = $this->input->post('nc20f');

            $oc5m = $this->input->post('oc5m');
            $oc5f = $this->input->post('oc5f');
            $oc19m = $this->input->post('oc19m');
            $oc19f = $this->input->post('oc19f');
            $oc20m = $this->input->post('oc20m');
            $oc20f = $this->input->post('oc20f');

            $insured = $this->input->post('insured');
            $nc_non_paying = $this->input->post('nc_non_paying');
            $nc_indigent = $this->input->post('nc_indigent');

            $other_levels = $this->input->post('other_levels');
            $counter_received = $this->input->post('counter_received');

            $nc_catch = $this->input->post('nc_catch');
            $nc = $this->input->post('nc');
            $international = $this->input->post('international');

            $complications_opd19 = $this->input->post('complications_opd19');
            $complications_opd20 = $this->input->post('complications_opd20');
            $ectopic_opd19 = $this->input->post('ectopic_opd19');
            $ectopic_opd20 = $this->input->post('ectopic_opd20');
            $antepartum_opd19 = $this->input->post('antepartum_opd19');
            $antepartum_opd20 = $this->input->post('antepartum_opd20');
            $postpartum_opd19 = $this->input->post('postpartum_opd19');
            $postpartum_opd20 = $this->input->post('postpartum_opd20');
            $eclampsia_opd19 = $this->input->post('eclampsia_opd19');
            $eclampsia_opd20 = $this->input->post('eclampsia_opd20');
            $postc_opd19 = $this->input->post('postc_opd19');
            $postc_opd20 = $this->input->post('postc_opd20');
            $postpartum_other_opd19 = $this->input->post('postpartum_other_opd19');
            $postpartum_other_opd20 = $this->input->post('postpartum_other_opd20');
            $prolonged_opd19 = $this->input->post('prolonged_opd19');
            $prolonged_opd20 = $this->input->post('prolonged_opd20');
            $uterine_rup_opd19 = $this->input->post('uterine_rup_opd19');
            $uterine_rup_opd20 = $this->input->post('uterine_rup_opd20');
            $other_direct_obste_opd19 = $this->input->post('other_direct_obste_opd19');
            $other_direct_obste_opd20 = $this->input->post('other_direct_obste_opd20');
            $anemia_sev_opd19 = $this->input->post('anemia_sev_opd19');
            $anemia_sev_opd20 = $this->input->post('anemia_sev_opd20');
            $malaria_sim_opd19 = $this->input->post('malaria_sim_opd19');
            $malaria_sim_opd20 = $this->input->post('malaria_sim_opd20');
            $malaria_dig_opd19 = $this->input->post('malaria_dig_opd19');
            $malaria_dig_opd20 = $this->input->post('malaria_dig_opd20');
            $malaria_sev_opd19 = $this->input->post('malaria_sev_opd19');
            $malaria_sev_opd20 = $this->input->post('malaria_sev_opd20');
            $hiv_opd19 = $this->input->post('hiv_opd19');
            $hiv_opd20 = $this->input->post('hiv_opd20');
            $pulmonary_opd19 = $this->input->post('pulmonary_opd19');
            $pulmonary_opd20 = $this->input->post('pulmonary_opd20');
            $pneumonia_opd19 = $this->input->post('pneumonia_opd19');
            $pneumonia_opd20 = $this->input->post('pneumonia_opd20');
            $other_ind_obstet_opd19 = $this->input->post('other_ind_obstet_opd19');
            $other_ind_obstet_opd20 = $this->input->post('other_ind_obstet_opd20');

            $lung = $this->input->post('lung');
            $bones = $this->input->post('bones');
            $abdomen_without = $this->input->post('abdomen_without');
            $abdomen_with = $this->input->post('abdomen_with');
            $other_xray = $this->input->post('other_xray');
            $gastroscopy = $this->input->post('gastroscopy');
            $ultrasound = $this->input->post('ultrasound');
            $ecg = $this->input->post('ecg');
            $other_medical_img = $this->input->post('other_medical_img');

            $this->pregnant_woman_model->new_report();

            $num_rapport = $this->pregnant_woman_model->num_rapport()->num_rapport;

            $this->pregnant_woman_model->fetch_data1(
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
            );

            $this->pregnant_woman_model->fetch_data2(
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
            );

            $this->pregnant_woman_model->fetch_data3(
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
            );

            $this->session->unset_userdata('add_date');
            redirect('home', 'refresh');
        } else {
            $this->load->view('pregnant_woman_add_view');
        }
    }
}
