<?php

class Produk extends CI_Controller{

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

		$this->load->view('pages/produk',$data);
	}

	public function makanan()
	{
		$query = $this->produk_model->semuaProduk('makanan');
		$data['produks'] = $query->result_array();

		$this->load->view('pages/katalog_makanan',$data);
	}

		public function material()
	{
		$query = $this->produk_model->semuaProduk('material');
		$data['produks'] = $query->result_array();

		$this->load->view('pages/katalog_material', $data);
	}

}