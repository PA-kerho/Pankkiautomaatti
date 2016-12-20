<?php
session_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class Etusivu extends CI_Controller {

	public function index(){
		$data['sivun_sisalto']='etusivu/index';
		if(isset($this->session->userdata['logged_in'])){
		//if(isset($_SESSION['logged_in'])){
		$this->load->view('menu/sisalto',$data);
		}
		else{
			//$this->load->view('etusivu/login');
		}
	}
	
}