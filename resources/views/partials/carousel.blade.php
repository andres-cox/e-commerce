<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="{{route('categorie', ['categorie' => 'FERRETERÍA'])}}">
                <img src="http://placehold.it/1000x200" alt="..." height="250px" width="100%">
                <div class="carousel-caption d-none d-md-block">
                    <h5>FERRETERIA</h5>
                </div>
            </a>
        </div>

        <div class="carousel-item">
            <a href="{{route('categorie', ['categorie' => 'DEPORTES'])}}">
                <img src="http://placehold.it/1000x200" alt="..." height="250px" width="100%">
                <div class="carousel-caption d-none d-md-block">
                    <h5>DEPORTES</h5>
                </div>
            </a>
        </div>

        <div class="carousel-item">
            <a href="{{route('categorie', ['categorie' => 'JUGUETERÍA'])}}">
                <img src="http://placehold.it/1000x200" alt="..." height="250px" width="100%">
                <div class="carousel-caption d-none d-md-block">
                    <h5>JUGUETERIA</h5>
                </div>
            </a>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>