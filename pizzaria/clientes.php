<?php 
include("top.php");
include("config2.php");
include("verifica.php");

if(isset($_GET['excluir'])) {
	$codigo = $_GET['excluir'];
	$consulta2 = $MySQLi->query("DELETE FROM TB_CLIENTES
	WHERE CLI_CODIGO = $codigo");
	header("Location: clientes.php");
}
$consulta = $MySQLi->query("SELECT * FROM TB_CLIENTES ORDER BY CLI_CODIGO");
?>


<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Clientes</a>
                </div>
                
            </div>
        </nav>


        <div class="content">
<div class="container-fluid">
    <div class="col-md-12">
                        <div class="card">

<table class="table table-striped">
<thead><th>NOME</th><th>MESA</th><th>EDITAR</th><th>EXCLUIR</th></thead>
<tbody>
	<?php while($resultado=$consulta->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $resultado['CLI_NOME']; ?></td>
		<td><?php echo $resultado['CLI_MESA']; ?></td>
		<td><a href="cliente-editar.php?codigo=<?php echo $resultado['CLI_CODIGO']; ?>"><i class="ti-pencil"></i></a></td>
		<td><a href="?excluir=<?PHP echo $resultado['CLI_CODIGO']; ?>"><i class="ti-trash"></i></a></td>
	</tr>
	<?php } ?>
</tbody>
</table>
</div><div class="text-right">
    
    <a class="btn btn-info btn-fill btn-wd" href = "adicionar clientes.php"><i class="ti-plus"></i> Adicionar</a> 
                                
</div></div>

<?php include("bot.php"); ?>


                                 
                                    
