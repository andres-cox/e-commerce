@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-lg-3">
            <h3 class="my-4">Categorias</h3>
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
        <div class="col-lg-9 mt-4">

            @foreach ($items as $card)
            <a href="{{route('product', ['item_code' => $card->item_code])}}" class="btn btn-default">
                @include('partials.rowcard')
            </a>
            @endforeach

        </div>
    </div>
</div>
@endsection