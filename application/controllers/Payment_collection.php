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

		$data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/payment_collection/index', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

		$this->load->view('master_dashboard', $data);
	}

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

        redirect('');

    }

    public function due_collection(){
		$data = array();
        $sub_data = array();

        $this->load->model('common_model');

        $sub_data['district_list']          = $this->common_model->selectAll('district');
        $sub_data['police_station_list']    = $this->common_model->selectAll('police_station');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/payment_collection/due_collection_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
	}

}
