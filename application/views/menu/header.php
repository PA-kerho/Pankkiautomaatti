
<!DOCTYPE html>
<html>
<head>
<title>PA-pankki</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="style/css/Bordered-form.css">

<ul>

	<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">Pa-pank</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url(''); ?>">Etusivu</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Kirjaudu ulos</a></li>
    </ul>
  </div>
</nav>

	<li><a href="<?php echo base_url(''); ?>">Etusivu</a></li>
	<li><a href="<?php echo site_url('asiakas/lisaa_asiakas'); ?>">Lisää asiakas</a></li>
	<li><a href="<?php echo site_url('asiakas/nayta_asiakas'); ?>">Asiakaslista</a></li>
	<li><a href="<?php echo site_url('Kortti_Tili/korttien_hallinta'); ?>">Korttien hallinta</a></li>
	<li><a href="<?php echo site_url('Kortti_Tili/tilien_hallinta'); ?>">Tilien hallinta</a></li>
	
	
	
	<li><a href="<?php echo site_url('Kirjaudu/logout'); ?>">Kirjaudu ulos</a></li>



</ul>