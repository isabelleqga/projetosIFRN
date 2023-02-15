<?php 
include("top.php");
include("config2.php");
include("verifica.php");

$codigoagenda = $_GET['codigo'];
$hm=0;
if(isset($_GET['excluir'])) {
    $hm=1;
    $codigoex = $_GET['excluir'];
    $codigoagenda = $_GET['codigo'];
    $consulta3 = $MySQLi->query("DELETE FROM TB_EVENTOS
    WHERE EVE_CODIGO = $codigoex");
    $head = "location: eventos.php?codigo=".$codigoagenda;
    header($head);
}

while($hm==0){
    $hm=1;
    if(!isset($_GET['codigo'])) header("location: agendas.php");
}
$consulta = $MySQLi->query("SELECT *,  DATE_FORMAT(EVE_DATAINICIO, '%d/%m/%Y  às %H:%i') AS DATAINICIO, DATE_FORMAT(EVE_DATAFIM, '%d/%m/%Y  às %H:%i') AS DATAFIM, TIME_FORMAT(TIMEDIFF(EVE_DATAINICIO, CURRENT_TIMESTAMP()), '%k HORAS E %i MINUTOS') AS ESPERA FROM TB_EVENTOS JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO WHERE EVE_AGE_CODIGO = '$codigoagenda' HAVING TIME_FORMAT(TIMEDIFF(EVE_DATAINICIO, CURRENT_TIMESTAMP()), '%k') >= 0 ORDER BY EVE_DATAINICIO;");
$consulta2 = $MySQLi->query("SELECT *,  DATE_FORMAT(EVE_DATAINICIO, '%d/%m/%Y  às %H:%i') AS DATAINICIO, DATE_FORMAT(EVE_DATAFIM, '%d/%m/%Y  às %H:%i') AS DATAFIM, TIME_FORMAT(TIMEDIFF(EVE_DATAINICIO, CURRENT_TIMESTAMP()), '%k HORAS E %i MINUTOS') AS ESPERA FROM TB_EVENTOS JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO WHERE EVE_AGE_CODIGO = '$codigoagenda';");
$consultaPRONTO = $MySQLi->query("SELECT *,  DATE_FORMAT(EVE_DATAINICIO, '%d/%m/%Y  às %H:%i') AS DATAINICIO, DATE_FORMAT(EVE_DATAFIM, '%d/%m/%Y  às %H:%i') AS DATAFIM FROM TB_EVENTOS JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO WHERE EVE_AGE_CODIGO = '$codigoagenda' HAVING TIME_FORMAT(TIMEDIFF(EVE_DATAINICIO, CURRENT_TIMESTAMP()), '%k') < 0 ORDER BY EVE_DATAINICIO;");
?>

<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><?php $resultado2=$consulta2->fetch_assoc(); echo $resultado2['AGE_NOME']; ?></a>  
                </div>
                
            </div>
        </nav>


        <div class="content">
<div class="container-fluid">
    <div class="col-md-12">

        <div class="text-right">
    
    <a  class="btn btn-info btn-fill btn-wd" href = "calendarioeve.php?codigo=<?php echo $codigoagenda; ?>"><i class="ti-calendar"></i>  Ver Calendário
    </a>
    <a class="btn btn-info btn-fill btn-wd" href = "eventos-novo.php?codigo=<?php echo $codigoagenda; ?>"><i class="ti-plus"></i> Adicionar</a>                                  
</div>
<h3>Próximos Eventos</h3>
                        <div class="card">


<table class="table table-striped">
<thead><th>TITULO</th><th>DESCRIÇÃO</th><th>INÍCIO</th><th>FIM</th><th>ESPERA</th><th>EDITAR</th><th>EXCLUIR</th></thead>
<tbody>
	<?php while($resultado=$consulta->fetch_assoc()){ ?>
	<tr>
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
<thead><th>TITULO</th><th>DESCRIÇÃO</th><th>INÍCIO</th><th>FIM</th><th>EDITAR</th><th>EXCLUIR</th></thead>
<tbody>
    <?php while($resultadop=$consultaPRONTO->fetch_assoc()){ ?>
    <tr>
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
                                 
