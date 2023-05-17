@extends('layouts.app')

@section('content')

<div class="container">

    <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi Fumetto</a>

    <div class="row pt-3">
        @foreach($comics as $comic)
            <div class="d-flex col-2 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>

                        <div class="d-flex justify-content-around">
                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-info"><i class="fa-solid fa-pen"></i></a>

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $comic->id }}"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="modal fade" id="exampleModal{{ $comic->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Sei sicuro di voler cancellare questo fumetto?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Conferma </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
