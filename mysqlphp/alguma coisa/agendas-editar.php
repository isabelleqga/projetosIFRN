<?php 
include("config.php");
include("top.php");
include("verifica.php");
if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
	$codigoagenda = $_POST['codigoagenda'];
	$consulta = $MySQLi->query("UPDATE TB_AGENDAS SET AGE_NOME='$nome'
WHERE AGE_CODIGO = $codigoagenda");
	header('Location: agendas.php');
}
$codigoagenda = $_GET['codigo'];
if(!isset($_GET['codigo'])) header("location: agendas.php");

$consultacod = $MySQLi->query("SELECT * FROM TB_AGENDAS WHERE AGE_CODIGO = $codigoagenda");
$resultadocod = $consultacod->fetch_assoc();
?>

<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Editar Agenda</a>
                </div>
                
            </div>
        </nav>
        <div class="content">
<div class="container-fluid">
    <div class="col-md-12">
                        <div class="card"><div class="content">
<div class="content">
<form action = "?" method = "POST">
    <div class="row">
        <div class="col-md-1">
            <div class="form-group">
                <label>Código</label>
                <input type="text" class="form-control border-input" name="codigoagenda" value="<?php echo $resultadocod['AGE_CODIGO']; ?>" READONLY style="background:#ccc;">
    	</div>
	</div>
	<div class="col-md-8">
        <div class="form-group">
            <label>Nome</label>
                <input type="text" class="form-control border-input" name = "nome" value="<?php echo $resultadocod['AGE_NOME']; ?>">
        </div>
    </div>
</div>
	<div class="text-center">
        <button type="submit" class="btn btn-info btn-fill btn-wd">Enviar</button>
                                  
        </div>
        <div class="clearfix"></div>
   </form>	
	</div></div>    </div></div>                     
                                    
<?php include("bot.php"); ?>