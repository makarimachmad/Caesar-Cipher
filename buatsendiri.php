<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h4>CAESAR CIPHER</h4>

		<form method="POST" action="">	
			<table>
				<tr>
					<td>PlaintText</td>
					<td>:</td>
					<td><input type="text" name="plaintText" id="plaintText" class="validate"></td>
				</tr>

				<tr>
					<td>Kuncimu</td>
					<td>:</td>
					<td><input type="text" name="kunci"></td>
				</tr>
				<tr>
					<td colspan="3"><input type="submit" name="submit"></td>
				</tr>


			</table>
		</form>


		<?php 
if (isset($_POST['submit'])) {
	$plaintText = $_POST['plaintText'];
	// $password = $_POST['password'];
	$kuncimu = $_POST['kunci'];
	$pswdbr = array();
	$pasbr = array();

	$panjang = strlen($plaintText);
	$array = str_split($plaintText);

	echo "<br>Nilai ASCII PlainText    : ";
	for ($i=0; $i < $panjang; $i++) {
		$pswd  = ord( $array[$i] );	
		echo $pswd." ";
	}

	echo "<br>ChiperText    : ";
	for ($i=0; $i < $panjang; $i++) {
		$pswdbr[$i]  = chr(((ord( $array[$i] )+$panjang)%256)+$i);	
		echo $pswdbr[$i];
	}
	
	echo "<br>Dekrips    : ";
	for ($i=0; $i < $panjang; $i++) {
		$pasbr[$i] = chr(((ord($pswdbr[$i])-$panjang)%256)-$i);	
		echo $pasbr[$i];
	}

}

?>
	</center>
	<br><br><br>

</body>
</html>