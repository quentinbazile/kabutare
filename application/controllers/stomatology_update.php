<?php
defined('BASEPATH') or exit('No direct script access allowed');

class stomatology_update extends CI_Controller
{
    public function index()
    {
        $this->load->model('stomatology_model');
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
          if ($this->home_model->check_service('stomatology')) {
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

            $dent_caries_19m = $this->input->post('dent_caries_19m');
            $dent_caries_19f = $this->input->post('dent_caries_19f');
            $dent_caries_39m = $this->input->post('dent_caries_39m');
            $dent_caries_39f = $this->input->post('dent_caries_39f');
            $dent_caries_40m = $this->input->post('dent_caries_40m');
            $dent_caries_40f = $this->input->post('dent_caries_40f');

            $perio_diseas_19m = $this->input->post('perio_diseas_19m');
            $perio_diseas_19f = $this->input->post('perio_diseas_19f');
            $perio_diseas_39m = $this->input->post('perio_diseas_39m');
            $perio_diseas_39f = $this->input->post('perio_diseas_39f');
            $perio_diseas_40m = $this->input->post('perio_diseas_40m');
            $perio_diseas_40f = $this->input->post('perio_diseas_40f');

            $other_teeth_19m = $this->input->post('other_teeth_19m');
            $other_teeth_19f = $this->input->post('other_teeth_19f');
            $other_teeth_39m = $this->input->post('other_teeth_39m');
            $other_teeth_39f = $this->input->post('other_teeth_39f');
            $other_teeth_40m = $this->input->post('other_teeth_40m');
            $other_teeth_40f = $this->input->post('other_teeth_40f');

            $this->stomatology_model->update_data1(
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
              $international
            );

            $this->stomatology_model->update_data2(
              $dent_caries_19m,
              $dent_caries_19f,
              $dent_caries_39m,
              $dent_caries_39f,
              $dent_caries_40m,
              $dent_caries_40f,
              $perio_diseas_19m,
              $perio_diseas_19f,
              $perio_diseas_39m,
              $perio_diseas_39f,
              $perio_diseas_40m,
              $perio_diseas_40f,
              $other_teeth_19m,
              $other_teeth_19f,
              $other_teeth_39m,
              $other_teeth_39f,
              $other_teeth_40m,
              $other_teeth_40f
            );

            $this->session->unset_userdata('update_date');
            redirect('home', 'refresh');
        } else {
            $data['table1'] = $this->stomatology_model->show_table1();
            $data['table2'] = $this->stomatology_model->show_table2();
            $this->load->view('stomatology_update_view', $data);
        }
    }
}
