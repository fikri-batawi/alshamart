<?php 
	$data['loc'] = 'about';
	$this->load->view('partials/header', $data);
	$this->load->view('partials/about',$profile);
	$this->load->view('partials/latar_belakang');
	$this->load->view('partials/copyright');
 ?>