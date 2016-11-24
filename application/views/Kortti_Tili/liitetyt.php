<h1>Liitetyt</h1>

<TABLE class="table">
	<TR>
	<TH>Tili-id</TH>
	<TH>Tilinumero</TH>
	<TH>Tilin nimi</TH>
	


	
	</TR>

<?php

	foreach ($liitetyt as $rivi) {
		echo '<tr>
		<td>'.$rivi['ID'].'</td>
		<td>'.$rivi['TiliID'].'</td>
		<td>'.$rivi['KorttiID'].'
		</td>';
		}

?>
</TABLE>
