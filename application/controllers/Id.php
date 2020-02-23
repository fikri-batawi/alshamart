<?php

class Id extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('produk_model');
	}

	public function index()
	{
		$makanan = $this->produk_model->semuaProduk('makanan');
		$material= $this->produk_model->semuaProduk('material');
		$data['makanan'] = $makanan->result_array();
		$data['material'] = $material->result_array();

		$this->load->view('pages/home', $data);	
	}

	public function about()
	{
		$this->load->view('pages/about');
	}
}