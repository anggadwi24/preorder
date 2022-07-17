<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MX_Controller {

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
		$data['title'] = 'Profile - '.title();
        $data['breadcumb'] = ' <span class="breadcrumb-item active">Profile</span>';
        $this->template->load('template','profile',$data);
	
	}
    function add(){
        $name = $this->input->post('name');
        $notelp = $this->input->post('notelp');
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));
        $data = array('users_nama'=>$name,'users_username'=>$username,'users_no_telp'=>$notelp,'users_password'=>$password,'users_status'=>'y');
        $this->model_app->insert('users',$data);
    }


	
}
