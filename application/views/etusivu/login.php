<html>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/Bordered-form.css');?>">
<?php
if (isset($this->session->userdata['logged_in'])) {

	header("location: http://localhost/Pankkiautomaatti/Kirjaudu/user_login_process");
}
?>
<body>
<hr/>
<?php

	$this->load->helper('form_helper');
	echo form_open('Kirjaudu/user_login_process'); 

?>

<form id="LoginForm" action="action_page.php">
  <div class="imgcontainer">
    <img src="<?php echo base_url('img_avatar2.png');?>" alt="Avatar" class="avatar">
  </div>

  <div class="container" id="LoginForm">
    
    <input type="text" name="username" id="name" placeholder="Käyttäjätunnus">
<br>
   	
    <input type="password" name="password" id="password" placeholder="Salasana"/>
<br>
    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    
 
  </div>
</form>

</body>
</html>
