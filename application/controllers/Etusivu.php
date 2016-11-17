<?php
session_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class Etusivu extends CI_Controller {

	public function index(){
		$data['sivun_sisalto']='etusivu/index';
		if(isset($_SESSION['user'])){
		$this->load->view('menu/sisalto',$data);
		}
		else{
			$this->load->view('etusivu/login');
		}
	}
	public function login(){
		$data['sivun_sisalto']='';
		$this->load->view('etusivu/login',$data);

	}
	public function handleLogin(){
		$btn = $this->input->post('nappi');
		if(isset($btn)){
			$user = $this->input->post('Käyttäjätunnus');
			$password = $this->input->post('Salasana');
			$oikeatunnus="hippo";
			$oikeasalasana="test";
			if ($user==$oikeatunnus){
				if ($password==$oikeasalasana){
					$_SESSION['kirjautunut']=TRUE;
					$_SESSION['user']=$oikeatunnus;
					header('Location:index');
				} 
				else {
					echo '<script>alert("Käyttäjätunnus tai Salasana ei täsmää")</script>';
					
					}
						}
				else {	echo '<script>alert("Käyttäjätunnus tai Salasana ei täsmää")</script>';
				}
					$this->load->view('etusivu/login');
					
		}
	}

	public function Logout(){
		$data['sivun_sisalto']='';
		$this->load->view('etusivu/logout');
	}
}