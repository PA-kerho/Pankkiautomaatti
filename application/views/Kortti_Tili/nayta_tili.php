<h1>Tilit</h1>

<TABLE class="table">
	<TR>
	<TH>Tili-id</TH>
	<TH>Tilinumero</TH>
	<TH>Tilin nimi</TH>

	
	</TR>
<?php
	foreach ($Kortti_Tili as $rivi) {
		echo '<tr>
		<td>'.$rivi['ID'].'</td>
		<td>'.$rivi['IBAN'].'</td>
		<td>'.$rivi['TilinNimi'].'
		</td></tr>';

		
	}

?>

</TABLE> 