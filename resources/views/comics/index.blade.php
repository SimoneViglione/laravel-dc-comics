@extends ('layouts.app')

@section ('content')

<div class="container">

    <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi Fumetto</a>


        <div class="row pt-3">
            @foreach($comics as $comic)
                <div class="d-flex col-2 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> {{$comic->title}} </h5>

                            <div class="d-flex justify-content-around">

                                <a href="{{route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{route('comics.edit', ['comic' => $comic->id])}}" class="btn btn-info"><i class="fa-solid fa-pen"></i></a>

                                <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                                    @csrf

                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i> </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
</div>
@endsection