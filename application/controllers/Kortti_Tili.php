<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kortti_Tili extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Kortti_Tili_model');
	}
	public function nayta_kortti(){
		$this->load->model('Kortti_Tili_model');
		$data['Kortti_Tili']=$this->Kortti_Tili_model->getKortit();
		$data['sivun_sisalto']='Kortti_Tili/nayta_kortti';
		$this->load->view('menu/sisalto',$data);
	}

	public function lisaa_kortti() {
		$btn=$this->input->post('btnTallenna');
		$lisaa_kortti=array("KortinNumero"=>$this->input->post('Kortnum'),
			"PinKoodi"=>$this->input->post('Pin'),
			"Voimassaoloaika"=>$this->input->post('Vm'));

		if(isset($btn)) {
			$lisays=$this->Kortti_Tili_model->addKortit($lisaa_kortti);
			if ($lisays>0){
				echo '<script>alert("Lisäys onnistui")</script>';
			}
		}

		$data['sivun_sisalto']='Kortti_Tili/lisaa_kortti';
		$this->load->view('menu/sisalto',$data);
}
	public function nayta_poistettavat() {
		
		$data['Kortti_Tili']=$this->Kortti_Tili_model->getKortit();
		$data['sivun_sisalto']='Kortti_Tili/poista_kortti';
		$this->load->view('menu/sisalto',$data);
	}
	public function poista_kortti(){
		$btn = $this->input->post('btnpoista_kortti');
		$id = $this->input->post('ID');
		
		if(isset($btn)){
			$poista_kortti=$this->Kortti_Tili_model->delKortit($id);	
			if ($poista_kortti>0){
 				echo '<script>alert("Poisto onnistui");</script>';
 			}
 			

				$data['Kortti_Tili']=$this->Kortti_Tili_model->getKortit();
				$data['sivun_sisalto']='Kortti_Tili/nayta_kortti';
				$this->load->view('menu/sisalto',$data);

			}



	}

	public function nayta_poistettavat_tilit() {
		
		$data['Kortti_Tili']=$this->Kortti_Tili_model->getTilit();
		$data['sivun_sisalto']='Kortti_Tili/poista_tili';
		$this->load->view('menu/sisalto',$data);
	}

	public function poista_tili(){
		$btn = $this->input->post('btnpoista_tili');
		$id = $this->input->post('ID');
		
		if(isset($btn)){
			$poista_tili=$this->Kortti_Tili_model->delTilit($id);	
			if ($poista_tili>0){
 				echo '<script>alert("Poisto onnistui");</script>';
 			}
 			

			$data['Kortti_Tili']=$this->Kortti_Tili_model->getTilit();
			$data['sivun_sisalto']='Kortti_Tili/nayta_tili';
			$this->load->view('menu/sisalto',$data);

			}
	}

	public function nayta_tili(){
		$this->load->model('Kortti_Tili_model');
		$data['Kortti_Tili']=$this->Kortti_Tili_model->getTilit();
		$data['sivun_sisalto']='Kortti_Tili/nayta_tili';
		$this->load->view('menu/sisalto',$data);
	}

	public function lisaa_tili() {
		$btn=$this->input->post('btnTallenna');
		$lisaa_tili=array("IBAN"=>$this->input->post('IBAN'),
			"TilinNimi"=>$this->input->post('TilinNimi'));
			

		if(isset($btn)) {
			$lisays=$this->Kortti_Tili_model->addTilit($lisaa_tili);
			if ($lisays>0){
				echo '<script>alert("Lisäys onnistui")</script>';
			}
		}

		$data['sivun_sisalto']='Kortti_Tili/lisaa_tili';
		$this->load->view('menu/sisalto',$data);
	}

	public function korttien_hallinta(){
		$data['sivun_sisalto'] = 'Kortti_Tili/korttien_hallinta';
		$this->load->view('menu/sisalto',$data);
	}

	public function tilien_hallinta(){
		$data['sivun_sisalto'] = 'Kortti_Tili/tilien_hallinta';
		$this->load->view('menu/sisalto',$data);
	}
}
	