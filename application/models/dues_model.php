<?php
/**
* 
*/
class Dues_model extends CI_Model
{
	public function fetc($mem_id){
		$res=$this->db->where(['mem_id'=>$mem_id,'status'=>'borrowed'])
						->get('borrow');
		if($res->num_rows()){
			return $res->result();}
		else
			return FALSE;
	}
	public function Return_book($borrow_id)
	{
		$data = array(
        'status' => 'Returned');
        $this->db->where('borrow_id', $borrow_id);
		return $this->db->update('borrow', $data);

	}
}