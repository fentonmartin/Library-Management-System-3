<?php
class User_model extends CI_Model{

	public function list_mem(){
		$res=$this->db->get('users');
		if ($res) {
			return $res->result();
		}
		else
			return false;
	}

	public function list_m($member_id){
		$res=$this->db->where(['user_id'=>$member_id])
						->get('users');
		if ($res) {
			return $res->row();
		}
		else
			return false;
	}
	 public function add_user($data)
	{	
		return $this->db->insert('users',$data);
	}
	 public function delete_user($data)
	{	
		return $this->db->delete('users',['user_id'=>$data]);
	}
	public function update_user($data,$mem_id)
	{	
		return $this->db->where(['user_id'=>$mem_id])
						->update('users',$data);
	}
}