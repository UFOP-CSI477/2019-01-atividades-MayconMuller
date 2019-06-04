

function validar(campo, alerta,label){

 if(campo.value.length == 0 ){
 /*ERRO*/
    document.getElementById(alerta).style.display = "block";
    document.getElementById(label).classList.add("text-danger"); /*tratando o label*/

    campo.classList.add("is-invalid"); /* uma classe do bootstrap*/


    campo.value = "";
    campo.focus();

    return false;

  }
  /*Tudo certo*/
  document.getElementById(alerta).style.display = "none";

  campo.classList.remove("is-invalid");
  campo.classList.add("is-valid");
  document.getElementById(label).classList.remove("text-danger");

return true;

}

function validarCheck(Xid,Yid,label){

	if( (document.getElementById(Xid).checked == false) &&
		document.getElementById(Yid).checked == false) {
		document.getElementById(label).classList.add("text-danger"); /*tratando o label*/
		//window.alert("Selecione uma unidade de medida!");
	}
	else
	{
		document.getElementById(label).classList.remove("text-danger");


	}
	
}


function testeValidarForm() {

   var nomeProduto = document.dadosProduto.nomeDoProduto;
   var valorCompra = document.dadosProduto.valorC;
   var valorVenda = document.dadosProduto.valorV;
   var peso = document.dadosProduto.peso;
   var estoque = document.dadosProduto.estoque;

   if (validar(nomeProduto,"alertaNomeProduto","labelNomeProduto")) {

   }
  if (validar(valorCompra,"alertaValorCompra","labelValorCompra")) {

   }
   if (validar(valorVenda,"alertaValorVenda","labelValorVenda")) {

   }
   if (validar(peso,"alertaPeso","labelPeso")) {

   }
   if (validar(estoque,"alertaEstoque","labelEstoque")) {

   }
   if (validarCheck("KG","l","labelUM")) {

   }
   if (validarCheck("interno","externo","comercializacao")) {

   }


/*Jquery*/
$(document).ready(function() {
 	console.log("Documento carregado.");

  if ($("#fornecedor").val() == "0"){
   window.alert("Escolha um fornecedor");
   $("#fornecedor").addClass("is-invalid");

 }
 else{
 	$("#fornecedor").removeClass("is-invalid");
 	$("#fornecedor").addClass("is-valid");

 }


 	})




}


function calcular3() {

  var nomeProduto = document.dadosProduto.nomeDoProduto;

  if (nomeProduto.value.length == 0 || isNaN(nomeProduto) ) {

    document.getElementById("alertaNomeProduto").style.display = "block";
    document.getElementById("labelNomeProduto").classList.add("text-danger"); //tratando o label

     nomeProduto.classList.add("is-invalid"); /* uma classe do bootstrap*/


    nomeProduto.value = "";
    nomeProduto.focus();
    return;
  }
}



