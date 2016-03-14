<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commission_agent extends CI_Controller {

	public $_notification = "";

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
        

        $sub_data['commission_agent_list'] = $this->common_model->selectAll('commission_agent');

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('commission_agent'), 'page' => 'Commission Agent'));

	    $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/commission_agent/index', $sub_data, TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

	   $this->load->view('master_dashboard', $data);
	}

	public function add_form(){
        $data = array();
        $sub_data = array();

        $sub_data['commission_agent_list'] = $this->common_model->selectAll('commission_agent');

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('commission_agent'), 'page' => 'Commission Agent'), array('link' => '#', 'page' => 'Add Commission Agent'));

        
        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/commission_agent/add_form', $sub_data, TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function update_form($id){
	$data = array();
        $sub_data = array();

        $sub_data['selected_commission_agent'] = $this->common_model->selectWhere('commission_agent', array('id' => $id));
        
        $data['header'] = $this->load->view('common/header', '', TRUE);
        $data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar'] = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/commission_agent/update_form', $sub_data, TRUE);
        //$data['main_content'] = $this->load->view('includes/main_content', '', TRUE);
        $data['footer'] = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
	}
	
	public function update(){
	$data = array();
	
	$id= $this->input->post('id');

        //$data['commission_agent_code'] = $this->input->post('agent_code');
        $data['commision_agent_name'] = $this->input->post('agent_name');
        $data['commision_agent_address'] = $this->input->post('address');
        $data['commision_agent_mobile'] = $this->input->post('mobile');
        $data['passport_no'] = $this->input->post('passport_no');
        
        $this->common_model->update('commission_agent', $data, array('id' => $id));

        $msg = "Successfully Updated Your Selected Commission Agent";
        $this->session->set_flashdata('success', $msg);     

        redirect('commission_agent');
	}

    public function add(){
        $data = array();

        $commission_agent_code_last=$this->common_model->getLastRow('commission_agent');

        if($commission_agent_code_last ==TRUE){
            $r = explode("-",$commission_agent_code_last->commission_agent_code);
        
            $commission_agent_code_last_sum = $r[1]+1;
            $commission_agent_code = "CID-".sprintf('%03d', $commission_agent_code_last_sum);
            
        }else{
            $commission_agent_code = "CID-001";
        }

        $data['commission_agent_code'] = $commission_agent_code;
        $data['commision_agent_name'] = $this->input->post('agent_name');
        $data['commision_agent_address'] = $this->input->post('address');
        $data['commision_agent_mobile'] = $this->input->post('mobile');
        $data['passport_no'] = $this->input->post('passport_no');
        
        $this->common_model->insert('commission_agent', $data);

        $msg = "Successfully Your New Commission Agent";
        $this->session->set_flashdata('success', $msg);

        redirect('commission_agent');

    }

     public function delete($id){
        $this->common_model->delete('commission_agent', array('id' => $id));

        $msg = "Successfully Delete Your Selected Commission Agent";
        $this->session->set_flashdata('success', $msg);

        redirect('commission_agent/index');
    }

    public function set_group_leader_contact_amount($group_leader_id){
        $data = array();
        $sub_data = array();

        $sub_data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('haji_info'), 'page' => 'Haji Info'), array('link' => '#', 'page' => 'Group Leader Contact '));

        $sub_data['group_leader_information'] = $this->common_model->getInfo('commission_agent', array('id' => $group_leader_id));

        $data['header']         = $this->load->view('common/header', '', TRUE);
        $data['sidebar']        = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']     = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content']   = $this->load->view('includes/commission_agent/contact_amount_form', $sub_data, TRUE);
        $data['footer']         = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function save_contact_amount_data(){
        $data = array();

        $data['commission_agent_id']    = $this->input->post('commission_agent_id');
        $data['amount']                 = $this->input->post('total_amount');
        $data['due_amount']             = $this->input->post('total_amount');
        $data['hajj_year']              = $this->input->post('hajj_year');
        $data['number_of_haji']         = $this->input->post('number_of_haji');

        $data['date']                   = date('Y-m-d');
        $data['entry_by']               = $this->session->userdata('uid');

        $this->load->model('haji_info_model');
        $check_hajj_year= $this->haji_info_model->check_group_leader_contact($data['commission_agent_id'], $data['hajj_year']);

        if ($check_hajj_year!=TRUE) {

            $this->common_model->insert('tbl_contact_amount', $data);

            $msg = "Successfully Set Group Leader Amount Information";
            $this->session->set_flashdata('success', $msg);

            redirect('commission_agent');
        }elseif ($check_hajj_year!=FALSE) {
            $msg = "You Are Already Set Contact Amount with This User and Hajj Year";
            $this->session->set_flashdata('error', $msg);

            redirect('commission_agent');
        }
    }
}
