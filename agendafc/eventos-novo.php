<?php 
include("config2.php");
include("verifica.php");
include("top.php");
$codigoagenda = $_GET['codigo'];
if(isset($_POST['titulo'])){
	$titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $datainicio = $_POST['datainicio']." ".$_POST['tempoinicio'];
    $datafim = $_POST['datafim']." ".$_POST['tempofim'];
    $agenda = $_POST['agenda'];
    $codigousuario = $_SESSION['codigousuario'];
    $checagem = $MySQLi->query("SELECT * FROM TB_EVENTOS JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO WHERE AGE_USU_CODIGO = '$codigousuario';");
    while($check=$checagem->fetch_assoc()){
        if($check['EVE_TITULO']==$titulo){
            echo
            "<script>
                confirm('Título repetido, tente novamente');
                location.href = 'eventos-novo.php?codigo=$agenda';
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
                location.href = 'eventos-novo.php?codigo=$agenda';
            </script>";
            $aux = 1;
        }
        if($datafim<$datainicio){
            echo
            "<script>
                confirm('Data de início maior que data de fim, tente novamente');
                location.href = 'eventos-novo.php?codigo=$agenda';
            </script>";
            $aux = 1;
        }
    }
    if($aux != 1){
        $consulta = $MySQLi->query("INSERT INTO TB_EVENTOS (EVE_TITULO, EVE_DESCRICAO, EVE_DATAINICIO, EVE_DATAFIM, EVE_AGE_CODIGO) VALUES ('$titulo','$descricao', '$datainicio', '$datafim', '$agenda')");
        header("Location: eventos.php?codigo=$agenda");
        }
    }
$aux = 0;
?>

<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Adicionar Evento</a>
                </div>
                
            </div>
        </nav>


        <div class="content">
<div class="container-fluid">
    <div class="col-md-12">
                        <div class="card">

<div class="content">
<div class="content">
<form action = "?" method = "POST">

                      <div class="row">
                        <div class="col-md-2">
                <div class="form-group">
                    <label>Agenda</label>
                    <input name = "agenda" class="form-control border-input" value="<?php echo $codigoagenda ?>" READONLY style="background:#ccc;">
                </div></div>
            <div class="col-md-10">
                <div class="form-group">
                    <label>Titulo</label>
                    <input name = "titulo" class="form-control border-input" placeholder=" Atleti x Villarreal" required>
                </div>
            </div></div>

                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Descricao</label>
                                                <input type="text" class="form-control border-input" name = "descricao" placeholder=" No Wanda Metropolitano" required>
                                            </div>
                                        </div>
                                    </div>
        
          
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Data de Início</label>
                                                <input type="date" class="form-control border-input" name = "datainicio" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Hora de Início</label>
                                                <input type="time" class="form-control border-input" name = "tempoinicio" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Data de Fim</label>
                                                <input type="date" class="form-control border-input" name = "datafim" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Hora de Fim</label>
                                                <input type="time" class="form-control border-input" name = "tempofim" required>
                                            </div>
                                        </div>
                                    </div>
                                                                             
                                   <br>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Enviar</button>
                                  
                                    </div>  
                                    <div class="clearfix"></div>
                                </form></div></div>
	
	
</div></div>
<?php include("bot.php"); ?>
         
