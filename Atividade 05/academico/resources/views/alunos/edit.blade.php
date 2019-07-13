@extends('principal')

@section('titulo', 'Editar Aluno')


@section('conteudo')
<h2>Aluno: <span style="color: grey"> {{ $aluno->nome }}</span> </h2>

 @foreach ($cidades as $c)

        @if($c->id == $aluno->cidade_id)
            <h3>Cidade: <span style="color: grey"> {{ $c->nome }}</span> </h3>
        @endif
     @endforeach



<form class="form-group" method="post" action="{{ route('alunos.update', $aluno->id) }}">

    @csrf
    @method('PATCH')

    <div class="col-4">
    	
   
    <p>Nome: <input  class="form-control" type="text" name="nome" value="{{$aluno->nome}}"></p>
    <p>Identificador: <input class="form-control" type="text" name="Identificador" value="{{$aluno->id}}"></p>
    <p>Email: <input class="form-control" type="text" name="email" value="{{$aluno->email}}"></p>

            <div class="form-group">
                <label for="cidade_id">Cidade</label>
                <select name="cidade_id" class="form-control">
                    @foreach($cidades as $c)
                        <option value="{{$c->id}}">{{$c->id}} | {{$c->nome}}</option>
                    @endforeach
                </select>
            </div>


    <input   class="btn btn-primary" type="submit" name="btnSalvar" value="Salvar">
    <!-- Voltar para a lista de cidades //-->
     <a  class="btn btn-secondary" href="{{ route('alunos.index') }}">Voltar</a>

    </div>

  </form>
@endsection