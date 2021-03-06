<?php

class Produk extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('produk_model');
	}

	public function index()
	{
		$data['makanan'] = $this->produk_model->semuaProduk('makanan');
		$data['material'] = $this->produk_model->semuaProduk('material');

		$this->load->view('pages/produk',$data);
	}

	public function makanan()
	{
		$data['produks'] = $this->produk_model->semuaProduk('makanan');

		$this->load->view('pages/katalog_makanan',$data);
	}

		public function material()
	{
		$data['produks'] = $this->produk_model->semuaProduk('material');

		$this->load->view('pages/katalog_material', $data);
	}

}