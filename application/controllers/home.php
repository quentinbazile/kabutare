<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
            $this->fetch();
        } else {
            redirect('login', 'refresh');
        }
    }

    public function fetch()
    {
        $this->load->library('form_validation');

        if (isset($_POST['btn_add'])) {
            $this->form_validation->set_rules('add', '"add"', 'required');
            if ($this->form_validation->run()) {
                $add = $this->input->post('add');
                $this->session->set_userdata('add_date', $add);
                if ($this->home_model->check_service('ophthalmology')) {
                    redirect('ophthalmology', 'refresh');
                }
                if ($this->home_model->check_service('stomatology')) {
                    redirect('stomatology', 'refresh');
                }
                if ($this->home_model->check_service('mental_health')) {
                    redirect('mental_health', 'refresh');
                }
                if ($this->home_model->check_service('gbv')) {
                    redirect('gbv', 'refresh');
                }
                if ($this->home_model->check_service('pregnant_woman')) {
                    redirect('pregnant_woman', 'refresh');
                }
            }
        } elseif (isset($_POST['btn_update'])) {
            $this->form_validation->set_rules('update', '"update"', 'required');
            if ($this->form_validation->run()) {
                $update = $this->input->post('update');
                $this->session->set_userdata('update_date', $update);
                if ($this->home_model->check_service('ophthalmology')) {
                    redirect('ophthalmology_update', 'refresh');
                }
                if ($this->home_model->check_service('stomatology')) {
                    redirect('stomatology_update', 'refresh');
                }
                if ($this->home_model->check_service('mental_health')) {
                    redirect('mental_health_update', 'refresh');
                }
                if ($this->home_model->check_service('gbv')) {
                    redirect('gbv_update', 'refresh');
                }
                if ($this->home_model->check_service('pregnant_woman')) {
                    redirect('pregnant_woman_update', 'refresh');
                }
            }
        } else {
            $data['dates'] = $this->home_model->show_dates();
            $this->load->view('home_view', $data);
        }
    }
}
