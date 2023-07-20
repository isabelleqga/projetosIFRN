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
    <h3>Detalhes da categoria "X"</h3>
    <div class="row">
        <div class="col-lg-4">
            <div class="text-center">
                <img src="../assets/img/grafico_categoria.png"><br>
                <center><span style="font-size:25px; color:#144E8C;">100% do total</span></center>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
            <h5 style="background-color:#EFF6F5; color:black; text-align: center; padding: 10px; margin:0">Despesas Por Categoria </h5>
                <table class="table">
                <thead style="background-color:#144E8C;color:white"><th>Título</th><th>Preço</th><th></th><th></th><th></th></thead>
                    <tbody>
                        <tr>
                            <td>Compras</td>
                            <td>R$ 392,00</td>
                            <td><a href="../despesa/despesa-detalhes.php"> <i class="ti-eye"></i> Vizualizar</a></td>
                            <td><a href="../despesa/despesa-editar.php"><i class="ti-pencil"></i> Editar</a></td>
                            <td><a onclick="exibirModal('Compras')"><i class="ti-trash"></i> Excluir</a></td>
                        </tr>
                        <tr>
                            <td>Férias</td>
                            <td>R$ 482,35</td>
                            <td><a href="../despesa/despesa-detalhes.php"><i class="ti-eye"></i> Vizualizar</a></td>
                            <td><a href="../despesa/despesa-editar.php"><i class="ti-pencil"></i> Editar</a></td>
                            <td><a onclick="exibirModal('Férias')"><i class="ti-trash"></i> Excluir</a></td>
                        </tr>
                        <tr>
                            <td>Gasolina</td>
                            <td>R$ 23,40</td>
                            <td><a href="../despesa/despesa-detalhes.php"> <i class="ti-eye"></i> Vizualizar</a></td>
                            <td><a href="../despesa/despesa-editar.php"><i class="ti-pencil"></i> Editar</a></td>
                            <td><a onclick="exibirModal('Gasolina')"><i class="ti-trash"></i> Excluir</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a  href="../categoria/categoria-listar.php" 
                class="btn btn-info btn-fill btn-wd" 
                style=" color:#144E8C; 
                        background-color: transparent; 
                        border-radius: 0px; 
                        border-color: #144E8C; 
                        border-width: 3px; 
                        height: 40px"
            >
                <b>Voltar</b>
            </a> 
        </div>
    </div>
</div>
<?php include("../bot.php"); ?>