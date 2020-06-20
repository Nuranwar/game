<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Transaksi extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_transaksi');
			$this->load->model('M_game');
		}

	public function tampil_list(){
		$oke['transaksi']		= $this->M_transaksi->tampil_transaksi();
		$oke['content_page']	="transaksi/v_list_transaksi";
		$this->load->view('body/dashboard',$oke);
	}

	public function add_data(){
		$oke['game']		= $this->M_game->tampil_game();
		$oke['content_page']	="transaksi/v_add_transaksi";
		$this->load->view('body/dashboard',$oke);
	}

	public function simpan_data(){
	$data = array(
			'price' 	=>$this->input->post('price',true),
			'id_game' 	=>$this->input->post('id_game',true),
			'stock' 	=>$this->input->post('stock',true),
		);
		$oke					=$this->M_transaksi->tambah_transaction($data); 
		$this->load->view('body/dashboard',$oke);
		redirect('transaksi/tampil_list');
	}

	public function data_hapus($id){
		$oke					=$this->M_transaksi->delete($id);
		$this->load->view('body/dashboard',$oke);
		redirect('transaksi/tampil_list');
	}

	public function edit_data($id){
		$oke['game'] = $this->M_game->tampil_game();
		$oke['data_transaksi'] = $this->M_transaksi->edit_data($id);
		$oke['content_page']	="transaksi/v_edit_transaksi";
		$this->load->view('body/dashboard',$oke);
	}

	public function simpan_edit_data($id){
		$data = array(
			'price' 	=>$this->input->post('price',true),
			'id_game' 	=>$this->input->post('id_game',true),
			'stock' 	=>$this->input->post('stock',true),
		);
		$oke					=$this->M_transaksi->Submit_edit_transaksi($data,$id); 
		redirect('transaksi/tampil_list');
	}
	public function simpan_edit_data2($id){
		$stock = $this->input->post('stock')-1;
		var_dump($stock);
		$data = array(
			'price' 	=>$this->input->post('price',true),
			'id_game' 	=>$this->input->post('id_game',true),
			'stock' 	=>$stock,
		);
		$oke					=$this->M_transaksi->Submit_edit_transaksi($data,$id); 
		redirect('welcome');
	}
}