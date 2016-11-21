<?php

Class Kirjaudu_model extends CI_Model {

// Read data using username and password
public function login($data) {


$condition = "Nimi =  '" . $data['username'] . "'";
$this->db->select('Tiiviste,Suola');
$this->db->from('Kayttajat');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
$result = $query->result_array();
echo '<script>console.log('.json_encode($result).')</script>';
if ($query->num_rows() == 1 && $result[0]['Tiiviste'] == sha1($data['password'].$result[0]['Suola'])  ) {
	return true;
	} 
	else {
	return false;
	}
}

public function read_user_information($username) {

$condition = "Nimi =" . "'" . $username . "'";
$this->db->select('*');
$this->db->from('Kayttajat');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
	return $query->result();
	} 
	else {
	return false;
	}
	}

}

?>