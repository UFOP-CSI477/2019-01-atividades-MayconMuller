@extends('paciente')

@section('titulo', 'Procedimentos')





@if (Auth::user() == null || Auth::user()->type == 3)
  @section('corpo')

    


        <h2>{{auth::user()->name}} Esses são seus procedimentos agendados!</h2>
        <br>

      <table  method="post"  class="table table-bordered table-hover table-striped table-sm">
        <thead class="thead-inverse">
        <tr>
          <th>Procedimento</th>
          <th>Preço</th>
          <th>Data Marcada</th>
          <th>Editar</th>
          <th>Remover</th>
          

        </tr>
        </thead>
       
      @foreach ($testes as $t)
            <tr>
              <td>{{$t->procedures->name}}</td>
              <td><img src="https://img.icons8.com/ios-glyphs/64/000000/real.png" width="30" height="30"> {{$t->procedures->price}} </td>

              <td>{{$t->date}}</td>

               <td> <a href="{{ route('testes.edit', $t->id) }}"><img src="https://img.icons8.com/color/48/000000/edit.png" width="20" height="20"> </a></td>


               <td>


            <form method="post"  action="{{ route('testes.destroy', $t->id) }}"  onsubmit="return confirm('Confirma exclusão do Exame ?');" >
            @csrf
            @method('DELETE')
            
            <input class="btn btn-danger" type="submit" value="Excluir">
           </form>

           

         </td>


          </tr> 

          
            
      @endforeach

       <tr>

          <td class="font-weight-bold" colspan="3">Valor dos exames: </td>
          <td  class="font-weight-bold" colspan="2">{{$price}}</td> 
        </tr>

          <tr>
          <td class="font-weight-bold" colspan="3">Total de exames: </td>
          <td  class="font-weight-bold" colspan="2"> {{$count}} </td>
        </tr>



      


      </table>
      
   
   @endsection 


   @endif







