@extends('principal')

@section('titulo', 'Cidades')


@section('conteudo')

<div class="col-8">



  <a  class="btn btn-light" href="{{ route('cidades.create') }}">Inserir Cidade</a>
  <br>
  <br>


    

  <table  method="post"  class="table table-bordered table-hover table-striped table-sm">
    <thead class="thead-inverse">
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Estado</th>
      <th>Visualizar</th>
      <th>Editar</th>
      <th>Excluir</th>

    </tr>
    </thead>
  @foreach ($cidades as $c)
        <tr>
          <td>{{ $c->id }}</td>
          <td>{{ $c->nome }} </td>

          <td>
            @foreach ($estados as $e)

              @if($e->id == $c->estado_id)
                   {{$e->nome}}
              @endif
            @endforeach
          </td>


          <td> <a href="{{ route('cidades.show', $c->id) }}"><img src="https://img.icons8.com/color/48/000000/search.png" width="20" height="20" ></a></td>
          <td> <a href="{{ route('cidades.edit', $c->id) }}"><img src="https://img.icons8.com/color/48/000000/edit.png" width="20" height="20" ></a></td>

          <td>


            <form method="post" action="{{ route('cidades.destroy', $c->id) }}" onsubmit="return confirm('Confirma exclusão da Cidade?');" >
            @csrf
            @method('DELETE')
            
            <input class="btn btn-danger" type="submit" value="Excluir">
           </form>

       </td>
          
        </tr>
        

  @endforeach
  </table>
  
</div>
@endsection


