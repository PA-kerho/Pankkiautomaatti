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
		</td><td>';

		echo '<form action="nayta_liitetyt_kortit" method = "POST"><input type="hidden" name="ID" value="'.$rivi["ID"].'"><input type="submit" name="btn_naytakortit" class="btn btn-poista btn-xs" value="Poista"/>
		</form>';

		echo '</td></tr>';
	}

?>

</TABLE> 