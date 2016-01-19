<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('email');
}

    public function index() {
        //redirect('email/send_email');
        redirect('email/send_to_mail');
    }



    public function send_email() {
        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset']  = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        $this->email->from('admin@qutubhajj.com', 'Tasfir Hossain Suman');
        $this->email->to('tasfir_suman@yahoo.com');

        $this->email->subject('This is a html email');
        $html = 'This is an <b>HTML</b> email';
        $this->email->message($html);

        $this->email->send();

        echo $this->email->print_debugger();
    }

    public function send_to_mail(){
        $this->load->model('emails_model');

        $message_vars = array();
        //$data = $this->load->view('includes/mail/mail');
        $message_vars['message_vars'] = 'This is an <b>HTML</b> email';
        $message_vars['message_vars'] = 'This is an <b>HTML</b> email';
        $message_vars['message_vars'] = 'This is an <b>HTML</b> email';



        $this->emails_model->send_email('tasfir_suman@yahoo.com', '', '', '', '', '', '');

        echo $this->email->print_debugger();
    }

    public function sendMail(){
        # Create an instance of the notifications handler and send the welcome email
        $notificationHandler = new Example_Notifications();
        $notificationHandler->sendWelcomeEmail("Billybob", "asd123", "tasfirsuman@gmail.com");
    }
}