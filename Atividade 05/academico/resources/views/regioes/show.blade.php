@extends('principal')

@section('titulo', 'Exibir Região')

@section('conteudo')

  <h2>Região: <span style="color: grey;">{{ $regiao->nome }}</span> </h2>

  <p>Código: <span style="color: grey;">{{ $regiao->id }}</span></p>
  <p>Nome: <span style="color: grey;">{{ $regiao->nome }}</span></p>


  <!-- Voltar para a lista de regioes //-->
  <a  class="btn btn-secondary" href="{{ route('regioes.index') }}">Voltar</a>

  
@endsection