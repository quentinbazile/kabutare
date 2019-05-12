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
      $e_beds,
      $e_present_start,
      $e_admissions,
      $e_referred,
      $e_no_referred,
      $e_discharges,
      $e_authorized,
      $e_abandoned,
      $e_deaths,
      $e_dis_referred,
      $e_counter,
      $e_present_end,
      $e_total,
      $e_actual,
      $num_rapport
    ) {
      $this->db->where('date_hospitalization_a', $this->session->userdata('add_date'));
      $q = $this->db->get('Hospitalization_a');
      if ($q->num_rows() == 0) {
        return $this->db->set(array(
          'e_beds' => $e_beds,
          'e_present_start' => $e_present_start,
          'e_admissions' => $e_admissions,
          'e_referred' => $e_referred,
          'e_no_referred' => $e_no_referred,
          'e_discharges' => $e_discharges,
          'e_authorized' => $e_authorized,
          'e_abandoned' => $e_abandoned,
          'e_deaths' => $e_deaths,
          'e_dis_referred' => $e_dis_referred,
          'e_counter' => $e_counter,
          'e_present_end' => $e_present_end,
          'e_total' => $e_total,
          'e_actual' => $e_actual,

      'num_rapport' => $num_rapport
    ))
            ->set('date_hospitalization_a', $this->session->userdata('add_date'))
            ->insert('Hospitalization_a');
          } else {
              $this->db->set(array(
                'e_beds' => $e_beds,
                'e_present_start' => $e_present_start,
                'e_admissions' => $e_admissions,
                'e_referred' => $e_referred,
                'e_no_referred' => $e_no_referred,
                'e_discharges' => $e_discharges,
                'e_authorized' => $e_authorized,
                'e_abandoned' => $e_abandoned,
                'e_deaths' => $e_deaths,
                'e_dis_referred' => $e_dis_referred,
                'e_counter' => $e_counter,
                'e_present_end' => $e_present_end,
                'e_total' => $e_total,
                'e_actual' => $e_actual,

            'num_rapport' => $num_rapport
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
            ->set('date_kangaroo_moher_care', $this->session->userdata('add_date'))
            ->insert('Kangaroo_Mother_Care');
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
                        ->get('Hospitalization_bcde')
                        ->row();
    }

    public function show_table3()
    {
        return $this->db->where('date_kangaroo_mother_care', $this->session->userdata('update_date'))
                        ->get('Kangaroo_Mother_Care')
                        ->row();
    }

    public function num_rapport()
    {
        return $this->db->where('date_rapport', $this->session->userdata('add_date'))
                      ->get('rapport')
                      ->row();
    }

    public function update_data1(
      $e_beds,
      $e_present_start,
      $e_admissions,
      $e_referred,
      $e_no_referred,
      $e_discharges,
      $e_authorized,
      $e_abandoned,
      $e_deaths,
      $e_dis_referred,
      $e_counter,
      $e_present_end,
      $e_total,
      $e_actual
    ) {
        $this->db->set('e_beds', $e_beds);
        $this->db->set('e_present_start', $e_present_start);
        $this->db->set('e_admissions', $e_admissions);
        $this->db->set('e_referred', $e_referred);
        $this->db->set('e_no_referred', $e_no_referred);
        $this->db->set('e_discharges', $e_discharges);
        $this->db->set('e_authorized', $e_authorized);
        $this->db->set('e_abandoned', $e_abandoned);
        $this->db->set('e_deaths', $e_deaths);
        $this->db->set('e_dis_referred', $e_dis_referred);
        $this->db->set('e_counter', $e_counter);
        $this->db->set('e_present_end', $e_present_end);
        $this->db->set('e_total', $e_total);
        $this->db->set('e_actual', $e_actual);

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
}
