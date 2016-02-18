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


        $sub_data['commission_agent_list']  = $this->common_model->selectAll('commission_agent');

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
        $r = explode("-",$money_receipt_number_last->money_receipt_number);
        
        $money_receipt_number_last          = $r[1]+1;
        $money_receipt_number               = "MRH-"."000".$money_receipt_number_last;
        
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
        
        $data['header']            = $this->load->view('common/header', '', TRUE);
        $data['sidebar']           = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']        = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']      = $this->load->view('includes/payment_collection/money_receipt', $data, TRUE);
        $data['footer']            = $this->load->view('common/footer', '', TRUE);

        $msg = "Successfully Add New Payment and Print Your Money Receipt";
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

    

}
