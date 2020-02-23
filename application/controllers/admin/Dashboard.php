<?php

class Dashboard extends CI_Controller{
	public function __construct()
    {
        parent::__construct();

        $this->load->model('produk_model');
        if(!$this->session->userdata('email')){
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> You must login!</div>');
            redirect('auth');
        }
    }
    public function index()
    {
        $this->load->view('admin/dashboard');

    }

}
