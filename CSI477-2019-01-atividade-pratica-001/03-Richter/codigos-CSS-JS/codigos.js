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


function efeitos(magnitude){
  var msgEfeitos = " ";

  if (magnitude < 3.50) {
   msgEfeitos = "Geralmente não sentido, mas gravado.";

  }else if(magnitude >= 3.50 && magnitude <=5.49){

    msgEfeitos = " Às vezes sentido, mais raramente causa danos.";

  }else if (magnitude >= 5.50 && magnitude <= 6.09) {

    msgEfeitos = "No máximo causa pequenos danos a prédios bem construidos, mais pode danificar seriamente casas mal construidas em regiões próximas.";
    

  }else if (magnitude >= 6.10 && magnitude <= 6.99) {
   msgEfeitos = "Pode ser destrutivo em áreas em torno de até 100km do epicentro";

  }else if (magnitude >= 7.00 && magnitude <= 7.99) {

    msgEfeitos = "Grande terremoto. Pode causar sérios danos numa grande faixa.";

   
  }else if (magnitude > 8.0){   // não era necessarío o if maaaaaaas

    msgEfeitos = "Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros.";

  }


   $("#efeitos").text(msgEfeitos);


}




$(document).ready(function() {
  console.log("Documento Carregado");

$("#calcular").click(function() {


  if(validar("input[name='inputAmplitude']","#alertaAmplitude","#labelAmplitude")
      && validar("input[name='inputTempo']","#alertaTempo","#labelTempo")){


    var ampli = parseFloat($("input[name='inputAmplitude']").val());
    var vTempo = parseFloat($("input[name='inputTempo']").val());

    //window.alert(ampli);

    var logAmp_10 =Math.log10(ampli); //log na base 10 da amplitude

    var oitoXdeltaT = (8*vTempo); // variação de tempo X 8

    var tresXlog8 = (3* (Math.log10(oitoXdeltaT))); // 3*(log (da variação * 8))


    var magnitude =  (logAmp_10 + tresXlog8 -2.92);

    var magRedondo = parseFloat(magnitude.toFixed(2));


    //window.alert(magRedondo);  teste valor Final


    $("#valorMag").text(magRedondo);


    efeitos(magnitude);




    









  }




});







});  // final do ready