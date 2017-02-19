<?php

class Home extends CI_Controller{

	Public function index()
	{
		$this->load->view('home/login.php');
	}
	Public function login_area()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|alpha_numeric|min_length[5]|max_length[20]|trim');
		$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[20]');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run()){
			$username=$this->input->post("username");
			$password=$this->input->post("password");
			$this->load->model('loginmodel');
			$this->load->library('session');
			$id=$this->loginmodel->login_check($username,$password);
			if ($id) {
				//Credintials Correct
				$this->session->set_userdata("user_id",$id);
				redirect('admin/dashboard');
				
			}
			else{
				//login failed
				echo "login failed";
			}

		}else{
			 redirect('Home/index');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata("user_id");
		redirect('Home/index');

	}
}