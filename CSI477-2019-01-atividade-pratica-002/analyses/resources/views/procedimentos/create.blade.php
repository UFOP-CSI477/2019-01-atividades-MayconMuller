@extends('administrador')

@section('titulo', 'Novo Procedimento')

@section('corpo')


  <h2 class="col-12"> <span  style="color: grey;" >Cadastro de um Novo Procedimento</span> </h2>


<div class="col-6">

  <form class="form-group"  action="{{route('procedimentos.store')}}" method="post">
    @csrf

      <h3>Responsável pelo cadastro : <span style="color: grey;"> {{auth::user()->name}} </span> </h3>

    <p>Informe o nome do Procedimento: <input class="form-control" type="text" name="name"></p> 
    <p>Informe o Valor do Procedimento: <input class="form-control" type="number" name="price"></p>

    <p>Identificação do Responsável: <input class="form-control" type="text" value="{{auth::user()->id}}" name="users_id"></p>

   

   
    <input class="btn btn-primary" type="submit" name="btnSalvar" value="Confirmar">

    <!-- Voltar para a lista de regioes //-->
  <a  class="btn btn-secondary" href="{{ route('procedimentos.index') }}">Voltar</a>

  </form>
</div>

@endsection 