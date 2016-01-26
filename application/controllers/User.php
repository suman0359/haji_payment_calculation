<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
        $sub_data = array();

        

        $data['users']=$this->common_model->selectAll('users');

        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/user/index', $data, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
	}

	public function new_user(){
		$data = array();
        
        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/user/add_user', $data, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
	}

	public function save_new_user_info(){
		
	}

	public function edit_user($id){
		$data = array();

		$user_info['user_info'] = $this->common_model->getInfo('users', array('user_id' => $id));
       
        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/user/edit_user', $user_info, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
	}

	public function update_selected_user(){

	}

	public function delete_seleted_user(){

	}
}