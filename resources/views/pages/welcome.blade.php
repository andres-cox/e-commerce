@extends('layouts.app')
@section('content')
@include('partials.carousel')
<div class="container">

    <div class="row my-4">
        @foreach ($product as $card)

        <div class="col-lg-4 col-md-6 mb-4">

            @include('partials.card')

        </div>

        @endforeach

    </div>

    @include('partials.category')

    <div class="row my-4">
        @foreach ($recommended as $item)

        <div class="col-lg-2 col-md-4 mb-2">

            @include('partials.simplecard')

        </div>
        @endforeach
    </div>

</div>
@endsection