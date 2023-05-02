<?php 
include("top.php");
include("config2.php");
include("verifica.php");
$codigousuario = $_SESSION['codigousuario'];

if(isset($_GET['excluir'])) {
    $codigo = $_GET['excluir'];
    $consulta2 = $MySQLi->query("DELETE FROM TB_AGENDAS
    WHERE AGE_CODIGO = $codigo");
    header("Location: agendas.php");
}

$perfil = $MySQLi->query("SELECT * FROM TB_USUARIOS WHERE USU_CODIGO='$codigousuario'");
$resuperf = $perfil->fetch_assoc();

?>


<div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Perfil de Atuação</a>
                </div>
                
            </div>
        </nav>


        <div class="content">
<div class="container-fluid">

    <div class="col-md-12"><div class="row">
<div class="col-lg-4 col-md-5">
    <div class="card card-user">
                            <div class="image">
                                <img src="001.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="01.png" alt="..."/>
                                  <h4 class="title">João Felix Conveniência<br />
                                     <a href="https://www.instagram.com/joaofelix79/"><small>@joaofelix79</small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    "Atacando a concorrência"
                                </p>
                            </div>
                            <hr>
                        </div>
    
       </div> <div class="col-lg-4 col-md-5">
    <div class="card card-user">
                            <div class="image">
                                <img src="002.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="02.png" alt="..."/>
                                  <h4 class="title">Lodi Construções <br />
                                     <a href="https://www.instagram.com/renan_lodi/"><small>@renan_lodi</small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    "Constante, incrível <br>
                                    e confiável pela esquerda"
                                </p>
                            </div>
                            <hr>
                        </div>
    
       </div> <div class="col-lg-4 col-md-5">
    <div class="card card-user">
                            <div class="image">
                                <img src="003.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="03.png" alt="..."/>
                                  <h4 class="title">Gimenez Moto Táxi <br />
                                     <a href="https://www.instagram.com/josemariagimenez/"><small>@josemariagimenez</small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    "Segurança <br>
                                    em primeiro lugar"
                                </p>
                            </div>
                            <hr>
                        </div>
    
       </div> 
</div>
                        <div class="card"><div class="content">
<div class="content">

<form action = "?" method = "POST">
    <div class="row">
        <div class="col-md-12">
            <div class="typo-line">
                                    <p class="category">Introdução</p>
                                    <blockquote>
                                     <p>
                                     A <b style="color:#D13B1B">AltMarket</b> é uma empresa desenvolvida para atender o público que está interessado em promover seu negócio através de estratégias relacionadas ao marketing digital.

                                     </p>
                                     <small>
                                     Danielly Silva, CEO AltMarket
                                     </small>
                                    </blockquote>
                                </div>
                                <div class="typo-line">
                                    <p class="category">Motivações</p>
                                    <blockquote>
                                     <p>
                                     
Pensando em como as propagandas estão cada vez mais inseridas no contexto virtual, e que essa forma de se propagar a informação é muito mais viável hoje em dia, é necessário se manter sempre atualizado e inserido nesse meio utilizando diversas estratégias. É aí que nossa empresa entra em ação. Nós analisamos características e dados relacionados ao público alvo e buscamos diferentes métodos que devem ser  adotados para elevar o reconhecimento da sua empresa e fazer com que a mesma seja cada vez mais conhecida no mercado de trabalho, tudo isso feito com segurança e profissionalismo por profissionais capacitados na área. 
                                     </p>
                                     <small>
                                     Arthur Vinícius, Carrega-água
                                     </small>
                                    </blockquote>
                                </div>
           
    </div>
</div>

    
        <div class="clearfix"></div>
   </form>  
    </div>    </div>
</div>



 




<div class="row">
<div class="col-lg-4 col-md-5">
    <div class="card card-user">
                            <div class="image">
                                <img src="004.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="04.png" alt="..."/>
                                  <h4 class="title">Koke Caça e Pesca<br />
                                     <a href="https://www.instagram.com/koke6/"><small>@koke6</small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    "Negócio de família,<br>com coragem e coração"
                                </p>
                            </div>
                            <hr>
                        </div>
    
       </div> <div class="col-lg-4 col-md-5">
    <div class="card card-user">
                            <div class="image">
                                <img src="005.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="05.png" alt="..."/>
                                  <h4 class="title">Hermoso Modas e Acessórios <br />
                                     <a href="https://www.instagram.com/mhermoso22/"><small>@mhermoso22</small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    "Lindo igual o nome"
                                </p>
                            </div>
                            <hr>
                        </div>
    
       </div> <div class="col-lg-4 col-md-5">
    <div class="card card-user">
                            <div class="image">
                                <img src="006.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="06.png" alt="..."/>
                                  <h4 class="title">Oblak Salgados<br />
                                     <a href="https://www.instagram.com/oblakjan/"><small>@oblakjan</small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    "Um paredão de gostosuras"
                                </p>
                            </div>
                            <hr>
                        </div>
    
       </div> 
</div></div>
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

