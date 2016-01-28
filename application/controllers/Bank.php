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

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/bank/add_new_bank', '', TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function bank_account_list(){
    	$data = array();
    	$bank_account_data = array();
        $bank_account_data['bank_account_list']=$this->common_model->selectAllStatus('bank_account_info');

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
    	$bank_info['bank_info'] = $this->common_model->getInfoStatus('bank_info', array('id' => $id));

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

    	$data['bank_id'] = $this->input->post('bank_name');
    	$data['account_number'] = $this->input->post('account_number');
    	$data['account_name'] = $this->input->post('account_name');
    	$data['amount'] = $this->input->post('amount');
    	$data['transaction_type'] = $this->input->post('transaction_type');

    }

    public function bank_widthdrawal_form(){
    	$data = array();
    	$bank_data = array();
        $bank_data['bank_list']=$this->common_model->selectAllStatus('bank_info');

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/bank/bank_widthdrawal_form', $bank_data, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_bank_withdraw(){
    	$data = array();

    	$bank_id = $this->input->post('bank_id');

    	$data['bank_name'] = $this->input->post('bank_name', TRUE);
    	$data['branch_name'] = $this->input->post('branch_name', TRUE);
    	$data['account_name'] = $this->input->post('account_name', TRUE);
    	$data['account_number'] = $this->input->post('account_number', TRUE);
    	$data['entry_by'] = $this->session->userdata('uid');
    	$data['entry_date'] = date('Y-m-d');

    	$this->common_model->insert('bank_transaction', $data);

    	$msg = "Create Updated Selected Bank Successfully";
        $this->session->set_flashdata('success', $msg);
        
        redirect('bank/bank_list');
    }

    public function bank_transaction_statement(){

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