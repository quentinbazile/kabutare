<?php
class minor_surgery_model extends CI_Model
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
        $appendice_urg,
        $appendice_plan,
        $hernioraphy_urg,
        $hernioraphy_plan,
        $laparo_urg,
        $laparo_plan,
        $tyroide_urg,
        $tyroide_plan,
        $adeno_urg,
        $adeno_plan,
        $gs_other_urg,
        $gs_other_plan,
        $gs_total,
        $amputations_urg,
        $amputations_plan,
        $osteo_urg,
        $osteo_plan,
        $fracture_urg,
        $fracture_plan,
        $ortho_other_urg,
        $ortho_other_plan,
        $ortho_total,
        $glaucoma_urg,
        $glaucoma_plan,
        $trachoma_urg,
        $trachoma_plan,
        $cataract_urg,
        $cataract_plan,
        $trauma_urg,
        $trauma_plan,
        $oph_other_urg,
        $oph_other_plan,
        $oph_total,
        $cleft_urg,
        $cleft_plan,
        $plastic_other_urg,
        $plastic_other_plan,
        $plastic_total,
        $total_urg,
        $total_plan,
        $major_urg,
        $major_plan,
        $minor_urg,
        $minor_plan,
        $num_rapport
    ) {
        return $this->db->set(array(
          'appendice_urg' => $appendice_urg,
          'appendice_plan' => $appendice_plan,
          'hernioraphy_urg' => $hernioraphy_urg,
          'hernioraphy_plan' => $hernioraphy_plan,
          'laparo_urg' => $laparo_urg,
          'laparo_plan' => $laparo_plan,
          'tyroide_urg' => $tyroide_urg,
          'tyroide_plan' => $tyroide_plan,
          'adeno_urg' => $adeno_urg,
          'adeno_plan' => $adeno_plan,
          'gs_other_urg' => $gs_other_urg,
          'gs_other_plan' => $gs_other_plan,
          'gs_total' => $gs_total,

          'amputations_urg' => $amputations_urg,
          'amputations_plan' => $amputations_plan,
          'osteo_urg' => $osteo_urg,
          'osteo_plan' => $osteo_plan,
          'fracture_urg' => $fracture_urg,
          'fracture_plan' => $fracture_plan,
          'ortho_other_urg' => $ortho_other_urg,
          'ortho_other_plan' => $ortho_other_plan,
          'ortho_total' => $ortho_total,

          'glaucoma_urg' => $glaucoma_urg,
          'glaucoma_plan' => $glaucoma_plan,
          'trachoma_urg' => $trachoma_urg,
          'trachoma_plan' => $trachoma_plan,
          'cataract_urg' => $cataract_urg,
          'cataract_plan' => $cataract_plan,
          'trauma_urg' => $trauma_urg,
          'trauma_plan' => $trauma_plan,
          'oph_other_urg' => $oph_other_urg,
          'oph_other_plan' => $oph_other_plan,
          'oph_total' => $oph_total,

          'cleft_urg' => $cleft_urg,
          'cleft_plan' => $cleft_plan,
          'plastic_other_urg' => $plastic_other_urg,
          'plastic_other_plan' => $plastic_other_plan,
          'plastic_total' => $plastic_total,

          'total_urg' => $total_urg,
          'total_plan' => $total_plan,
          'major_urg' => $major_urg,
          'major_plan' => $major_plan,
          'minor_urg' => $minor_urg,
          'minor_plan' => $minor_plan,

          'num_rapport' => $num_rapport,
          'num_user' => $this->session->userdata('num_user')
        ))
            ->set('date_surgery', $this->session->userdata('add_date'))
            ->insert('Surgery');
    }

    public function fetch_data2(
        $general,
        $regional,
        $local,
        $other_type,
        $num_rapport
    ) {
        return $this->db->set(array(
            'general' => $general,
            'regional' => $regional,
            'local' => $local,
            'other_type' => $other_type,

            'num_rapport' => $num_rapport,
            'num_user' => $this->session->userdata('num_user')
        ))
              ->set('date_anesthesia', $this->session->userdata('add_date'))
              ->insert('Anesthesia');
    }

    public function show_table1()
    {
        return $this->db->where('date_surgery', $this->session->userdata('update_date'))
                        ->where('num_user', $this->session->userdata('num_user'))
                        ->get('Surgery')
                        ->row();
    }

    public function show_table2()
    {
        return $this->db->where('date_anesthesia', $this->session->userdata('update_date'))
                        ->where('num_user', $this->session->userdata('num_user'))
                        ->get('Anesthesia')
                        ->row();
    }

    public function num_rapport()
    {
        return $this->db->where('date_rapport', $this->session->userdata('add_date'))
                      ->get('rapport')
                      ->row();
    }

    public function update_data1(
      $appendice_urg,
      $appendice_plan,
      $hernioraphy_urg,
      $hernioraphy_plan,
      $laparo_urg,
      $laparo_plan,
      $tyroide_urg,
      $tyroide_plan,
      $adeno_urg,
      $adeno_plan,
      $gs_other_urg,
      $gs_other_plan,
      $gs_total,
      $amputations_urg,
      $amputations_plan,
      $osteo_urg,
      $osteo_plan,
      $fracture_urg,
      $fracture_plan,
      $ortho_other_urg,
      $ortho_other_plan,
      $ortho_total,
      $glaucoma_urg,
      $glaucoma_plan,
      $trachoma_urg,
      $trachoma_plan,
      $cataract_urg,
      $cataract_plan,
      $trauma_urg,
      $trauma_plan,
      $oph_other_urg,
      $oph_other_plan,
      $oph_total,
      $cleft_urg,
      $cleft_plan,
      $plastic_other_urg,
      $plastic_other_plan,
      $plastic_total,
      $total_urg,
      $total_plan,
      $major_urg,
      $major_plan,
      $minor_urg,
      $minor_plan
    ) {
        $this->db->set('appendice_urg', $appendice_urg);
        $this->db->set('appendice_plan', $appendice_plan);
        $this->db->set('hernioraphy_urg', $hernioraphy_urg);
        $this->db->set('hernioraphy_plan', $hernioraphy_plan);
        $this->db->set('laparo_urg', $laparo_urg);
        $this->db->set('laparo_plan', $laparo_plan);
        $this->db->set('tyroide_urg', $tyroide_urg);
        $this->db->set('tyroide_plan', $tyroide_plan);
        $this->db->set('adeno_urg', $adeno_urg);
        $this->db->set('adeno_plan', $adeno_plan);
        $this->db->set('gs_other_urg', $gs_other_urg);
        $this->db->set('gs_other_plan', $gs_other_plan);
        $this->db->set('gs_total', $gs_total);

        $this->db->set('amputations_urg', $amputations_urg);
        $this->db->set('amputations_plan', $amputations_plan);
        $this->db->set('osteo_urg', $osteo_urg);
        $this->db->set('osteo_plan', $osteo_plan);
        $this->db->set('fracture_urg', $fracture_urg);
        $this->db->set('fracture_plan', $fracture_plan);
        $this->db->set('ortho_other_urg', $ortho_other_urg);
        $this->db->set('ortho_other_plan', $ortho_other_plan);
        $this->db->set('ortho_total', $ortho_total);

        $this->db->set('glaucoma_urg', $glaucoma_urg);
        $this->db->set('glaucoma_plan', $glaucoma_plan);
        $this->db->set('trachoma_urg', $trachoma_urg);
        $this->db->set('trachoma_plan', $trachoma_plan);
        $this->db->set('cataract_urg', $cataract_urg);
        $this->db->set('cataract_plan', $cataract_plan);
        $this->db->set('trauma_urg', $trauma_urg);
        $this->db->set('trauma_plan', $trauma_plan);
        $this->db->set('oph_other_urg', $oph_other_urg);
        $this->db->set('oph_other_plan', $oph_other_plan);
        $this->db->set('oph_total', $oph_total);

        $this->db->set('cleft_urg', $cleft_urg);
        $this->db->set('cleft_plan', $cleft_plan);
        $this->db->set('plastic_other_urg', $plastic_other_urg);
        $this->db->set('plastic_other_plan', $plastic_other_plan);
        $this->db->set('plastic_total', $plastic_total);

        $this->db->set('total_urg', $total_urg);
        $this->db->set('total_plan', $total_plan);
        $this->db->set('major_urg', $major_urg);
        $this->db->set('major_plan', $major_plan);
        $this->db->set('minor_urg', $minor_urg);
        $this->db->set('minor_plan', $minor_plan);

        $this->db->where('date_surgery', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Surgery');
    }

    public function update_data2(
      $general,
      $regional,
      $local,
      $other_type
    ) {
        $this->db->set('general', $general);
        $this->db->set('regional', $regional);
        $this->db->set('local', $local);
        $this->db->set('other_type', $other_type);

        $this->db->where('date_anesthesia', $this->session->userdata('update_date'));
        $this->db->where('num_user', $this->session->userdata('num_user'));
        return $this->db->update('Anesthesia');
    }
}
