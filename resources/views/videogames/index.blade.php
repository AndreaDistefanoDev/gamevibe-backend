@extends('layouts.videogames')
@section('title', 'Lista Videogiochi')
@section('content')

    <div class="d-flex justify-content-end mb-3">
        <a class="btn btn-dark" href="{{ route('admin.videogames.create') }}">
            <i class="bi bi-plus-lg me-1"></i>Aggiungi un videogame
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th style="width: 80px">Cover</th>
                        <th>Titolo</th>
                        <th>Genere</th>
                        <th>Uscita</th>
                        <th>Prezzo</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videogames as $videogame)
                        <tr>
                            <td>
                                @if ($videogame->image)
                                    <img src="{{ asset('storage/' . $videogame->image) }}" alt="{{ $videogame->title }}"
                                        class="rounded object-fit-contain bg-body-secondary"
                                        style="width: 60px; height: 90px">
                                @endif
                            </td>
                            <td>{{ $videogame->title }}</td>
                            <td><span class="badge text-bg-primary">{{ $videogame->genre->name }}</span></td>
                            <td>{{ $videogame->release_date }}</td>
                            <td>{{ $videogame->price }}</td>
                            <td><a class="btn btn-dark btn-sm" href="{{ route('admin.videogames.show', $videogame) }}">
                                    <i class="bi bi-eye me-1"></i>Visualizza
                                </a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
