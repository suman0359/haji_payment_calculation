<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index() {
        
    }

    public function check_login() {
        $this->load->library('form_validation');
        
//        echo '<pre>';
//        print_r($_POST);
//        exit();

        $this->form_validation->set_rules('username', 'username', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|xss_clean');

        if ($this->form_validation->run() !== FALSE) {
            $msg = "There is an error, Please try again!!";
            $this->session->set_flashdata('error', $msg);
            $this->load->view('includes/auth/login_page');
        } else {

            $username = $this->input->post('username');
            $password = $this->input->post('password');

//            echo '<pre>';
//            print_r($username);
//            print_r($password);
//            exit();

            $checkdata = $this->Auth_model->checklogin($username, $password);

//            echo '<pre>';
//            print_r($checkdata);
//            exit();
            
            if (!empty($checkdata)) {
                $userinfo = array(
                    'name' => $checkdata->user_last_name,
                    'username' => $checkdata->username,
                    'uid' => $checkdata->user_id,
                    'user_type' => $checkdata->user_type,
                    'profile_picture' => $checkdata->profile_picture,
                                        
                    'user_logged' => TRUE
                );

                $this->session->set_userdata($userinfo);
                
                
                /*
                  $logininfo = $this->Logins->updateLoginInfo($uid);
                 */
                redirect('dashboard');
            } else {
                $msg = "There is an error in login, Please try again!!";
                $this->session->set_flashdata('error', $msg);
                $this->load->view('includes/auth/login_page');
            }
        }
    }

    public function logout() {
        //$msg = "Operation Successfull!!";
        //$this->session->set_flashdata('success', $msg);

        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }

}
