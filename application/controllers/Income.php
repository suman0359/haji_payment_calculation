<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Income extends CI_Controller {

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
        $data['main_content'] = $this->load->view('includes/income/index', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

		$this->load->view('master_dashboard', $data);
	}

    public function group_index(){
        $data = array();

        $data['income_group_list'] = $this->common_model->selectAll('income_group');

        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/income/group_index', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function group_form(){
        $data = array();

        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/income/group_form', '', TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function add_group_data(){

        $data = array();
        $data['income_group_code'] = $this->input->post('income_group_code');
        $data['income_group_name'] = $this->input->post('income_group_name');

        $this->common_model->insert('income_group', $data);

        redirect('income/group_index');

    }

    public function delete_income_group($id){
        
        $this->common_model->delete('income_group', array('id' => $id));
        redirect('income/group_index');
    }

    /* //End Income Group Section */

    public function head_index(){
        $data = array();

        $sub_data['income_head_list'] = $this->common_model->selectAll('income_head');

        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/income/head_index', $sub_data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function head_form(){
        $data = array();

        $sub_data['income_group_list'] = $this->common_model->selectAll('income_group');

        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/income/head_form', $sub_data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function add_head_data(){
        $data = array();
        $data['income_group_id'] = $this->input->post('income_group_id');
        $data['income_head_code'] = $this->input->post('income_head_code');
        $data['income_head_name'] = $this->input->post('income_head_name');

        $this->common_model->insert('income_head', $data);

        redirect('income/head_index');
    }

    
    public function delete_income_head($id){
        
        $this->common_model->delete('income_head', array('id' => $id));
        redirect('income/head_index');
    }

    

}
