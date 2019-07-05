@extends('administrador')

@section('titulo', 'Editar Procedimento')

@section('corpo')

@if(auth::user()->type == 2 || auth::user()->type == 1 )

<form class="form-group" method="post" action="{{ route('procedimentos.update', $procedimento->id) }}">

    @csrf
    @method('PATCH')

    <div class="col-4">

    	
        @if(auth::user()->type == 1)
    <p>Nome: <input  class="form-control" type="text" name="name" value="{{$procedimento->name}}"></p>

       
    <p>Preço: <input class="form-control" type="number" name="price" value="{{$procedimento->price}}"></p>

       
        @elseif (auth::user()->type == 2)

    <p>Preço: <input class="form-control" type="number" name="price" value="{{$procedimento->price}}"></p>

        @endif

    <input   class="btn btn-primary" type="submit" name="btnSalvar" value="Salvar">
    <!-- Voltar para a lista de estados //-->
     <a  class="btn btn-secondary" href="{{ route('procedimentos.index') }}">Voltar</a>

    </div>

  </form>

@endif
  
@endsection