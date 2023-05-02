function exibirModal (nome) {
	document.getElementById("textoModal").innerHTML = 'Você tem certeza que quer excluir '+nome+'?';
    $(".mask").show();
    $(".modal-exclusao").show("slow");

}

function fecharModal () {
    $(".modal-exclusao").hide("slow");
    $(".mask").hide();
}