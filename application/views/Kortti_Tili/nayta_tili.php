<h2>Tilit</h2>

<TABLE id="Taulu" class="table">
	<TR>
	<TH>Tili-id</TH>
	<TH>Tilinumero</TH>
	<TH>Tilin nimi</TH>
	<TH></TH>
	<TH></TH>

	
	</TR>
<?php
	foreach ($Kortti_Tili as $rivi) {
		echo '<tr>
		<td>'.$rivi['ID'].'</td>
		<td>'.$rivi['IBAN'].'</td>
		<td>'.$rivi['TilinNimi'].'</td>';

		echo '<td>
				
					<button class ="btn btn-primary type="button">
					<a href="http://localhost/Pankkiautomaatti/index.php/Kortti_Tili/nayta_liitetyt_kortit?id='.$rivi['ID'].'">Liitä korttiin</a></button>
						
							
						</form></td>';
				
		



		echo '<td><form action="lukitse_tili" method = "POST"><input type="hidden" name="Lukittu" value="'.$rivi["Lukittu"].'"><input type="hidden" 
			name="ID" value="'.$rivi["ID"].'">';
		if($rivi['Lukittu']==1){
		echo '<input type="submit" name="btnLukitse" class="btn btn-muokkaa btn-xs" value="Avaa"/>';
			}
		else {

			echo '<input type="submit" name="btnLukitse" class="btn btn-muokkaa btn-xs" value="Lukitse"/>';
			}
							}
			echo '</form></td></tr><br><br><br><br>';

			
?>;



</TABLE> 