<div class="card-group">
    @foreach ($categories as $item)
    <div class="px-0 mx-0 col-lg-2 col-md-4 col-sm-6">
        <a style="text-decoration: none;" href="{{route('categorie', ['categorie' => $item->title])}}">
            <div class="card border-secondary btn btn-outline-secondary text-center py-auto">
                <i class="p-3 fas fa-{{$item->icon}} fa-5x"></i>
                <h7 class="card-title p-1">{{$item->title}}</h7>
            </div>
        </a>
    </div>
    @endforeach
</div>