<?php 
include("config2.php");
include("verifica.php");
include("top.php");
$codigousuario = $_SESSION['codigousuario'];
if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
	$consulta = $MySQLi->query("INSERT INTO TB_AGENDAS (AGE_NOME, AGE_USU_CODIGO) VALUES ('$nome','$codigousuario')");
	header("Location: agendas.php");

}
?>


<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Adicionar Agenda</a>
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
            <div class="col-md-10">
                <div class="form-group">
                    <label>Nome</label>
                    <input name = "nome" class="form-control border-input" placeholder=" La Liga" required>
                </div>
            </div>
        </div>
                                      
                                   <br>
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Enviar</button>
                                  <br>
                                    </div>
                                    <div class="clearfix"></div>
                                </form></div></div>
	
	
</div></div>
<?php include("bot.php"); ?>