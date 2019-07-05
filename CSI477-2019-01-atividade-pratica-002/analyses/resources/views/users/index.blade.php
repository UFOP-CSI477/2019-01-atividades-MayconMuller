@extends('administrador')

@section('titulo', 'Usuários')

@section('corpo')

  @if(auth::user()->type == 1)
<div class="col-8">


        <h2>Lista de Usuários Cadastrados!</h2>
        <br>

        <a  class="btn btn-secondary" href="{{ route('register') }}">Cadastrar Usuário</a>
        <br>
        <br>

      <table  method="post"  class="table table-bordered table-hover table-striped table-sm">
        <thead class="thead-inverse">
        <tr>
          <th>Identificador</th>
          <th>Nome</th>
          <th>Tipo</th>
          <th>Data de Cadastro</th>
          <th>Editar</th>
          <th>Remover</th>
          
         

        </tr>
        </thead>
      @foreach ($usuarios as $u)
            <tr>
              <td>{{ $u->id }} </td>
              <td>{{ $u->name }} </td>

                   @if($u->type == 1)
             		 	<td>{{ $u->type }} - Administrador</td>
                   @elseif($u->type == 2)
              			<td>{{ $u->type }} - Operador</td>
                   @else
                 		<td>{{ $u->type }} - Cliente</td>
                    @endif  


              <td>{{ $u->created_at }}</td>

               <td> <a href="{{ route('users.edit', $u->id) }}"><img src="https://img.icons8.com/color/48/000000/edit.png" width="20" height="20"> </a></td>


               <td>


            <form method="post"  action="{{ route('users.destroy', $u->id) }}" onsubmit="return confirm('Confirma exclusão do Usuário?');" >
            @csrf
            @method('DELETE')
            
            <input class="btn btn-danger" type="submit" value="Excluir">
           </form>

          </td>


            </tr>
            
            

      @endforeach
      </table>
      
    </div>
@endif

@endsection
