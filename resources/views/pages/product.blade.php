@extends('layouts.app')

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
                <img class="card-img-top img-fluid" src="{{$prd->image}}" alt="">
                <div class="card-body">
                    <h3 class="card-title">{{$prd->item_name}}</h3>
                    <h4>${{$prd->price}}</h4>
                    <p class="card-text">{{$prd->description}}</p>
                    <small class="text-warning">
                        @for ($i = 0; $i < $prd->rate; $i++) &#9733; @endfor
                            @for ($i = 0; $i < 5-$prd->rate; $i++) &#9734; @endfor
                    </small>
                    {{$prd->rate}}.0 stars
                    <br>
                    <br>
                    <form action="/products" method="post">
                        <input type="hidden" name="item_code" value="{{$prd->item_code}}">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-success" value="Añadir al carrito">
                        {{-- <a id="show" href="{{route('order', ['item' => $prd->item_code])}}" class="btn
                        btn-success">Añadir
                        al carrito</a> --}}
                    </form>
                </div>
            </div>
            @endforeach
            <!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Product Reviews
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore,
                        similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat
                        laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                    <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore,
                        similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat
                        laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                    <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore,
                        similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat
                        laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                    <small class="text-muted">Posted by Anonymous on 3/1/17</small>

                </div>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

    </div>

</div>
<!-- /.container -->
</div>
</div>

@endsection