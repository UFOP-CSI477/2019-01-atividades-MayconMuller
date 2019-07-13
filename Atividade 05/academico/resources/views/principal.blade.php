<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Sistema Acadêmico')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"  href="./estilo.css">
     <!-- fonte usada no sistema -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
  </head>



  <body style="font-family: 'Aladin'; background-color: #f3f3f3;
  font-size: 16px; ">


    <!--Exibir mensagens ->campo:mensagem -->

    @if (Session::has('mensagem'))

    <div class="alert alert-success" role="alert">
         {{ Session::get('mensagem') }}
    </div>


    @endif


<nav class="navbar navbar-expand-md navbar-light bg-light">
 <div class="container">
  <div class="col-4">
<a href="/" class="navbar-brand"><img src="https://img.icons8.com/color/48/000000/motarboard.png" width="40" height="40" alt="" class="d-inline-block align-top"><span  style="font-size: 30px;">Sistema</span><span style="font-size: 30px;">Acadêmico</span></a>
</div>

<button class="navbar-toggler"type="button"  data-toggle="collapse" data-target="#menuPrincipal" name="button">

<span class="navbar-toggler-icon"> </span>
</button>

   <div class="collapse navbar-collapse" id="menuPrincipal">


      <ul class="navbar-nav ">

        <li class="nav-item">
              <a href="/" class="nav-link">Home</a>
        </li>

        <li class="nav-item">
              <a href="/welcome" class="nav-link">About</a>
        </li>

        <li class="nav-item">
              <a href="/alunos/listar" class="nav-link">Listar</a>
        </li>
        <li class="nav-item">
              <a href="/estados" class="nav-link">Estados</a>
        </li>

        <li class="nav-item">
              <a href="/regioes" class="nav-link">Região</a>
        </li>

        <li class="nav-item">
              <a href="/cidades" class="nav-link">Cidades</a>
        </li>

        <li class="nav-item">
              <a href="/alunos" class="nav-link">Alunos</a>
        </li>


       

        <li class="nav-item dropdown"> <a  class="nav-link dropdown-toggle"
           href="#" data-toggle="dropdown">Perfil</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Editar Perfil</a>
        <a class="dropdown-item" href="pag-Inicial.html">Sair</a>

      </div>
         </li>

      </ul>

   </div>
   </div><!--termino do container -->
    </nav> <!--termino da barra de nevegação -->







  
   

    <!-- Conteúdo - parte central //-->
    <div style=" margin: 90px 20px 20px 20px; padding: 10px; background: #fff;
  border-radius: 15px;">

    @yield('conteudo')

    </div>





 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
