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
                    </span>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="right">

            </div>
        </div>
    </div>
</div>

@endsection
