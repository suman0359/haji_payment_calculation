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
        $data['hajj_year']                  = $this->input->post('hajj_year');
        if ($data['hajj_year']!=NULL && (strlen($data['hajj_year'])==4)) {
            
            $haji_id_last=$this->common_model->getLastRow('haji_information');
            $haji_id=$haji_id_last->haji_id;
            if($haji_id_last ==TRUE){
                $remove_dash = explode("-",$haji_id);
                $join=$remove_dash[0].$remove_dash[1];
                $r = str_split($join, 4);
                
                $id =  $r[2];
                $result=preg_replace('/\s+/', '', $id);
                $result= $result+1;
                
                $hajj_year=$this->input->post('hajj_year');
                $license_no="0715";
                $haji_id=sprintf('%03d', $result);

                $haji_id=$hajj_year."-".$license_no.$haji_id;
                               
            }else{
                $hajj_year=$this->input->post('hajj_year');
                $license_no="0715";

                $haji_id=$hajj_year."-".$license_no.'001';
            }
        }else{
            $msg = "Hajj Year is not Correct or Empty";
            $this->session->set_flashdata('error', $msg);

            redirect($_SERVER["HTTP_REFERER"]);
            
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

        // SMS API Inegration 
        if($id!=NULL){
            try
            {
                
            $userName = "01911198784";
            $userPassword = "01911198784";
            $mobileNumber = $data['haji_mobile'];  //"01730869866";
            $smsText = "Assalamu Alaikum, \n Mr. ".$data['haji_name']."\n You Are Successfully Enlisted in Century Aviation (HL-715). Your Haji Id is $haji_id \n Alhamdulillah";
            $maskName = "Century0715";
            $campaignName = "Century0715";

            $soapClient = new SoapClient("https://api2.onnorokomSMS.com/sendSMS.asmx?wsdl"); 
            $paramArray = array(
            'userName'=>$userName,
            'userPassword'=>$userPassword, 'mobileNumber'=> $mobileNumber, 'smsText'=>$smsText, 'type'=>"TEXT",
            'maskName'=> $maskName, 'campaignName'=>$campaignName,
            );
          
            
            $value = $soapClient->__call("OneToOne", array($paramArray));
            }
            catch (Exception $e) {
            echo $e;
            }
        }
        // *************************

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

        //unlink($file);
        //$this->common_model->delete('haji_information', array('id' => $id));

        $this->common_model->change_status_unpublished('haji_information', array('id' => $id));

        $msg = "Successfully Deleted Selected Haji Information";
        $this->session->set_flashdata('success', $msg);

        redirect('haji_info');
    }

    public function set_contact_amount($haji_id){
        $data = array();
        $sub_data = array();

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('haji_info'), 'page' => 'Haji Info'), array('link' => '#', 'page' => 'Edit Haji Information'));

        $sub_data['commission_agent_list'] = $this->common_model->selectAll('commission_agent');
        $sub_data['haji_information'] = $this->common_model->getInfo('haji_information', array('id' => $haji_id));

        $data['header']         = $this->load->view('common/header', '', TRUE);
        $data['sidebar']        = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']     = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']   = $this->load->view('includes/haji_information/contact_amount_form', $sub_data, TRUE);
        $data['footer']         = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_haji_contact_amount(){
        $data = array();

        $data['haji_id']                = $this->input->post('haji_id');
        $data['amount']                 = $this->input->post('total_amount');
        $data['hajj_year']              = $this->input->post('hajj_year');

        $data['date']                   = date('Y-m-d');
        $data['entry_by']               = $this->session->userdata('uid');

        $this->load->model('haji_info_model');
        $check_hajj_year= $this->haji_info_model->check_hajj_year($data['haji_id'], $data['hajj_year']);
        
        
        if ($check_hajj_year!=TRUE) {
            $this->common_model->insert('tbl_contact_amount', $data);

            $msg = "Successfully Set Haji Contact Amount Information";
            $this->session->set_flashdata('success', $msg);

            redirect('haji_info');
        }elseif ($check_hajj_year!=FALSE) {
            $msg = "You Are Already Set Contact Amount with This User and Year";
            $this->session->set_flashdata('error', $msg);

            redirect('haji_info');
        }
                
    }

 }
