<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('email');
}

    public function index() {
        //redirect('email/send_email');
        redirect('email/send_to_mail');
    }



    
}