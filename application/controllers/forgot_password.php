<?php

class forgot_password extends CI_Controller
{
    public function index()
    {
        $this->display();
    }

    public function display()
    {
        $this->load->library('form_validation');
        $this->load->model('login_model');
        $this->load->helper('security');

        $this->form_validation->set_rules('answer', '"secret answer"', 'required');

        if ($this->form_validation->run()) {
            $answer = $this->security->xss_clean($this->input->post('answer'));
            if (strtoupper($answer) == 'BAZILE ET CRENN') {
                $login = $this->login_model->catch_password()->login;
                $password = $this->login_model->catch_password()->password;
                $data['msg'] = 'Login : '.$login.' | Password : '.$password;
                $this->load->view('forgot_password_view', $data);
            } else {
                $data['msg'] = 'Wrong Answer !';
                $this->load->view('forgot_password_view', $data);
            }
        } else {
            $data['msg'] = '';
            $this->load->view('forgot_password_view', $data);
        }
    }
}
