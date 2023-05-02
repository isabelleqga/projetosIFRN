<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$lances = $_POST['lance'];

$lanc = fopen("lances.txt", "a");
$uy = fwrite($lanc, $lances."<br>");
fclose($lanc);
?>

<center>
	<h1>O LANCE FOI DADO!</h1>
</center>
</body>
</html>