<?php 
include("config2.php");
include("verifica.php");
include("top.php");
if(isset($_POST['sabor'])){
	$sabor = $_POST['sabor'];
	$tamanho = $_POST['tamanho'];
	$preco = $_POST['preco'];
	$consulta = $MySQLi->query("INSERT INTO TB_PIZZAS (PIZ_SABOR, PIZ_TAMANHO, PIZ_PRECO) VALUES ('$sabor', '$tamanho', '$preco')");
	header("Location: pizzas.php");
}
?>
<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Adicionar Pizza</a>
                </div>
                
            </div>
        </nav>


        <div class="content">
<div class="container-fluid">
    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
<div class="content">
                                <form action = "?" method = "POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Sabor</label>
                                                <input type="text" class="form-control border-input" name = "sabor" placeholder="Atleticana">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Preço</label>
                                                <input type="text" class="form-control border-input" name = "preco" placeholder=" 30.00">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Tamanho</label>
                                                <input type="text" class="form-control border-input" name = "tamanho" placeholder=" M">
                                            </div>
                                        </div> 
                                    </div>

                                    <br>

                                    

                                   
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Enviar</button>
                                  
                                    </div>
                                    <div class="clearfix"></div>
                                </form></div></div>
                            </div></div>
                            </div><?php include("bot.php"); ?>