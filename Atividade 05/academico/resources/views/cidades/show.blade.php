@extends('principal')

@section('titulo', 'Exibir Cidade')

@section('conteudo')

  <h2>Cidade: <span style="color: grey;">{{ $cidade->nome }}</span> </h2>

  <p>Código: <span style="color: grey;">{{ $cidade->id }}</span></p>
  <p>Nome: <span style="color: grey;">{{ $cidade->nome }}</span></p>

    @foreach ($estados as $e)

     	@if($e->id == $cidade->estado_id)
     		<p>Estado Pertencente <span style="color: grey;">{{ $e->nome }}</span></p>
     	@endif
     @endforeach


  <!-- Voltar para a lista de regioes //-->
  <a  class="btn btn-secondary" href="{{ route('cidades.index') }}">Voltar</a>

  
@endsection