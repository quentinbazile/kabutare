<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        $this->load->model('home_model');
        if ($this->session->userdata('num_user') != '') {
            $this->fetch();
        } else {
            redirect('login', 'refresh');
        }
    }

    public function logout()
    {
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            $this->session->unset_userdata($key);
        }
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }

    public function changePassword()
    {
        $this->load->library('form_validation');
        $this->load->model('home_model');

        $this->form_validation->set_rules('oldpass', 'old password', 'callback_password_check');
        $this->form_validation->set_rules('newpass', 'new password', 'required');
        $this->form_validation->set_rules('passconf', 'confirm password', 'required|matches[newpass]');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == false) {
            $data['dates'] = $this->home_model->show_dates();
            $data['dates_surgery'] = $this->home_model->show_dates_surgery();
            $data['dates_im'] = $this->home_model->show_dates_im();
            $data['dates_fp'] = $this->home_model->show_dates_fp();
            $data['dates_pharm'] = $this->home_model->show_dates_pharm();
            $data['dates_hr'] = $this->home_model->show_dates_hr();
            $data['dates_lab'] = $this->home_model->show_dates_lab();
            $this->load->view('home_view', $data);
        } else {
            $id = $this->session->userdata('num_user');
            $newpass = $this->input->post('newpass');
            $this->home_model->update_user($id, array('password' => $newpass));
            $this->logout();
        }
    }

    public function password_check($oldpass)
    {
        $this->load->model('home_model');
        $id = $this->session->userdata('num_user');
        $user = $this->home_model->get_user($id);
        if ($user->password !== $oldpass) {
            $this->form_validation->set_message('password_check', 'The {field} does not match');
            return false;
        }
        return true;
    }

    public function fetch()
    {
        $this->load->library('form_validation');

        if (isset($_POST['btn_add'])) {
            $this->form_validation->set_rules('add', '"add"', 'required');
            if ($this->form_validation->run()) {
                $add = $this->input->post('add');
                $this->session->set_userdata('add_date', $add);
                if ($this->home_model->check_service('ophthalmology')) {
                    redirect('ophthalmology', 'refresh');
                }
                if ($this->home_model->check_service('stomatology')) {
                    redirect('stomatology', 'refresh');
                }
                if ($this->home_model->check_service('mental_health')) {
                    redirect('mental_health', 'refresh');
                }
                if ($this->home_model->check_service('gbv')) {
                    redirect('gbv', 'refresh');
                }
                if ($this->home_model->check_service('pregnant_woman')) {
                    redirect('pregnant_woman', 'refresh');
                }
                if ($this->home_model->check_service('minor_surgery')) {
                    redirect('minor_surgery', 'refresh');
                }
                if ($this->home_model->check_service('operating_room')) {
                    redirect('operating_room', 'refresh');
                }
                if ($this->home_model->check_service('emergency')) {
                    redirect('emergency', 'refresh');
                }
                if ($this->home_model->check_service('internal_medicine')) {
                    redirect('internal_medicine', 'refresh');
                }
                if ($this->home_model->check_service('neonatology')) {
                    redirect('neonatology', 'refresh');
                }
                if ($this->home_model->check_service('pediatrics')) {
                    redirect('pediatrics', 'refresh');
                }
                if ($this->home_model->check_service('surgery')) {
                    redirect('surgery', 'refresh');
                }
                if ($this->home_model->check_service('family_planning')) {
                    redirect('family_planning', 'refresh');
                }
                if ($this->home_model->check_service('kinesitherapy')) {
                    redirect('kinesitherapy', 'refresh');
                }
                if ($this->home_model->check_service('intensive_care')) {
                    redirect('intensive_care', 'refresh');
                }
                if ($this->home_model->check_service('nut_rehab')) {
                    redirect('nut_rehab', 'refresh');
                }
                if ($this->home_model->check_service('pharmacy')) {
                    redirect('pharmacy', 'refresh');
                }
                if ($this->home_model->check_service('opd')) {
                    redirect('opd', 'refresh');
                }
                if ($this->home_model->check_service('ncds')) {
                    redirect('ncds', 'refresh');
                }
                if ($this->home_model->check_service('hr')) {
                    redirect('hr', 'refresh');
                }
                if ($this->home_model->check_service('gynecology')) {
                    redirect('gynecology_obstetrics', 'refresh');
                }
                if ($this->home_model->check_service('laboratory')) {
                    redirect('laboratory', 'refresh');
                }
            }
        } elseif (isset($_POST['btn_update'])) {
            $this->form_validation->set_rules('update', '"update"', 'required');
            if ($this->form_validation->run()) {
                $update = $this->input->post('update');
                $this->session->set_userdata('update_date', $update);
                if ($this->home_model->check_service('ophthalmology')) {
                    redirect('ophthalmology_update', 'refresh');
                }
                if ($this->home_model->check_service('stomatology')) {
                    redirect('stomatology_update', 'refresh');
                }
                if ($this->home_model->check_service('mental_health')) {
                    redirect('mental_health_update', 'refresh');
                }
                if ($this->home_model->check_service('gbv')) {
                    redirect('gbv_update', 'refresh');
                }
                if ($this->home_model->check_service('pregnant_woman')) {
                    redirect('pregnant_woman_update', 'refresh');
                }
                if ($this->home_model->check_service('minor_surgery')) {
                    redirect('minor_surgery_update', 'refresh');
                }
                if ($this->home_model->check_service('operating_room')) {
                    redirect('operating_room_update', 'refresh');
                }
                if ($this->home_model->check_service('emergency')) {
                    redirect('emergency_update', 'refresh');
                }
                if ($this->home_model->check_service('internal_medicine')) {
                    redirect('internal_medicine_update', 'refresh');
                }
                if ($this->home_model->check_service('neonatology')) {
                    redirect('neonatology_update', 'refresh');
                }
                if ($this->home_model->check_service('pediatrics')) {
                    redirect('pediatrics_update', 'refresh');
                }
                if ($this->home_model->check_service('surgery')) {
                    redirect('surgery_update', 'refresh');
                }
                if ($this->home_model->check_service('family_planning')) {
                    redirect('family_planning_update', 'refresh');
                }
                if ($this->home_model->check_service('kinesitherapy')) {
                    redirect('kinesitherapy_update', 'refresh');
                }
                if ($this->home_model->check_service('intensive_care')) {
                    redirect('intensive_care_update', 'refresh');
                }
                if ($this->home_model->check_service('nut_rehab')) {
                    redirect('nut_rehab_update', 'refresh');
                }
                if ($this->home_model->check_service('pharmacy')) {
                    redirect('pharmacy_update', 'refresh');
                }
                if ($this->home_model->check_service('opd')) {
                    redirect('opd_update', 'refresh');
                }
                if ($this->home_model->check_service('ncds')) {
                    redirect('ncds_update', 'refresh');
                }
                if ($this->home_model->check_service('hr')) {
                    redirect('hr_update', 'refresh');
                }
                if ($this->home_model->check_service('gynecology')) {
                    redirect('gynecology_obstetrics_update', 'refresh');
                }
                if ($this->home_model->check_service('laboratory')) {
                    redirect('laboratory_update', 'refresh');
                }
            }
        } else {
            $data['dates'] = $this->home_model->show_dates();
            $data['dates_surgery'] = $this->home_model->show_dates_surgery();
            $data['dates_im'] = $this->home_model->show_dates_im();
            $data['dates_fp'] = $this->home_model->show_dates_fp();
            $data['dates_pharm'] = $this->home_model->show_dates_pharm();
            $data['dates_hr'] = $this->home_model->show_dates_hr();
            $data['dates_lab'] = $this->home_model->show_dates_lab();
            $this->load->view('home_view', $data);
        }
    }
}
