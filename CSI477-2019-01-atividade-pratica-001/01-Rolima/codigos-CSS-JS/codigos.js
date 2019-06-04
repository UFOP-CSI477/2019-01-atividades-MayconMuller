

function validar(campo, alerta ,label){

	//input[name.'valorX']
	//#idDoCampo

	//console.log("Validar: " +campo);

  //var n = parseFloat($(campo).val());

  if($(campo).val().length ==0){
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



// Para Pegar os dados da tabela e manipuar
///criei um obj do tipo competidor

class competidor{
	constructor(posicao,nome,tempo){
		this.posicao  = posicao;
		this.nome = nome;
		this.tempo = tempo;

		}
}
///Uma lista de competidores
 var listaCompetidores =[];






/// Função que ordena a lista de competidores de acordo com o tempo


/*Quando chamamos o sort() passando uma função via parâmetro, o método sort()
 invoca essa função, e passa dois parâmetros para essa função. Esses parâmetros
  são dois objetos que pertencem a lista. De acordo com o valor retornado por
   essa função, o sort() vai ordenar a lista automaticamente.*/

   //Fonte e explicação de como utilizar a função:
   // https://medium.com/@renatonogueiraloureno/ordenando-lista-de-objetos-complexos-em-javascript-e373c82d5c36


 function ordenar () {
 	listaCompetidores.sort(function(competidorA, competidorB){
 		if(competidorA.tempo > competidorB.tempo){
 			return 1;
 		}
 		if (competidorA.tempo < competidorB.tempo) {
 			return -1;
 		}
 		return 0;
 	});
 }


/// tabela esta sendo duplicada toda vez que clico em
// ver resultado  função para limpar a tabela chamo ela no click do botão
function limparTabela(){
    var table = document.getElementById("tabelaResultado");
        
    for(let i = table.rows.length-1; i>0; i--)
    {
        table.deleteRow(i);
    }
}



$(document).ready(function() {
	console.log("Documento Carregado");



	$("#calculo").click(function() {

		var posicao = ($("input[name='posicaoParticipante']").val());
		var nome = ($("input[name='nomeParticipante']").val());
		var tempo = ($("input[name='tempoParticipante']").val());

		if(validar("input[name='posicaoParticipante']","#alertaPosicao","#labelPosicao")
			&& validar("input[name='nomeParticipante']","#alertaNome","#labelNome") &&
			validar("input[name='tempoParticipante']","#alertaTempo","#labelTempo")){

		
				var tr = '<tr>'+
					'<td>'+posicao+'</td>'+
					'<td>'+nome+'</td>'+
					'<td>'+tempo+'</td>'+
					'</tr>'
				$('#tabelaInscricao').find('tbody').append( tr );

				var comp = new competidor(posicao, nome, tempo);
                listaCompetidores.push(comp);

                  //window.alert(listaCompetidores[0].tempo); saber se deu certo o acesso

				return false;
			}


			

	});


	$("#mostrar").click(function() {
		/* Act on the event */
      $("#tabelaResultado").show();
       limparTabela();
		ordenar(); // ordenar a lista de competidores pelo tempo

		//window.alert(listaCompetidores[0].tempo);  // ok Ordenou a lista normalmente
		//window.alert(listaCompetidores[1].tempo);

		//ordenar();

        //window.alert(listaCompetidores[0].tempo +listaCompetidores[1].tempo);
       // window.alert(listaCompetidores[1].tempo)
          var posi = 1;
		 for (let i = 0;  i < listaCompetidores.length; i++){
			 posi = i+1;


		
		          var name = listaCompetidores[i].nome;
		          var position = listaCompetidores[i].posicao;
		          var start = listaCompetidores[i].tempo;



			  var zika = '<tr>'+
					'<td>'+posi+'</td>'+
					'<td>'+position+'</td>'+
					'<td>'+name+'</td>'+
					'<td>'+start+'</td>'
					

					if(posi == 1){
                zika1 = '<td>Vencedor(a)!</td>'+'</tr>';
            }else zika1 = '<td>-</td>'+'</tr>';

            zika2 = zika + zika1;



				$('#tabelaResultado').find('tbody').append( zika2 );
		}



	});

	$("#ocultar").click(function(){
	//$("div[id='texto']").hide(); mesma coisa
	//$("#tabelaResultado").fadeToggle("slow");
	//$("#links").hide();
	 $("#tabelaResultado").hide();

 
});


});