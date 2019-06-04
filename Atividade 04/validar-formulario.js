// Comentário
/*
  Comentários
*/
function calcular3() {

  var nomeProduto = document.dadosProduto.nomeDoProduto;

  if (nomeProduto.value.length ==0 || isNaN(nomeProduto) ) {

    document.getElementById("alertaNomeProduto").style.display = "block";
    document.getElementById("labelNomeProduto").classList.add("text-danger"); //tratando o label

     nomeProduto.classList.add("is-invalid"); /* uma classe do bootstrap*/


    nomeProduto.value = "";
    nomeProduto.focus();
    return;
  }
}




function validarForm(campo,alerta,label){

 if(campo.value.length == 0 || isNaN(campo)){
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



function testeValidarForm(){

  var nomeProduto = document.dadosProduto.nomeDoProduto;


  if (validarForm(nomeProduto, "alertaNomeProduto", "labelNomeProduto") {

        window.alert("Tudo ok Parça");

  }

}





