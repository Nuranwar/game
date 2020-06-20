<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Genre extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_genre');
		}

	public function tampil_list(){
		$oke['genre']		= $this->M_genre->tampil_genre();
		$oke['content_page']	="genre/v_list_genre";
		$this->load->view('body/dashboard',$oke);
	}

	public function simpan_data(){
	$data = array(
			'name' 	=>$this->input->post('nama',true),
		);
		$oke['content_page']	="genre/v_list_genre";
		$oke					=$this->M_genre->tambah_genre($data); 
		$this->load->view('body/dashboard',$oke);
		redirect('genre/tampil_list');
	}

	public function data_hapus($id){
		$oke['content_page']	="genre/v_list_genre"; 
		$oke					=$this->M_genre->delete($id);
		$this->load->view('body/dashboard',$oke);
		redirect('genre/tampil_list');
	}

	public function edit_genre($id){
		$oke['data_genre'] = $this->M_genre->edit_data($id);
		$oke['content_page']	="genre/v_edit_genre";
		$this->load->view('body/dashboard',$oke);
	}

	public function simpan_edit_data($id){
		$data = array(
			'name' 				=>$this->input->post('nama',true),
		);
		$oke['content_page']	="genre/v_list_genre"; 
		$oke					=$this->M_genre->Submit_edit_genre($data,$id); 
		$this->load->view('body/dashboard',$oke);
		$this->session->set_flashdata('oke','Dirubah');
		redirect('genre/tampil_list');
	}
}