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
    function image(){
		if($this->input->method() == 'post'){
			$id = decode($this->session->userdata['isLog']['users_id']);
			$cek = $this->model_app->view_where('users',array('users_id'=>$id));
			$image = null;
			if($cek->num_rows() > 0){
				$row = $cek->row_array();
				$config['upload_path']          = './upload/user/';
				$config['encrypt_name'] = TRUE;
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 5000;
					
						
				$this->load->library('upload', $config);
		
				
							

				if ($this->upload->do_upload('file')){
					$upload_data = $this->upload->data();
					$foto = $upload_data['file_name'];
					$path = './upload/user/'.$row['users_foto'] ;
           
          
                    unlink($path);
					$image = base_url('upload/user/').$foto;
					$this->model_app->update('users',array('users_foto'=>$foto),array('users_id'=>$id));
                    $this->session->set_flashdata('success','Foto berhasil diubah');
					redirect('internal/profile');
				}else{
                    $this->session->set_flashdata('error','Foto gagal diubah');
					redirect('internal/profile');
				}
			}else{
                $this->session->set_flashdata('error','Sesi telah berakhir');
                redirect('internal/logout');
			}
		
		}else{
			redirect('internal/profile');
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
