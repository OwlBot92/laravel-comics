@extends('layouts.app')



@section('main_content')
    <div class="container white">
        <div class="blue-img-stripe">
            <img src="{{$selected_comic['thumb']}}" alt="">
        </div>

        <div class="description-box">
            <div class="upper-box">
                <div class="left-side">
                    <h2>{{$selected_comic['title']}}</h2>
                    <div class="availability-box">
                        <div class="left-side">
                            <span id="price">U.S Price <span>{{$selected_comic['price']}}</span></span>
                            <span id="available">AVAIABLE</span>
                        </div>

                        <div class="right-side">
                            <span>Check Availability</span>
                        </div>
                    </div>

                    <p>
                        {{$selected_comic['description']}}
                    </p>
                </div>

                <div class="right-side">
                    <h5>ADVERTISEMENT</h5>
                    <img src="{{ asset('img/imadv.jpg') }}" alt="">
                </div>
            </div>

            <div class="lower-box">
                <div class="wrapper">
                    <div class="left-side">
                        <h3>Talent</h3>

                        <div class="artists-box">
                            <div class="art-by">
                                <div class="h-box">
                                    <h5>Art by:</h5>
                                </div>

                                <div class="artists-array">

                                    @foreach ($selected_comic['artists'] as $artist)
                                        @if (!$loop->last)    
                                            <span>{{$artist}} <span id="comma">, </span></span> 
                                        @endif

                                        <span>{{$artist}} </span>
                                    @endforeach

                                </div>

                            </div>

                            <div class="written-by">
                                <div class="h-box">
                                    <h5>Written by:</h5>
                                </div>

                                <div class="writers-array">
                                     @foreach ($selected_comic['writers'] as $writer)
                                        @if (!$loop->last)    
                                            <span>{{$writer}}<span id="comma">, </span></span>
                                        @endif

                                        <span>{{$writer}} </span>
                                    @endforeach
                                </div>

                            </div>

                        </div>
                    </div>
    
                    <div class="right-side">
                        <h3>Specs</h3>
                        

                        <div class="series">
                            <div>
                                <span>Series: </span>
                            </div>
                            <div>
                                <span>{{$selected_comic['series']}}</span>
                            </div>
                        </div>

                        <div class="price">
                            <div>
                                <span>U.S Price: </span>
                            </div>
                            <div>
                                <span>{{$selected_comic['price']}}</span>
                            </div>
                        </div>

                        <div class="sale-date">
                            <div>
                                <span>On Sale Date: </span>
                            </div>
                            <div>
                                <span>{{$selected_comic['sale_date']}}</span>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection