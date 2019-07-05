@extends('layouts.app')

@section('conteudo')

<!-- Barra secundário para o adminstrador -->
<nav style="border-radius: 30px;" class=" navbar navbar-expand-sm navbar-dark bg-dark">
 <div class="container">
  <div class="col-4">
<a href="#" class="navbar-brand">Operações Administrativas 
  <img src="https://img.icons8.com/color/48/000000/combo-chart.png" width="30" height="30" alt="" class="d-inline-block align-top">
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

          @if (Auth::user() != null && auth::user()->type == 1)
          <li class="nav-item">
              <a href="/users" class="nav-link ">Gerenciar Usuários</a>
         </li>
         @endif

         @if(Auth::user() != null && auth::user()->type == 3)
           <li class="nav-item">
              <a href="#" class="navbar-brand">Ops... Você não tem acesso a operações administrativas</a>
          </li>
         @endif



      </ul>

   </div>
  
    </div><!--termino do container -->
    </nav> <!--termino da barra de nevegação -->
    <br><br>
   @yield('corpo')

@endsection


