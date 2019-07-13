@extends('principal')

@section('titulo', 'Estados')


@section('conteudo')

<div class="col-8">

  <a  class="btn btn-light" href="{{ route('estados.create') }}">Inserir Estado</a>
  <br>
  <br>

  <table  class="table table-bordered table-hover table-striped table-sm">
    <thead class="thead-inverse">
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Sigla</th>
      <th>Visualizar</th>
      <th>Cidades</th>

    </tr>
    </thead>
  @foreach ($estados as $e)
    <tr>
      <td>{{ $e->id }}</td>
      <td>{{ $e->nome }} </td>
      <td>{{ $e->sigla }}</td>
      <td> <a href="{{route('estados.show', $e->id)}}"><img src="https://img.icons8.com/color/48/000000/search.png" width="20" height="20" ></a></td>
      <td><a href="{{route('cidades.index')}} ">Ver</a></td>
    </tr>
  @endforeach
  </table>
   
</div>
@endsection
