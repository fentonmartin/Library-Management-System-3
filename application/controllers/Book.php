<?php
/**
* 
*/
class Book extends My_Controller
{
	public function Book_list()
	{
		$this->load->model('Book_model');
		$res=$this->Book_model->list_mem();
		$this->load->view('admin/Books',['res'=>$res]);
	}
	public function add_Book()
	{
		$this->load->view('admin/add_Book');
	}
	public function new_Book(){
		$res=$this->input->post();
		$this->load->model('Book_model');
		if($this->Book_model->add_user($res)){
			$res=$this->Book_model->list_mem();
		$this->load->view('admin/Books',['res'=>$res]);
		}
	}
	public function edit_Book($mem_id)
	{
		$this->load->model('Book_model');
		$res=$this->Book_model->list_m($mem_id);
		//print_r($res);exit;
		$this->load->view('admin/edit_book',['res'=>$res]);
	}
	public function delete_Book($mem_id){
		$this->load->model('Book_model');
		if($this->Book_model->delete_user($mem_id)){
			$res=$this->Book_model->list_mem();

		$this->load->view('admin/Books',['res'=>$res]);
		}		

	}
	public function edit_db(){
		$res=$this->input->post();
		$mem_id=$this->input->post('book_id');
		$this->load->model('Book_model');
		if($this->Book_model->update_user($res,$mem_id)){
			$res=$this->Book_model->list_mem();
		$this->load->view('admin/Books',['res'=>$res]);
		}
	}
}