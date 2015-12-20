<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense extends CI_Controller {

	public $_notification = "";

    public function __construct() {
        parent::__construct();

        
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

    public function add_form(){
        $data = array();
        $sub_data = array();

        $this->load->model('common_model');

        $sub_data['district_list']          = $this->common_model->selectAll('district');
        $sub_data['police_station_list']    = $this->common_model->selectAll('police_station');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/expense/add_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

	public function expense_entry_form(){
        $data = array();
        $sub_data = array();

        $this->load->model('common_model');

        $sub_data['district_list']          = $this->common_model->selectAll('district');
        $sub_data['police_station_list']    = $this->common_model->selectAll('police_station');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/expense/add_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function expense_main_head(){
        $data = array();
        $sub_data = array();

        $this->load->model('common_model');

        $sub_data['district_list']          = $this->common_model->selectAll('district');
        $sub_data['police_station_list']    = $this->common_model->selectAll('police_station');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/expense/due_collection_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function expense_head(){
		$data = array();
        $sub_data = array();

        $this->load->model('common_model');

        $sub_data['district_list']          = $this->common_model->selectAll('district');
        $sub_data['police_station_list']    = $this->common_model->selectAll('police_station');

        $data['header']                     = $this->load->view('common/header', '', TRUE);
        $data['sidebar']                    = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']                 = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']               = $this->load->view('includes/expense/due_collection_form', $sub_data, TRUE);
        $data['footer']                     = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
	}

}
