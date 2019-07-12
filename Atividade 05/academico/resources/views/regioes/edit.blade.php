@extends('principal')

@section('titulo', 'Editar Estados')


@section('conteudo')
<h2>Região: <span style="color: grey"> {{ $regioe->nome }}</span> </h2>

<form class="form-group" method="post" action="{{ route('regioes.update', $regioe->id) }}">

    @csrf
    @method('PATCH')

    <div class="col-4">
    	
   
    <p>Nome: <input  class="form-control" type="text" name="nome" value="{{$regioe->nome}}"></p>
    <p>Identificador: <input class="form-control" type="text" name="Identificador" value="{{$regioe->id}}"></p>

    <input   class="btn btn-primary" type="submit" name="btnSalvar" value="Salvar">
    <!-- Voltar para a lista de estados //-->
     <a  class="btn btn-secondary" href="{{ route('regioes.index') }}">Voltar</a>

    </div>

  </form>


  
@endsection