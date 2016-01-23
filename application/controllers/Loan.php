<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loan extends CI_Controller {

	public $_notification = "";

    public function __construct() {
        parent::__construct();

        $this->load->model('common_model');

        // load Breadcrumbs
        $this->load->library('breadcrumbs');

        $this->load->library('Encrypt');
        $user_id = $this->session->userdata('user_id');
        
        if (!$this->session->userdata('user_logged')) {
        redirect('login');
        }
    }

	
	public function index(){
		$data = array();

		$data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/user_list', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

		$this->load->view('master_dashboard', $data);
	}

    public function user_list(){
        $data = array();

        // add breadcrumbs
        $this->breadcrumbs->push('Loan', '/loan');
        $this->breadcrumbs->push('User List', '/loan/user_list');

        

        $data['loan_user_list']= $this->common_model->selectAll('loan_information'); 
        
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/loan_user_index', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function add_new_user(){
        $data = array();

        // load Breadcrumbs
        $this->load->library('breadcrumbcomponent');
        
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/loan_user_add_form', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_new_user(){
        $data = array();


        $data['full_name']                  = $this->input->post('full_name');
        $data['email_address']              = $this->input->post('email_address');
        $data['mobile_number']              = $this->input->post('mobile_number');
        $data['permanent_address']          = $this->input->post('permanent_address');
        $data['present_address']            = $this->input->post('present_address');
        $data['ocupation']                  = $this->input->post('ocupation');
        $data['company_name']               = $this->input->post('company_name');
        $data['company_address']            = $this->input->post('company_address');
        $data['national_id_number']         = $this->input->post('national_id_number');

        //echo '<pre>';
        //print_r($_FILES['profile_photo']['tmp_name']);
        //exit();

        $this->common_model->insert('loan_information',$data);

        $id = $this->db->insert_id();
        $temp_path = $_FILES['profile_photo']['tmp_name'];
        $upload_path = 'uploads/loan_user_photo/' . $id . '.jpg';
        $thumb_path = 'uploads/loan_user_photo/thumbs/'. $id . '.jpg';

        
        move_uploaded_file($temp_path, $upload_path);
        copy($upload_path, $thumb_path);

        //echo '<pre>'; print_r(); exit();

        // $config['image_library'] = 'gd2';
        // $config['source_image'] = 'uploads/loan_user_photo/'.$id.'thumbs'.'.jpg';
        // $config['upload_path'] = 'uploads/loan_user_photo/';
        // $config['allowed_types'] = 'gif|jpg|png|pdf';
        // $config['create_thumb'] = TRUE;
        // $config['max_size'] = '2048';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '768';
        // $error = array();
        // $fdata = array();
        // $this->load->library('upload', $config);
        // $this->load->library('image_lib', $config);

        // $this->image_lib->resize();

        // $this->image_lib->initialize($config);

        // if (!$this->upload->do_upload('profile_photo')) {
        //     $error = $this->upload->display_errors();
        //     exit();
        // } else {
        //     $data = $this->upload->data();

        //     $data['profile_photo'] = $config['upload_path'] . $data['file_name'];
        // }

        $msg = "Successfully Added New User Information";
        $this->session->set_flashdata('success', $msg);

        redirect('loan/user_list');
    }

    public function edit_user_form($id){
         $data = array();

        // load Breadcrumbs
        $this->load->library('breadcrumbcomponent');

        $data['selected_loan_user'] = $this->common_model->getInfo('loan_information', array('id' => $id));
        
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/loan_user_edit_form', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function update_loan_user(){
        $data = array();

        $id = $this->input->post('id');

        $data['full_name']                  = $this->input->post('full_name');
        $data['email_address']              = $this->input->post('email_address');
        $data['mobile_number']              = $this->input->post('mobile_number');
        $data['permanent_address']          = $this->input->post('permanent_address');
        $data['present_address']            = $this->input->post('present_address');
        $data['ocupation']                  = $this->input->post('ocupation');
        $data['company_name']               = $this->input->post('company_name');
        $data['company_address']            = $this->input->post('company_address');
        $data['national_id_number']         = $this->input->post('national_id_number');

        $this->common_model->update('loan_information',$data, array('id' => $id));

        
        move_uploaded_file($_FILES['profile_photo']['tmp_name'], 'uploads/loan_user_photo/' . $id . '.jpg');

        $msg = "Successfully Updated Selected Loan User Information";
        $this->session->set_flashdata('success', $msg);

        redirect('loan/user_list');
    }

    public function delete_loan_user($id){
        $file = "uploads/loan_user_photo/".$id.".jpg";
        $thumbs_file = "uploads/loan_user_photo/thumbs/".$id.".jpg";

        $balance_status = $this->common_model->getInfo('loan_information', array('id' => $id));

        if($balance_status->balance !=0 ){
            $msg = "Sorry Can't Delete This User Because This User Balance is not 0 (ZERO)";
            $this->session->set_flashdata('success', $msg);

            redirect('loan/user_list');
        }else{
            unlink($file);
            unlink($thumbs_file);
            $this->common_model->delete('loan_information', array('id' => $id));


            $msg = "Successfully Deleted Selected Loan User Information";
            $this->session->set_flashdata('success', $msg);

            redirect('loan/user_list');
        }
        
        
    }

    
    
    public function loan_receive_info(){
        $data = array();

        // load Breadcrumbs
        $this->load->library('breadcrumbcomponent');

        $data['loan_receive_list']= $this->common_model->selectAll('loan_receive'); 
        
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/loan_receive_list', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    /*
    * Loan Paid Section 
    */

    // All Loan Paid List Information 
    public function loan_paid_info(){
        $data = array();

        // load Breadcrumbs
        $this->load->library('breadcrumbcomponent');

        $data['loan_info_list'] = $this->common_model->selectAll('loan_paid'); 
     
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/loan_paid_list', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function loan_paid_form($id){
        $data = array();

        // load Breadcrumbs
        $this->load->library('breadcrumbcomponent');


        $data['user_info'] = $this->common_model->getInfo('loan_information', array('id' => $id));

        $data['loan_user_list']= $this->common_model->selectAll('loan_information'); 
        
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/loan_paid_form', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_loan_paid_info(){
        

        // For Loan Paid Table 
        $data = array();
        $data['loan_user_id']   = $this->input->post('loan_user_id');
        $data['comments']       = $this->input->post('comments');
        $data['entry_by']       = $this->input->post('entry_by');
        $data['amount']         = $this->input->post('amount');
        $data['entry_date']     = date('Y-m-d');

        // Loan Information 
        $balance = $this->common_model->getInfo('loan_information', array('id' => $data['loan_user_id']));
        $loan_information = array();
        $balance = $balance->balance;
        $balance -= $data['amount'];
        $loan_information['balance'] = $balance;

        // Update User Balance 
        $this->common_model->update('loan_information', $loan_information, array('id' => $data['loan_user_id']));

        $this->common_model->insert('loan_paid', $data);

        // Transaction Table And Section Start From Here 
        $transaction = array();
        $transaction['loan_paid_id']        = $this->db->insert_id();
        $transaction['date']                = date('Y-m-d');

        $transaction['credit']              = $this->input->post('amount');

        // For Sequence Last Balance of the transaction 
        $last_balance = $this->common_model->getLastRow('transactions');
        $last_balance = $last_balance->balance;
        $last_balance = $last_balance-$data['amount'];

        $transaction['balance']             = $last_balance;
               
        $this->common_model->insert('transactions', $transaction);

        // Session Message And Redirect Page 
        $msg = "Successfully Paid  ";
        $this->session->set_flashdata('success', $msg);

        redirect('loan/user_list');
    }

    /* --------------------------------------------- */


    public function loan_receive_form($id){
        $data = array();

        // load Breadcrumbs
        $this->load->library('breadcrumbcomponent');

        $data['user_info'] = $this->common_model->getInfo('loan_information', array('id' => $id));

        $data['loan_user_list']= $this->common_model->selectAll('loan_information'); 
        
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/loan_receive_form', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_loan_recieve_info(){
        // For Loan Recieve Table 
        $data = array();
        $data['loan_user_id']   = $this->input->post('loan_user_id');
        $data['comments']       = $this->input->post('comments');
        $data['entry_by']       = $this->input->post('entry_by');
        $data['amount']         = $this->input->post('amount');
        $data['entry_date']     = date('Y-m-d');

        // Loan Information 
        $balance = $this->common_model->getInfo('loan_information', array('id' => $data['loan_user_id']));
        $loan_information = array();
        $balance = $balance->balance;
        $balance += $data['amount'];
        $loan_information['balance'] = $balance;
        // Update User Balance 
        $this->common_model->update('loan_information', $loan_information, array('id' => $data['loan_user_id']));

        $this->common_model->insert('loan_receive', $data);

        // Transaction Table And Section Start From Here 
        $transaction = array();
        $transaction['loan_receive_id']     = $this->db->insert_id();
        $transaction['date']                = date('Y-m-d');

        $transaction['debit']               = $this->input->post('amount');

        // For Sequence Last Balance of the transaction 
        $last_balance = $this->common_model->getLastRow('transactions');
        $last_balance = $last_balance->balance;
        $last_balance = $last_balance+$data['amount'];

        $transaction['balance']             = $last_balance;
               
        $this->common_model->insert('transactions', $transaction);

        // Session Message And Redirect Page 
        $msg = "Loan Recieve Amount Successfully";
        $this->session->set_flashdata('success', $msg);

        redirect('loan/user_list');
    }
}
