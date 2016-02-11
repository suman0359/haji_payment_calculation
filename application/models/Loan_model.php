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

    public function loan_summery_report($table_name, $start_date, $end_date){
    	$this->db->select('*');
        $this->db->select_sum('debit');
        $this->db->select_sum('credit');
        $this->db->where('date >=', $start_date);
        $this->db->where('date <=', $end_date);
        $this->db->group_by('loan_user_id');
        $this->db->from($table_name);

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

    public function statement_details($table_name, $start_date, $end_date){
        $this->db->select('*');
        $this->db->select_sum('given_amount');
        $this->db->select_sum('taken_amount');
        $this->db->where('date >=', $start_date);
        $this->db->where('date <=', $end_date);
        $this->db->group_by('id');
        $this->db->from($table_name);

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

    public function given_installment_summation($table_name, $where){
        $this->db->select('*');
        $this->db->select_sum('receive_amount');
        $this->db->where($where);
        $this->db->from($table_name);
        $this->db->group_by('against_given_taken_history');

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;   
    }

    public function taken_installment_summation($table_name, $where){
        $this->db->select('*');
        $this->db->select_sum('paid_amount');
        $this->db->where($where);
        $this->db->from($table_name);
        $this->db->group_by('against_given_taken_history');

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;   
    }
}