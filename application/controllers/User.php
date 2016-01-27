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
		$data = array();

		$password = $this->input->post('password', TRUE);

		$data['user_first_name'] = $this->input->post('user_first_name', TRUE);
		$data['user_last_name'] = $this->input->post('user_last_name', TRUE);
		$data['phone'] = $this->input->post('phone', TRUE);
		$data['user_email'] = $this->input->post('user_email', TRUE);

		$data['password'] = md5($password);

		if((strlen($password)>0) && (strlen($password)<6)){
			$msg = "Please Enter Your Password At Least More Than Six Character";
	        $this->session->set_flashdata('error', $msg);

	        redirect('user/new_user/');
		}
		

		$data['address'] = $this->input->post('address', TRUE);
		$data['user_type'] = $this->input->post('user_type', TRUE);

		$this->common_model->insert('users', $data);

		$id = $this->db->insert_id();
        $temp_path = $_FILES['profile_picture']['tmp_name'];
        $upload_path = 'uploads/profile_picture/' . $id . '.jpg';
        $thumb_path = 'uploads/profile_picture/thumbs/'. $id . '.jpg';

        
        move_uploaded_file($temp_path, $upload_path);
        copy($upload_path, $thumb_path);

		$msg = "Successfully Create a New User ";
        $this->session->set_flashdata('success', $msg);

        redirect('user/index');
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
		$data = array();
		$user_id = $this->input->post('user_id', TRUE);
		$password = $this->input->post('password', TRUE);

		$data['username'] = $this->input->post('username', TRUE);
		$data['user_first_name'] = $this->input->post('user_first_name', TRUE);
		$data['user_last_name'] = $this->input->post('user_last_name', TRUE);
		$data['phone'] = $this->input->post('phone', TRUE);
		$data['user_email'] = $this->input->post('email', TRUE);

		if($password!=null){
			$data['password'] = md5($password);
		}

		if((strlen($password)>0) && (strlen($password)<6)){
			$msg = "Please Enter Your Password At Least More Than Six Character";
	        $this->session->set_flashdata('error', $msg);

	        redirect('user/edit_user/'.$user_id);
		}
		

		$data['address'] = $this->input->post('address', TRUE);
		$data['user_type'] = $this->input->post('user_type', TRUE);
		

		

		// $id = $this->db->insert_id();
		if($_FILES['profile_picture']['name']!=null){
			
		
	  //       $temp_path = $_FILES['profile_picture']['tmp_name'];

	  //       // get the Image Extension
	  		$path = $_FILES['profile_picture']['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);

	        $upload_path = 'uploads/profile_picture/' . $user_id . '.'.$ext;
	        $thumbs_path = 'uploads/profile_picture/thumbs/'. $user_id . '.'.$ext;

	        $data['profile_picture'] = $thumbs_path;

	  //       move_uploaded_file($temp_path, $upload_path);
	  //       //copy($upload_path, $thumb_path);
	  //       // Image Thumbnail Section Start From Here
	  //       $config['image_library'] = 'gd2';
			// $config['source_image'] = $thumb_path;
			// $config['create_thumb'] = TRUE;
			// $config['maintain_ratio'] = TRUE;
			// $config['width']         = 75;
			// $config['height']       = 50;

			// $this->load->library('image_lib', $config);
			
			// $this->image_lib->resize();

			$this->load->model('gallery_model');
		
			
			$this->gallery_model->do_upload($upload_path, $thumbs_path);
			

        }

        $this->common_model->update('users', $data, array('user_id' => $user_id));
        


        

        /* ------------------------------------------- */

		$msg = "Successfully Update Your Selected User ";
        $this->session->set_flashdata('success', $msg);

        redirect('user/index');
	}

	public function delete_seleted_user(){

	}
}