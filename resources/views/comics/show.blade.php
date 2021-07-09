@extends('layout.app')

@section('main')

<!-- Jumbotron -->
@include('partials.jumbotron')
<!-- /Jumbotron -->

<div class="comic">
    <div class="comic_card">
        <div class="container">
            <div class="img">
                <img src="{{ $comic['thumb'] }}" alt="">
                <span class="type">{{ $comic['type'] }}</span>
                <span class="gallery">View gallery</span>
            </div>
        </div>
    </div>
    <div class="comic_info">
        <div class="container">
            <div class="left">
                <h2>{{ $comic['title'] }}</h2>
                <div class="green_btn">
                    <div class="first">
                        <span class="price">
                            <em>U.S. Price:</em> {{ $comic['price'] }}
                        </span>
                        <span class="aval">
                            <em>AVAILABLE</em>
                        </span>
                    </div>
                    <span class="check">
                        Check Availability 
                        <i class="fas fa-sort-down"></i>
                    </span>
                </div>
                <p>{{ $comic['description'] }}</p>
                <div class="adv">
                    <span>Advertisement</span>
                    <img src="{{ asset('img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="comic_data">
        <div class="container">
            <div class="upper">
                <div class="left">
                    <h3>Talent</h3>
                    <div class="people">
                        <span>Art by:</span>
                        <ul class="list">
                            @foreach ($comic['artists'] as $artist)
                                <li>
                                    @if(!$loop->last)
                                    <span>{{ $artist }}</span>,
                                    @else
                                    <span>{{ $artist }}</span>
                                    @endif
                                </li>                          
                            @endforeach
                        </ul>
                    </div>
                    <div class="people">
                        <span>Written by:</span>
                        <ul class="list">
                            @foreach ($comic['writers'] as $writers)
                                <li>
                                    @if(!$loop->last)
                                    <span>{{ $writers }}</span>,
                                    @else
                                    <span>{{ $writers }}</span>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="right">
                <h3>Specs</h3>
                    <div class="data">
                        <span>Series:</span>
                        <a href="#" class="serie">{{ $comic['series'] }}</a>
                    </div>
                    <div class="data">
                        <span>U.S. Price:</span>
                        <a href="#">{{ $comic['price'] }}</a>
                    </div>
                    <div class="data">
                        <span>On Sale Date:</span>
                        <a href="#">{{ date('M d Y', strtotime($comic['sale_date'] )) }}</a>
                    </div>
                </div>
            </div>
            <div class="bottom">

            </div>
        </div>
    </div>
</div>

@endsection
