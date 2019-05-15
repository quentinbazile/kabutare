<?php
class family_planning_model extends CI_Model
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
      $oral_contra_proges_accep,
        $oral_contra_proges_ppfp,
        $oral_contra_proges_stop,
        $oral_contra_proges_users,
      $oral_contra_proges_active,
        $oral_contra_proges_refer,
      $oral_contra_proges_quant,
        $oral_contra_proges_stock,
        $oral_contra_proges_day,
      $oral_contra_comb_accep,
        $oral_contra_comb_stop,
        $oral_contra_comb_users,
      $oral_contra_comb_active,
        $oral_contra_comb_refer,
      $oral_contra_comb_quant,
        $oral_contra_comb_stock,
        $oral_contra_comb_day,
      $inject_depo_accep,
        $inject_depo_stop,
        $inject_depo_users,
      $inject_depo_active,
        $inject_depo_refer,
      $inject_depo_quant,
        $inject_depo_stock,
        $inject_depo_day,
      $inject_nor_accep,
        $inject_nor_stop,
        $inject_nor_users,
      $inject_nor_active,
      $inject_nor_quant,
        $inject_nor_stock,
        $inject_nor_day,
      $implants_nxt_accep,
        $implants_nxt_ppfp,
        $implants_nxt_stop,
        $implants_nxt_users,
      $implants_nxt_active,
      $implants_nxt_quant,
        $implants_nxt_stock,
        $implants_nxt_day,
      $implants_jad_accep,
        $implants_jad_ppfp,
        $implants_jad_stop,
        $implants_jad_users,
      $implants_jad_active,
      $implants_jad_quant,
        $implants_jad_stock,
        $implants_jad_day,
      $iud_accep,
        $iud_ppfp,
        $iud_stop,
        $iud_users,
      $iud_active,
      $iud_quant,
        $iud_stock,
        $iud_day,
      $m_condoms_accep,
        $m_condoms_ppfp,
        $m_condoms_stop,
        $m_condoms_users,
      $m_condoms_active,
        $m_condoms_refer,
      $m_condoms_quant,
        $m_condoms_stock,
        $m_condoms_day,
      $f_condoms_accep,
        $f_condoms_ppfp,
        $f_condoms_stop,
        $f_condoms_users,
      $f_condoms_active,
        $f_condoms_refer,
      $f_condoms_quant,
        $f_condoms_stock,
        $f_condoms_day,
      $other_method_accep,
        $other_method_ppfp,
        $other_method_stop,
        $other_method_users,
      $other_method_active,
      $other_method_quant,
        $other_method_stock,
        $other_method_day,
      $cycle_accep,
        $cycle_stop,
        $cycle_users,
      $cycle_active,
        $cycle_refer,
      $cycle_quant,
        $cycle_stock,
        $cycle_day,
      $lam_accep,
        $lam_ppfp,
        $lam_stop,
        $lam_users,
      $lam_active,
        $lam_refer,
      $lam_quant,
        $lam_stock,
        $lam_day,
      $auto_obs_accep,
        $auto_obs_stop,
        $auto_obs_users,
      $auto_obs_active,
      $tubal_accep,
        $tubal_ppfp,
        $tubal_stop,
      $tubal_active,
      $vasectomy_accep,
        $vasectomy_ppfp,
        $vasectomy_stop,
      $vasectomy_active,
    $fp_new_acceptors,
      $new_fp_users,
      $sperm_control_test,
      $sperm_control_positive,
      $sperm_control_negative,
      $acceptors_prog_19,
      $acceptors_prog_24,
      $acceptors_prog_34,
      $acceptors_prog_35,
      $num_rapport
    ) {
        $this->db->where('date_hospitalization_a', $this->session->userdata('add_date'));
        $q = $this->db->get('Hospitalization_a');
        if ($q->num_rows() == 0) {
            return $this->db->set(array(
          'oral_contra_proges_accep' => $oral_contra_proges_accep,
          'oral_contra_proges_ppfp' => $oral_contra_proges_ppfp,
          'oral_contra_proges_users' => $oral_contra_proges_users,
          'oral_contra_proges_stop' => $oral_contra_proges_stop,
          'oral_contra_proges_active' => $oral_contra_proges_active,
          'oral_contra_proges_refer' => $oral_contra_proges_refer,
          'oral_contra_proges_quant' => $oral_contra_proges_quant,
          'oral_contra_proges_stock' => $oral_contra_proges_stock,
          'oral_contra_proges_day' => $oral_contra_proges_day,

          'oral_contra_comb_accep' => $oral_contra_comb_accep,
          'oral_contra_comb_users' => $oral_contra_comb_users,
          'oral_contra_comb_stop' => $oral_contra_comb_stop,
          'oral_contra_comb_active' => $oral_contra_comb_active,
          'oral_contra_comb_refer' => $oral_contra_comb_refer,
          'oral_contra_comb_quant' => $oral_contra_comb_quant,
          'oral_contra_comb_stock' => $oral_contra_comb_stock,
          'oral_contra_comb_day' => $oral_contra_comb_day,

          'inject_depo_accep' => $inject_depo_accep,
          'inject_depo_users' => $inject_depo_users,
          'inject_depo_stop' => $inject_depo_stop,
          'inject_depo_active' => $inject_depo_active,
          'inject_depo_refer' => $inject_depo_refer,
          'inject_depo_quant' => $inject_depo_quant,
          'inject_depo_stock' => $inject_depo_stock,
          'inject_depo_day' => $inject_depo_day,

          'inject_nor_accep' => $inject_nor_accep,
          'inject_nor_users' => $inject_nor_users,
          'inject_nor_stop' => $inject_nor_stop,
          'inject_nor_active' => $inject_nor_active,
          'inject_nor_quant' => $inject_nor_quant,
          'inject_nor_stock' => $inject_nor_stock,
          'inject_nor_day' => $inject_nor_day,

          'implants_nxt_accep' => $implants_nxt_accep,
          'implants_nxt_ppfp' => $implants_nxt_ppfp,
          'implants_nxt_users' => $implants_nxt_users,
          'implants_nxt_stop' => $implants_nxt_stop,
          'implants_nxt_active' => $implants_nxt_active,
          'implants_nxt_quant' => $implants_nxt_quant,
          'implants_nxt_stock' => $implants_nxt_stock,
          'implants_nxt_day' => $implants_nxt_day,

          'implants_jad_accep' => $implants_jad_accep,
          'implants_jad_ppfp' => $implants_jad_ppfp,
          'implants_jad_users' => $implants_jad_users,
          'implants_jad_stop' => $implants_jad_stop,
          'implants_jad_active' => $implants_jad_active,
          'implants_jad_quant' => $implants_jad_quant,
          'implants_jad_stock' => $implants_jad_stock,
          'implants_jad_day' => $implants_jad_day,

          'iud_accep' => $iud_accep,
          'iud_ppfp' => $iud_ppfp,
          'iud_users' => $iud_users,
          'iud_stop' => $iud_stop,
          'iud_active' => $iud_active,
          'iud_quant' => $iud_quant,
          'iud_stock' => $iud_stock,
          'iud_day' => $iud_day,

          'm_condoms_accep' => $m_condoms_accep,
          'm_condoms_ppfp' => $m_condoms_ppfp,
          'm_condoms_users' => $m_condoms_users,
          'm_condoms_stop' => $m_condoms_stop,
          'm_condoms_active' => $m_condoms_active,
          'm_condoms_refer' => $m_condoms_refer,
          'm_condoms_quant' => $m_condoms_quant,
          'm_condoms_stock' => $m_condoms_stock,
          'm_condoms_day' => $m_condoms_day,

          'f_condoms_accep' => $f_condoms_accep,
          'f_condoms_ppfp' => $f_condoms_ppfp,
          'f_condoms_users' => $f_condoms_users,
          'f_condoms_stop' => $f_condoms_stop,
          'f_condoms_active' => $f_condoms_active,
          'f_condoms_refer' => $f_condoms_refer,
          'f_condoms_quant' => $f_condoms_quant,
          'f_condoms_stock' => $f_condoms_stock,
          'f_condoms_day' => $f_condoms_day,

          'other_method_accep' => $other_method_accep,
          'other_method_ppfp' => $other_method_ppfp,
          'other_method_users' => $other_method_users,
          'other_method_stop' => $other_method_stop,
          'other_method_active' => $other_method_active,
          'other_method_quant' => $other_method_quant,
          'other_method_stock' => $other_method_stock,
          'other_method_day' => $other_method_day,

          'cycle_accep' => $cycle_accep,
          'cycle_users' => $cycle_users,
          'cycle_stop' => $cycle_stop,
          'cycle_active' => $cycle_active,
          'cycle_refer' => $cycle_refer,
          'cycle_quant' => $cycle_quant,
          'cycle_stock' => $cycle_stock,
          'cycle_day' => $cycle_day,

          'lam_accep' => $lam_accep,
          'lam_ppfp' => $lam_ppfp,
          'lam_users' => $lam_users,
          'lam_stop' => $lam_stop,
          'lam_active' => $lam_active,
          'lam_refer' => $lam_refer,
          'lam_quant' => $lam_quant,
          'lam_stock' => $lam_stock,
          'lam_day' => $lam_day,

          'auto_obs_accep' => $auto_obs_accep,
          'auto_obs_users' => $auto_obs_users,
          'auto_obs_stop' => $auto_obs_stop,
          'auto_obs_active' => $auto_obs_active,

          'tubal_accep' => $tubal_accep,
          'tubal_ppfp' => $tubal_ppfp,
          'tubal_users' => $tubal_users,
          'tubal_active' => $tubal_active,

          'vasectomy_accep' => $vasectomy_accep,
          'vasectomy_ppfp' => $vasectomy_ppfp,
          'vasectomy_users' => $vasectomy_users,
          'vasectomy_active' => $vasectomy_active,

          'fp_new_acceptors' => $fp_new_acceptors,
          'new_fp_users' => $new_fp_users,

          'sperm_control_test' => $sperm_control_test,
          'sperm_control_positive' => $sperm_control_positive,
          'sperm_control_negative' => $sperm_control_negative,

          'acceptors_prog_19' => $acceptors_prog_19,
          'acceptors_prog_24' => $acceptors_prog_24,
          'acceptors_prog_34' => $acceptors_prog_34,
          'acceptors_prog_35' => $acceptors_prog_35,

      'num_rapport' => $num_rapport
    ))
            ->set('date_family_planning', $this->session->userdata('add_date'))
            ->insert('Family_Planning');
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
          ->where('date_family_planning', $this->session->userdata('add_date'));
            return $this->db->update('Family_Planning');
        }
    }

    public function show_table1()
    {
        return $this->db->where('date_family_planning', $this->session->userdata('update_date'))
                        ->where('num_user', $this->session->userdata('num_user'))
                        ->get('Family_Planning')
                        ->row();
    }

    public function num_rapport()
    {
        return $this->db->where('date_rapport', $this->session->userdata('add_date'))
                      ->get('rapport')
                      ->row();
    }

    public function update_data1(
      $oral_contra_proges_accep,
        $oral_contra_proges_ppfp,
        $oral_contra_proges_stop,
        $oral_contra_proges_users,
      $oral_contra_proges_active,
        $oral_contra_proges_refer,
      $oral_contra_proges_quant,
        $oral_contra_proges_stock,
        $oral_contra_proges_day,
      $oral_contra_comb_accep,
        $oral_contra_comb_stop,
        $oral_contra_comb_users,
      $oral_contra_comb_active,
        $oral_contra_comb_refer,
      $oral_contra_comb_quant,
        $oral_contra_comb_stock,
        $oral_contra_comb_day,
      $inject_depo_accep,
        $inject_depo_stop,
        $inject_depo_users,
      $inject_depo_active,
        $inject_depo_refer,
      $inject_depo_quant,
        $inject_depo_stock,
        $inject_depo_day,
      $inject_nor_accep,
        $inject_nor_stop,
        $inject_nor_users,
      $inject_nor_active,
      $inject_nor_quant,
        $inject_nor_stock,
        $inject_nor_day,
      $implants_nxt_accep,
        $implants_nxt_ppfp,
        $implants_nxt_stop,
        $implants_nxt_users,
      $implants_nxt_active,
      $implants_nxt_quant,
        $implants_nxt_stock,
        $implants_nxt_day,
      $implants_jad_accep,
        $implants_jad_ppfp,
        $implants_jad_stop,
        $implants_jad_users,
      $implants_jad_active,
      $implants_jad_quant,
        $implants_jad_stock,
        $implants_jad_day,
      $iud_accep,
        $iud_ppfp,
        $iud_stop,
        $iud_users,
      $iud_active,
      $iud_quant,
        $iud_stock,
        $iud_day,
      $m_condoms_accep,
        $m_condoms_ppfp,
        $m_condoms_stop,
        $m_condoms_users,
      $m_condoms_active,
        $m_condoms_refer,
      $m_condoms_quant,
        $m_condoms_stock,
        $m_condoms_day,
      $f_condoms_accep,
        $f_condoms_ppfp,
        $f_condoms_stop,
        $f_condoms_users,
      $f_condoms_active,
        $f_condoms_refer,
      $f_condoms_quant,
        $f_condoms_stock,
        $f_condoms_day,
      $other_method_accep,
        $other_method_ppfp,
        $other_method_stop,
        $other_method_users,
      $other_method_active,
      $other_method_quant,
        $other_method_stock,
        $other_method_day,
      $cycle_accep,
        $cycle_stop,
        $cycle_users,
      $cycle_active,
        $cycle_refer,
      $cycle_quant,
        $cycle_stock,
        $cycle_day,
      $lam_accep,
        $lam_ppfp,
        $lam_stop,
        $lam_users,
      $lam_active,
        $lam_refer,
      $lam_quant,
        $lam_stock,
        $lam_day,
      $auto_obs_accep,
        $auto_obs_stop,
        $auto_obs_users,
      $auto_obs_active,
      $tubal_accep,
        $tubal_ppfp,
        $tubal_stop,
      $tubal_active,
      $vasectomy_accep,
        $vasectomy_ppfp,
        $vasectomy_stop,
      $vasectomy_active,
    $fp_new_acceptors,
      $new_fp_users,
      $sperm_control_test,
      $sperm_control_positive,
      $sperm_control_negative,
      $acceptors_prog_19,
      $acceptors_prog_24,
      $acceptors_prog_34,
      $acceptors_prog_35
    ) {
        $this->db->set('nc5m', $nc5m);
        $this->db->set('oral_contra_proges_accep', $oral_contra_proges_accep);
        $this->db->set('oral_contra_proges_ppfp', $oral_contra_proges_ppfp);
        $this->db->set('oral_contra_proges_users', $oral_contra_proges_users);
        $this->db->set('oral_contra_proges_stop', $oral_contra_proges_stop);
        $this->db->set('oral_contra_proges_active', $oral_contra_proges_active);
        $this->db->set('oral_contra_proges_refer', $oral_contra_proges_refer);
        $this->db->set('oral_contra_proges_quant', $oral_contra_proges_quant);
        $this->db->set('oral_contra_proges_stock', $oral_contra_proges_stock);
        $this->db->set('oral_contra_proges_day', $oral_contra_proges_day);

        $this->db->set('oral_contra_comb_accep', $oral_contra_comb_accep);
        $this->db->set('oral_contra_comb_users', $oral_contra_comb_users);
        $this->db->set('oral_contra_comb_stop', $oral_contra_comb_stop);
        $this->db->set('oral_contra_comb_active', $oral_contra_comb_active);
        $this->db->set('oral_contra_comb_refer', $oral_contra_comb_refer);
        $this->db->set('oral_contra_comb_quant', $oral_contra_comb_quant);
        $this->db->set('oral_contra_comb_stock', $oral_contra_comb_stock);
        $this->db->set('oral_contra_comb_day', $oral_contra_comb_day);

        $this->db->set('inject_depo_accep', $inject_depo_accep);
        $this->db->set('inject_depo_users', $inject_depo_users);
        $this->db->set('inject_depo_stop', $inject_depo_stop);
        $this->db->set('inject_depo_active', $inject_depo_active);
        $this->db->set('inject_depo_refer', $inject_depo_refer);
        $this->db->set('inject_depo_quant', $inject_depo_quant);
        $this->db->set('inject_depo_stock', $inject_depo_stock);
        $this->db->set('inject_depo_day', $inject_depo_day);

        $this->db->set('inject_nor_accep', $inject_nor_accep);
        $this->db->set('inject_nor_users', $inject_nor_users);
        $this->db->set('inject_nor_stop', $inject_nor_stop);
        $this->db->set('inject_nor_active', $inject_nor_active);
        $this->db->set('inject_nor_quant', $inject_nor_quant);
        $this->db->set('inject_nor_stock', $inject_nor_stock);
        $this->db->set('inject_nor_day', $inject_nor_day);

        $this->db->set('implants_nxt_accep', $implants_nxt_accep);
        $this->db->set('implants_nxt_ppfp', $implants_nxt_ppfp);
        $this->db->set('implants_nxt_users', $implants_nxt_users);
        $this->db->set('implants_nxt_stop', $implants_nxt_stop);
        $this->db->set('implants_nxt_active', $implants_nxt_active);
        $this->db->set('implants_nxt_quant', $implants_nxt_quant);
        $this->db->set('implants_nxt_stock', $implants_nxt_stock);
        $this->db->set('implants_nxt_day', $implants_nxt_day);

        $this->db->set('implants_jad_accep', $implants_jad_accep);
        $this->db->set('implants_jad_ppfp', $implants_jad_ppfp);
        $this->db->set('implants_jad_users', $implants_jad_users);
        $this->db->set('implants_jad_stop', $implants_jad_stop);
        $this->db->set('implants_jad_active', $implants_jad_active);
        $this->db->set('implants_jad_quant', $implants_jad_quant);
        $this->db->set('implants_jad_stock', $implants_jad_stock);
        $this->db->set('implants_jad_day', $implants_jad_day);

        $this->db->set('iud_accep', $iud_accep);
        $this->db->set('iud_ppfp', $iud_ppfp);
        $this->db->set('iud_users', $iud_users);
        $this->db->set('iud_stop', $iud_stop);
        $this->db->set('iud_active', $iud_active);
        $this->db->set('iud_quant', $iud_quant);
        $this->db->set('iud_stock', $iud_stock);
        $this->db->set('iud_day', $iud_day);

        $this->db->set('m_condoms_accep', $m_condoms_accep);
        $this->db->set('m_condoms_ppfp', $m_condoms_ppfp);
        $this->db->set('m_condoms_users', $m_condoms_users);
        $this->db->set('m_condoms_stop', $m_condoms_stop);
        $this->db->set('m_condoms_active', $m_condoms_active);
        $this->db->set('m_condoms_refer', $m_condoms_refer);
        $this->db->set('m_condoms_quant', $m_condoms_quant);
        $this->db->set('m_condoms_stock', $m_condoms_stock);
        $this->db->set('m_condoms_day', $m_condoms_day);

        $this->db->set('f_condoms_accep', $f_condoms_accep);
        $this->db->set('f_condoms_ppfp', $f_condoms_ppfp);
        $this->db->set('f_condoms_users', $f_condoms_users);
        $this->db->set('f_condoms_stop', $f_condoms_stop);
        $this->db->set('f_condoms_active', $f_condoms_active);
        $this->db->set('f_condoms_refer', $f_condoms_refer);
        $this->db->set('f_condoms_quant', $f_condoms_quant);
        $this->db->set('f_condoms_stock', $f_condoms_stock);
        $this->db->set('f_condoms_day', $f_condoms_day);

        $this->db->set('other_method_accep', $other_method_accep);
        $this->db->set('other_method_ppfp', $other_method_ppfp);
        $this->db->set('other_method_users', $other_method_users);
        $this->db->set('other_method_stop', $other_method_stop);
        $this->db->set('other_method_active', $other_method_active);
        $this->db->set('other_method_quant', $other_method_quant);
        $this->db->set('other_method_stock', $other_method_stock);
        $this->db->set('other_method_day', $other_method_day);

        $this->db->set('cycle_accep', $cycle_accep);
        $this->db->set('cycle_users', $cycle_users);
        $this->db->set('cycle_stop', $cycle_stop);
        $this->db->set('cycle_active', $cycle_active);
        $this->db->set('cycle_refer', $cycle_refer);
        $this->db->set('cycle_quant', $cycle_quant);
        $this->db->set('cycle_stock', $cycle_stock);
        $this->db->set('cycle_day', $cycle_day);

        $this->db->set('lam_accep', $lam_accep);
        $this->db->set('lam_ppfp', $lam_ppfp);
        $this->db->set('lam_users', $lam_users);
        $this->db->set('lam_stop', $lam_stop);
        $this->db->set('lam_active', $lam_active);
        $this->db->set('lam_refer', $lam_refer);
        $this->db->set('lam_quant', $lam_quant);
        $this->db->set('lam_stock', $lam_stock);
        $this->db->set('lam_day', $lam_day);

        $this->db->set('auto_obs_accep', $auto_obs_accep);
        $this->db->set('auto_obs_users', $auto_obs_users);
        $this->db->set('auto_obs_stop', $auto_obs_stop);
        $this->db->set('auto_obs_active', $auto_obs_active);

        $this->db->set('tubal_accep', $tubal_accep);
        $this->db->set('tubal_ppfp', $tubal_ppfp);
        $this->db->set('tubal_users', $tubal_users);
        $this->db->set('tubal_active', $tubal_active);

        $this->db->set('vasectomy_accep', $vasectomy_accep);
        $this->db->set('vasectomy_ppfp', $vasectomy_ppfp);
        $this->db->set('vasectomy_users', $vasectomy_users);
        $this->db->set('vasectomy_active', $vasectomy_active);

        $this->db->set('fp_new_acceptors', $fp_new_acceptors);
        $this->db->set('new_fp_users', $new_fp_users);

        $this->db->set('sperm_control_test', $sperm_control_test);
        $this->db->set('sperm_control_positive', $sperm_control_positive);
        $this->db->set('sperm_control_negative', $sperm_control_negative);

        $this->db->set('acceptors_prog_19', $acceptors_prog_19);
        $this->db->set('acceptors_prog_24', $acceptors_prog_24);
        $this->db->set('acceptors_prog_34', $acceptors_prog_34);
        $this->db->set('acceptors_prog_35', $acceptors_prog_35);

        $this->db->where('date_family_planning', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Family_Planning');
    }
}
