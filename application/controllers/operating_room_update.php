<?php
defined('BASEPATH') or exit('No direct script access allowed');

class operating_room_update extends CI_Controller
{
    public function index()
    {
        $this->load->model('operating_room_model');
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
          if ($this->home_model->check_service('operating_room')) {
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
        $this->form_validation->set_rules('appendice_urg', '"appendice_urg"', 'numeric');
        if ($this->form_validation->run()) {
            $cesarean_urg = $this->input->post('cesarean_urg');
            $cesarean_plan = $this->input->post('cesarean_plan');
            $gyneco_urg = $this->input->post('gyneco_urg');
            $gyneco_plan = $this->input->post('gyneco_plan');
            $obste_urg = $this->input->post('obste_urg');
            $obste_plan = $this->input->post('obste_plan');
            $laparo_preg_urg = $this->input->post('laparo_preg_urg');
            $laparo_preg_plan = $this->input->post('laparo_preg_plan');
            $laparo_rupt_urg = $this->input->post('laparo_rupt_urg');
            $laparo_rupt_plan = $this->input->post('laparo_rupt_plan');
            $laparo_perit_urg = $this->input->post('laparo_perit_urg');
            $laparo_perit_plan = $this->input->post('laparo_perit_plan');
            $laparo_myomec_urg = $this->input->post('laparo_myomec_urg');
            $laparo_myomec_plan = $this->input->post('laparo_myomec_plan');
            $vesico_plan = $this->input->post('vesico_plan');
            $recto_plan = $this->input->post('recto_plan');
            $ureteric_plan = $this->input->post('ureteric_plan');
            $biopsy_plan = $this->input->post('biopsy_plan');
            $go_other_urg = $this->input->post('go_other_urg');
            $go_other_plan = $this->input->post('go_other_plan');
            $go_total = $this->input->post('go_total');

            $total_urg = $this->input->post('total_urg');
            $total_plan = $this->input->post('total_plan');
            $major_urg = $this->input->post('major_urg');
            $major_plan = $this->input->post('major_plan');
            $minor_urg = $this->input->post('minor_urg');
            $minor_plan = $this->input->post('minor_plan');

            $general = $this->input->post('general');
            $regional = $this->input->post('regional');
            $local = $this->input->post('local');
            $other_type = $this->input->post('other_type');

            $this->operating_room_model->update_data1(
              $cesarean_urg,
              $cesarean_plan,
              $gyneco_urg,
              $gyneco_plan,
              $obste_urg,
              $obste_plan,
              $laparo_preg_urg,
              $laparo_preg_plan,
              $laparo_rupt_urg,
              $laparo_rupt_plan,
              $laparo_perit_urg,
              $laparo_perit_plan,
              $laparo_myomec_urg,
              $laparo_myomec_plan,
              $vesico_plan,
              $recto_plan,
              $ureteric_plan,
              $biopsy_plan,
              $go_other_urg,
              $go_other_plan,
              $go_total,
              $total_urg,
              $total_plan,
              $major_urg,
              $major_plan,
              $minor_urg,
              $minor_plan
            );

            $this->operating_room_model->update_data2(
              $general,
              $regional,
              $local,
              $other_type
            );

            $this->session->unset_userdata('update_date');
            redirect('home', 'refresh');
        } else {
            $data['table1'] = $this->operating_room_model->show_table1();
            $data['table2'] = $this->operating_room_model->show_table2();
            $this->load->view('operating_room_update_view', $data);
        }
    }
}
