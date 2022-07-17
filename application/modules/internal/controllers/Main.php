<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MX_Controller {

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
		$data['title'] = 'Dashboard - '.title();
	
		$this->template->load('template','dashboard/dashboard',$data);
		
	}



	
}
