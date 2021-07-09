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
            <h2>{{ $comic['title'] }}</h2>
        </div>
    </div>
</div>

@endsection
