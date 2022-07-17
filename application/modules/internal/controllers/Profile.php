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
        $id = decode($this->session->userdata['isLog']['users_id']);
        $row = $this->model_app->view_where('users',array('users_id'=>$id))->row_array();
        $data['page'] = 'Profil';
		$data['title'] = 'Profil - '.title();
		$data['right'] =' ';
		$data['row'] = $row;
		$data['breadcrumb'] = ' <span class="breadcrumb-item active">Profil</span>';

        $this->template->load('template','profile',$data);
	
	}
    function do(){
        $id = decode($this->session->userdata['isLog']['users_id']);
        $row = $this->model_app->view_where('users',array('users_id'=>$id));
        if($row->num_rows() > 0){
            
            $name = $this->input->post('name');
            $notelp = $this->input->post('notelp');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if(trim($password)){
                $data = array('users_nama'=>$name,'users_username'=>$username,'users_no_telp'=>$notelp,'users_password'=>sha1($password));

            }else{
                 $data = array('users_nama'=>$name,'users_username'=>$username,'users_no_telp'=>$notelp);

            }
            $this->model_app->update('users',$data,array('users_id'=>$id));
            $this->session->set_flashdata('success','Profil berhasil diperbarui');
            redirect('internal/profile');
        }else{
            $this->session->set_flashdata('error','Sesi telah berakhir');
            redirect('internal/logout');
        }
       
    }


	
}
