<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bank extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('common_model');

        $this->load->library('Encrypt');
        $user_id = $this->session->userdata('user_id');
        
        if (!$this->session->userdata('user_logged')) {
        redirect('login');
        }
    }

    public function index() {
        redirect('bank/bank_list');
    }

    public function bank_list(){
    	$data = array();
    	$bank_data = array();
        $bank_data['bank_list']=$this->common_model->selectAllStatus('bank_info');

        $bank_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('bank'), 'page' => 'Bank'), array('link' => '#', 'page' => 'Bank Information'));

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/bank/bank_list', $bank_data, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function add_new_bank(){
    	$data = array();

        $bank_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('bank'), 'page' => 'Bank'), array('link' => '#', 'page' => 'Add New Bank'));

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/bank/add_new_bank', $bank_data, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function bank_account_list(){
    	$data = array();
    	$bank_account_data = array();
        $bank_account_data['bank_account_list']=$this->common_model->selectAllStatus('bank_account_info');

        $bank_account_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('bank'), 'page' => 'Bank'), array('link' => '#', 'page' => 'Bank Account List'));

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/bank/bank_account_list', $bank_account_data, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function add_new_bank_account(){
    	$data = array();

    	$bank_info = array();
    	$bank_info['bank_list'] = $this->common_model->selectAllStatus('bank_info');

        $bank_info['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('bank'), 'page' => 'Bank'), array('link' => '#', 'page' => 'Add New Bank Account'));

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/bank/add_new_bank_account', $bank_info, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_new_bank_account_info(){
    	$data = array();

    	$data['bank_id'] = $this->input->post('bank_name', TRUE);
    	$data['branch_name'] = $this->input->post('branch_name', TRUE);
    	$data['account_name'] = $this->input->post('account_name', TRUE);
    	$data['account_number'] = $this->input->post('account_number', TRUE);
    	$data['entry_by'] = $this->session->userdata('uid');
    	$data['entry_date'] = date('Y-m-d');

    	$this->common_model->insert('bank_account_info', $data);

    	$msg = "Create A New Bank Successfully";
        $this->session->set_flashdata('success', $msg);
        
        redirect('bank/bank_account_list');
    }

    public function edit_bank_account_info($id){
        $data = array();

        $bank_info=array();
        $bank_info['bank_info'] = $this->common_model->getInfo('bank_info', array('id' => $id));

        $bank_info['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('bank'), 'page' => 'Bank'), array('link' => '#', 'page' => 'Edit Bank Account Information'));

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/bank/edit_bank', $bank_info, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_new_bank_info(){
    	$data = array();

    	$data['bank_name'] = $this->input->post('bank_name', TRUE);
    	$data['branch_name'] = $this->input->post('branch_name', TRUE);
    	$data['account_name'] = $this->input->post('account_name', TRUE);
    	$data['account_number'] = $this->input->post('account_number', TRUE);
    	$data['entry_by'] = $this->session->userdata('uid');
    	$data['entry_date'] = date('Y-m-d');

    	$this->common_model->insert('bank_info', $data);

    	$msg = "Create A New Bank Successfully";
        $this->session->set_flashdata('success', $msg);
        
        redirect('bank/bank_list');

    }

    public function edit_bank_info($id){
    	$data = array();

    	$bank_info=array();
    	$bank_info['bank_info'] = $this->common_model->getInfo('bank_info', array('id' => $id));

        $bank_info['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('bank'), 'page' => 'Bank'), array('link' => '#', 'page' => 'Edit Bank Info'));

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/bank/edit_bank', $bank_info, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function update_bank_info(){
    	$data = array();

    	$bank_id = $this->input->post('bank_id');

    	$data['bank_name'] = $this->input->post('bank_name', TRUE);
    	$data['branch_name'] = $this->input->post('branch_name', TRUE);
    	$data['account_name'] = $this->input->post('account_name', TRUE);
    	$data['account_number'] = $this->input->post('account_number', TRUE);
    	$data['entry_by'] = $this->session->userdata('uid');
    	$data['entry_date'] = date('Y-m-d');

    	$this->common_model->update('bank_info', $data, array('id' => $bank_id));

    	$msg = "Create Updated Selected Bank Successfully";
        $this->session->set_flashdata('success', $msg);
        
        redirect('bank/bank_list');
    }

    public function delete_bank_info($id){
    	$this->common_model->change_status_unpublished('bank_info', array('id' => $id));

    	$msg = "Delete Selected Bank Successfully";
        $this->session->set_flashdata('success', $msg);
        
        redirect('bank/bank_list');
    }

    /* Bank Transaction Start From Here */

    public function bank_deposit_form(){
    	$data = array();
    	$bank_data = array();
        $bank_data['bank_list']=$this->common_model->selectAllStatus('bank_info');

        $bank_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('bank'), 'page' => 'Bank'), array('link' => '#', 'page' => ' Bank Deposit Form'));

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/bank/bank_deposit_form', $bank_data, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_bank_deposit(){
    	$data = array();

        // echo '<pre>';
        // print_r($_POST);
        // exit();

    	$data['bank_id'] = $this->input->post('bank_name');
    	$data['account_number'] = $this->input->post('account_number');
    	$data['account_name'] = $this->input->post('account_name');
        $data['chaque_number'] = $this->input->post('chaque_number');
        $data['chaque_date'] = $this->input->post('chaque_date');

    	$data['amount'] = $this->input->post('amount');
    	$data['transaction_type'] = $this->input->post('payment_mode');

        $data['entry_by'] = $this->session->userdata('uid');
        $data['entry_date'] = date('Y-m-d');

        $this->common_model->insert('bank_deposit', $data);

        // Transaction Section Start From Here 
        $transaction['deposit_id']          = $this->db->insert_id();
        $transaction['date']                = date('Y-m-d');
        $transaction['debit']               = $data['amount'];
        $transaction['transaction_type']    = $data['transaction_type'];
        $transaction['entry_by']            = $data['entry_by'];

        // For Sequence Last Balance of the transaction 
        $last_balance                       = $this->common_model->getLastRow('bank_transaction');
        $last_balance                       = $last_balance->balance;
        $last_balance                       = $last_balance+$data['amount'];

        $transaction['balance']             = $last_balance;

        $this->common_model->insert('bank_transaction', $transaction);
        // End Transaction From Here 

        $msg = "Successfully Save Bank Deposit Info ";
        $this->session->set_flashdata('success', $msg);
        
        redirect('bank/bank_deposit_history');

    }

    public function bank_deposit_history(){
        $data = array();
        $bank_deposit_history = array();
        $bank_deposit_history['bank_deposit_history']=$this->common_model->selectAllStatus('bank_deposit');

        $bank_deposit_history['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('bank'), 'page' => 'Bank'), array('link' => '#', 'page' => ' Bank Deposit History'));

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/bank/bank_deposit_history', $bank_deposit_history, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function bank_widthdrawal_form(){
    	$data = array();
    	$bank_data = array();
        $bank_data['bank_list']=$this->common_model->selectAllStatus('bank_info');
        $bank_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('bank'), 'page' => 'Bank'), array('link' => '#', 'page' => ' Bank Withdrawal Form'));

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/bank/bank_withdrawal_form', $bank_data, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_bank_withdraw(){
    	$data = array();

        $data['bank_id'] = $this->input->post('bank_name');
        $data['account_number'] = $this->input->post('account_number');
        $data['account_name'] = $this->input->post('account_name');
        $data['chaque_number'] = $this->input->post('chaque_number');
        $data['chaque_date'] = $this->input->post('chaque_date');

        $data['amount'] = $this->input->post('amount');
        $data['transaction_type'] = $this->input->post('payment_mode');
        $data['atm_transaction_no'] = $this->input->post('atm_transaction_no');


        $data['entry_by'] = $this->session->userdata('uid');
        $data['entry_date'] = date('Y-m-d');

        $this->common_model->insert('bank_withdrawal', $data);

        // Transaction Section Start From Here 
        $transaction['withdrawal_id']       = $this->db->insert_id();
        $transaction['date']                = date('Y-m-d');
        $transaction['credit']              = $data['amount'];
        $transaction['transaction_type']    = $data['transaction_type'];
        $transaction['entry_by']          = $data['entry_by'];

        // For Sequence Last Balance of the transaction 
        $last_balance                       = $this->common_model->getLastRow('bank_transaction');
        $last_balance                       = $last_balance->balance;
        $last_balance                       = $last_balance-$data['amount'];

        $transaction['balance']             = $last_balance;

        $this->common_model->insert('bank_transaction', $transaction);
        // End Transaction From Here 

        $msg = "Successfully Save Bank Deposit Info ";
        $this->session->set_flashdata('success', $msg);
        
        redirect('bank/bank_withdrawal_history');
    }

    public function bank_withdrawal_history(){
        $data = array();
        $bank_withdrawal_history = array();
        $bank_withdrawal_history['bank_withdrawal_history']=$this->common_model->selectAllStatus('bank_withdrawal');

        $bank_withdrawal_history['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('bank'), 'page' => 'Bank'), array('link' => '#', 'page' => ' Bank Withdrawal History'));

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/bank/bank_withdrawal_history', $bank_withdrawal_history, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function bank_transaction_statement(){
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

        $bank_withdrawal_history['bank_withdrawal_history'] = $this->common_model->summery_report_by_transaction('bank_transaction', $start_date, $end_date);

        $bank_withdrawal_history['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('bank'), 'page' => 'Bank'), array('link' => '#', 'page' => ' Bank Transaction Statement'));


        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/bank/bank_transaction_statement', $bank_withdrawal_history, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function bank_transaction_report(){

    }


    /* For Ajax Calling */
    public function get_account_number_list($id){
    	$id=trim($id);
    	$account_number=$this->common_model->selectAllWhere('bank_account_info', array('bank_id' => $id));
    	echo json_encode($account_number);
    }

    public function get_account_name($account_id){

     	$account_id=trim($account_id);
    	$account_name=$this->common_model->get_account_name('bank_account_info', array('id' => $account_id));

    	echo json_encode($account_name);
    }
}