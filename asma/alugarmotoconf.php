<?php 
include("config2.php");
include("verifica.php");
include("top.php");
if(isset($_POST['datai'])){
    $codigoPessoa = intval($_SESSION['codigousuario']);
    $codigo = intval($_POST['codigo']);
    $datai = date_create($_POST['datai']);
    $dataf = date_create($_POST['dataf']);
    $fds = doubleval($_POST['fds']);
    $diaria = doubleval($_POST['diaria']);
    $dataini = date_format($datai,"Y-m-d");
    $datafim = date_format($dataf,"Y-m-d");
    $checagem = $MySQLi->query("SELECT * FROM TB_ALUGACOES WHERE ALG_MOT_CODIGO = $codigo");
    while($check=$checagem->fetch_assoc()){

        if(($dataini >= $check['ALG_DATAINICIO'] AND $datafim <= $check['ALG_DATAFIM']) OR
        ($dataini < $check['ALG_DATAINICIO'] AND $datafim >= $check['ALG_DATAINICIO']) OR
        ($dataini < $check['ALG_DATAFIM'] AND $datafim >= $check['ALG_DATAFIM']) OR
        ($dataini < $check['ALG_DATAINICIO'] AND $datafim > $check['ALG_DATAFIM'])){
            echo
            "<script>
                confirm('O produto já está alugado nesse período, verifique a tabela de locações para mais informações');
                location.href = 'cardmoto.php?codigo=$codigo';
            </script>";
            $aux = 1;
        }
    }
    if(intval(date_diff($datai,$dataf)->format('%R%a')) < 0){
        echo
        "<script>
            confirm('Data de início maior que data de fim, tente novamente');
            location.href = 'alugarmoto.php?codigo=$codigo';
        </script>";
        $aux = 1;
    }
    if(date_format($datai,"Y-m-d") < date("Y-m-d")){
        echo
        "<script>
            confirm('Data de início já passou');
            location.href = 'alugarmoto.php?codigo=$codigo';
        </script>";
        $aux = 1;
    }
    if($aux != 1){
        if(date_format($datai, "N") == 5 && $dataf == date_add($datai, date_interval_create_from_date_string("2 day"))){
            $valor = $fds;
        }else{
            $valor = (date_diff($datai,$dataf)->format('%R%a'))*$diaria;
        }
        $consulta = $MySQLi->query("INSERT INTO TB_ALUGACOES (ALG_DATAINICIO, ALG_DATAFIM, ALG_USU_CODIGO, ALG_MOT_CODIGO, ALG_VALOR, ALG_VERIFICA) VALUES ('$dataini', '$datafim', $codigoPessoa, $codigo, $valor, 0)");
        echo
            "<script>
            confirm('Valor total: R$ '+$valor);
            location.href = 'cardmoto.php?codigo=$codigo';
            </script>";
        
    }
}
if(isset($_GET['codigo'])){
    $codigo = intval($_GET['codigo']);
    $consulta = $MySQLi->query("SELECT * FROM TB_MOTOS WHERE MOT_CODIGO = $codigo");
    $resultado = $consulta->fetch_assoc();
}else{
    header("Location: index.php");
}
$aux = 0;
?>

<body>
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div style="display: flex;justify-content: space-between;align-items: center;">
                <a class="navbar-brand" href="#">Alugar moto</a>
                    <button class="btn btn-dark btn-fill btn-wd" id="show-menu" data-clique="false">Menu</button>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="col-md-6">
                    <div class="card">
                        <div class="class-body">
                            <div class="content">
                                <form action = "?" method = "POST">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <h3 class='card-title'>Aluguel</h3>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label >Data de início</label>
                                            <input type="date" name = "datai" class="form-control border-input" required>
                                        </div> 
                                        <div class="col-md-6">
                                            <label >Data de fim</label>
                                            <input type="date" name = "dataf" class="form-control border-input" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <h3>Forma de pagamento</h3>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <img class="img-no-padding img-responsive" width = "100%" src="assets/img/cartão.png" alt="..."/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <label >Número do cartão (apenas números)</label>
                                            <input name = "numero" class="form-control border-input" placeholder=" 123456789" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <label>Nome do titular</label>
                                            <input name = "nome" class="form-control border-input" placeholder=" Rogério Ceni Pereira Melo" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label>Código de segurança</label>
                                            <input name = "codSeguranca" class="form-control border-input" placeholder=" 123" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Ano</label>
                                            <input name = "ano" type="text" class="form-control border-input" placeholder=" 08/2009" required>
                                        </div>
                                        <input name = "diaria" type="hidden" class="form-control border-input" value="<?php echo $resultado['MOT_DIARIA']; ?>" required>
                                        <input name = "fds" type="hidden" class="form-control border-input" value="<?php echo $resultado['MOT_FIMDESEMANA']; ?>" required>
                                        <input name = "codigo" type="hidden" class="form-control border-input" value="<?php echo $resultado['MOT_CODIGO'] ?>" required>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-danger btn-fill btn-wd">Confirmar</button>
                                                <a href="index.php" class="btn btn-info btn-fill btn-wd" style="color: #F2EFE4; float: left">Voltar</a><br>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="class-body">
                            <div class="content">
                                <form action = "?" method = "POST">
                                	<center>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <img class="img-no-padding img-responsive" style="height: 500px" src="<?php echo $resultado['MOT_IMAGEM']; ?>"alt="..."/>
                                            <h2 class="product-name" style="color: black"><?php echo $resultado['MOT_MODELO']; ?></h2> 
                                            <h5>Diária: R$<?php echo $resultado['MOT_DIARIA']; ?></h5>
                                            <h5>Fim de semana: R$<?php echo $resultado['MOT_FIMDESEMANA']; ?></h5>
                                        </div>    
                                    </div>
                                    </center>
                                    <div class="clearfix"></div>
                                </form>
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