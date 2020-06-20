<?php


class M_game extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function tampil_game(){
		$result=array();
		$this->db->select('*');
		$this->db->from('game');
		$this->db->join('genre', 'genre.id_genre = game.id_genre');
		$this->db->order_by("id_game","desc");
		return $this->db->get()->result_array();
	}
	public function tambah_game($data){
		$this->db->insert('game',$data);
	}
	public function delete($id)
	{
		$this->db->where('id_game',$id);
		$this->db->delete('game');
	}

	public function edit_data($id) 
	{
		$this->db->from('game');
		$this->db->join('genre', 'genre.id_genre = game.id_genre');
		$this->db->where('id_game',$id);
		return $this->db->get()->row_array();
	}

	public function Submit_edit_game($data,$id){ 
		$this->db->where('id_game',$id);
		$this->db->update ('game',$data);
	}


}