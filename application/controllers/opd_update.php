<?php
defined('BASEPATH') or exit('No direct script access allowed');

class opd_update extends CI_Controller
{
    public function index()
    {
        $this->load->model('opd_model');
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
          if ($this->home_model->check_service('opd')) {
            $this->fetch();
          } else {
              redirect('login', 'refresh');
          }
        } else {
            redirect('login', 'refresh');
        }
    }

    public function fetch()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nc5m', '"nc5m"', 'numeric');
        if ($this->form_validation->run()) {
          $nc5m = $this->input->post('nc5m');
          $nc5f = $this->input->post('nc5f');
          $nc19m = $this->input->post('nc19m');
          $nc19f = $this->input->post('nc19f');
          $nc20m = $this->input->post('nc20m');
          $nc20f = $this->input->post('nc20f');

          $oc5m = $this->input->post('oc5m');
          $oc5f = $this->input->post('oc5f');
          $oc19m = $this->input->post('oc19m');
          $oc19f = $this->input->post('oc19f');
          $oc20m = $this->input->post('oc20m');
          $oc20f = $this->input->post('oc20f');

          $insured = $this->input->post('insured');
          $nc_non_paying = $this->input->post('nc_non_paying');
          $nc_indigent = $this->input->post('nc_indigent');

          $other_levels = $this->input->post('other_levels');
          $counter_received = $this->input->post('counter_received');

          $nc_catch = $this->input->post('nc_catch');
          $nc = $this->input->post('nc');
          $international = $this->input->post('international');

          $diar_w_dehy_5m = $this->input->post('diar_w_dehy_5m');
          $diar_w_dehy_5f = $this->input->post('diar_w_dehy_5f');
          $diar_w_dehy_19m = $this->input->post('diar_w_dehy_19m');
          $diar_w_dehy_19f = $this->input->post('diar_w_dehy_19f');
          $diar_w_dehy_20m = $this->input->post('diar_w_dehy_20m');
          $diar_w_dehy_20f = $this->input->post('diar_w_dehy_20f');

          $diar_no_dehy_5m = $this->input->post('diar_no_dehy_5m');
          $diar_no_dehy_5f = $this->input->post('diar_no_dehy_5f');
          $diar_no_dehy_19m = $this->input->post('diar_no_dehy_19m');
          $diar_no_dehy_19f = $this->input->post('diar_no_dehy_19f');
          $diar_no_dehy_20m = $this->input->post('diar_no_dehy_20m');
          $diar_no_dehy_20f = $this->input->post('diar_no_dehy_20f');

          $blood_diar_5m = $this->input->post('blood_diar_5m');
          $blood_diar_5f = $this->input->post('blood_diar_5f');
          $blood_diar_19m = $this->input->post('blood_diar_19m');
          $blood_diar_19f = $this->input->post('blood_diar_19f');
          $blood_diar_20m = $this->input->post('blood_diar_20m');
          $blood_diar_20f = $this->input->post('blood_diar_20f');

          $food_poison_5m = $this->input->post('food_poison_5m');
          $food_poison_5f = $this->input->post('food_poison_5f');
          $food_poison_19m = $this->input->post('food_poison_19m');
          $food_poison_19f = $this->input->post('food_poison_19f');
          $food_poison_20m = $this->input->post('food_poison_20m');
          $food_poison_20f = $this->input->post('food_poison_20f');

          $ear_infect_5m = $this->input->post('ear_infect_5m');
          $ear_infect_5f = $this->input->post('ear_infect_5f');
          $ear_infect_19m = $this->input->post('ear_infect_19m');
          $ear_infect_19f = $this->input->post('ear_infect_19f');
          $ear_infect_20m = $this->input->post('ear_infect_20m');
          $ear_infect_20f = $this->input->post('ear_infect_20f');

          $schisto_5m = $this->input->post('schisto_5m');
          $schisto_5f = $this->input->post('schisto_5f');
          $schisto_19m = $this->input->post('schisto_19m');
          $schisto_19f = $this->input->post('schisto_19f');
          $schisto_20m = $this->input->post('schisto_20m');
          $schisto_20f = $this->input->post('schisto_20f');

          $ascaris_5m = $this->input->post('ascaris_5m');
          $ascaris_5f = $this->input->post('ascaris_5f');
          $ascaris_19m = $this->input->post('ascaris_19m');
          $ascaris_19f = $this->input->post('ascaris_19f');
          $ascaris_20m = $this->input->post('ascaris_20m');
          $ascaris_20f = $this->input->post('ascaris_20f');

          $trichu_5m = $this->input->post('trichu_5m');
          $trichu_5f = $this->input->post('trichu_5f');
          $trichu_19m = $this->input->post('trichu_19m');
          $trichu_19f = $this->input->post('trichu_19f');
          $trichu_20m = $this->input->post('trichu_20m');
          $trichu_20f = $this->input->post('trichu_20f');

          $hook_5m = $this->input->post('hook_5m');
          $hook_5f = $this->input->post('hook_5f');
          $hook_19m = $this->input->post('hook_19m');
          $hook_19f = $this->input->post('hook_19f');
          $hook_20m = $this->input->post('hook_20m');
          $hook_20f = $this->input->post('hook_20f');

          $entam_5m = $this->input->post('entam_5m');
          $entam_5f = $this->input->post('entam_5f');
          $entam_19m = $this->input->post('entam_19m');
          $entam_19f = $this->input->post('entam_19f');
          $entam_20m = $this->input->post('entam_20m');
          $entam_20f = $this->input->post('entam_20f');

          $giardia_5m = $this->input->post('giardia_5m');
          $giardia_5f = $this->input->post('giardia_5f');
          $giardia_19m = $this->input->post('giardia_19m');
          $giardia_19f = $this->input->post('giardia_19f');
          $giardia_20m = $this->input->post('giardia_20m');
          $giardia_20f = $this->input->post('giardia_20f');

          $taenia_5m = $this->input->post('taenia_5m');
          $taenia_5f = $this->input->post('taenia_5f');
          $taenia_19m = $this->input->post('taenia_19m');
          $taenia_19f = $this->input->post('taenia_19f');
          $taenia_20m = $this->input->post('taenia_20m');
          $taenia_20f = $this->input->post('taenia_20f');

          $malaria_s_5m = $this->input->post('malaria_s_5m');
          $malaria_s_5f = $this->input->post('malaria_s_5f');
          $malaria_s_19m = $this->input->post('malaria_s_19m');
          $malaria_s_19f = $this->input->post('malaria_s_19f');
          $malaria_s_20m = $this->input->post('malaria_s_20m');
          $malaria_s_20f = $this->input->post('malaria_s_20f');

          $malaria_dig_5m = $this->input->post('malaria_dig_5m');
          $malaria_dig_5f = $this->input->post('malaria_dig_5f');
          $malaria_dig_19m = $this->input->post('malaria_dig_19m');
          $malaria_dig_19f = $this->input->post('malaria_dig_19f');
          $malaria_dig_20m = $this->input->post('malaria_dig_20m');
          $malaria_dig_20f = $this->input->post('malaria_dig_20f');

          $herpes_s_5m = $this->input->post('herpes_s_5m');
          $herpes_s_5f = $this->input->post('herpes_s_5f');
          $herpes_s_19m = $this->input->post('herpes_s_19m');
          $herpes_s_19f = $this->input->post('herpes_s_19f');
          $herpes_s_20m = $this->input->post('herpes_s_20m');
          $herpes_s_20f = $this->input->post('herpes_s_20f');

          $mening_5m = $this->input->post('mening_5m');
          $mening_5f = $this->input->post('mening_5f');
          $mening_19m = $this->input->post('mening_19m');
          $mening_19f = $this->input->post('mening_19f');
          $mening_20m = $this->input->post('mening_20m');
          $mening_20f = $this->input->post('mening_20f');

          $pneumonia_simp_5m = $this->input->post('pneumonia_simp_5m');
          $pneumonia_simp_5f = $this->input->post('pneumonia_simp_5f');
          $pneumonia_simp_19m = $this->input->post('pneumonia_simp_19m');
          $pneumonia_simp_19f = $this->input->post('pneumonia_simp_19f');
          $pneumonia_simp_20m = $this->input->post('pneumonia_simp_20m');
          $pneumonia_simp_20f = $this->input->post('pneumonia_simp_20f');

          $pneumonia_sev_5m = $this->input->post('pneumonia_sev_5m');
          $pneumonia_sev_5f = $this->input->post('pneumonia_sev_5f');
          $pneumonia_sev_19m = $this->input->post('pneumonia_sev_19m');
          $pneumonia_sev_19f = $this->input->post('pneumonia_sev_19f');
          $pneumonia_sev_20m = $this->input->post('pneumonia_sev_20m');
          $pneumonia_sev_20f = $this->input->post('pneumonia_sev_20f');

          $grip_5m = $this->input->post('grip_5m');
          $grip_5f = $this->input->post('grip_5f');
          $grip_19m = $this->input->post('grip_19m');
          $grip_19f = $this->input->post('grip_19f');
          $grip_20m = $this->input->post('grip_20m');
          $grip_20f = $this->input->post('grip_20f');

          $ari_5m = $this->input->post('ari_5m');
          $ari_5f = $this->input->post('ari_5f');
          $ari_19m = $this->input->post('ari_19m');
          $ari_19f = $this->input->post('ari_19f');
          $ari_20m = $this->input->post('ari_20m');
          $ari_20f = $this->input->post('ari_20f');

          $gast_duoden_5m = $this->input->post('gast_duoden_5m');
          $gast_duoden_5f = $this->input->post('gast_duoden_5f');
          $gast_duoden_19m = $this->input->post('gast_duoden_19m');
          $gast_duoden_19f = $this->input->post('gast_duoden_19f');
          $gast_duoden_20m = $this->input->post('gast_duoden_20m');
          $gast_duoden_20f = $this->input->post('gast_duoden_20f');

          $absces_5m = $this->input->post('absces_5m');
          $absces_5f = $this->input->post('absces_5f');
          $absces_19m = $this->input->post('absces_19m');
          $absces_19f = $this->input->post('absces_19f');
          $absces_20m = $this->input->post('absces_20m');
          $absces_20f = $this->input->post('absces_20f');

          $ulcers_5m = $this->input->post('ulcers_5m');
          $ulcers_5f = $this->input->post('ulcers_5f');
          $ulcers_19m = $this->input->post('ulcers_19m');
          $ulcers_19f = $this->input->post('ulcers_19f');
          $ulcers_20m = $this->input->post('ulcers_20m');
          $ulcers_20f = $this->input->post('ulcers_20f');

          $scabies_5m = $this->input->post('scabies_5m');
          $scabies_5f = $this->input->post('scabies_5f');
          $scabies_19m = $this->input->post('scabies_19m');
          $scabies_19f = $this->input->post('scabies_19f');
          $scabies_20m = $this->input->post('scabies_20m');
          $scabies_20f = $this->input->post('scabies_20f');

          $mycoses_5m = $this->input->post('mycoses_5m');
          $mycoses_5f = $this->input->post('mycoses_5f');
          $mycoses_19m = $this->input->post('mycoses_19m');
          $mycoses_19f = $this->input->post('mycoses_19f');
          $mycoses_20m = $this->input->post('mycoses_20m');
          $mycoses_20f = $this->input->post('mycoses_20f');

          $si_others_5m = $this->input->post('si_others_5m');
          $si_others_5f = $this->input->post('si_others_5f');
          $si_others_19m = $this->input->post('si_others_19m');
          $si_others_19f = $this->input->post('si_others_19f');
          $si_others_20m = $this->input->post('si_others_20m');
          $si_others_20f = $this->input->post('si_others_20f');

          $urinary_ti_5m = $this->input->post('urinary_ti_5m');
          $urinary_ti_5f = $this->input->post('urinary_ti_5f');
          $urinary_ti_19m = $this->input->post('urinary_ti_19m');
          $urinary_ti_19f = $this->input->post('urinary_ti_19f');
          $urinary_ti_20m = $this->input->post('urinary_ti_20m');
          $urinary_ti_20f = $this->input->post('urinary_ti_20f');

          $anemia_5m = $this->input->post('anemia_5m');
          $anemia_5f = $this->input->post('anemia_5f');
          $anemia_19m = $this->input->post('anemia_19m');
          $anemia_19f = $this->input->post('anemia_19f');
          $anemia_20m = $this->input->post('anemia_20m');
          $anemia_20f = $this->input->post('anemia_20f');

          $measles_susp_5m = $this->input->post('measles_susp_5m');
          $measles_susp_5f = $this->input->post('measles_susp_5f');
          $measles_susp_19m = $this->input->post('measles_susp_19m');
          $measles_susp_19f = $this->input->post('measles_susp_19f');
          $measles_susp_20m = $this->input->post('measles_susp_20m');
          $measles_susp_20f = $this->input->post('measles_susp_20f');

          $measles_conf_5m = $this->input->post('measles_conf_5m');
          $measles_conf_5f = $this->input->post('measles_conf_5f');
          $measles_conf_19m = $this->input->post('measles_conf_19m');
          $measles_conf_19f = $this->input->post('measles_conf_19f');
          $measles_conf_20m = $this->input->post('measles_conf_20m');
          $measles_conf_20f = $this->input->post('measles_conf_20f');

          $rubella_conf_5m = $this->input->post('rubella_conf_5m');
          $rubella_conf_5f = $this->input->post('rubella_conf_5f');
          $rubella_conf_19m = $this->input->post('rubella_conf_19m');
          $rubella_conf_19f = $this->input->post('rubella_conf_19f');
          $rubella_conf_20m = $this->input->post('rubella_conf_20m');
          $rubella_conf_20f = $this->input->post('rubella_conf_20f');

          $flaccid_paraly_5m = $this->input->post('flaccid_paraly_5m');
          $flaccid_paraly_5f = $this->input->post('flaccid_paraly_5f');
          $flaccid_paraly_19m = $this->input->post('flaccid_paraly_19m');
          $flaccid_paraly_19f = $this->input->post('flaccid_paraly_19f');
          $flaccid_paraly_20m = $this->input->post('flaccid_paraly_20m');
          $flaccid_paraly_20f = $this->input->post('flaccid_paraly_20f');

          $tetanus_5m = $this->input->post('tetanus_5m');
          $tetanus_5f = $this->input->post('tetanus_5f');
          $tetanus_19m = $this->input->post('tetanus_19m');
          $tetanus_19f = $this->input->post('tetanus_19f');
          $tetanus_20m = $this->input->post('tetanus_20m');
          $tetanus_20f = $this->input->post('tetanus_20f');

          $hepatitis_5m = $this->input->post('hepatitis_5m');
          $hepatitis_5f = $this->input->post('hepatitis_5f');
          $hepatitis_19m = $this->input->post('hepatitis_19m');
          $hepatitis_19f = $this->input->post('hepatitis_19f');
          $hepatitis_20m = $this->input->post('hepatitis_20m');
          $hepatitis_20f = $this->input->post('hepatitis_20f');

          $fractures_5m = $this->input->post('fractures_5m');
          $fractures_5f = $this->input->post('fractures_5f');
          $fractures_19m = $this->input->post('fractures_19m');
          $fractures_19f = $this->input->post('fractures_19f');
          $fractures_20m = $this->input->post('fractures_20m');
          $fractures_20f = $this->input->post('fractures_20f');

          $phys_traumas_5m = $this->input->post('phys_traumas_5m');
          $phys_traumas_5f = $this->input->post('phys_traumas_5f');
          $phys_traumas_19m = $this->input->post('phys_traumas_19m');
          $phys_traumas_19f = $this->input->post('phys_traumas_19f');
          $phys_traumas_20m = $this->input->post('phys_traumas_20m');
          $phys_traumas_20f = $this->input->post('phys_traumas_20f');

          $bone_joint_disord_5m = $this->input->post('bone_joint_disord_5m');
          $bone_joint_disord_5f = $this->input->post('bone_joint_disord_5f');
          $bone_joint_disord_19m = $this->input->post('bone_joint_disord_19m');
          $bone_joint_disord_19f = $this->input->post('bone_joint_disord_19f');
          $bone_joint_disord_20m = $this->input->post('bone_joint_disord_20m');
          $bone_joint_disord_20f = $this->input->post('bone_joint_disord_20f');

          $gyneco_pb_19f = $this->input->post('gyneco_pb_19f');
          $gyneco_pb_20f = $this->input->post('gyneco_pb_20f');

          $aids_5m = $this->input->post('aids_5m');
          $aids_5f = $this->input->post('aids_5f');
          $aids_19m = $this->input->post('aids_19m');
          $aids_19f = $this->input->post('aids_19f');
          $aids_20m = $this->input->post('aids_20m');
          $aids_20f = $this->input->post('aids_20f');

          $si_opport_5m = $this->input->post('si_opport_5m');
          $si_opport_5f = $this->input->post('si_opport_5f');
          $si_opport_19m = $this->input->post('si_opport_19m');
          $si_opport_19f = $this->input->post('si_opport_19f');
          $si_opport_20m = $this->input->post('si_opport_20m');
          $si_opport_20f = $this->input->post('si_opport_20f');

          $herpes_z_5m = $this->input->post('herpes_z_5m');
          $herpes_z_5f = $this->input->post('herpes_z_5f');
          $herpes_z_19m = $this->input->post('herpes_z_19m');
          $herpes_z_19f = $this->input->post('herpes_z_19f');
          $herpes_z_20m = $this->input->post('herpes_z_20m');
          $herpes_z_20f = $this->input->post('herpes_z_20f');

          $cand_oral_5m = $this->input->post('cand_oral_5m');
          $cand_oral_5f = $this->input->post('cand_oral_5f');
          $cand_oral_19m = $this->input->post('cand_oral_19m');
          $cand_oral_19f = $this->input->post('cand_oral_19f');
          $cand_oral_20m = $this->input->post('cand_oral_20m');
          $cand_oral_20f = $this->input->post('cand_oral_20f');

          $fever_5m = $this->input->post('fever_5m');
          $fever_5f = $this->input->post('fever_5f');
          $fever_19m = $this->input->post('fever_19m');
          $fever_19f = $this->input->post('fever_19f');
          $fever_20m = $this->input->post('fever_20m');
          $fever_20f = $this->input->post('fever_20f');

          $diar_chro_opp_infect_5m = $this->input->post('diar_chro_opp_infect_5m');
          $diar_chro_opp_infect_5f = $this->input->post('diar_chro_opp_infect_5f');
          $diar_chro_opp_infect_19m = $this->input->post('diar_chro_opp_infect_19m');
          $diar_chro_opp_infect_19f = $this->input->post('diar_chro_opp_infect_19f');
          $diar_chro_opp_infect_20m = $this->input->post('diar_chro_opp_infect_20m');
          $diar_chro_opp_infect_20f = $this->input->post('diar_chro_opp_infect_20f');

          $needle_5m = $this->input->post('needle_5m');
          $needle_5f = $this->input->post('needle_5f');
          $needle_19m = $this->input->post('needle_19m');
          $needle_19f = $this->input->post('needle_19f');
          $needle_20m = $this->input->post('needle_20m');
          $needle_20f = $this->input->post('needle_20f');

          $goitre_5m = $this->input->post('goitre_5m');
          $goitre_5f = $this->input->post('goitre_5f');
          $goitre_19m = $this->input->post('goitre_19m');
          $goitre_19f = $this->input->post('goitre_19f');
          $goitre_20m = $this->input->post('goitre_20m');
          $goitre_20f = $this->input->post('goitre_20f');

          $va_def_5m = $this->input->post('va_def_5m');
          $va_def_5f = $this->input->post('va_def_5f');
          $va_def_19m = $this->input->post('va_def_19m');
          $va_def_19f = $this->input->post('va_def_19f');
          $va_def_20m = $this->input->post('va_def_20m');
          $va_def_20f = $this->input->post('va_def_20f');

          $leprosy_5m = $this->input->post('leprosy_5m');
          $leprosy_5f = $this->input->post('leprosy_5f');
          $leprosy_19m = $this->input->post('leprosy_19m');
          $leprosy_19f = $this->input->post('leprosy_19f');
          $leprosy_20m = $this->input->post('leprosy_20m');
          $leprosy_20f = $this->input->post('leprosy_20f');

          $glaucoma_19m = $this->input->post('glaucoma_19m');
          $glaucoma_19f = $this->input->post('glaucoma_19f');
          $glaucoma_39m = $this->input->post('glaucoma_39m');
          $glaucoma_39f = $this->input->post('glaucoma_39f');
          $glaucoma_40m = $this->input->post('glaucoma_40m');
          $glaucoma_40f = $this->input->post('glaucoma_40f');

          $cataract_19m = $this->input->post('cataract_19m');
          $cataract_19f = $this->input->post('cataract_19f');
          $cataract_39m = $this->input->post('cataract_39m');
          $cataract_39f = $this->input->post('cataract_39f');
          $cataract_40m = $this->input->post('cataract_40m');
          $cataract_40f = $this->input->post('cataract_40f');

          $refrac_error_19m = $this->input->post('refrac_error_19m');
          $refrac_error_19f = $this->input->post('refrac_error_19f');
          $refrac_error_39m = $this->input->post('refrac_error_39m');
          $refrac_error_39f = $this->input->post('refrac_error_39f');
          $refrac_error_40m = $this->input->post('refrac_error_40m');
          $refrac_error_40f = $this->input->post('refrac_error_40f');

          $diab_retino_19m = $this->input->post('diab_retino_19m');
          $diab_retino_19f = $this->input->post('diab_retino_19f');
          $diab_retino_39m = $this->input->post('diab_retino_39m');
          $diab_retino_39f = $this->input->post('diab_retino_39f');
          $diab_retino_40m = $this->input->post('diab_retino_40m');
          $diab_retino_40f = $this->input->post('diab_retino_40f');

          $conjunctivitis_19m = $this->input->post('conjunctivitis_19m');
          $conjunctivitis_19f = $this->input->post('conjunctivitis_19f');
          $conjunctivitis_39m = $this->input->post('conjunctivitis_39m');
          $conjunctivitis_39f = $this->input->post('conjunctivitis_39f');
          $conjunctivitis_40m = $this->input->post('conjunctivitis_40m');
          $conjunctivitis_40f = $this->input->post('conjunctivitis_40f');

          $pinguecula_19m = $this->input->post('pinguecula_19m');
          $pinguecula_19f = $this->input->post('pinguecula_19f');
          $pinguecula_39m = $this->input->post('pinguecula_39m');
          $pinguecula_39f = $this->input->post('pinguecula_39f');
          $pinguecula_40m = $this->input->post('pinguecula_40m');
          $pinguecula_40f = $this->input->post('pinguecula_40f');

          $uveitis_19m = $this->input->post('uveitis_19m');
          $uveitis_19f = $this->input->post('uveitis_19f');
          $uveitis_39m = $this->input->post('uveitis_39m');
          $uveitis_39f = $this->input->post('uveitis_39f');
          $uveitis_40m = $this->input->post('uveitis_40m');
          $uveitis_40f = $this->input->post('uveitis_40f');

          $eye_trauma_19m = $this->input->post('eye_trauma_19m');
          $eye_trauma_19f = $this->input->post('eye_trauma_19f');
          $eye_trauma_39m = $this->input->post('eye_trauma_39m');
          $eye_trauma_39f = $this->input->post('eye_trauma_39f');
          $eye_trauma_40m = $this->input->post('eye_trauma_40m');
          $eye_trauma_40f = $this->input->post('eye_trauma_40f');

          $eye_pb_19m = $this->input->post('eye_pb_19m');
          $eye_pb_19f = $this->input->post('eye_pb_19f');
          $eye_pb_39m = $this->input->post('eye_pb_39m');
          $eye_pb_39f = $this->input->post('eye_pb_39f');
          $eye_pb_40m = $this->input->post('eye_pb_40m');
          $eye_pb_40f = $this->input->post('eye_pb_40f');

          $dent_caries_19m = $this->input->post('dent_caries_19m');
          $dent_caries_19f = $this->input->post('dent_caries_19f');
          $dent_caries_39m = $this->input->post('dent_caries_39m');
          $dent_caries_39f = $this->input->post('dent_caries_39f');
          $dent_caries_40m = $this->input->post('dent_caries_40m');
          $dent_caries_40f = $this->input->post('dent_caries_40f');

          $perio_diseas_19m = $this->input->post('perio_diseas_19m');
          $perio_diseas_19f = $this->input->post('perio_diseas_19f');
          $perio_diseas_39m = $this->input->post('perio_diseas_39m');
          $perio_diseas_39f = $this->input->post('perio_diseas_39f');
          $perio_diseas_40m = $this->input->post('perio_diseas_40m');
          $perio_diseas_40f = $this->input->post('perio_diseas_40f');

          $other_teeth_19m = $this->input->post('other_teeth_19m');
          $other_teeth_19f = $this->input->post('other_teeth_19f');
          $other_teeth_39m = $this->input->post('other_teeth_39m');
          $other_teeth_39f = $this->input->post('other_teeth_39f');
          $other_teeth_40m = $this->input->post('other_teeth_40m');
          $other_teeth_40f = $this->input->post('other_teeth_40f');

          $anxiety_nc19m = $this->input->post('anxiety_nc19m');
          $anxiety_nc19f = $this->input->post('anxiety_nc19f');
          $anxiety_nc39m = $this->input->post('anxiety_nc39m');
          $anxiety_nc39f = $this->input->post('anxiety_nc39f');
          $anxiety_nc40m = $this->input->post('anxiety_nc40m');
          $anxiety_nc40f = $this->input->post('anxiety_nc40f');

          $stress_nc19m = $this->input->post('stress_nc19m');
          $stress_nc19f = $this->input->post('stress_nc19f');
          $stress_nc39m = $this->input->post('stress_nc39m');
          $stress_nc39f = $this->input->post('stress_nc39f');
          $stress_nc40m = $this->input->post('stress_nc40m');
          $stress_nc40f = $this->input->post('stress_nc40f');

          $schizo_nc19m = $this->input->post('schizo_nc19m');
          $schizo_nc19f = $this->input->post('schizo_nc19f');
          $schizo_nc39m = $this->input->post('schizo_nc39m');
          $schizo_nc39f = $this->input->post('schizo_nc39f');
          $schizo_nc40m = $this->input->post('schizo_nc40m');
          $schizo_nc40f = $this->input->post('schizo_nc40f');

          $soma_nc19m = $this->input->post('soma_nc19m');
          $soma_nc19f = $this->input->post('soma_nc19f');
          $soma_nc39m = $this->input->post('soma_nc39m');
          $soma_nc39f = $this->input->post('soma_nc39f');
          $soma_nc40m = $this->input->post('soma_nc40m');
          $soma_nc40f = $this->input->post('soma_nc40f');

          $child_nc19m = $this->input->post('child_nc19m');
          $child_nc19f = $this->input->post('child_nc19f');
          $child_nc39m = $this->input->post('child_nc39m');
          $child_nc39f = $this->input->post('child_nc39f');
          $child_nc40m = $this->input->post('child_nc40m');
          $child_nc40f = $this->input->post('child_nc40f');

          $alcohol_nc19m = $this->input->post('alcohol_nc19m');
          $alcohol_nc19f = $this->input->post('alcohol_nc19f');
          $alcohol_nc39m = $this->input->post('alcohol_nc39m');
          $alcohol_nc39f = $this->input->post('alcohol_nc39f');
          $alcohol_nc40m = $this->input->post('alcohol_nc40m');
          $alcohol_nc40f = $this->input->post('alcohol_nc40f');

          $drugs_nc19m = $this->input->post('drugs_nc19m');
          $drugs_nc19f = $this->input->post('drugs_nc19f');
          $drugs_nc39m = $this->input->post('drugs_nc39m');
          $drugs_nc39f = $this->input->post('drugs_nc39f');
          $drugs_nc40m = $this->input->post('drugs_nc40m');
          $drugs_nc40f = $this->input->post('drugs_nc40f');

          $dep_nc19m = $this->input->post('dep_nc19m');
          $dep_nc19f = $this->input->post('dep_nc19f');
          $dep_nc39m = $this->input->post('dep_nc39m');
          $dep_nc39f = $this->input->post('dep_nc39f');
          $dep_nc40m = $this->input->post('dep_nc40m');
          $dep_nc40f = $this->input->post('dep_nc40f');

          $suicid_att_nc19m = $this->input->post('suicid_att_nc19m');
          $suicid_att_nc19f = $this->input->post('suicid_att_nc19f');
          $suicid_att_nc39m = $this->input->post('suicid_att_nc39m');
          $suicid_att_nc39f = $this->input->post('suicid_att_nc39f');
          $suicid_att_nc40m = $this->input->post('suicid_att_nc40m');
          $suicid_att_nc40f = $this->input->post('suicid_att_nc40f');

          $suicid_d_nc19m = $this->input->post('suicid_d_nc19m');
          $suicid_d_nc19f = $this->input->post('suicid_d_nc19f');
          $suicid_d_nc39m = $this->input->post('suicid_d_nc39m');
          $suicid_d_nc39f = $this->input->post('suicid_d_nc39f');
          $suicid_d_nc40m = $this->input->post('suicid_d_nc40m');
          $suicid_d_nc40f = $this->input->post('suicid_d_nc40f');

          $maniac_nc19m = $this->input->post('maniac_nc19m');
          $maniac_nc19f = $this->input->post('maniac_nc19f');
          $maniac_nc39m = $this->input->post('maniac_nc39m');
          $maniac_nc39f = $this->input->post('maniac_nc39f');
          $maniac_nc40m = $this->input->post('maniac_nc40m');
          $maniac_nc40f = $this->input->post('maniac_nc40f');

          $bipolar_nc19m = $this->input->post('bipolar_nc19m');
          $bipolar_nc19f = $this->input->post('bipolar_nc19f');
          $bipolar_nc39m = $this->input->post('bipolar_nc39m');
          $bipolar_nc39f = $this->input->post('bipolar_nc39f');
          $bipolar_nc40m = $this->input->post('bipolar_nc40m');
          $bipolar_nc40f = $this->input->post('bipolar_nc40f');

          $other_psy_nc19m = $this->input->post('other_psy_nc19m');
          $other_psy_nc19f = $this->input->post('other_psy_nc19f');
          $other_psy_nc39m = $this->input->post('other_psy_nc39m');
          $other_psy_nc39f = $this->input->post('other_psy_nc39f');
          $other_psy_nc40m = $this->input->post('other_psy_nc40m');
          $other_psy_nc40f = $this->input->post('other_psy_nc40f');

          $epilepsy_nc19m = $this->input->post('epilepsy_nc19m');
          $epilepsy_nc19f = $this->input->post('epilepsy_nc19f');
          $epilepsy_nc39m = $this->input->post('epilepsy_nc39m');
          $epilepsy_nc39f = $this->input->post('epilepsy_nc39f');
          $epilepsy_nc40m = $this->input->post('epilepsy_nc40m');
          $epilepsy_nc40f = $this->input->post('epilepsy_nc40f');

          $other_neuro_nc19m = $this->input->post('other_neuro_nc19m');
          $other_neuro_nc19f = $this->input->post('other_neuro_nc19f');
          $other_neuro_nc39m = $this->input->post('other_neuro_nc39m');
          $other_neuro_nc39f = $this->input->post('other_neuro_nc39f');
          $other_neuro_nc40m = $this->input->post('other_neuro_nc40m');
          $other_neuro_nc40f = $this->input->post('other_neuro_nc40f');

          $hyper_nc19m = $this->input->post('hyper_nc19m');
          $hyper_nc19f = $this->input->post('hyper_nc19f');
          $hyper_nc39m = $this->input->post('hyper_nc39m');
          $hyper_nc39f = $this->input->post('hyper_nc39f');
          $hyper_nc40m = $this->input->post('hyper_nc40m');
          $hyper_nc40f = $this->input->post('hyper_nc40f');

          $asth_int_nc19m = $this->input->post('asth_int_nc19m');
          $asth_int_nc19f = $this->input->post('asth_int_nc19f');
          $asth_int_nc39m = $this->input->post('asth_int_nc39m');
          $asth_int_nc39f = $this->input->post('asth_int_nc39f');
          $asth_int_nc40m = $this->input->post('asth_int_nc40m');
          $asth_int_nc40f = $this->input->post('asth_int_nc40f');

          $asth_mild_nc19m = $this->input->post('asth_mild_nc19m');
          $asth_mild_nc19f = $this->input->post('asth_mild_nc19f');
          $asth_mild_nc39m = $this->input->post('asth_mild_nc39m');
          $asth_mild_nc39f = $this->input->post('asth_mild_nc39f');
          $asth_mild_nc40m = $this->input->post('asth_mild_nc40m');
          $asth_mild_nc40f = $this->input->post('asth_mild_nc40f');

          $asth_mod_nc19m = $this->input->post('asth_mod_nc19m');
          $asth_mod_nc19f = $this->input->post('asth_mod_nc19f');
          $asth_mod_nc39m = $this->input->post('asth_mod_nc39m');
          $asth_mod_nc39f = $this->input->post('asth_mod_nc39f');
          $asth_mod_nc40m = $this->input->post('asth_mod_nc40m');
          $asth_mod_nc40f = $this->input->post('asth_mod_nc40f');

          $asth_sev_nc19m = $this->input->post('asth_sev_nc19m');
          $asth_sev_nc19f = $this->input->post('asth_sev_nc19f');
          $asth_sev_nc39m = $this->input->post('asth_sev_nc39m');
          $asth_sev_nc39f = $this->input->post('asth_sev_nc39f');
          $asth_sev_nc40m = $this->input->post('asth_sev_nc40m');
          $asth_sev_nc40f = $this->input->post('asth_sev_nc40f');

          $bronch_nc19m = $this->input->post('bronch_nc19m');
          $bronch_nc19f = $this->input->post('bronch_nc19f');
          $bronch_nc39m = $this->input->post('bronch_nc39m');
          $bronch_nc39f = $this->input->post('bronch_nc39f');
          $bronch_nc40m = $this->input->post('bronch_nc40m');
          $bronch_nc40f = $this->input->post('bronch_nc40f');

          $other_pulm_nc19m = $this->input->post('other_pulm_nc19m');
          $other_pulm_nc19f = $this->input->post('other_pulm_nc19f');
          $other_pulm_nc39m = $this->input->post('other_pulm_nc39m');
          $other_pulm_nc39f = $this->input->post('other_pulm_nc39f');
          $other_pulm_nc40m = $this->input->post('other_pulm_nc40m');
          $other_pulm_nc40f = $this->input->post('other_pulm_nc40f');

          $diab1_nc19m = $this->input->post('diab1_nc19m');
          $diab1_nc19f = $this->input->post('diab1_nc19f');
          $diab1_nc39m = $this->input->post('diab1_nc39m');
          $diab1_nc39f = $this->input->post('diab1_nc39f');
          $diab1_nc40m = $this->input->post('diab1_nc40m');
          $diab1_nc40f = $this->input->post('diab1_nc40f');

          $diab2_nc19m = $this->input->post('diab2_nc19m');
          $diab2_nc19f = $this->input->post('diab2_nc19f');
          $diab2_nc39m = $this->input->post('diab2_nc39m');
          $diab2_nc39f = $this->input->post('diab2_nc39f');
          $diab2_nc40m = $this->input->post('diab2_nc40m');
          $diab2_nc40f = $this->input->post('diab2_nc40f');

          $diab_gest_nc19m = $this->input->post('diab_gest_nc19m');
          $diab_gest_nc19f = $this->input->post('diab_gest_nc19f');
          $diab_gest_nc39m = $this->input->post('diab_gest_nc39m');
          $diab_gest_nc39f = $this->input->post('diab_gest_nc39f');
          $diab_gest_nc40m = $this->input->post('diab_gest_nc40m');
          $diab_gest_nc40f = $this->input->post('diab_gest_nc40f');

          $breast_nc19f = $this->input->post('breast_nc19f');
          $breast_nc39f = $this->input->post('breast_nc39f');
          $breast_nc40f = $this->input->post('breast_nc40f');

          $cervical_nc19m = $this->input->post('cervical_nc19m');
          $cervical_nc19f = $this->input->post('cervical_nc19f');
          $cervical_nc39m = $this->input->post('cervical_nc39m');
          $cervical_nc39f = $this->input->post('cervical_nc39f');
          $cervical_nc40m = $this->input->post('cervical_nc40m');
          $cervical_nc40f = $this->input->post('cervical_nc40f');

          $lympho_nc19m = $this->input->post('lympho_nc19m');
          $lympho_nc19f = $this->input->post('lympho_nc19f');
          $lympho_nc39m = $this->input->post('lympho_nc39m');
          $lympho_nc39f = $this->input->post('lympho_nc39f');
          $lympho_nc40m = $this->input->post('lympho_nc40m');
          $lympho_nc40f = $this->input->post('lympho_nc40f');

          $leuca_nc19m = $this->input->post('leuca_nc19m');
          $leuca_nc19f = $this->input->post('leuca_nc19f');
          $leuca_nc39m = $this->input->post('leuca_nc39m');
          $leuca_nc39f = $this->input->post('leuca_nc39f');
          $leuca_nc40m = $this->input->post('leuca_nc40m');
          $leuca_nc40f = $this->input->post('leuca_nc40f');

          $colon_nc19m = $this->input->post('colon_nc19m');
          $colon_nc19f = $this->input->post('colon_nc19f');
          $colon_nc39m = $this->input->post('colon_nc39m');
          $colon_nc39f = $this->input->post('colon_nc39f');
          $colon_nc40m = $this->input->post('colon_nc40m');
          $colon_nc40f = $this->input->post('colon_nc40f');

          $kaposi_nc19m = $this->input->post('kaposi_nc19m');
          $kaposi_nc19f = $this->input->post('kaposi_nc19f');
          $kaposi_nc39m = $this->input->post('kaposi_nc39m');
          $kaposi_nc39f = $this->input->post('kaposi_nc39f');
          $kaposi_nc40m = $this->input->post('kaposi_nc40m');
          $kaposi_nc40f = $this->input->post('kaposi_nc40f');

          $retino_nc19m = $this->input->post('retino_nc19m');
          $retino_nc19f = $this->input->post('retino_nc19f');
          $retino_nc39m = $this->input->post('retino_nc39m');
          $retino_nc39f = $this->input->post('retino_nc39f');
          $retino_nc40m = $this->input->post('retino_nc40m');
          $retino_nc40f = $this->input->post('retino_nc40f');

          $nephro_nc19m = $this->input->post('nephro_nc19m');
          $nephro_nc19f = $this->input->post('nephro_nc19f');
          $nephro_nc39m = $this->input->post('nephro_nc39m');
          $nephro_nc39f = $this->input->post('nephro_nc39f');
          $nephro_nc40m = $this->input->post('nephro_nc40m');
          $nephro_nc40f = $this->input->post('nephro_nc40f');

          $ovarian_nc19f = $this->input->post('ovarian_nc19f');
          $ovarian_nc39f = $this->input->post('ovarian_nc39f');
          $ovarian_nc40f = $this->input->post('ovarian_nc40f');

          $prostate_nc19m = $this->input->post('prostate_nc19m');
          $prostate_nc39m = $this->input->post('prostate_nc39m');
          $prostate_nc40m = $this->input->post('prostate_nc40m');

          $cancer_others_nc19m = $this->input->post('cancer_others_nc19m');
          $cancer_others_nc19f = $this->input->post('cancer_others_nc19f');
          $cancer_others_nc39m = $this->input->post('cancer_others_nc39m');
          $cancer_others_nc39f = $this->input->post('cancer_others_nc39f');
          $cancer_others_nc40m = $this->input->post('cancer_others_nc40m');
          $cancer_others_nc40f = $this->input->post('cancer_others_nc40f');

          $cardio_nc19m = $this->input->post('cardio_nc19m');
          $cardio_nc19f = $this->input->post('cardio_nc19f');
          $cardio_nc39m = $this->input->post('cardio_nc39m');
          $cardio_nc39f = $this->input->post('cardio_nc39f');
          $cardio_nc40m = $this->input->post('cardio_nc40m');
          $cardio_nc40f = $this->input->post('cardio_nc40f');

          $stroke_nc19m = $this->input->post('stroke_nc19m');
          $stroke_nc19f = $this->input->post('stroke_nc19f');
          $stroke_nc39m = $this->input->post('stroke_nc39m');
          $stroke_nc39f = $this->input->post('stroke_nc39f');
          $stroke_nc40m = $this->input->post('stroke_nc40m');
          $stroke_nc40f = $this->input->post('stroke_nc40f');

          $rheumatic_nc19m = $this->input->post('rheumatic_nc19m');
          $rheumatic_nc19f = $this->input->post('rheumatic_nc19f');
          $rheumatic_nc39m = $this->input->post('rheumatic_nc39m');
          $rheumatic_nc39f = $this->input->post('rheumatic_nc39f');
          $rheumatic_nc40m = $this->input->post('rheumatic_nc40m');
          $rheumatic_nc40f = $this->input->post('rheumatic_nc40f');

          $cong_nc19m = $this->input->post('cong_nc19m');
          $cong_nc19f = $this->input->post('cong_nc19f');
          $cong_nc39m = $this->input->post('cong_nc39m');
          $cong_nc39f = $this->input->post('cong_nc39f');
          $cong_nc40m = $this->input->post('cong_nc40m');
          $cong_nc40f = $this->input->post('cong_nc40f');

          $coronary_nc19m = $this->input->post('coronary_nc19m');
          $coronary_nc19f = $this->input->post('coronary_nc19f');
          $coronary_nc39m = $this->input->post('coronary_nc39m');
          $coronary_nc39f = $this->input->post('coronary_nc39f');
          $coronary_nc40m = $this->input->post('coronary_nc40m');
          $coronary_nc40f = $this->input->post('coronary_nc40f');

          $peri_nc19m = $this->input->post('peri_nc19m');
          $peri_nc19f = $this->input->post('peri_nc19f');
          $peri_nc39m = $this->input->post('peri_nc39m');
          $peri_nc39f = $this->input->post('peri_nc39f');
          $peri_nc40m = $this->input->post('peri_nc40m');
          $peri_nc40f = $this->input->post('peri_nc40f');

          $heart_nc19m = $this->input->post('heart_nc19m');
          $heart_nc19f = $this->input->post('heart_nc19f');
          $heart_nc39m = $this->input->post('heart_nc39m');
          $heart_nc39f = $this->input->post('heart_nc39f');
          $heart_nc40m = $this->input->post('heart_nc40m');
          $heart_nc40f = $this->input->post('heart_nc40f');

          $other_cardio_nc19m = $this->input->post('other_cardio_nc19m');
          $other_cardio_nc19f = $this->input->post('other_cardio_nc19f');
          $other_cardio_nc39m = $this->input->post('other_cardio_nc39m');
          $other_cardio_nc39f = $this->input->post('other_cardio_nc39f');
          $other_cardio_nc40m = $this->input->post('other_cardio_nc40m');
          $other_cardio_nc40f = $this->input->post('other_cardio_nc40f');

          $post_heart_nc19m = $this->input->post('post_heart_nc19m');
          $post_heart_nc19f = $this->input->post('post_heart_nc19f');
          $post_heart_nc39m = $this->input->post('post_heart_nc39m');
          $post_heart_nc39f = $this->input->post('post_heart_nc39f');
          $post_heart_nc40m = $this->input->post('post_heart_nc40m');
          $post_heart_nc40f = $this->input->post('post_heart_nc40f');

          $renal_nc19m = $this->input->post('renal_nc19m');
          $renal_nc19f = $this->input->post('renal_nc19f');
          $renal_nc39m = $this->input->post('renal_nc39m');
          $renal_nc39f = $this->input->post('renal_nc39f');
          $renal_nc40m = $this->input->post('renal_nc40m');
          $renal_nc40f = $this->input->post('renal_nc40f');

          $other_chronic_nc19m = $this->input->post('other_chronic_nc19m');
          $other_chronic_nc19f = $this->input->post('other_chronic_nc19f');
          $other_chronic_nc39m = $this->input->post('other_chronic_nc39m');
          $other_chronic_nc39f = $this->input->post('other_chronic_nc39f');
          $other_chronic_nc40m = $this->input->post('other_chronic_nc40m');
          $other_chronic_nc40f = $this->input->post('other_chronic_nc40f');

          $thyroid_nc19m = $this->input->post('thyroid_nc19m');
          $thyroid_nc19f = $this->input->post('thyroid_nc19f');
          $thyroid_nc39m = $this->input->post('thyroid_nc39m');
          $thyroid_nc39f = $this->input->post('thyroid_nc39f');
          $thyroid_nc40m = $this->input->post('thyroid_nc40m');
          $thyroid_nc40f = $this->input->post('thyroid_nc40f');

          $other_endo_nc19m = $this->input->post('other_endo_nc19m');
          $other_endo_nc19f = $this->input->post('other_endo_nc19f');
          $other_endo_nc39m = $this->input->post('other_endo_nc39m');
          $other_endo_nc39f = $this->input->post('other_endo_nc39f');
          $other_endo_nc40m = $this->input->post('other_endo_nc40m');
          $other_endo_nc40f = $this->input->post('other_endo_nc40f');

          $road_nc19m = $this->input->post('road_nc19m');
          $road_nc19f = $this->input->post('road_nc19f');
          $road_nc39m = $this->input->post('road_nc39m');
          $road_nc39f = $this->input->post('road_nc39f');
          $road_nc40m = $this->input->post('road_nc40m');
          $road_nc40f = $this->input->post('road_nc40f');
          $road_d19m = $this->input->post('road_d19m');
          $road_d19f = $this->input->post('road_d19f');
          $road_d39m = $this->input->post('road_d39m');
          $road_d39f = $this->input->post('road_d39f');
          $road_d40m = $this->input->post('road_d40m');
          $road_d40f = $this->input->post('road_d40f');

          $self_harm_nc19m = $this->input->post('self_harm_nc19m');
          $self_harm_nc19f = $this->input->post('self_harm_nc19f');
          $self_harm_nc39m = $this->input->post('self_harm_nc39m');
          $self_harm_nc39f = $this->input->post('self_harm_nc39f');
          $self_harm_nc40m = $this->input->post('self_harm_nc40m');
          $self_harm_nc40f = $this->input->post('self_harm_nc40f');
          $self_harm_d19m = $this->input->post('self_harm_d19m');
          $self_harm_d19f = $this->input->post('self_harm_d19f');
          $self_harm_d39m = $this->input->post('self_harm_d39m');
          $self_harm_d39f = $this->input->post('self_harm_d39f');
          $self_harm_d40m = $this->input->post('self_harm_d40m');
          $self_harm_d40f = $this->input->post('self_harm_d40f');

          $inter_violence_nc19m = $this->input->post('inter_violence_nc19m');
          $inter_violence_nc19f = $this->input->post('inter_violence_nc19f');
          $inter_violence_nc39m = $this->input->post('inter_violence_nc39m');
          $inter_violence_nc39f = $this->input->post('inter_violence_nc39f');
          $inter_violence_nc40m = $this->input->post('inter_violence_nc40m');
          $inter_violence_nc40f = $this->input->post('inter_violence_nc40f');
          $inter_violence_d19m = $this->input->post('inter_violence_d19m');
          $inter_violence_d19f = $this->input->post('inter_violence_d19f');
          $inter_violence_d39m = $this->input->post('inter_violence_d39m');
          $inter_violence_d39f = $this->input->post('inter_violence_d39f');
          $inter_violence_d40m = $this->input->post('inter_violence_d40m');
          $inter_violence_d40f = $this->input->post('inter_violence_d40f');

          $other_injury_nc19m = $this->input->post('other_injury_nc19m');
          $other_injury_nc19f = $this->input->post('other_injury_nc19f');
          $other_injury_nc39m = $this->input->post('other_injury_nc39m');
          $other_injury_nc39f = $this->input->post('other_injury_nc39f');
          $other_injury_nc40m = $this->input->post('other_injury_nc40m');
          $other_injury_nc40f = $this->input->post('other_injury_nc40f');
          $other_injury_d19m = $this->input->post('other_injury_d19m');
          $other_injury_d19f = $this->input->post('other_injury_d19f');
          $other_injury_d39m = $this->input->post('other_injury_d39m');
          $other_injury_d39f = $this->input->post('other_injury_d39f');
          $other_injury_d40m = $this->input->post('other_injury_d40m');
          $other_injury_d40f = $this->input->post('other_injury_d40f');

          $falls_nc19m = $this->input->post('falls_nc19m');
          $falls_nc19f = $this->input->post('falls_nc19f');
          $falls_nc39m = $this->input->post('falls_nc39m');
          $falls_nc39f = $this->input->post('falls_nc39f');
          $falls_nc40m = $this->input->post('falls_nc40m');
          $falls_nc40f = $this->input->post('falls_nc40f');
          $falls_d19m = $this->input->post('falls_d19m');
          $falls_d19f = $this->input->post('falls_d19f');
          $falls_d39m = $this->input->post('falls_d39m');
          $falls_d39f = $this->input->post('falls_d39f');
          $falls_d40m = $this->input->post('falls_d40m');
          $falls_d40f = $this->input->post('falls_d40f');

          $drowning_nc19m = $this->input->post('drowning_nc19m');
          $drowning_nc19f = $this->input->post('drowning_nc19f');
          $drowning_nc39m = $this->input->post('drowning_nc39m');
          $drowning_nc39f = $this->input->post('drowning_nc39f');
          $drowning_nc40m = $this->input->post('drowning_nc40m');
          $drowning_nc40f = $this->input->post('drowning_nc40f');
          $drowning_d19m = $this->input->post('drowning_d19m');
          $drowning_d19f = $this->input->post('drowning_d19f');
          $drowning_d39m = $this->input->post('drowning_d39m');
          $drowning_d39f = $this->input->post('drowning_d39f');
          $drowning_d40m = $this->input->post('drowning_d40m');
          $drowning_d40f = $this->input->post('drowning_d40f');

          $fire_nc19m = $this->input->post('fire_nc19m');
          $fire_nc19f = $this->input->post('fire_nc19f');
          $fire_nc39m = $this->input->post('fire_nc39m');
          $fire_nc39f = $this->input->post('fire_nc39f');
          $fire_nc40m = $this->input->post('fire_nc40m');
          $fire_nc40f = $this->input->post('fire_nc40f');
          $fire_d19m = $this->input->post('fire_d19m');
          $fire_d19f = $this->input->post('fire_d19f');
          $fire_d39m = $this->input->post('fire_d39m');
          $fire_d39f = $this->input->post('fire_d39f');
          $fire_d40m = $this->input->post('fire_d40m');
          $fire_d40f = $this->input->post('fire_d40f');

          $animal_nc19m = $this->input->post('animal_nc19m');
          $animal_nc19f = $this->input->post('animal_nc19f');
          $animal_nc39m = $this->input->post('animal_nc39m');
          $animal_nc39f = $this->input->post('animal_nc39f');
          $animal_nc40m = $this->input->post('animal_nc40m');
          $animal_nc40f = $this->input->post('animal_nc40f');
          $animal_d19m = $this->input->post('animal_d19m');
          $animal_d19f = $this->input->post('animal_d19f');
          $animal_d39m = $this->input->post('animal_d39m');
          $animal_d39f = $this->input->post('animal_d39f');
          $animal_d40m = $this->input->post('animal_d40m');
          $animal_d40f = $this->input->post('animal_d40f');

          $poison_nc19m = $this->input->post('poison_nc19m');
          $poison_nc19f = $this->input->post('poison_nc19f');
          $poison_nc39m = $this->input->post('poison_nc39m');
          $poison_nc39f = $this->input->post('poison_nc39f');
          $poison_nc40m = $this->input->post('poison_nc40m');
          $poison_nc40f = $this->input->post('poison_nc40f');
          $poison_d19m = $this->input->post('poison_d19m');
          $poison_d19f = $this->input->post('poison_d19f');
          $poison_d39m = $this->input->post('poison_d39m');
          $poison_d39f = $this->input->post('poison_d39f');
          $poison_d40m = $this->input->post('poison_d40m');
          $poison_d40f = $this->input->post('poison_d40f');

          $natural_disasters_nc19m = $this->input->post('natural_disasters_nc19m');
          $natural_disasters_nc19f = $this->input->post('natural_disasters_nc19f');
          $natural_disasters_nc39m = $this->input->post('natural_disasters_nc39m');
          $natural_disasters_nc39f = $this->input->post('natural_disasters_nc39f');
          $natural_disasters_nc40m = $this->input->post('natural_disasters_nc40m');
          $natural_disasters_nc40f = $this->input->post('natural_disasters_nc40f');
          $natural_disasters_d19m = $this->input->post('natural_disasters_d19m');
          $natural_disasters_d19f = $this->input->post('natural_disasters_d19f');
          $natural_disasters_d39m = $this->input->post('natural_disasters_d39m');
          $natural_disasters_d39f = $this->input->post('natural_disasters_d39f');
          $natural_disasters_d40m = $this->input->post('natural_disasters_d40m');
          $natural_disasters_d40f = $this->input->post('natural_disasters_d40f');

          $ad_effects_nc19m = $this->input->post('ad_effects_nc19m');
          $ad_effects_nc19f = $this->input->post('ad_effects_nc19f');
          $ad_effects_nc39m = $this->input->post('ad_effects_nc39m');
          $ad_effects_nc39f = $this->input->post('ad_effects_nc39f');
          $ad_effects_nc40m = $this->input->post('ad_effects_nc40m');
          $ad_effects_nc40f = $this->input->post('ad_effects_nc40f');
          $ad_effects_d19m = $this->input->post('ad_effects_d19m');
          $ad_effects_d19f = $this->input->post('ad_effects_d19f');
          $ad_effects_d39m = $this->input->post('ad_effects_d39m');
          $ad_effects_d39f = $this->input->post('ad_effects_d39f');
          $ad_effects_d40m = $this->input->post('ad_effects_d40m');
          $ad_effects_d40f = $this->input->post('ad_effects_d40f');

          $other_unintent_nc19m = $this->input->post('other_unintent_nc19m');
          $other_unintent_nc19f = $this->input->post('other_unintent_nc19f');
          $other_unintent_nc39m = $this->input->post('other_unintent_nc39m');
          $other_unintent_nc39f = $this->input->post('other_unintent_nc39f');
          $other_unintent_nc40m = $this->input->post('other_unintent_nc40m');
          $other_unintent_nc40f = $this->input->post('other_unintent_nc40f');
          $other_unintent_d19m = $this->input->post('other_unintent_d19m');
          $other_unintent_d19f = $this->input->post('other_unintent_d19f');
          $other_unintent_d39m = $this->input->post('other_unintent_d39m');
          $other_unintent_d39f = $this->input->post('other_unintent_d39f');
          $other_unintent_d40m = $this->input->post('other_unintent_d40m');
          $other_unintent_d40f = $this->input->post('other_unintent_d40f');

          $oc_19m = $this->input->post('oc_19m');
          $oc_19f = $this->input->post('oc_19f');
          $oc_20m = $this->input->post('oc_20m');
          $oc_20f = $this->input->post('oc_20f');

          $nc_19m = $this->input->post('nc_19m');
          $nc_19f = $this->input->post('nc_19f');
          $nc_20m = $this->input->post('nc_20m');
          $nc_20f = $this->input->post('nc_20f');

          $time_19m = $this->input->post('time_19m');
          $time_19f = $this->input->post('time_19f');
          $time_20m = $this->input->post('time_20m');
          $time_20f = $this->input->post('time_20f');

          $morphine_19m = $this->input->post('morphine_19m');
          $morphine_19f = $this->input->post('morphine_19f');
          $morphine_20m = $this->input->post('morphine_20m');
          $morphine_20f = $this->input->post('morphine_20f');

          $end_life_19m = $this->input->post('end_life_19m');
          $end_life_19f = $this->input->post('end_life_19f');
          $end_life_20m = $this->input->post('end_life_20m');
          $end_life_20f = $this->input->post('end_life_20f');

          $death_19m = $this->input->post('death_19m');
          $death_19f = $this->input->post('death_19f');
          $death_20m = $this->input->post('death_20m');
          $death_20f = $this->input->post('death_20f');

          $annual_checkup = $this->input->post('annual_checkup');
          $cardio = $this->input->post('cardio');
          $respiratory = $this->input->post('respiratory');
          $diabetes = $this->input->post('diabetes');
          $renal = $this->input->post('renal');
          $cancer = $this->input->post('cancer');
          $disability = $this->input->post('disability');

          $cervical = $this->input->post('cervical');
          $cervical_viap = $this->input->post('cervical_viap');
          $cervical_viap_hivp = $this->input->post('cervical_viap_hivp');
          $cryo_viap = $this->input->post('cryo_viap');
          $treatement_viap = $this->input->post('treatement_viap');
          $breast_screened = $this->input->post('breast_screened');
          $breast_referred = $this->input->post('breast_referred');
          $cervical_otherlevel = $this->input->post('cervical_otherlevel');
          $biopsies = $this->input->post('biopsies');

          $this->opd_model->update_data1(
            $nc5m,
            $nc5f,
            $nc19f,
            $nc19m,
            $nc20m,
            $nc20f,
            $oc5m,
            $oc5f,
            $oc19f,
            $oc19m,
            $oc20m,
            $oc20f,
            $insured,
            $nc_non_paying,
            $nc_indigent,
            $other_levels,
            $counter_received,
            $nc_catch,
            $nc,
            $international,
            $diar_w_dehy_5f,
            $diar_w_dehy_5m,
            $diar_w_dehy_19m,
            $diar_w_dehy_19f,
            $diar_w_dehy_20m,
            $diar_w_dehy_20f,
            $diar_no_dehy_5f,
            $diar_no_dehy_5m,
            $diar_no_dehy_19m,
            $diar_no_dehy_19f,
            $diar_no_dehy_20m,
            $diar_no_dehy_20f,
            $blood_diar_5f,
            $blood_diar_5m,
            $blood_diar_19m,
            $blood_diar_19f,
            $blood_diar_20m,
            $blood_diar_20f,
            $food_poison_5f,
            $food_poison_5m,
            $food_poison_19m,
            $food_poison_19f,
            $food_poison_20m,
            $food_poison_20f,
            $ear_infect_5f,
            $ear_infect_5m,
            $ear_infect_19m,
            $ear_infect_19f,
            $ear_infect_20m,
            $ear_infect_20f,
            $schisto_5f,
            $schisto_5m,
            $schisto_19m,
            $schisto_19f,
            $schisto_20m,
            $schisto_20f,
            $ascaris_5f,
            $ascaris_5m,
            $ascaris_19m,
            $ascaris_19f,
            $ascaris_20m,
            $ascaris_20f,
            $trichu_5m,
            $trichu_5f,
            $trichu_19m,
            $trichu_19f,
            $trichu_20m,
            $trichu_20f,
            $hook_5m,
            $hook_5f,
            $hook_19f,
            $hook_19m,
            $hook_20m,
            $hook_20f,
            $entam_5f,
            $entam_5m,
            $entam_19m,
            $entam_19f,
            $entam_20m,
            $entam_20f,
            $giardia_5f,
            $giardia_5m,
            $giardia_19m,
            $giardia_19f,
            $giardia_20m,
            $giardia_20f,
            $taenia_5f,
            $taenia_5m,
            $taenia_19m,
            $taenia_19f,
            $taenia_20m,
            $taenia_20f,
            $malaria_s_5f,
            $malaria_s_5m,
            $malaria_s_19m,
            $malaria_s_19f,
            $malaria_s_20m,
            $malaria_s_20f,
            $malaria_dig_5f,
            $malaria_dig_5m,
            $malaria_dig_19m,
            $malaria_dig_19f,
            $malaria_dig_20m,
            $malaria_dig_20f,
            $herpes_s_5f,
            $herpes_s_5m,
            $herpes_s_19m,
            $herpes_s_19f,
            $herpes_s_20m,
            $herpes_s_20f,
            $mening_5f,
            $mening_5m,
            $mening_19m,
            $mening_19f,
            $mening_20m,
            $mening_20f,
            $pneumonia_simp_5m,
            $pneumonia_simp_5f,
            $pneumonia_simp_19m,
            $pneumonia_simp_19f,
            $pneumonia_simp_20m,
            $pneumonia_simp_20f,
            $pneumonia_sev_5m,
            $pneumonia_sev_5f,
            $pneumonia_sev_19f,
            $pneumonia_sev_19m,
            $pneumonia_sev_20m,
            $pneumonia_sev_20f,
            $grip_5f,
            $grip_5m,
            $grip_19m,
            $grip_19f,
            $grip_20m,
            $grip_20f,
            $ari_5f,
            $ari_5m,
            $ari_19m,
            $ari_19f,
            $ari_20m,
            $ari_20f,
            $gast_duoden_5f,
            $gast_duoden_5m,
            $gast_duoden_19m,
            $gast_duoden_19f,
            $gast_duoden_20m,
            $gast_duoden_20f,
            $absces_5m,
            $absces_5f,
            $absces_19m,
            $absces_19f,
            $absces_20m,
            $absces_20f,
            $ulcers_5m,
            $ulcers_5f,
            $ulcers_19f,
            $ulcers_19m,
            $ulcers_20m,
            $ulcers_20f,
            $scabies_5f,
            $scabies_5m,
            $scabies_19m,
            $scabies_19f,
            $scabies_20m,
            $scabies_20f,
            $mycoses_5f,
            $mycoses_5m,
            $mycoses_19m,
            $mycoses_19f,
            $mycoses_20m,
            $mycoses_20f,
            $si_others_5f,
            $si_others_5m,
            $si_others_19m,
            $si_others_19f,
            $si_others_20m,
            $si_others_20f,
            $urinary_ti_5f,
            $urinary_ti_5m,
            $urinary_ti_19m,
            $urinary_ti_19f,
            $urinary_ti_20m,
            $urinary_ti_20f,
            $anemia_5f,
            $anemia_5m,
            $anemia_19m,
            $anemia_19f,
            $anemia_20m,
            $anemia_20f,
            $measles_susp_5f,
            $measles_susp_5m,
            $measles_susp_19m,
            $measles_susp_19f,
            $measles_susp_20m,
            $measles_susp_20f,
            $measles_conf_5f,
            $measles_conf_5m,
            $measles_conf_19m,
            $measles_conf_19f,
            $measles_conf_20m,
            $measles_conf_20f,
            $rubella_conf_5f,
            $rubella_conf_5m,
            $rubella_conf_19m,
            $rubella_conf_19f,
            $rubella_conf_20m,
            $rubella_conf_20f,
            $flaccid_paraly_5f,
            $flaccid_paraly_5m,
            $flaccid_paraly_19m,
            $flaccid_paraly_19f,
            $flaccid_paraly_20m,
            $flaccid_paraly_20f,
            $tetanus_5f,
            $tetanus_5m,
            $tetanus_19m,
            $tetanus_19f,
            $tetanus_20m,
            $tetanus_20f,
            $hepatitis_5f,
            $hepatitis_5m,
            $hepatitis_19m,
            $hepatitis_19f,
            $hepatitis_20m,
            $hepatitis_20f
          );

          $this->opd_model->update_data2(
            $fractures_5m,
            $fractures_5f,
            $fractures_19m,
            $fractures_19f,
            $fractures_20m,
            $fractures_20f,

            $phys_traumas_5m,
            $phys_traumas_5f,
            $phys_traumas_19m,
            $phys_traumas_19f,
            $phys_traumas_20m,
            $phys_traumas_20f,

            $bone_joint_disord_5m,
            $bone_joint_disord_5f,
            $bone_joint_disord_19m,
            $bone_joint_disord_19f,
            $bone_joint_disord_20m,
            $bone_joint_disord_20f,

            $gyneco_pb_19f,
            $gyneco_pb_20f,

            $aids_5m,
            $aids_5f,
            $aids_19m,
            $aids_19f,
            $aids_20m,
            $aids_20f,

            $si_opport_5m,
            $si_opport_5f,
            $si_opport_19m,
            $si_opport_19f,
            $si_opport_20m,
            $si_opport_20f,

            $herpes_z_5m,
            $herpes_z_5f,
            $herpes_z_19m,
            $herpes_z_19f,
            $herpes_z_20m,
            $herpes_z_20f,

            $cand_oral_5m,
            $cand_oral_5f,
            $cand_oral_19m,
            $cand_oral_19f,
            $cand_oral_20m,
            $cand_oral_20f,

            $fever_5m,
            $fever_5f,
            $fever_19m,
            $fever_19f,
            $fever_20m,
            $fever_20f,

            $diar_chro_opp_infect_5m,
            $diar_chro_opp_infect_5f,
            $diar_chro_opp_infect_19m,
            $diar_chro_opp_infect_19f,
            $diar_chro_opp_infect_20m,
            $diar_chro_opp_infect_20f,

            $needle_5m,
            $needle_5f,
            $needle_19m,
            $needle_19f,
            $needle_20m,
            $needle_20f,

            $goitre_5m,
            $goitre_5f,
            $goitre_19m,
            $goitre_19f,
            $goitre_20m,
            $goitre_20f,

            $va_def_5m,
            $va_def_5f,
            $va_def_19m,
            $va_def_19f,
            $va_def_20m,
            $va_def_20f,

            $leprosy_5m,
            $leprosy_5f,
            $leprosy_19m,
            $leprosy_19f,
            $leprosy_20m,
            $leprosy_20f,

            $glaucoma_19m,
            $glaucoma_19f,
            $glaucoma_39m,
            $glaucoma_39f,
            $glaucoma_40m,
            $glaucoma_40f,

            $cataract_19m,
            $cataract_19f,
            $cataract_39m,
            $cataract_39f,
            $cataract_40m,
            $cataract_40f,

            $refrac_error_19m,
            $refrac_error_19f,
            $refrac_error_39m,
            $refrac_error_39f,
            $refrac_error_40m,
            $refrac_error_40f,

            $diab_retino_19m,
            $diab_retino_19f,
            $diab_retino_39m,
            $diab_retino_39f,
            $diab_retino_40m,
            $diab_retino_40f,

            $conjunctivitis_19m,
            $conjunctivitis_19f,
            $conjunctivitis_39m,
            $conjunctivitis_39f,
            $conjunctivitis_40m,
            $conjunctivitis_40f,

            $pinguecula_19m,
            $pinguecula_19f,
            $pinguecula_39m,
            $pinguecula_39f,
            $pinguecula_40m,
            $pinguecula_40f,

            $uveitis_19m,
            $uveitis_19f,
            $uveitis_39m,
            $uveitis_39f,
            $uveitis_40m,
            $uveitis_40f,

            $eye_trauma_19m,
            $eye_trauma_19f,
            $eye_trauma_39m,
            $eye_trauma_39f,
            $eye_trauma_40m,
            $eye_trauma_40f,

            $eye_pb_19m,
            $eye_pb_19f,
            $eye_pb_39m,
            $eye_pb_39f,
            $eye_pb_40m,
            $eye_pb_40f,

            $dent_caries_19m,
            $dent_caries_19f,
            $dent_caries_39m,
            $dent_caries_39f,
            $dent_caries_40m,
            $dent_caries_40f,

            $perio_diseas_19m,
            $perio_diseas_19f,
            $perio_diseas_39m,
            $perio_diseas_39f,
            $perio_diseas_40m,
            $perio_diseas_40f,

            $other_teeth_19m,
            $other_teeth_19f,
            $other_teeth_39m,
            $other_teeth_39f,
            $other_teeth_40m,
            $other_teeth_40f
          );

          $this->opd_model->update_data3(
            $anxiety_nc19m,
            $anxiety_nc19f,
            $anxiety_nc39m,
            $anxiety_nc39f,
            $anxiety_nc40m,
            $anxiety_nc40f,

            $stress_nc19m,
            $stress_nc19f,
            $stress_nc39m,
            $stress_nc39f,
            $stress_nc40m,
            $stress_nc40f,

            $schizo_nc19m,
            $schizo_nc19f,
            $schizo_nc39m,
            $schizo_nc39f,
            $schizo_nc40m,
            $schizo_nc40f,

            $soma_nc19m,
            $soma_nc19f,
            $soma_nc39m,
            $soma_nc39f,
            $soma_nc40m,
            $soma_nc40f,

            $child_nc19m,
            $child_nc19f,
            $child_nc39m,
            $child_nc39f,
            $child_nc40m,
            $child_nc40f,

            $alcohol_nc19m,
            $alcohol_nc19f,
            $alcohol_nc39m,
            $alcohol_nc39f,
            $alcohol_nc40m,
            $alcohol_nc40f,

            $drugs_nc19m,
            $drugs_nc19f,
            $drugs_nc39m,
            $drugs_nc39f,
            $drugs_nc40m,
            $drugs_nc40f,

            $dep_nc19m,
            $dep_nc19f,
            $dep_nc39m,
            $dep_nc39f,
            $dep_nc40m,
            $dep_nc40f,

            $suicid_att_nc19m,
            $suicid_att_nc19f,
            $suicid_att_nc39m,
            $suicid_att_nc39f,
            $suicid_att_nc40m,
            $suicid_att_nc40f,

            $suicid_d_nc19m,
            $suicid_d_nc19f,
            $suicid_d_nc39m,
            $suicid_d_nc39f,
            $suicid_d_nc40m,
            $suicid_d_nc40f,

            $maniac_nc19m,
            $maniac_nc19f,
            $maniac_nc39m,
            $maniac_nc39f,
            $maniac_nc40m,
            $maniac_nc40f,

            $bipolar_nc19m,
            $bipolar_nc19f,
            $bipolar_nc39m,
            $bipolar_nc39f,
            $bipolar_nc40m,
            $bipolar_nc40f,

            $other_psy_nc19m,
            $other_psy_nc19f,
            $other_psy_nc39m,
            $other_psy_nc39f,
            $other_psy_nc40m,
            $other_psy_nc40f,

            $epilepsy_nc19m,
            $epilepsy_nc19f,
            $epilepsy_nc39m,
            $epilepsy_nc39f,
            $epilepsy_nc40m,
            $epilepsy_nc40f,

            $other_neuro_nc19m,
            $other_neuro_nc19f,
            $other_neuro_nc39m,
            $other_neuro_nc39f,
            $other_neuro_nc40m,
            $other_neuro_nc40f
          );

          $this->opd_model->update_data4(
            $hyper_nc19m,
            $hyper_nc19f,
            $hyper_nc39m,
            $hyper_nc39f,
            $hyper_nc40m,
            $hyper_nc40f,

            $asth_int_nc19m,
            $asth_int_nc19f,
            $asth_int_nc39m,
            $asth_int_nc39f,
            $asth_int_nc40m,
            $asth_int_nc40f,

            $asth_mild_nc19m,
            $asth_mild_nc19f,
            $asth_mild_nc39m,
            $asth_mild_nc39f,
            $asth_mild_nc40m,
            $asth_mild_nc40f,

            $asth_mod_nc19m,
            $asth_mod_nc19f,
            $asth_mod_nc39m,
            $asth_mod_nc39f,
            $asth_mod_nc40m,
            $asth_mod_nc40f,

            $asth_sev_nc19m,
            $asth_sev_nc19f,
            $asth_sev_nc39m,
            $asth_sev_nc39f,
            $asth_sev_nc40m,
            $asth_sev_nc40f,

            $bronch_nc19m,
            $bronch_nc19f,
            $bronch_nc39m,
            $bronch_nc39f,
            $bronch_nc40m,
            $bronch_nc40f,

            $other_pulm_nc19m,
            $other_pulm_nc19f,
            $other_pulm_nc39m,
            $other_pulm_nc39f,
            $other_pulm_nc40m,
            $other_pulm_nc40f,

            $diab1_nc19m,
            $diab1_nc19f,
            $diab1_nc39m,
            $diab1_nc39f,
            $diab1_nc40m,
            $diab1_nc40f,

            $diab2_nc19m,
            $diab2_nc19f,
            $diab2_nc39m,
            $diab2_nc39f,
            $diab2_nc40m,
            $diab2_nc40f,

            $diab_gest_nc19m,
            $diab_gest_nc19f,
            $diab_gest_nc39m,
            $diab_gest_nc39f,
            $diab_gest_nc40m,
            $diab_gest_nc40f,

            $breast_nc19f,
            $breast_nc39f,
            $breast_nc40f,

            $cervical_nc19m,
            $cervical_nc19f,
            $cervical_nc39m,
            $cervical_nc39f,
            $cervical_nc40m,
            $cervical_nc40f,

            $lympho_nc19m,
            $lympho_nc19f,
            $lympho_nc39m,
            $lympho_nc39f,
            $lympho_nc40m,
            $lympho_nc40f,

            $leuca_nc19m,
            $leuca_nc19f,
            $leuca_nc39m,
            $leuca_nc39f,
            $leuca_nc40m,
            $leuca_nc40f,

            $colon_nc19m,
            $colon_nc19f,
            $colon_nc39m,
            $colon_nc39f,
            $colon_nc40m,
            $colon_nc40f,

            $kaposi_nc19m,
            $kaposi_nc19f,
            $kaposi_nc39m,
            $kaposi_nc39f,
            $kaposi_nc40m,
            $kaposi_nc40f,

            $retino_nc19m,
            $retino_nc19f,
            $retino_nc39m,
            $retino_nc39f,
            $retino_nc40m,
            $retino_nc40f,

            $nephro_nc19m,
            $nephro_nc19f,
            $nephro_nc39m,
            $nephro_nc39f,
            $nephro_nc40m,
            $nephro_nc40f,

            $ovarian_nc19f,
            $ovarian_nc39f,
            $ovarian_nc40f,

            $prostate_nc19m,
            $prostate_nc39m,
            $prostate_nc40m,

            $cancer_others_nc19m,
            $cancer_others_nc19f,
            $cancer_others_nc39m,
            $cancer_others_nc39f,
            $cancer_others_nc40m,
            $cancer_others_nc40f
          );

          $this->opd_model->update_data5(
            $cardio_nc19m,
            $cardio_nc19f,
            $cardio_nc39m,
            $cardio_nc39f,
            $cardio_nc40m,
            $cardio_nc40f,

            $stroke_nc19m,
            $stroke_nc19f,
            $stroke_nc39m,
            $stroke_nc39f,
            $stroke_nc40m,
            $stroke_nc40f,

            $rheumatic_nc19m,
            $rheumatic_nc19f,
            $rheumatic_nc39m,
            $rheumatic_nc39f,
            $rheumatic_nc40m,
            $rheumatic_nc40f,

            $cong_nc19m,
            $cong_nc19f,
            $cong_nc39m,
            $cong_nc39f,
            $cong_nc40m,
            $cong_nc40f,

            $coronary_nc19m,
            $coronary_nc19f,
            $coronary_nc39m,
            $coronary_nc39f,
            $coronary_nc40m,
            $coronary_nc40f,

            $peri_nc19m,
            $peri_nc19f,
            $peri_nc39m,
            $peri_nc39f,
            $peri_nc40m,
            $peri_nc40f,

            $heart_nc19m,
            $heart_nc19f,
            $heart_nc39m,
            $heart_nc39f,
            $heart_nc40m,
            $heart_nc40f,

            $other_cardio_nc19m,
            $other_cardio_nc19f,
            $other_cardio_nc39m,
            $other_cardio_nc39f,
            $other_cardio_nc40m,
            $other_cardio_nc40f,

            $post_heart_nc19m,
            $post_heart_nc19f,
            $post_heart_nc39m,
            $post_heart_nc39f,
            $post_heart_nc40m,
            $post_heart_nc40f,

            $renal_nc19m,
            $renal_nc19f,
            $renal_nc39m,
            $renal_nc39f,
            $renal_nc40m,
            $renal_nc40f,

            $other_chronic_nc19m,
            $other_chronic_nc19f,
            $other_chronic_nc39m,
            $other_chronic_nc39f,
            $other_chronic_nc40m,
            $other_chronic_nc40f,

            $thyroid_nc19m,
            $thyroid_nc19f,
            $thyroid_nc39m,
            $thyroid_nc39f,
            $thyroid_nc40m,
            $thyroid_nc40f,

            $other_endo_nc19m,
            $other_endo_nc19f,
            $other_endo_nc39m,
            $other_endo_nc39f,
            $other_endo_nc40m,
            $other_endo_nc40f
          );

          $this->opd_model->update_data6(
            $road_nc19m,
            $road_nc19f,
            $road_nc39m,
            $road_nc39f,
            $road_nc40m,
            $road_nc40f,
            $road_d19m,
            $road_d19f,
            $road_d39m,
            $road_d39f,
            $road_d40m,
            $road_d40f,

            $self_harm_nc19m,
            $self_harm_nc19f,
            $self_harm_nc39m,
            $self_harm_nc39f,
            $self_harm_nc40m,
            $self_harm_nc40f,
            $self_harm_d19m,
            $self_harm_d19f,
            $self_harm_d39m,
            $self_harm_d39f,
            $self_harm_d40m,
            $self_harm_d40f,

            $inter_violence_nc19m,
            $inter_violence_nc19f,
            $inter_violence_nc39m,
            $inter_violence_nc39f,
            $inter_violence_nc40m,
            $inter_violence_nc40f,
            $inter_violence_d19m,
            $inter_violence_d19f,
            $inter_violence_d39m,
            $inter_violence_d39f,
            $inter_violence_d40m,
            $inter_violence_d40f,

            $other_injury_nc19m,
            $other_injury_nc19f,
            $other_injury_nc39m,
            $other_injury_nc39f,
            $other_injury_nc40m,
            $other_injury_nc40f,
            $other_injury_d19m,
            $other_injury_d19f,
            $other_injury_d39m,
            $other_injury_d39f,
            $other_injury_d40m,
            $other_injury_d40f,

            $falls_nc19m,
            $falls_nc19f,
            $falls_nc39m,
            $falls_nc39f,
            $falls_nc40m,
            $falls_nc40f,
            $falls_d19m,
            $falls_d19f,
            $falls_d39m,
            $falls_d39f,
            $falls_d40m,
            $falls_d40f,

            $drowning_nc19m,
            $drowning_nc19f,
            $drowning_nc39m,
            $drowning_nc39f,
            $drowning_nc40m,
            $drowning_nc40f,
            $drowning_d19m,
            $drowning_d19f,
            $drowning_d39m,
            $drowning_d39f,
            $drowning_d40m,
            $drowning_d40f,

            $fire_nc19m,
            $fire_nc19f,
            $fire_nc39m,
            $fire_nc39f,
            $fire_nc40m,
            $fire_nc40f,
            $fire_d19m,
            $fire_d19f,
            $fire_d39m,
            $fire_d39f,
            $fire_d40m,
            $fire_d40f,

            $animal_nc19m,
            $animal_nc19f,
            $animal_nc39m,
            $animal_nc39f,
            $animal_nc40m,
            $animal_nc40f,
            $animal_d19m,
            $animal_d19f,
            $animal_d39m,
            $animal_d39f,
            $animal_d40m,
            $animal_d40f,

            $poison_nc19m,
            $poison_nc19f,
            $poison_nc39m,
            $poison_nc39f,
            $poison_nc40m,
            $poison_nc40f,
            $poison_d19m,
            $poison_d19f,
            $poison_d39m,
            $poison_d39f,
            $poison_d40m,
            $poison_d40f,

            $natural_disasters_nc19m,
            $natural_disasters_nc19f,
            $natural_disasters_nc39m,
            $natural_disasters_nc39f,
            $natural_disasters_nc40m,
            $natural_disasters_nc40f,
            $natural_disasters_d19m,
            $natural_disasters_d19f,
            $natural_disasters_d39m,
            $natural_disasters_d39f,
            $natural_disasters_d40m,
            $natural_disasters_d40f,

            $ad_effects_nc19m,
            $ad_effects_nc19f,
            $ad_effects_nc39m,
            $ad_effects_nc39f,
            $ad_effects_nc40m,
            $ad_effects_nc40f,
            $ad_effects_d19m,
            $ad_effects_d19f,
            $ad_effects_d39m,
            $ad_effects_d39f,
            $ad_effects_d40m,
            $ad_effects_d40f,

            $other_unintent_nc19m,
            $other_unintent_nc19f,
            $other_unintent_nc39m,
            $other_unintent_nc39f,
            $other_unintent_nc40m,
            $other_unintent_nc40f,
            $other_unintent_d19m,
            $other_unintent_d19f,
            $other_unintent_d39m,
            $other_unintent_d39f,
            $other_unintent_d40m,
            $other_unintent_d40f
          );

          $this->opd_model->update_data7(
            $oc_19m,
            $oc_19f,
            $oc_20m,
            $oc_20f,

            $nc_19m,
            $nc_19f,
            $nc_20m,
            $nc_20f,

            $time_19m,
            $time_19f,
            $time_20m,
            $time_20f,

            $morphine_19m,
            $morphine_19f,
            $morphine_20m,
            $morphine_20f,

            $end_life_19m,
            $end_life_19f,
            $end_life_20m,
            $end_life_20f,

            $death_19m,
            $death_19f,
            $death_20m,
            $death_20f
          );

          $this->opd_model->update_data8(
            $annual_checkup,
            $cardio,
            $respiratory,
            $diabetes,
            $renal,
            $cancer,
            $disability
          );

          $this->opd_model->update_data9(
            $cervical,
            $cervical_viap,
            $cervical_viap_hivp,
            $cryo_viap,
            $treatement_viap,
            $breast_screened,
            $breast_referred,
            $cervical_otherlevel,
            $biopsies
          );

          $this->session->unset_userdata('update_date');
          redirect('home', 'refresh');
        } else {
            $data['table1'] = $this->opd_model->show_table1();
            $data['table2'] = $this->opd_model->show_table2();
            $data['table3'] = $this->opd_model->show_table3();
            $data['table4'] = $this->opd_model->show_table4();
            $data['table5'] = $this->opd_model->show_table5();
            $data['table6'] = $this->opd_model->show_table6();
            $data['table7'] = $this->opd_model->show_table7();
            $data['table8'] = $this->opd_model->show_table8();
            $data['table9'] = $this->opd_model->show_table9();
            $this->load->view('opd_update_view', $data);
        }
    }
}
