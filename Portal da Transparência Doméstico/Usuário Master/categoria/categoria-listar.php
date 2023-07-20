<?php 
include("../top.php");
?>
<style type="text/css">
    #adicionarDespesas2 {
    display: none;
}

.container-toggle-button {
    cursor: pointer;
    display: none;
}

.bar1, .bar2, .bar3 {
    width: 35px;
    height: 5px;
    background-color: #6b6863;
    margin: 6px 0;
    transition: 0.4s;
}
  
.change .bar1 {
    transform: rotate(-45deg) translate(-9px, 6px) !important;
    -webkit-transform: rotate(-45deg) translate(-9px, 6px) !important;
}
  
.change .bar2 {opacity: 0;}
  
.change .bar3 {
    transform: rotate(45deg) translate(-8px, -8px) !important;
    -webkit-transform: rotate(45deg) translate(-8px, -8px) !important;
}

#botaoSair {
    transition: all ease 0.3s;
}

#botaoSair:hover {
    color: #ff1616 !important;
}

.menu-mobile > ul {
    padding: 0px;
    margin: 0px;
}

.menu-mobile > ul > li {
    list-style-type: none;
}

.menu-mobile > ul > li > a {
    display: flex;
    align-items: center;
    font-size: 25px;
    padding: 25px;
    border-bottom: 1px solid rgba(102, 97, 91, 0.3);
    transition: all ease 0.3s;
}

.menu-mobile > ul > li > a:hover {
    background-color: #FFF;
}

.menu-mobile > ul > li > a > p {
    margin: 0px 10px;
}

@media (max-width: 991px) {
    #botaoSair {
        display: none !important;
    }
    .container-toggle-button {
        display: inline-block;
    }
    #header-mobile{        
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    #navbar-brand-mobile {        
        display: flex;
        align-items: center;
    }
    /* .menu-mobile {
        margin: -50px;
    }     */
}

@media (max-width: 590px) {
    #adicionarDespesas {
        display: none;
    }
    #adicionarDespesas2 {
        display: block;
    }
}

@media (max-width: 470px) {
    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
}

@media (max-width: 320px) {
    #titleCustosTotais {
        font-size: 32px;
    }    
    #precoTotal {
        margin-top: 0px;
        font-size: 27px;
    }
}
</style>

<div class="container-fluid">
    <h3>Categorias</h3>
	<div class="row">
	   <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-warning text-center">
                                <i class="ti-apple"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Comida</p>
                                <div class="footer">
                                    <div class="stats">
                                        <a href="categoria-detalhes.php"><i class="ti-link"></i><p>Detalhes</p></a>
                                    </div>
                                    <div class="stats">
                                        <a href="categoria-editar.php"><i class="ti-pencil"></i><p>Editar</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
							<a onclick="exibirModal('Comida')"><i class="ti-trash"> </i>Excluir</a>
                        </div>
                    </div>
                </div>
            </div></div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                    <i class="ti-light-bulb"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Energia</p>
                                    <div class="footer">
                                        <div class="stats">
                                            <a href="categoria-detalhes.php"><i class="ti-link"></i><p>Detalhes</p></a>
                                        </div>
                                        <div class="stats">
                                            <a href="categoria-editar.php"><i class="ti-pencil"></i><p>Editar</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <a onclick="exibirModal('Energia')"><i class="ti-trash"> </i>Excluir</a>
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
                                    <i class="ti-spray"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Água</p>
                                    <div class="footer">
                                        <div class="stats">
                                            <a href="categoria-detalhes.php"><i class="ti-link"></i><p>Detalhes</p></a>
                                        </div>
                                        <div class="stats">
                                            <a href="categoria-editar.php"><i class="ti-pencil"></i><p>Editar</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>         
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <a onclick="exibirModal('Água')"><i class="ti-trash"></i>Excluir</a>
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
                                    <i class="ti-signal"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Internet</p>     
                                    <div class="footer">
                                        <div class="stats">
                                            <a href="categoria-detalhes.php"><i class="ti-link"></i><p>Detalhes</p></a>
                                        </div>
                                        <div class="stats">
                                            <a href="categoria-editar.php"><i class="ti-pencil"></i><p>Editar</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>         
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <a onclick="exibirModal('Internet')"><i class="ti-trash"> </i>Excluir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
           <div class="col-md-12">
                <div class="text-left">
                    <div class="text-center">
                        <a  href="categoria-nova.php" 
                            class=" btn btn-primary btn-lg" 
                            style=" color:#144E8C; 
                                    background-color: transparent; 
                                    border-radius: 0px; 
                                    border-color: #144E8C; 
                                    border-width: 3px; 
                                    height: 60px">
                            <b>Adicionar categoria</b>
                        </a> 
                    </div>
                </div>            
            </div>
        </div>
<?php 
    include("../bot.php");
?>