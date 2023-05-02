<!DOCTYPE html>
<html>
<head>
	<title>Tela Usuario</title>

<?php

$primeiro = fopen("jgtime1.txt", "r");
$cabeca1 = fread($primeiro, filesize("jgtime1.txt"));
$texto1 = preg_split ('/,/', $cabeca1);
fclose($primeiro);
$goltime1 = fopen("gols1.txt", "r");
$gols1 = fread($goltime1, filesize("gols1.txt"));
fclose($goltime1);

$segundo = fopen("jgtime2.txt", "r");
$cabeca2 = fread($segundo, filesize("jgtime2.txt"));
$texto2 = preg_split ('/,/', $cabeca2);
fclose($segundo);
$goltime2 = fopen("gols2.txt", "r");
$gols2 = fread($goltime2, filesize("gols2.txt"));
fclose($goltime2);

$lances = fopen("lances.txt", "r");
$uy = fread($lances, filesize("lances.txt"));
fclose($lances);

?>
</head>
<body>
	<center>
	<h1 style= "display:inline;"><?php echo $texto1[0]; ?></h1>
	<img style = "width: 80px; height: 95px;display:inline;" src = <?php echo $texto1[1]; ?>>
	<h1 style= "display:inline;" ><?php echo $gols1; ?></h1>
	x
	<h1 style= "display:inline;"><?php echo $gols2; ?></h1>
	<img style = "width: 80px; height: 95px;display:inline;" src = <?php echo $texto2[1]; ?>>
	<h1 style= "display:inline;"><?php echo $texto2[0]; ?></h1>
<div id = "lancesetals">
	<h2> <?php echo $uy; ?> </h2>
</div>
</center>
</body>
</html>