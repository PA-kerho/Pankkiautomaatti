<h1>Kortit</h1>
<br>

<TABLE class="table">
	<TR>
	<TH>ID_kortti</TH>
	<TH>KortinNumero</TH>
	<TH>PinKoodi</TH>
	<TH>Voimassa</TH>
	<TH>Lukittu</TH>
	<TH></TH>
	<TH></TH>
	</TR>

	<?php
	foreach ($Kortti_Tili as $rivi) {
		echo '<tr>
		<td>'.$rivi['ID'].'</td>
		<td>'.$rivi['KortinNumero'].'</td>
		<td>'.$rivi['PinKoodi'].'</td>
		<td>'.$rivi['Voimassaoloaika'].'</td>
		<td>'.$rivi['Lukittu'].'</td>
		<td>';
		

		echo '<form action="poista_kortti" method = "POST"><input type="hidden" name="ID" value="'.$rivi["ID"].'"><input type="submit" name="btnpoista_kortti" class="btn btn-poista btn-xs" value="Poista"/></td><td>

		</form>';

		echo '<form action="lukitse_kortti" method = "POST"><input type="hidden" name="Lukittu" value="'.$rivi["Lukittu"].'"><input type="hidden" name="ID" value="'.$rivi["ID"].'">';
		if($rivi['Lukittu']==1){
			echo '<input type="submit" name="btnLukitse" class="btn btn-muokkaa btn-xs" value="Avaa"/>';
		}
		else {

		echo '<input type="submit" name="btnLukitse" class="btn btn-muokkaa btn-xs" value="Lukitse"/>';
		}

		echo '</form></td></tr>';
	}

?>

</TABLE> 