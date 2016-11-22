
<?php

Class Kirjaudu extends CI_Controller {

	public function __construct() {
	parent::__construct();

	// Load form helper library
	$this->load->helper('form_helper');

	// Load form validation library
	$this->load->library('form_validation');

	// Load session library
	$this->load->library('session');

	// Load database
	$this->load->model('Kirjaudu_model');
	}

// Show login page
	public function index() {
		$data['sivun_sisalto']='etusivu/index';
			if(isset($_SESSION['logged_in'])){
			$this->load->view('menu/sisalto',$data);
			}
			else{
				//header('Location:http://localhost/Pankkiautomaatti/index.php/kirjaudu/index');
				//$this->load->view('etusivu/login');
				$this->load->view('etusivu/login');
				}

	}

// Check for user login process
	public function user_login_process() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
			$this->load->view('etusivu/index');
			}else{
			$this->load->view('etusivu/login');
			}
			}
		else {
			$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
			$result = $this->Kirjaudu_model->login($data);
				if ($result == TRUE) {

				$username = $this->input->post('username');
				$result = $this->Kirjaudu_model->read_user_information($username);
					if ($result != false) {
					$session_data = array(
					'username' => $result[0]->Nimi,
					);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					$data['sivun_sisalto']='etusivu/index';
					$this->load->view('menu/sisalto',$data);
					//header("location: http://localhost/Pankkiautomaatti/index.php/Etusivu/index");
					}
			} 
					else {
					echo '<script>alert("käyttäjätunnus tai Salasana on virheellinen");</script>';
					$this->load->view('etusivu/login', $data);
					}
		}
	}

// Logout from admin page
	public function logout() {

		// Removing session data
		$sess_array = array(
		'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Kirjauduit ulos!';
		$this->load->view('etusivu/login', $data);
	}

}

?>