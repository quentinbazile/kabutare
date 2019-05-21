<?php
class pharmacy_model extends CI_Model
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
      $amoxycillin_begin,
      $amoxycillin_received,
      $amoxycillin_dispensed,
      $amoxycillin_expired,
      $amoxycillin_end,
      $amoxycillin_stock,
      $ampicillin_begin,
      $ampicillin_received,
      $ampicillin_dispensed,
      $ampicillin_expired,
      $ampicillin_end,
      $ampicillin_stock,
      $doxycyclin_begin,
      $doxycyclin_received,
      $doxycyclin_dispensed,
      $doxycyclin_expired,
      $doxycyclin_end,
      $doxycyclin_stock,
      $cloxacillin_begin,
      $cloxacillin_received,
      $cloxacillin_dispensed,
      $cloxacillin_expired,
      $cloxacillin_end,
      $cloxacillin_stock,
      $mebendazole_begin,
      $mebendazole_received,
      $mebendazole_dispensed,
      $mebendazole_expired,
      $mebendazole_end,
      $mebendazole_stock,
      $gentamycin_begin,
      $gentamycin_received,
      $gentamycin_dispensed,
      $gentamycin_expired,
      $gentamycin_end,
      $gentamycin_stock,
      $metronidazole_vial_begin,
      $metronidazole_vial_received,
      $metronidazole_vial_dispensed,
      $metronidazole_vial_expired,
      $metronidazole_vial_end,
      $metronidazole_vial_stock,
      $metronidazole_syrup_begin,
      $metronidazole_syrup_received,
      $metronidazole_syrup_dispensed,
      $metronidazole_syrup_expired,
      $metronidazole_syrup_end,
      $metronidazole_syrup_stock,
      $paracetamol_begin,
      $paracetamol_received,
      $paracetamol_dispensed,
      $paracetamol_expired,
      $paracetamol_end,
      $paracetamol_stock,
      $ketamine_begin,
      $ketamine_received,
      $ketamine_dispensed,
      $ketamine_expired,
      $ketamine_end,
      $ketamine_stock,
      $ocytocin_begin,
      $ocytocin_received,
      $ocytocin_dispensed,
      $ocytocin_expired,
      $ocytocin_end,
      $ocytocin_stock,
      $lidocaine_begin,
      $lidocaine_received,
      $lidocaine_dispensed,
      $lidocaine_expired,
      $lidocaine_end,
      $lidocaine_stock,
      $propanolol_begin,
      $propanolol_received,
      $propanolol_dispensed,
      $propanolol_expired,
      $propanolol_end,
      $propanolol_stock,
      $tetracycline_begin,
      $tetracycline_received,
      $tetracycline_dispensed,
      $tetracycline_expired,
      $tetracycline_end,
      $tetracycline_stock,
      $diazepan_tab_begin,
      $diazepan_tab_received,
      $diazepan_tab_dispensed,
      $diazepan_tab_expired,
      $diazepan_tab_end,
      $diazepan_tab_stock,
      $diazepan_vial_begin,
      $diazepan_vial_received,
      $diazepan_vial_dispensed,
      $diazepan_vial_expired,
      $diazepan_vial_end,
      $diazepan_vial_stock,
      $phenobarbital_begin,
      $phenobarbital_received,
      $phenobarbital_dispensed,
      $phenobarbital_expired,
      $phenobarbital_end,
      $phenobarbital_stock,
      $valproic_begin,
      $valproic_received,
      $valproic_dispensed,
      $valproic_expired,
      $valproic_end,
      $valproic_stock,
      $salbutamol_begin,
      $salbutamol_received,
      $salbutamol_dispensed,
      $salbutamol_expired,
      $salbutamol_end,
      $salbutamol_stock,
      $iron_folic_begin,
      $iron_folic_received,
      $iron_folic_dispensed,
      $iron_folic_expired,
      $iron_folic_end,
      $iron_folic_stock,
      $rehydra_salt_begin,
      $rehydra_salt_received,
      $rehydra_salt_dispensed,
      $rehydra_salt_expired,
      $rehydra_salt_end,
      $rehydra_salt_stock,
      $quinine_vial_begin,
      $quinine_vial_received,
      $quinine_vial_dispensed,
      $quinine_vial_expired,
      $quinine_vial_end,
      $quinine_vial_stock,
      $quinine_tab_begin,
      $quinine_tab_received,
      $quinine_tab_dispensed,
      $quinine_tab_expired,
      $quinine_tab_end,
      $quinine_tab_stock,
      $coartem_artemether_1_begin,
      $coartem_artemether_1_received,
      $coartem_artemether_1_dispensed,
      $coartem_artemether_1_expired,
      $coartem_artemether_1_end,
      $coartem_artemether_1_stock,
      $coartem_artemether_2_begin,
      $coartem_artemether_2_received,
      $coartem_artemether_2_dispensed,
      $coartem_artemether_2_expired,
      $coartem_artemether_2_end,
      $coartem_artemether_2_stock,
      $coartem_artemether_3_begin,
      $coartem_artemether_3_received,
      $coartem_artemether_3_dispensed,
      $coartem_artemether_3_expired,
      $coartem_artemether_3_end,
      $coartem_artemether_3_stock,
      $coartem_artemether_4_begin,
      $coartem_artemether_4_received,
      $coartem_artemether_4_dispensed,
      $coartem_artemether_4_expired,
      $coartem_artemether_4_end,
      $coartem_artemether_4_stock,
      $artemeter_vial_begin,
      $artemeter_vial_received,
      $artemeter_vial_dispensed,
      $artemeter_vial_expired,
      $artemeter_vial_end,
      $artemeter_vial_stock,
      $artesunate_vial_begin,
      $artesunate_vial_received,
      $artesunate_vial_dispensed,
      $artesunate_vial_expired,
      $artesunate_vial_end,
      $artesunate_vial_stock,
      $cipro_begin,
      $cipro_received,
      $cipro_dispensed,
      $cipro_expired,
      $cipro_end,
      $cipro_stock,
      $cotri_begin,
      $cotri_received,
      $cotri_dispensed,
      $cotri_expired,
      $cotri_end,
      $cotri_stock,
      $F100_begin,
      $F100_received,
      $F100_dispensed,
      $F100_expired,
      $F100_end,
      $F100_stock,
      $F75_begin,
      $F75_received,
      $F75_dispensed,
      $F75_expired,
      $F75_end,
      $F75_stock,
      $plumpy_begin,
      $plumpy_received,
      $plumpy_dispensed,
      $plumpy_expired,
      $plumpy_end,
      $plumpy_stock,
      $csb_begin,
      $csb_received,
      $csb_dispensed,
      $csb_expired,
      $csb_end,
      $csb_stock,
      $morphine10_begin,
      $morphine10_received,
      $morphine10_dispensed,
      $morphine10_expired,
      $morphine10_end,
      $morphine10_stock,
      $morphine30_begin,
      $morphine30_received,
      $morphine30_dispensed,
      $morphine30_expired,
      $morphine30_end,
      $morphine30_stock,
      $morphine_hcl_begin,
      $morphine_hcl_received,
      $morphine_hcl_dispensed,
      $morphine_hcl_expired,
      $morphine_hcl_end,
      $morphine_hcl_stock,
      $captopril_begin,
      $captopril_received,
      $captopril_dispensed,
      $captopril_expired,
      $captopril_end,
      $captopril_stock,
      $atenolol_begin,
      $atenolol_received,
      $atenolol_dispensed,
      $atenolol_expired,
      $atenolol_end,
      $atenolol_stock,
      $hydro_begin,
      $hydro_received,
      $hydro_dispensed,
      $hydro_expired,
      $hydro_end,
      $hydro_stock,
      $nifedipine_begin,
      $nifedipine_received,
      $nifedipine_dispensed,
      $nifedipine_expired,
      $nifedipine_end,
      $nifedipine_stock,
      $methyldopal_begin,
      $methyldopal_received,
      $methyldopal_dispensed,
      $methyldopal_expired,
      $methyldopal_end,
      $methyldopal_stock,
      $warfarin_begin,
      $warfarin_received,
      $warfarin_dispensed,
      $warfarin_expired,
      $warfarin_end,
      $warfarin_stock,
      $insulin_r_begin,
      $insulin_r_received,
      $insulin_r_dispensed,
      $insulin_r_expired,
      $insulin_r_end,
      $insulin_r_stock,
      $insulin_l_begin,
      $insulin_l_received,
      $insulin_l_dispensed,
      $insulin_l_expired,
      $insulin_l_end,
      $insulin_l_stock,
      $num_rapport
    ) {
            return $this->db->set(array(
          'amoxycillin_begin' => $amoxycillin_begin,
          'amoxycillin_received' => $amoxycillin_received,
          'amoxycillin_dispensed' => $amoxycillin_dispensed,
          'amoxycillin_expired' => $amoxycillin_expired,
          'amoxycillin_end' => $amoxycillin_end,
          'amoxycillin_stock' => $amoxycillin_stock,
          'ampicillin_begin' => $ampicillin_begin,
          'ampicillin_received' => $ampicillin_received,
          'ampicillin_dispensed' => $ampicillin_dispensed,
          'ampicillin_expired' => $ampicillin_expired,
          'ampicillin_end' => $ampicillin_end,
          'ampicillin_stock' => $ampicillin_stock,
          'doxycyclin_begin' => $doxycyclin_begin,
          'doxycyclin_received' => $doxycyclin_received,
          'doxycyclin_dispensed' => $doxycyclin_dispensed,
          'doxycyclin_expired' => $doxycyclin_expired,
          'doxycyclin_end' => $doxycyclin_end,
          'doxycyclin_stock' => $doxycyclin_stock,
          'cloxacillin_begin' => $cloxacillin_begin,
          'cloxacillin_received' => $cloxacillin_received,
          'cloxacillin_dispensed' => $cloxacillin_dispensed,
          'cloxacillin_expired' => $cloxacillin_expired,
          'cloxacillin_end' => $cloxacillin_end,
          'cloxacillin_stock' => $cloxacillin_stock,
          'mebendazole_begin' => $mebendazole_begin,
          'mebendazole_received' => $mebendazole_received,
          'mebendazole_dispensed' => $mebendazole_dispensed,
          'mebendazole_expired' => $mebendazole_expired,
          'mebendazole_end' => $mebendazole_end,
          'mebendazole_stock' => $mebendazole_stock,
          'gentamycin_begin' => $gentamycin_begin,
          'gentamycin_received' => $gentamycin_received,
          'gentamycin_dispensed' => $gentamycin_dispensed,
          'gentamycin_expired' => $gentamycin_expired,
          'gentamycin_end' => $gentamycin_end,
          'gentamycin_stock' => $gentamycin_stock,
          'metronidazole_vial_begin' => $metronidazole_vial_begin,
          'metronidazole_vial_received' => $metronidazole_vial_received,
          'metronidazole_vial_dispensed' => $metronidazole_vial_dispensed,
          'metronidazole_vial_expired' => $metronidazole_vial_expired,
          'metronidazole_vial_end' => $metronidazole_vial_end,
          'metronidazole_vial_stock' => $metronidazole_vial_stock,
          'metronidazole_syrup_begin' => $metronidazole_syrup_begin,
          'metronidazole_syrup_received' => $metronidazole_syrup_received,
          'metronidazole_syrup_dispensed' => $metronidazole_syrup_dispensed,
          'metronidazole_syrup_expired' => $metronidazole_syrup_expired,
          'metronidazole_syrup_end' => $metronidazole_syrup_end,
          'metronidazole_syrup_stock' => $metronidazole_syrup_stock,
          'paracetamol_begin' => $paracetamol_begin,
          'paracetamol_received' => $paracetamol_received,
          'paracetamol_dispensed' => $paracetamol_dispensed,
          'paracetamol_expired' => $paracetamol_expired,
          'paracetamol_end' => $paracetamol_end,
          'paracetamol_stock' => $paracetamol_stock,
          'ketamine_begin' => $ketamine_begin,
          'ketamine_received' => $ketamine_received,
          'ketamine_dispensed' => $ketamine_dispensed,
          'ketamine_expired' => $ketamine_expired,
          'ketamine_end' => $ketamine_end,
          'ketamine_stock' => $ketamine_stock,
          'ocytocin_begin' => $ocytocin_begin,
          'ocytocin_received' => $ocytocin_received,
          'ocytocin_dispensed' => $ocytocin_dispensed,
          'ocytocin_expired' => $ocytocin_expired,
          'ocytocin_end' => $ocytocin_end,
          'ocytocin_stock' => $ocytocin_stock,
          'lidocaine_begin' => $lidocaine_begin,
          'lidocaine_received' => $lidocaine_received,
          'lidocaine_dispensed' => $lidocaine_dispensed,
          'lidocaine_expired' => $lidocaine_expired,
          'lidocaine_end' => $lidocaine_end,
          'lidocaine_stock' => $lidocaine_stock,
          'propanolol_begin' => $propanolol_begin,
          'propanolol_received' => $propanolol_received,
          'propanolol_dispensed' => $propanolol_dispensed,
          'propanolol_expired' => $propanolol_expired,
          'propanolol_end' => $propanolol_end,
          'propanolol_stock' => $propanolol_stock,
          'tetracycline_begin' => $tetracycline_begin,
          'tetracycline_received' => $tetracycline_received,
          'tetracycline_dispensed' => $tetracycline_dispensed,
          'tetracycline_expired' => $tetracycline_expired,
          'tetracycline_end' => $tetracycline_end,
          'tetracycline_stock' => $tetracycline_stock,
          'diazepan_tab_begin' => $diazepan_tab_begin,
          'diazepan_tab_received' => $diazepan_tab_received,
          'diazepan_tab_dispensed' => $diazepan_tab_dispensed,
          'diazepan_tab_expired' => $diazepan_tab_expired,
          'diazepan_tab_end' => $diazepan_tab_end,
          'diazepan_tab_stock' => $diazepan_tab_stock,
          'diazepan_vial_begin' => $diazepan_vial_begin,
          'diazepan_vial_received' => $diazepan_vial_received,
          'diazepan_vial_dispensed' => $diazepan_vial_dispensed,
          'diazepan_vial_expired' => $diazepan_vial_expired,
          'diazepan_vial_end' => $diazepan_vial_end,
          'diazepan_vial_stock' => $diazepan_vial_stock,
          'phenobarbital_begin' => $phenobarbital_begin,
          'phenobarbital_received' => $phenobarbital_received,
          'phenobarbital_dispensed' => $phenobarbital_dispensed,
          'phenobarbital_expired' => $phenobarbital_expired,
          'phenobarbital_end' => $phenobarbital_end,
          'phenobarbital_stock' => $phenobarbital_stock,
          'valproic_begin' => $valproic_begin,
          'valproic_received' => $valproic_received,
          'valproic_dispensed' => $valproic_dispensed,
          'valproic_expired' => $valproic_expired,
          'valproic_end' => $valproic_end,
          'valproic_stock' => $valproic_stock,
          'salbutamol_begin' => $salbutamol_begin,
          'salbutamol_received' => $salbutamol_received,
          'salbutamol_dispensed' => $salbutamol_dispensed,
          'salbutamol_expired' => $salbutamol_expired,
          'salbutamol_end' => $salbutamol_end,
          'salbutamol_stock' => $salbutamol_stock,
          'iron_folic_begin' => $iron_folic_begin,
          'iron_folic_received' => $iron_folic_received,
          'iron_folic_dispensed' => $iron_folic_dispensed,
          'iron_folic_expired' => $iron_folic_expired,
          'iron_folic_end' => $iron_folic_end,
          'iron_folic_stock' => $iron_folic_stock,
          'rehydra_salt_begin' => $rehydra_salt_begin,
          'rehydra_salt_received' => $rehydra_salt_received,
          'rehydra_salt_dispensed' => $rehydra_salt_dispensed,
          'rehydra_salt_expired' => $rehydra_salt_expired,
          'rehydra_salt_end' => $rehydra_salt_end,
          'rehydra_salt_stock' => $rehydra_salt_stock,
          'quinine_vial_begin' => $quinine_vial_begin,
          'quinine_vial_received' => $quinine_vial_received,
          'quinine_vial_dispensed' => $quinine_vial_dispensed,
          'quinine_vial_expired' => $quinine_vial_expired,
          'quinine_vial_end' => $quinine_vial_end,
          'quinine_vial_stock' => $quinine_vial_stock,
          'quinine_tab_begin' => $quinine_tab_begin,
          'quinine_tab_received' => $quinine_tab_received,
          'quinine_tab_dispensed' => $quinine_tab_dispensed,
          'quinine_tab_expired' => $quinine_tab_expired,
          'quinine_tab_end' => $quinine_tab_end,
          'quinine_tab_stock' => $quinine_tab_stock,
          'coartem_artemether_1_begin' => $coartem_artemether_1_begin,
          'coartem_artemether_1_received' => $coartem_artemether_1_received,
          'coartem_artemether_1_dispensed' => $coartem_artemether_1_dispensed,
          'coartem_artemether_1_expired' => $coartem_artemether_1_expired,
          'coartem_artemether_1_end' => $coartem_artemether_1_end,
          'coartem_artemether_1_stock' => $coartem_artemether_1_stock,
          'coartem_artemether_2_begin' => $coartem_artemether_2_begin,
          'coartem_artemether_2_received' => $coartem_artemether_2_received,
          'coartem_artemether_2_dispensed' => $coartem_artemether_2_dispensed,
          'coartem_artemether_2_expired' => $coartem_artemether_2_expired,
          'coartem_artemether_2_end' => $coartem_artemether_2_end,
          'coartem_artemether_2_stock' => $coartem_artemether_2_stock,
          'coartem_artemether_3_begin' => $coartem_artemether_3_begin,
          'coartem_artemether_3_received' => $coartem_artemether_3_received,
          'coartem_artemether_3_dispensed' => $coartem_artemether_3_dispensed,
          'coartem_artemether_3_expired' => $coartem_artemether_3_expired,
          'coartem_artemether_3_end' => $coartem_artemether_3_end,
          'coartem_artemether_3_stock' => $coartem_artemether_3_stock,
          'coartem_artemether_4_begin' => $coartem_artemether_4_begin,
          'coartem_artemether_4_received' => $coartem_artemether_4_received,
          'coartem_artemether_4_dispensed' => $coartem_artemether_4_dispensed,
          'coartem_artemether_4_expired' => $coartem_artemether_4_expired,
          'coartem_artemether_4_end' => $coartem_artemether_4_end,
          'coartem_artemether_4_stock' => $coartem_artemether_4_stock,
          'artemeter_vial_begin' => $artemeter_vial_begin,
          'artemeter_vial_received' => $artemeter_vial_received,
          'artemeter_vial_dispensed' => $artemeter_vial_dispensed,
          'artemeter_vial_expired' => $artemeter_vial_expired,
          'artemeter_vial_end' => $artemeter_vial_end,
          'artemeter_vial_stock' => $artemeter_vial_stock,
          'artesunate_vial_begin' => $artesunate_vial_begin,
          'artesunate_vial_received' => $artesunate_vial_received,
          'artesunate_vial_dispensed' => $artesunate_vial_dispensed,
          'artesunate_vial_expired' => $artesunate_vial_expired,
          'artesunate_vial_end' => $artesunate_vial_end,
          'artesunate_vial_stock' => $artesunate_vial_stock,
          'cipro_begin' => $cipro_begin,
          'cipro_received' => $cipro_received,
          'cipro_dispensed' => $cipro_dispensed,
          'cipro_expired' => $cipro_expired,
          'cipro_end' => $cipro_end,
          'cipro_stock' => $cipro_stock,
          'cotri_begin' => $cotri_begin,
          'cotri_received' => $cotri_received,
          'cotri_dispensed' => $cotri_dispensed,
          'cotri_expired' => $cotri_expired,
          'cotri_end' => $cotri_end,
          'cotri_stock' => $cotri_stock,
          'F100_begin' => $F100_begin,
          'F100_received' => $F100_received,
          'F100_dispensed' => $F100_dispensed,
          'F100_expired' => $F100_expired,
          'F100_end' => $F100_end,
          'F100_stock' => $F100_stock,
          'F75_begin' => $F75_begin,
          'F75_received' => $F75_received,
          'F75_dispensed' => $F75_dispensed,
          'F75_expired' => $F75_expired,
          'F75_end' => $F75_end,
          'F75_stock' => $F75_stock,
          'plumpy_begin' => $plumpy_begin,
          'plumpy_received' => $plumpy_received,
          'plumpy_dispensed' => $plumpy_dispensed,
          'plumpy_expired' => $plumpy_expired,
          'plumpy_end' => $plumpy_end,
          'plumpy_stock' => $plumpy_stock,
          'csb_begin' => $csb_begin,
          'csb_received' => $csb_received,
          'csb_dispensed' => $csb_dispensed,
          'csb_expired' => $csb_expired,
          'csb_end' => $csb_end,
          'csb_stock' => $csb_stock,
          'morphine10_begin' => $morphine10_begin,
          'morphine10_received' => $morphine10_received,
          'morphine10_dispensed' => $morphine10_dispensed,
          'morphine10_expired' => $morphine10_expired,
          'morphine10_end' => $morphine10_end,
          'morphine10_stock' => $morphine10_stock,
          'morphine30_begin' => $morphine30_begin,
          'morphine30_received' => $morphine30_received,
          'morphine30_dispensed' => $morphine30_dispensed,
          'morphine30_expired' => $morphine30_expired,
          'morphine30_end' => $morphine30_end,
          'morphine30_stock' => $morphine30_stock,
          'morphine_hcl_begin' => $morphine_hcl_begin,
          'morphine_hcl_received' => $morphine_hcl_received,
          'morphine_hcl_dispensed' => $morphine_hcl_dispensed,
          'morphine_hcl_expired' => $morphine_hcl_expired,
          'morphine_hcl_end' => $morphine_hcl_end,
          'morphine_hcl_stock' => $morphine_hcl_stock,
          'captopril_begin' => $captopril_begin,
          'captopril_received' => $captopril_received,
          'captopril_dispensed' => $captopril_dispensed,
          'captopril_expired' => $captopril_expired,
          'captopril_end' => $captopril_end,
          'captopril_stock' => $captopril_stock,
          'atenolol_begin' => $atenolol_begin,
          'atenolol_received' => $atenolol_received,
          'atenolol_dispensed' => $atenolol_dispensed,
          'atenolol_expired' => $atenolol_expired,
          'atenolol_end' => $atenolol_end,
          'atenolol_stock' => $atenolol_stock,
          'hydro_begin' => $hydro_begin,
          'hydro_received' => $hydro_received,
          'hydro_dispensed' => $hydro_dispensed,
          'hydro_expired' => $hydro_expired,
          'hydro_end' => $hydro_end,
          'hydro_stock' => $hydro_stock,
          'nifedipine_begin' => $nifedipine_begin,
          'nifedipine_received' => $nifedipine_received,
          'nifedipine_dispensed' => $nifedipine_dispensed,
          'nifedipine_expired' => $nifedipine_expired,
          'nifedipine_end' => $nifedipine_end,
          'nifedipine_stock' => $nifedipine_stock,
          'methyldopal_begin' => $methyldopal_begin,
          'methyldopal_received' => $methyldopal_received,
          'methyldopal_dispensed' => $methyldopal_dispensed,
          'methyldopal_expired' => $methyldopal_expired,
          'methyldopal_end' => $methyldopal_end,
          'methyldopal_stock' => $methyldopal_stock,
          'warfarin_begin' => $warfarin_begin,
          'warfarin_received' => $warfarin_received,
          'warfarin_dispensed' => $warfarin_dispensed,
          'warfarin_expired' => $warfarin_expired,
          'warfarin_end' => $warfarin_end,
          'warfarin_stock' => $warfarin_stock,
          'insulin_r_begin' => $insulin_r_begin,
          'insulin_r_received' => $insulin_r_received,
          'insulin_r_dispensed' => $insulin_r_dispensed,
          'insulin_r_expired' => $insulin_r_expired,
          'insulin_r_end' => $insulin_r_end,
          'insulin_r_stock' => $insulin_r_stock,
          'insulin_l_begin' => $insulin_l_begin,
          'insulin_l_received' => $insulin_l_received,
          'insulin_l_dispensed' => $insulin_l_dispensed,
          'insulin_l_expired' => $insulin_l_expired,
          'insulin_l_end' => $insulin_l_end,
          'insulin_l_stock' => $insulin_l_stock,
      'num_rapport' => $num_rapport
    ))
            ->set('date_pharmacy', $this->session->userdata('add_date'))
            ->insert('pharmacy');
        
    }

    public function show_table1()
    {
        return $this->db->where('date_pharmacy', $this->session->userdata('update_date'))
                        ->get('Pharmacy')
                        ->row();
    }

    public function num_rapport()
    {
        return $this->db->where('date_rapport', $this->session->userdata('add_date'))
                      ->get('rapport')
                      ->row();
    }

    public function update_data1(
      $amoxycillin_begin,
      $amoxycillin_received,
      $amoxycillin_dispensed,
      $amoxycillin_expired,
      $amoxycillin_end,
      $amoxycillin_stock,
      $ampicillin_begin,
      $ampicillin_received,
      $ampicillin_dispensed,
      $ampicillin_expired,
      $ampicillin_end,
      $ampicillin_stock,
      $doxycyclin_begin,
      $doxycyclin_received,
      $doxycyclin_dispensed,
      $doxycyclin_expired,
      $doxycyclin_end,
      $doxycyclin_stock,
      $cloxacillin_begin,
      $cloxacillin_received,
      $cloxacillin_dispensed,
      $cloxacillin_expired,
      $cloxacillin_end,
      $cloxacillin_stock,
      $mebendazole_begin,
      $mebendazole_received,
      $mebendazole_dispensed,
      $mebendazole_expired,
      $mebendazole_end,
      $mebendazole_stock,
      $gentamycin_begin,
      $gentamycin_received,
      $gentamycin_dispensed,
      $gentamycin_expired,
      $gentamycin_end,
      $gentamycin_stock,
      $metronidazole_vial_begin,
      $metronidazole_vial_received,
      $metronidazole_vial_dispensed,
      $metronidazole_vial_expired,
      $metronidazole_vial_end,
      $metronidazole_vial_stock,
      $metronidazole_syrup_begin,
      $metronidazole_syrup_received,
      $metronidazole_syrup_dispensed,
      $metronidazole_syrup_expired,
      $metronidazole_syrup_end,
      $metronidazole_syrup_stock,
      $paracetamol_begin,
      $paracetamol_received,
      $paracetamol_dispensed,
      $paracetamol_expired,
      $paracetamol_end,
      $paracetamol_stock,
      $ketamine_begin,
      $ketamine_received,
      $ketamine_dispensed,
      $ketamine_expired,
      $ketamine_end,
      $ketamine_stock,
      $ocytocin_begin,
      $ocytocin_received,
      $ocytocin_dispensed,
      $ocytocin_expired,
      $ocytocin_end,
      $ocytocin_stock,
      $lidocaine_begin,
      $lidocaine_received,
      $lidocaine_dispensed,
      $lidocaine_expired,
      $lidocaine_end,
      $lidocaine_stock,
      $propanolol_begin,
      $propanolol_received,
      $propanolol_dispensed,
      $propanolol_expired,
      $propanolol_end,
      $propanolol_stock,
      $tetracycline_begin,
      $tetracycline_received,
      $tetracycline_dispensed,
      $tetracycline_expired,
      $tetracycline_end,
      $tetracycline_stock,
      $diazepan_tab_begin,
      $diazepan_tab_received,
      $diazepan_tab_dispensed,
      $diazepan_tab_expired,
      $diazepan_tab_end,
      $diazepan_tab_stock,
      $diazepan_vial_begin,
      $diazepan_vial_received,
      $diazepan_vial_dispensed,
      $diazepan_vial_expired,
      $diazepan_vial_end,
      $diazepan_vial_stock,
      $phenobarbital_begin,
      $phenobarbital_received,
      $phenobarbital_dispensed,
      $phenobarbital_expired,
      $phenobarbital_end,
      $phenobarbital_stock,
      $valproic_begin,
      $valproic_received,
      $valproic_dispensed,
      $valproic_expired,
      $valproic_end,
      $valproic_stock,
      $salbutamol_begin,
      $salbutamol_received,
      $salbutamol_dispensed,
      $salbutamol_expired,
      $salbutamol_end,
      $salbutamol_stock,
      $iron_folic_begin,
      $iron_folic_received,
      $iron_folic_dispensed,
      $iron_folic_expired,
      $iron_folic_end,
      $iron_folic_stock,
      $rehydra_salt_begin,
      $rehydra_salt_received,
      $rehydra_salt_dispensed,
      $rehydra_salt_expired,
      $rehydra_salt_end,
      $rehydra_salt_stock,
      $quinine_vial_begin,
      $quinine_vial_received,
      $quinine_vial_dispensed,
      $quinine_vial_expired,
      $quinine_vial_end,
      $quinine_vial_stock,
      $quinine_tab_begin,
      $quinine_tab_received,
      $quinine_tab_dispensed,
      $quinine_tab_expired,
      $quinine_tab_end,
      $quinine_tab_stock,
      $coartem_artemether_1_begin,
      $coartem_artemether_1_received,
      $coartem_artemether_1_dispensed,
      $coartem_artemether_1_expired,
      $coartem_artemether_1_end,
      $coartem_artemether_1_stock,
      $coartem_artemether_2_begin,
      $coartem_artemether_2_received,
      $coartem_artemether_2_dispensed,
      $coartem_artemether_2_expired,
      $coartem_artemether_2_end,
      $coartem_artemether_2_stock,
      $coartem_artemether_3_begin,
      $coartem_artemether_3_received,
      $coartem_artemether_3_dispensed,
      $coartem_artemether_3_expired,
      $coartem_artemether_3_end,
      $coartem_artemether_3_stock,
      $coartem_artemether_4_begin,
      $coartem_artemether_4_received,
      $coartem_artemether_4_dispensed,
      $coartem_artemether_4_expired,
      $coartem_artemether_4_end,
      $coartem_artemether_4_stock,
      $artemeter_vial_begin,
      $artemeter_vial_received,
      $artemeter_vial_dispensed,
      $artemeter_vial_expired,
      $artemeter_vial_end,
      $artemeter_vial_stock,
      $artesunate_vial_begin,
      $artesunate_vial_received,
      $artesunate_vial_dispensed,
      $artesunate_vial_expired,
      $artesunate_vial_end,
      $artesunate_vial_stock,
      $cipro_begin,
      $cipro_received,
      $cipro_dispensed,
      $cipro_expired,
      $cipro_end,
      $cipro_stock,
      $cotri_begin,
      $cotri_received,
      $cotri_dispensed,
      $cotri_expired,
      $cotri_end,
      $cotri_stock,
      $F100_begin,
      $F100_received,
      $F100_dispensed,
      $F100_expired,
      $F100_end,
      $F100_stock,
      $F75_begin,
      $F75_received,
      $F75_dispensed,
      $F75_expired,
      $F75_end,
      $F75_stock,
      $plumpy_begin,
      $plumpy_received,
      $plumpy_dispensed,
      $plumpy_expired,
      $plumpy_end,
      $plumpy_stock,
      $csb_begin,
      $csb_received,
      $csb_dispensed,
      $csb_expired,
      $csb_end,
      $csb_stock,
      $morphine10_begin,
      $morphine10_received,
      $morphine10_dispensed,
      $morphine10_expired,
      $morphine10_end,
      $morphine10_stock,
      $morphine30_begin,
      $morphine30_received,
      $morphine30_dispensed,
      $morphine30_expired,
      $morphine30_end,
      $morphine30_stock,
      $morphine_hcl_begin,
      $morphine_hcl_received,
      $morphine_hcl_dispensed,
      $morphine_hcl_expired,
      $morphine_hcl_end,
      $morphine_hcl_stock,
      $captopril_begin,
      $captopril_received,
      $captopril_dispensed,
      $captopril_expired,
      $captopril_end,
      $captopril_stock,
      $atenolol_begin,
      $atenolol_received,
      $atenolol_dispensed,
      $atenolol_expired,
      $atenolol_end,
      $atenolol_stock,
      $hydro_begin,
      $hydro_received,
      $hydro_dispensed,
      $hydro_expired,
      $hydro_end,
      $hydro_stock,
      $nifedipine_begin,
      $nifedipine_received,
      $nifedipine_dispensed,
      $nifedipine_expired,
      $nifedipine_end,
      $nifedipine_stock,
      $methyldopal_begin,
      $methyldopal_received,
      $methyldopal_dispensed,
      $methyldopal_expired,
      $methyldopal_end,
      $methyldopal_stock,
      $warfarin_begin,
      $warfarin_received,
      $warfarin_dispensed,
      $warfarin_expired,
      $warfarin_end,
      $warfarin_stock,
      $insulin_r_begin,
      $insulin_r_received,
      $insulin_r_dispensed,
      $insulin_r_expired,
      $insulin_r_end,
      $insulin_r_stock,
      $insulin_l_begin,
      $insulin_l_received,
      $insulin_l_dispensed,
      $insulin_l_expired,
      $insulin_l_end,
      $insulin_l_stock
    ) {
        $this->db->set('amoxycillin_begin', $amoxycillin_begin);
        $this->db->set('amoxycillin_received', $amoxycillin_received);
        $this->db->set('amoxycillin_dispensed', $amoxycillin_dispensed);
        $this->db->set('amoxycillin_expired', $amoxycillin_expired);
        $this->db->set('amoxycillin_end', $amoxycillin_end);
        $this->db->set('amoxycillin_stock', $amoxycillin_stock);
        $this->db->set('ampicillin_begin', $ampicillin_begin);
        $this->db->set('ampicillin_received', $ampicillin_received);
        $this->db->set('ampicillin_dispensed', $ampicillin_dispensed);
        $this->db->set('ampicillin_expired', $ampicillin_expired);
        $this->db->set('ampicillin_end', $ampicillin_end);
        $this->db->set('ampicillin_stock', $ampicillin_stock);
        $this->db->set('doxycyclin_begin', $doxycyclin_begin);
        $this->db->set('doxycyclin_received', $doxycyclin_received);
        $this->db->set('doxycyclin_dispensed', $doxycyclin_dispensed);
        $this->db->set('doxycyclin_expired', $doxycyclin_expired);
        $this->db->set('doxycyclin_end', $doxycyclin_end);
        $this->db->set('doxycyclin_stock', $doxycyclin_stock);
        $this->db->set('cloxacillin_begin', $cloxacillin_begin);
        $this->db->set('cloxacillin_received', $cloxacillin_received);
        $this->db->set('cloxacillin_dispensed', $cloxacillin_dispensed);
        $this->db->set('cloxacillin_expired', $cloxacillin_expired);
        $this->db->set('cloxacillin_end', $cloxacillin_end);
        $this->db->set('cloxacillin_stock', $cloxacillin_stock);
        $this->db->set('mebendazole_begin', $mebendazole_begin);
        $this->db->set('mebendazole_received', $mebendazole_received);
        $this->db->set('mebendazole_dispensed', $mebendazole_dispensed);
        $this->db->set('mebendazole_expired', $mebendazole_expired);
        $this->db->set('mebendazole_end', $mebendazole_end);
        $this->db->set('mebendazole_stock', $mebendazole_stock);
        $this->db->set('gentamycin_begin', $gentamycin_begin);
        $this->db->set('gentamycin_received', $gentamycin_received);
        $this->db->set('gentamycin_dispensed', $gentamycin_dispensed);
        $this->db->set('gentamycin_expired', $gentamycin_expired);
        $this->db->set('gentamycin_end', $gentamycin_end);
        $this->db->set('gentamycin_stock', $gentamycin_stock);
        $this->db->set('metronidazole_vial_begin', $metronidazole_vial_begin);
        $this->db->set('metronidazole_vial_received', $metronidazole_vial_received);
        $this->db->set('metronidazole_vial_dispensed', $metronidazole_vial_dispensed);
        $this->db->set('metronidazole_vial_expired', $metronidazole_vial_expired);
        $this->db->set('metronidazole_vial_end', $metronidazole_vial_end);
        $this->db->set('metronidazole_vial_stock', $metronidazole_vial_stock);
        $this->db->set('metronidazole_syrup_begin', $metronidazole_syrup_begin);
        $this->db->set('metronidazole_syrup_received', $metronidazole_syrup_received);
        $this->db->set('metronidazole_syrup_dispensed', $metronidazole_syrup_dispensed);
        $this->db->set('metronidazole_syrup_expired', $metronidazole_syrup_expired);
        $this->db->set('metronidazole_syrup_end', $metronidazole_syrup_end);
        $this->db->set('metronidazole_syrup_stock', $metronidazole_syrup_stock);
        $this->db->set('paracetamol_begin', $paracetamol_begin);
        $this->db->set('paracetamol_received', $paracetamol_received);
        $this->db->set('paracetamol_dispensed', $paracetamol_dispensed);
        $this->db->set('paracetamol_expired', $paracetamol_expired);
        $this->db->set('paracetamol_end', $paracetamol_end);
        $this->db->set('paracetamol_stock', $paracetamol_stock);
        $this->db->set('ketamine_begin', $ketamine_begin);
        $this->db->set('ketamine_received', $ketamine_received);
        $this->db->set('ketamine_dispensed', $ketamine_dispensed);
        $this->db->set('ketamine_expired', $ketamine_expired);
        $this->db->set('ketamine_end', $ketamine_end);
        $this->db->set('ketamine_stock', $ketamine_stock);
        $this->db->set('ocytocin_begin', $ocytocin_begin);
        $this->db->set('ocytocin_received', $ocytocin_received);
        $this->db->set('ocytocin_dispensed', $ocytocin_dispensed);
        $this->db->set('ocytocin_expired', $ocytocin_expired);
        $this->db->set('ocytocin_end', $ocytocin_end);
        $this->db->set('ocytocin_stock', $ocytocin_stock);
        $this->db->set('lidocaine_begin', $lidocaine_begin);
        $this->db->set('lidocaine_received', $lidocaine_received);
        $this->db->set('lidocaine_dispensed', $lidocaine_dispensed);
        $this->db->set('lidocaine_expired', $lidocaine_expired);
        $this->db->set('lidocaine_end', $lidocaine_end);
        $this->db->set('lidocaine_stock', $lidocaine_stock);
        $this->db->set('propanolol_begin', $propanolol_begin);
        $this->db->set('propanolol_received', $propanolol_received);
        $this->db->set('propanolol_dispensed', $propanolol_dispensed);
        $this->db->set('propanolol_expired', $propanolol_expired);
        $this->db->set('propanolol_end', $propanolol_end);
        $this->db->set('propanolol_stock', $propanolol_stock);
        $this->db->set('tetracycline_begin', $tetracycline_begin);
        $this->db->set('tetracycline_received', $tetracycline_received);
        $this->db->set('tetracycline_dispensed', $tetracycline_dispensed);
        $this->db->set('tetracycline_expired', $tetracycline_expired);
        $this->db->set('tetracycline_end', $tetracycline_end);
        $this->db->set('tetracycline_stock', $tetracycline_stock);
        $this->db->set('diazepan_tab_begin', $diazepan_tab_begin);
        $this->db->set('diazepan_tab_received', $diazepan_tab_received);
        $this->db->set('diazepan_tab_dispensed', $diazepan_tab_dispensed);
        $this->db->set('diazepan_tab_expired', $diazepan_tab_expired);
        $this->db->set('diazepan_tab_end', $diazepan_tab_end);
        $this->db->set('diazepan_tab_stock', $diazepan_tab_stock);
        $this->db->set('diazepan_vial_begin', $diazepan_vial_begin);
        $this->db->set('diazepan_vial_received', $diazepan_vial_received);
        $this->db->set('diazepan_vial_dispensed', $diazepan_vial_dispensed);
        $this->db->set('diazepan_vial_expired', $diazepan_vial_expired);
        $this->db->set('diazepan_vial_end', $diazepan_vial_end);
        $this->db->set('diazepan_vial_stock', $diazepan_vial_stock);
        $this->db->set('phenobarbital_begin', $phenobarbital_begin);
        $this->db->set('phenobarbital_received', $phenobarbital_received);
        $this->db->set('phenobarbital_dispensed', $phenobarbital_dispensed);
        $this->db->set('phenobarbital_expired', $phenobarbital_expired);
        $this->db->set('phenobarbital_end', $phenobarbital_end);
        $this->db->set('phenobarbital_stock', $phenobarbital_stock);
        $this->db->set('valproic_begin', $valproic_begin);
        $this->db->set('valproic_received', $valproic_received);
        $this->db->set('valproic_dispensed', $valproic_dispensed);
        $this->db->set('valproic_expired', $valproic_expired);
        $this->db->set('valproic_end', $valproic_end);
        $this->db->set('valproic_stock', $valproic_stock);
        $this->db->set('salbutamol_begin', $salbutamol_begin);
        $this->db->set('salbutamol_received', $salbutamol_received);
        $this->db->set('salbutamol_dispensed', $salbutamol_dispensed);
        $this->db->set('salbutamol_expired', $salbutamol_expired);
        $this->db->set('salbutamol_end', $salbutamol_end);
        $this->db->set('salbutamol_stock', $salbutamol_stock);
        $this->db->set('iron_folic_begin', $iron_folic_begin);
        $this->db->set('iron_folic_received', $iron_folic_received);
        $this->db->set('iron_folic_dispensed', $iron_folic_dispensed);
        $this->db->set('iron_folic_expired', $iron_folic_expired);
        $this->db->set('iron_folic_end', $iron_folic_end);
        $this->db->set('iron_folic_stock', $iron_folic_stock);
        $this->db->set('rehydra_salt_begin', $rehydra_salt_begin);
        $this->db->set('rehydra_salt_received', $rehydra_salt_received);
        $this->db->set('rehydra_salt_dispensed', $rehydra_salt_dispensed);
        $this->db->set('rehydra_salt_expired', $rehydra_salt_expired);
        $this->db->set('rehydra_salt_end', $rehydra_salt_end);
        $this->db->set('rehydra_salt_stock', $rehydra_salt_stock);
        $this->db->set('quinine_vial_begin', $quinine_vial_begin);
        $this->db->set('quinine_vial_received', $quinine_vial_received);
        $this->db->set('quinine_vial_dispensed', $quinine_vial_dispensed);
        $this->db->set('quinine_vial_expired', $quinine_vial_expired);
        $this->db->set('quinine_vial_end', $quinine_vial_end);
        $this->db->set('quinine_vial_stock', $quinine_vial_stock);
        $this->db->set('quinine_tab_begin', $quinine_tab_begin);
        $this->db->set('quinine_tab_received', $quinine_tab_received);
        $this->db->set('quinine_tab_dispensed', $quinine_tab_dispensed);
        $this->db->set('quinine_tab_expired', $quinine_tab_expired);
        $this->db->set('quinine_tab_end', $quinine_tab_end);
        $this->db->set('quinine_tab_stock', $quinine_tab_stock);
        $this->db->set('coartem_artemether_1_begin', $coartem_artemether_1_begin);
        $this->db->set('coartem_artemether_1_received', $coartem_artemether_1_received);
        $this->db->set('coartem_artemether_1_dispensed', $coartem_artemether_1_dispensed);
        $this->db->set('coartem_artemether_1_expired', $coartem_artemether_1_expired);
        $this->db->set('coartem_artemether_1_end', $coartem_artemether_1_end);
        $this->db->set('coartem_artemether_1_stock', $coartem_artemether_1_stock);
        $this->db->set('coartem_artemether_2_begin', $coartem_artemether_2_begin);
        $this->db->set('coartem_artemether_2_received', $coartem_artemether_2_received);
        $this->db->set('coartem_artemether_2_dispensed', $coartem_artemether_2_dispensed);
        $this->db->set('coartem_artemether_2_expired', $coartem_artemether_2_expired);
        $this->db->set('coartem_artemether_2_end', $coartem_artemether_2_end);
        $this->db->set('coartem_artemether_2_stock', $coartem_artemether_2_stock);
        $this->db->set('coartem_artemether_3_begin', $coartem_artemether_3_begin);
        $this->db->set('coartem_artemether_3_received', $coartem_artemether_3_received);
        $this->db->set('coartem_artemether_3_dispensed', $coartem_artemether_3_dispensed);
        $this->db->set('coartem_artemether_3_expired', $coartem_artemether_3_expired);
        $this->db->set('coartem_artemether_3_end', $coartem_artemether_3_end);
        $this->db->set('coartem_artemether_3_stock', $coartem_artemether_3_stock);
        $this->db->set('coartem_artemether_4_begin', $coartem_artemether_4_begin);
        $this->db->set('coartem_artemether_4_received', $coartem_artemether_4_received);
        $this->db->set('coartem_artemether_4_dispensed', $coartem_artemether_4_dispensed);
        $this->db->set('coartem_artemether_4_expired', $coartem_artemether_4_expired);
        $this->db->set('coartem_artemether_4_end', $coartem_artemether_4_end);
        $this->db->set('coartem_artemether_4_stock', $coartem_artemether_4_stock);
        $this->db->set('artemeter_vial_begin', $artemeter_vial_begin);
        $this->db->set('artemeter_vial_received', $artemeter_vial_received);
        $this->db->set('artemeter_vial_dispensed', $artemeter_vial_dispensed);
        $this->db->set('artemeter_vial_expired', $artemeter_vial_expired);
        $this->db->set('artemeter_vial_end', $artemeter_vial_end);
        $this->db->set('artemeter_vial_stock', $artemeter_vial_stock);
        $this->db->set('artesunate_vial_begin', $artesunate_vial_begin);
        $this->db->set('artesunate_vial_received', $artesunate_vial_received);
        $this->db->set('artesunate_vial_dispensed', $artesunate_vial_dispensed);
        $this->db->set('artesunate_vial_expired', $artesunate_vial_expired);
        $this->db->set('artesunate_vial_end', $artesunate_vial_end);
        $this->db->set('artesunate_vial_stock', $artesunate_vial_stock);
        $this->db->set('cipro_begin', $cipro_begin);
        $this->db->set('cipro_received', $cipro_received);
        $this->db->set('cipro_dispensed', $cipro_dispensed);
        $this->db->set('cipro_expired', $cipro_expired);
        $this->db->set('cipro_end', $cipro_end);
        $this->db->set('cipro_stock', $cipro_stock);
        $this->db->set('cotri_begin', $cotri_begin);
        $this->db->set('cotri_received', $cotri_received);
        $this->db->set('cotri_dispensed', $cotri_dispensed);
        $this->db->set('cotri_expired', $cotri_expired);
        $this->db->set('cotri_end', $cotri_end);
        $this->db->set('cotri_stock', $cotri_stock);
        $this->db->set('F100_begin', $F100_begin);
        $this->db->set('F100_received', $F100_received);
        $this->db->set('F100_dispensed', $F100_dispensed);
        $this->db->set('F100_expired', $F100_expired);
        $this->db->set('F100_end', $F100_end);
        $this->db->set('F100_stock', $F100_stock);
        $this->db->set('F75_begin', $F75_begin);
        $this->db->set('F75_received', $F75_received);
        $this->db->set('F75_dispensed', $F75_dispensed);
        $this->db->set('F75_expired', $F75_expired);
        $this->db->set('F75_end', $F75_end);
        $this->db->set('F75_stock', $F75_stock);
        $this->db->set('plumpy_begin', $plumpy_begin);
        $this->db->set('plumpy_received', $plumpy_received);
        $this->db->set('plumpy_dispensed', $plumpy_dispensed);
        $this->db->set('plumpy_expired', $plumpy_expired);
        $this->db->set('plumpy_end', $plumpy_end);
        $this->db->set('plumpy_stock', $plumpy_stock);
        $this->db->set('csb_begin', $csb_begin);
        $this->db->set('csb_received', $csb_received);
        $this->db->set('csb_dispensed', $csb_dispensed);
        $this->db->set('csb_expired', $csb_expired);
        $this->db->set('csb_end', $csb_end);
        $this->db->set('csb_stock', $csb_stock);
        $this->db->set('morphine10_begin', $morphine10_begin);
        $this->db->set('morphine10_received', $morphine10_received);
        $this->db->set('morphine10_dispensed', $morphine10_dispensed);
        $this->db->set('morphine10_expired', $morphine10_expired);
        $this->db->set('morphine10_end', $morphine10_end);
        $this->db->set('morphine10_stock', $morphine10_stock);
        $this->db->set('morphine30_begin', $morphine30_begin);
        $this->db->set('morphine30_received', $morphine30_received);
        $this->db->set('morphine30_dispensed', $morphine30_dispensed);
        $this->db->set('morphine30_expired', $morphine30_expired);
        $this->db->set('morphine30_end', $morphine30_end);
        $this->db->set('morphine30_stock', $morphine30_stock);
        $this->db->set('morphine_hcl_begin', $morphine_hcl_begin);
        $this->db->set('morphine_hcl_received', $morphine_hcl_received);
        $this->db->set('morphine_hcl_dispensed', $morphine_hcl_dispensed);
        $this->db->set('morphine_hcl_expired', $morphine_hcl_expired);
        $this->db->set('morphine_hcl_end', $morphine_hcl_end);
        $this->db->set('morphine_hcl_stock', $morphine_hcl_stock);
        $this->db->set('captopril_begin', $captopril_begin);
        $this->db->set('captopril_received', $captopril_received);
        $this->db->set('captopril_dispensed', $captopril_dispensed);
        $this->db->set('captopril_expired', $captopril_expired);
        $this->db->set('captopril_end', $captopril_end);
        $this->db->set('captopril_stock', $captopril_stock);
        $this->db->set('atenolol_begin', $atenolol_begin);
        $this->db->set('atenolol_received', $atenolol_received);
        $this->db->set('atenolol_dispensed', $atenolol_dispensed);
        $this->db->set('atenolol_expired', $atenolol_expired);
        $this->db->set('atenolol_end', $atenolol_end);
        $this->db->set('atenolol_stock', $atenolol_stock);
        $this->db->set('hydro_begin', $hydro_begin);
        $this->db->set('hydro_received', $hydro_received);
        $this->db->set('hydro_dispensed', $hydro_dispensed);
        $this->db->set('hydro_expired', $hydro_expired);
        $this->db->set('hydro_end', $hydro_end);
        $this->db->set('hydro_stock', $hydro_stock);
        $this->db->set('nifedipine_begin', $nifedipine_begin);
        $this->db->set('nifedipine_received', $nifedipine_received);
        $this->db->set('nifedipine_dispensed', $nifedipine_dispensed);
        $this->db->set('nifedipine_expired', $nifedipine_expired);
        $this->db->set('nifedipine_end', $nifedipine_end);
        $this->db->set('nifedipine_stock', $nifedipine_stock);
        $this->db->set('methyldopal_begin', $methyldopal_begin);
        $this->db->set('methyldopal_received', $methyldopal_received);
        $this->db->set('methyldopal_dispensed', $methyldopal_dispensed);
        $this->db->set('methyldopal_expired', $methyldopal_expired);
        $this->db->set('methyldopal_end', $methyldopal_end);
        $this->db->set('methyldopal_stock', $methyldopal_stock);
        $this->db->set('warfarin_begin', $warfarin_begin);
        $this->db->set('warfarin_received', $warfarin_received);
        $this->db->set('warfarin_dispensed', $warfarin_dispensed);
        $this->db->set('warfarin_expired', $warfarin_expired);
        $this->db->set('warfarin_end', $warfarin_end);
        $this->db->set('warfarin_stock', $warfarin_stock);
        $this->db->set('insulin_r_begin', $insulin_r_begin);
        $this->db->set('insulin_r_received', $insulin_r_received);
        $this->db->set('insulin_r_dispensed', $insulin_r_dispensed);
        $this->db->set('insulin_r_expired', $insulin_r_expired);
        $this->db->set('insulin_r_end', $insulin_r_end);
        $this->db->set('insulin_r_stock', $insulin_r_stock);
        $this->db->set('insulin_l_begin', $insulin_l_begin);
        $this->db->set('insulin_l_received', $insulin_l_received);
        $this->db->set('insulin_l_dispensed', $insulin_l_dispensed);
        $this->db->set('insulin_l_expired', $insulin_l_expired);
        $this->db->set('insulin_l_end', $insulin_l_end);
        $this->db->set('insulin_l_stock', $insulin_l_stock);
        $this->db->where('date_pharmacy', $this->session->userdata('update_date'));
        return $this->db->update('pharmacy');
    }
}
