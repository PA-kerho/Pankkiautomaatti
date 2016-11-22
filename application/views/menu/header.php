
<!DOCTYPE html>
<html>
<head>
<title>PA-pankki</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/bootstrap.css');?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url('style/js/bootstrap.js');?>"></script>
<link rel="stylesheet" type="text/css" href="style/css/Bordered-form.css">

<ul>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
  	<div class="navbar-header">
    	<a class="navbar-brand" href="#">Pa-pank</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url(''); ?>">Etusivu</a></li>
      
	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Asiakkaat
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo site_url('asiakas/lisaa_asiakas'); ?>">Lisää asiakkaita</a></li>
	          <li><a href="<?php echo site_url('asiakas/nayta_asiakas'); ?>">Tarkastele, muokkaa, poista</a></li>
	        </ul>
	      </li>
      
	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tilit
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo site_url('Kortti_Tili/nayta_tili'); ?>">Tilit</a></li>
	          <li><a href="<?php echo site_url('Kortti_Tili/tilien_hallinta'); ?>">Tarkastele, muokkaa, poista</a></li>
	        </ul>
	      </li>

	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kortit
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo site_url('Kortti_Tili/nayta_kortti'); ?>">Kortit</a></li>
	          <li><a href="<?php echo site_url('Kortti_Tili/korttien_hallinta'); ?>">Tarkastele, muokkaa, poista</a></li>
	        </ul>
	      </li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url('Kirjaudu/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Kirjaudu ulos</a></li>
    </ul>
</div>
</nav>
</ul>