@extends('layout.app')

@section('page_content')
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="list-unstyled">
                    @foreach ($movies as $movie)
                
                        <li>{{$movie['title']}}</li>
                            
                    @endforeach
        
                </ul>

            </div>
        </div>
    </div>

@endsection