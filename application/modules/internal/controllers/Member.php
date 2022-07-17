<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends MX_Controller 
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
		$data['title'] = 'Anggota - '.title();
		$data['breadcumb'] = ' <span class="breadcrumb-item active">Anggota</span>';
		$this->template->load('template','anggota/anggota',$data);
		// $this->template->load('template_admin','admin/anggota');
	}

	public function add()
	{
		$data['title'] = 'Anggota - '.title();
		$data['breadcumb'] = ' <span class="breadcrumb-item active">Tambah Anggota</span>';
		$this->template->load('template','anggota/anggota_add',$data);
		// $this->template->load('template_admin','admin/anggota');
	}

	public function edit()
	{
		$data['title'] = 'Anggota - '.title();
		$data['breadcumb'] = ' <span class="breadcrumb-item active">Edit Anggota</span>';
		$this->template->load('template','anggota/anggota_edit',$data);
		// $this->template->load('template_admin','admin/anggota');
	}
	
}
