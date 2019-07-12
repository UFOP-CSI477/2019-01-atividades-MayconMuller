@extends('principal')

@section('titulo', 'Regioes')


@section('conteudo')

<div class="col-8">


  <a  class="btn btn-light" href="{{ route('regioes.create') }}">Inserir Região</a>
  <br>
  <br>


    

  <table  method="post"  class="table table-bordered table-hover table-striped table-sm">
    <thead class="thead-inverse">
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Visualizar</th>
      <th>Editar</th>
      <th>Excluir</th>
      

    </tr>
    </thead>
  @foreach ($regioes as $r)
    <tr>
      <td>{{ $r->id }}</td>
      <td>{{ $r->nome }} </td>
      <td> <a href="{{ route('regioes.show', $r->id) }}"><img src="https://img.icons8.com/color/48/000000/search.png" width="20" height="20" ></a></td>

      <td> <a href="{{ route('regioes.edit', $r->id) }}"><img src="https://img.icons8.com/color/48/000000/edit.png" width="20" height="20" ></a></td>

      <td>


    <form method="post" action="{{ route('regioes.destroy', $r->id) }}" onsubmit="return confirm('Confirma exclusão da região?');" >
    @csrf
    @method('DELETE')
    
    <input class="btn btn-danger" type="submit" value="Excluir">
  </form>

       </td>
       
    </tr>
  @endforeach
  </table>
  <h2>Região: <span style="color: grey"> {{ $r->id }}</span> </h2>
</div>
@endsection


