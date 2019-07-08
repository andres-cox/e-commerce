<div class="card h-100">
    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <a href="#">{{$card->title}}</a>
        </h4>
        <h5>$ {{$card->price}}</h5>
        <p class="card-text">{{$card->description}}</p>
    </div>
    <div class="card-footer">
        <small class="text-muted">
            @for ($i = 0; $i < $card->rating; $i++) &#9733; @endfor
                @for ($i = 0; $i < 5-$card->rating; $i++) &#9734; @endfor
        </small>
    </div>
</div>