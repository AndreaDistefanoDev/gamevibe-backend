@extends('layouts.videogames')
@section('title', 'Videogames List')
@section('content')

    <div class="d-flex py-4 gap-2">
        <a class="btn btn-outline-primary" href="{{ route('admin.videogames.create') }}">Aggiungi un videogame</a>
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
                            <td>{{ $videogame->cover_image }}</td>
                            <td>{{ $videogame->title }}</td>
                            <td>{{ $videogame->genre->name }}</td>
                            <td>{{ $videogame->release_date }}</td>
                            <td>{{ $videogame->price }}</td>
                            <td><a href="{{ route('admin.videogames.show', $videogame) }}">Visualizza</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
