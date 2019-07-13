@extends('layouts.app')

@section('conteudo')

<!-- Barra secundário para o adminstrador -->
<nav style="border-radius: 30px;" class=" navbar navbar-expand-sm navbar-dark bg-dark">
 <div class="container">
  <div class="col-4">
<a href="#" class="navbar-brand">Área do Paciente 
  <img src="https://img.icons8.com/color/48/000000/syringe.png" width="30" height="30" alt="" class="d-inline-block align-top">
</a>
</div>

<button class="navbar-toggler"type="button"  data-toggle="collapse" data-target="#menuPrincipal" name="button">

<span class="navbar-toggler-icon"></span>
</button>

   <div class="collapse navbar-collapse">


      <ul class="navbar-nav ">
         
  
         <li class="nav-item">
              <a href="/procedimentos" class="nav-link ">Procedimentos</a>
         </li>

          @if (Auth::user() != null && auth::user()->type == 3)
          <li class="nav-item">
              <a href="{{ route('testes.index') }}" class="nav-link ">Procedimentos Agendados</a>
         </li>
         <li class="nav-item">
              <a href="{{ route('testes.create')}}" class="nav-link ">Solicitar procedimentos</a>
         </li>
         @endif

         @if(Auth::user() != null && auth::user()->type != 3)
           <li class="nav-item">
              <a href="#" class="navbar-brand">Ops... Você não tem acesso a operações de Clientes</a>
          </li>
         @endif



      </ul>

   </div>
  
    </div><!--termino do container -->
    </nav> <!--termino da barra de nevegação -->
    <br><br>
   @yield('corpo')

@endsection


