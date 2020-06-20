<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Game extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_genre');
			$this->load->model('M_game');
		}

	public function tampil_list(){
		$oke['game']		= $this->M_game->tampil_game();
		$oke['content_page']	="game/v_list_game";
		$this->load->view('body/dashboard',$oke);
	}

	public function add_data(){
		$oke['genre']		= $this->M_genre->tampil_genre();
		$oke['content_page']	="game/v_add_game";
		$this->load->view('body/dashboard',$oke);
	}

	public function simpan_data(){
		$config['upload_path']		= './assets/assets/images'; 
		$config['allowed_types']	= 'gif|jpg|png|jpeg'; 
		$config['max_size']			= 2048;
		$config['file_name']        = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		$this->upload->do_upload("image");
		$data = $this->upload->data();
		$gambar =$data['file_name'];
		
		$data = array(
			'title' 			=>$this->input->post('title',true),
			'image' 		    =>$gambar,
			'id_genre'			=>$this->input->post('genre',true),
		);
		$oke					=$this->M_game->tambah_game($data); 
		redirect('game/tampil_list');
	}

	public function data_hapus($id){
		$row = $this->M_game->edit_data($id);
			if($row['image']==null){
	    $oke					=$this->M_game->delete($id);
		redirect('game/tampil_list');
			}else{
        $target_file = './assets/assets/images/'.$row['image'];
        unlink($target_file);
		$oke					=$this->M_game->delete($id);
		redirect('game/tampil_list');

			}
	}

	public function edit_game($id){
		$oke['genre'] = $this->M_genre->tampil_genre();
		$oke['data_game'] = $this->M_game->edit_data($id);
		$oke['content_page']	="game/v_edit_game";
		$this->load->view('body/dashboard',$oke);
	}

	public function simpan_edit_data($id){
		$config['upload_path']	= './assets/assets/images';
		$config['allowed_types']= 'gif|jpg|png|jpeg'; 
		$config['max_size']		= 2048; 
		$config['file_name']        = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10); 
		$this->load->library('upload',$config);
        $this->upload->initialize($config);
		 if ($this->upload->do_upload("image")) {
            $row = $this->M_game->edit_data($id);
            $data = $this->upload->data();
            $gambar =$data['file_name'];
            $target_file = './assets/assets/images/'.$row['image'];
            unlink($target_file);
            }else{
            $gambar = $this->input->post('gambar_lama');
        }
        $data = array(
			'title' 			=> $this->input->post('title',true),
			'id_genre' 			=> $this->input->post('id_genre',true),
			'image' 		    =>$gambar,
		);
        $oke					=$this->M_game->Submit_edit_game($data,$id);
		redirect('game/tampil_list');
	}

	  public function download($gambar){
        force_download('assets/assets/images/'.$gambar,NULL);
    }
}