<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MX_Controller 
{

	public function __construct()
	{
        parent::__construct();
    	
	}

	

	public function index()
	{
		$this->template->load('template','profil');
	}
	
}
