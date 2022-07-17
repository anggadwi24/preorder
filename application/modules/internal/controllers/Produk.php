<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MX_Controller 
{

	public function __construct()
	{
        parent::__construct();
    	$this->load->model('model_app','',TRUE);
    	if($this->session->userdata('isLog')){
			
		}else{
			redirect('internal/auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Produk';
		$this->template->load('template','produk/produk',$data);


	}

	public function add()
	{
		$data['title'] = 'Tambah Produk';
		$this->template->load('template','produk/produk_add',$data);
	}

	public function edit()
	{
		$data['title'] = 'Edit Produk';
		$this->template->load('template','produk/produk_edit',$data);
	}
	
}
