@extends('layouts.videogames')
@section('title', 'Modifica Videogame')
@section('content')
    <div class="card shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.videogames.update', $videogame) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $videogame->title }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="genre_id" class="form-label">Genere</label>
                        <select class="form-select" id="genre_id" name="genre_id">
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}"
                                    {{ $videogame->genre_id == $genre->id ? 'selected' : '' }}>
                                    {{ $genre->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Platforms --}}
                <div class="mb-3">
                    <label class="form-label d-block">Piattaforme</label>
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
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="release_date" class="form-label">Data di uscita</label>
                        <input type="date" class="form-control" id="release_date" name="release_date"
                            value="{{ $videogame->release_date }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ $videogame->price }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine di copertina</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if ($videogame->image)
                        <div class="mt-2">
                            <div class="form-text mb-1">Copertina attuale</div>
                            <img src="{{ asset('storage/' . $videogame->image) }}" alt="{{ $videogame->title }}"
                                class="rounded border object-fit-contain bg-body-secondary"
                                style="width: 100px; height: 150px">
                        </div>
                    @endif
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a class="btn btn-outline-secondary"
                        href="{{ route('admin.videogames.show', $videogame) }}">Annulla</a>
                    <button type="submit" class="btn btn-dark">
                        <i class="bi bi-check-lg me-1"></i>Salva
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
