<form action="liitaTiliKortti?id=<?php echo $_GET['id']; ?>" method="POST">

<input type="hidden" name="TiliID" value="<?php echo $_GET['id']; ?>">
<h2>Liitetyt ja vapaat kortit</h2>
<h3>Liitetyt</h3>
<TABLE class="table">
	<TR>
	<TH>Liitos-id</TH>
	<TH>Tili-Id</TH>
	<TH>Kortti-id</TH>

	


	
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
	<TH>ID</TH>
	<TH>Kortinnumero</TH>
	<TH>Voimassa</TH>
</TR>


<?php

	foreach ($vapaatK as $rivi) {
		
		echo '<tr> 
		<td>'.$rivi['ID'].'</td>
		<td>'.$rivi['KortinNumero'].'</td>
		<td>'.$rivi['Voimassaoloaika'].'<td><td><input type="radio" name="yhdista" value="'.$rivi['ID'].'"</td></tr></input>';
}
		


?>

</TABLE>


<input class="btn btn-primary" type="submit" name="btnliita" value="Liitä" >

</form>