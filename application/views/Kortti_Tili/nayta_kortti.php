<h1>Kortit</h1>

<TABLE BORDER=2>
	<TR>
	<TH>ID_kortti</TH>
	<TH>KortinNumero</TH>
	<TH>PinKoodi</TH>
	<TH>Voimassa</TH>
	<TH></TH>

	
	</TR>
	<?php
	foreach ($Kortti_Tili as $rivi) {
		echo '<tr>
		<td>'.$rivi['ID'].'</td>
		<td>'.$rivi['KortinNumero'].'</td>
		<td>'.$rivi['PinKoodi'].'</td>
		<td>'.$rivi['Voimassaoloaika'].'</td><td>';
		

		echo '<form action="poista_kortti" method = "POST"><input type="hidden" name="ID" value="'.$rivi["ID"].'"><input type="submit" name="btnpoista_kortti" class="btn btn-primary btn-xs" value="Poista"/>
		</form>';
		/*
		
		echo '<td><a href="nayta_muokattava_asiakas?ID='.$rivi['ID'].'" class="btn btn-primary btn-xs">Muokkaa</a></td></tr>';*/
		
		echo '</td></tr>';

		
	}

?>

</TABLE> 