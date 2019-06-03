<?php
class neonatology_model extends CI_Model
{
    public function new_report()
    {
        $this->db->where('date_rapport', $this->session->userdata('add_date'));
        $q = $this->db->get('rapport');
        if ($q->num_rows() == 0) {
            return $this->db->set('date_rapport', $this->session->userdata('add_date'))
                            ->insert('rapport');
        }
    }

    public function fetch_data1(
      $n_beds,
      $n_present_start,
      $n_admissions,
      $n_referred,
      $n_no_referred,
      $n_discharges,
      $n_authorized,
      $n_abandoned,
      $n_deaths,
      $n_dis_referred,
      $n_counter,
      $n_present_end,
      $n_total,
      $n_actual,
      $num_rapport
    ) {
      $this->db->where('date_hospitalization_a', $this->session->userdata('add_date'));
      $q = $this->db->get('Hospitalization_a');
      if ($q->num_rows() == 0) {
        return $this->db->set(array(
          'n_beds' => $n_beds,
          'n_present_start' => $n_present_start,
          'n_admissions' => $n_admissions,
          'n_referred' => $n_referred,
          'n_no_referred' => $n_no_referred,
          'n_discharges' => $n_discharges,
          'n_authorized' => $n_authorized,
          'n_abandoned' => $n_abandoned,
          'n_deaths' => $n_deaths,
          'n_dis_referred' => $n_dis_referred,
          'n_counter' => $n_counter,
          'n_present_end' => $n_present_end,
          'n_total' => $n_total,
          'n_actual' => $n_actual,

      'num_rapport' => $num_rapport
    ))
            ->set('date_hospitalization_a', $this->session->userdata('add_date'))
            ->insert('Hospitalization_a');
          } else {
              $this->db->set(array(
                'n_beds' => $n_beds,
                'n_present_start' => $n_present_start,
                'n_admissions' => $n_admissions,
                'n_referred' => $n_referred,
                'n_no_referred' => $n_no_referred,
                'n_discharges' => $n_discharges,
                'n_authorized' => $n_authorized,
                'n_abandoned' => $n_abandoned,
                'n_deaths' => $n_deaths,
                'n_dis_referred' => $n_dis_referred,
                'n_counter' => $n_counter,
                'n_present_end' => $n_present_end,
                'n_total' => $n_total,
                'n_actual' => $n_actual
          ))
          ->where('date_hospitalization_a', $this->session->userdata('add_date'));
        return $this->db->update('Hospitalization_a');
      }
    }

    public function fetch_data2(
      $hosp_1m,
      $hosp_1f,

      $deaths_1m,
      $deaths_1f,

      $insured_dis,
      $no_paying_dis,
      $no_paying_ind,

      $road_acc_ad,
      $road_acc_deaths,
      $natural_disa_ad,
      $natural_disa_deaths,
      $work_inj_ad,
      $work_inj_deaths,
        $num_rapport
    ) {
        return $this->db->set(array(
          'hosp_1m' => $hosp_1m,
          'hosp_1f' => $hosp_1f,

          'deaths_1m' => $deaths_1m,
          'deaths_1f' => $deaths_1f,

          'insured_dis' => $insured_dis,
          'no_paying_dis' => $no_paying_dis,
          'no_paying_ind' => $no_paying_ind,

          'road_acc_ad' => $road_acc_ad,
          'road_acc_deaths' => $road_acc_deaths,
          'natural_disa_ad' => $natural_disa_ad,
          'natural_disa_deaths' => $natural_disa_deaths,
          'work_inj_ad' => $work_inj_ad,
          'work_inj_deaths' => $work_inj_deaths,

      'num_rapport' => $num_rapport,
      'num_user' => $this->session->userdata('num_user')
    ))
            ->set('date_hospitalization_bcde', $this->session->userdata('add_date'))
            ->insert('Hospitalization_bcde');
    }

    public function fetch_data3(
      $low_birth,
      $newborns,
      $kmc_deaths,
      $kmc_standard,

      $num_rapport
    ) {
        return $this->db->set(array(
          'low_birth' => $low_birth,
          'newborns' => $newborns,
          'kmc_deaths' => $kmc_deaths,
          'kmc_standard' => $kmc_standard,

      'num_rapport' => $num_rapport
    ))
            ->set('date_kangaroo_mother_care', $this->session->userdata('add_date'))
            ->insert('Kangaroo_Mother_Care');
    }

    public function fetch_data4(
      $asphyxia_ad7m,
      $asphyxia_ad7f,
      $asphyxia_ad8m,
      $asphyxia_ad8f,
      $asphyxia_d7m,
      $asphyxia_d7f,
      $asphyxia_d8m,
      $asphyxia_d8f,

      $prematurity_ad7m,
      $prematurity_ad7f,
      $prematurity_ad8m,
      $prematurity_ad8f,
      $prematurity_d7m,
      $prematurity_d7f,
      $prematurity_d8m,
      $prematurity_d8f,

      $congenital_ad7m,
      $congenital_ad7f,
      $congenital_ad8m,
      $congenital_ad8f,
      $congenital_d7m,
      $congenital_d7f,
      $congenital_d8m,
      $congenital_d8f,

      $pneumonia_ad7m,
      $pneumonia_ad7f,
      $pneumonia_ad8m,
      $pneumonia_ad8f,
      $pneumonia_d7m,
      $pneumonia_d7f,
      $pneumonia_d8m,
      $pneumonia_d8f,

      $meningitis_ad7m,
      $meningitis_ad7f,
      $meningitis_ad8m,
      $meningitis_ad8f,
      $meningitis_d7m,
      $meningitis_d7f,
      $meningitis_d8m,
      $meningitis_d8f,

      $skin_ad7m,
      $skin_ad7f,
      $skin_ad8m,
      $skin_ad8f,
      $skin_d7m,
      $skin_d7f,
      $skin_d8m,
      $skin_d8f,

      $sepsis_ad7m,
      $sepsis_ad7f,
      $sepsis_ad8m,
      $sepsis_ad8f,
      $sepsis_d7m,
      $sepsis_d7f,
      $sepsis_d8m,
      $sepsis_d8f,

      $tetanus_ad7m,
      $tetanus_ad7f,
      $tetanus_ad8m,
      $tetanus_ad8f,
      $tetanus_d7m,
      $tetanus_d7f,
      $tetanus_d8m,
      $tetanus_d8f,

      $others_neonatal_ad7m,
      $others_neonatal_ad7f,
      $others_neonatal_ad8m,
      $others_neonatal_ad8f,
      $others_neonatal_d7m,
      $others_neonatal_d7f,
      $others_neonatal_d8m,
      $others_neonatal_d8f,

      $others_causes_ad7m,
      $others_causes_ad7f,
      $others_causes_ad8m,
      $others_causes_ad8f,
      $others_causes_d7m,
      $others_causes_d7f,
      $others_causes_d8m,
      $others_causes_d8f,

      $total_born_in_ad7m,
      $total_born_in_ad7f,
      $total_born_in_ad8m,
      $total_born_in_ad8f,
      $total_born_in_d7m,
      $total_born_in_d7f,
      $total_born_in_d8m,
      $total_born_in_d8f,

      $total_born_out_ad7m,
      $total_born_out_ad7f,
      $total_born_out_ad8m,
      $total_born_out_ad8f,
      $total_born_out_d7m,
      $total_born_out_d7f,
      $total_born_out_d8m,
      $total_born_out_d8f,

      $hypothermia,
      $risk_follow_up,
      $one_follow_up,
      $deaths_24,

      $num_rapport
    ) {
        return $this->db->set(array(
          'asphyxia_ad7m' => $asphyxia_ad7m,
          'asphyxia_ad7f' => $asphyxia_ad7f,
          'asphyxia_ad8m' => $asphyxia_ad8m,
          'asphyxia_ad8f' => $asphyxia_ad8f,
          'asphyxia_d7m' => $asphyxia_d7m,
          'asphyxia_d7f' => $asphyxia_d7f,
          'asphyxia_d8m' => $asphyxia_d8m,
          'asphyxia_d8f' => $asphyxia_d8f,

          'prematurity_ad7m' => $prematurity_ad7m,
          'prematurity_ad7f' => $prematurity_ad7f,
          'prematurity_ad8m' => $prematurity_ad8m,
          'prematurity_ad8f' => $prematurity_ad8f,
          'prematurity_d7m' => $prematurity_d7m,
          'prematurity_d7f' => $prematurity_d7f,
          'prematurity_d8m' => $prematurity_d8m,
          'prematurity_d8f' => $prematurity_d8f,

          'congenital_ad7m' => $congenital_ad7m,
          'congenital_ad7f' => $congenital_ad7f,
          'congenital_ad8m' => $congenital_ad8m,
          'congenital_ad8f' => $congenital_ad8f,
          'congenital_d7m' => $congenital_d7m,
          'congenital_d7f' => $congenital_d7f,
          'congenital_d8m' => $congenital_d8m,
          'congenital_d8f' => $congenital_d8f,

          'pneumonia_ad7m' => $pneumonia_ad7m,
          'pneumonia_ad7f' => $pneumonia_ad7f,
          'pneumonia_ad8m' => $pneumonia_ad8m,
          'pneumonia_ad8f' => $pneumonia_ad8f,
          'pneumonia_d7m' => $pneumonia_d7m,
          'pneumonia_d7f' => $pneumonia_d7f,
          'pneumonia_d8m' => $pneumonia_d8m,
          'pneumonia_d8f' => $pneumonia_d8f,

          'meningitis_ad7m' => $meningitis_ad7m,
          'meningitis_ad7f' => $meningitis_ad7f,
          'meningitis_ad8m' => $meningitis_ad8m,
          'meningitis_ad8f' => $meningitis_ad8f,
          'meningitis_d7m' => $meningitis_d7m,
          'meningitis_d7f' => $meningitis_d7f,
          'meningitis_d8m' => $meningitis_d8m,
          'meningitis_d8f' => $meningitis_d8f,

          'skin_ad7m' => $skin_ad7m,
          'skin_ad7f' => $skin_ad7f,
          'skin_ad8m' => $skin_ad8m,
          'skin_ad8f' => $skin_ad8f,
          'skin_d7m' => $skin_d7m,
          'skin_d7f' => $skin_d7f,
          'skin_d8m' => $skin_d8m,
          'skin_d8f' => $skin_d8f,

          'sepsis_ad7m' => $sepsis_ad7m,
          'sepsis_ad7f' => $sepsis_ad7f,
          'sepsis_ad8m' => $sepsis_ad8m,
          'sepsis_ad8f' => $sepsis_ad8f,
          'sepsis_d7m' => $sepsis_d7m,
          'sepsis_d7f' => $sepsis_d7f,
          'sepsis_d8m' => $sepsis_d8m,
          'sepsis_d8f' => $sepsis_d8f,

          'tetanus_ad7m' => $tetanus_ad7m,
          'tetanus_ad7f' => $tetanus_ad7f,
          'tetanus_ad8m' => $tetanus_ad8m,
          'tetanus_ad8f' => $tetanus_ad8f,
          'tetanus_d7m' => $tetanus_d7m,
          'tetanus_d7f' => $tetanus_d7f,
          'tetanus_d8m' => $tetanus_d8m,
          'tetanus_d8f' => $tetanus_d8f,

          'others_neonatal_ad7m' => $others_neonatal_ad7m,
          'others_neonatal_ad7f' => $others_neonatal_ad7f,
          'others_neonatal_ad8m' => $others_neonatal_ad8m,
          'others_neonatal_ad8f' => $others_neonatal_ad8f,
          'others_neonatal_d7m' => $others_neonatal_d7m,
          'others_neonatal_d7f' => $others_neonatal_d7f,
          'others_neonatal_d8m' => $others_neonatal_d8m,
          'others_neonatal_d8f' => $others_neonatal_d8f,

          'others_causes_ad7m' => $others_causes_ad7m,
          'others_causes_ad7f' => $others_causes_ad7f,
          'others_causes_ad8m' => $others_causes_ad8m,
          'others_causes_ad8f' => $others_causes_ad8f,
          'others_causes_d7m' => $others_causes_d7m,
          'others_causes_d7f' => $others_causes_d7f,
          'others_causes_d8m' => $others_causes_d8m,
          'others_causes_d8f' => $others_causes_d8f,

          'total_born_in_ad7m' => $total_born_in_ad7m,
          'total_born_in_ad7f' => $total_born_in_ad7f,
          'total_born_in_ad8m' => $total_born_in_ad8m,
          'total_born_in_ad8f' => $total_born_in_ad8f,
          'total_born_in_d7m' => $total_born_in_d7m,
          'total_born_in_d7f' => $total_born_in_d7f,
          'total_born_in_d8m' => $total_born_in_d8m,
          'total_born_in_d8f' => $total_born_in_d8f,

          'total_born_out_ad7m' => $total_born_out_ad7m,
          'total_born_out_ad7f' => $total_born_out_ad7f,
          'total_born_out_ad8m' => $total_born_out_ad8m,
          'total_born_out_ad8f' => $total_born_out_ad8f,
          'total_born_out_d7m' => $total_born_out_d7m,
          'total_born_out_d7f' => $total_born_out_d7f,
          'total_born_out_d8m' => $total_born_out_d8m,
          'total_born_out_d8f' => $total_born_out_d8f,

          'hypothermia' => $hypothermia,
          'risk_follow_up' => $risk_follow_up,
          'one_follow_up' => $one_follow_up,
          'deaths_24' => $deaths_24,

      'num_rapport' => $num_rapport
    ))
            ->set('date_neonatal', $this->session->userdata('add_date'))
            ->insert('Neonatal');
    }

    public function show_table1()
    {
        return $this->db->where('date_hospitalization_a', $this->session->userdata('update_date'))
                        ->get('Hospitalization_a')
                        ->row();
    }

    public function show_table2()
    {
        return $this->db->where('date_hospitalization_bcde', $this->session->userdata('update_date'))
                        ->where('num_user', $this->session->userdata('num_user'))
                        ->get('Hospitalization_bcde')
                        ->row();
    }

    public function show_table3()
    {
        return $this->db->where('date_kangaroo_mother_care', $this->session->userdata('update_date'))
                        ->get('Kangaroo_Mother_Care')
                        ->row();
    }

    public function show_table4()
    {
        return $this->db->where('date_neonatal', $this->session->userdata('update_date'))
                        ->get('Neonatal')
                        ->row();
    }

    public function num_rapport()
    {
        return $this->db->where('date_rapport', $this->session->userdata('add_date'))
                      ->get('rapport')
                      ->row();
    }

    public function update_data1(
      $n_beds,
      $n_present_start,
      $n_admissions,
      $n_referred,
      $n_no_referred,
      $n_discharges,
      $n_authorized,
      $n_abandoned,
      $n_deaths,
      $n_dis_referred,
      $n_counter,
      $n_present_end,
      $n_total,
      $n_actual
    ) {
        $this->db->set('n_beds', $n_beds);
        $this->db->set('n_present_start', $n_present_start);
        $this->db->set('n_admissions', $n_admissions);
        $this->db->set('n_referred', $n_referred);
        $this->db->set('n_no_referred', $n_no_referred);
        $this->db->set('n_discharges', $n_discharges);
        $this->db->set('n_authorized', $n_authorized);
        $this->db->set('n_abandoned', $n_abandoned);
        $this->db->set('n_deaths', $n_deaths);
        $this->db->set('n_dis_referred', $n_dis_referred);
        $this->db->set('n_counter', $n_counter);
        $this->db->set('n_present_end', $n_present_end);
        $this->db->set('n_total', $n_total);
        $this->db->set('n_actual', $n_actual);

        $this->db->where('date_hospitalization_a', $this->session->userdata('update_date'));
        return $this->db->update('Hospitalization_a');
    }

    public function update_data2(
      $hosp_1m,
      $hosp_1f,
      $deaths_1m,
      $deaths_1f,

      $insured_dis,
      $no_paying_dis,
      $no_paying_ind,

      $road_acc_ad,
      $road_acc_deaths,
      $natural_disa_ad,
      $natural_disa_deaths,
      $work_inj_ad,
      $work_inj_deaths
    ) {
        $this->db->set('hosp_1m', $hosp_1m);
        $this->db->set('hosp_1f', $hosp_1f);

        $this->db->set('deaths_1m', $deaths_1m);
        $this->db->set('deaths_1f', $deaths_1f);

        $this->db->set('insured_dis', $insured_dis);
        $this->db->set('no_paying_dis', $no_paying_dis);
        $this->db->set('no_paying_ind', $no_paying_ind);

        $this->db->set('road_acc_ad', $road_acc_ad);
        $this->db->set('road_acc_deaths', $road_acc_deaths);
        $this->db->set('natural_disa_ad', $natural_disa_ad);
        $this->db->set('natural_disa_deaths', $natural_disa_deaths);
        $this->db->set('work_inj_ad', $work_inj_ad);
        $this->db->set('work_inj_deaths', $work_inj_deaths);

        $this->db->where('date_hospitalization_bcde', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Hospitalization_bcde');
    }

    public function update_data3(
      $low_birth,
      $newborns,
      $kmc_deaths,
      $kmc_standard
    ) {
        $this->db->set('low_birth', $low_birth);
        $this->db->set('newborns', $newborns);

        $this->db->set('kmc_deaths', $kmc_deaths);
        $this->db->set('kmc_standard', $kmc_standard);

        $this->db->where('date_kangaroo_mother_care', $this->session->userdata('update_date'));
        return $this->db->update('Kangaroo_Mother_Care');
    }

    public function update_data4(
      $asphyxia_ad7m,
      $asphyxia_ad7f,
      $asphyxia_ad8m,
      $asphyxia_ad8f,
      $asphyxia_d7m,
      $asphyxia_d7f,
      $asphyxia_d8m,
      $asphyxia_d8f,

      $prematurity_ad7m,
      $prematurity_ad7f,
      $prematurity_ad8m,
      $prematurity_ad8f,
      $prematurity_d7m,
      $prematurity_d7f,
      $prematurity_d8m,
      $prematurity_d8f,

      $congenital_ad7m,
      $congenital_ad7f,
      $congenital_ad8m,
      $congenital_ad8f,
      $congenital_d7m,
      $congenital_d7f,
      $congenital_d8m,
      $congenital_d8f,

      $pneumonia_ad7m,
      $pneumonia_ad7f,
      $pneumonia_ad8m,
      $pneumonia_ad8f,
      $pneumonia_d7m,
      $pneumonia_d7f,
      $pneumonia_d8m,
      $pneumonia_d8f,

      $meningitis_ad7m,
      $meningitis_ad7f,
      $meningitis_ad8m,
      $meningitis_ad8f,
      $meningitis_d7m,
      $meningitis_d7f,
      $meningitis_d8m,
      $meningitis_d8f,

      $skin_ad7m,
      $skin_ad7f,
      $skin_ad8m,
      $skin_ad8f,
      $skin_d7m,
      $skin_d7f,
      $skin_d8m,
      $skin_d8f,

      $sepsis_ad7m,
      $sepsis_ad7f,
      $sepsis_ad8m,
      $sepsis_ad8f,
      $sepsis_d7m,
      $sepsis_d7f,
      $sepsis_d8m,
      $sepsis_d8f,

      $tetanus_ad7m,
      $tetanus_ad7f,
      $tetanus_ad8m,
      $tetanus_ad8f,
      $tetanus_d7m,
      $tetanus_d7f,
      $tetanus_d8m,
      $tetanus_d8f,

      $others_neonatal_ad7m,
      $others_neonatal_ad7f,
      $others_neonatal_ad8m,
      $others_neonatal_ad8f,
      $others_neonatal_d7m,
      $others_neonatal_d7f,
      $others_neonatal_d8m,
      $others_neonatal_d8f,

      $others_causes_ad7m,
      $others_causes_ad7f,
      $others_causes_ad8m,
      $others_causes_ad8f,
      $others_causes_d7m,
      $others_causes_d7f,
      $others_causes_d8m,
      $others_causes_d8f,

      $total_born_in_ad7m,
      $total_born_in_ad7f,
      $total_born_in_ad8m,
      $total_born_in_ad8f,
      $total_born_in_d7m,
      $total_born_in_d7f,
      $total_born_in_d8m,
      $total_born_in_d8f,

      $total_born_out_ad7m,
      $total_born_out_ad7f,
      $total_born_out_ad8m,
      $total_born_out_ad8f,
      $total_born_out_d7m,
      $total_born_out_d7f,
      $total_born_out_d8m,
      $total_born_out_d8f,

      $hypothermia,
      $risk_follow_up,
      $one_follow_up,
      $deaths_24
    ) {
        $this->db->set('asphyxia_ad7m', $asphyxia_ad7m);
        $this->db->set('asphyxia_ad7f', $asphyxia_ad7f);
        $this->db->set('asphyxia_ad8m', $asphyxia_ad8m);
        $this->db->set('asphyxia_ad8f', $asphyxia_ad8f);
        $this->db->set('asphyxia_d7m', $asphyxia_d7m);
        $this->db->set('asphyxia_d7f', $asphyxia_d7f);
        $this->db->set('asphyxia_d8m', $asphyxia_d8m);
        $this->db->set('asphyxia_d8f', $asphyxia_d8f);

        $this->db->set('prematurity_ad7m', $prematurity_ad7m);
        $this->db->set('prematurity_ad7f', $prematurity_ad7f);
        $this->db->set('prematurity_ad8m', $prematurity_ad8m);
        $this->db->set('prematurity_ad8f', $prematurity_ad8f);
        $this->db->set('prematurity_d7m', $prematurity_d7m);
        $this->db->set('prematurity_d7f', $prematurity_d7f);
        $this->db->set('prematurity_d8m', $prematurity_d8m);
        $this->db->set('prematurity_d8f', $prematurity_d8f);

        $this->db->set('congenital_ad7m', $congenital_ad7m);
        $this->db->set('congenital_ad7f', $congenital_ad7f);
        $this->db->set('congenital_ad8m', $congenital_ad8m);
        $this->db->set('congenital_ad8f', $congenital_ad8f);
        $this->db->set('congenital_d7m', $congenital_d7m);
        $this->db->set('congenital_d7f', $congenital_d7f);
        $this->db->set('congenital_d8m', $congenital_d8m);
        $this->db->set('congenital_d8f', $congenital_d8f);

        $this->db->set('pneumonia_ad7m', $pneumonia_ad7m);
        $this->db->set('pneumonia_ad7f', $pneumonia_ad7f);
        $this->db->set('pneumonia_ad8m', $pneumonia_ad8m);
        $this->db->set('pneumonia_ad8f', $pneumonia_ad8f);
        $this->db->set('pneumonia_d7m', $pneumonia_d7m);
        $this->db->set('pneumonia_d7f', $pneumonia_d7f);
        $this->db->set('pneumonia_d8m', $pneumonia_d8m);
        $this->db->set('pneumonia_d8f', $pneumonia_d8f);

        $this->db->set('meningitis_ad7m', $meningitis_ad7m);
        $this->db->set('meningitis_ad7f', $meningitis_ad7f);
        $this->db->set('meningitis_ad8m', $meningitis_ad8m);
        $this->db->set('meningitis_ad8f', $meningitis_ad8f);
        $this->db->set('meningitis_d7m', $meningitis_d7m);
        $this->db->set('meningitis_d7f', $meningitis_d7f);
        $this->db->set('meningitis_d8m', $meningitis_d8m);
        $this->db->set('meningitis_d8f', $meningitis_d8f);

        $this->db->set('skin_ad7m', $skin_ad7m);
        $this->db->set('skin_ad7f', $skin_ad7f);
        $this->db->set('skin_ad8m', $skin_ad8m);
        $this->db->set('skin_ad8f', $skin_ad8f);
        $this->db->set('skin_d7m', $skin_d7m);
        $this->db->set('skin_d7f', $skin_d7f);
        $this->db->set('skin_d8m', $skin_d8m);
        $this->db->set('skin_d8f', $skin_d8f);

        $this->db->set('sepsis_ad7m', $sepsis_ad7m);
        $this->db->set('sepsis_ad7f', $sepsis_ad7f);
        $this->db->set('sepsis_ad8m', $sepsis_ad8m);
        $this->db->set('sepsis_ad8f', $sepsis_ad8f);
        $this->db->set('sepsis_d7m', $sepsis_d7m);
        $this->db->set('sepsis_d7f', $sepsis_d7f);
        $this->db->set('sepsis_d8m', $sepsis_d8m);
        $this->db->set('sepsis_d8f', $sepsis_d8f);

        $this->db->set('tetanus_ad7m', $tetanus_ad7m);
        $this->db->set('tetanus_ad7f', $tetanus_ad7f);
        $this->db->set('tetanus_ad8m', $tetanus_ad8m);
        $this->db->set('tetanus_ad8f', $tetanus_ad8f);
        $this->db->set('tetanus_d7m', $tetanus_d7m);
        $this->db->set('tetanus_d7f', $tetanus_d7f);
        $this->db->set('tetanus_d8m', $tetanus_d8m);
        $this->db->set('tetanus_d8f', $tetanus_d8f);

        $this->db->set('others_neonatal_ad7m', $others_neonatal_ad7m);
        $this->db->set('others_neonatal_ad7f', $others_neonatal_ad7f);
        $this->db->set('others_neonatal_ad8m', $others_neonatal_ad8m);
        $this->db->set('others_neonatal_ad8f', $others_neonatal_ad8f);
        $this->db->set('others_neonatal_d7m', $others_neonatal_d7m);
        $this->db->set('others_neonatal_d7f', $others_neonatal_d7f);
        $this->db->set('others_neonatal_d8m', $others_neonatal_d8m);
        $this->db->set('others_neonatal_d8f', $others_neonatal_d8f);

        $this->db->set('others_causes_ad7m', $others_causes_ad7m);
        $this->db->set('others_causes_ad7f', $others_causes_ad7f);
        $this->db->set('others_causes_ad8m', $others_causes_ad8m);
        $this->db->set('others_causes_ad8f', $others_causes_ad8f);
        $this->db->set('others_causes_d7m', $others_causes_d7m);
        $this->db->set('others_causes_d7f', $others_causes_d7f);
        $this->db->set('others_causes_d8m', $others_causes_d8m);
        $this->db->set('others_causes_d8f', $others_causes_d8f);

        $this->db->set('total_born_in_ad7m', $total_born_in_ad7m);
        $this->db->set('total_born_in_ad7f', $total_born_in_ad7f);
        $this->db->set('total_born_in_ad8m', $total_born_in_ad8m);
        $this->db->set('total_born_in_ad8f', $total_born_in_ad8f);
        $this->db->set('total_born_in_d7m', $total_born_in_d7m);
        $this->db->set('total_born_in_d7f', $total_born_in_d7f);
        $this->db->set('total_born_in_d8m', $total_born_in_d8m);
        $this->db->set('total_born_in_d8f', $total_born_in_d8f);

        $this->db->set('total_born_out_ad7m', $total_born_out_ad7m);
        $this->db->set('total_born_out_ad7f', $total_born_out_ad7f);
        $this->db->set('total_born_out_ad8m', $total_born_out_ad8m);
        $this->db->set('total_born_out_ad8f', $total_born_out_ad8f);
        $this->db->set('total_born_out_d7m', $total_born_out_d7m);
        $this->db->set('total_born_out_d7f', $total_born_out_d7f);
        $this->db->set('total_born_out_d8m', $total_born_out_d8m);
        $this->db->set('total_born_out_d8f', $total_born_out_d8f);

        $this->db->set('hypothermia', $hypothermia);
        $this->db->set('risk_follow_up', $risk_follow_up);
        $this->db->set('one_follow_up', $one_follow_up);
        $this->db->set('deaths_24', $deaths_24);

        $this->db->where('date_neonatal', $this->session->userdata('update_date'));
        return $this->db->update('Neonatal');
    }
}
