@extends('paciente')

@section('titulo', 'Editar Exame')

@section('corpo')

@if(auth::user()->type == 3)

<form class="form-group" method="post" action="{{ route('testes.update', $testis->id) }}">

    @csrf
    @method('PATCH')

    <div class="col-4">

        <h4>{{auth::user()->name}} Selecione o procedimento desejado</h4>

    	<select name="procedures_id" class="form-control">
          @foreach($procedures as $p)
            <option value="{{$p->id}}"
                @if( $testis->procedures_id == $p->id)
                    selected
                 @endif
                 
    
                >{{$p->name}}- Preço:{{$p->price}}</option>
          @endforeach
        </select>

        <h4>Informe a data de realização do exame</h4>

     <input class="form-control" type="date" value="{{$testis->date}}" name="date">
     <br>  
    
    <input   class="btn btn-primary" type="submit" name="btnSalvar" value="Salvar">
    <!-- Voltar para a lista de estados //-->
     <a  class="btn btn-secondary" href="{{ route('testes.index') }}">Voltar</a>

    </div>

  </form>

@endif
  
@endsection