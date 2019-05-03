<?php
defined('BASEPATH') or exit('No direct script access allowed');

class XI_ADD_C extends CI_Controller
{
    public function index()
    {
        $this->load->model('XI_M');
        $this->fetch();
    }

    public function fetch()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('sexual_violence_5m', '"sexual_violence_5m"', 'required');
        if ($this->form_validation->run()) {
            $sexual_violence_5m = $this->input->post('sexual_violence_5m');
            $sexual_violence_5f = $this->input->post('sexual_violence_5f');
            $sexual_violence_9m = $this->input->post('sexual_violence_9m');
            $sexual_violence_9f = $this->input->post('sexual_violence_9f');
            $sexual_violence_18m = $this->input->post('sexual_violence_18m');
            $sexual_violence_18f = $this->input->post('sexual_violence_18f');
            $sexual_violence_24m = $this->input->post('sexual_violence_24m');
            $sexual_violence_24f = $this->input->post('sexual_violence_24f');
            $sexual_violence_25m = $this->input->post('sexual_violence_25m');
            $sexual_violence_25f = $this->input->post('sexual_violence_25f');

            $physical_violence_5m = $this->input->post('physical_violence_5m');
            $physical_violence_5f = $this->input->post('physical_violence_5f');
            $physical_violence_9m = $this->input->post('physical_violence_9m');
            $physical_violence_9f = $this->input->post('physical_violence_9f');
            $physical_violence_18m = $this->input->post('physical_violence_18m');
            $physical_violence_18f = $this->input->post('physical_violence_18f');
            $physical_violence_24m = $this->input->post('physical_violence_24m');
            $physical_violence_24f = $this->input->post('physical_violence_24f');
            $physical_violence_25m = $this->input->post('physical_violence_25m');
            $physical_violence_25f = $this->input->post('physical_violence_25f');

            $emotional_violence_5m = $this->input->post('emotional_violence_5m');
            $emotional_violence_5f = $this->input->post('emotional_violence_5f');
            $emotional_violence_9m = $this->input->post('emotional_violence_9m');
            $emotional_violence_9f = $this->input->post('emotional_violence_9f');
            $emotional_violence_18m = $this->input->post('emotional_violence_18m');
            $emotional_violence_18f = $this->input->post('emotional_violence_18f');
            $emotional_violence_24m = $this->input->post('emotional_violence_24m');
            $emotional_violence_24f = $this->input->post('emotional_violence_24f');
            $emotional_violence_25m = $this->input->post('emotional_violence_25m');
            $emotional_violence_25f = $this->input->post('emotional_violence_25f');

            $economic_violence_5m = $this->input->post('economic_violence_5m');
            $economic_violence_5f = $this->input->post('economic_violence_5f');
            $economic_violence_9m = $this->input->post('economic_violence_9m');
            $economic_violence_9f = $this->input->post('economic_violence_9f');
            $economic_violence_18m = $this->input->post('economic_violence_18m');
            $economic_violence_18f = $this->input->post('economic_violence_18f');
            $economic_violence_24m = $this->input->post('economic_violence_24m');
            $economic_violence_24f = $this->input->post('economic_violence_24f');
            $economic_violence_25m = $this->input->post('economic_violence_25m');
            $economic_violence_25f = $this->input->post('economic_violence_25f');

            $refered_higher_level_5m = $this->input->post('refered_higher_level_5m');
            $refered_higher_level_5f = $this->input->post('refered_higher_level_5f');
            $refered_higher_level_9m = $this->input->post('refered_higher_level_9m');
            $refered_higher_level_9f = $this->input->post('refered_higher_level_9f');
            $refered_higher_level_18m = $this->input->post('refered_higher_level_18m');
            $refered_higher_level_18f = $this->input->post('refered_higher_level_18f');
            $refered_higher_level_24m = $this->input->post('refered_higher_level_24m');
            $refered_higher_level_24f = $this->input->post('refered_higher_level_24f');
            $refered_higher_level_25m = $this->input->post('refered_higher_level_25m');
            $refered_higher_level_25f = $this->input->post('refered_higher_level_25f');

            $refered_police_5m = $this->input->post('refered_police_5m');
            $refered_police_5f = $this->input->post('refered_police_5f');
            $refered_police_9m = $this->input->post('refered_police_9m');
            $refered_police_9f = $this->input->post('refered_police_9f');
            $refered_police_18m = $this->input->post('refered_police_18m');
            $refered_police_18f = $this->input->post('refered_police_18f');
            $refered_police_24m = $this->input->post('refered_police_24m');
            $refered_police_24f = $this->input->post('refered_police_24f');
            $refered_police_25m = $this->input->post('refered_police_25m');
            $refered_police_25f = $this->input->post('refered_police_25f');

            $refered_community_5m = $this->input->post('refered_community_5m');
            $refered_community_5f = $this->input->post('refered_community_5f');
            $refered_community_9m = $this->input->post('refered_community_9m');
            $refered_community_9f = $this->input->post('refered_community_9f');
            $refered_community_18m = $this->input->post('refered_community_18m');
            $refered_community_18f = $this->input->post('refered_community_18f');
            $refered_community_24m = $this->input->post('refered_community_24m');
            $refered_community_24f = $this->input->post('refered_community_24f');
            $refered_community_25m = $this->input->post('refered_community_25m');
            $refered_community_25f = $this->input->post('refered_community_25f');

            $hiv_5m = $this->input->post('hiv_5m');
            $hiv_5f = $this->input->post('hiv_5f');
            $hiv_9m = $this->input->post('hiv_9m');
            $hiv_9f = $this->input->post('hiv_9f');
            $hiv_18m = $this->input->post('hiv_18m');
            $hiv_18f = $this->input->post('hiv_18f');
            $hiv_24m = $this->input->post('hiv_24m');
            $hiv_24f = $this->input->post('hiv_24f');
            $hiv_25m = $this->input->post('hiv_25m');
            $hiv_25f = $this->input->post('hiv_25f');

            $disabilities_5m = $this->input->post('disabilities_5m');
            $disabilities_5f = $this->input->post('disabilities_5f');
            $disabilities_9m = $this->input->post('disabilities_9m');
            $disabilities_9f = $this->input->post('disabilities_9f');
            $disabilities_18m = $this->input->post('disabilities_18m');
            $disabilities_18f = $this->input->post('disabilities_18f');
            $disabilities_24m = $this->input->post('disabilities_24m');
            $disabilities_24f = $this->input->post('disabilities_24f');
            $disabilities_25m = $this->input->post('disabilities_25m');
            $disabilities_25f = $this->input->post('disabilities_25f');

            $deaths_5m = $this->input->post('deaths_5m');
            $deaths_5f = $this->input->post('deaths_5f');
            $deaths_9m = $this->input->post('deaths_9m');
            $deaths_9f = $this->input->post('deaths_9f');
            $deaths_18m = $this->input->post('deaths_18m');
            $deaths_18f = $this->input->post('deaths_18f');
            $deaths_24m = $this->input->post('deaths_24m');
            $deaths_24f = $this->input->post('deaths_24f');
            $deaths_25m = $this->input->post('deaths_25m');
            $deaths_25f = $this->input->post('deaths_25f');

            $pregnant_9f = $this->input->post('pregnant_9f');
            $pregnant_18f = $this->input->post('pregnant_18f');
            $pregnant_24f = $this->input->post('pregnant_24f');
            $pregnant_25f = $this->input->post('pregnant_25f');

            $contraception_9f = $this->input->post('contraception_9f');
            $contraception_18f = $this->input->post('contraception_18f');
            $contraception_24f = $this->input->post('contraception_24f');
            $contraception_25f = $this->input->post('contraception_25f');

            $exposure_hiv_5m = $this->input->post('exposure_hiv_5m');
            $exposure_hiv_5f = $this->input->post('exposure_hiv_5f');
            $exposure_hiv_9m = $this->input->post('exposure_hiv_9m');
            $exposure_hiv_9f = $this->input->post('exposure_hiv_9f');
            $exposure_hiv_18m = $this->input->post('exposure_hiv_18m');
            $exposure_hiv_18f = $this->input->post('exposure_hiv_18f');
            $exposure_hiv_24m = $this->input->post('exposure_hiv_24m');
            $exposure_hiv_24f = $this->input->post('exposure_hiv_24f');
            $exposure_hiv_25m = $this->input->post('exposure_hiv_25m');
            $exposure_hiv_25f = $this->input->post('exposure_hiv_25f');

            $this->XI_M->fetch_data(
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
        );
        } else {
            $this->load->view('XI_ADD_V');
        }
    }
}
