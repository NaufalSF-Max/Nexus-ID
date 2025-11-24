@section('title', 'Dashboard')
<x-app-layout>
    {{-- TAMBAHAN STYLE CSS UNTUK ANIMASI MELAYANG OTOMATIS --}}
    <style>
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); } /* Bergerak ke atas 15px */
            100% { transform: translateY(0px); }
        }
        /* Class untuk menerapkan animasi */
        .animate-floating {
            animation: floating 4s ease-in-out infinite; /* Durasi 4 detik, berulang selamanya */
        }
    </style>

    <x-slot name="header">
        {{-- Header kita kosongkan/sembunyikan --}}
    </x-slot>

    {{-- MAIN WRAPPER --}}
    <div class="min-h-screen bg-gray-950 flex items-center justify-center p-6 overflow-hidden relative">

        {{-- Background elemen dekoratif --}}
        <div class="absolute top-0 left-0 w-96 h-96 bg-cyan-500/10 rounded-full filter blur-3xl -translate-x-1/2 -translate-y-1/2 z-0 animate-pulse delay-1000"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/10 rounded-full filter blur-3xl translate-x-1/2 translate-y-1/2 z-0 animate-pulse"></div>

        {{-- TILT CONTAINER + ANIMASI FLOATING --}}
        {{-- PERHATIKAN: Ada tambahan class 'animate-floating' di sini --}}
        <div id="tilt-card" class="relative z-10 w-full max-w-md perspective-[1000px] transition-transform duration-100 ease-out animate-floating">

            {{-- KARTU HOLOGRAM --}}
            <div id="inner-card" class="relative h-full bg-gray-900/60 backdrop-blur-xl border border-cyan-500/30 rounded-2xl overflow-hidden shadow-[0_0_40px_rgba(6,182,212,0.3)] p-8 text-white transition-all duration-200">

                {{-- Efek Garis Scanline --}}
                <div class="absolute inset-0 bg-[url('https://transparenttextures.com/patterns/diagmonds-light.png')] opacity-10 bg-fixed z-0 pointer-events-none"></div>
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-cyan-400 to-transparent opacity-50 z-0"></div>

                {{-- HEADER KARTU --}}
                <div class="flex justify-between items-center mb-8 relative z-10 border-b border-cyan-500/30 pb-4">
                    <div>
                        <h1 class="text-2xl font-['Orbitron'] font-bold text-cyan-400 tracking-widest drop-shadow-[0_0_5px_rgba(0,255,255,0.8)]">
                            NEXUS<span class="text-white">ID</span>
                        </h1>
                        <p class="text-xs text-cyan-300/70 font-['Rajdhani'] uppercase tracking-[0.2em]">Virtual Access Pass</p>
                    </div>
                    <div class="w-12 h-12 border-2 border-cyan-400/50 rounded-md flex items-center justify-center bg-cyan-900/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-cyan-400 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                    </div>
                </div>

                {{-- DATA USER --}}
                <div class="space-y-6 relative z-10">
                    {{-- PERBAIKAN NAMA PANJANG DI SINI --}}
                    <div>
                        <label class="text-xs text-cyan-300/60 font-['Rajdhani'] uppercase tracking-wider block mb-1">Identity Name</label>
                        {{-- Hapus 'truncate', tambah 'leading-tight break-words' --}}
                        <h2 class="text-3xl font-['Orbitron'] font-bold text-white tracking-wide uppercase leading-tight break-words">
                            {{ Auth::user()->name }}
                        </h2>
                    </div>

                   {{-- Grid Data Teknis --}}
                    <div class="grid grid-cols-2 gap-4 py-4 border-t border-b border-cyan-500/20 border-dashed">
                        <div>
                             <label class="text-xs text-cyan-300/60 font-['Rajdhani'] uppercase tracking-wider block mb-1">NPM ID</label>
                             <p class="text-xl font-['Rajdhani'] font-semibold text-cyan-100 tracking-wider font-mono">
                                 {{ Auth::user()->npm }}
                             </p>
                        </div>
                         <div>
                             <label class="text-xs text-cyan-300/60 font-['Rajdhani'] uppercase tracking-wider block mb-1">Class Unit</label>
                             <p class="text-xl font-['Rajdhani'] font-semibold text-cyan-100 tracking-wider">
                                 {{ Auth::user()->kelas }}
                             </p>
                        </div>
                    </div>

                    <div>
                         <label class="text-xs text-cyan-300/60 font-['Rajdhani'] uppercase tracking-wider block mb-1">Target Course</label>
                         <div class="inline-block bg-cyan-900/40 border border-cyan-400/30 rounded-sm px-3 py-2">
                            <p class="text-lg font-['Rajdhani'] font-medium text-cyan-200 leading-tight">
                                {{ Auth::user()->mata_kuliah ?? 'NOT SPECIFIED' }}
                            </p>
                         </div>
                    </div>
                </div>

                {{-- FOOTER STATUS --}}
                <div class="mt-8 pt-4 border-t border-cyan-500/30 flex justify-between items-center relative z-10">
                    <div class="flex items-center space-x-2">
                        <span class="relative flex h-3 w-3">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-3 w-3 bg-cyan-500"></span>
                        </span>
                        <span class="text-sm font-['Rajdhani'] text-cyan-300 tracking-wider">STATUS: ACTIVE STUDENT</span>
                    </div>
                    <div class="text-xs text-cyan-500/50 font-mono">V.2.0.AUTO-FLOAT</div>
                </div>

            </div> {{-- End Inner Card --}}
        </div> {{-- End Tilt Container --}}
    </div> {{-- End Main Wrapper --}}


    {{-- JAVASCRIPT UNTUK EFEK GERAK INTERAKTIF (Updated) --}}
    <script>
        // Kita targetkan inner-card nya sekarang untuk transformasi rotasi
        const tiltContainer = document.getElementById('tilt-card');
        const innerCard = document.getElementById('inner-card');

        tiltContainer.addEventListener('mousemove', (e) => {
            const rect = tiltContainer.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;
            const mouseX = e.clientX - centerX;
            const mouseY = e.clientY - centerY;

            // Sedikit diperhalus angkanya
            const rotateY = (mouseX / rect.width) * 25;
            const rotateX = -((mouseY / rect.height) * 25);

            // Terapkan transformasi hanya pada kartu dalam
            innerCard.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.03)`;
            // Tambah efek brightness saat di hover
            innerCard.style.filter = 'brightness(1.1)';
        });

        tiltContainer.addEventListener('mouseleave', () => {
            // Reset posisi dan filter
            innerCard.style.transform = `rotateX(0deg) rotateY(0deg) scale(1)`;
            innerCard.style.filter = 'brightness(1)';
        });
    </script>
</x-app-layout>