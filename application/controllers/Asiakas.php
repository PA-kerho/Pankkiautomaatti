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



}