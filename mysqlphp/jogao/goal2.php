<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php

$goltime2 = fopen("gols2.txt", "r");
$gols = fread($goltime2, filesize("gols2.txt"));
fclose($goltime2);
$gols++;
$agr = fopen("gols2.txt", "w");
$escreve = fwrite($agr, $gols);
fclose($agr);

?>
</head>
<body>



<center><h1>GOL!</h1></center>

</body>
</html>