<?php 
include("../top.php");
?>



<div class="container-fluid">

<div class="col-md-12">
        <h3>Cadastrar Despesa </h3>
                        <div class="card"><div class="content">
<div class="content">
    <div class="text-right" style="font-size:11px; color: #9A9A9A;"><span style="color: #E53935">* Campos Obrigatórios</span></div>
<form action = "despesa-detalhes.php">

    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <label>Título<span style="color: #E53935">*</span></label>
                    <input class="form-control border-input" style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px" placeholder="Ex.: Arroz">
                </div></div>  
            <div class="col-md-6">
                <div class="form-group">
                    <label>Categoria<span style="color: #E53935">*</span></label>
                    <select class="form-control border-input" style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px">
                        <option value="">Comida</option>
                        <option value="">Energia</option>
                        <option value="">Internet</option>
                        <option value="">Água</option>
                    </select>
                </div>
            </div>
    </div>

    <div class="row">
            

            <div class="col-md-12">
                <div class="form-group">
                    <label>Descrição</label>
                    <input class="form-control border-input" style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px" placeholder="é bom, mas depende" name="Descrição">
                </div>
            </div>

                             
    </div>
        
          
    <div class="row">
        <div class="col-md-4">
                <div class="form-group">
                    <label>Preço<span style="color: #E53935">*</span></label>
                    <input class="form-control border-input" style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px" placeholder="R$1000" name="Preço">
                </div>
            </div> 
            <div class="col-md-4">
                <div class="form-group">
                    <label>Data<span style="color: #E53935">*</span></label>
                    <input class="form-control border-input" id="date" type="date" style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px" placeholder="" name="Data">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control border-input" style="background-color: white; border-radius: 0px; border-color: #c7d4e2; border-width: 3px">
                </div>
            </div>
                                        
    </div>
        <br/>
            <div class="text-left">        
                <button class="btn btn-info btn-fill btn-wd" 
                        style="color:#144E8C; 
                            background-color: white; 
                            border-radius: 0px; 
                            border-color: #144E8C; 
                            border-width: 3px"
                >
                    <b> Cadastrar </b>
                </button>        
        </div>  
    <div class="clearfix"></div>
</form> 
    </div></div>    </div></div>
<?php include("../bot.php"); ?>