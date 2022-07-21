<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MX_Controller 
{

	public function __construct()
	{
        parent::__construct();
    	
	}

	public function index()
	{
		$data['title'] = 'Produk - '.title();
		$this->template->load('template','product',$data);
	}

	public function detail()
	{
		$this->template->load('template','product_detail');
	}
}
