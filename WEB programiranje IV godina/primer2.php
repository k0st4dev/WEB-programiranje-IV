<?php
$crtable = '';
if ($_POST) {
	$crtable .= '<table border="1">';
	for ($i = 0; $i < $_POST['line']; $i++) {
		$crtable .= '<tr>';
		for ($j = 0; $j < $_POST['colunn']; $j++) {
			$crtable .= '<td width="50">&nbsp;</td>';
		}
		$crtable .= '</tr>';
	}
	$crtable .= '</table>';
}

?>
<form form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

	<td width="80"><label>Unesi Broj Redova</label></td>
	<td width="120"><input type="text" name="colunn"></td>

	<br>
	<br>
	<td><label>Unesi Broj Kolona</label></td>
	<td><input type="text" name="line"></td>

	<br>
	<br>
	<td colspan="2" align="right">
		<input type="submit" value="Kreiraj tabelu">
	</td>

</form>
<style>
	table tr:nth-child(even) td {
		background-color: grey;
	}

	table tr:nth-child(odd) td {
		background-color: white;
	}
</style>
<br />


<?php
echo $crtable;
?>