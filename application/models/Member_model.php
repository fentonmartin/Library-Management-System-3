<?php
class Member_model extends CI_Model{

	public function list_mem(){
		$res=$this->db->get('member');
		if ($res) {
			return $res->result();
		}
		else
			return false;
	}

	public function list_m($member_id){
		$res=$this->db->where(['member_id'=>$member_id])
						->get('member');
		if ($res) {
			return $res->row();
		}
		else
			return false;
	}
	 public function add_user($data)
	{	
		return $this->db->insert('member',$data);
	}
	 public function delete_user($data)
	{	
		return $this->db->delete('member',['member_id'=>$data]);
	}
	public function update_user($data,$mem_id)
	{	
		return $this->db->where(['member_id'=>$mem_id])
						->update('member',$data);
	}
}