<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mental_health extends CI_Controller
{
    public function index()
    {
        $this->load->model('mental_health_model');
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
          if ($this->home_model->check_service('mental_health')) {
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

            $follow_up = $this->input->post('follow_up');
            $higher_level = $this->input->post('higher_level');
            $hospitalized = $this->input->post('hospitalized');

            $anxiety_nc19m = $this->input->post('anxiety_nc19m');
            $anxiety_nc19f = $this->input->post('anxiety_nc19f');
            $anxiety_nc39m = $this->input->post('anxiety_nc39m');
            $anxiety_nc39f = $this->input->post('anxiety_nc39f');
            $anxiety_nc40m = $this->input->post('anxiety_nc40m');
            $anxiety_nc40f = $this->input->post('anxiety_nc40f');

            $anxiety_oc19m = $this->input->post('anxiety_oc19m');
            $anxiety_oc19f = $this->input->post('anxiety_oc19f');
            $anxiety_oc39m = $this->input->post('anxiety_oc39m');
            $anxiety_oc39f = $this->input->post('anxiety_oc39f');
            $anxiety_oc40m = $this->input->post('anxiety_oc40m');
            $anxiety_oc40f = $this->input->post('anxiety_oc40f');

            $stress_nc19m = $this->input->post('stress_nc19m');
            $stress_nc19f = $this->input->post('stress_nc19f');
            $stress_nc39m = $this->input->post('stress_nc39m');
            $stress_nc39f = $this->input->post('stress_nc39f');
            $stress_nc40m = $this->input->post('stress_nc40m');
            $stress_nc40f = $this->input->post('stress_nc40f');

            $stress_oc19m = $this->input->post('stress_oc19m');
            $stress_oc19f = $this->input->post('stress_oc19f');
            $stress_oc39m = $this->input->post('stress_oc39m');
            $stress_oc39f = $this->input->post('stress_oc39f');
            $stress_oc40m = $this->input->post('stress_oc40m');
            $stress_oc40f = $this->input->post('stress_oc40f');

            $schizo_nc19m = $this->input->post('schizo_nc19m');
            $schizo_nc19f = $this->input->post('schizo_nc19f');
            $schizo_nc39m = $this->input->post('schizo_nc39m');
            $schizo_nc39f = $this->input->post('schizo_nc39f');
            $schizo_nc40m = $this->input->post('schizo_nc40m');
            $schizo_nc40f = $this->input->post('schizo_nc40f');

            $schizo_oc19m = $this->input->post('schizo_oc19m');
            $schizo_oc19f = $this->input->post('schizo_oc19f');
            $schizo_oc39m = $this->input->post('schizo_oc39m');
            $schizo_oc39f = $this->input->post('schizo_oc39f');
            $schizo_oc40m = $this->input->post('schizo_oc40m');
            $schizo_oc40f = $this->input->post('schizo_oc40f');

            $soma_nc19m = $this->input->post('soma_nc19m');
            $soma_nc19f = $this->input->post('soma_nc19f');
            $soma_nc39m = $this->input->post('soma_nc39m');
            $soma_nc39f = $this->input->post('soma_nc39f');
            $soma_nc40m = $this->input->post('soma_nc40m');
            $soma_nc40f = $this->input->post('soma_nc40f');

            $soma_oc19m = $this->input->post('soma_oc19m');
            $soma_oc19f = $this->input->post('soma_oc19f');
            $soma_oc39m = $this->input->post('soma_oc39m');
            $soma_oc39f = $this->input->post('soma_oc39f');
            $soma_oc40m = $this->input->post('soma_oc40m');
            $soma_oc40f = $this->input->post('soma_oc40f');

            $child_nc19m = $this->input->post('child_nc19m');
            $child_nc19f = $this->input->post('child_nc19f');
            $child_nc39m = $this->input->post('child_nc39m');
            $child_nc39f = $this->input->post('child_nc39f');
            $child_nc40m = $this->input->post('child_nc40m');
            $child_nc40f = $this->input->post('child_nc40f');

            $child_oc19m = $this->input->post('child_oc19m');
            $child_oc19f = $this->input->post('child_oc19f');
            $child_oc39m = $this->input->post('child_oc39m');
            $child_oc39f = $this->input->post('child_oc39f');
            $child_oc40m = $this->input->post('child_oc40m');
            $child_oc40f = $this->input->post('child_oc40f');

            $alcohol_nc19m = $this->input->post('alcohol_nc19m');
            $alcohol_nc19f = $this->input->post('alcohol_nc19f');
            $alcohol_nc39m = $this->input->post('alcohol_nc39m');
            $alcohol_nc39f = $this->input->post('alcohol_nc39f');
            $alcohol_nc40m = $this->input->post('alcohol_nc40m');
            $alcohol_nc40f = $this->input->post('alcohol_nc40f');

            $alcohol_oc19m = $this->input->post('alcohol_oc19m');
            $alcohol_oc19f = $this->input->post('alcohol_oc19f');
            $alcohol_oc39m = $this->input->post('alcohol_oc39m');
            $alcohol_oc39f = $this->input->post('alcohol_oc39f');
            $alcohol_oc40m = $this->input->post('alcohol_oc40m');
            $alcohol_oc40f = $this->input->post('alcohol_oc40f');

            $drugs_nc19m = $this->input->post('drugs_nc19m');
            $drugs_nc19f = $this->input->post('drugs_nc19f');
            $drugs_nc39m = $this->input->post('drugs_nc39m');
            $drugs_nc39f = $this->input->post('drugs_nc39f');
            $drugs_nc40m = $this->input->post('drugs_nc40m');
            $drugs_nc40f = $this->input->post('drugs_nc40f');

            $drugs_oc19m = $this->input->post('drugs_oc19m');
            $drugs_oc19f = $this->input->post('drugs_oc19f');
            $drugs_oc39m = $this->input->post('drugs_oc39m');
            $drugs_oc39f = $this->input->post('drugs_oc39f');
            $drugs_oc40m = $this->input->post('drugs_oc40m');
            $drugs_oc40f = $this->input->post('drugs_oc40f');

            $dep_nc19m = $this->input->post('dep_nc19m');
            $dep_nc19f = $this->input->post('dep_nc19f');
            $dep_nc39m = $this->input->post('dep_nc39m');
            $dep_nc39f = $this->input->post('dep_nc39f');
            $dep_nc40m = $this->input->post('dep_nc40m');
            $dep_nc40f = $this->input->post('dep_nc40f');

            $dep_oc19m = $this->input->post('dep_oc19m');
            $dep_oc19f = $this->input->post('dep_oc19f');
            $dep_oc39m = $this->input->post('dep_oc39m');
            $dep_oc39f = $this->input->post('dep_oc39f');
            $dep_oc40m = $this->input->post('dep_oc40m');
            $dep_oc40f = $this->input->post('dep_oc40f');

            $suicid_att_nc19m = $this->input->post('suicid_att_nc19m');
            $suicid_att_nc19f = $this->input->post('suicid_att_nc19f');
            $suicid_att_nc39m = $this->input->post('suicid_att_nc39m');
            $suicid_att_nc39f = $this->input->post('suicid_att_nc39f');
            $suicid_att_nc40m = $this->input->post('suicid_att_nc40m');
            $suicid_att_nc40f = $this->input->post('suicid_att_nc40f');

            $suicid_att_oc19m = $this->input->post('suicid_att_oc19m');
            $suicid_att_oc19f = $this->input->post('suicid_att_oc19f');
            $suicid_att_oc39m = $this->input->post('suicid_att_oc39m');
            $suicid_att_oc39f = $this->input->post('suicid_att_oc39f');
            $suicid_att_oc40m = $this->input->post('suicid_att_oc40m');
            $suicid_att_oc40f = $this->input->post('suicid_att_oc40f');

            $suicid_d_nc19m = $this->input->post('suicid_d_nc19m');
            $suicid_d_nc19f = $this->input->post('suicid_d_nc19f');
            $suicid_d_nc39m = $this->input->post('suicid_d_nc39m');
            $suicid_d_nc39f = $this->input->post('suicid_d_nc39f');
            $suicid_d_nc40m = $this->input->post('suicid_d_nc40m');
            $suicid_d_nc40f = $this->input->post('suicid_d_nc40f');

            $suicid_d_oc19m = $this->input->post('suicid_d_oc19m');
            $suicid_d_oc19f = $this->input->post('suicid_d_oc19f');
            $suicid_d_oc39m = $this->input->post('suicid_d_oc39m');
            $suicid_d_oc39f = $this->input->post('suicid_d_oc39f');
            $suicid_d_oc40m = $this->input->post('suicid_d_oc40m');
            $suicid_d_oc40f = $this->input->post('suicid_d_oc40f');

            $maniac_nc19m = $this->input->post('maniac_nc19m');
            $maniac_nc19f = $this->input->post('maniac_nc19f');
            $maniac_nc39m = $this->input->post('maniac_nc39m');
            $maniac_nc39f = $this->input->post('maniac_nc39f');
            $maniac_nc40m = $this->input->post('maniac_nc40m');
            $maniac_nc40f = $this->input->post('maniac_nc40f');

            $maniac_oc19m = $this->input->post('maniac_oc19m');
            $maniac_oc19f = $this->input->post('maniac_oc19f');
            $maniac_oc39m = $this->input->post('maniac_oc39m');
            $maniac_oc39f = $this->input->post('maniac_oc39f');
            $maniac_oc40m = $this->input->post('maniac_oc40m');
            $maniac_oc40f = $this->input->post('maniac_oc40f');

            $bipolar_nc19m = $this->input->post('bipolar_nc19m');
            $bipolar_nc19f = $this->input->post('bipolar_nc19f');
            $bipolar_nc39m = $this->input->post('bipolar_nc39m');
            $bipolar_nc39f = $this->input->post('bipolar_nc39f');
            $bipolar_nc40m = $this->input->post('bipolar_nc40m');
            $bipolar_nc40f = $this->input->post('bipolar_nc40f');

            $bipolar_oc19m = $this->input->post('bipolar_oc19m');
            $bipolar_oc19f = $this->input->post('bipolar_oc19f');
            $bipolar_oc39m = $this->input->post('bipolar_oc39m');
            $bipolar_oc39f = $this->input->post('bipolar_oc39f');
            $bipolar_oc40m = $this->input->post('bipolar_oc40m');
            $bipolar_oc40f = $this->input->post('bipolar_oc40f');

            $other_psy_nc19m = $this->input->post('other_psy_nc19m');
            $other_psy_nc19f = $this->input->post('other_psy_nc19f');
            $other_psy_nc39m = $this->input->post('other_psy_nc39m');
            $other_psy_nc39f = $this->input->post('other_psy_nc39f');
            $other_psy_nc40m = $this->input->post('other_psy_nc40m');
            $other_psy_nc40f = $this->input->post('other_psy_nc40f');

            $other_psy_oc19m = $this->input->post('other_psy_oc19m');
            $other_psy_oc19f = $this->input->post('other_psy_oc19f');
            $other_psy_oc39m = $this->input->post('other_psy_oc39m');
            $other_psy_oc39f = $this->input->post('other_psy_oc39f');
            $other_psy_oc40m = $this->input->post('other_psy_oc40m');
            $other_psy_oc40f = $this->input->post('other_psy_oc40f');

            $epilepsy_nc19m = $this->input->post('epilepsy_nc19m');
            $epilepsy_nc19f = $this->input->post('epilepsy_nc19f');
            $epilepsy_nc39m = $this->input->post('epilepsy_nc39m');
            $epilepsy_nc39f = $this->input->post('epilepsy_nc39f');
            $epilepsy_nc40m = $this->input->post('epilepsy_nc40m');
            $epilepsy_nc40f = $this->input->post('epilepsy_nc40f');

            $epilepsy_oc19m = $this->input->post('epilepsy_oc19m');
            $epilepsy_oc19f = $this->input->post('epilepsy_oc19f');
            $epilepsy_oc39m = $this->input->post('epilepsy_oc39m');
            $epilepsy_oc39f = $this->input->post('epilepsy_oc39f');
            $epilepsy_oc40m = $this->input->post('epilepsy_oc40m');
            $epilepsy_oc40f = $this->input->post('epilepsy_oc40f');

            $other_neuro_nc19m = $this->input->post('other_neuro_nc19m');
            $other_neuro_nc19f = $this->input->post('other_neuro_nc19f');
            $other_neuro_nc39m = $this->input->post('other_neuro_nc39m');
            $other_neuro_nc39f = $this->input->post('other_neuro_nc39f');
            $other_neuro_nc40m = $this->input->post('other_neuro_nc40m');
            $other_neuro_nc40f = $this->input->post('other_neuro_nc40f');

            $other_neuro_oc19m = $this->input->post('other_neuro_oc19m');
            $other_neuro_oc19f = $this->input->post('other_neuro_oc19f');
            $other_neuro_oc39m = $this->input->post('other_neuro_oc39m');
            $other_neuro_oc39f = $this->input->post('other_neuro_oc39f');
            $other_neuro_oc40m = $this->input->post('other_neuro_oc40m');
            $other_neuro_oc40f = $this->input->post('other_neuro_oc40f');

            $this->mental_health_model->new_report();

            $num_rapport = $this->mental_health_model->num_rapport()->num_rapport;

            $this->mental_health_model->fetch_data1(
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
            $this->mental_health_model->fetch_data2(
              $follow_up,
                $higher_level,
                $hospitalized,
              $anxiety_nc19m,
                $anxiety_nc19f,
                $anxiety_nc39f,
                $anxiety_nc39m,
                $anxiety_nc40m,
                $anxiety_nc40f,
              $anxiety_oc19m,
                $anxiety_oc19f,
                $anxiety_oc39f,
                $anxiety_oc39m,
                $anxiety_oc40m,
                $anxiety_oc40f,
              $stress_nc19m,
                $stress_nc19f,
                $stress_nc39f,
                $stress_nc39m,
                $stress_nc40m,
                $stress_nc40f,
              $stress_oc19m,
                $stress_oc19f,
                $stress_oc39f,
                $stress_oc39m,
                $stress_oc40m,
                $stress_oc40f,
              $schizo_nc19m,
                $schizo_nc19f,
                $schizo_nc39f,
                $schizo_nc39m,
                $schizo_nc40m,
                $schizo_nc40f,
              $schizo_oc19m,
                $schizo_oc19f,
                $schizo_oc39f,
                $schizo_oc39m,
                $schizo_oc40m,
                $schizo_oc40f,
              $soma_nc19m,
                $soma_nc19f,
                $soma_nc39f,
                $soma_nc39m,
                $soma_nc40m,
                $soma_nc40f,
              $soma_oc19m,
                $soma_oc19f,
                $soma_oc39f,
                $soma_oc39m,
                $soma_oc40m,
                $soma_oc40f,
              $child_nc19m,
                $child_nc19f,
                $child_nc39f,
                $child_nc39m,
                $child_nc40m,
                $child_nc40f,
              $child_oc19m,
                $child_oc19f,
                $child_oc39f,
                $child_oc39m,
                $child_oc40m,
                $child_oc40f,
              $alcohol_nc19m,
                $alcohol_nc19f,
                $alcohol_nc39f,
                $alcohol_nc39m,
                $alcohol_nc40m,
                $alcohol_nc40f,
              $alcohol_oc19m,
                $alcohol_oc19f,
                $alcohol_oc39f,
                $alcohol_oc39m,
                $alcohol_oc40m,
                $alcohol_oc40f,
              $drugs_nc19m,
                $drugs_nc19f,
                $drugs_nc39f,
                $drugs_nc39m,
                $drugs_nc40m,
                $drugs_nc40f,
              $drugs_oc19m,
                $drugs_oc19f,
                $drugs_oc39f,
                $drugs_oc39m,
                $drugs_oc40m,
                $drugs_oc40f,
              $dep_nc19m,
                $dep_nc19f,
                $dep_nc39f,
                $dep_nc39m,
                $dep_nc40m,
                $dep_nc40f,
              $dep_oc19m,
                $dep_oc19f,
                $dep_oc39f,
                $dep_oc39m,
                $dep_oc40m,
                $dep_oc40f,
              $suicid_att_nc19m,
                $suicid_att_nc19f,
                $suicid_att_nc39f,
                $suicid_att_nc39m,
                $suicid_att_nc40m,
                $suicid_att_nc40f,
              $suicid_att_oc19m,
                $suicid_att_oc19f,
                $suicid_att_oc39f,
                $suicid_att_oc39m,
                $suicid_att_oc40m,
                $suicid_att_oc40f,
              $suicid_d_nc19m,
                $suicid_d_nc19f,
                $suicid_d_nc39f,
                $suicid_d_nc39m,
                $suicid_d_nc40m,
                $suicid_d_nc40f,
              $suicid_d_oc19m,
                $suicid_d_oc19f,
                $suicid_d_oc39f,
                $suicid_d_oc39m,
                $suicid_d_oc40m,
                $suicid_d_oc40f,
              $maniac_nc19m,
                $maniac_nc19f,
                $maniac_nc39f,
                $maniac_nc39m,
                $maniac_nc40m,
                $maniac_nc40f,
              $maniac_oc19m,
                $maniac_oc19f,
                $maniac_oc39f,
                $maniac_oc39m,
                $maniac_oc40m,
                $maniac_oc40f,
              $bipolar_nc19m,
                $bipolar_nc19f,
                $bipolar_nc39f,
                $bipolar_nc39m,
                $bipolar_nc40m,
                $bipolar_nc40f,
              $bipolar_oc19m,
                $bipolar_oc19f,
                $bipolar_oc39f,
                $bipolar_oc39m,
                $bipolar_oc40m,
                $bipolar_oc40f,
              $other_psy_nc19m,
                $other_psy_nc19f,
                $other_psy_nc39f,
                $other_psy_nc39m,
                $other_psy_nc40m,
                $other_psy_nc40f,
              $other_psy_oc19m,
                $other_psy_oc19f,
                $other_psy_oc39f,
                $other_psy_oc39m,
                $other_psy_oc40m,
                $other_psy_oc40f,
              $epilepsy_nc19m,
                $epilepsy_nc19f,
                $epilepsy_nc39f,
                $epilepsy_nc39m,
                $epilepsy_nc40m,
                $epilepsy_nc40f,
              $epilepsy_oc19m,
                $epilepsy_oc19f,
                $epilepsy_oc39f,
                $epilepsy_oc39m,
                $epilepsy_oc40m,
                $epilepsy_oc40f,
              $other_neuro_nc19m,
                $other_neuro_nc19f,
                $other_neuro_nc39f,
                $other_neuro_nc39m,
                $other_neuro_nc40m,
                $other_neuro_nc40f,
              $other_neuro_oc19m,
                $other_neuro_oc19f,
                $other_neuro_oc39f,
                $other_neuro_oc39m,
                $other_neuro_oc40m,
                $other_neuro_oc40f,
              $num_rapport
                );
            $this->session->unset_userdata('add_date');
            redirect('home', 'refresh');
        } else {
            $this->load->view('mental_health_add_view');
        }
    }
}
