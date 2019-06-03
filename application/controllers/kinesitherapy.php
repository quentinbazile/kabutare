<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kinesitherapy extends CI_Controller
{
    public function index()
    {
        $this->load->model('kinesitherapy_model');
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
          if ($this->home_model->check_service('kinesitherapy')) {
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

            $physical_therapy = $this->input->post('physical_therapy');
            $audiology = $this->input->post('audiology');
            $speech_therapy = $this->input->post('speech_therapy');
            $physical_therapy_hos = $this->input->post('physical_therapy_hos');
            $audiology_hos = $this->input->post('audiology_hos');
            $speech_therapy_hos = $this->input->post('speech_therapy_hos');

            $this->kinesitherapy_model->new_report();

            $num_rapport = $this->kinesitherapy_model->num_rapport()->num_rapport;

            $this->kinesitherapy_model->fetch_data1(
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
            $this->kinesitherapy_model->fetch_data2(
              $physical_therapy,
              $audiology,
              $speech_therapy,
              $physical_therapy_hos,
              $audiology_hos,
              $speech_therapy_hos,
              $num_rapport
                );
            $this->session->unset_userdata('add_date');
            redirect('home', 'refresh');
        } else {
            $this->load->view('kinesitherapy_add_view');
        }
    }
}
