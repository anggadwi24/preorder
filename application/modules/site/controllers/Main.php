<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MX_Controller 
{

	public function __construct()
	{
        parent::__construct();
    	$this->load->model('model_app','',TRUE);

    	
	}
	public function index()
	{
		$data['title'] = title();
		$data['preorder'] = $this->db->query("SELECT *,COUNT(pb_id) as batch FROM produk a JOIN produk_batch b ON a.produk_id = b.pb_produk_id WHERE pb_status = 'open' AND pb_tanggal_mulai <= '".date('Y-m-d H:i:s')."' AND pb_tanggal_selesai >= '".date('Y-m-d H:i:s')."' GROUP BY pb_produk_id ORDER BY pb_created_on DESC  ");
		$data['closeorder'] = $this->db->query("SELECT *,COUNT(pb_id) as batch FROM produk a JOIN produk_batch b ON a.produk_id = b.pb_produk_id WHERE pb_status = 'close' GROUP BY pb_produk_id ORDER BY pb_created_on DESC  ");

		$this->template->load('template','main',$data);
	}
	
}
