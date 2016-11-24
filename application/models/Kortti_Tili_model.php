<?php

class Kortti_Tili_model extends CI_Model{
	public function getKortit(){


		$this->db->select('ID,KortinNumero,PinKoodi,Voimassaoloaika');

		
		$this->db->select('ID,KortinNumero,PinKoodi,Voimassaoloaika,Lukittu');

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
		$this->db->where('ID',$id);
	 	$this->db->delete('Kortit');
		$testi=$this->db->affected_rows();
		return $testi;

	}
	public function updateKorttiL($uusiData,$id){
		$this->db->where('ID', $id);
		$this->db->update('Kortit',$uusiData);
		$testi=$this->db->affected_rows();
		return $testi;
		
	}
		
	public function getTilit(){
		$this->db->select('*');
		$this->db->from('Tilit');
		return $this->db->get()->result_array();

	}

	public function addTilit($lisaa_tili){
		$this->db->set($lisaa_tili);
		$this->db->insert('Tilit');
		$testi=$this->db->affected_rows();
		return $testi;
	}

	public function delTilit($id){
		$this->db->where('ID',$id);
	 	$this->db->delete('Tilit');
		$testi=$this->db->affected_rows();
		return $testi;

	}

	public function showLiitetyt($id){

		$this->db->select('*');
		$this->db->from('KorttiTili');
		$this->db->where('TiliID',$id);
		return $this->db->get()->result_array();

		
		
	}

	public function showVapaatKortit(){
		
		$this->db->select('*');
        $this->db->from('Kortit'); 
        $this->db->where('ID NOT IN(SELECT KorttiID FROM KorttiTili)');
		return $this->db->get()->result_array();

	}

	public function showVapaatTilit(){
		
		$this->db->select('*');
        $this->db->from('Tilit'); 
        $this->db->where('ID NOT IN(SELECT TiliID FROM KorttiTili)');
		return $this->db->get()->result_array();

		
		
	}

	public function updateTiliL($uusiData,$id){
		$this->db->where('ID', $id);
		$this->db->update('Tilit',$uusiData);
		$testi=$this->db->affected_rows();
		return $testi;
		
	}

	
}