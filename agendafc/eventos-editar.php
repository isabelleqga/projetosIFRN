<?php 
include("config2.php");
include("top.php");
include("verifica.php");
$hm=0;
if(isset($_POST['titulo'])){
    $hm=1;
	$titulo = $_POST['titulo'];
    $codigoevento = $_POST['codigoevento'];
	$agenda = $_POST['agenda'];
    $descricao = $_POST['descricao'];
    $datainicio = $_POST['datainicio']." ".$_POST['tempoinicio'];
    $datafim = $_POST['datafim']." ".$_POST['tempofim'];

    $codigousuario = $_SESSION['codigousuario'];
    $checagem = $MySQLi->query("SELECT * FROM TB_EVENTOS JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO WHERE AGE_USU_CODIGO = '$codigousuario';");
    while($check=$checagem->fetch_assoc()){
        if($check['EVE_CODIGO']!=$codigoevento){
            if($check['EVE_TITULO']==$titulo){
                echo
                "<script>
                    confirm('Título repetido, tente novamente');
                    location.href = 'eventos-editar.php?codigo=$codigoevento';
                </script>";
                $aux = 1;
            }else if(($datainicio >= $check['EVE_DATAINICIO'] AND $datafim <= $check['EVE_DATAFIM']) OR
            ($datainicio < $check['EVE_DATAINICIO'] AND $datafim >= $check['EVE_DATAINICIO']) OR
            ($datainicio < $check['EVE_DATAFIM'] AND $datafim >= $check['EVE_DATAFIM']) OR
            ($datainicio < $check['EVE_DATAINICIO'] AND $datafim > $check['EVE_DATAFIM'])){
                $titulocolisao = $check['EVE_TITULO'];
                echo
                "<script>
                    confirm('Evento em colisão com $titulocolisao, tente novamente');
                    location.href = 'eventos-editar.php?codigo=$codigoevento';
                </script>";
                $aux = 1;
            }
            
        }
        if($datafim<$datainicio){
            echo
            "<script>
                confirm('Data de início maior que data de fim, tente novamente');
                location.href = 'eventos-editar.php?codigo=$codigoevento';
            </script>";
            $aux = 1;
        }
    }
    if($aux != 1){
        $consulta = $MySQLi->query("UPDATE TB_EVENTOS SET EVE_TITULO='$titulo', EVE_DESCRICAO = '$descricao', EVE_DATAINICIO = '$datainicio', EVE_DATAFIM = '$datafim' WHERE EVE_CODIGO = $codigoevento");
        $head = "location: eventos.php?codigo=".$agenda;
        header($head);
    }
}
$codigoevento = $_GET['codigo'];
while($hm==0){
    $hm=1;
    if(!isset($_GET['codigo'])) header("location: agendas.php");
}


$consultacod = $MySQLi->query("SELECT *, DATE_FORMAT(EVE_DATAINICIO, '%Y-%m-%d') AS DATAINICIO, DATE_FORMAT(EVE_DATAFIM, '%Y-%m-%d') AS DATAFIM, TIME_FORMAT(EVE_DATAINICIO, '%k:%i') AS HORAINICIO, TIME_FORMAT(EVE_DATAFIM, '%k:%i') AS HORAFIM FROM TB_EVENTOS WHERE EVE_CODIGO = $codigoevento");
$resultadocod = $consultacod->fetch_assoc();
$aux = 0;
?>

<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Editar Evento</a>
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
                    <input name = "codigoevento" class="form-control border-input" value="<?php echo $resultadocod['EVE_CODIGO'] ?>" READONLY style="background:#ccc;">
                </div></div>
                <div class="col-md-1">
                <div class="form-group">
                    <label>Agenda</label>
                    <input name = "agenda" class="form-control border-input" value="<?php echo $resultadocod['EVE_AGE_CODIGO'] ?>" READONLY style="background:#ccc;">
                </div></div>
            <div class="col-md-10">
                <div class="form-group">
                    <label>Titulo</label>
                    <input name = "titulo" class="form-control border-input" value="<?php echo $resultadocod['EVE_TITULO'] ?>" required>
                </div>
            </div></div>

                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Descricao</label>
                                                <input type="text" class="form-control border-input" name = "descricao" value="<?php echo $resultadocod['EVE_DESCRICAO'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
        
          
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Data de Início</label>
                                                <input type="date" class="form-control border-input" name = "datainicio" value="<?php echo $resultadocod['DATAINICIO'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Hora de Início</label>
                                                <input type="time" class="form-control border-input" name = "tempoinicio" value="<?php echo $resultadocod['HORAINICIO'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Data de Fim</label>
                                                <input type="date" class="form-control border-input" name = "datafim" value="<?php echo $resultadocod['DATAFIM'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Hora de Fim</label>
                                                <input type="time" class="form-control border-input" name = "tempofim" value="<?php echo $resultadocod['HORAFIM'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                   <br>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Enviar</button>
                                  
                                    </div>  
                                    <div class="clearfix"></div>
                                </form>	
	</div></div>    </div></div>                     
                                    
<?php include("bot.php"); ?>