<?php
class laboratory_model extends CI_Model
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
      $exams_t,
      $blood_n,
      $blood_t,
      $plasmodium_p,
      $micro_p,
      $borellia_p,
      $trypa_p,

      $malaria_p,
      $malaria_n,
      $malaria_t,

      $stools_n,
      $stools_t,
      $entamo_p,
      $coli_p,
      $giardia_p,
      $asca_p,
      $anky_p,
      $schisto_p,
      $trichuris_p,
      $taenia_p,
      $other_stools_p,

      $sugar_p,
      $sugar_n,
      $sugar_t,

      $albumin_p,
      $albumin_n,
      $albumin_t,

      $pregnancy_p,
      $pregnancy_n,
      $pregnancy_t,

      $diag_tb_p,
      $diag_tb_n,
      $diag_tb_t,

      $control_tb_p,
      $control_tb_n,
      $control_tb_t,

      $vag_fresh_p,
      $vag_fresh_n,
      $vag_fresh_t,

      $vag_gram_p,
      $vag_gram_n,
      $vag_gram_t,
      $vag_diplo_p,

      $ure_fresh_p,
      $ure_fresh_n,
      $ure_fresh_t,

      $ure_gram_p,
      $ure_gram_n,
      $ure_gram_t,
      $ure_diplo_p,

      $hemo_t,

      $rpr_p,
      $rpr_n,
      $rpr_t,

      $hiv_p,
      $hiv_n,
      $hiv_t,

      $esr_t,
      $full_t,
      $alat_t,
      $crea_t,
      $glucose_t,
      $amylase_t,
      $cd4_t,

      $widal_p,
      $widal_n,
      $widal_t,

      $blood_preg_p,
      $blood_preg_n,
      $blood_preg_t,
      $cerebro_t,
      $other_lab_t,
      $total,
      $num_rapport
    ) {
        return $this->db->set(array(
          'exams_t' => $exams_t,
          'blood_n' => $blood_n,
          'blood_t' => $blood_t,
          'plasmodium_p' => $plasmodium_p,
          'micro_p' => $micro_p,
          'borellia_p' => $borellia_p,
          'trypa_p' => $trypa_p,

          'malaria_p' => $malaria_p,
          'malaria_n' => $malaria_n,
          'malaria_t' => $malaria_t,

          'stools_n' => $stools_n,
          'stools_t' => $stools_t,
          'entamo_p' => $entamo_p,
          'coli_p' => $coli_p,
          'giardia_p' => $giardia_p,
          'asca_p' => $asca_p,
          'anky_p' => $anky_p,
          'schisto_p' => $schisto_p,
          'trichuris_p' => $trichuris_p,
          'taenia_p' => $taenia_p,
          'other_stools_p' => $other_stools_p,

          'sugar_p' => $sugar_p,
          'sugar_n' => $sugar_n,
          'sugar_t' => $sugar_t,

          'albumin_p' => $albumin_p,
          'albumin_n' => $albumin_n,
          'albumin_t' => $albumin_t,

          'pregnancy_p' => $pregnancy_p,
          'pregnancy_n' => $pregnancy_n,
          'pregnancy_t' => $pregnancy_t,

          'diag_tb_p' => $diag_tb_p,
          'diag_tb_n' => $diag_tb_n,
          'diag_tb_t' => $diag_tb_t,

          'control_tb_p' => $control_tb_p,
          'control_tb_n' => $control_tb_n,
          'control_tb_t' => $control_tb_t,

          'vag_fresh_p' => $vag_fresh_p,
          'vag_fresh_n' => $vag_fresh_n,
          'vag_fresh_t' => $vag_fresh_t,

          'vag_gram_p' => $vag_gram_p,
          'vag_gram_n' => $vag_gram_n,
          'vag_gram_t' => $vag_gram_t,
          'vag_diplo_p' => $vag_diplo_p,

          'ure_fresh_p' => $ure_fresh_p,
          'ure_fresh_n' => $ure_fresh_n,
          'ure_fresh_t' => $ure_fresh_t,

          'ure_gram_p' => $ure_gram_p,
          'ure_gram_n' => $ure_gram_n,
          'ure_gram_t' => $ure_gram_t,
          'ure_diplo_p' => $ure_diplo_p,

          'hemo_t' => $hemo_t,

          'rpr_p' => $rpr_p,
          'rpr_n' => $rpr_n,
          'rpr_t' => $rpr_t,

          'hiv_p' => $hiv_p,
          'hiv_n' => $hiv_n,
          'hiv_t' => $hiv_t,

          'esr_t' => $esr_t,
          'full_t' => $full_t,
          'alat_t' => $alat_t,
          'crea_t' => $crea_t,
          'glucose_t' => $glucose_t,
          'amylase_t' => $amylase_t,
          'cd4_t' => $cd4_t,

          'widal_p' => $widal_p,
          'widal_n' => $widal_n,
          'widal_t' => $widal_t,

          'blood_preg_p' => $blood_preg_p,
          'blood_preg_n' => $blood_preg_n,
          'blood_preg_t' => $blood_preg_t,
          'cerebro_t' => $cerebro_t,
          'other_lab_t' => $other_lab_t,
          'total' => $total,

          'num_rapport' => $num_rapport,
        ))
            ->set('date_laboratory', $this->session->userdata('add_date'))
            ->insert('Laboratory');
    }

    public function fetch_data2(
      $im_patient_transfused,
      $im_packs,

      $p_patient_transfused,
      $p_packs,

      $s_patient_transfused,
      $s_packs,

      $go_patient_transfused,
      $go_packs,

      $ic_patient_transfused,
      $ic_packs,

      $n_patient_transfused,
      $n_packs,

      $a_received,
      $b_received,
      $ab_received,
      $o_received,

      $a_used,
      $b_used,
      $ab_used,
      $o_used,

      $a_destroyed,
      $b_destroyed,
      $ab_destroyed,
      $o_destroyed,

      $a_stock,
      $b_stock,
      $ab_stock,
      $o_stock,
      $num_rapport
    ) {
        return $this->db->set(array(
          'im_patient_transfused' => $im_patient_transfused,
          'im_packs' => $im_packs,

          'p_patient_transfused' => $p_patient_transfused,
          'p_packs' => $p_packs,

          's_patient_transfused' => $s_patient_transfused,
          's_packs' => $s_packs,

          'go_patient_transfused' => $go_patient_transfused,
          'go_packs' => $go_packs,

          'ic_patient_transfused' => $ic_patient_transfused,
          'ic_packs' => $ic_packs,

          'n_patient_transfused' => $n_patient_transfused,
          'n_packs' => $n_packs,

          'a_received' => $a_received,
          'b_received' => $b_received,
          'ab_received' => $ab_received,
          'o_received' => $o_received,

          'a_used' => $a_used,
          'b_used' => $b_used,
          'ab_used' => $ab_used,
          'o_used' => $o_used,

          'a_destroyed' => $a_destroyed,
          'b_destroyed' => $b_destroyed,
          'ab_destroyed' => $ab_destroyed,
          'o_destroyed' => $o_destroyed,

          'a_stock' => $a_stock,
          'b_stock' => $b_stock,
          'ab_stock' => $ab_stock,
          'o_stock' => $o_stock,

          'num_rapport' => $num_rapport,
        ))
            ->set('date_blood_bank_security', $this->session->userdata('add_date'))
            ->insert('Blood_Bank_Security');
    }

    public function show_table1()
    {
        return $this->db->where('date_laboratory', $this->session->userdata('update_date'))
                        ->get('Laboratory')
                        ->row();
    }

    public function show_table2()
    {
        return $this->db->where('date_blood_bank_security', $this->session->userdata('update_date'))
                        ->get('Blood_Bank_Security')
                        ->row();
    }

    public function num_rapport()
    {
        return $this->db->where('date_rapport', $this->session->userdata('add_date'))
                      ->get('rapport')
                      ->row();
    }

    public function update_data1(
      $exams_t,
      $blood_n,
      $blood_t,
      $plasmodium_p,
      $micro_p,
      $borellia_p,
      $trypa_p,

      $malaria_p,
      $malaria_n,
      $malaria_t,

      $stools_n,
      $stools_t,
      $entamo_p,
      $coli_p,
      $giardia_p,
      $asca_p,
      $anky_p,
      $schisto_p,
      $trichuris_p,
      $taenia_p,
      $other_stools_p,

      $sugar_p,
      $sugar_n,
      $sugar_t,

      $albumin_p,
      $albumin_n,
      $albumin_t,

      $pregnancy_p,
      $pregnancy_n,
      $pregnancy_t,

      $diag_tb_p,
      $diag_tb_n,
      $diag_tb_t,

      $control_tb_p,
      $control_tb_n,
      $control_tb_t,

      $vag_fresh_p,
      $vag_fresh_n,
      $vag_fresh_t,

      $vag_gram_p,
      $vag_gram_n,
      $vag_gram_t,
      $vag_diplo_p,

      $ure_fresh_p,
      $ure_fresh_n,
      $ure_fresh_t,

      $ure_gram_p,
      $ure_gram_n,
      $ure_gram_t,
      $ure_diplo_p,

      $hemo_t,

      $rpr_p,
      $rpr_n,
      $rpr_t,

      $hiv_p,
      $hiv_n,
      $hiv_t,

      $esr_t,
      $full_t,
      $alat_t,
      $crea_t,
      $glucose_t,
      $amylase_t,
      $cd4_t,

      $widal_p,
      $widal_n,
      $widal_t,

      $blood_preg_p,
      $blood_preg_n,
      $blood_preg_t,
      $cerebro_t,
      $other_lab_t,
      $total
    ) {
        $this->db->set('exams_t', $exams_t);
        $this->db->set('blood_n', $blood_n);
        $this->db->set('blood_t', $blood_t);
        $this->db->set('plasmodium_p', $plasmodium_p);
        $this->db->set('micro_p', $micro_p);
        $this->db->set('borellia_p', $borellia_p);
        $this->db->set('trypa_p', $trypa_p);

        $this->db->set('malaria_p', $malaria_p);
        $this->db->set('malaria_n', $malaria_n);
        $this->db->set('malaria_t', $malaria_t);

        $this->db->set('stools_n', $stools_n);
        $this->db->set('stools_t', $stools_t);
        $this->db->set('entamo_p', $entamo_p);
        $this->db->set('coli_p', $coli_p);
        $this->db->set('giardia_p', $giardia_p);
        $this->db->set('asca_p', $asca_p);
        $this->db->set('anky_p', $anky_p);
        $this->db->set('schisto_p', $schisto_p);
        $this->db->set('trichuris_p', $trichuris_p);
        $this->db->set('taenia_p', $taenia_p);
        $this->db->set('other_stools_p', $other_stools_p);

        $this->db->set('sugar_p', $sugar_p);
        $this->db->set('sugar_n', $sugar_n);
        $this->db->set('sugar_t', $sugar_t);

        $this->db->set('albumin_p', $albumin_p);
        $this->db->set('albumin_n', $albumin_n);
        $this->db->set('albumin_t', $albumin_t);

        $this->db->set('pregnancy_p', $pregnancy_p);
        $this->db->set('pregnancy_n', $pregnancy_n);
        $this->db->set('pregnancy_t', $pregnancy_t);

        $this->db->set('diag_tb_p', $diag_tb_p);
        $this->db->set('diag_tb_n', $diag_tb_n);
        $this->db->set('diag_tb_t', $diag_tb_t);

        $this->db->set('control_tb_p', $control_tb_p);
        $this->db->set('control_tb_n', $control_tb_n);
        $this->db->set('control_tb_t', $control_tb_t);

        $this->db->set('vag_fresh_p', $vag_fresh_p);
        $this->db->set('vag_fresh_n', $vag_fresh_n);
        $this->db->set('vag_fresh_t', $vag_fresh_t);

        $this->db->set('vag_gram_p', $vag_gram_p);
        $this->db->set('vag_gram_n', $vag_gram_n);
        $this->db->set('vag_gram_t', $vag_gram_t);
        $this->db->set('vag_diplo_p', $vag_diplo_p);

        $this->db->set('ure_fresh_p', $ure_fresh_p);
        $this->db->set('ure_fresh_n', $ure_fresh_n);
        $this->db->set('ure_fresh_t', $ure_fresh_t);

        $this->db->set('ure_gram_p', $ure_gram_p);
        $this->db->set('ure_gram_n', $ure_gram_n);
        $this->db->set('ure_gram_t', $ure_gram_t);
        $this->db->set('ure_diplo_p', $ure_diplo_p);

        $this->db->set('hemo_t', $hemo_t);

        $this->db->set('rpr_p', $rpr_p);
        $this->db->set('rpr_n', $rpr_n);
        $this->db->set('rpr_t', $rpr_t);

        $this->db->set('hiv_p', $hiv_p);
        $this->db->set('hiv_n', $hiv_n);
        $this->db->set('hiv_t', $hiv_t);

        $this->db->set('esr_t', $esr_t);
        $this->db->set('full_t', $full_t);
        $this->db->set('alat_t', $alat_t);
        $this->db->set('crea_t', $crea_t);
        $this->db->set('glucose_t', $glucose_t);
        $this->db->set('amylase_t', $amylase_t);
        $this->db->set('cd4_t', $cd4_t);

        $this->db->set('widal_p', $widal_p);
        $this->db->set('widal_n', $widal_n);
        $this->db->set('widal_t', $widal_t);

        $this->db->set('blood_preg_p', $blood_preg_p);
        $this->db->set('blood_preg_n', $blood_preg_n);
        $this->db->set('blood_preg_t', $blood_preg_t);
        $this->db->set('cerebro_t', $cerebro_t);
        $this->db->set('other_lab_t', $other_lab_t);
        $this->db->set('total', $total);

        $this->db->where('date_laboratory', $this->session->userdata('update_date'));
        return $this->db->update('Laboratory');
    }

    public function update_data2(
      $im_patient_transfused,
      $im_packs,

      $p_patient_transfused,
      $p_packs,

      $s_patient_transfused,
      $s_packs,

      $go_patient_transfused,
      $go_packs,

      $ic_patient_transfused,
      $ic_packs,

      $n_patient_transfused,
      $n_packs,

      $a_received,
      $b_received,
      $ab_received,
      $o_received,

      $a_used,
      $b_used,
      $ab_used,
      $o_used,

      $a_destroyed,
      $b_destroyed,
      $ab_destroyed,
      $o_destroyed,

      $a_stock,
      $b_stock,
      $ab_stock,
      $o_stock
    ) {
        $this->db->set('im_patient_transfused', $im_patient_transfused);
        $this->db->set('im_packs', $im_packs);

        $this->db->set('p_patient_transfused', $p_patient_transfused);
        $this->db->set('p_packs', $p_packs);

        $this->db->set('s_patient_transfused', $s_patient_transfused);
        $this->db->set('s_packs', $s_packs);

        $this->db->set('go_patient_transfused', $go_patient_transfused);
        $this->db->set('go_packs', $go_packs);

        $this->db->set('ic_patient_transfused', $ic_patient_transfused);
        $this->db->set('ic_packs', $ic_packs);

        $this->db->set('n_patient_transfused', $n_patient_transfused);
        $this->db->set('n_packs', $n_packs);

        $this->db->set('a_received', $a_received);
        $this->db->set('b_received', $b_received);
        $this->db->set('ab_received', $ab_received);
        $this->db->set('o_received', $o_received);

        $this->db->set('a_used', $a_used);
        $this->db->set('b_used', $b_used);
        $this->db->set('ab_used', $ab_used);
        $this->db->set('o_used', $o_used);

        $this->db->set('a_destroyed', $a_destroyed);
        $this->db->set('b_destroyed', $b_destroyed);
        $this->db->set('ab_destroyed', $ab_destroyed);
        $this->db->set('o_destroyed', $o_destroyed);

        $this->db->set('a_stock', $a_stock);
        $this->db->set('b_stock', $b_stock);
        $this->db->set('ab_stock', $ab_stock);
        $this->db->set('o_stock', $o_stock);

        $this->db->where('date_blood_bank_security', $this->session->userdata('update_date'));
        return $this->db->update('Blood_Bank_Security');
    }
}
