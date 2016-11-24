<FORM action="paivita_asiakkaat" method="POST">
<TABLE class="table table-striped table-bordered">
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
foreach ($Asiakas as $rivi) {
	

	echo '<tr>';
	echo '<td><input type="text" name="en" value="'.$rivi['Etunimet'].'"></td>';
	echo '<td><input type="text" name="sn" value="'.$rivi['Sukunimi'].'"></td>';
	echo '<td><input type="text" name="ht" value="'.$rivi['Hetu'].'"></td>';
	echo '<td><input type="text" name="puh" value="'.$rivi['Puhelinnumero'].'"></td>';
	echo '<td><input type="text" name="em" value="'.$rivi['Email'].'"></td>';
	echo '<td><input type="text" name="os" value="'.$rivi['Osoite'].'"></td>';
	echo '<td><input type="text" name="psp" value="'.$rivi['Postitoimipaikka'].'"></td>';
	echo '<td><input type="text" name="psn" value="'.$rivi['Postinumero'].'"></td>';
	echo '</tr>';
	echo '<input type="hidden" name="ID" value="'.$rivi['ID'].'"></td>';

}
?>
</TABLE>
	<a href="<?php echo site_url('asiakas/nayta_asiakas');?>" class="btn btn-primary" role="button">Peruuta</a>
	<input class="btn btn-primary" type="submit" name="btnTallenna" value="Tallenna" >
</FORM>