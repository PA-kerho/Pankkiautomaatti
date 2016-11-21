<h1> Poista kortti</h1>
<table border=1>
<TR>
	<TH>ID</TH>
	<TH>KortinNumero</TH>
	<TH>PinKoodi</TH>
	<TH>Voimassa</TH>
	</TR>
	<?php
	foreach ($asiakas as $rivi) {
		echo '<tr>
		<td>'.$rivi['ID'].'</td>
		<td>'.$rivi['KortinNumero'].'</td>
		<td>'.$rivi['PinKoodi'].'</td><td>
		<td>'.$rivi['Voimassaoloaika'].'</td><td>';
	
	echo '<a href="poista_kortti/';
	echo $rivi['ID'].'">Poista</a>';
	echo '</td></tr>';
}
?>
</table>