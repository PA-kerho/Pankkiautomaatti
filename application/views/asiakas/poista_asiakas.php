<h1> Poista asiakas</h1>
<table border=1>
<TR>
	<TH>ID</TH>
	<TH>Etunimi</TH>
	<TH>Sukunimi</TH>
	<TH>Henkilötunnus</TH>
	<TH>Puhelinnumero</TH>
	<TH>e-mail</TH><TH>Osoite</TH>
	<TH>Postinumero</TH>
	<TH>Postitoimipaikka</TH>
	<TH>Poista</TH>
	</TR>
	<?php
	foreach ($asiakas as $rivi) {
		echo '<tr>
		<td>'.$rivi['ID'].'</td>
		<td>'.$rivi['Etunimet'].'</td>
		<td>'.$rivi['Sukunimi'].'</td>
		<td>'.$rivi['Hetu'].'</td>
		<td>'.$rivi['Email'].'</td>
		<td>'.$rivi['Puhelinnumero'].'</td>
		<td>'.$rivi['Osoite'].'</td>
		<td>'.$rivi['Postitoimipaikka'].'</td>
		<td>'.$rivi['Postinumero'].'</td><td>';
	
	echo '<a href="poista_asiakas/';
	echo $rivi['ID'].'">Poista</a>';
	echo '</td></tr>';


}
?>
</table>