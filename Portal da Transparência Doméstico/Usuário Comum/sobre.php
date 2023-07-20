<?php 
include("top.php");
date_default_timezone_set('America/Bahia');
?>
 
 <body class="comparacao-body">
    <div class="card comparacao-card" style="padding: 20px 0px 10px;">
        <div class="d-flex justify-center align-center comparacao-title" >
            <h3 style="text-align: center; color: #144E4D">Sobre Nós</h3>
        </div>
        <div class="row justify-center" >
           
              <div class="col-md-4 d-flex justify-center align-center flex-column">
                  <div class="card">
                      <div class="content">
                        <h6 style="text-align: center"> Quem Somos ? </h6>
                        <br>
                        <h8>Nós somos estudantes do quarto ano do curso de informática no Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte.
                        </br>
                        </br> 
                        Desenvolvemos esse sistema a pedido do professor Ari Oliveira enquanto pagávamos a matéria de Projeto de Software.  </h8>
                        <img alt="foto da turma" class="img-no-padding img-responsive" style="margin:auto;margin-top: 20px;" src="/ptdomestico comum/assets/img/aturma.jpg"/>
                        </div>
                      
                  </div>
                  
              </div>

              <div class="col-md-4 d-flex justify-center align-center flex-column">
                    <div class="card">
                      
                        <div class="content">
                          <h6 style="text-align: center"> Qual a finalidade desse projeto ? </h6>  
                          <br>
                          <h8> O Portal da Transparência Doméstico foi pensado e elaborado devido o caos econômico que agora estamos vivenciando. 
                          <br> Trata-se um sistema bem simples que visa a organização financeira doméstica listando gastos e despesas. </h8>
                          <img alt="logo do projeto" class="img-no-padding img-responsive" style="margin:auto; margin-top: 20px;" src="/ptdomestico comum/assets/img/logozinha.png"/>
                        
                        </div>
                    </div>

              </div>

              <div class="col-md-4 d-flex justify-center align-center flex-column">
                    <div class="card" >
                      
                        <div class="content text-center">
                          <h6> Onde estamos ? </h6>  
                          <br>
                            
                            <iframe alt="mapa que indica o lugar da escola" id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.598749963396!2d-37.07124298568763!3d-6.445534564819581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7afec3b2216fb6d%3A0xfd0a7ee7ca8257a9!2sIFRN%20Campus%20Caic%C3%B3!5e0!3m2!1spt-BR!2sbr!4v1613405204650!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


                        </div>
                    </div>

              </div>

            </div>
        </div>
    </div><br><br>
</body>

    <!--   Core JS Files   -->
    <script src="/ptdomestico comum/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="/ptdomestico comum/assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="/ptdomestico comum/assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="/ptdomestico comum/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/ptdomestico comum/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="/ptdomestico comum/assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="/ptdomestico comum/assets/js/demo.js"></script>

    <style type="text/css">
     
      #maps{
        max-width: 100%;
        max-height: 100%;
        position: relative; 
        overflow: hidden;
      }

    </style>

</html>