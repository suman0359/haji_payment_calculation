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

        $this->load->model('haji_info_model');

        $data['pilgrim_list']=$this->haji_info_model->pilgrim_list();

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

        $this->load->model('common_model');

        $sub_data['district_list'] = $this->common_model->selectAll('district');
        $sub_data['police_station_list'] = $this->common_model->selectAll('police_station');

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/haji_information/add_form', $sub_data, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }
    
    public function add() {
        $data = array();

        // echo '<pre>';
        //       print_r($_POST);
        //       exit(); 

        // $data['pilgrim_id']                         = "";
        // $data['pilgrim_type']                       = "";
        // $data['pilgrim_full_name']                  = "";
        // $data['pilgrim_name_part_one']              = "";
        // $data['pilgrim_name_part_two']              = "";
        // $data['pilgrim_name_part_three']            = "";
        // $data['pilgrim_name_part_four']             = "";
        // $data['pilgrim_father_or_husband_type']     = "";
        // $data['pilgrim_father_or_husband_name']     = "";
        // $data['pilgrim_mothers_name']               = "";
        // $data['pilgrim_date_of_birth']              = "";
        // $data['pilgrim_nationality']                = "";
        // $data['pilgrim_marital_status']             = "";
        // $data['pilgrim_gender']                     = "";
        // $data['pilgrim_educational_qualification']  = "";
        // $data['pilgrim_occupation']                 = "";
        // $data['pilgrim_position']                   = "";
        // $data['pilgrim_national_id_no']             = "";
        // $data['pilgrim_place_of_birth']             = "";
        // $data['pilgrim_tin_no_status']              = "";
        // //$data['pilgrim_tin_no_number']            = "";
        // $data['pilgrim_traveling_before_status']    = "";
        // $data['pilgrim_how_many_country_traveling'] = "";
        // $data['pilgrim_perform_hajj_before_status'] = "";
        // $data['pilgrim_perform_hajj_before']        = "";
        // $data['pilgrim_identification_mark']        = "";
        // $data['pilgrim_passport_number']            = "";
        // //$data['pilgrim_confirm_passport_number']  = "";
        // $data['pilgrim_passport_type']              = "";
        // $data['pilgrim_passport_issue_date']        = "";
        // $data['pilgrim_passport_expire_date']       = "";
        // $data['pilgrim_place_of_passport_issue']    = "";
        // $data['pilgrim_permanent_address_village']  = "";
        // $data['pilgrim_permanent_address_district'] = "";
        // $data['pilgrim_permanent_address_police_station']= "";
        // $data['pilgrim_permanent_address_post_code']= "";
        // $data['pilgrim_permanent_address_mobile_no']= "";
        // $data['pilgrim_present_address_village']    = "";
        // $data['pilgrim_present_address_district']   = "";
        // $data['pilgrim_present_address_police_station']= "";
        // $data['pilgrim_presenet_address_post_code'] = "";
        // $data['pilgrim_close_relative_name']        = "";
        // $data['pilgrim_close_relative_relation']    = "";
        // $data['pilgrim_close_relative_mobile_no_one']= "";
        // $data['pilgrim_close_relative_mobile_no_two']= "";
        // $data['pilgrim_close_relative_email']       = "";
        // $data['pilgrim_child_name']                 = "";
        // $data['pilgrim_agency_name']                = "";
        // $data['pilgrim_license_no']                 = "";
        // $data['pilgrim_package_name']               = "";
        // $data['pilgrim_package_amount']             = "";
        // $data['pilgrim_package_amount_in_word']     = "";
        // $data['pilgrim_name_of_nominee']            = "";
        // $data['pilgrim_noinee_relationship']        = "";
        // $data['pilgrim_nominee_address']            = "";
        // $data['pilgrim_family_member_id']           = "";  
        // $data['pilgrim_blood_group']                = "";

        $data['pilgrim_id'] = $this->input->post('pilgrim_id');
        $data['pilgrim_type'] = $this->input->post('pilgrim_type');
        $data['pilgrim_full_name'] = $this->input->post('pilgrim_full_name');
        $data['pilgrim_name_part_one'] = $this->input->post('pilgrim_name_part_one');
        $data['pilgrim_name_part_two'] = $this->input->post('pilgrim_name_part_two');
        $data['pilgrim_name_part_three'] = $this->input->post('pilgrim_name_part_three');
        $data['pilgrim_name_part_four'] = $this->input->post('pilgrim_name_part_four');
        $data['pilgrim_father_or_husband_type'] = $this->input->post('pilgrim_father_or_husband_type');
        $data['pilgrim_father_or_husband_name'] = $this->input->post('pilgrim_father_or_husband_name');
        $data['pilgrim_mothers_name'] = $this->input->post('pilgrim_mothers_name');
        $data['pilgrim_date_of_birth'] = $this->input->post('pilgrim_date_of_birth');
        $data['pilgrim_nationality']= $this->input->post('pilgrim_nationality');      
        $data['pilgrim_marital_status']= $this->input->post('pilgrim_marital_status');      
        $data['pilgrim_gender']= $this->input->post('pilgrim_gender');      
        $data['pilgrim_educational_qualification']= $this->input->post('pilgrim_educational_qualification');      
        $data['pilgrim_occupation']= $this->input->post('pilgrim_occupation');      
        $data['pilgrim_position']= $this->input->post('pilgrim_position');      
        $data['pilgrim_national_id_no']= $this->input->post('pilgrim_national_id_no');      
        $data['pilgrim_place_of_birth']= $this->input->post('pilgrim_place_of_birth');      
        $data['pilgrim_tin_no_status']= $this->input->post('pilgrim_tin_no_status');      
        //$data['pilgrim_tin_no_number']= $this->input->post('');      
        $data['pilgrim_traveling_before_status']= $this->input->post('traveling_before_status');      
        $data['pilgrim_how_many_country_traveling']= $this->input->post('number_of_country_traveling');      
        $data['pilgrim_perform_hajj_before_status']= $this->input->post('pilgrim_perform_hajj_before_status');      
        $data['pilgrim_perform_hajj_before']= $this->input->post('pilgrim_perform_hajj_before');      
        $data['pilgrim_identification_mark']= $this->input->post('pilgrim_identification_mark');      
        $data['pilgrim_passport_number']= $this->input->post('pilgrim_passport_number');      
        //$data['pilgrim_confirm_passport_number']= $this->input->post('pilgrim_confirm_passport_number');      
        $data['pilgrim_passport_type']= $this->input->post('pilgrim_passport_type');      
        $data['pilgrim_passport_issue_date']= $this->input->post('pilgrim_passport_issue_date');      
        $data['pilgrim_passport_expire_date']= $this->input->post('pilgrim_passport_expire_date');      
        $data['pilgrim_place_of_passport_issue']= $this->input->post('pilgrim_place_of_passport_issue');      
        $data['pilgrim_permanent_address_village']= $this->input->post('pilgrim_permanent_address_village');      
        $data['pilgrim_permanent_address_district']= $this->input->post('pilgrim_permanent_address_district');      
        $data['pilgrim_permanent_address_police_station']= $this->input->post('pilgrim_permanent_address_police_station');      
        $data['pilgrim_permanent_address_post_code']= $this->input->post('pilgrim_permanent_address_post_code');      
        $data['pilgrim_permanent_address_mobile_no']= $this->input->post('pilgrim_permanent_address_mobile_no');      
        $data['pilgrim_present_address_village']= $this->input->post('pilgrim_present_address_village');      
        $data['pilgrim_present_address_district']= $this->input->post('pilgrim_present_address_district');      
        $data['pilgrim_present_address_police_station']= $this->input->post('pilgrim_present_address_police_station');      
        $data['pilgrim_presenet_address_post_code']= $this->input->post('pilgrim_presenet_address_post_code');      
        $data['pilgrim_present_address_mobile_no']= $this->input->post('pilgrim_present_address_mobile_no');      
        $data['pilgrim_close_relative_name']= $this->input->post('pilgrim_close_relative_name');      
        $data['pilgrim_close_relative_relation']= $this->input->post('pilgrim_close_relative_relation');      
        $data['pilgrim_close_relative_mobile_no_one']= $this->input->post('pilgrim_close_relative_mobile_no_one');      
        $data['pilgrim_close_relative_mobile_no_two']= $this->input->post('pilgrim_close_relative_mobile_no_two');      
        $data['pilgrim_close_relative_email']= $this->input->post('pilgrim_close_relative_email');      
        $data['pilgrim_child_name']= $this->input->post('pilgrim_child_name');      
        $data['pilgrim_agency_name']= $this->input->post('pilgrim_agency_name');      
        $data['pilgrim_license_no']= $this->input->post('pilgrim_license_no');      
        $data['pilgrim_package_name']= $this->input->post('pilgrim_package_name');      
        $data['pilgrim_package_amount']= $this->input->post('pilgrim_package_amount');      
        $data['pilgrim_package_amount_in_word']= $this->input->post('pilgrim_package_amount_in_word');      
        $data['pilgrim_name_of_nominee']= $this->input->post('pilgrim_name_of_nominee');      
        $data['pilgrim_noinee_relationship']= $this->input->post('pilgrim_noinee_relationship');      
        $data['pilgrim_nominee_address']= $this->input->post('pilgrim_nominee_address');      
        $data['pilgrim_family_member_id']= $this->input->post('pilgrim_family_member_id');      
        $data['pilgrim_blood_group']= $this->input->post('pilgrim_blood_group'); 

        $pilgrim_health_information_of_disease = $this->input->post('pilgrim_health_information_of_disease');     

        $pilgrim_health_information_of_disease=implode(",", $pilgrim_health_information_of_disease);

        // $pilgrim_health_information_of_disease = 

        $data['pilgrim_health_information_of_disease']=  $pilgrim_health_information_of_disease  ;   
        //$data['pilgrim_health_information_of_medicine']= $this->input->post('pilgrim_health_information_of_disease');      
    

              
        

        $this->load->model('Haji_info_model');

        $insert = $this->Haji_info_model->new_haji_registration($data);

        $haji_id = $this->db->insert_id();
        move_uploaded_file($_FILES['pilgrim_profile_photo']['tmp_name'], 'uploads/haji_profile_photo/' . $haji_id . '.jpg');

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
