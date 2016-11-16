<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Asiakas_model');
	}
		public function nayta_asiakas(){
		$this->load->model('Asiakas_model');
		$data['asiakas']=$this->Asiakas_model->getAsiakas();
		$data['sivun_sisalto']='asiakas/nayta_asiakas';
		$this->load->view('menu/sisalto',$data);
	
}

   		public function lisaa_asiakas() {
		$btn=$this->input->post('btnTallenna');
		$lisaa_asiakas=array(
			"Etunimet"=>$this->input->post('en'),
			"Sukunimi"=>$this->input->post('sn'),
			"Hetu"=>$this->input->post('ht'),
			"Puhelinnumero"=>$this->input->post('puh'),
			"Email"=>$this->input->post('em'),
			"Osoite"=>$this->input->post('os'),
			"Postitoimipaikka"=>$this->input->post('psp'),
			"Postinumero"=>$this->input->post('psn'));

		if(isset($btn)) {
			$lisays=$this->Asiakas_model->addAsiakas($lisaa_asiakas);
			if ($lisays>0){
				echo '<script>alert("Lisäys onnistui")</script>';
			}
		}

		$data['sivun_sisalto']='asiakas/lisaa_asiakas';
		$this->load->view('menu/sisalto',$data);

		}
		public function nayta_poistettavat() {
		
		$data['asiakas']=$this->Asiakas_model->getAsiakas();
		$data['sivun_sisalto']='asiakas/poista_asiakas';
		$this->load->view('menu/sisalto',$data);



	}
	public function poista_asiakas($id){
		
		$poista_asiakas=$this->Asiakas_model->delAsiakas($id);	
		 if ($poista_asiakas>0){
 			echo '<script>alert("Poisto onnistui")</script>';
 		}

			$data['asiakas']=$this->Asiakas_model->getAsiakas();
			$data['sivun_sisalto']='asiakas/nayta_asiakas';
			$this->load->view('menu/sisalto',$data);
	}
	}