<?php
class User_model extends CI_Model{
    
    public function check_username($username){
        if(!empty ($username)){
            $this->db->select('username');
            $this->db->where('username', $username);
            
            $this->db->from('users');
            $query = $this->db->get();
            
            if($query->num_rows() > 0){

                 
               return TRUE;

            }else{
                return NULL;
            }


        }
        else{
            return NULL;
        }
    }

    public function check_email_address($email){
        if(!empty ($email)){
            
            $this->db->where('user_email', $email);
            
            $this->db->from('users');
            $query = $this->db->get();
            
            if($query->num_rows() > 0){

                 
               return  $query->row();

            }else{
                return NULL;
            }


        }
        else{
            return NULL;
        }
    }
}