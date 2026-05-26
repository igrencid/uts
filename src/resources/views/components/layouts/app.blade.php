<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('profile-template/css/profile.css') }}?v={{ time() }}">
</head>

<body class="theme-transition">

<header class="site-header">

    <div class="site-brand">
        {{ $biodata?->name ?? config('app.name') }}
    </div>

    <nav class="site-nav">

        <a href="{{ url('/') }}">
            Home
        </a>

        <a href="{{ route('projects.index') }}">
            Projects
        </a>

        <a href="{{ url('/#contact') }}">
            Contact
        </a>

        <button
            id="theme-toggle"
            class="theme-toggle"
            type="button"
        >
            🌙
        </button>

    </nav>

</header>

<main>
    {{ $slot }}
</main>

<footer>
    © {{ date('Y') }}
    {{ $biodata?->name ?? config('app.name') }}.
    All rights reserved.
</footer>

<script src="{{ asset('profile-template/js/profile.js') }}?v={{ time() }}"></script>

</body>
</html>