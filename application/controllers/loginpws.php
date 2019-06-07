<?php
defined('BASEPATH') or exit('No direct script access allowed');

class loginpws extends CI_Controller
{
    public function index()
    {
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
            if ($this->home_model->check_service('data_manager')) {
                $this->load->view('loginpws_view');
            } else {
                $this->logout();
                redirect('login', 'refresh');
            }
        } else {
            redirect('login', 'refresh');
        }
    }

    public function fetch()
    {
        $this->load->model('loginpws_model');
        $output = '';
        $data=$this->loginpws_model->pws();

        $output.='
        <h2>Service & passwords</h2>
        <br>
        <div class="row">
          <table id="log" class="center">
            <thead>
              <tr>
                <th>N°</th>
                <th>Service</th>
                <th>Login</th>
                <th>Passwords</th>
              </tr>
            </thead>
            <tbody>';
              foreach ($data->result() as $row) {
                $output.='
                <tr>
                  <td>'.$row->num_user.'</td>
                  <td>'.$row->service.'</td>
                  <td>'.$row->login.'</td>
                  <td>'.$row->password.'</td>
                </tr>';
              }
              $output.='
            </tbody>
          </table>
        </div>';

        echo $output;
    }
}
