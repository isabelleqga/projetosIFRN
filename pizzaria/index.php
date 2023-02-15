<?php 
include("config2.php");
include("verifica.php");
include("top.php");
if(isset($_GET['pronto'])) {
	$codigo = $_GET['pronto'];
	$consulta2 = $MySQLi->query("UPDATE TB_PEDIDOS SET PED_FINALIZADO = '1' WHERE PED_CODIGO = $codigo");
}
$consulta = $MySQLi->query("SELECT PED_CODIGO, PIZ_SABOR, PIZ_TAMANHO, TIMESTAMPDIFF(MINUTE, ped_data, current_timestamp()) as 'tempo' FROM TB_PEDIDOS LEFT JOIN TB_CLIENTES ON PED_CLI_CODIGO = CLI_CODIGO LEFT JOIN TB_PIZZAS ON PIZ_CODIGO = PED_PIZ_CODIGO WHERE PED_FINALIZADO='0'" );

$consultaPRONTO = $MySQLi->query("SELECT PED_CODIGO, PIZ_SABOR, CLI_NOME, PED_DATA FROM TB_PEDIDOS LEFT JOIN TB_CLIENTES ON PED_CLI_CODIGO = CLI_CODIGO LEFT JOIN TB_PIZZAS ON PIZ_CODIGO = PED_PIZ_CODIGO WHERE PED_FINALIZADO='1'" );
?>

<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Pedidos</a>
                </div>
                
            </div>
        </nav>


        <div class="content">
<div class="container-fluid">
	<div class="col-md-12"><h3>Pedidos Abertos</h3>
                        <div class="card">
<table class="table table-striped">

	<thead><th>PEDIDO</th><th>PIZZA</th><th>TAMANHO</th><th>CHEGADA</th><th>FINALIZADO</th></thead>

	<?php while($resultado=$consulta->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $resultado['PED_CODIGO']; ?></td>
		<td><?php echo $resultado['PIZ_SABOR']; ?></td>
		<td><?php echo $resultado['PIZ_TAMANHO']; ?></td>
		<td><?php echo "há ".$resultado['tempo']." minutos"; ?></td>
		<td><a class="btn btn-info btn-fill btn-wd" href="?pronto=<?PHP echo $resultado['PED_CODIGO']; ?>">FINALIZADO</a></td>
	</tr>
	<?php } ?>

</table>
</div><h3>Pedidos Finalizados</h3>
<div class="card">

<table class="table table-striped">

	<thead><th>PEDIDO</th><th>PIZZA</th><th>CLIENTE</th><th>DATA</th></thead>

	<?php while($resultadoPRONTO=$consultaPRONTO->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $resultadoPRONTO['PED_CODIGO']; ?></td>
		<td><?php echo $resultadoPRONTO['PIZ_SABOR']; ?></td>
		<td><?php echo $resultadoPRONTO['CLI_NOME']; ?></td>
		<td><?php echo $resultadoPRONTO['PED_DATA']; ?></td>
		
	</tr>
	<?php } ?>

</table>
</div></div>
<?php include("bot.php"); ?>

