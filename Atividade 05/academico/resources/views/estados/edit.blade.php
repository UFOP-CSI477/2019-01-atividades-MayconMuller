@extends('principal')

@section('titulo', 'Editar Estados')


@section('conteudo')



<form class="form-group" method="post" action="{{ route('estados.update', $estado->id) }}">

    @csrf
    @method('PATCH')

    <div class="col-4">
    	
   
    <p>Nome: <input  class="form-control" type="text" name="nome" value="{{$estado->nome}}"></p>
    <p>Sigla: <input class="form-control" type="text" name="sigla" value="{{$estado->sigla}}"></p>

    <input   class="btn btn-primary" type="submit" name="btnSalvar" value="Salvar">
    <!-- Voltar para a lista de estados //-->
     <a  class="btn btn-secondary" href="{{ route('estados.index') }}">Voltar</a>

    </div>

  </form>


  
@endsection