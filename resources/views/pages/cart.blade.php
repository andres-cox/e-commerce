@extends('layouts.nav')

@section('content')
<div class="container">

    <!-- Page Content -->
    <div class="row">

        @foreach ($products as $prd)
        <div class="col-lg-4">

            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="card-title">{{$prd->item_name}}</h4>
                    <h5>${{$prd->price}}</h5>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div class="row">

        <div class="col-lg-4 mt-3">
            <h2>Total:</h2>
            <h3>${{$total}}</h3>
        </div>
        <div class="col-lg-4 mt-3">
            <h4>Sera enviado a la dirección: </h4>
            <h5>{{$address}}</h5>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-4 mt-3">

            <a id="show" href="/purchased" class="btn btn-success">
                Confirmar</a>
        </div>
    </div>

</div>


@endsection