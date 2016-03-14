<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_collection extends CI_Controller {

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

        $data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('payment_collection'), 'page' => 'Payment Collection'));

        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/payment_collection/index', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    /* -------------------------------------------------------------------------- */

    public function payment($id){
        $data = array();
        $sub_data = array();

        $this->load->model('haji_info_model');

        $sub_data['select_haji_for_payment']=  $this->haji_info_model->select_haji_for_payment($id);

        $sub_data['income_head_list']       = $this->common_model->selectAll('income_head');

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('payment_collection'), 'page' => 'Payment Collection'), array('link' => '#', 'page' => 'Payment Collection'));
        

        $data['header']          = $this->load->view('common/header', '', TRUE);
        $data['sidebar']         = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']      = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']    = $this->load->view('includes/payment_collection/due_collection_form', $sub_data, TRUE);
        $data['footer']          = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_due_collection(){
        $data = array();
        $sub_data = array();
        $transaction = array();

        $money_receipt_number_last=$this->common_model->getLastRow('money_receipt');
        // $r = explode("-",$money_receipt_number_last->money_receipt_number);
        
        // $money_receipt_number_last          = $r[1]+1;
        // $money_receipt_number               = "MRH-"."000".$money_receipt_number_last;

        if($money_receipt_number_last ==TRUE){
            $r = explode("-",$money_receipt_number_last->money_receipt_number);
        
            $money_receipt_number_last_sum = $r[1]+1;
            $money_receipt_number = "MRH-".sprintf('%03d', $money_receipt_number_last_sum);
            
        }else{
            $money_receipt_number = "MRH-001";
        }
        
        $data['haji_id']                    = $this->input->post('id');
        $data['money_receipt_number']       = $money_receipt_number;
        $data['chaque_number']              = $this->input->post('chaque_number');
        $data['chaque_date']                = $this->input->post('chaque_date');
        $data['payment_mode']               = $this->input->post('payment_mode');
        $data['bank_name']                  = $this->input->post('bank_name');
        $data['branch_name']                = $this->input->post('branch_name');
        $data['amount']                     = $this->input->post('amount');
        $data['payment_head']               = $this->input->post('payment_head');
        $data['payment_date']               = date('Y-m-d');
        //$data['commission_agent_id']      = $this->input->post('commission_agent_id');

        $this->common_model->insert('money_receipt', $data);

        $money_receipt_id = $this->db->insert_id();

        // Transaction Section Start From Here 
        $transaction['money_receipt_id']    = $this->db->insert_id();
        $transaction['date']                = date('Y-m-d');
        $transaction['debit']               = $this->input->post('amount');
        $transaction['haji_id']             = $data['haji_id'];

        // For Sequence Last Balance of the transaction 
        $last_balance = $this->common_model->getLastRow('transactions');
        $last_balance = $last_balance->balance;
        $last_balance = $last_balance+$data['amount'];

        $transaction['balance']             = $last_balance;

        $this->common_model->insert('transactions', $transaction);
        
        $id= $this->db->insert_id();
        // End Transaction From Here 
        
        // $data['header']            = $this->load->view('common/header', '', TRUE);
        // $data['sidebar']           = $this->load->view('common/sidebar', '', TRUE);
        // $data['top_navbar']        = $this->load->view('common/top_navbar', '', TRUE);
        // $data['main_content']      = $this->load->view('includes/payment_collection/money_receipt', $data, TRUE);
        // $data['footer']            = $this->load->view('common/footer', '', TRUE);

        $msg = "Successfully Add New Payment and Print Your Money Receipt";
        $this->session->set_flashdata('success', $msg);

        redirect('payment_collection/money_receipt/'.$money_receipt_id);
    }

    public function money_receipt_entry_form(){
        $data = array();
        $sub_data = array();

        $sub_data['income_head_list'] = $this->common_model->selectAll('income_head');

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('payment_collection'), 'page' => 'Payment Collection'));
        
        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/payment_collection/money_receipt_entry_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_money_receipt(){
        // $data = array();
        // $sub_data = array();
        // $transaction = array();

        $money_receipt_number_last=$this->common_model->getLastRow('money_receipt');

        if($money_receipt_number_last ==TRUE){
            $r = explode("-",$money_receipt_number_last->money_receipt_number);
        
            $money_receipt_number_last_sum = $r[1]+1;
            $money_receipt_number = "MRH-".sprintf('%03d', $money_receipt_number_last_sum);
            
        }else{
            $money_receipt_number = "MRH-001";
        }
        $money_receipt['money_receipt_number']=$money_receipt_number;
        $money_receipt['name']                = $this->input->post('name');
        $money_receipt['payment_head']        = $this->input->post('income_head_id');
        $money_receipt['payment_mode']        = $this->input->post('payment_mode');
        $money_receipt['amount']              = $this->input->post('total_amount');
        $money_receipt['payment_date']        = date('Y-m-d');


        if ($this->input->post('payment_mode')==2) {
            if ($this->input->post('chaque_number')!='') {
                $money_receipt['chaque_number'] = $this->input->post('chaque_number');
            }

            if ($this->input->post('chaque_date')!='') {
                $money_receipt['chaque_date'] = $this->input->post('chaque_date');
            }

            if ($this->input->post('bank_name')!='') {
                $money_receipt['bank_name'] = $this->input->post('bank_name');
            }

            if ($this->input->post('branch_name')!='') {
                $money_receipt['branch_name'] = $this->input->post('branch_name');
            }
        }

        if ($this->input->post('payment_mode')==3) {
            if ($this->input->post('bkash_transaction_no')!='') {
                $money_receipt['transaction_no'] = $this->input->post('bkash_transaction_no');
            }

            if ($this->input->post('bkash_phone_no')!='') {
                $money_receipt['bkash_phone_no'] = $this->input->post('bkash_phone_no');
            }
        }

        // INSERT Money Receipt Information in MONEY_RECERIPT TABLE 
        
        $this->common_model->insert('money_receipt', $money_receipt);
        $money_receipt_id = $this->db->insert_id();

        // Insert Section in TRANSACTION TABLE 
        // $transaction['commission_agent_id'] = $this->input->post('id');
        $transaction['money_receipt_id']    = $money_receipt_id;
        $transaction['date']                = date('Y-m-d');
        $transaction['debit']               = $this->input->post('total_amount');
        // For Sequence Last Balance of the transaction 
        $last_balance = $this->common_model->getLastRow('transactions');
        $last_balance = $last_balance->balance;
        $last_balance = $last_balance+$money_receipt['amount'];

        $transaction['balance']             = $last_balance;

        $this->common_model->insert('transactions', $transaction);
        
        $msg = "Successfully Receive Payment By Income Head";
        $this->session->set_flashdata('success', $msg);

        redirect('payment_collection/money_receipt/'.$money_receipt_id);
    }

    public function money_receipt($id){
        $data = array();
        $sub_data = array();

        $sub_data['money_receipt'] = $this->common_model->getInfo('money_receipt', array('id' => $id));

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('payment_collection'), 'page' => 'Payment Collection'), array('link' => '#', 'page' => 'Money Receipt'));

        $this->load->library('numbertowords');
                
        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/payment_collection/money_receipt', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function print_money_receipt(){
        $data = array();
        $sub_data = array();
        
        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/payment_collection/invoice', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    /* ---------------------------------------------------------------------------------------- */

	
	

	public function add_form(){
        $data = array();
        $sub_data = array();

        $sub_data['income_head_list'] = $this->common_model->selectAll('income_head');

        $sub_data['commission_agent_list']  = $this->common_model->selectAll('commission_agent', 'commision_agent_name ASC');
        $sub_data['police_station_list']    = $this->common_model->selectAll('police_station');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/payment_collection/add_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function add_payment(){

        $data = array();

        $data['passport_number'] = "";
        $data['voucher_no'] = "";
        $data['total_amount'] = "";
        $data['commission_agent_id'] = "";

        $sub_data['money_receipt_number'] = "";
        $sub_data['payment_mode'] = "";
        $sub_data['chaque_number'] = "";
        $sub_data['chaque_date'] = "";
        $sub_data['bank_name'] = "";
        $sub_data['amount'] = "";
        $sub_data['branch_name'] = "";
        $sub_data['payment_head'] = "";
        

        $data['passport_number'] = $this->input->post('passport_number');
        $data['voucher_no'] = $this->input->post('voucher_no');
        $data['total_amount'] = $this->input->post('total_amount');
        $data['commission_agent_id'] = $this->input->post('commission_agent_id');
        $data['commission_amount'] = $this->input->post('commission_amount');

        $sub_data['money_receipt_number'] = $this->input->post('mrr_no');
        $sub_data['payment_mode'] = $this->input->post('payment_mode');
        $sub_data['chaque_number'] = $this->input->post('chaque_number');
        $sub_data['chaque_date'] = $this->input->post('chaque_date');
        $sub_data['bank_name'] = $this->input->post('bank_name');
        $sub_data['amount'] = $this->input->post('amount');
        $sub_data['branch_name'] = $this->input->post('branch_name');
        $sub_data['payment_head'] = $this->input->post('payment_head');

        $this->common_model->insert('haji_payment_contact', $data);
        $this->common_model->insert('money_receipt', $sub_data);

        $msg = "Successfully Add New Payment and Print Your Money Receipt";
        $this->session->set_flashdata('success', $msg);

        redirect('');

    }

    public function due_collection(){
		$data = array();
        $sub_data = array();

        $this->load->model('common_model');

        $sub_data['income_head_list']          = $this->common_model->selectAll('income_head');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/payment_collection/due_collection_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
	}


    /* Money Receipt Section */

    public function money_receipt_index(){
        $data = array();
        $sub_data = array();

        $sub_data['money_receipt_list'] = $this->common_model->selectAll('money_receipt');

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('payment_collection'), 'page' => 'Payment Collection'), array('link' => '#', 'page' => 'Money Receipt Information'));

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/payment_collection/money_receipt_index', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    /* Report Section Start From Here */ 

    public function haji_payment_report($haji_id){
        $data = array();
        $sub_data = array();

        $this->load->model('haji_info_model');
        $sub_data['contact_ammount'] = $this->haji_info_model->contact_ammount($haji_id);
        $sub_data['money_receipt_list'] = $this->common_model->payment_report_haji_wise($haji_id);

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('payment_collection'), 'page' => 'Payment Collection'), array('link' => '#', 'page' => 'Haji Payment Report'));

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/payment_collection/invoice', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function date_report(){

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

        $sub_data['money_receipt_list'] = $this->common_model->payment_report_date_wise($start_date, $end_date);
        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('payment_collection'), 'page' => 'Payment Collection'), array('link' => '#', 'page' => 'Collection Statement'));

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/payment_collection/date_report', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }


    public function summery_report(){

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

        $sub_data['summery_report'] = $this->common_model->summery_report_by_transaction('transactions', $start_date, $end_date);

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('payment_collection'), 'page' => 'Payment Collection'), array('link' => '#', 'page' => 'Summery Report'));

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/payment_collection/summery_report', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    // Group Haji Payment Collect From Group Leader 
    public function group_payment_collect_form($group_leader_id){
        $data = array();

        $this->load->model('haji_info_model');

        $sub_data['select_group_leader_for_payment']=  $this->haji_info_model->select_group_leader_for_payment($group_leader_id);

        $sub_data['income_head_list']       = $this->common_model->selectAll('income_head');
        
        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('payment_collection'), 'page' => 'Payment Collection'), array('link' => '#', 'page' => 'Group Payment'));

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/payment_collection/group_payment_collect_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    
    // For View Contact Amount 
    public function view_contact_amount(){
        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('payment_collection'), 'page' => 'Payment Collection'), array('link' => '#', 'page' => 'Group Payment'));

        $select_year                        = $this->input->post('select_year');

        $this->load->model('reports_model');
        $sub_data['contact_amount_data']    = $this->reports_model->getAllContactAmount('tbl_contact_amount', array('hajj_year' => $select_year));

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/payment_collection/view_contact_amount', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    
    }

    public function save_group_payment_collection_data(){
        
        $data['commission_agent_id']    = $this->input->post('id');
        $data['amount']                 = $this->input->post('amount');
        $data['hajj_year']              = $this->input->post('hajj_year');

        $data['date']                   = date('Y-m-d');
        $data['entry_by']               = $this->session->userdata('uid');
        $check_exist= $this->common_model->check_exist('tbl_contact_amount', array('commission_agent_id' => $data['commission_agent_id'], 'hajj_year' => $data['hajj_year']));
        if ($check_exist==FALSE) {
            redirect($_SERVER["HTTP_REFERER"]);
        }

        if($this->input->post('payment_mode') !=''){
            $data['payment_mode'] = $this->input->post('payment_mode', TRUE);
            $money_receipt['payment_mode'] = $this->input->post('payment_mode', TRUE);
        }

        if($this->input->post('chaque_number') !=''){
            $data['chaque_number'] = $this->input->post('chaque_number', TRUE);
            $money_receipt['chaque_number'] = $this->input->post('chaque_number', TRUE);
        }

        if($this->input->post('chaque_date') !=''){
            $data['chaque_date'] = $this->input->post('chaque_date', TRUE);
            $money_receipt['chaque_date'] = $this->input->post('chaque_date', TRUE);
        }

        if($this->input->post('bank_name') !=''){
            $data['bank_name'] = $this->input->post('bank_name', TRUE);
            $money_receipt['bank_name'] = $this->input->post('bank_name', TRUE);
        }

        if($this->input->post('branch_name') !=''){
            $data['branch_name'] = $this->input->post('branch_name', TRUE);
            $money_receipt['branch_name'] = $this->input->post('branch_name', TRUE);
        }

        if($this->input->post('bkash_phone_no') !=''){
            $data['bkash_phone_no'] = $this->input->post('bkash_phone_no', TRUE);
        }

        if($this->input->post('transaction_no') !=''){
            $data['transaction_no'] = $this->input->post('transaction_no', TRUE);
            // $money_receipt['transaction_no'] = $this->input->post('transaction_no', TRUE);
        }

        // Money Recript Section INSERT
        $money_receipt_number_last=$this->common_model->getLastRow('money_receipt');
        if($money_receipt_number_last ==TRUE){
            $r = explode("-",$money_receipt_number_last->money_receipt_number);
        
            $money_receipt_number_last_sum = $r[1]+1;
            $money_receipt_number = "MRH-".sprintf('%03d', $money_receipt_number_last_sum);
            
        }else{
            $money_receipt_number = "MRH-001";
        }
        
        $money_receipt['commission_agent_id']        = $this->input->post('id');
        $money_receipt['money_receipt_number']       = $money_receipt_number;

        $money_receipt['amount']                     = $this->input->post('amount');
        $money_receipt['payment_head']               = $this->input->post('payment_head');
        $money_receipt['payment_date']               = date('Y-m-d');
        

        $this->common_model->insert('money_receipt', $money_receipt);

        $money_receipt_id = $this->db->insert_id();

        // Transaction Section INSERT
        $transaction['commission_agent_id'] = $this->input->post('id');
        $transaction['money_receipt_id']    = $money_receipt_id;
        $transaction['date']                = date('Y-m-d');
        $transaction['debit']               = $this->input->post('amount');
        // For Sequence Last Balance of the transaction 
        $last_balance = $this->common_model->getLastRow('transactions');
        $last_balance = $last_balance->balance;
        $last_balance = $last_balance+$data['amount'];

        $transaction['balance']             = $last_balance;

        $this->common_model->insert('transactions', $transaction);

        //Contact Amount Table UPDATE
        $due_contact_amount = $this->common_model->getInfo('tbl_contact_amount', array('commission_agent_id' => $data['commission_agent_id'], 'hajj_year' => $data['hajj_year']));
        $due_amount = $due_contact_amount->due_amount;
        $due_amount -= $data['amount'];
        $tbl_contact_amount['due_amount'] = $due_amount;

        $this->common_model->update('tbl_contact_amount', $tbl_contact_amount, array('id' => $due_contact_amount->id));

        $msg = "Successfully Collect Due Amount of Group Leader";
        $this->session->set_flashdata('success', $msg);

        redirect('payment_collection/money_receipt/'.$money_receipt_id);

    }

    // Ajax Call 
    public function find_contact_amount_and_year($hajj_year, $group_leader_id){

    }

    

}
