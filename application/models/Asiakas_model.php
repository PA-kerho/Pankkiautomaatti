<?php

class Asiakas_model extends CI_Model{
	public function getAsiakas(){
		$this->db->select('ID,Etunimet,Sukunimi,Hetu,Puhelinnumero,Email,Osoite,Postitoimipaikka,Postinumero');
		$this->db->from('Asiakas');
		return $this->db->get()->result_array();
	}
	/*public function addAsiakas($lisaa_asiakas){
		$this->db->set($lisaa_asiakas);
		$this->db->insert('Asiakas');
		$testi=$this->db->affected_rows();
		return $testi;
	}*/
}