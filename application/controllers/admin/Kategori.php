<?php

class Kategori extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('produk_model');
        if(!$this->session->userdata('email')){
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> You must login!</div>');
            redirect('auth');
        }
    }

    public function index($offset = 0)
    {
        //pageination
        $this->load->library('pagination');
        $config['base_url'] = site_url('admin/kategori/index');
        $config['total_rows'] = $this->produk_model->totalProduk();
        $config['per_page'] = 10;

        // Membuat Style pagination untuk BootStrap v4
      	
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Previous';
        $config['full_tag_open']    = '<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination">';
        $config['full_tag_close']   = '</ul></div>';
        $config['prev_tag_open']    = '<li class="paginate_button previous" id="example1_previous">';
        $config['prev_tagl_close']  = '</li>';
        $config['cur_tag_open']     = '<li class="paginate_button active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['num_tag_open']     = '<li class="paginate_button previous" id="example1_previous">';
        $config['num_tag_close']    = '</li>';
        $config['next_tag_open']    = ' <li class="paginate_button next" id="example1_next">';
        $config['next_tagl_close']  = '</li>';

        $this->pagination->initialize($config);

        //load database
        $query = $this->produk_model->semuaProduk(false,$config['per_page'],$offset);
        $data['produks'] = $query->result_array();
        
        $this->load->view('admin/data_produk', $data);
    }

    public function post()
    {   

        $error['error']='';
        //validation
        $this->form_validation->set_rules('nama_produk','Nama Produk', 'required');
        $this->form_validation->set_rules('harga','Harga', 'required');
        $this->form_validation->set_rules('deskripsi','Deskripsi', 'required');
        $this->form_validation->set_rules('url','URL', 'required|alpha_dash');

        if($this->form_validation->run()){
            $data['nama_produk'] = $this->input->post('nama_produk');
            $data['harga'] = $this->input->post('harga');
            $data['deskripsi'] = $this->input->post('deskripsi');
            $data['url'] = $this->input->post('url');
            $data['kategori'] = $this->input->post('kategori');

            $config['upload_path']          = './assets/img/produk';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 2048;
            $config['max_width']            = 1100;
            $config['max_height']           = 800;

            $this->load->library('upload', $config);

            if ( $this->upload->do_upload('gambar')){
                $data['gambar'] = $this->upload->data('file_name');
                $id = $this->produk_model->postProduk($data);

                if($id){
                    redirect(base_url('admin/dashboard'));
                }
            }else{
                $error = array('error' => $this->upload->display_errors('<div class="alert alert-warning">', '</div>'));
                // $this->load->view('admin/form_tambah',$error);
            }
        }
        $this->load->view('admin/form_tambah',$error);
    }

    public function edit($id)
    {
        $query = $this->produk_model->produk($id);
        $get['produk'] = $query->row_array();

        $this->form_validation->set_rules('nama_produk','Nama Produk', 'required');
        $this->form_validation->set_rules('harga','Harga', 'required');
        $this->form_validation->set_rules('deskripsi','Deskripsi', 'required');
        $this->form_validation->set_rules('url','URL', 'required|alpha_dash');

        if($this->form_validation->run()){
            $data['nama_produk'] = $this->input->post('nama_produk');
            $data['harga'] = $this->input->post('harga');
            $data['deskripsi'] = $this->input->post('deskripsi');
            $data['url'] = $this->input->post('url');
            $data['kategori'] = $this->input->post('kategori');

            $config['upload_path']          = './assets/img/produk';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 2048;
            $config['max_width']            = 1100;
            $config['max_height']           = 800;

            $this->load->library('upload', $config);

            if ( $this->upload->do_upload('gambar')){
                $data['gambar'] = $this->upload->data('file_name');
            }
            $this->produk_model->editProduk($id, $data);

            redirect(base_url('admin/dashboard'));
        }

        $this->load->view('admin/form_edit', $get);
    }

    public function hapus($id)
    {
        $id = $this->produk_model->hapusProduk($id);
        if($id)
            redirect(site_url('admin/dashboard'));
    }
}
