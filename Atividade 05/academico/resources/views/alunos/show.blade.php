@extends('principal')

@section('titulo', 'Exibir Aluno')

@section('conteudo')

  <h2>Nome: <span style="color: grey;">{{ $aluno->nome }}</span> </h2>

  <p>Código: <span style="color: grey;">{{ $aluno->id }}</span></p>
  <p>Nome: <span style="color: grey;">{{ $aluno->nome }}</span></p>
  <p>Email: <span style="color: grey;">{{ $aluno->email }}</span></p>

    @foreach ($cidades as $c)

     	@if($c->id == $aluno->cidade_id)
     		<p>Cidade <span style="color: grey;">{{ $c->nome }}</span></p>
     	@endif
     @endforeach


  <!-- Voltar para a lista de regioes //-->
  <a  class="btn btn-secondary" href="{{ route('alunos.index') }}">Voltar</a>

  
@endsection