<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model('M_transaksi');
		}
	public function index()
	{	
		$oke['transaksi']		= $this->M_transaksi->tampil_transaksi();
		$oke['content_page']="home/home";
		$this->load->view('body/dashboard',$oke);
	}
	
	


}
