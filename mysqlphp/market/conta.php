<?php 
include("top.php");
include("config2.php");
include("verifica.php");
$codigousuario = $_SESSION['codigousuario'];

if(isset($_GET['excluir'])) {
    $codigo = $_GET['excluir'];

    $deletar3 = $MySQLi->query("DELETE FROM TB_EVENTOS WHERE EVE_AGE_CODIGO IN (SELECT AGE_CODIGO FROM TB_AGENDAS WHERE AGE_USU_CODIGO = $codigousuario);");

    $deletar = $MySQLi->query("DELETE FROM TB_USUARIOS
    WHERE USU_CODIGO = $codigousuario;");

    $deletar2 = $MySQLi->query("DELETE FROM TB_AGENDAS
    WHERE AGE_USU_CODIGO = $codigousuario;");

    
    session_start();
    session_destroy();

    header("Location: login.php");
}

$perfil = $MySQLi->query("SELECT * FROM TB_USUARIOS WHERE USU_CODIGO='$codigousuario'");
$resuperf = $perfil->fetch_assoc();

?>


<div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Conta</a>
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
                <input type="text" class="form-control border-input" name="nome" value="<?php echo $resuperf['USU_NOME']; ?>" READONLY style="background:#D1D1D1;">
        </div>
    </div>
    <div class="text-right">
        <a class="btn btn-info btn-fill btn-wd" href="perfil-editar.php?codigo=<?php echo $resuperf['USU_CODIGO']; ?>"><i class="ti-pencil"></i> Editar </a> 
                                  
        </div><br>
        <div class="text-right">

        <a style="background-color:#954A4A;border-color: #954A4A" class="btn btn-info btn-fill btn-wd" href="?excluir=<?php echo $resuperf['USU_CODIGO']; ?>"><i class="ti-trash"></i>  Apagar </a>
                                  
        </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label>Email</label>
                <input type="text" class="form-control border-input" name = "email" value="<?php echo $resuperf['USU_EMAIL']; ?>" READONLY style="background:#D1D1D1;">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Senha</label>
                <input type="password" class="form-control border-input" name = "senha" value="<?php echo $resuperf['USU_SENHA']; ?>" READONLY style="background:#D1D1D1;">
        </div>
    </div>
</div>
    
        <div class="clearfix"></div>
   </form>  
    </div></div>    </div></div>

<?php include("bot.php"); ?>
