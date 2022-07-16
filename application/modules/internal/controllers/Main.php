<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MX_Controller {

	public function __construct()
	{
        parent::__construct();
    	
	}

	public function index()
	{
		$data['title'] = 'Internal';
		$this->template->load('template','dashboard/dashboard',$data);
		// $this->template->load('template_admin','admin/dashboard');
	}

	public function profile()
	{
		$data['title'] = 'Internal';
		$this->template->load('template','profile',$data);
		// $this->template->load('template_admin','admin/dashboard');
	}

	
}
