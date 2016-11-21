<html>
<?php
if (isset($this->session->userdata['logged_in'])) {

header("location: http://localhost/Pankkiautomaatti/Kirjaudu/user_login_process");
}
?>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>
<body>
<?php
if (isset($logout_message)) {
	echo "<div class='message'>";
	echo $logout_message;
	echo "</div>";
	}
?>
<?php
if (isset($message_display)) {
	echo "<div class='message'>";
	echo $message_display;
	echo "</div>";
	}
?>
<div id="main">
<div id="login">
<h2>Kirjaudu sisään</h2>
<hr/>
<?php

$this->load->helper('form_helper');
echo form_open('Kirjaudu/user_login_process'); ?>

<?php

echo "<div class='error_msg'>";
if (isset($error_message)) {
	echo $error_message;
	}

echo validation_errors();
echo "</div>";

?>
<label>Käyttäjätunnus :</label>
<input type="text" name="username" id="name" /><br /><br />
<label>Salasana :</label>
<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
<input type="submit" value=" Login " name="submit"/><br />
<?php echo form_close(); ?>
</div>
</div>
</body>
</html>
