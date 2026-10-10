@extends('layouts.videogames')
@section('title', 'Dettaglio Videogioco')
@section('content')


    <div class="card shadow-sm overflow-hidden">
        <div class="row g-0">
            @if ($videogame->image)
                <div class="col-md-3 bg-body-secondary">
                    <img src="{{ asset('storage/' . $videogame->image) }}" alt="{{ $videogame->title }}"
                        class="img-fluid w-100 d-block">
                </div>
            @endif

            <div class="{{ $videogame->image ? 'col-md-9' : 'col-12' }} d-flex flex-column">
                <div class="card-body p-4 d-flex flex-column">
                    <h2 class="card-title mb-3">{{ $videogame->title }}</h2>

                    <div class="d-flex flex-wrap gap-5 mb-3">
                        <div>
                            <div class="text-body-secondary small text-uppercase fw-semibold mb-1">Genere</div>
                            <span class="badge text-bg-primary">{{ $videogame->genre->name }}</span>
                        </div>

                        @if (count($videogame->platforms) > 0)
                            <div>
                                <div class="text-body-secondary small text-uppercase fw-semibold mb-1">Piattaforme</div>
                                @foreach ($videogame->platforms as $platform)
                                    <span class="badge me-1"
                                        style="background-color: {{ $platform->color }}">{{ $platform->name }}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <div class="text-body-secondary small text-uppercase fw-semibold mb-1">Data di uscita</div>
                        <div>{{ $videogame->release_date }}</div>
                    </div>

                    <div class="mb-3">
                        <div class="text-body-secondary small text-uppercase fw-semibold mb-1">Descrizione</div>
                        <div>{{ $videogame->description }}</div>
                    </div>

                    <div class="mt-auto text-end">
                        <div class="text-body-secondary small text-uppercase fw-semibold">Prezzo</div>
                        <div class="fs-4 fw-bold">{{ $videogame->price }}</div>
                    </div>
                </div>

                <div class="card-footer bg-transparent d-flex flex-wrap gap-2 p-3">
                    <a class="btn btn-outline-secondary" href="{{ route('admin.videogames.index') }}">
                        <i class="bi bi-arrow-left me-1"></i>Torna alla lista
                    </a>
                    <a class="btn btn-dark ms-auto" href="{{ route('admin.videogames.edit', $videogame) }}">
                        <i class="bi bi-pencil me-1"></i>Modifica
                    </a>
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="bi bi-trash me-1"></i>Elimina
                    </button>
                </div>
            </div>
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
