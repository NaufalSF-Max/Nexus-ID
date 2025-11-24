<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', config('app.name')) - {{ config('app.name') }}</title>
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Rajdhani:wght@400;600&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <body class="font-sans text-gray-100 antialiased bg-gray-950 overflow-x-hidden">

        {{-- BACKGROUND CONTAINER --}}
        <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
            <div class="absolute top-0 left-0 w-96 h-96 bg-cyan-500/10 rounded-full filter blur-3xl -translate-x-1/2 -translate-y-1/2 animate-pulse delay-1000"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/10 rounded-full filter blur-3xl translate-x-1/2 translate-y-1/2 animate-pulse"></div>
            <div class="absolute inset-0 bg-[url('https://transparenttextures.com/patterns/diagmonds-light.png')] opacity-5 bg-fixed"></div>
        </div>

        {{-- MAIN CONTENT WRAPPER --}}
        <div class="relative z-10 min-h-[100dvh] flex flex-col items-center justify-center py-12 p-6">

             {{-- Link Back to Home --}}
             <a href="/" class="absolute top-6 left-6 flex items-center text-cyan-500/70 hover:text-cyan-400 transition-colors font-['Rajdhani']">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>
                Back to Home
             </a>

            <div class="flex flex-col items-center w-full max-w-md">
                 {{-- Logo --}}
                <h1 class="text-4xl font-['Orbitron'] font-bold text-cyan-400 tracking-widest drop-shadow-[0_0_10px_rgba(0,255,255,0.8)] mb-10 text-center">
                    NEXUS<span class="text-white">ID</span>
                </h1>

                {{-- Kontainer Form --}}
                <div class="w-full px-8 py-10 bg-gray-900/60 backdrop-blur-xl border border-cyan-500/30 shadow-[0_0_30px_rgba(6,182,212,0.2)] rounded-2xl relative">
                     {{-- Hiasan Scanline --}}
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-cyan-400 to-transparent opacity-50 z-0"></div>

                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>