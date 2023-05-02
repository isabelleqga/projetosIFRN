
<?php 
include("config2.php");
$msg = 0;
if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $csenha = $_POST['senha1'];
    $checagem = $MySQLi->query("SELECT USU_EMAIL FROM TB_USUARIOS;");
    while($check=$checagem->fetch_assoc()){
        if($check['USU_EMAIL']==$email){
            $msg = 3; 
        }
    }if($nome==""||$email==""||$senha==""||$csenha==""){
        $msg = 2;
    }else if($csenha!=$senha){
        $msg = 1;
    }else if($csenha==$senha&&$msg==0){
        $consulta = $MySQLi->query("INSERT INTO TB_USUARIOS (USU_NOME, USU_EMAIL, USU_SENHA) VALUES ('$nome', '$email','$senha')");
        header("Location: login.php");
    }
    
    
    
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>AGENDA</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">


</head>
<body>

<div class="wrapper" style="display:flex;justify-content:center;align-items:center;background-color: #2e5a6a;">
<div class="content">
<div class="container">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="card" style="background-color: #e8e8e8">
<div class="content">
<div class="content">
<br>
<form action = "?" method = "POST">
    <div class="row">
            <div class="author">
                <center>
                <img class="img-circle img-no-padding img-responsive" width = "30%" src="loginha.jpg" alt="..."/> 
                </center>              
            </div>      
        </div>
        <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" class="form-control border-input" name = "nome" placeholder=" João Félix Sequeira" required style="background-color: white">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control border-input" name = "email" placeholder=" joaofelix79@outlook.com" required style="background-color: white">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Senha</label>
                                                <input type="password" class="form-control border-input" name = "senha" placeholder=" ******" required style="background-color: white">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Confirmar senha</label>
                                                <input type="password" class="form-control border-input" name = "senha1" placeholder=" ******" required style="background-color: white">
                                            </div>
                                        </div>
                                    </div>
                                          
                                    
                                    <div class="row">
                <div class="col-md-12">
        <?php 
        if($msg==1){
            echo '<div class="alert alert-danger">
                                    <span><b> As senhas não batem. Tente novamente. </span>
                                </div>';
        }if($msg==2){
            echo '<div class="alert alert-danger">
                                    <span><b> Preencha todos os campos. </span>
                                </div>';
        }if($msg==3){
            echo '<div class="alert alert-danger">
                                    <span><b> Email já cadastrado. </span>
                                </div>';
        } 
        ?>
</div>
</div>
                                   <br>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd" style="background-color: #3e788e; border-color: #3e788e">Criar</button><br><br>
                                  
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
<div class="text-left">
        <a href="inicio.php">Voltar</a>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

</html>

