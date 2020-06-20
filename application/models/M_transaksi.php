<?php


class M_transaksi extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function tampil_transaksi(){
		$result=array();
		$this->db->select('*');
		$this->db->from('transaction');
		$this->db->join('game', 'game.id_game = transaction.id_game');
		$this->db->join('genre', 'genre.id_genre = game.id_genre');
		$this->db->order_by("id_transaction","desc");
		return $this->db->get()->result_array();
	}
	public function tambah_transaction($data){
		$this->db->insert('transaction',$data);
	}
	public function delete($id)
	{
		$this->db->where('id_transaction',$id);
		$this->db->delete('transaction');
	}

	public function edit_data($id) 
	{
		$this->db->from('transaction');
		$this->db->join('game', 'game.id_game = transaction.id_game');
		$this->db->where('id_transaction',$id);
		return $this->db->get()->row_array();
	}

	public function Submit_edit_transaksi($data,$id){ 
		$this->db->where('id_transaction',$id);
		$this->db->update ('transaction',$data);
	}


}