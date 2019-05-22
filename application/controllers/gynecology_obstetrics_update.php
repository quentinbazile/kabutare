<?php
defined('BASEPATH') or exit('No direct script access allowed');

class gynecology_obstetrics_update extends CI_Controller
{
    public function index()
    {
        $this->load->model('gynecology_obstetrics_model');
        if ($this->session->userdata('num_user') != '') {
            $this->fetch();
        } else {
            redirect('login', 'refresh');
        }
    }

    public function fetch()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('go_beds', '"go_beds"', 'numeric');
        if ($this->form_validation->run()) {
          $go_beds = $this->input->post('go_beds');
          $go_present_start = $this->input->post('go_present_start');
          $go_admissions = $this->input->post('go_admissions');
          $go_referred = $this->input->post('go_referred');
          $go_no_referred = $this->input->post('go_no_referred');
          $go_discharges = $this->input->post('go_discharges');
          $go_authorized = $this->input->post('go_authorized');
          $go_abandoned = $this->input->post('go_abandoned');
          $go_deaths = $this->input->post('go_deaths');
          $go_dis_referred = $this->input->post('go_dis_referred');
          $go_counter = $this->input->post('go_counter');
          $go_present_end = $this->input->post('go_present_end');
          $go_total = $this->input->post('go_total');
          $go_actual = $this->input->post('go_actual');


          $hosp_19f = $this->input->post('hosp_19f');
          $hosp_20f = $this->input->post('hosp_20f');
          $deaths_19f = $this->input->post('deaths_19f');
          $deaths_20f = $this->input->post('deaths_20f');

          $insured_dis = $this->input->post('insured_dis');
          $no_paying_dis = $this->input->post('no_paying_dis');
          $no_paying_ind = $this->input->post('no_paying_ind');

          $road_acc_ad = $this->input->post('road_acc_ad');
          $road_acc_deaths = $this->input->post('road_acc_deaths');
          $natural_disa_ad = $this->input->post('natural_disa_ad');
          $natural_disa_deaths = $this->input->post('natural_disa_deaths');
          $work_inj_ad = $this->input->post('work_inj_ad');
          $work_inj_deaths = $this->input->post('work_inj_deaths');

          $complications_hos19 = $this->input->post('complications_hos19');
          $complications_hos20 = $this->input->post('complications_hos20');
          $complications_deaths19 = $this->input->post('complications_deaths19');
          $complications_deaths20 = $this->input->post('complications_deaths20');
          $ectopic_hos19 = $this->input->post('ectopic_hos19');
          $ectopic_hos20 = $this->input->post('ectopic_hos20');
          $ectopic_deaths19 = $this->input->post('ectopic_deaths19');
          $ectopic_deaths20 = $this->input->post('ectopic_deaths20');
          $antepartum_hos19 = $this->input->post('antepartum_hos19');
          $antepartum_hos20 = $this->input->post('antepartum_hos20');
          $antepartum_deaths19 = $this->input->post('antepartum_deaths19');
          $antepartum_deaths20 = $this->input->post('antepartum_deaths20');
          $postpartum_hos19 = $this->input->post('postpartum_hos19');
          $postpartum_hos20 = $this->input->post('postpartum_hos20');
          $postpartum_deaths19 = $this->input->post('postpartum_deaths19');
          $postpartum_deaths20 = $this->input->post('postpartum_deaths20');
          $eclampsia_hos19 = $this->input->post('eclampsia_hos19');
          $eclampsia_hos20 = $this->input->post('eclampsia_hos20');
          $eclampsia_deaths19 = $this->input->post('eclampsia_deaths19');
          $eclampsia_deaths20 = $this->input->post('eclampsia_deaths20');
          $postc_hos19 = $this->input->post('postc_hos19');
          $postc_hos20 = $this->input->post('postc_hos20');
          $postc_deaths19 = $this->input->post('postc_deaths19');
          $postc_deaths20 = $this->input->post('postc_deaths20');
          $postpartum_other_hos19 = $this->input->post('postpartum_other_hos19');
          $postpartum_other_hos20 = $this->input->post('postpartum_other_hos20');
          $postpartum_other_deaths19 = $this->input->post('postpartum_other_deaths19');
          $postpartum_other_deaths20 = $this->input->post('postpartum_other_deaths20');
          $prolonged_hos19 = $this->input->post('prolonged_hos19');
          $prolonged_hos20 = $this->input->post('prolonged_hos20');
          $uterine_rup_hos19 = $this->input->post('uterine_rup_hos19');
          $uterine_rup_hos20 = $this->input->post('uterine_rup_hos20');
          $uterine_rup_deaths19 = $this->input->post('uterine_rup_deaths19');
          $uterine_rup_deaths20 = $this->input->post('uterine_rup_deaths20');
          $amniotic_deaths19 = $this->input->post('amniotic_deaths19');
          $amniotic_deaths20 = $this->input->post('amniotic_deaths20');
          $compli_anesthesia_deaths19 = $this->input->post('compli_anesthesia_deaths19');
          $compli_anesthesia_deaths20 = $this->input->post('compli_anesthesia_deaths20');
          $other_direct_obste_hos19 = $this->input->post('other_direct_obste_hos19');
          $other_direct_obste_hos20 = $this->input->post('other_direct_obste_hos20');
          $other_direct_obste_deaths19 = $this->input->post('other_direct_obste_deaths19');
          $other_direct_obste_deaths20 = $this->input->post('other_direct_obste_deaths20');
          $anemia_sev_hos19 = $this->input->post('anemia_sev_hos19');
          $anemia_sev_hos20 = $this->input->post('anemia_sev_hos20');
          $anemia_sev_deaths19 = $this->input->post('anemia_sev_deaths19');
          $anemia_sev_deaths20 = $this->input->post('anemia_sev_deaths20');
          $malaria_sim_hos19 = $this->input->post('malaria_sim_hos19');
          $malaria_sim_hos20 = $this->input->post('malaria_sim_hos20');
          $malaria_dig_hos19 = $this->input->post('malaria_dig_hos19');
          $malaria_dig_hos20 = $this->input->post('malaria_dig_hos20');
          $malaria_sev_hos19 = $this->input->post('malaria_sev_hos19');
          $malaria_sev_hos20 = $this->input->post('malaria_sev_hos20');
          $malaria_sev_deaths19 = $this->input->post('malaria_sev_deaths19');
          $malaria_sev_deaths20 = $this->input->post('malaria_sev_deaths20');
          $hiv_hos19 = $this->input->post('hiv_hos19');
          $hiv_hos20 = $this->input->post('hiv_hos20');
          $hiv_deaths19 = $this->input->post('hiv_deaths19');
          $hiv_deaths20 = $this->input->post('hiv_deaths20');
          $pulmonary_hos19 = $this->input->post('pulmonary_hos19');
          $pulmonary_hos20 = $this->input->post('pulmonary_hos20');
          $pulmonary_deaths19 = $this->input->post('pulmonary_deaths19');
          $pulmonary_deaths20 = $this->input->post('pulmonary_deaths20');
          $pneumonia_hos19 = $this->input->post('pneumonia_hos19');
          $pneumonia_hos20 = $this->input->post('pneumonia_hos20');
          $pneumonia_deaths19 = $this->input->post('pneumonia_deaths19');
          $pneumonia_deaths20 = $this->input->post('pneumonia_deaths20');
          $other_ind_obstet_hos19 = $this->input->post('other_ind_obstet_hos19');
          $other_ind_obstet_hos20 = $this->input->post('other_ind_obstet_hos20');
          $other_ind_obstet_deaths19 = $this->input->post('other_ind_obstet_deaths19');
          $other_ind_obstet_deaths20 = $this->input->post('other_ind_obstet_deaths20');

          $intra_antibio = $this->input->post('intra_antibio');
          $mother_uterotonic = $this->input->post('mother_uterotonic');
          $manual_placenta = $this->input->post('manual_placenta');
          $post_abortion = $this->input->post('post_abortion');
          $vacuum_extraction = $this->input->post('vacuum_extraction');
          $Preeclampsia = $this->input->post('Preeclampsia');
          $caesarean = $this->input->post('caesarean');
          $blood_tranf = $this->input->post('blood_tranf');
          $women_w_obste_compli = $this->input->post('women_w_obste_compli');

          $delive_total = $this->input->post('delive_total');
          $delive_eutocic = $this->input->post('delive_eutocic');
          $delive_dystocic = $this->input->post('delive_dystocic');
          $delive_w_episiotomy = $this->input->post('delive_w_episiotomy');
          $delive_w_oxytocin = $this->input->post('delive_w_oxytocin');
          $delive_complicated = $this->input->post('delive_w_complicated');
          $birth_trauma = $this->input->post('birth_trauma');
          $cleft_palate = $this->input->post('cleft_palate');
          $omphalocel = $this->input->post('omphalocel');
          $laparoschisis = $this->input->post('laparoschisis');
          $spina_bifida = $this->input->post('spina_bifida');
          $hydrocephalus = $this->input->post('hydrocephalus');
          $delive_15 = $this->input->post('delive_15');
          $delive_19 = $this->input->post('delive_19');
          $delive_24 = $this->input->post('delive_24');
          $delive_35 = $this->input->post('delive_35');
          $received_oxytocin = $this->input->post('received_oxytocin');
          $multi_pregnancies = $this->input->post('multi_pregnancies');
          $women_cons_risk_prema = $this->input->post('women_cons_risk_prema');
          $received_corticosteroid = $this->input->post('received_corticosteroid');
          $cons_preterm_ruptu_memb = $this->input->post('cons_preterm_ruptu_memb');
          $cons_preterm_ruptu_memb_prophylactic = $this->input->post('cons_preterm_ruptu_memb_prophylactic');
          $maternal_deaths = $this->input->post('maternal_deaths');
          $births_live = $this->input->post('births_live');
          $births_weight2500 = $this->input->post('births_weight2500');
          $premature_newborn = $this->input->post('premature_newborn');
          $births_weight2000 = $this->input->post('births_weight2000');
          $births_macerated = $this->input->post('births_macerated');
          $births_fresh_1000 = $this->input->post('births_fresh_1000');
          $births_fresh_2500 = $this->input->post('births_fresh_2500');
          $deaths_birth = $this->input->post('deaths_birth');
          $deaths_birth_2500 = $this->input->post('deaths_birth_2500');
          $newborns_breastfed = $this->input->post('newborns_breastfed');
          $newborns_skintoskin = $this->input->post('newborns_skintoskin');
          $newborns_no_cry = $this->input->post('newborns_no_cry');
          $newborns_no_cry_ambubag = $this->input->post('newborns_no_cry_ambubag');
          $newborns_no_cry_success = $this->input->post('newborns_no_cry_success');
          $fistula = $this->input->post('fistula');
          $fistula_treatment = $this->input->post('fistula_treatment');
          $complications_higher_level = $this->input->post('complications_higher_level');
          $observation_24 = $this->input->post('observation_24');

          $pnc1_m = $this->input->post('pnc1_m');
          $pnc1_nb = $this->input->post('pnc1_nb');
          $anemia_pnc1_m = $this->input->post('anemia_pnc1_m');
          $iron_pnc1_m = $this->input->post('iron_pnc1_m');
          $muac_pnc1_m = $this->input->post('muac_pnc1_m');
          $malnourished_pnc1_m = $this->input->post('malnourished_pnc1_m');
          $pnc2_m = $this->input->post('pnc2_m');
          $pnc2_nb = $this->input->post('pnc2_nb');
          $pnc3_m = $this->input->post('pnc3_m');
          $pnc3_nb = $this->input->post('pnc3_nb');
          $anemia_pnc3_m = $this->input->post('anemia_pnc3_m');
          $anemia_pnc_m = $this->input->post('anemia_pnc_m');
          $complications_m = $this->input->post('complications_m');
          $complications_nb = $this->input->post('complications_nb');
          $referrals_m = $this->input->post('referrals_m');
          $referrals_nb = $this->input->post('referrals_nb');
          $ppfp_m = $this->input->post('ppfp_m');

            $this->gynecology_obstetrics_model->update_data1(
              $go_beds,
              $go_present_start,
              $go_admissions,
              $go_referred,
              $go_no_referred,
              $go_discharges,
              $go_authorized,
              $go_abandoned,
              $go_deaths,
              $go_dis_referred,
              $go_counter,
              $go_present_end,
              $go_total,
              $go_actual
            );

            $this->gynecology_obstetrics_model->update_data2(
              $hosp_19f,
              $hosp_20f,
              $deaths_19f,
              $deaths_20f,

              $insured_dis,
              $no_paying_dis,
              $no_paying_ind,

              $road_acc_ad,
              $road_acc_deaths,
              $natural_disa_ad,
              $natural_disa_deaths,
              $work_inj_ad,
              $work_inj_deaths
            );

            $this->gynecology_obstetrics_model->update_data3(
              $complications_hos19,
              $complications_hos20,
              $complications_deaths19,
              $complications_deaths20,
              $ectopic_hos19,
              $ectopic_hos20,
              $ectopic_deaths19,
              $ectopic_deaths20,
              $antepartum_hos19,
              $antepartum_hos20,
              $antepartum_deaths19,
              $antepartum_deaths20,
              $postpartum_hos19,
              $postpartum_hos20,
              $postpartum_deaths19,
              $postpartum_deaths20,
              $eclampsia_hos19,
              $eclampsia_hos20,
              $eclampsia_deaths19,
              $eclampsia_deaths20,
              $postc_hos19,
              $postc_hos20,
              $postc_deaths19,
              $postc_deaths20,
              $postpartum_other_hos19,
              $postpartum_other_hos20,
              $postpartum_other_deaths19,
              $postpartum_other_deaths20,
              $prolonged_hos19,
              $prolonged_hos20,
              $uterine_rup_hos19,
              $uterine_rup_hos20,
              $uterine_rup_deaths19,
              $uterine_rup_deaths20,
              $amniotic_deaths19,
              $amniotic_deaths20,
              $compli_anesthesia_deaths19,
              $compli_anesthesia_deaths20,
              $other_direct_obste_hos19,
              $other_direct_obste_hos20,
              $other_direct_obste_deaths19,
              $other_direct_obste_deaths20,
              $anemia_sev_hos19,
              $anemia_sev_hos20,
              $anemia_sev_deaths19,
              $anemia_sev_deaths20,
              $malaria_sim_hos19,
              $malaria_sim_hos20,
              $malaria_dig_hos19,
              $malaria_dig_hos20,
              $malaria_sev_hos19,
              $malaria_sev_hos20,
              $malaria_sev_deaths19,
              $malaria_sev_deaths20,
              $hiv_hos19,
              $hiv_hos20,
              $hiv_deaths19,
              $hiv_deaths20,
              $pulmonary_hos19,
              $pulmonary_hos20,
              $pulmonary_deaths19,
              $pulmonary_deaths20,
              $pneumonia_hos19,
              $pneumonia_hos20,
              $pneumonia_deaths19,
              $pneumonia_deaths20,
              $other_ind_obstet_hos19,
              $other_ind_obstet_hos20,
              $other_ind_obstet_deaths19,
              $other_ind_obstet_deaths20
            );

            $this->gynecology_obstetrics_model->update_data4(
              $intra_antibio,
              $mother_uterotonic,
              $manual_placenta,
              $post_abortion,
              $vacuum_extraction,
              $Preeclampsia,
              $caesarean,
              $blood_tranf,
              $women_w_obste_compli
            );

            $this->gynecology_obstetrics_model->update_data5(
              $delive_total,
              $delive_eutocic,
              $delive_dystocic,
              $delive_w_episiotomy,
              $delive_w_oxytocin,
              $delive_complicated,
              $birth_trauma,
              $cleft_palate,
              $omphalocel,
              $laparoschisis,
              $spina_bifida,
              $hydrocephalus,
              $delive_15,
              $delive_19,
              $delive_24,
              $delive_35,
              $received_oxytocin,
              $multi_pregnancies,
              $women_cons_risk_prema,
              $received_corticosteroid,
              $cons_preterm_ruptu_memb,
              $cons_preterm_ruptu_memb_prophylactic,
              $maternal_deaths,
              $births_live,
              $births_weight2500,
              $premature_newborn,
              $births_weight2000,
              $births_macerated,
              $births_fresh_1000,
              $births_fresh_2500,
              $deaths_birth,
              $deaths_birth_2500,
              $newborns_breastfed,
              $newborns_skintoskin,
              $newborns_no_cry,
              $newborns_no_cry_ambubag,
              $newborns_no_cry_success,
              $fistula,
              $fistula_treatment,
              $complications_higher_level,
              $observation_24
            );

            $this->gynecology_obstetrics_model->update_data6(
              $pnc1_m,
              $pnc1_nb,
              $anemia_pnc1_m,
              $iron_pnc1_m,
              $muac_pnc1_m,
              $malnourished_pnc1_m,
              $pnc2_m,
              $pnc2_nb,
              $pnc3_m,
              $pnc3_nb,
              $anemia_pnc3_m,
              $anemia_pnc_m,
              $complications_m,
              $complications_nb,
              $referrals_m,
              $referrals_nb,
              $ppfp_m
            );

            $this->session->unset_userdata('update_date');
            redirect('home', 'refresh');
        } else {
          $data['table1'] = $this->gynecology_obstetrics_model->show_table1();
          $data['table2'] = $this->gynecology_obstetrics_model->show_table2();
          $data['table3'] = $this->gynecology_obstetrics_model->show_table3();
          $data['table4'] = $this->gynecology_obstetrics_model->show_table4();
          $data['table5'] = $this->gynecology_obstetrics_model->show_table5();
          $data['table6'] = $this->gynecology_obstetrics_model->show_table6();
            $this->load->view('gynecology_obstetrics_update_view',$data);
        }
    }
}
