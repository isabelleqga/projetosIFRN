<?php 
include("top.php");
include("config2.php");
$msg=0;
if(isset($_POST['usuario'])) {
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$consulta = $MySQLi->query("SELECT * FROM
	TB_CLIENTES where CLI_USUARIO = '$usuario'
	and CLI_SENHA = '$senha'");
	if($resultado = $consulta->fetch_assoc()){
		$_SESSION['codigocliente'] =
			$resultado['CLI_CODIGO'];
		$_SESSION['nomecliente'] =
			$resultado['CLI_NOME'];
		header("Location: index.php");
	}
	$msg = 1;
} 
?>
<div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Login</a>
                </div>
                
            </div>
        </nav>


        <div class="content">
<div class="container-fluid">
    <div class="col-md-12">
    <div class="card">
<div class="content"><div class="content">


	


<form action="?" method="POST">

<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Usuário</label>
                    	<input name = "usuario" class="form-control border-input">
                </div>
            </div>
        </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Senha</label>
                        <input  type="password" name = "senha" class="form-control border-input" >
                </div>
            </div>

            
        </div>
            <div class="row">
            	<div class="col-md-4">
        <?php if($msg==1) echo '<div class="alert alert-danger">
                                    <span><b> Usuário ou senha inválido!</span>
                                </div>'; ?>
</div>
</div>
	<div class="text-left">
    
    <input type="submit" value="LOGAR" class="btn btn-info btn-fill btn-wd">

    </div>
	
</form>
</div></div></div></div>





<?php include("bot.php"); ?>