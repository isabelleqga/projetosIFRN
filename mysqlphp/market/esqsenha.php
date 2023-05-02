<?php 
include("config2.php");
include("PHPMailer-master/PHPMailerAutoload.php");

$msg=0;
$erro=array();
$ok=0;
if(isset($_POST['email'])){

    $email = $MySQLi->escape_string($_POST['email']); 

    $checagem = $MySQLi->query("SELECT * FROM TB_USUARIOS;");
    while($check=$checagem->fetch_assoc()){
        if($check['USU_EMAIL']==$email){
            $ok = 1;
            $nome = $check['USU_NOME'];
            $senha = $check['USU_SENHA'];
        }
    }

    if($ok!=1){
        echo
                "<script>
                    confirm('Email não cadastrado no sistema. Tente novamente.');
                    location.href = 'esqsenha.php';
                </script>";
    }else{
        echo
                "<script>
                    confirm('Sua senha é: $senha');
                    location.href = 'esqsenha.php';
                </script>";
    }






//tentamos.
            if($ok==20){
        $mensagem = 'Ola. O procedimento de recuperação de conexão foi realizado com sucesso. Segue abaixo a confirmação de suas informações:'.'\n..'.'Seu email de login = '.$email.'\n..'.'Sua senha = '.$senha.'\n..'.'Não responda esse email. Email automatizado.';
        $mail = new PHPMailer(); 
        $mail->IsSMTP();
        $mail->Host = "carol.intelsrv.net"; 
        $mail->Port = 465;          
        $mail->SMTPAuth = true; 
        $mail->Username = 'agenda@alunos.arioliveira.com'; 
        $mail->Password = 'ifrn2019caico'; 
        $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
        $mail->From = "agenda@alunos.arioliveira.com"; 
        $mail->FromName = "Agenda FC"; 
        $mail->AddAddress($email, $nome); 
        $mail->IsHTML(true); 
        $mail->CharSet = 'UTF-8'; 
        $mail->Subject = "Recuperação de senha"; 
        $mail->Body = $mensagem; 
        $enviado = $mail->Send(); 
        if ($enviado) 
        { 
            echo "<script>
                confirm('Seu email foi enviado com sucesso!');
                location.href = 'login.php';
            </script>"; 
        } else { 
            $aijesuscrist = "Houve um erro enviando o email: ".$mail->ErrorInfo;
            echo "<script>
                confirm(".$aijesuscrist.");
            </script>";
        }
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

<div class="wrapper" style="display:flex;justify-content:center;align-items:center;background-color: #7bb4b7;">
<div class="content">
<div class="container">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="card">
<div class="content">
<div class="content">
<br>
<form action = "?" method = "POST">
    <div class="author">
                <center>
                <img class="img-circle img-no-padding img-responsive" width = "100px" src="assets/img/agendinha.png" alt="..."/> 
                <h3>Recuperar senha</h3>
                </center>              
            </div> 
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Email</label>
                    <input type="text" class="form-control border-input" name = "email" placeholder=" exemplo@hotmail.com" required>
            </div>
        </div>                                         
    </div>
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-info btn-fill btn-wd">Enviar</button>

</div>
</form>
<br> <div class="row">
<div class="text-left">
        <a href="login.php">Voltar</a>
    </div>                             
    </div>
    <div class="clearfix"></div>
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