<?php
defined('BASEPATH') or exit('No direct script access allowed');

class XII_ADD_C extends CI_Controller
{
    public function index()
    {
        //$this->load->model('XII_M');
        $this->fetch();
    }

    public function fetch()
    {
        $this->load->view('XII_ADD_V');
    }
}
