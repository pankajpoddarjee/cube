<?php
class UserAuthModel extends CI_Model
{

	public function login($email,$password){
        $data=array(
            'email'=>$email,
            'Password'=>$password
        );
        $query=$this->db->where($data);
        $login=$this->db->get('users');
        if($login!=NULL){
            return $login->row();
        } 
        return false;
    }

    public function get_user_by_email($email) {
        return $this->db->get_where('users', ['email' => $email])->row();
    }

    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }
}