<?php
defined('BASEPATH') or exit('No direct script access allowed');

class XVI_ADD_C extends CI_Controller
{
    public function index()
    {
        //$this->load->model('XVI_M');
        $this->fetch();
    }

    public function fetch()
    {
        $this->load->view('XVI_ADD_V');
    }
}
