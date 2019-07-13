@extends('principal')

@section('titulo', 'Inserir Cidade')



@section('conteudo')

<div class="col-6">

  <form class="form-group"  action="{{route('cidades.store')}}" method="post">
    @csrf

    <p>Nome da cidade: <input class="form-control" type="text" name="nome"></p>

    <div class="form-group">
				<label for="estado_id">Estado</label>
				<select name="estado_id" class="form-control">
					@foreach($estados as $e)
						<option value="{{$e->id}}">{{$e->id}} | {{$e->nome}}-{{$e->sigla}}</option>
					@endforeach
				</select>
			</div>
   
    <input class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">

    <!-- Voltar para a lista de regioes //-->
  <a  class="btn btn-secondary" href="{{ route('cidades.index') }}">Voltar</a>

  </form>
</div>
@endsection
