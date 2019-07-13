@extends('principal')

@section('titulo', 'Editar Cidade')


@section('conteudo')
<h2>Cidade: <span style="color: grey"> {{ $cidade->nome }}</span> </h2>

 @foreach ($estados as $e)

        @if($e->id == $cidade->estado_id)
            <h3>Estado: <span style="color: grey"> {{ $e->nome }}</span> </h3>
        @endif
     @endforeach



<form class="form-group" method="post" action="{{ route('cidades.update', $cidade->id) }}">

    @csrf
    @method('PATCH')

    <div class="col-4">
    	
   
    <p>Nome: <input  class="form-control" type="text" name="nome" value="{{$cidade->nome}}"></p>
    <p>Identificador: <input class="form-control" type="text" name="Identificador" value="{{$cidade->id}}"></p>

            <div class="form-group">
                <label for="estado_id">Estado</label>
                <select name="estado_id" class="form-control">
                    @foreach($estados as $e)
                        <option value="{{$e->id}}">{{$e->id}} | {{$e->nome}}-{{$e->sigla}}</option>
                    @endforeach
                </select>
            </div>


    <input   class="btn btn-primary" type="submit" name="btnSalvar" value="Salvar">
    <!-- Voltar para a lista de cidades //-->
     <a  class="btn btn-secondary" href="{{ route('cidades.index') }}">Voltar</a>

    </div>

  </form>
@endsection