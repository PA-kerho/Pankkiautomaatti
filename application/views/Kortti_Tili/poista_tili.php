<h2> Poista tili</h2>
<table border=1>
<TR>
	<TH>ID</TH>
	<TH>Tilinumero</TH>
</TR>
	<?php
	foreach ($asiakas as $rivi) {
		echo '<tr>
		<td>'.$rivi['ID'].'</td>
		<td>'.$rivi['TilinNumero'].'</td>';
	
	echo '<a href="poista_tili/';
	echo $rivi['ID'].'">Poista</a>';
	echo '</td></tr>';


}
?>
</table>