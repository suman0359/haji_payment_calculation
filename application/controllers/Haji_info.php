<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Haji_info
 *
 * @author tasfir
 */
class Haji_info extends CI_Controller {
    
    public $_notification = "";

    public function __construct() {
        parent::__construct();

        
        $this->load->library('Encrypt');
        $user_id = $this->session->userdata('user_id');
        
        if (!$this->session->userdata('user_logged')) {
        redirect('login');
        }
    }
    
    
    
    
    public function index() {
        $data = array();
        $sub_data = array();

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/haji_information/index', '', TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function add_form() {
        $data = array();
        $sub_data = array();

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/haji_information/add_form', '', TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }
    
    public function add() {
        $data = array();

        $data['haji_name'] = $this->input->post('haji_name');
        $data['haji_fathers_name'] = $this->input->post('haji_fathers_name');
        $data['haji_mothers_name'] = $this->input->post('haji_mothers_name');
        $data['haji_nationality'] = $this->input->post('haji_nationality');
        $data['haji_present_address'] = $this->input->post('haji_present_address');
        $data['haji_permanent_address'] = $this->input->post('haji_permanent_address');
        
        $dd=$this->input->post('dd');
        $mm=$this->input->post('mm');
        $yyyy=$this->input->post('yyyy');

        $data['haji_date_of_birth'] = $dd."/".$mm."/".$yyyy;

        $data['haji_national_id_no'] = $this->input->post('haji_national_id_no');
        $data['haji_passport_no'] = $this->input->post('haji_passport_no');
        $data['haji_mobile_no'] = $this->input->post('haji_mobile_no');
        $data['haji_marital_status'] = $this->input->post('marital_status');
               
        //$this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
        // $this->email_model->account_opening_email('teacher', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
        // redirect(base_url() . 'index.php?admin/teacher/', 'refresh');

        /*
         * -------Start Profile Image Upload-------------
         */
        // $config['upload_path'] = 'uploads/haji_profile_photo/';
        // $config['allowed_types'] = 'gif|jpg|png|pdf';
        // $config['max_size'] = '2048';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '768';
        // $error = array();
        // $fdata = array();
        // $this->load->library('upload', $config);
        // if (!$this->upload->do_upload('haji_profile_photo')) {
        //     $error = $this->upload->display_errors();
        // } else {
        //     $fdata = $this->upload->data();
        //     $data['haji_profile_photo'] = $config['upload_path'] . $fdata['file_name'];
        // }
        /*
         * --------End Profile Image Upload----------------
         */

        $this->load->model('Haji_info_model');

        $insert = $this->Haji_info_model->new_haji_registration($data);

        $haji_id = $this->db->insert_id();
        move_uploaded_file($_FILES['haji_profile_photo']['tmp_name'], 'uploads/haji_profile_photo/' . $haji_id . "suman" . '.jpg');

        if ($insert) {
            $msg = "Operation Successfull!!";
            $this->session->set_flashdata('success', $msg);
            redirect('haji_info');
        } else {
            $msg = "There is an error, Please try again!!";
            $this->session->set_flashdata('error', $msg);
            $this->load->view('includes/haji_information/add_form', $data);
        }
        redirect('haji_info', 'refresh');


    }

    public function edit(){

    }

}
