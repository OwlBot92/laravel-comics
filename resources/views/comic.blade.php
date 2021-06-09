@extends('layouts.app')



@section('main_content')

 {{--    {{ dd($selected_comic)}}
    array:10 [▼
  "id" => 1
  "title" => "Action Comics #1000: The Deluxe Edition"
  "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! Thi ▶"
  "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX"
  "price" => "$19.99"
  "series" => "Action Comics"
  "sale_date" => "2018-10-02"
  "type" => "comic book"
  "artists" => array:11 [▼
    0 => "José Luis García-López"
    1 => "Clay Mann"
    2 => "Rafael Albuquerque"
    3 => "Patrick Gleason"
    4 => "Dan Jurgens"
    5 => "Joe Shuster"
    6 => "Neal Adams"
    7 => "Curt Swan"
    8 => "John Cassaday"
    9 => "Olivier Coipel"
    10 => "Jim Lee"
  ]
  "writers" => array:13 [▼
    0 => "Brad Meltzer"
    1 => "Tom King"
    2 => "Scott Snyder"
    3 => "Geoff Johns"
    4 => "Brian Michael Bendis"
    5 => "Paul Dini"
    6 => "Louise Simonson"
    7 => "Richard Donner"
    8 => "Marv Wolfman"
    9 => "Peter J. Tomasi"
    10 => "Dan Jurgens"
    11 => "Jerry Siegel"
    12 => "Paul Levitz"
  ]
] --}}
    <div class="container white">
        <div class="blue-img-stripe">
            <img src="" alt="">
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
                                <div>
                                    <span>Art by:</span>
                                </div>

                                <div>

                                    @foreach ($selected_comic['artists'] as $artist)
                                        @if (!$loop->last)    
                                            <span>{{$artist}}, </span>
                                        @endif

                                        <span>{{$artist}} </span>
                                    @endforeach

                                </div>

                            </div>

                            <div class="written-by">
                                <div>
                                    <span>Written by:</span>
                                </div>

                                <div>
                                     @foreach ($selected_comic['writers'] as $writer)
                                        @if (!$loop->last)    
                                            <span>{{$writer}}, </span>
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