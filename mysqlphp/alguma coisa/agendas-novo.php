<?php 
include("config.php");
include("verifica.php");
include("top.php");
if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
	$consulta = $MySQLi->query("INSERT INTO TB_AGENDAS (AGE_NOME) VALUES ('$nome')");
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
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nome</label>
                    <input name = "nome" class="form-control border-input" placeholder=" 0">
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