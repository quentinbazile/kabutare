<?php
defined('BASEPATH') or exit('No direct script access allowed');

class II_ADD_C extends CI_Controller
{
    public function index()
    {
        $this->load->model('II_M');
        $this->fetch();
    }

    public function fetch()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nc5m', '"nc5m"', 'required');
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
            
            $this->II_M->fetch_data(
          $nc5m,
            $nc5f,
            $nc9f,
            $nc9m,
          $nc18m,
            $nc18f,
          $oc5m,
            $oc5f,
            $oc9f,
            $oc9m,
          $oc18m,
            $oc18f,
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
            $hepatitis_20f,
          $fractures_5f,
            $fractures_5m,
            $fractures_19m,
            $fractures_19f,
            $fractures_20m,
            $fractures_20f,
          $phys_traumas_5f,
            $phys_traumas_5m,
            $phys_traumas_19m,
            $phys_traumas_19f,
            $phys_traumas_20m,
            $phys_traumas_20f,
          $bone_joint_disord_5f,
            $bone_joint_disord_5m,
            $bone_joint_disord_19m,
            $bone_joint_disord_19f,
            $bone_joint_disord_20m,
            $bone_joint_disord_20f,
          $gyneco_pb_19f,
            $gyneco_pb_20f,
          $aids_5f,
            $aids_5m,
            $aids_19m,
            $aids_19f,
            $aids_20m,
            $aids_20f,
          $si_opport_5f,
            $si_opport_5m,
            $si_opport_19m,
            $si_opport_19f,
            $si_opport_20m,
            $si_opport_20f,
          $herpes_z_5f,
            $herpes_z_5m,
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
            $fever_19f,
            $fever_19m,
            $fever_20m,
            $fever_20f,
          $diar_chro_opp_infect_5f,
            $diar_chro_opp_infect_5m,
            $diar_chro_opp_infect_19m,
            $diar_chro_opp_infect_19f,
            $diar_chro_opp_infect_20m,
            $diar_chro_opp_infect_20f,
          $needle_5f,
            $needle_5m,
            $needle_19m,
            $needle_19f,
            $needle_20m,
            $needle_20f,
          $goitre_5f,
            $goitre_5m,
            $goitre_19m,
            $goitre_19f,
            $goitre_20m,
            $goitre_20f,
          $va_def_5f,
            $va_def_5m,
            $va_def_19m,
            $va_def_19f,
            $va_def_20m,
            $va_def_20f,
          $leprosy_5f,
            $leprosy_5m,
            $leprosy_19m,
            $leprosy_19f,
            $leprosy_20m,
            $leprosy_20f,
          $glaucoma_19f,
            $glaucoma_19m,
            $glaucoma_39m,
            $glaucoma_39f,
            $glaucoma_40m,
            $glaucoma_40f,
          $cataract_19f,
            $cataract_19m,
            $cataract_39m,
            $cataract_39f,
            $cataract_40m,
            $cataract_40f,
          $refrac_error_19f,
            $refrac_error_19m,
            $refrac_error_39m,
            $refrac_error_39f,
            $refrac_error_40m,
            $refrac_error_40f,
          $diab_retino_19f,
            $diab_retino_19m,
            $diab_retino_39m,
            $diab_retino_39f,
            $diab_retino_40m,
            $diab_retino_40f,
          $conjunctivitis_19f,
            $conjunctivitis_19m,
            $conjunctivitis_39m,
            $conjunctivitis_39f,
            $conjunctivitis_40m,
            $conjunctivitis_40f,
          $pinguecula_19f,
            $pinguecula_19m,
            $pinguecula_39m,
            $pinguecula_39f,
            $pinguecula_40m,
            $pinguecula_40f,
          $uveitis_19f,
            $uveitis_19m,
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
            $eye_pb_39f,
            $eye_pb_39m,
            $eye_pb_40m,
            $eye_pb_40f,
          $dent_caries_19m,
            $dent_caries_19f,
            $dent_caries_39f,
            $dent_caries_39m,
            $dent_caries_40m,
            $dent_caries_40f,
          $perio_diseas_19m,
            $perio_diseas_19f,
            $perio_diseas_39f,
            $perio_diseas_39m,
            $perio_diseas_40m,
            $perio_diseas_40f,
          $other_teeth_19m,
            $other_teeth_19f,
            $other_teeth_39f,
            $other_teeth_39m,
            $other_teeth_40m,
            $other_teeth_40f
        );
        } else {
            $this->load->view('II_ADD_V');
        }
    }
}
