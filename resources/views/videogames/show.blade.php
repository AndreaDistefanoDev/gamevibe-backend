@extends('layouts.videogames')
@section('title', $videogame->title)
@section('content')

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">{{ $videogame->title }}</h5>
            <p class="card-text">{{ $videogame->description }}</p>
            <p class="card-text"><strong>Release Date:</strong> {{ $videogame->release_date }}</p>
            <p class="card-text"><strong>Price:</strong> {{ $videogame->price }}</p>
        </div>
    </div>

@endsection
