<?php 
include("../top.php");
?>


<div class="container-fluid">
    <div class="col-md-12">
        <h3>Editar Usuário</h3>
            <div class="card">
            <div class="content">
            <div class="content">
            <div class="text-right" style="font-size:11px; color: #9A9A9A;"><span style="color: #E53935">* Campos Obrigatórios</span></div>
<form action = "usuario-listar.php" method = "POST">

    <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Nome<span style="color: #E53935">*</span></label>
                    <input class="form-control border-input" style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px" value="Rogério Ceni de Melo Neto">
                </div></div>  
    </div>

    <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Telefone</label>
                    <input style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px" class="form-control border-input" value="(84) 999694203" placeholder="(84) 999694203 (opicional)">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>CPF<span style="color: #E53935">*</span></label>
                    <input style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px" class="form-control border-input" value="012.345.678-90">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Usuário<span style="color: #E53935">*</span></label>
                    <input style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px" class="form-control border-input" value="rogerinho">
                </div>
            </div>                  
    </div>
        
          
    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email<span style="color: #E53935">*</span></label>
                    <input style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px" class="form-control border-input" value="rogerio@ceni.com">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Senha<span style="color: #E53935">*</span></label>
                    <input style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px" class="form-control border-input" value="sp4evER$%123">
                </div>
            </div>
                                        
    </div>
                        
                                    
        <br>
        <div class="text-left">
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
        <div class="clearfix"></div>
    </form> 
    </div>
    </div>
    </div>
    </div>                     
                                    
<?php include("../bot.php"); ?>