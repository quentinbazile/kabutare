<?php
defined('BASEPATH') or exit('No direct script access allowed');

class minor_surgery_update extends CI_Controller
{
    public function index()
    {
        $this->load->model('minor_surgery_model');
        if ($this->session->userdata('num_user') != '') {
            $this->fetch();
        } else {
            redirect('login', 'refresh');
        }
    }

    public function fetch()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('appendice_urg', '"appendice_urg"', 'numeric');
        if ($this->form_validation->run()) {
            $appendice_urg = $this->input->post('appendice_urg');
            $appendice_plan = $this->input->post('appendice_plan');
            $hernioraphy_urg = $this->input->post('hernioraphy_urg');
            $hernioraphy_plan = $this->input->post('hernioraphy_plan');
            $laparo_urg = $this->input->post('laparo_urg');
            $laparo_plan = $this->input->post('laparo_plan');
            $tyroide_urg = $this->input->post('tyroide_urg');
            $tyroide_plan = $this->input->post('tyroide_plan');
            $adeno_urg = $this->input->post('adeno_urg');
            $adeno_plan = $this->input->post('adeno_plan');
            $gs_other_urg = $this->input->post('gs_other_urg');
            $gs_other_plan = $this->input->post('gs_other_plan');
            $gs_total = $this->input->post('gs_total');

            $amputations_urg = $this->input->post('amputations_urg');
            $amputations_plan = $this->input->post('amputations_plan');
            $osteo_urg = $this->input->post('osteo_urg');
            $osteo_plan = $this->input->post('osteo_plan');
            $fracture_urg = $this->input->post('fracture_urg');
            $fracture_plan = $this->input->post('fracture_plan');
            $ortho_other_urg = $this->input->post('ortho_other_urg');
            $ortho_other_plan = $this->input->post('ortho_other_plan');
            $ortho_total = $this->input->post('ortho_total');

            $glaucoma_urg = $this->input->post('glaucoma_urg');
            $glaucoma_plan = $this->input->post('glaucoma_plan');
            $trachoma_urg = $this->input->post('trachoma_urg');
            $trachoma_plan = $this->input->post('trachoma_plan');
            $cataract_urg = $this->input->post('cataract_urg');
            $cataract_plan = $this->input->post('cataract_plan');
            $trauma_urg = $this->input->post('trauma_urg');
            $trauma_plan = $this->input->post('trauma_plan');
            $oph_other_urg = $this->input->post('oph_other_urg');
            $oph_other_plan = $this->input->post('oph_other_plan');
            $oph_total = $this->input->post('oph_total');

            $cleft_urg = $this->input->post('cleft_urg');
            $cleft_plan = $this->input->post('cleft_plan');
            $plastic_other_urg = $this->input->post('plastic_other_urg');
            $plastic_other_plan = $this->input->post('plastic_other_plan');
            $plastic_total = $this->input->post('plastic_total');

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

            $this->minor_surgery_model->update_data1(
              $appendice_urg,
              $appendice_plan,
              $hernioraphy_urg,
              $hernioraphy_plan,
              $laparo_urg,
              $laparo_plan,
              $tyroide_urg,
              $tyroide_plan,
              $adeno_urg,
              $adeno_plan,
              $gs_other_urg,
              $gs_other_plan,
              $gs_total,
              $amputations_urg,
              $amputations_plan,
              $osteo_urg,
              $osteo_plan,
              $fracture_urg,
              $fracture_plan,
              $ortho_other_urg,
              $ortho_other_plan,
              $ortho_total,
              $glaucoma_urg,
              $glaucoma_plan,
              $trachoma_urg,
              $trachoma_plan,
              $cataract_urg,
              $cataract_plan,
              $trauma_urg,
              $trauma_plan,
              $oph_other_urg,
              $oph_other_plan,
              $oph_total,
              $cleft_urg,
              $cleft_plan,
              $plastic_other_urg,
              $plastic_other_plan,
              $plastic_total,
              $total_urg,
              $total_plan,
              $major_urg,
              $major_plan,
              $minor_urg,
              $minor_plan
            );

            $this->minor_surgery_model->update_data2(
              $general,
              $regional,
              $local,
              $other_type
            );

            $this->session->unset_userdata('update_date');
            redirect('home', 'refresh');
        } else {
            $data['table1'] = $this->minor_surgery_model->show_table1();
            $data['table2'] = $this->minor_surgery_model->show_table2();
            $this->load->view('minor_surgery_update_view', $data);
        }
    }
}
