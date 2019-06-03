<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function index()
    {
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
            if ($this->home_model->check_service('data_manager') || $this->home_model->check_service('dg') ||
            $this->home_model->check_service('clinical_director') || $this->home_model->check_service('nursing_director') ||
            $this->home_model->check_service('monitoring_evaluation')) {
                $this->fetch();
            } else {
                $this->logout();
                redirect('login', 'refresh');
            }
        } else {
            redirect('login', 'refresh');
        }
    }

    public function logout()
    {
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            $this->session->unset_userdata($key);
        }
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }

    public function changePassword()
    {
        $this->load->library('form_validation');
        $this->load->model('home_model');

        $this->form_validation->set_rules('oldpass', 'old password', 'callback_password_check');
        $this->form_validation->set_rules('newpass', 'new password', 'required');
        $this->form_validation->set_rules('passconf', 'confirm password', 'required|matches[newpass]');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin_view');
        } else {
            $id = $this->session->userdata('num_user');
            $newpass = $this->input->post('newpass');
            $this->home_model->update_user($id, array('password' => $newpass));
            $this->logout();
        }
    }

    public function password_check($oldpass)
    {
        $this->load->model('home_model');
        $id = $this->session->userdata('num_user');
        $user = $this->home_model->get_user($id);
        if ($user->password !== $oldpass) {
            $this->form_validation->set_message('password_check', 'The {field} does not match');
            return false;
        }
        return true;
    }

    public function fetch()
    {
        $this->load->view('admin_view');
    }
}
