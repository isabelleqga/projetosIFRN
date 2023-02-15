<?php 
include("config2.php");
include("verifica.php");
include("top.php");

if(isset($_GET['excluir'])) {
	$codigo = $_GET['excluir'];
	$consulta2 = $MySQLi->query("DELETE FROM TB_PEDIDOS
	WHERE PED_CODIGO = $codigo");
	header("Location: pedidos.php");
}
$consulta = $MySQLi->query("SELECT * FROM TB_PEDIDOS LEFT JOIN TB_CLIENTES ON PED_CLI_CODIGO = CLI_CODIGO LEFT JOIN TB_PIZZAS ON PIZ_CODIGO = PED_PIZ_CODIGO" );
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
	<div class="col-md-12">
                        <div class="card">
<table class="table table-striped">

	<thead><th>PEDIDO</th><th>CLIENTE</th><th>MESA</th><th>PIZZA</th><th>TAMANHO</th><th>PREÇO</th><th>DATA</th><th>ESTADO</th><th>EDITAR</th><th>EXCLUIR</th></thead>

	<?php while($resultado=$consulta->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $resultado['PED_CODIGO']; ?></td>
		<td><?php echo $resultado['CLI_NOME']; ?></td>
		<td><?php echo $resultado['CLI_MESA']; ?></td>
		<td><?php echo $resultado['PIZ_SABOR']; ?></td>
		<td><?php echo $resultado['PIZ_TAMANHO']; ?></td>
		<td><?php echo $resultado['PIZ_PRECO']; ?></td>
		<td><?php echo $resultado['PED_DATA']; ?></td>
		<td><?php echo $resultado['PED_FINALIZADO']; ?></td>
		<td><a href="pedido-editar.php?codigo=<?php echo $resultado['PED_CODIGO']; ?>"><i class="ti-pencil"></i></a> </td>
		<td><a href="?excluir=<?PHP echo $resultado['PED_CODIGO']; ?>"><i class="ti-trash"></i></a></td>
	</tr>
	<?php } ?>

</table>
</div><div class="text-right">
    
    <a class="btn btn-info btn-fill btn-wd" href = "adicionar pedidos.php"><i class="ti-plus"></i> Adicionar</a> 
                                
</div></div>
<?php include("bot.php"); ?>
