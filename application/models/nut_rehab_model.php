<?php
class nut_rehab_model extends CI_Model
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
      $screened_6,
      $screened_7,
      $screened_2,
      $screened_5,
      $screened_15,
      $malnourished_6,
      $malnourished_7,
      $malnourished_2,
      $malnourished_5,
      $malnourished_15,
      $acute_sev_6,
      $acute_sev_7,
      $acute_sev_2,
      $acute_sev_5,
      $acute_sev_15,
      $acute_mod_6,
      $acute_mod_7,
      $acute_mod_2,
      $acute_mod_5,
      $acute_mod_15,
      $under_sev_6,
      $under_sev_7,
      $under_sev_2,
      $under_sev_5,
      $under_mod_6,
      $under_mod_7,
      $under_mod_2,
      $under_mod_5,
      $chronic_sev_6,
      $chronic_sev_7,
      $chronic_sev_2,
      $chronic_sev_5,
      $chronic_mod_6,
      $chronic_mod_7,
      $chronic_mod_2,
      $chronic_mod_5,
      $outpatient_6,
      $outpatient_7,
      $outpatient_2,
      $outpatient_5,
      $outpatient_15,
      $inpatient_6,
      $inpatient_7,
      $inpatient_2,
      $inpatient_5,
      $inpatient_15,

      $num_rapport
    ) {
        return $this->db->set(array(
          'screened_6' => $screened_6,
          'screened_7' => $screened_7,
          'screened_2' => $screened_2,
          'screened_5' => $screened_5,
          'screened_15' => $screened_15,

          'malnourished_6' => $malnourished_6,
          'malnourished_7' => $malnourished_7,
          'malnourished_2' => $malnourished_2,
          'malnourished_5' => $malnourished_5,
          'malnourished_15' => $malnourished_15,

          'acute_sev_6' => $acute_sev_6,
          'acute_sev_7' => $acute_sev_7,
          'acute_sev_2' => $acute_sev_2,
          'acute_sev_5' => $acute_sev_5,
          'acute_sev_15' => $acute_sev_15,

          'acute_mod_6' => $acute_mod_6,
          'acute_mod_7' => $acute_mod_7,
          'acute_mod_2' => $acute_mod_2,
          'acute_mod_5' => $acute_mod_5,
          'acute_mod_15' => $acute_mod_15,

          'under_sev_6' => $under_sev_6,
          'under_sev_7' => $under_sev_7,
          'under_sev_2' => $under_sev_2,
          'under_sev_5' => $under_sev_5,

          'under_mod_6' => $under_mod_6,
          'under_mod_7' => $under_mod_7,
          'under_mod_2' => $under_mod_2,
          'under_mod_5' => $under_mod_5,

          'chronic_sev_6' => $chronic_sev_6,
          'chronic_sev_7' => $chronic_sev_7,
          'chronic_sev_2' => $chronic_sev_2,
          'chronic_sev_5' => $chronic_sev_5,

          'chronic_mod_6' => $chronic_mod_6,
          'chronic_mod_7' => $chronic_mod_7,
          'chronic_mod_2' => $chronic_mod_2,
          'chronic_mod_5' => $chronic_mod_5,

          'outpatient_6' => $outpatient_6,
          'outpatient_7' => $outpatient_7,
          'outpatient_2' => $outpatient_2,
          'outpatient_5' => $outpatient_5,
          'outpatient_15' => $outpatient_15,

          'inpatient_6' => $inpatient_6,
          'inpatient_7' => $inpatient_7,
          'inpatient_2' => $inpatient_2,
          'inpatient_5' => $inpatient_5,
          'inpatient_15' => $inpatient_15,

      'num_rapport' => $num_rapport
    ))
            ->set('date_nutrition_screening', $this->session->userdata('add_date'))
            ->insert('Nutrition_Screening');
    }

    public function fetch_data4(
      $present_start_mod4,
      $present_start_mod5,
      $present_start_sev4,
      $present_start_sev5,
      $present_start_pw,
      $present_start_lw,
      $nc_mod4,
      $nc_mod5,
      $nc_sev4,
      $nc_sev5,
      $nc_pw,
      $nc_lw,
      $relapsed_mod4,
      $relapsed_mod5,
      $relapsed_sev4,
      $relapsed_sev5,
      $relapsed_pw,
      $relapsed_lw,
      $cured_mod4,
      $cured_mod5,
      $cured_sev4,
      $cured_sev5,
      $cured_pw,
      $cured_lw,
      $referred_mod4,
      $referred_mod5,
      $referred_sev4,
      $referred_sev5,
      $referred_pw,
      $referred_lw,
      $abandoned_mod4,
      $abandoned_mod5,
      $abandoned_sev4,
      $abandoned_sev5,
      $abandoned_pw,
      $abandoned_lw,
      $died_mod4,
      $died_mod5,
      $died_sev4,
      $died_sev5,
      $died_pw,
      $died_lw,
      $present_end_mod4,
      $present_end_mod5,
      $present_end_sev4,
      $present_end_sev5,
      $present_end_pw,
      $present_end_lw,

      $num_rapport
    ) {
        return $this->db->set(array(
          'present_start_mod4' => $present_start_mod4,
          'present_start_mod5' => $present_start_mod5,
          'present_start_sev4' => $present_start_sev4,
          'present_start_sev5' => $present_start_sev5,
          'present_start_pw' => $present_start_pw,
          'present_start_lw' => $present_start_lw,

          'nc_mod4' => $nc_mod4,
          'nc_mod5' => $nc_mod5,
          'nc_sev4' => $nc_sev4,
          'nc_sev5' => $nc_sev5,
          'nc_pw' => $nc_pw,
          'nc_lw' => $nc_lw,

          'relapsed_mod4' => $relapsed_mod4,
          'relapsed_mod5' => $relapsed_mod5,
          'relapsed_sev4' => $relapsed_sev4,
          'relapsed_sev5' => $relapsed_sev5,
          'relapsed_pw' => $relapsed_pw,
          'relapsed_lw' => $relapsed_lw,

          'cured_mod4' => $cured_mod4,
          'cured_mod5' => $cured_mod5,
          'cured_sev4' => $cured_sev4,
          'cured_sev5' => $cured_sev5,
          'cured_pw' => $cured_pw,
          'cured_lw' => $cured_lw,

          'referred_mod4' => $referred_mod4,
          'referred_mod5' => $referred_mod5,
          'referred_sev4' => $referred_sev4,
          'referred_sev5' => $referred_sev5,
          'referred_pw' => $referred_pw,
          'referred_lw' => $referred_lw,

          'abandoned_mod4' => $abandoned_mod4,
          'abandoned_mod5' => $abandoned_mod5,
          'abandoned_sev4' => $abandoned_sev4,
          'abandoned_sev5' => $abandoned_sev5,
          'abandoned_pw' => $abandoned_pw,
          'abandoned_lw' => $abandoned_lw,

          'died_mod4' => $died_mod4,
          'died_mod5' => $died_mod5,
          'died_sev4' => $died_sev4,
          'died_sev5' => $died_sev5,
          'died_pw' => $died_pw,
          'died_lw' => $died_lw,

          'present_end_mod4' => $present_end_mod4,
          'present_end_mod5' => $present_end_mod5,
          'present_end_sev4' => $present_end_sev4,
          'present_end_sev5' => $present_end_sev5,
          'present_end_pw' => $present_end_pw,
          'present_end_lw' => $present_end_lw,

      'num_rapport' => $num_rapport
    ))
            ->set('date_malnourished_rehabilitation', $this->session->userdata('add_date'))
            ->insert('Malnourished_rehabilitation');
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
        return $this->db->where('date_nutrition_screening', $this->session->userdata('update_date'))
                        ->get('Nutrition_Screening')
                        ->row();
    }

    public function show_table4()
    {
        return $this->db->where('date_malnourished_rehabilitation', $this->session->userdata('update_date'))
                        ->get('Malnourished_rehabilitation')
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
      $screened_6,
      $screened_7,
      $screened_2,
      $screened_5,
      $screened_15,
      $malnourished_6,
      $malnourished_7,
      $malnourished_2,
      $malnourished_5,
      $malnourished_15,
      $acute_sev_6,
      $acute_sev_7,
      $acute_sev_2,
      $acute_sev_5,
      $acute_sev_15,
      $acute_mod_6,
      $acute_mod_7,
      $acute_mod_2,
      $acute_mod_5,
      $acute_mod_15,
      $under_sev_6,
      $under_sev_7,
      $under_sev_2,
      $under_sev_5,
      $under_mod_6,
      $under_mod_7,
      $under_mod_2,
      $under_mod_5,
      $chronic_sev_6,
      $chronic_sev_7,
      $chronic_sev_2,
      $chronic_sev_5,
      $chronic_mod_6,
      $chronic_mod_7,
      $chronic_mod_2,
      $chronic_mod_5,
      $outpatient_6,
      $outpatient_7,
      $outpatient_2,
      $outpatient_5,
      $outpatient_15,
      $inpatient_6,
      $inpatient_7,
      $inpatient_2,
      $inpatient_5,
      $inpatient_15
    ) {
        $this->db->set('screened_6', $screened_6);
        $this->db->set('screened_7', $screened_7);
        $this->db->set('screened_2', $screened_2);
        $this->db->set('screened_5', $screened_5);
        $this->db->set('screened_15', $screened_15);

        $this->db->set('malnourished_6', $malnourished_6);
        $this->db->set('malnourished_7', $malnourished_7);
        $this->db->set('malnourished_2', $malnourished_2);
        $this->db->set('malnourished_5', $malnourished_5);
        $this->db->set('malnourished_15', $malnourished_15);

        $this->db->set('acute_sev_6', $acute_sev_6);
        $this->db->set('acute_sev_7', $acute_sev_7);
        $this->db->set('acute_sev_2', $acute_sev_2);
        $this->db->set('acute_sev_5', $acute_sev_5);
        $this->db->set('acute_sev_15', $acute_sev_15);

        $this->db->set('acute_mod_6', $acute_mod_6);
        $this->db->set('acute_mod_7', $acute_mod_7);
        $this->db->set('acute_mod_2', $acute_mod_2);
        $this->db->set('acute_mod_5', $acute_mod_5);
        $this->db->set('acute_mod_15', $acute_mod_15);

        $this->db->set('under_sev_6', $under_sev_6);
        $this->db->set('under_sev_7', $under_sev_7);
        $this->db->set('under_sev_2', $under_sev_2);
        $this->db->set('under_sev_5', $under_sev_5);

        $this->db->set('under_mod_6', $under_mod_6);
        $this->db->set('under_mod_7', $under_mod_7);
        $this->db->set('under_mod_2', $under_mod_2);
        $this->db->set('under_mod_5', $under_mod_5);

        $this->db->set('chronic_sev_6', $chronic_sev_6);
        $this->db->set('chronic_sev_7', $chronic_sev_7);
        $this->db->set('chronic_sev_2', $chronic_sev_2);
        $this->db->set('chronic_sev_5', $chronic_sev_5);

        $this->db->set('chronic_mod_6', $chronic_mod_6);
        $this->db->set('chronic_mod_7', $chronic_mod_7);
        $this->db->set('chronic_mod_2', $chronic_mod_2);
        $this->db->set('chronic_mod_5', $chronic_mod_5);

        $this->db->set('outpatient_6', $outpatient_6);
        $this->db->set('outpatient_7', $outpatient_7);
        $this->db->set('outpatient_2', $outpatient_2);
        $this->db->set('outpatient_5', $outpatient_5);
        $this->db->set('outpatient_15', $outpatient_15);

        $this->db->set('inpatient_6', $inpatient_6);
        $this->db->set('inpatient_7', $inpatient_7);
        $this->db->set('inpatient_2', $inpatient_2);
        $this->db->set('inpatient_5', $inpatient_5);
        $this->db->set('inpatient_15', $inpatient_15);

        $this->db->where('date_nutrition_screening', $this->session->userdata('update_date'));
        return $this->db->update('Nutrition_Screening');
    }

    public function update_data4(
      $present_start_mod4,
      $present_start_mod5,
      $present_start_sev4,
      $present_start_sev5,
      $present_start_pw,
      $present_start_lw,
      $nc_mod4,
      $nc_mod5,
      $nc_sev4,
      $nc_sev5,
      $nc_pw,
      $nc_lw,
      $relapsed_mod4,
      $relapsed_mod5,
      $relapsed_sev4,
      $relapsed_sev5,
      $relapsed_pw,
      $relapsed_lw,
      $cured_mod4,
      $cured_mod5,
      $cured_sev4,
      $cured_sev5,
      $cured_pw,
      $cured_lw,
      $referred_mod4,
      $referred_mod5,
      $referred_sev4,
      $referred_sev5,
      $referred_pw,
      $referred_lw,
      $abandoned_mod4,
      $abandoned_mod5,
      $abandoned_sev4,
      $abandoned_sev5,
      $abandoned_pw,
      $abandoned_lw,
      $died_mod4,
      $died_mod5,
      $died_sev4,
      $died_sev5,
      $died_pw,
      $died_lw,
      $present_end_mod4,
      $present_end_mod5,
      $present_end_sev4,
      $present_end_sev5,
      $present_end_pw,
      $present_end_lw
    ) {
        $this->db->set('present_start_mod4', $present_start_mod4);
        $this->db->set('present_start_mod5', $present_start_mod5);
        $this->db->set('present_start_sev4', $present_start_sev4);
        $this->db->set('present_start_sev5', $present_start_sev5);
        $this->db->set('present_start_pw', $present_start_pw);
        $this->db->set('present_start_lw', $present_start_lw);

        $this->db->set('nc_mod4', $nc_mod4);
        $this->db->set('nc_mod5', $nc_mod5);
        $this->db->set('nc_sev4', $nc_sev4);
        $this->db->set('nc_sev5', $nc_sev5);
        $this->db->set('nc_pw', $nc_pw);
        $this->db->set('nc_lw', $nc_lw);

        $this->db->set('relapsed_mod4', $relapsed_mod4);
        $this->db->set('relapsed_mod5', $relapsed_mod5);
        $this->db->set('relapsed_sev4', $relapsed_sev4);
        $this->db->set('relapsed_sev5', $relapsed_sev5);
        $this->db->set('relapsed_pw', $relapsed_pw);
        $this->db->set('relapsed_lw', $relapsed_lw);

        $this->db->set('cured_mod4', $cured_mod4);
        $this->db->set('cured_mod5', $cured_mod5);
        $this->db->set('cured_sev4', $cured_sev4);
        $this->db->set('cured_sev5', $cured_sev5);
        $this->db->set('cured_pw', $cured_pw);
        $this->db->set('cured_lw', $cured_lw);

        $this->db->set('referred_mod4', $referred_mod4);
        $this->db->set('referred_mod5', $referred_mod5);
        $this->db->set('referred_sev4', $referred_sev4);
        $this->db->set('referred_sev5', $referred_sev5);
        $this->db->set('referred_pw', $referred_pw);
        $this->db->set('referred_lw', $referred_lw);

        $this->db->set('abandoned_mod4', $abandoned_mod4);
        $this->db->set('abandoned_mod5', $abandoned_mod5);
        $this->db->set('abandoned_sev4', $abandoned_sev4);
        $this->db->set('abandoned_sev5', $abandoned_sev5);
        $this->db->set('abandoned_pw', $abandoned_pw);
        $this->db->set('abandoned_lw', $abandoned_lw);

        $this->db->set('died_mod4', $died_mod4);
        $this->db->set('died_mod5', $died_mod5);
        $this->db->set('died_sev4', $died_sev4);
        $this->db->set('died_sev5', $died_sev5);
        $this->db->set('died_pw', $died_pw);
        $this->db->set('died_lw', $died_lw);

        $this->db->set('present_end_mod4', $present_end_mod4);
        $this->db->set('present_end_mod5', $present_end_mod5);
        $this->db->set('present_end_sev4', $present_end_sev4);
        $this->db->set('present_end_sev5', $present_end_sev5);
        $this->db->set('present_end_pw', $present_end_pw);
        $this->db->set('present_end_lw', $present_end_lw);

        $this->db->where('date_malnourished_rehabilitation', $this->session->userdata('update_date'));
        return $this->db->update('Malnourished_rehabilitation');
    }
}
