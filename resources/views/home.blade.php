@extends('layouts.app')

@section('content')

    <div class="ms_comics_container">
        <a href="{{route('comics.index')}}">
            <h1 class="ms_comics"> COMICS </h1>
        </a>
    </div>

    <div class="ms_movies_container">
        <a href="#">
            <h1 class="ms_movies"> MOVIES </h1>
        </a>
    </div>

    <div class="ms_characters_container">
        <a href="#">
            <h1 class="ms_characters"> CHARACTERS </h1>
        </a>
    </div>

@endsection