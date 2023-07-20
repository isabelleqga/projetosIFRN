<?php 
include("../top.php");
?>
<style>
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
    <div class="col-md-12"><h3>Editar Categoria</h3>
        <div class="card">
            <div class="content">
                <div class="content">
                    <form action = "categoria-listar.php" method = "POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control border-input" style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px" value="Energia">
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="text-center">
                                        <label><center>Escolha um ícone</center></label>
                                    </div>
                                    <table class="table text-center" border="3" style="color: #9ab2cb; border-color: #c7d4e2; background-color: white">
                                        <thead></thead>
                                        <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-headphone-alt" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-apple" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-light-bulb" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-spray" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-signal" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-rss-alt" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-mobile" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-car" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-gift" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-support" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-credit-card" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-camera" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-desktop" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <i class="ti-shopping-cart" style="color:#9AB2CB;"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                    </table>
                                </div>
                            </div>   
                        </div>    
                        <br>
                        <div class="text-left">
                            <div class="text-center">
                                <button class="btn btn-info btn-fill btn-wd" 
                                        style=" color:#144E8C; 
                                                background-color: white; 
                                                border-radius: 0px; 
                                                border-color: #144E8C; 
                                                border-width: 3px"
                                >
                                    <b> Voltar </b>
                                </button>
                                <button class="btn btn-info btn-fill btn-wd" 
                                        style=" color:#144E8C; 
                                                background-color: white; 
                                                border-radius: 0px; 
                                                border-color: #144E8C; 
                                                border-width: 3px"
                                >
                                    <b> Enviar </b>
                                </button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>               
            </div>
        </div>
    </div>
</div>
<?php include("../bot.php"); ?>