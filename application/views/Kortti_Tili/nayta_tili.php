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
		<td>'.$rivi['TilinNimi'].'</td>
		';

		echo '<td>
				<div class="dropdown">
					<button class ="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Liitetyt kortit
					<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li> <a href="http://localhost/Pankkiautomaatti/index.php/Kortti_Tili/nayta_liitetyt_kortit?id='.$rivi['ID'].'">Liitetyt kortit</a>
							</li>
						</ul></div></form></td>';
				//echo $rivi["ID"];






			 echo '<td>
					  <form action="lukitse_tili" method = "POST"><input type="hidden" name="Lukittu" value="'.$rivi["Lukittu"].'"><input type="hidden" name="ID" value="'.$rivi["ID"].'">';
							if($rivi['Lukittu']==1){
								echo '<input type="submit" name="btnLukitse" class="btn btn-muokkaa btn-xs" value="Avaa"/>';
							}
							else {

								echo '<input type="submit" name="btnLukitse" class="btn btn-muokkaa btn-xs" value="Lukitse"/>';
							}
			echo '</form></td></tr>';
			}
?>;



</TABLE> 