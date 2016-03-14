<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public $_notification = "";

    public function __construct() {
        parent::__construct();

        $this->load->model('common_model');
        $this->load->model('reports_model');

        $this->load->library('Encrypt');
        $user_id = $this->session->userdata('user_id');
        
        if (!$this->session->userdata('user_logged')) {
        redirect('login');
        }
    }

	
    public function income_ledger_statement(){
        $query_data = array();

            $income_group_id    = NULL;
            $income_head_id     = NULL;
            $payment_mode       = NULL;
            $start_date         = NULL;
            $end_date           = NULL; 

        if ($this->input->post('income_group_id')!='') {
            $income_group_id = $query_data['income_group_id']=$this->input->post('income_group_id');
        }

        if ($this->input->post('income_head_id')!='') {
            $income_head_id = $query_data['income_head_id']=$this->input->post('income_head_id');
        }
        
        if ($this->input->post('payment_mode')!='') {
            $payment_mode = $query_data['payment_mode']=$this->input->post('payment_mode');
        }
        
        if ($this->input->post('start_date')!='') {
            $start_date = $query_data['start_date']=$this->input->post('start_date');

            @list($m,$d,$y) = explode('/',$start_date);    // split on underscore.
            $start_date = $y.'-'.$m.'-'.$d;           // glue the pieces.
        }

        if ($this->input->post('end_date')!='') {
            $end_date = $query_data['end_date']=$this->input->post('end_date');

            @list($m,$d,$y) = explode('/',$end_date);    // split on underscore.
            $end_date = $y.'-'.$m.'-'.$d;
        }

        $sub_data['income_ledger_statement'] = $this->reports_model->income_ledger_statement($income_group_id, $income_head_id, $payment_mode, $start_date, $end_date);

        $sub_data['income_group_list'] = $this->common_model->selectAll('income_group');

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('haji_info'), 'page' => 'Hajji Info'), array('link' => '#', 'page' => 'Hajj Contact And Due Statement'));

        $data['header']         = $this->load->view('common/header', '', TRUE);
        $data['sidebar']        = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']     = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']   = $this->load->view('includes/reports/income_ledger_statement', $sub_data, TRUE);
        $data['footer']         = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

	public function expense_ledger_statement(){
        $query_data = array();

            $expense_group_id    = NULL;
            $expense_head_id     = NULL;
            $payment_mode       = NULL;
            $start_date         = NULL;
            $end_date           = NULL; 

        if ($this->input->post('expense_group_id')!='') {
            $expense_group_id = $query_data['expense_group_id']=$this->input->post('expense_group_id');
        }

        if ($this->input->post('expense_head_id')!='') {
            $expense_head_id = $query_data['expense_head_id']=$this->input->post('expense_head_id');
        }
        
        if ($this->input->post('payment_mode')!='') {
            $payment_mode = $query_data['payment_mode']=$this->input->post('payment_mode');
        }
        
        if ($this->input->post('start_date')!='') {
            $start_date = $query_data['start_date']=$this->input->post('start_date');

            @list($m,$d,$y) = explode('/',$start_date);    // split on underscore.
            $start_date = $y.'-'.$m.'-'.$d;           // glue the pieces.
        }

        if ($this->input->post('end_date')!='') {
            $end_date = $query_data['end_date']=$this->input->post('end_date');

            @list($m,$d,$y) = explode('/',$end_date);    // split on underscore.
            $end_date = $y.'-'.$m.'-'.$d;
        }

        $sub_data['expense_ledger_statement'] = $this->reports_model->expense_ledger_statement($expense_group_id, $expense_head_id, $payment_mode, $start_date, $end_date);


        $sub_data['expense_group_list'] = $this->common_model->selectAll('expense_group_entry');

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('haji_info'), 'page' => 'Hajji Info'), array('link' => '#', 'page' => 'Hajj Contact And Due Statement'));

        $data['header']         = $this->load->view('common/header', '', TRUE);
        $data['sidebar']        = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']     = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']   = $this->load->view('includes/reports/expense_ledger_statement', $sub_data, TRUE);
        $data['footer']         = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    /*
    * AJAX ReQuest 
    */

    public function get_income_head_list($income_group_id){
        $income_group_id=trim($income_group_id);
        $head_list=$this->common_model->selectAllWhere('income_head', array('income_group_id' => $income_group_id));
        
        echo json_encode($head_list);
    }

    public function get_expense_head_list($expense_group_id){
        $expense_group_id=trim($expense_group_id);
        $head_list=$this->common_model->selectAllWhere('expense_head_entry', array('expense_group_entry_id' => $expense_group_id));
        
        echo json_encode($head_list);
    }

}
