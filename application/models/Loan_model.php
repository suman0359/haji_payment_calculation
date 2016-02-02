<?php
class Loan_model extends CI_Model{
    
    public function payment_report_loan_user_wise($loan_user_id){
        $this->db->select('*');
        $this->db->where('loan_user_id', $loan_user_id);
        $this->db->from('loan_transaction');

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
}