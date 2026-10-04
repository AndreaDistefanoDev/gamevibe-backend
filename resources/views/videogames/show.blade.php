@extends('layouts.videogames')
@section('title', $videogame->title)
@section('content')

    <div class="d-flex py-4 gap-2">
        <a class="btn btn-outline-warning" href="{{ route('admin.videogames.edit', $videogame) }}">Modifica</a>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina </button>
        <a class="btn btn-outline-primary" href="{{ route('admin.videogames.index') }}">Torna alla lista</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">{{ $videogame->title }}</h5>
            <p class="card-text">Genere: {{ $videogame->genre->name }}</p>
            <p class="card-text">{{ $videogame->description }}</p>
            <p class="card-text"><strong>Release Date:</strong> {{ $videogame->release_date }}</p>
            <p class="card-text"><strong>Price:</strong> {{ $videogame->price }}</p>
        </div>
    </div>






    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina Videogame</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare il videogame "{{ $videogame->title }}"? Questa azione non può essere
                    annullata.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('admin.videogames.destroy', $videogame) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-outline-danger" value="Elimina Definitivamente"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
