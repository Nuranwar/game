<?php


class M_genre extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function tampil_genre(){
		$result=array();
		$this->db->select('*');
		$this->db->from('genre');
		$this->db->order_by("id_genre","desc");
		return $this->db->get()->result_array();
	}
	public function tambah_genre($data){
		$this->db->insert('genre',$data);
	}
	public function delete($id)
	{
		$this->db->where('id_genre',$id);
		$this->db->delete('genre');
	}

	public function edit_data($id) 
	{
		$this->db->from('genre');
		$this->db->where('id_genre',$id);
		return $this->db->get()->row_array();
	}

	public function Submit_edit_genre($data,$id){ 
		$this->db->where('id_genre',$id);
		$this->db->update ('genre',$data);
	}


}