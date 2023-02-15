
<?php 
include("config2.php");
include("verifica.php");
include("top.php");
if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
	$mesa = $_POST['mesa'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$consulta = $MySQLi->query("INSERT INTO TB_CLIENTES (CLI_NOME, CLI_MESA, CLI_USUARIO, CLI_SENHA) VALUES ('$nome', '$mesa','$usuario','$senha')");
	header("Location: clientes.php");
}
?>
<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Adicionar Cliente</a>
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
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" class="form-control border-input" name = "nome" placeholder=" João Félix">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mesa</label>
                                                <input type="text" class="form-control border-input" name = "mesa" placeholder=" 7">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Usuário</label>
                                                <input type="text" class="form-control border-input" name = "usuario" placeholder=" joaofelix79">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Senha</label>
                                                <input type="text" class="form-control border-input" name = "senha" placeholder=" goat">
                                            </div>
                                        </div>
                                          
                                    </div>
                                   <br>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Enviar</button>
                                  
                                    </div>
                                    <div class="clearfix"></div>
                                </form></div></div></div></div>
                            </div><?php include("bot.php"); ?>

