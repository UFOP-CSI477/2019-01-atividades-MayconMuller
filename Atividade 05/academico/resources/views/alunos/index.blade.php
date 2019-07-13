@extends('principal')

@section('titulo', 'Alunos')


@section('conteudo')

<div class="col-8">



  <a  class="btn btn-primary" href="{{ route('alunos.create') }}">Inserir Novo ALuno</a>
  <br>
  <br>

  <table  method="post"  class="table table-bordered table-hover table-striped table-sm">
    <thead class="thead-inverse">
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>E-Mail</th>
      <th>Cidade</th>
      <th>Visualizar</th>
      <th>Editar</th>
      <th>Excluir</th>

    </tr>
    </thead>
  @foreach ($alunos as $a)
        <tr>
          <td>{{ $a->id }}</td>
          <td>{{ $a->nome }} </td>
          <td>{{ $a->email }} </td>

          <td>
            @foreach ($cidades as $c)

              @if($c->id == $a->cidade_id)
                   {{$c->nome}}
              @endif
            @endforeach
          </td>


          <td> <a href="{{ route('alunos.show', $a->id) }}"><img src="https://img.icons8.com/color/48/000000/search.png" width="20" height="20" ></a></td>
          <td> <a href="{{ route('alunos.edit', $a->id) }}"><img src="https://img.icons8.com/color/48/000000/edit.png" width="20" height="20" ></a></td>

          <td>


            <form method="post" action="{{ route('alunos.destroy', $a->id) }}" onsubmit="return confirm('Confirma exclusão do Aluno?');" >
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


