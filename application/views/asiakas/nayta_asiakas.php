<h2>Asiakkaat</h2>



<TABLE id="AsiakkaatTaulu" class="table">

	<TR>
	<TH>Etunimi</TH>
	<TH>Sukunimi</TH>
	<TH>Henkilötunnus</TH>
	<TH>e-mail</TH>
	<TH>Puhelinnumero</TH>
	<TH>Osoite</TH>
	<TH>Postinumero</TH>
	<TH>Postitoimipaikka</TH>
	<TH></TH>
	<TH></TH>

	</TR>
	<?php
	foreach ($asiakas as $rivi) {
		echo '<tr>
		<td>'.$rivi['Etunimet'].'</td>
		<td>'.$rivi['Sukunimi'].'</td>
		<td>'.$rivi['Hetu'].'</td>
		<td>'.$rivi['Email'].'</td>
		<td>'.$rivi['Puhelinnumero'].'</td>
		<td>'.$rivi['Osoite'].'</td>
		<td>'.$rivi['Postitoimipaikka'].'</td>
		<td>'.$rivi['Postinumero'].'</td><td>';
		

		echo '<form action="poista_asiakas" method = "POST"><input type="hidden" name="ID" value="'.$rivi["ID"].'"><input type="submit" name="btnpoista_asiakas" class="btn btn-poista btn-xs" value="Poista"/>
		</form>';
		/*echo '</td><td>&nbsp&nbsp;</td><td><form action="nayta_muokattava_asiakas" method = "POST"><input type="hidden" name="ID" value="'.$rivi["ID"].'"><input type="submit" name="btn_paivita_asiakas" class="btn btn-primary btn-xs" value="Muokkaa"/>
		</form>'; */
		echo 
		'<td><a href="nayta_muokattava_asiakas?ID='.$rivi['ID'].'" class="btn btn-muokkaa btn-xs">Muokkaa</a></td></tr>';
		
		echo '</td></tr>';

		
	}

?>

</TABLE> 