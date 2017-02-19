<?php

class My_Controller extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		if(!$this->session->userdata("user_id"))
			return redirect('Home/index');
 	}

}