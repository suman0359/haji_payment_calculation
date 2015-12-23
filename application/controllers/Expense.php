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

    
    public function delete($id){
        
        $this->common_model->delete('expense_group_entry', array('id' => $id));
        redirect('expense');
    }

    // public function add_form(){
    //     $data = array();
    //     $sub_data = array();

        

    //     $sub_data['district_list']          = $this->common_model->selectAll('district');
    //     $sub_data['police_station_list']    = $this->common_model->selectAll('police_station');

    //     $data['header']                     = $this->load->view('common/header', '', TRUE);
    //     $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
    //     $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
    //     $data['main_content']               = $this->load->view('includes/expense/add_form', $sub_data, TRUE);
    //     $data['footer']                     = $this->load->view('common/footer', '', TRUE);

    //     $this->load->view('master_dashboard', $data);
    // }

    public function expense_entry_index(){
        $data = array();

        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/expense/index', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }


	public function expense_entry_form(){
        $data = array();
        $sub_data = array();

        $sub_data['group_entry_list']          = $this->common_model->selectAll('expense_group_entry');
        $sub_data['head_entry_list']          = $this->common_model->selectAll('expense_head_entry');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/expense/add_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function add_entry_form(){
        $data = array();


        $data['date'] = $this->input->post('date');
        $data['expense_number'] = $this->input->post('expense_number');
        $data['cheque_number'] = $this->input->post('cheque_number');
        $data['cheque_date'] = $this->input->post('cheque_date');
        $data['bank_name'] = $this->input->post('bank_name');
        $data['bank_acc_number'] = $this->input->post('bank_acc_number');
        $data['amount'] = $this->input->post('amount');

        $this->common_model->insert('expense_entry', $data);

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

    public function add_group_entry(){
        $data = array();

        $data['expense_group_entry_code'] = $this->input->post('expense_group_entry_code');
        $data['expense_group_entry_name'] = $this->input->post('expense_group_entry_name');

        $this->common_model->insert('expense_group_entry', $data);

        redirect('expense');
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

    public function add_head_entry(){
        $data = array();

        $data['expense_group_entry_id'] = $this->input->post('expense_group_entry_name');
        $data['expense_head_entry_code'] = $this->input->post('expense_head_entry_code');
        $data['expense_head_entry_name'] = $this->input->post('expense_head_entry_name');

        $this->common_model->insert('expense_head_entry', $data);

        redirect('expense/expense_head_entry_index');
    }

}
