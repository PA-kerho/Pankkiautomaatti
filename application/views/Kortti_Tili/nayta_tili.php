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

		echo '<div class="dropdown">
				<button class ="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Liitetyt kortit
				<span class="caret"></span></button><form action="nayta_liitetyt_kortit" method = "POST"><input type="hidden" name="ID" value="'.$rivi["Liitetyt"].'"</form>
				<ul class="dropdown-menu">
				<li><a href="http://localhost/Pankkiautomaatti/index.php/Kortti_Tili/nayta_liitetyt_kortit">Liitetyt kortit</a>
				</li>';



		 echo '</ul></div></td></tr>';
	}
?>;



</TABLE> 