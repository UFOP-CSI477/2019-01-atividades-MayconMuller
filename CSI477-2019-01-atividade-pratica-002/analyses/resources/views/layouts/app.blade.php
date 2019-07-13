<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Analises Laboratoriais') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <!-- fonte usada no sistema -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="font-family: 'Aladin'; background-color: #f3f3f3;
  font-size: 16px; ">


    <!--Exibir mensagens ->campo:mensagem -->
    @if (Session::has('mensagem'))
    <div class="alert alert-success" role="alert">
         {{ Session::get('mensagem') }}
    </div>
    @endif

    @if (Session::has('mensagemDanger'))
    <div class="alert alert-danger" role="alert">
         {{ Session::get('mensagemDanger') }}
    </div>
    @endif



    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a href="/home" class="navbar-brand"><img src="https://img.icons8.com/color/48/000000/treatment-plan.png" width="40" height="40" alt="" class="d-inline-block align-top"><span  style="font-size: 30px;">Análises</span><span style="font-size: 30px;">Laboratorias</span></a>


               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                          <!--Área de acesso por todos usuários-->

                        <li class="nav-item">
                            <a href="/procedimentos" class="nav-link">Area Geral</a>
                         </li>



                    @if (Auth::user() == null)
                       

                                   <li class="nav-item">
                                        <a href="{{ route('login')}}" class="nav-link"> Área do Paciente</a>
                                    </li> 

                                    <li class="nav-item">
                                        <a href="{{ route('login')}}" class="nav-link">Área Administrativa</a>
                                    </li>
     
                        @endif

                           <!-- se o usuário estiver logado -->
                            @auth
                                 @if(Auth::user()->type == 1 || Auth::user()->type == 2)
                                    <li class="nav-item">
                                        <a href="/administrador" class="nav-link">Área Administrativa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/pacientes" class="nav-link"> Área do Paciente</a>
                                    </li>

                                       @elseif(Auth::user()->type==3)
                                    <li class="nav-item">
                                        <a href="/pacientes" class="nav-link"> Área do Paciente</a>
                                    </li>
                                     
                                     <li class="nav-item">
                                        <a href="/administrador" class="nav-link">Área Administrativa</a>
                                    </li>  
                                 @endif
                            @endauth

                              <li class="nav-item">
                              <a href="/about" class="nav-link">About</a>
                        </li>      

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   
                                     {{ Auth::user()->name }} || 
                                     @if(Auth::user()->type == 1)
                                     Administrador 
                                    @elseif(Auth::user()->type==2)
                                        Operador
                                    @else
                                        paciente
                                    @endif
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Conteúdo - parte central //-->
        <div style=" margin: 30px; padding: 10px; background: #fff;
        border-radius: 15px;">

        @yield('conteudo')

        </div>
 
       
    </div>
</body>
</html>
