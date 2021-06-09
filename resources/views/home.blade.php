@extends('layouts.app')


@section('main_content')
    <main>

        <div class="container">
            <div class="comics-box">
    
        
                @foreach ($comics_array as $comic)
                <div class="comic-card">
                    <a href="{{ route('comic', ['id' => $comic['id']]) }}">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </a>
                    <h2>{{ $comic['series'] }}</h2>
                </div>
                @endforeach
    
                
                <a id="btn-azure" href="">LOAD MORE</a>
            </div>
        </div>

    </main>
@endsection