<?php
class ncds_model extends CI_Model
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
        $num_rapport
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

          'num_rapport' => $num_rapport,
          'num_user' => $this->session->userdata('num_user')
        ))
            ->set('date_consultation_abcde', $this->session->userdata('add_date'))
            ->insert('Consultation_abcde');
    }

    public function fetch_data2(
        $hyper_oc19m,
        $hyper_oc19f,
        $hyper_oc39m,
        $hyper_oc39f,
        $hyper_oc40m,
        $hyper_oc40f,

        $asth_int_oc19m,
        $asth_int_oc19f,
        $asth_int_oc39m,
        $asth_int_oc39f,
        $asth_int_oc40m,
        $asth_int_oc40f,

        $asth_mild_oc19m,
        $asth_mild_oc19f,
        $asth_mild_oc39m,
        $asth_mild_oc39f,
        $asth_mild_oc40m,
        $asth_mild_oc40f,

        $asth_mod_oc19m,
        $asth_mod_oc19f,
        $asth_mod_oc39m,
        $asth_mod_oc39f,
        $asth_mod_oc40m,
        $asth_mod_oc40f,

        $asth_sev_oc19m,
        $asth_sev_oc19f,
        $asth_sev_oc39m,
        $asth_sev_oc39f,
        $asth_sev_oc40m,
        $asth_sev_oc40f,

        $bronch_oc19m,
        $bronch_oc19f,
        $bronch_oc39m,
        $bronch_oc39f,
        $bronch_oc40m,
        $bronch_oc40f,

        $other_pulm_oc19m,
        $other_pulm_oc19f,
        $other_pulm_oc39m,
        $other_pulm_oc39f,
        $other_pulm_oc40m,
        $other_pulm_oc40f,

        $diab1_oc19m,
        $diab1_oc19f,
        $diab1_oc39m,
        $diab1_oc39f,
        $diab1_oc40m,
        $diab1_oc40f,

        $diab2_oc19m,
        $diab2_oc19f,
        $diab2_oc39m,
        $diab2_oc39f,
        $diab2_oc40m,
        $diab2_oc40f,

        $diab_gest_oc19m,
        $diab_gest_oc19f,
        $diab_gest_oc39m,
        $diab_gest_oc39f,
        $diab_gest_oc40m,
        $diab_gest_oc40f,

        $breast_oc19f,
        $breast_oc39f,
        $breast_oc40f,

        $cervical_oc19m,
        $cervical_oc19f,
        $cervical_oc39m,
        $cervical_oc39f,
        $cervical_oc40m,
        $cervical_oc40f,

        $lympho_oc19m,
        $lympho_oc19f,
        $lympho_oc39m,
        $lympho_oc39f,
        $lympho_oc40m,
        $lympho_oc40f,

        $leuca_oc19m,
        $leuca_oc19f,
        $leuca_oc39m,
        $leuca_oc39f,
        $leuca_oc40m,
        $leuca_oc40f,

        $colon_oc19m,
        $colon_oc19f,
        $colon_oc39m,
        $colon_oc39f,
        $colon_oc40m,
        $colon_oc40f,

        $kaposi_oc19m,
        $kaposi_oc19f,
        $kaposi_oc39m,
        $kaposi_oc39f,
        $kaposi_oc40m,
        $kaposi_oc40f,

        $retino_oc19m,
        $retino_oc19f,
        $retino_oc39m,
        $retino_oc39f,
        $retino_oc40m,
        $retino_oc40f,

        $nephro_oc19m,
        $nephro_oc19f,
        $nephro_oc39m,
        $nephro_oc39f,
        $nephro_oc40m,
        $nephro_oc40f,

        $ovarian_oc19f,
        $ovarian_oc39f,
        $ovarian_oc40f,

        $prostate_oc19m,
        $prostate_oc39m,
        $prostate_oc40m,

        $cancer_others_oc19m,
        $cancer_others_oc19f,
        $cancer_others_oc39m,
        $cancer_others_oc39f,
        $cancer_others_oc40m,
        $cancer_others_oc40f,

        $asth_int_d19m,
        $asth_int_d19f,
        $asth_int_d39m,
        $asth_int_d39f,
        $asth_int_d40m,
        $asth_int_d40f,

        $asth_mild_d19m,
        $asth_mild_d19f,
        $asth_mild_d39m,
        $asth_mild_d39f,
        $asth_mild_d40m,
        $asth_mild_d40f,

        $asth_mod_d19m,
        $asth_mod_d19f,
        $asth_mod_d39m,
        $asth_mod_d39f,
        $asth_mod_d40m,
        $asth_mod_d40f,

        $asth_sev_d19m,
        $asth_sev_d19f,
        $asth_sev_d39m,
        $asth_sev_d39f,
        $asth_sev_d40m,
        $asth_sev_d40f,

        $bronch_d19m,
        $bronch_d19f,
        $bronch_d39m,
        $bronch_d39f,
        $bronch_d40m,
        $bronch_d40f,

        $other_pulm_d19m,
        $other_pulm_d19f,
        $other_pulm_d39m,
        $other_pulm_d39f,
        $other_pulm_d40m,
        $other_pulm_d40f,

        $diab1_d19m,
        $diab1_d19f,
        $diab1_d39m,
        $diab1_d39f,
        $diab1_d40m,
        $diab1_d40f,

        $diab2_d19m,
        $diab2_d19f,
        $diab2_d39m,
        $diab2_d39f,
        $diab2_d40m,
        $diab2_d40f,

        $diab_gest_d19m,
        $diab_gest_d19f,
        $diab_gest_d39m,
        $diab_gest_d39f,
        $diab_gest_d40m,
        $diab_gest_d40f,

        $breast_d19f,
        $breast_d39f,
        $breast_d40f,

        $cervical_d19m,
        $cervical_d19f,
        $cervical_d39m,
        $cervical_d39f,
        $cervical_d40m,
        $cervical_d40f,

        $lympho_d19m,
        $lympho_d19f,
        $lympho_d39m,
        $lympho_d39f,
        $lympho_d40m,
        $lympho_d40f,

        $leuca_d19m,
        $leuca_d19f,
        $leuca_d39m,
        $leuca_d39f,
        $leuca_d40m,
        $leuca_d40f,

        $colon_d19m,
        $colon_d19f,
        $colon_d39m,
        $colon_d39f,
        $colon_d40m,
        $colon_d40f,

        $kaposi_d19m,
        $kaposi_d19f,
        $kaposi_d39m,
        $kaposi_d39f,
        $kaposi_d40m,
        $kaposi_d40f,

        $retino_d19m,
        $retino_d19f,
        $retino_d39m,
        $retino_d39f,
        $retino_d40m,
        $retino_d40f,

        $nephro_d19m,
        $nephro_d19f,
        $nephro_d39m,
        $nephro_d39f,
        $nephro_d40m,
        $nephro_d40f,

        $ovarian_d19f,
        $ovarian_d39f,
        $ovarian_d40f,

        $prostate_d19m,
        $prostate_d39m,
        $prostate_d40m,

        $cancer_others_d19m,
        $cancer_others_d19f,
        $cancer_others_d39m,
        $cancer_others_d39f,
        $cancer_others_d40m,
        $cancer_others_d40f,
        $num_rapport
    ) {
        $this->db->where('date_chronic_disease', $this->session->userdata('add_date'));
        $q = $this->db->get('Chronic_Disease');
        if ($q->num_rows() == 0) {
            return $this->db->set(array(
              'hyper_oc19m' => $hyper_oc19m,
              'hyper_oc19f' => $hyper_oc19f,
              'hyper_oc39m' => $hyper_oc39m,
              'hyper_oc39f' => $hyper_oc39f,
              'hyper_oc40m' => $hyper_oc40m,
              'hyper_oc40f' => $hyper_oc40f,

              'asth_int_oc19m' => $asth_int_oc19m,
              'asth_int_oc19f' => $asth_int_oc19f,
              'asth_int_oc39m' => $asth_int_oc39m,
              'asth_int_oc39f' => $asth_int_oc39f,
              'asth_int_oc40m' => $asth_int_oc40m,
              'asth_int_oc40f' => $asth_int_oc40f,

              'asth_mild_oc19m' => $asth_mild_oc19m,
              'asth_mild_oc19f' => $asth_mild_oc19f,
              'asth_mild_oc39m' => $asth_mild_oc39m,
              'asth_mild_oc39f' => $asth_mild_oc39f,
              'asth_mild_oc40m' => $asth_mild_oc40m,
              'asth_mild_oc40f' => $asth_mild_oc40f,

              'asth_mod_oc19m' => $asth_mod_oc19m,
              'asth_mod_oc19f' => $asth_mod_oc19f,
              'asth_mod_oc39m' => $asth_mod_oc39m,
              'asth_mod_oc39f' => $asth_mod_oc39f,
              'asth_mod_oc40m' => $asth_mod_oc40m,
              'asth_mod_oc40f' => $asth_mod_oc40f,

              'asth_sev_oc19m' => $asth_sev_oc19m,
              'asth_sev_oc19f' => $asth_sev_oc19f,
              'asth_sev_oc39m' => $asth_sev_oc39m,
              'asth_sev_oc39f' => $asth_sev_oc39f,
              'asth_sev_oc40m' => $asth_sev_oc40m,
              'asth_sev_oc40f' => $asth_sev_oc40f,

              'bronch_oc19m' => $bronch_oc19m,
              'bronch_oc19f' => $bronch_oc19f,
              'bronch_oc39m' => $bronch_oc39m,
              'bronch_oc39f' => $bronch_oc39f,
              'bronch_oc40m' => $bronch_oc40m,
              'bronch_oc40f' => $bronch_oc40f,

              'other_pulm_oc19m' => $other_pulm_oc19m,
              'other_pulm_oc19f' => $other_pulm_oc19f,
              'other_pulm_oc39m' => $other_pulm_oc39m,
              'other_pulm_oc39f' => $other_pulm_oc39f,
              'other_pulm_oc40m' => $other_pulm_oc40m,
              'other_pulm_oc40f' => $other_pulm_oc40f,

              'diab1_oc19m' => $diab1_oc19m,
              'diab1_oc19f' => $diab1_oc19f,
              'diab1_oc39m' => $diab1_oc39m,
              'diab1_oc39f' => $diab1_oc39f,
              'diab1_oc40m' => $diab1_oc40m,
              'diab1_oc40f' => $diab1_oc40f,

              'diab2_oc19m' => $diab2_oc19m,
              'diab2_oc19f' => $diab2_oc19f,
              'diab2_oc39m' => $diab2_oc39m,
              'diab2_oc39f' => $diab2_oc39f,
              'diab2_oc40m' => $diab2_oc40m,
              'diab2_oc40f' => $diab2_oc40f,

              'diab_gest_oc19m' => $diab_gest_oc19m,
              'diab_gest_oc19f' => $diab_gest_oc19f,
              'diab_gest_oc39m' => $diab_gest_oc39m,
              'diab_gest_oc39f' => $diab_gest_oc39f,
              'diab_gest_oc40m' => $diab_gest_oc40m,
              'diab_gest_oc40f' => $diab_gest_oc40f,

              'breast_oc19f' => $breast_oc19f,
              'breast_oc39f' => $breast_oc39f,
              'breast_oc40f' => $breast_oc40f,

              'cervical_oc19m' => $cervical_oc19m,
              'cervical_oc19f' => $cervical_oc19f,
              'cervical_oc39m' => $cervical_oc39m,
              'cervical_oc39f' => $cervical_oc39f,
              'cervical_oc40m' => $cervical_oc40m,
              'cervical_oc40f' => $cervical_oc40f,

              'lympho_oc19m' => $lympho_oc19m,
              'lympho_oc19f' => $lympho_oc19f,
              'lympho_oc39m' => $lympho_oc39m,
              'lympho_oc39f' => $lympho_oc39f,
              'lympho_oc40m' => $lympho_oc40m,
              'lympho_oc40f' => $lympho_oc40f,

              'leuca_oc19m' => $leuca_oc19m,
              'leuca_oc19f' => $leuca_oc19f,
              'leuca_oc39m' => $leuca_oc39m,
              'leuca_oc39f' => $leuca_oc39f,
              'leuca_oc40m' => $leuca_oc40m,
              'leuca_oc40f' => $leuca_oc40f,

              'colon_oc19m' => $colon_oc19m,
              'colon_oc19f' => $colon_oc19f,
              'colon_oc39m' => $colon_oc39m,
              'colon_oc39f' => $colon_oc39f,
              'colon_oc40m' => $colon_oc40m,
              'colon_oc40f' => $colon_oc40f,

              'kaposi_oc19m' => $kaposi_oc19m,
              'kaposi_oc19f' => $kaposi_oc19f,
              'kaposi_oc39m' => $kaposi_oc39m,
              'kaposi_oc39f' => $kaposi_oc39f,
              'kaposi_oc40m' => $kaposi_oc40m,
              'kaposi_oc40f' => $kaposi_oc40f,

              'retino_oc19m' => $retino_oc19m,
              'retino_oc19f' => $retino_oc19f,
              'retino_oc39m' => $retino_oc39m,
              'retino_oc39f' => $retino_oc39f,
              'retino_oc40m' => $retino_oc40m,
              'retino_oc40f' => $retino_oc40f,

              'nephro_oc19m' => $nephro_oc19m,
              'nephro_oc19f' => $nephro_oc19f,
              'nephro_oc39m' => $nephro_oc39m,
              'nephro_oc39f' => $nephro_oc39f,
              'nephro_oc40m' => $nephro_oc40m,
              'nephro_oc40f' => $nephro_oc40f,

              'ovarian_oc19f' => $ovarian_oc19f,
              'ovarian_oc39f' => $ovarian_oc39f,
              'ovarian_oc40f' => $ovarian_oc40f,

              'prostate_oc19m' => $prostate_oc19m,
              'prostate_oc39m' => $prostate_oc39m,
              'prostate_oc40m' => $prostate_oc40m,

              'cancer_others_oc19m' => $cancer_others_oc19m,
              'cancer_others_oc19f' => $cancer_others_oc19f,
              'cancer_others_oc39m' => $cancer_others_oc39m,
              'cancer_others_oc39f' => $cancer_others_oc39f,
              'cancer_others_oc40m' => $cancer_others_oc40m,
              'cancer_others_oc40f' => $cancer_others_oc40f,

              'asth_int_d19m' => $asth_int_d19m,
              'asth_int_d19f' => $asth_int_d19f,
              'asth_int_d39m' => $asth_int_d39m,
              'asth_int_d39f' => $asth_int_d39f,
              'asth_int_d40m' => $asth_int_d40m,
              'asth_int_d40f' => $asth_int_d40f,

              'asth_mild_d19m' => $asth_mild_d19m,
              'asth_mild_d19f' => $asth_mild_d19f,
              'asth_mild_d39m' => $asth_mild_d39m,
              'asth_mild_d39f' => $asth_mild_d39f,
              'asth_mild_d40m' => $asth_mild_d40m,
              'asth_mild_d40f' => $asth_mild_d40f,

              'asth_mod_d19m' => $asth_mod_d19m,
              'asth_mod_d19f' => $asth_mod_d19f,
              'asth_mod_d39m' => $asth_mod_d39m,
              'asth_mod_d39f' => $asth_mod_d39f,
              'asth_mod_d40m' => $asth_mod_d40m,
              'asth_mod_d40f' => $asth_mod_d40f,

              'asth_sev_d19m' => $asth_sev_d19m,
              'asth_sev_d19f' => $asth_sev_d19f,
              'asth_sev_d39m' => $asth_sev_d39m,
              'asth_sev_d39f' => $asth_sev_d39f,
              'asth_sev_d40m' => $asth_sev_d40m,
              'asth_sev_d40f' => $asth_sev_d40f,

              'bronch_d19m' => $bronch_d19m,
              'bronch_d19f' => $bronch_d19f,
              'bronch_d39m' => $bronch_d39m,
              'bronch_d39f' => $bronch_d39f,
              'bronch_d40m' => $bronch_d40m,
              'bronch_d40f' => $bronch_d40f,

              'other_pulm_d19m' => $other_pulm_d19m,
              'other_pulm_d19f' => $other_pulm_d19f,
              'other_pulm_d39m' => $other_pulm_d39m,
              'other_pulm_d39f' => $other_pulm_d39f,
              'other_pulm_d40m' => $other_pulm_d40m,
              'other_pulm_d40f' => $other_pulm_d40f,

              'diab1_d19m' => $diab1_d19m,
              'diab1_d19f' => $diab1_d19f,
              'diab1_d39m' => $diab1_d39m,
              'diab1_d39f' => $diab1_d39f,
              'diab1_d40m' => $diab1_d40m,
              'diab1_d40f' => $diab1_d40f,

              'diab2_d19m' => $diab2_d19m,
              'diab2_d19f' => $diab2_d19f,
              'diab2_d39m' => $diab2_d39m,
              'diab2_d39f' => $diab2_d39f,
              'diab2_d40m' => $diab2_d40m,
              'diab2_d40f' => $diab2_d40f,

              'diab_gest_d19m' => $diab_gest_d19m,
              'diab_gest_d19f' => $diab_gest_d19f,
              'diab_gest_d39m' => $diab_gest_d39m,
              'diab_gest_d39f' => $diab_gest_d39f,
              'diab_gest_d40m' => $diab_gest_d40m,
              'diab_gest_d40f' => $diab_gest_d40f,

              'breast_d19f' => $breast_d19f,
              'breast_d39f' => $breast_d39f,
              'breast_d40f' => $breast_d40f,

              'cervical_d19m' => $cervical_d19m,
              'cervical_d19f' => $cervical_d19f,
              'cervical_d39m' => $cervical_d39m,
              'cervical_d39f' => $cervical_d39f,
              'cervical_d40m' => $cervical_d40m,
              'cervical_d40f' => $cervical_d40f,

              'lympho_d19m' => $lympho_d19m,
              'lympho_d19f' => $lympho_d19f,
              'lympho_d39m' => $lympho_d39m,
              'lympho_d39f' => $lympho_d39f,
              'lympho_d40m' => $lympho_d40m,
              'lympho_d40f' => $lympho_d40f,

              'leuca_d19m' => $leuca_d19m,
              'leuca_d19f' => $leuca_d19f,
              'leuca_d39m' => $leuca_d39m,
              'leuca_d39f' => $leuca_d39f,
              'leuca_d40m' => $leuca_d40m,
              'leuca_d40f' => $leuca_d40f,

              'colon_d19m' => $colon_d19m,
              'colon_d19f' => $colon_d19f,
              'colon_d39m' => $colon_d39m,
              'colon_d39f' => $colon_d39f,
              'colon_d40m' => $colon_d40m,
              'colon_d40f' => $colon_d40f,

              'kaposi_d19m' => $kaposi_d19m,
              'kaposi_d19f' => $kaposi_d19f,
              'kaposi_d39m' => $kaposi_d39m,
              'kaposi_d39f' => $kaposi_d39f,
              'kaposi_d40m' => $kaposi_d40m,
              'kaposi_d40f' => $kaposi_d40f,

              'retino_d19m' => $retino_d19m,
              'retino_d19f' => $retino_d19f,
              'retino_d39m' => $retino_d39m,
              'retino_d39f' => $retino_d39f,
              'retino_d40m' => $retino_d40m,
              'retino_d40f' => $retino_d40f,

              'nephro_d19m' => $nephro_d19m,
              'nephro_d19f' => $nephro_d19f,
              'nephro_d39m' => $nephro_d39m,
              'nephro_d39f' => $nephro_d39f,
              'nephro_d40m' => $nephro_d40m,
              'nephro_d40f' => $nephro_d40f,

              'ovarian_d19f' => $ovarian_d19f,
              'ovarian_d39f' => $ovarian_d39f,
              'ovarian_d40f' => $ovarian_d40f,

              'prostate_d19m' => $prostate_d19m,
              'prostate_d39m' => $prostate_d39m,
              'prostate_d40m' => $prostate_d40m,

              'cancer_others_d19m' => $cancer_others_d19m,
              'cancer_others_d19f' => $cancer_others_d19f,
              'cancer_others_d39m' => $cancer_others_d39m,
              'cancer_others_d39f' => $cancer_others_d39f,
              'cancer_others_d40m' => $cancer_others_d40m,
              'cancer_others_d40f' => $cancer_others_d40f,

              'num_rapport' => $num_rapport
            ))
                  ->set('date_chronic_disease', $this->session->userdata('add_date'))
                  ->insert('Chronic_Disease');
        } else {
            $this->db->set(array(
              'hyper_oc19m' => $hyper_oc19m,
              'hyper_oc19f' => $hyper_oc19f,
              'hyper_oc39m' => $hyper_oc39m,
              'hyper_oc39f' => $hyper_oc39f,
              'hyper_oc40m' => $hyper_oc40m,
              'hyper_oc40f' => $hyper_oc40f,

              'asth_int_oc19m' => $asth_int_oc19m,
              'asth_int_oc19f' => $asth_int_oc19f,
              'asth_int_oc39m' => $asth_int_oc39m,
              'asth_int_oc39f' => $asth_int_oc39f,
              'asth_int_oc40m' => $asth_int_oc40m,
              'asth_int_oc40f' => $asth_int_oc40f,

              'asth_mild_oc19m' => $asth_mild_oc19m,
              'asth_mild_oc19f' => $asth_mild_oc19f,
              'asth_mild_oc39m' => $asth_mild_oc39m,
              'asth_mild_oc39f' => $asth_mild_oc39f,
              'asth_mild_oc40m' => $asth_mild_oc40m,
              'asth_mild_oc40f' => $asth_mild_oc40f,

              'asth_mod_oc19m' => $asth_mod_oc19m,
              'asth_mod_oc19f' => $asth_mod_oc19f,
              'asth_mod_oc39m' => $asth_mod_oc39m,
              'asth_mod_oc39f' => $asth_mod_oc39f,
              'asth_mod_oc40m' => $asth_mod_oc40m,
              'asth_mod_oc40f' => $asth_mod_oc40f,

              'asth_sev_oc19m' => $asth_sev_oc19m,
              'asth_sev_oc19f' => $asth_sev_oc19f,
              'asth_sev_oc39m' => $asth_sev_oc39m,
              'asth_sev_oc39f' => $asth_sev_oc39f,
              'asth_sev_oc40m' => $asth_sev_oc40m,
              'asth_sev_oc40f' => $asth_sev_oc40f,

              'bronch_oc19m' => $bronch_oc19m,
              'bronch_oc19f' => $bronch_oc19f,
              'bronch_oc39m' => $bronch_oc39m,
              'bronch_oc39f' => $bronch_oc39f,
              'bronch_oc40m' => $bronch_oc40m,
              'bronch_oc40f' => $bronch_oc40f,

              'other_pulm_oc19m' => $other_pulm_oc19m,
              'other_pulm_oc19f' => $other_pulm_oc19f,
              'other_pulm_oc39m' => $other_pulm_oc39m,
              'other_pulm_oc39f' => $other_pulm_oc39f,
              'other_pulm_oc40m' => $other_pulm_oc40m,
              'other_pulm_oc40f' => $other_pulm_oc40f,

              'diab1_oc19m' => $diab1_oc19m,
              'diab1_oc19f' => $diab1_oc19f,
              'diab1_oc39m' => $diab1_oc39m,
              'diab1_oc39f' => $diab1_oc39f,
              'diab1_oc40m' => $diab1_oc40m,
              'diab1_oc40f' => $diab1_oc40f,

              'diab2_oc19m' => $diab2_oc19m,
              'diab2_oc19f' => $diab2_oc19f,
              'diab2_oc39m' => $diab2_oc39m,
              'diab2_oc39f' => $diab2_oc39f,
              'diab2_oc40m' => $diab2_oc40m,
              'diab2_oc40f' => $diab2_oc40f,

              'diab_gest_oc19m' => $diab_gest_oc19m,
              'diab_gest_oc19f' => $diab_gest_oc19f,
              'diab_gest_oc39m' => $diab_gest_oc39m,
              'diab_gest_oc39f' => $diab_gest_oc39f,
              'diab_gest_oc40m' => $diab_gest_oc40m,
              'diab_gest_oc40f' => $diab_gest_oc40f,

              'breast_oc19f' => $breast_oc19f,
              'breast_oc39f' => $breast_oc39f,
              'breast_oc40f' => $breast_oc40f,

              'cervical_oc19m' => $cervical_oc19m,
              'cervical_oc19f' => $cervical_oc19f,
              'cervical_oc39m' => $cervical_oc39m,
              'cervical_oc39f' => $cervical_oc39f,
              'cervical_oc40m' => $cervical_oc40m,
              'cervical_oc40f' => $cervical_oc40f,

              'lympho_oc19m' => $lympho_oc19m,
              'lympho_oc19f' => $lympho_oc19f,
              'lympho_oc39m' => $lympho_oc39m,
              'lympho_oc39f' => $lympho_oc39f,
              'lympho_oc40m' => $lympho_oc40m,
              'lympho_oc40f' => $lympho_oc40f,

              'leuca_oc19m' => $leuca_oc19m,
              'leuca_oc19f' => $leuca_oc19f,
              'leuca_oc39m' => $leuca_oc39m,
              'leuca_oc39f' => $leuca_oc39f,
              'leuca_oc40m' => $leuca_oc40m,
              'leuca_oc40f' => $leuca_oc40f,

              'colon_oc19m' => $colon_oc19m,
              'colon_oc19f' => $colon_oc19f,
              'colon_oc39m' => $colon_oc39m,
              'colon_oc39f' => $colon_oc39f,
              'colon_oc40m' => $colon_oc40m,
              'colon_oc40f' => $colon_oc40f,

              'kaposi_oc19m' => $kaposi_oc19m,
              'kaposi_oc19f' => $kaposi_oc19f,
              'kaposi_oc39m' => $kaposi_oc39m,
              'kaposi_oc39f' => $kaposi_oc39f,
              'kaposi_oc40m' => $kaposi_oc40m,
              'kaposi_oc40f' => $kaposi_oc40f,

              'retino_oc19m' => $retino_oc19m,
              'retino_oc19f' => $retino_oc19f,
              'retino_oc39m' => $retino_oc39m,
              'retino_oc39f' => $retino_oc39f,
              'retino_oc40m' => $retino_oc40m,
              'retino_oc40f' => $retino_oc40f,

              'nephro_oc19m' => $nephro_oc19m,
              'nephro_oc19f' => $nephro_oc19f,
              'nephro_oc39m' => $nephro_oc39m,
              'nephro_oc39f' => $nephro_oc39f,
              'nephro_oc40m' => $nephro_oc40m,
              'nephro_oc40f' => $nephro_oc40f,

              'ovarian_oc19f' => $ovarian_oc19f,
              'ovarian_oc39f' => $ovarian_oc39f,
              'ovarian_oc40f' => $ovarian_oc40f,

              'prostate_oc19m' => $prostate_oc19m,
              'prostate_oc39m' => $prostate_oc39m,
              'prostate_oc40m' => $prostate_oc40m,

              'cancer_others_oc19m' => $cancer_others_oc19m,
              'cancer_others_oc19f' => $cancer_others_oc19f,
              'cancer_others_oc39m' => $cancer_others_oc39m,
              'cancer_others_oc39f' => $cancer_others_oc39f,
              'cancer_others_oc40m' => $cancer_others_oc40m,
              'cancer_others_oc40f' => $cancer_others_oc40f,

              'asth_int_d19m' => $asth_int_d19m,
              'asth_int_d19f' => $asth_int_d19f,
              'asth_int_d39m' => $asth_int_d39m,
              'asth_int_d39f' => $asth_int_d39f,
              'asth_int_d40m' => $asth_int_d40m,
              'asth_int_d40f' => $asth_int_d40f,

              'asth_mild_d19m' => $asth_mild_d19m,
              'asth_mild_d19f' => $asth_mild_d19f,
              'asth_mild_d39m' => $asth_mild_d39m,
              'asth_mild_d39f' => $asth_mild_d39f,
              'asth_mild_d40m' => $asth_mild_d40m,
              'asth_mild_d40f' => $asth_mild_d40f,

              'asth_mod_d19m' => $asth_mod_d19m,
              'asth_mod_d19f' => $asth_mod_d19f,
              'asth_mod_d39m' => $asth_mod_d39m,
              'asth_mod_d39f' => $asth_mod_d39f,
              'asth_mod_d40m' => $asth_mod_d40m,
              'asth_mod_d40f' => $asth_mod_d40f,

              'asth_sev_d19m' => $asth_sev_d19m,
              'asth_sev_d19f' => $asth_sev_d19f,
              'asth_sev_d39m' => $asth_sev_d39m,
              'asth_sev_d39f' => $asth_sev_d39f,
              'asth_sev_d40m' => $asth_sev_d40m,
              'asth_sev_d40f' => $asth_sev_d40f,

              'bronch_d19m' => $bronch_d19m,
              'bronch_d19f' => $bronch_d19f,
              'bronch_d39m' => $bronch_d39m,
              'bronch_d39f' => $bronch_d39f,
              'bronch_d40m' => $bronch_d40m,
              'bronch_d40f' => $bronch_d40f,

              'other_pulm_d19m' => $other_pulm_d19m,
              'other_pulm_d19f' => $other_pulm_d19f,
              'other_pulm_d39m' => $other_pulm_d39m,
              'other_pulm_d39f' => $other_pulm_d39f,
              'other_pulm_d40m' => $other_pulm_d40m,
              'other_pulm_d40f' => $other_pulm_d40f,

              'diab1_d19m' => $diab1_d19m,
              'diab1_d19f' => $diab1_d19f,
              'diab1_d39m' => $diab1_d39m,
              'diab1_d39f' => $diab1_d39f,
              'diab1_d40m' => $diab1_d40m,
              'diab1_d40f' => $diab1_d40f,

              'diab2_d19m' => $diab2_d19m,
              'diab2_d19f' => $diab2_d19f,
              'diab2_d39m' => $diab2_d39m,
              'diab2_d39f' => $diab2_d39f,
              'diab2_d40m' => $diab2_d40m,
              'diab2_d40f' => $diab2_d40f,

              'diab_gest_d19m' => $diab_gest_d19m,
              'diab_gest_d19f' => $diab_gest_d19f,
              'diab_gest_d39m' => $diab_gest_d39m,
              'diab_gest_d39f' => $diab_gest_d39f,
              'diab_gest_d40m' => $diab_gest_d40m,
              'diab_gest_d40f' => $diab_gest_d40f,

              'breast_d19f' => $breast_d19f,
              'breast_d39f' => $breast_d39f,
              'breast_d40f' => $breast_d40f,

              'cervical_d19m' => $cervical_d19m,
              'cervical_d19f' => $cervical_d19f,
              'cervical_d39m' => $cervical_d39m,
              'cervical_d39f' => $cervical_d39f,
              'cervical_d40m' => $cervical_d40m,
              'cervical_d40f' => $cervical_d40f,

              'lympho_d19m' => $lympho_d19m,
              'lympho_d19f' => $lympho_d19f,
              'lympho_d39m' => $lympho_d39m,
              'lympho_d39f' => $lympho_d39f,
              'lympho_d40m' => $lympho_d40m,
              'lympho_d40f' => $lympho_d40f,

              'leuca_d19m' => $leuca_d19m,
              'leuca_d19f' => $leuca_d19f,
              'leuca_d39m' => $leuca_d39m,
              'leuca_d39f' => $leuca_d39f,
              'leuca_d40m' => $leuca_d40m,
              'leuca_d40f' => $leuca_d40f,

              'colon_d19m' => $colon_d19m,
              'colon_d19f' => $colon_d19f,
              'colon_d39m' => $colon_d39m,
              'colon_d39f' => $colon_d39f,
              'colon_d40m' => $colon_d40m,
              'colon_d40f' => $colon_d40f,

              'kaposi_d19m' => $kaposi_d19m,
              'kaposi_d19f' => $kaposi_d19f,
              'kaposi_d39m' => $kaposi_d39m,
              'kaposi_d39f' => $kaposi_d39f,
              'kaposi_d40m' => $kaposi_d40m,
              'kaposi_d40f' => $kaposi_d40f,

              'retino_d19m' => $retino_d19m,
              'retino_d19f' => $retino_d19f,
              'retino_d39m' => $retino_d39m,
              'retino_d39f' => $retino_d39f,
              'retino_d40m' => $retino_d40m,
              'retino_d40f' => $retino_d40f,

              'nephro_d19m' => $nephro_d19m,
              'nephro_d19f' => $nephro_d19f,
              'nephro_d39m' => $nephro_d39m,
              'nephro_d39f' => $nephro_d39f,
              'nephro_d40m' => $nephro_d40m,
              'nephro_d40f' => $nephro_d40f,

              'ovarian_d19f' => $ovarian_d19f,
              'ovarian_d39f' => $ovarian_d39f,
              'ovarian_d40f' => $ovarian_d40f,

              'prostate_d19m' => $prostate_d19m,
              'prostate_d39m' => $prostate_d39m,
              'prostate_d40m' => $prostate_d40m,

              'cancer_others_d19m' => $cancer_others_d19m,
              'cancer_others_d19f' => $cancer_others_d19f,
              'cancer_others_d39m' => $cancer_others_d39m,
              'cancer_others_d39f' => $cancer_others_d39f,
              'cancer_others_d40m' => $cancer_others_d40m,
              'cancer_others_d40f' => $cancer_others_d40f,

              'num_rapport' => $num_rapport
          ))
              ->where('date_chronic_disease', $this->session->userdata('add_date'));
            return $this->db->update('Chronic_Disease');
        }
    }

    public function fetch_data3(
        $cardio_oc19m,
        $cardio_oc19f,
        $cardio_oc39m,
        $cardio_oc39f,
        $cardio_oc40m,
        $cardio_oc40f,

        $stroke_oc19m,
        $stroke_oc19f,
        $stroke_oc39m,
        $stroke_oc39f,
        $stroke_oc40m,
        $stroke_oc40f,

        $rheumatic_oc19m,
        $rheumatic_oc19f,
        $rheumatic_oc39m,
        $rheumatic_oc39f,
        $rheumatic_oc40m,
        $rheumatic_oc40f,

        $cong_oc19m,
        $cong_oc19f,
        $cong_oc39m,
        $cong_oc39f,
        $cong_oc40m,
        $cong_oc40f,

        $coronary_oc19m,
        $coronary_oc19f,
        $coronary_oc39m,
        $coronary_oc39f,
        $coronary_oc40m,
        $coronary_oc40f,

        $peri_oc19m,
        $peri_oc19f,
        $peri_oc39m,
        $peri_oc39f,
        $peri_oc40m,
        $peri_oc40f,

        $heart_oc19m,
        $heart_oc19f,
        $heart_oc39m,
        $heart_oc39f,
        $heart_oc40m,
        $heart_oc40f,

        $other_cardio_oc19m,
        $other_cardio_oc19f,
        $other_cardio_oc39m,
        $other_cardio_oc39f,
        $other_cardio_oc40m,
        $other_cardio_oc40f,

        $post_heart_oc19m,
        $post_heart_oc19f,
        $post_heart_oc39m,
        $post_heart_oc39f,
        $post_heart_oc40m,
        $post_heart_oc40f,

        $renal_oc19m,
        $renal_oc19f,
        $renal_oc39m,
        $renal_oc39f,
        $renal_oc40m,
        $renal_oc40f,

        $other_chronic_oc19m,
        $other_chronic_oc19f,
        $other_chronic_oc39m,
        $other_chronic_oc39f,
        $other_chronic_oc40m,
        $other_chronic_oc40f,

        $thyroid_oc19m,
        $thyroid_oc19f,
        $thyroid_oc39m,
        $thyroid_oc39f,
        $thyroid_oc40m,
        $thyroid_oc40f,

        $other_endo_oc19m,
        $other_endo_oc19f,
        $other_endo_oc39m,
        $other_endo_oc39f,
        $other_endo_oc40m,
        $other_endo_oc40f,

        $cardio_d19m,
        $cardio_d19f,
        $cardio_d39m,
        $cardio_d39f,
        $cardio_d40m,
        $cardio_d40f,

        $stroke_d19m,
        $stroke_d19f,
        $stroke_d39m,
        $stroke_d39f,
        $stroke_d40m,
        $stroke_d40f,

        $rheumatic_d19m,
        $rheumatic_d19f,
        $rheumatic_d39m,
        $rheumatic_d39f,
        $rheumatic_d40m,
        $rheumatic_d40f,

        $cong_d19m,
        $cong_d19f,
        $cong_d39m,
        $cong_d39f,
        $cong_d40m,
        $cong_d40f,

        $coronary_d19m,
        $coronary_d19f,
        $coronary_d39m,
        $coronary_d39f,
        $coronary_d40m,
        $coronary_d40f,

        $peri_d19m,
        $peri_d19f,
        $peri_d39m,
        $peri_d39f,
        $peri_d40m,
        $peri_d40f,

        $heart_d19m,
        $heart_d19f,
        $heart_d39m,
        $heart_d39f,
        $heart_d40m,
        $heart_d40f,

        $other_cardio_d19m,
        $other_cardio_d19f,
        $other_cardio_d39m,
        $other_cardio_d39f,
        $other_cardio_d40m,
        $other_cardio_d40f,

        $post_heart_d19m,
        $post_heart_d19f,
        $post_heart_d39m,
        $post_heart_d39f,
        $post_heart_d40m,
        $post_heart_d40f,

        $renal_d19m,
        $renal_d19f,
        $renal_d39m,
        $renal_d39f,
        $renal_d40m,
        $renal_d40f,

        $other_chronic_d19m,
        $other_chronic_d19f,
        $other_chronic_d39m,
        $other_chronic_d39f,
        $other_chronic_d40m,
        $other_chronic_d40f,

        $thyroid_d19m,
        $thyroid_d19f,
        $thyroid_d39m,
        $thyroid_d39f,
        $thyroid_d40m,
        $thyroid_d40f,

        $other_endo_d19m,
        $other_endo_d19f,
        $other_endo_d39m,
        $other_endo_d39f,
        $other_endo_d40m,
        $other_endo_d40f,

        $num_rapport
    ) {
        $this->db->where('date_other_cardiovascular', $this->session->userdata('add_date'));
        $q = $this->db->get('Other_Cardiovascular');
        if ($q->num_rows() == 0) {
            return $this->db->set(array(
              'cardio_oc19m' => $cardio_oc19m,
              'cardio_oc19f' => $cardio_oc19f,
              'cardio_oc39m' => $cardio_oc39m,
              'cardio_oc39f' => $cardio_oc39f,
              'cardio_oc40m' => $cardio_oc40m,
              'cardio_oc40f' => $cardio_oc40f,

              'stroke_oc19m' => $stroke_oc19m,
              'stroke_oc19f' => $stroke_oc19f,
              'stroke_oc39m' => $stroke_oc39m,
              'stroke_oc39f' => $stroke_oc39f,
              'stroke_oc40m' => $stroke_oc40m,
              'stroke_oc40f' => $stroke_oc40f,

              'rheumatic_oc19m' => $rheumatic_oc19m,
              'rheumatic_oc19f' => $rheumatic_oc19f,
              'rheumatic_oc39m' => $rheumatic_oc39m,
              'rheumatic_oc39f' => $rheumatic_oc39f,
              'rheumatic_oc40m' => $rheumatic_oc40m,
              'rheumatic_oc40f' => $rheumatic_oc40f,

              'cong_oc19m' => $cong_oc19m,
              'cong_oc19f' => $cong_oc19f,
              'cong_oc39m' => $cong_oc39m,
              'cong_oc39f' => $cong_oc39f,
              'cong_oc40m' => $cong_oc40m,
              'cong_oc40f' => $cong_oc40f,

              'coronary_oc19m' => $coronary_oc19m,
              'coronary_oc19f' => $coronary_oc19f,
              'coronary_oc39m' => $coronary_oc39m,
              'coronary_oc39f' => $coronary_oc39f,
              'coronary_oc40m' => $coronary_oc40m,
              'coronary_oc40f' => $coronary_oc40f,

              'peri_oc19m' => $peri_oc19m,
              'peri_oc19f' => $peri_oc19f,
              'peri_oc39m' => $peri_oc39m,
              'peri_oc39f' => $peri_oc39f,
              'peri_oc40m' => $peri_oc40m,
              'peri_oc40f' => $peri_oc40f,

              'heart_oc19m' => $heart_oc19m,
              'heart_oc19f' => $heart_oc19f,
              'heart_oc39m' => $heart_oc39m,
              'heart_oc39f' => $heart_oc39f,
              'heart_oc40m' => $heart_oc40m,
              'heart_oc40f' => $heart_oc40f,

              'other_cardio_oc19m' => $other_cardio_oc19m,
              'other_cardio_oc19f' => $other_cardio_oc19f,
              'other_cardio_oc39m' => $other_cardio_oc39m,
              'other_cardio_oc39f' => $other_cardio_oc39f,
              'other_cardio_oc40m' => $other_cardio_oc40m,
              'other_cardio_oc40f' => $other_cardio_oc40f,

              'post_heart_oc19m' => $post_heart_oc19m,
              'post_heart_oc19f' => $post_heart_oc19f,
              'post_heart_oc39m' => $post_heart_oc39m,
              'post_heart_oc39f' => $post_heart_oc39f,
              'post_heart_oc40m' => $post_heart_oc40m,
              'post_heart_oc40f' => $post_heart_oc40f,

              'renal_oc19m' => $renal_oc19m,
              'renal_oc19f' => $renal_oc19f,
              'renal_oc39m' => $renal_oc39m,
              'renal_oc39f' => $renal_oc39f,
              'renal_oc40m' => $renal_oc40m,
              'renal_oc40f' => $renal_oc40f,

              'other_chronic_oc19m' => $other_chronic_oc19m,
              'other_chronic_oc19f' => $other_chronic_oc19f,
              'other_chronic_oc39m' => $other_chronic_oc39m,
              'other_chronic_oc39f' => $other_chronic_oc39f,
              'other_chronic_oc40m' => $other_chronic_oc40m,
              'other_chronic_oc40f' => $other_chronic_oc40f,

              'thyroid_oc19m' => $thyroid_oc19m,
              'thyroid_oc19f' => $thyroid_oc19f,
              'thyroid_oc39m' => $thyroid_oc39m,
              'thyroid_oc39f' => $thyroid_oc39f,
              'thyroid_oc40m' => $thyroid_oc40m,
              'thyroid_oc40f' => $thyroid_oc40f,

              'other_endo_oc19m' => $other_endo_oc19m,
              'other_endo_oc19f' => $other_endo_oc19f,
              'other_endo_oc39m' => $other_endo_oc39m,
              'other_endo_oc39f' => $other_endo_oc39f,
              'other_endo_oc40m' => $other_endo_oc40m,
              'other_endo_oc40f' => $other_endo_oc40f,

              'cardio_d19m' => $cardio_d19m,
              'cardio_d19f' => $cardio_d19f,
              'cardio_d39m' => $cardio_d39m,
              'cardio_d39f' => $cardio_d39f,
              'cardio_d40m' => $cardio_d40m,
              'cardio_d40f' => $cardio_d40f,

              'stroke_d19m' => $stroke_d19m,
              'stroke_d19f' => $stroke_d19f,
              'stroke_d39m' => $stroke_d39m,
              'stroke_d39f' => $stroke_d39f,
              'stroke_d40m' => $stroke_d40m,
              'stroke_d40f' => $stroke_d40f,

              'rheumatic_d19m' => $rheumatic_d19m,
              'rheumatic_d19f' => $rheumatic_d19f,
              'rheumatic_d39m' => $rheumatic_d39m,
              'rheumatic_d39f' => $rheumatic_d39f,
              'rheumatic_d40m' => $rheumatic_d40m,
              'rheumatic_d40f' => $rheumatic_d40f,

              'cong_d19m' => $cong_d19m,
              'cong_d19f' => $cong_d19f,
              'cong_d39m' => $cong_d39m,
              'cong_d39f' => $cong_d39f,
              'cong_d40m' => $cong_d40m,
              'cong_d40f' => $cong_d40f,

              'coronary_d19m' => $coronary_d19m,
              'coronary_d19f' => $coronary_d19f,
              'coronary_d39m' => $coronary_d39m,
              'coronary_d39f' => $coronary_d39f,
              'coronary_d40m' => $coronary_d40m,
              'coronary_d40f' => $coronary_d40f,

              'peri_d19m' => $peri_d19m,
              'peri_d19f' => $peri_d19f,
              'peri_d39m' => $peri_d39m,
              'peri_d39f' => $peri_d39f,
              'peri_d40m' => $peri_d40m,
              'peri_d40f' => $peri_d40f,

              'heart_d19m' => $heart_d19m,
              'heart_d19f' => $heart_d19f,
              'heart_d39m' => $heart_d39m,
              'heart_d39f' => $heart_d39f,
              'heart_d40m' => $heart_d40m,
              'heart_d40f' => $heart_d40f,

              'other_cardio_d19m' => $other_cardio_d19m,
              'other_cardio_d19f' => $other_cardio_d19f,
              'other_cardio_d39m' => $other_cardio_d39m,
              'other_cardio_d39f' => $other_cardio_d39f,
              'other_cardio_d40m' => $other_cardio_d40m,
              'other_cardio_d40f' => $other_cardio_d40f,

              'post_heart_d19m' => $post_heart_d19m,
              'post_heart_d19f' => $post_heart_d19f,
              'post_heart_d39m' => $post_heart_d39m,
              'post_heart_d39f' => $post_heart_d39f,
              'post_heart_d40m' => $post_heart_d40m,
              'post_heart_d40f' => $post_heart_d40f,

              'renal_d19m' => $renal_d19m,
              'renal_d19f' => $renal_d19f,
              'renal_d39m' => $renal_d39m,
              'renal_d39f' => $renal_d39f,
              'renal_d40m' => $renal_d40m,
              'renal_d40f' => $renal_d40f,

              'other_chronic_d19m' => $other_chronic_d19m,
              'other_chronic_d19f' => $other_chronic_d19f,
              'other_chronic_d39m' => $other_chronic_d39m,
              'other_chronic_d39f' => $other_chronic_d39f,
              'other_chronic_d40m' => $other_chronic_d40m,
              'other_chronic_d40f' => $other_chronic_d40f,

              'thyroid_d19m' => $thyroid_d19m,
              'thyroid_d19f' => $thyroid_d19f,
              'thyroid_d39m' => $thyroid_d39m,
              'thyroid_d39f' => $thyroid_d39f,
              'thyroid_d40m' => $thyroid_d40m,
              'thyroid_d40f' => $thyroid_d40f,

              'other_endo_d19m' => $other_endo_d19m,
              'other_endo_d19f' => $other_endo_d19f,
              'other_endo_d39m' => $other_endo_d39m,
              'other_endo_d39f' => $other_endo_d39f,
              'other_endo_d40m' => $other_endo_d40m,
              'other_endo_d40f' => $other_endo_d40f,

              'num_rapport' => $num_rapport
            ))
                  ->set('date_other_cardiovascular', $this->session->userdata('add_date'))
                  ->insert('Other_Cardiovascular');
        } else {
            $this->db->set(array(
              'cardio_oc19m' => $cardio_oc19m,
              'cardio_oc19f' => $cardio_oc19f,
              'cardio_oc39m' => $cardio_oc39m,
              'cardio_oc39f' => $cardio_oc39f,
              'cardio_oc40m' => $cardio_oc40m,
              'cardio_oc40f' => $cardio_oc40f,

              'stroke_oc19m' => $stroke_oc19m,
              'stroke_oc19f' => $stroke_oc19f,
              'stroke_oc39m' => $stroke_oc39m,
              'stroke_oc39f' => $stroke_oc39f,
              'stroke_oc40m' => $stroke_oc40m,
              'stroke_oc40f' => $stroke_oc40f,

              'rheumatic_oc19m' => $rheumatic_oc19m,
              'rheumatic_oc19f' => $rheumatic_oc19f,
              'rheumatic_oc39m' => $rheumatic_oc39m,
              'rheumatic_oc39f' => $rheumatic_oc39f,
              'rheumatic_oc40m' => $rheumatic_oc40m,
              'rheumatic_oc40f' => $rheumatic_oc40f,

              'cong_oc19m' => $cong_oc19m,
              'cong_oc19f' => $cong_oc19f,
              'cong_oc39m' => $cong_oc39m,
              'cong_oc39f' => $cong_oc39f,
              'cong_oc40m' => $cong_oc40m,
              'cong_oc40f' => $cong_oc40f,

              'coronary_oc19m' => $coronary_oc19m,
              'coronary_oc19f' => $coronary_oc19f,
              'coronary_oc39m' => $coronary_oc39m,
              'coronary_oc39f' => $coronary_oc39f,
              'coronary_oc40m' => $coronary_oc40m,
              'coronary_oc40f' => $coronary_oc40f,

              'peri_oc19m' => $peri_oc19m,
              'peri_oc19f' => $peri_oc19f,
              'peri_oc39m' => $peri_oc39m,
              'peri_oc39f' => $peri_oc39f,
              'peri_oc40m' => $peri_oc40m,
              'peri_oc40f' => $peri_oc40f,

              'heart_oc19m' => $heart_oc19m,
              'heart_oc19f' => $heart_oc19f,
              'heart_oc39m' => $heart_oc39m,
              'heart_oc39f' => $heart_oc39f,
              'heart_oc40m' => $heart_oc40m,
              'heart_oc40f' => $heart_oc40f,

              'other_cardio_oc19m' => $other_cardio_oc19m,
              'other_cardio_oc19f' => $other_cardio_oc19f,
              'other_cardio_oc39m' => $other_cardio_oc39m,
              'other_cardio_oc39f' => $other_cardio_oc39f,
              'other_cardio_oc40m' => $other_cardio_oc40m,
              'other_cardio_oc40f' => $other_cardio_oc40f,

              'post_heart_oc19m' => $post_heart_oc19m,
              'post_heart_oc19f' => $post_heart_oc19f,
              'post_heart_oc39m' => $post_heart_oc39m,
              'post_heart_oc39f' => $post_heart_oc39f,
              'post_heart_oc40m' => $post_heart_oc40m,
              'post_heart_oc40f' => $post_heart_oc40f,

              'renal_oc19m' => $renal_oc19m,
              'renal_oc19f' => $renal_oc19f,
              'renal_oc39m' => $renal_oc39m,
              'renal_oc39f' => $renal_oc39f,
              'renal_oc40m' => $renal_oc40m,
              'renal_oc40f' => $renal_oc40f,

              'other_chronic_oc19m' => $other_chronic_oc19m,
              'other_chronic_oc19f' => $other_chronic_oc19f,
              'other_chronic_oc39m' => $other_chronic_oc39m,
              'other_chronic_oc39f' => $other_chronic_oc39f,
              'other_chronic_oc40m' => $other_chronic_oc40m,
              'other_chronic_oc40f' => $other_chronic_oc40f,

              'thyroid_oc19m' => $thyroid_oc19m,
              'thyroid_oc19f' => $thyroid_oc19f,
              'thyroid_oc39m' => $thyroid_oc39m,
              'thyroid_oc39f' => $thyroid_oc39f,
              'thyroid_oc40m' => $thyroid_oc40m,
              'thyroid_oc40f' => $thyroid_oc40f,

              'other_endo_oc19m' => $other_endo_oc19m,
              'other_endo_oc19f' => $other_endo_oc19f,
              'other_endo_oc39m' => $other_endo_oc39m,
              'other_endo_oc39f' => $other_endo_oc39f,
              'other_endo_oc40m' => $other_endo_oc40m,
              'other_endo_oc40f' => $other_endo_oc40f,

              'cardio_d19m' => $cardio_d19m,
              'cardio_d19f' => $cardio_d19f,
              'cardio_d39m' => $cardio_d39m,
              'cardio_d39f' => $cardio_d39f,
              'cardio_d40m' => $cardio_d40m,
              'cardio_d40f' => $cardio_d40f,

              'stroke_d19m' => $stroke_d19m,
              'stroke_d19f' => $stroke_d19f,
              'stroke_d39m' => $stroke_d39m,
              'stroke_d39f' => $stroke_d39f,
              'stroke_d40m' => $stroke_d40m,
              'stroke_d40f' => $stroke_d40f,

              'rheumatic_d19m' => $rheumatic_d19m,
              'rheumatic_d19f' => $rheumatic_d19f,
              'rheumatic_d39m' => $rheumatic_d39m,
              'rheumatic_d39f' => $rheumatic_d39f,
              'rheumatic_d40m' => $rheumatic_d40m,
              'rheumatic_d40f' => $rheumatic_d40f,

              'cong_d19m' => $cong_d19m,
              'cong_d19f' => $cong_d19f,
              'cong_d39m' => $cong_d39m,
              'cong_d39f' => $cong_d39f,
              'cong_d40m' => $cong_d40m,
              'cong_d40f' => $cong_d40f,

              'coronary_d19m' => $coronary_d19m,
              'coronary_d19f' => $coronary_d19f,
              'coronary_d39m' => $coronary_d39m,
              'coronary_d39f' => $coronary_d39f,
              'coronary_d40m' => $coronary_d40m,
              'coronary_d40f' => $coronary_d40f,

              'peri_d19m' => $peri_d19m,
              'peri_d19f' => $peri_d19f,
              'peri_d39m' => $peri_d39m,
              'peri_d39f' => $peri_d39f,
              'peri_d40m' => $peri_d40m,
              'peri_d40f' => $peri_d40f,

              'heart_d19m' => $heart_d19m,
              'heart_d19f' => $heart_d19f,
              'heart_d39m' => $heart_d39m,
              'heart_d39f' => $heart_d39f,
              'heart_d40m' => $heart_d40m,
              'heart_d40f' => $heart_d40f,

              'other_cardio_d19m' => $other_cardio_d19m,
              'other_cardio_d19f' => $other_cardio_d19f,
              'other_cardio_d39m' => $other_cardio_d39m,
              'other_cardio_d39f' => $other_cardio_d39f,
              'other_cardio_d40m' => $other_cardio_d40m,
              'other_cardio_d40f' => $other_cardio_d40f,

              'post_heart_d19m' => $post_heart_d19m,
              'post_heart_d19f' => $post_heart_d19f,
              'post_heart_d39m' => $post_heart_d39m,
              'post_heart_d39f' => $post_heart_d39f,
              'post_heart_d40m' => $post_heart_d40m,
              'post_heart_d40f' => $post_heart_d40f,

              'renal_d19m' => $renal_d19m,
              'renal_d19f' => $renal_d19f,
              'renal_d39m' => $renal_d39m,
              'renal_d39f' => $renal_d39f,
              'renal_d40m' => $renal_d40m,
              'renal_d40f' => $renal_d40f,

              'other_chronic_d19m' => $other_chronic_d19m,
              'other_chronic_d19f' => $other_chronic_d19f,
              'other_chronic_d39m' => $other_chronic_d39m,
              'other_chronic_d39f' => $other_chronic_d39f,
              'other_chronic_d40m' => $other_chronic_d40m,
              'other_chronic_d40f' => $other_chronic_d40f,

              'thyroid_d19m' => $thyroid_d19m,
              'thyroid_d19f' => $thyroid_d19f,
              'thyroid_d39m' => $thyroid_d39m,
              'thyroid_d39f' => $thyroid_d39f,
              'thyroid_d40m' => $thyroid_d40m,
              'thyroid_d40f' => $thyroid_d40f,

              'other_endo_d19m' => $other_endo_d19m,
              'other_endo_d19f' => $other_endo_d19f,
              'other_endo_d39m' => $other_endo_d39m,
              'other_endo_d39f' => $other_endo_d39f,
              'other_endo_d40m' => $other_endo_d40m,
              'other_endo_d40f' => $other_endo_d40f,

              'num_rapport' => $num_rapport
          ))
              ->where('date_other_cardiovascular', $this->session->userdata('add_date'));
            return $this->db->update('Other_Cardiovascular');
        }
    }

    public function show_table1()
    {
        return $this->db->where('date_consultation_abcde', $this->session->userdata('update_date'))
                        ->where('num_user', $this->session->userdata('num_user'))
                        ->get('Consultation_abcde')
                        ->row();
    }

    public function show_table2()
    {
        return $this->db->where('date_chronic_disease', $this->session->userdata('update_date'))
                        ->get('Chronic_Disease')
                        ->row();
    }

    public function show_table3()
    {
        return $this->db->where('date_other_cardiovascular', $this->session->userdata('update_date'))
                        ->get('Other_Cardiovascular')
                        ->row();
    }

    public function num_rapport()
    {
        return $this->db->where('date_rapport', $this->session->userdata('add_date'))
                      ->get('rapport')
                      ->row();
    }

    public function update_data1(
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
      $international
    ) {
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

        $this->db->where('date_consultation_abcde', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Consultation_abcde');
    }

    public function update_data2(
      $hyper_oc19m,
      $hyper_oc19f,
      $hyper_oc39m,
      $hyper_oc39f,
      $hyper_oc40m,
      $hyper_oc40f,

      $asth_int_oc19m,
      $asth_int_oc19f,
      $asth_int_oc39m,
      $asth_int_oc39f,
      $asth_int_oc40m,
      $asth_int_oc40f,

      $asth_mild_oc19m,
      $asth_mild_oc19f,
      $asth_mild_oc39m,
      $asth_mild_oc39f,
      $asth_mild_oc40m,
      $asth_mild_oc40f,

      $asth_mod_oc19m,
      $asth_mod_oc19f,
      $asth_mod_oc39m,
      $asth_mod_oc39f,
      $asth_mod_oc40m,
      $asth_mod_oc40f,

      $asth_sev_oc19m,
      $asth_sev_oc19f,
      $asth_sev_oc39m,
      $asth_sev_oc39f,
      $asth_sev_oc40m,
      $asth_sev_oc40f,

      $bronch_oc19m,
      $bronch_oc19f,
      $bronch_oc39m,
      $bronch_oc39f,
      $bronch_oc40m,
      $bronch_oc40f,

      $other_pulm_oc19m,
      $other_pulm_oc19f,
      $other_pulm_oc39m,
      $other_pulm_oc39f,
      $other_pulm_oc40m,
      $other_pulm_oc40f,

      $diab1_oc19m,
      $diab1_oc19f,
      $diab1_oc39m,
      $diab1_oc39f,
      $diab1_oc40m,
      $diab1_oc40f,

      $diab2_oc19m,
      $diab2_oc19f,
      $diab2_oc39m,
      $diab2_oc39f,
      $diab2_oc40m,
      $diab2_oc40f,

      $diab_gest_oc19m,
      $diab_gest_oc19f,
      $diab_gest_oc39m,
      $diab_gest_oc39f,
      $diab_gest_oc40m,
      $diab_gest_oc40f,

      $breast_oc19f,
      $breast_oc39f,
      $breast_oc40f,

      $cervical_oc19m,
      $cervical_oc19f,
      $cervical_oc39m,
      $cervical_oc39f,
      $cervical_oc40m,
      $cervical_oc40f,

      $lympho_oc19m,
      $lympho_oc19f,
      $lympho_oc39m,
      $lympho_oc39f,
      $lympho_oc40m,
      $lympho_oc40f,

      $leuca_oc19m,
      $leuca_oc19f,
      $leuca_oc39m,
      $leuca_oc39f,
      $leuca_oc40m,
      $leuca_oc40f,

      $colon_oc19m,
      $colon_oc19f,
      $colon_oc39m,
      $colon_oc39f,
      $colon_oc40m,
      $colon_oc40f,

      $kaposi_oc19m,
      $kaposi_oc19f,
      $kaposi_oc39m,
      $kaposi_oc39f,
      $kaposi_oc40m,
      $kaposi_oc40f,

      $retino_oc19m,
      $retino_oc19f,
      $retino_oc39m,
      $retino_oc39f,
      $retino_oc40m,
      $retino_oc40f,

      $nephro_oc19m,
      $nephro_oc19f,
      $nephro_oc39m,
      $nephro_oc39f,
      $nephro_oc40m,
      $nephro_oc40f,

      $ovarian_oc19f,
      $ovarian_oc39f,
      $ovarian_oc40f,

      $prostate_oc19m,
      $prostate_oc39m,
      $prostate_oc40m,

      $cancer_others_oc19m,
      $cancer_others_oc19f,
      $cancer_others_oc39m,
      $cancer_others_oc39f,
      $cancer_others_oc40m,
      $cancer_others_oc40f,

      $asth_int_d19m,
      $asth_int_d19f,
      $asth_int_d39m,
      $asth_int_d39f,
      $asth_int_d40m,
      $asth_int_d40f,

      $asth_mild_d19m,
      $asth_mild_d19f,
      $asth_mild_d39m,
      $asth_mild_d39f,
      $asth_mild_d40m,
      $asth_mild_d40f,

      $asth_mod_d19m,
      $asth_mod_d19f,
      $asth_mod_d39m,
      $asth_mod_d39f,
      $asth_mod_d40m,
      $asth_mod_d40f,

      $asth_sev_d19m,
      $asth_sev_d19f,
      $asth_sev_d39m,
      $asth_sev_d39f,
      $asth_sev_d40m,
      $asth_sev_d40f,

      $bronch_d19m,
      $bronch_d19f,
      $bronch_d39m,
      $bronch_d39f,
      $bronch_d40m,
      $bronch_d40f,

      $other_pulm_d19m,
      $other_pulm_d19f,
      $other_pulm_d39m,
      $other_pulm_d39f,
      $other_pulm_d40m,
      $other_pulm_d40f,

      $diab1_d19m,
      $diab1_d19f,
      $diab1_d39m,
      $diab1_d39f,
      $diab1_d40m,
      $diab1_d40f,

      $diab2_d19m,
      $diab2_d19f,
      $diab2_d39m,
      $diab2_d39f,
      $diab2_d40m,
      $diab2_d40f,

      $diab_gest_d19m,
      $diab_gest_d19f,
      $diab_gest_d39m,
      $diab_gest_d39f,
      $diab_gest_d40m,
      $diab_gest_d40f,

      $breast_d19f,
      $breast_d39f,
      $breast_d40f,

      $cervical_d19m,
      $cervical_d19f,
      $cervical_d39m,
      $cervical_d39f,
      $cervical_d40m,
      $cervical_d40f,

      $lympho_d19m,
      $lympho_d19f,
      $lympho_d39m,
      $lympho_d39f,
      $lympho_d40m,
      $lympho_d40f,

      $leuca_d19m,
      $leuca_d19f,
      $leuca_d39m,
      $leuca_d39f,
      $leuca_d40m,
      $leuca_d40f,

      $colon_d19m,
      $colon_d19f,
      $colon_d39m,
      $colon_d39f,
      $colon_d40m,
      $colon_d40f,

      $kaposi_d19m,
      $kaposi_d19f,
      $kaposi_d39m,
      $kaposi_d39f,
      $kaposi_d40m,
      $kaposi_d40f,

      $retino_d19m,
      $retino_d19f,
      $retino_d39m,
      $retino_d39f,
      $retino_d40m,
      $retino_d40f,

      $nephro_d19m,
      $nephro_d19f,
      $nephro_d39m,
      $nephro_d39f,
      $nephro_d40m,
      $nephro_d40f,

      $ovarian_d19f,
      $ovarian_d39f,
      $ovarian_d40f,

      $prostate_d19m,
      $prostate_d39m,
      $prostate_d40m,

      $cancer_others_d19m,
      $cancer_others_d19f,
      $cancer_others_d39m,
      $cancer_others_d39f,
      $cancer_others_d40m,
      $cancer_others_d40f
    ) {
        $this->db->set('hyper_oc19m', $hyper_oc19m);
        $this->db->set('hyper_oc19f', $hyper_oc19f);
        $this->db->set('hyper_oc39m', $hyper_oc39m);
        $this->db->set('hyper_oc39f', $hyper_oc39f);
        $this->db->set('hyper_oc40m', $hyper_oc40m);
        $this->db->set('hyper_oc40f', $hyper_oc40f);

        $this->db->set('asth_int_oc19m', $asth_int_oc19m);
        $this->db->set('asth_int_oc19f', $asth_int_oc19f);
        $this->db->set('asth_int_oc39m', $asth_int_oc39m);
        $this->db->set('asth_int_oc39f', $asth_int_oc39f);
        $this->db->set('asth_int_oc40m', $asth_int_oc40m);
        $this->db->set('asth_int_oc40f', $asth_int_oc40f);

        $this->db->set('asth_mild_oc19m', $asth_mild_oc19m);
        $this->db->set('asth_mild_oc19f', $asth_mild_oc19f);
        $this->db->set('asth_mild_oc39m', $asth_mild_oc39m);
        $this->db->set('asth_mild_oc39f', $asth_mild_oc39f);
        $this->db->set('asth_mild_oc40m', $asth_mild_oc40m);
        $this->db->set('asth_mild_oc40f', $asth_mild_oc40f);

        $this->db->set('asth_mod_oc19m', $asth_mod_oc19m);
        $this->db->set('asth_mod_oc19f', $asth_mod_oc19f);
        $this->db->set('asth_mod_oc39m', $asth_mod_oc39m);
        $this->db->set('asth_mod_oc39f', $asth_mod_oc39f);
        $this->db->set('asth_mod_oc40m', $asth_mod_oc40m);
        $this->db->set('asth_mod_oc40f', $asth_mod_oc40f);

        $this->db->set('asth_sev_oc19m', $asth_sev_oc19m);
        $this->db->set('asth_sev_oc19f', $asth_sev_oc19f);
        $this->db->set('asth_sev_oc39m', $asth_sev_oc39m);
        $this->db->set('asth_sev_oc39f', $asth_sev_oc39f);
        $this->db->set('asth_sev_oc40m', $asth_sev_oc40m);
        $this->db->set('asth_sev_oc40f', $asth_sev_oc40f);

        $this->db->set('bronch_oc19m', $bronch_oc19m);
        $this->db->set('bronch_oc19f', $bronch_oc19f);
        $this->db->set('bronch_oc39m', $bronch_oc39m);
        $this->db->set('bronch_oc39f', $bronch_oc39f);
        $this->db->set('bronch_oc40m', $bronch_oc40m);
        $this->db->set('bronch_oc40f', $bronch_oc40f);

        $this->db->set('other_pulm_oc19m', $other_pulm_oc19m);
        $this->db->set('other_pulm_oc19f', $other_pulm_oc19f);
        $this->db->set('other_pulm_oc39m', $other_pulm_oc39m);
        $this->db->set('other_pulm_oc39f', $other_pulm_oc39f);
        $this->db->set('other_pulm_oc40m', $other_pulm_oc40m);
        $this->db->set('other_pulm_oc40f', $other_pulm_oc40f);

        $this->db->set('diab1_oc19m', $diab1_oc19m);
        $this->db->set('diab1_oc19f', $diab1_oc19f);
        $this->db->set('diab1_oc39m', $diab1_oc39m);
        $this->db->set('diab1_oc39f', $diab1_oc39f);
        $this->db->set('diab1_oc40m', $diab1_oc40m);
        $this->db->set('diab1_oc40f', $diab1_oc40f);

        $this->db->set('diab2_oc19m', $diab2_oc19m);
        $this->db->set('diab2_oc19f', $diab2_oc19f);
        $this->db->set('diab2_oc39m', $diab2_oc39m);
        $this->db->set('diab2_oc39f', $diab2_oc39f);
        $this->db->set('diab2_oc40m', $diab2_oc40m);
        $this->db->set('diab2_oc40f', $diab2_oc40f);

        $this->db->set('diab_gest_oc19m', $diab_gest_oc19m);
        $this->db->set('diab_gest_oc19f', $diab_gest_oc19f);
        $this->db->set('diab_gest_oc39m', $diab_gest_oc39m);
        $this->db->set('diab_gest_oc39f', $diab_gest_oc39f);
        $this->db->set('diab_gest_oc40m', $diab_gest_oc40m);
        $this->db->set('diab_gest_oc40f', $diab_gest_oc40f);

        $this->db->set('breast_oc19f', $breast_oc19f);
        $this->db->set('breast_oc39f', $breast_oc39f);
        $this->db->set('breast_oc40f', $breast_oc40f);

        $this->db->set('cervical_oc19m', $cervical_oc19m);
        $this->db->set('cervical_oc19f', $cervical_oc19f);
        $this->db->set('cervical_oc39m', $cervical_oc39m);
        $this->db->set('cervical_oc39f', $cervical_oc39f);
        $this->db->set('cervical_oc40m', $cervical_oc40m);
        $this->db->set('cervical_oc40f', $cervical_oc40f);

        $this->db->set('lympho_oc19m', $lympho_oc19m);
        $this->db->set('lympho_oc19f', $lympho_oc19f);
        $this->db->set('lympho_oc39m', $lympho_oc39m);
        $this->db->set('lympho_oc39f', $lympho_oc39f);
        $this->db->set('lympho_oc40m', $lympho_oc40m);
        $this->db->set('lympho_oc40f', $lympho_oc40f);

        $this->db->set('leuca_oc19m', $leuca_oc19m);
        $this->db->set('leuca_oc19f', $leuca_oc19f);
        $this->db->set('leuca_oc39m', $leuca_oc39m);
        $this->db->set('leuca_oc39f', $leuca_oc39f);
        $this->db->set('leuca_oc40m', $leuca_oc40m);
        $this->db->set('leuca_oc40f', $leuca_oc40f);

        $this->db->set('colon_oc19m', $colon_oc19m);
        $this->db->set('colon_oc19f', $colon_oc19f);
        $this->db->set('colon_oc39m', $colon_oc39m);
        $this->db->set('colon_oc39f', $colon_oc39f);
        $this->db->set('colon_oc40m', $colon_oc40m);
        $this->db->set('colon_oc40f', $colon_oc40f);

        $this->db->set('kaposi_oc19m', $kaposi_oc19m);
        $this->db->set('kaposi_oc19f', $kaposi_oc19f);
        $this->db->set('kaposi_oc39m', $kaposi_oc39m);
        $this->db->set('kaposi_oc39f', $kaposi_oc39f);
        $this->db->set('kaposi_oc40m', $kaposi_oc40m);
        $this->db->set('kaposi_oc40f', $kaposi_oc40f);

        $this->db->set('retino_oc19m', $retino_oc19m);
        $this->db->set('retino_oc19f', $retino_oc19f);
        $this->db->set('retino_oc39m', $retino_oc39m);
        $this->db->set('retino_oc39f', $retino_oc39f);
        $this->db->set('retino_oc40m', $retino_oc40m);
        $this->db->set('retino_oc40f', $retino_oc40f);

        $this->db->set('nephro_oc19m', $nephro_oc19m);
        $this->db->set('nephro_oc19f', $nephro_oc19f);
        $this->db->set('nephro_oc39m', $nephro_oc39m);
        $this->db->set('nephro_oc39f', $nephro_oc39f);
        $this->db->set('nephro_oc40m', $nephro_oc40m);
        $this->db->set('nephro_oc40f', $nephro_oc40f);

        $this->db->set('ovarian_oc19f', $ovarian_oc19f);
        $this->db->set('ovarian_oc39f', $ovarian_oc39f);
        $this->db->set('ovarian_oc40f', $ovarian_oc40f);

        $this->db->set('prostate_oc19m', $prostate_oc19m);
        $this->db->set('prostate_oc39m', $prostate_oc39m);
        $this->db->set('prostate_oc40m', $prostate_oc40m);

        $this->db->set('cancer_others_oc19m', $cancer_others_oc19m);
        $this->db->set('cancer_others_oc19f', $cancer_others_oc19f);
        $this->db->set('cancer_others_oc39m', $cancer_others_oc39m);
        $this->db->set('cancer_others_oc39f', $cancer_others_oc39f);
        $this->db->set('cancer_others_oc40m', $cancer_others_oc40m);
        $this->db->set('cancer_others_oc40f', $cancer_others_oc40f);

        $this->db->set('asth_int_d19m', $asth_int_d19m);
        $this->db->set('asth_int_d19f', $asth_int_d19f);
        $this->db->set('asth_int_d39m', $asth_int_d39m);
        $this->db->set('asth_int_d39f', $asth_int_d39f);
        $this->db->set('asth_int_d40m', $asth_int_d40m);
        $this->db->set('asth_int_d40f', $asth_int_d40f);

        $this->db->set('asth_mild_d19m', $asth_mild_d19m);
        $this->db->set('asth_mild_d19f', $asth_mild_d19f);
        $this->db->set('asth_mild_d39m', $asth_mild_d39m);
        $this->db->set('asth_mild_d39f', $asth_mild_d39f);
        $this->db->set('asth_mild_d40m', $asth_mild_d40m);
        $this->db->set('asth_mild_d40f', $asth_mild_d40f);

        $this->db->set('asth_mod_d19m', $asth_mod_d19m);
        $this->db->set('asth_mod_d19f', $asth_mod_d19f);
        $this->db->set('asth_mod_d39m', $asth_mod_d39m);
        $this->db->set('asth_mod_d39f', $asth_mod_d39f);
        $this->db->set('asth_mod_d40m', $asth_mod_d40m);
        $this->db->set('asth_mod_d40f', $asth_mod_d40f);

        $this->db->set('asth_sev_d19m', $asth_sev_d19m);
        $this->db->set('asth_sev_d19f', $asth_sev_d19f);
        $this->db->set('asth_sev_d39m', $asth_sev_d39m);
        $this->db->set('asth_sev_d39f', $asth_sev_d39f);
        $this->db->set('asth_sev_d40m', $asth_sev_d40m);
        $this->db->set('asth_sev_d40f', $asth_sev_d40f);

        $this->db->set('bronch_d19m', $bronch_d19m);
        $this->db->set('bronch_d19f', $bronch_d19f);
        $this->db->set('bronch_d39m', $bronch_d39m);
        $this->db->set('bronch_d39f', $bronch_d39f);
        $this->db->set('bronch_d40m', $bronch_d40m);
        $this->db->set('bronch_d40f', $bronch_d40f);

        $this->db->set('other_pulm_d19m', $other_pulm_d19m);
        $this->db->set('other_pulm_d19f', $other_pulm_d19f);
        $this->db->set('other_pulm_d39m', $other_pulm_d39m);
        $this->db->set('other_pulm_d39f', $other_pulm_d39f);
        $this->db->set('other_pulm_d40m', $other_pulm_d40m);
        $this->db->set('other_pulm_d40f', $other_pulm_d40f);

        $this->db->set('diab1_d19m', $diab1_d19m);
        $this->db->set('diab1_d19f', $diab1_d19f);
        $this->db->set('diab1_d39m', $diab1_d39m);
        $this->db->set('diab1_d39f', $diab1_d39f);
        $this->db->set('diab1_d40m', $diab1_d40m);
        $this->db->set('diab1_d40f', $diab1_d40f);

        $this->db->set('diab2_d19m', $diab2_d19m);
        $this->db->set('diab2_d19f', $diab2_d19f);
        $this->db->set('diab2_d39m', $diab2_d39m);
        $this->db->set('diab2_d39f', $diab2_d39f);
        $this->db->set('diab2_d40m', $diab2_d40m);
        $this->db->set('diab2_d40f', $diab2_d40f);

        $this->db->set('diab_gest_d19m', $diab_gest_d19m);
        $this->db->set('diab_gest_d19f', $diab_gest_d19f);
        $this->db->set('diab_gest_d39m', $diab_gest_d39m);
        $this->db->set('diab_gest_d39f', $diab_gest_d39f);
        $this->db->set('diab_gest_d40m', $diab_gest_d40m);
        $this->db->set('diab_gest_d40f', $diab_gest_d40f);

        $this->db->set('breast_d19f', $breast_d19f);
        $this->db->set('breast_d39f', $breast_d39f);
        $this->db->set('breast_d40f', $breast_d40f);

        $this->db->set('cervical_d19m', $cervical_d19m);
        $this->db->set('cervical_d19f', $cervical_d19f);
        $this->db->set('cervical_d39m', $cervical_d39m);
        $this->db->set('cervical_d39f', $cervical_d39f);
        $this->db->set('cervical_d40m', $cervical_d40m);
        $this->db->set('cervical_d40f', $cervical_d40f);

        $this->db->set('lympho_d19m', $lympho_d19m);
        $this->db->set('lympho_d19f', $lympho_d19f);
        $this->db->set('lympho_d39m', $lympho_d39m);
        $this->db->set('lympho_d39f', $lympho_d39f);
        $this->db->set('lympho_d40m', $lympho_d40m);
        $this->db->set('lympho_d40f', $lympho_d40f);

        $this->db->set('leuca_d19m', $leuca_d19m);
        $this->db->set('leuca_d19f', $leuca_d19f);
        $this->db->set('leuca_d39m', $leuca_d39m);
        $this->db->set('leuca_d39f', $leuca_d39f);
        $this->db->set('leuca_d40m', $leuca_d40m);
        $this->db->set('leuca_d40f', $leuca_d40f);

        $this->db->set('colon_d19m', $colon_d19m);
        $this->db->set('colon_d19f', $colon_d19f);
        $this->db->set('colon_d39m', $colon_d39m);
        $this->db->set('colon_d39f', $colon_d39f);
        $this->db->set('colon_d40m', $colon_d40m);
        $this->db->set('colon_d40f', $colon_d40f);

        $this->db->set('kaposi_d19m', $kaposi_d19m);
        $this->db->set('kaposi_d19f', $kaposi_d19f);
        $this->db->set('kaposi_d39m', $kaposi_d39m);
        $this->db->set('kaposi_d39f', $kaposi_d39f);
        $this->db->set('kaposi_d40m', $kaposi_d40m);
        $this->db->set('kaposi_d40f', $kaposi_d40f);

        $this->db->set('retino_d19m', $retino_d19m);
        $this->db->set('retino_d19f', $retino_d19f);
        $this->db->set('retino_d39m', $retino_d39m);
        $this->db->set('retino_d39f', $retino_d39f);
        $this->db->set('retino_d40m', $retino_d40m);
        $this->db->set('retino_d40f', $retino_d40f);

        $this->db->set('nephro_d19m', $nephro_d19m);
        $this->db->set('nephro_d19f', $nephro_d19f);
        $this->db->set('nephro_d39m', $nephro_d39m);
        $this->db->set('nephro_d39f', $nephro_d39f);
        $this->db->set('nephro_d40m', $nephro_d40m);
        $this->db->set('nephro_d40f', $nephro_d40f);

        $this->db->set('ovarian_d19f', $ovarian_d19f);
        $this->db->set('ovarian_d39f', $ovarian_d39f);
        $this->db->set('ovarian_d40f', $ovarian_d40f);

        $this->db->set('prostate_d19m', $prostate_d19m);
        $this->db->set('prostate_d39m', $prostate_d39m);
        $this->db->set('prostate_d40m', $prostate_d40m);

        $this->db->set('cancer_others_d19m', $cancer_others_d19m);
        $this->db->set('cancer_others_d19f', $cancer_others_d19f);
        $this->db->set('cancer_others_d39m', $cancer_others_d39m);
        $this->db->set('cancer_others_d39f', $cancer_others_d39f);
        $this->db->set('cancer_others_d40m', $cancer_others_d40m);
        $this->db->set('cancer_others_d40f', $cancer_others_d40f);

        $this->db->where('date_chronic_disease', $this->session->userdata('update_date'));
        return $this->db->update('Chronic_Disease');
    }

    public function update_data3(
      $cardio_oc19m,
      $cardio_oc19f,
      $cardio_oc39m,
      $cardio_oc39f,
      $cardio_oc40m,
      $cardio_oc40f,

      $stroke_oc19m,
      $stroke_oc19f,
      $stroke_oc39m,
      $stroke_oc39f,
      $stroke_oc40m,
      $stroke_oc40f,

      $rheumatic_oc19m,
      $rheumatic_oc19f,
      $rheumatic_oc39m,
      $rheumatic_oc39f,
      $rheumatic_oc40m,
      $rheumatic_oc40f,

      $cong_oc19m,
      $cong_oc19f,
      $cong_oc39m,
      $cong_oc39f,
      $cong_oc40m,
      $cong_oc40f,

      $coronary_oc19m,
      $coronary_oc19f,
      $coronary_oc39m,
      $coronary_oc39f,
      $coronary_oc40m,
      $coronary_oc40f,

      $peri_oc19m,
      $peri_oc19f,
      $peri_oc39m,
      $peri_oc39f,
      $peri_oc40m,
      $peri_oc40f,

      $heart_oc19m,
      $heart_oc19f,
      $heart_oc39m,
      $heart_oc39f,
      $heart_oc40m,
      $heart_oc40f,

      $other_cardio_oc19m,
      $other_cardio_oc19f,
      $other_cardio_oc39m,
      $other_cardio_oc39f,
      $other_cardio_oc40m,
      $other_cardio_oc40f,

      $post_heart_oc19m,
      $post_heart_oc19f,
      $post_heart_oc39m,
      $post_heart_oc39f,
      $post_heart_oc40m,
      $post_heart_oc40f,

      $renal_oc19m,
      $renal_oc19f,
      $renal_oc39m,
      $renal_oc39f,
      $renal_oc40m,
      $renal_oc40f,

      $other_chronic_oc19m,
      $other_chronic_oc19f,
      $other_chronic_oc39m,
      $other_chronic_oc39f,
      $other_chronic_oc40m,
      $other_chronic_oc40f,

      $thyroid_oc19m,
      $thyroid_oc19f,
      $thyroid_oc39m,
      $thyroid_oc39f,
      $thyroid_oc40m,
      $thyroid_oc40f,

      $other_endo_oc19m,
      $other_endo_oc19f,
      $other_endo_oc39m,
      $other_endo_oc39f,
      $other_endo_oc40m,
      $other_endo_oc40f,

      $cardio_d19m,
      $cardio_d19f,
      $cardio_d39m,
      $cardio_d39f,
      $cardio_d40m,
      $cardio_d40f,

      $stroke_d19m,
      $stroke_d19f,
      $stroke_d39m,
      $stroke_d39f,
      $stroke_d40m,
      $stroke_d40f,

      $rheumatic_d19m,
      $rheumatic_d19f,
      $rheumatic_d39m,
      $rheumatic_d39f,
      $rheumatic_d40m,
      $rheumatic_d40f,

      $cong_d19m,
      $cong_d19f,
      $cong_d39m,
      $cong_d39f,
      $cong_d40m,
      $cong_d40f,

      $coronary_d19m,
      $coronary_d19f,
      $coronary_d39m,
      $coronary_d39f,
      $coronary_d40m,
      $coronary_d40f,

      $peri_d19m,
      $peri_d19f,
      $peri_d39m,
      $peri_d39f,
      $peri_d40m,
      $peri_d40f,

      $heart_d19m,
      $heart_d19f,
      $heart_d39m,
      $heart_d39f,
      $heart_d40m,
      $heart_d40f,

      $other_cardio_d19m,
      $other_cardio_d19f,
      $other_cardio_d39m,
      $other_cardio_d39f,
      $other_cardio_d40m,
      $other_cardio_d40f,

      $post_heart_d19m,
      $post_heart_d19f,
      $post_heart_d39m,
      $post_heart_d39f,
      $post_heart_d40m,
      $post_heart_d40f,

      $renal_d19m,
      $renal_d19f,
      $renal_d39m,
      $renal_d39f,
      $renal_d40m,
      $renal_d40f,

      $other_chronic_d19m,
      $other_chronic_d19f,
      $other_chronic_d39m,
      $other_chronic_d39f,
      $other_chronic_d40m,
      $other_chronic_d40f,

      $thyroid_d19m,
      $thyroid_d19f,
      $thyroid_d39m,
      $thyroid_d39f,
      $thyroid_d40m,
      $thyroid_d40f,

      $other_endo_d19m,
      $other_endo_d19f,
      $other_endo_d39m,
      $other_endo_d39f,
      $other_endo_d40m,
      $other_endo_d40f
    ) {
        $this->db->set('cardio_oc19m', $cardio_oc19m);
        $this->db->set('cardio_oc19f', $cardio_oc19f);
        $this->db->set('cardio_oc39m', $cardio_oc39m);
        $this->db->set('cardio_oc39f', $cardio_oc39f);
        $this->db->set('cardio_oc40m', $cardio_oc40m);
        $this->db->set('cardio_oc40f', $cardio_oc40f);

        $this->db->set('stroke_oc19m', $stroke_oc19m);
        $this->db->set('stroke_oc19f', $stroke_oc19f);
        $this->db->set('stroke_oc39m', $stroke_oc39m);
        $this->db->set('stroke_oc39f', $stroke_oc39f);
        $this->db->set('stroke_oc40m', $stroke_oc40m);
        $this->db->set('stroke_oc40f', $stroke_oc40f);

        $this->db->set('rheumatic_oc19m', $rheumatic_oc19m);
        $this->db->set('rheumatic_oc19f', $rheumatic_oc19f);
        $this->db->set('rheumatic_oc39m', $rheumatic_oc39m);
        $this->db->set('rheumatic_oc39f', $rheumatic_oc39f);
        $this->db->set('rheumatic_oc40m', $rheumatic_oc40m);
        $this->db->set('rheumatic_oc40f', $rheumatic_oc40f);

        $this->db->set('cong_oc19m', $cong_oc19m);
        $this->db->set('cong_oc19f', $cong_oc19f);
        $this->db->set('cong_oc39m', $cong_oc39m);
        $this->db->set('cong_oc39f', $cong_oc39f);
        $this->db->set('cong_oc40m', $cong_oc40m);
        $this->db->set('cong_oc40f', $cong_oc40f);

        $this->db->set('coronary_oc19m', $coronary_oc19m);
        $this->db->set('coronary_oc19f', $coronary_oc19f);
        $this->db->set('coronary_oc39m', $coronary_oc39m);
        $this->db->set('coronary_oc39f', $coronary_oc39f);
        $this->db->set('coronary_oc40m', $coronary_oc40m);
        $this->db->set('coronary_oc40f', $coronary_oc40f);

        $this->db->set('peri_oc19m', $peri_oc19m);
        $this->db->set('peri_oc19f', $peri_oc19f);
        $this->db->set('peri_oc39m', $peri_oc39m);
        $this->db->set('peri_oc39f', $peri_oc39f);
        $this->db->set('peri_oc40m', $peri_oc40m);
        $this->db->set('peri_oc40f', $peri_oc40f);

        $this->db->set('heart_oc19m', $heart_oc19m);
        $this->db->set('heart_oc19f', $heart_oc19f);
        $this->db->set('heart_oc39m', $heart_oc39m);
        $this->db->set('heart_oc39f', $heart_oc39f);
        $this->db->set('heart_oc40m', $heart_oc40m);
        $this->db->set('heart_oc40f', $heart_oc40f);

        $this->db->set('other_cardio_oc19m', $other_cardio_oc19m);
        $this->db->set('other_cardio_oc19f', $other_cardio_oc19f);
        $this->db->set('other_cardio_oc39m', $other_cardio_oc39m);
        $this->db->set('other_cardio_oc39f', $other_cardio_oc39f);
        $this->db->set('other_cardio_oc40m', $other_cardio_oc40m);
        $this->db->set('other_cardio_oc40f', $other_cardio_oc40f);

        $this->db->set('post_heart_oc19m', $post_heart_oc19m);
        $this->db->set('post_heart_oc19f', $post_heart_oc19f);
        $this->db->set('post_heart_oc39m', $post_heart_oc39m);
        $this->db->set('post_heart_oc39f', $post_heart_oc39f);
        $this->db->set('post_heart_oc40m', $post_heart_oc40m);
        $this->db->set('post_heart_oc40f', $post_heart_oc40f);

        $this->db->set('renal_oc19m', $renal_oc19m);
        $this->db->set('renal_oc19f', $renal_oc19f);
        $this->db->set('renal_oc39m', $renal_oc39m);
        $this->db->set('renal_oc39f', $renal_oc39f);
        $this->db->set('renal_oc40m', $renal_oc40m);
        $this->db->set('renal_oc40f', $renal_oc40f);

        $this->db->set('other_chronic_oc19m', $other_chronic_oc19m);
        $this->db->set('other_chronic_oc19f', $other_chronic_oc19f);
        $this->db->set('other_chronic_oc39m', $other_chronic_oc39m);
        $this->db->set('other_chronic_oc39f', $other_chronic_oc39f);
        $this->db->set('other_chronic_oc40m', $other_chronic_oc40m);
        $this->db->set('other_chronic_oc40f', $other_chronic_oc40f);

        $this->db->set('thyroid_oc19m', $thyroid_oc19m);
        $this->db->set('thyroid_oc19f', $thyroid_oc19f);
        $this->db->set('thyroid_oc39m', $thyroid_oc39m);
        $this->db->set('thyroid_oc39f', $thyroid_oc39f);
        $this->db->set('thyroid_oc40m', $thyroid_oc40m);
        $this->db->set('thyroid_oc40f', $thyroid_oc40f);

        $this->db->set('other_endo_oc19m', $other_endo_oc19m);
        $this->db->set('other_endo_oc19f', $other_endo_oc19f);
        $this->db->set('other_endo_oc39m', $other_endo_oc39m);
        $this->db->set('other_endo_oc39f', $other_endo_oc39f);
        $this->db->set('other_endo_oc40m', $other_endo_oc40m);
        $this->db->set('other_endo_oc40f', $other_endo_oc40f);

        $this->db->set('cardio_d19m', $cardio_d19m);
        $this->db->set('cardio_d19f', $cardio_d19f);
        $this->db->set('cardio_d39m', $cardio_d39m);
        $this->db->set('cardio_d39f', $cardio_d39f);
        $this->db->set('cardio_d40m', $cardio_d40m);
        $this->db->set('cardio_d40f', $cardio_d40f);

        $this->db->set('stroke_d19m', $stroke_d19m);
        $this->db->set('stroke_d19f', $stroke_d19f);
        $this->db->set('stroke_d39m', $stroke_d39m);
        $this->db->set('stroke_d39f', $stroke_d39f);
        $this->db->set('stroke_d40m', $stroke_d40m);
        $this->db->set('stroke_d40f', $stroke_d40f);

        $this->db->set('rheumatic_d19m', $rheumatic_d19m);
        $this->db->set('rheumatic_d19f', $rheumatic_d19f);
        $this->db->set('rheumatic_d39m', $rheumatic_d39m);
        $this->db->set('rheumatic_d39f', $rheumatic_d39f);
        $this->db->set('rheumatic_d40m', $rheumatic_d40m);
        $this->db->set('rheumatic_d40f', $rheumatic_d40f);

        $this->db->set('cong_d19m', $cong_d19m);
        $this->db->set('cong_d19f', $cong_d19f);
        $this->db->set('cong_d39m', $cong_d39m);
        $this->db->set('cong_d39f', $cong_d39f);
        $this->db->set('cong_d40m', $cong_d40m);
        $this->db->set('cong_d40f', $cong_d40f);

        $this->db->set('coronary_d19m', $coronary_d19m);
        $this->db->set('coronary_d19f', $coronary_d19f);
        $this->db->set('coronary_d39m', $coronary_d39m);
        $this->db->set('coronary_d39f', $coronary_d39f);
        $this->db->set('coronary_d40m', $coronary_d40m);
        $this->db->set('coronary_d40f', $coronary_d40f);

        $this->db->set('peri_d19m', $peri_d19m);
        $this->db->set('peri_d19f', $peri_d19f);
        $this->db->set('peri_d39m', $peri_d39m);
        $this->db->set('peri_d39f', $peri_d39f);
        $this->db->set('peri_d40m', $peri_d40m);
        $this->db->set('peri_d40f', $peri_d40f);

        $this->db->set('heart_d19m', $heart_d19m);
        $this->db->set('heart_d19f', $heart_d19f);
        $this->db->set('heart_d39m', $heart_d39m);
        $this->db->set('heart_d39f', $heart_d39f);
        $this->db->set('heart_d40m', $heart_d40m);
        $this->db->set('heart_d40f', $heart_d40f);

        $this->db->set('other_cardio_d19m', $other_cardio_d19m);
        $this->db->set('other_cardio_d19f', $other_cardio_d19f);
        $this->db->set('other_cardio_d39m', $other_cardio_d39m);
        $this->db->set('other_cardio_d39f', $other_cardio_d39f);
        $this->db->set('other_cardio_d40m', $other_cardio_d40m);
        $this->db->set('other_cardio_d40f', $other_cardio_d40f);

        $this->db->set('post_heart_d19m', $post_heart_d19m);
        $this->db->set('post_heart_d19f', $post_heart_d19f);
        $this->db->set('post_heart_d39m', $post_heart_d39m);
        $this->db->set('post_heart_d39f', $post_heart_d39f);
        $this->db->set('post_heart_d40m', $post_heart_d40m);
        $this->db->set('post_heart_d40f', $post_heart_d40f);

        $this->db->set('renal_d19m', $renal_d19m);
        $this->db->set('renal_d19f', $renal_d19f);
        $this->db->set('renal_d39m', $renal_d39m);
        $this->db->set('renal_d39f', $renal_d39f);
        $this->db->set('renal_d40m', $renal_d40m);
        $this->db->set('renal_d40f', $renal_d40f);

        $this->db->set('other_chronic_d19m', $other_chronic_d19m);
        $this->db->set('other_chronic_d19f', $other_chronic_d19f);
        $this->db->set('other_chronic_d39m', $other_chronic_d39m);
        $this->db->set('other_chronic_d39f', $other_chronic_d39f);
        $this->db->set('other_chronic_d40m', $other_chronic_d40m);
        $this->db->set('other_chronic_d40f', $other_chronic_d40f);

        $this->db->set('thyroid_d19m', $thyroid_d19m);
        $this->db->set('thyroid_d19f', $thyroid_d19f);
        $this->db->set('thyroid_d39m', $thyroid_d39m);
        $this->db->set('thyroid_d39f', $thyroid_d39f);
        $this->db->set('thyroid_d40m', $thyroid_d40m);
        $this->db->set('thyroid_d40f', $thyroid_d40f);

        $this->db->set('other_endo_d19m', $other_endo_d19m);
        $this->db->set('other_endo_d19f', $other_endo_d19f);
        $this->db->set('other_endo_d39m', $other_endo_d39m);
        $this->db->set('other_endo_d39f', $other_endo_d39f);
        $this->db->set('other_endo_d40m', $other_endo_d40m);
        $this->db->set('other_endo_d40f', $other_endo_d40f);

        $this->db->where('date_other_cardiovascular', $this->session->userdata('update_date'));
        return $this->db->update('Other_Cardiovascular');
    }
}
