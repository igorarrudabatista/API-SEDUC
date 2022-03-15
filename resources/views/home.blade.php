@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Olá,   {{ Auth::user()->name }}. Seja Bem vindo!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <h4> Painel de Administração SEDUC / EducarTech API. </h4>
<br> 
                    <a href="/dashboard" class="btn btn-primary" role="button"> Clique para acessar</a>
                    <a href="/api/docs" class="btn btn-info" role="button"> Acesso a Documentação</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
