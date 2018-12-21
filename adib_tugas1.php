<html>
<head>
<title>Tw2 Tugas 1 Adib</title>
</head>
<body>
<p>Manakah nilai variable yang paling besar</p>
<p>Masukkan angka yang berbeda yaa!</p>

<form action="adib_tugas1.php" method="POST">
<table>
	<tr>
		<td>Variable 1</td>
		<td><input type="text" name="v1"></td>
	</tr>
	<tr>
		<td>Variable 2</td>
		<td><input type="text" name="v2"></td>
	</tr>
	<tr>
		<td>Variable 3</td>
		<td><input type="text" name="v3"></td>
	</tr>
	<tr>
		<td><input type="submit" value="Cek Terbesar"></td>
		<td><input type="reset" value="Batal"></td>
	</tr>
</table>
</form>

<?php
$a	= $_POST['v1'];
$b	= $_POST['v2'];
$c	= $_POST['v3'];

$d	= "variable a";
$e	= "variable b";
$f	= "variable c";

echo "variable a = ".$a."<br>"."variable b = ".$b."<br>"."variable c = ".$c."<br>";

/*if($a!=$b && $a!=$c && $b!=$c) {*/
	if($a>$b && $a>$c) {
		echo "nilai terbesarnya adalah ".$d;
	}elseif($b>$a && $b>$c) {
		echo "nilai terbesarnya adalah ".$e;
	}elseif($c>$a && $c>$b) {
		echo "nilai terbesarnya adalah ".$f;
	}else {
		echo "perintahnya gimana hayo?";
	}
/*}else {
	if($b=$c && $a<$b) {
		echo "nilai terbesarnya adalah ".$e." dan ".$f;
	}elseif($a=$c && $b<$a) {
		echo "nilai terbesarnya adalah ".$d." dan ".$f;
	}elseif($b=$c && $a>$b) {
		echo "nilai terbesarnya adalah ".$d;
	}
}*/

?>
</body>
</html>
