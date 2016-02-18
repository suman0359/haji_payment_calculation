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
        $data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('income'), 'page' => 'Income'), array('link' => '#', 'page' => 'Income Group Index'));
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

        $income_group_code_last=$this->common_model->getLastRow('income_group');

        if($income_group_code_last ==TRUE){
            $r = explode("-",$income_group_code_last->income_group_code);
        
            $income_group_code_last_sum = $r[1]+1;
            $income_group_code = "HID-000".$income_group_code_last_sum;
        }else{
            $income_group_code = "HID-000"."1";
        }
        
        $data['income_group_code'] = $income_group_code;
        $data['income_group_name'] = $this->input->post('income_group_name');

        $this->common_model->insert('income_group', $data);

        $msg = "Successfully Added New Income Group";
        $this->session->set_flashdata('success', $msg);

        redirect('income/group_index');

    }

    public function edit_group_data(){

        $data = array();

        $id = $data['id'] = $this->input->post('income_group_id');



        //$data['income_group_code'] = $this->input->post('income_group_code');
        $data['income_group_name'] = $this->input->post('income_group_name');

        $this->common_model->update('income_group', $data, array('id' => $id));

        $msg = "Successfully Updated Selected Group Income Entry";
        $this->session->set_flashdata('success', $msg);

        redirect('income/group_index');

    }

    public function edit_income_group($id){
        $data = array();

        $sub_data['income_group'] = $this->common_model->getInfo('income_group', array('id' => $id));
        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('income'), 'page' => 'Income'), array('link' => '#', 'page' => 'Edit Income Group'));


        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/income/edit_group_form', $sub_data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function delete_income_group($id){
        
        $this->common_model->delete('income_group', array('id' => $id));

        $msg = "Successfully Deleted Selected Income Group Entry";
        $this->session->set_flashdata('success', $msg);

        redirect('income/group_index');
    }

    /* //End Income Group Section */

    public function head_index(){
        $data = array();

        $sub_data['income_head_list'] = $this->common_model->selectAll('income_head');
        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('income'), 'page' => 'Income'), array('link' => '#', 'page' => 'Income Head Index'));
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

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('income'), 'page' => 'Income'), array('link' => '#', 'page' => 'Head Form'));

        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/income/head_form', $sub_data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function edit_income_head($id){
        $sub_data['income_head'] = $this->common_model->getInfo('income_head', array('id' => $id));

        $sub_data['income_group_list'] = $this->common_model->selectAll('income_group');

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('income'), 'page' => 'Income'), array('link' => '#', 'page' => 'Edit Income Head'));

        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/income/edit_head_form', $sub_data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function add_head_data(){
        $data = array();

        $income_head_last=$this->common_model->getLastRow('income_head');

        if($income_head_last ==TRUE){
            $r = explode("-",$income_head_last->income_head_code);
        
            $income_head_last_sum = $r[1]+1;
            $income_head_code = "HID-000".$income_head_last_sum;
        }else{
            $income_head_code = "HID-000"."1";
        }

        $data['income_group_id'] = $this->input->post('income_group_id');
        $data['income_head_code'] = $income_head_code;
        $data['income_head_name'] = $this->input->post('income_head_name');

        $this->common_model->insert('income_head', $data);

        $msg = "Successfully Updated Selected Income Head Entry Information";
        $this->session->set_flashdata('success', $msg);

        redirect('income/head_index');
    }

    public function edit_head_data(){
        $data = array();

        $income_head_id = $data['id'] = $this->input->post('income_head_id');

        $data['income_group_id'] = $this->input->post('income_group_id');
        //$data['income_head_code'] = $this->input->post('income_head_code');
        $data['income_head_name'] = $this->input->post('income_head_name');

        $this->common_model->update('income_head', $data, array('id' => $income_head_id));
    //    $this->common_model->update('income_group', $data, array('id' => $id));

        redirect('income/head_index');
    }

    
    public function delete_income_head($id){
        
        $this->common_model->delete('income_head', array('id' => $id));

        $msg = "Successfully Deleted Selected Income Head Information";
        $this->session->set_flashdata('success', $msg);

        redirect('income/head_index');
    }

    

}
