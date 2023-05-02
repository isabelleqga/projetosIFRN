            </div>
        </div>
    </div>
</div>
<div class="modal-exclusao">
    <h4 id="tituloAtencao">
        <span class="material-icons">
            report_problem
        </span>
        Atenção!
    </h4>
    <h3 id="textoModal"></h3>
    <div class="botoes-confirmacao">
        <button class="btn btn-secondary" onclick="fecharModal()">Cancelar</button>
        <button class="btn btn-danger" onclick="fecharModal()">Excluir</button>
    </div>
</div>
<div class="mask" onclick="fecharModal()"></div>
</body>

<!--   Core JS Files   -->
<script src="/ptdomestico comum/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/ptdomestico comum/assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="/ptdomestico comum/assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="/ptdomestico comum/assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="/ptdomestico comum/assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="/ptdomestico comum/assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="/ptdomestico comum/assets/js/demo.js"></script>


<script src="<?php echo $diretorio; ?>assets/js/scriptModal.js"></script>


</html>