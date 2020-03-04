<?php

class Produk extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('produk_model');
        if(!$this->session->userdata('email')){
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> You must login!</div>');
            redirect('auth');
        }
        
    }

    public function index()
    {
        $data['produks'] = $this->produk_model->semuaProduk();
        $this->load->view('temp/partials/admin_header');
        $this->load->view('admin/produk',$data);
        $this->load->view('temp/partials/admin_footer');
    }
    public function postProduk()
    {
        //form validation
        $this->form_validation->set_rules('nama_produk','nama produk','required');
        $this->form_validation->set_rules('harga','harga','required');
        $this->form_validation->set_rules('kategori','kategori','required');
        $this->form_validation->set_rules('url','link url','required');
        $this->form_validation->set_rules('deskripsi','deskripsi','required');

        if($this->form_validation->run()){
            $data = [
                'nama_produk'   => $this->input->post('nama_produk'),
                'harga'         => $this->input->post('harga'),
                'deskripsi'     => $this->input->post('deskripsi'),
                'kategori'      => $this->input->post('kategori'),
                'url'           => $this->input->post('url')
            ];

            //config upload
            $config['upload_path']          = './assets/img/produk';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('gambar')){
                $this->session->set_flashdata('error',$this->upload->display_errors('<div class="alert alert-danger">', '</div>'));
            }else{
                $data['gambar'] = $this->upload->data()['file_name'];   
                
                $this->produk_model->postProduk($data);

                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data berhasil ditambahkan </div>');
              
                redirect(site_url('admin/dashboard'));
            }
        }
        $data['produks'] = $this->produk_model->semuaProduk();
        $this->load->view('temp/partials/admin_header');
        $this->load->view('admin/produk',$data);
        $this->load->view('temp/partials/admin_footer');
    }
    public function editProduk($id)
    {
        $data['error'] = '';
        //form validation
        $this->form_validation->set_rules('nama_produk','nama produk','required');
        $this->form_validation->set_rules('harga','harga','required');
        $this->form_validation->set_rules('kategori','kategori','required');
        $this->form_validation->set_rules('url','link url','required');
        $this->form_validation->set_rules('deskripsi','deskripsi','required');

        if($this->form_validation->run()){
            $data = [
                'nama_produk'   => $this->input->post('nama_produk'),
                'harga'         => $this->input->post('harga'),
                'deskripsi'     => $this->input->post('deskripsi'),
                'kategori'      => $this->input->post('kategori'),
                'url'           => $this->input->post('url')
            ];

            //config upload
            $config['upload_path']          = './assets/img/produk';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('gambar')){
                $data['gambar'] = $this->produk_model->produk($id)->row_array()['gambar']; 
            }else{
                $data['gambar'] = $this->upload->data()['file_name'];
            }
            $this->produk_model->editProduk($id,$data);

            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data berhasil diedit! </div>');
            
            redirect(site_url('admin/dashboard'));
        }
        $data['produks'] = $this->produk_model->semuaProduk();
        $this->load->view('temp/partials/admin_header');
        $this->load->view('admin/produk',$data);
        $this->load->view('temp/partials/admin_footer');
    }
    public function hapus($id)
    {
        $id = $this->produk_model->hapusProduk($id);
        if($id){
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data berhasil dihapus! </div>');
            redirect(site_url('admin/dashboard'));
        }
    }


}