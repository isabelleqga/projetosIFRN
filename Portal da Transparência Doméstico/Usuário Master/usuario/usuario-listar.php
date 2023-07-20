<?php 
include("../top.php");
?>
<div class="container-fluid">
<form action = "usuario-nova.php" method = "POST">

<div class="col-md-12">
    <h3>Lista de Usuários</h3>
                        <div class="card">
<table class="table">
<thead style="background-color: #144E8C; color: white"><th>Nome</th><th>Usuário</th><th></th><th></th><th></th></thead>
<tbody>
    <tr>
        <td>Rogério Ceni</td>
        <td>rogerinho</td>
        <td><a href="usuario-detalhes.php"><i class="ti-eye" title="Visualizar Detalhes"></i></a></td>
        <td><a href="usuario-editar.php"><i class="ti-pencil" title="Editar Informações"></i></a></td>
        <td>
            <a onclick="exibirModal('rogerinho')">
                <i class="ti-trash" title="Excluir Usuário"></i>
            </a>
        </td>        
    </tr>
    <tr>
        <td>Gabriel Barbosa</td>
        <td>gabigol</td>
        <td><a href="usuario-detalhes.php"><i class="ti-eye" title="Visualizar Detalhes"></i></a></td>
        <td><a href="usuario-editar.php"><i class="ti-pencil" title="Editar Informações"></i></a></td>
        <td><a onclick="exibirModal('gabigol')"><i class="ti-trash" title="Excluir Usuário"></i></a></td>
    </tr>
</tbody>
</table>

</div>
    <div class="text-left">
        <button class="btn btn-info btn-fill btn-wd" 
                style=" color:#144E8C; 
                        background-color: transparent; 
                        height: 40px; 
                        border-radius: 0px; 
                        border-color: #144E8C; 
                        border-width: 3px"
        >
            <b> Adicionar usuário </b>
        </button>
    </div>  
</div>
</form>
</div>
</div>


<?php include("../bot.php"); ?>
                                 
