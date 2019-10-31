@extends('layouts.nav')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-3">
            <h3 class="my-4">Categories</h3>
            <ul class="list-group">
                @foreach ($categories as $item)
                <a style="text-decoration: none;" href="{{route('categorie', ['categorie' => $item->title])}}">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$item->title}}
                        <span class="badge badge-primary badge-pill">{{$item->amount}}</span>
                    </li>
                </a>
                @endforeach
            </ul>
        </div>
        <!-- Page Content -->
        <div class="col-lg-9">
            @foreach ($product as $prd)

            <div class="card mt-4">
                <div class="card-body">
                    <h3 class="card-title">{{$prd->item_name}}</h3>
                    <h4>${{$prd->price}}</h4>
                    <small class="text-warning">
                        @for ($i = 0; $i < $prd->rate; $i++) &#9733; @endfor
                            @for ($i = 0; $i < 5-$prd->rate; $i++) &#9734; @endfor
                    </small>
                    {{$prd->rate}}.0 stars
                    <br>
                    <br>
                    <hr>
                    <div id="shopInfo" class="alert alert-success alert-dismissible" role="alert">
                        Se añadio tu compra!!!. Puedes ver en el <a href="/cart" class=" alert-link">carrito</a> tus
                        compras.
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection