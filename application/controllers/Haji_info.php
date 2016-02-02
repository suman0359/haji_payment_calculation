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

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/haji_information/index', $data, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function add_form() {
        $data = array();
        $sub_data = array();

        // load Breadcrumbs
        $this->load->library('breadcrumbcomponent');
        $this->breadcrumbcomponent->add('Home', base_url());
        $this->breadcrumbcomponent->add('Tutorials', base_url().'tutorials');       
        $this->breadcrumbcomponent->add('Spring Tutorial', base_url().'tutorials/spring-tutorials');

        $sub_data['commission_agent_list'] = $this->common_model->selectAll('commission_agent');
        
        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/haji_information/add_form', $sub_data, TRUE);
        //$data['main_content'] = $this->load->view('includes/haji_information/add_form_old', $sub_data, TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    
    public function add_haji_information() {
        $data = array();
                
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
        //$data['commission_amount']          = $this->input->post('commission_amount');
        $data['total_amount']               = $this->input->post('total_amount');

        // $this->load->library('form_validation');


        // $this->form_validation->set_rules('haji_name', 'required', 'address');
        // $this->form_validation->set_rules('subject_name', 'required', 'address');
        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view('books/form', $data);
        // }else{

        // }
        
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

        $start_date = date('Y-m-d');
        $end_date = date('Y-m-d');

        $start_date = $this->input->post('start_date');

        $end_date = $this->input->post('end_date');

        @list($m,$d,$y) = explode('/',$start_date);    // split on underscore.
        $start_date = $y.'-'.$m.'-'.$d;           // glue the pieces.

        @list($m,$d,$y) = explode('/',$end_date);    // split on underscore.
        $end_date = $y.'-'.$m.'-'.$d;  

        if(empty($start_date) or empty($end_date)){
            $start_date = date('Y-m-d');
            $end_date = date('Y-m-d');
        }

        $hajj_contact_and_due_statement['hajj_contact_and_due_statement'] = $this->haji_info_model->hajj_contact_and_due_statement('transactions', $start_date, $end_date);


        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/haji_information/hajj_contact_and_due_statement', $hajj_contact_and_due_statement, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    /* ------------------------------------------------------------------------------------------------- */

    
    
//     public function add() {
//         $data = array();

//         // echo '<pre>';
//         //       print_r($_POST);
//         //       exit(); 

//         $data['pilgrim_id']                         = "";
//         $data['pilgrim_type']                       = "";
//         $data['pilgrim_full_name']                  = "";
//         $data['pilgrim_name_part_one']              = "";
//         $data['pilgrim_name_part_two']              = "";
//         $data['pilgrim_name_part_three']            = "";
//         $data['pilgrim_name_part_four']             = "";
//         $data['pilgrim_father_or_husband_type']     = "";
//         $data['pilgrim_father_or_husband_name']     = "";
//         $data['pilgrim_mothers_name']               = "";
//         $data['pilgrim_date_of_birth']              = "";
//         $data['pilgrim_nationality']                = "";
//         $data['pilgrim_marital_status']             = "";
//         $data['pilgrim_gender']                     = "";
//         $data['pilgrim_educational_qualification']  = "";
//         $data['pilgrim_occupation']                 = "";
//         $data['pilgrim_position']                   = "";
//         $data['pilgrim_national_id_no']             = "";
//         $data['pilgrim_place_of_birth']             = "";
//         $data['pilgrim_tin_no_status']              = "";
//         //$data['pilgrim_tin_no_number']            = "";
//         $data['pilgrim_traveling_before_status']    = "";
//         $data['pilgrim_how_many_country_traveling'] = "";
//         $data['pilgrim_perform_hajj_before_status'] = "";
//         $data['pilgrim_perform_hajj_before']        = "";
//         $data['pilgrim_identification_mark']        = "";
//         $data['pilgrim_passport_number']            = "";
//         //$data['pilgrim_confirm_passport_number']  = "";
//         $data['pilgrim_passport_type']              = "";
//         $data['pilgrim_passport_issue_date']        = "";
//         $data['pilgrim_passport_expire_date']       = "";
//         $data['pilgrim_place_of_passport_issue']    = "";
//         $data['pilgrim_permanent_address_village']  = "";
//         $data['pilgrim_permanent_address_district'] = "";
//         $data['pilgrim_permanent_address_police_station']= "";
//         $data['pilgrim_permanent_address_post_code']= "";
//         $data['pilgrim_permanent_address_mobile_no']= "";
//         $data['pilgrim_present_address_village']    = "";
//         $data['pilgrim_present_address_district']   = "";
//         $data['pilgrim_present_address_police_station']= "";
//         $data['pilgrim_presenet_address_post_code'] = "";
//         $data['pilgrim_close_relative_name']        = "";
//         $data['pilgrim_close_relative_relation']    = "";
//         $data['pilgrim_close_relative_mobile_no_one']= "";
//         $data['pilgrim_close_relative_mobile_no_two']= "";
//         $data['pilgrim_close_relative_email']       = "";
//         $data['pilgrim_child_name']                 = "";
//         $data['pilgrim_agency_name']                = "";
//         $data['pilgrim_license_no']                 = "";
//         $data['pilgrim_package_name']               = "";
//         $data['pilgrim_package_amount']             = "";
//         $data['pilgrim_package_amount_in_word']     = "";
//         $data['pilgrim_name_of_nominee']            = "";
//         $data['pilgrim_noinee_relationship']        = "";
//         $data['pilgrim_nominee_address']            = "";
//         $data['pilgrim_family_member_id']           = "";  
//         $data['pilgrim_blood_group']                = "";

//         $data['pilgrim_id'] = $this->input->post('pilgrim_id');
//         $data['pilgrim_type'] = $this->input->post('pilgrim_type');
//         $data['pilgrim_full_name'] = $this->input->post('pilgrim_full_name');
//         $data['pilgrim_name_part_one'] = $this->input->post('pilgrim_name_part_one');
//         $data['pilgrim_name_part_two'] = $this->input->post('pilgrim_name_part_two');
//         $data['pilgrim_name_part_three'] = $this->input->post('pilgrim_name_part_three');
//         $data['pilgrim_name_part_four'] = $this->input->post('pilgrim_name_part_four');
//         $data['pilgrim_father_or_husband_type'] = $this->input->post('pilgrim_father_or_husband_type');
//         $data['pilgrim_father_or_husband_name'] = $this->input->post('pilgrim_father_or_husband_name');
//         $data['pilgrim_mothers_name'] = $this->input->post('pilgrim_mothers_name');
//         $data['pilgrim_date_of_birth'] = $this->input->post('pilgrim_date_of_birth');
//         $data['pilgrim_nationality']= $this->input->post('pilgrim_nationality');      
//         $data['pilgrim_marital_status']= $this->input->post('pilgrim_marital_status');      
//         $data['pilgrim_gender']= $this->input->post('pilgrim_gender');      
//         $data['pilgrim_educational_qualification']= $this->input->post('pilgrim_educational_qualification');      
//         $data['pilgrim_occupation']= $this->input->post('pilgrim_occupation');      
//         $data['pilgrim_position']= $this->input->post('pilgrim_position');      
//         $data['pilgrim_national_id_no']= $this->input->post('pilgrim_national_id_no');      
//         $data['pilgrim_place_of_birth']= $this->input->post('pilgrim_place_of_birth');      
//         $data['pilgrim_tin_no_status']= $this->input->post('pilgrim_tin_no_status');      
//         //$data['pilgrim_tin_no_number']= $this->input->post('');      
//         $data['pilgrim_traveling_before_status']= $this->input->post('traveling_before_status');      
//         $data['pilgrim_how_many_country_traveling']= $this->input->post('number_of_country_traveling');      
//         $data['pilgrim_perform_hajj_before_status']= $this->input->post('pilgrim_perform_hajj_before_status');      
//         $data['pilgrim_perform_hajj_before']= $this->input->post('pilgrim_perform_hajj_before');      
//         $data['pilgrim_identification_mark']= $this->input->post('pilgrim_identification_mark');      
//         $data['pilgrim_passport_number']= $this->input->post('pilgrim_passport_number');      
//         //$data['pilgrim_confirm_passport_number']= $this->input->post('pilgrim_confirm_passport_number');      
//         $data['pilgrim_passport_type']= $this->input->post('pilgrim_passport_type');      
//         $data['pilgrim_passport_issue_date']= $this->input->post('pilgrim_passport_issue_date');      
//         $data['pilgrim_passport_expire_date']= $this->input->post('pilgrim_passport_expire_date');      
//         $data['pilgrim_place_of_passport_issue']= $this->input->post('pilgrim_place_of_passport_issue');      
//         $data['pilgrim_permanent_address_village']= $this->input->post('pilgrim_permanent_address_village');      
//         $data['pilgrim_permanent_address_district']= $this->input->post('pilgrim_permanent_address_district');      
//         $data['pilgrim_permanent_address_police_station']= $this->input->post('pilgrim_permanent_address_police_station');      
//         $data['pilgrim_permanent_address_post_code']= $this->input->post('pilgrim_permanent_address_post_code');      
//         $data['pilgrim_permanent_address_mobile_no']= $this->input->post('pilgrim_permanent_address_mobile_no');      
//         $data['pilgrim_present_address_village']= $this->input->post('pilgrim_present_address_village');      
//         $data['pilgrim_present_address_district']= $this->input->post('pilgrim_present_address_district');      
//         $data['pilgrim_present_address_police_station']= $this->input->post('pilgrim_present_address_police_station');      
//         $data['pilgrim_presenet_address_post_code']= $this->input->post('pilgrim_presenet_address_post_code');      
//         $data['pilgrim_present_address_mobile_no']= $this->input->post('pilgrim_present_address_mobile_no');      
//         $data['pilgrim_close_relative_name']= $this->input->post('pilgrim_close_relative_name');      
//         $data['pilgrim_close_relative_relation']= $this->input->post('pilgrim_close_relative_relation');      
//         $data['pilgrim_close_relative_mobile_no_one']= $this->input->post('pilgrim_close_relative_mobile_no_one');      
//         $data['pilgrim_close_relative_mobile_no_two']= $this->input->post('pilgrim_close_relative_mobile_no_two');      
//         $data['pilgrim_close_relative_email']= $this->input->post('pilgrim_close_relative_email');      
//         $data['pilgrim_child_name']= $this->input->post('pilgrim_child_name');      
//         $data['pilgrim_agency_name']= $this->input->post('pilgrim_agency_name');      
//         $data['pilgrim_license_no']= $this->input->post('pilgrim_license_no');      
//         $data['pilgrim_package_name']= $this->input->post('pilgrim_package_name');      
//         $data['pilgrim_package_amount']= $this->input->post('pilgrim_package_amount');      
//         $data['pilgrim_package_amount_in_word']= $this->input->post('pilgrim_package_amount_in_word');      
//         $data['pilgrim_name_of_nominee']= $this->input->post('pilgrim_name_of_nominee');      
//         $data['pilgrim_noinee_relationship']= $this->input->post('pilgrim_noinee_relationship');      
//         $data['pilgrim_nominee_address']= $this->input->post('pilgrim_nominee_address');      
//         $data['pilgrim_family_member_id']= $this->input->post('pilgrim_family_member_id');      
//         $data['pilgrim_blood_group']= $this->input->post('pilgrim_blood_group'); 

//         $pilgrim_health_information_of_disease = $this->input->post('pilgrim_health_information_of_disease');     

//         $pilgrim_health_information_of_disease=implode(",", $pilgrim_health_information_of_disease);

//         // $pilgrim_health_information_of_disease = 

//         $data['pilgrim_health_information_of_disease']=  $pilgrim_health_information_of_disease  ;   
//         //$data['pilgrim_health_information_of_medicine']= $this->input->post('pilgrim_health_information_of_disease');      
    

              
        

//         $this->load->model('Haji_info_model');

//         $insert = $this->Haji_info_model->new_haji_registration($data);

//         $haji_id = $this->db->insert_id();
//         move_uploaded_file($_FILES['pilgrim_profile_photo']['tmp_name'], 'uploads/haji_profile_photo/' . $haji_id . '.jpg');

//         if ($insert) {
//             $msg = "Operation Successfull!!";
//             $this->session->set_flashdata('success', $msg);
//             redirect('haji_info');
//         } else {
//             $msg = "There is an error, Please try again!!";
//             $this->session->set_flashdata('error', $msg);
//             $this->load->view('includes/haji_information/add_form', $data);
//         }
//         redirect('haji_info', 'refresh');


//     }

//     public function edit(){

//     }
    
    public function delete_haji($id){
        $this->load->model('common_model');
        //$file = "C:/xampp/htdocs/haji_payment_calculation/uploads/haji_profile_photo/".$id.".jpg";
        $file = "uploads/haji_profile_photo/".$id.".jpg";

        // echo '<pre>';
        // print_r($file);
        // exit();

        unlink($file);
        $this->common_model->delete('haji_information', array('id' => $id));

        $msg = "Successfully Deleted Selected Haji Information";
        $this->session->set_flashdata('success', $msg);

        redirect('haji_info');
    }

 }
