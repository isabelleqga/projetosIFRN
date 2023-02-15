<?php 
include("top.php");
include("config2.php");
include("verifica.php");
$codigousuario = $_SESSION['codigousuario'];
if(isset($_GET['excluir'])) {
	$codigo = $_GET['excluir'];
	$consulta2 = $MySQLi->query("DELETE FROM TB_AGENDAS
	WHERE AGE_CODIGO = $codigo");
	$consulta2 = $MySQLi->query("DELETE FROM TB_EVENTOS WHERE EVE_AGE_CODIGO = $codigo");
	header("Location: agendas.php");
}
$consulta = $MySQLi->query("SELECT * FROM TB_AGENDAS WHERE AGE_USU_CODIGO = '$codigousuario' ORDER BY AGE_CODIGO");
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
	<div class="row">
	<?php while($resultado=$consulta->fetch_assoc()){ ?>
	<div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-bookmark-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><?php echo $resultado['AGE_NOME']; ?></p>
                                           <a href="eventos.php?codigo=<?php echo $resultado['AGE_CODIGO']; ?>">
				<i class="ti-link"></i>
			</a>
			<a href="agendas-editar.php?codigo=<?php echo $resultado['AGE_CODIGO']; ?>">
				<i class="ti-pencil"></i>
			</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
									<a href="?excluir=<?php echo $resultado['AGE_CODIGO']; ?>"><i class="ti-trash"> </i>	 Excluir
				
			</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
	<?php } ?>
     
                </div>

<div class="row">
	<div class="col-md-12">
                <div class="text-left">
    
    <a class="btn btn-info btn-fill btn-wd" href = "agendas-novo.php"><i class="ti-plus"></i> Adicionar</a> 
                    </div>            
</div></div>




<?php include("bot.php"); ?>