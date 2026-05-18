<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('profile-template/css/profile.css') }}">
</head>

<body>

<div class="animated-bg">
    <div class="bg-glow bg-glow-1"></div>
    <div class="bg-glow bg-glow-2"></div>
    <div class="bg-glow bg-glow-3"></div>
</div>

<header class="navbar">
    <div class="nav-container">

        <a href="{{ url('/') }}" class="nav-brand">
            {{ strtoupper(substr($biodata?->name ?? config('app.name'), 0, 1)) }}
        </a>

        <nav class="nav-menu">
            <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                Home
            </a>

            <a href="{{ route('projects.index') }}" class="nav-link {{ request()->routeIs('projects.*') ? 'active' : '' }}">
                Projects
            </a>

            <a href="{{ url('/#contact') }}" class="nav-link">
                Contact
            </a>
        </nav>

        <div class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>
</header>

<main>
    {{ $slot }}
</main>

<footer class="footer">
    <div class="footer-content">
        <p>
            © {{ date('Y') }} {{ $biodata?->name ?? config('app.name') }}.
            All rights reserved.
        </p>
    </div>
</footer>

<script src="{{ asset('profile-template/js/profile.js') }}"></script>

</body>
</html>