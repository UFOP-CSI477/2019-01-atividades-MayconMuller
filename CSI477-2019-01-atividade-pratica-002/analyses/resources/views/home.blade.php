@extends('layouts.app')

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  
                 <a href="/home" class="navbar-brand"><img src="https://img.icons8.com/color/48/000000/treatment-plan.png" width="40" height="40" alt="" class="d-inline-block align-top"><span  style="font-size: 25px;">Analyses </a> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

         <div class="jumbotron jumbotron-fluid" style="border-radius: 15px;">
            <div class="container">
                <h4 class="display-4">Sistemas de Análises Laboratoriais</h4>
                    <p class="lead">Mantenha sempre o controle de seus exames, e veja para onde está indo seu dinheiro!</p>
            </div>
        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
