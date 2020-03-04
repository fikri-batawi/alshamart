<?php

class Id extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
	}

	public function index()
	{
		$data['makanan'] = $this->produk_model->semuaProduk('makanan');
		$data['material'] = $this->produk_model->semuaProduk('material');

		$this->load->view('pages/home', $data);	
	}

	public function about()
	{
		$this->load->view('pages/about');
	}
}