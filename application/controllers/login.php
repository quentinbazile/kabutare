<?php

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('login_model');
    }

    public function index()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->load->library('form_validation');
        $this->load->helper('security');

        $this->form_validation->set_rules('pseudo', '"Nom d\'utilisateur"', 'required');
        $this->form_validation->set_rules('mdp', '"Mot de passe"', 'required');

        if ($this->form_validation->run()) {
            $pseudo = $this->security->xss_clean($this->input->post('pseudo'));
            $mdp = $this->security->xss_clean($this->input->post('mdp'));

            if ($this->login_model->check_login($pseudo, $mdp)) {
                $num_user = $this->login_model->num_user($pseudo)->num_user;
                $this->session->set_userdata('num_user', $num_user);
                if ($this->login_model->check_service($pseudo, 'ophthalmology')) {
                    redirect('ophthalmology', 'refresh');
                } else {
                    redirect('ophthalmology', 'refresh');
                }
            } else {
                $data['msg'] = "Authentication Failed !";
                $this->load->view('login_view', $data);
            }
        } else {
            $data['msg'] = '';
            $this->load->view('login_view', $data);
        }
    }
}
