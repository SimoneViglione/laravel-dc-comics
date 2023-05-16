@extends ('layouts.app')

@section ('content')

<a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi Fumetto</a>


    <div class="row pt-3">
        @foreach($comics as $comic)
            <div class="d-flex col-2 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> {{$comic->title}} </h5>
                        <a href="{{route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">Vedi</a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection