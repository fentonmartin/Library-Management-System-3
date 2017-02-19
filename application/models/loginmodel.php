<?php

class loginmodel extends CI_Model{

	public function login_check( $username, $password ){
		$res= $this->db->where(['username'=>$username,'password'=>$password])
							->get('users');
		if($res->num_rows())
			return $res->row()->user_id;
		else

			return FALSE;
	}

}