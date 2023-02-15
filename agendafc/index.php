<?php 
include("top.php");
include("config2.php");
include("verifica.php");
date_default_timezone_set('America/Bahia');
$codigousuario = $_SESSION['codigousuario'];
$consultaprox = $MySQLi->query("SELECT *, CAST(DATEDIFF(EVE_DATAINICIO, CURRENT_TIMESTAMP()) AS SIGNED) AS ESPERA, TIME_FORMAT(EVE_DATAINICIO, '%k:%i') AS HORAINICIO FROM TB_EVENTOS
    JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO
WHERE AGE_USU_CODIGO = $codigousuario AND EVE_DATAINICIO > CURRENT_TIMESTAMP() ORDER BY EVE_DATAINICIO LIMIT 1;");
$resultadoprox = $consultaprox->fetch_assoc();
$consulta7dias = $MySQLi->query("SELECT *, DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 7 DAY) AS INTERVALO, DATE_FORMAT(EVE_DATAINICIO, '%d/%m/%Y  às %H:%i') AS DATAINICIO FROM TB_EVENTOS
    JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO
WHERE AGE_USU_CODIGO = $codigousuario HAVING (EVE_DATAINICIO BETWEEN CURRENT_TIMESTAMP() AND INTERVALO)ORDER BY EVE_DATAINICIO;");
$consulta3dias = $MySQLi->query("SELECT *, DATE_ADD(CURRENT_TIMESTAMP, INTERVAL -3 DAY) AS INTERVALO, DATE_FORMAT(EVE_DATAINICIO, '%d/%m/%Y  às %H:%i') AS DATAINICIO FROM TB_EVENTOS
    JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO
WHERE AGE_USU_CODIGO = $codigousuario HAVING (((EVE_DATAINICIO BETWEEN INTERVALO AND CURRENT_TIMESTAMP()) AND (EVE_DATAFIM BETWEEN INTERVALO AND CURRENT_TIMESTAMP())) OR EVE_DATAINICIO < INTERVALO AND (EVE_DATAFIM BETWEEN INTERVALO AND CURRENT_TIMESTAMP())) ORDER BY EVE_DATAINICIO;");
$consultafimdoano = $MySQLi->query("SELECT COUNT(*) AS EVENTOS_RESTANTES FROM TB_EVENTOS
    JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO
WHERE AGE_USU_CODIGO = $codigousuario AND YEAR(EVE_DATAINICIO) = YEAR(CURRENT_TIMESTAMP()) AND EVE_DATAINICIO > CURRENT_TIMESTAMP() ORDER BY EVE_DATAINICIO;");
$resultadofimdoano = $consultafimdoano->fetch_assoc();
$consultatotal = $MySQLi->query("SELECT COUNT(*) AS EVENTOS_TOTAL FROM TB_EVENTOS
    JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO
WHERE AGE_USU_CODIGO = $codigousuario AND YEAR(EVE_DATAINICIO) = YEAR(CURRENT_TIMESTAMP()) ORDER BY EVE_DATAINICIO;");
$resultadototal = $consultatotal->fetch_assoc();
$consultarealizados = $MySQLi->query("SELECT COUNT(*) AS EVENTOS_REALIZADOS FROM TB_EVENTOS
    JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO
WHERE AGE_USU_CODIGO = $codigousuario AND YEAR(EVE_DATAINICIO) = YEAR(CURRENT_TIMESTAMP()) AND EVE_DATAINICIO < CURRENT_TIMESTAMP() ORDER BY EVE_DATAINICIO;");
$resultadorealizados = $consultarealizados->fetch_assoc();
$consultaemandamento = $MySQLi->query("SELECT *, DATE_FORMAT(EVE_DATAINICIO, '%d/%m/%Y  às %H:%i') AS DATAINICIO FROM TB_EVENTOS
    JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO
WHERE AGE_USU_CODIGO = $codigousuario AND (CURRENT_TIMESTAMP() >= EVE_DATAINICIO AND CURRENT_TIMESTAMP() <= EVE_DATAFIM);");
$resultadoemandamento = $consultaemandamento->fetch_assoc();
?>

<div class="main-panel">
    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Relatórios</a>
                </div>
                
            </div>
        </nav>
    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-crown"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Evento em andamento</p>
                                            <?php 
                                            if(!$resultadoemandamento['EVE_TITULO']){
                                                echo "Nenhum";
                                            }else{
                                                if (strlen($resultadoemandamento['EVE_TITULO']) > 22){
                                                    $resultadoemandamento['EVE_TITULO'] = substr($resultadoemandamento['EVE_TITULO'], 0, 22).'..';
                                                    echo $resultadoemandamento['EVE_TITULO'];
                                                }else{
                                                    echo $resultadoemandamento['EVE_TITULO'];
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                    <i class="ti-pin-alt"></i> <?php 
                                    if(!$resultadoemandamento['DATAINICIO']){
                                        echo 'Á ESPERA';
                                    }else{      
                                        echo $resultadoemandamento['DATAINICIO'];}  ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Próximo evento</p>
                                            <?php 
                                            if(!$resultadoprox['EVE_TITULO']){
                                                 echo "Nenhum";
                                            }else{
                                                if (strlen($resultadoprox['EVE_TITULO']) > 22){
                                                    $resultadoprox['EVE_TITULO'] = substr($resultadoprox['EVE_TITULO'], 0, 22).'..';
                                                    echo $resultadoprox['EVE_TITULO'];
                                                }else{
                                                    echo $resultadoprox['EVE_TITULO'];
                                                }
                                            }?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
<i class="ti-calendar"></i> 
<?php 
    if($resultadoprox['ESPERA']=='null'){
        echo 'Nunca';
    }else if($resultadoprox['ESPERA']==0){
        echo 'HOJE ÁS '.$resultadoprox['HORAINICIO'];
    }else if($resultadoprox['ESPERA']==1){
        echo 'AMANHÃ';
    }else{
        echo 'EM '.$resultadoprox['ESPERA'].' DIAS';
    }
?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Total de eventos até o fim do ano</p>
                                            <?php echo $resultadofimdoano['EVENTOS_RESTANTES']?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> 31/12/<?php echo date("Y"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-pie-chart"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Eventos já realizados no ano</p>
                                            <?php echo $resultadorealizados['EVENTOS_REALIZADOS'].'<small> de </small>'.$resultadototal['EVENTOS_TOTAL'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> 01/01/<?php echo date("Y"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Eventos realizados nos últimos 3 dias</h4>
                                <p class="category">Recentemente atualizado</p>
                            </div>
                            <div class="content">
                                <table class="table table-striped">
                                    <thead><th>TÍTULO</th><th>DATA</th></thead>
                                    <tbody>
                                        <?php while($resultado3dias=$consulta3dias->fetch_assoc()){ ?>
                                        <tr>
                                            <td>
                                                <?php echo $resultado3dias['EVE_TITULO']; ?>   
                                            </td>
                                            
                                            <td>
                                                <?php echo $resultado3dias['DATAINICIO']; ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    </table>
                                
                            </div>
                        </div>
                    </div>
                

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Eventos nos próximos 7 dias</h4>
                                <p class="category">Recentemente atualizado</p>
                            </div>
                            <div class="content">
                                <table class="table table-striped">
                                    <thead><th>TÍTULO</th><th>DATA</th></thead>
                                    <tbody>
                                        <?php while($resultado7dias=$consulta7dias->fetch_assoc()){ ?>
                                        <tr>
                                            <td>
                                                <?php echo $resultado7dias['EVE_TITULO']; ?>   
                                            </td>
                                            
                                            <td>
                                                <?php echo $resultado7dias['DATAINICIO']; ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
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
