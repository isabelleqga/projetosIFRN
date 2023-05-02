<?php
include("top.php");
date_default_timezone_set('America/Bahia');
?>
            <!--4 divs abertas no top.php, são fechadas no bot.php-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content" style="padding-bottom: 30px;">
                                <form action="despesa/despesa-nova.php">
                                    <h2 style="color: #144E8C">
                                        <b id="titleCustosTotais"> CUSTOS TOTAIS </b>
                                        <button type="submit" id="adicionarDespesas" class="btn btn-info btn-fill btn-wd" style="color:#144E8C; 
                                                background-color: white; 
                                                border-radius: 0px; 
                                                border-color: #144E8C; 
                                                border-width: 3px ;float: right;">
                                            Adicionar Despesa
                                        </button>
                                    </h2>
                                </form>
                                <h2 id="precoTotal">
                                    <b> R$ 1000.00 </b>
                                </h2>
                                <button type="submit" id="adicionarDespesas2" class="btn btn-info btn-fill btn-wd" style=" color:#144E8C; 
                                                background-color: white; 
                                                border-radius: 0px; 
                                                border-color: #144E8C; 
                                                border-width: 3px ;">
                                    Adicionar Despesa
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">Despesas por categoria</h4>
                                    </div>
                                    <div class="content">
                                        <img alt="Gráfico de Despezas por Categoria" class="img-circle img-no-padding img-responsive" style="margin: auto;" src="assets/img/graficoa.jpg" alt="..." />
                                        <div class="card-footer">
                                            <div class="legend">
                                                <div class="text-center">
                                                    <i class="fa fa-circle " style=" color: #ABDBE3"></i> Comida
                                                    <i class="fa fa-circle " style=" color: #EAB676"></i> Energia
                                                    <i class="fa fa-circle " style=" color: #5B9BD5"></i> Água
                                                    <i class="fa fa-circle " style=" color: #ED7D31"></i> Internet
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="content">
                                        <h4 class="title" style="margin-bottom: 10px">Tabela de Despesas</h4>
                                        <table class="table table-responsive">
                                            <thead style="background-color: #144E8C; color: white">
                                                <th>Título</th>
                                                <th>Categoria</th>
                                                <th>Custo</th>
                                                <th class="text-center" colspan="3">Ação</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Compras</td>
                                                    <td>Comida</td>
                                                    <td>R$400.00</td>
                                                    <td>
                                                        <a href="despesa/despesa-detalhes.php">
                                                            <i title="Visualizar Detalhes" class="ti-eye"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="despesa/despesa-editar.php">
                                                            <i title="Editar Informações" class="ti-pencil"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a onclick="exibirModal('Compras')">
                                                            <i title="Excluir Despesa" class="ti-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Contas</td>
                                                    <td>Internet</td>
                                                    <td>R$100.00</td>
                                                    <td>
                                                        <a href="despesa/despesa-detalhes.php">
                                                            <i title="Vizualizar Detalhes" class="ti-eye"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="despesa/despesa-editar.php">
                                                            <i title="Editar Informações" class="ti-pencil"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a onclick="exibirModal('Contas')">
                                                            <i title="Excluir Despesa" class="ti-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Contas</td>
                                                    <td>Energia</td>
                                                    <td>R$300.00</td>
                                                    <td>
                                                        <a href="despesa/despesa-detalhes.php">
                                                            <i title="Vizualizar Detalhes" class="ti-eye"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="despesa/despesa-editar.php">
                                                            <i title="Editar Informações" class="ti-pencil"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a onclick="exibirModal('Contas')">
                                                            <i title="Excluir Despesa" class="ti-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Contas</td>
                                                    <td>Água</td>
                                                    <td>R$200.00</td>
                                                    <td>
                                                        <a href="despesa/despesa-detalhes.php">
                                                            <i title="Vizualizar Detalhes" class="ti-eye"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="despesa/despesa-editar.php">
                                                            <i title="Editar Informações" class="ti-pencil"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a onclick="exibirModal('Contas')">
                                                            <i title="Excluir Despesa" class="ti-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center">
                                        <nav aria-label="Navegação de página exemplo">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Anterior">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Anterior</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Próximo">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Próximo</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
include("bot.php");
?>