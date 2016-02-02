<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense extends CI_Controller {

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
        $data['main_content'] = $this->load->view('includes/expense/index', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

		$this->load->view('master_dashboard', $data);
	}

    
    
    public function expense_entry_index(){
        $data = array();

        $sub_data['expense_entry_list'] = $this->common_model->selectAll('expense_entry');


        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/expense/expense_entry_index', $sub_data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }


	public function expense_entry_form(){
        $data = array();
        $sub_data = array();

        $sub_data['group_entry_list']       = $this->common_model->selectAll('expense_group_entry');
        $sub_data['head_entry_list']        = $this->common_model->selectAll('expense_head_entry');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/expense/add_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function expense_edit_entry_form($id){
        $data = array();
        $sub_data = array();

        $sub_data['expense_info']           = $this->common_model->getInfo('expense_entry', array('id' => $id));


        $sub_data['group_entry_list']       = $this->common_model->selectAll('expense_group_entry');
        $sub_data['head_entry_list']        = $this->common_model->selectAll('expense_head_entry');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/expense/edit_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    

    public function add_entry_form(){
        $data = array();

        $data['expense_entry_date']         = date('Y-m-d');
        $data['date']                       = $this->input->post('date');
        $data['expense_group_id']           = $this->input->post('expense_group_id');
        $data['expense_head_id']            = $this->input->post('expense_head_id');

        $data['expense_name']               = $this->input->post('expense_name');

        $data['cheque_number']              = $this->input->post('cheque_number');
        $data['cheque_date']                = $this->input->post('cheque_date');
        $data['bank_name']                  = $this->input->post('bank_name');
        $data['bank_acc_number']            = $this->input->post('bank_acc_number');
        $data['amount']                     = $this->input->post('amount');

        $this->common_model->insert('expense_entry', $data);

        // Transaction Section Start From Here 
        $transaction['expense_id']          = $this->db->insert_id();
        $transaction['date']                = date('Y-m-d');
        $transaction['credit']              = $this->input->post('amount');

        // For Sequence Last Balance of the transaction 
        $last_balance = $this->common_model->getLastRow('transactions');
        $last_balance = $last_balance->balance;
        $last_balance = $last_balance-$data['amount'];

        $transaction['balance']             = $last_balance;

        $this->common_model->insert('transactions', $transaction);
        // End Transaction From Here 

        $msg = "Your Expense Entry Successfully Added ";
        $this->session->set_flashdata('success', $msg);

        redirect('expense/expense_entry_index');
    }

    public function update_entry_form(){
        $data = array();

        $id=$this->input->post('expense_id');

        $data['expense_group_id'] = $this->input->post('expense_group_id');
        $data['expense_head_id'] = $this->input->post('expense_head_id');
        $data['expense_name'] = $this->input->post('expense_name');
        $data['payment_mode'] = $this->input->post('payment_mode');

        $data['date'] = $this->input->post('date');

        $data['cheque_number'] = $this->input->post('cheque_number');
        $data['cheque_date'] = $this->input->post('cheque_date');
        $data['bank_name'] = $this->input->post('bank_name');
        $data['bank_acc_number'] = $this->input->post('bank_acc_number');
        $data['amount'] = $this->input->post('amount');

        // echo '<pre>';
        // print_r($data);
        // exit();

        $this->common_model->update('expense_entry', $data, array('id' => $id));

        $msg = "Successfully Updated Of Your Selected Expense Entry";
        $this->session->set_flashdata('success', $msg);

        redirect('expense/expense_entry_index');
    }

    public function delete_expense($id){
        $this->common_model->delete('expense_entry', array('id' => $id));

        $msg = "Successfully Deleted Of Your Selected Expense Entry";
        $this->session->set_flashdata('success', $msg);

        redirect('expense/expense_entry_index');
    }


    

    /* --=-> Group Entry Section From Here */

    public function group_entry_index(){
        $data = array();

        $sub_data['group_entry_list']          = $this->common_model->selectAll('expense_group_entry
');     

        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/expense/group_entry_index', $sub_data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function expense_group_entry(){
        $data = array();
        $sub_data = array();

        $sub_data['district_list']          = $this->common_model->selectAll('district');
        $sub_data['police_station_list']    = $this->common_model->selectAll('police_station');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/expense/group_entry_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function expense_group_edit_form($id){
        $data = array();
        $sub_data = array();
        $sub_data['selected_expense']       = $this->common_model->getInfo('expense_group_entry', array('id' => $id));
        $sub_data['group_entry_list']       = $this->common_model->selectAll('expense_group_entry');
        $sub_data['head_entry_list']        = $this->common_model->selectAll('expense_head_entry');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/expense/group_edit_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function add_group_entry(){
        $data = array();

        $expense_group_entry_last=$this->common_model->getLastRow('expense_group_entry');

        if($expense_group_entry_last ==TRUE){
            $r = explode("-",$expense_group_entry_last->expense_group_entry_code);
        
            $expense_group_entry_code_sum = $r[1]+1;
            $expense_group_entry_code = "EGID-000".$expense_group_entry_code_sum;
        }else{
            $expense_group_entry_code = "EGID-000"."1";
        }

        $data['expense_group_entry_code'] = $expense_group_entry_code;
        $data['expense_group_entry_name'] = $this->input->post('expense_group_entry_name');

        $this->common_model->insert('expense_group_entry', $data);

        $msg = "Your Group Expense Entry Successfully Added ";
        $this->session->set_flashdata('success', $msg);

        redirect('expense/group_entry_index');
    }

    public function update_group_entry(){
        $data = array();

        $id = $this->input->post('expense_group_id');

        //$data['expense_group_entry_code'] = $this->input->post('expense_group_entry_code');
        $data['expense_group_entry_name'] = $this->input->post('expense_group_entry_name');

        $this->common_model->update('expense_group_entry', $data, array('id' => $id));

        $msg = "Successfully Updated Selected Group Expense Entry";
        $this->session->set_flashdata('success', $msg);

        redirect('expense/group_entry_index');
    }

    public function delete_group_expense($id){
        
        $this->common_model->delete('expense_group_entry', array('id' => $id));

        $msg = "Successfully Deleted Selected Group Expense Entry";
        $this->session->set_flashdata('success', $msg);
        redirect('expense/group_entry_index');
    }

    /*  ////    Group Entry End    */


    public function expense_head_entry_index(){
        $data = array();

        $sub_data['head_entry_list']          = $this->common_model->selectAll('expense_head_entry
');

        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/expense/head_entry_index', $sub_data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function expense_head_entry(){
		$data = array();
        $sub_data = array();

        $sub_data['group_entry_list'] = $this->common_model->selectAll('expense_group_entry', 'expense_group_entry_name ASC ');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/expense/head_entry_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
	}

    public function edit_expense_head_entry($id){
        $data = array();
        $sub_data = array();

        $sub_data['expense_head_info'] = $this->common_model->getInfo('expense_head_entry', array('id' => $id));

        $sub_data['group_entry_list'] = $this->common_model->selectAll('expense_group_entry', 'expense_group_entry_name ASC ');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/expense/edit_head_entry_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function add_head_entry(){
        $data = array();

        $expense_head_entry_last=$this->common_model->getLastRow('expense_head_entry');

        if($expense_head_entry_last ==TRUE){
            $r = explode("-",$expense_head_entry_last->expense_head_entry_code);
        
            $expense_head_entry_code_last_sum = $r[1]+1;
            $expense_head_entry_code = "HID-000".$expense_head_entry_code_last_sum;
        }else{
            $expense_head_entry_code = "HID-000"."1";
        }

        $data['expense_group_entry_id'] = $this->input->post('expense_group_entry_name');
        $data['expense_head_entry_code'] = $expense_head_entry_code;
        $data['expense_head_entry_name'] = $this->input->post('expense_head_entry_name');

        $this->common_model->insert('expense_head_entry', $data);

        $msg = "Your New Head Entry Successfully Added";
        $this->session->set_flashdata('success', $msg);

        redirect('expense/expense_head_entry_index');
    }

    public function update_head_entry(){
        $data = array();

        $id=$this->input->post('expense_head_entry_id');

        $data['expense_group_entry_id'] = $this->input->post('expense_group_entry_name');
        $data['expense_head_entry_code'] = $this->input->post('expense_head_entry_code');
        $data['expense_head_entry_name'] = $this->input->post('expense_head_entry_name');

        $this->common_model->update('expense_head_entry', $data, array('id' => $id));

        $msg = "Successfully Updated Selected Head Entry Expense";
        $this->session->set_flashdata('success', $msg);

        redirect('expense/expense_head_entry_index');
    }

    public function delete_expense_head_entry($id){
        $this->common_model->delete('expense_head_entry', array('id' => $id));

        $msg = "Successfully Deleted Selected Head Entry Expense";
        $this->session->set_flashdata('success', $msg);

        redirect('expense/expense_head_entry_index');
    }

    /* Expense Statement */

    public function expense_statement(){
        $data = array();
        $sub_data = array();

        $start_date = date('Y-m-d');
        $end_date = date('Y-m-d');

        $start_date = $this->input->post('start_date');

        @list($m,$d,$y) = explode('/',$start_date);    // split on underscore.
        $start_date = $y.'-'.$m.'-'.$d;           // glue the pieces.

        $end_date = $this->input->post('end_date');


        @list($m,$d,$y) = explode('/',$end_date);    // split on underscore.
        $end_date = $y.'-'.$m.'-'.$d;           // glue the pieces. 

        if(empty($start_date) or empty($end_date)){
            $start_date = date('Y-m-d');
            $end_date = date('Y-m-d');
        }

        $sub_data['expense_entry_list'] = $this->common_model->expense_statement_collection($start_date, $end_date);

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/expense/expense_statement', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

}
