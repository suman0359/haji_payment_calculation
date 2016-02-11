<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	function index(){
		echo date('Y-m-d');
	}
}