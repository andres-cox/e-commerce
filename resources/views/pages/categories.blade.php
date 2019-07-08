@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-lg-3">
            <h3 class="my-4">Categories</h3>
            <ul class="list-group">
                @foreach ($categories as $item)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$item->title}}
                    <span class="badge badge-primary badge-pill">12</span>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-9 mt-4">

            @foreach (array(1,1,1,1,1,1) as $card)
            <a href="{{ url('/product') }}" class="btn btn-default">

                @include('partials.rowcard')
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection