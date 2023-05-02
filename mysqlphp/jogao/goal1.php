<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php

$goltime1 = fopen("gols1.txt", "r");
$gols = fread($goltime1, filesize("gols1.txt"));
fclose($goltime1);
$gols++;
$agr = fopen("gols1.txt", "w");
$escreve = fwrite($agr, $gols);
fclose($agr);

?>
</head>
<body>



<center><h1>GOL!</h1></center>

</body>
</html>