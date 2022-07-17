<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller 
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
        $row = $this->model_app->view('users')->result_array();
        $data['row'] = $row;
        $data['page'] = 'User';
		$data['title'] = 'User - '.title();
		$data['right'] =' <a href="'.base_url('internal/user/add') .'" class="btn btn-info kanan"><i class="ti-plus"> </i> Tambah User</a>';
		$data['breadcrumb'] = ' <span class="breadcrumb-item active">User</span>';
		$this->template->load('template','user/user',$data);
	}

    public function add()
	{
        $data['page'] = 'User';
		$data['title'] = 'User - '.title();
		$data['right'] =' ';
		$data['breadcrumb'] = ' <span class="breadcrumb-item active">Tambah User</span>';
		$this->template->load('template','user/user_add',$data);
	}

    public function edit()
	{
        $data['page'] = 'User';
		$data['title'] = 'User - '.title();
		$data['right'] =' ';
		$data['breadcrumb'] = ' <span class="breadcrumb-item active">Edit User</span>';
		$this->template->load('template','user/user_edit',$data);
	}

}
