<h1>Kortit</h1>

<TABLE BORDER=2>
	<TR>
	<TH>ID_kortti</TH>
	<TH>KortinNumero</TH>
	<TH>PinKoodi</TH>
	
	</TR>
	<?php
	foreach ($asiakas as $rivi) {
		echo '<tr>
		<td>'.$rivi['ID_kortti'].'</td>
		<td>'.$rivi['KortinNumero'].'</td>
		<td>'.$rivi['PinKoodi'].'</td>';
		

		echo '<form action="poista_asiakas" method = "POST"><input type="hidden" name="ID" value="'.$rivi["ID"].'"><input type="submit" name="btnpoista_asiakas" class="btn btn-primary btn-xs" value="Poista"/>
		</form>';
		/*
		
		echo '<td><a href="nayta_muokattava_asiakas?ID='.$rivi['ID'].'" class="btn btn-primary btn-xs">Muokkaa</a></td></tr>';*/
		
		echo '</td></tr>';

		
	}

?>

</TABLE> 