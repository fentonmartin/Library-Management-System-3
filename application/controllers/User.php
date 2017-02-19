<?php
/**
* 
*/
class User extends My_Controller
{
	
	public function user_list()
	{
		$this->load->model('user_model');
		$res=$this->user_model->list_mem();
		$this->load->view('admin/user',['res'=>$res]);
	}
	public function add_user()
	{
		$this->load->view('admin/add_user');
	}
	public function new_user(){
		$this->form_validation->set_rules('username','Username','required|is_unique[users.username]');
		if (!$this->form_validation->run()) {
			$this->load->view('admin/add_user');
		}
		else
		{		
		$res=$this->input->post();
		$this->load->model('user_model');
		if($this->user_model->add_user($res)){
			$res=$this->user_model->list_mem();
		$this->load->view('admin/user',['res'=>$res]);
		}
		}
	}
	public function edit_user($mem_id)
	{
		$this->load->model('user_model');
		$res=$this->user_model->list_m($mem_id);
		//print_r($res);exit;
		$this->load->view('admin/edit_user',['res'=>$res]);
	}
	public function delete_user($mem_id){
		$this->load->model('user_model');
		if($this->user_model->delete_user($mem_id)){
			$res=$this->user_model->list_mem();

		$this->load->view('admin/user',['res'=>$res]);
		}		

	}
	public function edit_db(){
		$res=$this->input->post();
		$mem_id=$this->input->post('user_id');
		$this->load->model('user_model');
		if($this->user_model->update_user($res,$mem_id)){
			$res=$this->user_model->list_mem();
		$this->load->view('admin/user',['res'=>$res]);
		}
	}
}