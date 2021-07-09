<div class="comics">
    <div class="container">
        <div class="cards">
            @foreach ($comics as $index => $comic)
                <div class="card">
                    <a href="{{ route('comic', ['id' => $index]) }}">
                        <img src="{{ $comic['thumb'] }} ">
                        <h5 class="">{{ $comic['series'] }}</h5>
                    </a>
                </div>
            @endforeach
            <a href="#"><span class="load">Load more</span></a>
        </div>
    </div>
</div>