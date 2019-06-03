<?php
defined('BASEPATH') or exit('No direct script access allowed');

class family_planning_update extends CI_Controller
{
    public function index()
    {
        $this->load->model('family_planning_model');
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
          if ($this->home_model->check_service('family_planning')) {
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
        $this->form_validation->set_rules('oral_contra_proges_accep', '"oral_contra_proges_accep"', 'numeric');
        if ($this->form_validation->run()) {
            $oral_contra_proges_accep = $this->input->post('oral_contra_proges_accep');
            $oral_contra_proges_ppfp = $this->input->post('oral_contra_proges_ppfp');
            $oral_contra_proges_users = $this->input->post('oral_contra_proges_users');
            $oral_contra_proges_stop = $this->input->post('oral_contra_proges_stop');
            $oral_contra_proges_active = $this->input->post('oral_contra_proges_active');
            $oral_contra_proges_refer = $this->input->post('oral_contra_proges_refer');
            $oral_contra_proges_quant = $this->input->post('oral_contra_proges_quant');
            $oral_contra_proges_stock = $this->input->post('oral_contra_proges_stock');
            $oral_contra_proges_day = $this->input->post('oral_contra_proges_day');

            $oral_contra_comb_accep = $this->input->post('oral_contra_comb_accep');
            $oral_contra_comb_users = $this->input->post('oral_contra_comb_users');
            $oral_contra_comb_stop = $this->input->post('oral_contra_comb_stop');
            $oral_contra_comb_active = $this->input->post('oral_contra_comb_active');
            $oral_contra_comb_refer = $this->input->post('oral_contra_comb_refer');
            $oral_contra_comb_quant = $this->input->post('oral_contra_comb_quant');
            $oral_contra_comb_stock = $this->input->post('oral_contra_comb_stock');
            $oral_contra_comb_day = $this->input->post('oral_contra_comb_day');

            $inject_depo_accep = $this->input->post('inject_depo_accep');
            $inject_depo_users = $this->input->post('inject_depo_users');
            $inject_depo_stop = $this->input->post('inject_depo_stop');
            $inject_depo_active = $this->input->post('inject_depo_active');
            $inject_depo_refer = $this->input->post('inject_depo_refer');
            $inject_depo_quant = $this->input->post('inject_depo_quant');
            $inject_depo_stock = $this->input->post('inject_depo_stock');
            $inject_depo_day = $this->input->post('inject_depo_day');

            $inject_nor_accep = $this->input->post('inject_nor_accep');
            $inject_nor_users = $this->input->post('inject_nor_users');
            $inject_nor_stop = $this->input->post('inject_nor_stop');
            $inject_nor_active = $this->input->post('inject_nor_active');
            $inject_nor_quant = $this->input->post('inject_nor_quant');
            $inject_nor_stock = $this->input->post('inject_nor_stock');
            $inject_nor_day = $this->input->post('inject_nor_day');

            $implants_nxt_accep = $this->input->post('implants_nxt_accep');
            $implants_nxt_ppfp = $this->input->post('implants_nxt_ppfp');
            $implants_nxt_users = $this->input->post('implants_nxt_users');
            $implants_nxt_stop = $this->input->post('implants_nxt_stop');
            $implants_nxt_active = $this->input->post('implants_nxt_active');
            $implants_nxt_quant = $this->input->post('implants_nxt_quant');
            $implants_nxt_stock = $this->input->post('implants_nxt_stock');
            $implants_nxt_day = $this->input->post('implants_nxt_day');

            $implants_jad_accep = $this->input->post('implants_jad_accep');
            $implants_jad_ppfp = $this->input->post('implants_jad_ppfp');
            $implants_jad_users = $this->input->post('implants_jad_users');
            $implants_jad_stop = $this->input->post('implants_jad_stop');
            $implants_jad_active = $this->input->post('implants_jad_active');
            $implants_jad_quant = $this->input->post('implants_jad_quant');
            $implants_jad_stock = $this->input->post('implants_jad_stock');
            $implants_jad_day = $this->input->post('implants_jad_day');

            $iud_accep = $this->input->post('iud_accep');
            $iud_ppfp = $this->input->post('iud_ppfp');
            $iud_users = $this->input->post('iud_users');
            $iud_stop = $this->input->post('iud_stop');
            $iud_active = $this->input->post('iud_active');
            $iud_quant = $this->input->post('iud_quant');
            $iud_stock = $this->input->post('iud_stock');
            $iud_day = $this->input->post('iud_day');

            $m_condoms_accep = $this->input->post('m_condoms_accep');
            $m_condoms_ppfp = $this->input->post('m_condoms_ppfp');
            $m_condoms_users = $this->input->post('m_condoms_users');
            $m_condoms_stop = $this->input->post('m_condoms_stop');
            $m_condoms_active = $this->input->post('m_condoms_active');
            $m_condoms_refer = $this->input->post('m_condoms_refer');
            $m_condoms_quant = $this->input->post('m_condoms_quant');
            $m_condoms_stock = $this->input->post('m_condoms_stock');
            $m_condoms_day = $this->input->post('m_condoms_day');

            $f_condoms_accep = $this->input->post('f_condoms_accep');
            $f_condoms_ppfp = $this->input->post('f_condoms_ppfp');
            $f_condoms_users = $this->input->post('f_condoms_users');
            $f_condoms_stop = $this->input->post('f_condoms_stop');
            $f_condoms_active = $this->input->post('f_condoms_active');
            $f_condoms_refer = $this->input->post('f_condoms_refer');
            $f_condoms_quant = $this->input->post('f_condoms_quant');
            $f_condoms_stock = $this->input->post('f_condoms_stock');
            $f_condoms_day = $this->input->post('f_condoms_day');

            $other_method_accep = $this->input->post('other_method_accep');
            $other_method_ppfp = $this->input->post('other_method_ppfp');
            $other_method_users = $this->input->post('other_method_users');
            $other_method_stop = $this->input->post('other_method_stop');
            $other_method_active = $this->input->post('other_method_active');
            $other_method_quant = $this->input->post('other_method_quant');
            $other_method_stock = $this->input->post('other_method_stock');
            $other_method_day = $this->input->post('other_method_day');

            $cycle_accep = $this->input->post('cycle_accep');
            $cycle_users = $this->input->post('cycle_users');
            $cycle_stop = $this->input->post('cycle_stop');
            $cycle_active = $this->input->post('cycle_active');
            $cycle_refer = $this->input->post('cycle_refer');
            $cycle_quant = $this->input->post('cycle_quant');
            $cycle_stock = $this->input->post('cycle_stock');
            $cycle_day = $this->input->post('cycle_day');

            $lam_accep = $this->input->post('lam_accep');
            $lam_ppfp = $this->input->post('lam_ppfp');
            $lam_users = $this->input->post('lam_users');
            $lam_stop = $this->input->post('lam_stop');
            $lam_active = $this->input->post('lam_active');
            $lam_refer = $this->input->post('lam_refer');
            $lam_quant = $this->input->post('lam_quant');
            $lam_stock = $this->input->post('lam_stock');
            $lam_day = $this->input->post('lam_day');

            $auto_obs_accep = $this->input->post('auto_obs_accep');
            $auto_obs_users = $this->input->post('auto_obs_users');
            $auto_obs_stop = $this->input->post('auto_obs_stop');
            $auto_obs_active = $this->input->post('auto_obs_active');

            $tubal_accep = $this->input->post('tubal_accep');
            $tubal_ppfp = $this->input->post('tubal_ppfp');
            $tubal_users = $this->input->post('tubal_users');
            $tubal_active = $this->input->post('tubal_active');

            $vasectomy_accep = $this->input->post('vasectomy_accep');
            $vasectomy_ppfp = $this->input->post('vasectomy_ppfp');
            $vasectomy_users = $this->input->post('vasectomy_users');
            $vasectomy_active = $this->input->post('vasectomy_active');

            $fp_new_acceptors = $this->input->post('fp_new_acceptors');
            $new_fp_users = $this->input->post('new_fp_users');

            $sperm_control_test = $this->input->post('sperm_control_test');
            $sperm_control_positive = $this->input->post('sperm_control_positive');
            $sperm_control_negative = $this->input->post('sperm_control_negative');

            $acceptors_prog_19 = $this->input->post('acceptors_prog_19');
            $acceptors_prog_24 = $this->input->post('acceptors_prog_24');
            $acceptors_prog_34 = $this->input->post('acceptors_prog_34');
            $acceptors_prog_35 = $this->input->post('acceptors_prog_35');

            $this->family_planning_model->update_data1(
          $oral_contra_proges_accep,
            $oral_contra_proges_ppfp,
            $oral_contra_proges_stop,
            $oral_contra_proges_users,
          $oral_contra_proges_active,
            $oral_contra_proges_refer,
          $oral_contra_proges_quant,
            $oral_contra_proges_stock,
            $oral_contra_proges_day,
          $oral_contra_comb_accep,
            $oral_contra_comb_stop,
            $oral_contra_comb_users,
          $oral_contra_comb_active,
            $oral_contra_comb_refer,
          $oral_contra_comb_quant,
            $oral_contra_comb_stock,
            $oral_contra_comb_day,
          $inject_depo_accep,
            $inject_depo_stop,
            $inject_depo_users,
          $inject_depo_active,
            $inject_depo_refer,
          $inject_depo_quant,
            $inject_depo_stock,
            $inject_depo_day,
          $inject_nor_accep,
            $inject_nor_stop,
            $inject_nor_users,
          $inject_nor_active,
          $inject_nor_quant,
            $inject_nor_stock,
            $inject_nor_day,
          $implants_nxt_accep,
            $implants_nxt_ppfp,
            $implants_nxt_stop,
            $implants_nxt_users,
          $implants_nxt_active,
          $implants_nxt_quant,
            $implants_nxt_stock,
            $implants_nxt_day,
          $implants_jad_accep,
            $implants_jad_ppfp,
            $implants_jad_stop,
            $implants_jad_users,
          $implants_jad_active,
          $implants_jad_quant,
            $implants_jad_stock,
            $implants_jad_day,
          $iud_accep,
            $iud_ppfp,
            $iud_stop,
            $iud_users,
          $iud_active,
          $iud_quant,
            $iud_stock,
            $iud_day,
          $m_condoms_accep,
            $m_condoms_ppfp,
            $m_condoms_stop,
            $m_condoms_users,
          $m_condoms_active,
            $m_condoms_refer,
          $m_condoms_quant,
            $m_condoms_stock,
            $m_condoms_day,
          $f_condoms_accep,
            $f_condoms_ppfp,
            $f_condoms_stop,
            $f_condoms_users,
          $f_condoms_active,
            $f_condoms_refer,
          $f_condoms_quant,
            $f_condoms_stock,
            $f_condoms_day,
          $other_method_accep,
            $other_method_ppfp,
            $other_method_stop,
            $other_method_users,
          $other_method_active,
          $other_method_quant,
            $other_method_stock,
            $other_method_day,
          $cycle_accep,
            $cycle_stop,
            $cycle_users,
          $cycle_active,
            $cycle_refer,
          $cycle_quant,
            $cycle_stock,
            $cycle_day,
          $lam_accep,
            $lam_ppfp,
            $lam_stop,
            $lam_users,
          $lam_active,
            $lam_refer,
          $lam_quant,
            $lam_stock,
            $lam_day,
          $auto_obs_accep,
            $auto_obs_stop,
            $auto_obs_users,
          $auto_obs_active,
          $tubal_accep,
            $tubal_ppfp,
            $tubal_users,
          $tubal_active,
          $vasectomy_accep,
            $vasectomy_ppfp,
            $vasectomy_users,
          $vasectomy_active,
        $fp_new_acceptors,
          $new_fp_users,
          $sperm_control_test,
          $sperm_control_positive,
          $sperm_control_negative,
          $acceptors_prog_19,
          $acceptors_prog_24,
          $acceptors_prog_34,
          $acceptors_prog_35
                    );
            $this->session->unset_userdata('update_date');
            redirect('home', 'refresh');
        } else {
            $data['table1'] = $this->family_planning_model->show_table1();
            $this->load->view('family_planning_update_view', $data);
        }
    }
}
