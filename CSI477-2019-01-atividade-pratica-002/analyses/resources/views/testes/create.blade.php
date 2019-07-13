@extends('paciente')

@section('titulo', 'Marcar Procedimento')



@if (Auth::user() == null || Auth::user()->type == 3)
  @section('corpo')

    <div class="col-8">


        <h2>Solicitação de Exames!</h2>
        <br>

  <form class="form-group"  action="{{route('testes.store')}}" method="post">
    @csrf

    <h4>{{auth::user()->name}} Selecione o procedimento desejado</h4>
     
        <select name="procedures_id" class="form-control">
          @foreach($procedures as $p)
            <option value="{{$p->id}}">{{$p->name}}- Preço:{{$p->price}}</option>
          @endforeach
        </select>
     

      <h4>Informe a data de realização do exame</h4>

     <input class="form-control" type="date" name="date">
     <br>
   
    <h4>Identificação do Responsável</h4> <input class="form-control" type="text" value="{{auth::user()->id}}" name="users_id" readonly>

   

   <br>
    <input class="btn btn-primary" type="submit" name="btnSalvar" value="Confirmar">

    <!-- Voltar para a lista de regioes //-->
  <a  class="btn btn-secondary" href="{{ route('testes.index') }}">Voltar</a>

  </form>
</div>


  





      
      
    </div>
   @endsection 


   @endif







