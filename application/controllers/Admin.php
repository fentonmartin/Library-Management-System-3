<?php

class Admin extends My_Controller{
	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}
	public  function mem_vald()
	{
		
		$this->load->model('Borrow_model');
		$this->form_validation->set_rules('mem_id','Member Id','required');
		if(!$this->form_validation->run())
		{
			$this->load->view('admin/dashboard');
    		
		}
		else{
			$this->load->model('Borrow_model');
	    	$mem_id=$this->input->post("mem_id");
    		$s=$this->Borrow_model->mem_id_check($mem_id);
    		if($s)
    			$this->load->view('admin/borrow.php',['s'=>$s]);
    		else
    			$this->load->view('admin/dashboard');
		}

	}
	public function borrow()
	{
		$this->form_validation->set_rules('book_id','Book Id','required');
		$this->form_validation->set_error_delimiters("","");
		$mem_id=$this->input->post("mem_id");
		if(!$this->form_validation->run())
		{
			$this->load->view('admin/borrow');
    		
		}else{
			$bk_id=$this->input->post("book_id");
			$mem_id=$this->input->post("mem_id");
			$this->load->model('Borrow_model');
			$res=$this->Borrow_model->fetch_book($bk_id);
			$r=TRUE;
			$this->load->view('admin/borrow',['res'=>$res,'count'=>1,'s'=>$this->Borrow_model->mem_id_check($mem_id)]);
		}
	}
	public function borrow_comp()
	{
			$data=$this->input->post();
			$this->load->model('Borrow_model');
			if($this->Borrow_model->borrow_book($data)){
				redirect('admin/dashboard');
			
			}
	}
	public function Ret_bk()
	{
		$this->load->view('admin/Ret_bk');
	}
	public function search_dues(){
		$this->load->model('Dues_model');
		$mem_id=$this->input->post("mem_id");
		$res=$this->Dues_model->fetc($mem_id);
		if($res)
			$this->load->view('admin/Ret_bk',['res'=>$res,'t'=>'1','mem_id'=>$mem_id]);
		else	
			$this->load->view('admin/Ret_bk',['t'=>'1']);
	}
	 public function ret($bor_id)
	{
		$this->load->model('Dues_model');
		$res=$this->Dues_model->Return_book($bor_id);
		if($res)
			redirect('admin/Ret_bk');

	}
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		if(!$this->session->userdata("user_id"))
			return redirect('Home/index');
 	}


}