@extends ('layouts.app')

@section ('content')

<div class="container">

    <img src="{{$comic->thumb}}" class="img-fluid">

    <h1>{{$comic->title}}</h1>
    <h4>Price: ${{$comic->price}}</h4>
    <h4>Series: {{$comic->series}}</h4>
    <h4>Date: {{$comic->sale_date}}</h4>
    <h4>Type: {{$comic->type}}</h4>
    <p>{!!$comic->description!!}</p>

    <a href="{{route('comics.index')}}" class="btn btn-secondary mb-2">Torna ai fumetti</a>

</div>

@endsection 