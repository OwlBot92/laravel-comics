@extends('layouts.app')


@section('main_content')
    <main>

        <div class="container">
            <div class="comics-box">
    
        
                @foreach ($comics_array as $comic)
                <div class="comic-card">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <h2>{{ $comic['series'] }}</h2>
                </div>
                @endforeach
    
                
                <a href="">LOAD MORE</a>
            </div>
        </div>

    </main>
@endsection