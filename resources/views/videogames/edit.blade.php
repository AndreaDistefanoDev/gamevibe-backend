@extends('layouts.videogames')
@section('title', 'Modifica Videogame')
@section('content')
    <div class="container">
        <form action="{{ route('admin.videogames.update', $videogame) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-control mb-3">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $videogame->title }}">
                </div>
                <div class="mb-3">
                    <label for="genre_id" class="form-label">Genere</label>
                    <select class="form-select" id="genre_id" name="genre_id">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}" {{ $videogame->genre_id == $genre->id ? 'selected' : '' }}>
                                {{ $genre->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Platforms --}}
                <div class="mb-3">
                    <div class="mb-1">Piattaforma</div>
                    @foreach ($platforms as $platform)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="platforms[]" value="{{ $platform->id }}"
                                id="platform-{{ $platform->id }}"
                                {{ $videogame->platforms->contains($platform->id) ? 'checked' : '' }}>
                            <label class="form-check-label" for="platform-{{ $platform->id }}">
                                {{ $platform->name }}
                            </label>
                        </div>
                    @endforeach

                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $videogame->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="release_date" class="form-label">Data di uscita</label>
                    <input type="date" class="form-control" id="release_date" name="release_date"
                        value="{{ $videogame->release_date }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price"
                        value="{{ $videogame->price }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Immagine di copertina</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <input type="submit" class="btn btn-primary" value="Salva"></input>

            </div>

        </form>
    </div>
@endsection
