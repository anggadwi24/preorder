<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends MX_Controller 
{

	public function __construct()
	{
        parent::__construct();
    	
	}

	public function index()
	{
		$data['title'] = 'Produk';
		$this->template->load('template','anggota/anggota',$data);
		// $this->template->load('template_admin','admin/anggota');
	}

	
}
