<?php
class ophthalmology_model extends CI_Model
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
        $num_rapport
    ) {
            return $this->db->set(array(

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

          'num_rapport' => $num_rapport,
          'num_user' => $this->session->userdata('num_user')
        ))
            ->set('date_consultation_fg', $this->session->userdata('add_date'))
            ->insert('Consultation_fg');
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
        return $this->db->where('date_consultation_fg', $this->session->userdata('update_date'))
                        ->get('Consultation_fg')
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
        $eye_pb_40f
    ) {
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

        $this->db->where('date_consultation_fg', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Consultation_fg');
    }
}
