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
		$this->template->load('template','product');
	}

	public function detail()
	{
		$this->template->load('template','product_detail');
	}
}
