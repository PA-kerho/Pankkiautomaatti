<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Asiakas_model');
	}
	public function nayta_asiakas(){
		$this->load->library('session');
		$this->load->model('Asiakas_model');
			if(isset($this->session->userdata['logged_in'])){
				$data['asiakas']=$this->Asiakas_model->getAsiakas();
				$data['sivun_sisalto']='asiakas/nayta_asiakas';
				$this->load->view('menu/sisalto',$data);	
			}
			else{
				$this->load->view('etusivu/login');
		}
	}

   	public function lisaa_asiakas() {
   		$this->load->library('session');
   		if(isset($this->session->userdata['logged_in'])){
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
	else{
				$this->load->view('etusivu/login');
		}

	}
	public function nayta_poistettavat() {
		
		$data['asiakas']=$this->Asiakas_model->getAsiakas();
		$this->load->library('session');
		if(isset($this->session->userdata['logged_in'])){
		$data['sivun_sisalto']='asiakas/poista_asiakas';
		$this->load->view('menu/sisalto',$data);
		}
	else{
				$this->load->view('etusivu/login');
		}
	}

	public function poista_asiakas(){
		$btn = $this->input->post('btnpoista_asiakas');
		$this->load->library('session');
		if(isset($this->session->userdata['logged_in'])){
		$id = $this->input->post('ID');
		
		if(isset($btn)){
			$poista_asiakas=$this->Asiakas_model->delAsiakas($id);	
			if ($poista_asiakas>0){
 				echo '<script>alert("Poisto onnistui");</script>';
 			}
 			

			$data['asiakas']=$this->Asiakas_model->getAsiakas();
			$data['sivun_sisalto']='asiakas/nayta_asiakas';
			$this->load->view('menu/sisalto',$data);

			}
		}
		else{
				$this->load->view('etusivu/login');
		}
	}

	
	public function nayta_muokattava_asiakas() {
		$id = $this->input->get('ID');
		$data['asiakas']=$this->Asiakas_model->getValittuAsiakas($id);
		$this->load->library('session');
		if(isset($this->session->userdata['logged_in'])){
		$data['id']=$id;
		$data['sivun_sisalto']='asiakas/nayta_muokattava_asiakas';
		$this->load->view('menu/sisalto',$data);
	}
		else{
					$this->load->view('etusivu/login');
			}
		}


	public function paivita_asiakas(){
		$btn=$this->input->post('btnTallenna');
		$this->load->library('session');
		if(isset($this->session->userdata['logged_in'])){
		//jos tallenna painiketta painettu
			if(isset($btn))
		 	{
		 		$id=$this->input->post('ID');
				$update_data = array(
				"Etunimet"=>$this->input->post('en'),
				"Sukunimi"=>$this->input->post('sn'),
				"Hetu"=>$this->input->post('ht'),
				"Puhelinnumero"=>$this->input->post('puh'),
				"Email"=>$this->input->post('em'),
				"Osoite"=>$this->input->post('os'),
				"Postitoimipaikka"=>$this->input->post('psp'),
				"Postinumero"=>$this->input->post('psn'));
			 $testi= $this->Asiakas_model->updateAsiakas($update_data,$id);
			 $this->nayta_asiakas();
			}

		}
		else{
				$this->load->view('etusivu/login');
			}
	}	

}

