@extends('administrador')

@section('titulo', 'Editar Usuário')

@section('corpo')


<form class="form-group" method="post" action="{{ route('users.update', $usuario->id) }}">

    @csrf
    @method('PATCH')

    <div class="col-4"> 
<p>Nome: <input  class="form-control" type="text" name="name" value="{{$usuario->name}}"></p>
  
<p>Tipo <input class="form-control" type="number" name="type" value="{{$usuario->type}}"></p>

       
    

    <input   class="btn btn-primary" type="submit" name="btnSalvar" value="Salvar">
    <!-- Voltar para a lista de estados //-->
     <a  class="btn btn-secondary" href="{{ route('users.index') }}">Voltar</a>

    </div>

  </form>

@endsection