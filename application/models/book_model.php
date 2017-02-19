<?php
class Book_model extends CI_Model{

	public function list_mem(){
		$res=$this->db->get('book');
		if ($res) {
			return $res->result();
		}
		else
			return false;
	}

	public function list_m($member_id){
		$res=$this->db->where(['book_id'=>$member_id])
						->get('book');
		if ($res) {
			return $res->row();
		}
		else
			return false;
	}
	 public function add_user($data)
	{	
		return $this->db->insert('book',$data);
	}
	 public function delete_user($data)
	{	
		return $this->db->delete('book',['book_id'=>$data]);
	}
	public function update_user($data,$mem_id)
	{	
		return $this->db->where(['book_id'=>$mem_id])
						->update('book',$data);
	}
}