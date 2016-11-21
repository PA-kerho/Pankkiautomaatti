
<!DOCTYPE html>
<html>
<head>
<title>PA-pankki</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/bootstrap.min.css');?>">

<ul>

	<li><a href="<?php echo base_url(''); ?>">Etusivu</a></li>
	<li><a href="<?php echo site_url('asiakas/lisaa_asiakas'); ?>">Lisää asiakas</a></li>
	<li><a href="<?php echo site_url('asiakas/nayta_asiakas'); ?>">Asiakaslista</a></li>
	<li><a href="<?php echo site_url('Kortti_Tili/lisaa_kortti'); ?>">Korttien hallinta</a></li>
	<li><a href="<?php echo site_url('Kortti_Tili/lisaa_tili'); ?>">Tilien hallinta</a></li>
	<li><a href="<?php echo site_url('Kirjaudu/logout'); ?>">Kirjaudu ulos</a></li>


</ul>