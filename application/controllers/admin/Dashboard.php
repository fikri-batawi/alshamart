<?php

class Dashboard extends CI_Controller{
	public function __construct()
    {
        parent::__construct();

        $this->load->model('produk_model');
        $this->load->model('auth_model');
        $this->load->model('profile_model');
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
            'user'              => $this->auth_model->totalUser(),
            'profile'           => $this->profile_model->profile()
        ];


        $this->load->view('temp/partials/admin_header');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('temp/partials/admin_footer');
    }

    public function editProfileCompany($id)
    {
        $data = [
            'produk'            => $this->produk_model->totalProduk(),
            'produk_makanan'    => $this->produk_model->totalProduk('makanan'),
            'produk_material'   => $this->produk_model->totalProduk('material'),
            'user'              => $this->auth_model->totalUser(),
            'profile'           => $this->profile_model->profile()
        ];

        //config upload
        $config['upload_path']          = './assets/img/profile';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('gambar')){
            $post['profile'] = $this->profile_model->profile()[0]['profile'];

            $this->profile_model->editProfile($id,$post);
             $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data berhasil diedit! </div>');
             redirect(site_url('admin/dashboard'));
        }else{
            $post['profile'] = $this->upload->data()['file_name']; 
            $this->profile_model->editProfile($id,$post);
             $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data berhasil diedit! </div>');
             redirect(site_url('admin/dashboard'));
        }
        

        $this->load->view('temp/partials/admin_header');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('temp/partials/admin_footer');
    }

}
