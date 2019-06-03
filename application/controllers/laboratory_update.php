<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laboratory_update extends CI_Controller
{
    public function index()
    {
        $this->load->model('laboratory_model');
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
          if ($this->home_model->check_service('laboratory')) {
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
        $this->form_validation->set_rules('exams_t', '"exams_t"', 'numeric');
        if ($this->form_validation->run()) {
            $exams_t = $this->input->post('exams_t');
            $blood_n = $this->input->post('blood_n');
            $blood_t = $this->input->post('blood_t');
            $plasmodium_p = $this->input->post('plasmodium_p');
            $micro_p = $this->input->post('micro_p');
            $borellia_p = $this->input->post('borellia_p');
            $trypa_p = $this->input->post('trypa_p');

            $malaria_p = $this->input->post('malaria_p');
            $malaria_n = $this->input->post('malaria_n');
            $malaria_t = $this->input->post('malaria_t');

            $stools_n = $this->input->post('stools_n');
            $stools_t = $this->input->post('stools_t');
            $entamo_p = $this->input->post('entamo_p');
            $coli_p = $this->input->post('coli_p');
            $giardia_p = $this->input->post('giardia_p');
            $asca_p = $this->input->post('asca_p');
            $anky_p = $this->input->post('anky_p');
            $schisto_p = $this->input->post('schisto_p');
            $trichuris_p = $this->input->post('trichuris_p');
            $taenia_p = $this->input->post('taenia_p');
            $other_stools_p = $this->input->post('other_stools_p');

            $sugar_p = $this->input->post('sugar_p');
            $sugar_n = $this->input->post('sugar_n');
            $sugar_t = $this->input->post('sugar_t');

            $albumin_p = $this->input->post('albumin_p');
            $albumin_n = $this->input->post('albumin_n');
            $albumin_t = $this->input->post('albumin_t');

            $pregnancy_p = $this->input->post('pregnancy_p');
            $pregnancy_n = $this->input->post('pregnancy_n');
            $pregnancy_t = $this->input->post('pregnancy_t');

            $diag_tb_p = $this->input->post('diag_tb_p');
            $diag_tb_n = $this->input->post('diag_tb_n');
            $diag_tb_t = $this->input->post('diag_tb_t');

            $control_tb_p = $this->input->post('control_tb_p');
            $control_tb_n = $this->input->post('control_tb_n');
            $control_tb_t = $this->input->post('control_tb_t');

            $vag_fresh_p = $this->input->post('vag_fresh_p');
            $vag_fresh_n = $this->input->post('vag_fresh_n');
            $vag_fresh_t = $this->input->post('vag_fresh_t');

            $vag_gram_p = $this->input->post('vag_gram_p');
            $vag_gram_n = $this->input->post('vag_gram_n');
            $vag_gram_t = $this->input->post('vag_gram_t');
            $vag_diplo_p = $this->input->post('vag_diplo_p');

            $ure_fresh_p = $this->input->post('ure_fresh_p');
            $ure_fresh_n = $this->input->post('ure_fresh_n');
            $ure_fresh_t = $this->input->post('ure_fresh_t');

            $ure_gram_p = $this->input->post('ure_gram_p');
            $ure_gram_n = $this->input->post('ure_gram_n');
            $ure_gram_t = $this->input->post('ure_gram_t');
            $ure_diplo_p = $this->input->post('ure_diplo_p');

            $hemo_t = $this->input->post('hemo_t');

            $rpr_p = $this->input->post('rpr_p');
            $rpr_n = $this->input->post('rpr_n');
            $rpr_t = $this->input->post('rpr_t');

            $hiv_p = $this->input->post('hiv_p');
            $hiv_n = $this->input->post('hiv_n');
            $hiv_t = $this->input->post('hiv_t');

            $esr_t = $this->input->post('esr_t');
            $full_t = $this->input->post('full_t');
            $alat_t = $this->input->post('alat_t');
            $crea_t = $this->input->post('crea_t');
            $glucose_t = $this->input->post('glucose_t');
            $amylase_t = $this->input->post('amylase_t');
            $cd4_t = $this->input->post('cd4_t');

            $widal_p = $this->input->post('widal_p');
            $widal_n = $this->input->post('widal_n');
            $widal_t = $this->input->post('widal_t');

            $blood_preg_p = $this->input->post('blood_preg_p');
            $blood_preg_n = $this->input->post('blood_preg_n');
            $blood_preg_t = $this->input->post('blood_preg_t');
            $cerebro_t = $this->input->post('cerebro_t');
            $other_lab_t = $this->input->post('other_lab_t');
            $total = $this->input->post('total');

            $im_patient_transfused = $this->input->post('im_patient_transfused');
            $im_packs = $this->input->post('im_packs');

            $p_patient_transfused = $this->input->post('p_patient_transfused');
            $p_packs = $this->input->post('p_packs');

            $s_patient_transfused = $this->input->post('s_patient_transfused');
            $s_packs = $this->input->post('s_packs');

            $go_patient_transfused = $this->input->post('go_patient_transfused');
            $go_packs = $this->input->post('go_packs');

            $ic_patient_transfused = $this->input->post('ic_patient_transfused');
            $ic_packs = $this->input->post('ic_packs');

            $n_patient_transfused = $this->input->post('n_patient_transfused');
            $n_packs = $this->input->post('n_packs');

            $a_received = $this->input->post('a_received');
            $b_received = $this->input->post('b_received');
            $ab_received = $this->input->post('ab_received');
            $o_received = $this->input->post('o_received');

            $a_used = $this->input->post('a_used');
            $b_used = $this->input->post('b_used');
            $ab_used = $this->input->post('ab_used');
            $o_used = $this->input->post('o_used');

            $a_destroyed = $this->input->post('a_destroyed');
            $b_destroyed = $this->input->post('b_destroyed');
            $ab_destroyed = $this->input->post('ab_destroyed');
            $o_destroyed = $this->input->post('o_destroyed');

            $a_stock = $this->input->post('a_stock');
            $b_stock = $this->input->post('b_stock');
            $ab_stock = $this->input->post('ab_stock');
            $o_stock = $this->input->post('o_stock');

            $this->laboratory_model->update_data1(
              $exams_t,
              $blood_n,
              $blood_t,
              $plasmodium_p,
              $micro_p,
              $borellia_p,
              $trypa_p,

              $malaria_p,
              $malaria_n,
              $malaria_t,

              $stools_n,
              $stools_t,
              $entamo_p,
              $coli_p,
              $giardia_p,
              $asca_p,
              $anky_p,
              $schisto_p,
              $trichuris_p,
              $taenia_p,
              $other_stools_p,

              $sugar_p,
              $sugar_n,
              $sugar_t,

              $albumin_p,
              $albumin_n,
              $albumin_t,

              $pregnancy_p,
              $pregnancy_n,
              $pregnancy_t,

              $diag_tb_p,
              $diag_tb_n,
              $diag_tb_t,

              $control_tb_p,
              $control_tb_n,
              $control_tb_t,

              $vag_fresh_p,
              $vag_fresh_n,
              $vag_fresh_t,

              $vag_gram_p,
              $vag_gram_n,
              $vag_gram_t,
              $vag_diplo_p,

              $ure_fresh_p,
              $ure_fresh_n,
              $ure_fresh_t,

              $ure_gram_p,
              $ure_gram_n,
              $ure_gram_t,
              $ure_diplo_p,

              $hemo_t,

              $rpr_p,
              $rpr_n,
              $rpr_t,

              $hiv_p,
              $hiv_n,
              $hiv_t,

              $esr_t,
              $full_t,
              $alat_t,
              $crea_t,
              $glucose_t,
              $amylase_t,
              $cd4_t,

              $widal_p,
              $widal_n,
              $widal_t,

              $blood_preg_p,
              $blood_preg_n,
              $blood_preg_t,
              $cerebro_t,
              $other_lab_t,
              $total
            );

            $this->laboratory_model->update_data2(
              $im_patient_transfused,
              $im_packs,

              $p_patient_transfused,
              $p_packs,

              $s_patient_transfused,
              $s_packs,

              $go_patient_transfused,
              $go_packs,

              $ic_patient_transfused,
              $ic_packs,

              $n_patient_transfused,
              $n_packs,

              $a_received,
              $b_received,
              $ab_received,
              $o_received,

              $a_used,
              $b_used,
              $ab_used,
              $o_used,

              $a_destroyed,
              $b_destroyed,
              $ab_destroyed,
              $o_destroyed,

              $a_stock,
              $b_stock,
              $ab_stock,
              $o_stock
            );

            $this->session->unset_userdata('update_date');
            redirect('home', 'refresh');
        } else {
            $data['table1'] = $this->laboratory_model->show_table1();
            $data['table2'] = $this->laboratory_model->show_table2();
            $this->load->view('laboratory_update_view', $data);
        }
    }
}
