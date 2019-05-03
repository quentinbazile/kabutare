<?php

class LOGIN_C extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('LOGIN_M');
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

            if ($this->LOGIN_M->check_login($pseudo, $mdp)) {
                $this->session->set_userdata('login', $pseudo);
                if ($this->LOGIN_M->check_add()) {
                    redirect('index.php/XI_UPDATE_C', 'refresh');
                } else {
                    redirect('index.php/XI_C', 'refresh');
                }
            } else {
                $data['msg'] = "Authentication Failed !";
                $this->load->view('LOGIN_V', $data);
            }
        } else {
            $data['msg'] = '';
            $this->load->view('LOGIN_V', $data);
        }
    }
}
