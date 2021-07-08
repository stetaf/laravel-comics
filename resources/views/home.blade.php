@extends('layout.app')

@section('main')
<div class="jumbotron">
    <div class="container">
        <span>Current series</span>
    </div>
</div>
<div class="comics">
    <div class="container">
        <div class="cards">
            @foreach ($comics as $comic)
                <div class="card">
                    <div class="img" style="background-image: url('{{ $comic['thumb'] }}');"></div>
                    <h5>{{ $comic['series'] }}</h5>
                </div>
            @endforeach
            <input type="submit" value="Load more">
        </div>
    </div>
</div>
@endsection