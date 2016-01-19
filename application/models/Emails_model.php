<?php
/**
 * Emails Model
 *
 * @package		Code Igniter - Emails Model
 * @author		Alistair Shaw (alistairshaw@gmail.com)
 * @link		https://github.com/alistairshaw/codeigniter-emails-model
 * @version		1.1
 */
class Emails_model extends CI_Model {
	
	var $protocol = 'mail'; //smtp, mail or sendmail
	
	var $smtp_host = '';
	var $smtp_user = '';
	var $smtp_pass = '';
	var $smtp_port = '';
	
	var $sendmail_path = '/usr/sbin/sendmail';
	
	//var $mailfrom = 'info@ambitiousdigital.co.uk';
	var $mailfrom = 'admin@qutubhajj.com';

	var $mailfromname = 'Ambitious Test Server';
	
	var $autocc = '';
	
	var $default_subject = 'From Ambitious Test Server';
	
	var $defaultmailto = 'tasfirsuman@gmail.com';
	/*
	 * send_email
	 *
	 * Sends an email using optional templates or basic template with list of variables
	 *
	 * @param		string		$email_address		Email address to send the message to. If left black $this->defaultmailto will be used.
	 * @param		string		$message_content	Content of email
	 * @param		array		$message_vars		Array of variables to be listed in the email (particularly useful for contact forms)
	 * @param		string		$message_subject	Subject line for the email
	 * @param		string		$message_view		The Code Igniter view to be used for a template. If left blank a basic email will be sent.
	 * @param		string		$from				Email address the message should be from. If left blank the $this->mailfrom default will be used
	 * @param		string		$fromname			Name the message should be from. If left blank the $this->mailfromname default will be used
	 *
	 * @return		bool		TRUE if mail sent | FALSE if failed
	*/				
	function send_email($email_address = '', $message_content = '', $message_vars = array(), $message_subject = '', $message_view = '', $from = '', $fromname = '')
	{
		
		if ($email_address == '') $email_address = $this->defaultmailto;
		
		$this->load->library('email');
		
		//Set up protocol and login details if SMTP
		$config['protocol'] = $this->protocol;
		if ($this->protocol == 'smtp')
		{
			$config['smtp_host'] = $this->smtp_host;
			$config['smtp_user'] = $this->smtp_user;
			$config['smtp_pass'] = $this->smtp_pass;
		}
		
		if ($this->protocol == 'sendmail')
		{
			$config['mailpath'] = $this->sendmail_path;
		}
		$config['wordwrap'] = FALSE;
		$config['mailtype'] = 'html';
		$config['crlf'] 	= "\r\n";
		$config['newline'] 	= "\r\n";		
		
		//Initialise CI mail
		$this->email->initialize($config);
		//Setup from details
		if ($from == '') $from = $this->mailfrom;
		if ($fromname == '') $fromname = $this->mailfromname;
		$this->email->from($from, $fromname);
		
		//Setup address details and CC
		$this->email->to($email_address); 
		if ($this->autocc !== '') $this->email->bcc($this->autocc); 
		
		//Subject line
		$subject = ($message_subject == '') ? $this->default_subject : $message_subject;
		$this->email->subject($subject);
		
		//If a view template is set then load it, otherwise just send message content and variables
		$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" /><meta name="apple-mobile-web-app-capable" content="yes" /></head><body style="background-color: red !important; margin: 0; padding: 0;"><p>This is just testing paragraphhhhhhh</p>';
		
		if ($message_view == '')
		{
			
			$message .= $message_content;

			foreach ($message_vars as $key=>$field)
			{
				$message .= '<p><strong>This is just testing paragraph' . $key . '</strong><br />' . $field . '</p>';
				
			}
			
		}
		else
		{
			
			//In the view template you can put the keys in as [[KEYNAME]] to replace them with items from the array
			$message .= $this->load->view($message_view, '', true);
			$message = str_replace('[[CONTENT]]', $message_content, $message);
			foreach ($message_vars as $key=>$field)
			{
				$message = str_replace('[[' . $key . ']]', $field, $message);
			}
			
		}
		$message .= '</body></html>';
		
		$this->email->message($message);	
		
		//aaand send the email!
		return $this->email->send();
				
	}
	
}
?>