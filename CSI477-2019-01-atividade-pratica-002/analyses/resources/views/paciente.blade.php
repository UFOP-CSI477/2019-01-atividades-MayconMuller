@extends('layouts.app')

@section('conteudo')
<div class="container">

      
   @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
                          
    
</div>
@endsection
