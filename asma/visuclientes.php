<?php 
include("config2.php");
include("verifica.php");
include("top.php");
if(isset($_GET['ativar'])) {
    $codigoAti = $_GET['ativar'];
    $consultaAti = $MySQLi->query("UPDATE TB_USUARIOS SET USU_SITUACAO=1 WHERE USU_CODIGO = $codigoAti");
    header("Location: visuclientes.php");
}
if(isset($_GET['desativar'])) {
    $codigoDes = $_GET['desativar'];
    $consultaDes = $MySQLi->query("UPDATE TB_USUARIOS SET USU_SITUACAO=0 WHERE USU_CODIGO = $codigoDes");
    header("Location: visuclientes.php");
}
$consulta = $MySQLi->query("SELECT * FROM TB_USUARIOS WHERE USU_SITUACAO = 1");
$consulta2 = $MySQLi->query("SELECT * FROM TB_USUARIOS WHERE USU_SITUACAO = 0");
?>

                                <div class="main-panel">
                                    <nav class="navbar navbar-default">
                                        <div class="container-fluid">
                                            <div class="navbar-header">
                                                <a class="navbar-brand" href="#">Visualizar clientes (master)</a>  
                                            </div>
                                        </div>
                                    </nav>
                                    <div class="content">
                                        <div class="container-fluid">
                                            <div class="col-md-12">
                                                <h3>Clientes ativos</h3>
                                                <div class="card">
                                                    <table class="table table-striped">
                                                        <thead><th>NOME</th><th>NOME DE USUÁRIO</th><th>EMAIL</th><th>CPF</th><th>TELEFONE</th><th>EDITAR</th><th>DESATIVAR</th></thead>
                                                        <tbody>
                                                            <?php while($resultado=$consulta->fetch_assoc()){ ?>
                                                            <tr>
                                                                <td><?php echo $resultado['USU_NOME']; ?></td>
                                                                <td><?php echo $resultado['USU_USUARIO']; ?></td>
                                                                <td><?php echo $resultado['USU_EMAIL']; ?></td>
                                                                <td><?php echo $resultado['USU_CPF']; ?></td>
                                                                <td><?php echo $resultado['USU_TELEFONE']; ?></td>
                                                                <td><a href="perfil-editar-master.php?codigousuario=<?php echo $resultado['USU_CODIGO'] ?>"><i class="ti-pencil"></i></a></td>
                                                                <td><a href="visuclientes.php?desativar=<?php echo $resultado['USU_CODIGO']; ?>"><i class="ti-arrow-circle-down icon-danger"></i></a></td>
                                                            </tr>
                                                            <?php }; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h3>Clientes desativos</h3>
                                                <div class="card">
                                                    <table class="table table-striped">
                                                        <thead><th>NOME</th><th>NOME DE USUÁRIO</th><th>EMAIL</th><th>CPF</th><th>TELEFONE</th><th>ATIVAR</th></thead>
                                                        <tbody>
                                                            <?php while($resultado2=$consulta2->fetch_assoc()){ ?>
                                                            <tr>
                                                                <td><?php echo $resultado2['USU_NOME']; ?></td>
                                                                <td><?php echo $resultado2['USU_USUARIO']; ?></td>
                                                                <td><?php echo $resultado2['USU_EMAIL']; ?></td>
                                                                <td><?php echo $resultado2['USU_CPF']; ?></td>
                                                                <td><?php echo $resultado2['USU_TELEFONE']; ?></td>
                                                                <td><a href="visuclientes.php?ativar=<?php echo $resultado2['USU_CODIGO']; ?>"><i class="ti-arrow-circle-up"></i></a></td>
                                                            </tr>
                                                            <?php }; ?>
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                            <?php include("bot.php"); ?>