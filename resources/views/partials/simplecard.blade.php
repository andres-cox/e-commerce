<div class="card h-100">
    <a href="{{route('product', ['item_code' => $item->item_code])}}"><img class="card-img-top"
            src="http://placehold.it/700x400" alt=""></a>
    <div class="card-body">
        <h5 class="card-title p-1">$ {{$item->price}}</h5>
        <h7 style="text-transform: lowercase;" class="card-title p-1">{{$item->item_name}}</h7>
    </div>
</div>