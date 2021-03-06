<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$data = array();
		$sub_data = array();
		
                $data['header'] = $this->load->view('common/header', '', TRUE);
                $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
                $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
                $data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
                $data['footer'] = $this->load->view('common/footer', '', TRUE);
                
		$this->load->view('master_dashboard', $data);
	}

	// public function haji_info(){
	// 	$data = array();
	// 	$sub_data = array();
	// 	$data['header'] = $this->load->view('common/header', '', TRUE);
	// 	$data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
	// 	$sub_data['breadcrumb'] = $this->load->view('common/breadcrumb', '', TRUE);
	// 	$data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
	// 	$data['footer'] = $this->load->view('common/footer', '', TRUE);
	// 	$data['main_content'] = $this->load->view('includes/main_content', $sub_data, TRUE);

	// 	$this->load->view('dashboard', $data);
	// }

}
