<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite('resources/js/app.js')
</head>

<body class="bg-body-tertiary">
    <nav class="navbar navbar-expand-lg bg-dark mb-4" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('admin.videogames.index') }}">
                <i class="bi bi-controller me-2"></i>GameVibe
            </a>
            <div class="navbar-nav flex-row gap-3 me-auto ms-4">
                <a class="nav-link" href="{{ route('admin.videogames.index') }}">Lista</a>
                <a class="nav-link" href="{{ route('admin.videogames.create') }}">Aggiungi</a>
            </div>
            <form action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm">
                    <i class="bi bi-box-arrow-right me-1"></i>Esci
                </button>
            </form>
        </div>
    </nav>

    <main class="container pb-5">
        <h1 class="mb-4">@yield('title')</h1>
        @yield('content')
    </main>
</body>

</html>
