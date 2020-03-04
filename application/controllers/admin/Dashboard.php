<?php

class Dashboard extends CI_Controller{
	public function __construct()
    {
        parent::__construct();

        $this->load->model('produk_model');
        $this->load->model('auth_model');
        if(!$this->session->userdata('email')){
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> You must login!</div>');
            redirect('auth');
        }
    }
    public function index()
    {
        $data = [
            'produk'            => $this->produk_model->totalProduk(),
            'produk_makanan'    => $this->produk_model->totalProduk('makanan'),
            'produk_material'   => $this->produk_model->totalProduk('material'),

            'user'              => $this->auth_model->totalUser()
        ];


        $this->load->view('temp/partials/admin_header');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('temp/partials/admin_footer');
    }

}
