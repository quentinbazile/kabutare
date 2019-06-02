<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ophthalmology extends CI_Controller
{
    public function index()
    {
        $this->load->model('ophthalmology_model');
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
          if ($this->home_model->check_service('ophthalmology')) {
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

            $glaucoma_19m = $this->input->post('glaucoma_19m');
            $glaucoma_19f = $this->input->post('glaucoma_19f');
            $glaucoma_39m = $this->input->post('glaucoma_39m');
            $glaucoma_39f = $this->input->post('glaucoma_39f');
            $glaucoma_40m = $this->input->post('glaucoma_40m');
            $glaucoma_40f = $this->input->post('glaucoma_40f');

            $cataract_19m = $this->input->post('cataract_19m');
            $cataract_19f = $this->input->post('cataract_19f');
            $cataract_39m = $this->input->post('cataract_39m');
            $cataract_39f = $this->input->post('cataract_39f');
            $cataract_40m = $this->input->post('cataract_40m');
            $cataract_40f = $this->input->post('cataract_40f');

            $refrac_error_19m = $this->input->post('refrac_error_19m');
            $refrac_error_19f = $this->input->post('refrac_error_19f');
            $refrac_error_39m = $this->input->post('refrac_error_39m');
            $refrac_error_39f = $this->input->post('refrac_error_39f');
            $refrac_error_40m = $this->input->post('refrac_error_40m');
            $refrac_error_40f = $this->input->post('refrac_error_40f');

            $diab_retino_19m = $this->input->post('diab_retino_19m');
            $diab_retino_19f = $this->input->post('diab_retino_19f');
            $diab_retino_39m = $this->input->post('diab_retino_39m');
            $diab_retino_39f = $this->input->post('diab_retino_39f');
            $diab_retino_40m = $this->input->post('diab_retino_40m');
            $diab_retino_40f = $this->input->post('diab_retino_40f');

            $conjunctivitis_19m = $this->input->post('conjunctivitis_19m');
            $conjunctivitis_19f = $this->input->post('conjunctivitis_19f');
            $conjunctivitis_39m = $this->input->post('conjunctivitis_39m');
            $conjunctivitis_39f = $this->input->post('conjunctivitis_39f');
            $conjunctivitis_40m = $this->input->post('conjunctivitis_40m');
            $conjunctivitis_40f = $this->input->post('conjunctivitis_40f');

            $pinguecula_19m = $this->input->post('pinguecula_19m');
            $pinguecula_19f = $this->input->post('pinguecula_19f');
            $pinguecula_39m = $this->input->post('pinguecula_39m');
            $pinguecula_39f = $this->input->post('pinguecula_39f');
            $pinguecula_40m = $this->input->post('pinguecula_40m');
            $pinguecula_40f = $this->input->post('pinguecula_40f');

            $uveitis_19m = $this->input->post('uveitis_19m');
            $uveitis_19f = $this->input->post('uveitis_19f');
            $uveitis_39m = $this->input->post('uveitis_39m');
            $uveitis_39f = $this->input->post('uveitis_39f');
            $uveitis_40m = $this->input->post('uveitis_40m');
            $uveitis_40f = $this->input->post('uveitis_40f');

            $eye_trauma_19m = $this->input->post('eye_trauma_19m');
            $eye_trauma_19f = $this->input->post('eye_trauma_19f');
            $eye_trauma_39m = $this->input->post('eye_trauma_39m');
            $eye_trauma_39f = $this->input->post('eye_trauma_39f');
            $eye_trauma_40m = $this->input->post('eye_trauma_40m');
            $eye_trauma_40f = $this->input->post('eye_trauma_40f');

            $eye_pb_19m = $this->input->post('eye_pb_19m');
            $eye_pb_19f = $this->input->post('eye_pb_19f');
            $eye_pb_39m = $this->input->post('eye_pb_39m');
            $eye_pb_39f = $this->input->post('eye_pb_39f');
            $eye_pb_40m = $this->input->post('eye_pb_40m');
            $eye_pb_40f = $this->input->post('eye_pb_40f');

            $this->ophthalmology_model->new_report();

            $num_rapport = $this->ophthalmology_model->num_rapport()->num_rapport;

            $this->ophthalmology_model->fetch_data1(
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
            $this->ophthalmology_model->fetch_data2(
                  $glaucoma_19f,
                    $glaucoma_19m,
                    $glaucoma_39m,
                    $glaucoma_39f,
                    $glaucoma_40m,
                    $glaucoma_40f,
                  $cataract_19f,
                    $cataract_19m,
                    $cataract_39m,
                    $cataract_39f,
                    $cataract_40m,
                    $cataract_40f,
                  $refrac_error_19f,
                    $refrac_error_19m,
                    $refrac_error_39m,
                    $refrac_error_39f,
                    $refrac_error_40m,
                    $refrac_error_40f,
                  $diab_retino_19f,
                    $diab_retino_19m,
                    $diab_retino_39m,
                    $diab_retino_39f,
                    $diab_retino_40m,
                    $diab_retino_40f,
                  $conjunctivitis_19f,
                    $conjunctivitis_19m,
                    $conjunctivitis_39m,
                    $conjunctivitis_39f,
                    $conjunctivitis_40m,
                    $conjunctivitis_40f,
                  $pinguecula_19f,
                    $pinguecula_19m,
                    $pinguecula_39m,
                    $pinguecula_39f,
                    $pinguecula_40m,
                    $pinguecula_40f,
                  $uveitis_19f,
                    $uveitis_19m,
                    $uveitis_39m,
                    $uveitis_39f,
                    $uveitis_40m,
                    $uveitis_40f,
                  $eye_trauma_19m,
                    $eye_trauma_19f,
                    $eye_trauma_39m,
                    $eye_trauma_39f,
                    $eye_trauma_40m,
                    $eye_trauma_40f,
                  $eye_pb_19m,
                    $eye_pb_19f,
                    $eye_pb_39f,
                    $eye_pb_39m,
                    $eye_pb_40m,
                    $eye_pb_40f,
                    $num_rapport
                );
            $this->session->unset_userdata('add_date');
            redirect('home', 'refresh');
        } else {
            $this->load->view('ophthalmology_add_view');
        }
    }
}
