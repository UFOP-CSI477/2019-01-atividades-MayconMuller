function validar(campo, alerta ,label){

	//input[name.'valorX']
	//#idDoCampo

	//console.log("Validar: " +campo);

  var n = parseFloat($(campo).val());

  if($(campo).val().length ==0 || isNaN(n)){
 /*ERRO*/

    //$(alerta).slideDown();

    $(alerta).show();

    //document.getElementById(alerta).style.display = "block";
    $(label).addClass("text-danger"); /*tratando o label*/

    $(campo).addClass("is-invalid"); /* uma classe do bootstrap*/


    $(campo).val = ("");
    $(campo).focus();

    return false;

  }
  /*Tudo certo*/
  //oculta alerta
  $(alerta).hide();

//Remove classes
  $(campo).removeClass("is-invalid");
  $(label).removeClass("text-danger")
  //Adiciona Classe ao input
  $(campo).addClass("is-valid");
  

return true;
}



function pesoIdeal(quadradoAltura){
   var pesoDe = parseFloat(18*quadradoAltura);
   var pesoAte = parseFloat(24.9*quadradoAltura);

   var ValorRedondoDe = parseFloat(pesoDe.toFixed(2));
   var ValorRedondoAte = parseFloat(pesoAte.toFixed(2));


   $("#valorIdeal").text("de"+"  "+ValorRedondoDe+"kg" +" " +"até"+ " "+ ValorRedondoAte+"kg");

}



$(document).ready(function() {
  console.log("Documento Carregado");

$("#calcular").click(function() {


if(validar("input[name='inputAltura']","#alertaAltura","#labelAltura")
      && validar("input[name='inputPeso']","#alertaPeso","#labelPeso")){

  //Area do calculo

       var peso = parseFloat($("input[name='inputPeso']").val());
       var altura = parseFloat($("input[name='inputAltura']").val());
       var alturaQuadrado = altura * altura;

       //window.alert(alturaQuadrado);

       var valorIMC = peso / alturaQuadrado;
       //var valorFinal = valorIMC * 1000;

        var ValorRedondo = parseFloat(valorIMC.toFixed(2)); // reduzir casa decimais

        var faixa = " ";

        if(ValorRedondo < 18.5){

          faixa = "   Subnutrição";
           $("#valorIndice").text(ValorRedondo);
           $("#msgFaixa").text(faixa);



        }else if (ValorRedondo >= 18.5 && ValorRedondo <= 24.9) {

          faixa = "Saudável";
           $("#valorIndice").text(ValorRedondo);
           $("#msgFaixa").text(faixa);


        } else if (ValorRedondo >= 25 && ValorRedondo <= 29.9) {

          faixa = "Sobrepeso";
           $("#valorIndice").text(ValorRedondo);
           $("#msgFaixa").text(faixa);



        }else if (ValorRedondo >= 30 && ValorRedondo <= 34.9) {

          faixa = "Obesidade grau I";
          $("#valorIndice").text(ValorRedondo);
          $("#msgFaixa").text(faixa);



        }else if (ValorRedondo >= 35 && ValorRedondo <= 39.9) {

          faixa = "Obesidade grau II";
          $("#valorIndice").text(ValorRedondo);
          $("#msgFaixa").text(faixa);



        }else {

          faixa = "Obesidade grau III";
          $("#valorIndice").text(ValorRedondo);
          $("#msgFaixa").text(faixa);


        }

        pesoIdeal(alturaQuadrado); // Calcula a faixa de peso ideal

       



}

  /* Act on the event */
});






});  // final do ready