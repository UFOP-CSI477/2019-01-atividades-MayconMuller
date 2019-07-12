@extends('principal')

@section('titulo', 'Inserir Região')



@section('conteudo')

  <div class="col-6">

  <form class="form-group" method="post" action="{{ route('regioes.store') }}">

    @csrf

    <p>Nome da Nova Região: <input class="form-control" type="text" name="nome"></p>
   

    <input class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">

    <!-- Voltar para a lista de regioes //-->
  <a  class="btn btn-secondary" href="{{ route('regioes.index') }}">Voltar</a>

  </form>
</div>

@endsection
