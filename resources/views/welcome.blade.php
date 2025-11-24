<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome Portal - {{ config('app.name') }}</title>
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Rajdhani:wght@300;400;600&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-950 text-white overflow-hidden">

        {{-- Main Container --}}
        <div class="relative min-h-screen flex flex-col items-center justify-center p-6">

            {{-- Background Orbs Dekoratif --}}
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-cyan-500/20 rounded-full filter blur-[100px] -translate-x-1/2 -translate-y-1/2 animate-pulse delay-1000"></div>
                <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/20 rounded-full filter blur-[100px] translate-x-1/2 translate-y-1/2 animate-pulse"></div>
                 {{-- Grid Pattern Hiasan --}}
                <div class="absolute inset-0 bg-[url('https://transparenttextures.com/patterns/diagmonds-light.png')] opacity-5 bg-fixed"></div>
            </div>


            {{-- Content Z-Index Tinggi --}}
            <div class="relative z-10 text-center max-w-2xl">
                {{-- Logo Besar --}}
                <h1 class="text-5xl md:text-7xl font-['Orbitron'] font-bold text-cyan-400 tracking-widest drop-shadow-[0_0_25px_rgba(0,255,255,0.5)] mb-4 animate-floating">
                    NEXUS<span class="text-white">ID</span>
                </h1>

                {{-- Tagline --}}
                <p class="text-lg md:text-xl text-cyan-300/70 font-['Rajdhani'] tracking-[0.3em] uppercase mb-12 font-light">
                    Advanced Virtual Identity System
                </p>

                {{-- Tombol Aksi (Login / Register) --}}
                @if (Route::has('login'))
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        @auth
                            {{-- Jika sudah login, tombolnya ke Dashboard --}}
                            <a href="{{ url('/dashboard') }}" class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-['Orbitron'] font-bold tracking-wider text-white bg-gray-900/50 border-2 border-cyan-500/50 rounded-lg overflow-hidden shadow-[0_0_20px_rgba(6,182,212,0.3)] hover:bg-cyan-900/80 hover:border-cyan-400 hover:shadow-[0_0_40px_rgba(6,182,212,0.6)] transition-all duration-300">
                                <span class="relative z-10">ACCESS DASHBOARD</span>
                            </a>
                        @else
                            {{-- Tombol Login --}}
                            <a href="{{ route('login') }}" class="group relative inline-flex items-center justify-center w-full sm:w-auto px-8 py-3 text-base md:text-lg font-['Rajdhani'] font-semibold tracking-wider text-cyan-100 bg-cyan-950/60 border border-cyan-500/30 rounded-md overflow-hidden shadow-[0_0_15px_rgba(6,182,212,0.2)] hover:bg-cyan-900/80 hover:border-cyan-400 hover:text-white hover:shadow-[0_0_30px_rgba(6,182,212,0.5)] transition-all duration-300">
                                <span class="mr-2">LOGIN</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-hover:translate-x-1 transition-transform">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>
                            </a>

                            @if (Route::has('register'))
                                {{-- Tombol Register --}}
                                <a href="{{ route('register') }}" class="group relative inline-flex items-center justify-center w-full sm:w-auto px-8 py-3 text-base md:text-lg font-['Rajdhani'] font-semibold tracking-wider text-purple-100 bg-purple-950/60 border border-purple-500/30 rounded-md overflow-hidden shadow-[0_0_15px_rgba(168,85,247,0.2)] hover:bg-purple-900/80 hover:border-purple-400 hover:text-white hover:shadow-[0_0_30px_rgba(168,85,247,0.5)] transition-all duration-300">
                                    <span class="mr-2">CREATE ID</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-hover:translate-x-1 transition-transform">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                    </svg>
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

            {{-- Footer Versi --}}
            <div class="absolute bottom-6 text-xs text-cyan-500/40 font-['Rajdhani'] tracking-widest">
                NEXUS SYSTEM V.2.1 // SECURE CONNECTION
            </div>
        </div>
    </body>
</html>