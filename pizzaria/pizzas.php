<?php 
include("top.php");
include("config2.php");
include("verifica.php");
if(isset($_GET['excluir'])) {
	$codigo = $_GET['excluir'];
	$consulta2 = $MySQLi->query("DELETE FROM TB_PIZZAS
	WHERE PIZ_CODIGO = $codigo");
	header("Location: pizzas.php");
}
$consulta = $MySQLi->query("SELECT * FROM TB_PIZZAS ORDER BY PIZ_CODIGO");
?>

<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Pizzas</a>
                </div>
                
            </div>
        </nav>


       <div class="content">
<div class="container-fluid">
    <div class="col-md-12">
                        <div class="card">
<table class="table table-striped">

	<thead><th>SABOR</th><th>TAMANHO</th><th>PREÇO</th><th>EDITAR</th><th>EXCLUIR</th></thead>
<tbody>
	<?php while($resultado=$consulta->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $resultado['PIZ_SABOR']; ?></td>
		<td><?php echo $resultado['PIZ_TAMANHO']; ?></td>
		<td><?php echo $resultado['PIZ_PRECO']; ?></td>
		<td><a href="pizza-editar.php?codigo=<?php echo $resultado['PIZ_CODIGO']; ?>"><i class="ti-pencil"></i></a> </td>
		<td><a href="?excluir=<?PHP echo $resultado['PIZ_CODIGO']; ?>"><i class="ti-trash"></i></a></td>
		
	</tr>
	<?php } ?>
</tbody>
</table></div><div class="text-right">
    
    <a class="btn btn-info btn-fill btn-wd" href = "adicionar pizzas.php"><i class="ti-plus"></i> Adicionar</a> 
                                
</div></div>





<?php include("bot.php"); ?>