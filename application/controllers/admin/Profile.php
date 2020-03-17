<?php

class Profile extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('auth_model');
        if(!$this->session->userdata('email')){
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> You must login!</div>');
            redirect('auth');
        }
        
    }

    public function index(){
        $email = $this->session->userdata('email');
        $data['user'] = $this->auth_model->getUser($email);

        $this->load->view('temp/partials/admin_header');
        $this->load->view('admin/profile_view',$data);
        $this->load->view('temp/partials/admin_footer');
    }



    

}