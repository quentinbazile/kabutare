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
        $this->form_validation->set_rules('add', '"add"', 'required');
        if ($this->form_validation->run()) {
            $add = $this->input->post('add');
            $this->session->set_userdata('add_date', $add);
            if ($this->home_model->check_service('ophthalmology')) {
                redirect('ophthalmology', 'refresh');
            }
            print_r($this->session->all_userdata());
        } else {
            $data['dates'] = $this->home_model->show_dates();
            $this->load->view('home_view', $data);
        }
    }
}
