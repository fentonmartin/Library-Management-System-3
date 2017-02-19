<?php


class Borrow_model extends CI_Model
{
	
	public function mem_id_check($mem_id)
	{
		$res=$this->db->where(['member_id'=>$mem_id])
						->get('member');
		if($res->num_rows())
			return $res->row();
		else
			return FALSE;
	}
	public function fetch_book($bk_id)
	{
		$res=$this->db->where(['book_id'=>$bk_id])
						->get('book');
			if($res->num_rows())
				return $res->row();
			else
				return FALSE;
			
	}
	 public function borrow_book($data)
	{	
		return $this->db->insert('borrow',$data);
	}
}