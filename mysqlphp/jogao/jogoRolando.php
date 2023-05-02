<!DOCTYPE html>
<html>
<head>
	<?php
$time1 = $_POST['time1n'];
$time2 = $_POST['time2n'];
$esc1 = $_POST['escudo1'];
$esc2 = $_POST['escudo2'];


$lanc = fopen("lances.txt", "w");
$uy = fwrite($lanc, "");
fclose($lanc);

$jgtime1 = fopen("jgtime1.txt", 'w');
fwrite($jgtime1, $time1.",");
fwrite($jgtime1, $esc1);
fclose($jgtime1);
$jgtime1 = fopen("gols1.txt", 'w');
fwrite($jgtime1, 0);
fclose($jgtime1);

$jgtime2 = fopen("jgtime2.txt", 'w');
fwrite($jgtime2, $time2.",");
fwrite($jgtime2, $esc2);
fclose($jgtime2);
$jgtime1 = fopen("gols2.txt", 'w');
fwrite($jgtime1, 0);
fclose($jgtime1);

?>
	<title>Tela Moderador</title>
</head>
<body>
<center>

	<h1 style= "display:inline;">
	<?php echo $time1 ?>
	<img style = "width: 80px; height: 95px;" src = <?php echo $esc1 ?>>
	x
	<img style = "width: 80px; height: 95px;" src = <?php echo $esc2 ?>>
	<?php echo $time2 ?>
	
</h1>
<br>
<br>
<form action ="goal1.php" method ="POST">
	Gol do <?php echo $time1; ?><br><input type="submit" value="+">
</form>
<br>
<form action ="goal2.php" method ="POST">
	Gol do <?php echo $time2; ?><br><input type="submit" value="+">
</form>
<br>
<form action="lancepah.php" method="POST">
		<input style = "width: 500px; height: 30px;" type="text" name="lance" placeholder="Lance...">
		<input type="submit" value="ENVIAR">
</form>
	<br>
	<form action = telaUsuario.php>
		<input type="submit" value="ver">
	</form>

</center>
</body>
</html>