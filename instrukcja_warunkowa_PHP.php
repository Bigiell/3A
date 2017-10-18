<!DOCTYPE html>
<html>
<head>
<title>Instrukcja warunkowa</title>
</head>
<body>
Zadanie 1 i 2
<form method="post">
<input type="text" name="a" value="">
<input type="text" name="b" value="">
<input type="text" name="c" value="">
<input type="submit" name="suma" value="Oblicz" action="#">
</form>
<?php

$a=@$_POST['a'];
$b=@$_POST['b'];
$c=@$_POST['c'];

if($a==NULL || $b==NULL || $c==NULL)
{
	print"Nie podałeś wartości";
}


if($a==$b && $b==$c)
{
	print"Trójkąt jest równoboczny";
}

elseif($a+$b>$c && $a<$b && $c<$b )
{
	if($a==$c)
	{
		echo "Trójkąt jest równoramienny";
	}
	else{
		echo "Trójkąt jest różnoboczny";
	}
}

elseif ($c+$b>$a && $c<$a && $b<$a) {
	if ($c==$b) {
		echo "Trójkąt jest równoramienny";
	}
	else{
		echo "Trójkąt jest różnoboczny";
	}
}

else{
	echo "Nie można stworzyć trójkąta";
}

?>

Zadanie 3


</body>
</html>