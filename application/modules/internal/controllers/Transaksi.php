<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends MX_Controller 
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
		$data['title'] = 'Transaksi';
		$this->template->load('template','transaksi/transaksi',$data);

	}

	public function transaksi_detail()
	{
		$data['title'] = 'Detail Transaksi';
		$this->template->load('template','transaksi/transaksi_detail',$data);

	}
}
