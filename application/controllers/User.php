<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->model('common_model');
        $this->load->model('user_model');
        $this->load->library('Encrypt');
        $user_id = $this->session->userdata('user_id');
        
        if (!$this->session->userdata('user_logged')) {
        redirect('login');
        }
    }

	public function index(){
		$data = array();
        $sub_data = array();

        $data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('user'), 'page' => 'User'), array('link' => '#', 'page' => 'All User Information'));

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

        $data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('user'), 'page' => 'User'), array('link' => '#', 'page' => 'Add New User'));
        
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
		$data['username'] = $this->input->post('username', TRUE);

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

		// get the Image Extension
  		$path = $_FILES['profile_picture']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);

		$file_name = $id . '.'.$ext;

        $data['profile_picture'] = $file_name;


        if ($_FILES['profile_picture']['size'] > 0) {
            $this->load->library('upload');

            $config['upload_path'] = 'uploads/profile_picture/';
            $config['allowed_types'] = 'gif|jpg|png';
            //$config['max_size'] = '500';
            $config['max_width'] = '25255';
            $config['max_height'] = '545454';
            $config['overwrite'] = TRUE;
            $config['max_filename'] = 25;
            $config['file_name'] = $id;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('profile_picture')) {

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect($_SERVER["HTTP_REFERER"]);
                }

            $photo = $this->upload->file_name;
            
            // echo '<pre>'; print_r($photo); exit();

            $this->load->helper('file');
            $this->load->library('image_lib');
            $config['image_library'] = 'gd2';
            $config['source_image']     = 'uploads/profile_picture/'.$photo;
            $config['new_image']        = 'uploads/profile_picture/thumbs/'.$photo;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 150;
            $config['height'] = 150;
            $config['file_name'] = $id;

            $this->image_lib->clear();
            $this->image_lib->initialize($config);

            if (!$this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
            }
        }

		$msg = "Successfully Create a New User ";
        $this->session->set_flashdata('success', $msg);

        redirect('user/index');
	}

	public function edit_user($id){
		$data = array();

		$user_info['user_info'] = $this->common_model->getInfo('users', array('user_id' => $id));

        $user_info['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('user'), 'page' => 'User'), array('link' => '#', 'page' => 'Edit User Information'));
       
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
		$password_again = $this->input->post('password_again', TRUE);



        if($this->input->post('username') !=''){
		    $data['username'] = $this->input->post('username', TRUE);
        }

        if($this->input->post('user_first_name') !=''){
		    $data['user_first_name'] = $this->input->post('user_first_name', TRUE);
        }

        if($this->input->post('user_last_name') !=''){
		    $data['user_last_name'] = $this->input->post('user_last_name', TRUE);
        }

        if($this->input->post('phone') !=''){
            $data['phone'] = $this->input->post('phone', TRUE);
        }
		
        if($this->input->post('user_email') !=''){
            $data['user_email'] = $this->input->post('user_email', TRUE);
        }
		

		if($password!=null){
			$data['password'] = md5($password);
            if ($password!=$password_again) {
                $msg = "New Password and Confirm Password are not Matched";
                $this->session->set_flashdata('error', $msg);

                redirect($_SERVER['HTTP_REFERER']);
            }
		}

		if((strlen($password)>0) && (strlen($password)<6)){
			$msg = "Please Enter Your Password At Least More Than Six Character";
	        $this->session->set_flashdata('error', $msg);

	        redirect('user/edit_user/'.$user_id);
		}
		

		$data['address'] = $this->input->post('address', TRUE);
		$data['user_type'] = $this->input->post('user_type', TRUE);
		

		if ($_FILES['profile_picture']['size'] > 0) {
            $this->load->library('upload');

            $config['upload_path'] = 'uploads/profile_picture/';
            $config['allowed_types'] = 'gif|jpg|png';
            //$config['max_size'] = '500';
            $config['max_width'] = '25255';
            $config['max_height'] = '545454';
            $config['overwrite'] = TRUE;
            $config['max_filename'] = 25;
            $config['file_name'] = $user_id;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('profile_picture')) {

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect($_SERVER["HTTP_REFERER"]);
                }

            $photo = $this->upload->file_name;
            
            // echo '<pre>'; print_r($photo); exit();

            $this->load->helper('file');
            $this->load->library('image_lib');
            $config['image_library'] = 'gd2';
            $config['source_image']     = 'uploads/profile_picture/'.$photo;
            $config['new_image']        = 'uploads/profile_picture/thumbs/'.$photo;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 150;
            $config['height'] = 150;
            $config['file_name'] = $id;

            $this->image_lib->clear();
            $this->image_lib->initialize($config);

            if (!$this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
            }

            // get the Image Extension
            $path = $_FILES['profile_picture']['name'];
            if($path!=''){
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $file_name = $user_id . '.'.$ext;

                $data['profile_picture'] = $file_name;
            }
            
        }	
	        

        $this->common_model->update('users', $data, array('user_id' => $user_id));
        
        /* ------------------------------------------- */

		$msg = "Successfully Update Your Selected User ";
        $this->session->set_flashdata('success', $msg);

        redirect('user/index');
	}

    // Fully Copy "update_selected_user" Method 
	public function update_my_profile(){
        $data = array();
        $user_id = $this->input->post('user_id', TRUE);
        $password = $this->input->post('password', TRUE);
        $password_again = $this->input->post('password_again', TRUE);



        if($this->input->post('username') !=''){
            $data['username'] = $this->input->post('username', TRUE);
        }

        if($this->input->post('user_first_name') !=''){
            $data['user_first_name'] = $this->input->post('user_first_name', TRUE);
        }

        if($this->input->post('user_last_name') !=''){
            $data['user_last_name'] = $this->input->post('user_last_name', TRUE);
        }

        if($this->input->post('phone') !=''){
            $data['phone'] = $this->input->post('phone', TRUE);
        }
        
        if($this->input->post('user_email') !=''){
            $data['user_email'] = $this->input->post('user_email', TRUE);
        }
        

        if($password!=null){
            $data['password'] = md5($password);
            if ($password!=$password_again) {
                $msg = "New Password and Confirm Password are not Matched";
                $this->session->set_flashdata('error', $msg);

                redirect($_SERVER['HTTP_REFERER']);
            }
        }

        if((strlen($password)>0) && (strlen($password)<6)){
            $msg = "Please Enter Your Password At Least More Than Six Character";
            $this->session->set_flashdata('error', $msg);

            redirect('user/edit_user/'.$user_id);
        }
        

        $data['address'] = $this->input->post('address', TRUE);
        $data['user_type'] = $this->input->post('user_type', TRUE);
        

        if ($_FILES['profile_picture']['size'] > 0) {
            $this->load->library('upload');

            $config['upload_path'] = 'uploads/profile_picture/';
            $config['allowed_types'] = 'gif|jpg|png';
            //$config['max_size'] = '500';
            $config['max_width'] = '25255';
            $config['max_height'] = '545454';
            $config['overwrite'] = TRUE;
            $config['max_filename'] = 25;
            $config['file_name'] = $user_id;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('profile_picture')) {

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect($_SERVER["HTTP_REFERER"]);
                }

            $photo = $this->upload->file_name;
            
            $this->load->helper('file');
            $this->load->library('image_lib');
            $config['image_library'] = 'gd2';
            $config['source_image']     = 'uploads/profile_picture/'.$photo;
            $config['new_image']        = 'uploads/profile_picture/thumbs/'.$photo;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 150;
            $config['height'] = 150;
            $config['file_name'] = $id;

            $this->image_lib->clear();
            $this->image_lib->initialize($config);

            if (!$this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
            }

            // get the Image Extension
            $path = $_FILES['profile_picture']['name'];
            if($path!=''){
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $file_name = $user_id . '.'.$ext;

                $data['profile_picture'] = $file_name;
            }
            
        }   
            

        $this->common_model->update('users', $data, array('user_id' => $user_id));
        
        /* ------------------------------------------- */

        $msg = "Successfully Update My Profile ";
        $this->session->set_flashdata('success', $msg);

        redirect('auth/my_profile');
    }

    public function delete_seleted_user($user_id){
        //$this->common_model->delete('users', array('user_id' => $user_id));
        $this->common_model->change_status_unpublished('users', array('user_id' => $user_id));

        $msg = "Seuccessfully Delete Your Selected User";
        $this->session->set_flashdata('success', $msg);
        redirect($_SERVER["HTTP_REFERER"]);
    }
	

    /* For Ajax Call */

    public function check_username($username){
        
        $username=trim($username);
        $username=$this->user_model->check_username($username);

        if($username==TRUE){$username = array( 'value' => 1);}else{$username = array( 'value' => 2);}
        

        echo json_encode($username);
    }

    public function check_email_address($email){
        $email=trim($email);
        $email=$this->user_model->check_username($email);
        // echo 'pre';
        // print_r($email);
        // exit();
        echo json_encode($email);
    }
}