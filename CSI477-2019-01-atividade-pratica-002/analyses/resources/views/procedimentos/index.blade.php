@extends('administrador')

@section('titulo', 'Procedimentos')





@if (Auth::user() == null || Auth::user()->type == 3)
  @section('conteudo')

    <div class="col-8">


        <h2>Lista de Procedimentos que podem ser Realizados !</h2>
        <br>

      <table  method="post"  class="table table-bordered table-hover table-striped table-sm">
        <thead class="thead-inverse">
        <tr>
          <th>Procedimento</th>
          <th>Preço</th>
          
         

        </tr>
        </thead>
      @foreach ($procedures as $p)
            <tr>
              <td>{{ $p->name }}</td>
              <td><img src="https://img.icons8.com/ios-glyphs/64/000000/real.png" width="30" height="30"> {{ $p->price }} </td>
            </tr>
            

      @endforeach
      </table>
      
    </div>
   @endsection 

  @elseif (Auth::user()->type == 2)
@section('corpo')

  <div class="col-8">


        <h2>Lista de Procedimentos que podem ser Realizados !</h2>
        <br>

      <table  method="post"  class="table table-bordered table-hover table-striped table-sm">
        <thead class="thead-inverse">
        <tr>
          <th>Procedimento</th>
          <th>Preço</th>
          <th>Alterar o preço</th>
          
         

        </tr>
        </thead>
      @foreach ($procedures as $p)
            <tr>
              <td>{{ $p->name }} </td>
              <td><img src="https://img.icons8.com/ios-glyphs/64/000000/real.png" width="30" height="30"> {{ $p->price }} </td>

               <td> <a href="{{ route('procedimentos.edit', $p->id) }}"><img src="https://img.icons8.com/color/48/000000/edit.png" width="20" height="20"> </a></td>


            </tr>
            
            

      @endforeach
      </table>
      
    </div>

  @endsection
    @elseif (Auth::user()->type == 1)
    @section('corpo')

  <div class="col-8">


        <h2>Lista de Procedimentos que podem ser Realizados !</h2>
        <br>

        <a  class="btn btn-secondary" href="{{ route('procedimentos.create') }}">Inserir Procedimento</a>
        <br>
        <br>

      <table  method="post"  class="table table-bordered table-hover table-striped table-sm">
        <thead class="thead-inverse">
        <tr>
          <th>Procedimento</th>
          <th>Preço</th>
          <th>Editar</th>
          <th>Remover</th>
          
         

        </tr>
        </thead>
      @foreach ($procedures as $p)
            <tr>
              <td>{{ $p->name }} </td>
              <td><img src="https://img.icons8.com/ios-glyphs/64/000000/real.png" width="30" height="30"> {{ $p->price }} </td>

               <td> <a href="{{ route('procedimentos.edit', $p->id) }}"><img src="https://img.icons8.com/color/48/000000/edit.png" width="20" height="20"> </a></td>


               <td>


            <form method="post"  action="{{ route('procedimentos.destroy', $p->id) }}"  onsubmit="return confirm('Confirma exclusão do Procedimento?');" >
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


@endif





