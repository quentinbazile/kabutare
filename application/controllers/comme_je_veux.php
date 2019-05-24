<?php
defined('BASEPATH') or exit('No direct script access allowed');

class comme_je_veux extends CI_Controller
{
  public function index(){
    $this->load->view('test');
  }
  public function fetch(){
    $this->load->model('comme_je_veux_model');
    $output='';
    $date=$this->input->post('date');
    $data=$this->comme_je_veux_model->comme_tu_veux($date);
    $output.='
  		<h2>Report of '.date("d/m/Y", strtotime($date)).'</h2>
      <div class="row">
        <div class="col-xs-8">
          <h4>Outpatient Morbidity Summary Table</h4>
        </div>
        <div class="col-xs-4">
          <h4>Health Insurance Status of New Cases</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <table id="A2" class="center">
            <thead>
              <tr>
                <th rowspan="2">Outpatient visits<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th colspan="2">Age < 5</th>
                <th colspan="2">Age 5 to 19</th>
                <th colspan="2">Age > 20</th>
              </tr>
              <tr>
                <th>M</th>
                <th>F</th>
                <th>M</th>
                <th>F</th>
                <th>M</th>
                <th>F</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <td class="left">New cases (NC)</td>
              <td>'.$data->nc5m_total.'</td>
              <td>'.$data->nc5f_total.'</td>
              <td>'.$data->nc19m_total.'</td>
              <td>'.$data->nc19f_total.'</td>
              <td>'.$data->nc20m_total.'</td>
              <td>'.$data->nc20f_total.'</td>
              </tr>
              <tr>
                <td class="left">Old cases</td>
                <td>'.$data->oc5m_total.'</td>
                <td>'.$data->oc5f_total.'</td>
                <td>'.$data->oc19m_total.'</td>
                <td>'.$data->oc19f_total.'</td>
                <td>'.$data->oc20m_total.'</td>
                <td>'.$data->oc20f_total.'</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-xs-4">
          <table id="B2" class="center">
            <thead>
              <tr>
                <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="left">Insured (Mutuelle or other insurance members)</td>
                <td>'.$data->insured_total.'</td>
              </tr>
              <tr>
                <td class="left">Non-paying new cases</td>
                <td>'.$data->nc_non_paying_total.'</td>
              </tr>
              <tr>
                <td class="left">Number of indigent new cases</td>
                <td>'.$data->nc_indigent_total.'</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>';
  echo $output;
  }
}
