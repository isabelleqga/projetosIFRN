<?php 
include("top.php");
include("config2.php");
include("verifica.php");

$codigousuario = $_SESSION['codigousuario'];
$perfil = $MySQLi->query("SELECT * FROM TB_USUARIOS WHERE USU_CODIGO='$codigousuario'");
$resuperf = $perfil->fetch_assoc();
?>

<div class="main-panel">
<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Contato</a>
                </div>
                
            </div>
        </nav>
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
        <div class="text-left">
        <div class="card">

            <div class="header">
                <h4 class="title">Contate-nos diretamente</h4> ou envie um email para <a href="">altmarket78@gmail.com</a>
            </div>
            <div class="content">
                
<form action = "?" method = "POST">
            <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" class="form-control border-input" name = "nome" value="<?php echo $resuperf['USU_NOME']; ?>" READONLY style="background-color: #D1D1D1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control border-input" name = "email" value="<?php echo $resuperf['USU_EMAIL']; ?>" READONLY style="background-color: #D1D1D1">
                                            </div>
                                        </div>
                                    </div>
         <div class="row">
                      <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Mensagem</label>
                                                <input type="text" class="form-control border-input" name = "mensagem" placeholder=" Corpo da mensagem..." required style="background-color: white;">
                                            </div>
                                        </div>                  
          </div>
          <div class="text-right">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd" style="background-color: #3e788e; border-color: #3e788e">Enviar</button><br><br><div class="text-center">
        
    </div>
                                  
                                    </div>
                 </form>  </div>    
        </div>


    </div>

    

<div class="row">
    <div class="col-md-12">
        <div class="text-left">
        <div class="card card-map">
            <div class="header">
                <h4 class="title">Localização</h4>
            </div>
            <div class="map">
                <div id="regularMap" class="map"></div>
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

                                 
<script type="text/javascript">
    var myLatlng = new google.maps.LatLng(-6.411336, -36.784054);
    var mapOptions = {
        zoom: 15,
        center: myLatlng,
        scrollwheel: false
    }

    var map = new google.maps.Map(document.getElementById("regularMap"), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        title:"Regular Map!"
    });

    marker.setMap(map);

</script>