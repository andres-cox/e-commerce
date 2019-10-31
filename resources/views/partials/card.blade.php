<div class="card h-100">
    <a href="{{route('product', ['item_code' => $card->item_code])}}"><img class="card-img-top" src="{{$card->image}}"
            alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <a style="text-decoration: none;"
                href="{{route('product', ['item_code' => $card->item_code])}}">{{$card->item_name}}</a>
        </h4>
        <h5>$ {{$card->price}}</h5>
        <p class="card-text">{{$card->description}}</p>
    </div>
    <div class="card-footer">
        <small class="text-muted">
            @for ($i = 0; $i < $card->rate; $i++) &#9733; @endfor
                @for ($i = 0; $i < 5-$card->rate; $i++) &#9734; @endfor
        </small>
    </div>
</div>