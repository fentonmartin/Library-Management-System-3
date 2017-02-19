<?php
/**
* 
*/
class Member extends My_Controller
{
	
	public function mem_list()
	{
		$this->load->model('Member_model');
		$res=$this->Member_model->list_mem();
		$this->load->view('admin/members',['res'=>$res]);
	}
	public function add_user()
	{
		$this->load->view('admin/add_mem');
	}
	public function new_user(){
		$res=$this->input->post();
		$this->load->model('Member_model');
		if($this->Member_model->add_user($res)){
			$res=$this->Member_model->list_mem();
		$this->load->view('admin/members',['res'=>$res]);
		}
	}
	public function edit_user($mem_id)
	{
		$this->load->model('Member_model');
		$res=$this->Member_model->list_m($mem_id);
		//print_r($res);exit;
		$this->load->view('admin/edit_mem',['res'=>$res]);
	}
	public function delete_user($mem_id){
		$this->load->model('Member_model');
		if($this->Member_model->delete_user($mem_id)){
			$res=$this->Member_model->list_mem();

		$this->load->view('admin/members',['res'=>$res]);
		}		

	}
	public function edit_db(){
		$res=$this->input->post();
		$mem_id=$this->input->post('member_id');
		$this->load->model('Member_model');
		if($this->Member_model->update_user($res,$mem_id)){
			$res=$this->Member_model->list_mem();
		$this->load->view('admin/members',['res'=>$res]);
		}
	}
}