<h1>Asiakkaat</h1>

<TABLE BORDER=2>
	<TR><TH>Etunimi</TH><TH>Sukunimi</TH><TH>Henkilötunnus</TH><TH>Puhelinnumero</TH>
	<TH>e-mail</TH><TH>Osoite</TH><TH>Postinumero</TH><TH>Postitoimipaikka</TH></TR>
	<?php
	foreach ($asiakas as $rivi) {
		echo '<tr><td>'.$rivi['Etunimet'].'</td><td>'.$rivi['Sukunimi'].'</td><td>'.$rivi['Hetu'].'</td><td>'.
		$rivi['Email'].'</td><td>'.$rivi['Puhelinnumero'].'</td><td>'.$rivi['Osoite'].'</td><td>'.$rivi['Postitoimipaikka'].'</td><td>'.
		$rivi['Postinumero'].'</td></tr>';
	}
?>
</TABLE>