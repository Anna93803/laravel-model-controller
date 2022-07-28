@extends('layout.app')

@section('page_content')
    <div class="container py-5">
        <h1 class="text-center">Movies</h1>

        <div class="row row-cols-2 g-2">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card bg-warning" >
                        <div class="card-body">
                            <h5 class="card-title fs-3 fw-bold">{{$movie['title']}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$movie['original_title']}}</h6>
                            <p class="card-text">{{$movie['nationality'] . " " . $movie['vote']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>   
    </div>

@endsection