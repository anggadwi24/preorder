<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_admin extends MX_Controller 
{

	public function __construct()
	{
        parent::__construct();
    	
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	
}
