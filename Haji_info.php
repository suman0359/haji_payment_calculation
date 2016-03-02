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

        $this->load->model('common_model');
        $this->load->model('haji_info_model');
        $this->load->library('Encrypt');
        $user_id = $this->session->userdata('user_id');
        
        if (!$this->session->userdata('user_logged')) {
        redirect('login');
        }
    }
    
    public function index() {
        $data = array();
        $sub_data = array();

        $data['haji_information']=$this->common_model->selectAll('haji_information');

        $data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('haji_info'), 'page' => 'Hajji Info'));

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/haji_information/index', $data, TRUE);

        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function add_form() {

        $sub_data['commission_agent_list'] = $this->common_model->selectAll('commission_agent');
        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('haji_info'), 'page' => 'Haji Info'), array('link' => '#', 'page' => 'Add New Haji Form'));
        
        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/haji_information/add_form', $sub_data, TRUE);

        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    
    public function add_haji_information() {

        $haji_id_last=$this->common_model->getLastRow('haji_information');

        if($haji_id_last ==TRUE){
            $r = explode("-",$haji_id_last->haji_id);
        
            $haji_id_last_sum = $r[1]+1;
            $haji_id = "HID-000".$haji_id_last_sum;
        }else{
            $haji_id = "HID-000"."1";
        }
        
        $data['haji_id']                    = $haji_id;
        $data['haji_name']                  = $this->input->post('haji_name');
        $data['haji_passport']              = $this->input->post('haji_passport');
        $data['haji_mobile']                = $this->input->post('haji_mobile');
        $data['haji_address']               = $this->input->post('haji_address');
        $data['hajj_year']                  = $this->input->post('hajj_year');
        $data['commission_agent_id']        = $this->input->post('commission_agent_id');

        $data['total_amount']               = $this->input->post('total_amount');
        
        $this->common_model->insert('haji_information',$data);

        $id = $this->db->insert_id();
        move_uploaded_file($_FILES['profile_photo']['tmp_name'], 'uploads/haji_profile_photo/' . $id . '.jpg');

        $msg = "Successfully Added New Haji Information";
        $this->session->set_flashdata('success', $msg);

        redirect('haji_info');
    }

    public function edit_form($id) {
        $data = array();
        $sub_data = array();

        $sub_data['haji_information'] = $this->common_model->getInfo('haji_information', array('id' => $id));
        $sub_data['commission_agent_list'] = $this->common_model->selectAll('commission_agent');

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('haji_info'), 'page' => 'Haji Info'), array('link' => '#', 'page' => 'Edit Haji Information'));

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/haji_information/edit_form', $sub_data, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function update_haji_information() {
        $id = $this->input->post('id');
        $data = array();

        //$data['haji_id']                    = $this->input->post('haji_id');
        $data['haji_name']                  = $this->input->post('haji_name');
        $data['haji_passport']              = $this->input->post('haji_passport');
        $data['haji_mobile']                = $this->input->post('haji_mobile');
        $data['haji_address']               = $this->input->post('haji_address');
        $data['hajj_year']                  = $this->input->post('hajj_year');
        $data['commission_agent_id']        = $this->input->post('commission_agent_id');

        $data['commission_amount']          = $this->input->post('commission_amount');
        $data['total_amount']               = $this->input->post('total_amount');

        move_uploaded_file($_FILES['profile_photo']['tmp_name'], 'uploads/haji_profile_photo/' . $id . '.jpg');

        $this->common_model->update('haji_information', $data, array('id' => $id));

        $msg = "Successfully Updated Your Selected Haji Information";
        $this->session->set_flashdata('success', $msg);

        redirect('haji_info');
    }


    public function hajj_contact_and_due_statement(){
        $data = array();

        $select_year = $this->input->post('select_year');

        $start_date = $this->input->post('start_date');

        $end_date = $this->input->post('end_date');


        $hajj_contact_and_due_statement['hajj_contact_and_due_statement'] = $this->haji_info_model->hajj_contact_and_due_statement('haji_information', array('hajj_year' => $select_year));

        $hajj_contact_and_due_statement['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('haji_info'), 'page' => 'Hajji Info'), array('link' => '#', 'page' => 'Hajj Contact And Due Statement'));

        $data['header']         = $this->load->view('common/header', '', TRUE);
        $data['sidebar']        = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']     = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']   = $this->load->view('includes/haji_information/hajj_contact_and_due_statement', $hajj_contact_and_due_statement, TRUE);
        $data['footer']         = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    
    public function delete_haji($id){
        $this->load->model('common_model');
        
        $file = "uploads/haji_profile_photo/".$id.".jpg";

        unlink($file);
        $this->common_model->delete('haji_information', array('id' => $id));

        $msg = "Successfully Deleted Selected Haji Information";
        $this->session->set_flashdata('success', $msg);

        redirect('haji_info');
    }

 }
