<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pharmacy_update extends CI_Controller
{
    public function index()
    {
        $this->load->model('pharmacy_model');
        if ($this->session->userdata('num_user') != '') {
            $this->fetch();
        } else {
            redirect('login', 'refresh');
        }
    }

    public function fetch()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('amoxycillin_begin', '"amoxycillin_begin"', 'numeric');
        if ($this->form_validation->run()) {
            $amoxycillin_begin = $this->input->post('amoxycillin_begin');
            $amoxycillin_received = $this->input->post('amoxycillin_received');
            $amoxycillin_dispensed = $this->input->post('amoxycillin_dispensed');
            $amoxycillin_expired = $this->input->post('amoxycillin_expired');
            $amoxycillin_end = $this->input->post('amoxycillin_end');
            $amoxycillin_stock = $this->input->post('amoxycillin_stock');
            $ampicillin_begin = $this->input->post('ampicillin_begin');
            $ampicillin_received = $this->input->post('ampicillin_received');
            $ampicillin_dispensed = $this->input->post('ampicillin_dispensed');
            $ampicillin_expired = $this->input->post('ampicillin_expired');
            $ampicillin_end = $this->input->post('ampicillin_end');
            $ampicillin_stock = $this->input->post('ampicillin_stock');
            $doxycyclin_begin = $this->input->post('doxycyclin_begin');
            $doxycyclin_received = $this->input->post('doxycyclin_received');
            $doxycyclin_dispensed = $this->input->post('doxycyclin_dispensed');
            $doxycyclin_expired = $this->input->post('doxycyclin_expired');
            $doxycyclin_end = $this->input->post('doxycyclin_end');
            $doxycyclin_stock = $this->input->post('doxycyclin_stock');
            $cloxacillin_begin = $this->input->post('cloxacillin_begin');
            $cloxacillin_received = $this->input->post('cloxacillin_received');
            $cloxacillin_dispensed = $this->input->post('cloxacillin_dispensed');
            $cloxacillin_expired = $this->input->post('cloxacillin_expired');
            $cloxacillin_end = $this->input->post('cloxacillin_end');
            $cloxacillin_stock = $this->input->post('cloxacillin_stock');
            $mebendazole_begin = $this->input->post('mebendazole_begin');
            $mebendazole_received = $this->input->post('mebendazole_received');
            $mebendazole_dispensed = $this->input->post('mebendazole_dispensed');
            $mebendazole_expired = $this->input->post('mebendazole_expired');
            $mebendazole_end = $this->input->post('mebendazole_end');
            $mebendazole_stock = $this->input->post('mebendazole_stock');
            $gentamycin_begin = $this->input->post('gentamycin_begin');
            $gentamycin_received = $this->input->post('gentamycin_received');
            $gentamycin_dispensed = $this->input->post('gentamycin_dispensed');
            $gentamycin_expired = $this->input->post('gentamycin_expired');
            $gentamycin_end = $this->input->post('gentamycin_end');
            $gentamycin_stock = $this->input->post('gentamycin_stock');
            $metronidazole_vial_begin = $this->input->post('metronidazole_vial_begin');
            $metronidazole_vial_received = $this->input->post('metronidazole_vial_received');
            $metronidazole_vial_dispensed = $this->input->post('metronidazole_vial_dispensed');
            $metronidazole_vial_expired = $this->input->post('metronidazole_vial_expired');
            $metronidazole_vial_end = $this->input->post('metronidazole_vial_end');
            $metronidazole_vial_stock = $this->input->post('metronidazole_vial_stock');
            $metronidazole_syrup_begin = $this->input->post('metronidazole_syrup_begin');
            $metronidazole_syrup_received = $this->input->post('metronidazole_syrup_received');
            $metronidazole_syrup_dispensed = $this->input->post('metronidazole_syrup_dispensed');
            $metronidazole_syrup_expired = $this->input->post('metronidazole_syrup_expired');
            $metronidazole_syrup_end = $this->input->post('metronidazole_syrup_end');
            $metronidazole_syrup_stock = $this->input->post('metronidazole_syrup_stock');
            $paracetamol_begin = $this->input->post('paracetamol_begin');
            $paracetamol_received = $this->input->post('paracetamol_received');
            $paracetamol_dispensed = $this->input->post('paracetamol_dispensed');
            $paracetamol_expired = $this->input->post('paracetamol_expired');
            $paracetamol_end = $this->input->post('paracetamol_end');
            $paracetamol_stock = $this->input->post('paracetamol_stock');
            $ketamine_begin = $this->input->post('ketamine_begin');
            $ketamine_received = $this->input->post('ketamine_received');
            $ketamine_dispensed = $this->input->post('ketamine_dispensed');
            $ketamine_expired = $this->input->post('ketamine_expired');
            $ketamine_end = $this->input->post('ketamine_end');
            $ketamine_stock = $this->input->post('ketamine_stock');
            $ocytocin_begin = $this->input->post('ocytocin_begin');
            $ocytocin_received = $this->input->post('ocytocin_received');
            $ocytocin_dispensed = $this->input->post('ocytocin_dispensed');
            $ocytocin_expired = $this->input->post('ocytocin_expired');
            $ocytocin_end = $this->input->post('ocytocin_end');
            $ocytocin_stock = $this->input->post('ocytocin_stock');
            $lidocaine_begin = $this->input->post('lidocaine_begin');
            $lidocaine_received = $this->input->post('lidocaine_received');
            $lidocaine_dispensed = $this->input->post('lidocaine_dispensed');
            $lidocaine_expired = $this->input->post('lidocaine_expired');
            $lidocaine_end = $this->input->post('lidocaine_end');
            $lidocaine_stock = $this->input->post('lidocaine_stock');
            $propanolol_begin = $this->input->post('propanolol_begin');
            $propanolol_received = $this->input->post('propanolol_received');
            $propanolol_dispensed = $this->input->post('propanolol_dispensed');
            $propanolol_expired = $this->input->post('propanolol_expired');
            $propanolol_end = $this->input->post('propanolol_end');
            $propanolol_stock = $this->input->post('propanolol_stock');
            $tetracycline_begin = $this->input->post('tetracycline_begin');
            $tetracycline_received = $this->input->post('tetracycline_received');
            $tetracycline_dispensed = $this->input->post('tetracycline_dispensed');
            $tetracycline_expired = $this->input->post('tetracycline_expired');
            $tetracycline_end = $this->input->post('tetracycline_end');
            $tetracycline_stock = $this->input->post('tetracycline_stock');
            $diazepan_tab_begin = $this->input->post('diazepan_tab_begin');
            $diazepan_tab_received = $this->input->post('diazepan_tab_received');
            $diazepan_tab_dispensed = $this->input->post('diazepan_tab_dispensed');
            $diazepan_tab_expired = $this->input->post('diazepan_tab_expired');
            $diazepan_tab_end = $this->input->post('diazepan_tab_end');
            $diazepan_tab_stock = $this->input->post('diazepan_tab_stock');
            $diazepan_vial_begin = $this->input->post('diazepan_vial_begin');
            $diazepan_vial_received = $this->input->post('diazepan_vial_received');
            $diazepan_vial_dispensed = $this->input->post('diazepan_vial_dispensed');
            $diazepan_vial_expired = $this->input->post('diazepan_vial_expired');
            $diazepan_vial_end = $this->input->post('diazepan_vial_end');
            $diazepan_vial_stock = $this->input->post('diazepan_vial_stock');
            $phenobarbital_begin = $this->input->post('phenobarbital_begin');
            $phenobarbital_received = $this->input->post('phenobarbital_received');
            $phenobarbital_dispensed = $this->input->post('phenobarbital_dispensed');
            $phenobarbital_expired = $this->input->post('phenobarbital_expired');
            $phenobarbital_end = $this->input->post('phenobarbital_end');
            $phenobarbital_stock = $this->input->post('phenobarbital_stock');
            $valproic_begin = $this->input->post('valproic_begin');
            $valproic_received = $this->input->post('valproic_received');
            $valproic_dispensed = $this->input->post('valproic_dispensed');
            $valproic_expired = $this->input->post('valproic_expired');
            $valproic_end = $this->input->post('valproic_end');
            $valproic_stock = $this->input->post('valproic_stock');
            $salbutamol_begin = $this->input->post('salbutamol_begin');
            $salbutamol_received = $this->input->post('salbutamol_received');
            $salbutamol_dispensed = $this->input->post('salbutamol_dispensed');
            $salbutamol_expired = $this->input->post('salbutamol_expired');
            $salbutamol_end = $this->input->post('salbutamol_end');
            $salbutamol_stock = $this->input->post('salbutamol_stock');
            $iron_folic_begin = $this->input->post('iron_folic_begin');
            $iron_folic_received = $this->input->post('iron_folic_received');
            $iron_folic_dispensed = $this->input->post('iron_folic_dispensed');
            $iron_folic_expired = $this->input->post('iron_folic_expired');
            $iron_folic_end = $this->input->post('iron_folic_end');
            $iron_folic_stock = $this->input->post('iron_folic_stock');
            $rehydra_salt_begin = $this->input->post('rehydra_salt_begin');
            $rehydra_salt_received = $this->input->post('rehydra_salt_received');
            $rehydra_salt_dispensed = $this->input->post('rehydra_salt_dispensed');
            $rehydra_salt_expired = $this->input->post('rehydra_salt_expired');
            $rehydra_salt_end = $this->input->post('rehydra_salt_end');
            $rehydra_salt_stock = $this->input->post('rehydra_salt_stock');
            $quinine_vial_begin = $this->input->post('quinine_vial_begin');
            $quinine_vial_received = $this->input->post('quinine_vial_received');
            $quinine_vial_dispensed = $this->input->post('quinine_vial_dispensed');
            $quinine_vial_expired = $this->input->post('quinine_vial_expired');
            $quinine_vial_end = $this->input->post('quinine_vial_end');
            $quinine_vial_stock = $this->input->post('quinine_vial_stock');
            $quinine_tab_begin = $this->input->post('quinine_tab_begin');
            $quinine_tab_received = $this->input->post('quinine_tab_received');
            $quinine_tab_dispensed = $this->input->post('quinine_tab_dispensed');
            $quinine_tab_expired = $this->input->post('quinine_tab_expired');
            $quinine_tab_end = $this->input->post('quinine_tab_end');
            $quinine_tab_stock = $this->input->post('quinine_tab_stock');
            $coartem_artemether_1_begin = $this->input->post('coartem_artemether_1_begin');
            $coartem_artemether_1_received = $this->input->post('coartem_artemether_1_received');
            $coartem_artemether_1_dispensed = $this->input->post('coartem_artemether_1_dispensed');
            $coartem_artemether_1_expired = $this->input->post('coartem_artemether_1_expired');
            $coartem_artemether_1_end = $this->input->post('coartem_artemether_1_end');
            $coartem_artemether_1_stock = $this->input->post('coartem_artemether_1_stock');
            $coartem_artemether_2_begin = $this->input->post('coartem_artemether_2_begin');
            $coartem_artemether_2_received = $this->input->post('coartem_artemether_2_received');
            $coartem_artemether_2_dispensed = $this->input->post('coartem_artemether_2_dispensed');
            $coartem_artemether_2_expired = $this->input->post('coartem_artemether_2_expired');
            $coartem_artemether_2_end = $this->input->post('coartem_artemether_2_end');
            $coartem_artemether_2_stock = $this->input->post('coartem_artemether_2_stock');
            $coartem_artemether_3_begin = $this->input->post('coartem_artemether_3_begin');
            $coartem_artemether_3_received = $this->input->post('coartem_artemether_3_received');
            $coartem_artemether_3_dispensed = $this->input->post('coartem_artemether_3_dispensed');
            $coartem_artemether_3_expired = $this->input->post('coartem_artemether_3_expired');
            $coartem_artemether_3_end = $this->input->post('coartem_artemether_3_end');
            $coartem_artemether_3_stock = $this->input->post('coartem_artemether_3_stock');
            $coartem_artemether_4_begin = $this->input->post('coartem_artemether_4_begin');
            $coartem_artemether_4_received = $this->input->post('coartem_artemether_4_received');
            $coartem_artemether_4_dispensed = $this->input->post('coartem_artemether_4_dispensed');
            $coartem_artemether_4_expired = $this->input->post('coartem_artemether_4_expired');
            $coartem_artemether_4_end = $this->input->post('coartem_artemether_4_end');
            $coartem_artemether_4_stock = $this->input->post('coartem_artemether_4_stock');
            $artemeter_vial_begin = $this->input->post('artemeter_vial_begin');
            $artemeter_vial_received = $this->input->post('artemeter_vial_received');
            $artemeter_vial_dispensed = $this->input->post('artemeter_vial_dispensed');
            $artemeter_vial_expired = $this->input->post('artemeter_vial_expired');
            $artemeter_vial_end = $this->input->post('artemeter_vial_end');
            $artemeter_vial_stock = $this->input->post('artemeter_vial_stock');
            $artesunate_vial_begin = $this->input->post('artesunate_vial_begin');
            $artesunate_vial_received = $this->input->post('artesunate_vial_received');
            $artesunate_vial_dispensed = $this->input->post('artesunate_vial_dispensed');
            $artesunate_vial_expired = $this->input->post('artesunate_vial_expired');
            $artesunate_vial_end = $this->input->post('artesunate_vial_end');
            $artesunate_vial_stock = $this->input->post('artesunate_vial_stock');
            $cipro_begin = $this->input->post('cipro_begin');
            $cipro_received = $this->input->post('cipro_received');
            $cipro_dispensed = $this->input->post('cipro_dispensed');
            $cipro_expired = $this->input->post('cipro_expired');
            $cipro_end = $this->input->post('cipro_end');
            $cipro_stock = $this->input->post('cipro_stock');
            $cotri_begin = $this->input->post('cotri_begin');
            $cotri_received = $this->input->post('cotri_received');
            $cotri_dispensed = $this->input->post('cotri_dispensed');
            $cotri_expired = $this->input->post('cotri_expired');
            $cotri_end = $this->input->post('cotri_end');
            $cotri_stock = $this->input->post('cotri_stock');
            $F100_begin = $this->input->post('F100_begin');
            $F100_received = $this->input->post('F100_received');
            $F100_dispensed = $this->input->post('F100_dispensed');
            $F100_expired = $this->input->post('F100_expired');
            $F100_end = $this->input->post('F100_end');
            $F100_stock = $this->input->post('F100_stock');
            $F75_begin = $this->input->post('F75_begin');
            $F75_received = $this->input->post('F75_received');
            $F75_dispensed = $this->input->post('F75_dispensed');
            $F75_expired = $this->input->post('F75_expired');
            $F75_end = $this->input->post('F75_end');
            $F75_stock = $this->input->post('F75_stock');
            $plumpy_begin = $this->input->post('plumpy_begin');
            $plumpy_received = $this->input->post('plumpy_received');
            $plumpy_dispensed = $this->input->post('plumpy_dispensed');
            $plumpy_expired = $this->input->post('plumpy_expired');
            $plumpy_end = $this->input->post('plumpy_end');
            $plumpy_stock = $this->input->post('plumpy_stock');
            $csb_begin = $this->input->post('csb_begin');
            $csb_received = $this->input->post('csb_received');
            $csb_dispensed = $this->input->post('csb_dispensed');
            $csb_expired = $this->input->post('csb_expired');
            $csb_end = $this->input->post('csb_end');
            $csb_stock = $this->input->post('csb_stock');
            $morphine10_begin = $this->input->post('morphine10_begin');
            $morphine10_received = $this->input->post('morphine10_received');
            $morphine10_dispensed = $this->input->post('morphine10_dispensed');
            $morphine10_expired = $this->input->post('morphine10_expired');
            $morphine10_end = $this->input->post('morphine10_end');
            $morphine10_stock = $this->input->post('morphine10_stock');
            $morphine30_begin = $this->input->post('morphine30_begin');
            $morphine30_received = $this->input->post('morphine30_received');
            $morphine30_dispensed = $this->input->post('morphine30_dispensed');
            $morphine30_expired = $this->input->post('morphine30_expired');
            $morphine30_end = $this->input->post('morphine30_end');
            $morphine30_stock = $this->input->post('morphine30_stock');
            $morphine_hcl_begin = $this->input->post('morphine_hcl_begin');
            $morphine_hcl_received = $this->input->post('morphine_hcl_received');
            $morphine_hcl_dispensed = $this->input->post('morphine_hcl_dispensed');
            $morphine_hcl_expired = $this->input->post('morphine_hcl_expired');
            $morphine_hcl_end = $this->input->post('morphine_hcl_end');
            $morphine_hcl_stock = $this->input->post('morphine_hcl_stock');
            $captopril_begin = $this->input->post('catopril_begin');
            $captopril_received = $this->input->post('catopril_received');
            $captopril_dispensed = $this->input->post('catopril_dispensed');
            $captopril_expired = $this->input->post('catopril_expired');
            $captopril_end = $this->input->post('catopril_end');
            $captopril_stock = $this->input->post('catopril_stock');
            $atenolol_begin = $this->input->post('atenolol_begin');
            $atenolol_received = $this->input->post('atenolol_received');
            $atenolol_dispensed = $this->input->post('atenolol_dispensed');
            $atenolol_expired = $this->input->post('atenolol_expired');
            $atenolol_end = $this->input->post('atenolol_end');
            $atenolol_stock = $this->input->post('atenolol_stock');
            $hydro_begin = $this->input->post('hydro_begin');
            $hydro_received = $this->input->post('hydro_received');
            $hydro_dispensed = $this->input->post('hydro_dispensed');
            $hydro_expired = $this->input->post('hydro_expired');
            $hydro_end = $this->input->post('hydro_end');
            $hydro_stock = $this->input->post('hydro_stock');
            $nifedipine_begin = $this->input->post('nifedipine_begin');
            $nifedipine_received = $this->input->post('nifedipine_received');
            $nifedipine_dispensed = $this->input->post('nifedipine_dispensed');
            $nifedipine_expired = $this->input->post('nifedipine_expired');
            $nifedipine_end = $this->input->post('nifedipine_end');
            $nifedipine_stock = $this->input->post('nifedipine_stock');
            $methyldopal_begin = $this->input->post('methyldopal_begin');
            $methyldopal_received = $this->input->post('methyldopal_received');
            $methyldopal_dispensed = $this->input->post('methyldopal_dispensed');
            $methyldopal_expired = $this->input->post('methyldopal_expired');
            $methyldopal_end = $this->input->post('methyldopal_end');
            $methyldopal_stock = $this->input->post('methyldopal_stock');
            $warfarin_begin = $this->input->post('warfarin_begin');
            $warfarin_received = $this->input->post('warfarin_received');
            $warfarin_dispensed = $this->input->post('warfarin_dispensed');
            $warfarin_expired = $this->input->post('warfarin_expired');
            $warfarin_end = $this->input->post('warfarin_end');
            $warfarin_stock = $this->input->post('warfarin_stock');
            $insulin_r_begin = $this->input->post('insulin_r_begin');
            $insulin_r_received = $this->input->post('insulin_r_received');
            $insulin_r_dispensed = $this->input->post('insulin_r_dispensed');
            $insulin_r_expired = $this->input->post('insulin_r_expired');
            $insulin_r_end = $this->input->post('insulin_r_end');
            $insulin_r_stock = $this->input->post('insulin_r_stock');
            $insulin_l_begin = $this->input->post('insulin_l_begin');
            $insulin_l_received = $this->input->post('insulin_l_received');
            $insulin_l_dispensed = $this->input->post('insulin_l_dispensed');
            $insulin_l_expired = $this->input->post('insulin_l_expired');
            $insulin_l_end = $this->input->post('insulin_l_end');
            $insulin_l_stock = $this->input->post('insulin_l_stock');

            $this->pharmacy_model->update_data1(
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
        );
            $this->session->unset_userdata('update_date');
            redirect('home', 'refresh');
        } else {
            $data['table1'] = $this->pharmacy_model->show_table1();
            $this->load->view('pharmacy_update_view',$data);
        }
    }
}
