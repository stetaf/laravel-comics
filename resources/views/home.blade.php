@extends('layout.app')

@section('main')

<!-- Jumbotron -->
@include('partials.jumbotron')
<!-- /Jumbotron -->

<!-- Comics -->
@include('comics.index')
<!-- /Comics -->

<!-- Icons -->
@include('partials.blue_icons')
<!-- /Icons -->

@endsection