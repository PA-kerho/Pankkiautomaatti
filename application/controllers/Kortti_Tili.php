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
  }