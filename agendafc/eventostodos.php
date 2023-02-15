<?php 
include("top.php");
include("config2.php");
include("verifica.php");
$codigousuario = $_SESSION['codigousuario'];

if(isset($_GET['excluir'])) {
    $codigo = $_GET['excluir'];
    $codigoagenda = $_GET['codigo'];
    $consulta2 = $MySQLi->query("DELETE FROM TB_EVENTOS
    WHERE EVE_CODIGO = $codigo");
    header("location: eventostodos.php");
}

$consulta = $MySQLi->query("SELECT *,  DATE_FORMAT(EVE_DATAINICIO, '%d/%m/%Y  às %H:%i') AS DATAINICIO, DATE_FORMAT(EVE_DATAFIM, '%d/%m/%Y  às %H:%i') AS DATAFIM, TIME_FORMAT(TIMEDIFF(EVE_DATAINICIO, CURRENT_TIMESTAMP()), '%k HORAS E %i MINUTOS') AS ESPERA FROM TB_EVENTOS JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO WHERE AGE_USU_CODIGO ='$codigousuario' HAVING TIME_FORMAT(TIMEDIFF(EVE_DATAINICIO, CURRENT_TIMESTAMP()), '%k') >= 0 ORDER BY EVE_DATAINICIO;");
$consultaPRONTO = $MySQLi->query("SELECT *,  DATE_FORMAT(EVE_DATAINICIO, '%d/%m/%Y  às %H:%i') AS DATAINICIO, DATE_FORMAT(EVE_DATAFIM, '%d/%m/%Y  às %H:%i') AS DATAFIM FROM TB_EVENTOS JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO WHERE AGE_USU_CODIGO ='$codigousuario' HAVING TIME_FORMAT(TIMEDIFF(EVE_DATAINICIO, CURRENT_TIMESTAMP()), '%k') < 0 ORDER BY EVE_DATAINICIO;");
?>

<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Eventos</a>  
                </div>
                
            </div>
        </nav>


        <div class="content">
<div class="container-fluid">
 <div class="col-md-12">

<h3>Próximos Eventos</h3>
                        <div class="card">


<table class="table table-striped">
<thead><th>AGENDA</th><th>TITULO</th><th>DESCRIÇÃO</th><th>INÍCIO</th><th>FIM</th><th>ESPERA</th><th>EDITAR</th><th>EXCLUIR</th></thead>
<tbody>
    <?php while($resultado=$consulta->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $resultado['AGE_NOME']; ?></td>
        <td><?php echo $resultado['EVE_TITULO']; ?></td>
        <td><?php echo $resultado['EVE_DESCRICAO']; ?></td>
        <td><?php echo $resultado['DATAINICIO']; ?></td>
        <td><?php echo $resultado['DATAFIM']; ?></td>
        <td><?php echo $resultado['ESPERA']?></td>
        <td><a href="eventos-editar.php?codigo=<?php echo $resultado['EVE_CODIGO']; ?>"><i class="ti-pencil"></i></a></td>
        <td><a href="?excluir=<?PHP echo $resultado['EVE_CODIGO']; ?>&codigo=<?PHP echo $resultado['EVE_AGE_CODIGO']; ?>"><i class="ti-trash"></i></a></td>
    </tr>
    <?php } ?>
</tbody>
</table>
</div>
</div>

<div class="col-md-12">
    <h3>Eventos Finalizados</h3>
                        <div class="card">
<table class="table table-striped">
<thead><th>AGENDA</th><th>TITULO</th><th>DESCRIÇÃO</th><th>INÍCIO</th><th>FIM</th><th>EDITAR</th><th>EXCLUIR</th></thead>
<tbody>
    <?php while($resultadop=$consultaPRONTO->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $resultadop['AGE_NOME']; ?></td>
        <td><?php echo $resultadop['EVE_TITULO']; ?></td>
        <td><?php echo $resultadop['EVE_DESCRICAO']; ?></td>
        <td><?php echo $resultadop['DATAINICIO']; ?></td>
        <td><?php echo $resultadop['DATAFIM']; ?></td>
        <td><a href="eventos-editar.php?codigo=<?php echo $resultadop['EVE_CODIGO']; ?>"><i class="ti-pencil"></i></a></td>
        <td><a href="?excluir=<?PHP echo $resultadop['EVE_CODIGO']; ?>&codigo=<?PHP echo $resultadop['EVE_AGE_CODIGO']; ?>"><i class="ti-trash"></i></a></td>
    </tr>
    <?php } ?>
</tbody>
</table>
</div>
</div>

<?php include("bot.php"); ?>
                                 
