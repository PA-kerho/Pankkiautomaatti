<h2>Liitetyt ja vapaat kortit</h2>
<h3>Liitetyt</h3>
<TABLE class="table">
	<TR>
	<TH>Tili-id</TH>
	<TH>Tilinumero</TH>
	<TH>KorttiID</TH>
	


	
	</TR>

<?php

	foreach ($liitetyt as $rivi) {
		echo '<tr>
		<td>'.$rivi['ID'].'</td>
		<td>'.$rivi['TiliID'].'</td>
		<td>'.$rivi['KorttiID'].'</td></tr>';
		}

?>
</TABLE>
<h3>Vapaat kortit</h3>

<TABLE class="table">
	<TR>
	<TH>Kortinnumero</TH>
	<TH>Voimassa</TH>
</TR>

<?php

	foreach ($vapaatK as $rivi) {
		echo '<tr>
		<td>'.$rivi['KortinNumero'].'</td>
		<td>'.$rivi['Voimassaoloaika'].'</td></tr>';
		}

?>
</TABLE>

<h3>Vapaat tilit</h3>
<TABLE class="table">
	<TR>
	<TH>Tilin nimi</TH>
	<TH>Tilinumero</TH>
</TR>

<?php

	foreach ($vapaatT as $rivi) {
		echo '<tr>
		<td>'.$rivi['TilinNimi'].'</td>
		<td>'.$rivi['IBAN'].'</td></tr>';	
		}

?>
</TABLE>


