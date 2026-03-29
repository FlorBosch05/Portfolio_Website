<!DOCTYPE html>
<html lang="en" x-data="{ open: false }">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Flor Bosch — Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=DM+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        :root {
            --blue:  #6b7f96;
            --green: #b5c9a0;
            --dark:  #2e3a2f;
            --white: #f8f9f4;
        }
        body { font-family: 'DM Sans', sans-serif; background-color: var(--green); color: var(--dark); }
        h1, h2, h3 { font-family: 'DM Serif Display', serif; }
    </style>
</head>
<body class="min-h-screen">

<!-- NAVBAR -->
<nav style="background-color: #6b7f96;" class="sticky top-0 z-50 shadow-md">
    <div class="max-w-5xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="text-white font-bold text-xl tracking-wide" style="font-family:'DM Serif Display',serif;">
            Flor Bosch
        </a>

        <!-- Desktop links -->
        <div class="hidden md:flex gap-8 text-white font-medium text-sm tracking-wider uppercase">
            <a href="{{ route('home') }}" class="hover:text-yellow-200 transition">Home</a>
            <a href="{{ route('about') }}" class="hover:text-yellow-200 transition">About Me</a>
            <a href="{{ route('projects') }}" class="hover:text-yellow-200 transition">Projects</a>
        </div>

        <!-- Mobile hamburger (Alpine) -->
        <button @click="open = !open" class="md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" x-transition class="md:hidden px-6 pb-4 flex flex-col gap-3 text-white text-sm uppercase tracking-wider">
        <a href="{{ route('home') }}" class="hover:text-yellow-200">Home</a>
        <a href="{{ route('about') }}" class="hover:text-yellow-200">About Me</a>
        <a href="{{ route('projects') }}" class="hover:text-yellow-200">Projects</a>
    </div>
</nav>

<!-- PAGE CONTENT -->
<main>
    @yield('content')
</main>

@livewireScripts
</body>
</html>
