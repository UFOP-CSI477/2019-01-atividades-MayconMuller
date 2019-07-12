@extends('principal')

@section('titulo', 'Inserir Estado')



@section('conteudo')

  <div class="col-6">

  <form class="form-group" method="post" action="{{ route('estados.store') }}">

    @csrf

    <p>Nome: <input class="form-control" type="text" name="nome"></p>
    <p>Sigla: <input  class="form-control" type="text" name="sigla"></p>

    <input  class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">

  </form>
</div>

@endsection
