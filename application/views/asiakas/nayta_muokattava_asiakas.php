<h2>Muokkaa tietoja</h2>
<FORM action="<?php echo site_url('asiakas/paivita_asiakas');?>" method="POST">
<TABLE class="table ">
<TR>
<TH>Etunimi</TH>
<TH>Sukunimi</TH>
<TH>Hetu</TH>
<TH>Puhelinnumero</TH>
<TH>Sähköposti</TH>
<TH>Osoite</TH>
<TH>Postitoimipaikka</TH>
<TH>Postinumero</TH>
<TH></TH>
<TH></TH>
</TR>
<?php

	
	echo '<tr>';
	echo '<td><input type="text" name="en" value="'.$asiakas[0]['Etunimet'].'"></td>';
	echo '<td><input type="text" name="sn" value="'.$asiakas[0]['Sukunimi'].'"></td>';
	echo '<td><input type="text" name="ht" value="'.$asiakas[0]['Hetu'].'"></td>';
	echo '<td><input type="text" name="puh" value="'.$asiakas[0]['Puhelinnumero'].'"></td>';
	echo '<td><input type="text" name="em" value="'.$asiakas[0]['Email'].'"></td>';
	echo '<td><input type="text" name="os" value="'.$asiakas[0]['Osoite'].'"></td>';
	echo '<td><input type="text" name="psp" value="'.$asiakas[0]['Postitoimipaikka'].'"></td>';
	echo '<td><input type="text" name="psn" value="'.$asiakas[0]['Postinumero'].'"></td>';
	echo '</tr>';
	echo '<input type="hidden" name="ID" value="'.$asiakas[0]['ID'].'"></td>';


?>
</TABLE>
	<a href="<?php echo site_url('asiakas/nayta_asiakas');?>" class="btn btn-primary" role="button">Peruuta</a>
	<input class="btn btn-primary" type="submit" name="btnTallenna" value="Tallenna" >
</FORM>