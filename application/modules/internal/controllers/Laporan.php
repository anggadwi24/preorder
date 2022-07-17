<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends MX_Controller 
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
		$data['title'] = 'Laporan';
		$this->template->load('template','laporan/laporan',$data);
	}

}
