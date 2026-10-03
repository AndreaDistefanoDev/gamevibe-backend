@extends('layouts.videogames')
@section('title', 'Aggiungi Videogame')

@section('content')
    <div class="container">
        <form action="{{ route('admin.videogames.store') }}" method="POST">
            @csrf
            <div class="form-control mb-3">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genere</label>
                    <input type="text" class="form-control" id="genre" name="genre">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="release_date" class="form-label">Data di uscita</label>
                    <input type="date" class="form-control" id="release_date" name="release_date">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="cover_image" class="form-label">Immagine di copertina</label>
                    <input type="file" class="form-control" id="cover_image" name="cover_image">
                </div>
                <input type="submit" class="btn btn-primary" value="Salva"></input>

            </div>

        </form>
    </div>
@endsection
