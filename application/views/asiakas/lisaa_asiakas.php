<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/bootstrap.css');?>">
<h1>Lisää asiakas</h1>
<form class="form-group" method="POST" action="lisaa_asiakas">
<input type="text" name="en" required="" placeholder="Etunimi"> <br>
<input type="text" name="sn" required="" placeholder="Sukunimi"> <br>
<input type="text" name="ht" required="" placeholder="Hetu"> <br>
<input type="text" name="puh" required="" placeholder="Puhelinnumero"> <br>
<input type="text" name="em" required="" placeholder="Email"> <br>
<input type="text" name="os" required="" placeholder="Osoite"> <br>
<input type="text" name="psp" required="" placeholder="Postitoimipaikka"> <br>
<input type="text" name="psn" required="" placeholder="Postinumero"> <br>


<input type="submit" name="btnTallenna" value="Tallenna" >
</form>