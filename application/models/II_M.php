<?php
class II_M extends CI_Model
{
    public function fetch_data(
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
    ) {
        return $this->db->set(array(
      'nc5m' => $nc5m,
      'nc5f' => $nc5f,
      'nc19m' => $nc19m,
      'nc19f' => $nc19f,
      'nc20m' => $nc20m,
      'nc20f' => $nc20f,

      'oc5m' => $oc5m,
      'oc5f' => $oc5f,
      'oc19m' => $oc19m,
      'oc19f' => $oc19f,
      'oc20m' => $oc20m,
      'oc20f' => $oc20f,

      'insured' => $insured,
      'nc_non_paying' => $nc_non_paying,
      'nc_indigent' => $nc_indigent,

      'other_levels' => $other_levels,
      'counter_received' => $counter_received,

      'nc_catch' => $nc_catch,
      'nc' => $nc,
      'international' => $international,

      'diar_w_dehy_5m' => $diar_w_dehy_5m,
      'diar_w_dehy_5f' => $diar_w_dehy_5f,
      'diar_w_dehy_19m' => $diar_w_dehy_19m,
      'diar_w_dehy_19f' => $diar_w_dehy_19f,
      'diar_w_dehy_20m' => $diar_w_dehy_20m,
      'diar_w_dehy_20f' => $diar_w_dehy_20f,

      'diar_no_dehy_5m' => $diar_no_dehy_5m,
      'diar_no_dehy_5f' => $diar_no_dehy_5f,
      'diar_no_dehy_19m' => $diar_no_dehy_19m,
      'diar_no_dehy_19f' => $diar_no_dehy_19f,
      'diar_no_dehy_20m' => $diar_no_dehy_20m,
      'diar_no_dehy_20f' => $diar_no_dehy_20f,

      'blood_diar_5m' => $blood_diar_5m,
      'blood_diar_5f' => $blood_diar_5f,
      'blood_diar_19m' => $blood_diar_19m,
      'blood_diar_19f' => $blood_diar_19f,
      'blood_diar_20m' => $blood_diar_20m,
      'blood_diar_20f' => $blood_diar_20f,

      'food_poison_5m' => $food_poison_5m,
      'food_poison_5f' => $food_poison_5f,
      'food_poison_19m' => $food_poison_19m,
      'food_poison_19f' => $food_poison_19f,
      'food_poison_20m' => $food_poison_20m,
      'food_poison_20f' => $food_poison_20f,

      'ear_infect_5m' => $ear_infect_5m,
      'ear_infect_5f' => $ear_infect_5f,
      'ear_infect_19m' => $ear_infect_19m,
      'ear_infect_19f' => $ear_infect_19f,
      'ear_infect_20m' => $ear_infect_20m,
      'ear_infect_20f' => $ear_infect_20f,

      'schisto_5m' => $schisto_5m,
      'schisto_5f' => $schisto_5f,
      'schisto_19m' => $schisto_19m,
      'schisto_19f' => $schisto_19f,
      'schisto_20m' => $schisto_20m,
      'schisto_20f' => $schisto_20f,

      'ascaris_5m' => $ascaris_5m,
      'ascaris_5f' => $ascaris_5f,
      'ascaris_19m' => $ascaris_19m,
      'ascaris_19f' => $ascaris_19f,
      'ascaris_20m' => $ascaris_20m,
      'ascaris_20f' => $ascaris_20f,

      'trichu_5m' => $trichu_5m,
      'trichu_5f' => $trichu_5f,
      'trichu_19m' => $trichu_19m,
      'trichu_19f' => $trichu_19f,
      'trichu_20m' => $trichu_20m,
      'trichu_20f' => $trichu_20f,

      'hook_5m' => $hook_5m,
      'hook_5f' => $hook_5f,
      'hook_19m' => $hook_19m,
      'hook_19f' => $hook_19f,
      'hook_20m' => $hook_20m,
      'hook_20f' => $hook_20f,

      'entam_5m' => $entam_5m,
      'entam_5f' => $entam_5f,
      'entam_19m' => $entam_19m,
      'entam_19f' => $entam_19f,
      'entam_20m' => $entam_20m,
      'entam_20f' => $entam_20f,

      'giardia_5m' => $giardia_5m,
      'giardia_5f' => $giardia_5f,
      'giardia_19m' => $giardia_19m,
      'giardia_19f' => $giardia_19f,
      'giardia_20m' => $giardia_20m,
      'giardia_20f' => $giardia_20f,

      'taenia_5m' => $taenia_5m,
      'taenia_5f' => $taenia_5f,
      'taenia_19m' => $taenia_19m,
      'taenia_19f' => $taenia_19f,
      'taenia_20m' => $taenia_20m,
      'taenia_20f' => $taenia_20f,

      'malaria_s_5m' => $malaria_s_5m,
      'malaria_s_5f' => $malaria_s_5f,
      'malaria_s_19m' => $malaria_s_19m,
      'malaria_s_19f' => $malaria_s_19f,
      'malaria_s_20m' => $malaria_s_20m,
      'malaria_s_20f' => $malaria_s_20f,

      'malaria_dig_5m' => $malaria_dig_5m,
      'malaria_dig_5f' => $malaria_dig_5f,
      'malaria_dig_19m' => $malaria_dig_19m,
      'malaria_dig_19f' => $malaria_dig_19f,
      'malaria_dig_20m' => $malaria_dig_20m,
      'malaria_dig_20f' => $malaria_dig_20f,

      'herpes_s_5m' => $herpes_s_5m,
      'herpes_s_5f' => $herpes_s_5f,
      'herpes_s_19m' => $herpes_s_19m,
      'herpes_s_19f' => $herpes_s_19f,
      'herpes_s_20m' => $herpes_s_20m,
      'herpes_s_20f' => $herpes_s_20f,

      'mening_5m' => $mening_5m,
      'mening_5f' => $mening_5f,
      'mening_19m' => $mening_19m,
      'mening_19f' => $mening_19f,
      'mening_20m' => $mening_20m,
      'mening_20f' => $mening_20f,

      'pneumonia_simp_5m' => $pneumonia_simp_5m,
      'pneumonia_simp_5f' => $pneumonia_simp_5f,
      'pneumonia_simp_19m' => $pneumonia_simp_19m,
      'pneumonia_simp_19f' => $pneumonia_simp_19f,
      'pneumonia_simp_20m' => $pneumonia_simp_20m,
      'pneumonia_simp_20f' => $pneumonia_simp_20f,

      'pneumonia_sev_5m' => $pneumonia_sev_5m,
      'pneumonia_sev_5f' => $pneumonia_sev_5f,
      'pneumonia_sev_19m' => $pneumonia_sev_19m,
      'pneumonia_sev_19f' => $pneumonia_sev_19f,
      'pneumonia_sev_20m' => $pneumonia_sev_20m,
      'pneumonia_sev_20f' => $pneumonia_sev_20f,

      'grip_5m' => $grip_5m,
      'grip_5f' => $grip_5f,
      'grip_19m' => $grip_19m,
      'grip_19f' => $grip_19f,
      'grip_20m' => $grip_20m,
      'grip_20f' => $grip_20f,

      'ari_5m' => $ari_5m,
      'ari_5f' => $ari_5f,
      'ari_19m' => $ari_19m,
      'ari_19f' => $ari_19f,
      'ari_20m' => $ari_20m,
      'ari_20f' => $ari_20f,

      'gast_duoden_5m' => $gast_duoden_5m,
      'gast_duoden_5f' => $gast_duoden_5f,
      'gast_duoden_19m' => $gast_duoden_19m,
      'gast_duoden_19f' => $gast_duoden_19f,
      'gast_duoden_20m' => $gast_duoden_20m,
      'gast_duoden_20f' => $gast_duoden_20f,

      'absces_5m' => $absces_5m,
      'absces_5f' => $absces_5f,
      'absces_19m' => $absces_19m,
      'absces_19f' => $absces_19f,
      'absces_20m' => $absces_20m,
      'absces_20f' => $absces_20f,

      'ulcers_5m' => $ulcers_5m,
      'ulcers_5f' => $ulcers_5f,
      'ulcers_19m' => $ulcers_19m,
      'ulcers_19f' => $ulcers_19f,
      'ulcers_20m' => $ulcers_20m,
      'ulcers_20f' => $ulcers_20f,

      'scabies_5m' => $scabies_5m,
      'scabies_5f' => $scabies_5f,
      'scabies_19m' => $scabies_19m,
      'scabies_19f' => $scabies_19f,
      'scabies_20m' => $scabies_20m,
      'scabies_20f' => $scabies_20f,

      'mycoses_5m' => $mycoses_5m,
      'mycoses_5f' => $mycoses_5f,
      'mycoses_19m' => $mycoses_19m,
      'mycoses_19f' => $mycoses_19f,
      'mycoses_20m' => $mycoses_20m,
      'mycoses_20f' => $mycoses_20f,

      'si_others_5m' => $si_others_5m,
      'si_others_5f' => $si_others_5f,
      'si_others_19m' => $si_others_19m,
      'si_others_19f' => $si_others_19f,
      'si_others_20m' => $si_others_20m,
      'si_others_20f' => $si_others_20f,

      'urinary_ti_5m' => $urinary_ti_5m,
      'urinary_ti_5f' => $urinary_ti_5f,
      'urinary_ti_19m' => $urinary_ti_19m,
      'urinary_ti_19f' => $urinary_ti_19f,
      'urinary_ti_20m' => $urinary_ti_20m,
      'urinary_ti_20f' => $urinary_ti_20f,

      'anemia_5m' => $anemia_5m,
      'anemia_5f' => $anemia_5f,
      'anemia_19m' => $anemia_19m,
      'anemia_19f' => $anemia_19f,
      'anemia_20m' => $anemia_20m,
      'anemia_20f' => $anemia_20f,

      'measles_susp_5m' => $measles_susp_5m,
      'measles_susp_5f' => $measles_susp_5f,
      'measles_susp_19m' => $measles_susp_19m,
      'measles_susp_19f' => $measles_susp_19f,
      'measles_susp_20m' => $measles_susp_20m,
      'measles_susp_20f' => $measles_susp_20f,

      'measles_conf_5m' => $measles_conf_5m,
      'measles_conf_5f' => $measles_conf_5f,
      'measles_conf_19m' => $measles_conf_19m,
      'measles_conf_19f' => $measles_conf_19f,
      'measles_conf_20m' => $measles_conf_20m,
      'measles_conf_20f' => $measles_conf_20f,

      'rubella_conf_5m' => $rubella_conf_5m,
      'rubella_conf_5f' => $rubella_conf_5f,
      'rubella_conf_19m' => $rubella_conf_19m,
      'rubella_conf_19f' => $rubella_conf_19f,
      'rubella_conf_20m' => $rubella_conf_20m,
      'rubella_conf_20f' => $rubella_conf_20f,

      'flaccid_paraly_5m' => $flaccid_paraly_5m,
      'flaccid_paraly_5f' => $flaccid_paraly_5f,
      'flaccid_paraly_19m' => $flaccid_paraly_19m,
      'flaccid_paraly_19f' => $flaccid_paraly_19f,
      'flaccid_paraly_20m' => $flaccid_paraly_20m,
      'flaccid_paraly_20f' => $flaccid_paraly_20f,

      'tetanus_5m' => $tetanus_5m,
      'tetanus_5f' => $tetanus_5f,
      'tetanus_19m' => $tetanus_19m,
      'tetanus_19f' => $tetanus_19f,
      'tetanus_20m' => $tetanus_20m,
      'tetanus_20f' => $tetanus_20f,

      'hepatitis_5m' => $hepatitis_5m,
      'hepatitis_5f' => $hepatitis_5f,
      'hepatitis_19m' => $hepatitis_19m,
      'hepatitis_19f' => $hepatitis_19f,
      'hepatitis_20m' => $hepatitis_20m,
      'hepatitis_20f' => $hepatitis_20f,

      'fractures_5m' => $fractures_5m,
      'fractures_5f' => $fractures_5f,
      'fractures_19m' => $fractures_19m,
      'fractures_19f' => $fractures_19f,
      'fractures_20m' => $fractures_20m,
      'fractures_20f' => $fractures_20f,

      'phys_traumas_5m' => $phys_traumas_5m,
      'phys_traumas_5f' => $phys_traumas_5f,
      'phys_traumas_19m' => $phys_traumas_19m,
      'phys_traumas_19f' => $phys_traumas_19f,
      'phys_traumas_20m' => $phys_traumas_20m,
      'phys_traumas_20f' => $phys_traumas_20f,

      'bone_joint_disord_5m' => $bone_joint_disord_5m,
      'bone_joint_disord_5f' => $bone_joint_disord_5f,
      'bone_joint_disord_19m' => $bone_joint_disord_19m,
      'bone_joint_disord_19f' => $bone_joint_disord_19f,
      'bone_joint_disord_20m' => $bone_joint_disord_20m,
      'bone_joint_disord_20f' => $bone_joint_disord_20f,

      'gyneco_pb_19f' => $gyneco_pb_19f,
      'gyneco_pb_20f' => $gyneco_pb_20f,

      'aids_5m' => $aids_5m,
      'aids_5f' => $aids_5f,
      'aids_19m' => $aids_19m,
      'aids_19f' => $aids_19f,
      'aids_20m' => $aids_20m,
      'aids_20f' => $aids_20f,

      'si_opport_5m' => $si_opport_5m,
      'si_opport_5f' => $si_opport_5f,
      'si_opport_19m' => $si_opport_19m,
      'si_opport_19f' => $si_opport_19f,
      'si_opport_20m' => $si_opport_20m,
      'si_opport_20f' => $si_opport_20f,

      'herpes_z_5m' => $herpes_z_5m,
      'herpes_z_5f' => $herpes_z_5f,
      'herpes_z_19m' => $herpes_z_19m,
      'herpes_z_19f' => $herpes_z_19f,
      'herpes_z_20m' => $herpes_z_20m,
      'herpes_z_20f' => $herpes_z_20f,

      'cand_oral_5m' => $cand_oral_5m,
      'cand_oral_5f' => $cand_oral_5f,
      'cand_oral_19m' => $cand_oral_19m,
      'cand_oral_19f' => $cand_oral_19f,
      'cand_oral_20m' => $cand_oral_20m,
      'cand_oral_20f' => $cand_oral_20f,

      'fever_5m' => $fever_5m,
      'fever_5f' => $fever_5f,
      'fever_19m' => $fever_19m,
      'fever_19f' => $fever_19f,
      'fever_20m' => $fever_20m,
      'fever_20f' => $fever_20f,

      'diar_chro_opp_infect_5m' => $diar_chro_opp_infect_5m,
      'diar_chro_opp_infect_5f' => $diar_chro_opp_infect_5f,
      'diar_chro_opp_infect_19m' => $diar_chro_opp_infect_19m,
      'diar_chro_opp_infect_19f' => $diar_chro_opp_infect_19f,
      'diar_chro_opp_infect_20m' => $diar_chro_opp_infect_20m,
      'diar_chro_opp_infect_20f' => $diar_chro_opp_infect_20f,

      'needle_5m' => $needle_5m,
      'needle_5f' => $needle_5f,
      'needle_19m' => $needle_19m,
      'needle_19f' => $needle_19f,
      'needle_20m' => $needle_20m,
      'needle_20f' => $needle_20f,

      'goitre_5m' => $goitre_5m,
      'goitre_5f' => $goitre_5f,
      'goitre_19m' => $goitre_19m,
      'goitre_19f' => $goitre_19f,
      'goitre_20m' => $goitre_20m,
      'goitre_20f' => $goitre_20f,

      'va_def_5m' => $va_def_5m,
      'va_def_5f' => $va_def_5f,
      'va_def_19m' => $va_def_19m,
      'va_def_19f' => $va_def_19f,
      'va_def_20m' => $va_def_20m,
      'va_def_20f' => $va_def_20f,

      'leprosy_5m' => $leprosy_5m,
      'leprosy_5f' => $leprosy_5f,
      'leprosy_19m' => $leprosy_19m,
      'leprosy_19f' => $leprosy_19f,
      'leprosy_20m' => $leprosy_20m,
      'leprosy_20f' => $leprosy_20f,

      'glaucoma_19m' => $glaucoma_19m,
      'glaucoma_19f' => $glaucoma_19f,
      'glaucoma_39m' => $glaucoma_39m,
      'glaucoma_39f' => $glaucoma_39f,
      'glaucoma_40m' => $glaucoma_40m,
      'glaucoma_40f' => $glaucoma_40f,

      'cataract_19m' => $cataract_19m,
      'cataract_19f' => $cataract_19f,
      'cataract_39m' => $cataract_39m,
      'cataract_39f' => $cataract_39f,
      'cataract_40m' => $cataract_40m,
      'cataract_40f' => $cataract_40f,

      'refrac_error_19m' => $refrac_error_19m,
      'refrac_error_19f' => $refrac_error_19f,
      'refrac_error_39m' => $refrac_error_39m,
      'refrac_error_39f' => $refrac_error_39f,
      'refrac_error_40m' => $refrac_error_40m,
      'refrac_error_40f' => $refrac_error_40f,

      'diab_retino_19m' => $diab_retino_19m,
      'diab_retino_19f' => $diab_retino_19f,
      'diab_retino_39m' => $diab_retino_39m,
      'diab_retino_39f' => $diab_retino_39f,
      'diab_retino_40m' => $diab_retino_40m,
      'diab_retino_40f' => $diab_retino_40f,

      'conjunctivitis_19m' => $conjunctivitis_19m,
      'conjunctivitis_19f' => $conjunctivitis_19f,
      'conjunctivitis_39m' => $conjunctivitis_39m,
      'conjunctivitis_39f' => $conjunctivitis_39f,
      'conjunctivitis_40m' => $conjunctivitis_40m,
      'conjunctivitis_40f' => $conjunctivitis_40f,

      'pinguecula_19m' => $pinguecula_19m,
      'pinguecula_19f' => $pinguecula_19f,
      'pinguecula_39m' => $pinguecula_39m,
      'pinguecula_39f' => $pinguecula_39f,
      'pinguecula_40m' => $pinguecula_40m,
      'pinguecula_40f' => $pinguecula_40f,

      'uveitis_19m' => $uveitis_19m,
      'uveitis_19f' => $uveitis_19f,
      'uveitis_39m' => $uveitis_39m,
      'uveitis_39f' => $uveitis_39f,
      'uveitis_40m' => $uveitis_40m,
      'uveitis_40f' => $uveitis_40f,

      'eye_trauma_19m' => $eye_trauma_19m,
      'eye_trauma_19f' => $eye_trauma_19f,
      'eye_trauma_39m' => $eye_trauma_39m,
      'eye_trauma_39f' => $eye_trauma_39f,
      'eye_trauma_40m' => $eye_trauma_40m,
      'eye_trauma_40f' => $eye_trauma_40f,

      'eye_pb_19m' => $eye_pb_19m,
      'eye_pb_19f' => $eye_pb_19f,
      'eye_pb_39m' => $eye_pb_39m,
      'eye_pb_39f' => $eye_pb_39f,
      'eye_pb_40m' => $eye_pb_40m,
      'eye_pb_40f' => $eye_pb_40f,

      'dent_caries_19m' => $dent_caries_19m,
      'dent_caries_19f' => $dent_caries_19f,
      'dent_caries_39m' => $dent_caries_39m,
      'dent_caries_39f' => $dent_caries_39f,
      'dent_caries_40m' => $dent_caries_40m,
      'dent_caries_40f' => $dent_caries_40f,

      'perio_diseas_19m' => $perio_diseas_19m,
      'perio_diseas_19f' => $perio_diseas_19f,
      'perio_diseas_39m' => $perio_diseas_39m,
      'perio_diseas_39f' => $perio_diseas_39f,
      'perio_diseas_40m' => $perio_diseas_40m,
      'perio_diseas_40f' => $perio_diseas_40f,

      'other_teeth_19m' => $other_teeth_19m,
      'other_teeth_19f' => $other_teeth_19f,
      'other_teeth_39m' => $other_teeth_39m,
      'other_teeth_39f' => $other_teeth_39f,
      'other_teeth_40m' => $other_teeth_40m,
      'other_teeth_40f' => $other_teeth_40f
    ))
            ->set('date_consultation', 'NOW()', false)
            ->insert('Consultation');
    }

    public function show_table()
    {
        return $this->db->where('date_consultation', date('Y-m-d'))
                        ->get('Consultation')
                        ->row();
    }

    public function update_data(
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
    ) {
        $this->db->set('sexual_violence_5m', $sexual_violence_5m);
        $this->db->set('nc5m', $nc5m);
        $this->db->set('nc5f', $nc5f);
        $this->db->set('nc19m', $nc19m);
        $this->db->set('nc19f', $nc19f);
        $this->db->set('nc20m', $nc20m);
        $this->db->set('nc20f', $nc20f);

        $this->db->set('oc5m', $oc5m);
        $this->db->set('oc5f', $oc5f);
        $this->db->set('oc19m', $oc19m);
        $this->db->set('oc19f', $oc19f);
        $this->db->set('oc20m', $oc20m);
        $this->db->set('oc20f', $oc20f);

        $this->db->set('insured', $insured);
        $this->db->set('nc_non_paying', $nc_non_paying);
        $this->db->set('nc_indigent', $nc_indigent);

        $this->db->set('other_levels', $other_levels);
        $this->db->set('counter_received', $counter_received);

        $this->db->set('nc_catch', $nc_catch);
        $this->db->set('nc', $nc);
        $this->db->set('international', $international);

        $this->db->set('diar_w_dehy_5m', $diar_w_dehy_5m);
        $this->db->set('diar_w_dehy_5f', $diar_w_dehy_5f);
        $this->db->set('diar_w_dehy_19m', $diar_w_dehy_19m);
        $this->db->set('diar_w_dehy_19f', $diar_w_dehy_19f);
        $this->db->set('diar_w_dehy_20m', $diar_w_dehy_20m);
        $this->db->set('diar_w_dehy_20f', $diar_w_dehy_20f);

        $this->db->set('diar_no_dehy_5m', $diar_no_dehy_5m);
        $this->db->set('diar_no_dehy_5f', $diar_no_dehy_5f);
        $this->db->set('diar_no_dehy_19m', $diar_no_dehy_19m);
        $this->db->set('diar_no_dehy_19f', $diar_no_dehy_19f);
        $this->db->set('diar_no_dehy_20m', $diar_no_dehy_20m);
        $this->db->set('diar_no_dehy_20f', $diar_no_dehy_20f);

        $this->db->set('blood_diar_5m', $blood_diar_5m);
        $this->db->set('blood_diar_5f', $blood_diar_5f);
        $this->db->set('blood_diar_19m', $blood_diar_19m);
        $this->db->set('blood_diar_19f', $blood_diar_19f);
        $this->db->set('blood_diar_20m', $blood_diar_20m);
        $this->db->set('blood_diar_20f', $blood_diar_20f);

        $this->db->set('food_poison_5m', $food_poison_5m);
        $this->db->set('food_poison_5f', $food_poison_5f);
        $this->db->set('food_poison_19m', $food_poison_19m);
        $this->db->set('food_poison_19f', $food_poison_19f);
        $this->db->set('food_poison_20m', $food_poison_20m);
        $this->db->set('food_poison_20f', $food_poison_20f);

        $this->db->set('ear_infect_5m', $ear_infect_5m);
        $this->db->set('ear_infect_5f', $ear_infect_5f);
        $this->db->set('ear_infect_19m', $ear_infect_19m);
        $this->db->set('ear_infect_19f', $ear_infect_19f);
        $this->db->set('ear_infect_20m', $ear_infect_20m);
        $this->db->set('ear_infect_20f', $ear_infect_20f);

        $this->db->set('schisto_5m', $schisto_5m);
        $this->db->set('schisto_5f', $schisto_5f);
        $this->db->set('schisto_19m', $schisto_19m);
        $this->db->set('schisto_19f', $schisto_19f);
        $this->db->set('schisto_20m', $schisto_20m);
        $this->db->set('schisto_20f', $schisto_20f);

        $this->db->set('ascaris_5m', $ascaris_5m);
        $this->db->set('ascaris_5f', $ascaris_5f);
        $this->db->set('ascaris_19m', $ascaris_19m);
        $this->db->set('ascaris_19f', $ascaris_19f);
        $this->db->set('ascaris_20m', $ascaris_20m);
        $this->db->set('ascaris_20f', $ascaris_20f);

        $this->db->set('trichu_5m', $trichu_5m);
        $this->db->set('trichu_5f', $trichu_5f);
        $this->db->set('trichu_19m', $trichu_19m);
        $this->db->set('trichu_19f', $trichu_19f);
        $this->db->set('trichu_20m', $trichu_20m);
        $this->db->set('trichu_20f', $trichu_20f);

        $this->db->set('hook_5m', $hook_5m);
        $this->db->set('hook_5f', $hook_5f);
        $this->db->set('hook_19m', $hook_19m);
        $this->db->set('hook_19f', $hook_19f);
        $this->db->set('hook_20m', $hook_20m);
        $this->db->set('hook_20f', $hook_20f);

        $this->db->set('entam_5m', $entam_5m);
        $this->db->set('entam_5f', $entam_5f);
        $this->db->set('entam_19m', $entam_19m);
        $this->db->set('entam_19f', $entam_19f);
        $this->db->set('entam_20m', $entam_20m);
        $this->db->set('entam_20f', $entam_20f);

        $this->db->set('giardia_5m', $giardia_5m);
        $this->db->set('giardia_5f', $giardia_5f);
        $this->db->set('giardia_19m', $giardia_19m);
        $this->db->set('giardia_19f', $giardia_19f);
        $this->db->set('giardia_20m', $giardia_20m);
        $this->db->set('giardia_20f', $giardia_20f);

        $this->db->set('taenia_5m', $taenia_5m);
        $this->db->set('taenia_5f', $taenia_5f);
        $this->db->set('taenia_19m', $taenia_19m);
        $this->db->set('taenia_19f', $taenia_19f);
        $this->db->set('taenia_20m', $taenia_20m);
        $this->db->set('taenia_20f', $taenia_20f);

        $this->db->set('malaria_s_5m', $malaria_s_5m);
        $this->db->set('malaria_s_5f', $malaria_s_5f);
        $this->db->set('malaria_s_19m', $malaria_s_19m);
        $this->db->set('malaria_s_19f', $malaria_s_19f);
        $this->db->set('malaria_s_20m', $malaria_s_20m);
        $this->db->set('malaria_s_20f', $malaria_s_20f);

        $this->db->set('malaria_dig_5m', $malaria_dig_5m);
        $this->db->set('malaria_dig_5f', $malaria_dig_5f);
        $this->db->set('malaria_dig_19m', $malaria_dig_19m);
        $this->db->set('malaria_dig_19f', $malaria_dig_19f);
        $this->db->set('malaria_dig_20m', $malaria_dig_20m);
        $this->db->set('malaria_dig_20f', $malaria_dig_20f);

        $this->db->set('herpes_s_5m', $herpes_s_5m);
        $this->db->set('herpes_s_5f', $herpes_s_5f);
        $this->db->set('herpes_s_19m', $herpes_s_19m);
        $this->db->set('herpes_s_19f', $herpes_s_19f);
        $this->db->set('herpes_s_20m', $herpes_s_20m);
        $this->db->set('herpes_s_20f', $herpes_s_20f);

        $this->db->set('mening_5m', $mening_5m);
        $this->db->set('mening_5f', $mening_5f);
        $this->db->set('mening_19m', $mening_19m);
        $this->db->set('mening_19f', $mening_19f);
        $this->db->set('mening_20m', $mening_20m);
        $this->db->set('mening_20f', $mening_20f);

        $this->db->set('pneumonia_simp_5m', $pneumonia_simp_5m);
        $this->db->set('pneumonia_simp_5f', $pneumonia_simp_5f);
        $this->db->set('pneumonia_simp_19m', $pneumonia_simp_19m);
        $this->db->set('pneumonia_simp_19f', $pneumonia_simp_19f);
        $this->db->set('pneumonia_simp_20m', $pneumonia_simp_20m);
        $this->db->set('pneumonia_simp_20f', $pneumonia_simp_20f);

        $this->db->set('pneumonia_sev_5m', $pneumonia_sev_5m);
        $this->db->set('pneumonia_sev_5f', $pneumonia_sev_5f);
        $this->db->set('pneumonia_sev_19m', $pneumonia_sev_19m);
        $this->db->set('pneumonia_sev_19f', $pneumonia_sev_19f);
        $this->db->set('pneumonia_sev_20m', $pneumonia_sev_20m);
        $this->db->set('pneumonia_sev_20f', $pneumonia_sev_20f);

        $this->db->set('grip_5m', $grip_5m);
        $this->db->set('grip_5f', $grip_5f);
        $this->db->set('grip_19m', $grip_19m);
        $this->db->set('grip_19f', $grip_19f);
        $this->db->set('grip_20m', $grip_20m);
        $this->db->set('grip_20f', $grip_20f);

        $this->db->set('ari_5m', $ari_5m);
        $this->db->set('ari_5f', $ari_5f);
        $this->db->set('ari_19m', $ari_19m);
        $this->db->set('ari_19f', $ari_19f);
        $this->db->set('ari_20m', $ari_20m);
        $this->db->set('ari_20f', $ari_20f);

        $this->db->set('gast_duoden_5m', $gast_duoden_5m);
        $this->db->set('gast_duoden_5f', $gast_duoden_5f);
        $this->db->set('gast_duoden_19m', $gast_duoden_19m);
        $this->db->set('gast_duoden_19f', $gast_duoden_19f);
        $this->db->set('gast_duoden_20m', $gast_duoden_20m);
        $this->db->set('gast_duoden_20f', $gast_duoden_20f);

        $this->db->set('absces_5m', $absces_5m);
        $this->db->set('absces_5f', $absces_5f);
        $this->db->set('absces_19m', $absces_19m);
        $this->db->set('absces_19f', $absces_19f);
        $this->db->set('absces_20m', $absces_20m);
        $this->db->set('absces_20f', $absces_20f);

        $this->db->set('ulcers_5m', $ulcers_5m);
        $this->db->set('ulcers_5f', $ulcers_5f);
        $this->db->set('ulcers_19m', $ulcers_19m);
        $this->db->set('ulcers_19f', $ulcers_19f);
        $this->db->set('ulcers_20m', $ulcers_20m);
        $this->db->set('ulcers_20f', $ulcers_20f);

        $this->db->set('scabies_5m', $scabies_5m);
        $this->db->set('scabies_5f', $scabies_5f);
        $this->db->set('scabies_19m', $scabies_19m);
        $this->db->set('scabies_19f', $scabies_19f);
        $this->db->set('scabies_20m', $scabies_20m);
        $this->db->set('scabies_20f', $scabies_20f);

        $this->db->set('mycoses_5m', $mycoses_5m);
        $this->db->set('mycoses_5f', $mycoses_5f);
        $this->db->set('mycoses_19m', $mycoses_19m);
        $this->db->set('mycoses_19f', $mycoses_19f);
        $this->db->set('mycoses_20m', $mycoses_20m);
        $this->db->set('mycoses_20f', $mycoses_20f);

        $this->db->set('si_others_5m', $si_others_5m);
        $this->db->set('si_others_5f', $si_others_5f);
        $this->db->set('si_others_19m', $si_others_19m);
        $this->db->set('si_others_19f', $si_others_19f);
        $this->db->set('si_others_20m', $si_others_20m);
        $this->db->set('si_others_20f', $si_others_20f);

        $this->db->set('urinary_ti_5m', $urinary_ti_5m);
        $this->db->set('urinary_ti_5f', $urinary_ti_5f);
        $this->db->set('urinary_ti_19m', $urinary_ti_19m);
        $this->db->set('urinary_ti_19f', $urinary_ti_19f);
        $this->db->set('urinary_ti_20m', $urinary_ti_20m);
        $this->db->set('urinary_ti_20f', $urinary_ti_20f);

        $this->db->set('anemia_5m', $anemia_5m);
        $this->db->set('anemia_5f', $anemia_5f);
        $this->db->set('anemia_19m', $anemia_19m);
        $this->db->set('anemia_19f', $anemia_19f);
        $this->db->set('anemia_20m', $anemia_20m);
        $this->db->set('anemia_20f', $anemia_20f);

        $this->db->set('measles_susp_5m', $measles_susp_5m);
        $this->db->set('measles_susp_5f', $measles_susp_5f);
        $this->db->set('measles_susp_19m', $measles_susp_19m);
        $this->db->set('measles_susp_19f', $measles_susp_19f);
        $this->db->set('measles_susp_20m', $measles_susp_20m);
        $this->db->set('measles_susp_20f', $measles_susp_20f);

        $this->db->set('measles_conf_5m', $measles_conf_5m);
        $this->db->set('measles_conf_5f', $measles_conf_5f);
        $this->db->set('measles_conf_19m', $measles_conf_19m);
        $this->db->set('measles_conf_19f', $measles_conf_19f);
        $this->db->set('measles_conf_20m', $measles_conf_20m);
        $this->db->set('measles_conf_20f', $measles_conf_20f);

        $this->db->set('rubella_conf_5m', $rubella_conf_5m);
        $this->db->set('rubella_conf_5f', $rubella_conf_5f);
        $this->db->set('rubella_conf_19m', $rubella_conf_19m);
        $this->db->set('rubella_conf_19f', $rubella_conf_19f);
        $this->db->set('rubella_conf_20m', $rubella_conf_20m);
        $this->db->set('rubella_conf_20f', $rubella_conf_20f);

        $this->db->set('flaccid_paraly_5m', $flaccid_paraly_5m);
        $this->db->set('flaccid_paraly_5f', $flaccid_paraly_5f);
        $this->db->set('flaccid_paraly_19m', $flaccid_paraly_19m);
        $this->db->set('flaccid_paraly_19f', $flaccid_paraly_19f);
        $this->db->set('flaccid_paraly_20m', $flaccid_paraly_20m);
        $this->db->set('flaccid_paraly_20f', $flaccid_paraly_20f);

        $this->db->set('tetanus_5m', $tetanus_5m);
        $this->db->set('tetanus_5f', $tetanus_5f);
        $this->db->set('tetanus_19m', $tetanus_19m);
        $this->db->set('tetanus_19f', $tetanus_19f);
        $this->db->set('tetanus_20m', $tetanus_20m);
        $this->db->set('tetanus_20f', $tetanus_20f);

        $this->db->set('hepatitis_5m', $hepatitis_5m);
        $this->db->set('hepatitis_5f', $hepatitis_5f);
        $this->db->set('hepatitis_19m', $hepatitis_19m);
        $this->db->set('hepatitis_19f', $hepatitis_19f);
        $this->db->set('hepatitis_20m', $hepatitis_20m);
        $this->db->set('hepatitis_20f', $hepatitis_20f);

        $this->db->set('fractures_5m', $fractures_5m);
        $this->db->set('fractures_5f', $fractures_5f);
        $this->db->set('fractures_19m', $fractures_19m);
        $this->db->set('fractures_19f', $fractures_19f);
        $this->db->set('fractures_20m', $fractures_20m);
        $this->db->set('fractures_20f', $fractures_20f);

        $this->db->set('phys_traumas_5m', $phys_traumas_5m);
        $this->db->set('phys_traumas_5f', $phys_traumas_5f);
        $this->db->set('phys_traumas_19m', $phys_traumas_19m);
        $this->db->set('phys_traumas_19f', $phys_traumas_19f);
        $this->db->set('phys_traumas_20m', $phys_traumas_20m);
        $this->db->set('phys_traumas_20f', $phys_traumas_20f);

        $this->db->set('bone_joint_disord_5m', $bone_joint_disord_5m);
        $this->db->set('bone_joint_disord_5f', $bone_joint_disord_5f);
        $this->db->set('bone_joint_disord_19m', $bone_joint_disord_19m);
        $this->db->set('bone_joint_disord_19f', $bone_joint_disord_19f);
        $this->db->set('bone_joint_disord_20m', $bone_joint_disord_20m);
        $this->db->set('bone_joint_disord_20f', $bone_joint_disord_20f);

        $this->db->set('gyneco_pb_19f', $gyneco_pb_19f);
        $this->db->set('gyneco_pb_20f', $gyneco_pb_20f);

        $this->db->set('aids_5m', $aids_5m);
        $this->db->set('aids_5f', $aids_5f);
        $this->db->set('aids_19m', $aids_19m);
        $this->db->set('aids_19f', $aids_19f);
        $this->db->set('aids_20m', $aids_20m);
        $this->db->set('aids_20f', $aids_20f);

        $this->db->set('si_opport_5m', $si_opport_5m);
        $this->db->set('si_opport_5f', $si_opport_5f);
        $this->db->set('si_opport_19m', $si_opport_19m);
        $this->db->set('si_opport_19f', $si_opport_19f);
        $this->db->set('si_opport_20m', $si_opport_20m);
        $this->db->set('si_opport_20f', $si_opport_20f);

        $this->db->set('herpes_z_5m', $herpes_z_5m);
        $this->db->set('herpes_z_5f', $herpes_z_5f);
        $this->db->set('herpes_z_19m', $herpes_z_19m);
        $this->db->set('herpes_z_19f', $herpes_z_19f);
        $this->db->set('herpes_z_20m', $herpes_z_20m);
        $this->db->set('herpes_z_20f', $herpes_z_20f);

        $this->db->set('cand_oral_5m', $cand_oral_5m);
        $this->db->set('cand_oral_5f', $cand_oral_5f);
        $this->db->set('cand_oral_19m', $cand_oral_19m);
        $this->db->set('cand_oral_19f', $cand_oral_19f);
        $this->db->set('cand_oral_20m', $cand_oral_20m);
        $this->db->set('cand_oral_20f', $cand_oral_20f);

        $this->db->set('fever_5m', $fever_5m);
        $this->db->set('fever_5f', $fever_5f);
        $this->db->set('fever_19m', $fever_19m);
        $this->db->set('fever_19f', $fever_19f);
        $this->db->set('fever_20m', $fever_20m);
        $this->db->set('fever_20f', $fever_20f);

        $this->db->set('diar_chro_opp_infect_5m', $diar_chro_opp_infect_5m);
        $this->db->set('diar_chro_opp_infect_5f', $diar_chro_opp_infect_5f);
        $this->db->set('diar_chro_opp_infect_19m', $diar_chro_opp_infect_19m);
        $this->db->set('diar_chro_opp_infect_19f', $diar_chro_opp_infect_19f);
        $this->db->set('diar_chro_opp_infect_20m', $diar_chro_opp_infect_20m);
        $this->db->set('diar_chro_opp_infect_20f', $diar_chro_opp_infect_20f);

        $this->db->set('needle_5m', $needle_5m);
        $this->db->set('needle_5f', $needle_5f);
        $this->db->set('needle_19m', $needle_19m);
        $this->db->set('needle_19f', $needle_19f);
        $this->db->set('needle_20m', $needle_20m);
        $this->db->set('needle_20f', $needle_20f);

        $this->db->set('goitre_5m', $goitre_5m);
        $this->db->set('goitre_5f', $goitre_5f);
        $this->db->set('goitre_19m', $goitre_19m);
        $this->db->set('goitre_19f', $goitre_19f);
        $this->db->set('goitre_20m', $goitre_20m);
        $this->db->set('goitre_20f', $goitre_20f);

        $this->db->set('va_def_5m', $va_def_5m);
        $this->db->set('va_def_5f', $va_def_5f);
        $this->db->set('va_def_19m', $va_def_19m);
        $this->db->set('va_def_19f', $va_def_19f);
        $this->db->set('va_def_20m', $va_def_20m);
        $this->db->set('va_def_20f', $va_def_20f);

        $this->db->set('leprosy_5m', $leprosy_5m);
        $this->db->set('leprosy_5f', $leprosy_5f);
        $this->db->set('leprosy_19m', $leprosy_19m);
        $this->db->set('leprosy_19f', $leprosy_19f);
        $this->db->set('leprosy_20m', $leprosy_20m);
        $this->db->set('leprosy_20f', $leprosy_20f);

        $this->db->set('glaucoma_19m', $glaucoma_19m);
        $this->db->set('glaucoma_19f', $glaucoma_19f);
        $this->db->set('glaucoma_39m', $glaucoma_39m);
        $this->db->set('glaucoma_39f', $glaucoma_39f);
        $this->db->set('glaucoma_40m', $glaucoma_40m);
        $this->db->set('glaucoma_40f', $glaucoma_40f);

        $this->db->set('cataract_19m', $cataract_19m);
        $this->db->set('cataract_19f', $cataract_19f);
        $this->db->set('cataract_39m', $cataract_39m);
        $this->db->set('cataract_39f', $cataract_39f);
        $this->db->set('cataract_40m', $cataract_40m);
        $this->db->set('cataract_40f', $cataract_40f);

        $this->db->set('refrac_error_19m', $refrac_error_19m);
        $this->db->set('refrac_error_19f', $refrac_error_19f);
        $this->db->set('refrac_error_39m', $refrac_error_39m);
        $this->db->set('refrac_error_39f', $refrac_error_39f);
        $this->db->set('refrac_error_40m', $refrac_error_40m);
        $this->db->set('refrac_error_40f', $refrac_error_40f);

        $this->db->set('diab_retino_19m', $diab_retino_19m);
        $this->db->set('diab_retino_19f', $diab_retino_19f);
        $this->db->set('diab_retino_39m', $diab_retino_39m);
        $this->db->set('diab_retino_39f', $diab_retino_39f);
        $this->db->set('diab_retino_40m', $diab_retino_40m);
        $this->db->set('diab_retino_40f', $diab_retino_40f);

        $this->db->set('conjunctivitis_19m', $conjunctivitis_19m);
        $this->db->set('conjunctivitis_19f', $conjunctivitis_19f);
        $this->db->set('conjunctivitis_39m', $conjunctivitis_39m);
        $this->db->set('conjunctivitis_39f', $conjunctivitis_39f);
        $this->db->set('conjunctivitis_40m', $conjunctivitis_40m);
        $this->db->set('conjunctivitis_40f', $conjunctivitis_40f);

        $this->db->set('pinguecula_19m', $pinguecula_19m);
        $this->db->set('pinguecula_19f', $pinguecula_19f);
        $this->db->set('pinguecula_39m', $pinguecula_39m);
        $this->db->set('pinguecula_39f', $pinguecula_39f);
        $this->db->set('pinguecula_40m', $pinguecula_40m);
        $this->db->set('pinguecula_40f', $pinguecula_40f);

        $this->db->set('uveitis_19m', $uveitis_19m);
        $this->db->set('uveitis_19f', $uveitis_19f);
        $this->db->set('uveitis_39m', $uveitis_39m);
        $this->db->set('uveitis_39f', $uveitis_39f);
        $this->db->set('uveitis_40m', $uveitis_40m);
        $this->db->set('uveitis_40f', $uveitis_40f);

        $this->db->set('eye_trauma_19m', $eye_trauma_19m);
        $this->db->set('eye_trauma_19f', $eye_trauma_19f);
        $this->db->set('eye_trauma_39m', $eye_trauma_39m);
        $this->db->set('eye_trauma_39f', $eye_trauma_39f);
        $this->db->set('eye_trauma_40m', $eye_trauma_40m);
        $this->db->set('eye_trauma_40f', $eye_trauma_40f);

        $this->db->set('eye_pb_19m', $eye_pb_19m);
        $this->db->set('eye_pb_19f', $eye_pb_19f);
        $this->db->set('eye_pb_39m', $eye_pb_39m);
        $this->db->set('eye_pb_39f', $eye_pb_39f);
        $this->db->set('eye_pb_40m', $eye_pb_40m);
        $this->db->set('eye_pb_40f', $eye_pb_40f);

        $this->db->set('dent_caries_19m', $dent_caries_19m);
        $this->db->set('dent_caries_19f', $dent_caries_19f);
        $this->db->set('dent_caries_39m', $dent_caries_39m);
        $this->db->set('dent_caries_39f', $dent_caries_39f);
        $this->db->set('dent_caries_40m', $dent_caries_40m);
        $this->db->set('dent_caries_40f', $dent_caries_40f);

        $this->db->set('perio_diseas_19m', $perio_diseas_19m);
        $this->db->set('perio_diseas_19f', $perio_diseas_19f);
        $this->db->set('perio_diseas_39m', $perio_diseas_39m);
        $this->db->set('perio_diseas_39f', $perio_diseas_39f);
        $this->db->set('perio_diseas_40m', $perio_diseas_40m);
        $this->db->set('perio_diseas_40f', $perio_diseas_40f);

        $this->db->set('other_teeth_19m', $other_teeth_19m);
        $this->db->set('other_teeth_19f', $other_teeth_19f);
        $this->db->set('other_teeth_39m', $other_teeth_39m);
        $this->db->set('other_teeth_39f', $other_teeth_39f);
        $this->db->set('other_teeth_40m', $other_teeth_40m);
        $this->db->set('other_teeth_40f', $other_teeth_40f);

        $this->db->where('date_consultation', date('Y-m-d'));
        return $this->db->update('Consultation');
    }
}
