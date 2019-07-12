@extends('principal')

@section('titulo', 'Exibir Estado')

@section('conteudo')

  <h2>Estado: <span style="color: grey;">{{ $estado->nome }}</span> </h2>

  <p>Código: <span style="color: grey;">{{ $estado->id }}</span></p>
  <p>Nome: <span style="color: grey;">{{ $estado->nome }}</span></p>
  <p>Sigla: <span style="color: grey;">{{ $estado->sigla }}</span></p>


  <!-- Voltar para a lista de estados //-->
  <a  class="btn btn-secondary" href="{{ route('estados.index') }}">Voltar</a>

  <!-- Editar o estado corrente //-->
  <a  class="btn btn-primary" href="{{ route('estados.edit', $estado->id) }}">Editar</a>

  <!-- Excluir o estado corrente //-->
  <form method="post" action="{{ route('estados.destroy', $estado->id) }}" onsubmit="return confirm('Confirma exclusão do estado?');" >

    @csrf
    @method('DELETE')
    <br>
    <input class="btn btn-danger" type="submit" value="Excluir">

  </form>

@endsection