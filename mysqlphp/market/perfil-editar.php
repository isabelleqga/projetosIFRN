<?php 
include("config2.php");
include("top.php");
include("verifica.php");
$codigousuario = $_SESSION['codigousuario'];


if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $editar = $MySQLi->query("UPDATE TB_USUARIOS SET USU_NOME='$nome', USU_EMAIL='$email', USU_SENHA ='$senha'
WHERE USU_CODIGO = '$codigousuario'");
    header('Location: conta.php');
}

$consultacod = $MySQLi->query("SELECT * FROM TB_USUARIOS WHERE USU_CODIGO = '$codigousuario'");
$resultadocod = $consultacod->fetch_assoc();
?>

<div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Editar Perfil</a>
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
        <div class="col-md-10">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" value="<?php echo $resultadocod['USU_NOME'];?>" class="form-control border-input" name="nome" required>
        </div>
    </div>
    <br>
    <div class="text-right">
        <button type="submit" class="btn btn-info btn-fill btn-wd"><i class="ti-save"></i> Salvar</button>                               
    </div><br>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label>Email</label>
                <input type="text" value="<?php echo $resultadocod['USU_EMAIL'];?>"class="form-control border-input" name = "email" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Senha</label>
                <input type="password" value="<?php echo $resultadocod['USU_SENHA'];?>" class="form-control border-input" name = "senha" required>
        </div>
    </div>
</div>
    
        <div class="clearfix"></div>
   </form>  
    </div></div>    </div></div>                     
                                    
<?php include("bot.php"); ?>


                                 
                                    
