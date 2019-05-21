<?php
class hr_model extends CI_Model
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

    public function fetch_data(
      $doc_spe_34m,
      $doc_spe_34f,
      $doc_spe_35m,
      $doc_spe_35f,
      $doc_spe_60m,
      $doc_spe_60f,

      $doc_ge_34m,
      $doc_ge_34f,
      $doc_ge_35m,
      $doc_ge_35f,
      $doc_ge_60m,
      $doc_ge_60f,

      $nurses_34m,
      $nurses_34f,
      $nurses_35m,
      $nurses_35f,
      $nurses_60m,
      $nurses_60f,

      $midwives_34m,
      $midwives_34f,
      $midwives_35m,
      $midwives_35f,
      $midwives_60m,
      $midwives_60f,

      $lab_tech_34m,
      $lab_tech_34f,
      $lab_tech_35m,
      $lab_tech_35f,
      $lab_tech_60m,
      $lab_tech_60f,

      $dental_34m,
      $dental_34f,
      $dental_35m,
      $dental_35f,
      $dental_60m,
      $dental_60f,

      $other_34m,
      $other_34f,
      $other_35m,
      $other_35f,
      $other_60m,
      $other_60f,

      $pharma_34m,
      $pharma_34f,
      $pharma_35m,
      $pharma_35f,
      $pharma_60m,
      $pharma_60f,

      $admin_34m,
      $admin_34f,
      $admin_35m,
      $admin_35f,
      $admin_60m,
      $admin_60f,

      $doc_spe_new,
      $doc_spe_left,
      $doc_spe_vacant,

      $doc_ge_new,
      $doc_ge_left,
      $doc_ge_vacant,

      $nurses_new,
      $nurses_left,
      $nurses_vacant,

      $midwives_new,
      $midwives_left,
      $midwives_vacant,

      $lab_tech_new,
      $lab_tech_left,
      $lab_tech_vacant,

      $dental_new,
      $dental_left,
      $dental_vacant,

      $other_new,
      $other_left,
      $other_vacant,

      $pharma_new,
      $pharma_left,
      $pharma_vacant,

      $left_death,
      $left_retirement,
      $left_career,
      $left_remuneration,
      $left_other,
      $num_rapport
    ) {
        return $this->db->set(array(
          'doc_spe_34m' => $doc_spe_34m,
          'doc_spe_34f' => $doc_spe_34f,
          'doc_spe_35m' => $doc_spe_35m,
          'doc_spe_35f' => $doc_spe_35f,
          'doc_spe_60m' => $doc_spe_60m,
          'doc_spe_60f' => $doc_spe_60f,

          'doc_ge_34m' => $doc_ge_34m,
          'doc_ge_34f' => $doc_ge_34f,
          'doc_ge_35m' => $doc_ge_35m,
          'doc_ge_35f' => $doc_ge_35f,
          'doc_ge_60m' => $doc_ge_60m,
          'doc_ge_60f' => $doc_ge_60f,

          'nurses_34m' => $nurses_34m,
          'nurses_34f' => $nurses_34f,
          'nurses_35m' => $nurses_35m,
          'nurses_35f' => $nurses_35f,
          'nurses_60m' => $nurses_60m,
          'nurses_60f' => $nurses_60f,

          'midwives_34m' => $midwives_34m,
          'midwives_34f' => $midwives_34f,
          'midwives_35m' => $midwives_35m,
          'midwives_35f' => $midwives_35f,
          'midwives_60m' => $midwives_60m,
          'midwives_60f' => $midwives_60f,

          'lab_tech_34m' => $lab_tech_34m,
          'lab_tech_34f' => $lab_tech_34f,
          'lab_tech_35m' => $lab_tech_35m,
          'lab_tech_35f' => $lab_tech_35f,
          'lab_tech_60m' => $lab_tech_60m,
          'lab_tech_60f' => $lab_tech_60f,

          'dental_34m' => $dental_34m,
          'dental_34f' => $dental_34f,
          'dental_35m' => $dental_35m,
          'dental_35f' => $dental_35f,
          'dental_60m' => $dental_60m,
          'dental_60f' => $dental_60f,

          'other_34m' => $other_34m,
          'other_34f' => $other_34f,
          'other_35m' => $other_35m,
          'other_35f' => $other_35f,
          'other_60m' => $other_60m,
          'other_60f' => $other_60f,

          'pharma_34m' => $pharma_34m,
          'pharma_34f' => $pharma_34f,
          'pharma_35m' => $pharma_35m,
          'pharma_35f' => $pharma_35f,
          'pharma_60m' => $pharma_60m,
          'pharma_60f' => $pharma_60f,

          'admin_34m' => $admin_34m,
          'admin_34f' => $admin_34f,
          'admin_35m' => $admin_35m,
          'admin_35f' => $admin_35f,
          'admin_60m' => $admin_60m,
          'admin_60f' => $admin_60f,

          'doc_spe_new' => $doc_spe_new,
          'doc_spe_left' => $doc_spe_left,
          'doc_spe_vacant' => $doc_spe_vacant,

          'doc_ge_new' => $doc_ge_new,
          'doc_ge_left' => $doc_ge_left,
          'doc_ge_vacant' => $doc_ge_vacant,

          'nurses_new' => $nurses_new,
          'nurses_left' => $nurses_left,
          'nurses_vacant' => $nurses_vacant,

          'midwives_new' => $midwives_new,
          'midwives_left' => $midwives_left,
          'midwives_vacant' => $midwives_vacant,

          'lab_tech_new' => $lab_tech_new,
          'lab_tech_left' => $lab_tech_left,
          'lab_tech_vacant' => $lab_tech_vacant,

          'dental_new' => $dental_new,
          'dental_left' => $dental_left,
          'dental_vacant' => $dental_vacant,

          'other_new' => $other_new,
          'other_left' => $other_left,
          'other_vacant' => $other_vacant,

          'pharma_new' => $pharma_new,
          'pharma_left' => $pharma_left,
          'pharma_vacant' => $pharma_vacant,

          'left_death' => $left_death,
          'left_retirement' => $left_retirement,
          'left_career' => $left_career,
          'left_remuneration' => $left_remuneration,
          'left_other' => $left_other,

          'num_rapport' => $num_rapport,
        ))
            ->set('date_staff', $this->session->userdata('add_date'))
            ->insert('Staff');
    }

    public function show_table()
    {
        return $this->db->where('date_staff', $this->session->userdata('update_date'))
                        ->get('Staff')
                        ->row();
    }

    public function num_rapport()
    {
        return $this->db->where('date_rapport', $this->session->userdata('add_date'))
                      ->get('rapport')
                      ->row();
    }

    public function update_data(
      $doc_spe_34m,
      $doc_spe_34f,
      $doc_spe_35m,
      $doc_spe_35f,
      $doc_spe_60m,
      $doc_spe_60f,

      $doc_ge_34m,
      $doc_ge_34f,
      $doc_ge_35m,
      $doc_ge_35f,
      $doc_ge_60m,
      $doc_ge_60f,

      $nurses_34m,
      $nurses_34f,
      $nurses_35m,
      $nurses_35f,
      $nurses_60m,
      $nurses_60f,

      $midwives_34m,
      $midwives_34f,
      $midwives_35m,
      $midwives_35f,
      $midwives_60m,
      $midwives_60f,

      $lab_tech_34m,
      $lab_tech_34f,
      $lab_tech_35m,
      $lab_tech_35f,
      $lab_tech_60m,
      $lab_tech_60f,

      $dental_34m,
      $dental_34f,
      $dental_35m,
      $dental_35f,
      $dental_60m,
      $dental_60f,

      $other_34m,
      $other_34f,
      $other_35m,
      $other_35f,
      $other_60m,
      $other_60f,

      $pharma_34m,
      $pharma_34f,
      $pharma_35m,
      $pharma_35f,
      $pharma_60m,
      $pharma_60f,

      $admin_34m,
      $admin_34f,
      $admin_35m,
      $admin_35f,
      $admin_60m,
      $admin_60f,

      $doc_spe_new,
      $doc_spe_left,
      $doc_spe_vacant,

      $doc_ge_new,
      $doc_ge_left,
      $doc_ge_vacant,

      $nurses_new,
      $nurses_left,
      $nurses_vacant,

      $midwives_new,
      $midwives_left,
      $midwives_vacant,

      $lab_tech_new,
      $lab_tech_left,
      $lab_tech_vacant,

      $dental_new,
      $dental_left,
      $dental_vacant,

      $other_new,
      $other_left,
      $other_vacant,

      $pharma_new,
      $pharma_left,
      $pharma_vacant,

      $left_death,
      $left_retirement,
      $left_career,
      $left_remuneration,
      $left_other
    ) {
        $this->db->set('doc_spe_34m', $doc_spe_34m);
        $this->db->set('doc_spe_34f', $doc_spe_34f);
        $this->db->set('doc_spe_35m', $doc_spe_35m);
        $this->db->set('doc_spe_35f', $doc_spe_35f);
        $this->db->set('doc_spe_60m', $doc_spe_60m);
        $this->db->set('doc_spe_60f', $doc_spe_60f);

        $this->db->set('doc_ge_34m', $doc_ge_34m);
        $this->db->set('doc_ge_34f', $doc_ge_34f);
        $this->db->set('doc_ge_35m', $doc_ge_35m);
        $this->db->set('doc_ge_35f', $doc_ge_35f);
        $this->db->set('doc_ge_60m', $doc_ge_60m);
        $this->db->set('doc_ge_60f', $doc_ge_60f);

        $this->db->set('nurses_34m', $nurses_34m);
        $this->db->set('nurses_34f', $nurses_34f);
        $this->db->set('nurses_35m', $nurses_35m);
        $this->db->set('nurses_35f', $nurses_35f);
        $this->db->set('nurses_60m', $nurses_60m);
        $this->db->set('nurses_60f', $nurses_60f);

        $this->db->set('midwives_34m', $midwives_34m);
        $this->db->set('midwives_34f', $midwives_34f);
        $this->db->set('midwives_35m', $midwives_35m);
        $this->db->set('midwives_35f', $midwives_35f);
        $this->db->set('midwives_60m', $midwives_60m);
        $this->db->set('midwives_60f', $midwives_60f);

        $this->db->set('lab_tech_34m', $lab_tech_34m);
        $this->db->set('lab_tech_34f', $lab_tech_34f);
        $this->db->set('lab_tech_35m', $lab_tech_35m);
        $this->db->set('lab_tech_35f', $lab_tech_35f);
        $this->db->set('lab_tech_60m', $lab_tech_60m);
        $this->db->set('lab_tech_60f', $lab_tech_60f);

        $this->db->set('dental_34m', $dental_34m);
        $this->db->set('dental_34f', $dental_34f);
        $this->db->set('dental_35m', $dental_35m);
        $this->db->set('dental_35f', $dental_35f);
        $this->db->set('dental_60m', $dental_60m);
        $this->db->set('dental_60f', $dental_60f);

        $this->db->set('other_34m', $other_34m);
        $this->db->set('other_34f', $other_34f);
        $this->db->set('other_35m', $other_35m);
        $this->db->set('other_35f', $other_35f);
        $this->db->set('other_60m', $other_60m);
        $this->db->set('other_60f', $other_60f);

        $this->db->set('pharma_34m', $pharma_34m);
        $this->db->set('pharma_34f', $pharma_34f);
        $this->db->set('pharma_35m', $pharma_35m);
        $this->db->set('pharma_35f', $pharma_35f);
        $this->db->set('pharma_60m', $pharma_60m);
        $this->db->set('pharma_60f', $pharma_60f);

        $this->db->set('admin_34m', $admin_34m);
        $this->db->set('admin_34f', $admin_34f);
        $this->db->set('admin_35m', $admin_35m);
        $this->db->set('admin_35f', $admin_35f);
        $this->db->set('admin_60m', $admin_60m);
        $this->db->set('admin_60f', $admin_60f);

        $this->db->set('doc_spe_new', $doc_spe_new);
        $this->db->set('doc_spe_left', $doc_spe_left);
        $this->db->set('doc_spe_vacant', $doc_spe_vacant);

        $this->db->set('doc_ge_new', $doc_ge_new);
        $this->db->set('doc_ge_left', $doc_ge_left);
        $this->db->set('doc_ge_vacant', $doc_ge_vacant);

        $this->db->set('nurses_new', $nurses_new);
        $this->db->set('nurses_left', $nurses_left);
        $this->db->set('nurses_vacant', $nurses_vacant);

        $this->db->set('midwives_new', $midwives_new);
        $this->db->set('midwives_left', $midwives_left);
        $this->db->set('midwives_vacant', $midwives_vacant);

        $this->db->set('lab_tech_new', $lab_tech_new);
        $this->db->set('lab_tech_left', $lab_tech_left);
        $this->db->set('lab_tech_vacant', $lab_tech_vacant);

        $this->db->set('dental_new', $dental_new);
        $this->db->set('dental_left', $dental_left);
        $this->db->set('dental_vacant', $dental_vacant);

        $this->db->set('other_new', $other_new);
        $this->db->set('other_left', $other_left);
        $this->db->set('other_vacant', $other_vacant);

        $this->db->set('pharma_new', $pharma_new);
        $this->db->set('pharma_left', $pharma_left);
        $this->db->set('pharma_vacant', $pharma_vacant);

        $this->db->set('left_death', $left_death);
        $this->db->set('left_retirement', $left_retirement);
        $this->db->set('left_career', $left_career);
        $this->db->set('left_remuneration', $left_remuneration);
        $this->db->set('left_other', $left_other);

        $this->db->where('date_staff', $this->session->userdata('update_date'));
        return $this->db->update('Staff');
    }
}
