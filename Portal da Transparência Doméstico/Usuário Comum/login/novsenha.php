<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Portal de Transparência Doméstico</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="../assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">


</head>
<body>

<div class="wrapper" style="display:flex;justify-content:center;align-items:center;background-color: #eff6f5;">
<div class="content">
<div class="container">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="card">
<div class="content">
<div class="content">
<br>
<form action = "../index.php" method = "POST">
    <div>
                <center>
                <img class="img-circle img-no-padding img-responsive" width = "100px" src="../assets/img/logozinha.png" alt="..."/> 
                <h4 style="color:#144E8C"><b><b>Definir nova senha:</b></b></h4>
                </center>              
            </div> 
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label style="color: black"><b>Nova senha:</b></label>
                    <input type="text" class="form-control border-input" name = "email" style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px" placeholder=" whatyourewaitingfor">
            
                    <br>
                    <div class="text-left">
                        <div style="color: black;background:transparent;border:transparent;" onmouseover="showMessage()" onmouseout="hideMessage()">precisa de ajuda?
                            <div class="mensagem ml-2" style="background:white; display:none; position:absolute; top: 70%; margin: auto; maxwidth:500px; height:30px; border:none;">
                            Insira a sua nova senha nos dois campos de texto, e depois é só enviá-la ッ
                            </div>
                        </div>    
                    </div>
            </div>
        </div>                                         
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label style="color: black"><b>Confirmar senha:</b></label>
                    <input type="text" class="form-control border-input" name = "email" style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px" placeholder=" whatyourewaitingfor">
            </div>
        </div>                                         
    </div>
    <br>
    <div class="text-right">
        <button type="submit" 
                class="btn btn-info btn-fill btn-wd" 
                style=" color:#144E8C; 
                        background-color: white; 
                        border-radius: 0px; 
                        border-color: #144E8C; 
                        border-width: 3px; 
                        height: 40px"
        >
            <b>Enviar</b>
        </button>

</div>
</form>
<br> <div class="row">
<div class="text-left">
        <a style ="color: #a9a9a9" href="login.php">Voltar</a>
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
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="../assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="../assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/js/demo.js"></script>

    <script src="../assets/js/demo.js"></script>

    <script>
    let mensagem = document.querySelector(".mensagem") ;
    // mostra a mensagem
    function showMessage(){   
    mensagem.style.display = "block";   
    }
    // esconde a mensagem
    function hideMessage(){
    mensagem.style.display = "none"; 
    }
    </script>

</html>