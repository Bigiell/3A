<html>
<head>
<title>PHP</title>
</head>
<body>
Ćwiczenie 1</br>
<?php

?>
Ćwiczenie 2</br>
<?php
print <<<blokDokumentu
<html>
<head><title>Menu</title></head>
<body bgcolor="fffed9">
<h1>Śniadanie</h1>
<ul>
<li>Jajecznica na boczku</li>
<li>Sałatka warzywna</li>
<li>Zupa mleczna</li>
</ul>
</body>   
</html>
blokDokumentu;
?>
</br>
</br>
<?php
print<<<blokDokumentu
<html>
<head><title>Menu</title></head>
<body bgcolor="fffed9">
<h1>Przedmioty</h1>
<ul>
<li>Język POlski</li>
<li>Język Angielski</li>
<li>Język Niemiecki
<li>Zupa mleczna</li>
</ul>
</body>   
</html>
?>
</body>
</html>