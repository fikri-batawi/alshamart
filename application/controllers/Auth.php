<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');	
	}

	public function index()
	{		
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('password','password','required');

		if (!$this->form_validation->run()) {
			$this->load->view('admin/login.php');
		}else{
			$email 		= $this->input->post('email');
			$password 	= $this->input->post('password');

			$user 		= $this->auth_model->getUser($email);
			if (!$user) {
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Email not registered!</div>');
				redirect(base_url('auth'));
			}else{
				if(!password_verify($password, $user['password'])){
					$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Wrong password!</div>');
						redirect(base_url('auth'));
				}else{
					if($user['is_active'] == 0){
						$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Your account is not active!</div>');
						redirect(base_url('auth'));
					}else{

						$this->session->set_userdata($user);
						redirect(base_url('admin/dashboard'));
					}
				}
			}
		}
	}

	public function daftar()
	{
		$this->form_validation->set_rules('name','full name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password1','Password','required|min_length[8]|matches[password2]');
		$this->form_validation->set_rules('password2','Password','required|min_length[8]|matches[password1]');

		if(!$this->form_validation->run()){
			$this->load->view('admin/registration.php');
		}else{
			$data = [
				'name' 			=> $this->input->post('name'),
				'email' 		=> $this->input->post('email'),
				'password' 		=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'image'			=> 'ava.svg',
				'is_active'		=> 1,
				'date_created'	=> time()
			];
			$this->auth_model->register($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Registration success! Please login.</div>');
			redirect(site_url('auth'));
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('is_active');
		$this->session->unset_userdata('image');
		$this->session->unset_userdata('date_created');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Logged Out!</div>');
		redirect(base_url('auth'));
	}
}