@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-4">
            <div class="card">
                <div class="card-header">Bienvenido!!!</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    Dirigete a <a style="text-decoration: none;" href="{{ url('/categorie') }}">categorias</a> para
                    enconctrar lo que buscas.

                </div>
            </div>
        </div>
    </div>
</div>
@endsection