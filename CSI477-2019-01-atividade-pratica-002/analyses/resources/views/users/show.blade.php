@extends('layouts.app')

@section('titulo', 'Área do Cliente')

@section('conteudo')

  <h3>Você está autenticado como: <span style="color: grey;">{{$user->name}}</span> </h3>

 <div class="row">
<div class="col-6">
     <h4>Seus procedimentos</h4>
    <table  method="post"  class="table table-bordered table-hover table-striped table-sm">
    <thead class="thead-inverse">
    <tr>
      <th>Procedimento</th>
      <th>Preço</th>
      
     

    </tr>
    </thead>
  @foreach ($procedures as $p)
      @if($p->users_id == $user->id)
        <tr>
          <td>{{ $p->name }} </td>
          <td><img src="https://img.icons8.com/ios-glyphs/64/000000/real.png" width="30" height="30">{{ $p->price }}</td>
        </tr>
        @endif

  @endforeach
  </table>
  </div>

  <div class="col-6">
    <div class="col-12">
    <h4>Solicitação de novos procedimentos </h4>
    </div>

     <div class="form-group">
        <select name="procedure_id" class="form-control">
          @foreach($procedures as $p)
            <option value="{{$p->id}}">{{$p->name}}- Preço:{{$p->price}}</option>
          @endforeach
        </select>
      </div>
  </div>
</div><!--fim do primeiro bloco  row -->

<br><br>
<div class="row">
  <div class="col-12">
    <h3>Procedimentos marcados</h3>
  </div>
  
</div>
  
@endsection