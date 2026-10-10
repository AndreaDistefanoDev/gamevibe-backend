@extends('layouts.videogames')
@section('title', 'Aggiungi Videogame')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.videogames.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-8 mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="genre_id" class="form-label">Genere</label>
                        <select class="form-select" id="genre_id" name="genre_id">
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label d-block">Piattaforme</label>
                    @foreach ($platforms as $platform)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="platforms[]" value="{{ $platform->id }}"
                                id="platform-{{ $platform->id }}">
                            <label class="form-check-label" for="platform-{{ $platform->id }}">
                                {{ $platform->name }}
                            </label>
                        </div>
                    @endforeach

                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="release_date" class="form-label">Data di uscita</label>
                        <input type="date" class="form-control" id="release_date" name="release_date">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine di copertina</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <a class="btn btn-outline-secondary" href="{{ route('admin.videogames.index') }}">Annulla</a>
                    <button type="submit" class="btn btn-dark">
                        <i class="bi bi-check-lg me-1"></i>Salva
                    </button>
                </div>


            </form>
        </div>
    </div>
@endsection
