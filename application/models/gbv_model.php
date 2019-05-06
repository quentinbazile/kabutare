<?php
class gbv_model extends CI_Model
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
      $sexual_violence_5m,
      $sexual_violence_5f,
      $sexual_violence_9f,
      $sexual_violence_9m,
      $sexual_violence_18m,
      $sexual_violence_18f,
      $sexual_violence_24m,
      $sexual_violence_24f,
      $sexual_violence_25f,
      $sexual_violence_25m,
      $physical_violence_5m,
      $physical_violence_5f,
      $physical_violence_9f,
      $physical_violence_9m,
      $physical_violence_18m,
      $physical_violence_18f,
      $physical_violence_24m,
      $physical_violence_24f,
      $physical_violence_25f,
      $physical_violence_25m,
      $emotional_violence_5m,
      $emotional_violence_5f,
      $emotional_violence_9f,
      $emotional_violence_9m,
      $emotional_violence_18m,
      $emotional_violence_18f,
      $emotional_violence_24m,
      $emotional_violence_24f,
      $emotional_violence_25f,
      $emotional_violence_25m,
      $economic_violence_5m,
      $economic_violence_5f,
      $economic_violence_9f,
      $economic_violence_9m,
      $economic_violence_18m,
      $economic_violence_18f,
      $economic_violence_24m,
      $economic_violence_24f,
      $economic_violence_25f,
      $economic_violence_25m,
      $refered_higher_level_5m,
      $refered_higher_level_5f,
      $refered_higher_level_9f,
      $refered_higher_level_9m,
      $refered_higher_level_18m,
      $refered_higher_level_18f,
      $refered_higher_level_24m,
      $refered_higher_level_24f,
      $refered_higher_level_25f,
      $refered_higher_level_25m,
      $refered_police_5m,
      $refered_police_5f,
      $refered_police_9f,
      $refered_police_9m,
      $refered_police_18m,
      $refered_police_18f,
      $refered_police_24m,
      $refered_police_24f,
      $refered_police_25f,
      $refered_police_25m,
      $refered_community_5m,
      $refered_community_5f,
      $refered_community_9f,
      $refered_community_9m,
      $refered_community_18m,
      $refered_community_18f,
      $refered_community_24m,
      $refered_community_24f,
      $refered_community_25f,
      $refered_community_25m,
      $hiv_5m,
      $hiv_5f,
      $hiv_9f,
      $hiv_9m,
      $hiv_18m,
      $hiv_18f,
      $hiv_24m,
      $hiv_24f,
      $hiv_25f,
      $hiv_25m,
      $disabilities_5m,
      $disabilities_5f,
      $disabilities_9f,
      $disabilities_9m,
      $disabilities_18m,
      $disabilities_18f,
      $disabilities_24m,
      $disabilities_24f,
      $disabilities_25f,
      $disabilities_25m,
      $deaths_5m,
      $deaths_5f,
      $deaths_9f,
      $deaths_9m,
      $deaths_18m,
      $deaths_18f,
      $deaths_24m,
      $deaths_24f,
      $deaths_25f,
      $deaths_25m,
      $pregnant_9f,
      $pregnant_18f,
      $pregnant_24f,
      $pregnant_25f,
      $contraception_9f,
      $contraception_18f,
      $contraception_24f,
      $contraception_25f,
      $exposure_hiv_5m,
      $exposure_hiv_5f,
      $exposure_hiv_9f,
      $exposure_hiv_9m,
      $exposure_hiv_18m,
      $exposure_hiv_18f,
      $exposure_hiv_24m,
      $exposure_hiv_24f,
      $exposure_hiv_25f,
      $exposure_hiv_25m
    ) {
        return $this->db->set(array(
          'sexual_violence_5m' => $sexual_violence_5m,
          'sexual_violence_5f' => $sexual_violence_5f,
          'sexual_violence_9m' => $sexual_violence_9m,
          'sexual_violence_9f' => $sexual_violence_9f,
          'sexual_violence_18m' => $sexual_violence_18m,
          'sexual_violence_18f' => $sexual_violence_18f,
          'sexual_violence_24m' => $sexual_violence_24m,
          'sexual_violence_24f' => $sexual_violence_24f,
          'sexual_violence_25m' => $sexual_violence_25m,
          'sexual_violence_25f' => $sexual_violence_25f,

          'physical_violence_5m' => $physical_violence_5m,
          'physical_violence_5f' => $physical_violence_5f,
          'physical_violence_9m' => $physical_violence_9m,
          'physical_violence_9f' => $physical_violence_9f,
          'physical_violence_18m' => $physical_violence_18m,
          'physical_violence_18f' => $physical_violence_18f,
          'physical_violence_24m' => $physical_violence_24m,
          'physical_violence_24f' => $physical_violence_24f,
          'physical_violence_25m' => $physical_violence_25m,
          'physical_violence_25f' => $physical_violence_25f,

          'emotional_violence_5m' => $emotional_violence_5m,
          'emotional_violence_5f' => $emotional_violence_5f,
          'emotional_violence_9m' => $emotional_violence_9m,
          'emotional_violence_9f' => $emotional_violence_9f,
          'emotional_violence_18m' => $emotional_violence_18m,
          'emotional_violence_18f' => $emotional_violence_18f,
          'emotional_violence_24m' => $emotional_violence_24m,
          'emotional_violence_24f' => $emotional_violence_24f,
          'emotional_violence_25m' => $emotional_violence_25m,
          'emotional_violence_25f' => $emotional_violence_25f,

          'economic_violence_5m' => $economic_violence_5m,
          'economic_violence_5f' => $economic_violence_5f,
          'economic_violence_9m' => $economic_violence_9m,
          'economic_violence_9f' => $economic_violence_9f,
          'economic_violence_18m' => $economic_violence_18m,
          'economic_violence_18f' => $economic_violence_18f,
          'economic_violence_24m' => $economic_violence_24m,
          'economic_violence_24f' => $economic_violence_24f,
          'economic_violence_25m' => $economic_violence_25m,
          'economic_violence_25f' => $economic_violence_25f,

          'refered_higher_level_5m' => $refered_higher_level_5m,
          'refered_higher_level_5f' => $refered_higher_level_5f,
          'refered_higher_level_9m' => $refered_higher_level_9m,
          'refered_higher_level_9f' => $refered_higher_level_9f,
          'refered_higher_level_18m' => $refered_higher_level_18m,
          'refered_higher_level_18f' => $refered_higher_level_18f,
          'refered_higher_level_24m' => $refered_higher_level_24m,
          'refered_higher_level_24f' => $refered_higher_level_24f,
          'refered_higher_level_25m' => $refered_higher_level_25m,
          'refered_higher_level_25f' => $refered_higher_level_25f,

          'refered_police_5m' => $refered_police_5m,
          'refered_police_5f' => $refered_police_5f,
          'refered_police_9m' => $refered_police_9m,
          'refered_police_9f' => $refered_police_9f,
          'refered_police_18m' => $refered_police_18m,
          'refered_police_18f' => $refered_police_18f,
          'refered_police_24m' => $refered_police_24m,
          'refered_police_24f' => $refered_police_24f,
          'refered_police_25m' => $refered_police_25m,
          'refered_police_25f' => $refered_police_25f,

          'refered_community_5m' => $refered_community_5m,
          'refered_community_5f' => $refered_community_5f,
          'refered_community_9m' => $refered_community_9m,
          'refered_community_9f' => $refered_community_9f,
          'refered_community_18m' => $refered_community_18m,
          'refered_community_18f' => $refered_community_18f,
          'refered_community_24m' => $refered_community_24m,
          'refered_community_24f' => $refered_community_24f,
          'refered_community_25m' => $refered_community_25m,
          'refered_community_25f' => $refered_community_25f,

          'hiv_5m' => $hiv_5m,
          'hiv_5f' => $hiv_5f,
          'hiv_9m' => $hiv_9m,
          'hiv_9f' => $hiv_9f,
          'hiv_18m' => $hiv_18m,
          'hiv_18f' => $hiv_18f,
          'hiv_24m' => $hiv_24m,
          'hiv_24f' => $hiv_24f,
          'hiv_25m' => $hiv_25m,
          'hiv_25f' => $hiv_25f,

          'disabilities_5m' => $disabilities_5m,
          'disabilities_5f' => $disabilities_5f,
          'disabilities_9m' => $disabilities_9m,
          'disabilities_9f' => $disabilities_9f,
          'disabilities_18m' => $disabilities_18m,
          'disabilities_18f' => $disabilities_18f,
          'disabilities_24m' => $disabilities_24m,
          'disabilities_24f' => $disabilities_24f,
          'disabilities_25m' => $disabilities_25m,
          'disabilities_25f' => $disabilities_25f,

          'deaths_5m' => $deaths_5m,
          'deaths_5f' => $deaths_5f,
          'deaths_9m' => $deaths_9m,
          'deaths_9f' => $deaths_9f,
          'deaths_18m' => $deaths_18m,
          'deaths_18f' => $deaths_18f,
          'deaths_24m' => $deaths_24m,
          'deaths_24f' => $deaths_24f,
          'deaths_25m' => $deaths_25m,
          'deaths_25f' => $deaths_25f,

          'pregnant_9f' => $pregnant_9f,
          'pregnant_18f' => $pregnant_18f,
          'pregnant_24f' => $pregnant_24f,
          'pregnant_25f' => $pregnant_25f,

          'contraception_9f' => $contraception_9f,
          'contraception_18f' => $contraception_18f,
          'contraception_24f' => $contraception_24f,
          'contraception_25f' => $contraception_25f,

          'exposure_hiv_5m' => $exposure_hiv_5m,
          'exposure_hiv_5f' => $exposure_hiv_5f,
          'exposure_hiv_9m' => $exposure_hiv_9m,
          'exposure_hiv_9f' => $exposure_hiv_9f,
          'exposure_hiv_18m' => $exposure_hiv_18m,
          'exposure_hiv_18f' => $exposure_hiv_18f,
          'exposure_hiv_24m' => $exposure_hiv_24m,
          'exposure_hiv_24f' => $exposure_hiv_24f,
          'exposure_hiv_25m' => $exposure_hiv_25m,
          'exposure_hiv_25f' => $exposure_hiv_25f,

      'num_rapport' => $num_rapport
    ))
            ->set('date_gender_based_violence', $this->session->userdata('add_date'))
            ->insert('Gender_Based_Violence');
    }

    public function show_table1()
    {
        return $this->db->where('date_consultation_abcde', date('Y-m-d'))
                        ->where('num_user', $this->session->userdata('num_user'))
                        ->get('Consultation_abcde')
                        ->result();
    }

    public function show_table2()
    {
        return $this->db->where('date_gender_based_violence', date('Y-m-d'))
                        ->get('Gender_Based_Violence')
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

        $this->db->where('date_consultation_abcde', date('Y-m-d'));
        return $this->db->update('Consultation_abcde');
    }

    public function update_data2(
      $sexual_violence_5m,
      $sexual_violence_5f,
      $sexual_violence_9f,
      $sexual_violence_9m,
      $sexual_violence_18m,
      $sexual_violence_18f,
      $sexual_violence_24m,
      $sexual_violence_24f,
      $sexual_violence_25f,
      $sexual_violence_25m,
      $physical_violence_5m,
      $physical_violence_5f,
      $physical_violence_9f,
      $physical_violence_9m,
      $physical_violence_18m,
      $physical_violence_18f,
      $physical_violence_24m,
      $physical_violence_24f,
      $physical_violence_25f,
      $physical_violence_25m,
      $emotional_violence_5m,
      $emotional_violence_5f,
      $emotional_violence_9f,
      $emotional_violence_9m,
      $emotional_violence_18m,
      $emotional_violence_18f,
      $emotional_violence_24m,
      $emotional_violence_24f,
      $emotional_violence_25f,
      $emotional_violence_25m,
      $economic_violence_5m,
      $economic_violence_5f,
      $economic_violence_9f,
      $economic_violence_9m,
      $economic_violence_18m,
      $economic_violence_18f,
      $economic_violence_24m,
      $economic_violence_24f,
      $economic_violence_25f,
      $economic_violence_25m,
      $refered_higher_level_5m,
      $refered_higher_level_5f,
      $refered_higher_level_9f,
      $refered_higher_level_9m,
      $refered_higher_level_18m,
      $refered_higher_level_18f,
      $refered_higher_level_24m,
      $refered_higher_level_24f,
      $refered_higher_level_25f,
      $refered_higher_level_25m,
      $refered_police_5m,
      $refered_police_5f,
      $refered_police_9f,
      $refered_police_9m,
      $refered_police_18m,
      $refered_police_18f,
      $refered_police_24m,
      $refered_police_24f,
      $refered_police_25f,
      $refered_police_25m,
      $refered_community_5m,
      $refered_community_5f,
      $refered_community_9f,
      $refered_community_9m,
      $refered_community_18m,
      $refered_community_18f,
      $refered_community_24m,
      $refered_community_24f,
      $refered_community_25f,
      $refered_community_25m,
      $hiv_5m,
      $hiv_5f,
      $hiv_9f,
      $hiv_9m,
      $hiv_18m,
      $hiv_18f,
      $hiv_24m,
      $hiv_24f,
      $hiv_25f,
      $hiv_25m,
      $disabilities_5m,
      $disabilities_5f,
      $disabilities_9f,
      $disabilities_9m,
      $disabilities_18m,
      $disabilities_18f,
      $disabilities_24m,
      $disabilities_24f,
      $disabilities_25f,
      $disabilities_25m,
      $deaths_5m,
      $deaths_5f,
      $deaths_9f,
      $deaths_9m,
      $deaths_18m,
      $deaths_18f,
      $deaths_24m,
      $deaths_24f,
      $deaths_25f,
      $deaths_25m,
      $pregnant_9f,
      $pregnant_18f,
      $pregnant_24f,
      $pregnant_25f,
      $contraception_9f,
      $contraception_18f,
      $contraception_24f,
      $contraception_25f,
      $exposure_hiv_5m,
      $exposure_hiv_5f,
      $exposure_hiv_9f,
      $exposure_hiv_9m,
      $exposure_hiv_18m,
      $exposure_hiv_18f,
      $exposure_hiv_24m,
      $exposure_hiv_24f,
      $exposure_hiv_25f,
      $exposure_hiv_25m,
        $num_rapport
    ) {
        $this->db->set('sexual_violence_5m', $sexual_violence_5m);
        $this->db->set('sexual_violence_5f', $sexual_violence_5f);
        $this->db->set('sexual_violence_9m', $sexual_violence_9m);
        $this->db->set('sexual_violence_9f', $sexual_violence_9f);
        $this->db->set('sexual_violence_18m', $sexual_violence_18m);
        $this->db->set('sexual_violence_18f', $sexual_violence_18f);
        $this->db->set('sexual_violence_24m', $sexual_violence_24m);
        $this->db->set('sexual_violence_24f', $sexual_violence_24f);
        $this->db->set('sexual_violence_25m', $sexual_violence_25m);
        $this->db->set('sexual_violence_25f', $sexual_violence_25f);

        $this->db->set('physical_violence_5m', $physical_violence_5m);
        $this->db->set('physical_violence_5f', $physical_violence_5f);
        $this->db->set('physical_violence_9m', $physical_violence_9m);
        $this->db->set('physical_violence_9f', $physical_violence_9f);
        $this->db->set('physical_violence_18m', $physical_violence_18m);
        $this->db->set('physical_violence_18f', $physical_violence_18f);
        $this->db->set('physical_violence_24m', $physical_violence_24m);
        $this->db->set('physical_violence_24f', $physical_violence_24f);
        $this->db->set('physical_violence_25m', $physical_violence_25m);
        $this->db->set('physical_violence_25f', $physical_violence_25f);

        $this->db->set('emotional_violence_5m', $emotional_violence_5m);
        $this->db->set('emotional_violence_5f', $emotional_violence_5f);
        $this->db->set('emotional_violence_9m', $emotional_violence_9m);
        $this->db->set('emotional_violence_9f', $emotional_violence_9f);
        $this->db->set('emotional_violence_18m', $emotional_violence_18m);
        $this->db->set('emotional_violence_18f', $emotional_violence_18f);
        $this->db->set('emotional_violence_24m', $emotional_violence_24m);
        $this->db->set('emotional_violence_24f', $emotional_violence_24f);
        $this->db->set('emotional_violence_25m', $emotional_violence_25m);
        $this->db->set('emotional_violence_25f', $emotional_violence_25f);

        $this->db->set('economic_violence_5m', $economic_violence_5m);
        $this->db->set('economic_violence_5f', $economic_violence_5f);
        $this->db->set('economic_violence_9m', $economic_violence_9m);
        $this->db->set('economic_violence_9f', $economic_violence_9f);
        $this->db->set('economic_violence_18m', $economic_violence_18m);
        $this->db->set('economic_violence_18f', $economic_violence_18f);
        $this->db->set('economic_violence_24m', $economic_violence_24m);
        $this->db->set('economic_violence_24f', $economic_violence_24f);
        $this->db->set('economic_violence_25m', $economic_violence_25m);
        $this->db->set('economic_violence_25f', $economic_violence_25f);

        $this->db->set('refered_higher_level_5m', $refered_higher_level_5m);
        $this->db->set('refered_higher_level_5f', $refered_higher_level_5f);
        $this->db->set('refered_higher_level_9m', $refered_higher_level_9m);
        $this->db->set('refered_higher_level_9f', $refered_higher_level_9f);
        $this->db->set('refered_higher_level_18m', $refered_higher_level_18m);
        $this->db->set('refered_higher_level_18f', $refered_higher_level_18f);
        $this->db->set('refered_higher_level_24m', $refered_higher_level_24m);
        $this->db->set('refered_higher_level_24f', $refered_higher_level_24f);
        $this->db->set('refered_higher_level_25m', $refered_higher_level_25m);
        $this->db->set('refered_higher_level_25f', $refered_higher_level_25f);

        $this->db->set('refered_police_5m', $refered_police_5m);
        $this->db->set('refered_police_5f', $refered_police_5f);
        $this->db->set('refered_police_9m', $refered_police_9m);
        $this->db->set('refered_police_9f', $refered_police_9f);
        $this->db->set('refered_police_18m', $refered_police_18m);
        $this->db->set('refered_police_18f', $refered_police_18f);
        $this->db->set('refered_police_24m', $refered_police_24m);
        $this->db->set('refered_police_24f', $refered_police_24f);
        $this->db->set('refered_police_25m', $refered_police_25m);
        $this->db->set('refered_police_25f', $refered_police_25f);

        $this->db->set('refered_community_5m', $refered_community_5m);
        $this->db->set('refered_community_5f', $refered_community_5f);
        $this->db->set('refered_community_9m', $refered_community_9m);
        $this->db->set('refered_community_9f', $refered_community_9f);
        $this->db->set('refered_community_18m', $refered_community_18m);
        $this->db->set('refered_community_18f', $refered_community_18f);
        $this->db->set('refered_community_24m', $refered_community_24m);
        $this->db->set('refered_community_24f', $refered_community_24f);
        $this->db->set('refered_community_25m', $refered_community_25m);
        $this->db->set('refered_community_25f', $refered_community_25f);

        $this->db->set('hiv_5m', $hiv_5m);
        $this->db->set('hiv_5f', $hiv_5f);
        $this->db->set('hiv_9m', $hiv_9m);
        $this->db->set('hiv_9f', $hiv_9f);
        $this->db->set('hiv_18m', $hiv_18m);
        $this->db->set('hiv_18f', $hiv_18f);
        $this->db->set('hiv_24m', $hiv_24m);
        $this->db->set('hiv_24f', $hiv_24f);
        $this->db->set('hiv_25m', $hiv_25m);
        $this->db->set('hiv_25f', $hiv_25f);

        $this->db->set('disabilities_5m', $disabilities_5m);
        $this->db->set('disabilities_5f', $disabilities_5f);
        $this->db->set('disabilities_9m', $disabilities_9m);
        $this->db->set('disabilities_9f', $disabilities_9f);
        $this->db->set('disabilities_18m', $disabilities_18m);
        $this->db->set('disabilities_18f', $disabilities_18f);
        $this->db->set('disabilities_24m', $disabilities_24m);
        $this->db->set('disabilities_24f', $disabilities_24f);
        $this->db->set('disabilities_25m', $disabilities_25m);
        $this->db->set('disabilities_25f', $disabilities_25f);

        $this->db->set('deaths_5m', $deaths_5m);
        $this->db->set('deaths_5f', $deaths_5f);
        $this->db->set('deaths_9m', $deaths_9m);
        $this->db->set('deaths_9f', $deaths_9f);
        $this->db->set('deaths_18m', $deaths_18m);
        $this->db->set('deaths_18f', $deaths_18f);
        $this->db->set('deaths_24m', $deaths_24m);
        $this->db->set('deaths_24f', $deaths_24f);
        $this->db->set('deaths_25m', $deaths_25m);
        $this->db->set('deaths_25f', $deaths_25f);

        $this->db->set('pregnant_9f', $pregnant_9f);
        $this->db->set('pregnant_18f', $pregnant_18f);
        $this->db->set('pregnant_24f', $pregnant_24f);
        $this->db->set('pregnant_25f', $pregnant_25f);

        $this->db->set('contraception_9f', $contraception_9f);
        $this->db->set('contraception_18f', $contraception_18f);
        $this->db->set('contraception_24f', $contraception_24f);
        $this->db->set('contraception_25f', $contraception_25f);

        $this->db->set('exposure_hiv_5m', $exposure_hiv_5m);
        $this->db->set('exposure_hiv_5f', $exposure_hiv_5f);
        $this->db->set('exposure_hiv_9m', $exposure_hiv_9m);
        $this->db->set('exposure_hiv_9f', $exposure_hiv_9f);
        $this->db->set('exposure_hiv_18m', $exposure_hiv_18m);
        $this->db->set('exposure_hiv_18f', $exposure_hiv_18f);
        $this->db->set('exposure_hiv_24m', $exposure_hiv_24m);
        $this->db->set('exposure_hiv_24f', $exposure_hiv_24f);
        $this->db->set('exposure_hiv_25m', $exposure_hiv_25m);
        $this->db->set('exposure_hiv_25f', $exposure_hiv_25f);

        $this->db->where('date_gender_based_violence', date('Y-m-d'));
        return $this->db->update('Gender_Based_Violence');
    }
}
