<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Freelance full-stack developer crafting fast, scalable web applications with Laravel, Vue, React and Tailwind CSS.">

    <title>@yield('title', 'Ami Dev — Freelance Developer')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-zinc-950 font-sans text-zinc-300 antialiased selection:bg-emerald-400/25 selection:text-emerald-100">

    @include('portfolio.partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('portfolio.partials.footer')

    @stack('scripts')

</body>
</html>
