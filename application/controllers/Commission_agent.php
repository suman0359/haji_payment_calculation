<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commission_agent extends CI_Controller {

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

        $sub_data = array();
        $this->load->model('common_model');

        $sub_data['commission_agent_list'] = $this->common_model->selectAll('commission_agent');

	$data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/commission_agent/index', $sub_data, TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

	$this->load->view('master_dashboard', $data);
	}

	public function add_form(){
        $data = array();
        $sub_data = array();

        $this->load->model('common_model');

        $sub_data['commission_agent_list'] = $this->common_model->selectAll('commission_agent');
        
        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/commission_agent/add_form', $sub_data, TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function update_form($id){
	$data = array();
        $sub_data = array();

        $this->load->model('common_model');

        $sub_data['selected_commission_agent'] = $this->common_model->selectWhere('commission_agent', array('id' => $id));
        
        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/commission_agent/update_form', $sub_data, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
	}
	
	public function update(){
	$data = array();
	
	$id= $this->input->post('id');

        $data['commission_agent_code'] = $this->input->post('agent_code');
        $data['commision_agent_name'] = $this->input->post('agent_name');
        $data['commision_agent_address'] = $this->input->post('address');
        $data['commision_agent_mobile'] = $this->input->post('mobile');
        $data['passport_no'] = $this->input->post('passport_no');
        
        
	$this->load->model('common_model');
        $this->common_model->update('commission_agent', $data, array('id' => $id));

        redirect('commission_agent');
	}

    public function add(){
        $data = array();

        $data['commission_agent_code'] = $this->input->post('agent_code');
        $data['commision_agent_name'] = $this->input->post('agent_name');
        $data['commision_agent_address'] = $this->input->post('address');
        $data['commision_agent_mobile'] = $this->input->post('mobile');
        $data['passport_no'] = $this->input->post('passport_no');


        $this->load->model('common_model');
        $this->common_model->insert('commission_agent', $data);

        redirect('commission_agent');

    }
}
