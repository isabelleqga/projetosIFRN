<?php

$url = $_SERVER['REQUEST_URI'];

$posicao = count(explode("/", $url)) - 3;

$diretorio = "";

for ($i = 0; $i < $posicao; $i++) {

    $diretorio .= "../";
}

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Portal de Transparência Doméstico</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" style="text/css" href="/ptdomestico comum/assets/css/custom.css">

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo $diretorio; ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo $diretorio; ?>assets/css/animate.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo $diretorio; ?>assets/css/paper-dashboard.css" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo $diretorio; ?>assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo $diretorio; ?>assets/css/themify-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- css personalizado -->
    <link href="<?php echo $diretorio; ?>assets/css/style.css" rel="stylesheet" />

    <script src="<?php echo $diretorio; ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    
    <script src="<?php echo $diretorio; ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="<?php echo $diretorio; ?>assets/css/styleModal.css" rel="stylesheet" />
    
    <script>
        function myFunction(x) {
            x.classList.toggle("change");
            let aux = x.classList;
            if ($(".container-toggle-button").attr("class").indexOf("change") != -1) {
                $(".menu-mobile").slideDown();
            } else {
                $(".menu-mobile").slideUp();
            }
        }

        // define responsividade da tabela
        function sizeOfThings() {
            var windowWidth = window.innerWidth;
            if (windowWidth > 991) {
                $(".menu-mobile").css({
                    "display": "none"
                });
            } else {
                if ($(".container-toggle-button").attr("class").indexOf("change") != -1) {
                    $(".menu-mobile").slideDown();
                } else {
                    $(".menu-mobile").css({
                        "display": "none"
                    });
                }
            }
        };
        sizeOfThings();
        window.addEventListener('resize', function() {
            sizeOfThings();
        });
    </script>
    <link rel="sortcut icon" href="<?php echo $diretorio; ?>favicon.ico" type="image/x-icon" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a class="simple-text" href="http://localhost/ptdomestico comum/index.php">
                        <big>PT
                            <b style="color:#144E8C">
                                DOMÉSTICO
                            </b>
                        </big>
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a href="<?php echo $diretorio; ?>index.php" <?php echo strrpos($_SERVER["REQUEST_URI"], "index.php") ? "style=\"color:#144E8E; background-color:#EEEEEE;\"" : ""; ?>>
                            <i class="ti-panel"></i>
                            <p>Início</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $diretorio; ?>categoria/categoria-listar.php" <?php echo strrpos($_SERVER["REQUEST_URI"], "categoria") ? "style=\"color:#144E8C; background-color:#EEEEEE;\"" : ""; ?>>
                            <i class="ti-view-list-alt"></i>
                            <p>Categorias</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $diretorio; ?>comparacao.php" <?php echo strrpos($_SERVER["REQUEST_URI"], "comparacao.php") ? "style=\"color:#144E8C; background-color:#EEEEEE;\"" : ""; ?>>
                            <i class="ti-bar-chart"></i>
                            <p>Comparação Mensal</p>
                        </a>
                    </li>
                    <li>
                        <a href="/ptdomestico comum/sobre.php" <?php echo strrpos($_SERVER["REQUEST_URI"], "sobre.php") ? "style=\"color:#144E8C; background-color:#EEEEEE;\"" : ""; ?>>
                            <i class="ti-user"></i>
                            <p>Sobre Nós</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="row" style="
                background-color: #fff; 
                margin: 0px; 
                padding: 12px; 
                border-bottom: 1px solid rgba(102, 97, 91, 0.3); 
                z-index: 9999999">
                <div class="col-lg" id="header-mobile">
                    <a class="navbar-brand" id="navbard-brand-mobile" style="color: #777; font-weight: bold" href="#">Usuário Comum</a>
                    <div class="container-toggle-button" onclick="myFunction(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
                <div class="col-lg">
                    <a class="navbar-brand" id="botaoSair" style="float:right; color: #9d9d9d; font-size: 13px;display: flex;justify-content: center;align-items: center;" href="<?php echo $diretorio; ?>login/inicio.php">
                        <span class="material-icons">
                            logout
                        </span>
                        <span id="texto-sair" style="margin: 5px; font-weight: 700">Sair</span>
                    </a>
                </div>
            </div>
            <nav class="navbar navbar-default menu-mobile" style="display: none;">
                <ul>
                    <li>
                        <a href="<?php echo $diretorio; ?>index.php" <?php echo strrpos($_SERVER["REQUEST_URI"], "index.php") ? "style=\"color:#144E8E; background-color:#EEEEEE;\"" : ""; ?>>
                            <i class="ti-panel"></i>
                            <p>Início</p>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo $diretorio; ?>categoria/categoria-listar.php" <?php echo strrpos($_SERVER["REQUEST_URI"], "categoria") ? "style=\"color:#144E8C; background-color:#EEEEEE;\"" : ""; ?>>
                            <i class="ti-view-list-alt"></i>
                            <p>Categorias</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $diretorio; ?>comparacao.php" <?php echo strrpos($_SERVER["REQUEST_URI"], "comparacao.php") ? "style=\"color:#144E8C; background-color:#EEEEEE;\"" : ""; ?>>
                            <i class="ti-bar-chart"></i>
                            <p>Comparação Mensal</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $diretorio; ?>sobre.php" <?php echo strrpos($_SERVER["REQUEST_URI"], "sobre.php") ? "style=\"color:#144E8C; background-color:#EEEEEE;\"" : ""; ?>>
                            <i class="ti-user"></i>
                            <p>Sobre Nós</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $diretorio; ?>login/inicio.php" style="color:red;">
                            <i class="material-icons">logout</i>
                            <p>Sair</p>
                        </a>
                    </li>
                </ul>

            </nav>

            <div class="content" style="background-color: #eff6f5;">