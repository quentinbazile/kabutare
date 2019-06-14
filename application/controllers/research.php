<?php
defined('BASEPATH') or exit('No direct script access allowed');

class research extends CI_Controller
{
    public function index()
    {
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
            if ($this->home_model->check_service('data_manager') || $this->home_model->check_service('dg') ||
            $this->home_model->check_service('clinical_director') || $this->home_model->check_service('nursing_director') ||
            $this->home_model->check_service('monitoring_evaluation')) {
                $this->load->view('research_view');
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
        $this->load->model('research_model');
        $output = '';
        $date = $this->input->post('date');
        $injury=$this->research_model->injury($date);
        $GBV=$this->research_model->GBV($date);
        $physiotherapy = $this->research_model->physiotherapy($date);
        $imagery=$this->research_model->imagery($date);
        $neonatal=$this->research_model->neonatal($date);
        $delivery_birth = $this->research_model->delivery_birth($date);
        $malnourished=$this->research_model->malnourished($date);
        $stock=$this->research_model->stock($date);
        $laboratory = $this->research_model->laboratory($date);
        $staff=$this->research_model->staff($date);
        $family_planning = $this->research_model->family_planning($date);
        $complete_ncds = $this->research_model->complete_ncds($date);
        $complete_stoma = $this->research_model->complete_stoma($date);
        $complete_ophta = $this->research_model->complete_ophta($date);
        $complete_mental = $this->research_model->complete_mental($date);
        $complete_emer = $this->research_model->complete_emer($date);
        $complete_im = $this->research_model->complete_im($date);
        $complete_pedia = $this->research_model->complete_pedia($date);
        $complete_surge = $this->research_model->complete_surge($date);
        $complete_ic = $this->research_model->complete_ic($date);
        $complete_ms = $this->research_model->complete_ms($date);
        $complete_or = $this->research_model->complete_or($date);

        $output.='
        <br>
        <div class="row">
          <div class="col-xs-6">
            <table id="Cpl1" class="center">
              <thead>
                <tr>
                  <th>Services</th>
                  <th>Completed</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>OPD</td>';
        if ($injury) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>NCDS</td>';
        if ($complete_ncds) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Stomatology</td>';
        if ($complete_stoma) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Ophtalmology</td>';
        if ($complete_ophta) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Mental health</td>';
        if ($complete_mental) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>GBV</td>';
        if ($GBV) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Kinesitherapy</td>';
        if ($physiotherapy) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Pregnant woman</td>';
        if ($imagery) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Emergency</td>';
        if ($complete_emer) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Internal medicine</td>';
        if ($complete_im) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Pediatrics</td>';
        if ($complete_pedia) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }

        $output.='
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-xs-6">
            <table id="Cpl2" class="center">
              <thead>
                <tr>
                  <th>Services</th>
                  <th>Completed</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Surgery</td>';
        if ($complete_surge) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Neonatology</td>';
        if ($neonatal) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Gynecology obstetric</td>';
        if ($delivery_birth) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Nutrition rehabilitation</td>';
        if ($malnourished) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Pharmacy</td>';
        if ($stock) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Intensive care</td>';
        if ($complete_ic) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Minor surgery</td>';
        if ($complete_ms) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Operating room</td>';
        if ($complete_or) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Laboratory</td>';
        if ($laboratory) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Human ressources</td>';
        if ($staff) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Family planning</td>';
        if ($family_planning) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
              </tbody>
            </table>
          </div>
        </div>';


        $consultation_abcde=$this->research_model->consultation_abcde($date);

        if ($consultation_abcde->nc5m_total != null) {
            $output.='
            <h3 class="center">II] Outpatient consultations</h3>
            <div class="row">
              <div class="col-xs-8">
                <h4>A) Outpatient morbidity summary table</h4>
              </div>
              <div class="col-xs-4">
                <h4>B) Health insurance status of new cases</h4>
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
                    <td>'.$consultation_abcde->nc5m_total.'</td>
                    <td>'.$consultation_abcde->nc5f_total.'</td>
                    <td>'.$consultation_abcde->nc19m_total.'</td>
                    <td>'.$consultation_abcde->nc19f_total.'</td>
                    <td>'.$consultation_abcde->nc20m_total.'</td>
                    <td>'.$consultation_abcde->nc20f_total.'</td>
                    </tr>
                    <tr>
                      <td class="left">Old cases</td>
                      <td>'.$consultation_abcde->oc5m_total.'</td>
                      <td>'.$consultation_abcde->oc5f_total.'</td>
                      <td>'.$consultation_abcde->oc19m_total.'</td>
                      <td>'.$consultation_abcde->oc19f_total.'</td>
                      <td>'.$consultation_abcde->oc20m_total.'</td>
                      <td>'.$consultation_abcde->oc20f_total.'</td>
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
                      <td class="left">Insured (mutuelle or other insurance members)</td>
                      <td>'.$consultation_abcde->insured_total.'</td>
                    </tr>
                    <tr>
                      <td class="left">Non-paying new cases</td>
                      <td>'.$consultation_abcde->nc_non_paying_total.'</td>
                    </tr>
                    <tr>
                      <td class="left">Number of indigent new cases</td>
                      <td>'.$consultation_abcde->nc_indigent_total.'</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-6">
                <h4>C) Referrals</h4>
              </div>
              <div class="col-xs-6">
                <h4>D) Origin of outpatients</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <table id="C2" class="center">
                  <thead>
                    <tr>
                      <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="left">Referred to other levels</td>
                      <td>'.$consultation_abcde->other_levels_total.'</td>
                    </tr>
                    <tr>
                      <td class="left">Counter referrals received</td>
                      <td>'.$consultation_abcde->counter_received_total.'</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-xs-6">
                <table id="D2" class="center">
                  <thead>
                    <tr>
                      <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="left">New cases from the catchment area (zone)</td>
                      <td>'.$consultation_abcde->nc_catch_total.'</td>
                    </tr>
                    <tr>
                      <td class="left">New cases (hors zone)</td>
                      <td>'.$consultation_abcde->nc_total.'</td>
                    </tr>
                    <tr>
                      <td class="left">International patients (hors pays)</td>
                      <td>'.$consultation_abcde->international_total.'</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <br>
            <div class="row">
              <h4>E) New cases of priority health problems in general OPD</h4>
            </div>
            <div class="row">
              <table id="E2" class="center">
                <thead>
                  <tr>
                    <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Diarrhea with dehydration</td>
                    <td>'.$consultation_abcde->diar_w_dehy_5m_total.'</td>
                    <td>'.$consultation_abcde->diar_w_dehy_5f_total.'</td>
                    <td>'.$consultation_abcde->diar_w_dehy_19m_total.'</td>
                    <td>'.$consultation_abcde->diar_w_dehy_19f_total.'</td>
                    <td>'.$consultation_abcde->diar_w_dehy_20m_total.'</td>
                    <td>'.$consultation_abcde->diar_w_dehy_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Diarrhea no dehydration</td>
                    <td>'.$consultation_abcde->diar_no_dehy_5m_total.'</td>
                    <td>'.$consultation_abcde->diar_no_dehy_5f_total.'</td>
                    <td>'.$consultation_abcde->diar_no_dehy_19m_total.'</td>
                    <td>'.$consultation_abcde->diar_no_dehy_19f_total.'</td>
                    <td>'.$consultation_abcde->diar_no_dehy_20m_total.'</td>
                    <td>'.$consultation_abcde->diar_no_dehy_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Bloody diarrhea</td>
                    <td>'.$consultation_abcde->blood_diar_5m_total.'</td>
                    <td>'.$consultation_abcde->blood_diar_5f_total.'</td>
                    <td>'.$consultation_abcde->blood_diar_19m_total.'</td>
                    <td>'.$consultation_abcde->blood_diar_19f_total.'</td>
                    <td>'.$consultation_abcde->blood_diar_20m_total.'</td>
                    <td>'.$consultation_abcde->blood_diar_20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">4</td>
                    <td class="left">Food poisoning</td>
                    <td>'.$consultation_abcde->food_poison_5m_total.'</td>
                    <td>'.$consultation_abcde->food_poison_5f_total.'</td>
                    <td>'.$consultation_abcde->food_poison_19m_total.'</td>
                    <td>'.$consultation_abcde->food_poison_19f_total.'</td>
                    <td>'.$consultation_abcde->food_poison_20m_total.'</td>
                    <td>'.$consultation_abcde->food_poison_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Ear infections</td>
                    <td>'.$consultation_abcde->ear_infect_5m_total.'</td>
                    <td>'.$consultation_abcde->ear_infect_5f_total.'</td>
                    <td>'.$consultation_abcde->ear_infect_19m_total.'</td>
                    <td>'.$consultation_abcde->ear_infect_19f_total.'</td>
                    <td>'.$consultation_abcde->ear_infect_20m_total.'</td>
                    <td>'.$consultation_abcde->ear_infect_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Schistosomiasis</td>
                    <td>'.$consultation_abcde->schisto_5m_total.'</td>
                    <td>'.$consultation_abcde->schisto_5f_total.'</td>
                    <td>'.$consultation_abcde->schisto_19m_total.'</td>
                    <td>'.$consultation_abcde->schisto_19f_total.'</td>
                    <td>'.$consultation_abcde->schisto_20m_total.'</td>
                    <td>'.$consultation_abcde->schisto_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Ascarislumbricoides</td>
                    <td>'.$consultation_abcde->ascaris_5m_total.'</td>
                    <td>'.$consultation_abcde->ascaris_5f_total.'</td>
                    <td>'.$consultation_abcde->ascaris_19m_total.'</td>
                    <td>'.$consultation_abcde->ascaris_19f_total.'</td>
                    <td>'.$consultation_abcde->ascaris_20m_total.'</td>
                    <td>'.$consultation_abcde->ascaris_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">Trichuristrichiura</td>
                    <td>'.$consultation_abcde->trichu_5m_total.'</td>
                    <td>'.$consultation_abcde->trichu_5f_total.'</td>
                    <td>'.$consultation_abcde->trichu_19m_total.'</td>
                    <td>'.$consultation_abcde->trichu_19f_total.'</td>
                    <td>'.$consultation_abcde->trichu_20m_total.'</td>
                    <td>'.$consultation_abcde->trichu_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Hookworm</td>
                    <td>'.$consultation_abcde->hook_5m_total.'</td>
                    <td>'.$consultation_abcde->hook_5f_total.'</td>
                    <td>'.$consultation_abcde->hook_19m_total.'</td>
                    <td>'.$consultation_abcde->hook_19f_total.'</td>
                    <td>'.$consultation_abcde->hook_20m_total.'</td>
                    <td>'.$consultation_abcde->hook_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td class="left">Entamoeba</td>
                    <td>'.$consultation_abcde->entam_5m_total.'</td>
                    <td>'.$consultation_abcde->entam_5f_total.'</td>
                    <td>'.$consultation_abcde->entam_19m_total.'</td>
                    <td>'.$consultation_abcde->entam_19f_total.'</td>
                    <td>'.$consultation_abcde->entam_20m_total.'</td>
                    <td>'.$consultation_abcde->entam_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td class="left">Giardia</td>
                    <td>'.$consultation_abcde->giardia_5m_total.'</td>
                    <td>'.$consultation_abcde->giardia_5f_total.'</td>
                    <td>'.$consultation_abcde->giardia_19m_total.'</td>
                    <td>'.$consultation_abcde->giardia_19f_total.'</td>
                    <td>'.$consultation_abcde->giardia_20m_total.'</td>
                    <td>'.$consultation_abcde->giardia_20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">12</td>
                    <td class="left">Taenia</td>
                    <td>'.$consultation_abcde->taenia_5m_total.'</td>
                    <td>'.$consultation_abcde->taenia_5f_total.'</td>
                    <td>'.$consultation_abcde->taenia_19m_total.'</td>
                    <td>'.$consultation_abcde->taenia_19f_total.'</td>
                    <td>'.$consultation_abcde->taenia_20m_total.'</td>
                    <td>'.$consultation_abcde->taenia_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td class="left">Malaria simple (not pregnant)</td>
                    <td>'.$consultation_abcde->malaria_s_5m_total.'</td>
                    <td>'.$consultation_abcde->malaria_s_5f_total.'</td>
                    <td>'.$consultation_abcde->malaria_s_19m_total.'</td>
                    <td>'.$consultation_abcde->malaria_s_19f_total.'</td>
                    <td>'.$consultation_abcde->malaria_s_20m_total.'</td>
                    <td>'.$consultation_abcde->malaria_s_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td class="left">Malaria with minor digestive symptoms (not pregnant)</td>
                    <td>'.$consultation_abcde->malaria_dig_5m_total.'</td>
                    <td>'.$consultation_abcde->malaria_dig_5f_total.'</td>
                    <td>'.$consultation_abcde->malaria_dig_19m_total.'</td>
                    <td>'.$consultation_abcde->malaria_dig_19f_total.'</td>
                    <td>'.$consultation_abcde->malaria_dig_20m_total.'</td>
                    <td>'.$consultation_abcde->malaria_dig_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td class="left">Herpes simpplex infections</td>
                    <td>'.$consultation_abcde->herpes_s_5m_total.'</td>
                    <td>'.$consultation_abcde->herpes_s_5f_total.'</td>
                    <td>'.$consultation_abcde->herpes_s_19m_total.'</td>
                    <td>'.$consultation_abcde->herpes_s_19f_total.'</td>
                    <td>'.$consultation_abcde->herpes_s_20m_total.'</td>
                    <td>'.$consultation_abcde->herpes_s_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td class="left">Meningitis suspected</td>
                    <td>'.$consultation_abcde->mening_5m_total.'</td>
                    <td>'.$consultation_abcde->mening_5f_total.'</td>
                    <td>'.$consultation_abcde->mening_19m_total.'</td>
                    <td>'.$consultation_abcde->mening_19f_total.'</td>
                    <td>'.$consultation_abcde->mening_20m_total.'</td>
                    <td>'.$consultation_abcde->mening_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td class="left">Pneumonia simple</td>
                    <td>'.$consultation_abcde->pneumonia_simp_5m_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_simp_5f_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_simp_19m_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_simp_19f_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_simp_20m_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_simp_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td class="left">Pneumonia severe</td>
                    <td>'.$consultation_abcde->pneumonia_sev_5m_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_sev_5f_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_sev_19m_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_sev_19f_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_sev_20m_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_sev_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td class="left">Influenza/Syndrome gripal</td>
                    <td>'.$consultation_abcde->grip_5m_total.'</td>
                    <td>'.$consultation_abcde->grip_5f_total.'</td>
                    <td>'.$consultation_abcde->grip_19m_total.'</td>
                    <td>'.$consultation_abcde->grip_19f_total.'</td>
                    <td>'.$consultation_abcde->grip_20m_total.'</td>
                    <td>'.$consultation_abcde->grip_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td class="left">Respiratory infections acute (ARI) other</td>
                    <td>'.$consultation_abcde->ari_5m_total.'</td>
                    <td>'.$consultation_abcde->ari_5f_total.'</td>
                    <td>'.$consultation_abcde->ari_19m_total.'</td>
                    <td>'.$consultation_abcde->ari_19f_total.'</td>
                    <td>'.$consultation_abcde->ari_20m_total.'</td>
                    <td>'.$consultation_abcde->ari_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td class="left">Gastritis and duodenitis</td>
                    <td>'.$consultation_abcde->gast_duoden_5m_total.'</td>
                    <td>'.$consultation_abcde->gast_duoden_5f_total.'</td>
                    <td>'.$consultation_abcde->gast_duoden_19m_total.'</td>
                    <td>'.$consultation_abcde->gast_duoden_19f_total.'</td>
                    <td>'.$consultation_abcde->gast_duoden_20m_total.'</td>
                    <td>'.$consultation_abcde->gast_duoden_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td class="left">Abscesses</td>
                    <td>'.$consultation_abcde->absces_5m_total.'</td>
                    <td>'.$consultation_abcde->absces_5f_total.'</td>
                    <td>'.$consultation_abcde->absces_19m_total.'</td>
                    <td>'.$consultation_abcde->absces_19f_total.'</td>
                    <td>'.$consultation_abcde->absces_20m_total.'</td>
                    <td>'.$consultation_abcde->absces_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td class="left">Ulcers of skin</td>
                    <td>'.$consultation_abcde->ulcers_5m_total.'</td>
                    <td>'.$consultation_abcde->ulcers_5f_total.'</td>
                    <td>'.$consultation_abcde->ulcers_19m_total.'</td>
                    <td>'.$consultation_abcde->ulcers_19f_total.'</td>
                    <td>'.$consultation_abcde->ulcers_20m_total.'</td>
                    <td>'.$consultation_abcde->ulcers_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>24</td>
                    <td class="left">Skin infection scabies</td>
                    <td>'.$consultation_abcde->scabies_5m_total.'</td>
                    <td>'.$consultation_abcde->scabies_5f_total.'</td>
                    <td>'.$consultation_abcde->scabies_19m_total.'</td>
                    <td>'.$consultation_abcde->scabies_19f_total.'</td>
                    <td>'.$consultation_abcde->scabies_20m_total.'</td>
                    <td>'.$consultation_abcde->scabies_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>25</td>
                    <td class="left">Skin infection fungal (mycoses) superficial</td>
                    <td>'.$consultation_abcde->mycoses_5m_total.'</td>
                    <td>'.$consultation_abcde->mycoses_5f_total.'</td>
                    <td>'.$consultation_abcde->mycoses_19m_total.'</td>
                    <td>'.$consultation_abcde->mycoses_19f_total.'</td>
                    <td>'.$consultation_abcde->mycoses_20m_total.'</td>
                    <td>'.$consultation_abcde->mycoses_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>26</td>
                    <td class="left">Skin infections other</td>
                    <td>'.$consultation_abcde->si_others_5m_total.'</td>
                    <td>'.$consultation_abcde->si_others_5f_total.'</td>
                    <td>'.$consultation_abcde->si_others_19m_total.'</td>
                    <td>'.$consultation_abcde->si_others_19f_total.'</td>
                    <td>'.$consultation_abcde->si_others_20m_total.'</td>
                    <td>'.$consultation_abcde->si_others_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>27</td>
                    <td class="left">Urinary tract infections</td>
                    <td>'.$consultation_abcde->urinary_ti_5m_total.'</td>
                    <td>'.$consultation_abcde->urinary_ti_5f_total.'</td>
                    <td>'.$consultation_abcde->urinary_ti_19m_total.'</td>
                    <td>'.$consultation_abcde->urinary_ti_19f_total.'</td>
                    <td>'.$consultation_abcde->urinary_ti_20m_total.'</td>
                    <td>'.$consultation_abcde->urinary_ti_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>28</td>
                    <td class="left">Anemia (confirmed)</td>
                    <td>'.$consultation_abcde->anemia_5m_total.'</td>
                    <td>'.$consultation_abcde->anemia_5f_total.'</td>
                    <td>'.$consultation_abcde->anemia_19m_total.'</td>
                    <td>'.$consultation_abcde->anemia_19f_total.'</td>
                    <td>'.$consultation_abcde->anemia_20m_total.'</td>
                    <td>'.$consultation_abcde->anemia_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>29</td>
                    <td class="left">Measles suspected</td>
                    <td>'.$consultation_abcde->measles_susp_5m_total.'</td>
                    <td>'.$consultation_abcde->measles_susp_5f_total.'</td>
                    <td>'.$consultation_abcde->measles_susp_19m_total.'</td>
                    <td>'.$consultation_abcde->measles_susp_19f_total.'</td>
                    <td>'.$consultation_abcde->measles_susp_20m_total.'</td>
                    <td>'.$consultation_abcde->measles_susp_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>30</td>
                    <td class="left">Measles confirmed cases</td>
                    <td>'.$consultation_abcde->measles_conf_5m_total.'</td>
                    <td>'.$consultation_abcde->measles_conf_5f_total.'</td>
                    <td>'.$consultation_abcde->measles_conf_19m_total.'</td>
                    <td>'.$consultation_abcde->measles_conf_19f_total.'</td>
                    <td>'.$consultation_abcde->measles_conf_20m_total.'</td>
                    <td>'.$consultation_abcde->measles_conf_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>31</td>
                    <td class="left">Rubella confirmed cases</td>
                    <td>'.$consultation_abcde->rubella_conf_5m_total.'</td>
                    <td>'.$consultation_abcde->rubella_conf_5f_total.'</td>
                    <td>'.$consultation_abcde->rubella_conf_19m_total.'</td>
                    <td>'.$consultation_abcde->rubella_conf_19f_total.'</td>
                    <td>'.$consultation_abcde->rubella_conf_20m_total.'</td>
                    <td>'.$consultation_abcde->rubella_conf_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>32</td>
                    <td class="left">Acute flaccid paralysis cases</td>
                    <td>'.$consultation_abcde->flaccid_paraly_5m_total.'</td>
                    <td>'.$consultation_abcde->flaccid_paraly_5f_total.'</td>
                    <td>'.$consultation_abcde->flaccid_paraly_19m_total.'</td>
                    <td>'.$consultation_abcde->flaccid_paraly_19f_total.'</td>
                    <td>'.$consultation_abcde->flaccid_paraly_20m_total.'</td>
                    <td>'.$consultation_abcde->flaccid_paraly_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>33</td>
                    <td class="left">Tetanus</td>
                    <td>'.$consultation_abcde->tetanus_5m_total.'</td>
                    <td>'.$consultation_abcde->tetanus_5f_total.'</td>
                    <td>'.$consultation_abcde->tetanus_19m_total.'</td>
                    <td>'.$consultation_abcde->tetanus_19f_total.'</td>
                    <td>'.$consultation_abcde->tetanus_20m_total.'</td>
                    <td>'.$consultation_abcde->tetanus_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>34</td>
                    <td class="left">Viral hepatitis (A, B, Chronic & others)</td>
                    <td>'.$consultation_abcde->hepatitis_5m_total.'</td>
                    <td>'.$consultation_abcde->hepatitis_5f_total.'</td>
                    <td>'.$consultation_abcde->hepatitis_19m_total.'</td>
                    <td>'.$consultation_abcde->hepatitis_19f_total.'</td>
                    <td>'.$consultation_abcde->hepatitis_20m_total.'</td>
                    <td>'.$consultation_abcde->hepatitis_20f_total.'</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <br>';
        } else {
            $output .= '
              <h3 class="center">II] Outpatient consultations</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $consultation_fg=$this->research_model->consultation_fg($date);

        if ($consultation_fg->fractures_5m_total != null) {
            $output.='
          <div class="row">
            <h4>F) New cases of HIV/AIDS/STI/ and non-communicable diseases</h4>
          </div>
          <div class="row">
            <table id="F2" class="center">
              <thead>
                <tr>
                  <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="left">Fractures</td>
                  <td>'.$consultation_fg->fractures_5m_total.'</td>
                  <td>'.$consultation_fg->fractures_5f_total.'</td>
                  <td>'.$consultation_fg->fractures_19m_total.'</td>
                  <td>'.$consultation_fg->fractures_19f_total.'</td>
                  <td>'.$consultation_fg->fractures_20m_total.'</td>
                  <td>'.$consultation_fg->fractures_20f_total.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Physical traumas, other than fractures</td>
                  <td>'.$consultation_fg->phys_traumas_5m_total.'</td>
                  <td>'.$consultation_fg->phys_traumas_5f_total.'</td>
                  <td>'.$consultation_fg->phys_traumas_19m_total.'</td>
                  <td>'.$consultation_fg->phys_traumas_19f_total.'</td>
                  <td>'.$consultation_fg->phys_traumas_20m_total.'</td>
                  <td>'.$consultation_fg->phys_traumas_20f_total.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Bone and joint disorder, other than fractures</td>
                  <td>'.$consultation_fg->bone_joint_disord_5m_total.'</td>
                  <td>'.$consultation_fg->bone_joint_disord_5f_total.'</td>
                  <td>'.$consultation_fg->bone_joint_disord_19m_total.'</td>
                  <td>'.$consultation_fg->bone_joint_disord_19f_total.'</td>
                  <td>'.$consultation_fg->bone_joint_disord_20m_total.'</td>
                  <td>'.$consultation_fg->bone_joint_disord_20f_total.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Gynecological problems</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td>'.$consultation_fg->gyneco_pb_19f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$consultation_fg->gyneco_pb_20f_total.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">AIDS clinical</td>
                  <td>'.$consultation_fg->aids_5m_total.'</td>
                  <td>'.$consultation_fg->aids_5f_total.'</td>
                  <td>'.$consultation_fg->aids_19m_total.'</td>
                  <td>'.$consultation_fg->aids_19f_total.'</td>
                  <td>'.$consultation_fg->aids_20m_total.'</td>
                  <td>'.$consultation_fg->aids_20f_total.'</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left">Skin infection opportunistic</td>
                  <td>'.$consultation_fg->si_opport_5m_total.'</td>
                  <td>'.$consultation_fg->si_opport_5f_total.'</td>
                  <td>'.$consultation_fg->si_opport_19m_total.'</td>
                  <td>'.$consultation_fg->si_opport_19f_total.'</td>
                  <td>'.$consultation_fg->si_opport_20m_total.'</td>
                  <td>'.$consultation_fg->si_opport_20f_total.'</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left">Herpes zoster (zona/shingles)</td>
                  <td>'.$consultation_fg->herpes_z_5m_total.'</td>
                  <td>'.$consultation_fg->herpes_z_5f_total.'</td>
                  <td>'.$consultation_fg->herpes_z_19m_total.'</td>
                  <td>'.$consultation_fg->herpes_z_19f_total.'</td>
                  <td>'.$consultation_fg->herpes_z_20m_total.'</td>
                  <td>'.$consultation_fg->herpes_z_20f_total.'</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left">Candidiasis oral</td>
                  <td>'.$consultation_fg->cand_oral_5m_total.'</td>
                  <td>'.$consultation_fg->cand_oral_5f_total.'</td>
                  <td>'.$consultation_fg->cand_oral_19m_total.'</td>
                  <td>'.$consultation_fg->cand_oral_19f_total.'</td>
                  <td>'.$consultation_fg->cand_oral_20m_total.'</td>
                  <td>'.$consultation_fg->cand_oral_20f_total.'</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left">Fever chronic (>1 month)</td>
                  <td>'.$consultation_fg->fever_5m_total.'</td>
                  <td>'.$consultation_fg->fever_5f_total.'</td>
                  <td>'.$consultation_fg->fever_19m_total.'</td>
                  <td>'.$consultation_fg->fever_19f_total.'</td>
                  <td>'.$consultation_fg->fever_20m_total.'</td>
                  <td>'.$consultation_fg->fever_20f_total.'</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td class="left">Diarrhea chronic opportunistic infections</td>
                  <td>'.$consultation_fg->diar_chro_opp_infect_5m_total.'</td>
                  <td>'.$consultation_fg->diar_chro_opp_infect_5f_total.'</td>
                  <td>'.$consultation_fg->diar_chro_opp_infect_19m_total.'</td>
                  <td>'.$consultation_fg->diar_chro_opp_infect_19f_total.'</td>
                  <td>'.$consultation_fg->diar_chro_opp_infect_20m_total.'</td>
                  <td>'.$consultation_fg->diar_chro_opp_infect_20f_total.'</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td class="left">Needle stick-injuries (or other health worker HIV exposure)</td>
                  <td>'.$consultation_fg->needle_5m_total.'</td>
                  <td>'.$consultation_fg->needle_5f_total.'</td>
                  <td>'.$consultation_fg->needle_19m_total.'</td>
                  <td>'.$consultation_fg->needle_19f_total.'</td>
                  <td>'.$consultation_fg->needle_20m_total.'</td>
                  <td>'.$consultation_fg->needle_20f_total.'</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td class="left">Goitre</td>
                  <td>'.$consultation_fg->goitre_5m_total.'</td>
                  <td>'.$consultation_fg->goitre_5f_total.'</td>
                  <td>'.$consultation_fg->goitre_19m_total.'</td>
                  <td>'.$consultation_fg->goitre_19f_total.'</td>
                  <td>'.$consultation_fg->goitre_20m_total.'</td>
                  <td>'.$consultation_fg->goitre_20f_total.'</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td class="left">Vitamin A deficiency - Night blindness</td>
                  <td>'.$consultation_fg->va_def_5m_total.'</td>
                  <td>'.$consultation_fg->va_def_5f_total.'</td>
                  <td>'.$consultation_fg->va_def_19m_total.'</td>
                  <td>'.$consultation_fg->va_def_19f_total.'</td>
                  <td>'.$consultation_fg->va_def_20m_total.'</td>
                  <td>'.$consultation_fg->va_def_20f_total.'</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td class="left">Leprosy (MB + PB)</td>
                  <td>'.$consultation_fg->leprosy_5m_total.'</td>
                  <td>'.$consultation_fg->leprosy_5f_total.'</td>
                  <td>'.$consultation_fg->leprosy_19m_total.'</td>
                  <td>'.$consultation_fg->leprosy_19f_total.'</td>
                  <td>'.$consultation_fg->leprosy_20m_total.'</td>
                  <td>'.$consultation_fg->leprosy_20f_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>
          <br>
          <div class="row">
            <div class="col-xs-6">
              <h4>Ga) Eye diseases</h4>
            </div>
            <div class="col-xs-6">
              <h4>Gb) Oral diseases</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <table id="Ga" class="center">
                <thead>
                  <tr>
                    <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Glaucoma</td>
                    <td>'.$consultation_fg->glaucoma_19m_total.'</td>
                    <td>'.$consultation_fg->glaucoma_19f_total.'</td>
                    <td>'.$consultation_fg->glaucoma_39m_total.'</td>
                    <td>'.$consultation_fg->glaucoma_39f_total.'</td>
                    <td>'.$consultation_fg->glaucoma_40m_total.'</td>
                    <td>'.$consultation_fg->glaucoma_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Cataract</td>
                    <td>'.$consultation_fg->cataract_19m_total.'</td>
                    <td>'.$consultation_fg->cataract_19f_total.'</td>
                    <td>'.$consultation_fg->cataract_39m_total.'</td>
                    <td>'.$consultation_fg->cataract_39f_total.'</td>
                    <td>'.$consultation_fg->cataract_40m_total.'</td>
                    <td>'.$consultation_fg->cataract_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Refractive error</td>
                    <td>'.$consultation_fg->refrac_error_19m_total.'</td>
                    <td>'.$consultation_fg->refrac_error_19f_total.'</td>
                    <td>'.$consultation_fg->refrac_error_39m_total.'</td>
                    <td>'.$consultation_fg->refrac_error_39f_total.'</td>
                    <td>'.$consultation_fg->refrac_error_40m_total.'</td>
                    <td>'.$consultation_fg->refrac_error_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Diabetic retinopathy</td>
                    <td>'.$consultation_fg->diab_retino_19m_total.'</td>
                    <td>'.$consultation_fg->diab_retino_19f_total.'</td>
                    <td>'.$consultation_fg->diab_retino_39m_total.'</td>
                    <td>'.$consultation_fg->diab_retino_39f_total.'</td>
                    <td>'.$consultation_fg->diab_retino_40m_total.'</td>
                    <td>'.$consultation_fg->diab_retino_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Conjunctivitis</td>
                    <td>'.$consultation_fg->conjunctivitis_19m_total.'</td>
                    <td>'.$consultation_fg->conjunctivitis_19f_total.'</td>
                    <td>'.$consultation_fg->conjunctivitis_39m_total.'</td>
                    <td>'.$consultation_fg->conjunctivitis_39f_total.'</td>
                    <td>'.$consultation_fg->conjunctivitis_40m_total.'</td>
                    <td>'.$consultation_fg->conjunctivitis_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Pinguecula</td>
                    <td>'.$consultation_fg->pinguecula_19m_total.'</td>
                    <td>'.$consultation_fg->pinguecula_19f_total.'</td>
                    <td>'.$consultation_fg->pinguecula_39m_total.'</td>
                    <td>'.$consultation_fg->pinguecula_39f_total.'</td>
                    <td>'.$consultation_fg->pinguecula_40m_total.'</td>
                    <td>'.$consultation_fg->pinguecula_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Uveitis</td>
                    <td>'.$consultation_fg->uveitis_19m_total.'</td>
                    <td>'.$consultation_fg->uveitis_19f_total.'</td>
                    <td>'.$consultation_fg->uveitis_39m_total.'</td>
                    <td>'.$consultation_fg->uveitis_39f_total.'</td>
                    <td>'.$consultation_fg->uveitis_40m_total.'</td>
                    <td>'.$consultation_fg->uveitis_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">Eye trauma</td>
                    <td>'.$consultation_fg->eye_trauma_19m_total.'</td>
                    <td>'.$consultation_fg->eye_trauma_19f_total.'</td>
                    <td>'.$consultation_fg->eye_trauma_39m_total.'</td>
                    <td>'.$consultation_fg->eye_trauma_39f_total.'</td>
                    <td>'.$consultation_fg->eye_trauma_40m_total.'</td>
                    <td>'.$consultation_fg->eye_trauma_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Eye problem other</td>
                    <td>'.$consultation_fg->eye_pb_19m_total.'</td>
                    <td>'.$consultation_fg->eye_pb_19f_total.'</td>
                    <td>'.$consultation_fg->eye_pb_39m_total.'</td>
                    <td>'.$consultation_fg->eye_pb_39f_total.'</td>
                    <td>'.$consultation_fg->eye_pb_40m_total.'</td>
                    <td>'.$consultation_fg->eye_pb_40f_total.'</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-xs-6">
              <table id="Gb" class="center">
                <thead>
                  <tr>
                    <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                </thead>
                <tbody>
                  <tr>
                    <td>10</td>
                    <td class="left">Dental caries</td>
                    <td>'.$consultation_fg->dent_caries_19m_total.'</td>
                    <td>'.$consultation_fg->dent_caries_19f_total.'</td>
                    <td>'.$consultation_fg->dent_caries_39m_total.'</td>
                    <td>'.$consultation_fg->dent_caries_39f_total.'</td>
                    <td>'.$consultation_fg->dent_caries_40m_total.'</td>
                    <td>'.$consultation_fg->dent_caries_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td class="left">Periodontal disease</td>
                    <td>'.$consultation_fg->perio_diseas_19m_total.'</td>
                    <td>'.$consultation_fg->perio_diseas_19f_total.'</td>
                    <td>'.$consultation_fg->perio_diseas_39m_total.'</td>
                    <td>'.$consultation_fg->perio_diseas_39f_total.'</td>
                    <td>'.$consultation_fg->perio_diseas_40m_total.'</td>
                    <td>'.$consultation_fg->perio_diseas_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td class="left">Other teeth and gum infections</td>
                    <td>'.$consultation_fg->other_teeth_19m_total.'</td>
                    <td>'.$consultation_fg->other_teeth_19f_total.'</td>
                    <td>'.$consultation_fg->other_teeth_39m_total.'</td>
                    <td>'.$consultation_fg->other_teeth_39f_total.'</td>
                    <td>'.$consultation_fg->other_teeth_40m_total.'</td>
                    <td>'.$consultation_fg->other_teeth_40f_total.'</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>';
        }

        $mental_health = $this->research_model->mental_health($date);

        if ($mental_health->anxiety_nc19m_total != null) {
            $output .= '
              <h3 class="center">III] Mental health</h3>
              <h4>A) Summary</h4>
              <table id="A3" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="center">1</td>
                    <td class="left">Mental patients under follow up</td>
                    <td>'.$mental_health->follow_up_total.'</td>
                    </tr>
                  <tr>
                    <td class="center">2</td>
                    <td class="left">Mental problems referred to higher level</td>
                    <td>'.$mental_health->higher_level_total.'</td>
                    </tr>
                  <tr>
                    <td class="center">3</td>
                    <td class="left">Mental problems hospitalized</td>
                    <td>'.$mental_health->hospitalized_total.'</td>
                  </tr>
                </tbody>
              </table>
              <br>
        			<h4>B) Diagnosis</h4>
  				    <table id="B3" class="center">
  				      <thead>
  				        <tr>
  				          <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				          <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				          <th colspan="6">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				          <th colspan="6">Old cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				        </tr>
  				        <tr>
  				          <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				          <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				          <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  			            <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  			            <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  			            <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				        </tr>
  				        <tr>
  				          <th>M</th>
  				          <th>F</th>
  				          <th>M</th>
  				          <th>F</th>
  				          <th>M</th>
  				          <th>F</th>
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
  				          <td class="center">1</td>
  				          <td class="left">Anxiety disorders</td>
  				          <td>'.$mental_health->anxiety_nc19m_total.'</td>
  				          <td>'.$mental_health->anxiety_nc19f_total.'</td>
  				          <td>'.$mental_health->anxiety_nc39m_total.'</td>
  				          <td>'.$mental_health->anxiety_nc39f_total.'</td>
  				          <td>'.$mental_health->anxiety_nc40m_total.'</td>
  				          <td>'.$mental_health->anxiety_nc40f_total.'</td>
  				          <td>'.$mental_health->anxiety_oc19m_total.'</td>
  				          <td>'.$mental_health->anxiety_oc19f_total.'</td>
  				          <td>'.$mental_health->anxiety_oc39m_total.'</td>
  				          <td>'.$mental_health->anxiety_oc39f_total.'</td>
  				          <td>'.$mental_health->anxiety_oc40m_total.'</td>
  				          <td>'.$mental_health->anxiety_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">2</td>
  				          <td class="left">Post-traumatic stress disorders</td>
  				          <td>'.$mental_health->stress_nc19m_total.'</td>
  				          <td>'.$mental_health->stress_nc19f_total.'</td>
  				          <td>'.$mental_health->stress_nc39m_total.'</td>
  				          <td>'.$mental_health->stress_nc39f_total.'</td>
  				          <td>'.$mental_health->stress_nc40m_total.'</td>
  				          <td>'.$mental_health->stress_nc40f_total.'</td>
  				          <td>'.$mental_health->stress_oc19m_total.'</td>
  				          <td>'.$mental_health->stress_oc19f_total.'</td>
  				          <td>'.$mental_health->stress_oc39m_total.'</td>
  				          <td>'.$mental_health->stress_oc39f_total.'</td>
  				          <td>'.$mental_health->stress_oc40m_total.'</td>
  				          <td>'.$mental_health->stress_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">3</td>
  				          <td class="left">Schizophrenia and other psychoses</td>
  				          <td>'.$mental_health->schizo_nc19m_total.'</td>
  				          <td>'.$mental_health->schizo_nc19f_total.'</td>
  				          <td>'.$mental_health->schizo_nc39m_total.'</td>
  				          <td>'.$mental_health->schizo_nc39f_total.'</td>
  				          <td>'.$mental_health->schizo_nc40m_total.'</td>
  				          <td>'.$mental_health->schizo_nc40f_total.'</td>
  				          <td>'.$mental_health->schizo_oc19m_total.'</td>
  				          <td>'.$mental_health->schizo_oc19f_total.'</td>
  				          <td>'.$mental_health->schizo_oc39m_total.'</td>
  				          <td>'.$mental_health->schizo_oc39f_total.'</td>
  				          <td>'.$mental_health->schizo_oc40m_total.'</td>
  				          <td>'.$mental_health->schizo_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">4</td>
  				          <td class="left">Somatoform disorders</td>
  				          <td>'.$mental_health->soma_nc19m_total.'</td>
  				          <td>'.$mental_health->soma_nc19f_total.'</td>
  				          <td>'.$mental_health->soma_nc39m_total.'</td>
  				          <td>'.$mental_health->soma_nc39f_total.'</td>
  				          <td>'.$mental_health->soma_nc40m_total.'</td>
  				          <td>'.$mental_health->soma_nc40f_total.'</td>
  				          <td>'.$mental_health->soma_oc19m_total.'</td>
  				          <td>'.$mental_health->soma_oc19f_total.'</td>
  				          <td>'.$mental_health->soma_oc39m_total.'</td>
  				          <td>'.$mental_health->soma_oc39f_total.'</td>
  				          <td>'.$mental_health->soma_oc40m_total.'</td>
  				          <td>'.$mental_health->soma_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">5</td>
  				          <td class="left">Behavioral and emotional disorders with onset usually occurring in childhood and adolescence</td>
  				          <td>'.$mental_health->child_nc19m_total.'</td>
  				          <td>'.$mental_health->child_nc19f_total.'</td>
  				          <td>'.$mental_health->child_nc39m_total.'</td>
  				          <td>'.$mental_health->child_nc39f_total.'</td>
  				          <td>'.$mental_health->child_nc40m_total.'</td>
  				          <td>'.$mental_health->child_nc40f_total.'</td>
  				          <td>'.$mental_health->child_oc19m_total.'</td>
  				          <td>'.$mental_health->child_oc19f_total.'</td>
  				          <td>'.$mental_health->child_oc39m_total.'</td>
  				          <td>'.$mental_health->child_oc39f_total.'</td>
  				          <td>'.$mental_health->child_oc40m_total.'</td>
  				          <td>'.$mental_health->child_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">6</td>
  				          <td class="left">Mental and behavioral disorder due to use of alcohol</td>
  				          <td>'.$mental_health->alcohol_nc19m_total.'</td>
  				          <td>'.$mental_health->alcohol_nc19f_total.'</td>
  				          <td>'.$mental_health->alcohol_nc39m_total.'</td>
  				          <td>'.$mental_health->alcohol_nc39f_total.'</td>
  				          <td>'.$mental_health->alcohol_nc40m_total.'</td>
  				          <td>'.$mental_health->alcohol_nc40f_total.'</td>
  				          <td>'.$mental_health->alcohol_oc19m_total.'</td>
  				          <td>'.$mental_health->alcohol_oc19f_total.'</td>
  				          <td>'.$mental_health->alcohol_oc39m_total.'</td>
  				          <td>'.$mental_health->alcohol_oc39f_total.'</td>
  				          <td>'.$mental_health->alcohol_oc40m_total.'</td>
  				          <td>'.$mental_health->alcohol_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">7</td>
  				          <td class="left">Mental and behavioral disorder due to substance abuse</td>
  				          <td>'.$mental_health->drugs_nc19m_total.'</td>
  				          <td>'.$mental_health->drugs_nc19f_total.'</td>
  				          <td>'.$mental_health->drugs_nc39m_total.'</td>
  				          <td>'.$mental_health->drugs_nc39f_total.'</td>
  				          <td>'.$mental_health->drugs_nc40m_total.'</td>
  				          <td>'.$mental_health->drugs_nc40f_total.'</td>
  				          <td>'.$mental_health->drugs_oc19m_total.'</td>
  				          <td>'.$mental_health->drugs_oc19f_total.'</td>
  				          <td>'.$mental_health->drugs_oc39m_total.'</td>
  				          <td>'.$mental_health->drugs_oc39f_total.'</td>
  				          <td>'.$mental_health->drugs_oc40m_total.'</td>
  				          <td>'.$mental_health->drugs_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">8</td>
  				          <td class="left">Depression</td>
  				          <td>'.$mental_health->dep_nc19m_total.'</td>
  				          <td>'.$mental_health->dep_nc19f_total.'</td>
  				          <td>'.$mental_health->dep_nc39m_total.'</td>
  				          <td>'.$mental_health->dep_nc39f_total.'</td>
  				          <td>'.$mental_health->dep_nc40m_total.'</td>
  				          <td>'.$mental_health->dep_nc40f_total.'</td>
  				          <td>'.$mental_health->dep_oc19m_total.'</td>
  				          <td>'.$mental_health->dep_oc19f_total.'</td>
  				          <td>'.$mental_health->dep_oc39m_total.'</td>
  				          <td>'.$mental_health->dep_oc39f_total.'</td>
  				          <td>'.$mental_health->dep_oc40m_total.'</td>
  				          <td>'.$mental_health->dep_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">9</td>
  				          <td class="left">Suicide attempted</td>
  				          <td>'.$mental_health->suicid_att_nc19m_total.'</td>
  				          <td>'.$mental_health->suicid_att_nc19f_total.'</td>
  				          <td>'.$mental_health->suicid_att_nc39m_total.'</td>
  				          <td>'.$mental_health->suicid_att_nc39f_total.'</td>
  				          <td>'.$mental_health->suicid_att_nc40m_total.'</td>
  				          <td>'.$mental_health->suicid_att_nc40f_total.'</td>
  				          <td>'.$mental_health->suicid_att_oc19m_total.'</td>
  				          <td>'.$mental_health->suicid_att_oc19f_total.'</td>
  				          <td>'.$mental_health->suicid_att_oc39m_total.'</td>
  				          <td>'.$mental_health->suicid_att_oc39f_total.'</td>
  				          <td>'.$mental_health->suicid_att_oc40m_total.'</td>
  				          <td>'.$mental_health->suicid_att_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">10</td>
  				          <td class="left">Suicide deaths</td>
  				          <td>'.$mental_health->suicid_d_nc19m_total.'</td>
  				          <td>'.$mental_health->suicid_d_nc19f_total.'</td>
  				          <td>'.$mental_health->suicid_d_nc39m_total.'</td>
  				          <td>'.$mental_health->suicid_d_nc39f_total.'</td>
  				          <td>'.$mental_health->suicid_d_nc40m_total.'</td>
  				          <td>'.$mental_health->suicid_d_nc40f_total.'</td>
  				          <td>'.$mental_health->suicid_d_oc19m_total.'</td>
  				          <td>'.$mental_health->suicid_d_oc19f_total.'</td>
  				          <td>'.$mental_health->suicid_d_oc39m_total.'</td>
  				          <td>'.$mental_health->suicid_d_oc39f_total.'</td>
  				          <td>'.$mental_health->suicid_d_oc40m_total.'</td>
  				          <td>'.$mental_health->suicid_d_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">11</td>
  				          <td class="left">Maniac episode</td>
  				          <td>'.$mental_health->maniac_nc19m_total.'</td>
  				          <td>'.$mental_health->maniac_nc19f_total.'</td>
  				          <td>'.$mental_health->maniac_nc39m_total.'</td>
  				          <td>'.$mental_health->maniac_nc39f_total.'</td>
  				          <td>'.$mental_health->maniac_nc40m_total.'</td>
  				          <td>'.$mental_health->maniac_nc40f_total.'</td>
  				          <td>'.$mental_health->maniac_oc19m_total.'</td>
  				          <td>'.$mental_health->maniac_oc19f_total.'</td>
  				          <td>'.$mental_health->maniac_oc39m_total.'</td>
  				          <td>'.$mental_health->maniac_oc39f_total.'</td>
  				          <td>'.$mental_health->maniac_oc40m_total.'</td>
  				          <td>'.$mental_health->maniac_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">12</td>
  				          <td class="left">Bipolar disorders</td>
  				          <td>'.$mental_health->bipolar_nc19m_total.'</td>
  				          <td>'.$mental_health->bipolar_nc19f_total.'</td>
  				          <td>'.$mental_health->bipolar_nc39m_total.'</td>
  				          <td>'.$mental_health->bipolar_nc39f_total.'</td>
  				          <td>'.$mental_health->bipolar_nc40m_total.'</td>
  				          <td>'.$mental_health->bipolar_nc40f_total.'</td>
  				          <td>'.$mental_health->bipolar_oc19m_total.'</td>
  				          <td>'.$mental_health->bipolar_oc19f_total.'</td>
  				          <td>'.$mental_health->bipolar_oc39m_total.'</td>
  				          <td>'.$mental_health->bipolar_oc39f_total.'</td>
  				          <td>'.$mental_health->bipolar_oc40m_total.'</td>
  				          <td>'.$mental_health->bipolar_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">13</td>
  				          <td class="left">Other psychological / Mental behavioral disorders</td>
  				          <td>'.$mental_health->other_psy_nc19m_total.'</td>
  				          <td>'.$mental_health->other_psy_nc19f_total.'</td>
  				          <td>'.$mental_health->other_psy_nc39m_total.'</td>
  				          <td>'.$mental_health->other_psy_nc39f_total.'</td>
  				          <td>'.$mental_health->other_psy_nc40m_total.'</td>
  				          <td>'.$mental_health->other_psy_nc40f_total.'</td>
  				          <td>'.$mental_health->other_psy_oc19m_total.'</td>
  				          <td>'.$mental_health->other_psy_oc19f_total.'</td>
  				          <td>'.$mental_health->other_psy_oc39m_total.'</td>
  				          <td>'.$mental_health->other_psy_oc39f_total.'</td>
  				          <td>'.$mental_health->other_psy_oc40m_total.'</td>
  				          <td>'.$mental_health->other_psy_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">14</td>
  				          <td class="left">Epilepsy</td>
  				          <td>'.$mental_health->epilepsy_nc19m_total.'</td>
  				          <td>'.$mental_health->epilepsy_nc19f_total.'</td>
  				          <td>'.$mental_health->epilepsy_nc39m_total.'</td>
  				          <td>'.$mental_health->epilepsy_nc39f_total.'</td>
  				          <td>'.$mental_health->epilepsy_nc40m_total.'</td>
  				          <td>'.$mental_health->epilepsy_nc40f_total.'</td>
  				          <td>'.$mental_health->epilepsy_oc19m_total.'</td>
  				          <td>'.$mental_health->epilepsy_oc19f_total.'</td>
  				          <td>'.$mental_health->epilepsy_oc39m_total.'</td>
  				          <td>'.$mental_health->epilepsy_oc39f_total.'</td>
  				          <td>'.$mental_health->epilepsy_oc40m_total.'</td>
  				          <td>'.$mental_health->epilepsy_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">15</td>
  				          <td class="left">Other neurological disorders</td>
  				          <td>'.$mental_health->other_neuro_nc19m_total.'</td>
  				          <td>'.$mental_health->other_neuro_nc19f_total.'</td>
  				          <td>'.$mental_health->other_neuro_nc39m_total.'</td>
  				          <td>'.$mental_health->other_neuro_nc39f_total.'</td>
  				          <td>'.$mental_health->other_neuro_nc40m_total.'</td>
  				          <td>'.$mental_health->other_neuro_nc40f_total.'</td>
  				          <td>'.$mental_health->other_neuro_oc19m_total.'</td>
  				          <td>'.$mental_health->other_neuro_oc19f_total.'</td>
  				          <td>'.$mental_health->other_neuro_oc39m_total.'</td>
  				          <td>'.$mental_health->other_neuro_oc39f_total.'</td>
  				          <td>'.$mental_health->other_neuro_oc40m_total.'</td>
  				          <td>'.$mental_health->other_neuro_oc40f_total.'</td>
  				        </tr>
  				      </tbody>
  				    </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">III] Mental health</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $chronic_disease=$this->research_model->chronic_disease($date);

        if ($chronic_disease) {
            $output.='
          <br>
          <h3 class="center">IV] Chronic diseases</h3>
          <div class="row">
            <table id="A4" class="center">
              <thead>
                <tr>
                  <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="6">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="6">Old Cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="6">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
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
                  <td>1</td>
                  <td class="left">Medical condition</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>1.1</td>
                  <td class="left">Hypertension</td>
                  <td>'.$chronic_disease->hyper_nc19m.'</td>
                  <td>'.$chronic_disease->hyper_nc19f.'</td>
                  <td>'.$chronic_disease->hyper_nc39m.'</td>
                  <td>'.$chronic_disease->hyper_nc39f.'</td>
                  <td>'.$chronic_disease->hyper_nc40m.'</td>
                  <td>'.$chronic_disease->hyper_nc40f.'</td>
                  <td>'.$chronic_disease->hyper_oc19m.'</td>
                  <td>'.$chronic_disease->hyper_oc19f.'</td>
                  <td>'.$chronic_disease->hyper_oc39m.'</td>
                  <td>'.$chronic_disease->hyper_oc39f.'</td>
                  <td>'.$chronic_disease->hyper_oc40m.'</td>
                  <td>'.$chronic_disease->hyper_oc40f.'</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Respiratory diseases</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>2.1</td>
                  <td class="left">Asthma intermittant</td>
                  <td>'.$chronic_disease->asth_int_nc19m.'</td>
                  <td>'.$chronic_disease->asth_int_nc19f.'</td>
                  <td>'.$chronic_disease->asth_int_nc39m.'</td>
                  <td>'.$chronic_disease->asth_int_nc39f.'</td>
                  <td>'.$chronic_disease->asth_int_nc40m.'</td>
                  <td>'.$chronic_disease->asth_int_nc40f.'</td>
                  <td>'.$chronic_disease->asth_int_oc19m.'</td>
                  <td>'.$chronic_disease->asth_int_oc19f.'</td>
                  <td>'.$chronic_disease->asth_int_oc39m.'</td>
                  <td>'.$chronic_disease->asth_int_oc39f.'</td>
                  <td>'.$chronic_disease->asth_int_oc40m.'</td>
                  <td>'.$chronic_disease->asth_int_oc40f.'</td>
                  <td>'.$chronic_disease->asth_int_d19m.'</td>
                  <td>'.$chronic_disease->asth_int_d19f.'</td>
                  <td>'.$chronic_disease->asth_int_d39m.'</td>
                  <td>'.$chronic_disease->asth_int_d39f.'</td>
                  <td>'.$chronic_disease->asth_int_d40m.'</td>
                  <td>'.$chronic_disease->asth_int_d40f.'</td>
                </tr>
                <tr>
                  <td>2.2</td>
                  <td class="left">Asthma persintent mild</td>
                  <td>'.$chronic_disease->asth_mild_nc19m.'</td>
                  <td>'.$chronic_disease->asth_mild_nc19f.'</td>
                  <td>'.$chronic_disease->asth_mild_nc39m.'</td>
                  <td>'.$chronic_disease->asth_mild_nc39f.'</td>
                  <td>'.$chronic_disease->asth_mild_nc40m.'</td>
                  <td>'.$chronic_disease->asth_mild_nc40f.'</td>
                  <td>'.$chronic_disease->asth_mild_oc19m.'</td>
                  <td>'.$chronic_disease->asth_mild_oc19f.'</td>
                  <td>'.$chronic_disease->asth_mild_oc39m.'</td>
                  <td>'.$chronic_disease->asth_mild_oc39f.'</td>
                  <td>'.$chronic_disease->asth_mild_oc40m.'</td>
                  <td>'.$chronic_disease->asth_mild_oc40f.'</td>
                  <td>'.$chronic_disease->asth_mild_d19m.'</td>
                  <td>'.$chronic_disease->asth_mild_d19f.'</td>
                  <td>'.$chronic_disease->asth_mild_d39m.'</td>
                  <td>'.$chronic_disease->asth_mild_d39f.'</td>
                  <td>'.$chronic_disease->asth_mild_d40m.'</td>
                  <td>'.$chronic_disease->asth_mild_d40f.'</td>
                </tr>
                <tr>
                  <td>2.3</td>
                  <td class="left">Asthma persintent modarate</td>
                  <td>'.$chronic_disease->asth_mod_nc19m.'</td>
                  <td>'.$chronic_disease->asth_mod_nc19f.'</td>
                  <td>'.$chronic_disease->asth_mod_nc39m.'</td>
                  <td>'.$chronic_disease->asth_mod_nc39f.'</td>
                  <td>'.$chronic_disease->asth_mod_nc40m.'</td>
                  <td>'.$chronic_disease->asth_mod_nc40f.'</td>
                  <td>'.$chronic_disease->asth_mod_oc19m.'</td>
                  <td>'.$chronic_disease->asth_mod_oc19f.'</td>
                  <td>'.$chronic_disease->asth_mod_oc39m.'</td>
                  <td>'.$chronic_disease->asth_mod_oc39f.'</td>
                  <td>'.$chronic_disease->asth_mod_oc40m.'</td>
                  <td>'.$chronic_disease->asth_mod_oc40f.'</td>
                  <td>'.$chronic_disease->asth_mod_d19m.'</td>
                  <td>'.$chronic_disease->asth_mod_d19f.'</td>
                  <td>'.$chronic_disease->asth_mod_d39m.'</td>
                  <td>'.$chronic_disease->asth_mod_d39f.'</td>
                  <td>'.$chronic_disease->asth_mod_d40m.'</td>
                  <td>'.$chronic_disease->asth_mod_d40f.'</td>
                </tr>
                <tr>
                  <td>2.4</td>
                  <td class="left">Asthma persintent severe</td>
                  <td>'.$chronic_disease->asth_sev_nc19m.'</td>
                  <td>'.$chronic_disease->asth_sev_nc19f.'</td>
                  <td>'.$chronic_disease->asth_sev_nc39m.'</td>
                  <td>'.$chronic_disease->asth_sev_nc39f.'</td>
                  <td>'.$chronic_disease->asth_sev_nc40m.'</td>
                  <td>'.$chronic_disease->asth_sev_nc40f.'</td>
                  <td>'.$chronic_disease->asth_sev_oc19m.'</td>
                  <td>'.$chronic_disease->asth_sev_oc19f.'</td>
                  <td>'.$chronic_disease->asth_sev_oc39m.'</td>
                  <td>'.$chronic_disease->asth_sev_oc39f.'</td>
                  <td>'.$chronic_disease->asth_sev_oc40m.'</td>
                  <td>'.$chronic_disease->asth_sev_oc40f.'</td>
                  <td>'.$chronic_disease->asth_sev_d19m.'</td>
                  <td>'.$chronic_disease->asth_sev_d19f.'</td>
                  <td>'.$chronic_disease->asth_sev_d39m.'</td>
                  <td>'.$chronic_disease->asth_sev_d39f.'</td>
                  <td>'.$chronic_disease->asth_sev_d40m.'</td>
                  <td>'.$chronic_disease->asth_sev_d40f.'</td>
                </tr>
                <tr>
                  <td>2.5</td>
                  <td class="left">Bronchitis</td>
                  <td>'.$chronic_disease->bronch_nc19m.'</td>
                  <td>'.$chronic_disease->bronch_nc19f.'</td>
                  <td>'.$chronic_disease->bronch_nc39m.'</td>
                  <td>'.$chronic_disease->bronch_nc39f.'</td>
                  <td>'.$chronic_disease->bronch_nc40m.'</td>
                  <td>'.$chronic_disease->bronch_nc40f.'</td>
                  <td>'.$chronic_disease->bronch_oc19m.'</td>
                  <td>'.$chronic_disease->bronch_oc19f.'</td>
                  <td>'.$chronic_disease->bronch_oc39m.'</td>
                  <td>'.$chronic_disease->bronch_oc39f.'</td>
                  <td>'.$chronic_disease->bronch_oc40m.'</td>
                  <td>'.$chronic_disease->bronch_oc40f.'</td>
                  <td>'.$chronic_disease->bronch_d19m.'</td>
                  <td>'.$chronic_disease->bronch_d19f.'</td>
                  <td>'.$chronic_disease->bronch_d39m.'</td>
                  <td>'.$chronic_disease->bronch_d39f.'</td>
                  <td>'.$chronic_disease->bronch_d40m.'</td>
                  <td>'.$chronic_disease->bronch_d40f.'</td>
                </tr>
                <tr>
                  <td>2.6</td>
                  <td class="left">Other Chronic obstructive pulmonary diseases</td>
                  <td>'.$chronic_disease->other_pulm_nc19m.'</td>
                  <td>'.$chronic_disease->other_pulm_nc19f.'</td>
                  <td>'.$chronic_disease->other_pulm_nc39m.'</td>
                  <td>'.$chronic_disease->other_pulm_nc39f.'</td>
                  <td>'.$chronic_disease->other_pulm_nc40m.'</td>
                  <td>'.$chronic_disease->other_pulm_nc40f.'</td>
                  <td>'.$chronic_disease->other_pulm_oc19m.'</td>
                  <td>'.$chronic_disease->other_pulm_oc19f.'</td>
                  <td>'.$chronic_disease->other_pulm_oc39m.'</td>
                  <td>'.$chronic_disease->other_pulm_oc39f.'</td>
                  <td>'.$chronic_disease->other_pulm_oc40m.'</td>
                  <td>'.$chronic_disease->other_pulm_oc40f.'</td>
                  <td>'.$chronic_disease->other_pulm_d19m.'</td>
                  <td>'.$chronic_disease->other_pulm_d19f.'</td>
                  <td>'.$chronic_disease->other_pulm_d39m.'</td>
                  <td>'.$chronic_disease->other_pulm_d39f.'</td>
                  <td>'.$chronic_disease->other_pulm_d40m.'</td>
                  <td>'.$chronic_disease->other_pulm_d40f.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Diabetes</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>3.1</td>
                  <td class="left">Diabetes - Type 1</td>
                  <td>'.$chronic_disease->diab1_nc19m.'</td>
                  <td>'.$chronic_disease->diab1_nc19f.'</td>
                  <td>'.$chronic_disease->diab1_nc39m.'</td>
                  <td>'.$chronic_disease->diab1_nc39f.'</td>
                  <td>'.$chronic_disease->diab1_nc40m.'</td>
                  <td>'.$chronic_disease->diab1_nc40f.'</td>
                  <td>'.$chronic_disease->diab1_oc19m.'</td>
                  <td>'.$chronic_disease->diab1_oc19f.'</td>
                  <td>'.$chronic_disease->diab1_oc39m.'</td>
                  <td>'.$chronic_disease->diab1_oc39f.'</td>
                  <td>'.$chronic_disease->diab1_oc40m.'</td>
                  <td>'.$chronic_disease->diab1_oc40f.'</td>
                  <td>'.$chronic_disease->diab1_d19m.'</td>
                  <td>'.$chronic_disease->diab1_d19f.'</td>
                  <td>'.$chronic_disease->diab1_d39m.'</td>
                  <td>'.$chronic_disease->diab1_d39f.'</td>
                  <td>'.$chronic_disease->diab1_d40m.'</td>
                  <td>'.$chronic_disease->diab1_d40f.'</td>
                </tr>
                <tr>
                  <td>3.2</td>
                  <td class="left">Diabetes - Type 2</td>
                  <td>'.$chronic_disease->diab2_nc19m.'</td>
                  <td>'.$chronic_disease->diab2_nc19f.'</td>
                  <td>'.$chronic_disease->diab2_nc39m.'</td>
                  <td>'.$chronic_disease->diab2_nc39f.'</td>
                  <td>'.$chronic_disease->diab2_nc40m.'</td>
                  <td>'.$chronic_disease->diab2_nc40f.'</td>
                  <td>'.$chronic_disease->diab2_oc19m.'</td>
                  <td>'.$chronic_disease->diab2_oc19f.'</td>
                  <td>'.$chronic_disease->diab2_oc39m.'</td>
                  <td>'.$chronic_disease->diab2_oc39f.'</td>
                  <td>'.$chronic_disease->diab2_oc40m.'</td>
                  <td>'.$chronic_disease->diab2_oc40f.'</td>
                  <td>'.$chronic_disease->diab2_d19m.'</td>
                  <td>'.$chronic_disease->diab2_d19f.'</td>
                  <td>'.$chronic_disease->diab2_d39m.'</td>
                  <td>'.$chronic_disease->diab2_d39f.'</td>
                  <td>'.$chronic_disease->diab2_d40m.'</td>
                  <td>'.$chronic_disease->diab2_d40f.'</td>
                </tr>
                <tr>
                  <td>3.3</td>
                  <td class="left">Diabetes gestational</td>
                  <td>'.$chronic_disease->diab_gest_nc19m.'</td>
                  <td>'.$chronic_disease->diab_gest_nc19f.'</td>
                  <td>'.$chronic_disease->diab_gest_nc39m.'</td>
                  <td>'.$chronic_disease->diab_gest_nc39f.'</td>
                  <td>'.$chronic_disease->diab_gest_nc40m.'</td>
                  <td>'.$chronic_disease->diab_gest_nc40f.'</td>
                  <td>'.$chronic_disease->diab_gest_oc19m.'</td>
                  <td>'.$chronic_disease->diab_gest_oc19f.'</td>
                  <td>'.$chronic_disease->diab_gest_oc39m.'</td>
                  <td>'.$chronic_disease->diab_gest_oc39f.'</td>
                  <td>'.$chronic_disease->diab_gest_oc40m.'</td>
                  <td>'.$chronic_disease->diab_gest_oc40f.'</td>
                  <td>'.$chronic_disease->diab_gest_d19m.'</td>
                  <td>'.$chronic_disease->diab_gest_d19f.'</td>
                  <td>'.$chronic_disease->diab_gest_d39m.'</td>
                  <td>'.$chronic_disease->diab_gest_d39f.'</td>
                  <td>'.$chronic_disease->diab_gest_d40m.'</td>
                  <td>'.$chronic_disease->diab_gest_d40f.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Cancer</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>4.1</td>
                  <td class="left">Breast Cancer</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_nc19f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_nc39f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_nc40f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_oc19f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_oc39f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_oc40f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_d19f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_d39f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_d40f.'</td>
                </tr>
                <tr>
                  <td>4.2</td>
                  <td class="left">Cervical cancer</td>
                  <td>'.$chronic_disease->cervical_nc19m.'</td>
                  <td>'.$chronic_disease->cervical_nc19f.'</td>
                  <td>'.$chronic_disease->cervical_nc39m.'</td>
                  <td>'.$chronic_disease->cervical_nc39f.'</td>
                  <td>'.$chronic_disease->cervical_nc40m.'</td>
                  <td>'.$chronic_disease->cervical_nc40f.'</td>
                  <td>'.$chronic_disease->cervical_oc19m.'</td>
                  <td>'.$chronic_disease->cervical_oc19f.'</td>
                  <td>'.$chronic_disease->cervical_oc39m.'</td>
                  <td>'.$chronic_disease->cervical_oc39f.'</td>
                  <td>'.$chronic_disease->cervical_oc40m.'</td>
                  <td>'.$chronic_disease->cervical_oc40f.'</td>
                  <td>'.$chronic_disease->cervical_d19m.'</td>
                  <td>'.$chronic_disease->cervical_d19f.'</td>
                  <td>'.$chronic_disease->cervical_d39m.'</td>
                  <td>'.$chronic_disease->cervical_d39f.'</td>
                  <td>'.$chronic_disease->cervical_d40m.'</td>
                  <td>'.$chronic_disease->cervical_d40f.'</td>
                </tr>
                <tr>
                  <td>4.3</td>
                  <td class="left">Lymphoma</td>
                  <td>'.$chronic_disease->lympho_nc19m.'</td>
                  <td>'.$chronic_disease->lympho_nc19f.'</td>
                  <td>'.$chronic_disease->lympho_nc39m.'</td>
                  <td>'.$chronic_disease->lympho_nc39f.'</td>
                  <td>'.$chronic_disease->lympho_nc40m.'</td>
                  <td>'.$chronic_disease->lympho_nc40f.'</td>
                  <td>'.$chronic_disease->lympho_oc19m.'</td>
                  <td>'.$chronic_disease->lympho_oc19f.'</td>
                  <td>'.$chronic_disease->lympho_oc39m.'</td>
                  <td>'.$chronic_disease->lympho_oc39f.'</td>
                  <td>'.$chronic_disease->lympho_oc40m.'</td>
                  <td>'.$chronic_disease->lympho_oc40f.'</td>
                  <td>'.$chronic_disease->lympho_d19m.'</td>
                  <td>'.$chronic_disease->lympho_d19f.'</td>
                  <td>'.$chronic_disease->lympho_d39m.'</td>
                  <td>'.$chronic_disease->lympho_d39f.'</td>
                  <td>'.$chronic_disease->lympho_d40m.'</td>
                  <td>'.$chronic_disease->lympho_d40f.'</td>
                </tr>
                <tr>
                  <td>4.4</td>
                  <td class="left">Leucamia</td>
                  <td>'.$chronic_disease->leuca_nc19m.'</td>
                  <td>'.$chronic_disease->leuca_nc19f.'</td>
                  <td>'.$chronic_disease->leuca_nc39m.'</td>
                  <td>'.$chronic_disease->leuca_nc39f.'</td>
                  <td>'.$chronic_disease->leuca_nc40m.'</td>
                  <td>'.$chronic_disease->leuca_nc40f.'</td>
                  <td>'.$chronic_disease->leuca_oc19m.'</td>
                  <td>'.$chronic_disease->leuca_oc19f.'</td>
                  <td>'.$chronic_disease->leuca_oc39m.'</td>
                  <td>'.$chronic_disease->leuca_oc39f.'</td>
                  <td>'.$chronic_disease->leuca_oc40m.'</td>
                  <td>'.$chronic_disease->leuca_oc40f.'</td>
                  <td>'.$chronic_disease->leuca_d19m.'</td>
                  <td>'.$chronic_disease->leuca_d19f.'</td>
                  <td>'.$chronic_disease->leuca_d39m.'</td>
                  <td>'.$chronic_disease->leuca_d39f.'</td>
                  <td>'.$chronic_disease->leuca_d40m.'</td>
                  <td>'.$chronic_disease->leuca_d40f.'</td>
                </tr>
                <tr>
                  <td>4.5</td>
                  <td class="left">Colon recto cancer</td>
                  <td>'.$chronic_disease->colon_nc19m.'</td>
                  <td>'.$chronic_disease->colon_nc19f.'</td>
                  <td>'.$chronic_disease->colon_nc39m.'</td>
                  <td>'.$chronic_disease->colon_nc39f.'</td>
                  <td>'.$chronic_disease->colon_nc40m.'</td>
                  <td>'.$chronic_disease->colon_nc40f.'</td>
                  <td>'.$chronic_disease->colon_oc19m.'</td>
                  <td>'.$chronic_disease->colon_oc19f.'</td>
                  <td>'.$chronic_disease->colon_oc39m.'</td>
                  <td>'.$chronic_disease->colon_oc39f.'</td>
                  <td>'.$chronic_disease->colon_oc40m.'</td>
                  <td>'.$chronic_disease->colon_oc40f.'</td>
                  <td>'.$chronic_disease->colon_d19m.'</td>
                  <td>'.$chronic_disease->colon_d19f.'</td>
                  <td>'.$chronic_disease->colon_d39m.'</td>
                  <td>'.$chronic_disease->colon_d39f.'</td>
                  <td>'.$chronic_disease->colon_d40m.'</td>
                  <td>'.$chronic_disease->colon_d40f.'</td>
                </tr>
                <tr>
                  <td>4.6</td>
                  <td class="left">Kaposi sarcoma</td>
                  <td>'.$chronic_disease->kaposi_nc19m.'</td>
                  <td>'.$chronic_disease->kaposi_nc19f.'</td>
                  <td>'.$chronic_disease->kaposi_nc39m.'</td>
                  <td>'.$chronic_disease->kaposi_nc39f.'</td>
                  <td>'.$chronic_disease->kaposi_nc40m.'</td>
                  <td>'.$chronic_disease->kaposi_nc40f.'</td>
                  <td>'.$chronic_disease->kaposi_oc19m.'</td>
                  <td>'.$chronic_disease->kaposi_oc19f.'</td>
                  <td>'.$chronic_disease->kaposi_oc39m.'</td>
                  <td>'.$chronic_disease->kaposi_oc39f.'</td>
                  <td>'.$chronic_disease->kaposi_oc40m.'</td>
                  <td>'.$chronic_disease->kaposi_oc40f.'</td>
                  <td>'.$chronic_disease->kaposi_d19m.'</td>
                  <td>'.$chronic_disease->kaposi_d19f.'</td>
                  <td>'.$chronic_disease->kaposi_d39m.'</td>
                  <td>'.$chronic_disease->kaposi_d39f.'</td>
                  <td>'.$chronic_disease->kaposi_d40m.'</td>
                  <td>'.$chronic_disease->kaposi_d40f.'</td>
                </tr>
                <tr>
                  <td>4.7</td>
                  <td class="left">Retinoblastoma</td>
                  <td>'.$chronic_disease->retino_nc19m.'</td>
                  <td>'.$chronic_disease->retino_nc19f.'</td>
                  <td>'.$chronic_disease->retino_nc39m.'</td>
                  <td>'.$chronic_disease->retino_nc39f.'</td>
                  <td>'.$chronic_disease->retino_nc40m.'</td>
                  <td>'.$chronic_disease->retino_nc40f.'</td>
                  <td>'.$chronic_disease->retino_oc19m.'</td>
                  <td>'.$chronic_disease->retino_oc19f.'</td>
                  <td>'.$chronic_disease->retino_oc39m.'</td>
                  <td>'.$chronic_disease->retino_oc39f.'</td>
                  <td>'.$chronic_disease->retino_oc40m.'</td>
                  <td>'.$chronic_disease->retino_oc40f.'</td>
                  <td>'.$chronic_disease->retino_d19m.'</td>
                  <td>'.$chronic_disease->retino_d19f.'</td>
                  <td>'.$chronic_disease->retino_d39m.'</td>
                  <td>'.$chronic_disease->retino_d39f.'</td>
                  <td>'.$chronic_disease->retino_d40m.'</td>
                  <td>'.$chronic_disease->retino_d40f.'</td>
                </tr>
                <tr>
                  <td>4.8</td>
                  <td class="left">Nephroblastoma</td>
                  <td>'.$chronic_disease->nephro_nc19m.'</td>
                  <td>'.$chronic_disease->nephro_nc19f.'</td>
                  <td>'.$chronic_disease->nephro_nc39m.'</td>
                  <td>'.$chronic_disease->nephro_nc39f.'</td>
                  <td>'.$chronic_disease->nephro_nc40m.'</td>
                  <td>'.$chronic_disease->nephro_nc40f.'</td>
                  <td>'.$chronic_disease->nephro_oc19m.'</td>
                  <td>'.$chronic_disease->nephro_oc19f.'</td>
                  <td>'.$chronic_disease->nephro_oc39m.'</td>
                  <td>'.$chronic_disease->nephro_oc39f.'</td>
                  <td>'.$chronic_disease->nephro_oc40m.'</td>
                  <td>'.$chronic_disease->nephro_oc40f.'</td>
                  <td>'.$chronic_disease->nephro_d19m.'</td>
                  <td>'.$chronic_disease->nephro_d19f.'</td>
                  <td>'.$chronic_disease->nephro_d39m.'</td>
                  <td>'.$chronic_disease->nephro_d39f.'</td>
                  <td>'.$chronic_disease->nephro_d40m.'</td>
                  <td>'.$chronic_disease->nephro_d40f.'</td>
                </tr>
                <tr>
                  <td>4.9</td>
                  <td class="left">Ovarian cancer</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_nc19f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_nc39f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_nc40f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_oc19f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_oc39f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_oc40f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_d19f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_d39f.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_d40f.'</td>
                </tr>
                <tr>
                  <td>4.10</td>
                  <td class="left">Prostate cancer</td>
                  <td>'.$chronic_disease->prostate_nc19m.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_nc39m.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_nc40m.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_oc19m.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_oc39m.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_oc40m.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_d19m.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_d39m.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_d40m.'</td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>4.11</td>
                  <td class="left">Cancer others</td>
                  <td>'.$chronic_disease->cancer_others_nc19m.'</td>
                  <td>'.$chronic_disease->cancer_others_nc19f.'</td>
                  <td>'.$chronic_disease->cancer_others_nc39m.'</td>
                  <td>'.$chronic_disease->cancer_others_nc39f.'</td>
                  <td>'.$chronic_disease->cancer_others_nc40m.'</td>
                  <td>'.$chronic_disease->cancer_others_nc40f.'</td>
                  <td>'.$chronic_disease->cancer_others_oc19m.'</td>
                  <td>'.$chronic_disease->cancer_others_oc19f.'</td>
                  <td>'.$chronic_disease->cancer_others_oc39m.'</td>
                  <td>'.$chronic_disease->cancer_others_oc39f.'</td>
                  <td>'.$chronic_disease->cancer_others_oc40m.'</td>
                  <td>'.$chronic_disease->cancer_others_oc40f.'</td>
                  <td>'.$chronic_disease->cancer_others_d19m.'</td>
                  <td>'.$chronic_disease->cancer_others_d19f.'</td>
                  <td>'.$chronic_disease->cancer_others_d39m.'</td>
                  <td>'.$chronic_disease->cancer_others_d39f.'</td>
                  <td>'.$chronic_disease->cancer_others_d40m.'</td>
                  <td>'.$chronic_disease->cancer_others_d40f.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">IV] Chronic diseases</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $other_cardiovascular = $this->research_model->other_cardiovascular($date);

        if ($other_cardiovascular) {
            $output .= '
              <h3 class="center">V] Other cardiovascular and kindney diseases</h3>
              <table id="A5" class="center">
                <thead>
                  <tr>
                    <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="6">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="6">Old cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="6">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
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
                    <td>1</td>
                    <td class="left">Medical condition</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>1.1</td>
                    <td class="left">Cardiomyopathies</td>
                    <td>'.$other_cardiovascular->cardio_nc19m.'</td>
                    <td>'.$other_cardiovascular->cardio_nc19f.'</td>
                    <td>'.$other_cardiovascular->cardio_nc39m.'</td>
                    <td>'.$other_cardiovascular->cardio_nc39f.'</td>
                    <td>'.$other_cardiovascular->cardio_nc40m.'</td>
                    <td>'.$other_cardiovascular->cardio_nc40f.'</td>

                    <td>'.$other_cardiovascular->cardio_oc19m.'</td>
                    <td>'.$other_cardiovascular->cardio_oc19f.'</td>
                    <td>'.$other_cardiovascular->cardio_oc39m.'</td>
                    <td>'.$other_cardiovascular->cardio_oc39f.'</td>
                    <td>'.$other_cardiovascular->cardio_oc40m.'</td>
                    <td>'.$other_cardiovascular->cardio_oc40f.'</td>

                    <td>'.$other_cardiovascular->cardio_d19m.'</td>
                    <td>'.$other_cardiovascular->cardio_d19f.'</td>
                    <td>'.$other_cardiovascular->cardio_d39m.'</td>
                    <td>'.$other_cardiovascular->cardio_d39f.'</td>
                    <td>'.$other_cardiovascular->cardio_d40m.'</td>
                    <td>'.$other_cardiovascular->cardio_d40f.'</td>
                  </tr>
                  <tr>
                    <td>1.2</td>
                    <td class="left">Stroke/TIA</td>
                    <td>'.$other_cardiovascular->stroke_nc19m.'</td>
                    <td>'.$other_cardiovascular->stroke_nc19f.'</td>
                    <td>'.$other_cardiovascular->stroke_nc39m.'</td>
                    <td>'.$other_cardiovascular->stroke_nc39f.'</td>
                    <td>'.$other_cardiovascular->stroke_nc40m.'</td>
                    <td>'.$other_cardiovascular->stroke_nc40f.'</td>

                    <td>'.$other_cardiovascular->stroke_oc19m.'</td>
                    <td>'.$other_cardiovascular->stroke_oc19f.'</td>
                    <td>'.$other_cardiovascular->stroke_oc39m.'</td>
                    <td>'.$other_cardiovascular->stroke_oc39f.'</td>
                    <td>'.$other_cardiovascular->stroke_oc40m.'</td>
                    <td>'.$other_cardiovascular->stroke_oc40f.'</td>

                    <td>'.$other_cardiovascular->stroke_d19m.'</td>
                    <td>'.$other_cardiovascular->stroke_d19f.'</td>
                    <td>'.$other_cardiovascular->stroke_d39m.'</td>
                    <td>'.$other_cardiovascular->stroke_d39f.'</td>
                    <td>'.$other_cardiovascular->stroke_d40m.'</td>
                    <td>'.$other_cardiovascular->stroke_d40f.'</td>
                  </tr>
                  <tr>
                    <td>1.3</td>
                    <td class="left">Rheumatic heart disease</td>
                    <td>'.$other_cardiovascular->rheumatic_nc19m.'</td>
                    <td>'.$other_cardiovascular->rheumatic_nc19f.'</td>
                    <td>'.$other_cardiovascular->rheumatic_nc39m.'</td>
                    <td>'.$other_cardiovascular->rheumatic_nc39f.'</td>
                    <td>'.$other_cardiovascular->rheumatic_nc40m.'</td>
                    <td>'.$other_cardiovascular->rheumatic_nc40f.'</td>

                    <td>'.$other_cardiovascular->rheumatic_oc19m.'</td>
                    <td>'.$other_cardiovascular->rheumatic_oc19f.'</td>
                    <td>'.$other_cardiovascular->rheumatic_oc39m.'</td>
                    <td>'.$other_cardiovascular->rheumatic_oc39f.'</td>
                    <td>'.$other_cardiovascular->rheumatic_oc40m.'</td>
                    <td>'.$other_cardiovascular->rheumatic_oc40f.'</td>

                    <td>'.$other_cardiovascular->rheumatic_d19m.'</td>
                    <td>'.$other_cardiovascular->rheumatic_d19f.'</td>
                    <td>'.$other_cardiovascular->rheumatic_d39m.'</td>
                    <td>'.$other_cardiovascular->rheumatic_d39f.'</td>
                    <td>'.$other_cardiovascular->rheumatic_d40m.'</td>
                    <td>'.$other_cardiovascular->rheumatic_d40f.'</td>
                  </tr>
                  <tr>
                    <td>1.4</td>
                    <td class="left">Congenital heart disease</td>
                    <td>'.$other_cardiovascular->cong_nc19m.'</td>
                    <td>'.$other_cardiovascular->cong_nc19f.'</td>
                    <td>'.$other_cardiovascular->cong_nc39m.'</td>
                    <td>'.$other_cardiovascular->cong_nc39f.'</td>
                    <td>'.$other_cardiovascular->cong_nc40m.'</td>
                    <td>'.$other_cardiovascular->cong_nc40f.'</td>

                    <td>'.$other_cardiovascular->cong_oc19m.'</td>
                    <td>'.$other_cardiovascular->cong_oc19f.'</td>
                    <td>'.$other_cardiovascular->cong_oc39m.'</td>
                    <td>'.$other_cardiovascular->cong_oc39f.'</td>
                    <td>'.$other_cardiovascular->cong_oc40m.'</td>
                    <td>'.$other_cardiovascular->cong_oc40f.'</td>

                    <td>'.$other_cardiovascular->cong_d19m.'</td>
                    <td>'.$other_cardiovascular->cong_d19f.'</td>
                    <td>'.$other_cardiovascular->cong_d39m.'</td>
                    <td>'.$other_cardiovascular->cong_d39f.'</td>
                    <td>'.$other_cardiovascular->cong_d40m.'</td>
                    <td>'.$other_cardiovascular->cong_d40f.'</td>
                  </tr>
                  <tr>
                    <td>1.5</td>
                    <td class="left">Coronary artery disease</td>
                    <td>'.$other_cardiovascular->coronary_nc19m.'</td>
                    <td>'.$other_cardiovascular->coronary_nc19f.'</td>
                    <td>'.$other_cardiovascular->coronary_nc39m.'</td>
                    <td>'.$other_cardiovascular->coronary_nc39f.'</td>
                    <td>'.$other_cardiovascular->coronary_nc40m.'</td>
                    <td>'.$other_cardiovascular->coronary_nc40f.'</td>

                    <td>'.$other_cardiovascular->coronary_oc19m.'</td>
                    <td>'.$other_cardiovascular->coronary_oc19f.'</td>
                    <td>'.$other_cardiovascular->coronary_oc39m.'</td>
                    <td>'.$other_cardiovascular->coronary_oc39f.'</td>
                    <td>'.$other_cardiovascular->coronary_oc40m.'</td>
                    <td>'.$other_cardiovascular->coronary_oc40f.'</td>

                    <td>'.$other_cardiovascular->coronary_d19m.'</td>
                    <td>'.$other_cardiovascular->coronary_d19f.'</td>
                    <td>'.$other_cardiovascular->coronary_d39m.'</td>
                    <td>'.$other_cardiovascular->coronary_d39f.'</td>
                    <td>'.$other_cardiovascular->coronary_d40m.'</td>
                    <td>'.$other_cardiovascular->coronary_d40f.'</td>
                  </tr>
                  <tr>
                    <td>1.6</td>
                    <td class="left">Pericardial disease</td>
                    <td>'.$other_cardiovascular->peri_nc19m.'</td>
                    <td>'.$other_cardiovascular->peri_nc19f.'</td>
                    <td>'.$other_cardiovascular->peri_nc39m.'</td>
                    <td>'.$other_cardiovascular->peri_nc39f.'</td>
                    <td>'.$other_cardiovascular->peri_nc40m.'</td>
                    <td>'.$other_cardiovascular->peri_nc40f.'</td>

                    <td>'.$other_cardiovascular->peri_oc19m.'</td>
                    <td>'.$other_cardiovascular->peri_oc19f.'</td>
                    <td>'.$other_cardiovascular->peri_oc39m.'</td>
                    <td>'.$other_cardiovascular->peri_oc39f.'</td>
                    <td>'.$other_cardiovascular->peri_oc40m.'</td>
                    <td>'.$other_cardiovascular->peri_oc40f.'</td>

                    <td>'.$other_cardiovascular->peri_d19m.'</td>
                    <td>'.$other_cardiovascular->peri_d19f.'</td>
                    <td>'.$other_cardiovascular->peri_d39m.'</td>
                    <td>'.$other_cardiovascular->peri_d39f.'</td>
                    <td>'.$other_cardiovascular->peri_d40m.'</td>
                    <td>'.$other_cardiovascular->peri_d40f.'</td>
                  </tr>
                  <tr>
                    <td>1.7</td>
                    <td class="left">Heart failure</td>
                    <td>'.$other_cardiovascular->heart_nc19m.'</td>
                    <td>'.$other_cardiovascular->heart_nc19f.'</td>
                    <td>'.$other_cardiovascular->heart_nc39m.'</td>
                    <td>'.$other_cardiovascular->heart_nc39f.'</td>
                    <td>'.$other_cardiovascular->heart_nc40m.'</td>
                    <td>'.$other_cardiovascular->heart_nc40f.'</td>

                    <td>'.$other_cardiovascular->heart_oc19m.'</td>
                    <td>'.$other_cardiovascular->heart_oc19f.'</td>
                    <td>'.$other_cardiovascular->heart_oc39m.'</td>
                    <td>'.$other_cardiovascular->heart_oc39f.'</td>
                    <td>'.$other_cardiovascular->heart_oc40m.'</td>
                    <td>'.$other_cardiovascular->heart_oc40f.'</td>

                    <td>'.$other_cardiovascular->heart_d19m.'</td>
                    <td>'.$other_cardiovascular->heart_d19f.'</td>
                    <td>'.$other_cardiovascular->heart_d39m.'</td>
                    <td>'.$other_cardiovascular->heart_d39f.'</td>
                    <td>'.$other_cardiovascular->heart_d40m.'</td>
                    <td>'.$other_cardiovascular->heart_d40f.'</td>
                  </tr>
                  <tr>
                    <td>1.8</td>
                    <td class="left">Other cardiovascular</td>
                    <td>'.$other_cardiovascular->other_cardio_nc19m.'</td>
                    <td>'.$other_cardiovascular->other_cardio_nc19f.'</td>
                    <td>'.$other_cardiovascular->other_cardio_nc39m.'</td>
                    <td>'.$other_cardiovascular->other_cardio_nc39f.'</td>
                    <td>'.$other_cardiovascular->other_cardio_nc40m.'</td>
                    <td>'.$other_cardiovascular->other_cardio_nc40f.'</td>

                    <td>'.$other_cardiovascular->other_cardio_oc19m.'</td>
                    <td>'.$other_cardiovascular->other_cardio_oc19f.'</td>
                    <td>'.$other_cardiovascular->other_cardio_oc39m.'</td>
                    <td>'.$other_cardiovascular->other_cardio_oc39f.'</td>
                    <td>'.$other_cardiovascular->other_cardio_oc40m.'</td>
                    <td>'.$other_cardiovascular->other_cardio_oc40f.'</td>

                    <td>'.$other_cardiovascular->other_cardio_d19m.'</td>
                    <td>'.$other_cardiovascular->other_cardio_d19f.'</td>
                    <td>'.$other_cardiovascular->other_cardio_d39m.'</td>
                    <td>'.$other_cardiovascular->other_cardio_d39f.'</td>
                    <td>'.$other_cardiovascular->other_cardio_d40m.'</td>
                    <td>'.$other_cardiovascular->other_cardio_d40f.'</td>
                  </tr>
                  <tr>
                    <td>1.9</td>
                    <td class="left">Post heart surgery</td>
                    <td>'.$other_cardiovascular->post_heart_nc19m.'</td>
                    <td>'.$other_cardiovascular->post_heart_nc19f.'</td>
                    <td>'.$other_cardiovascular->post_heart_nc39m.'</td>
                    <td>'.$other_cardiovascular->post_heart_nc39f.'</td>
                    <td>'.$other_cardiovascular->post_heart_nc40m.'</td>
                    <td>'.$other_cardiovascular->post_heart_nc40f.'</td>

                    <td>'.$other_cardiovascular->post_heart_oc19m.'</td>
                    <td>'.$other_cardiovascular->post_heart_oc19f.'</td>
                    <td>'.$other_cardiovascular->post_heart_oc39m.'</td>
                    <td>'.$other_cardiovascular->post_heart_oc39f.'</td>
                    <td>'.$other_cardiovascular->post_heart_oc40m.'</td>
                    <td>'.$other_cardiovascular->post_heart_oc40f.'</td>

                    <td>'.$other_cardiovascular->post_heart_d19m.'</td>
                    <td>'.$other_cardiovascular->post_heart_d19f.'</td>
                    <td>'.$other_cardiovascular->post_heart_d39m.'</td>
                    <td>'.$other_cardiovascular->post_heart_d39f.'</td>
                    <td>'.$other_cardiovascular->post_heart_d40m.'</td>
                    <td>'.$other_cardiovascular->post_heart_d40f.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Kidney diseases</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>2.1</td>
                    <td class="left">Renal failure</td>
                    <td>'.$other_cardiovascular->renal_nc19m.'</td>
                    <td>'.$other_cardiovascular->renal_nc19f.'</td>
                    <td>'.$other_cardiovascular->renal_nc39m.'</td>
                    <td>'.$other_cardiovascular->renal_nc39f.'</td>
                    <td>'.$other_cardiovascular->renal_nc40m.'</td>
                    <td>'.$other_cardiovascular->renal_nc40f.'</td>

                    <td>'.$other_cardiovascular->renal_oc19m.'</td>
                    <td>'.$other_cardiovascular->renal_oc19f.'</td>
                    <td>'.$other_cardiovascular->renal_oc39m.'</td>
                    <td>'.$other_cardiovascular->renal_oc39f.'</td>
                    <td>'.$other_cardiovascular->renal_oc40m.'</td>
                    <td>'.$other_cardiovascular->renal_oc40f.'</td>

                    <td>'.$other_cardiovascular->renal_d19m.'</td>
                    <td>'.$other_cardiovascular->renal_d19f.'</td>
                    <td>'.$other_cardiovascular->renal_d39m.'</td>
                    <td>'.$other_cardiovascular->renal_d39f.'</td>
                    <td>'.$other_cardiovascular->renal_d40m.'</td>
                    <td>'.$other_cardiovascular->renal_d40f.'</td>
                  </tr>
                  <tr>
                    <td>2.2</td>
                    <td class="left">Other chonic kidney diseases</td>
                    <td>'.$other_cardiovascular->other_chronic_nc19m.'</td>
                    <td>'.$other_cardiovascular->other_chronic_nc19f.'</td>
                    <td>'.$other_cardiovascular->other_chronic_nc39m.'</td>
                    <td>'.$other_cardiovascular->other_chronic_nc39f.'</td>
                    <td>'.$other_cardiovascular->other_chronic_nc40m.'</td>
                    <td>'.$other_cardiovascular->other_chronic_nc40f.'</td>

                    <td>'.$other_cardiovascular->other_chronic_oc19m.'</td>
                    <td>'.$other_cardiovascular->other_chronic_oc19f.'</td>
                    <td>'.$other_cardiovascular->other_chronic_oc39m.'</td>
                    <td>'.$other_cardiovascular->other_chronic_oc39f.'</td>
                    <td>'.$other_cardiovascular->other_chronic_oc40m.'</td>
                    <td>'.$other_cardiovascular->other_chronic_oc40f.'</td>

                    <td>'.$other_cardiovascular->other_chronic_d19m.'</td>
                    <td>'.$other_cardiovascular->other_chronic_d19f.'</td>
                    <td>'.$other_cardiovascular->other_chronic_d39m.'</td>
                    <td>'.$other_cardiovascular->other_chronic_d39f.'</td>
                    <td>'.$other_cardiovascular->other_chronic_d40m.'</td>
                    <td>'.$other_cardiovascular->other_chronic_d40f.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Metabolic diseases</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.1</td>
                    <td class="left">Thyroid disease</td>
                    <td>'.$other_cardiovascular->thyroid_nc19m.'</td>
                    <td>'.$other_cardiovascular->thyroid_nc19f.'</td>
                    <td>'.$other_cardiovascular->thyroid_nc39m.'</td>
                    <td>'.$other_cardiovascular->thyroid_nc39f.'</td>
                    <td>'.$other_cardiovascular->thyroid_nc40m.'</td>
                    <td>'.$other_cardiovascular->thyroid_nc40f.'</td>

                    <td>'.$other_cardiovascular->thyroid_oc19m.'</td>
                    <td>'.$other_cardiovascular->thyroid_oc19f.'</td>
                    <td>'.$other_cardiovascular->thyroid_oc39m.'</td>
                    <td>'.$other_cardiovascular->thyroid_oc39f.'</td>
                    <td>'.$other_cardiovascular->thyroid_oc40m.'</td>
                    <td>'.$other_cardiovascular->thyroid_oc40f.'</td>

                    <td>'.$other_cardiovascular->thyroid_d19m.'</td>
                    <td>'.$other_cardiovascular->thyroid_d19f.'</td>
                    <td>'.$other_cardiovascular->thyroid_d39m.'</td>
                    <td>'.$other_cardiovascular->thyroid_d39f.'</td>
                    <td>'.$other_cardiovascular->thyroid_d40m.'</td>
                    <td>'.$other_cardiovascular->thyroid_d40f.'</td>
                  </tr>
                  <tr>
                    <td>3.2</td>
                    <td class="left">Other endocrine and metabolic diseases</td>
                    <td>'.$other_cardiovascular->other_endo_nc19m.'</td>
                    <td>'.$other_cardiovascular->other_endo_nc19f.'</td>
                    <td>'.$other_cardiovascular->other_endo_nc39m.'</td>
                    <td>'.$other_cardiovascular->other_endo_nc39f.'</td>
                    <td>'.$other_cardiovascular->other_endo_nc40m.'</td>
                    <td>'.$other_cardiovascular->other_endo_nc40f.'</td>

                    <td>'.$other_cardiovascular->other_endo_oc19m.'</td>
                    <td>'.$other_cardiovascular->other_endo_oc19f.'</td>
                    <td>'.$other_cardiovascular->other_endo_oc39m.'</td>
                    <td>'.$other_cardiovascular->other_endo_oc39f.'</td>
                    <td>'.$other_cardiovascular->other_endo_oc40m.'</td>
                    <td>'.$other_cardiovascular->other_endo_oc40f.'</td>

                    <td>'.$other_cardiovascular->other_endo_d19m.'</td>
                    <td>'.$other_cardiovascular->other_endo_d19f.'</td>
                    <td>'.$other_cardiovascular->other_endo_d39m.'</td>
                    <td>'.$other_cardiovascular->other_endo_d39f.'</td>
                    <td>'.$other_cardiovascular->other_endo_d40m.'</td>
                    <td>'.$other_cardiovascular->other_endo_d40f.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">V] Other cardiovascular and kindney diseases</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($injury) {
            $output.='
          <h3 class="center">VI] Injuries</h3>
          <div class="row">
            <table id="A6" class="center">
              <thead>
                <tr>
                  <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th rowspan="3">Cause of injury<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="6">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="6">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
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
                  <td>1</td>
                  <td class="left">Road traffic injuries (including cycling)</td>
                  <td>'.$injury->road_nc19m.'</td>
                  <td>'.$injury->road_nc19f.'</td>
                  <td>'.$injury->road_nc39m.'</td>
                  <td>'.$injury->road_nc39f.'</td>
                  <td>'.$injury->road_nc40m.'</td>
                  <td>'.$injury->road_nc40f.'</td>
                  <td>'.$injury->road_d19m.'</td>
                  <td>'.$injury->road_d19f.'</td>
                  <td>'.$injury->road_d39m.'</td>
                  <td>'.$injury->road_d39f.'</td>
                  <td>'.$injury->road_d40m.'</td>
                  <td>'.$injury->road_d40f.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Self-harm</td>
                  <td>'.$injury->self_harm_nc19m.'</td>
                  <td>'.$injury->self_harm_nc19f.'</td>
                  <td>'.$injury->self_harm_nc39m.'</td>
                  <td>'.$injury->self_harm_nc39f.'</td>
                  <td>'.$injury->self_harm_nc40m.'</td>
                  <td>'.$injury->self_harm_nc40f.'</td>
                  <td>'.$injury->self_harm_d19m.'</td>
                  <td>'.$injury->self_harm_d19f.'</td>
                  <td>'.$injury->self_harm_d39m.'</td>
                  <td>'.$injury->self_harm_d39f.'</td>
                  <td>'.$injury->self_harm_d40m.'</td>
                  <td>'.$injury->self_harm_d40f.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Interpersonal violence</td>
                  <td>'.$injury->inter_violence_nc19m.'</td>
                  <td>'.$injury->inter_violence_nc19f.'</td>
                  <td>'.$injury->inter_violence_nc39m.'</td>
                  <td>'.$injury->inter_violence_nc39f.'</td>
                  <td>'.$injury->inter_violence_nc40m.'</td>
                  <td>'.$injury->inter_violence_nc40f.'</td>
                  <td>'.$injury->inter_violence_d19m.'</td>
                  <td>'.$injury->inter_violence_d19f.'</td>
                  <td>'.$injury->inter_violence_d39m.'</td>
                  <td>'.$injury->inter_violence_d39f.'</td>
                  <td>'.$injury->inter_violence_d40m.'</td>
                  <td>'.$injury->inter_violence_d40f.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Other intentional injuries</td>
                  <td>'.$injury->other_injury_nc19m.'</td>
                  <td>'.$injury->other_injury_nc19f.'</td>
                  <td>'.$injury->other_injury_nc39m.'</td>
                  <td>'.$injury->other_injury_nc39f.'</td>
                  <td>'.$injury->other_injury_nc40m.'</td>
                  <td>'.$injury->other_injury_nc40f.'</td>
                  <td>'.$injury->other_injury_d19m.'</td>
                  <td>'.$injury->other_injury_d19f.'</td>
                  <td>'.$injury->other_injury_d39m.'</td>
                  <td>'.$injury->other_injury_d39f.'</td>
                  <td>'.$injury->other_injury_d40m.'</td>
                  <td>'.$injury->other_injury_d40f.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">Falls</td>
                  <td>'.$injury->falls_nc19m.'</td>
                  <td>'.$injury->falls_nc19f.'</td>
                  <td>'.$injury->falls_nc39m.'</td>
                  <td>'.$injury->falls_nc39f.'</td>
                  <td>'.$injury->falls_nc40m.'</td>
                  <td>'.$injury->falls_nc40f.'</td>
                  <td>'.$injury->falls_d19m.'</td>
                  <td>'.$injury->falls_d19f.'</td>
                  <td>'.$injury->falls_d39m.'</td>
                  <td>'.$injury->falls_d39f.'</td>
                  <td>'.$injury->falls_d40m.'</td>
                  <td>'.$injury->falls_d40f.'</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left">Drowning</td>
                  <td>'.$injury->drowning_nc19m.'</td>
                  <td>'.$injury->drowning_nc19f.'</td>
                  <td>'.$injury->drowning_nc39m.'</td>
                  <td>'.$injury->drowning_nc39f.'</td>
                  <td>'.$injury->drowning_nc40m.'</td>
                  <td>'.$injury->drowning_nc40f.'</td>
                  <td>'.$injury->drowning_d19m.'</td>
                  <td>'.$injury->drowning_d19f.'</td>
                  <td>'.$injury->drowning_d39m.'</td>
                  <td>'.$injury->drowning_d39f.'</td>
                  <td>'.$injury->drowning_d40m.'</td>
                  <td>'.$injury->drowning_d40f.'</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left">Fire/burns (thermo, electrical, chemical)</td>
                  <td>'.$injury->fire_nc19m.'</td>
                  <td>'.$injury->fire_nc19f.'</td>
                  <td>'.$injury->fire_nc39m.'</td>
                  <td>'.$injury->fire_nc39f.'</td>
                  <td>'.$injury->fire_nc40m.'</td>
                  <td>'.$injury->fire_nc40f.'</td>
                  <td>'.$injury->fire_d19m.'</td>
                  <td>'.$injury->fire_d19f.'</td>
                  <td>'.$injury->fire_d39m.'</td>
                  <td>'.$injury->fire_d39f.'</td>
                  <td>'.$injury->fire_d40m.'</td>
                  <td>'.$injury->fire_d40f.'</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left">Animal contact</td>
                  <td>'.$injury->animal_nc19m.'</td>
                  <td>'.$injury->animal_nc19f.'</td>
                  <td>'.$injury->animal_nc39m.'</td>
                  <td>'.$injury->animal_nc39f.'</td>
                  <td>'.$injury->animal_nc40m.'</td>
                  <td>'.$injury->animal_nc40f.'</td>
                  <td>'.$injury->animal_d19m.'</td>
                  <td>'.$injury->animal_d19f.'</td>
                  <td>'.$injury->animal_d39m.'</td>
                  <td>'.$injury->animal_d39f.'</td>
                  <td>'.$injury->animal_d40m.'</td>
                  <td>'.$injury->animal_d40f.'</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left">Poisoning</td>
                  <td>'.$injury->poison_nc19m.'</td>
                  <td>'.$injury->poison_nc19f.'</td>
                  <td>'.$injury->poison_nc39m.'</td>
                  <td>'.$injury->poison_nc39f.'</td>
                  <td>'.$injury->poison_nc40m.'</td>
                  <td>'.$injury->poison_nc40f.'</td>
                  <td>'.$injury->poison_d19m.'</td>
                  <td>'.$injury->poison_d19f.'</td>
                  <td>'.$injury->poison_d39m.'</td>
                  <td>'.$injury->poison_d39f.'</td>
                  <td>'.$injury->poison_d40m.'</td>
                  <td>'.$injury->poison_d40f.'</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td class="left">Natural disasters</td>
                  <td>'.$injury->natural_disasters_nc19m.'</td>
                  <td>'.$injury->natural_disasters_nc19f.'</td>
                  <td>'.$injury->natural_disasters_nc39m.'</td>
                  <td>'.$injury->natural_disasters_nc39f.'</td>
                  <td>'.$injury->natural_disasters_nc40m.'</td>
                  <td>'.$injury->natural_disasters_nc40f.'</td>
                  <td>'.$injury->natural_disasters_d19m.'</td>
                  <td>'.$injury->natural_disasters_d19f.'</td>
                  <td>'.$injury->natural_disasters_d39m.'</td>
                  <td>'.$injury->natural_disasters_d39f.'</td>
                  <td>'.$injury->natural_disasters_d40m.'</td>
                  <td>'.$injury->natural_disasters_d40f.'</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td class="left">Adverse effects of medical treatment</td>
                  <td>'.$injury->ad_effects_nc19m.'</td>
                  <td>'.$injury->ad_effects_nc19f.'</td>
                  <td>'.$injury->ad_effects_nc39m.'</td>
                  <td>'.$injury->ad_effects_nc39f.'</td>
                  <td>'.$injury->ad_effects_nc40m.'</td>
                  <td>'.$injury->ad_effects_nc40f.'</td>
                  <td>'.$injury->ad_effects_d19m.'</td>
                  <td>'.$injury->ad_effects_d19f.'</td>
                  <td>'.$injury->ad_effects_d39m.'</td>
                  <td>'.$injury->ad_effects_d39f.'</td>
                  <td>'.$injury->ad_effects_d40m.'</td>
                  <td>'.$injury->ad_effects_d40f.'</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td class="left">Other unintentional injuries</td>
                  <td>'.$injury->other_unintent_nc19m.'</td>
                  <td>'.$injury->other_unintent_nc19f.'</td>
                  <td>'.$injury->other_unintent_nc39m.'</td>
                  <td>'.$injury->other_unintent_nc39f.'</td>
                  <td>'.$injury->other_unintent_nc40m.'</td>
                  <td>'.$injury->other_unintent_nc40f.'</td>
                  <td>'.$injury->other_unintent_d19m.'</td>
                  <td>'.$injury->other_unintent_d19f.'</td>
                  <td>'.$injury->other_unintent_d39m.'</td>
                  <td>'.$injury->other_unintent_d39f.'</td>
                  <td>'.$injury->other_unintent_d40m.'</td>
                  <td>'.$injury->other_unintent_d40f.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">VI] Injuries</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $palliative_care = $this->research_model->palliative_care($date);

        if ($palliative_care) {
            $output .= '
              <h3 class="center">VII] Palliative care</h3>
              <table id="A7" class="center">
					      <thead>
					        <tr>
					          <th rowspan="2">N°</th>
					          <th rowspan="2">Designation</th>
					          <th colspan="2">Age < 20</th>
					          <th colspan="2">Age > 20</th>
					        </tr>
					        <tr>
					          <th>M</th>
					          <th>F</th>
					          <th>M</th>
					          <th>F</th>
									</tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>1</td>
					          <td class="left">Total patients in palliative care at the beginning of the month (old cases)</td>
					          <td>'.$palliative_care->oc_19m.'</td>
					          <td>'.$palliative_care->oc_19f.'</td>
					          <td>'.$palliative_care->oc_20m.'</td>
					          <td>'.$palliative_care->oc_20f.'</td>
					        </tr>
	                <tr>
					          <td>2</td>
					          <td class="left">Patients in palliative care new cases this month (new cases)</td>
					          <td>'.$palliative_care->nc_19m.'</td>
					          <td>'.$palliative_care->nc_19f.'</td>
					          <td>'.$palliative_care->nc_20m.'</td>
					          <td>'.$palliative_care->nc_20f.'</td>
					        </tr>
	                <tr>
					          <td>3</td>
					          <td class="left">Patients seen by the palliative care team at the least four time this month</td>
					          <td>'.$palliative_care->time_19m.'</td>
					          <td>'.$palliative_care->time_19f.'</td>
					          <td>'.$palliative_care->time_20m.'</td>
					          <td>'.$palliative_care->time_20f.'</td>
					        </tr>
	                <tr>
					          <td>4</td>
					          <td class="left">Severe pain patients that receive morphine</td>
					          <td>'.$palliative_care->morphine_19m.'</td>
					          <td>'.$palliative_care->morphine_19f.'</td>
					          <td>'.$palliative_care->morphine_20m.'</td>
					          <td>'.$palliative_care->morphine_20f.'</td>
					        </tr>
	                <tr>
					          <td>5</td>
					          <td class="left">Died received end of life care and bereavement support</td>
					          <td>'.$palliative_care->end_life_19m.'</td>
					          <td>'.$palliative_care->end_life_19f.'</td>
					          <td>'.$palliative_care->end_life_20m.'</td>
					          <td>'.$palliative_care->end_life_20f.'</td>
					        </tr>
	                <tr>
					          <td>6</td>
					          <td class="left">Total death in palliative care</td>
					          <td>'.$palliative_care->death_19m.'</td>
					          <td>'.$palliative_care->death_19f.'</td>
					          <td>'.$palliative_care->death_20m.'</td>
					          <td>'.$palliative_care->death_20f.'</td>
					        </tr>
					      </tbody>
					    </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">VII] Palliative care</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $community_checkup = $this->research_model->community_checkup($date);

        if ($community_checkup) {
            $output .= '
              <h3 class="center">VIII] Community checkup</h3>
              <table id="A8" class="center">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Designation</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Total number of people who consulted for annual medical checkup during the reportins period</td>
                    <td>'.$community_checkup->annual_checkup.'</td>
                  </tr>
                  <tr>
                    <td class="grey"></td>
                    <td class="left">Suspected positive at medical checkup who were referred for further diagnosis for the following diseases:</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Cardio vascular diseases</td>
                    <td>'.$community_checkup->cardio.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Chronic respiratory diseases</td>
                    <td>'.$community_checkup->respiratory.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Diabetes</td>
                    <td>'.$community_checkup->diabetes.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Renal disease</td>
                    <td>'.$community_checkup->renal.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Cancer</td>
                    <td>'.$community_checkup->cancer.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Disability</td>
                    <td>'.$community_checkup->disability.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">VIII] Community checkup</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $cancer_screening = $this->research_model->cancer_screening($date);

        if ($cancer_screening) {
            $output .= '
              <h3 class="center">IX] Cancer screening</h3>
              <table id="A9" class="center">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Designation</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Women screened for cervical cancer</td>
                    <td>'.$cancer_screening->cervical.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Women tested VIA positive during cervical cancer screening</td>
                    <td>'.$cancer_screening->cervical_viap.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Women tested VIA positive during cervical cancer screening and HIV positive</td>
                    <td>'.$cancer_screening->cervical_viap_hivp.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Women tested VIA positive and treated with cryotherapy</td>
                    <td>'.$cancer_screening->cryo_viap.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Women tested VIA positive and referred for treatment</td>
                    <td>'.$cancer_screening->treatement_viap.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Women screened for breast cancer</td>
                    <td>'.$cancer_screening->breast_screened.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Women referred for breast cancer</td>
                    <td>'.$cancer_screening->breast_referred.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">Women suspected for cervical cancer referred to other level</td>
                    <td>'.$cancer_screening->cervical_otherlevel.'</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Biopsies collected for all types of cancer</td>
                    <td>'.$cancer_screening->biopsies.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">IX] Cancer screening</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $hospitalization_a = $this->research_model->hospitalization_a($date);

        if ($hospitalization_a) {
            $output .= '
              <h3 class="center">X] Hospitalizations</h3>
              <h4>A) Summary by service</h4>
              <table id="A10" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Internal medicine<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Pediatrics<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Surgery<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Gyn. Obst<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Nut. Rehab<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Intensive care<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Neonatology<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Emergency<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Number of beds</td>
                    <td>'.$hospitalization_a->im_beds.'</td>
                    <td>'.$hospitalization_a->p_beds.'</td>
                    <td>'.$hospitalization_a->s_beds.'</td>
                    <td>'.$hospitalization_a->go_beds.'</td>
                    <td>'.$hospitalization_a->nr_beds.'</td>
                    <td>'.$hospitalization_a->ic_beds.'</td>
                    <td>'.$hospitalization_a->n_beds.'</td>
                    <td>'.$hospitalization_a->e_beds.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Present at the beginning of the month</td>
                    <td>'.$hospitalization_a->im_present_start.'</td>
                    <td>'.$hospitalization_a->p_present_start.'</td>
                    <td>'.$hospitalization_a->s_present_start.'</td>
                    <td>'.$hospitalization_a->go_present_start.'</td>
                    <td>'.$hospitalization_a->nr_present_start.'</td>
                    <td>'.$hospitalization_a->ic_present_start.'</td>
                    <td>'.$hospitalization_a->n_present_start.'</td>
                    <td>'.$hospitalization_a->e_present_start.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Admissions during the month of wich</td>
                    <td>'.$hospitalization_a->im_admissions.'</td>
                    <td>'.$hospitalization_a->p_admissions.'</td>
                    <td>'.$hospitalization_a->s_admissions.'</td>
                    <td>'.$hospitalization_a->go_admissions.'</td>
                    <td>'.$hospitalization_a->nr_admissions.'</td>
                    <td>'.$hospitalization_a->ic_admissions.'</td>
                    <td>'.$hospitalization_a->n_admissions.'</td>
                    <td>'.$hospitalization_a->e_admissions.'</td>
                  </tr>
                  <tr>
                    <td>3.1</td>
                    <td class="left">Referred from the health center</td>
                    <td>'.$hospitalization_a->im_referred.'</td>
                    <td>'.$hospitalization_a->p_referred.'</td>
                    <td>'.$hospitalization_a->s_referred.'</td>
                    <td>'.$hospitalization_a->go_referred.'</td>
                    <td>'.$hospitalization_a->nr_referred.'</td>
                    <td>'.$hospitalization_a->ic_referred.'</td>
                    <td>'.$hospitalization_a->n_referred.'</td>
                    <td>'.$hospitalization_a->e_referred.'</td>
                  </tr>
                  <tr>
                    <td>3.2</td>
                    <td class="left">Non-referred patients</td>
                    <td>'.$hospitalization_a->im_no_referred.'</td>
                    <td>'.$hospitalization_a->p_no_referred.'</td>
                    <td>'.$hospitalization_a->s_no_referred.'</td>
                    <td>'.$hospitalization_a->go_no_referred.'</td>
                    <td>'.$hospitalization_a->nr_no_referred.'</td>
                    <td>'.$hospitalization_a->ic_no_referred.'</td>
                    <td>'.$hospitalization_a->n_no_referred.'</td>
                    <td>'.$hospitalization_a->e_no_referred.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Discharges during the month of which</td>
                    <td>'.$hospitalization_a->im_discharges.'</td>
                    <td>'.$hospitalization_a->p_discharges.'</td>
                    <td>'.$hospitalization_a->s_discharges.'</td>
                    <td>'.$hospitalization_a->go_discharges.'</td>
                    <td>'.$hospitalization_a->nr_discharges.'</td>
                    <td>'.$hospitalization_a->ic_discharges.'</td>
                    <td>'.$hospitalization_a->n_discharges.'</td>
                    <td>'.$hospitalization_a->e_discharges.'</td>
                  </tr>
                  <tr>
                    <td>4.1</td>
                    <td class="left">Authorized/Cured</td>
                    <td>'.$hospitalization_a->im_authorized.'</td>
                    <td>'.$hospitalization_a->p_authorized.'</td>
                    <td>'.$hospitalization_a->s_authorized.'</td>
                    <td>'.$hospitalization_a->go_authorized.'</td>
                    <td>'.$hospitalization_a->nr_authorized.'</td>
                    <td>'.$hospitalization_a->ic_authorized.'</td>
                    <td>'.$hospitalization_a->n_authorized.'</td>
                    <td>'.$hospitalization_a->e_authorized.'</td>
                  </tr>
                  <tr>
                    <td>4.2</td>
                    <td class="left">Abandoned</td>
                    <td>'.$hospitalization_a->im_abandoned.'</td>
                    <td>'.$hospitalization_a->p_abandoned.'</td>
                    <td>'.$hospitalization_a->s_abandoned.'</td>
                    <td>'.$hospitalization_a->go_abandoned.'</td>
                    <td>'.$hospitalization_a->nr_abandoned.'</td>
                    <td>'.$hospitalization_a->ic_abandoned.'</td>
                    <td>'.$hospitalization_a->n_abandoned.'</td>
                    <td>'.$hospitalization_a->e_abandoned.'</td>
                  </tr>
                  <tr>
                    <td>4.3</td>
                    <td class="left">Deaths</td>
                    <td>'.$hospitalization_a->im_deaths.'</td>
                    <td>'.$hospitalization_a->p_deaths.'</td>
                    <td>'.$hospitalization_a->s_deaths.'</td>
                    <td>'.$hospitalization_a->go_deaths.'</td>
                    <td>'.$hospitalization_a->nr_deaths.'</td>
                    <td>'.$hospitalization_a->ic_deaths.'</td>
                    <td>'.$hospitalization_a->n_deaths.'</td>
                    <td>'.$hospitalization_a->e_deaths.'</td>
                  </tr>
                  <tr>
                    <td>4.4</td>
                    <td class="left">Referred</td>
                    <td>'.$hospitalization_a->im_dis_referred.'</td>
                    <td>'.$hospitalization_a->p_dis_referred.'</td>
                    <td>'.$hospitalization_a->s_dis_referred.'</td>
                    <td>'.$hospitalization_a->go_dis_referred.'</td>
                    <td>'.$hospitalization_a->nr_dis_referred.'</td>
                    <td>'.$hospitalization_a->ic_dis_referred.'</td>
                    <td>'.$hospitalization_a->n_dis_referred.'</td>
                    <td>'.$hospitalization_a->e_dis_referred.'</td>
                  </tr>
                  <tr>
                    <td>4.5</td>
                    <td class="left">Counter-referred</td>
                    <td>'.$hospitalization_a->im_counter.'</td>
                    <td>'.$hospitalization_a->p_counter.'</td>
                    <td>'.$hospitalization_a->s_counter.'</td>
                    <td>'.$hospitalization_a->go_counter.'</td>
                    <td>'.$hospitalization_a->nr_counter.'</td>
                    <td>'.$hospitalization_a->ic_counter.'</td>
                    <td>'.$hospitalization_a->n_counter.'</td>
                    <td>'.$hospitalization_a->e_counter.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Present at the end of the month</td>
                    <td>'.$hospitalization_a->im_present_end.'</td>
                    <td>'.$hospitalization_a->p_present_end.'</td>
                    <td>'.$hospitalization_a->s_present_end.'</td>
                    <td>'.$hospitalization_a->go_present_end.'</td>
                    <td>'.$hospitalization_a->nr_present_end.'</td>
                    <td>'.$hospitalization_a->ic_present_end.'</td>
                    <td>'.$hospitalization_a->n_present_end.'</td>
                    <td>'.$hospitalization_a->e_present_end.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Total hospitalization days for discharged patients</td>
                    <td>'.$hospitalization_a->im_total.'</td>
                    <td>'.$hospitalization_a->p_total.'</td>
                    <td>'.$hospitalization_a->s_total.'</td>
                    <td>'.$hospitalization_a->go_total.'</td>
                    <td>'.$hospitalization_a->nr_total.'</td>
                    <td>'.$hospitalization_a->ic_total.'</td>
                    <td>'.$hospitalization_a->n_total.'</td>
                    <td>'.$hospitalization_a->e_total.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Actual hospitalization days</td>
                    <td>'.$hospitalization_a->im_actual.'</td>
                    <td>'.$hospitalization_a->p_actual.'</td>
                    <td>'.$hospitalization_a->s_actual.'</td>
                    <td>'.$hospitalization_a->go_actual.'</td>
                    <td>'.$hospitalization_a->nr_actual.'</td>
                    <td>'.$hospitalization_a->ic_actual.'</td>
                    <td>'.$hospitalization_a->n_actual.'</td>
                    <td>'.$hospitalization_a->e_actual.'</td>
                  </tr>
                </tbody>
              </table>';
        } else {
            $output .= '
              <h3 class="center">X] Hospitalizations</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $hospitalization_bcde = $this->research_model->hospitalization_bcde($date);

        if ($hospitalization_bcde->hosp_1m_total != null) {
            $output.='
              <br>
              <h4>B) Summary by age</h4>
              <table id="B10" class="center">
                <thead>
                  <tr>
                    <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 1<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 1 to 4<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th>M</th>
                    <th>F</th>
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
                    <td class="center">1</td>
                    <td class="left">Hospitalized</td>
                    <td>'.$hospitalization_bcde->hosp_1m_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_1f_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_4m_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_4f_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_19m_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_19f_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_20m_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">2</td>
                    <td class="left">Deaths</td>
                    <td>'.$hospitalization_bcde->deaths_1m_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_1f_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_4m_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_4f_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_19m_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_19f_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_20m_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_20f_total.'</td>
                  </tr>
                </tbody>
              </table>
          <br>
          <div class="row">
            <div class="col-xs-6">
              <h4>C) Payment</h4>
              <table id="C10" class="center">
              <thead>
                <tr>
                  <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="left">Insured discharges(mutuelle, etc)</td>
                  <td>'.$hospitalization_bcde->insured_dis_total.'</td>
                </tr>
                <tr>
                  <td class="left">Non-paying discharges</td>
                  <td>'.$hospitalization_bcde->no_paying_dis_total.'</td>
                </tr>
                <tr>
                  <td class="left">Non-paying indigents discharged</td>
                  <td>'.$hospitalization_bcde->no_paying_ind_total.'</td>
                </tr>
              </tbody>
            </table>
            </div>
            <div class="col-xs-6">
              <h4>D) Special Causes of Admissions and Deaths</h4>
              <table id="D10" class="center">
              <thead>
                <tr>
                  <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Admissions<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="left">Road traffic accidents</td>
                  <td>'.$hospitalization_bcde->road_acc_ad_total.'</td>
                  <td>'.$hospitalization_bcde->road_acc_deaths_total.'</td>
                </tr>
                <tr>
                  <td class="left">Natural or man-made disasters (epidemic, earthquake, etc)</td>
                  <td>'.$hospitalization_bcde->natural_disa_ad_total.'</td>
                  <td>'.$hospitalization_bcde->natural_disa_deaths_total.'</td>
                </tr>
                <tr>
                  <td class="left">Workplace injuries</td>
                  <td>'.$hospitalization_bcde->work_inj_ad_total.'</td>
                  <td>'.$hospitalization_bcde->work_inj_deaths_total.'</td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
          <br>
          <h4>E) Causes of hospitalization and death at discharge</h4>
          <table id="E10" class="center">
                <thead>
                  <tr>
                    <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="6">Hospitalization<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="6">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
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
                    <td class="center">1</td>
                    <td class="left">Malaria simple</td>
                    <td>'.$hospitalization_bcde->malaria_sim_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sim_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sim_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sim_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sim_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sim_hos20f_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td class="center">2</td>
                    <td class="left">Malaria severe</td>
                    <td>'.$hospitalization_bcde->malaria_sev_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">3</td>
                    <td class="left">Borreliosis</td>
                    <td>'.$hospitalization_bcde->borreliosis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">4</td>
                    <td class="left">Pneumonia simple</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">5</td>
                    <td class="left">Pneumonia severe</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">6</td>
                    <td class="left">Pleurisy (non-tuberculosis)</td>
                    <td>'.$hospitalization_bcde->pleurisy_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">7</td>
                    <td class="left">Respratory infection acute (ARI) Other</td>
                    <td>'.$hospitalization_bcde->ari_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->ari_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->ari_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->ari_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->ari_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->ari_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->ari_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->ari_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->ari_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->ari_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->ari_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->ari_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">8</td>
                    <td class="left">Diarrhea bloody (dysentery)</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">9</td>
                    <td class="left">Diarrhea with dehydration</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">10</td>
                    <td class="left">Diarrhea no dehydration</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">11</td>
                    <td class="left">Cholera</td>
                    <td>'.$hospitalization_bcde->cholera_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">12</td>
                    <td class="left">Typhoid fever (salmonellosis)</td>
                    <td>'.$hospitalization_bcde->typhoid_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">13</td>
                    <td class="left">Meningitis</td>
                    <td>'.$hospitalization_bcde->meningitis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">14</td>
                    <td class="left">Measles</td>
                    <td>'.$hospitalization_bcde->measles_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->measles_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->measles_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->measles_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->measles_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->measles_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->measles_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->measles_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->measles_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->measles_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->measles_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->measles_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">15</td>
                    <td class="left">TB bacteriologically confirmed</td>
                    <td>'.$hospitalization_bcde->tb_conf_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">16</td>
                    <td class="left">TB clinically diagnosed</td>
                    <td>'.$hospitalization_bcde->tb_diag_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">17</td>
                    <td class="left">Fever chronic (>1 month)</td>
                    <td>'.$hospitalization_bcde->fever_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->fever_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->fever_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->fever_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->fever_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->fever_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->fever_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->fever_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->fever_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->fever_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->fever_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->fever_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">18</td>
                    <td class="left">Encephalitis</td>
                    <td>'.$hospitalization_bcde->encephalitis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">19</td>
                    <td class="left">Meningitis cryptococal</td>
                    <td>'.$hospitalization_bcde->mening_crypto_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">20</td>
                    <td class="left">Skin infections</td>
                    <td>'.$hospitalization_bcde->skin_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->skin_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->skin_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->skin_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->skin_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->skin_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->skin_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->skin_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->skin_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->skin_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->skin_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->skin_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">21</td>
                    <td class="left">Diarrhea chronic opportunistic infection</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">22</td>
                    <td class="left">HIV oppotunistic infections Other</td>
                    <td>'.$hospitalization_bcde->hiv_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">23</td>
                    <td class="left">Trauma head</td>
                    <td>'.$hospitalization_bcde->trauma_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">24</td>
                    <td class="left">Ruptured spleen</td>
                    <td>'.$hospitalization_bcde->spleen_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">25</td>
                    <td class="left">Fractures, open</td>
                    <td>'.$hospitalization_bcde->frac_open_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">26</td>
                    <td class="left">Fractures, internal</td>
                    <td>'.$hospitalization_bcde->frac_int_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">27</td>
                    <td class="left">Trauma other</td>
                    <td>'.$hospitalization_bcde->trauma_other_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">28</td>
                    <td class="left">Burns</td>
                    <td>'.$hospitalization_bcde->burns_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->burns_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->burns_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->burns_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->burns_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->burns_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->burns_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->burns_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->burns_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->burns_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->burns_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->burns_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">29</td>
                    <td class="left">Hepatitis</td>
                    <td>'.$hospitalization_bcde->hepatitis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">30</td>
                    <td class="left">Cirrhosis of the liver</td>
                    <td>'.$hospitalization_bcde->cirrhosis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">31</td>
                    <td class="left">Digestive tract hemorrhages</td>
                    <td>'.$hospitalization_bcde->digestive_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">32</td>
                    <td class="left">Gastritis</td>
                    <td>'.$hospitalization_bcde->gastritis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">33</td>
                    <td class="left">Ulcer, gastro-duodenal</td>
                    <td>'.$hospitalization_bcde->ulcer_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">34</td>
                    <td class="left">Appendicitis</td>
                    <td>'.$hospitalization_bcde->appendi_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">35</td>
                    <td class="left">Hernia</td>
                    <td>'.$hospitalization_bcde->hernia_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">36</td>
                    <td class="left">Peritonitis (non-tuberculosis)</td>
                    <td>'.$hospitalization_bcde->peritonitis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">37</td>
                    <td class="left">Intestinal occlusion</td>
                    <td>'.$hospitalization_bcde->intestinal_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">38</td>
                    <td class="left">Urinary tract infections</td>
                    <td>'.$hospitalization_bcde->urinary_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">39</td>
                    <td class="left">Bone infections (including osteomyelitis)</td>
                    <td>'.$hospitalization_bcde->bone_inf_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">40</td>
                    <td class="left">Bone and joint disease other</td>
                    <td>'.$hospitalization_bcde->bone_other_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">41</td>
                    <td class="left">Acute flaccid paralysis (polio)</td>
                    <td>'.$hospitalization_bcde->acute_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->acute_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->acute_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->acute_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->acute_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->acute_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->acute_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->acute_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->acute_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->acute_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->acute_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->acute_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">42</td>
                    <td class="left">Gynecological problems</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$hospitalization_bcde->gyneco_hos19f_total.'</td>
                    <td class="grey"></td>
                    <td>'.$hospitalization_bcde->gyneco_hos20f_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$hospitalization_bcde->gyneco_deaths19f_total.'</td>
                    <td class="grey"></td>
                    <td>'.$hospitalization_bcde->gyneco_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">43</td>
                    <td class="left">Mastoditis</td>
                    <td>'.$hospitalization_bcde->mastoditis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">44</td>
                    <td class="left">Tetanus</td>
                    <td>'.$hospitalization_bcde->tetanus_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">45</td>
                    <td class="left">Cancer all</td>
                    <td>'.$hospitalization_bcde->cancer_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_deaths20f_total.'</td>
                  </tr>
                </tbody>
              </table>
          <br>';
        }



        if ($GBV) {
            $output.='
          <br>
          <h3 class="center">XI] Gender based violence</h3>
          <div class="row">
            <table id="A11" class="center">
              <thead>
                <tr>
                  <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 5 to 9<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 10 to 18<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 19 to 24<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 25<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
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
                  <td class="center">1</td>
                  <td class="left">GBV victims with symptoms of sexual violence (new cases)</td>
                  <td>'.$GBV->sexual_violence_5m.'</td>
                  <td>'.$GBV->sexual_violence_5f.'</td>
                  <td>'.$GBV->sexual_violence_9m.'</td>
                  <td>'.$GBV->sexual_violence_9f.'</td>
                  <td>'.$GBV->sexual_violence_18m.'</td>
                  <td>'.$GBV->sexual_violence_18f.'</td>
                  <td>'.$GBV->sexual_violence_24m.'</td>
                  <td>'.$GBV->sexual_violence_24f.'</td>
                  <td>'.$GBV->sexual_violence_25m.'</td>
                  <td>'.$GBV->sexual_violence_25f.'</td>
                </tr>
                <tr>
                  <td class="center">2</td>
                  <td class="left">GBV victims with symptoms of physical violence (new cases)</td>
                  <td>'.$GBV->physical_violence_5m.'</td>
                  <td>'.$GBV->physical_violence_5f.'</td>
                  <td>'.$GBV->physical_violence_9m.'</td>
                  <td>'.$GBV->physical_violence_9f.'</td>
                  <td>'.$GBV->physical_violence_18m.'</td>
                  <td>'.$GBV->physical_violence_18f.'</td>
                  <td>'.$GBV->physical_violence_24m.'</td>
                  <td>'.$GBV->physical_violence_24f.'</td>
                  <td>'.$GBV->physical_violence_25m.'</td>
                  <td>'.$GBV->physical_violence_25f.'</td>
                </tr>
                <tr>
                  <td class="center">3</td>
                  <td class="left">GBV victims with symptoms of emotional violence (new cases)</td>
                  <td>'.$GBV->emotional_violence_5m.'</td>
                  <td>'.$GBV->emotional_violence_5f.'</td>
                  <td>'.$GBV->emotional_violence_9m.'</td>
                  <td>'.$GBV->emotional_violence_9f.'</td>
                  <td>'.$GBV->emotional_violence_18m.'</td>
                  <td>'.$GBV->emotional_violence_18f.'</td>
                  <td>'.$GBV->emotional_violence_24m.'</td>
                  <td>'.$GBV->emotional_violence_24f.'</td>
                  <td>'.$GBV->emotional_violence_25m.'</td>
                  <td>'.$GBV->emotional_violence_25f.'</td>
                </tr>
                <tr>
                  <td class="center">4</td>
                  <td class="left">GBV victims with symptoms of economic violence (new cases)</td>
                  <td>'.$GBV->economic_violence_5m.'</td>
                  <td>'.$GBV->economic_violence_5f.'</td>
                  <td>'.$GBV->economic_violence_9m.'</td>
                  <td>'.$GBV->economic_violence_9f.'</td>
                  <td>'.$GBV->economic_violence_18m.'</td>
                  <td>'.$GBV->economic_violence_18f.'</td>
                  <td>'.$GBV->economic_violence_24m.'</td>
                  <td>'.$GBV->economic_violence_24f.'</td>
                  <td>'.$GBV->economic_violence_25m.'</td>
                  <td>'.$GBV->economic_violence_25f.'</td>
                </tr>
                <tr>
                  <td class="center">5</td>
                  <td class="left">GBV victims referred for care to higher level health facility</td>
                  <td>'.$GBV->refered_higher_level_5m.'</td>
                  <td>'.$GBV->refered_higher_level_5f.'</td>
                  <td>'.$GBV->refered_higher_level_9m.'</td>
                  <td>'.$GBV->refered_higher_level_9f.'</td>
                  <td>'.$GBV->refered_higher_level_18m.'</td>
                  <td>'.$GBV->refered_higher_level_18f.'</td>
                  <td>'.$GBV->refered_higher_level_24m.'</td>
                  <td>'.$GBV->refered_higher_level_24f.'</td>
                  <td>'.$GBV->refered_higher_level_25m.'</td>
                  <td>'.$GBV->refered_higher_level_25f.'</td>
                </tr>
                <tr>
                  <td class="center">6</td>
                  <td class="left">GBV victims referred to this facility by police</td>
                  <td>'.$GBV->refered_police_5m.'</td>
                  <td>'.$GBV->refered_police_5f.'</td>
                  <td>'.$GBV->refered_police_9m.'</td>
                  <td>'.$GBV->refered_police_9f.'</td>
                  <td>'.$GBV->refered_police_18m.'</td>
                  <td>'.$GBV->refered_police_18f.'</td>
                  <td>'.$GBV->refered_police_24m.'</td>
                  <td>'.$GBV->refered_police_24f.'</td>
                  <td>'.$GBV->refered_police_25m.'</td>
                  <td>'.$GBV->refered_police_25f.'</td>
                </tr>
                <tr>
                  <td class="center">7</td>
                  <td class="left">GBV victims referred to this facility by community health workers</td>
                  <td>'.$GBV->refered_community_5m.'</td>
                  <td>'.$GBV->refered_community_5f.'</td>
                  <td>'.$GBV->refered_community_9m.'</td>
                  <td>'.$GBV->refered_community_9f.'</td>
                  <td>'.$GBV->refered_community_18m.'</td>
                  <td>'.$GBV->refered_community_18f.'</td>
                  <td>'.$GBV->refered_community_24m.'</td>
                  <td>'.$GBV->refered_community_24f.'</td>
                  <td>'.$GBV->refered_community_25m.'</td>
                  <td>'.$GBV->refered_community_25f.'</td>
                </tr>
                <tr>
                  <td class="center">8</td>
                  <td class="left">GBV victims HIV + sero-conversion 3 months after exposure</td>
                  <td>'.$GBV->hiv_5m.'</td>
                  <td>'.$GBV->hiv_5f.'</td>
                  <td>'.$GBV->hiv_9m.'</td>
                  <td>'.$GBV->hiv_9f.'</td>
                  <td>'.$GBV->hiv_18m.'</td>
                  <td>'.$GBV->hiv_18f.'</td>
                  <td>'.$GBV->hiv_24m.'</td>
                  <td>'.$GBV->hiv_24f.'</td>
                  <td>'.$GBV->hiv_25m.'</td>
                  <td>'.$GBV->hiv_25f.'</td>
                </tr>
                <tr>
                  <td class="center">9</td>
                  <td class="left">GBV victims with irreversible disabilities due to GBV</td>
                  <td>'.$GBV->disabilities_5m.'</td>
                  <td>'.$GBV->disabilities_5f.'</td>
                  <td>'.$GBV->disabilities_9m.'</td>
                  <td>'.$GBV->disabilities_9f.'</td>
                  <td>'.$GBV->disabilities_18m.'</td>
                  <td>'.$GBV->disabilities_18f.'</td>
                  <td>'.$GBV->disabilities_24m.'</td>
                  <td>'.$GBV->disabilities_24f.'</td>
                  <td>'.$GBV->disabilities_25m.'</td>
                  <td>'.$GBV->disabilities_25f.'</td>
                </tr>
                <tr>
                  <td class="center">10</td>
                  <td class="left">GBV victims deaths</td>
                  <td>'.$GBV->deaths_5m.'</td>
                  <td>'.$GBV->deaths_5f.'</td>
                  <td>'.$GBV->deaths_9m.'</td>
                  <td>'.$GBV->deaths_9f.'</td>
                  <td>'.$GBV->deaths_18m.'</td>
                  <td>'.$GBV->deaths_18f.'</td>
                  <td>'.$GBV->deaths_24m.'</td>
                  <td>'.$GBV->deaths_24f.'</td>
                  <td>'.$GBV->deaths_25m.'</td>
                  <td>'.$GBV->deaths_25f.'</td>
                </tr>
                <tr>
                  <td class="center">11</td>
                  <td class="left">GBV victims pregnant 4 weeks after exposure</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td>'.$GBV->pregnant_9f.'</td>
                  <td class="grey"></td>
                  <td>'.$GBV->pregnant_18f.'</td>
                  <td class="grey"></td>
                  <td>'.$GBV->pregnant_24f.'</td>
                  <td class="grey"></td>
                  <td>'.$GBV->pregnant_25f.'</td>
                </tr>
                <tr>
                  <td class="center">12</td>
                  <td class="left">GBV victims received emergency contraception within 72h</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td>'.$GBV->contraception_9f.'</td>
                  <td class="grey"></td>
                  <td>'.$GBV->contraception_18f.'</td>
                  <td class="grey"></td>
                  <td>'.$GBV->contraception_24f.'</td>
                  <td class="grey"></td>
                  <td>'.$GBV->contraception_25f.'</td>
                </tr>
                <tr>
                  <td class="center">13</td>
                  <td class="left">GBV victims received post exposure HIV prophylaxis within 48h</td>
                  <td>'.$GBV->exposure_hiv_5m.'</td>
                  <td>'.$GBV->exposure_hiv_5f.'</td>
                  <td>'.$GBV->exposure_hiv_9m.'</td>
                  <td>'.$GBV->exposure_hiv_9f.'</td>
                  <td>'.$GBV->exposure_hiv_18m.'</td>
                  <td>'.$GBV->exposure_hiv_18f.'</td>
                  <td>'.$GBV->exposure_hiv_24m.'</td>
                  <td>'.$GBV->exposure_hiv_24f.'</td>
                  <td>'.$GBV->exposure_hiv_25m.'</td>
                  <td>'.$GBV->exposure_hiv_25f.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XI] Gender based violence</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $surgery=$this->research_model->surgery($date);

        if ($surgery->appendice_urg_total != null) {
            $output.='
          <br>
          <h3 class="center">XII] Surgery</h3>
          <div class="row">
            <table id="A12" class="center">
              <thead>
                <tr>
                  <th>N°</th>
                  <th>Service</th>
                  <th>Type of surgical intervention</th>
                  <th>Urgent interventions</th>
                  <th>Planned interventions</th>
                  <th>Post-surgical infection total</th>
                </tr>
              </thead>
              <tbody class="center">
                <tr>
                  <td rowspan="6">1</td>
                  <td rowspan="6">General Surgery</td>
                  <td class="left">1. Appendicectomy</td>
                  <td>'.$surgery->appendice_urg_total.'</td>
                  <td>'.$surgery->appendice_plan_total.'</td>
                  <td rowspan="6">'.$surgery->gs_total_total.'</td>
                </tr>
                <tr>
                  <td class="left">2. Hernioraphy</td>
                  <td>'.$surgery->hernioraphy_urg_total.'</td>
                  <td>'.$surgery->hernioraphy_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3. Laparotomy</td>
                  <td>'.$surgery->laparo_urg_total.'</td>
                  <td>'.$surgery->laparo_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">4. Thyroidectomy</td>
                  <td>'.$surgery->tyroide_urg_total.'</td>
                  <td>'.$surgery->tyroide_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">5. Adenomectomy</td>
                  <td>'.$surgery->adeno_urg_total.'</td>
                  <td>'.$surgery->adeno_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">6. General Surgery Other</td>
                  <td>'.$surgery->gs_other_urg_total.'</td>
                  <td>'.$surgery->gs_other_plan_total.'</td>
                </tr>
                <tr>
                  <td rowspan="12">2</td>
                  <td rowspan="12">Gyneco-Obstetrical</td>
                  <td class="left">1. Cesarean Section</td>
                  <td>'.$surgery->cesarean_urg_total.'</td>
                  <td>'.$surgery->cesarean_plan_total.'</td>
                  <td rowspan="12">'.$surgery->go_total_total.'</td>
                </tr>
                <tr>
                  <td class="left">2.1 Gynecological Hysterectomy</td>
                  <td>'.$surgery->gyneco_urg_total.'</td>
                  <td>'.$surgery->gyneco_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">2.2 Obstetrical Hysterectomy</td>
                  <td>'.$surgery->obste_urg_total.'</td>
                  <td>'.$surgery->obste_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3.1 Laparotomy for Extra Uterine Pregnancy</td>
                  <td>'.$surgery->laparo_preg_urg_total.'</td>
                  <td>'.$surgery->laparo_preg_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3.2 Laparotomy for Uterine Rupture</td>
                  <td>'.$surgery->laparo_rupt_urg_total.'</td>
                  <td>'.$surgery->laparo_rupt_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3.3 Laparotomy for Peritonitis</td>
                  <td>'.$surgery->laparo_perit_urg_total.'</td>
                  <td>'.$surgery->laparo_perit_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3.4. Laparatomy for Myomectomy</td>
                  <td>'.$surgery->laparo_myomec_urg_total.'</td>
                  <td>'.$surgery->laparo_myomec_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">4.1 Vesico Vaginal Fistula Repaired</td>
                  <td class="grey"></td>
                  <td>'.$surgery->vesico_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">4.2 Recto Vaginal Fistula Repaired</td>
                  <td class="grey"></td>
                  <td>'.$surgery->recto_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">4.3 Ureteric Vaginal Fistula Repaired</td>
                  <td class="grey"></td>
                  <td>'.$surgery->ureteric_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">5. Biopsy Curettage</td>
                  <td class="grey"></td>
                  <td>'.$surgery->biopsy_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">6. Gyneco-Obstetrical Surgery Other</td>
                  <td>'.$surgery->go_other_urg_total.'</td>
                  <td>'.$surgery->go_other_plan_total.'</td>
                </tr>
                <tr>
                  <td rowspan="4">3</td>
                  <td rowspan="4">Orthopedic</td>
                  <td class="left">1. Amputations</td>
                  <td>'.$surgery->amputations_urg_total.'</td>
                  <td>'.$surgery->amputations_plan_total.'</td>
                  <td rowspan="4">'.$surgery->ortho_total_total.'</td>
                </tr>
                <tr>
                  <td class="left">2. Osteosynthesis</td>
                  <td>'.$surgery->osteo_urg_total.'</td>
                  <td>'.$surgery->osteo_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3. Fracture Without Implant</td>
                  <td>'.$surgery->fracture_urg_total.'</td>
                  <td>'.$surgery->fracture_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">4. Orthopedic Surgery Other</td>
                  <td>'.$surgery->ortho_other_urg_total.'</td>
                  <td>'.$surgery->ortho_other_plan_total.'</td>
                </tr>
                <tr>
                  <td rowspan="5">4</td>
                  <td rowspan="5">Ophthalmologic</td>
                  <td class="left">1. Glaucoma</td>
                  <td>'.$surgery->glaucoma_urg_total.'</td>
                  <td>'.$surgery->glaucoma_plan_total.'</td>
                  <td rowspan="5">'.$surgery->oph_total_total.'</td>
                </tr>
                <tr>
                  <td class="left">2. Trachoma</td>
                  <td>'.$surgery->trachoma_urg_total.'</td>
                  <td>'.$surgery->trachoma_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3. Cataract</td>
                  <td>'.$surgery->cataract_urg_total.'</td>
                  <td>'.$surgery->cataract_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">4. Trauma</td>
                  <td>'.$surgery->trauma_urg_total.'</td>
                  <td>'.$surgery->trauma_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">5. Ophthalmological Surgery Other</td>
                  <td>'.$surgery->oph_other_urg_total.'</td>
                  <td>'.$surgery->oph_other_plan_total.'</td>
                </tr>
                <tr>
                  <td rowspan="2">5</td>
                  <td rowspan="2">Plastic Surgery</td>
                  <td class="left">1. Cleft Palate, Cleft Lip</td>
                  <td>'.$surgery->cleft_urg_total.'</td>
                  <td>'.$surgery->cleft_plan_total.'</td>
                  <td rowspan="2">'.$surgery->plastic_total_total.'</td>
                </tr>
                <tr>
                  <td class="left">2. Other Plastic Surgery</td>
                  <td>'.$surgery->plastic_other_urg_total.'</td>
                  <td>'.$surgery->plastic_other_plan_total.'</td>
                </tr>
                <tr>
                  <td rowspan="3">6</td>
                  <td colspan="2">SURGICAL INTERVENTIONS TOTAL</td>
                  <td>'.$surgery->total_urg_total.'</td>
                  <td>'.$surgery->total_plan_total.'</td>
                  <td rowspan="3" class="grey"></td>
                </tr>
                <tr>
                  <td rowspan="2">Of Which</td>
                  <td class="left">1. Major Surgery</td>
                  <td>'.$surgery->major_urg_total.'</td>
                  <td>'.$surgery->major_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">2. Minor Surgery</td>
                  <td>'.$surgery->minor_urg_total.'</td>
                  <td>'.$surgery->minor_plan_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XII] Surgery</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $anesthesia=$this->research_model->anesthesia($date);

        if ($anesthesia->general_total != null) {
            $output.='
          <div class="col-xs-6">
            <h3 class="center">XIII] Anesthesia</h3>
            <div class="row">
              <table id="A13" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">General anesthesia</td>
                    <td>'.$anesthesia->general_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Regional anesthesia</td>
                    <td>'.$anesthesia->regional_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Local anesthesia</td>
                    <td>'.$anesthesia->local_total.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Other types of anesthesia</td>
                    <td>'.$anesthesia->other_type_total.'</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>';
        } else {
            $output .= '
            <div class="col-xs-6">
              <h3 class="center">XIII] Anesthesia</h3>
              <h2>This part has not been filled yet</h2>
              <br>
            </div>';
        }



        if ($physiotherapy) {
            $output .= '
            <div class="col-xs-6">
              <h3 class="center">XIV] Physiotherapy</h3>
              <table id="A14" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Outpatients<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Hospitalized<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Physical therapy</td>
                    <td>'.$physiotherapy->physical_therapy.'</td>
                    <td>'.$physiotherapy->physical_therapy_hos.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Audiology</td>
                    <td>'.$physiotherapy->audiology.'</td>
                    <td>'.$physiotherapy->audiology_hos.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Speech therapy</td>
                    <td>'.$physiotherapy->speech_therapy.'</td>
                    <td>'.$physiotherapy->speech_therapy_hos.'</td>
                  </tr>
                </tbody>
              </table>
              <br>
            </div>';
        } else {
            $output .= '
            <div class="col-xs-6">
              <h3 class="center">XIV] Physiotherapy</h3>
              <h2>This part has not been filled yet</h2>
              <br>
            </div>';
        }

        $obstetrical_a=$this->research_model->obstetrical_a($date);

        if ($obstetrical_a) {
            $output.='
          <br>
          <h3 class="center">XV] Obstetrical complications</h3>
          <br>
          <h4>A) Cases and Deaths</h4>
          <div class="row">
            <table id="A15" class="center">
              <thead>
                <tr>
                  <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">OPD NC<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Hospitalized<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>Age < 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age ≥ 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age < 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age ≥ 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age < 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age ≥ 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="left">Complications of abortions(spontaneous and induced)</td>
                  <td>'.$obstetrical_a->complications_opd19.'</td>
                  <td>'.$obstetrical_a->complications_opd20.'</td>
                  <td>'.$obstetrical_a->complications_hos19.'</td>
                  <td>'.$obstetrical_a->complications_hos20.'</td>
                  <td>'.$obstetrical_a->complications_deaths19.'</td>
                  <td>'.$obstetrical_a->complications_deaths20.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Ectopic pregnancy</td>
                  <td>'.$obstetrical_a->ectopic_opd19.'</td>
                  <td>'.$obstetrical_a->ectopic_opd20.'</td>
                  <td>'.$obstetrical_a->ectopic_hos19.'</td>
                  <td>'.$obstetrical_a->ectopic_hos20.'</td>
                  <td>'.$obstetrical_a->ectopic_deaths19.'</td>
                  <td>'.$obstetrical_a->ectopic_deaths20.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Antepartum hemorrhage (APH)</td>
                  <td>'.$obstetrical_a->antepartum_opd19.'</td>
                  <td>'.$obstetrical_a->antepartum_opd20.'</td>
                  <td>'.$obstetrical_a->antepartum_hos19.'</td>
                  <td>'.$obstetrical_a->antepartum_hos20.'</td>
                  <td>'.$obstetrical_a->antepartum_deaths19.'</td>
                  <td>'.$obstetrical_a->antepartum_deaths20.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Post-partum hemorrhage (PPH)</td>
                  <td>'.$obstetrical_a->postpartum_opd19.'</td>
                  <td>'.$obstetrical_a->postpartum_opd20.'</td>
                  <td>'.$obstetrical_a->postpartum_hos19.'</td>
                  <td>'.$obstetrical_a->postpartum_hos20.'</td>
                  <td>'.$obstetrical_a->postpartum_deaths19.'</td>
                  <td>'.$obstetrical_a->postpartum_deaths20.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">Eclampsia / Severe pre eclampsia</td>
                  <td>'.$obstetrical_a->eclampsia_opd19.'</td>
                  <td>'.$obstetrical_a->eclampsia_opd20.'</td>
                  <td>'.$obstetrical_a->eclampsia_hos19.'</td>
                  <td>'.$obstetrical_a->eclampsia_hos20.'</td>
                  <td>'.$obstetrical_a->eclampsia_deaths19.'</td>
                  <td>'.$obstetrical_a->eclampsia_deaths20.'</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left">Post C / Section infection</td>
                  <td>'.$obstetrical_a->postc_opd19.'</td>
                  <td>'.$obstetrical_a->postc_opd20.'</td>
                  <td>'.$obstetrical_a->postc_hos19.'</td>
                  <td>'.$obstetrical_a->postc_hos20.'</td>
                  <td>'.$obstetrical_a->postc_deaths19.'</td>
                  <td>'.$obstetrical_a->postc_deaths20.'</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left">Other postpartum infections</td>
                  <td>'.$obstetrical_a->postpartum_other_opd19.'</td>
                  <td>'.$obstetrical_a->postpartum_other_opd20.'</td>
                  <td>'.$obstetrical_a->postpartum_other_hos19.'</td>
                  <td>'.$obstetrical_a->postpartum_other_hos20.'</td>
                  <td>'.$obstetrical_a->postpartum_other_deaths19.'</td>
                  <td>'.$obstetrical_a->postpartum_other_deaths20.'</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left">Prolonged or obstructed labor</td>
                  <td>'.$obstetrical_a->prolonged_opd19.'</td>
                  <td>'.$obstetrical_a->prolonged_opd20.'</td>
                  <td>'.$obstetrical_a->prolonged_hos19.'</td>
                  <td>'.$obstetrical_a->prolonged_hos20.'</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left">Uterine rupture</td>
                  <td>'.$obstetrical_a->uterine_rup_opd19.'</td>
                  <td>'.$obstetrical_a->uterine_rup_opd20.'</td>
                  <td>'.$obstetrical_a->uterine_rup_hos19.'</td>
                  <td>'.$obstetrical_a->uterine_rup_hos20.'</td>
                  <td>'.$obstetrical_a->uterine_rup_deaths19.'</td>
                  <td>'.$obstetrical_a->uterine_rup_deaths20.'</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td class="left">Amniotic embolism</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td>'.$obstetrical_a->other_direct_obste_deaths19.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_deaths20.'</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td class="left">Complication of anesthesia</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td>'.$obstetrical_a->other_direct_obste_deaths19.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_deaths20.'</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td class="left">Other direct obstetrical complication</td>
                  <td>'.$obstetrical_a->other_direct_obste_opd19.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_opd20.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_hos19.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_hos20.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_deaths19.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_deaths20.'</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td class="left">Anemia severe (< 7gm/dl)</td>
                  <td>'.$obstetrical_a->anemia_sev_opd19.'</td>
                  <td>'.$obstetrical_a->anemia_sev_opd20.'</td>
                  <td>'.$obstetrical_a->anemia_sev_hos19.'</td>
                  <td>'.$obstetrical_a->anemia_sev_hos20.'</td>
                  <td>'.$obstetrical_a->anemia_sev_deaths19.'</td>
                  <td>'.$obstetrical_a->anemia_sev_deaths20.'</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td class="left">Malaria simple in pregnancy</td>
                  <td>'.$obstetrical_a->malaria_sim_opd19.'</td>
                  <td>'.$obstetrical_a->malaria_sim_opd20.'</td>
                  <td>'.$obstetrical_a->malaria_sim_hos19.'</td>
                  <td>'.$obstetrical_a->malaria_sim_hos20.'</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>15</td>
                  <td class="left">Malaria with minor digestive symptoms in pregnancy</td>
                  <td>'.$obstetrical_a->malaria_dig_opd19.'</td>
                  <td>'.$obstetrical_a->malaria_dig_opd20.'</td>
                  <td>'.$obstetrical_a->malaria_dig_hos19.'</td>
                  <td>'.$obstetrical_a->malaria_dig_hos20.'</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>16</td>
                  <td class="left">Severe malaria in pregnancy</td>
                  <td>'.$obstetrical_a->malaria_sev_opd19.'</td>
                  <td>'.$obstetrical_a->malaria_sev_opd20.'</td>
                  <td>'.$obstetrical_a->malaria_sev_hos19.'</td>
                  <td>'.$obstetrical_a->malaria_sev_hos20.'</td>
                  <td>'.$obstetrical_a->malaria_sev_deaths19.'</td>
                  <td>'.$obstetrical_a->malaria_sev_deaths20.'</td>
                </tr>
                <tr>
                  <td>17</td>
                  <td class="left">HIV/Opportunistic infections</td>
                  <td>'.$obstetrical_a->hiv_opd19.'</td>
                  <td>'.$obstetrical_a->hiv_opd20.'</td>
                  <td>'.$obstetrical_a->hiv_hos19.'</td>
                  <td>'.$obstetrical_a->hiv_hos20.'</td>
                  <td>'.$obstetrical_a->hiv_deaths19.'</td>
                  <td>'.$obstetrical_a->hiv_deaths20.'</td>
                </tr>
                <tr>
                  <td>18</td>
                  <td class="left">Pulmonary embolism</td>
                  <td>'.$obstetrical_a->pulmonary_opd19.'</td>
                  <td>'.$obstetrical_a->pulmonary_opd20.'</td>
                  <td>'.$obstetrical_a->pulmonary_hos19.'</td>
                  <td>'.$obstetrical_a->pulmonary_hos20.'</td>
                  <td>'.$obstetrical_a->pulmonary_deaths19.'</td>
                  <td>'.$obstetrical_a->pulmonary_deaths20.'</td>
                </tr>
                <tr>
                  <td>19</td>
                  <td class="left">Pneumonia on pregnancy</td>
                  <td>'.$obstetrical_a->pneumonia_opd19.'</td>
                  <td>'.$obstetrical_a->pneumonia_opd20.'</td>
                  <td>'.$obstetrical_a->pneumonia_hos19.'</td>
                  <td>'.$obstetrical_a->pneumonia_hos20.'</td>
                  <td>'.$obstetrical_a->pneumonia_deaths19.'</td>
                  <td>'.$obstetrical_a->pneumonia_deaths20.'</td>
                </tr>
                <tr>
                  <td>20</td>
                  <td class="left">Other indirect obstetrical complication</td>
                  <td>'.$obstetrical_a->other_ind_obstet_opd19.'</td>
                  <td>'.$obstetrical_a->other_ind_obstet_opd20.'</td>
                  <td>'.$obstetrical_a->other_ind_obstet_hos19.'</td>
                  <td>'.$obstetrical_a->other_ind_obstet_hos20.'</td>
                  <td>'.$obstetrical_a->other_ind_obstet_deaths19.'</td>
                  <td>'.$obstetrical_a->other_ind_obstet_deaths20.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XV] Obstetrical complications</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $obstetrical_bc=$this->research_model->obstetrical_bc($date);

        if ($obstetrical_bc->intra_antibio_total != null) {
            $output.='
          <br>
          <h4>B) Emergency obstetric and neonatal care interventions (basic and comprehensive)</h4>
          <div class="row">
            <table id="B15" class="center">
              <thead>
                <tr>
                  <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="left">Intravenous antibiotics to manage obstetrical infections</td>
                  <td>'.$obstetrical_bc->intra_antibio_total.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Mother received parenteral uterotonic drugd (oxytocin) to manage PPH</td>
                  <td>'.$obstetrical_bc->mother_uterotonic_total.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Manual removal of placenta</td>
                  <td>'.$obstetrical_bc->manual_placenta_total.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Post-abortion care (manual vacuum aspiration)</td>
                  <td>'.$obstetrical_bc->post_abortion_total.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">Delivery by vacuum extraction</td>
                  <td>'.$obstetrical_bc->vacuum_extraction_total.'</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left">(Pre) eclampsia cases receiving magnesium sulfate</td>
                  <td>'.$obstetrical_bc->Preeclampsia_total.'</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left">Caesarean</td>
                  <td>'.$obstetrical_bc->caesarean_total.'</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left">Blood transfusion for obstetrical complications</td>
                  <td>'.$obstetrical_bc->blood_tranf_total.'</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left">Women with obstetrical complications referred for emerhency care to higher levels</td>
                  <td>'.$obstetrical_bc->women_w_obste_compli_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        }



        if ($delivery_birth) {
            $output .= '
              <h3 class="center">XVI] Deliveries and births at health facility</h3>
              <table id="A16" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Deliveries, total</td>
                    <td>'.$delivery_birth->delive_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Deliveries eutocic</td>
                    <td>'.$delivery_birth->delive_eutocic.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Deliveries dystocic</td>
                    <td>'.$delivery_birth->delive_dystocic.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Delivery with episiotomy</td>
                    <td>'.$delivery_birth->delive_w_episiotomy.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Delivery with oxytocin stimulation</td>
                    <td>'.$delivery_birth->delive_w_oxytocin.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Delivery complicated by perineal tear (second-third-fourth degree)</td>
                    <td>'.$delivery_birth->delive_complicated.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Birth trauma to newborn</td>
                    <td>'.$delivery_birth->birth_trauma.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">Cleft palate or cleft lip</td>
                    <td>'.$delivery_birth->cleft_palate.'</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Omphalocel</td>
                    <td>'.$delivery_birth->omphalocel.'</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td class="left">Laparoschisis</td>
                    <td>'.$delivery_birth->laparoschisis.'</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td class="left">Spina bifida</td>
                    <td>'.$delivery_birth->spina_bifida.'</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td class="left">Hydrocephalus</td>
                    <td>'.$delivery_birth->hydrocephalus.'</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td class="left">Deliveries 15 years and under</td>
                    <td>'.$delivery_birth->delive_15.'</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td class="left">Deliveries 16 to 19 years</td>
                    <td>'.$delivery_birth->delive_19.'</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td class="left">Deliveries 20 to 24 years</td>
                    <td>'.$delivery_birth->delive_24.'</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td class="left">Deliveries 35 years and above</td>
                    <td>'.$delivery_birth->delive_35.'</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td class="left">Women who received oxytocin IM immediately after birth for active management of third stage of labor</td>
                    <td>'.$delivery_birth->received_oxytocin.'</td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td class="left">Multiple pregnancies (women who delivered twins, triplets, etc.)</td>
                    <td>'.$delivery_birth->multi_pregnancies.'</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td class="left">Women consulted for risk of premature delivery</td>
                    <td>'.$delivery_birth->women_cons_risk_prema.'</td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td class="left">Mother who received corticosteroid in management of risk of premature delivery</td>
                    <td>'.$delivery_birth->received_corticosteroid.'</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td class="left">Women consulted with preterm premature rupture membranes (PPROM)</td>
                    <td>'.$delivery_birth->cons_preterm_ruptu_memb.'</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td class="left">Women consulted with preterm premature rupture membranes who received prophylactic antibiotics</td>
                    <td>'.$delivery_birth->cons_preterm_ruptu_memb_prophylactic.'</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td class="left">Maternal deaths during labor, delivery and 24 hours after delivery (=subsets of all deaths in table above)</td>
                    <td>'.$delivery_birth->maternal_deaths.'</td>
                  </tr>
                  <tr>
                    <td>24</td>
                    <td class="left">Births, live</td>
                    <td>'.$delivery_birth->births_live.'</td>
                  </tr>
                  <tr>
                    <td>25</td>
                    <td class="left">Birth weight < 2500 gr (alive)</td>
                    <td>'.$delivery_birth->births_weight2500.'</td>
                  </tr>
                  <tr>
                    <td>26</td>
                    <td class="left">Premature newborns (alive) 22-37 weeks</td>
                    <td>'.$delivery_birth->premature_newborn.'</td>
                  </tr>
                  <tr>
                    <td>27</td>
                    <td class="left">Birth weight < 2 kg (alive newborns) all</td>
                    <td>'.$delivery_birth->births_weight2000.'</td>
                  </tr>
                  <tr>
                    <td>28</td>
                    <td class="left">Still births macerated (≥ 28 weeks or ≥ 1000 gr)</td>
                    <td>'.$delivery_birth->births_macerated.'</td>
                  </tr>
                  <tr>
                    <td>29</td>
                    <td class="left">Still births fresh (≥ 28 weeks or ≥ 1000 gr) all</td>
                    <td>'.$delivery_birth->births_fresh_1000.'</td>
                  </tr>
                  <tr>
                    <td>30</td>
                    <td class="left">Still births freash (≥ 2500 gr)</td>
                    <td>'.$delivery_birth->births_fresh_2500.'</td>
                  </tr>
                  <tr>
                    <td>31</td>
                    <td class="left">Deaths at birth of live born bebies (within 30 minutes)</td>
                    <td>'.$delivery_birth->deaths_birth.'</td>
                  </tr>
                  <tr>
                    <td>32</td>
                    <td class="left">Deaths at birth of live born babies with ≥ 2,5 kg (within 30 minutes)</td>
                    <td>'.$delivery_birth->deaths_birth_2500.'</td>
                  </tr>
                  <tr>
                    <td>33</td>
                    <td class="left">Newborns breastfed within 1 hour of delivery</td>
                    <td>'.$delivery_birth->newborns_breastfed.'</td>
                  </tr>
                  <tr>
                    <td>34</td>
                    <td class="left">Newborns who were placed skin to skin after birth for at least one hour after birth</td>
                    <td>'.$delivery_birth->newborns_skintoskin.'</td>
                  </tr>
                  <tr>
                    <td>35</td>
                    <td class="left">Live newborns who didn\'t cry/breath at birth</td>
                    <td>'.$delivery_birth->newborns_no_cry.'</td>
                  </tr>
                  <tr>
                    <td>36</td>
                    <td class="left">Live newborns who didn\'t cry at birth and for whom newborn resuscitation was performed using ambu bag</td>
                    <td>'.$delivery_birth->newborns_no_cry_ambubag.'</td>
                  </tr>
                  <tr>
                    <td>37</td>
                    <td class="left">Live newborns who didn\'t cry/breth at birth and were resuscitated successfully (cry/breath within 5 min APGAR > 5 at 5 min)</td>
                    <td>'.$delivery_birth->newborns_no_cry_success.'</td>
                  </tr>
                  <tr>
                    <td>38</td>
                    <td class="left">Women suspected to develop obstetrical fistula (during labor)</td>
                    <td>'.$delivery_birth->fistula.'</td>
                  </tr>
                  <tr>
                    <td>39</td>
                    <td class="left">Women suspected to develop obstetrical fistula received conservative treatment (foley catheter)</td>
                    <td>'.$delivery_birth->fistula_treatment.'</td>
                  </tr>
                  <tr>
                    <td>40</td>
                    <td class="left">Newborns with complications at birth referred to higher level for emergency care</td>
                    <td>'.$delivery_birth->complications_higher_level.'</td>
                  </tr>
                  <tr>
                    <td>41</td>
                    <td class="left">Women placed under observation for at least 24 hours before discharge</td>
                    <td>'.$delivery_birth->observation_24.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">XVI] Deliveries and births at health facility</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $postnatal_care = $this->research_model->postnatal_care($date);

        if ($postnatal_care) {
            $output .= '
              <h3 class="center">XVII] Postnatal care</h3>
              <table id="A17" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Mother<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Newborn<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">PNC1 visits within 24 hours of birth</td>
                    <td>'.$postnatal_care->pnc1_m.'</td>
                    <td>'.$postnatal_care->pnc1_nb.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Mothers screened for anemia during PNC1 visit</td>
                    <td>'.$postnatal_care->anemia_pnc1_m.'</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Mothers received iron/folic acid during PNC1 visit</td>
                    <td>'.$postnatal_care->iron_pnc1_m.'</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Mothers screened by MUAC for malnutrition during PNC1 visit</td>
                    <td>'.$postnatal_care->muac_pnc1_m.'</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Mothers malnourished (MUAC < 21 cm) during PNC1 visit</td>
                    <td>'.$postnatal_care->malnourished_pnc1_m.'</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">PNC2 visits at 3rd day after birth</td>
                    <td>'.$postnatal_care->pnc2_m.'</td>
                    <td>'.$postnatal_care->pnc2_nb.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">PNC3 visits between 7th and 14th day after birth</td>
                    <td>'.$postnatal_care->pnc3_m.'</td>
                    <td>'.$postnatal_care->pnc3_nb.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">Screened for nemia during PNC3 visit</td>
                    <td>'.$postnatal_care->anemia_pnc3_m.'</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Anemia (Hb < 9.5 gr/dl) detected during PNC visits (PNC1 and PNC3)</td>
                    <td>'.$postnatal_care->anemia_pnc_m.'</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td class="left">Complications/denger signs detected during any PNC visit</td>
                    <td>'.$postnatal_care->complications_m.'</td>
                    <td>'.$postnatal_care->complications_nb.'</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td class="left">Referrals done for complcations ar any visit</td>
                    <td>'.$postnatal_care->referrals_m.'</td>
                    <td>'.$postnatal_care->referrals_nb.'</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td class="left">Post-partum family planning (PPFP) within 6 weeks after delivery</td>
                    <td>'.$postnatal_care->ppfp_m.'</td>
                    <td class="grey"></td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">XVII] Postnatal care</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $kangaroo_mother_care = $this->research_model->kangaroo_mother_care($date);

        if ($kangaroo_mother_care) {
            $output .= '
              <h3 class="center">XVIII] Kangaroo mother care</h3>
              <table id="A18" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Low birth weight < 2000 grams babies admitted in KMC</td>
                    <td>'.$kangaroo_mother_care->low_birth.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Newborns discharged from KMC unit</td>
                    <td>'.$kangaroo_mother_care->newborns.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">KMC deaths among KMC admissions</td>
                    <td>'.$kangaroo_mother_care->kmc_deaths.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">KMC standars follow up visit after discharge within 2 weeks</td>
                    <td>'.$kangaroo_mother_care->kmc_standard.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">XVIII] Kangaroo mother care</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($neonatal) {
            $output.='
          <br>
          <h3 class="center">XIX] Neonatal causes of hospitalization and deaths</h3>
          <div class="row">
            <table id="A19" class="center">
              <thead>
                <tr>
                  <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="4">Admitted for hospitalization<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="4">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th colspan="2">Days < 7<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Days 8 to 28<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Days < 7<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Days 8 to 28<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>M</th>
                  <th>F</th>
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
                  <td class="center">1</td>
                  <td class="left">Asphyxia</td>
                  <td>'.$neonatal->asphyxia_ad7m.'</td>
                  <td>'.$neonatal->asphyxia_ad7f.'</td>
                  <td>'.$neonatal->asphyxia_ad8f.'</td>
                  <td>'.$neonatal->asphyxia_ad8m.'</td>
                  <td>'.$neonatal->asphyxia_d7m.'</td>
                  <td>'.$neonatal->asphyxia_d7f.'</td>
                  <td>'.$neonatal->asphyxia_d8m.'</td>
                  <td>'.$neonatal->asphyxia_d8f.'</td>
                </tr>
                <tr>
                  <td class="center">2</td>
                  <td class="left">Prematurity (22 to 37 weeks)</td>
                  <td>'.$neonatal->prematurity_ad7m.'</td>
                  <td>'.$neonatal->prematurity_ad7f.'</td>
                  <td>'.$neonatal->prematurity_ad8m.'</td>
                  <td>'.$neonatal->prematurity_ad8f.'</td>
                  <td>'.$neonatal->prematurity_d7m.'</td>
                  <td>'.$neonatal->prematurity_d7f.'</td>
                  <td>'.$neonatal->prematurity_d8m.'</td>
                  <td>'.$neonatal->prematurity_d8f.'</td>
                </tr>
                <tr>
                  <td class="center">3</td>
                  <td class="left">Congenital malformations</td>
                  <td>'.$neonatal->congenital_ad7m.'</td>
                  <td>'.$neonatal->congenital_ad7f.'</td>
                  <td>'.$neonatal->congenital_ad8m.'</td>
                  <td>'.$neonatal->congenital_ad8f.'</td>
                  <td>'.$neonatal->congenital_d7m.'</td>
                  <td>'.$neonatal->congenital_d7f.'</td>
                  <td>'.$neonatal->congenital_d8m.'</td>
                  <td>'.$neonatal->congenital_d8f.'</td>
                </tr>
                <tr>
                  <td class="center">4</td>
                  <td class="left">Pneumonia</td>
                  <td>'.$neonatal->pneumonia_ad7m.'</td>
                  <td>'.$neonatal->pneumonia_ad7f.'</td>
                  <td>'.$neonatal->pneumonia_ad8m.'</td>
                  <td>'.$neonatal->pneumonia_ad8f.'</td>
                  <td>'.$neonatal->pneumonia_d7m.'</td>
                  <td>'.$neonatal->pneumonia_d7f.'</td>
                  <td>'.$neonatal->pneumonia_d8m.'</td>
                  <td>'.$neonatal->pneumonia_d8f.'</td>
                </tr>
                <tr>
                  <td class="center">5</td>
                  <td class="left">Meningitis</td>
                  <td>'.$neonatal->meningitis_ad7m.'</td>
                  <td>'.$neonatal->meningitis_ad7f.'</td>
                  <td>'.$neonatal->meningitis_ad8m.'</td>
                  <td>'.$neonatal->meningitis_ad8f.'</td>
                  <td>'.$neonatal->meningitis_d7m.'</td>
                  <td>'.$neonatal->meningitis_d7f.'</td>
                  <td>'.$neonatal->meningitis_d8m.'</td>
                  <td>'.$neonatal->meningitis_d8f.'</td>
                </tr>
                <tr>
                  <td class="center">6</td>
                  <td class="left">Skin infections</td>
                  <td>'.$neonatal->skin_ad7m.'</td>
                  <td>'.$neonatal->skin_ad7f.'</td>
                  <td>'.$neonatal->skin_ad8m.'</td>
                  <td>'.$neonatal->skin_ad8f.'</td>
                  <td>'.$neonatal->skin_d7m.'</td>
                  <td>'.$neonatal->skin_d7f.'</td>
                  <td>'.$neonatal->skin_d8m.'</td>
                  <td>'.$neonatal->skin_d8f.'</td>
                </tr>
                <tr>
                  <td class="center">7</td>
                  <td class="left">Sepsis suspected</td>
                  <td>'.$neonatal->sepsis_ad7m.'</td>
                  <td>'.$neonatal->sepsis_ad7f.'</td>
                  <td>'.$neonatal->sepsis_ad8m.'</td>
                  <td>'.$neonatal->sepsis_ad8f.'</td>
                  <td>'.$neonatal->sepsis_d7m.'</td>
                  <td>'.$neonatal->sepsis_d7f.'</td>
                  <td>'.$neonatal->sepsis_d8m.'</td>
                  <td>'.$neonatal->sepsis_d8f.'</td>
                </tr>
                <tr>
                  <td class="center">8</td>
                  <td class="left">Tetanus Neonatal</td>
                  <td>'.$neonatal->tetanus_ad7m.'</td>
                  <td>'.$neonatal->tetanus_ad7f.'</td>
                  <td>'.$neonatal->tetanus_ad8m.'</td>
                  <td>'.$neonatal->tetanus_ad8f.'</td>
                  <td>'.$neonatal->tetanus_d7m.'</td>
                  <td>'.$neonatal->tetanus_d7f.'</td>
                  <td>'.$neonatal->tetanus_d8m.'</td>
                  <td>'.$neonatal->tetanus_d8f.'</td>
                </tr>
                <tr>
                  <td class="center">9</td>
                  <td class="left">All other neonatal infections</td>
                  <td>'.$neonatal->others_neonatal_ad7m.'</td>
                  <td>'.$neonatal->others_neonatal_ad7f.'</td>
                  <td>'.$neonatal->others_neonatal_ad8m.'</td>
                  <td>'.$neonatal->others_neonatal_ad8f.'</td>
                  <td>'.$neonatal->others_neonatal_d7m.'</td>
                  <td>'.$neonatal->others_neonatal_d7f.'</td>
                  <td>'.$neonatal->others_neonatal_d8m.'</td>
                  <td>'.$neonatal->others_neonatal_d8f.'</td>
                </tr>
                <tr>
                  <td class="center">10</td>
                  <td class="left">All other causes of neonatal mobidity (infections excluded)</td>
                  <td>'.$neonatal->others_causes_ad7m.'</td>
                  <td>'.$neonatal->others_causes_ad7f.'</td>
                  <td>'.$neonatal->others_causes_ad8m.'</td>
                  <td>'.$neonatal->others_causes_ad8f.'</td>
                  <td>'.$neonatal->others_causes_d7m.'</td>
                  <td>'.$neonatal->others_causes_d7f.'</td>
                  <td>'.$neonatal->others_causes_d8m.'</td>
                  <td>'.$neonatal->others_causes_d8f.'</td>
                </tr>
                <tr>
                  <td class="center">11</td>
                  <td class="left">Total neonates born in this facility</td>
                  <td>'.$neonatal->total_born_in_ad7m.'</td>
                  <td>'.$neonatal->total_born_in_ad7f.'</td>
                  <td>'.$neonatal->total_born_in_ad8m.'</td>
                  <td>'.$neonatal->total_born_in_ad8f.'</td>
                  <td>'.$neonatal->total_born_in_d7m.'</td>
                  <td>'.$neonatal->total_born_in_d7f.'</td>
                  <td>'.$neonatal->total_born_in_d8m.'</td>
                  <td>'.$neonatal->total_born_in_d8f.'</td>
                </tr>
                <tr>
                  <td class="center">12</td>
                  <td class="left">Total neonates born outside this health facility</td>
                  <td>'.$neonatal->total_born_out_ad7m.'</td>
                  <td>'.$neonatal->total_born_out_ad7f.'</td>
                  <td>'.$neonatal->total_born_out_ad8m.'</td>
                  <td>'.$neonatal->total_born_out_ad8f.'</td>
                  <td>'.$neonatal->total_born_out_d7m.'</td>
                  <td>'.$neonatal->total_born_out_d7f.'</td>
                  <td>'.$neonatal->total_born_out_d8m.'</td>
                  <td>'.$neonatal->total_born_out_d8f.'</td>
                </tr>
              </tbody>
            </table>
          </div>
          <br>
          <table id="B19" class="center">
            <thead>
              <tr>
                <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td class="left">Total newborn admitted in hypothermia status (< 36.5° C)</td>
                <td>'.$neonatal->hypothermia.'</td>
              </tr>
              <tr>
                <td>2</td>
                <td class="left">Total number of newborn at risk follow up required</td>
                <td>'.$neonatal->risk_follow_up.'</td>
              </tr>
              <tr>
                <td>3</td>
                <td class="left">Total number of newborn at risk returned for at least one follow up visit after discharge</td>
                <td>'.$neonatal->one_follow_up.'</td>
              </tr>
              <tr>
                <td>4</td>
                <td class="left">Total newborn deaths within 24 hours</td>
                <td>'.$neonatal->deaths_24.'</td>
              </tr>
            </tbody>
          </table>';
        } else {
            $output .= '
              <h3 class="center">XIX] Neonatal causes of hospitalization and deaths</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $nutrition=$this->research_model->nutrition($date);

        if ($nutrition) {
            $output.='
          <br>
          <h3 class="center">XX] Nutrition screening (all services)</h3>
          <div class="row">
            <table id="A20" class="center">
              <thead>
                <tr>
                  <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Days < 6<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Weeks 1 to 8<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Months 2 to 59<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age 5 to 14<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age > 15<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="center">1</td>
                  <td class="left">Screened for malnutrition</td>
                  <td>'.$nutrition->screened_6.'</td>
                  <td>'.$nutrition->screened_7.'</td>
                  <td>'.$nutrition->screened_2.'</td>
                  <td>'.$nutrition->screened_5.'</td>
                  <td>'.$nutrition->screened_15.'</td>
                </tr>
                <tr>
                  <td class="center">2</td>
                  <td class="left">Malnourished total</td>
                  <td>'.$nutrition->malnourished_6.'</td>
                  <td>'.$nutrition->malnourished_7.'</td>
                  <td>'.$nutrition->malnourished_2.'</td>
                  <td>'.$nutrition->malnourished_5.'</td>
                  <td>'.$nutrition->malnourished_15.'</td>
                </tr>
                <tr>
                  <td class="center">2.1</td>
                  <td class="left">Malnutrition acute severe</td>
                  <td>'.$nutrition->acute_sev_6.'</td>
                  <td>'.$nutrition->acute_sev_7.'</td>
                  <td>'.$nutrition->acute_sev_2.'</td>
                  <td>'.$nutrition->acute_sev_5.'</td>
                  <td>'.$nutrition->acute_sev_15.'</td>
                </tr>
                <tr>
                  <td class="center">2.2</td>
                  <td class="left">Malnutrition acute moderate</td>
                  <td>'.$nutrition->acute_mod_6.'</td>
                  <td>'.$nutrition->acute_mod_7.'</td>
                  <td>'.$nutrition->acute_mod_2.'</td>
                  <td>'.$nutrition->acute_mod_5.'</td>
                  <td>'.$nutrition->acute_mod_15.'</td>
                </tr>
                <tr>
                  <td class="center">2.3</td>
                  <td class="left">Underweight severe</td>
                  <td>'.$nutrition->under_sev_6.'</td>
                  <td>'.$nutrition->under_sev_7.'</td>
                  <td>'.$nutrition->under_sev_2.'</td>
                  <td>'.$nutrition->under_sev_5.'</td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td class="center">2.4</td>
                  <td class="left">Underweight moderate</td>
                  <td>'.$nutrition->under_mod_6.'</td>
                  <td>'.$nutrition->under_mod_7.'</td>
                  <td>'.$nutrition->under_mod_2.'</td>
                  <td>'.$nutrition->under_mod_5.'</td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td class="center">2.5</td>
                  <td class="left">Malnutrition chronic severe (stunting)</td>
                  <td>'.$nutrition->chronic_sev_6.'</td>
                  <td>'.$nutrition->chronic_sev_7.'</td>
                  <td>'.$nutrition->chronic_sev_2.'</td>
                  <td>'.$nutrition->chronic_sev_5.'</td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td class="center">2.6</td>
                  <td class="left">Malnutrition chronic moderate (stunting)</td>
                  <td>'.$nutrition->chronic_mod_6.'</td>
                  <td>'.$nutrition->chronic_mod_7.'</td>
                  <td>'.$nutrition->chronic_mod_2.'</td>
                  <td>'.$nutrition->chronic_mod_5.'</td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td class="center">3</td>
                  <td class="left">Referred to outpatient malnutrition program</td>
                  <td>'.$nutrition->outpatient_6.'</td>
                  <td>'.$nutrition->outpatient_7.'</td>
                  <td>'.$nutrition->outpatient_2.'</td>
                  <td>'.$nutrition->outpatient_5.'</td>
                  <td>'.$nutrition->outpatient_15.'</td>
                </tr>
                <tr>
                  <td class="center">4</td>
                  <td class="left">Referred to inpatient malnutrition program (hospital)</td>
                  <td>'.$nutrition->inpatient_6.'</td>
                  <td>'.$nutrition->inpatient_7.'</td>
                  <td>'.$nutrition->inpatient_2.'</td>
                  <td>'.$nutrition->inpatient_5.'</td>
                  <td>'.$nutrition->inpatient_15.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XX] Nutrition screening (all services)</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($malnourished) {
            $output.='
          <br>
          <h3 class="center">XXI] Inpatient rehabilitation of malnourished</h4>
          <div class="row">
            <table id="A21" class="center">
              <thead>
                <tr>
                  <th rowspan="3">N°</th>
                  <th rowspan="3">Designation</th>
                  <th colspan="4">Acutely malnourished</th>
                  <th rowspan="3">Pregnant women</th>
                  <th rowspan="3">Lactating women</th>
                </tr>
                <tr>
                  <th colspan="2">Moderate<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Severe<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age > 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age > 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="left">Present beginning of month</td>
                  <td>'.$malnourished->present_start_mod4.'</td>
                  <td>'.$malnourished->present_start_mod5.'</td>
                  <td>'.$malnourished->present_start_sev4.'</td>
                  <td>'.$malnourished->present_start_sev5.'</td>
                  <td>'.$malnourished->present_start_pw.'</td>
                  <td>'.$malnourished->present_start_lw.'</td>
                </tr>
                <tr>
                  <td>2.1</td>
                  <td class="left">Hospitalized - New cases</td>
                  <td>'.$malnourished->nc_mod4.'</td>
                  <td>'.$malnourished->nc_mod5.'</td>
                  <td>'.$malnourished->nc_sev4.'</td>
                  <td>'.$malnourished->nc_sev5.'</td>
                  <td>'.$malnourished->nc_pw.'</td>
                  <td>'.$malnourished->nc_lw.'</td>
                </tr>
                <tr>
                <td>2.2</td>
                  <td class="left">Hospitalized - Relapsed cases</td>
                  <td>'.$malnourished->relapsed_mod4.'</td>
                  <td>'.$malnourished->relapsed_mod5.'</td>
                  <td>'.$malnourished->relapsed_sev4.'</td>
                  <td>'.$malnourished->relapsed_sev5.'</td>
                  <td>'.$malnourished->relapsed_pw.'</td>
                  <td>'.$malnourished->relapsed_lw.'</td>
                </tr>
                <tr>
                  <td>3.1</td>
                  <td class="left">Discharges - Cured</td>
                  <td>'.$malnourished->cured_mod4.'</td>
                  <td>'.$malnourished->cured_mod5.'</td>
                  <td>'.$malnourished->cured_sev4.'</td>
                  <td>'.$malnourished->cured_sev5.'</td>
                  <td>'.$malnourished->cured_pw.'</td>
                  <td>'.$malnourished->cured_lw.'</td>
                </tr>
                <tr>
                  <td>3.2</td>
                  <td class="left">Discharges - Referred</td>
                  <td>'.$malnourished->referred_mod4.'</td>
                  <td>'.$malnourished->referred_mod5.'</td>
                  <td>'.$malnourished->referred_sev4.'</td>
                  <td>'.$malnourished->referred_sev5.'</td>
                  <td>'.$malnourished->referred_pw.'</td>
                  <td>'.$malnourished->referred_lw.'</td>
                </tr>
                <tr>
                  <td>3.3</td>
                  <td class="left">Discharges - Abandoned</td>
                  <td>'.$malnourished->abandoned_mod4.'</td>
                  <td>'.$malnourished->abandoned_mod5.'</td>
                  <td>'.$malnourished->abandoned_sev4.'</td>
                  <td>'.$malnourished->abandoned_sev5.'</td>
                  <td>'.$malnourished->abandoned_pw.'</td>
                  <td>'.$malnourished->abandoned_lw.'</td>
                </tr>
                <tr>
                  <td>3.4</td>
                  <td class="left">Discharges - Died</td>
                  <td>'.$malnourished->died_mod4.'</td>
                  <td>'.$malnourished->died_mod5.'</td>
                  <td>'.$malnourished->died_sev4.'</td>
                  <td>'.$malnourished->died_sev5.'</td>
                  <td>'.$malnourished->died_pw.'</td>
                  <td>'.$malnourished->died_lw.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Present at end of month</td>
                  <td>'.$malnourished->present_end_mod4.'</td>
                  <td>'.$malnourished->present_end_mod5.'</td>
                  <td>'.$malnourished->present_end_sev4.'</td>
                  <td>'.$malnourished->present_end_sev5.'</td>
                  <td>'.$malnourished->present_end_pw.'</td>
                  <td>'.$malnourished->present_end_lw.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XXI] Inpatient rehabilitation of malnourished</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($family_planning) {
            $output .= '
              <h3 class="center">XXII] Family planning</h3>
              <h4>A) Methods</h4>
              <table id="A22" class="center">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>New acceptors in the program</th>
                    <th>PPFP uptake (Before discharge)</th>
                    <th>New users of FP method</th>
                    <th>Stopped FP method</th>
                    <th>Active users at end of month</th>
                    <th>FP users referred to CHWs</th>
                    <th>Quantity distributed</th>
                    <th>Stock at end of the month</th>
                    <th>Days of stock-out</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Oral contraceptives, progestative</td>
                    <td>'.$family_planning->oral_contra_proges_accep.'</td>
                    <td>'.$family_planning->oral_contra_proges_ppfp.'</td>
                    <td>'.$family_planning->oral_contra_proges_users.'</td>
                    <td>'.$family_planning->oral_contra_proges_stop.'</td>
                    <td>'.$family_planning->oral_contra_proges_active.'</td>
                    <td>'.$family_planning->oral_contra_proges_refer.'</td>
                    <td>'.$family_planning->oral_contra_proges_quant.'</td>
                    <td>'.$family_planning->oral_contra_proges_stock.'</td>
                    <td>'.$family_planning->oral_contra_proges_day.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Oral contraceptives, combined</td>
                    <td>'.$family_planning->oral_contra_comb_accep.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->oral_contra_comb_users.'</td>
                    <td>'.$family_planning->oral_contra_comb_stop.'</td>
                    <td>'.$family_planning->oral_contra_comb_active.'</td>
                    <td>'.$family_planning->oral_contra_comb_refer.'</td>
                    <td>'.$family_planning->oral_contra_comb_quant.'</td>
                    <td>'.$family_planning->oral_contra_comb_stock.'</td>
                    <td>'.$family_planning->oral_contra_comb_day.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Injectables (depo-provera)</td>
                    <td>'.$family_planning->inject_depo_accep.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->inject_depo_users.'</td>
                    <td>'.$family_planning->inject_depo_stop.'</td>
                    <td>'.$family_planning->inject_depo_active.'</td>
                    <td>'.$family_planning->inject_depo_refer.'</td>
                    <td>'.$family_planning->inject_depo_quant.'</td>
                    <td>'.$family_planning->inject_depo_stock.'</td>
                    <td>'.$family_planning->inject_depo_day.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Injectables (norristerat)</td>
                    <td>'.$family_planning->inject_nor_accep.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->inject_nor_users.'</td>
                    <td>'.$family_planning->inject_nor_stop.'</td>
                    <td>'.$family_planning->inject_nor_active.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->inject_nor_quant.'</td>
                    <td>'.$family_planning->inject_nor_stock.'</td>
                    <td>'.$family_planning->inject_nor_day.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Implants NXT</td>
                    <td>'.$family_planning->implants_nxt_accep.'</td>
                    <td>'.$family_planning->implants_nxt_ppfp.'</td>
                    <td>'.$family_planning->implants_nxt_users.'</td>
                    <td>'.$family_planning->implants_nxt_stop.'</td>
                    <td>'.$family_planning->implants_nxt_active.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->implants_nxt_quant.'</td>
                    <td>'.$family_planning->implants_nxt_stock.'</td>
                    <td>'.$family_planning->implants_nxt_day.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Implants jadelle</td>
                    <td>'.$family_planning->implants_jad_accep.'</td>
                    <td>'.$family_planning->implants_jad_ppfp.'</td>
                    <td>'.$family_planning->implants_jad_users.'</td>
                    <td>'.$family_planning->implants_jad_stop.'</td>
                    <td>'.$family_planning->implants_jad_active.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->implants_jad_quant.'</td>
                    <td>'.$family_planning->implants_jad_stock.'</td>
                    <td>'.$family_planning->implants_jad_day.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">IUD</td>
                    <td>'.$family_planning->iud_accep.'</td>
                    <td>'.$family_planning->iud_ppfp.'</td>
                    <td>'.$family_planning->iud_users.'</td>
                    <td>'.$family_planning->iud_stop.'</td>
                    <td>'.$family_planning->iud_active.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->iud_quant.'</td>
                    <td>'.$family_planning->iud_stock.'</td>
                    <td>'.$family_planning->iud_day.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">Male condoms</td>
                    <td>'.$family_planning->m_condoms_accep.'</td>
                    <td>'.$family_planning->m_condoms_ppfp.'</td>
                    <td>'.$family_planning->m_condoms_users.'</td>
                    <td>'.$family_planning->m_condoms_stop.'</td>
                    <td>'.$family_planning->m_condoms_active.'</td>
                    <td>'.$family_planning->m_condoms_refer.'</td>
                    <td>'.$family_planning->m_condoms_quant.'</td>
                    <td>'.$family_planning->m_condoms_stock.'</td>
                    <td>'.$family_planning->m_condoms_day.'</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Female condoms</td>
                    <td>'.$family_planning->f_condoms_accep.'</td>
                    <td>'.$family_planning->f_condoms_ppfp.'</td>
                    <td>'.$family_planning->f_condoms_users.'</td>
                    <td>'.$family_planning->f_condoms_stop.'</td>
                    <td>'.$family_planning->f_condoms_active.'</td>
                    <td>'.$family_planning->f_condoms_refer.'</td>
                    <td>'.$family_planning->f_condoms_quant.'</td>
                    <td>'.$family_planning->f_condoms_stock.'</td>
                    <td>'.$family_planning->f_condoms_day.'</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td class="left">Other barrier methods</td>
                    <td>'.$family_planning->other_method_accep.'</td>
                    <td>'.$family_planning->other_method_ppfp.'</td>
                    <td>'.$family_planning->other_method_users.'</td>
                    <td>'.$family_planning->other_method_stop.'</td>
                    <td>'.$family_planning->other_method_active.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->other_method_quant.'</td>
                    <td>'.$family_planning->other_method_stock.'</td>
                    <td>'.$family_planning->other_method_day.'</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td class="left">Cycle beads</td>
                    <td>'.$family_planning->cycle_accep.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->cycle_users.'</td>
                    <td>'.$family_planning->cycle_stop.'</td>
                    <td>'.$family_planning->cycle_active.'</td>
                    <td>'.$family_planning->cycle_refer.'</td>
                    <td>'.$family_planning->cycle_quant.'</td>
                    <td>'.$family_planning->cycle_stock.'</td>
                    <td>'.$family_planning->cycle_day.'</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td class="left">Lactational amenorrhea</td>
                    <td>'.$family_planning->lam_accep.'</td>
                    <td>'.$family_planning->lam_ppfp.'</td>
                    <td>'.$family_planning->lam_users.'</td>
                    <td>'.$family_planning->lam_stop.'</td>
                    <td>'.$family_planning->lam_active.'</td>
                    <td>'.$family_planning->lam_refer.'</td>
                    <td>'.$family_planning->lam_quant.'</td>
                    <td>'.$family_planning->lam_stock.'</td>
                    <td>'.$family_planning->lam_day.'</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td class="left">Auto-observation</td>
                    <td>'.$family_planning->auto_obs_accep.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->auto_obs_users.'</td>
                    <td>'.$family_planning->auto_obs_stop.'</td>
                    <td>'.$family_planning->auto_obs_active.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td class="left">Tubal ligations</td>
                    <td>'.$family_planning->tubal_accep.'</td>
                    <td>'.$family_planning->tubal_ppfp.'</td>
                    <td>'.$family_planning->tubal_users.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->tubal_active.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td class="left">Vasectomy</td>
                    <td>'.$family_planning->vasectomy_accep.'</td>
                    <td>'.$family_planning->vasectomy_ppfp.'</td>
                    <td>'.$family_planning->vasectomy_users.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->vasectomy_active.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                </tbody>
              </table>
              <div class="row">
                <div class="col-xs-4">
                  <h4>B) New FP Users</h4>
                </div>
                <div class="col-xs-8">
                  <h4>C) Sperm Control</h4>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-xs-4">
                  <table id="B22" class="center">
                    <thead>
                      <tr>
                        <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="left">FP new acceptors to the program accompanied by partner</td>
                        <td>'.$family_planning->fp_new_acceptors.'</td>
                      </tr>
                      <tr>
                        <td class="left">New FP users referred by CHWs for modern family planning method</td>
                        <td>'.$family_planning->new_fp_users.'</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-xs-8">
                  <table id="C22" class="center">
                    <thead>
                      <tr>
                        <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Test taken<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Positive<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Negative (no spermatozoids)<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="left">Sperm control of vasectomized clients</td>
                        <td>'.$family_planning->sperm_control_test.'</td>
                        <td>'.$family_planning->sperm_control_positive.'</td>
                        <td>'.$family_planning->sperm_control_negative.'</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <br>
              <h4>D) Summary by Age</h4>
              <table id="D22" class="center">
                <thead>
                  <tr>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Age 15 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Age 20 to 24<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Age 25 to 34<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Age > 35<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="left">New acceptors in the program by age group</td>
                    <td>'.$family_planning->acceptors_prog_19.'</td>
                    <td>'.$family_planning->acceptors_prog_24.'</td>
                    <td>'.$family_planning->acceptors_prog_34.'</td>
                    <td>'.$family_planning->acceptors_prog_35.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">XXII] Family planning</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($laboratory) {
            $output .= '
              <h3 class="center">XXIII] Laboratory</h4>
              <table id="A23" class="center">
                <thead>
                  <tr>
                    <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="2">Examens<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Results</th>
                    <th>Total</th>
                  </tr>
                  <tr>
                    <th>Positives<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Negatives<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <td>'.$laboratory->exams_t.'</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Blood smears</td>
                    <td class="grey"></td>
                    <td>'.$laboratory->blood_n.'</td>
                    <td>'.$laboratory->blood_t.'</td>
                  </tr>
                  <tr>
                    <td>1.1</td>
                    <td class="left">Plasmodium</td>
                    <td>'.$laboratory->plasmodium_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>1.2</td>
                    <td class="left">Micro-filaria</td>
                    <td>'.$laboratory->micro_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>1.3</td>
                    <td class="left">Borellia</td>
                    <td>'.$laboratory->borellia_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>1.4</td>
                    <td class="left">Trypanosoma</td>
                    <td>'.$laboratory->trypa_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Rapid diagnostic tests for malaria</td>
                    <td>'.$laboratory->malaria_p.'</td>
                    <td>'.$laboratory->malaria_n.'</td>
                    <td>'.$laboratory->malaria_t.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Stools samples total</td>
                    <td class="grey"></td>
                    <td>'.$laboratory->stools_n.'</td>
                    <td>'.$laboratory->stools_t.'</td>
                  </tr>
                  <tr>
                    <td>3.1</td>
                    <td class="left pad">Entamoebahistolytica</td>
                    <td>'.$laboratory->entamo_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.2</td>
                    <td class="left pad">Entamoeba coli</td>
                    <td>'.$laboratory->coli_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.3</td>
                    <td class="left pad">Giardia</td>
                    <td>'.$laboratory->giardia_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.4</td>
                    <td class="left pad">Ascariasis</td>
                    <td>'.$laboratory->asca_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.5</td>
                    <td class="left pad">Ankylostomiasis</td>
                    <td>'.$laboratory->anky_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.6</td>
                    <td class="left pad">Schistosoma</td>
                    <td>'.$laboratory->schisto_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.7</td>
                    <td class="left pad">Trichuris</td>
                    <td>'.$laboratory->trichuris_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.8</td>
                    <td class="left pad">Taenia</td>
                    <td>'.$laboratory->taenia_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.9</td>
                    <td class="left pad">Other parasites in stools</td>
                    <td>'.$laboratory->other_stools_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Urine</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>4.1</td>
                    <td class="left pad">Sugar</td>
                    <td>'.$laboratory->sugar_p.'</td>
                    <td>'.$laboratory->sugar_n.'</td>
                    <td>'.$laboratory->sugar_t.'</td>
                  </tr>
                  <tr>
                    <td>4.2</td>
                    <td class="left pad">Albumin</td>
                    <td>'.$laboratory->albumin_p.'</td>
                    <td>'.$laboratory->albumin_n.'</td>
                    <td>'.$laboratory->albumin_t.'</td>
                  </tr>
                  <tr>
                    <td>4.3</td>
                    <td class="left pad">Pregnancy Test</td>
                    <td>'.$laboratory->pregnancy_p.'</td>
                    <td>'.$laboratory->pregnancy_n.'</td>
                    <td>'.$laboratory->pregnancy_t.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Sputum (number of patients)</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>5.1</td>
                    <td class="left pad">Diagnosis of TB by microscopy</td>
                    <td>'.$laboratory->diag_tb_p.'</td>
                    <td>'.$laboratory->diag_tb_n.'</td>
                    <td>'.$laboratory->diag_tb_t.'</td>
                  </tr>
                  <tr>
                    <td>5.2</td>
                    <td class="left pad">Control of TB positive patients</td>
                    <td>'.$laboratory->control_tb_p.'</td>
                    <td>'.$laboratory->control_tb_n.'</td>
                    <td>'.$laboratory->control_tb_t.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Bacteriology</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>6.1</td>
                    <td class="left pad">Vaginal swab fresh</td>
                    <td>'.$laboratory->vag_fresh_p.'</td>
                    <td>'.$laboratory->vag_fresh_n.'</td>
                    <td>'.$laboratory->vag_fresh_t.'</td>
                  </tr>
                  <tr>
                    <td>6.2</td>
                    <td class="left pad">Vaginal swab gram</td>
                    <td>'.$laboratory->vag_gram_p.'</td>
                    <td>'.$laboratory->vag_gram_n.'</td>
                    <td>'.$laboratory->vag_gram_t.'</td>
                  </tr>
                  <tr>
                    <td>6.3</td>
                    <td class="left pad">Vaginal swab diplococcus gram</td>
                    <td>'.$laboratory->vag_diplo_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>6.4</td>
                    <td class="left pad">Urethral swab fresh</td>
                    <td>'.$laboratory->ure_fresh_p.'</td>
                    <td>'.$laboratory->ure_fresh_n.'</td>
                    <td>'.$laboratory->ure_fresh_t.'</td>
                  </tr>
                  <tr>
                    <td>6.5</td>
                    <td class="left pad">Urethral swab gram</td>
                    <td>'.$laboratory->ure_gram_p.'</td>
                    <td>'.$laboratory->ure_gram_n.'</td>
                    <td>'.$laboratory->ure_gram_t.'</td>
                  </tr>
                  <tr>
                    <td>6.6</td>
                    <td class="left pad">Urethral swab diplococcus gram</td>
                    <td>'.$laboratory->ure_diplo_p.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Blood</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>7.01</td>
                    <td class="left pad">Hemoglobin</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->hemo_t.'</td>
                  </tr>
                  <tr>
                    <td>7.02</td>
                    <td class="left pad">RPR</td>
                    <td>'.$laboratory->rpr_p.'</td>
                    <td>'.$laboratory->rpr_n.'</td>
                    <td>'.$laboratory->rpr_t.'</td>
                  </tr>
                  <tr>
                    <td>7.03</td>
                    <td class="left pad">HIV final result</td>
                    <td>'.$laboratory->hiv_p.'</td>
                    <td>'.$laboratory->hiv_n.'</td>
                    <td>'.$laboratory->hiv_t.'</td>
                  </tr>
                  <tr>
                    <td>7.04</td>
                    <td class="left pad">ESR</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->esr_t.'</td>
                  </tr>
                  <tr>
                    <td>7.05</td>
                    <td class="left pad">Full blood count (FBC/NFS)</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->full_t.'</td>
                  </tr>
                  <tr>
                    <td>7.06</td>
                    <td class="left pad">ALAT (GPT)</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->alat_t.'</td>
                  </tr>
                  <tr>
                    <td>7.07</td>
                    <td class="left pad">Creatinine</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->crea_t.'</td>
                  </tr>
                  <tr>
                    <td>7.08</td>
                    <td class="left pad">Blood glucose</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->glucose_t.'</td>
                  </tr>
                  <tr>
                    <td>7.09</td>
                    <td class="left pad">Amylase</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->amylase_t.'</td>
                  </tr>
                  <tr>
                    <td>7.10</td>
                    <td class="left pad">CD<sub>4</sub></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->cd4_t.'</td>
                  </tr>
                  <tr>
                    <td>7.11</td>
                    <td class="left pad">Widal</td>
                    <td>'.$laboratory->widal_p.'</td>
                    <td>'.$laboratory->widal_n.'</td>
                    <td>'.$laboratory->widal_t.'</td>
                  </tr>
                  <tr>
                    <td>7.12</td>
                    <td class="left pad">Pregnancy test</td>
                    <td>'.$laboratory->blood_preg_p.'</td>
                    <td>'.$laboratory->blood_preg_n.'</td>
                    <td>'.$laboratory->blood_preg_t.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">CerebroSpinal fluid</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->cerebro_t.'</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Other lab tests</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->other_lab_t.'</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td class="left">Total tests conducted in the laboratory</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->total.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">XXIII] Laboratory</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $blood_bank_security = $this->research_model->blood_bank_security($date);

        if ($blood_bank_security) {
            $output .= '
            <h3 class="center">XXIV] Blood bank security</h3>
              <div class="row">
                <div class="col-xs-5">
                  <h4>A) Transfusions</h4>
                </div>
                <div class="col-xs-7">
                  <h4>B) Blood pack stock management</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-5">
                  <table id="A24" class="center">
                    <thead>
                      <tr>
                        <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Service<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Patients transfused<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Packs of blood<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td class="left">Internal medicine</td>
                        <td>'.$blood_bank_security->im_patient_transfused.'</td>
                        <td>'.$blood_bank_security->im_packs.'</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td class="left">Pediatrics</td>
                        <td>'.$blood_bank_security->p_patient_transfused.'</td>
                        <td>'.$blood_bank_security->p_packs.'</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td class="left">Surgery</td>
                        <td>'.$blood_bank_security->s_patient_transfused.'</td>
                        <td>'.$blood_bank_security->s_packs.'</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td class="left">Gyneco - obstetrical</td>
                        <td>'.$blood_bank_security->go_patient_transfused.'</td>
                        <td>'.$blood_bank_security->go_packs.'</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td class="left">Intensive care / Emergency</td>
                        <td>'.$blood_bank_security->ic_patient_transfused.'</td>
                        <td>'.$blood_bank_security->ic_packs.'</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td class="left">Neonatology</td>
                        <td>'.$blood_bank_security->n_patient_transfused.'</td>
                        <td>'.$blood_bank_security->n_packs.'</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="col-xs-7">
                  <table id="B24" class="center">
                    <thead>
                      <tr>
                        <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Type A<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Type B<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Type AB<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Type O<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td class="left">Blood pack received</td>
                        <td>'.$blood_bank_security->a_received.'</td>
                        <td>'.$blood_bank_security->b_received.'</td>
                        <td>'.$blood_bank_security->ab_received.'</td>
                        <td>'.$blood_bank_security->o_received.'</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td class="left">Blood pack used</td>
                        <td>'.$blood_bank_security->a_used.'</td>
                        <td>'.$blood_bank_security->b_used.'</td>
                        <td>'.$blood_bank_security->ab_used.'</td>
                        <td>'.$blood_bank_security->o_used.'</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td class="left">Blood pack destroyed or damaged</td>
                        <td>'.$blood_bank_security->a_destroyed.'</td>
                        <td>'.$blood_bank_security->b_destroyed.'</td>
                        <td>'.$blood_bank_security->ab_destroyed.'</td>
                        <td>'.$blood_bank_security->o_destroyed.'</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td class="left">Blood pack remaining in stock</td>
                        <td>'.$blood_bank_security->a_stock.'</td>
                        <td>'.$blood_bank_security->b_stock.'</td>
                        <td>'.$blood_bank_security->ab_stock.'</td>
                        <td>'.$blood_bank_security->o_stock.'</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <br>';
        } else {
            $output .= '
              <h3 class="center">XXIV] Blood bank security</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($imagery) {
            $output.='
          <br>
          <h4>XXV] Medical imagery</h4>
          <div class="row">
            <table id="A25" class="center">
              <thead>
                <tr>
                  <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th class="des">X-Ray (radiology)<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th class="des">Other<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="left">X-Ray lung</td>
                  <td>'.$imagery->lung.'</td>
                  <td>6</td>
                  <td class="left">Gastroscopy</td>
                  <td>'.$imagery->gastroscopy.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">X-Ray bones</td>
                  <td>'.$imagery->bones.'</td>
                  <td>7</td>
                  <td class="left">Ultrasound (echography)</td>
                  <td>'.$imagery->ultrasound.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">X-Ray abdomen without preparation</td>
                  <td>'.$imagery->abdomen_without.'</td>
                  <td>8</td>
                  <td class="left">ECG</td>
                  <td>'.$imagery->ecg.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">X-Ray abdomen with dye</td>
                  <td>'.$imagery->abdomen_with.'</td>
                  <td>9</td>
                  <td class="left">Other Medical Imagery</td>
                  <td>'.$imagery->other_medical_img.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">X-Ray other</td>
                  <td>'.$imagery->other_xray.'</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XXV] Medical imagery</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($stock) {
            $output.='
          <br>
          <h3 class="center">XXVI] Stock of tracer drugs</h3>
          <div class="row">
            <table id="A26" class="center">
              <thead>
                <tr>
                  <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Quantity at the beginning of the month<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Quantity received<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Quantity dispensed<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Quantity expired/damaged/lost<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Quantity at end of month<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Days of stock out<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="left">Amoxycillin syrup 125 mg/5ml</td>
                  <td>'.$stock->amoxycillin_begin.'</td>
                  <td>'.$stock->amoxycillin_received.'</td>
                  <td>'.$stock->amoxycillin_dispensed.'</td>
                  <td>'.$stock->amoxycillin_expired.'</td>
                  <td>'.$stock->amoxycillin_end.'</td>
                  <td>'.$stock->amoxycillin_stock.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Ampicillin vial 500 mg</td>
                  <td>'.$stock->ampicillin_begin.'</td>
                  <td>'.$stock->ampicillin_received.'</td>
                  <td>'.$stock->ampicillin_dispensed.'</td>
                  <td>'.$stock->ampicillin_expired.'</td>
                  <td>'.$stock->ampicillin_end.'</td>
                  <td>'.$stock->ampicillin_stock.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Doxycyclin tab 100 mg</td>
                  <td>'.$stock->doxycyclin_begin.'</td>
                  <td>'.$stock->doxycyclin_received.'</td>
                  <td>'.$stock->doxycyclin_dispensed.'</td>
                  <td>'.$stock->doxycyclin_expired.'</td>
                  <td>'.$stock->doxycyclin_end.'</td>
                  <td>'.$stock->doxycyclin_stock.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Cloxacillin tab 250 mg</td>
                  <td>'.$stock->cloxacillin_begin.'</td>
                  <td>'.$stock->cloxacillin_received.'</td>
                  <td>'.$stock->cloxacillin_dispensed.'</td>
                  <td>'.$stock->cloxacillin_expired.'</td>
                  <td>'.$stock->cloxacillin_end.'</td>
                  <td>'.$stock->cloxacillin_stock.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">Mebendazole syrup 100 mg/5ml</td>
                  <td>'.$stock->mebendazole_begin.'</td>
                  <td>'.$stock->mebendazole_received.'</td>
                  <td>'.$stock->mebendazole_dispensed.'</td>
                  <td>'.$stock->mebendazole_expired.'</td>
                  <td>'.$stock->mebendazole_end.'</td>
                  <td>'.$stock->mebendazole_stock.'</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left">Gentamycin vial 40 mg/ml</td>
                  <td>'.$stock->gentamycin_begin.'</td>
                  <td>'.$stock->gentamycin_received.'</td>
                  <td>'.$stock->gentamycin_dispensed.'</td>
                  <td>'.$stock->gentamycin_expired.'</td>
                  <td>'.$stock->gentamycin_end.'</td>
                  <td>'.$stock->gentamycin_stock.'</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left">Metronidazole vial 500 mg/ml</td>
                  <td>'.$stock->metronidazole_vial_begin.'</td>
                  <td>'.$stock->metronidazole_vial_received.'</td>
                  <td>'.$stock->metronidazole_vial_dispensed.'</td>
                  <td>'.$stock->metronidazole_vial_expired.'</td>
                  <td>'.$stock->metronidazole_vial_end.'</td>
                  <td>'.$stock->metronidazole_vial_stock.'</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left">Metronidazole syrup 125 mg/5ml</td>
                  <td>'.$stock->metronidazole_syrup_begin.'</td>
                  <td>'.$stock->metronidazole_syrup_received.'</td>
                  <td>'.$stock->metronidazole_syrup_dispensed.'</td>
                  <td>'.$stock->metronidazole_syrup_expired.'</td>
                  <td>'.$stock->metronidazole_syrup_end.'</td>
                  <td>'.$stock->metronidazole_syrup_stock.'</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left">Paracetamol tab 500 mg</td>
                  <td>'.$stock->paracetamol_begin.'</td>
                  <td>'.$stock->paracetamol_received.'</td>
                  <td>'.$stock->paracetamol_dispensed.'</td>
                  <td>'.$stock->paracetamol_expired.'</td>
                  <td>'.$stock->paracetamol_end.'</td>
                  <td>'.$stock->paracetamol_stock.'</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td class="left">Ketamine vial 50 mg/ml</td>
                  <td>'.$stock->ketamine_begin.'</td>
                  <td>'.$stock->ketamine_received.'</td>
                  <td>'.$stock->ketamine_dispensed.'</td>
                  <td>'.$stock->ketamine_expired.'</td>
                  <td>'.$stock->ketamine_end.'</td>
                  <td>'.$stock->ketamine_stock.'</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td class="left">Ocytocin vial 5 ui</td>
                  <td>'.$stock->ocytocin_begin.'</td>
                  <td>'.$stock->ocytocin_received.'</td>
                  <td>'.$stock->ocytocin_dispensed.'</td>
                  <td>'.$stock->ocytocin_expired.'</td>
                  <td>'.$stock->ocytocin_end.'</td>
                  <td>'.$stock->ocytocin_stock.'</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td class="left">Lidocaine vial 2%</td>
                  <td>'.$stock->lidocaine_begin.'</td>
                  <td>'.$stock->lidocaine_received.'</td>
                  <td>'.$stock->lidocaine_dispensed.'</td>
                  <td>'.$stock->lidocaine_expired.'</td>
                  <td>'.$stock->lidocaine_end.'</td>
                  <td>'.$stock->lidocaine_stock.'</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td class="left">Propanolol tab 40 mg</td>
                  <td>'.$stock->propanolol_begin.'</td>
                  <td>'.$stock->propanolol_received.'</td>
                  <td>'.$stock->propanolol_dispensed.'</td>
                  <td>'.$stock->propanolol_expired.'</td>
                  <td>'.$stock->propanolol_end.'</td>
                  <td>'.$stock->propanolol_stock.'</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td class="left">Tetracycline ointment</td>
                  <td>'.$stock->tetracycline_begin.'</td>
                  <td>'.$stock->tetracycline_received.'</td>
                  <td>'.$stock->tetracycline_dispensed.'</td>
                  <td>'.$stock->tetracycline_expired.'</td>
                  <td>'.$stock->tetracycline_end.'</td>
                  <td>'.$stock->tetracycline_stock.'</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td class="left">Diazepan tab 5 mg</td>
                  <td>'.$stock->diazepan_tab_begin.'</td>
                  <td>'.$stock->diazepan_tab_received.'</td>
                  <td>'.$stock->diazepan_tab_dispensed.'</td>
                  <td>'.$stock->diazepan_tab_expired.'</td>
                  <td>'.$stock->diazepan_tab_end.'</td>
                  <td>'.$stock->diazepan_tab_stock.'</td>
                </tr>
                <tr>
                  <td>16</td>
                  <td class="left">Diazepan vial 5 mg/ml</td>
                  <td>'.$stock->diazepan_vial_begin.'</td>
                  <td>'.$stock->diazepan_vial_received.'</td>
                  <td>'.$stock->diazepan_vial_dispensed.'</td>
                  <td>'.$stock->diazepan_vial_expired.'</td>
                  <td>'.$stock->diazepan_vial_end.'</td>
                  <td>'.$stock->diazepan_vial_stock.'</td>
                </tr>
                <tr>
                  <td>17</td>
                  <td class="left">Phenobarbital tab 30 mg</td>
                  <td>'.$stock->phenobarbital_begin.'</td>
                  <td>'.$stock->phenobarbital_received.'</td>
                  <td>'.$stock->phenobarbital_dispensed.'</td>
                  <td>'.$stock->phenobarbital_expired.'</td>
                  <td>'.$stock->phenobarbital_end.'</td>
                  <td>'.$stock->phenobarbital_stock.'</td>
                </tr>
                <tr>
                  <td>18</td>
                  <td class="left">Valproic acid tab 300 mg</td>
                  <td>'.$stock->valproic_begin.'</td>
                  <td>'.$stock->valproic_received.'</td>
                  <td>'.$stock->valproic_dispensed.'</td>
                  <td>'.$stock->valproic_expired.'</td>
                  <td>'.$stock->valproic_end.'</td>
                  <td>'.$stock->valproic_stock.'</td>
                </tr>
                <tr>
                  <td>19</td>
                  <td class="left">Salbutamol tab 4 mg</td>
                  <td>'.$stock->salbutamol_begin.'</td>
                  <td>'.$stock->salbutamol_received.'</td>
                  <td>'.$stock->salbutamol_dispensed.'</td>
                  <td>'.$stock->salbutamol_expired.'</td>
                  <td>'.$stock->salbutamol_end.'</td>
                  <td>'.$stock->salbutamol_stock.'</td>
                </tr>
                <tr>
                  <td>20</td>
                  <td class="left">Iron sulfate + Folic acid tab 200 mh/0.25mg</td>
                  <td>'.$stock->iron_folic_begin.'</td>
                  <td>'.$stock->iron_folic_received.'</td>
                  <td>'.$stock->iron_folic_dispensed.'</td>
                  <td>'.$stock->iron_folic_expired.'</td>
                  <td>'.$stock->iron_folic_end.'</td>
                  <td>'.$stock->iron_folic_stock.'</td>
                </tr>
                <tr>
                  <td>21</td>
                  <td class="left">Oral rehydration salts packet</td>
                  <td>'.$stock->rehydra_salt_begin.'</td>
                  <td>'.$stock->rehydra_salt_received.'</td>
                  <td>'.$stock->rehydra_salt_dispensed.'</td>
                  <td>'.$stock->rehydra_salt_expired.'</td>
                  <td>'.$stock->rehydra_salt_end.'</td>
                  <td>'.$stock->rehydra_salt_stock.'</td>
                </tr>
                <tr>
                  <td>22</td>
                  <td class="left">Quinine vial 300 mg/ml</td>
                  <td>'.$stock->quinine_vial_begin.'</td>
                  <td>'.$stock->quinine_vial_received.'</td>
                  <td>'.$stock->quinine_vial_dispensed.'</td>
                  <td>'.$stock->quinine_vial_expired.'</td>
                  <td>'.$stock->quinine_vial_end.'</td>
                  <td>'.$stock->quinine_vial_stock.'</td>
                </tr>
                <tr>
                  <td>23</td>
                  <td class="left">Quinine tab 300 mg</td>
                  <td>'.$stock->quinine_tab_begin.'</td>
                  <td>'.$stock->quinine_tab_received.'</td>
                  <td>'.$stock->quinine_tab_dispensed.'</td>
                  <td>'.$stock->quinine_tab_expired.'</td>
                  <td>'.$stock->quinine_tab_end.'</td>
                  <td>'.$stock->quinine_tab_stock.'</td>
                </tr>
                <tr>
                  <td>24</td>
                  <td class="left">Coartem atemether + Lumefanthrine tab 20 mg + 120 mg (6x1)</td>
                  <td>'.$stock->coartem_artemether_1_begin.'</td>
                  <td>'.$stock->coartem_artemether_1_received.'</td>
                  <td>'.$stock->coartem_artemether_1_dispensed.'</td>
                  <td>'.$stock->coartem_artemether_1_expired.'</td>
                  <td>'.$stock->coartem_artemether_1_end.'</td>
                  <td>'.$stock->coartem_artemether_1_stock.'</td>
                </tr>
                <tr>
                  <td>25</td>
                  <td class="left">Coartem atemether + Lumefanthrine tab 20 mg + 120 mg (6x2)</td>
                  <td>'.$stock->coartem_artemether_2_begin.'</td>
                  <td>'.$stock->coartem_artemether_2_received.'</td>
                  <td>'.$stock->coartem_artemether_2_dispensed.'</td>
                  <td>'.$stock->coartem_artemether_2_expired.'</td>
                  <td>'.$stock->coartem_artemether_2_end.'</td>
                  <td>'.$stock->coartem_artemether_2_stock.'</td>
                </tr>
                <tr>
                  <td>26</td>
                  <td class="left">Coartem atemether + Lumefanthrine tab 20 mg + 120 mg (6x3)</td>
                  <td>'.$stock->coartem_artemether_3_begin.'</td>
                  <td>'.$stock->coartem_artemether_3_received.'</td>
                  <td>'.$stock->coartem_artemether_3_dispensed.'</td>
                  <td>'.$stock->coartem_artemether_3_expired.'</td>
                  <td>'.$stock->coartem_artemether_3_end.'</td>
                  <td>'.$stock->coartem_artemether_3_stock.'</td>
                </tr>
                <tr>
                  <td>27</td>
                  <td class="left">Coartem atemether + Lumefanthrine tab 20 mg + 120 mg (6x4)</td>
                  <td>'.$stock->coartem_artemether_4_begin.'</td>
                  <td>'.$stock->coartem_artemether_4_received.'</td>
                  <td>'.$stock->coartem_artemether_4_dispensed.'</td>
                  <td>'.$stock->coartem_artemether_4_expired.'</td>
                  <td>'.$stock->coartem_artemether_4_end.'</td>
                  <td>'.$stock->coartem_artemether_4_stock.'</td>
                </tr>
                <tr>
                  <td>28</td>
                  <td class="left">artemeter vial 20 mg/ml</td>
                  <td>'.$stock->artemeter_vial_begin.'</td>
                  <td>'.$stock->artemeter_vial_received.'</td>
                  <td>'.$stock->artemeter_vial_dispensed.'</td>
                  <td>'.$stock->artemeter_vial_expired.'</td>
                  <td>'.$stock->artemeter_vial_end.'</td>
                  <td>'.$stock->artemeter_vial_stock.'</td>
                </tr>
                <tr>
                  <td>29</td>
                  <td class="left">Artesunate vial 60 mg/ml</td>
                  <td>'.$stock->artesunate_vial_begin.'</td>
                  <td>'.$stock->artesunate_vial_received.'</td>
                  <td>'.$stock->artesunate_vial_dispensed.'</td>
                  <td>'.$stock->artesunate_vial_expired.'</td>
                  <td>'.$stock->artesunate_vial_end.'</td>
                  <td>'.$stock->artesunate_vial_stock.'</td>
                </tr>
                <tr>
                  <td>30</td>
                  <td class="left">Ciprofloxacine tab 250 mg</td>
                  <td>'.$stock->cipro_begin.'</td>
                  <td>'.$stock->cipro_received.'</td>
                  <td>'.$stock->cipro_dispensed.'</td>
                  <td>'.$stock->cipro_expired.'</td>
                  <td>'.$stock->cipro_end.'</td>
                  <td>'.$stock->cipro_stock.'</td>
                </tr>
                <tr>
                  <td>31</td>
                  <td class="left">Cotrimoxazol tab 400 mg + 80 mg</td>
                  <td>'.$stock->cotri_begin.'</td>
                  <td>'.$stock->cotri_received.'</td>
                  <td>'.$stock->cotri_dispensed.'</td>
                  <td>'.$stock->cotri_expired.'</td>
                  <td>'.$stock->cotri_end.'</td>
                  <td>'.$stock->cotri_stock.'</td>
                </tr>
                <tr>
                  <td>32</td>
                  <td class="left">Milk therapeutic F100</td>
                  <td>'.$stock->F100_begin.'</td>
                  <td>'.$stock->F100_received.'</td>
                  <td>'.$stock->F100_dispensed.'</td>
                  <td>'.$stock->F100_expired.'</td>
                  <td>'.$stock->F100_end.'</td>
                  <td>'.$stock->F100_stock.'</td>
                </tr>
                <tr>
                  <td>33</td>
                  <td class="left">Milk therapeutic F75</td>
                  <td>'.$stock->F75_begin.'</td>
                  <td>'.$stock->F75_received.'</td>
                  <td>'.$stock->F75_dispensed.'</td>
                  <td>'.$stock->F75_expired.'</td>
                  <td>'.$stock->F75_end.'</td>
                  <td>'.$stock->F75_stock.'</td>
                </tr>
                <tr>
                  <td>34</td>
                  <td class="left">Plumpy nut, bag 920 mg</td>
                  <td>'.$stock->plumpy_begin.'</td>
                  <td>'.$stock->plumpy_received.'</td>
                  <td>'.$stock->plumpy_dispensed.'</td>
                  <td>'.$stock->plumpy_expired.'</td>
                  <td>'.$stock->plumpy_end.'</td>
                  <td>'.$stock->plumpy_stock.'</td>
                </tr>
                <tr>
                  <td>35</td>
                  <td class="left">Corn soya blended (CSB)</td>
                  <td>'.$stock->csb_begin.'</td>
                  <td>'.$stock->csb_received.'</td>
                  <td>'.$stock->csb_dispensed.'</td>
                  <td>'.$stock->csb_expired.'</td>
                  <td>'.$stock->csb_end.'</td>
                  <td>'.$stock->csb_stock.'</td>
                </tr>
                <tr>
                  <td>36</td>
                  <td class="left">Morphine 10 inj mg/ml</td>
                  <td>'.$stock->morphine10_begin.'</td>
                  <td>'.$stock->morphine10_received.'</td>
                  <td>'.$stock->morphine10_dispensed.'</td>
                  <td>'.$stock->morphine10_expired.'</td>
                  <td>'.$stock->morphine10_end.'</td>
                  <td>'.$stock->morphine10_stock.'</td>
                </tr>
                <tr>
                  <td>37</td>
                  <td class="left">Morphine 30 tab mg</td>
                  <td>'.$stock->morphine30_begin.'</td>
                  <td>'.$stock->morphine30_received.'</td>
                  <td>'.$stock->morphine30_dispensed.'</td>
                  <td>'.$stock->morphine30_expired.'</td>
                  <td>'.$stock->morphine30_end.'</td>
                  <td>'.$stock->morphine30_stock.'</td>
                </tr>
                <tr>
                  <td>38</td>
                  <td class="left">Morphine hcl tab 10 mg</td>
                  <td>'.$stock->morphine_hcl_begin.'</td>
                  <td>'.$stock->morphine_hcl_received.'</td>
                  <td>'.$stock->morphine_hcl_dispensed.'</td>
                  <td>'.$stock->morphine_hcl_expired.'</td>
                  <td>'.$stock->morphine_hcl_end.'</td>
                  <td>'.$stock->morphine_hcl_stock.'</td>
                </tr>
                <tr>
                  <td>39</td>
                  <td class="left">Captopril tab 10 mg</td>
                  <td>'.$stock->captopril_begin.'</td>
                  <td>'.$stock->captopril_received.'</td>
                  <td>'.$stock->captopril_dispensed.'</td>
                  <td>'.$stock->captopril_expired.'</td>
                  <td>'.$stock->captopril_end.'</td>
                  <td>'.$stock->captopril_stock.'</td>
                </tr>
                <tr>
                  <td>40</td>
                  <td class="left">Atenolol tab 25 mg</td>
                  <td>'.$stock->atenolol_begin.'</td>
                  <td>'.$stock->atenolol_received.'</td>
                  <td>'.$stock->atenolol_dispensed.'</td>
                  <td>'.$stock->atenolol_expired.'</td>
                  <td>'.$stock->atenolol_end.'</td>
                  <td>'.$stock->atenolol_stock.'</td>
                </tr>
                <tr>
                  <td>41</td>
                  <td class="left">Hydrochlorothiazide solid oral 25 mg</td>
                  <td>'.$stock->hydro_begin.'</td>
                  <td>'.$stock->hydro_received.'</td>
                  <td>'.$stock->hydro_dispensed.'</td>
                  <td>'.$stock->hydro_expired.'</td>
                  <td>'.$stock->hydro_end.'</td>
                  <td>'.$stock->hydro_stock.'</td>
                </tr>
                <tr>
                  <td>42</td>
                  <td class="left">Nifedipine tab (immediate-release) 10 mg</td>
                  <td>'.$stock->nifedipine_begin.'</td>
                  <td>'.$stock->nifedipine_received.'</td>
                  <td>'.$stock->nifedipine_dispensed.'</td>
                  <td>'.$stock->nifedipine_expired.'</td>
                  <td>'.$stock->nifedipine_end.'</td>
                  <td>'.$stock->nifedipine_stock.'</td>
                </tr>
                <tr>
                  <td>43</td>
                  <td class="left">Methyldopal tab 250 mg</td>
                  <td>'.$stock->methyldopal_begin.'</td>
                  <td>'.$stock->methyldopal_received.'</td>
                  <td>'.$stock->methyldopal_dispensed.'</td>
                  <td>'.$stock->methyldopal_expired.'</td>
                  <td>'.$stock->methyldopal_end.'</td>
                  <td>'.$stock->methyldopal_stock.'</td>
                </tr>
                <tr>
                  <td>44</td>
                  <td class="left">Warfarin tab 1 mg</td>
                  <td>'.$stock->warfarin_begin.'</td>
                  <td>'.$stock->warfarin_received.'</td>
                  <td>'.$stock->warfarin_dispensed.'</td>
                  <td>'.$stock->warfarin_expired.'</td>
                  <td>'.$stock->warfarin_end.'</td>
                  <td>'.$stock->warfarin_stock.'</td>
                </tr>
                <tr>
                  <td>45</td>
                  <td class="left">Insulin inj rapid 100 ui/ml</td>
                  <td>'.$stock->insulin_r_begin.'</td>
                  <td>'.$stock->insulin_r_received.'</td>
                  <td>'.$stock->insulin_r_dispensed.'</td>
                  <td>'.$stock->insulin_r_expired.'</td>
                  <td>'.$stock->insulin_r_end.'</td>
                  <td>'.$stock->insulin_r_stock.'</td>
                </tr>
                <tr>
                  <td>46</td>
                  <td class="left">Insulin inj lente 100 ui/ml</td>
                  <td>'.$stock->insulin_l_begin.'</td>
                  <td>'.$stock->insulin_l_received.'</td>
                  <td>'.$stock->insulin_l_dispensed.'</td>
                  <td>'.$stock->insulin_l_expired.'</td>
                  <td>'.$stock->insulin_l_end.'</td>
                  <td>'.$stock->insulin_l_stock.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XXVI] Stock of tracer drugs</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($staff) {
            $output.='
          <br>
          <h3 class="center">XXVII] Staffing information</h3>
          <h4>A) Staff information</h4>
          <div class="row">
            <table id="A27" class="center">
              <thead>
                <tr>
                  <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th class="cat">Category<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age < 35</th>
                  <th colspan="2">Age 35 to 59</th>
                  <th colspan="2">Age > 60</th>
                </tr>
                <tr>
                  <td class="grey"></td>
                  <td class="grey"></td>
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
                  <td>1</td>
                  <td class="left">Doctors (specialist)</td>
                  <td>'.$staff->doc_spe_34m.'</td>
                  <td>'.$staff->doc_spe_34f.'</td>
                  <td>'.$staff->doc_spe_35m.'</td>
                  <td>'.$staff->doc_spe_35f.'</td>
                  <td>'.$staff->doc_spe_60m.'</td>
                  <td>'.$staff->doc_spe_60f.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Doctors (generalist)</td>
                  <td>'.$staff->doc_ge_34m.'</td>
                  <td>'.$staff->doc_ge_34f.'</td>
                  <td>'.$staff->doc_ge_35m.'</td>
                  <td>'.$staff->doc_ge_35f.'</td>
                  <td>'.$staff->doc_ge_60m.'</td>
                  <td>'.$staff->doc_ge_60f.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Nurses</td>
                  <td>'.$staff->nurses_34m.'</td>
                  <td>'.$staff->nurses_34f.'</td>
                  <td>'.$staff->nurses_35m.'</td>
                  <td>'.$staff->nurses_35f.'</td>
                  <td>'.$staff->nurses_60m.'</td>
                  <td>'.$staff->nurses_60f.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Midwives</td>
                  <td>'.$staff->midwives_34m.'</td>
                  <td>'.$staff->midwives_34f.'</td>
                  <td>'.$staff->midwives_35m.'</td>
                  <td>'.$staff->midwives_35f.'</td>
                  <td>'.$staff->midwives_60m.'</td>
                  <td>'.$staff->midwives_60f.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">Lab technicians</td>
                  <td>'.$staff->lab_tech_34m.'</td>
                  <td>'.$staff->lab_tech_34f.'</td>
                  <td>'.$staff->lab_tech_35m.'</td>
                  <td>'.$staff->lab_tech_35f.'</td>
                  <td>'.$staff->lab_tech_60m.'</td>
                  <td>'.$staff->lab_tech_60f.'</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left">Dental Assistant</td>
                  <td>'.$staff->dental_34m.'</td>
                  <td>'.$staff->dental_34f.'</td>
                  <td>'.$staff->dental_35m.'</td>
                  <td>'.$staff->dental_35f.'</td>
                  <td>'.$staff->dental_60m.'</td>
                  <td>'.$staff->dental_60f.'</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left">Other allied health professionals</td>
                  <td>'.$staff->other_34m.'</td>
                  <td>'.$staff->other_34f.'</td>
                  <td>'.$staff->other_35m.'</td>
                  <td>'.$staff->other_35f.'</td>
                  <td>'.$staff->other_60m.'</td>
                  <td>'.$staff->other_60f.'</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left">Pharmacists</td>
                  <td>'.$staff->pharma_34m.'</td>
                  <td>'.$staff->pharma_34f.'</td>
                  <td>'.$staff->pharma_35m.'</td>
                  <td>'.$staff->pharma_35f.'</td>
                  <td>'.$staff->pharma_60m.'</td>
                  <td>'.$staff->pharma_60f.'</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left">Administrative and support personnel</td>
                  <td>'.$staff->admin_34m.'</td>
                  <td>'.$staff->admin_34f.'</td>
                  <td>'.$staff->admin_35m.'</td>
                  <td>'.$staff->admin_35f.'</td>
                  <td>'.$staff->admin_60m.'</td>
                  <td>'.$staff->admin_60f.'</td>
                </tr>
              </tbody>
            </table>
            <div class="row">
              <div class="col-xs-7">
                <h4>B) Status of staff</h4>
              </div>
              <div class="col-xs-5">
                <h4>C) Reasons of leaving</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <table id="B27" class="center">
                  <thead>
                    <tr>
                      <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th class="cat">Category<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th>Newly Recruited this month<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th>Left this month<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th>Vacant position<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td class="left">Doctors (specialist)</td>
                      <td>'.$staff->doc_spe_new.'</td>
                      <td>'.$staff->doc_spe_left.'</td>
                      <td>'.$staff->doc_spe_vacant.'</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td class="left">Doctors (generalist)</td>
                      <td>'.$staff->doc_ge_new.'</td>
                      <td>'.$staff->doc_ge_left.'</td>
                      <td>'.$staff->doc_ge_vacant.'</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td class="left">Nurses</td>
                      <td>'.$staff->nurses_new.'</td>
                      <td>'.$staff->nurses_left.'</td>
                      <td>'.$staff->nurses_vacant.'</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td class="left">Midwives</td>
                      <td>'.$staff->midwives_new.'</td>
                      <td>'.$staff->midwives_left.'</td>
                      <td>'.$staff->midwives_vacant.'</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td class="left">Lab technicians</td>
                      <td>'.$staff->lab_tech_new.'</td>
                      <td>'.$staff->lab_tech_left.'</td>
                      <td>'.$staff->lab_tech_vacant.'</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td class="left">Dental assistant</td>
                      <td>'.$staff->dental_new.'</td>
                      <td>'.$staff->dental_left.'</td>
                      <td>'.$staff->dental_vacant.'</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td class="left">Other allied health professionals</td>
                      <td>'.$staff->other_new.'</td>
                      <td>'.$staff->other_left.'</td>
                      <td>'.$staff->other_vacant.'</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td class="left">Pharmacists</td>
                      <td>'.$staff->pharma_new.'</td>
                      <td>'.$staff->pharma_left.'</td>
                      <td>'.$staff->pharma_vacant.'</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-xs-5">
                <table id="C27" class="center">
                  <thead>
                    <tr>
                      <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th>Reason<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td class="left">Death</td>
                      <td>'.$staff->left_death.'</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td class="left">Retirement</td>
                      <td>'.$staff->left_retirement.'</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td class="left">Career development</td>
                      <td>'.$staff->left_career.'</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td class="left">Better remuneration</td>
                      <td>'.$staff->left_remuneration.'</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td class="left">Other attrition reasons</td>
                      <td>'.$staff->left_other.'</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XXVII] Staffing information</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $output .= '
          <br>';


        echo $output;
    }

    public function fetch2()
    {
        $this->load->model('research_model');
        $output = '';
        $date1 = $this->input->post('date1');
        $date2 = $this->input->post('date2');
        $injury=$this->research_model->injury2($date1, $date2);
        $GBV=$this->research_model->GBV2($date1, $date2);
        $physiotherapy = $this->research_model->physiotherapy2($date1, $date2);
        $imagery=$this->research_model->imagery2($date1, $date2);
        $neonatal=$this->research_model->neonatal2($date1, $date2);
        $delivery_birth = $this->research_model->delivery_birth2($date1, $date2);
        $malnourished=$this->research_model->malnourished2($date1, $date2);
        $stock=$this->research_model->stock2($date1, $date2);
        $laboratory = $this->research_model->laboratory2($date1, $date2);
        $staff=$this->research_model->staff2($date1, $date2);
        $family_planning = $this->research_model->family_planning2($date1, $date2);
        $complete_ncds = $this->research_model->complete_ncds2($date1, $date2);
        $complete_stoma = $this->research_model->complete_stoma2($date1, $date2);
        $complete_ophta = $this->research_model->complete_ophta2($date1, $date2);
        $complete_mental = $this->research_model->complete_mental2($date1, $date2);
        $complete_emer = $this->research_model->complete_emer2($date1, $date2);
        $complete_im = $this->research_model->complete_im2($date1, $date2);
        $complete_pedia = $this->research_model->complete_pedia2($date1, $date2);
        $complete_surge = $this->research_model->complete_surge2($date1, $date2);
        $complete_ic = $this->research_model->complete_ic2($date1, $date2);
        $complete_ms = $this->research_model->complete_ms2($date1, $date2);
        $complete_or = $this->research_model->complete_or2($date1, $date2);

        $output.='
        <br>
        <div class="row">
          <div class="col-xs-6">
            <table id="Cpl1" class="center">
              <thead>
                <tr>
                  <th>Services</th>
                  <th>Completed</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>OPD</td>';
        if ($injury->road_nc19m_total != null) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>NCDS</td>';
        if ($complete_ncds) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Stomatology</td>';
        if ($complete_stoma) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Ophtalmology</td>';
        if ($complete_ophta) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Mental health</td>';
        if ($complete_mental) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>GBV</td>';
        if ($GBV->sexual_violence_5m_total != null) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Kinesitherapy</td>';
        if ($physiotherapy->physical_therapy_total != null) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Pregnant woman</td>';
        if ($imagery->lung_total != null) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Emergency</td>';
        if ($complete_emer) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Internal medicine</td>';
        if ($complete_im) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Pediatrics</td>';
        if ($complete_pedia) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }

        $output.='
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-xs-6">
            <table id="Cpl2" class="center">
              <thead>
                <tr>
                  <th>Services</th>
                  <th>Completed</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Surgery</td>';
        if ($complete_surge) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Neonatology</td>';
        if ($neonatal->asphyxia_ad7m_total != null) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Gynecology obstetric</td>';
        if ($delivery_birth->delive_total_total != null) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Nutrition rehabilitation</td>';
        if ($malnourished->present_start_mod4_total != null) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Pharmacy</td>';
        if ($stock->amoxycillin_begin_total != null) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Intensive care</td>';
        if ($complete_ic) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Minor surgery</td>';
        if ($complete_ms) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Operating room</td>';
        if ($complete_or) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Laboratory</td>';
        if ($laboratory->exams_t_total != null) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Human ressources</td>';
        if ($staff->doc_spe_34m_total != null) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
                <tr>
                  <td>Family planning</td>';
        if ($family_planning->oral_contra_proges_accep_total != null) {
            $output.='<td>Yes</td>';
        } else {
            $output.='<td>No</td>';
        }
        $output.='
                </tr>
              </tbody>
            </table>
          </div>
        </div>';


        $consultation_abcde=$this->research_model->consultation_abcde2($date1, $date2);

        if ($consultation_abcde->nc5m_total != null) {
            $output.='
            <h3 class="center">II] Outpatient consultations</h3>
            <div class="row">
              <div class="col-xs-8">
                <h4>A) Outpatient morbidity summary table</h4>
              </div>
              <div class="col-xs-4">
                <h4>B) Health insurance status of new cases</h4>
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
                    <td>'.$consultation_abcde->nc5m_total.'</td>
                    <td>'.$consultation_abcde->nc5f_total.'</td>
                    <td>'.$consultation_abcde->nc19m_total.'</td>
                    <td>'.$consultation_abcde->nc19f_total.'</td>
                    <td>'.$consultation_abcde->nc20m_total.'</td>
                    <td>'.$consultation_abcde->nc20f_total.'</td>
                    </tr>
                    <tr>
                      <td class="left">Old cases</td>
                      <td>'.$consultation_abcde->oc5m_total.'</td>
                      <td>'.$consultation_abcde->oc5f_total.'</td>
                      <td>'.$consultation_abcde->oc19m_total.'</td>
                      <td>'.$consultation_abcde->oc19f_total.'</td>
                      <td>'.$consultation_abcde->oc20m_total.'</td>
                      <td>'.$consultation_abcde->oc20f_total.'</td>
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
                      <td class="left">Insured (mutuelle or other insurance members)</td>
                      <td>'.$consultation_abcde->insured_total.'</td>
                    </tr>
                    <tr>
                      <td class="left">Non-paying new cases</td>
                      <td>'.$consultation_abcde->nc_non_paying_total.'</td>
                    </tr>
                    <tr>
                      <td class="left">Number of indigent new cases</td>
                      <td>'.$consultation_abcde->nc_indigent_total.'</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-6">
                <h4>C) Referrals</h4>
              </div>
              <div class="col-xs-6">
                <h4>D) Origin of outpatients</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <table id="C2" class="center">
                  <thead>
                    <tr>
                      <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="left">Referred to other levels</td>
                      <td>'.$consultation_abcde->other_levels_total.'</td>
                    </tr>
                    <tr>
                      <td class="left">Counter referrals received</td>
                      <td>'.$consultation_abcde->counter_received_total.'</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-xs-6">
                <table id="D2" class="center">
                  <thead>
                    <tr>
                      <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="left">New cases from the catchment area (zone)</td>
                      <td>'.$consultation_abcde->nc_catch_total.'</td>
                    </tr>
                    <tr>
                      <td class="left">New cases (hors zone)</td>
                      <td>'.$consultation_abcde->nc_total.'</td>
                    </tr>
                    <tr>
                      <td class="left">International patients (hors pays)</td>
                      <td>'.$consultation_abcde->international_total.'</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <br>
            <div class="row">
              <h4>E) New cases of priority health problems in general OPD</h4>
            </div>
            <div class="row">
              <table id="E2" class="center">
                <thead>
                  <tr>
                    <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Diarrhea with dehydration</td>
                    <td>'.$consultation_abcde->diar_w_dehy_5m_total.'</td>
                    <td>'.$consultation_abcde->diar_w_dehy_5f_total.'</td>
                    <td>'.$consultation_abcde->diar_w_dehy_19m_total.'</td>
                    <td>'.$consultation_abcde->diar_w_dehy_19f_total.'</td>
                    <td>'.$consultation_abcde->diar_w_dehy_20m_total.'</td>
                    <td>'.$consultation_abcde->diar_w_dehy_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Diarrhea no dehydration</td>
                    <td>'.$consultation_abcde->diar_no_dehy_5m_total.'</td>
                    <td>'.$consultation_abcde->diar_no_dehy_5f_total.'</td>
                    <td>'.$consultation_abcde->diar_no_dehy_19m_total.'</td>
                    <td>'.$consultation_abcde->diar_no_dehy_19f_total.'</td>
                    <td>'.$consultation_abcde->diar_no_dehy_20m_total.'</td>
                    <td>'.$consultation_abcde->diar_no_dehy_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Bloody diarrhea</td>
                    <td>'.$consultation_abcde->blood_diar_5m_total.'</td>
                    <td>'.$consultation_abcde->blood_diar_5f_total.'</td>
                    <td>'.$consultation_abcde->blood_diar_19m_total.'</td>
                    <td>'.$consultation_abcde->blood_diar_19f_total.'</td>
                    <td>'.$consultation_abcde->blood_diar_20m_total.'</td>
                    <td>'.$consultation_abcde->blood_diar_20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">4</td>
                    <td class="left">Food poisoning</td>
                    <td>'.$consultation_abcde->food_poison_5m_total.'</td>
                    <td>'.$consultation_abcde->food_poison_5f_total.'</td>
                    <td>'.$consultation_abcde->food_poison_19m_total.'</td>
                    <td>'.$consultation_abcde->food_poison_19f_total.'</td>
                    <td>'.$consultation_abcde->food_poison_20m_total.'</td>
                    <td>'.$consultation_abcde->food_poison_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Ear infections</td>
                    <td>'.$consultation_abcde->ear_infect_5m_total.'</td>
                    <td>'.$consultation_abcde->ear_infect_5f_total.'</td>
                    <td>'.$consultation_abcde->ear_infect_19m_total.'</td>
                    <td>'.$consultation_abcde->ear_infect_19f_total.'</td>
                    <td>'.$consultation_abcde->ear_infect_20m_total.'</td>
                    <td>'.$consultation_abcde->ear_infect_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Schistosomiasis</td>
                    <td>'.$consultation_abcde->schisto_5m_total.'</td>
                    <td>'.$consultation_abcde->schisto_5f_total.'</td>
                    <td>'.$consultation_abcde->schisto_19m_total.'</td>
                    <td>'.$consultation_abcde->schisto_19f_total.'</td>
                    <td>'.$consultation_abcde->schisto_20m_total.'</td>
                    <td>'.$consultation_abcde->schisto_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Ascarislumbricoides</td>
                    <td>'.$consultation_abcde->ascaris_5m_total.'</td>
                    <td>'.$consultation_abcde->ascaris_5f_total.'</td>
                    <td>'.$consultation_abcde->ascaris_19m_total.'</td>
                    <td>'.$consultation_abcde->ascaris_19f_total.'</td>
                    <td>'.$consultation_abcde->ascaris_20m_total.'</td>
                    <td>'.$consultation_abcde->ascaris_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">Trichuristrichiura</td>
                    <td>'.$consultation_abcde->trichu_5m_total.'</td>
                    <td>'.$consultation_abcde->trichu_5f_total.'</td>
                    <td>'.$consultation_abcde->trichu_19m_total.'</td>
                    <td>'.$consultation_abcde->trichu_19f_total.'</td>
                    <td>'.$consultation_abcde->trichu_20m_total.'</td>
                    <td>'.$consultation_abcde->trichu_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Hookworm</td>
                    <td>'.$consultation_abcde->hook_5m_total.'</td>
                    <td>'.$consultation_abcde->hook_5f_total.'</td>
                    <td>'.$consultation_abcde->hook_19m_total.'</td>
                    <td>'.$consultation_abcde->hook_19f_total.'</td>
                    <td>'.$consultation_abcde->hook_20m_total.'</td>
                    <td>'.$consultation_abcde->hook_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td class="left">Entamoeba</td>
                    <td>'.$consultation_abcde->entam_5m_total.'</td>
                    <td>'.$consultation_abcde->entam_5f_total.'</td>
                    <td>'.$consultation_abcde->entam_19m_total.'</td>
                    <td>'.$consultation_abcde->entam_19f_total.'</td>
                    <td>'.$consultation_abcde->entam_20m_total.'</td>
                    <td>'.$consultation_abcde->entam_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td class="left">Giardia</td>
                    <td>'.$consultation_abcde->giardia_5m_total.'</td>
                    <td>'.$consultation_abcde->giardia_5f_total.'</td>
                    <td>'.$consultation_abcde->giardia_19m_total.'</td>
                    <td>'.$consultation_abcde->giardia_19f_total.'</td>
                    <td>'.$consultation_abcde->giardia_20m_total.'</td>
                    <td>'.$consultation_abcde->giardia_20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">12</td>
                    <td class="left">Taenia</td>
                    <td>'.$consultation_abcde->taenia_5m_total.'</td>
                    <td>'.$consultation_abcde->taenia_5f_total.'</td>
                    <td>'.$consultation_abcde->taenia_19m_total.'</td>
                    <td>'.$consultation_abcde->taenia_19f_total.'</td>
                    <td>'.$consultation_abcde->taenia_20m_total.'</td>
                    <td>'.$consultation_abcde->taenia_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td class="left">Malaria simple (not pregnant)</td>
                    <td>'.$consultation_abcde->malaria_s_5m_total.'</td>
                    <td>'.$consultation_abcde->malaria_s_5f_total.'</td>
                    <td>'.$consultation_abcde->malaria_s_19m_total.'</td>
                    <td>'.$consultation_abcde->malaria_s_19f_total.'</td>
                    <td>'.$consultation_abcde->malaria_s_20m_total.'</td>
                    <td>'.$consultation_abcde->malaria_s_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td class="left">Malaria with minor digestive symptoms (not pregnant)</td>
                    <td>'.$consultation_abcde->malaria_dig_5m_total.'</td>
                    <td>'.$consultation_abcde->malaria_dig_5f_total.'</td>
                    <td>'.$consultation_abcde->malaria_dig_19m_total.'</td>
                    <td>'.$consultation_abcde->malaria_dig_19f_total.'</td>
                    <td>'.$consultation_abcde->malaria_dig_20m_total.'</td>
                    <td>'.$consultation_abcde->malaria_dig_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td class="left">Herpes simpplex infections</td>
                    <td>'.$consultation_abcde->herpes_s_5m_total.'</td>
                    <td>'.$consultation_abcde->herpes_s_5f_total.'</td>
                    <td>'.$consultation_abcde->herpes_s_19m_total.'</td>
                    <td>'.$consultation_abcde->herpes_s_19f_total.'</td>
                    <td>'.$consultation_abcde->herpes_s_20m_total.'</td>
                    <td>'.$consultation_abcde->herpes_s_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td class="left">Meningitis suspected</td>
                    <td>'.$consultation_abcde->mening_5m_total.'</td>
                    <td>'.$consultation_abcde->mening_5f_total.'</td>
                    <td>'.$consultation_abcde->mening_19m_total.'</td>
                    <td>'.$consultation_abcde->mening_19f_total.'</td>
                    <td>'.$consultation_abcde->mening_20m_total.'</td>
                    <td>'.$consultation_abcde->mening_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td class="left">Pneumonia simple</td>
                    <td>'.$consultation_abcde->pneumonia_simp_5m_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_simp_5f_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_simp_19m_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_simp_19f_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_simp_20m_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_simp_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td class="left">Pneumonia severe</td>
                    <td>'.$consultation_abcde->pneumonia_sev_5m_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_sev_5f_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_sev_19m_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_sev_19f_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_sev_20m_total.'</td>
                    <td>'.$consultation_abcde->pneumonia_sev_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td class="left">Influenza/Syndrome gripal</td>
                    <td>'.$consultation_abcde->grip_5m_total.'</td>
                    <td>'.$consultation_abcde->grip_5f_total.'</td>
                    <td>'.$consultation_abcde->grip_19m_total.'</td>
                    <td>'.$consultation_abcde->grip_19f_total.'</td>
                    <td>'.$consultation_abcde->grip_20m_total.'</td>
                    <td>'.$consultation_abcde->grip_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td class="left">Respiratory infections acute (ARI) other</td>
                    <td>'.$consultation_abcde->ari_5m_total.'</td>
                    <td>'.$consultation_abcde->ari_5f_total.'</td>
                    <td>'.$consultation_abcde->ari_19m_total.'</td>
                    <td>'.$consultation_abcde->ari_19f_total.'</td>
                    <td>'.$consultation_abcde->ari_20m_total.'</td>
                    <td>'.$consultation_abcde->ari_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td class="left">Gastritis and duodenitis</td>
                    <td>'.$consultation_abcde->gast_duoden_5m_total.'</td>
                    <td>'.$consultation_abcde->gast_duoden_5f_total.'</td>
                    <td>'.$consultation_abcde->gast_duoden_19m_total.'</td>
                    <td>'.$consultation_abcde->gast_duoden_19f_total.'</td>
                    <td>'.$consultation_abcde->gast_duoden_20m_total.'</td>
                    <td>'.$consultation_abcde->gast_duoden_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td class="left">Abscesses</td>
                    <td>'.$consultation_abcde->absces_5m_total.'</td>
                    <td>'.$consultation_abcde->absces_5f_total.'</td>
                    <td>'.$consultation_abcde->absces_19m_total.'</td>
                    <td>'.$consultation_abcde->absces_19f_total.'</td>
                    <td>'.$consultation_abcde->absces_20m_total.'</td>
                    <td>'.$consultation_abcde->absces_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td class="left">Ulcers of skin</td>
                    <td>'.$consultation_abcde->ulcers_5m_total.'</td>
                    <td>'.$consultation_abcde->ulcers_5f_total.'</td>
                    <td>'.$consultation_abcde->ulcers_19m_total.'</td>
                    <td>'.$consultation_abcde->ulcers_19f_total.'</td>
                    <td>'.$consultation_abcde->ulcers_20m_total.'</td>
                    <td>'.$consultation_abcde->ulcers_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>24</td>
                    <td class="left">Skin infection scabies</td>
                    <td>'.$consultation_abcde->scabies_5m_total.'</td>
                    <td>'.$consultation_abcde->scabies_5f_total.'</td>
                    <td>'.$consultation_abcde->scabies_19m_total.'</td>
                    <td>'.$consultation_abcde->scabies_19f_total.'</td>
                    <td>'.$consultation_abcde->scabies_20m_total.'</td>
                    <td>'.$consultation_abcde->scabies_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>25</td>
                    <td class="left">Skin infection fungal (mycoses) superficial</td>
                    <td>'.$consultation_abcde->mycoses_5m_total.'</td>
                    <td>'.$consultation_abcde->mycoses_5f_total.'</td>
                    <td>'.$consultation_abcde->mycoses_19m_total.'</td>
                    <td>'.$consultation_abcde->mycoses_19f_total.'</td>
                    <td>'.$consultation_abcde->mycoses_20m_total.'</td>
                    <td>'.$consultation_abcde->mycoses_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>26</td>
                    <td class="left">Skin infections other</td>
                    <td>'.$consultation_abcde->si_others_5m_total.'</td>
                    <td>'.$consultation_abcde->si_others_5f_total.'</td>
                    <td>'.$consultation_abcde->si_others_19m_total.'</td>
                    <td>'.$consultation_abcde->si_others_19f_total.'</td>
                    <td>'.$consultation_abcde->si_others_20m_total.'</td>
                    <td>'.$consultation_abcde->si_others_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>27</td>
                    <td class="left">Urinary tract infections</td>
                    <td>'.$consultation_abcde->urinary_ti_5m_total.'</td>
                    <td>'.$consultation_abcde->urinary_ti_5f_total.'</td>
                    <td>'.$consultation_abcde->urinary_ti_19m_total.'</td>
                    <td>'.$consultation_abcde->urinary_ti_19f_total.'</td>
                    <td>'.$consultation_abcde->urinary_ti_20m_total.'</td>
                    <td>'.$consultation_abcde->urinary_ti_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>28</td>
                    <td class="left">Anemia (confirmed)</td>
                    <td>'.$consultation_abcde->anemia_5m_total.'</td>
                    <td>'.$consultation_abcde->anemia_5f_total.'</td>
                    <td>'.$consultation_abcde->anemia_19m_total.'</td>
                    <td>'.$consultation_abcde->anemia_19f_total.'</td>
                    <td>'.$consultation_abcde->anemia_20m_total.'</td>
                    <td>'.$consultation_abcde->anemia_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>29</td>
                    <td class="left">Measles suspected</td>
                    <td>'.$consultation_abcde->measles_susp_5m_total.'</td>
                    <td>'.$consultation_abcde->measles_susp_5f_total.'</td>
                    <td>'.$consultation_abcde->measles_susp_19m_total.'</td>
                    <td>'.$consultation_abcde->measles_susp_19f_total.'</td>
                    <td>'.$consultation_abcde->measles_susp_20m_total.'</td>
                    <td>'.$consultation_abcde->measles_susp_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>30</td>
                    <td class="left">Measles confirmed cases</td>
                    <td>'.$consultation_abcde->measles_conf_5m_total.'</td>
                    <td>'.$consultation_abcde->measles_conf_5f_total.'</td>
                    <td>'.$consultation_abcde->measles_conf_19m_total.'</td>
                    <td>'.$consultation_abcde->measles_conf_19f_total.'</td>
                    <td>'.$consultation_abcde->measles_conf_20m_total.'</td>
                    <td>'.$consultation_abcde->measles_conf_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>31</td>
                    <td class="left">Rubella confirmed cases</td>
                    <td>'.$consultation_abcde->rubella_conf_5m_total.'</td>
                    <td>'.$consultation_abcde->rubella_conf_5f_total.'</td>
                    <td>'.$consultation_abcde->rubella_conf_19m_total.'</td>
                    <td>'.$consultation_abcde->rubella_conf_19f_total.'</td>
                    <td>'.$consultation_abcde->rubella_conf_20m_total.'</td>
                    <td>'.$consultation_abcde->rubella_conf_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>32</td>
                    <td class="left">Acute flaccid paralysis cases</td>
                    <td>'.$consultation_abcde->flaccid_paraly_5m_total.'</td>
                    <td>'.$consultation_abcde->flaccid_paraly_5f_total.'</td>
                    <td>'.$consultation_abcde->flaccid_paraly_19m_total.'</td>
                    <td>'.$consultation_abcde->flaccid_paraly_19f_total.'</td>
                    <td>'.$consultation_abcde->flaccid_paraly_20m_total.'</td>
                    <td>'.$consultation_abcde->flaccid_paraly_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>33</td>
                    <td class="left">Tetanus</td>
                    <td>'.$consultation_abcde->tetanus_5m_total.'</td>
                    <td>'.$consultation_abcde->tetanus_5f_total.'</td>
                    <td>'.$consultation_abcde->tetanus_19m_total.'</td>
                    <td>'.$consultation_abcde->tetanus_19f_total.'</td>
                    <td>'.$consultation_abcde->tetanus_20m_total.'</td>
                    <td>'.$consultation_abcde->tetanus_20f_total.'</td>
                  </tr>
                  <tr>
                    <td>34</td>
                    <td class="left">Viral hepatitis (A, B, Chronic & others)</td>
                    <td>'.$consultation_abcde->hepatitis_5m_total.'</td>
                    <td>'.$consultation_abcde->hepatitis_5f_total.'</td>
                    <td>'.$consultation_abcde->hepatitis_19m_total.'</td>
                    <td>'.$consultation_abcde->hepatitis_19f_total.'</td>
                    <td>'.$consultation_abcde->hepatitis_20m_total.'</td>
                    <td>'.$consultation_abcde->hepatitis_20f_total.'</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <br>';
        } else {
            $output .= '
              <h3 class="center">II] Outpatient consultations</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $consultation_fg=$this->research_model->consultation_fg2($date1, $date2);

        if ($consultation_fg->fractures_5m_total != null) {
            $output.='
          <div class="row">
            <h4>F) New cases of HIV/AIDS/STI/ and non-communicable diseases</h4>
          </div>
          <div class="row">
            <table id="F2" class="center">
              <thead>
                <tr>
                  <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="left">Fractures</td>
                  <td>'.$consultation_fg->fractures_5m_total.'</td>
                  <td>'.$consultation_fg->fractures_5f_total.'</td>
                  <td>'.$consultation_fg->fractures_19m_total.'</td>
                  <td>'.$consultation_fg->fractures_19f_total.'</td>
                  <td>'.$consultation_fg->fractures_20m_total.'</td>
                  <td>'.$consultation_fg->fractures_20f_total.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Physical traumas, other than fractures</td>
                  <td>'.$consultation_fg->phys_traumas_5m_total.'</td>
                  <td>'.$consultation_fg->phys_traumas_5f_total.'</td>
                  <td>'.$consultation_fg->phys_traumas_19m_total.'</td>
                  <td>'.$consultation_fg->phys_traumas_19f_total.'</td>
                  <td>'.$consultation_fg->phys_traumas_20m_total.'</td>
                  <td>'.$consultation_fg->phys_traumas_20f_total.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Bone and joint disorder, other than fractures</td>
                  <td>'.$consultation_fg->bone_joint_disord_5m_total.'</td>
                  <td>'.$consultation_fg->bone_joint_disord_5f_total.'</td>
                  <td>'.$consultation_fg->bone_joint_disord_19m_total.'</td>
                  <td>'.$consultation_fg->bone_joint_disord_19f_total.'</td>
                  <td>'.$consultation_fg->bone_joint_disord_20m_total.'</td>
                  <td>'.$consultation_fg->bone_joint_disord_20f_total.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Gynecological problems</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td>'.$consultation_fg->gyneco_pb_19f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$consultation_fg->gyneco_pb_20f_total.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">AIDS clinical</td>
                  <td>'.$consultation_fg->aids_5m_total.'</td>
                  <td>'.$consultation_fg->aids_5f_total.'</td>
                  <td>'.$consultation_fg->aids_19m_total.'</td>
                  <td>'.$consultation_fg->aids_19f_total.'</td>
                  <td>'.$consultation_fg->aids_20m_total.'</td>
                  <td>'.$consultation_fg->aids_20f_total.'</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left">Skin infection opportunistic</td>
                  <td>'.$consultation_fg->si_opport_5m_total.'</td>
                  <td>'.$consultation_fg->si_opport_5f_total.'</td>
                  <td>'.$consultation_fg->si_opport_19m_total.'</td>
                  <td>'.$consultation_fg->si_opport_19f_total.'</td>
                  <td>'.$consultation_fg->si_opport_20m_total.'</td>
                  <td>'.$consultation_fg->si_opport_20f_total.'</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left">Herpes zoster (zona/shingles)</td>
                  <td>'.$consultation_fg->herpes_z_5m_total.'</td>
                  <td>'.$consultation_fg->herpes_z_5f_total.'</td>
                  <td>'.$consultation_fg->herpes_z_19m_total.'</td>
                  <td>'.$consultation_fg->herpes_z_19f_total.'</td>
                  <td>'.$consultation_fg->herpes_z_20m_total.'</td>
                  <td>'.$consultation_fg->herpes_z_20f_total.'</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left">Candidiasis oral</td>
                  <td>'.$consultation_fg->cand_oral_5m_total.'</td>
                  <td>'.$consultation_fg->cand_oral_5f_total.'</td>
                  <td>'.$consultation_fg->cand_oral_19m_total.'</td>
                  <td>'.$consultation_fg->cand_oral_19f_total.'</td>
                  <td>'.$consultation_fg->cand_oral_20m_total.'</td>
                  <td>'.$consultation_fg->cand_oral_20f_total.'</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left">Fever chronic (>1 month)</td>
                  <td>'.$consultation_fg->fever_5m_total.'</td>
                  <td>'.$consultation_fg->fever_5f_total.'</td>
                  <td>'.$consultation_fg->fever_19m_total.'</td>
                  <td>'.$consultation_fg->fever_19f_total.'</td>
                  <td>'.$consultation_fg->fever_20m_total.'</td>
                  <td>'.$consultation_fg->fever_20f_total.'</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td class="left">Diarrhea chronic opportunistic infections</td>
                  <td>'.$consultation_fg->diar_chro_opp_infect_5m_total.'</td>
                  <td>'.$consultation_fg->diar_chro_opp_infect_5f_total.'</td>
                  <td>'.$consultation_fg->diar_chro_opp_infect_19m_total.'</td>
                  <td>'.$consultation_fg->diar_chro_opp_infect_19f_total.'</td>
                  <td>'.$consultation_fg->diar_chro_opp_infect_20m_total.'</td>
                  <td>'.$consultation_fg->diar_chro_opp_infect_20f_total.'</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td class="left">Needle stick-injuries (or other health worker HIV exposure)</td>
                  <td>'.$consultation_fg->needle_5m_total.'</td>
                  <td>'.$consultation_fg->needle_5f_total.'</td>
                  <td>'.$consultation_fg->needle_19m_total.'</td>
                  <td>'.$consultation_fg->needle_19f_total.'</td>
                  <td>'.$consultation_fg->needle_20m_total.'</td>
                  <td>'.$consultation_fg->needle_20f_total.'</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td class="left">Goitre</td>
                  <td>'.$consultation_fg->goitre_5m_total.'</td>
                  <td>'.$consultation_fg->goitre_5f_total.'</td>
                  <td>'.$consultation_fg->goitre_19m_total.'</td>
                  <td>'.$consultation_fg->goitre_19f_total.'</td>
                  <td>'.$consultation_fg->goitre_20m_total.'</td>
                  <td>'.$consultation_fg->goitre_20f_total.'</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td class="left">Vitamin A deficiency - Night blindness</td>
                  <td>'.$consultation_fg->va_def_5m_total.'</td>
                  <td>'.$consultation_fg->va_def_5f_total.'</td>
                  <td>'.$consultation_fg->va_def_19m_total.'</td>
                  <td>'.$consultation_fg->va_def_19f_total.'</td>
                  <td>'.$consultation_fg->va_def_20m_total.'</td>
                  <td>'.$consultation_fg->va_def_20f_total.'</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td class="left">Leprosy (MB + PB)</td>
                  <td>'.$consultation_fg->leprosy_5m_total.'</td>
                  <td>'.$consultation_fg->leprosy_5f_total.'</td>
                  <td>'.$consultation_fg->leprosy_19m_total.'</td>
                  <td>'.$consultation_fg->leprosy_19f_total.'</td>
                  <td>'.$consultation_fg->leprosy_20m_total.'</td>
                  <td>'.$consultation_fg->leprosy_20f_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>
          <br>
          <div class="row">
            <div class="col-xs-6">
              <h4>Ga) Eye diseases</h4>
            </div>
            <div class="col-xs-6">
              <h4>Gb) Oral diseases</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <table id="Ga" class="center">
                <thead>
                  <tr>
                    <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Glaucoma</td>
                    <td>'.$consultation_fg->glaucoma_19m_total.'</td>
                    <td>'.$consultation_fg->glaucoma_19f_total.'</td>
                    <td>'.$consultation_fg->glaucoma_39m_total.'</td>
                    <td>'.$consultation_fg->glaucoma_39f_total.'</td>
                    <td>'.$consultation_fg->glaucoma_40m_total.'</td>
                    <td>'.$consultation_fg->glaucoma_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Cataract</td>
                    <td>'.$consultation_fg->cataract_19m_total.'</td>
                    <td>'.$consultation_fg->cataract_19f_total.'</td>
                    <td>'.$consultation_fg->cataract_39m_total.'</td>
                    <td>'.$consultation_fg->cataract_39f_total.'</td>
                    <td>'.$consultation_fg->cataract_40m_total.'</td>
                    <td>'.$consultation_fg->cataract_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Refractive error</td>
                    <td>'.$consultation_fg->refrac_error_19m_total.'</td>
                    <td>'.$consultation_fg->refrac_error_19f_total.'</td>
                    <td>'.$consultation_fg->refrac_error_39m_total.'</td>
                    <td>'.$consultation_fg->refrac_error_39f_total.'</td>
                    <td>'.$consultation_fg->refrac_error_40m_total.'</td>
                    <td>'.$consultation_fg->refrac_error_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Diabetic retinopathy</td>
                    <td>'.$consultation_fg->diab_retino_19m_total.'</td>
                    <td>'.$consultation_fg->diab_retino_19f_total.'</td>
                    <td>'.$consultation_fg->diab_retino_39m_total.'</td>
                    <td>'.$consultation_fg->diab_retino_39f_total.'</td>
                    <td>'.$consultation_fg->diab_retino_40m_total.'</td>
                    <td>'.$consultation_fg->diab_retino_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Conjunctivitis</td>
                    <td>'.$consultation_fg->conjunctivitis_19m_total.'</td>
                    <td>'.$consultation_fg->conjunctivitis_19f_total.'</td>
                    <td>'.$consultation_fg->conjunctivitis_39m_total.'</td>
                    <td>'.$consultation_fg->conjunctivitis_39f_total.'</td>
                    <td>'.$consultation_fg->conjunctivitis_40m_total.'</td>
                    <td>'.$consultation_fg->conjunctivitis_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Pinguecula</td>
                    <td>'.$consultation_fg->pinguecula_19m_total.'</td>
                    <td>'.$consultation_fg->pinguecula_19f_total.'</td>
                    <td>'.$consultation_fg->pinguecula_39m_total.'</td>
                    <td>'.$consultation_fg->pinguecula_39f_total.'</td>
                    <td>'.$consultation_fg->pinguecula_40m_total.'</td>
                    <td>'.$consultation_fg->pinguecula_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Uveitis</td>
                    <td>'.$consultation_fg->uveitis_19m_total.'</td>
                    <td>'.$consultation_fg->uveitis_19f_total.'</td>
                    <td>'.$consultation_fg->uveitis_39m_total.'</td>
                    <td>'.$consultation_fg->uveitis_39f_total.'</td>
                    <td>'.$consultation_fg->uveitis_40m_total.'</td>
                    <td>'.$consultation_fg->uveitis_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">Eye trauma</td>
                    <td>'.$consultation_fg->eye_trauma_19m_total.'</td>
                    <td>'.$consultation_fg->eye_trauma_19f_total.'</td>
                    <td>'.$consultation_fg->eye_trauma_39m_total.'</td>
                    <td>'.$consultation_fg->eye_trauma_39f_total.'</td>
                    <td>'.$consultation_fg->eye_trauma_40m_total.'</td>
                    <td>'.$consultation_fg->eye_trauma_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Eye problem other</td>
                    <td>'.$consultation_fg->eye_pb_19m_total.'</td>
                    <td>'.$consultation_fg->eye_pb_19f_total.'</td>
                    <td>'.$consultation_fg->eye_pb_39m_total.'</td>
                    <td>'.$consultation_fg->eye_pb_39f_total.'</td>
                    <td>'.$consultation_fg->eye_pb_40m_total.'</td>
                    <td>'.$consultation_fg->eye_pb_40f_total.'</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-xs-6">
              <table id="Gb" class="center">
                <thead>
                  <tr>
                    <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                </thead>
                <tbody>
                  <tr>
                    <td>10</td>
                    <td class="left">Dental caries</td>
                    <td>'.$consultation_fg->dent_caries_19m_total.'</td>
                    <td>'.$consultation_fg->dent_caries_19f_total.'</td>
                    <td>'.$consultation_fg->dent_caries_39m_total.'</td>
                    <td>'.$consultation_fg->dent_caries_39f_total.'</td>
                    <td>'.$consultation_fg->dent_caries_40m_total.'</td>
                    <td>'.$consultation_fg->dent_caries_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td class="left">Periodontal disease</td>
                    <td>'.$consultation_fg->perio_diseas_19m_total.'</td>
                    <td>'.$consultation_fg->perio_diseas_19f_total.'</td>
                    <td>'.$consultation_fg->perio_diseas_39m_total.'</td>
                    <td>'.$consultation_fg->perio_diseas_39f_total.'</td>
                    <td>'.$consultation_fg->perio_diseas_40m_total.'</td>
                    <td>'.$consultation_fg->perio_diseas_40f_total.'</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td class="left">Other teeth and gum infections</td>
                    <td>'.$consultation_fg->other_teeth_19m_total.'</td>
                    <td>'.$consultation_fg->other_teeth_19f_total.'</td>
                    <td>'.$consultation_fg->other_teeth_39m_total.'</td>
                    <td>'.$consultation_fg->other_teeth_39f_total.'</td>
                    <td>'.$consultation_fg->other_teeth_40m_total.'</td>
                    <td>'.$consultation_fg->other_teeth_40f_total.'</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>';
        }

        $mental_health = $this->research_model->mental_health2($date1, $date2);

        if ($mental_health->anxiety_nc19m_total != null) {
            $output .= '
              <h3 class="center">III] Mental health</h3>
              <h4>A) Summary</h4>
              <table id="A3" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="center">1</td>
                    <td class="left">Mental patients under follow up</td>
                    <td>'.$mental_health->follow_up_total.'</td>
                    </tr>
                  <tr>
                    <td class="center">2</td>
                    <td class="left">Mental problems referred to higher level</td>
                    <td>'.$mental_health->higher_level_total.'</td>
                    </tr>
                  <tr>
                    <td class="center">3</td>
                    <td class="left">Mental problems hospitalized</td>
                    <td>'.$mental_health->hospitalized_total.'</td>
                  </tr>
                </tbody>
              </table>
              <br>
        			<h4>B) Diagnosis</h4>
  				    <table id="B3" class="center">
  				      <thead>
  				        <tr>
  				          <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				          <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				          <th colspan="6">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				          <th colspan="6">Old cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				        </tr>
  				        <tr>
  				          <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				          <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				          <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  			            <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  			            <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  			            <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  				        </tr>
  				        <tr>
  				          <th>M</th>
  				          <th>F</th>
  				          <th>M</th>
  				          <th>F</th>
  				          <th>M</th>
  				          <th>F</th>
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
  				          <td class="center">1</td>
  				          <td class="left">Anxiety disorders</td>
  				          <td>'.$mental_health->anxiety_nc19m_total.'</td>
  				          <td>'.$mental_health->anxiety_nc19f_total.'</td>
  				          <td>'.$mental_health->anxiety_nc39m_total.'</td>
  				          <td>'.$mental_health->anxiety_nc39f_total.'</td>
  				          <td>'.$mental_health->anxiety_nc40m_total.'</td>
  				          <td>'.$mental_health->anxiety_nc40f_total.'</td>
  				          <td>'.$mental_health->anxiety_oc19m_total.'</td>
  				          <td>'.$mental_health->anxiety_oc19f_total.'</td>
  				          <td>'.$mental_health->anxiety_oc39m_total.'</td>
  				          <td>'.$mental_health->anxiety_oc39f_total.'</td>
  				          <td>'.$mental_health->anxiety_oc40m_total.'</td>
  				          <td>'.$mental_health->anxiety_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">2</td>
  				          <td class="left">Post-traumatic stress disorders</td>
  				          <td>'.$mental_health->stress_nc19m_total.'</td>
  				          <td>'.$mental_health->stress_nc19f_total.'</td>
  				          <td>'.$mental_health->stress_nc39m_total.'</td>
  				          <td>'.$mental_health->stress_nc39f_total.'</td>
  				          <td>'.$mental_health->stress_nc40m_total.'</td>
  				          <td>'.$mental_health->stress_nc40f_total.'</td>
  				          <td>'.$mental_health->stress_oc19m_total.'</td>
  				          <td>'.$mental_health->stress_oc19f_total.'</td>
  				          <td>'.$mental_health->stress_oc39m_total.'</td>
  				          <td>'.$mental_health->stress_oc39f_total.'</td>
  				          <td>'.$mental_health->stress_oc40m_total.'</td>
  				          <td>'.$mental_health->stress_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">3</td>
  				          <td class="left">Schizophrenia and other psychoses</td>
  				          <td>'.$mental_health->schizo_nc19m_total.'</td>
  				          <td>'.$mental_health->schizo_nc19f_total.'</td>
  				          <td>'.$mental_health->schizo_nc39m_total.'</td>
  				          <td>'.$mental_health->schizo_nc39f_total.'</td>
  				          <td>'.$mental_health->schizo_nc40m_total.'</td>
  				          <td>'.$mental_health->schizo_nc40f_total.'</td>
  				          <td>'.$mental_health->schizo_oc19m_total.'</td>
  				          <td>'.$mental_health->schizo_oc19f_total.'</td>
  				          <td>'.$mental_health->schizo_oc39m_total.'</td>
  				          <td>'.$mental_health->schizo_oc39f_total.'</td>
  				          <td>'.$mental_health->schizo_oc40m_total.'</td>
  				          <td>'.$mental_health->schizo_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">4</td>
  				          <td class="left">Somatoform disorders</td>
  				          <td>'.$mental_health->soma_nc19m_total.'</td>
  				          <td>'.$mental_health->soma_nc19f_total.'</td>
  				          <td>'.$mental_health->soma_nc39m_total.'</td>
  				          <td>'.$mental_health->soma_nc39f_total.'</td>
  				          <td>'.$mental_health->soma_nc40m_total.'</td>
  				          <td>'.$mental_health->soma_nc40f_total.'</td>
  				          <td>'.$mental_health->soma_oc19m_total.'</td>
  				          <td>'.$mental_health->soma_oc19f_total.'</td>
  				          <td>'.$mental_health->soma_oc39m_total.'</td>
  				          <td>'.$mental_health->soma_oc39f_total.'</td>
  				          <td>'.$mental_health->soma_oc40m_total.'</td>
  				          <td>'.$mental_health->soma_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">5</td>
  				          <td class="left">Behavioral and emotional disorders with onset usually occurring in childhood and adolescence</td>
  				          <td>'.$mental_health->child_nc19m_total.'</td>
  				          <td>'.$mental_health->child_nc19f_total.'</td>
  				          <td>'.$mental_health->child_nc39m_total.'</td>
  				          <td>'.$mental_health->child_nc39f_total.'</td>
  				          <td>'.$mental_health->child_nc40m_total.'</td>
  				          <td>'.$mental_health->child_nc40f_total.'</td>
  				          <td>'.$mental_health->child_oc19m_total.'</td>
  				          <td>'.$mental_health->child_oc19f_total.'</td>
  				          <td>'.$mental_health->child_oc39m_total.'</td>
  				          <td>'.$mental_health->child_oc39f_total.'</td>
  				          <td>'.$mental_health->child_oc40m_total.'</td>
  				          <td>'.$mental_health->child_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">6</td>
  				          <td class="left">Mental and behavioral disorder due to use of alcohol</td>
  				          <td>'.$mental_health->alcohol_nc19m_total.'</td>
  				          <td>'.$mental_health->alcohol_nc19f_total.'</td>
  				          <td>'.$mental_health->alcohol_nc39m_total.'</td>
  				          <td>'.$mental_health->alcohol_nc39f_total.'</td>
  				          <td>'.$mental_health->alcohol_nc40m_total.'</td>
  				          <td>'.$mental_health->alcohol_nc40f_total.'</td>
  				          <td>'.$mental_health->alcohol_oc19m_total.'</td>
  				          <td>'.$mental_health->alcohol_oc19f_total.'</td>
  				          <td>'.$mental_health->alcohol_oc39m_total.'</td>
  				          <td>'.$mental_health->alcohol_oc39f_total.'</td>
  				          <td>'.$mental_health->alcohol_oc40m_total.'</td>
  				          <td>'.$mental_health->alcohol_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">7</td>
  				          <td class="left">Mental and behavioral disorder due to substance abuse</td>
  				          <td>'.$mental_health->drugs_nc19m_total.'</td>
  				          <td>'.$mental_health->drugs_nc19f_total.'</td>
  				          <td>'.$mental_health->drugs_nc39m_total.'</td>
  				          <td>'.$mental_health->drugs_nc39f_total.'</td>
  				          <td>'.$mental_health->drugs_nc40m_total.'</td>
  				          <td>'.$mental_health->drugs_nc40f_total.'</td>
  				          <td>'.$mental_health->drugs_oc19m_total.'</td>
  				          <td>'.$mental_health->drugs_oc19f_total.'</td>
  				          <td>'.$mental_health->drugs_oc39m_total.'</td>
  				          <td>'.$mental_health->drugs_oc39f_total.'</td>
  				          <td>'.$mental_health->drugs_oc40m_total.'</td>
  				          <td>'.$mental_health->drugs_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">8</td>
  				          <td class="left">Depression</td>
  				          <td>'.$mental_health->dep_nc19m_total.'</td>
  				          <td>'.$mental_health->dep_nc19f_total.'</td>
  				          <td>'.$mental_health->dep_nc39m_total.'</td>
  				          <td>'.$mental_health->dep_nc39f_total.'</td>
  				          <td>'.$mental_health->dep_nc40m_total.'</td>
  				          <td>'.$mental_health->dep_nc40f_total.'</td>
  				          <td>'.$mental_health->dep_oc19m_total.'</td>
  				          <td>'.$mental_health->dep_oc19f_total.'</td>
  				          <td>'.$mental_health->dep_oc39m_total.'</td>
  				          <td>'.$mental_health->dep_oc39f_total.'</td>
  				          <td>'.$mental_health->dep_oc40m_total.'</td>
  				          <td>'.$mental_health->dep_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">9</td>
  				          <td class="left">Suicide attempted</td>
  				          <td>'.$mental_health->suicid_att_nc19m_total.'</td>
  				          <td>'.$mental_health->suicid_att_nc19f_total.'</td>
  				          <td>'.$mental_health->suicid_att_nc39m_total.'</td>
  				          <td>'.$mental_health->suicid_att_nc39f_total.'</td>
  				          <td>'.$mental_health->suicid_att_nc40m_total.'</td>
  				          <td>'.$mental_health->suicid_att_nc40f_total.'</td>
  				          <td>'.$mental_health->suicid_att_oc19m_total.'</td>
  				          <td>'.$mental_health->suicid_att_oc19f_total.'</td>
  				          <td>'.$mental_health->suicid_att_oc39m_total.'</td>
  				          <td>'.$mental_health->suicid_att_oc39f_total.'</td>
  				          <td>'.$mental_health->suicid_att_oc40m_total.'</td>
  				          <td>'.$mental_health->suicid_att_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">10</td>
  				          <td class="left">Suicide deaths</td>
  				          <td>'.$mental_health->suicid_d_nc19m_total.'</td>
  				          <td>'.$mental_health->suicid_d_nc19f_total.'</td>
  				          <td>'.$mental_health->suicid_d_nc39m_total.'</td>
  				          <td>'.$mental_health->suicid_d_nc39f_total.'</td>
  				          <td>'.$mental_health->suicid_d_nc40m_total.'</td>
  				          <td>'.$mental_health->suicid_d_nc40f_total.'</td>
  				          <td>'.$mental_health->suicid_d_oc19m_total.'</td>
  				          <td>'.$mental_health->suicid_d_oc19f_total.'</td>
  				          <td>'.$mental_health->suicid_d_oc39m_total.'</td>
  				          <td>'.$mental_health->suicid_d_oc39f_total.'</td>
  				          <td>'.$mental_health->suicid_d_oc40m_total.'</td>
  				          <td>'.$mental_health->suicid_d_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">11</td>
  				          <td class="left">Maniac episode</td>
  				          <td>'.$mental_health->maniac_nc19m_total.'</td>
  				          <td>'.$mental_health->maniac_nc19f_total.'</td>
  				          <td>'.$mental_health->maniac_nc39m_total.'</td>
  				          <td>'.$mental_health->maniac_nc39f_total.'</td>
  				          <td>'.$mental_health->maniac_nc40m_total.'</td>
  				          <td>'.$mental_health->maniac_nc40f_total.'</td>
  				          <td>'.$mental_health->maniac_oc19m_total.'</td>
  				          <td>'.$mental_health->maniac_oc19f_total.'</td>
  				          <td>'.$mental_health->maniac_oc39m_total.'</td>
  				          <td>'.$mental_health->maniac_oc39f_total.'</td>
  				          <td>'.$mental_health->maniac_oc40m_total.'</td>
  				          <td>'.$mental_health->maniac_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">12</td>
  				          <td class="left">Bipolar disorders</td>
  				          <td>'.$mental_health->bipolar_nc19m_total.'</td>
  				          <td>'.$mental_health->bipolar_nc19f_total.'</td>
  				          <td>'.$mental_health->bipolar_nc39m_total.'</td>
  				          <td>'.$mental_health->bipolar_nc39f_total.'</td>
  				          <td>'.$mental_health->bipolar_nc40m_total.'</td>
  				          <td>'.$mental_health->bipolar_nc40f_total.'</td>
  				          <td>'.$mental_health->bipolar_oc19m_total.'</td>
  				          <td>'.$mental_health->bipolar_oc19f_total.'</td>
  				          <td>'.$mental_health->bipolar_oc39m_total.'</td>
  				          <td>'.$mental_health->bipolar_oc39f_total.'</td>
  				          <td>'.$mental_health->bipolar_oc40m_total.'</td>
  				          <td>'.$mental_health->bipolar_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">13</td>
  				          <td class="left">Other psychological / Mental behavioral disorders</td>
  				          <td>'.$mental_health->other_psy_nc19m_total.'</td>
  				          <td>'.$mental_health->other_psy_nc19f_total.'</td>
  				          <td>'.$mental_health->other_psy_nc39m_total.'</td>
  				          <td>'.$mental_health->other_psy_nc39f_total.'</td>
  				          <td>'.$mental_health->other_psy_nc40m_total.'</td>
  				          <td>'.$mental_health->other_psy_nc40f_total.'</td>
  				          <td>'.$mental_health->other_psy_oc19m_total.'</td>
  				          <td>'.$mental_health->other_psy_oc19f_total.'</td>
  				          <td>'.$mental_health->other_psy_oc39m_total.'</td>
  				          <td>'.$mental_health->other_psy_oc39f_total.'</td>
  				          <td>'.$mental_health->other_psy_oc40m_total.'</td>
  				          <td>'.$mental_health->other_psy_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">14</td>
  				          <td class="left">Epilepsy</td>
  				          <td>'.$mental_health->epilepsy_nc19m_total.'</td>
  				          <td>'.$mental_health->epilepsy_nc19f_total.'</td>
  				          <td>'.$mental_health->epilepsy_nc39m_total.'</td>
  				          <td>'.$mental_health->epilepsy_nc39f_total.'</td>
  				          <td>'.$mental_health->epilepsy_nc40m_total.'</td>
  				          <td>'.$mental_health->epilepsy_nc40f_total.'</td>
  				          <td>'.$mental_health->epilepsy_oc19m_total.'</td>
  				          <td>'.$mental_health->epilepsy_oc19f_total.'</td>
  				          <td>'.$mental_health->epilepsy_oc39m_total.'</td>
  				          <td>'.$mental_health->epilepsy_oc39f_total.'</td>
  				          <td>'.$mental_health->epilepsy_oc40m_total.'</td>
  				          <td>'.$mental_health->epilepsy_oc40f_total.'</td>
  				        </tr>
  				        <tr>
  				          <td class="center">15</td>
  				          <td class="left">Other neurological disorders</td>
  				          <td>'.$mental_health->other_neuro_nc19m_total.'</td>
  				          <td>'.$mental_health->other_neuro_nc19f_total.'</td>
  				          <td>'.$mental_health->other_neuro_nc39m_total.'</td>
  				          <td>'.$mental_health->other_neuro_nc39f_total.'</td>
  				          <td>'.$mental_health->other_neuro_nc40m_total.'</td>
  				          <td>'.$mental_health->other_neuro_nc40f_total.'</td>
  				          <td>'.$mental_health->other_neuro_oc19m_total.'</td>
  				          <td>'.$mental_health->other_neuro_oc19f_total.'</td>
  				          <td>'.$mental_health->other_neuro_oc39m_total.'</td>
  				          <td>'.$mental_health->other_neuro_oc39f_total.'</td>
  				          <td>'.$mental_health->other_neuro_oc40m_total.'</td>
  				          <td>'.$mental_health->other_neuro_oc40f_total.'</td>
  				        </tr>
  				      </tbody>
  				    </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">III] Mental health</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $chronic_disease=$this->research_model->chronic_disease2($date1, $date2);

        if ($chronic_disease->hyper_nc19m_total != null) {
            $output.='
          <br>
          <h3 class="center">IV] Chronic diseases</h3>
          <div class="row">
            <table id="A4" class="center">
              <thead>
                <tr>
                  <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="6">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="6">Old Cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="6">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
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
                  <td>1</td>
                  <td class="left">Medical condition</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>1.1</td>
                  <td class="left">Hypertension</td>
                  <td>'.$chronic_disease->hyper_nc19m_total.'</td>
                  <td>'.$chronic_disease->hyper_nc19f_total.'</td>
                  <td>'.$chronic_disease->hyper_nc39m_total.'</td>
                  <td>'.$chronic_disease->hyper_nc39f_total.'</td>
                  <td>'.$chronic_disease->hyper_nc40m_total.'</td>
                  <td>'.$chronic_disease->hyper_nc40f_total.'</td>
                  <td>'.$chronic_disease->hyper_oc19m_total.'</td>
                  <td>'.$chronic_disease->hyper_oc19f_total.'</td>
                  <td>'.$chronic_disease->hyper_oc39m_total.'</td>
                  <td>'.$chronic_disease->hyper_oc39f_total.'</td>
                  <td>'.$chronic_disease->hyper_oc40m_total.'</td>
                  <td>'.$chronic_disease->hyper_oc40f_total.'</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Respiratory diseases</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>2.1</td>
                  <td class="left">Asthma intermittant</td>
                  <td>'.$chronic_disease->asth_int_nc19m_total.'</td>
                  <td>'.$chronic_disease->asth_int_nc19f_total.'</td>
                  <td>'.$chronic_disease->asth_int_nc39m_total.'</td>
                  <td>'.$chronic_disease->asth_int_nc39f_total.'</td>
                  <td>'.$chronic_disease->asth_int_nc40m_total.'</td>
                  <td>'.$chronic_disease->asth_int_nc40f_total.'</td>
                  <td>'.$chronic_disease->asth_int_oc19m_total.'</td>
                  <td>'.$chronic_disease->asth_int_oc19f_total.'</td>
                  <td>'.$chronic_disease->asth_int_oc39m_total.'</td>
                  <td>'.$chronic_disease->asth_int_oc39f_total.'</td>
                  <td>'.$chronic_disease->asth_int_oc40m_total.'</td>
                  <td>'.$chronic_disease->asth_int_oc40f_total.'</td>
                  <td>'.$chronic_disease->asth_int_d19m_total.'</td>
                  <td>'.$chronic_disease->asth_int_d19f_total.'</td>
                  <td>'.$chronic_disease->asth_int_d39m_total.'</td>
                  <td>'.$chronic_disease->asth_int_d39f_total.'</td>
                  <td>'.$chronic_disease->asth_int_d40m_total.'</td>
                  <td>'.$chronic_disease->asth_int_d40f_total.'</td>
                </tr>
                <tr>
                  <td>2.2</td>
                  <td class="left">Asthma persintent mild</td>
                  <td>'.$chronic_disease->asth_mild_nc19m_total.'</td>
                  <td>'.$chronic_disease->asth_mild_nc19f_total.'</td>
                  <td>'.$chronic_disease->asth_mild_nc39m_total.'</td>
                  <td>'.$chronic_disease->asth_mild_nc39f_total.'</td>
                  <td>'.$chronic_disease->asth_mild_nc40m_total.'</td>
                  <td>'.$chronic_disease->asth_mild_nc40f_total.'</td>
                  <td>'.$chronic_disease->asth_mild_oc19m_total.'</td>
                  <td>'.$chronic_disease->asth_mild_oc19f_total.'</td>
                  <td>'.$chronic_disease->asth_mild_oc39m_total.'</td>
                  <td>'.$chronic_disease->asth_mild_oc39f_total.'</td>
                  <td>'.$chronic_disease->asth_mild_oc40m_total.'</td>
                  <td>'.$chronic_disease->asth_mild_oc40f_total.'</td>
                  <td>'.$chronic_disease->asth_mild_d19m_total.'</td>
                  <td>'.$chronic_disease->asth_mild_d19f_total.'</td>
                  <td>'.$chronic_disease->asth_mild_d39m_total.'</td>
                  <td>'.$chronic_disease->asth_mild_d39f_total.'</td>
                  <td>'.$chronic_disease->asth_mild_d40m_total.'</td>
                  <td>'.$chronic_disease->asth_mild_d40f_total.'</td>
                </tr>
                <tr>
                  <td>2.3</td>
                  <td class="left">Asthma persintent modarate</td>
                  <td>'.$chronic_disease->asth_mod_nc19m_total.'</td>
                  <td>'.$chronic_disease->asth_mod_nc19f_total.'</td>
                  <td>'.$chronic_disease->asth_mod_nc39m_total.'</td>
                  <td>'.$chronic_disease->asth_mod_nc39f_total.'</td>
                  <td>'.$chronic_disease->asth_mod_nc40m_total.'</td>
                  <td>'.$chronic_disease->asth_mod_nc40f_total.'</td>
                  <td>'.$chronic_disease->asth_mod_oc19m_total.'</td>
                  <td>'.$chronic_disease->asth_mod_oc19f_total.'</td>
                  <td>'.$chronic_disease->asth_mod_oc39m_total.'</td>
                  <td>'.$chronic_disease->asth_mod_oc39f_total.'</td>
                  <td>'.$chronic_disease->asth_mod_oc40m_total.'</td>
                  <td>'.$chronic_disease->asth_mod_oc40f_total.'</td>
                  <td>'.$chronic_disease->asth_mod_d19m_total.'</td>
                  <td>'.$chronic_disease->asth_mod_d19f_total.'</td>
                  <td>'.$chronic_disease->asth_mod_d39m_total.'</td>
                  <td>'.$chronic_disease->asth_mod_d39f_total.'</td>
                  <td>'.$chronic_disease->asth_mod_d40m_total.'</td>
                  <td>'.$chronic_disease->asth_mod_d40f_total.'</td>
                </tr>
                <tr>
                  <td>2.4</td>
                  <td class="left">Asthma persintent severe</td>
                  <td>'.$chronic_disease->asth_sev_nc19m_total.'</td>
                  <td>'.$chronic_disease->asth_sev_nc19f_total.'</td>
                  <td>'.$chronic_disease->asth_sev_nc39m_total.'</td>
                  <td>'.$chronic_disease->asth_sev_nc39f_total.'</td>
                  <td>'.$chronic_disease->asth_sev_nc40m_total.'</td>
                  <td>'.$chronic_disease->asth_sev_nc40f_total.'</td>
                  <td>'.$chronic_disease->asth_sev_oc19m_total.'</td>
                  <td>'.$chronic_disease->asth_sev_oc19f_total.'</td>
                  <td>'.$chronic_disease->asth_sev_oc39m_total.'</td>
                  <td>'.$chronic_disease->asth_sev_oc39f_total.'</td>
                  <td>'.$chronic_disease->asth_sev_oc40m_total.'</td>
                  <td>'.$chronic_disease->asth_sev_oc40f_total.'</td>
                  <td>'.$chronic_disease->asth_sev_d19m_total.'</td>
                  <td>'.$chronic_disease->asth_sev_d19f_total.'</td>
                  <td>'.$chronic_disease->asth_sev_d39m_total.'</td>
                  <td>'.$chronic_disease->asth_sev_d39f_total.'</td>
                  <td>'.$chronic_disease->asth_sev_d40m_total.'</td>
                  <td>'.$chronic_disease->asth_sev_d40f_total.'</td>
                </tr>
                <tr>
                  <td>2.5</td>
                  <td class="left">Bronchitis</td>
                  <td>'.$chronic_disease->bronch_nc19m_total.'</td>
                  <td>'.$chronic_disease->bronch_nc19f_total.'</td>
                  <td>'.$chronic_disease->bronch_nc39m_total.'</td>
                  <td>'.$chronic_disease->bronch_nc39f_total.'</td>
                  <td>'.$chronic_disease->bronch_nc40m_total.'</td>
                  <td>'.$chronic_disease->bronch_nc40f_total.'</td>
                  <td>'.$chronic_disease->bronch_oc19m_total.'</td>
                  <td>'.$chronic_disease->bronch_oc19f_total.'</td>
                  <td>'.$chronic_disease->bronch_oc39m_total.'</td>
                  <td>'.$chronic_disease->bronch_oc39f_total.'</td>
                  <td>'.$chronic_disease->bronch_oc40m_total.'</td>
                  <td>'.$chronic_disease->bronch_oc40f_total.'</td>
                  <td>'.$chronic_disease->bronch_d19m_total.'</td>
                  <td>'.$chronic_disease->bronch_d19f_total.'</td>
                  <td>'.$chronic_disease->bronch_d39m_total.'</td>
                  <td>'.$chronic_disease->bronch_d39f_total.'</td>
                  <td>'.$chronic_disease->bronch_d40m_total.'</td>
                  <td>'.$chronic_disease->bronch_d40f_total.'</td>
                </tr>
                <tr>
                  <td>2.6</td>
                  <td class="left">Other Chronic obstructive pulmonary diseases</td>
                  <td>'.$chronic_disease->other_pulm_nc19m_total.'</td>
                  <td>'.$chronic_disease->other_pulm_nc19f_total.'</td>
                  <td>'.$chronic_disease->other_pulm_nc39m_total.'</td>
                  <td>'.$chronic_disease->other_pulm_nc39f_total.'</td>
                  <td>'.$chronic_disease->other_pulm_nc40m_total.'</td>
                  <td>'.$chronic_disease->other_pulm_nc40f_total.'</td>
                  <td>'.$chronic_disease->other_pulm_oc19m_total.'</td>
                  <td>'.$chronic_disease->other_pulm_oc19f_total.'</td>
                  <td>'.$chronic_disease->other_pulm_oc39m_total.'</td>
                  <td>'.$chronic_disease->other_pulm_oc39f_total.'</td>
                  <td>'.$chronic_disease->other_pulm_oc40m_total.'</td>
                  <td>'.$chronic_disease->other_pulm_oc40f_total.'</td>
                  <td>'.$chronic_disease->other_pulm_d19m_total.'</td>
                  <td>'.$chronic_disease->other_pulm_d19f_total.'</td>
                  <td>'.$chronic_disease->other_pulm_d39m_total.'</td>
                  <td>'.$chronic_disease->other_pulm_d39f_total.'</td>
                  <td>'.$chronic_disease->other_pulm_d40m_total.'</td>
                  <td>'.$chronic_disease->other_pulm_d40f_total.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Diabetes</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>3.1</td>
                  <td class="left">Diabetes - Type 1</td>
                  <td>'.$chronic_disease->diab1_nc19m_total.'</td>
                  <td>'.$chronic_disease->diab1_nc19f_total.'</td>
                  <td>'.$chronic_disease->diab1_nc39m_total.'</td>
                  <td>'.$chronic_disease->diab1_nc39f_total.'</td>
                  <td>'.$chronic_disease->diab1_nc40m_total.'</td>
                  <td>'.$chronic_disease->diab1_nc40f_total.'</td>
                  <td>'.$chronic_disease->diab1_oc19m_total.'</td>
                  <td>'.$chronic_disease->diab1_oc19f_total.'</td>
                  <td>'.$chronic_disease->diab1_oc39m_total.'</td>
                  <td>'.$chronic_disease->diab1_oc39f_total.'</td>
                  <td>'.$chronic_disease->diab1_oc40m_total.'</td>
                  <td>'.$chronic_disease->diab1_oc40f_total.'</td>
                  <td>'.$chronic_disease->diab1_d19m_total.'</td>
                  <td>'.$chronic_disease->diab1_d19f_total.'</td>
                  <td>'.$chronic_disease->diab1_d39m_total.'</td>
                  <td>'.$chronic_disease->diab1_d39f_total.'</td>
                  <td>'.$chronic_disease->diab1_d40m_total.'</td>
                  <td>'.$chronic_disease->diab1_d40f_total.'</td>
                </tr>
                <tr>
                  <td>3.2</td>
                  <td class="left">Diabetes - Type 2</td>
                  <td>'.$chronic_disease->diab2_nc19m_total.'</td>
                  <td>'.$chronic_disease->diab2_nc19f_total.'</td>
                  <td>'.$chronic_disease->diab2_nc39m_total.'</td>
                  <td>'.$chronic_disease->diab2_nc39f_total.'</td>
                  <td>'.$chronic_disease->diab2_nc40m_total.'</td>
                  <td>'.$chronic_disease->diab2_nc40f_total.'</td>
                  <td>'.$chronic_disease->diab2_oc19m_total.'</td>
                  <td>'.$chronic_disease->diab2_oc19f_total.'</td>
                  <td>'.$chronic_disease->diab2_oc39m_total.'</td>
                  <td>'.$chronic_disease->diab2_oc39f_total.'</td>
                  <td>'.$chronic_disease->diab2_oc40m_total.'</td>
                  <td>'.$chronic_disease->diab2_oc40f_total.'</td>
                  <td>'.$chronic_disease->diab2_d19m_total.'</td>
                  <td>'.$chronic_disease->diab2_d19f_total.'</td>
                  <td>'.$chronic_disease->diab2_d39m_total.'</td>
                  <td>'.$chronic_disease->diab2_d39f_total.'</td>
                  <td>'.$chronic_disease->diab2_d40m_total.'</td>
                  <td>'.$chronic_disease->diab2_d40f_total.'</td>
                </tr>
                <tr>
                  <td>3.3</td>
                  <td class="left">Diabetes gestational</td>
                  <td>'.$chronic_disease->diab_gest_nc19m_total.'</td>
                  <td>'.$chronic_disease->diab_gest_nc19f_total.'</td>
                  <td>'.$chronic_disease->diab_gest_nc39m_total.'</td>
                  <td>'.$chronic_disease->diab_gest_nc39f_total.'</td>
                  <td>'.$chronic_disease->diab_gest_nc40m_total.'</td>
                  <td>'.$chronic_disease->diab_gest_nc40f_total.'</td>
                  <td>'.$chronic_disease->diab_gest_oc19m_total.'</td>
                  <td>'.$chronic_disease->diab_gest_oc19f_total.'</td>
                  <td>'.$chronic_disease->diab_gest_oc39m_total.'</td>
                  <td>'.$chronic_disease->diab_gest_oc39f_total.'</td>
                  <td>'.$chronic_disease->diab_gest_oc40m_total.'</td>
                  <td>'.$chronic_disease->diab_gest_oc40f_total.'</td>
                  <td>'.$chronic_disease->diab_gest_d19m_total.'</td>
                  <td>'.$chronic_disease->diab_gest_d19f_total.'</td>
                  <td>'.$chronic_disease->diab_gest_d39m_total.'</td>
                  <td>'.$chronic_disease->diab_gest_d39f_total.'</td>
                  <td>'.$chronic_disease->diab_gest_d40m_total.'</td>
                  <td>'.$chronic_disease->diab_gest_d40f_total.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Cancer</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>4.1</td>
                  <td class="left">Breast Cancer</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_nc19f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_nc39f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_nc40f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_oc19f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_oc39f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_oc40f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_d19f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_d39f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->breast_d40f_total.'</td>
                </tr>
                <tr>
                  <td>4.2</td>
                  <td class="left">Cervical cancer</td>
                  <td>'.$chronic_disease->cervical_nc19m_total.'</td>
                  <td>'.$chronic_disease->cervical_nc19f_total.'</td>
                  <td>'.$chronic_disease->cervical_nc39m_total.'</td>
                  <td>'.$chronic_disease->cervical_nc39f_total.'</td>
                  <td>'.$chronic_disease->cervical_nc40m_total.'</td>
                  <td>'.$chronic_disease->cervical_nc40f_total.'</td>
                  <td>'.$chronic_disease->cervical_oc19m_total.'</td>
                  <td>'.$chronic_disease->cervical_oc19f_total.'</td>
                  <td>'.$chronic_disease->cervical_oc39m_total.'</td>
                  <td>'.$chronic_disease->cervical_oc39f_total.'</td>
                  <td>'.$chronic_disease->cervical_oc40m_total.'</td>
                  <td>'.$chronic_disease->cervical_oc40f_total.'</td>
                  <td>'.$chronic_disease->cervical_d19m_total.'</td>
                  <td>'.$chronic_disease->cervical_d19f_total.'</td>
                  <td>'.$chronic_disease->cervical_d39m_total.'</td>
                  <td>'.$chronic_disease->cervical_d39f_total.'</td>
                  <td>'.$chronic_disease->cervical_d40m_total.'</td>
                  <td>'.$chronic_disease->cervical_d40f_total.'</td>
                </tr>
                <tr>
                  <td>4.3</td>
                  <td class="left">Lymphoma</td>
                  <td>'.$chronic_disease->lympho_nc19m_total.'</td>
                  <td>'.$chronic_disease->lympho_nc19f_total.'</td>
                  <td>'.$chronic_disease->lympho_nc39m_total.'</td>
                  <td>'.$chronic_disease->lympho_nc39f_total.'</td>
                  <td>'.$chronic_disease->lympho_nc40m_total.'</td>
                  <td>'.$chronic_disease->lympho_nc40f_total.'</td>
                  <td>'.$chronic_disease->lympho_oc19m_total.'</td>
                  <td>'.$chronic_disease->lympho_oc19f_total.'</td>
                  <td>'.$chronic_disease->lympho_oc39m_total.'</td>
                  <td>'.$chronic_disease->lympho_oc39f_total.'</td>
                  <td>'.$chronic_disease->lympho_oc40m_total.'</td>
                  <td>'.$chronic_disease->lympho_oc40f_total.'</td>
                  <td>'.$chronic_disease->lympho_d19m_total.'</td>
                  <td>'.$chronic_disease->lympho_d19f_total.'</td>
                  <td>'.$chronic_disease->lympho_d39m_total.'</td>
                  <td>'.$chronic_disease->lympho_d39f_total.'</td>
                  <td>'.$chronic_disease->lympho_d40m_total.'</td>
                  <td>'.$chronic_disease->lympho_d40f_total.'</td>
                </tr>
                <tr>
                  <td>4.4</td>
                  <td class="left">Leucamia</td>
                  <td>'.$chronic_disease->leuca_nc19m_total.'</td>
                  <td>'.$chronic_disease->leuca_nc19f_total.'</td>
                  <td>'.$chronic_disease->leuca_nc39m_total.'</td>
                  <td>'.$chronic_disease->leuca_nc39f_total.'</td>
                  <td>'.$chronic_disease->leuca_nc40m_total.'</td>
                  <td>'.$chronic_disease->leuca_nc40f_total.'</td>
                  <td>'.$chronic_disease->leuca_oc19m_total.'</td>
                  <td>'.$chronic_disease->leuca_oc19f_total.'</td>
                  <td>'.$chronic_disease->leuca_oc39m_total.'</td>
                  <td>'.$chronic_disease->leuca_oc39f_total.'</td>
                  <td>'.$chronic_disease->leuca_oc40m_total.'</td>
                  <td>'.$chronic_disease->leuca_oc40f_total.'</td>
                  <td>'.$chronic_disease->leuca_d19m_total.'</td>
                  <td>'.$chronic_disease->leuca_d19f_total.'</td>
                  <td>'.$chronic_disease->leuca_d39m_total.'</td>
                  <td>'.$chronic_disease->leuca_d39f_total.'</td>
                  <td>'.$chronic_disease->leuca_d40m_total.'</td>
                  <td>'.$chronic_disease->leuca_d40f_total.'</td>
                </tr>
                <tr>
                  <td>4.5</td>
                  <td class="left">Colon recto cancer</td>
                  <td>'.$chronic_disease->colon_nc19m_total.'</td>
                  <td>'.$chronic_disease->colon_nc19f_total.'</td>
                  <td>'.$chronic_disease->colon_nc39m_total.'</td>
                  <td>'.$chronic_disease->colon_nc39f_total.'</td>
                  <td>'.$chronic_disease->colon_nc40m_total.'</td>
                  <td>'.$chronic_disease->colon_nc40f_total.'</td>
                  <td>'.$chronic_disease->colon_oc19m_total.'</td>
                  <td>'.$chronic_disease->colon_oc19f_total.'</td>
                  <td>'.$chronic_disease->colon_oc39m_total.'</td>
                  <td>'.$chronic_disease->colon_oc39f_total.'</td>
                  <td>'.$chronic_disease->colon_oc40m_total.'</td>
                  <td>'.$chronic_disease->colon_oc40f_total.'</td>
                  <td>'.$chronic_disease->colon_d19m_total.'</td>
                  <td>'.$chronic_disease->colon_d19f_total.'</td>
                  <td>'.$chronic_disease->colon_d39m_total.'</td>
                  <td>'.$chronic_disease->colon_d39f_total.'</td>
                  <td>'.$chronic_disease->colon_d40m_total.'</td>
                  <td>'.$chronic_disease->colon_d40f_total.'</td>
                </tr>
                <tr>
                  <td>4.6</td>
                  <td class="left">Kaposi sarcoma</td>
                  <td>'.$chronic_disease->kaposi_nc19m_total.'</td>
                  <td>'.$chronic_disease->kaposi_nc19f_total.'</td>
                  <td>'.$chronic_disease->kaposi_nc39m_total.'</td>
                  <td>'.$chronic_disease->kaposi_nc39f_total.'</td>
                  <td>'.$chronic_disease->kaposi_nc40m_total.'</td>
                  <td>'.$chronic_disease->kaposi_nc40f_total.'</td>
                  <td>'.$chronic_disease->kaposi_oc19m_total.'</td>
                  <td>'.$chronic_disease->kaposi_oc19f_total.'</td>
                  <td>'.$chronic_disease->kaposi_oc39m_total.'</td>
                  <td>'.$chronic_disease->kaposi_oc39f_total.'</td>
                  <td>'.$chronic_disease->kaposi_oc40m_total.'</td>
                  <td>'.$chronic_disease->kaposi_oc40f_total.'</td>
                  <td>'.$chronic_disease->kaposi_d19m_total.'</td>
                  <td>'.$chronic_disease->kaposi_d19f_total.'</td>
                  <td>'.$chronic_disease->kaposi_d39m_total.'</td>
                  <td>'.$chronic_disease->kaposi_d39f_total.'</td>
                  <td>'.$chronic_disease->kaposi_d40m_total.'</td>
                  <td>'.$chronic_disease->kaposi_d40f_total.'</td>
                </tr>
                <tr>
                  <td>4.7</td>
                  <td class="left">Retinoblastoma</td>
                  <td>'.$chronic_disease->retino_nc19m_total.'</td>
                  <td>'.$chronic_disease->retino_nc19f_total.'</td>
                  <td>'.$chronic_disease->retino_nc39m_total.'</td>
                  <td>'.$chronic_disease->retino_nc39f_total.'</td>
                  <td>'.$chronic_disease->retino_nc40m_total.'</td>
                  <td>'.$chronic_disease->retino_nc40f_total.'</td>
                  <td>'.$chronic_disease->retino_oc19m_total.'</td>
                  <td>'.$chronic_disease->retino_oc19f_total.'</td>
                  <td>'.$chronic_disease->retino_oc39m_total.'</td>
                  <td>'.$chronic_disease->retino_oc39f_total.'</td>
                  <td>'.$chronic_disease->retino_oc40m_total.'</td>
                  <td>'.$chronic_disease->retino_oc40f_total.'</td>
                  <td>'.$chronic_disease->retino_d19m_total.'</td>
                  <td>'.$chronic_disease->retino_d19f_total.'</td>
                  <td>'.$chronic_disease->retino_d39m_total.'</td>
                  <td>'.$chronic_disease->retino_d39f_total.'</td>
                  <td>'.$chronic_disease->retino_d40m_total.'</td>
                  <td>'.$chronic_disease->retino_d40f_total.'</td>
                </tr>
                <tr>
                  <td>4.8</td>
                  <td class="left">Nephroblastoma</td>
                  <td>'.$chronic_disease->nephro_nc19m_total.'</td>
                  <td>'.$chronic_disease->nephro_nc19f_total.'</td>
                  <td>'.$chronic_disease->nephro_nc39m_total.'</td>
                  <td>'.$chronic_disease->nephro_nc39f_total.'</td>
                  <td>'.$chronic_disease->nephro_nc40m_total.'</td>
                  <td>'.$chronic_disease->nephro_nc40f_total.'</td>
                  <td>'.$chronic_disease->nephro_oc19m_total.'</td>
                  <td>'.$chronic_disease->nephro_oc19f_total.'</td>
                  <td>'.$chronic_disease->nephro_oc39m_total.'</td>
                  <td>'.$chronic_disease->nephro_oc39f_total.'</td>
                  <td>'.$chronic_disease->nephro_oc40m_total.'</td>
                  <td>'.$chronic_disease->nephro_oc40f_total.'</td>
                  <td>'.$chronic_disease->nephro_d19m_total.'</td>
                  <td>'.$chronic_disease->nephro_d19f_total.'</td>
                  <td>'.$chronic_disease->nephro_d39m_total.'</td>
                  <td>'.$chronic_disease->nephro_d39f_total.'</td>
                  <td>'.$chronic_disease->nephro_d40m_total.'</td>
                  <td>'.$chronic_disease->nephro_d40f_total.'</td>
                </tr>
                <tr>
                  <td>4.9</td>
                  <td class="left">Ovarian cancer</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_nc19f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_nc39f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_nc40f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_oc19f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_oc39f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_oc40f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_d19f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_d39f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->ovarian_d40f_total.'</td>
                </tr>
                <tr>
                  <td>4.10</td>
                  <td class="left">Prostate cancer</td>
                  <td>'.$chronic_disease->prostate_nc19m_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_nc39m_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_nc40m_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_oc19m_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_oc39m_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_oc40m_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_d19m_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_d39m_total.'</td>
                  <td class="grey"></td>
                  <td>'.$chronic_disease->prostate_d40m_total.'</td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>4.11</td>
                  <td class="left">Cancer others</td>
                  <td>'.$chronic_disease->cancer_others_nc19m_total.'</td>
                  <td>'.$chronic_disease->cancer_others_nc19f_total.'</td>
                  <td>'.$chronic_disease->cancer_others_nc39m_total.'</td>
                  <td>'.$chronic_disease->cancer_others_nc39f_total.'</td>
                  <td>'.$chronic_disease->cancer_others_nc40m_total.'</td>
                  <td>'.$chronic_disease->cancer_others_nc40f_total.'</td>
                  <td>'.$chronic_disease->cancer_others_oc19m_total.'</td>
                  <td>'.$chronic_disease->cancer_others_oc19f_total.'</td>
                  <td>'.$chronic_disease->cancer_others_oc39m_total.'</td>
                  <td>'.$chronic_disease->cancer_others_oc39f_total.'</td>
                  <td>'.$chronic_disease->cancer_others_oc40m_total.'</td>
                  <td>'.$chronic_disease->cancer_others_oc40f_total.'</td>
                  <td>'.$chronic_disease->cancer_others_d19m_total.'</td>
                  <td>'.$chronic_disease->cancer_others_d19f_total.'</td>
                  <td>'.$chronic_disease->cancer_others_d39m_total.'</td>
                  <td>'.$chronic_disease->cancer_others_d39f_total.'</td>
                  <td>'.$chronic_disease->cancer_others_d40m_total.'</td>
                  <td>'.$chronic_disease->cancer_others_d40f_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">IV] Chronic diseases</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $other_cardiovascular = $this->research_model->other_cardiovascular2($date1, $date2);

        if ($other_cardiovascular->cardio_nc19m_total != null) {
            $output .= '
              <h3 class="center">V] Other cardiovascular and kindney diseases</h3>
              <table id="A5" class="center">
                <thead>
                  <tr>
                    <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="6">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="6">Old cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="6">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
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
                    <td>1</td>
                    <td class="left">Medical condition</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>1.1</td>
                    <td class="left">Cardiomyopathies</td>
                    <td>'.$other_cardiovascular->cardio_nc19m_total.'</td>
                    <td>'.$other_cardiovascular->cardio_nc19f_total.'</td>
                    <td>'.$other_cardiovascular->cardio_nc39m_total.'</td>
                    <td>'.$other_cardiovascular->cardio_nc39f_total.'</td>
                    <td>'.$other_cardiovascular->cardio_nc40m_total.'</td>
                    <td>'.$other_cardiovascular->cardio_nc40f_total.'</td>

                    <td>'.$other_cardiovascular->cardio_oc19m_total.'</td>
                    <td>'.$other_cardiovascular->cardio_oc19f_total.'</td>
                    <td>'.$other_cardiovascular->cardio_oc39m_total.'</td>
                    <td>'.$other_cardiovascular->cardio_oc39f_total.'</td>
                    <td>'.$other_cardiovascular->cardio_oc40m_total.'</td>
                    <td>'.$other_cardiovascular->cardio_oc40f_total.'</td>

                    <td>'.$other_cardiovascular->cardio_d19m_total.'</td>
                    <td>'.$other_cardiovascular->cardio_d19f_total.'</td>
                    <td>'.$other_cardiovascular->cardio_d39m_total.'</td>
                    <td>'.$other_cardiovascular->cardio_d39f_total.'</td>
                    <td>'.$other_cardiovascular->cardio_d40m_total.'</td>
                    <td>'.$other_cardiovascular->cardio_d40f_total.'</td>
                  </tr>
                  <tr>
                    <td>1.2</td>
                    <td class="left">Stroke/TIA</td>
                    <td>'.$other_cardiovascular->stroke_nc19m_total.'</td>
                    <td>'.$other_cardiovascular->stroke_nc19f_total.'</td>
                    <td>'.$other_cardiovascular->stroke_nc39m_total.'</td>
                    <td>'.$other_cardiovascular->stroke_nc39f_total.'</td>
                    <td>'.$other_cardiovascular->stroke_nc40m_total.'</td>
                    <td>'.$other_cardiovascular->stroke_nc40f_total.'</td>

                    <td>'.$other_cardiovascular->stroke_oc19m_total.'</td>
                    <td>'.$other_cardiovascular->stroke_oc19f_total.'</td>
                    <td>'.$other_cardiovascular->stroke_oc39m_total.'</td>
                    <td>'.$other_cardiovascular->stroke_oc39f_total.'</td>
                    <td>'.$other_cardiovascular->stroke_oc40m_total.'</td>
                    <td>'.$other_cardiovascular->stroke_oc40f_total.'</td>

                    <td>'.$other_cardiovascular->stroke_d19m_total.'</td>
                    <td>'.$other_cardiovascular->stroke_d19f_total.'</td>
                    <td>'.$other_cardiovascular->stroke_d39m_total.'</td>
                    <td>'.$other_cardiovascular->stroke_d39f_total.'</td>
                    <td>'.$other_cardiovascular->stroke_d40m_total.'</td>
                    <td>'.$other_cardiovascular->stroke_d40f_total.'</td>
                  </tr>
                  <tr>
                    <td>1.3</td>
                    <td class="left">Rheumatic heart disease</td>
                    <td>'.$other_cardiovascular->rheumatic_nc19m_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_nc19f_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_nc39m_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_nc39f_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_nc40m_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_nc40f_total.'</td>

                    <td>'.$other_cardiovascular->rheumatic_oc19m_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_oc19f_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_oc39m_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_oc39f_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_oc40m_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_oc40f_total.'</td>

                    <td>'.$other_cardiovascular->rheumatic_d19m_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_d19f_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_d39m_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_d39f_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_d40m_total.'</td>
                    <td>'.$other_cardiovascular->rheumatic_d40f_total.'</td>
                  </tr>
                  <tr>
                    <td>1.4</td>
                    <td class="left">Congenital heart disease</td>
                    <td>'.$other_cardiovascular->cong_nc19m_total.'</td>
                    <td>'.$other_cardiovascular->cong_nc19f_total.'</td>
                    <td>'.$other_cardiovascular->cong_nc39m_total.'</td>
                    <td>'.$other_cardiovascular->cong_nc39f_total.'</td>
                    <td>'.$other_cardiovascular->cong_nc40m_total.'</td>
                    <td>'.$other_cardiovascular->cong_nc40f_total.'</td>

                    <td>'.$other_cardiovascular->cong_oc19m_total.'</td>
                    <td>'.$other_cardiovascular->cong_oc19f_total.'</td>
                    <td>'.$other_cardiovascular->cong_oc39m_total.'</td>
                    <td>'.$other_cardiovascular->cong_oc39f_total.'</td>
                    <td>'.$other_cardiovascular->cong_oc40m_total.'</td>
                    <td>'.$other_cardiovascular->cong_oc40f_total.'</td>

                    <td>'.$other_cardiovascular->cong_d19m_total.'</td>
                    <td>'.$other_cardiovascular->cong_d19f_total.'</td>
                    <td>'.$other_cardiovascular->cong_d39m_total.'</td>
                    <td>'.$other_cardiovascular->cong_d39f_total.'</td>
                    <td>'.$other_cardiovascular->cong_d40m_total.'</td>
                    <td>'.$other_cardiovascular->cong_d40f_total.'</td>
                  </tr>
                  <tr>
                    <td>1.5</td>
                    <td class="left">Coronary artery disease</td>
                    <td>'.$other_cardiovascular->coronary_nc19m_total.'</td>
                    <td>'.$other_cardiovascular->coronary_nc19f_total.'</td>
                    <td>'.$other_cardiovascular->coronary_nc39m_total.'</td>
                    <td>'.$other_cardiovascular->coronary_nc39f_total.'</td>
                    <td>'.$other_cardiovascular->coronary_nc40m_total.'</td>
                    <td>'.$other_cardiovascular->coronary_nc40f_total.'</td>

                    <td>'.$other_cardiovascular->coronary_oc19m_total.'</td>
                    <td>'.$other_cardiovascular->coronary_oc19f_total.'</td>
                    <td>'.$other_cardiovascular->coronary_oc39m_total.'</td>
                    <td>'.$other_cardiovascular->coronary_oc39f_total.'</td>
                    <td>'.$other_cardiovascular->coronary_oc40m_total.'</td>
                    <td>'.$other_cardiovascular->coronary_oc40f_total.'</td>

                    <td>'.$other_cardiovascular->coronary_d19m_total.'</td>
                    <td>'.$other_cardiovascular->coronary_d19f_total.'</td>
                    <td>'.$other_cardiovascular->coronary_d39m_total.'</td>
                    <td>'.$other_cardiovascular->coronary_d39f_total.'</td>
                    <td>'.$other_cardiovascular->coronary_d40m_total.'</td>
                    <td>'.$other_cardiovascular->coronary_d40f_total.'</td>
                  </tr>
                  <tr>
                    <td>1.6</td>
                    <td class="left">Pericardial disease</td>
                    <td>'.$other_cardiovascular->peri_nc19m_total.'</td>
                    <td>'.$other_cardiovascular->peri_nc19f_total.'</td>
                    <td>'.$other_cardiovascular->peri_nc39m_total.'</td>
                    <td>'.$other_cardiovascular->peri_nc39f_total.'</td>
                    <td>'.$other_cardiovascular->peri_nc40m_total.'</td>
                    <td>'.$other_cardiovascular->peri_nc40f_total.'</td>

                    <td>'.$other_cardiovascular->peri_oc19m_total.'</td>
                    <td>'.$other_cardiovascular->peri_oc19f_total.'</td>
                    <td>'.$other_cardiovascular->peri_oc39m_total.'</td>
                    <td>'.$other_cardiovascular->peri_oc39f_total.'</td>
                    <td>'.$other_cardiovascular->peri_oc40m_total.'</td>
                    <td>'.$other_cardiovascular->peri_oc40f_total.'</td>

                    <td>'.$other_cardiovascular->peri_d19m_total.'</td>
                    <td>'.$other_cardiovascular->peri_d19f_total.'</td>
                    <td>'.$other_cardiovascular->peri_d39m_total.'</td>
                    <td>'.$other_cardiovascular->peri_d39f_total.'</td>
                    <td>'.$other_cardiovascular->peri_d40m_total.'</td>
                    <td>'.$other_cardiovascular->peri_d40f_total.'</td>
                  </tr>
                  <tr>
                    <td>1.7</td>
                    <td class="left">Heart failure</td>
                    <td>'.$other_cardiovascular->heart_nc19m_total.'</td>
                    <td>'.$other_cardiovascular->heart_nc19f_total.'</td>
                    <td>'.$other_cardiovascular->heart_nc39m_total.'</td>
                    <td>'.$other_cardiovascular->heart_nc39f_total.'</td>
                    <td>'.$other_cardiovascular->heart_nc40m_total.'</td>
                    <td>'.$other_cardiovascular->heart_nc40f_total.'</td>

                    <td>'.$other_cardiovascular->heart_oc19m_total.'</td>
                    <td>'.$other_cardiovascular->heart_oc19f_total.'</td>
                    <td>'.$other_cardiovascular->heart_oc39m_total.'</td>
                    <td>'.$other_cardiovascular->heart_oc39f_total.'</td>
                    <td>'.$other_cardiovascular->heart_oc40m_total.'</td>
                    <td>'.$other_cardiovascular->heart_oc40f_total.'</td>

                    <td>'.$other_cardiovascular->heart_d19m_total.'</td>
                    <td>'.$other_cardiovascular->heart_d19f_total.'</td>
                    <td>'.$other_cardiovascular->heart_d39m_total.'</td>
                    <td>'.$other_cardiovascular->heart_d39f_total.'</td>
                    <td>'.$other_cardiovascular->heart_d40m_total.'</td>
                    <td>'.$other_cardiovascular->heart_d40f_total.'</td>
                  </tr>
                  <tr>
                    <td>1.8</td>
                    <td class="left">Other cardiovascular</td>
                    <td>'.$other_cardiovascular->other_cardio_nc19m_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_nc19f_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_nc39m_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_nc39f_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_nc40m_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_nc40f_total.'</td>

                    <td>'.$other_cardiovascular->other_cardio_oc19m_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_oc19f_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_oc39m_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_oc39f_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_oc40m_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_oc40f_total.'</td>

                    <td>'.$other_cardiovascular->other_cardio_d19m_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_d19f_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_d39m_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_d39f_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_d40m_total.'</td>
                    <td>'.$other_cardiovascular->other_cardio_d40f_total.'</td>
                  </tr>
                  <tr>
                    <td>1.9</td>
                    <td class="left">Post heart surgery</td>
                    <td>'.$other_cardiovascular->post_heart_nc19m_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_nc19f_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_nc39m_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_nc39f_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_nc40m_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_nc40f_total.'</td>

                    <td>'.$other_cardiovascular->post_heart_oc19m_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_oc19f_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_oc39m_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_oc39f_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_oc40m_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_oc40f_total.'</td>

                    <td>'.$other_cardiovascular->post_heart_d19m_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_d19f_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_d39m_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_d39f_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_d40m_total.'</td>
                    <td>'.$other_cardiovascular->post_heart_d40f_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Kidney diseases</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>2.1</td>
                    <td class="left">Renal failure</td>
                    <td>'.$other_cardiovascular->renal_nc19m_total.'</td>
                    <td>'.$other_cardiovascular->renal_nc19f_total.'</td>
                    <td>'.$other_cardiovascular->renal_nc39m_total.'</td>
                    <td>'.$other_cardiovascular->renal_nc39f_total.'</td>
                    <td>'.$other_cardiovascular->renal_nc40m_total.'</td>
                    <td>'.$other_cardiovascular->renal_nc40f_total.'</td>

                    <td>'.$other_cardiovascular->renal_oc19m_total.'</td>
                    <td>'.$other_cardiovascular->renal_oc19f_total.'</td>
                    <td>'.$other_cardiovascular->renal_oc39m_total.'</td>
                    <td>'.$other_cardiovascular->renal_oc39f_total.'</td>
                    <td>'.$other_cardiovascular->renal_oc40m_total.'</td>
                    <td>'.$other_cardiovascular->renal_oc40f_total.'</td>

                    <td>'.$other_cardiovascular->renal_d19m_total.'</td>
                    <td>'.$other_cardiovascular->renal_d19f_total.'</td>
                    <td>'.$other_cardiovascular->renal_d39m_total.'</td>
                    <td>'.$other_cardiovascular->renal_d39f_total.'</td>
                    <td>'.$other_cardiovascular->renal_d40m_total.'</td>
                    <td>'.$other_cardiovascular->renal_d40f_total.'</td>
                  </tr>
                  <tr>
                    <td>2.2</td>
                    <td class="left">Other chonic kidney diseases</td>
                    <td>'.$other_cardiovascular->other_chronic_nc19m_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_nc19f_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_nc39m_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_nc39f_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_nc40m_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_nc40f_total.'</td>

                    <td>'.$other_cardiovascular->other_chronic_oc19m_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_oc19f_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_oc39m_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_oc39f_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_oc40m_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_oc40f_total.'</td>

                    <td>'.$other_cardiovascular->other_chronic_d19m_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_d19f_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_d39m_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_d39f_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_d40m_total.'</td>
                    <td>'.$other_cardiovascular->other_chronic_d40f_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Metabolic diseases</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.1</td>
                    <td class="left">Thyroid disease</td>
                    <td>'.$other_cardiovascular->thyroid_nc19m_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_nc19f_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_nc39m_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_nc39f_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_nc40m_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_nc40f_total.'</td>

                    <td>'.$other_cardiovascular->thyroid_oc19m_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_oc19f_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_oc39m_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_oc39f_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_oc40m_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_oc40f_total.'</td>

                    <td>'.$other_cardiovascular->thyroid_d19m_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_d19f_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_d39m_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_d39f_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_d40m_total.'</td>
                    <td>'.$other_cardiovascular->thyroid_d40f_total.'</td>
                  </tr>
                  <tr>
                    <td>3.2</td>
                    <td class="left">Other endocrine and metabolic diseases</td>
                    <td>'.$other_cardiovascular->other_endo_nc19m_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_nc19f_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_nc39m_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_nc39f_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_nc40m_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_nc40f_total.'</td>

                    <td>'.$other_cardiovascular->other_endo_oc19m_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_oc19f_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_oc39m_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_oc39f_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_oc40m_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_oc40f_total.'</td>

                    <td>'.$other_cardiovascular->other_endo_d19m_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_d19f_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_d39m_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_d39f_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_d40m_total.'</td>
                    <td>'.$other_cardiovascular->other_endo_d40f_total.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">V] Other cardiovascular and kindney diseases</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($injury->road_nc19m_total != null) {
            $output.='
          <h3 class="center">VI] Injuries</h3>
          <div class="row">
            <table id="A6" class="center">
              <thead>
                <tr>
                  <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th rowspan="3">Cause of injury<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="6">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="6">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
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
                  <td>1</td>
                  <td class="left">Road traffic injuries (including cycling)</td>
                  <td>'.$injury->road_nc19m_total.'</td>
                  <td>'.$injury->road_nc19f_total.'</td>
                  <td>'.$injury->road_nc39m_total.'</td>
                  <td>'.$injury->road_nc39f_total.'</td>
                  <td>'.$injury->road_nc40m_total.'</td>
                  <td>'.$injury->road_nc40f_total.'</td>
                  <td>'.$injury->road_d19m_total.'</td>
                  <td>'.$injury->road_d19f_total.'</td>
                  <td>'.$injury->road_d39m_total.'</td>
                  <td>'.$injury->road_d39f_total.'</td>
                  <td>'.$injury->road_d40m_total.'</td>
                  <td>'.$injury->road_d40f_total.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Self-harm</td>
                  <td>'.$injury->self_harm_nc19m_total.'</td>
                  <td>'.$injury->self_harm_nc19f_total.'</td>
                  <td>'.$injury->self_harm_nc39m_total.'</td>
                  <td>'.$injury->self_harm_nc39f_total.'</td>
                  <td>'.$injury->self_harm_nc40m_total.'</td>
                  <td>'.$injury->self_harm_nc40f_total.'</td>
                  <td>'.$injury->self_harm_d19m_total.'</td>
                  <td>'.$injury->self_harm_d19f_total.'</td>
                  <td>'.$injury->self_harm_d39m_total.'</td>
                  <td>'.$injury->self_harm_d39f_total.'</td>
                  <td>'.$injury->self_harm_d40m_total.'</td>
                  <td>'.$injury->self_harm_d40f_total.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Interpersonal violence</td>
                  <td>'.$injury->inter_violence_nc19m_total.'</td>
                  <td>'.$injury->inter_violence_nc19f_total.'</td>
                  <td>'.$injury->inter_violence_nc39m_total.'</td>
                  <td>'.$injury->inter_violence_nc39f_total.'</td>
                  <td>'.$injury->inter_violence_nc40m_total.'</td>
                  <td>'.$injury->inter_violence_nc40f_total.'</td>
                  <td>'.$injury->inter_violence_d19m_total.'</td>
                  <td>'.$injury->inter_violence_d19f_total.'</td>
                  <td>'.$injury->inter_violence_d39m_total.'</td>
                  <td>'.$injury->inter_violence_d39f_total.'</td>
                  <td>'.$injury->inter_violence_d40m_total.'</td>
                  <td>'.$injury->inter_violence_d40f_total.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Other intentional injuries</td>
                  <td>'.$injury->other_injury_nc19m_total.'</td>
                  <td>'.$injury->other_injury_nc19f_total.'</td>
                  <td>'.$injury->other_injury_nc39m_total.'</td>
                  <td>'.$injury->other_injury_nc39f_total.'</td>
                  <td>'.$injury->other_injury_nc40m_total.'</td>
                  <td>'.$injury->other_injury_nc40f_total.'</td>
                  <td>'.$injury->other_injury_d19m_total.'</td>
                  <td>'.$injury->other_injury_d19f_total.'</td>
                  <td>'.$injury->other_injury_d39m_total.'</td>
                  <td>'.$injury->other_injury_d39f_total.'</td>
                  <td>'.$injury->other_injury_d40m_total.'</td>
                  <td>'.$injury->other_injury_d40f_total.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">Falls</td>
                  <td>'.$injury->falls_nc19m_total.'</td>
                  <td>'.$injury->falls_nc19f_total.'</td>
                  <td>'.$injury->falls_nc39m_total.'</td>
                  <td>'.$injury->falls_nc39f_total.'</td>
                  <td>'.$injury->falls_nc40m_total.'</td>
                  <td>'.$injury->falls_nc40f_total.'</td>
                  <td>'.$injury->falls_d19m_total.'</td>
                  <td>'.$injury->falls_d19f_total.'</td>
                  <td>'.$injury->falls_d39m_total.'</td>
                  <td>'.$injury->falls_d39f_total.'</td>
                  <td>'.$injury->falls_d40m_total.'</td>
                  <td>'.$injury->falls_d40f_total.'</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left">Drowning</td>
                  <td>'.$injury->drowning_nc19m_total.'</td>
                  <td>'.$injury->drowning_nc19f_total.'</td>
                  <td>'.$injury->drowning_nc39m_total.'</td>
                  <td>'.$injury->drowning_nc39f_total.'</td>
                  <td>'.$injury->drowning_nc40m_total.'</td>
                  <td>'.$injury->drowning_nc40f_total.'</td>
                  <td>'.$injury->drowning_d19m_total.'</td>
                  <td>'.$injury->drowning_d19f_total.'</td>
                  <td>'.$injury->drowning_d39m_total.'</td>
                  <td>'.$injury->drowning_d39f_total.'</td>
                  <td>'.$injury->drowning_d40m_total.'</td>
                  <td>'.$injury->drowning_d40f_total.'</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left">Fire/burns (thermo, electrical, chemical)</td>
                  <td>'.$injury->fire_nc19m_total.'</td>
                  <td>'.$injury->fire_nc19f_total.'</td>
                  <td>'.$injury->fire_nc39m_total.'</td>
                  <td>'.$injury->fire_nc39f_total.'</td>
                  <td>'.$injury->fire_nc40m_total.'</td>
                  <td>'.$injury->fire_nc40f_total.'</td>
                  <td>'.$injury->fire_d19m_total.'</td>
                  <td>'.$injury->fire_d19f_total.'</td>
                  <td>'.$injury->fire_d39m_total.'</td>
                  <td>'.$injury->fire_d39f_total.'</td>
                  <td>'.$injury->fire_d40m_total.'</td>
                  <td>'.$injury->fire_d40f_total.'</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left">Animal contact</td>
                  <td>'.$injury->animal_nc19m_total.'</td>
                  <td>'.$injury->animal_nc19f_total.'</td>
                  <td>'.$injury->animal_nc39m_total.'</td>
                  <td>'.$injury->animal_nc39f_total.'</td>
                  <td>'.$injury->animal_nc40m_total.'</td>
                  <td>'.$injury->animal_nc40f_total.'</td>
                  <td>'.$injury->animal_d19m_total.'</td>
                  <td>'.$injury->animal_d19f_total.'</td>
                  <td>'.$injury->animal_d39m_total.'</td>
                  <td>'.$injury->animal_d39f_total.'</td>
                  <td>'.$injury->animal_d40m_total.'</td>
                  <td>'.$injury->animal_d40f_total.'</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left">Poisoning</td>
                  <td>'.$injury->poison_nc19m_total.'</td>
                  <td>'.$injury->poison_nc19f_total.'</td>
                  <td>'.$injury->poison_nc39m_total.'</td>
                  <td>'.$injury->poison_nc39f_total.'</td>
                  <td>'.$injury->poison_nc40m_total.'</td>
                  <td>'.$injury->poison_nc40f_total.'</td>
                  <td>'.$injury->poison_d19m_total.'</td>
                  <td>'.$injury->poison_d19f_total.'</td>
                  <td>'.$injury->poison_d39m_total.'</td>
                  <td>'.$injury->poison_d39f_total.'</td>
                  <td>'.$injury->poison_d40m_total.'</td>
                  <td>'.$injury->poison_d40f_total.'</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td class="left">Natural disasters</td>
                  <td>'.$injury->natural_disasters_nc19m_total.'</td>
                  <td>'.$injury->natural_disasters_nc19f_total.'</td>
                  <td>'.$injury->natural_disasters_nc39m_total.'</td>
                  <td>'.$injury->natural_disasters_nc39f_total.'</td>
                  <td>'.$injury->natural_disasters_nc40m_total.'</td>
                  <td>'.$injury->natural_disasters_nc40f_total.'</td>
                  <td>'.$injury->natural_disasters_d19m_total.'</td>
                  <td>'.$injury->natural_disasters_d19f_total.'</td>
                  <td>'.$injury->natural_disasters_d39m_total.'</td>
                  <td>'.$injury->natural_disasters_d39f_total.'</td>
                  <td>'.$injury->natural_disasters_d40m_total.'</td>
                  <td>'.$injury->natural_disasters_d40f_total.'</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td class="left">Adverse effects of medical treatment</td>
                  <td>'.$injury->ad_effects_nc19m_total.'</td>
                  <td>'.$injury->ad_effects_nc19f_total.'</td>
                  <td>'.$injury->ad_effects_nc39m_total.'</td>
                  <td>'.$injury->ad_effects_nc39f_total.'</td>
                  <td>'.$injury->ad_effects_nc40m_total.'</td>
                  <td>'.$injury->ad_effects_nc40f_total.'</td>
                  <td>'.$injury->ad_effects_d19m_total.'</td>
                  <td>'.$injury->ad_effects_d19f_total.'</td>
                  <td>'.$injury->ad_effects_d39m_total.'</td>
                  <td>'.$injury->ad_effects_d39f_total.'</td>
                  <td>'.$injury->ad_effects_d40m_total.'</td>
                  <td>'.$injury->ad_effects_d40f_total.'</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td class="left">Other unintentional injuries</td>
                  <td>'.$injury->other_unintent_nc19m_total.'</td>
                  <td>'.$injury->other_unintent_nc19f_total.'</td>
                  <td>'.$injury->other_unintent_nc39m_total.'</td>
                  <td>'.$injury->other_unintent_nc39f_total.'</td>
                  <td>'.$injury->other_unintent_nc40m_total.'</td>
                  <td>'.$injury->other_unintent_nc40f_total.'</td>
                  <td>'.$injury->other_unintent_d19m_total.'</td>
                  <td>'.$injury->other_unintent_d19f_total.'</td>
                  <td>'.$injury->other_unintent_d39m_total.'</td>
                  <td>'.$injury->other_unintent_d39f_total.'</td>
                  <td>'.$injury->other_unintent_d40m_total.'</td>
                  <td>'.$injury->other_unintent_d40f_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">VI] Injuries</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $palliative_care = $this->research_model->palliative_care2($date1, $date2);

        if ($palliative_care->oc_19m_total != null) {
            $output .= '
              <h3 class="center">VII] Palliative care</h3>
              <table id="A7" class="center">
					      <thead>
					        <tr>
					          <th rowspan="2">N°</th>
					          <th rowspan="2">Designation</th>
					          <th colspan="2">Age < 20</th>
					          <th colspan="2">Age > 20</th>
					        </tr>
					        <tr>
					          <th>M</th>
					          <th>F</th>
					          <th>M</th>
					          <th>F</th>
									</tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>1</td>
					          <td class="left">Total patients in palliative care at the beginning of the month (old cases)</td>
					          <td>'.$palliative_care->oc_19m_total.'</td>
					          <td>'.$palliative_care->oc_19f_total.'</td>
					          <td>'.$palliative_care->oc_20m_total.'</td>
					          <td>'.$palliative_care->oc_20f_total.'</td>
					        </tr>
	                <tr>
					          <td>2</td>
					          <td class="left">Patients in palliative care new cases this month (new cases)</td>
					          <td>'.$palliative_care->nc_19m_total.'</td>
					          <td>'.$palliative_care->nc_19f_total.'</td>
					          <td>'.$palliative_care->nc_20m_total.'</td>
					          <td>'.$palliative_care->nc_20f_total.'</td>
					        </tr>
	                <tr>
					          <td>3</td>
					          <td class="left">Patients seen by the palliative care team at the least four time this month</td>
					          <td>'.$palliative_care->time_19m_total.'</td>
					          <td>'.$palliative_care->time_19f_total.'</td>
					          <td>'.$palliative_care->time_20m_total.'</td>
					          <td>'.$palliative_care->time_20f_total.'</td>
					        </tr>
	                <tr>
					          <td>4</td>
					          <td class="left">Severe pain patients that receive morphine</td>
					          <td>'.$palliative_care->morphine_19m_total.'</td>
					          <td>'.$palliative_care->morphine_19f_total.'</td>
					          <td>'.$palliative_care->morphine_20m_total.'</td>
					          <td>'.$palliative_care->morphine_20f_total.'</td>
					        </tr>
	                <tr>
					          <td>5</td>
					          <td class="left">Died received end of life care and bereavement support</td>
					          <td>'.$palliative_care->end_life_19m_total.'</td>
					          <td>'.$palliative_care->end_life_19f_total.'</td>
					          <td>'.$palliative_care->end_life_20m_total.'</td>
					          <td>'.$palliative_care->end_life_20f_total.'</td>
					        </tr>
	                <tr>
					          <td>6</td>
					          <td class="left">Total death in palliative care</td>
					          <td>'.$palliative_care->death_19m_total.'</td>
					          <td>'.$palliative_care->death_19f_total.'</td>
					          <td>'.$palliative_care->death_20m_total.'</td>
					          <td>'.$palliative_care->death_20f_total.'</td>
					        </tr>
					      </tbody>
					    </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">VII] Palliative care</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $community_checkup = $this->research_model->community_checkup2($date1, $date2);

        if ($community_checkup->annual_checkup_total != null) {
            $output .= '
              <h3 class="center">VIII] Community checkup</h3>
              <table id="A8" class="center">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Designation</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Total number of people who consulted for annual medical checkup during the reportins period</td>
                    <td>'.$community_checkup->annual_checkup_total.'</td>
                  </tr>
                  <tr>
                    <td class="grey"></td>
                    <td class="left">Suspected positive at medical checkup who were referred for further diagnosis for the following diseases:</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Cardio vascular diseases</td>
                    <td>'.$community_checkup->cardio_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Chronic respiratory diseases</td>
                    <td>'.$community_checkup->respiratory_total.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Diabetes</td>
                    <td>'.$community_checkup->diabetes_total.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Renal disease</td>
                    <td>'.$community_checkup->renal_total.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Cancer</td>
                    <td>'.$community_checkup->cancer_total.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Disability</td>
                    <td>'.$community_checkup->disability_total.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">VIII] Community checkup</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $cancer_screening = $this->research_model->cancer_screening2($date1, $date2);

        if ($cancer_screening->cervical_total != null) {
            $output .= '
              <h3 class="center">IX] Cancer screening</h3>
              <table id="A9" class="center">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Designation</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Women screened for cervical cancer</td>
                    <td>'.$cancer_screening->cervical_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Women tested VIA positive during cervical cancer screening</td>
                    <td>'.$cancer_screening->cervical_viap_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Women tested VIA positive during cervical cancer screening and HIV positive</td>
                    <td>'.$cancer_screening->cervical_viap_hivp_total.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Women tested VIA positive and treated with cryotherapy</td>
                    <td>'.$cancer_screening->cryo_viap_total.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Women tested VIA positive and referred for treatment</td>
                    <td>'.$cancer_screening->treatement_viap_total.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Women screened for breast cancer</td>
                    <td>'.$cancer_screening->breast_screened_total.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Women referred for breast cancer</td>
                    <td>'.$cancer_screening->breast_referred_total.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">Women suspected for cervical cancer referred to other level</td>
                    <td>'.$cancer_screening->cervical_otherlevel_total.'</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Biopsies collected for all types of cancer</td>
                    <td>'.$cancer_screening->biopsies_total.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">IX] Cancer screening</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $hospitalization_a = $this->research_model->hospitalization_a2($date1, $date2);

        if ($hospitalization_a->im_beds_total != null) {
            $output .= '
              <h3 class="center">X] Hospitalizations</h3>
              <h4>A) Summary by service</h4>
              <table id="A10" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Internal medicine<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Pediatrics<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Surgery<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Gyn. Obst<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Nut. Rehab<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Intensive care<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Neonatology<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Emergency<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Number of beds</td>
                    <td>'.$hospitalization_a->im_beds_total.'</td>
                    <td>'.$hospitalization_a->p_beds_total.'</td>
                    <td>'.$hospitalization_a->s_beds_total.'</td>
                    <td>'.$hospitalization_a->go_beds_total.'</td>
                    <td>'.$hospitalization_a->nr_beds_total.'</td>
                    <td>'.$hospitalization_a->ic_beds_total.'</td>
                    <td>'.$hospitalization_a->n_beds_total.'</td>
                    <td>'.$hospitalization_a->e_beds_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Present at the beginning of the month</td>
                    <td>'.$hospitalization_a->im_present_start_total.'</td>
                    <td>'.$hospitalization_a->p_present_start_total.'</td>
                    <td>'.$hospitalization_a->s_present_start_total.'</td>
                    <td>'.$hospitalization_a->go_present_start_total.'</td>
                    <td>'.$hospitalization_a->nr_present_start_total.'</td>
                    <td>'.$hospitalization_a->ic_present_start_total.'</td>
                    <td>'.$hospitalization_a->n_present_start_total.'</td>
                    <td>'.$hospitalization_a->e_present_start_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Admissions during the month of wich</td>
                    <td>'.$hospitalization_a->im_admissions_total.'</td>
                    <td>'.$hospitalization_a->p_admissions_total.'</td>
                    <td>'.$hospitalization_a->s_admissions_total.'</td>
                    <td>'.$hospitalization_a->go_admissions_total.'</td>
                    <td>'.$hospitalization_a->nr_admissions_total.'</td>
                    <td>'.$hospitalization_a->ic_admissions_total.'</td>
                    <td>'.$hospitalization_a->n_admissions_total.'</td>
                    <td>'.$hospitalization_a->e_admissions_total.'</td>
                  </tr>
                  <tr>
                    <td>3.1</td>
                    <td class="left">Referred from the health center</td>
                    <td>'.$hospitalization_a->im_referred_total.'</td>
                    <td>'.$hospitalization_a->p_referred_total.'</td>
                    <td>'.$hospitalization_a->s_referred_total.'</td>
                    <td>'.$hospitalization_a->go_referred_total.'</td>
                    <td>'.$hospitalization_a->nr_referred_total.'</td>
                    <td>'.$hospitalization_a->ic_referred_total.'</td>
                    <td>'.$hospitalization_a->n_referred_total.'</td>
                    <td>'.$hospitalization_a->e_referred_total.'</td>
                  </tr>
                  <tr>
                    <td>3.2</td>
                    <td class="left">Non-referred patients</td>
                    <td>'.$hospitalization_a->im_no_referred_total.'</td>
                    <td>'.$hospitalization_a->p_no_referred_total.'</td>
                    <td>'.$hospitalization_a->s_no_referred_total.'</td>
                    <td>'.$hospitalization_a->go_no_referred_total.'</td>
                    <td>'.$hospitalization_a->nr_no_referred_total.'</td>
                    <td>'.$hospitalization_a->ic_no_referred_total.'</td>
                    <td>'.$hospitalization_a->n_no_referred_total.'</td>
                    <td>'.$hospitalization_a->e_no_referred_total.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Discharges during the month of which</td>
                    <td>'.$hospitalization_a->im_discharges_total.'</td>
                    <td>'.$hospitalization_a->p_discharges_total.'</td>
                    <td>'.$hospitalization_a->s_discharges_total.'</td>
                    <td>'.$hospitalization_a->go_discharges_total.'</td>
                    <td>'.$hospitalization_a->nr_discharges_total.'</td>
                    <td>'.$hospitalization_a->ic_discharges_total.'</td>
                    <td>'.$hospitalization_a->n_discharges_total.'</td>
                    <td>'.$hospitalization_a->e_discharges_total.'</td>
                  </tr>
                  <tr>
                    <td>4.1</td>
                    <td class="left">Authorized/Cured</td>
                    <td>'.$hospitalization_a->im_authorized_total.'</td>
                    <td>'.$hospitalization_a->p_authorized_total.'</td>
                    <td>'.$hospitalization_a->s_authorized_total.'</td>
                    <td>'.$hospitalization_a->go_authorized_total.'</td>
                    <td>'.$hospitalization_a->nr_authorized_total.'</td>
                    <td>'.$hospitalization_a->ic_authorized_total.'</td>
                    <td>'.$hospitalization_a->n_authorized_total.'</td>
                    <td>'.$hospitalization_a->e_authorized_total.'</td>
                  </tr>
                  <tr>
                    <td>4.2</td>
                    <td class="left">Abandoned</td>
                    <td>'.$hospitalization_a->im_abandoned_total.'</td>
                    <td>'.$hospitalization_a->p_abandoned_total.'</td>
                    <td>'.$hospitalization_a->s_abandoned_total.'</td>
                    <td>'.$hospitalization_a->go_abandoned_total.'</td>
                    <td>'.$hospitalization_a->nr_abandoned_total.'</td>
                    <td>'.$hospitalization_a->ic_abandoned_total.'</td>
                    <td>'.$hospitalization_a->n_abandoned_total.'</td>
                    <td>'.$hospitalization_a->e_abandoned_total.'</td>
                  </tr>
                  <tr>
                    <td>4.3</td>
                    <td class="left">Deaths</td>
                    <td>'.$hospitalization_a->im_deaths_total.'</td>
                    <td>'.$hospitalization_a->p_deaths_total.'</td>
                    <td>'.$hospitalization_a->s_deaths_total.'</td>
                    <td>'.$hospitalization_a->go_deaths_total.'</td>
                    <td>'.$hospitalization_a->nr_deaths_total.'</td>
                    <td>'.$hospitalization_a->ic_deaths_total.'</td>
                    <td>'.$hospitalization_a->n_deaths_total.'</td>
                    <td>'.$hospitalization_a->e_deaths_total.'</td>
                  </tr>
                  <tr>
                    <td>4.4</td>
                    <td class="left">Referred</td>
                    <td>'.$hospitalization_a->im_dis_referred_total.'</td>
                    <td>'.$hospitalization_a->p_dis_referred_total.'</td>
                    <td>'.$hospitalization_a->s_dis_referred_total.'</td>
                    <td>'.$hospitalization_a->go_dis_referred_total.'</td>
                    <td>'.$hospitalization_a->nr_dis_referred_total.'</td>
                    <td>'.$hospitalization_a->ic_dis_referred_total.'</td>
                    <td>'.$hospitalization_a->n_dis_referred_total.'</td>
                    <td>'.$hospitalization_a->e_dis_referred_total.'</td>
                  </tr>
                  <tr>
                    <td>4.5</td>
                    <td class="left">Counter-referred</td>
                    <td>'.$hospitalization_a->im_counter_total.'</td>
                    <td>'.$hospitalization_a->p_counter_total.'</td>
                    <td>'.$hospitalization_a->s_counter_total.'</td>
                    <td>'.$hospitalization_a->go_counter_total.'</td>
                    <td>'.$hospitalization_a->nr_counter_total.'</td>
                    <td>'.$hospitalization_a->ic_counter_total.'</td>
                    <td>'.$hospitalization_a->n_counter_total.'</td>
                    <td>'.$hospitalization_a->e_counter_total.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Present at the end of the month</td>
                    <td>'.$hospitalization_a->im_present_end_total.'</td>
                    <td>'.$hospitalization_a->p_present_end_total.'</td>
                    <td>'.$hospitalization_a->s_present_end_total.'</td>
                    <td>'.$hospitalization_a->go_present_end_total.'</td>
                    <td>'.$hospitalization_a->nr_present_end_total.'</td>
                    <td>'.$hospitalization_a->ic_present_end_total.'</td>
                    <td>'.$hospitalization_a->n_present_end_total.'</td>
                    <td>'.$hospitalization_a->e_present_end_total.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Total hospitalization days for discharged patients</td>
                    <td>'.$hospitalization_a->im_total_total.'</td>
                    <td>'.$hospitalization_a->p_total_total.'</td>
                    <td>'.$hospitalization_a->s_total_total.'</td>
                    <td>'.$hospitalization_a->go_total_total.'</td>
                    <td>'.$hospitalization_a->nr_total_total.'</td>
                    <td>'.$hospitalization_a->ic_total_total.'</td>
                    <td>'.$hospitalization_a->n_total_total.'</td>
                    <td>'.$hospitalization_a->e_total_total.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Actual hospitalization days</td>
                    <td>'.$hospitalization_a->im_actual_total.'</td>
                    <td>'.$hospitalization_a->p_actual_total.'</td>
                    <td>'.$hospitalization_a->s_actual_total.'</td>
                    <td>'.$hospitalization_a->go_actual_total.'</td>
                    <td>'.$hospitalization_a->nr_actual_total.'</td>
                    <td>'.$hospitalization_a->ic_actual_total.'</td>
                    <td>'.$hospitalization_a->n_actual_total.'</td>
                    <td>'.$hospitalization_a->e_actual_total.'</td>
                  </tr>
                </tbody>
              </table>';
        } else {
            $output .= '
              <h3 class="center">X] Hospitalizations</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $hospitalization_bcde = $this->research_model->hospitalization_bcde2($date1, $date2);

        if ($hospitalization_bcde->hosp_1m_total != null) {
            $output.='
              <br>
              <h4>B) Summary by age</h4>
              <table id="B10" class="center">
                <thead>
                  <tr>
                    <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 1<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 1 to 4<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th>M</th>
                    <th>F</th>
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
                    <td class="center">1</td>
                    <td class="left">Hospitalized</td>
                    <td>'.$hospitalization_bcde->hosp_1m_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_1f_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_4m_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_4f_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_19m_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_19f_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_20m_total.'</td>
                    <td>'.$hospitalization_bcde->hosp_20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">2</td>
                    <td class="left">Deaths</td>
                    <td>'.$hospitalization_bcde->deaths_1m_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_1f_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_4m_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_4f_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_19m_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_19f_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_20m_total.'</td>
                    <td>'.$hospitalization_bcde->deaths_20f_total.'</td>
                  </tr>
                </tbody>
              </table>
          <br>
          <div class="row">
            <div class="col-xs-6">
              <h4>C) Payment</h4>
              <table id="C10" class="center">
              <thead>
                <tr>
                  <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="left">Insured discharges(mutuelle, etc)</td>
                  <td>'.$hospitalization_bcde->insured_dis_total.'</td>
                </tr>
                <tr>
                  <td class="left">Non-paying discharges</td>
                  <td>'.$hospitalization_bcde->no_paying_dis_total.'</td>
                </tr>
                <tr>
                  <td class="left">Non-paying indigents discharged</td>
                  <td>'.$hospitalization_bcde->no_paying_ind_total.'</td>
                </tr>
              </tbody>
            </table>
            </div>
            <div class="col-xs-6">
              <h4>D) Special Causes of Admissions and Deaths</h4>
              <table id="D10" class="center">
              <thead>
                <tr>
                  <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Admissions<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="left">Road traffic accidents</td>
                  <td>'.$hospitalization_bcde->road_acc_ad_total.'</td>
                  <td>'.$hospitalization_bcde->road_acc_deaths_total.'</td>
                </tr>
                <tr>
                  <td class="left">Natural or man-made disasters (epidemic, earthquake, etc)</td>
                  <td>'.$hospitalization_bcde->natural_disa_ad_total.'</td>
                  <td>'.$hospitalization_bcde->natural_disa_deaths_total.'</td>
                </tr>
                <tr>
                  <td class="left">Workplace injuries</td>
                  <td>'.$hospitalization_bcde->work_inj_ad_total.'</td>
                  <td>'.$hospitalization_bcde->work_inj_deaths_total.'</td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
          <br>
          <h4>E) Causes of hospitalization and death at discharge</h4>
          <table id="E10" class="center">
                <thead>
                  <tr>
                    <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="6">Hospitalization<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="6">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
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
                    <td class="center">1</td>
                    <td class="left">Malaria simple</td>
                    <td>'.$hospitalization_bcde->malaria_sim_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sim_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sim_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sim_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sim_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sim_hos20f_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td class="center">2</td>
                    <td class="left">Malaria severe</td>
                    <td>'.$hospitalization_bcde->malaria_sev_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->malaria_sev_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">3</td>
                    <td class="left">Borreliosis</td>
                    <td>'.$hospitalization_bcde->borreliosis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->borreliosis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">4</td>
                    <td class="left">Pneumonia simple</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sim_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">5</td>
                    <td class="left">Pneumonia severe</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->pneumonia_sev_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">6</td>
                    <td class="left">Pleurisy (non-tuberculosis)</td>
                    <td>'.$hospitalization_bcde->pleurisy_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->pleurisy_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">7</td>
                    <td class="left">Respratory infection acute (ARI) Other</td>
                    <td>'.$hospitalization_bcde->ari_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->ari_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->ari_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->ari_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->ari_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->ari_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->ari_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->ari_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->ari_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->ari_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->ari_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->ari_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">8</td>
                    <td class="left">Diarrhea bloody (dysentery)</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_bloody_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">9</td>
                    <td class="left">Diarrhea with dehydration</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_dehy_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">10</td>
                    <td class="left">Diarrhea no dehydration</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_no_dehy_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">11</td>
                    <td class="left">Cholera</td>
                    <td>'.$hospitalization_bcde->cholera_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->cholera_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">12</td>
                    <td class="left">Typhoid fever (salmonellosis)</td>
                    <td>'.$hospitalization_bcde->typhoid_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->typhoid_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">13</td>
                    <td class="left">Meningitis</td>
                    <td>'.$hospitalization_bcde->meningitis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->meningitis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">14</td>
                    <td class="left">Measles</td>
                    <td>'.$hospitalization_bcde->measles_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->measles_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->measles_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->measles_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->measles_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->measles_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->measles_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->measles_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->measles_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->measles_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->measles_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->measles_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">15</td>
                    <td class="left">TB bacteriologically confirmed</td>
                    <td>'.$hospitalization_bcde->tb_conf_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_conf_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">16</td>
                    <td class="left">TB clinically diagnosed</td>
                    <td>'.$hospitalization_bcde->tb_diag_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->tb_diag_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">17</td>
                    <td class="left">Fever chronic (>1 month)</td>
                    <td>'.$hospitalization_bcde->fever_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->fever_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->fever_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->fever_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->fever_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->fever_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->fever_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->fever_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->fever_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->fever_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->fever_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->fever_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">18</td>
                    <td class="left">Encephalitis</td>
                    <td>'.$hospitalization_bcde->encephalitis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->encephalitis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">19</td>
                    <td class="left">Meningitis cryptococal</td>
                    <td>'.$hospitalization_bcde->mening_crypto_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->mening_crypto_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">20</td>
                    <td class="left">Skin infections</td>
                    <td>'.$hospitalization_bcde->skin_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->skin_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->skin_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->skin_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->skin_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->skin_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->skin_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->skin_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->skin_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->skin_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->skin_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->skin_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">21</td>
                    <td class="left">Diarrhea chronic opportunistic infection</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->diarr_chronic_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">22</td>
                    <td class="left">HIV oppotunistic infections Other</td>
                    <td>'.$hospitalization_bcde->hiv_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->hiv_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">23</td>
                    <td class="left">Trauma head</td>
                    <td>'.$hospitalization_bcde->trauma_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">24</td>
                    <td class="left">Ruptured spleen</td>
                    <td>'.$hospitalization_bcde->spleen_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->spleen_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">25</td>
                    <td class="left">Fractures, open</td>
                    <td>'.$hospitalization_bcde->frac_open_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_open_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">26</td>
                    <td class="left">Fractures, internal</td>
                    <td>'.$hospitalization_bcde->frac_int_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->frac_int_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">27</td>
                    <td class="left">Trauma other</td>
                    <td>'.$hospitalization_bcde->trauma_other_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->trauma_other_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">28</td>
                    <td class="left">Burns</td>
                    <td>'.$hospitalization_bcde->burns_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->burns_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->burns_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->burns_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->burns_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->burns_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->burns_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->burns_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->burns_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->burns_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->burns_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->burns_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">29</td>
                    <td class="left">Hepatitis</td>
                    <td>'.$hospitalization_bcde->hepatitis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->hepatitis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">30</td>
                    <td class="left">Cirrhosis of the liver</td>
                    <td>'.$hospitalization_bcde->cirrhosis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->cirrhosis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">31</td>
                    <td class="left">Digestive tract hemorrhages</td>
                    <td>'.$hospitalization_bcde->digestive_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->digestive_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">32</td>
                    <td class="left">Gastritis</td>
                    <td>'.$hospitalization_bcde->gastritis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->gastritis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">33</td>
                    <td class="left">Ulcer, gastro-duodenal</td>
                    <td>'.$hospitalization_bcde->ulcer_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->ulcer_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">34</td>
                    <td class="left">Appendicitis</td>
                    <td>'.$hospitalization_bcde->appendi_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->appendi_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">35</td>
                    <td class="left">Hernia</td>
                    <td>'.$hospitalization_bcde->hernia_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->hernia_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">36</td>
                    <td class="left">Peritonitis (non-tuberculosis)</td>
                    <td>'.$hospitalization_bcde->peritonitis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->peritonitis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">37</td>
                    <td class="left">Intestinal occlusion</td>
                    <td>'.$hospitalization_bcde->intestinal_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->intestinal_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">38</td>
                    <td class="left">Urinary tract infections</td>
                    <td>'.$hospitalization_bcde->urinary_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->urinary_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">39</td>
                    <td class="left">Bone infections (including osteomyelitis)</td>
                    <td>'.$hospitalization_bcde->bone_inf_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_inf_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">40</td>
                    <td class="left">Bone and joint disease other</td>
                    <td>'.$hospitalization_bcde->bone_other_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->bone_other_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">41</td>
                    <td class="left">Acute flaccid paralysis (polio)</td>
                    <td>'.$hospitalization_bcde->acute_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->acute_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->acute_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->acute_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->acute_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->acute_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->acute_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->acute_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->acute_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->acute_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->acute_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->acute_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">42</td>
                    <td class="left">Gynecological problems</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$hospitalization_bcde->gyneco_hos19f_total.'</td>
                    <td class="grey"></td>
                    <td>'.$hospitalization_bcde->gyneco_hos20f_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$hospitalization_bcde->gyneco_deaths19f_total.'</td>
                    <td class="grey"></td>
                    <td>'.$hospitalization_bcde->gyneco_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">43</td>
                    <td class="left">Mastoditis</td>
                    <td>'.$hospitalization_bcde->mastoditis_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->mastoditis_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">44</td>
                    <td class="left">Tetanus</td>
                    <td>'.$hospitalization_bcde->tetanus_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->tetanus_deaths20f_total.'</td>
                  </tr>
                  <tr>
                    <td class="center">45</td>
                    <td class="left">Cancer all</td>
                    <td>'.$hospitalization_bcde->cancer_hos5m_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_hos5f_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_hos19m_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_hos19f_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_hos20m_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_hos20f_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_deaths5m_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_deaths5f_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_deaths19m_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_deaths19f_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_deaths20m_total.'</td>
                    <td>'.$hospitalization_bcde->cancer_deaths20f_total.'</td>
                  </tr>
                </tbody>
              </table>
          <br>';
        }



        if ($GBV->sexual_violence_5m_total != null) {
            $output.='
          <br>
          <h3 class="center">XI] Gender based violence</h3>
          <div class="row">
            <table id="A11" class="center">
              <thead>
                <tr>
                  <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 5 to 9<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 10 to 18<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age 19 to 24<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age > 25<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>M</th>
                  <th>F</th>
                  <th>M</th>
                  <th>F</th>
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
                  <td class="center">1</td>
                  <td class="left">GBV victims with symptoms of sexual violence (new cases)</td>
                  <td>'.$GBV->sexual_violence_5m_total.'</td>
                  <td>'.$GBV->sexual_violence_5f_total.'</td>
                  <td>'.$GBV->sexual_violence_9m_total.'</td>
                  <td>'.$GBV->sexual_violence_9f_total.'</td>
                  <td>'.$GBV->sexual_violence_18m_total.'</td>
                  <td>'.$GBV->sexual_violence_18f_total.'</td>
                  <td>'.$GBV->sexual_violence_24m_total.'</td>
                  <td>'.$GBV->sexual_violence_24f_total.'</td>
                  <td>'.$GBV->sexual_violence_25m_total.'</td>
                  <td>'.$GBV->sexual_violence_25f_total.'</td>
                </tr>
                <tr>
                  <td class="center">2</td>
                  <td class="left">GBV victims with symptoms of physical violence (new cases)</td>
                  <td>'.$GBV->physical_violence_5m_total.'</td>
                  <td>'.$GBV->physical_violence_5f_total.'</td>
                  <td>'.$GBV->physical_violence_9m_total.'</td>
                  <td>'.$GBV->physical_violence_9f_total.'</td>
                  <td>'.$GBV->physical_violence_18m_total.'</td>
                  <td>'.$GBV->physical_violence_18f_total.'</td>
                  <td>'.$GBV->physical_violence_24m_total.'</td>
                  <td>'.$GBV->physical_violence_24f_total.'</td>
                  <td>'.$GBV->physical_violence_25m_total.'</td>
                  <td>'.$GBV->physical_violence_25f_total.'</td>
                </tr>
                <tr>
                  <td class="center">3</td>
                  <td class="left">GBV victims with symptoms of emotional violence (new cases)</td>
                  <td>'.$GBV->emotional_violence_5m_total.'</td>
                  <td>'.$GBV->emotional_violence_5f_total.'</td>
                  <td>'.$GBV->emotional_violence_9m_total.'</td>
                  <td>'.$GBV->emotional_violence_9f_total.'</td>
                  <td>'.$GBV->emotional_violence_18m_total.'</td>
                  <td>'.$GBV->emotional_violence_18f_total.'</td>
                  <td>'.$GBV->emotional_violence_24m_total.'</td>
                  <td>'.$GBV->emotional_violence_24f_total.'</td>
                  <td>'.$GBV->emotional_violence_25m_total.'</td>
                  <td>'.$GBV->emotional_violence_25f_total.'</td>
                </tr>
                <tr>
                  <td class="center">4</td>
                  <td class="left">GBV victims with symptoms of economic violence (new cases)</td>
                  <td>'.$GBV->economic_violence_5m_total.'</td>
                  <td>'.$GBV->economic_violence_5f_total.'</td>
                  <td>'.$GBV->economic_violence_9m_total.'</td>
                  <td>'.$GBV->economic_violence_9f_total.'</td>
                  <td>'.$GBV->economic_violence_18m_total.'</td>
                  <td>'.$GBV->economic_violence_18f_total.'</td>
                  <td>'.$GBV->economic_violence_24m_total.'</td>
                  <td>'.$GBV->economic_violence_24f_total.'</td>
                  <td>'.$GBV->economic_violence_25m_total.'</td>
                  <td>'.$GBV->economic_violence_25f_total.'</td>
                </tr>
                <tr>
                  <td class="center">5</td>
                  <td class="left">GBV victims referred for care to higher level health facility</td>
                  <td>'.$GBV->refered_higher_level_5m_total.'</td>
                  <td>'.$GBV->refered_higher_level_5f_total.'</td>
                  <td>'.$GBV->refered_higher_level_9m_total.'</td>
                  <td>'.$GBV->refered_higher_level_9f_total.'</td>
                  <td>'.$GBV->refered_higher_level_18m_total.'</td>
                  <td>'.$GBV->refered_higher_level_18f_total.'</td>
                  <td>'.$GBV->refered_higher_level_24m_total.'</td>
                  <td>'.$GBV->refered_higher_level_24f_total.'</td>
                  <td>'.$GBV->refered_higher_level_25m_total.'</td>
                  <td>'.$GBV->refered_higher_level_25f_total.'</td>
                </tr>
                <tr>
                  <td class="center">6</td>
                  <td class="left">GBV victims referred to this facility by police</td>
                  <td>'.$GBV->refered_police_5m_total.'</td>
                  <td>'.$GBV->refered_police_5f_total.'</td>
                  <td>'.$GBV->refered_police_9m_total.'</td>
                  <td>'.$GBV->refered_police_9f_total.'</td>
                  <td>'.$GBV->refered_police_18m_total.'</td>
                  <td>'.$GBV->refered_police_18f_total.'</td>
                  <td>'.$GBV->refered_police_24m_total.'</td>
                  <td>'.$GBV->refered_police_24f_total.'</td>
                  <td>'.$GBV->refered_police_25m_total.'</td>
                  <td>'.$GBV->refered_police_25f_total.'</td>
                </tr>
                <tr>
                  <td class="center">7</td>
                  <td class="left">GBV victims referred to this facility by community health workers</td>
                  <td>'.$GBV->refered_community_5m_total.'</td>
                  <td>'.$GBV->refered_community_5f_total.'</td>
                  <td>'.$GBV->refered_community_9m_total.'</td>
                  <td>'.$GBV->refered_community_9f_total.'</td>
                  <td>'.$GBV->refered_community_18m_total.'</td>
                  <td>'.$GBV->refered_community_18f_total.'</td>
                  <td>'.$GBV->refered_community_24m_total.'</td>
                  <td>'.$GBV->refered_community_24f_total.'</td>
                  <td>'.$GBV->refered_community_25m_total.'</td>
                  <td>'.$GBV->refered_community_25f_total.'</td>
                </tr>
                <tr>
                  <td class="center">8</td>
                  <td class="left">GBV victims HIV + sero-conversion 3 months after exposure</td>
                  <td>'.$GBV->hiv_5m_total.'</td>
                  <td>'.$GBV->hiv_5f_total.'</td>
                  <td>'.$GBV->hiv_9m_total.'</td>
                  <td>'.$GBV->hiv_9f_total.'</td>
                  <td>'.$GBV->hiv_18m_total.'</td>
                  <td>'.$GBV->hiv_18f_total.'</td>
                  <td>'.$GBV->hiv_24m_total.'</td>
                  <td>'.$GBV->hiv_24f_total.'</td>
                  <td>'.$GBV->hiv_25m_total.'</td>
                  <td>'.$GBV->hiv_25f_total.'</td>
                </tr>
                <tr>
                  <td class="center">9</td>
                  <td class="left">GBV victims with irreversible disabilities due to GBV</td>
                  <td>'.$GBV->disabilities_5m_total.'</td>
                  <td>'.$GBV->disabilities_5f_total.'</td>
                  <td>'.$GBV->disabilities_9m_total.'</td>
                  <td>'.$GBV->disabilities_9f_total.'</td>
                  <td>'.$GBV->disabilities_18m_total.'</td>
                  <td>'.$GBV->disabilities_18f_total.'</td>
                  <td>'.$GBV->disabilities_24m_total.'</td>
                  <td>'.$GBV->disabilities_24f_total.'</td>
                  <td>'.$GBV->disabilities_25m_total.'</td>
                  <td>'.$GBV->disabilities_25f_total.'</td>
                </tr>
                <tr>
                  <td class="center">10</td>
                  <td class="left">GBV victims deaths</td>
                  <td>'.$GBV->deaths_5m_total.'</td>
                  <td>'.$GBV->deaths_5f_total.'</td>
                  <td>'.$GBV->deaths_9m_total.'</td>
                  <td>'.$GBV->deaths_9f_total.'</td>
                  <td>'.$GBV->deaths_18m_total.'</td>
                  <td>'.$GBV->deaths_18f_total.'</td>
                  <td>'.$GBV->deaths_24m_total.'</td>
                  <td>'.$GBV->deaths_24f_total.'</td>
                  <td>'.$GBV->deaths_25m_total.'</td>
                  <td>'.$GBV->deaths_25f_total.'</td>
                </tr>
                <tr>
                  <td class="center">11</td>
                  <td class="left">GBV victims pregnant 4 weeks after exposure</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td>'.$GBV->pregnant_9f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$GBV->pregnant_18f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$GBV->pregnant_24f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$GBV->pregnant_25f_total.'</td>
                </tr>
                <tr>
                  <td class="center">12</td>
                  <td class="left">GBV victims received emergency contraception within 72h</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td>'.$GBV->contraception_9f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$GBV->contraception_18f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$GBV->contraception_24f_total.'</td>
                  <td class="grey"></td>
                  <td>'.$GBV->contraception_25f_total.'</td>
                </tr>
                <tr>
                  <td class="center">13</td>
                  <td class="left">GBV victims received post exposure HIV prophylaxis within 48h</td>
                  <td>'.$GBV->exposure_hiv_5m_total.'</td>
                  <td>'.$GBV->exposure_hiv_5f_total.'</td>
                  <td>'.$GBV->exposure_hiv_9m_total.'</td>
                  <td>'.$GBV->exposure_hiv_9f_total.'</td>
                  <td>'.$GBV->exposure_hiv_18m_total.'</td>
                  <td>'.$GBV->exposure_hiv_18f_total.'</td>
                  <td>'.$GBV->exposure_hiv_24m_total.'</td>
                  <td>'.$GBV->exposure_hiv_24f_total.'</td>
                  <td>'.$GBV->exposure_hiv_25m_total.'</td>
                  <td>'.$GBV->exposure_hiv_25f_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XI] Gender based violence</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $surgery=$this->research_model->surgery2($date1, $date2);

        if ($surgery->appendice_urg_total != null) {
            $output.='
          <br>
          <h3 class="center">XII] Surgery</h3>
          <div class="row">
            <table id="A12" class="center">
              <thead>
                <tr>
                  <th>N°</th>
                  <th>Service</th>
                  <th>Type of surgical intervention</th>
                  <th>Urgent interventions</th>
                  <th>Planned interventions</th>
                  <th>Post-surgical infection total</th>
                </tr>
              </thead>
              <tbody class="center">
                <tr>
                  <td rowspan="6">1</td>
                  <td rowspan="6">General Surgery</td>
                  <td class="left">1. Appendicectomy</td>
                  <td>'.$surgery->appendice_urg_total.'</td>
                  <td>'.$surgery->appendice_plan_total.'</td>
                  <td rowspan="6">'.$surgery->gs_total_total.'</td>
                </tr>
                <tr>
                  <td class="left">2. Hernioraphy</td>
                  <td>'.$surgery->hernioraphy_urg_total.'</td>
                  <td>'.$surgery->hernioraphy_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3. Laparotomy</td>
                  <td>'.$surgery->laparo_urg_total.'</td>
                  <td>'.$surgery->laparo_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">4. Thyroidectomy</td>
                  <td>'.$surgery->tyroide_urg_total.'</td>
                  <td>'.$surgery->tyroide_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">5. Adenomectomy</td>
                  <td>'.$surgery->adeno_urg_total.'</td>
                  <td>'.$surgery->adeno_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">6. General Surgery Other</td>
                  <td>'.$surgery->gs_other_urg_total.'</td>
                  <td>'.$surgery->gs_other_plan_total.'</td>
                </tr>
                <tr>
                  <td rowspan="12">2</td>
                  <td rowspan="12">Gyneco-Obstetrical</td>
                  <td class="left">1. Cesarean Section</td>
                  <td>'.$surgery->cesarean_urg_total.'</td>
                  <td>'.$surgery->cesarean_plan_total.'</td>
                  <td rowspan="12">'.$surgery->go_total_total.'</td>
                </tr>
                <tr>
                  <td class="left">2.1 Gynecological Hysterectomy</td>
                  <td>'.$surgery->gyneco_urg_total.'</td>
                  <td>'.$surgery->gyneco_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">2.2 Obstetrical Hysterectomy</td>
                  <td>'.$surgery->obste_urg_total.'</td>
                  <td>'.$surgery->obste_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3.1 Laparotomy for Extra Uterine Pregnancy</td>
                  <td>'.$surgery->laparo_preg_urg_total.'</td>
                  <td>'.$surgery->laparo_preg_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3.2 Laparotomy for Uterine Rupture</td>
                  <td>'.$surgery->laparo_rupt_urg_total.'</td>
                  <td>'.$surgery->laparo_rupt_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3.3 Laparotomy for Peritonitis</td>
                  <td>'.$surgery->laparo_perit_urg_total.'</td>
                  <td>'.$surgery->laparo_perit_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3.4. Laparatomy for Myomectomy</td>
                  <td>'.$surgery->laparo_myomec_urg_total.'</td>
                  <td>'.$surgery->laparo_myomec_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">4.1 Vesico Vaginal Fistula Repaired</td>
                  <td class="grey"></td>
                  <td>'.$surgery->vesico_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">4.2 Recto Vaginal Fistula Repaired</td>
                  <td class="grey"></td>
                  <td>'.$surgery->recto_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">4.3 Ureteric Vaginal Fistula Repaired</td>
                  <td class="grey"></td>
                  <td>'.$surgery->ureteric_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">5. Biopsy Curettage</td>
                  <td class="grey"></td>
                  <td>'.$surgery->biopsy_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">6. Gyneco-Obstetrical Surgery Other</td>
                  <td>'.$surgery->go_other_urg_total.'</td>
                  <td>'.$surgery->go_other_plan_total.'</td>
                </tr>
                <tr>
                  <td rowspan="4">3</td>
                  <td rowspan="4">Orthopedic</td>
                  <td class="left">1. Amputations</td>
                  <td>'.$surgery->amputations_urg_total.'</td>
                  <td>'.$surgery->amputations_plan_total.'</td>
                  <td rowspan="4">'.$surgery->ortho_total_total.'</td>
                </tr>
                <tr>
                  <td class="left">2. Osteosynthesis</td>
                  <td>'.$surgery->osteo_urg_total.'</td>
                  <td>'.$surgery->osteo_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3. Fracture Without Implant</td>
                  <td>'.$surgery->fracture_urg_total.'</td>
                  <td>'.$surgery->fracture_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">4. Orthopedic Surgery Other</td>
                  <td>'.$surgery->ortho_other_urg_total.'</td>
                  <td>'.$surgery->ortho_other_plan_total.'</td>
                </tr>
                <tr>
                  <td rowspan="5">4</td>
                  <td rowspan="5">Ophthalmologic</td>
                  <td class="left">1. Glaucoma</td>
                  <td>'.$surgery->glaucoma_urg_total.'</td>
                  <td>'.$surgery->glaucoma_plan_total.'</td>
                  <td rowspan="5">'.$surgery->oph_total_total.'</td>
                </tr>
                <tr>
                  <td class="left">2. Trachoma</td>
                  <td>'.$surgery->trachoma_urg_total.'</td>
                  <td>'.$surgery->trachoma_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">3. Cataract</td>
                  <td>'.$surgery->cataract_urg_total.'</td>
                  <td>'.$surgery->cataract_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">4. Trauma</td>
                  <td>'.$surgery->trauma_urg_total.'</td>
                  <td>'.$surgery->trauma_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">5. Ophthalmological Surgery Other</td>
                  <td>'.$surgery->oph_other_urg_total.'</td>
                  <td>'.$surgery->oph_other_plan_total.'</td>
                </tr>
                <tr>
                  <td rowspan="2">5</td>
                  <td rowspan="2">Plastic Surgery</td>
                  <td class="left">1. Cleft Palate, Cleft Lip</td>
                  <td>'.$surgery->cleft_urg_total.'</td>
                  <td>'.$surgery->cleft_plan_total.'</td>
                  <td rowspan="2">'.$surgery->plastic_total_total.'</td>
                </tr>
                <tr>
                  <td class="left">2. Other Plastic Surgery</td>
                  <td>'.$surgery->plastic_other_urg_total.'</td>
                  <td>'.$surgery->plastic_other_plan_total.'</td>
                </tr>
                <tr>
                  <td rowspan="3">6</td>
                  <td colspan="2">SURGICAL INTERVENTIONS TOTAL</td>
                  <td>'.$surgery->total_urg_total.'</td>
                  <td>'.$surgery->total_plan_total.'</td>
                  <td rowspan="3" class="grey"></td>
                </tr>
                <tr>
                  <td rowspan="2">Of Which</td>
                  <td class="left">1. Major Surgery</td>
                  <td>'.$surgery->major_urg_total.'</td>
                  <td>'.$surgery->major_plan_total.'</td>
                </tr>
                <tr>
                  <td class="left">2. Minor Surgery</td>
                  <td>'.$surgery->minor_urg_total.'</td>
                  <td>'.$surgery->minor_plan_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XII] Surgery</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $anesthesia=$this->research_model->anesthesia2($date1, $date2);

        if ($anesthesia->general_total != null) {
            $output.='
          <div class="col-xs-6">
            <h3 class="center">XIII] Anesthesia</h3>
            <div class="row">
              <table id="A13" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">General anesthesia</td>
                    <td>'.$anesthesia->general_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Regional anesthesia</td>
                    <td>'.$anesthesia->regional_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Local anesthesia</td>
                    <td>'.$anesthesia->local_total.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Other types of anesthesia</td>
                    <td>'.$anesthesia->other_type_total.'</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>';
        } else {
            $output .= '
            <div class="col-xs-6">
              <h3 class="center">XIII] Anesthesia</h3>
              <h2>This part has not been filled yet</h2>
              <br>
            </div>';
        }



        if ($physiotherapy->physical_therapy_total != null) {
            $output .= '
            <div class="col-xs-6">
              <h3 class="center">XIV] Physiotherapy</h3>
              <table id="A14" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Outpatients<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Hospitalized<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Physical therapy</td>
                    <td>'.$physiotherapy->physical_therapy_total.'</td>
                    <td>'.$physiotherapy->physical_therapy_hos_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Audiology</td>
                    <td>'.$physiotherapy->audiology_total.'</td>
                    <td>'.$physiotherapy->audiology_hos_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Speech therapy</td>
                    <td>'.$physiotherapy->speech_therapy_total.'</td>
                    <td>'.$physiotherapy->speech_therapy_hos_total.'</td>
                  </tr>
                </tbody>
              </table>
              <br>
            </div>';
        } else {
            $output .= '
            <div class="col-xs-6">
              <h3 class="center">XIV] Physiotherapy</h3>
              <h2>This part has not been filled yet</h2>
              <br>
            </div>';
        }

        $obstetrical_a=$this->research_model->obstetrical_a2($date1, $date2);

        if ($obstetrical_a->complications_opd19_total != null) {
            $output.='
          <br>
          <h3 class="center">XV] Obstetrical complications</h3>
          <br>
          <h4>A) Cases and Deaths</h4>
          <div class="row">
            <table id="A15" class="center">
              <thead>
                <tr>
                  <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">OPD NC<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Hospitalized<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>Age < 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age ≥ 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age < 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age ≥ 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age < 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age ≥ 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="left">Complications of abortions(spontaneous and induced)</td>
                  <td>'.$obstetrical_a->complications_opd19_total.'</td>
                  <td>'.$obstetrical_a->complications_opd20_total.'</td>
                  <td>'.$obstetrical_a->complications_hos19_total.'</td>
                  <td>'.$obstetrical_a->complications_hos20_total.'</td>
                  <td>'.$obstetrical_a->complications_deaths19_total.'</td>
                  <td>'.$obstetrical_a->complications_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Ectopic pregnancy</td>
                  <td>'.$obstetrical_a->ectopic_opd19_total.'</td>
                  <td>'.$obstetrical_a->ectopic_opd20_total.'</td>
                  <td>'.$obstetrical_a->ectopic_hos19_total.'</td>
                  <td>'.$obstetrical_a->ectopic_hos20_total.'</td>
                  <td>'.$obstetrical_a->ectopic_deaths19_total.'</td>
                  <td>'.$obstetrical_a->ectopic_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Antepartum hemorrhage (APH)</td>
                  <td>'.$obstetrical_a->antepartum_opd19_total.'</td>
                  <td>'.$obstetrical_a->antepartum_opd20_total.'</td>
                  <td>'.$obstetrical_a->antepartum_hos19_total.'</td>
                  <td>'.$obstetrical_a->antepartum_hos20_total.'</td>
                  <td>'.$obstetrical_a->antepartum_deaths19_total.'</td>
                  <td>'.$obstetrical_a->antepartum_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Post-partum hemorrhage (PPH)</td>
                  <td>'.$obstetrical_a->postpartum_opd19_total.'</td>
                  <td>'.$obstetrical_a->postpartum_opd20_total.'</td>
                  <td>'.$obstetrical_a->postpartum_hos19_total.'</td>
                  <td>'.$obstetrical_a->postpartum_hos20_total.'</td>
                  <td>'.$obstetrical_a->postpartum_deaths19_total.'</td>
                  <td>'.$obstetrical_a->postpartum_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">Eclampsia / Severe pre eclampsia</td>
                  <td>'.$obstetrical_a->eclampsia_opd19_total.'</td>
                  <td>'.$obstetrical_a->eclampsia_opd20_total.'</td>
                  <td>'.$obstetrical_a->eclampsia_hos19_total.'</td>
                  <td>'.$obstetrical_a->eclampsia_hos20_total.'</td>
                  <td>'.$obstetrical_a->eclampsia_deaths19_total.'</td>
                  <td>'.$obstetrical_a->eclampsia_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left">Post C / Section infection</td>
                  <td>'.$obstetrical_a->postc_opd19_total.'</td>
                  <td>'.$obstetrical_a->postc_opd20_total.'</td>
                  <td>'.$obstetrical_a->postc_hos19_total.'</td>
                  <td>'.$obstetrical_a->postc_hos20_total.'</td>
                  <td>'.$obstetrical_a->postc_deaths19_total.'</td>
                  <td>'.$obstetrical_a->postc_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left">Other postpartum infections</td>
                  <td>'.$obstetrical_a->postpartum_other_opd19_total.'</td>
                  <td>'.$obstetrical_a->postpartum_other_opd20_total.'</td>
                  <td>'.$obstetrical_a->postpartum_other_hos19_total.'</td>
                  <td>'.$obstetrical_a->postpartum_other_hos20_total.'</td>
                  <td>'.$obstetrical_a->postpartum_other_deaths19_total.'</td>
                  <td>'.$obstetrical_a->postpartum_other_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left">Prolonged or obstructed labor</td>
                  <td>'.$obstetrical_a->prolonged_opd19_total.'</td>
                  <td>'.$obstetrical_a->prolonged_opd20_total.'</td>
                  <td>'.$obstetrical_a->prolonged_hos19_total.'</td>
                  <td>'.$obstetrical_a->prolonged_hos20_total.'</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left">Uterine rupture</td>
                  <td>'.$obstetrical_a->uterine_rup_opd19_total.'</td>
                  <td>'.$obstetrical_a->uterine_rup_opd20_total.'</td>
                  <td>'.$obstetrical_a->uterine_rup_hos19_total.'</td>
                  <td>'.$obstetrical_a->uterine_rup_hos20_total.'</td>
                  <td>'.$obstetrical_a->uterine_rup_deaths19_total.'</td>
                  <td>'.$obstetrical_a->uterine_rup_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td class="left">Amniotic embolism</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td>'.$obstetrical_a->other_direct_obste_deaths19_total.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td class="left">Complication of anesthesia</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td>'.$obstetrical_a->other_direct_obste_deaths19_total.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td class="left">Other direct obstetrical complication</td>
                  <td>'.$obstetrical_a->other_direct_obste_opd19_total.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_opd20_total.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_hos19_total.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_hos20_total.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_deaths19_total.'</td>
                  <td>'.$obstetrical_a->other_direct_obste_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td class="left">Anemia severe (< 7gm/dl)</td>
                  <td>'.$obstetrical_a->anemia_sev_opd19_total.'</td>
                  <td>'.$obstetrical_a->anemia_sev_opd20_total.'</td>
                  <td>'.$obstetrical_a->anemia_sev_hos19_total.'</td>
                  <td>'.$obstetrical_a->anemia_sev_hos20_total.'</td>
                  <td>'.$obstetrical_a->anemia_sev_deaths19_total.'</td>
                  <td>'.$obstetrical_a->anemia_sev_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td class="left">Malaria simple in pregnancy</td>
                  <td>'.$obstetrical_a->malaria_sim_opd19_total.'</td>
                  <td>'.$obstetrical_a->malaria_sim_opd20_total.'</td>
                  <td>'.$obstetrical_a->malaria_sim_hos19_total.'</td>
                  <td>'.$obstetrical_a->malaria_sim_hos20_total.'</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>15</td>
                  <td class="left">Malaria with minor digestive symptoms in pregnancy</td>
                  <td>'.$obstetrical_a->malaria_dig_opd19_total.'</td>
                  <td>'.$obstetrical_a->malaria_dig_opd20_total.'</td>
                  <td>'.$obstetrical_a->malaria_dig_hos19_total.'</td>
                  <td>'.$obstetrical_a->malaria_dig_hos20_total.'</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td>16</td>
                  <td class="left">Severe malaria in pregnancy</td>
                  <td>'.$obstetrical_a->malaria_sev_opd19_total.'</td>
                  <td>'.$obstetrical_a->malaria_sev_opd20_total.'</td>
                  <td>'.$obstetrical_a->malaria_sev_hos19_total.'</td>
                  <td>'.$obstetrical_a->malaria_sev_hos20_total.'</td>
                  <td>'.$obstetrical_a->malaria_sev_deaths19_total.'</td>
                  <td>'.$obstetrical_a->malaria_sev_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>17</td>
                  <td class="left">HIV/Opportunistic infections</td>
                  <td>'.$obstetrical_a->hiv_opd19_total.'</td>
                  <td>'.$obstetrical_a->hiv_opd20_total.'</td>
                  <td>'.$obstetrical_a->hiv_hos19_total.'</td>
                  <td>'.$obstetrical_a->hiv_hos20_total.'</td>
                  <td>'.$obstetrical_a->hiv_deaths19_total.'</td>
                  <td>'.$obstetrical_a->hiv_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>18</td>
                  <td class="left">Pulmonary embolism</td>
                  <td>'.$obstetrical_a->pulmonary_opd19_total.'</td>
                  <td>'.$obstetrical_a->pulmonary_opd20_total.'</td>
                  <td>'.$obstetrical_a->pulmonary_hos19_total.'</td>
                  <td>'.$obstetrical_a->pulmonary_hos20_total.'</td>
                  <td>'.$obstetrical_a->pulmonary_deaths19_total.'</td>
                  <td>'.$obstetrical_a->pulmonary_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>19</td>
                  <td class="left">Pneumonia on pregnancy</td>
                  <td>'.$obstetrical_a->pneumonia_opd19_total.'</td>
                  <td>'.$obstetrical_a->pneumonia_opd20_total.'</td>
                  <td>'.$obstetrical_a->pneumonia_hos19_total.'</td>
                  <td>'.$obstetrical_a->pneumonia_hos20_total.'</td>
                  <td>'.$obstetrical_a->pneumonia_deaths19_total.'</td>
                  <td>'.$obstetrical_a->pneumonia_deaths20_total.'</td>
                </tr>
                <tr>
                  <td>20</td>
                  <td class="left">Other indirect obstetrical complication</td>
                  <td>'.$obstetrical_a->other_ind_obstet_opd19_total.'</td>
                  <td>'.$obstetrical_a->other_ind_obstet_opd20_total.'</td>
                  <td>'.$obstetrical_a->other_ind_obstet_hos19_total.'</td>
                  <td>'.$obstetrical_a->other_ind_obstet_hos20_total.'</td>
                  <td>'.$obstetrical_a->other_ind_obstet_deaths19_total.'</td>
                  <td>'.$obstetrical_a->other_ind_obstet_deaths20_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XV] Obstetrical complications</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $obstetrical_bc=$this->research_model->obstetrical_bc2($date1, $date2);

        if ($obstetrical_bc->intra_antibio_total != null) {
            $output.='
          <br>
          <h4>B) Emergency obstetric and neonatal care interventions (basic and comprehensive)</h4>
          <div class="row">
            <table id="B15" class="center">
              <thead>
                <tr>
                  <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="left">Intravenous antibiotics to manage obstetrical infections</td>
                  <td>'.$obstetrical_bc->intra_antibio_total.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Mother received parenteral uterotonic drugd (oxytocin) to manage PPH</td>
                  <td>'.$obstetrical_bc->mother_uterotonic_total.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Manual removal of placenta</td>
                  <td>'.$obstetrical_bc->manual_placenta_total.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Post-abortion care (manual vacuum aspiration)</td>
                  <td>'.$obstetrical_bc->post_abortion_total.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">Delivery by vacuum extraction</td>
                  <td>'.$obstetrical_bc->vacuum_extraction_total.'</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left">(Pre) eclampsia cases receiving magnesium sulfate</td>
                  <td>'.$obstetrical_bc->Preeclampsia_total.'</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left">Caesarean</td>
                  <td>'.$obstetrical_bc->caesarean_total.'</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left">Blood transfusion for obstetrical complications</td>
                  <td>'.$obstetrical_bc->blood_tranf_total.'</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left">Women with obstetrical complications referred for emerhency care to higher levels</td>
                  <td>'.$obstetrical_bc->women_w_obste_compli_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        }



        if ($delivery_birth->delive_total_total != null) {
            $output .= '
              <h3 class="center">XVI] Deliveries and births at health facility</h3>
              <table id="A16" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Deliveries, total</td>
                    <td>'.$delivery_birth->delive_total_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Deliveries eutocic</td>
                    <td>'.$delivery_birth->delive_eutocic_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Deliveries dystocic</td>
                    <td>'.$delivery_birth->delive_dystocic_total.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Delivery with episiotomy</td>
                    <td>'.$delivery_birth->delive_w_episiotomy_total.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Delivery with oxytocin stimulation</td>
                    <td>'.$delivery_birth->delive_w_oxytocin_total.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Delivery complicated by perineal tear (second-third-fourth degree)</td>
                    <td>'.$delivery_birth->delive_complicated_total.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Birth trauma to newborn</td>
                    <td>'.$delivery_birth->birth_trauma_total.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">Cleft palate or cleft lip</td>
                    <td>'.$delivery_birth->cleft_palate_total.'</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Omphalocel</td>
                    <td>'.$delivery_birth->omphalocel_total.'</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td class="left">Laparoschisis</td>
                    <td>'.$delivery_birth->laparoschisis_total.'</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td class="left">Spina bifida</td>
                    <td>'.$delivery_birth->spina_bifida_total.'</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td class="left">Hydrocephalus</td>
                    <td>'.$delivery_birth->hydrocephalus_total.'</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td class="left">Deliveries 15 years and under</td>
                    <td>'.$delivery_birth->delive_15_total.'</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td class="left">Deliveries 16 to 19 years</td>
                    <td>'.$delivery_birth->delive_19_total.'</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td class="left">Deliveries 20 to 24 years</td>
                    <td>'.$delivery_birth->delive_24_total.'</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td class="left">Deliveries 35 years and above</td>
                    <td>'.$delivery_birth->delive_35_total.'</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td class="left">Women who received oxytocin IM immediately after birth for active management of third stage of labor</td>
                    <td>'.$delivery_birth->received_oxytocin_total.'</td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td class="left">Multiple pregnancies (women who delivered twins, triplets, etc.)</td>
                    <td>'.$delivery_birth->multi_pregnancies_total.'</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td class="left">Women consulted for risk of premature delivery</td>
                    <td>'.$delivery_birth->women_cons_risk_prema_total.'</td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td class="left">Mother who received corticosteroid in management of risk of premature delivery</td>
                    <td>'.$delivery_birth->received_corticosteroid_total.'</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td class="left">Women consulted with preterm premature rupture membranes (PPROM)</td>
                    <td>'.$delivery_birth->cons_preterm_ruptu_memb_total.'</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td class="left">Women consulted with preterm premature rupture membranes who received prophylactic antibiotics</td>
                    <td>'.$delivery_birth->cons_preterm_ruptu_memb_prophylactic_total.'</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td class="left">Maternal deaths during labor, delivery and 24 hours after delivery (=subsets of all deaths in table above)</td>
                    <td>'.$delivery_birth->maternal_deaths_total.'</td>
                  </tr>
                  <tr>
                    <td>24</td>
                    <td class="left">Births, live</td>
                    <td>'.$delivery_birth->births_live_total.'</td>
                  </tr>
                  <tr>
                    <td>25</td>
                    <td class="left">Birth weight < 2500 gr (alive)</td>
                    <td>'.$delivery_birth->births_weight2500_total.'</td>
                  </tr>
                  <tr>
                    <td>26</td>
                    <td class="left">Premature newborns (alive) 22-37 weeks</td>
                    <td>'.$delivery_birth->premature_newborn_total.'</td>
                  </tr>
                  <tr>
                    <td>27</td>
                    <td class="left">Birth weight < 2 kg (alive newborns) all</td>
                    <td>'.$delivery_birth->births_weight2000_total.'</td>
                  </tr>
                  <tr>
                    <td>28</td>
                    <td class="left">Still births macerated (≥ 28 weeks or ≥ 1000 gr)</td>
                    <td>'.$delivery_birth->births_macerated_total.'</td>
                  </tr>
                  <tr>
                    <td>29</td>
                    <td class="left">Still births fresh (≥ 28 weeks or ≥ 1000 gr) all</td>
                    <td>'.$delivery_birth->births_fresh_1000_total.'</td>
                  </tr>
                  <tr>
                    <td>30</td>
                    <td class="left">Still births freash (≥ 2500 gr)</td>
                    <td>'.$delivery_birth->births_fresh_2500_total.'</td>
                  </tr>
                  <tr>
                    <td>31</td>
                    <td class="left">Deaths at birth of live born bebies (within 30 minutes)</td>
                    <td>'.$delivery_birth->deaths_birth_total.'</td>
                  </tr>
                  <tr>
                    <td>32</td>
                    <td class="left">Deaths at birth of live born babies with ≥ 2,5 kg (within 30 minutes)</td>
                    <td>'.$delivery_birth->deaths_birth_2500_total.'</td>
                  </tr>
                  <tr>
                    <td>33</td>
                    <td class="left">Newborns breastfed within 1 hour of delivery</td>
                    <td>'.$delivery_birth->newborns_breastfed_total.'</td>
                  </tr>
                  <tr>
                    <td>34</td>
                    <td class="left">Newborns who were placed skin to skin after birth for at least one hour after birth</td>
                    <td>'.$delivery_birth->newborns_skintoskin_total.'</td>
                  </tr>
                  <tr>
                    <td>35</td>
                    <td class="left">Live newborns who didn\'t cry/breath at birth</td>
                    <td>'.$delivery_birth->newborns_no_cry_total.'</td>
                  </tr>
                  <tr>
                    <td>36</td>
                    <td class="left">Live newborns who didn\'t cry at birth and for whom newborn resuscitation was performed using ambu bag</td>
                    <td>'.$delivery_birth->newborns_no_cry_ambubag_total.'</td>
                  </tr>
                  <tr>
                    <td>37</td>
                    <td class="left">Live newborns who didn\'t cry/breth at birth and were resuscitated successfully (cry/breath within 5 min APGAR > 5 at 5 min)</td>
                    <td>'.$delivery_birth->newborns_no_cry_success_total.'</td>
                  </tr>
                  <tr>
                    <td>38</td>
                    <td class="left">Women suspected to develop obstetrical fistula (during labor)</td>
                    <td>'.$delivery_birth->fistula_total.'</td>
                  </tr>
                  <tr>
                    <td>39</td>
                    <td class="left">Women suspected to develop obstetrical fistula received conservative treatment (foley catheter)</td>
                    <td>'.$delivery_birth->fistula_treatment_total.'</td>
                  </tr>
                  <tr>
                    <td>40</td>
                    <td class="left">Newborns with complications at birth referred to higher level for emergency care</td>
                    <td>'.$delivery_birth->complications_higher_level_total.'</td>
                  </tr>
                  <tr>
                    <td>41</td>
                    <td class="left">Women placed under observation for at least 24 hours before discharge</td>
                    <td>'.$delivery_birth->observation_24_total.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">XVI] Deliveries and births at health facility</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $postnatal_care = $this->research_model->postnatal_care2($date1, $date2);

        if ($postnatal_care->pnc1_m_total != null) {
            $output .= '
              <h3 class="center">XVII] Postnatal care</h3>
              <table id="A17" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Mother<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Newborn<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">PNC1 visits within 24 hours of birth</td>
                    <td>'.$postnatal_care->pnc1_m_total.'</td>
                    <td>'.$postnatal_care->pnc1_nb_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Mothers screened for anemia during PNC1 visit</td>
                    <td>'.$postnatal_care->anemia_pnc1_m_total.'</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Mothers received iron/folic acid during PNC1 visit</td>
                    <td>'.$postnatal_care->iron_pnc1_m_total.'</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Mothers screened by MUAC for malnutrition during PNC1 visit</td>
                    <td>'.$postnatal_care->muac_pnc1_m_total.'</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Mothers malnourished (MUAC < 21 cm) during PNC1 visit</td>
                    <td>'.$postnatal_care->malnourished_pnc1_m_total.'</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">PNC2 visits at 3rd day after birth</td>
                    <td>'.$postnatal_care->pnc2_m_total.'</td>
                    <td>'.$postnatal_care->pnc2_nb_total.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">PNC3 visits between 7th and 14th day after birth</td>
                    <td>'.$postnatal_care->pnc3_m_total.'</td>
                    <td>'.$postnatal_care->pnc3_nb_total.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">Screened for nemia during PNC3 visit</td>
                    <td>'.$postnatal_care->anemia_pnc3_m_total.'</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Anemia (Hb < 9.5 gr/dl) detected during PNC visits (PNC1 and PNC3)</td>
                    <td>'.$postnatal_care->anemia_pnc_m_total.'</td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td class="left">Complications/denger signs detected during any PNC visit</td>
                    <td>'.$postnatal_care->complications_m_total.'</td>
                    <td>'.$postnatal_care->complications_nb_total.'</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td class="left">Referrals done for complcations ar any visit</td>
                    <td>'.$postnatal_care->referrals_m_total.'</td>
                    <td>'.$postnatal_care->referrals_nb_total.'</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td class="left">Post-partum family planning (PPFP) within 6 weeks after delivery</td>
                    <td>'.$postnatal_care->ppfp_m_total.'</td>
                    <td class="grey"></td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">XVII] Postnatal care</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $kangaroo_mother_care = $this->research_model->kangaroo_mother_care2($date1, $date2);

        if ($kangaroo_mother_care->low_birth_total != null) {
            $output .= '
              <h3 class="center">XVIII] Kangaroo mother care</h3>
              <table id="A18" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Low birth weight < 2000 grams babies admitted in KMC</td>
                    <td>'.$kangaroo_mother_care->low_birth_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Newborns discharged from KMC unit</td>
                    <td>'.$kangaroo_mother_care->newborns_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">KMC deaths among KMC admissions</td>
                    <td>'.$kangaroo_mother_care->kmc_deaths_total.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">KMC standars follow up visit after discharge within 2 weeks</td>
                    <td>'.$kangaroo_mother_care->kmc_standard_total.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">XVIII] Kangaroo mother care</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($neonatal->asphyxia_ad7m_total != null) {
            $output.='
          <br>
          <h3 class="center">XIX] Neonatal causes of hospitalization and deaths</h3>
          <div class="row">
            <table id="A19" class="center">
              <thead>
                <tr>
                  <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="4">Admitted for hospitalization<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="4">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th colspan="2">Days < 7<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Days 8 to 28<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Days < 7<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Days 8 to 28<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>M</th>
                  <th>F</th>
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
                  <td class="center">1</td>
                  <td class="left">Asphyxia</td>
                  <td>'.$neonatal->asphyxia_ad7m_total.'</td>
                  <td>'.$neonatal->asphyxia_ad7f_total.'</td>
                  <td>'.$neonatal->asphyxia_ad8f_total.'</td>
                  <td>'.$neonatal->asphyxia_ad8m_total.'</td>
                  <td>'.$neonatal->asphyxia_d7m_total.'</td>
                  <td>'.$neonatal->asphyxia_d7f_total.'</td>
                  <td>'.$neonatal->asphyxia_d8m_total.'</td>
                  <td>'.$neonatal->asphyxia_d8f_total.'</td>
                </tr>
                <tr>
                  <td class="center">2</td>
                  <td class="left">Prematurity (22 to 37 weeks)</td>
                  <td>'.$neonatal->prematurity_ad7m_total.'</td>
                  <td>'.$neonatal->prematurity_ad7f_total.'</td>
                  <td>'.$neonatal->prematurity_ad8m_total.'</td>
                  <td>'.$neonatal->prematurity_ad8f_total.'</td>
                  <td>'.$neonatal->prematurity_d7m_total.'</td>
                  <td>'.$neonatal->prematurity_d7f_total.'</td>
                  <td>'.$neonatal->prematurity_d8m_total.'</td>
                  <td>'.$neonatal->prematurity_d8f_total.'</td>
                </tr>
                <tr>
                  <td class="center">3</td>
                  <td class="left">Congenital malformations</td>
                  <td>'.$neonatal->congenital_ad7m_total.'</td>
                  <td>'.$neonatal->congenital_ad7f_total.'</td>
                  <td>'.$neonatal->congenital_ad8m_total.'</td>
                  <td>'.$neonatal->congenital_ad8f_total.'</td>
                  <td>'.$neonatal->congenital_d7m_total.'</td>
                  <td>'.$neonatal->congenital_d7f_total.'</td>
                  <td>'.$neonatal->congenital_d8m_total.'</td>
                  <td>'.$neonatal->congenital_d8f_total.'</td>
                </tr>
                <tr>
                  <td class="center">4</td>
                  <td class="left">Pneumonia</td>
                  <td>'.$neonatal->pneumonia_ad7m_total.'</td>
                  <td>'.$neonatal->pneumonia_ad7f_total.'</td>
                  <td>'.$neonatal->pneumonia_ad8m_total.'</td>
                  <td>'.$neonatal->pneumonia_ad8f_total.'</td>
                  <td>'.$neonatal->pneumonia_d7m_total.'</td>
                  <td>'.$neonatal->pneumonia_d7f_total.'</td>
                  <td>'.$neonatal->pneumonia_d8m_total.'</td>
                  <td>'.$neonatal->pneumonia_d8f_total.'</td>
                </tr>
                <tr>
                  <td class="center">5</td>
                  <td class="left">Meningitis</td>
                  <td>'.$neonatal->meningitis_ad7m_total.'</td>
                  <td>'.$neonatal->meningitis_ad7f_total.'</td>
                  <td>'.$neonatal->meningitis_ad8m_total.'</td>
                  <td>'.$neonatal->meningitis_ad8f_total.'</td>
                  <td>'.$neonatal->meningitis_d7m_total.'</td>
                  <td>'.$neonatal->meningitis_d7f_total.'</td>
                  <td>'.$neonatal->meningitis_d8m_total.'</td>
                  <td>'.$neonatal->meningitis_d8f_total.'</td>
                </tr>
                <tr>
                  <td class="center">6</td>
                  <td class="left">Skin infections</td>
                  <td>'.$neonatal->skin_ad7m_total.'</td>
                  <td>'.$neonatal->skin_ad7f_total.'</td>
                  <td>'.$neonatal->skin_ad8m_total.'</td>
                  <td>'.$neonatal->skin_ad8f_total.'</td>
                  <td>'.$neonatal->skin_d7m_total.'</td>
                  <td>'.$neonatal->skin_d7f_total.'</td>
                  <td>'.$neonatal->skin_d8m_total.'</td>
                  <td>'.$neonatal->skin_d8f_total.'</td>
                </tr>
                <tr>
                  <td class="center">7</td>
                  <td class="left">Sepsis suspected</td>
                  <td>'.$neonatal->sepsis_ad7m_total.'</td>
                  <td>'.$neonatal->sepsis_ad7f_total.'</td>
                  <td>'.$neonatal->sepsis_ad8m_total.'</td>
                  <td>'.$neonatal->sepsis_ad8f_total.'</td>
                  <td>'.$neonatal->sepsis_d7m_total.'</td>
                  <td>'.$neonatal->sepsis_d7f_total.'</td>
                  <td>'.$neonatal->sepsis_d8m_total.'</td>
                  <td>'.$neonatal->sepsis_d8f_total.'</td>
                </tr>
                <tr>
                  <td class="center">8</td>
                  <td class="left">Tetanus Neonatal</td>
                  <td>'.$neonatal->tetanus_ad7m_total.'</td>
                  <td>'.$neonatal->tetanus_ad7f_total.'</td>
                  <td>'.$neonatal->tetanus_ad8m_total.'</td>
                  <td>'.$neonatal->tetanus_ad8f_total.'</td>
                  <td>'.$neonatal->tetanus_d7m_total.'</td>
                  <td>'.$neonatal->tetanus_d7f_total.'</td>
                  <td>'.$neonatal->tetanus_d8m_total.'</td>
                  <td>'.$neonatal->tetanus_d8f_total.'</td>
                </tr>
                <tr>
                  <td class="center">9</td>
                  <td class="left">All other neonatal infections</td>
                  <td>'.$neonatal->others_neonatal_ad7m_total.'</td>
                  <td>'.$neonatal->others_neonatal_ad7f_total.'</td>
                  <td>'.$neonatal->others_neonatal_ad8m_total.'</td>
                  <td>'.$neonatal->others_neonatal_ad8f_total.'</td>
                  <td>'.$neonatal->others_neonatal_d7m_total.'</td>
                  <td>'.$neonatal->others_neonatal_d7f_total.'</td>
                  <td>'.$neonatal->others_neonatal_d8m_total.'</td>
                  <td>'.$neonatal->others_neonatal_d8f_total.'</td>
                </tr>
                <tr>
                  <td class="center">10</td>
                  <td class="left">All other causes of neonatal mobidity (infections excluded)</td>
                  <td>'.$neonatal->others_causes_ad7m_total.'</td>
                  <td>'.$neonatal->others_causes_ad7f_total.'</td>
                  <td>'.$neonatal->others_causes_ad8m_total.'</td>
                  <td>'.$neonatal->others_causes_ad8f_total.'</td>
                  <td>'.$neonatal->others_causes_d7m_total.'</td>
                  <td>'.$neonatal->others_causes_d7f_total.'</td>
                  <td>'.$neonatal->others_causes_d8m_total.'</td>
                  <td>'.$neonatal->others_causes_d8f_total.'</td>
                </tr>
                <tr>
                  <td class="center">11</td>
                  <td class="left">Total neonates born in this facility</td>
                  <td>'.$neonatal->total_born_in_ad7m_total.'</td>
                  <td>'.$neonatal->total_born_in_ad7f_total.'</td>
                  <td>'.$neonatal->total_born_in_ad8m_total.'</td>
                  <td>'.$neonatal->total_born_in_ad8f_total.'</td>
                  <td>'.$neonatal->total_born_in_d7m_total.'</td>
                  <td>'.$neonatal->total_born_in_d7f_total.'</td>
                  <td>'.$neonatal->total_born_in_d8m_total.'</td>
                  <td>'.$neonatal->total_born_in_d8f_total.'</td>
                </tr>
                <tr>
                  <td class="center">12</td>
                  <td class="left">Total neonates born outside this health facility</td>
                  <td>'.$neonatal->total_born_out_ad7m_total.'</td>
                  <td>'.$neonatal->total_born_out_ad7f_total.'</td>
                  <td>'.$neonatal->total_born_out_ad8m_total.'</td>
                  <td>'.$neonatal->total_born_out_ad8f_total.'</td>
                  <td>'.$neonatal->total_born_out_d7m_total.'</td>
                  <td>'.$neonatal->total_born_out_d7f_total.'</td>
                  <td>'.$neonatal->total_born_out_d8m_total.'</td>
                  <td>'.$neonatal->total_born_out_d8f_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>
          <br>
          <table id="B19" class="center">
            <thead>
              <tr>
                <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td class="left">Total newborn admitted in hypothermia status (< 36.5° C)</td>
                <td>'.$neonatal->hypothermia_total.'</td>
              </tr>
              <tr>
                <td>2</td>
                <td class="left">Total number of newborn at risk follow up required</td>
                <td>'.$neonatal->risk_follow_up_total.'</td>
              </tr>
              <tr>
                <td>3</td>
                <td class="left">Total number of newborn at risk returned for at least one follow up visit after discharge</td>
                <td>'.$neonatal->one_follow_up_total.'</td>
              </tr>
              <tr>
                <td>4</td>
                <td class="left">Total newborn deaths within 24 hours</td>
                <td>'.$neonatal->deaths_24_total.'</td>
              </tr>
            </tbody>
          </table>';
        } else {
            $output .= '
              <h3 class="center">XIX] Neonatal causes of hospitalization and deaths</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $nutrition=$this->research_model->nutrition2($date1, $date2);

        if ($nutrition->screened_6_total != null) {
            $output.='
          <br>
          <h3 class="center">XX] Nutrition screening (all services)</h3>
          <div class="row">
            <table id="A20" class="center">
              <thead>
                <tr>
                  <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Days < 6<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Weeks 1 to 8<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Months 2 to 59<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age 5 to 14<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age > 15<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="center">1</td>
                  <td class="left">Screened for malnutrition</td>
                  <td>'.$nutrition->screened_6_total.'</td>
                  <td>'.$nutrition->screened_7_total.'</td>
                  <td>'.$nutrition->screened_2_total.'</td>
                  <td>'.$nutrition->screened_5_total.'</td>
                  <td>'.$nutrition->screened_15_total.'</td>
                </tr>
                <tr>
                  <td class="center">2</td>
                  <td class="left">Malnourished total</td>
                  <td>'.$nutrition->malnourished_6_total.'</td>
                  <td>'.$nutrition->malnourished_7_total.'</td>
                  <td>'.$nutrition->malnourished_2_total.'</td>
                  <td>'.$nutrition->malnourished_5_total.'</td>
                  <td>'.$nutrition->malnourished_15_total.'</td>
                </tr>
                <tr>
                  <td class="center">2.1</td>
                  <td class="left">Malnutrition acute severe</td>
                  <td>'.$nutrition->acute_sev_6_total.'</td>
                  <td>'.$nutrition->acute_sev_7_total.'</td>
                  <td>'.$nutrition->acute_sev_2_total.'</td>
                  <td>'.$nutrition->acute_sev_5_total.'</td>
                  <td>'.$nutrition->acute_sev_15_total.'</td>
                </tr>
                <tr>
                  <td class="center">2.2</td>
                  <td class="left">Malnutrition acute moderate</td>
                  <td>'.$nutrition->acute_mod_6_total.'</td>
                  <td>'.$nutrition->acute_mod_7_total.'</td>
                  <td>'.$nutrition->acute_mod_2_total.'</td>
                  <td>'.$nutrition->acute_mod_5_total.'</td>
                  <td>'.$nutrition->acute_mod_15_total.'</td>
                </tr>
                <tr>
                  <td class="center">2.3</td>
                  <td class="left">Underweight severe</td>
                  <td>'.$nutrition->under_sev_6_total.'</td>
                  <td>'.$nutrition->under_sev_7_total.'</td>
                  <td>'.$nutrition->under_sev_2_total.'</td>
                  <td>'.$nutrition->under_sev_5_total.'</td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td class="center">2.4</td>
                  <td class="left">Underweight moderate</td>
                  <td>'.$nutrition->under_mod_6_total.'</td>
                  <td>'.$nutrition->under_mod_7_total.'</td>
                  <td>'.$nutrition->under_mod_2_total.'</td>
                  <td>'.$nutrition->under_mod_5_total.'</td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td class="center">2.5</td>
                  <td class="left">Malnutrition chronic severe (stunting)</td>
                  <td>'.$nutrition->chronic_sev_6_total.'</td>
                  <td>'.$nutrition->chronic_sev_7_total.'</td>
                  <td>'.$nutrition->chronic_sev_2_total.'</td>
                  <td>'.$nutrition->chronic_sev_5_total.'</td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td class="center">2.6</td>
                  <td class="left">Malnutrition chronic moderate (stunting)</td>
                  <td>'.$nutrition->chronic_mod_6_total.'</td>
                  <td>'.$nutrition->chronic_mod_7_total.'</td>
                  <td>'.$nutrition->chronic_mod_2_total.'</td>
                  <td>'.$nutrition->chronic_mod_5_total.'</td>
                  <td class="grey"></td>
                </tr>
                <tr>
                  <td class="center">3</td>
                  <td class="left">Referred to outpatient malnutrition program</td>
                  <td>'.$nutrition->outpatient_6_total.'</td>
                  <td>'.$nutrition->outpatient_7_total.'</td>
                  <td>'.$nutrition->outpatient_2_total.'</td>
                  <td>'.$nutrition->outpatient_5_total.'</td>
                  <td>'.$nutrition->outpatient_15_total.'</td>
                </tr>
                <tr>
                  <td class="center">4</td>
                  <td class="left">Referred to inpatient malnutrition program (hospital)</td>
                  <td>'.$nutrition->inpatient_6_total.'</td>
                  <td>'.$nutrition->inpatient_7_total.'</td>
                  <td>'.$nutrition->inpatient_2_total.'</td>
                  <td>'.$nutrition->inpatient_5_total.'</td>
                  <td>'.$nutrition->inpatient_15_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XX] Nutrition screening (all services)</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($malnourished->present_start_mod4_total != null) {
            $output.='
          <br>
          <h3 class="center">XXI] Inpatient rehabilitation of malnourished</h4>
          <div class="row">
            <table id="A21" class="center">
              <thead>
                <tr>
                  <th rowspan="3">N°</th>
                  <th rowspan="3">Designation</th>
                  <th colspan="4">Acutely malnourished</th>
                  <th rowspan="3">Pregnant women</th>
                  <th rowspan="3">Lactating women</th>
                </tr>
                <tr>
                  <th colspan="2">Moderate<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Severe<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                <tr>
                  <th>Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age > 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Age > 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="left">Present beginning of month</td>
                  <td>'.$malnourished->present_start_mod4_total.'</td>
                  <td>'.$malnourished->present_start_mod5_total.'</td>
                  <td>'.$malnourished->present_start_sev4_total.'</td>
                  <td>'.$malnourished->present_start_sev5_total.'</td>
                  <td>'.$malnourished->present_start_pw_total.'</td>
                  <td>'.$malnourished->present_start_lw_total.'</td>
                </tr>
                <tr>
                  <td>2.1</td>
                  <td class="left">Hospitalized - New cases</td>
                  <td>'.$malnourished->nc_mod4_total.'</td>
                  <td>'.$malnourished->nc_mod5_total.'</td>
                  <td>'.$malnourished->nc_sev4_total.'</td>
                  <td>'.$malnourished->nc_sev5_total.'</td>
                  <td>'.$malnourished->nc_pw_total.'</td>
                  <td>'.$malnourished->nc_lw_total.'</td>
                </tr>
                <tr>
                <td>2.2</td>
                  <td class="left">Hospitalized - Relapsed cases</td>
                  <td>'.$malnourished->relapsed_mod4_total.'</td>
                  <td>'.$malnourished->relapsed_mod5_total.'</td>
                  <td>'.$malnourished->relapsed_sev4_total.'</td>
                  <td>'.$malnourished->relapsed_sev5_total.'</td>
                  <td>'.$malnourished->relapsed_pw_total.'</td>
                  <td>'.$malnourished->relapsed_lw_total.'</td>
                </tr>
                <tr>
                  <td>3.1</td>
                  <td class="left">Discharges - Cured</td>
                  <td>'.$malnourished->cured_mod4_total.'</td>
                  <td>'.$malnourished->cured_mod5_total.'</td>
                  <td>'.$malnourished->cured_sev4_total.'</td>
                  <td>'.$malnourished->cured_sev5_total.'</td>
                  <td>'.$malnourished->cured_pw_total.'</td>
                  <td>'.$malnourished->cured_lw_total.'</td>
                </tr>
                <tr>
                  <td>3.2</td>
                  <td class="left">Discharges - Referred</td>
                  <td>'.$malnourished->referred_mod4_total.'</td>
                  <td>'.$malnourished->referred_mod5_total.'</td>
                  <td>'.$malnourished->referred_sev4_total.'</td>
                  <td>'.$malnourished->referred_sev5_total.'</td>
                  <td>'.$malnourished->referred_pw_total.'</td>
                  <td>'.$malnourished->referred_lw_total.'</td>
                </tr>
                <tr>
                  <td>3.3</td>
                  <td class="left">Discharges - Abandoned</td>
                  <td>'.$malnourished->abandoned_mod4_total.'</td>
                  <td>'.$malnourished->abandoned_mod5_total.'</td>
                  <td>'.$malnourished->abandoned_sev4_total.'</td>
                  <td>'.$malnourished->abandoned_sev5_total.'</td>
                  <td>'.$malnourished->abandoned_pw_total.'</td>
                  <td>'.$malnourished->abandoned_lw_total.'</td>
                </tr>
                <tr>
                  <td>3.4</td>
                  <td class="left">Discharges - Died</td>
                  <td>'.$malnourished->died_mod4_total.'</td>
                  <td>'.$malnourished->died_mod5_total.'</td>
                  <td>'.$malnourished->died_sev4_total.'</td>
                  <td>'.$malnourished->died_sev5_total.'</td>
                  <td>'.$malnourished->died_pw_total.'</td>
                  <td>'.$malnourished->died_lw_total.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Present at end of month</td>
                  <td>'.$malnourished->present_end_mod4_total.'</td>
                  <td>'.$malnourished->present_end_mod5_total.'</td>
                  <td>'.$malnourished->present_end_sev4_total.'</td>
                  <td>'.$malnourished->present_end_sev5_total.'</td>
                  <td>'.$malnourished->present_end_pw_total.'</td>
                  <td>'.$malnourished->present_end_lw_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XXI] Inpatient rehabilitation of malnourished</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($family_planning->oral_contra_proges_accep_total != null) {
            $output .= '
              <h3 class="center">XXII] Family planning</h3>
              <h4>A) Methods</h4>
              <table id="A22" class="center">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>New acceptors in the program</th>
                    <th>PPFP uptake (Before discharge)</th>
                    <th>New users of FP method</th>
                    <th>Stopped FP method</th>
                    <th>Active users at end of month</th>
                    <th>FP users referred to CHWs</th>
                    <th>Quantity distributed</th>
                    <th>Stock at end of the month</th>
                    <th>Days of stock-out</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Oral contraceptives, progestative</td>
                    <td>'.$family_planning->oral_contra_proges_accep_total.'</td>
                    <td>'.$family_planning->oral_contra_proges_ppfp_total.'</td>
                    <td>'.$family_planning->oral_contra_proges_users_total.'</td>
                    <td>'.$family_planning->oral_contra_proges_stop_total.'</td>
                    <td>'.$family_planning->oral_contra_proges_active_total.'</td>
                    <td>'.$family_planning->oral_contra_proges_refer_total.'</td>
                    <td>'.$family_planning->oral_contra_proges_quant_total.'</td>
                    <td>'.$family_planning->oral_contra_proges_stock_total.'</td>
                    <td>'.$family_planning->oral_contra_proges_day_total.'</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Oral contraceptives, combined</td>
                    <td>'.$family_planning->oral_contra_comb_accep_total.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->oral_contra_comb_users_total.'</td>
                    <td>'.$family_planning->oral_contra_comb_stop_total.'</td>
                    <td>'.$family_planning->oral_contra_comb_active_total.'</td>
                    <td>'.$family_planning->oral_contra_comb_refer_total.'</td>
                    <td>'.$family_planning->oral_contra_comb_quant_total.'</td>
                    <td>'.$family_planning->oral_contra_comb_stock_total.'</td>
                    <td>'.$family_planning->oral_contra_comb_day_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Injectables (depo-provera)</td>
                    <td>'.$family_planning->inject_depo_accep_total.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->inject_depo_users_total.'</td>
                    <td>'.$family_planning->inject_depo_stop_total.'</td>
                    <td>'.$family_planning->inject_depo_active_total.'</td>
                    <td>'.$family_planning->inject_depo_refer_total.'</td>
                    <td>'.$family_planning->inject_depo_quant_total.'</td>
                    <td>'.$family_planning->inject_depo_stock_total.'</td>
                    <td>'.$family_planning->inject_depo_day_total.'</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Injectables (norristerat)</td>
                    <td>'.$family_planning->inject_nor_accep_total.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->inject_nor_users_total.'</td>
                    <td>'.$family_planning->inject_nor_stop_total.'</td>
                    <td>'.$family_planning->inject_nor_active_total.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->inject_nor_quant_total.'</td>
                    <td>'.$family_planning->inject_nor_stock_total.'</td>
                    <td>'.$family_planning->inject_nor_day_total.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Implants NXT</td>
                    <td>'.$family_planning->implants_nxt_accep_total.'</td>
                    <td>'.$family_planning->implants_nxt_ppfp_total.'</td>
                    <td>'.$family_planning->implants_nxt_users_total.'</td>
                    <td>'.$family_planning->implants_nxt_stop_total.'</td>
                    <td>'.$family_planning->implants_nxt_active_total.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->implants_nxt_quant_total.'</td>
                    <td>'.$family_planning->implants_nxt_stock_total.'</td>
                    <td>'.$family_planning->implants_nxt_day_total.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Implants jadelle</td>
                    <td>'.$family_planning->implants_jad_accep_total.'</td>
                    <td>'.$family_planning->implants_jad_ppfp_total.'</td>
                    <td>'.$family_planning->implants_jad_users_total.'</td>
                    <td>'.$family_planning->implants_jad_stop_total.'</td>
                    <td>'.$family_planning->implants_jad_active_total.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->implants_jad_quant_total.'</td>
                    <td>'.$family_planning->implants_jad_stock_total.'</td>
                    <td>'.$family_planning->implants_jad_day_total.'</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">IUD</td>
                    <td>'.$family_planning->iud_accep_total.'</td>
                    <td>'.$family_planning->iud_ppfp_total.'</td>
                    <td>'.$family_planning->iud_users_total.'</td>
                    <td>'.$family_planning->iud_stop_total.'</td>
                    <td>'.$family_planning->iud_active_total.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->iud_quant_total.'</td>
                    <td>'.$family_planning->iud_stock_total.'</td>
                    <td>'.$family_planning->iud_day_total.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">Male condoms</td>
                    <td>'.$family_planning->m_condoms_accep_total.'</td>
                    <td>'.$family_planning->m_condoms_ppfp_total.'</td>
                    <td>'.$family_planning->m_condoms_users_total.'</td>
                    <td>'.$family_planning->m_condoms_stop_total.'</td>
                    <td>'.$family_planning->m_condoms_active_total.'</td>
                    <td>'.$family_planning->m_condoms_refer_total.'</td>
                    <td>'.$family_planning->m_condoms_quant_total.'</td>
                    <td>'.$family_planning->m_condoms_stock_total.'</td>
                    <td>'.$family_planning->m_condoms_day_total.'</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Female condoms</td>
                    <td>'.$family_planning->f_condoms_accep_total.'</td>
                    <td>'.$family_planning->f_condoms_ppfp_total.'</td>
                    <td>'.$family_planning->f_condoms_users_total.'</td>
                    <td>'.$family_planning->f_condoms_stop_total.'</td>
                    <td>'.$family_planning->f_condoms_active_total.'</td>
                    <td>'.$family_planning->f_condoms_refer_total.'</td>
                    <td>'.$family_planning->f_condoms_quant_total.'</td>
                    <td>'.$family_planning->f_condoms_stock_total.'</td>
                    <td>'.$family_planning->f_condoms_day_total.'</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td class="left">Other barrier methods</td>
                    <td>'.$family_planning->other_method_accep_total.'</td>
                    <td>'.$family_planning->other_method_ppfp_total.'</td>
                    <td>'.$family_planning->other_method_users_total.'</td>
                    <td>'.$family_planning->other_method_stop_total.'</td>
                    <td>'.$family_planning->other_method_active_total.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->other_method_quant_total.'</td>
                    <td>'.$family_planning->other_method_stock_total.'</td>
                    <td>'.$family_planning->other_method_day_total.'</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td class="left">Cycle beads</td>
                    <td>'.$family_planning->cycle_accep_total.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->cycle_users_total.'</td>
                    <td>'.$family_planning->cycle_stop_total.'</td>
                    <td>'.$family_planning->cycle_active_total.'</td>
                    <td>'.$family_planning->cycle_refer_total.'</td>
                    <td>'.$family_planning->cycle_quant_total.'</td>
                    <td>'.$family_planning->cycle_stock_total.'</td>
                    <td>'.$family_planning->cycle_day_total.'</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td class="left">Lactational amenorrhea</td>
                    <td>'.$family_planning->lam_accep_total.'</td>
                    <td>'.$family_planning->lam_ppfp_total.'</td>
                    <td>'.$family_planning->lam_users_total.'</td>
                    <td>'.$family_planning->lam_stop_total.'</td>
                    <td>'.$family_planning->lam_active_total.'</td>
                    <td>'.$family_planning->lam_refer_total.'</td>
                    <td>'.$family_planning->lam_quant_total.'</td>
                    <td>'.$family_planning->lam_stock_total.'</td>
                    <td>'.$family_planning->lam_day_total.'</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td class="left">Auto-observation</td>
                    <td>'.$family_planning->auto_obs_accep_total.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->auto_obs_users_total.'</td>
                    <td>'.$family_planning->auto_obs_stop_total.'</td>
                    <td>'.$family_planning->auto_obs_active_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td class="left">Tubal ligations</td>
                    <td>'.$family_planning->tubal_accep_total.'</td>
                    <td>'.$family_planning->tubal_ppfp_total.'</td>
                    <td>'.$family_planning->tubal_users_total.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->tubal_active_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td class="left">Vasectomy</td>
                    <td>'.$family_planning->vasectomy_accep_total.'</td>
                    <td>'.$family_planning->vasectomy_ppfp_total.'</td>
                    <td>'.$family_planning->vasectomy_users_total.'</td>
                    <td class="grey"></td>
                    <td>'.$family_planning->vasectomy_active_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                </tbody>
              </table>
              <div class="row">
                <div class="col-xs-4">
                  <h4>B) New FP Users</h4>
                </div>
                <div class="col-xs-8">
                  <h4>C) Sperm Control</h4>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-xs-4">
                  <table id="B22" class="center">
                    <thead>
                      <tr>
                        <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="left">FP new acceptors to the program accompanied by partner</td>
                        <td>'.$family_planning->fp_new_acceptors_total.'</td>
                      </tr>
                      <tr>
                        <td class="left">New FP users referred by CHWs for modern family planning method</td>
                        <td>'.$family_planning->new_fp_users_total.'</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-xs-8">
                  <table id="C22" class="center">
                    <thead>
                      <tr>
                        <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Test taken<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Positive<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Negative (no spermatozoids)<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="left">Sperm control of vasectomized clients</td>
                        <td>'.$family_planning->sperm_control_test_total.'</td>
                        <td>'.$family_planning->sperm_control_positive_total.'</td>
                        <td>'.$family_planning->sperm_control_negative_total.'</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <br>
              <h4>D) Summary by Age</h4>
              <table id="D22" class="center">
                <thead>
                  <tr>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Age 15 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Age 20 to 24<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Age 25 to 34<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Age > 35<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="left">New acceptors in the program by age group</td>
                    <td>'.$family_planning->acceptors_prog_19_total.'</td>
                    <td>'.$family_planning->acceptors_prog_24_total.'</td>
                    <td>'.$family_planning->acceptors_prog_34_total.'</td>
                    <td>'.$family_planning->acceptors_prog_35_total.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">XXII] Family planning</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($laboratory->exams_t_total != null) {
            $output .= '
              <h3 class="center">XXIII] Laboratory</h4>
              <table id="A23" class="center">
                <thead>
                  <tr>
                    <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="2">Examens<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Results</th>
                    <th>Total</th>
                  </tr>
                  <tr>
                    <th>Positives<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Negatives<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <td>'.$laboratory->exams_t_total.'</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Blood smears</td>
                    <td class="grey"></td>
                    <td>'.$laboratory->blood_n_total.'</td>
                    <td>'.$laboratory->blood_t_total.'</td>
                  </tr>
                  <tr>
                    <td>1.1</td>
                    <td class="left">Plasmodium</td>
                    <td>'.$laboratory->plasmodium_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>1.2</td>
                    <td class="left">Micro-filaria</td>
                    <td>'.$laboratory->micro_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>1.3</td>
                    <td class="left">Borellia</td>
                    <td>'.$laboratory->borellia_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>1.4</td>
                    <td class="left">Trypanosoma</td>
                    <td>'.$laboratory->trypa_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Rapid diagnostic tests for malaria</td>
                    <td>'.$laboratory->malaria_p_total.'</td>
                    <td>'.$laboratory->malaria_n_total.'</td>
                    <td>'.$laboratory->malaria_t_total.'</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Stools samples total</td>
                    <td class="grey"></td>
                    <td>'.$laboratory->stools_n_total.'</td>
                    <td>'.$laboratory->stools_t_total.'</td>
                  </tr>
                  <tr>
                    <td>3.1</td>
                    <td class="left pad">Entamoebahistolytica</td>
                    <td>'.$laboratory->entamo_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.2</td>
                    <td class="left pad">Entamoeba coli</td>
                    <td>'.$laboratory->coli_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.3</td>
                    <td class="left pad">Giardia</td>
                    <td>'.$laboratory->giardia_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.4</td>
                    <td class="left pad">Ascariasis</td>
                    <td>'.$laboratory->asca_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.5</td>
                    <td class="left pad">Ankylostomiasis</td>
                    <td>'.$laboratory->anky_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.6</td>
                    <td class="left pad">Schistosoma</td>
                    <td>'.$laboratory->schisto_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.7</td>
                    <td class="left pad">Trichuris</td>
                    <td>'.$laboratory->trichuris_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.8</td>
                    <td class="left pad">Taenia</td>
                    <td>'.$laboratory->taenia_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>3.9</td>
                    <td class="left pad">Other parasites in stools</td>
                    <td>'.$laboratory->other_stools_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Urine</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>4.1</td>
                    <td class="left pad">Sugar</td>
                    <td>'.$laboratory->sugar_p_total.'</td>
                    <td>'.$laboratory->sugar_n_total.'</td>
                    <td>'.$laboratory->sugar_t_total.'</td>
                  </tr>
                  <tr>
                    <td>4.2</td>
                    <td class="left pad">Albumin</td>
                    <td>'.$laboratory->albumin_p_total.'</td>
                    <td>'.$laboratory->albumin_n_total.'</td>
                    <td>'.$laboratory->albumin_t_total.'</td>
                  </tr>
                  <tr>
                    <td>4.3</td>
                    <td class="left pad">Pregnancy Test</td>
                    <td>'.$laboratory->pregnancy_p_total.'</td>
                    <td>'.$laboratory->pregnancy_n_total.'</td>
                    <td>'.$laboratory->pregnancy_t_total.'</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">Sputum (number of patients)</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>5.1</td>
                    <td class="left pad">Diagnosis of TB by microscopy</td>
                    <td>'.$laboratory->diag_tb_p_total.'</td>
                    <td>'.$laboratory->diag_tb_n_total.'</td>
                    <td>'.$laboratory->diag_tb_t_total.'</td>
                  </tr>
                  <tr>
                    <td>5.2</td>
                    <td class="left pad">Control of TB positive patients</td>
                    <td>'.$laboratory->control_tb_p_total.'</td>
                    <td>'.$laboratory->control_tb_n_total.'</td>
                    <td>'.$laboratory->control_tb_t_total.'</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Bacteriology</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>6.1</td>
                    <td class="left pad">Vaginal swab fresh</td>
                    <td>'.$laboratory->vag_fresh_p_total.'</td>
                    <td>'.$laboratory->vag_fresh_n_total.'</td>
                    <td>'.$laboratory->vag_fresh_t_total.'</td>
                  </tr>
                  <tr>
                    <td>6.2</td>
                    <td class="left pad">Vaginal swab gram</td>
                    <td>'.$laboratory->vag_gram_p_total.'</td>
                    <td>'.$laboratory->vag_gram_n_total.'</td>
                    <td>'.$laboratory->vag_gram_t_total.'</td>
                  </tr>
                  <tr>
                    <td>6.3</td>
                    <td class="left pad">Vaginal swab diplococcus gram</td>
                    <td>'.$laboratory->vag_diplo_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>6.4</td>
                    <td class="left pad">Urethral swab fresh</td>
                    <td>'.$laboratory->ure_fresh_p_total.'</td>
                    <td>'.$laboratory->ure_fresh_n_total.'</td>
                    <td>'.$laboratory->ure_fresh_t_total.'</td>
                  </tr>
                  <tr>
                    <td>6.5</td>
                    <td class="left pad">Urethral swab gram</td>
                    <td>'.$laboratory->ure_gram_p_total.'</td>
                    <td>'.$laboratory->ure_gram_n_total.'</td>
                    <td>'.$laboratory->ure_gram_t_total.'</td>
                  </tr>
                  <tr>
                    <td>6.6</td>
                    <td class="left pad">Urethral swab diplococcus gram</td>
                    <td>'.$laboratory->ure_diplo_p_total.'</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Blood</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                  </tr>
                  <tr>
                    <td>7.01</td>
                    <td class="left pad">Hemoglobin</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->hemo_t_total.'</td>
                  </tr>
                  <tr>
                    <td>7.02</td>
                    <td class="left pad">RPR</td>
                    <td>'.$laboratory->rpr_p_total.'</td>
                    <td>'.$laboratory->rpr_n_total.'</td>
                    <td>'.$laboratory->rpr_t_total.'</td>
                  </tr>
                  <tr>
                    <td>7.03</td>
                    <td class="left pad">HIV final result</td>
                    <td>'.$laboratory->hiv_p_total.'</td>
                    <td>'.$laboratory->hiv_n_total.'</td>
                    <td>'.$laboratory->hiv_t_total.'</td>
                  </tr>
                  <tr>
                    <td>7.04</td>
                    <td class="left pad">ESR</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->esr_t_total.'</td>
                  </tr>
                  <tr>
                    <td>7.05</td>
                    <td class="left pad">Full blood count (FBC/NFS)</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->full_t_total.'</td>
                  </tr>
                  <tr>
                    <td>7.06</td>
                    <td class="left pad">ALAT (GPT)</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->alat_t_total.'</td>
                  </tr>
                  <tr>
                    <td>7.07</td>
                    <td class="left pad">Creatinine</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->crea_t_total.'</td>
                  </tr>
                  <tr>
                    <td>7.08</td>
                    <td class="left pad">Blood glucose</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->glucose_t_total.'</td>
                  </tr>
                  <tr>
                    <td>7.09</td>
                    <td class="left pad">Amylase</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->amylase_t_total.'</td>
                  </tr>
                  <tr>
                    <td>7.10</td>
                    <td class="left pad">CD<sub>4</sub></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->cd4_t_total.'</td>
                  </tr>
                  <tr>
                    <td>7.11</td>
                    <td class="left pad">Widal</td>
                    <td>'.$laboratory->widal_p_total.'</td>
                    <td>'.$laboratory->widal_n_total.'</td>
                    <td>'.$laboratory->widal_t_total.'</td>
                  </tr>
                  <tr>
                    <td>7.12</td>
                    <td class="left pad">Pregnancy test</td>
                    <td>'.$laboratory->blood_preg_p_total.'</td>
                    <td>'.$laboratory->blood_preg_n_total.'</td>
                    <td>'.$laboratory->blood_preg_t_total.'</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">CerebroSpinal fluid</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->cerebro_t_total.'</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Other lab tests</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->other_lab_t_total.'</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td class="left">Total tests conducted in the laboratory</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td>'.$laboratory->total_total.'</td>
                  </tr>
                </tbody>
              </table>
              <br>';
        } else {
            $output .= '
              <h3 class="center">XXIII] Laboratory</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $blood_bank_security = $this->research_model->blood_bank_security2($date1, $date2);

        if ($blood_bank_security->im_patient_transfused_total != null) {
            $output .= '
            <h3 class="center">XXIV] Blood bank security</h3>
              <div class="row">
                <div class="col-xs-5">
                  <h4>A) Transfusions</h4>
                </div>
                <div class="col-xs-7">
                  <h4>B) Blood pack stock management</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-5">
                  <table id="A24" class="center">
                    <thead>
                      <tr>
                        <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Service<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Patients transfused<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Packs of blood<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td class="left">Internal medicine</td>
                        <td>'.$blood_bank_security->im_patient_transfused_total.'</td>
                        <td>'.$blood_bank_security->im_packs_total.'</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td class="left">Pediatrics</td>
                        <td>'.$blood_bank_security->p_patient_transfused_total.'</td>
                        <td>'.$blood_bank_security->p_packs_total.'</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td class="left">Surgery</td>
                        <td>'.$blood_bank_security->s_patient_transfused_total.'</td>
                        <td>'.$blood_bank_security->s_packs_total.'</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td class="left">Gyneco - obstetrical</td>
                        <td>'.$blood_bank_security->go_patient_transfused_total.'</td>
                        <td>'.$blood_bank_security->go_packs_total.'</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td class="left">Intensive care / Emergency</td>
                        <td>'.$blood_bank_security->ic_patient_transfused_total.'</td>
                        <td>'.$blood_bank_security->ic_packs_total.'</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td class="left">Neonatology</td>
                        <td>'.$blood_bank_security->n_patient_transfused_total.'</td>
                        <td>'.$blood_bank_security->n_packs_total.'</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="col-xs-7">
                  <table id="B24" class="center">
                    <thead>
                      <tr>
                        <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Type A<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Type B<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Type AB<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                        <th>Type O<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td class="left">Blood pack received</td>
                        <td>'.$blood_bank_security->a_received_total.'</td>
                        <td>'.$blood_bank_security->b_received_total.'</td>
                        <td>'.$blood_bank_security->ab_received_total.'</td>
                        <td>'.$blood_bank_security->o_received_total.'</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td class="left">Blood pack used</td>
                        <td>'.$blood_bank_security->a_used_total.'</td>
                        <td>'.$blood_bank_security->b_used_total.'</td>
                        <td>'.$blood_bank_security->ab_used_total.'</td>
                        <td>'.$blood_bank_security->o_used_total.'</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td class="left">Blood pack destroyed or damaged</td>
                        <td>'.$blood_bank_security->a_destroyed_total.'</td>
                        <td>'.$blood_bank_security->b_destroyed_total.'</td>
                        <td>'.$blood_bank_security->ab_destroyed_total.'</td>
                        <td>'.$blood_bank_security->o_destroyed_total.'</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td class="left">Blood pack remaining in stock</td>
                        <td>'.$blood_bank_security->a_stock_total.'</td>
                        <td>'.$blood_bank_security->b_stock_total.'</td>
                        <td>'.$blood_bank_security->ab_stock_total.'</td>
                        <td>'.$blood_bank_security->o_stock_total.'</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <br>';
        } else {
            $output .= '
              <h3 class="center">XXIV] Blood bank security</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($imagery->lung_total != null) {
            $output.='
          <br>
          <h4>XXV] Medical imagery</h4>
          <div class="row">
            <table id="A25" class="center">
              <thead>
                <tr>
                  <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th class="des">X-Ray (radiology)<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th class="des">Other<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="left">X-Ray lung</td>
                  <td>'.$imagery->lung_total.'</td>
                  <td>6</td>
                  <td class="left">Gastroscopy</td>
                  <td>'.$imagery->gastroscopy_total.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">X-Ray bones</td>
                  <td>'.$imagery->bones_total.'</td>
                  <td>7</td>
                  <td class="left">Ultrasound (echography)</td>
                  <td>'.$imagery->ultrasound_total.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">X-Ray abdomen without preparation</td>
                  <td>'.$imagery->abdomen_without_total.'</td>
                  <td>8</td>
                  <td class="left">ECG</td>
                  <td>'.$imagery->ecg_total.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">X-Ray abdomen with dye</td>
                  <td>'.$imagery->abdomen_with_total.'</td>
                  <td>9</td>
                  <td class="left">Other Medical Imagery</td>
                  <td>'.$imagery->other_medical_img_total.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">X-Ray other</td>
                  <td>'.$imagery->other_xray_total.'</td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XXV] Medical imagery</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($stock->amoxycillin_begin_total != null) {
            $output.='
          <br>
          <h3 class="center">XXVI] Stock of tracer drugs</h3>
          <div class="row">
            <table id="A26" class="center">
              <thead>
                <tr>
                  <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Quantity at the beginning of the month<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Quantity received<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Quantity dispensed<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Quantity expired/damaged/lost<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Quantity at end of month<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Days of stock out<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="left">Amoxycillin syrup 125 mg/5ml</td>
                  <td>'.$stock->amoxycillin_begin_total.'</td>
                  <td>'.$stock->amoxycillin_received_total.'</td>
                  <td>'.$stock->amoxycillin_dispensed_total.'</td>
                  <td>'.$stock->amoxycillin_expired_total.'</td>
                  <td>'.$stock->amoxycillin_end_total.'</td>
                  <td>'.$stock->amoxycillin_stock_total.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Ampicillin vial 500 mg</td>
                  <td>'.$stock->ampicillin_begin_total.'</td>
                  <td>'.$stock->ampicillin_received_total.'</td>
                  <td>'.$stock->ampicillin_dispensed_total.'</td>
                  <td>'.$stock->ampicillin_expired_total.'</td>
                  <td>'.$stock->ampicillin_end_total.'</td>
                  <td>'.$stock->ampicillin_stock_total.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Doxycyclin tab 100 mg</td>
                  <td>'.$stock->doxycyclin_begin_total.'</td>
                  <td>'.$stock->doxycyclin_received_total.'</td>
                  <td>'.$stock->doxycyclin_dispensed_total.'</td>
                  <td>'.$stock->doxycyclin_expired_total.'</td>
                  <td>'.$stock->doxycyclin_end_total.'</td>
                  <td>'.$stock->doxycyclin_stock_total.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Cloxacillin tab 250 mg</td>
                  <td>'.$stock->cloxacillin_begin_total.'</td>
                  <td>'.$stock->cloxacillin_received_total.'</td>
                  <td>'.$stock->cloxacillin_dispensed_total.'</td>
                  <td>'.$stock->cloxacillin_expired_total.'</td>
                  <td>'.$stock->cloxacillin_end_total.'</td>
                  <td>'.$stock->cloxacillin_stock_total.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">Mebendazole syrup 100 mg/5ml</td>
                  <td>'.$stock->mebendazole_begin_total.'</td>
                  <td>'.$stock->mebendazole_received_total.'</td>
                  <td>'.$stock->mebendazole_dispensed_total.'</td>
                  <td>'.$stock->mebendazole_expired_total.'</td>
                  <td>'.$stock->mebendazole_end_total.'</td>
                  <td>'.$stock->mebendazole_stock_total.'</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left">Gentamycin vial 40 mg/ml</td>
                  <td>'.$stock->gentamycin_begin_total.'</td>
                  <td>'.$stock->gentamycin_received_total.'</td>
                  <td>'.$stock->gentamycin_dispensed_total.'</td>
                  <td>'.$stock->gentamycin_expired_total.'</td>
                  <td>'.$stock->gentamycin_end_total.'</td>
                  <td>'.$stock->gentamycin_stock_total.'</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left">Metronidazole vial 500 mg/ml</td>
                  <td>'.$stock->metronidazole_vial_begin_total.'</td>
                  <td>'.$stock->metronidazole_vial_received_total.'</td>
                  <td>'.$stock->metronidazole_vial_dispensed_total.'</td>
                  <td>'.$stock->metronidazole_vial_expired_total.'</td>
                  <td>'.$stock->metronidazole_vial_end_total.'</td>
                  <td>'.$stock->metronidazole_vial_stock_total.'</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left">Metronidazole syrup 125 mg/5ml</td>
                  <td>'.$stock->metronidazole_syrup_begin_total.'</td>
                  <td>'.$stock->metronidazole_syrup_received_total.'</td>
                  <td>'.$stock->metronidazole_syrup_dispensed_total.'</td>
                  <td>'.$stock->metronidazole_syrup_expired_total.'</td>
                  <td>'.$stock->metronidazole_syrup_end_total.'</td>
                  <td>'.$stock->metronidazole_syrup_stock_total.'</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left">Paracetamol tab 500 mg</td>
                  <td>'.$stock->paracetamol_begin_total.'</td>
                  <td>'.$stock->paracetamol_received_total.'</td>
                  <td>'.$stock->paracetamol_dispensed_total.'</td>
                  <td>'.$stock->paracetamol_expired_total.'</td>
                  <td>'.$stock->paracetamol_end_total.'</td>
                  <td>'.$stock->paracetamol_stock_total.'</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td class="left">Ketamine vial 50 mg/ml</td>
                  <td>'.$stock->ketamine_begin_total.'</td>
                  <td>'.$stock->ketamine_received_total.'</td>
                  <td>'.$stock->ketamine_dispensed_total.'</td>
                  <td>'.$stock->ketamine_expired_total.'</td>
                  <td>'.$stock->ketamine_end_total.'</td>
                  <td>'.$stock->ketamine_stock_total.'</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td class="left">Ocytocin vial 5 ui</td>
                  <td>'.$stock->ocytocin_begin_total.'</td>
                  <td>'.$stock->ocytocin_received_total.'</td>
                  <td>'.$stock->ocytocin_dispensed_total.'</td>
                  <td>'.$stock->ocytocin_expired_total.'</td>
                  <td>'.$stock->ocytocin_end_total.'</td>
                  <td>'.$stock->ocytocin_stock_total.'</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td class="left">Lidocaine vial 2%</td>
                  <td>'.$stock->lidocaine_begin_total.'</td>
                  <td>'.$stock->lidocaine_received_total.'</td>
                  <td>'.$stock->lidocaine_dispensed_total.'</td>
                  <td>'.$stock->lidocaine_expired_total.'</td>
                  <td>'.$stock->lidocaine_end_total.'</td>
                  <td>'.$stock->lidocaine_stock_total.'</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td class="left">Propanolol tab 40 mg</td>
                  <td>'.$stock->propanolol_begin_total.'</td>
                  <td>'.$stock->propanolol_received_total.'</td>
                  <td>'.$stock->propanolol_dispensed_total.'</td>
                  <td>'.$stock->propanolol_expired_total.'</td>
                  <td>'.$stock->propanolol_end_total.'</td>
                  <td>'.$stock->propanolol_stock_total.'</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td class="left">Tetracycline ointment</td>
                  <td>'.$stock->tetracycline_begin_total.'</td>
                  <td>'.$stock->tetracycline_received_total.'</td>
                  <td>'.$stock->tetracycline_dispensed_total.'</td>
                  <td>'.$stock->tetracycline_expired_total.'</td>
                  <td>'.$stock->tetracycline_end_total.'</td>
                  <td>'.$stock->tetracycline_stock_total.'</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td class="left">Diazepan tab 5 mg</td>
                  <td>'.$stock->diazepan_tab_begin_total.'</td>
                  <td>'.$stock->diazepan_tab_received_total.'</td>
                  <td>'.$stock->diazepan_tab_dispensed_total.'</td>
                  <td>'.$stock->diazepan_tab_expired_total.'</td>
                  <td>'.$stock->diazepan_tab_end_total.'</td>
                  <td>'.$stock->diazepan_tab_stock_total.'</td>
                </tr>
                <tr>
                  <td>16</td>
                  <td class="left">Diazepan vial 5 mg/ml</td>
                  <td>'.$stock->diazepan_vial_begin_total.'</td>
                  <td>'.$stock->diazepan_vial_received_total.'</td>
                  <td>'.$stock->diazepan_vial_dispensed_total.'</td>
                  <td>'.$stock->diazepan_vial_expired_total.'</td>
                  <td>'.$stock->diazepan_vial_end_total.'</td>
                  <td>'.$stock->diazepan_vial_stock_total.'</td>
                </tr>
                <tr>
                  <td>17</td>
                  <td class="left">Phenobarbital tab 30 mg</td>
                  <td>'.$stock->phenobarbital_begin_total.'</td>
                  <td>'.$stock->phenobarbital_received_total.'</td>
                  <td>'.$stock->phenobarbital_dispensed_total.'</td>
                  <td>'.$stock->phenobarbital_expired_total.'</td>
                  <td>'.$stock->phenobarbital_end_total.'</td>
                  <td>'.$stock->phenobarbital_stock_total.'</td>
                </tr>
                <tr>
                  <td>18</td>
                  <td class="left">Valproic acid tab 300 mg</td>
                  <td>'.$stock->valproic_begin_total.'</td>
                  <td>'.$stock->valproic_received_total.'</td>
                  <td>'.$stock->valproic_dispensed_total.'</td>
                  <td>'.$stock->valproic_expired_total.'</td>
                  <td>'.$stock->valproic_end_total.'</td>
                  <td>'.$stock->valproic_stock_total.'</td>
                </tr>
                <tr>
                  <td>19</td>
                  <td class="left">Salbutamol tab 4 mg</td>
                  <td>'.$stock->salbutamol_begin_total.'</td>
                  <td>'.$stock->salbutamol_received_total.'</td>
                  <td>'.$stock->salbutamol_dispensed_total.'</td>
                  <td>'.$stock->salbutamol_expired_total.'</td>
                  <td>'.$stock->salbutamol_end_total.'</td>
                  <td>'.$stock->salbutamol_stock_total.'</td>
                </tr>
                <tr>
                  <td>20</td>
                  <td class="left">Iron sulfate + Folic acid tab 200 mh/0.25mg</td>
                  <td>'.$stock->iron_folic_begin_total.'</td>
                  <td>'.$stock->iron_folic_received_total.'</td>
                  <td>'.$stock->iron_folic_dispensed_total.'</td>
                  <td>'.$stock->iron_folic_expired_total.'</td>
                  <td>'.$stock->iron_folic_end_total.'</td>
                  <td>'.$stock->iron_folic_stock_total.'</td>
                </tr>
                <tr>
                  <td>21</td>
                  <td class="left">Oral rehydration salts packet</td>
                  <td>'.$stock->rehydra_salt_begin_total.'</td>
                  <td>'.$stock->rehydra_salt_received_total.'</td>
                  <td>'.$stock->rehydra_salt_dispensed_total.'</td>
                  <td>'.$stock->rehydra_salt_expired_total.'</td>
                  <td>'.$stock->rehydra_salt_end_total.'</td>
                  <td>'.$stock->rehydra_salt_stock_total.'</td>
                </tr>
                <tr>
                  <td>22</td>
                  <td class="left">Quinine vial 300 mg/ml</td>
                  <td>'.$stock->quinine_vial_begin_total.'</td>
                  <td>'.$stock->quinine_vial_received_total.'</td>
                  <td>'.$stock->quinine_vial_dispensed_total.'</td>
                  <td>'.$stock->quinine_vial_expired_total.'</td>
                  <td>'.$stock->quinine_vial_end_total.'</td>
                  <td>'.$stock->quinine_vial_stock_total.'</td>
                </tr>
                <tr>
                  <td>23</td>
                  <td class="left">Quinine tab 300 mg</td>
                  <td>'.$stock->quinine_tab_begin_total.'</td>
                  <td>'.$stock->quinine_tab_received_total.'</td>
                  <td>'.$stock->quinine_tab_dispensed_total.'</td>
                  <td>'.$stock->quinine_tab_expired_total.'</td>
                  <td>'.$stock->quinine_tab_end_total.'</td>
                  <td>'.$stock->quinine_tab_stock_total.'</td>
                </tr>
                <tr>
                  <td>24</td>
                  <td class="left">Coartem atemether + Lumefanthrine tab 20 mg + 120 mg (6x1)</td>
                  <td>'.$stock->coartem_artemether_1_begin_total.'</td>
                  <td>'.$stock->coartem_artemether_1_received_total.'</td>
                  <td>'.$stock->coartem_artemether_1_dispensed_total.'</td>
                  <td>'.$stock->coartem_artemether_1_expired_total.'</td>
                  <td>'.$stock->coartem_artemether_1_end_total.'</td>
                  <td>'.$stock->coartem_artemether_1_stock_total.'</td>
                </tr>
                <tr>
                  <td>25</td>
                  <td class="left">Coartem atemether + Lumefanthrine tab 20 mg + 120 mg (6x2)</td>
                  <td>'.$stock->coartem_artemether_2_begin_total.'</td>
                  <td>'.$stock->coartem_artemether_2_received_total.'</td>
                  <td>'.$stock->coartem_artemether_2_dispensed_total.'</td>
                  <td>'.$stock->coartem_artemether_2_expired_total.'</td>
                  <td>'.$stock->coartem_artemether_2_end_total.'</td>
                  <td>'.$stock->coartem_artemether_2_stock_total.'</td>
                </tr>
                <tr>
                  <td>26</td>
                  <td class="left">Coartem atemether + Lumefanthrine tab 20 mg + 120 mg (6x3)</td>
                  <td>'.$stock->coartem_artemether_3_begin_total.'</td>
                  <td>'.$stock->coartem_artemether_3_received_total.'</td>
                  <td>'.$stock->coartem_artemether_3_dispensed_total.'</td>
                  <td>'.$stock->coartem_artemether_3_expired_total.'</td>
                  <td>'.$stock->coartem_artemether_3_end_total.'</td>
                  <td>'.$stock->coartem_artemether_3_stock_total.'</td>
                </tr>
                <tr>
                  <td>27</td>
                  <td class="left">Coartem atemether + Lumefanthrine tab 20 mg + 120 mg (6x4)</td>
                  <td>'.$stock->coartem_artemether_4_begin_total.'</td>
                  <td>'.$stock->coartem_artemether_4_received_total.'</td>
                  <td>'.$stock->coartem_artemether_4_dispensed_total.'</td>
                  <td>'.$stock->coartem_artemether_4_expired_total.'</td>
                  <td>'.$stock->coartem_artemether_4_end_total.'</td>
                  <td>'.$stock->coartem_artemether_4_stock_total.'</td>
                </tr>
                <tr>
                  <td>28</td>
                  <td class="left">artemeter vial 20 mg/ml</td>
                  <td>'.$stock->artemeter_vial_begin_total.'</td>
                  <td>'.$stock->artemeter_vial_received_total.'</td>
                  <td>'.$stock->artemeter_vial_dispensed_total.'</td>
                  <td>'.$stock->artemeter_vial_expired_total.'</td>
                  <td>'.$stock->artemeter_vial_end_total.'</td>
                  <td>'.$stock->artemeter_vial_stock_total.'</td>
                </tr>
                <tr>
                  <td>29</td>
                  <td class="left">Artesunate vial 60 mg/ml</td>
                  <td>'.$stock->artesunate_vial_begin_total.'</td>
                  <td>'.$stock->artesunate_vial_received_total.'</td>
                  <td>'.$stock->artesunate_vial_dispensed_total.'</td>
                  <td>'.$stock->artesunate_vial_expired_total.'</td>
                  <td>'.$stock->artesunate_vial_end_total.'</td>
                  <td>'.$stock->artesunate_vial_stock_total.'</td>
                </tr>
                <tr>
                  <td>30</td>
                  <td class="left">Ciprofloxacine tab 250 mg</td>
                  <td>'.$stock->cipro_begin_total.'</td>
                  <td>'.$stock->cipro_received_total.'</td>
                  <td>'.$stock->cipro_dispensed_total.'</td>
                  <td>'.$stock->cipro_expired_total.'</td>
                  <td>'.$stock->cipro_end_total.'</td>
                  <td>'.$stock->cipro_stock_total.'</td>
                </tr>
                <tr>
                  <td>31</td>
                  <td class="left">Cotrimoxazol tab 400 mg + 80 mg</td>
                  <td>'.$stock->cotri_begin_total.'</td>
                  <td>'.$stock->cotri_received_total.'</td>
                  <td>'.$stock->cotri_dispensed_total.'</td>
                  <td>'.$stock->cotri_expired_total.'</td>
                  <td>'.$stock->cotri_end_total.'</td>
                  <td>'.$stock->cotri_stock_total.'</td>
                </tr>
                <tr>
                  <td>32</td>
                  <td class="left">Milk therapeutic F100</td>
                  <td>'.$stock->F100_begin_total.'</td>
                  <td>'.$stock->F100_received_total.'</td>
                  <td>'.$stock->F100_dispensed_total.'</td>
                  <td>'.$stock->F100_expired_total.'</td>
                  <td>'.$stock->F100_end_total.'</td>
                  <td>'.$stock->F100_stock_total.'</td>
                </tr>
                <tr>
                  <td>33</td>
                  <td class="left">Milk therapeutic F75</td>
                  <td>'.$stock->F75_begin_total.'</td>
                  <td>'.$stock->F75_received_total.'</td>
                  <td>'.$stock->F75_dispensed_total.'</td>
                  <td>'.$stock->F75_expired_total.'</td>
                  <td>'.$stock->F75_end_total.'</td>
                  <td>'.$stock->F75_stock_total.'</td>
                </tr>
                <tr>
                  <td>34</td>
                  <td class="left">Plumpy nut, bag 920 mg</td>
                  <td>'.$stock->plumpy_begin_total.'</td>
                  <td>'.$stock->plumpy_received_total.'</td>
                  <td>'.$stock->plumpy_dispensed_total.'</td>
                  <td>'.$stock->plumpy_expired_total.'</td>
                  <td>'.$stock->plumpy_end_total.'</td>
                  <td>'.$stock->plumpy_stock_total.'</td>
                </tr>
                <tr>
                  <td>35</td>
                  <td class="left">Corn soya blended (CSB)</td>
                  <td>'.$stock->csb_begin_total.'</td>
                  <td>'.$stock->csb_received_total.'</td>
                  <td>'.$stock->csb_dispensed_total.'</td>
                  <td>'.$stock->csb_expired_total.'</td>
                  <td>'.$stock->csb_end_total.'</td>
                  <td>'.$stock->csb_stock_total.'</td>
                </tr>
                <tr>
                  <td>36</td>
                  <td class="left">Morphine 10 inj mg/ml</td>
                  <td>'.$stock->morphine10_begin_total.'</td>
                  <td>'.$stock->morphine10_received_total.'</td>
                  <td>'.$stock->morphine10_dispensed_total.'</td>
                  <td>'.$stock->morphine10_expired_total.'</td>
                  <td>'.$stock->morphine10_end_total.'</td>
                  <td>'.$stock->morphine10_stock_total.'</td>
                </tr>
                <tr>
                  <td>37</td>
                  <td class="left">Morphine 30 tab mg</td>
                  <td>'.$stock->morphine30_begin_total.'</td>
                  <td>'.$stock->morphine30_received_total.'</td>
                  <td>'.$stock->morphine30_dispensed_total.'</td>
                  <td>'.$stock->morphine30_expired_total.'</td>
                  <td>'.$stock->morphine30_end_total.'</td>
                  <td>'.$stock->morphine30_stock_total.'</td>
                </tr>
                <tr>
                  <td>38</td>
                  <td class="left">Morphine hcl tab 10 mg</td>
                  <td>'.$stock->morphine_hcl_begin_total.'</td>
                  <td>'.$stock->morphine_hcl_received_total.'</td>
                  <td>'.$stock->morphine_hcl_dispensed_total.'</td>
                  <td>'.$stock->morphine_hcl_expired_total.'</td>
                  <td>'.$stock->morphine_hcl_end_total.'</td>
                  <td>'.$stock->morphine_hcl_stock_total.'</td>
                </tr>
                <tr>
                  <td>39</td>
                  <td class="left">Captopril tab 10 mg</td>
                  <td>'.$stock->captopril_begin_total.'</td>
                  <td>'.$stock->captopril_received_total.'</td>
                  <td>'.$stock->captopril_dispensed_total.'</td>
                  <td>'.$stock->captopril_expired_total.'</td>
                  <td>'.$stock->captopril_end_total.'</td>
                  <td>'.$stock->captopril_stock_total.'</td>
                </tr>
                <tr>
                  <td>40</td>
                  <td class="left">Atenolol tab 25 mg</td>
                  <td>'.$stock->atenolol_begin_total.'</td>
                  <td>'.$stock->atenolol_received_total.'</td>
                  <td>'.$stock->atenolol_dispensed_total.'</td>
                  <td>'.$stock->atenolol_expired_total.'</td>
                  <td>'.$stock->atenolol_end_total.'</td>
                  <td>'.$stock->atenolol_stock_total.'</td>
                </tr>
                <tr>
                  <td>41</td>
                  <td class="left">Hydrochlorothiazide solid oral 25 mg</td>
                  <td>'.$stock->hydro_begin_total.'</td>
                  <td>'.$stock->hydro_received_total.'</td>
                  <td>'.$stock->hydro_dispensed_total.'</td>
                  <td>'.$stock->hydro_expired_total.'</td>
                  <td>'.$stock->hydro_end_total.'</td>
                  <td>'.$stock->hydro_stock_total.'</td>
                </tr>
                <tr>
                  <td>42</td>
                  <td class="left">Nifedipine tab (immediate-release) 10 mg</td>
                  <td>'.$stock->nifedipine_begin_total.'</td>
                  <td>'.$stock->nifedipine_received_total.'</td>
                  <td>'.$stock->nifedipine_dispensed_total.'</td>
                  <td>'.$stock->nifedipine_expired_total.'</td>
                  <td>'.$stock->nifedipine_end_total.'</td>
                  <td>'.$stock->nifedipine_stock_total.'</td>
                </tr>
                <tr>
                  <td>43</td>
                  <td class="left">Methyldopal tab 250 mg</td>
                  <td>'.$stock->methyldopal_begin_total.'</td>
                  <td>'.$stock->methyldopal_received_total.'</td>
                  <td>'.$stock->methyldopal_dispensed_total.'</td>
                  <td>'.$stock->methyldopal_expired_total.'</td>
                  <td>'.$stock->methyldopal_end_total.'</td>
                  <td>'.$stock->methyldopal_stock_total.'</td>
                </tr>
                <tr>
                  <td>44</td>
                  <td class="left">Warfarin tab 1 mg</td>
                  <td>'.$stock->warfarin_begin_total.'</td>
                  <td>'.$stock->warfarin_received_total.'</td>
                  <td>'.$stock->warfarin_dispensed_total.'</td>
                  <td>'.$stock->warfarin_expired_total.'</td>
                  <td>'.$stock->warfarin_end_total.'</td>
                  <td>'.$stock->warfarin_stock_total.'</td>
                </tr>
                <tr>
                  <td>45</td>
                  <td class="left">Insulin inj rapid 100 ui/ml</td>
                  <td>'.$stock->insulin_r_begin_total.'</td>
                  <td>'.$stock->insulin_r_received_total.'</td>
                  <td>'.$stock->insulin_r_dispensed_total.'</td>
                  <td>'.$stock->insulin_r_expired_total.'</td>
                  <td>'.$stock->insulin_r_end_total.'</td>
                  <td>'.$stock->insulin_r_stock_total.'</td>
                </tr>
                <tr>
                  <td>46</td>
                  <td class="left">Insulin inj lente 100 ui/ml</td>
                  <td>'.$stock->insulin_l_begin_total.'</td>
                  <td>'.$stock->insulin_l_received_total.'</td>
                  <td>'.$stock->insulin_l_dispensed_total.'</td>
                  <td>'.$stock->insulin_l_expired_total.'</td>
                  <td>'.$stock->insulin_l_end_total.'</td>
                  <td>'.$stock->insulin_l_stock_total.'</td>
                </tr>
              </tbody>
            </table>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XXVI] Stock of tracer drugs</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }



        if ($staff->doc_spe_34m_total != null) {
            $output.='
          <br>
          <h3 class="center">XXVII] Staffing information</h3>
          <h4>A) Staff information</h4>
          <div class="row">
            <table id="A27" class="center">
              <thead>
                <tr>
                  <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th class="cat">Category<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th colspan="2">Age < 35</th>
                  <th colspan="2">Age 35 to 59</th>
                  <th colspan="2">Age > 60</th>
                </tr>
                <tr>
                  <td class="grey"></td>
                  <td class="grey"></td>
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
                  <td>1</td>
                  <td class="left">Doctors (specialist)</td>
                  <td>'.$staff->doc_spe_34m_total.'</td>
                  <td>'.$staff->doc_spe_34f_total.'</td>
                  <td>'.$staff->doc_spe_35m_total.'</td>
                  <td>'.$staff->doc_spe_35f_total.'</td>
                  <td>'.$staff->doc_spe_60m_total.'</td>
                  <td>'.$staff->doc_spe_60f_total.'</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Doctors (generalist)</td>
                  <td>'.$staff->doc_ge_34m_total.'</td>
                  <td>'.$staff->doc_ge_34f_total.'</td>
                  <td>'.$staff->doc_ge_35m_total.'</td>
                  <td>'.$staff->doc_ge_35f_total.'</td>
                  <td>'.$staff->doc_ge_60m_total.'</td>
                  <td>'.$staff->doc_ge_60f_total.'</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Nurses</td>
                  <td>'.$staff->nurses_34m_total.'</td>
                  <td>'.$staff->nurses_34f_total.'</td>
                  <td>'.$staff->nurses_35m_total.'</td>
                  <td>'.$staff->nurses_35f_total.'</td>
                  <td>'.$staff->nurses_60m_total.'</td>
                  <td>'.$staff->nurses_60f_total.'</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Midwives</td>
                  <td>'.$staff->midwives_34m_total.'</td>
                  <td>'.$staff->midwives_34f_total.'</td>
                  <td>'.$staff->midwives_35m_total.'</td>
                  <td>'.$staff->midwives_35f_total.'</td>
                  <td>'.$staff->midwives_60m_total.'</td>
                  <td>'.$staff->midwives_60f_total.'</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">Lab technicians</td>
                  <td>'.$staff->lab_tech_34m_total.'</td>
                  <td>'.$staff->lab_tech_34f_total.'</td>
                  <td>'.$staff->lab_tech_35m_total.'</td>
                  <td>'.$staff->lab_tech_35f_total.'</td>
                  <td>'.$staff->lab_tech_60m_total.'</td>
                  <td>'.$staff->lab_tech_60f_total.'</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left">Dental Assistant</td>
                  <td>'.$staff->dental_34m_total.'</td>
                  <td>'.$staff->dental_34f_total.'</td>
                  <td>'.$staff->dental_35m_total.'</td>
                  <td>'.$staff->dental_35f_total.'</td>
                  <td>'.$staff->dental_60m_total.'</td>
                  <td>'.$staff->dental_60f_total.'</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left">Other allied health professionals</td>
                  <td>'.$staff->other_34m_total.'</td>
                  <td>'.$staff->other_34f_total.'</td>
                  <td>'.$staff->other_35m_total.'</td>
                  <td>'.$staff->other_35f_total.'</td>
                  <td>'.$staff->other_60m_total.'</td>
                  <td>'.$staff->other_60f_total.'</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left">Pharmacists</td>
                  <td>'.$staff->pharma_34m_total.'</td>
                  <td>'.$staff->pharma_34f_total.'</td>
                  <td>'.$staff->pharma_35m_total.'</td>
                  <td>'.$staff->pharma_35f_total.'</td>
                  <td>'.$staff->pharma_60m_total.'</td>
                  <td>'.$staff->pharma_60f_total.'</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left">Administrative and support personnel</td>
                  <td>'.$staff->admin_34m_total.'</td>
                  <td>'.$staff->admin_34f_total.'</td>
                  <td>'.$staff->admin_35m_total.'</td>
                  <td>'.$staff->admin_35f_total.'</td>
                  <td>'.$staff->admin_60m_total.'</td>
                  <td>'.$staff->admin_60f_total.'</td>
                </tr>
              </tbody>
            </table>
            <div class="row">
              <div class="col-xs-7">
                <h4>B) Status of staff</h4>
              </div>
              <div class="col-xs-5">
                <h4>C) Reasons of leaving</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <table id="B27" class="center">
                  <thead>
                    <tr>
                      <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th class="cat">Category<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th>Newly Recruited this month<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th>Left this month<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th>Vacant position<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td class="left">Doctors (specialist)</td>
                      <td>'.$staff->doc_spe_new_total.'</td>
                      <td>'.$staff->doc_spe_left_total.'</td>
                      <td>'.$staff->doc_spe_vacant_total.'</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td class="left">Doctors (generalist)</td>
                      <td>'.$staff->doc_ge_new_total.'</td>
                      <td>'.$staff->doc_ge_left_total.'</td>
                      <td>'.$staff->doc_ge_vacant_total.'</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td class="left">Nurses</td>
                      <td>'.$staff->nurses_new_total.'</td>
                      <td>'.$staff->nurses_left_total.'</td>
                      <td>'.$staff->nurses_vacant_total.'</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td class="left">Midwives</td>
                      <td>'.$staff->midwives_new_total.'</td>
                      <td>'.$staff->midwives_left_total.'</td>
                      <td>'.$staff->midwives_vacant_total.'</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td class="left">Lab technicians</td>
                      <td>'.$staff->lab_tech_new_total.'</td>
                      <td>'.$staff->lab_tech_left_total.'</td>
                      <td>'.$staff->lab_tech_vacant_total.'</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td class="left">Dental assistant</td>
                      <td>'.$staff->dental_new_total.'</td>
                      <td>'.$staff->dental_left_total.'</td>
                      <td>'.$staff->dental_vacant_total.'</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td class="left">Other allied health professionals</td>
                      <td>'.$staff->other_new_total.'</td>
                      <td>'.$staff->other_left_total.'</td>
                      <td>'.$staff->other_vacant_total.'</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td class="left">Pharmacists</td>
                      <td>'.$staff->pharma_new_total.'</td>
                      <td>'.$staff->pharma_left_total.'</td>
                      <td>'.$staff->pharma_vacant_total.'</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-xs-5">
                <table id="C27" class="center">
                  <thead>
                    <tr>
                      <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th>Reason<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td class="left">Death</td>
                      <td>'.$staff->left_death_total.'</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td class="left">Retirement</td>
                      <td>'.$staff->left_retirement_total.'</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td class="left">Career development</td>
                      <td>'.$staff->left_career_total.'</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td class="left">Better remuneration</td>
                      <td>'.$staff->left_remuneration_total.'</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td class="left">Other attrition reasons</td>
                      <td>'.$staff->left_other_total.'</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>';
        } else {
            $output .= '
              <h3 class="center">XXVII] Staffing information</h3>
              <h2>This part has not been filled yet</h2>
              <br>';
        }

        $output .= '
          <br>';


        echo $output;
    }
}
