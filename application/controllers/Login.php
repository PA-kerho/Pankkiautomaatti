<?php
ini_set("display_errors", 1);
ini_set("error_reporting", E_ALL | E_STRICT);

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function index(){
		$data['sivun_sisalto']='etusivu/index';
		$this->load->view('menu/sisalto',$data);
		
		
	}

		public function handleLogin(){
		$this->load->library('session');
		$btn = $this->input->post('nappi');
		if(isset($btn)){
			$user = $this->input->post('Käyttäjätunnus');
			$password = $this->input->post('Salasana');
			$oikeatunnus="hippo";
			$oikeasalasana="test";
			if ($user==$oikeatunnus){
				if ($password==$oikeasalasana){
					$this->session->set_userdata('user', $oikeatunnus);
					echo '<script>alert("'.$_SESSION['user'].'")</script>';
					$data['sivun_sisalto']='etusivu/index';
					$this->load->view('menu/sisalto',$data);

				} 
				else {
					echo '<script>alert("Käyttäjätunnus tai Salasana ei täsmää")</script>';
					
					}
						}
				else {	echo '<script>alert("Käyttäjätunnus tai Salasana ei täsmää")</script>';
				}
					

		}
	}
}
