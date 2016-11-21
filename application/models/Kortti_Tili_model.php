<?php

class Kortti_Tili_model extends CI_Model{
	public function getKortit(){
		$this->db->select('ID_kortti,KortinNumero,PinKoodi');
		$this->db->from('Kortit');
		return $this->db->get()->result_array();

	}

	public function addKortit($lisaa_kortti){
		$this->db->set($lisaa_kortti);
		$this->db->insert('Kortit');
		$testi=$this->db->affected_rows();
		return $testi;
	}

	public function delKortit($id){
		$this->db->where('ID_kortti',$id);
	 	$this->db->delete('Kortit');
		$testi=$this->db->affected_rows();
		return $testi;

}