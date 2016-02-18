<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loan extends CI_Controller {

	public $_notification = "";

    public function __construct() {
        parent::__construct();

        $this->load->model('common_model');

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

        $data['loan_user_list']= $this->common_model->selectAll('loan_information'); 

        $data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('loan'), 'page' => 'Loan'), array('link' => '#', 'page' => 'Loan User List'));
        
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

        $this->common_model->insert('loan_information',$data);

        $id = $this->db->insert_id();
        if ($_FILES['profile_photo']['size'] > 0) {
            $this->load->library('upload');

            $config['upload_path'] = 'uploads/loan_user_photo/';
            $config['allowed_types'] = 'gif|jpg|png';
            //$config['max_size'] = '500';
            $config['max_width'] = '25255';
            $config['max_height'] = '545454';
            $config['overwrite'] = TRUE;
            $config['max_filename'] = 25;
            $config['file_name'] = $id;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('profile_photo')) {

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect($_SERVER["HTTP_REFERER"]);
                }

            $photo = $this->upload->file_name;

            $this->load->helper('file');
            $this->load->library('image_lib');
            $config['image_library'] = 'gd2';
            $config['source_image']     = 'uploads/loan_user_photo/'.$photo;
            $config['new_image']        = 'uploads/loan_user_photo/thumbs/'.$photo;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 150;
            $config['height'] = 150;
            $config['file_name'] = $id;

            $this->image_lib->clear();
            $this->image_lib->initialize($config);

            if (!$this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
            }
        }
       
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

        if ($_FILES['profile_photo']['size'] > 0) {
            $this->load->library('upload');

            $config['upload_path'] = 'uploads/loan_user_photo/';
            $config['allowed_types'] = 'gif|jpg|png';
            //$config['max_size'] = '500';
            $config['max_width'] = '25255';
            $config['max_height'] = '545454';
            $config['overwrite'] = TRUE;
            $config['max_filename'] = 25;
            $config['file_name'] = $id;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('profile_photo')) {

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect($_SERVER["HTTP_REFERER"]);
                }

            $photo = $this->upload->file_name;
            
            // echo '<pre>'; print_r($photo); exit();

            $this->load->helper('file');
            $this->load->library('image_lib');
            $config['image_library'] = 'gd2';
            $config['source_image']     = 'uploads/loan_user_photo/'.$photo;
            $config['new_image']        = 'uploads/loan_user_photo/thumbs/'.$photo;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 150;
            $config['height'] = 150;
            $config['file_name'] = $id;

            $this->image_lib->clear();
            $this->image_lib->initialize($config);

            if (!$this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
            }
        }
        
        //move_uploaded_file($_FILES['profile_photo']['tmp_name'], 'uploads/loan_user_photo/' . $id . '.jpg');

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

        $data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('loan'), 'page' => 'Loan'), array('link' => '#', 'page' => 'Loan Recieve Information'));

        $data['loan_receive_list']= $this->common_model->selectAll('loan_receive'); 
        
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/loan_receive_list', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    /*
    * Give New Loan Section Start From Here 
    */

    public function give_new_loan_form($id){
        $data = array();

        // load Breadcrumbs
        $this->load->library('breadcrumbcomponent');

        $data['user_info'] = $this->common_model->getInfo('loan_information', array('id' => $id));

        $data['loan_user_list']= $this->common_model->selectAll('loan_information');
        
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/give_new_loan_form', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function given_and_taken(){
        // load Breadcrumbs
        $this->load->library('breadcrumbcomponent');

        $data['given_taken_list']= $this->common_model->selectAll('history_give_and_take_new_loan', 'id DESC');
        
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/given_and_taken_list', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function take_new_loan_form($id){
        $data = array();

        // load Breadcrumbs
        $this->load->library('breadcrumbcomponent');

        $data['user_info'] = $this->common_model->getInfo('loan_information', array('id' => $id));

        $data['loan_user_list']= $this->common_model->selectAll('loan_information');
        
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/take_new_loan', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_given_new_loan_info(){

        if($this->input->post('loan_user_id')!=''){
            $data['loan_user_id']   = $this->input->post('loan_user_id');
        }

        if($this->input->post('comments')!=''){
            $data['comments']   = $this->input->post('comments');
        }

        if($this->input->post('entry_by')!=''){
            $data['entry_by']   = $this->input->post('entry_by');
        }

        if($this->input->post('amount')!=''){
            $data['given_amount']   = $this->input->post('amount');
            $data['net_amount']   = $this->input->post('amount');
        }

        $data['date']   = date('Y-m-d');

        // Insert history_give_and_take_new_loan Table Data 
        $this->common_model->insert('history_give_and_take_new_loan', $data);
        $given_insert_id = $this->db->insert_id();
        
        // For Loan Transaction Table 
        $loan_transaction['loan_user_id'] = $data['loan_user_id'];
        $loan_transaction['loan_type'] = 1; // give_new_loan==1; Take new Loan==2; Receive Installment ==2; Paid Installment == 2;
        $loan_transaction['transaction_type'] = 1; // Cash ==1; Bank ==2; bKash ==3; 
        $loan_transaction['credit'] = $this->input->post('amount');
        $loan_transaction['entry_by'] = $data['entry_by'];
        $loan_transaction['date']   = date('Y-m-d');
        $this->common_model->insert('loan_transaction', $loan_transaction);

        // For All Transaction Table 
            
        // Transaction Section Start From Here 
        $transaction['loan_information_id']     = $data['loan_user_id'];
        $transaction['date']                    = date('Y-m-d');
        $transaction['credit']                  = $this->input->post('amount');
        $transaction['loan_give_and_take_id']   = $given_insert_id;

        // For Sequence Last Balance of the transaction 
        $last_balance = $this->common_model->getLastRow('transactions');
        $last_balance = $last_balance->balance;
        $last_balance = $last_balance-$data['given_amount'];

        $transaction['balance']             = $last_balance;

        $this->common_model->insert('transactions', $transaction);
        /* ---------------------------------------------------------- */

        
        $msg = "Successfully Save Given Loan Information";
        $this->session->set_flashdata('success', $msg);

        redirect('loan/given_and_taken');

    }

    public function save_taken_new_loan_info(){

        if($this->input->post('loan_user_id')!=''){
            $data['loan_user_id']   = $this->input->post('loan_user_id');
        }

        if($this->input->post('comments')!=''){
            $data['comments']   = $this->input->post('comments');
        }

        if($this->input->post('entry_by')!=''){
            $data['entry_by']   = $this->input->post('entry_by');
        }

        if($this->input->post('amount')!=''){
            $data['taken_amount']   = $this->input->post('amount');
            $data['net_amount']   = $this->input->post('amount');
        }

        $data['date']   = date('Y-m-d');
        // give_new_loan==1; Take new Loan==2; Receive Installment ==2; Paid Installment == 2;
        $data['loan_type'] =2;

        // Insert history_give_and_take_new_loan Table Data 
        $this->common_model->insert('history_give_and_take_new_loan', $data);
        $given_insert_id = $this->db->insert_id();
        
        // For Loan Transaction Table 
        // give_new_loan==1; Take new Loan==2; Receive Installment ==2; Paid Installment == 2;
        $loan_transaction['loan_type'] = 2; 
        $loan_transaction['loan_user_id'] = $data['loan_user_id'];
        $loan_transaction['transaction_type'] = 1; // Cash ==1; Bank ==2; bKash ==3; 
        $loan_transaction['debit'] = $this->input->post('amount');
        $loan_transaction['entry_by'] = $data['entry_by'];
        $loan_transaction['date']   = date('Y-m-d');
        $this->common_model->insert('loan_transaction', $loan_transaction);
        /* ------------------------------------------------- */

        // Transaction Section Start From Here 
        $transaction['loan_information_id']     = $data['loan_user_id'];
        $transaction['date']                    = date('Y-m-d');
        $transaction['debit']                   = $this->input->post('amount');
        $transaction['loan_give_and_take_id']   = $given_insert_id;

        // For Sequence Last Balance of the transaction 
        $last_balance = $this->common_model->getLastRow('transactions');
        $last_balance = $last_balance->balance;
        $last_balance = $last_balance+$data['given_amount'];

        $transaction['balance']             = $last_balance;

        $this->common_model->insert('transactions', $transaction);
        /* ---------------------------------------------------------- */
        
        $msg = "Successfully Save Loan Taken Information";
        $this->session->set_flashdata('success', $msg);
        redirect('loan/given_and_taken');

    }

    public function loan_paid_info(){
        $data = array();

        $data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('loan'), 'page' => 'Loan'), array('link' => '#', 'page' => 'Loan Paid Information'));

        $data['loan_info_list'] = $this->common_model->selectAll('loan_paid'); 
     
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/loan_paid_list', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function loan_installment_paid_form($id){
        $data = array();

        // load Breadcrumbs
        $this->load->library('breadcrumbcomponent');

        $data['loan_paid_history_info'] = $this->common_model->getInfo('history_give_and_take_new_loan', array('id' => $id));
        $data['user_info'] = $this->common_model->getInfo('loan_information', array('id' => $data['loan_paid_history_info']->loan_user_id));
        $data['against_id']=$id;
        
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/installment_paid_form', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_loan_installment_paid_info(){
        

        // For Loan Paid Table 
        $data = array();
        $data['comments']                       = $this->input->post('comments');
        $data['loan_user_id']                   = $this->input->post('loan_user_id');
        $data['entry_by']                       = $this->input->post('entry_by');
        $data['installment_status']             = 2;
        $data['paid_amount']                    = $this->input->post('amount');
        $data['installment_amount']             = $this->input->post('amount');
        $data['date']                           = date('Y-m-d');
        $data['against_given_taken_history']    = $this->input->post('loan_paid_history_id');

        // Save Loan Installment 
        $this->common_model->insert('loan_history_of_installment', $data);
        $installment_insert_id = $this->db->insert_id();

        // For Loan Transaction Table 
        $loan_transaction['loan_user_id'] = $data['loan_user_id'];
        $loan_transaction['loan_type'] = 4; // give_new_loan==1; Take new Loan==2; Receive Installment ==3; Paid Installment == 4;
        $loan_transaction['transaction_type'] = 1; // Cash ==1; Bank ==2; bKash ==3; 
        $loan_transaction['credit'] = $this->input->post('amount');
        $loan_transaction['entry_by'] = $data['entry_by'];
        $loan_transaction['date']   = date('Y-m-d');
        $loan_transaction['loan_against_id'] = $data['against_given_taken_history'];
        $this->common_model->insert('loan_transaction', $loan_transaction);

        // Transaction Section Start From Here 
        $transaction['loan_information_id']     = $data['loan_user_id'];
        $transaction['date']                    = date('Y-m-d');
        $transaction['credit']                  = $this->input->post('amount');
        $transaction['loan_give_and_take_id']   = $given_insert_id;

        // For Sequence Last Balance of the transaction 
        $last_balance = $this->common_model->getLastRow('transactions');
        $last_balance = $last_balance->balance;
        $last_balance = $last_balance-$data['given_amount'];

        $transaction['balance']             = $last_balance;

        $this->common_model->insert('transactions', $transaction);
        /* ---------------------------------------------------------- */

        $msg = "Successfully Paid Installment ";
        $this->session->set_flashdata('success', $msg);

        redirect('loan/installment_detials');
    }

    public function loan_installment_collect_form($id){
        $data = array();

        // load Breadcrumbs
        $this->load->library('breadcrumbcomponent');

        $data['loan_paid_history_info'] = $this->common_model->getInfo('history_give_and_take_new_loan', array('id' => $id));
        $data['user_info'] = $this->common_model->getInfo('loan_information', array('id' => $data['loan_paid_history_info']->loan_user_id));

        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/installment_collect_form', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_loan_installment_collect_info(){
        

        // For Loan Paid Table 
        $data = array();
        $data['comments']                       = $this->input->post('comments');
        $data['loan_user_id']                   = $this->input->post('loan_user_id');
        $data['entry_by']                       = $this->input->post('entry_by');
        $data['receive_amount']                 = $this->input->post('amount');
        $data['installment_amount']             = $this->input->post('amount');
        $data['date']                           = date('Y-m-d');
        $data['against_given_taken_history']    = $this->input->post('loan_paid_history_id');

        // Save Loan Installment 
        $this->common_model->insert('loan_history_of_installment', $data);
        $installment_insert_id = $this->db->insert_id();

        // For Loan Transaction Table 
        $loan_transaction['loan_user_id'] = $data['loan_user_id'];
        $loan_transaction['loan_type'] = 3; // give_new_loan==1; Take new Loan==2; Receive Installment ==3; Paid Installment == 4;
        $loan_transaction['transaction_type'] = 1; // Cash ==1; Bank ==2; bKash ==3; 
        $loan_transaction['debit'] = $this->input->post('amount');
        $loan_transaction['entry_by'] = $data['entry_by'];
        $loan_transaction['date']   = date('Y-m-d');
        $this->common_model->insert('loan_transaction', $loan_transaction);

        // Transaction Section Start From Here 
        $transaction['loan_information_id']     = $data['loan_user_id'];
        $transaction['date']                    = date('Y-m-d');
        $transaction['debit']                   = $this->input->post('amount');
        $transaction['loan_give_and_take_id']   = $given_insert_id;

        // For Sequence Last Balance of the transaction 
        $last_balance = $this->common_model->getLastRow('transactions');
        $last_balance = $last_balance->balance;
        $last_balance = $last_balance+$data['given_amount'];

        $transaction['balance']             = $last_balance;

        $this->common_model->insert('transactions', $transaction);
        /* ---------------------------------------------------------- */

        $msg = "Successfully Recieve Installment ";
        $this->session->set_flashdata('success', $msg);

        redirect('loan/installment_detials');
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
        $transaction['loan_information_id'] = $data['loan_user_id'];
        $transaction['date']                = date('Y-m-d');

        $transaction['debit']               = $this->input->post('amount');

        // For Sequence Last Balance of the transaction 
        $last_balance = $this->common_model->getLastRow('transactions');
        $last_balance = $last_balance->balance;
        $last_balance = $last_balance+$data['amount'];

        $transaction['balance']             = $last_balance;
               
        $this->common_model->insert('transactions', $transaction);

        /* ------------------------------------------------------ */
        // For Loan Transaction Table 
        $loan_transaction = array();
        $loan_transaction['receive_id']        = $this->db->insert_id();
        $loan_transaction['loan_user_id']      = $data['loan_user_id'];
        $loan_transaction['date']              = date('Y-m-d');

        $loan_transaction['debit']             = $this->input->post('amount');

        // For Sequence Last Balance of the transaction 
        $last_balance = $this->common_model->getLastRow('loan_transaction');
        $last_balance = $last_balance->balance;
        $last_balance = $last_balance+$data['amount'];

        $loan_transaction['balance']             = $last_balance;
               
        $this->common_model->insert('loan_transaction', $loan_transaction);

        // Session Message And Redirect Page 
        $msg = "Loan Recieve Amount Successfully";
        $this->session->set_flashdata('success', $msg);

        redirect('loan/user_list');
    }

    public function installment_detials(){
        // load Breadcrumbs
        $this->load->library('breadcrumbcomponent');

        $data['installment_detials']= $this->common_model->selectAll('loan_history_of_installment', 'id DESC');

        $data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('loan'), 'page' => 'Loan'), array('link' => '#', 'page' => 'Loan Installment Details'));
        
        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/loan/installment_details', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function loan_report($loan_user_id){
        $data = array();
        $sub_data = array();

        $this->load->model('loan_model');
        $sub_data['loan_user_id']=$loan_user_id;
        //$sub_data['contact_ammount'] = $this->haji_info_model->contact_ammount($loan_user_id);
        $sub_data['loan_payment_list'] = $this->loan_model->payment_report_loan_user_wise($loan_user_id);

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/loan/loan_report2', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function loan_summery_report(){
        $data = array();
        $sub_data = array();

        $start_date = date('Y-m-d');
        $end_date = date('Y-m-d');

        $start_date = $this->input->post('start_date');

        @list($m,$d,$y) = explode('/',$start_date);    // split on underscore.
        $start_date = $y.'-'.$m.'-'.$d;           // glue the pieces.

        $end_date = $this->input->post('end_date');

        @list($m,$d,$y) = explode('/',$end_date);    // split on underscore.
        $end_date = $y.'-'.$m.'-'.$d;  

        if(empty($start_date) or empty($end_date)){
            $start_date = date('Y-m-d');
            $end_date = date('Y-m-d');
        }

        $this->load->model('loan_model');

        $sub_data['summery_report'] = $this->loan_model->loan_summery_report('loan_transaction', $start_date, $end_date);

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('loan'), 'page' => 'Loan'), array('link' => '#', 'page' => 'Loan Summery Report'));

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/loan/summery_report', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function party_loan_statement_details(){
        $start_date = date('Y-m-d');
        $end_date = date('Y-m-d');

        $start_date = $this->input->post('start_date');

        @list($m,$d,$y) = explode('/',$start_date);    // split on underscore.
        $start_date = $y.'-'.$m.'-'.$d;           // glue the pieces.

        $end_date = $this->input->post('end_date');

        @list($m,$d,$y) = explode('/',$end_date);    // split on underscore.
        $end_date = $y.'-'.$m.'-'.$d;  

        if(empty($start_date) or empty($end_date)){
            $start_date = date('Y-m-d');
            $end_date = date('Y-m-d');
        }

        $this->load->model('loan_model');

        $sub_data['statement_details'] = $this->loan_model->statement_details('history_give_and_take_new_loan', $start_date, $end_date);

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('loan'), 'page' => 'Loan'), array('link' => '#', 'page' => 'Party Loan Installment Details'));


        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        //$data['main_content']               = $this->load->view('includes/loan/statement_details', $sub_data, TRUE);
        $data['main_content']               = $this->load->view('includes/loan/date_wise_statement_details', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }
}
