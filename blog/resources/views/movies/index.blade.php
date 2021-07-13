<div class="movies">
    <section class="container">
        <h2 class="section_title">
            Movies Page
        </h2>
        <div class="movies_container">
            @foreach($movies as $movie)
            <div class="movie">
                <span>{{$movie->title}}</span>
                <span>{{$movie->original_title}}</span>
                <span>{{$movie->nationality}}</span>
                <span>{{$movie->date}}</span>
                <span>{{$movie->vote}}</span>
            </div>
            @endforeach
        </div>
    </section>
</div>