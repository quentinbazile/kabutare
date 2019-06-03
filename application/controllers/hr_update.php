<?php
defined('BASEPATH') or exit('No direct script access allowed');

class hr_update extends CI_Controller
{
    public function index()
    {
        $this->load->model('hr_model');
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
          if ($this->home_model->check_service('hr')) {
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
        $this->form_validation->set_rules('doc_spe_34m', '"doc_spe_34m"', 'numeric');
        if ($this->form_validation->run()) {
            $doc_spe_34m = $this->input->post('doc_spe_34m');
            $doc_spe_34f = $this->input->post('doc_spe_34f');
            $doc_spe_35m = $this->input->post('doc_spe_35m');
            $doc_spe_35f = $this->input->post('doc_spe_35f');
            $doc_spe_60m = $this->input->post('doc_spe_60m');
            $doc_spe_60f = $this->input->post('doc_spe_60f');

            $doc_ge_34m = $this->input->post('doc_ge_34m');
            $doc_ge_34f = $this->input->post('doc_ge_34f');
            $doc_ge_35m = $this->input->post('doc_ge_35m');
            $doc_ge_35f = $this->input->post('doc_ge_35f');
            $doc_ge_60m = $this->input->post('doc_ge_60m');
            $doc_ge_60f = $this->input->post('doc_ge_60f');

            $nurses_34m = $this->input->post('nurses_34m');
            $nurses_34f = $this->input->post('nurses_34f');
            $nurses_35m = $this->input->post('nurses_35m');
            $nurses_35f = $this->input->post('nurses_35f');
            $nurses_60m = $this->input->post('nurses_60m');
            $nurses_60f = $this->input->post('nurses_60f');

            $midwives_34m = $this->input->post('midwives_34m');
            $midwives_34f = $this->input->post('midwives_34f');
            $midwives_35m = $this->input->post('midwives_35m');
            $midwives_35f = $this->input->post('midwives_35f');
            $midwives_60m = $this->input->post('midwives_60m');
            $midwives_60f = $this->input->post('midwives_60f');

            $lab_tech_34m = $this->input->post('lab_tech_34m');
            $lab_tech_34f = $this->input->post('lab_tech_34f');
            $lab_tech_35m = $this->input->post('lab_tech_35m');
            $lab_tech_35f = $this->input->post('lab_tech_35f');
            $lab_tech_60m = $this->input->post('lab_tech_60m');
            $lab_tech_60f = $this->input->post('lab_tech_60f');

            $dental_34m = $this->input->post('dental_34m');
            $dental_34f = $this->input->post('dental_34f');
            $dental_35m = $this->input->post('dental_35m');
            $dental_35f = $this->input->post('dental_35f');
            $dental_60m = $this->input->post('dental_60m');
            $dental_60f = $this->input->post('dental_60f');

            $other_34m = $this->input->post('other_34m');
            $other_34f = $this->input->post('other_34f');
            $other_35m = $this->input->post('other_35m');
            $other_35f = $this->input->post('other_35f');
            $other_60m = $this->input->post('other_60m');
            $other_60f = $this->input->post('other_60f');

            $pharma_34m = $this->input->post('pharma_34m');
            $pharma_34f = $this->input->post('pharma_34f');
            $pharma_35m = $this->input->post('pharma_35m');
            $pharma_35f = $this->input->post('pharma_35f');
            $pharma_60m = $this->input->post('pharma_60m');
            $pharma_60f = $this->input->post('pharma_60f');

            $admin_34m = $this->input->post('admin_34m');
            $admin_34f = $this->input->post('admin_34f');
            $admin_35m = $this->input->post('admin_35m');
            $admin_35f = $this->input->post('admin_35f');
            $admin_60m = $this->input->post('admin_60m');
            $admin_60f = $this->input->post('admin_60f');

            $doc_spe_new = $this->input->post('doc_spe_new');
            $doc_spe_left = $this->input->post('doc_spe_left');
            $doc_spe_vacant = $this->input->post('doc_spe_vacant');

            $doc_ge_new = $this->input->post('doc_ge_new');
            $doc_ge_left = $this->input->post('doc_ge_left');
            $doc_ge_vacant = $this->input->post('doc_ge_vacant');

            $nurses_new = $this->input->post('nurses_new');
            $nurses_left = $this->input->post('nurses_left');
            $nurses_vacant = $this->input->post('nurses_vacant');

            $midwives_new = $this->input->post('midwives_new');
            $midwives_left = $this->input->post('midwives_left');
            $midwives_vacant = $this->input->post('midwives_vacant');

            $lab_tech_new = $this->input->post('lab_tech_new');
            $lab_tech_left = $this->input->post('lab_tech_left');
            $lab_tech_vacant = $this->input->post('lab_tech_vacant');

            $dental_new = $this->input->post('dental_new');
            $dental_left = $this->input->post('dental_left');
            $dental_vacant = $this->input->post('dental_vacant');

            $other_new = $this->input->post('other_new');
            $other_left = $this->input->post('other_left');
            $other_vacant = $this->input->post('other_vacant');

            $pharma_new = $this->input->post('pharma_new');
            $pharma_left = $this->input->post('pharma_left');
            $pharma_vacant = $this->input->post('pharma_vacant');

            $left_death = $this->input->post('left_death');
            $left_retirement = $this->input->post('left_retirement');
            $left_career = $this->input->post('left_career');
            $left_remuneration = $this->input->post('left_remuneration');
            $left_other = $this->input->post('left_other');

            $this->hr_model->update_data(
              $doc_spe_34m,
              $doc_spe_34f,
              $doc_spe_35m,
              $doc_spe_35f,
              $doc_spe_60m,
              $doc_spe_60f,

              $doc_ge_34m,
              $doc_ge_34f,
              $doc_ge_35m,
              $doc_ge_35f,
              $doc_ge_60m,
              $doc_ge_60f,

              $nurses_34m,
              $nurses_34f,
              $nurses_35m,
              $nurses_35f,
              $nurses_60m,
              $nurses_60f,

              $midwives_34m,
              $midwives_34f,
              $midwives_35m,
              $midwives_35f,
              $midwives_60m,
              $midwives_60f,

              $lab_tech_34m,
              $lab_tech_34f,
              $lab_tech_35m,
              $lab_tech_35f,
              $lab_tech_60m,
              $lab_tech_60f,

              $dental_34m,
              $dental_34f,
              $dental_35m,
              $dental_35f,
              $dental_60m,
              $dental_60f,

              $other_34m,
              $other_34f,
              $other_35m,
              $other_35f,
              $other_60m,
              $other_60f,

              $pharma_34m,
              $pharma_34f,
              $pharma_35m,
              $pharma_35f,
              $pharma_60m,
              $pharma_60f,

              $admin_34m,
              $admin_34f,
              $admin_35m,
              $admin_35f,
              $admin_60m,
              $admin_60f,

              $doc_spe_new,
              $doc_spe_left,
              $doc_spe_vacant,

              $doc_ge_new,
              $doc_ge_left,
              $doc_ge_vacant,

              $nurses_new,
              $nurses_left,
              $nurses_vacant,

              $midwives_new,
              $midwives_left,
              $midwives_vacant,

              $lab_tech_new,
              $lab_tech_left,
              $lab_tech_vacant,

              $dental_new,
              $dental_left,
              $dental_vacant,

              $other_new,
              $other_left,
              $other_vacant,

              $pharma_new,
              $pharma_left,
              $pharma_vacant,

              $left_death,
              $left_retirement,
              $left_career,
              $left_remuneration,
              $left_other
            );

            $this->session->unset_userdata('update_date');
            redirect('home', 'refresh');
        } else {
            $data['table'] = $this->hr_model->show_table();
            $this->load->view('hr_update_view', $data);
        }
    }
}
