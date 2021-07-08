@extends('layout.app')

@section('main')
<!-- Jumbotron -->
<div class="jumbotron">
    <div class="container">
        <span>Current series</span>
    </div>
</div>
<!-- /Jumbotron -->

<!-- Comics -->
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
<!-- /Comics -->

<!-- Icons -->
<div class="icons">
    <div class="container">
        <div>
            <img src="../img/buy-comics-digital-comics.png" alt="Digital comics" width="40" height="55">
            <span>Digital comics</span>
        </div>
        <div>
            <img src="../img/buy-comics-merchandise.png" alt="Digital comics" width="50" height="55">
            <span>DC merchandise</span>
        </div>
        <div>
            <img src="../img/buy-comics-subscriptions.png" alt="Digital comics" width="50" height="55">
            <span>Subscription</span>
        </div>
        <div>
            <img src="../img/buy-comics-shop-locator.png" alt="Digital comics" width="35" height="55">
            <span>Comic shop locator</span>
        </div>
        <div>
            <img src="../img/buy-dc-power-visa.svg" alt="Digital comics" width="50" height="45">
            <span>Dc power visa</span>
        </div>
    </div>
</div>
<!-- /Icons -->
@endsection