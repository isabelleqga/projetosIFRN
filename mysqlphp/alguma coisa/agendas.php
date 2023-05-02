<?php 
include("top.php");
include("config.php");
include("verifica.php");

if(isset($_GET['excluir'])) {
	$codigo = $_GET['excluir'];
	$consulta2 = $MySQLi->query("DELETE FROM TB_AGENDAS
	WHERE AGE_CODIGO = $codigo");
	header("Location: agendas.php");
}
$consulta = $MySQLi->query("SELECT * FROM TB_AGENDAS WHERE AGE_USU_CODIGO = cogigousuario ORDER BY AGE_CODIGO");
?>


<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Agendas</a>
                </div>
                
            </div>
        </nav>


        <div class="content">
<div class="container-fluid">
    <div class="col-md-12">
                        <div class="card">

<table class="table table-striped">
<thead><th>NOME</th><th>ACESSAR</th><th>EDITAR</th><th>EXCLUIR</th></thead>
<tbody>
	<?php while($resultado=$consulta->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $resultado['AGE_NOME']; ?></td>
		<td><a href="eventos.php?codigo=<?php echo $resultado['AGE_CODIGO'] ?>"><i class="ti-link"></i></a></td>
		<td><a href="agendas-editar.php?codigo=<?php echo $resultado['AGE_CODIGO']; ?>"><i class="ti-pencil"></i></a></td>
		<td><a href="?excluir=<?PHP echo $resultado['AGE_CODIGO']; ?>"><i class="ti-trash"></i></a></td>
	</tr>
	<?php } ?>
</tbody>
</table>
</div><div class="text-right">
    
    <a class="btn btn-info btn-fill btn-wd" href = "agendas-novo.php"><i class="ti-plus"></i> Adicionar</a> 
                                
</div></div>

<?php include("bot.php"); ?>