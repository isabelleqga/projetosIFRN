<?php 
include("../top.php");
?>



<div class="container-fluid">

<div class="col-md-12">
        <h3>Detalhes da Despesa</h3>
                        <div class="card"><div class="content">
<div class="content">
<form action = "../index.php" method = "POST">
<img class="img-no-padding img-responsive" width = "30%" src="../assets/img/tempero.jpg" alt="..." style="border: 3px solid #c7d4e2; float: right"/>
           
    <div class="row"><br>
            <div class="col-md-6">
                
                    <b><label style="color: black">Título:</label></b>
                    <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px">Tempero</label><br>
                
            </div>
            <div class="col-md-6">
                
                    <b><label style="color: black">Categoria:</label></b>
                    <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px">Comida</label><br>
                
            </div>
			<div class="col-md-6">              
                    <b><label style="color: black">Descrição:</label></b>
                    <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px">é bom mas depende</label><br>      
            </div>


            <div class="col-md-6">
                    <b><label style="color: black">Preço:</label></b>
                    <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px">R$1000</label><br>
            </div> 
            <div class="col-md-6"> 
                    <b><label style="color: black">Data:</label></b>
                    <label style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px">08/02/2021</label> 
            </div>
        </div>
    </div>
        <br>
                <a      class="btn btn-info btn-fill btn-wd" 
                        style=" color:#144E8C; 
                                background-color: white; 
                                border-radius: 0px; 
                                border-color: #144E8C; 
                                border-width: 3px" 
                        href="../index.php"
                >
                        <b> Voltar </b>
                </a>

                                    <div class="clearfix"></div>
                                </form>	
	</div></div>    </div></div>                     
                                    
<?php include("../bot.php"); ?>