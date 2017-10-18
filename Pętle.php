<!DOCTYPE html>
<html>
<head>
	<title>Pętle w PHP</title>
</head>
<body>
<form method="post">
	<p>Wartość początkowa</p>
	<input type="text" name="a">
	<p>ile liczb?</p>
	<input type="text" name="b">
	<input type="submit" name="c">
</form>
<?php
$a=@$_POST["a"];
$b=@$_POST["b"];
$c=$a;
for ($a; $a<=$c+$b ; $a++){ 
	
}
?>
</body>
</html>