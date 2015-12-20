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
		// $data = array();
		// $data['header'] = $this->load->view('common/header');
		// $data['login_page'] = $this->load->view('common/login_page');
		// $data['footer'] = $this->load->view('common/footer');

		$this->load->view('includes/commission_agent/index');
	}
}
