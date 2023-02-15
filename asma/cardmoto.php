<?php 
include("config2.php");
include("verifica.php");
include("top.php");
if(isset($_GET['codigo'])){
    $codigo = intval($_GET['codigo']);
    $consulta = $MySQLi->query("SELECT * FROM TB_MOTOS WHERE MOT_CODIGO = $codigo");
    $resultado = $consulta->fetch_assoc();
}else{
    header("Location: index.php");
}
$consultaLoc = $MySQLi->query("SELECT DATE_FORMAT(ALG_DATAINICIO, '%d/%m/%Y') AS INICIO, DATE_FORMAT(ALG_DATAFIM, '%d/%m/%Y') AS FIM FROM TB_ALUGACOES WHERE ALG_MOT_CODIGO = $codigo ORDER BY ALG_DATAINICIO");
?>

<div class="main-panel">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Detalhes sobre a moto</a>
            </div>    
        </div>
    </nav>
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                    <div class="content">
                        <div class="content" style="margin-left: 3%; margin-bottom: 3%">
                            <form action = "?" method = "POST">
                                <div class="col-md-6" style="position: absolute; right: 5%; top: 0">
                                    <center>
                                    <img class="img-no-padding img-responsive" style="height: 600px" src="<?php echo $resultado['MOT_IMAGEM']; ?>" alt="..."/></center>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="product-name" style="color: black"><?php echo $resultado['MOT_MODELO']; ?></h2>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <b><label style="color: black">Cor:</label></b>
                                        <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px"><?php echo $resultado['MOT_COR']; ?></label><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <b><label style="color: black">Placa:</label></b>
                                        <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px"><?php echo $resultado['MOT_PLACA']; ?></label><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">              
                                        <b><label style="color: black">Ano:</label></b>
                                        <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px"><?php echo $resultado['MOT_ANO']; ?></label><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <b><label style="color: black">Motor:</label></b>
                                        <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px"><?php echo $resultado['MOT_MOTOR']; ?> cc</label><br>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <b><label style="color: black">Potência:</label></b>
                                        <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px"><?php echo $resultado['MOT_POTENCIA']; ?></label><br>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <b><label style="color: black">Altura do banco:</label></b>
                                        <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px"><?php echo $resultado['MOT_ALTURABANCO']; ?></label><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <b><label style="color: black">Peso:</label></b>
                                        <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px"><?php echo $resultado['MOT_PESO']; ?></label><br>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <b><label style="color: black">Diária:</label></b>
                                        <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px">R$ <?php echo $resultado['MOT_DIARIA']; ?></label><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <b><label style="color: black">Fim de semana:</label></b>
                                        <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px">R$ <?php echo $resultado['MOT_FIMDESEMANA']; ?></label>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-left">
                                            <a href="index.php" class="btn btn-info btn-fill btn-wd" style="color: #F2EFE4;">Voltar</a>
                                            <a href="alugarmoto.php?codigo=<?php echo $resultado['MOT_CODIGO']; ?>" class="btn btn-danger btn-fill btn-wd" style="margin-left: 5%">Alugar</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Histórico de locações</h3>
                                        <div class="card">
                                            <table class="table table-striped">
                                                <thead><th>INÍCIO</th><th>FIM</th></thead>
                                                <tbody>
                                                    <?php while($resultadoLoc=$consultaLoc->fetch_assoc()) { ?>
                                                    <tr>
                                                        <td><?php echo $resultadoLoc['INICIO']; ?></td>
                                                        <td><?php echo $resultadoLoc['FIM']; ?></td>
                                                    </tr>
                                                    <?php }; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </form>
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