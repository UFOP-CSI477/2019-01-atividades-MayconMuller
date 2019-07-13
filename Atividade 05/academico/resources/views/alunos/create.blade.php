@extends('principal')

@section('titulo', 'Inserir Aluno')



@section('conteudo')

<div class="col-6">

  <form class="form-group"  action="{{route('alunos.store')}}" method="post">
    @csrf

    <p>Nome do Aluno: <input class="form-control" type="text" name="nome"></p>
    <p>Email: <input class="form-control" type="text" name="email"></p>
   

    <div class="form-group">
				<label for="cidade_id">Cidade</label>
				<select name="cidade_id" class="form-control">
					@foreach($cidades as $c)
						<option value="{{$c->id}}">{{$c->id}} | {{$c->nome}}</option>
					@endforeach
				</select>
			</div>
   
    <input class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">

    <!-- Voltar para a lista de regioes //-->
  <a  class="btn btn-secondary" href="{{ route('alunos.index') }}">Voltar</a>

  </form>
</div>
@endsection
