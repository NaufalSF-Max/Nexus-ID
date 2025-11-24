<nav class="fixed top-4 right-4 z-50">
    <div class="bg-gray-900/80 backdrop-blur-md border border-cyan-500/30 rounded-lg shadow-[0_0_15px_rgba(6,182,212,0.2)] p-2 flex items-center space-x-4">

        {{-- Info User --}}
        <div class="text-right px-2 hidden sm:block">
            <div class="text-xs text-cyan-400 font-['Rajdhani'] uppercase tracking-wider">System User</div>
            <div class="text-sm text-white font-['Rajdhani'] font-semibold tracking-wide truncate max-w-[150px]">
                {{ Auth::user()->name }}
            </div>
        </div>

        {{-- Separator Neon --}}
        <div class="h-8 w-px bg-gradient-to-b from-transparent via-cyan-500/50 to-transparent hidden sm:block"></div>

        {{-- Tombol Logout (Icon Power) --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="group flex items-center justify-center w-10 h-10 rounded-md bg-cyan-950/50 border border-cyan-500/30 hover:bg-cyan-900/80 hover:border-cyan-400 hover:shadow-[0_0_10px_rgba(6,182,212,0.5)] transition-all duration-300" title="Log Out">
                {{-- Icon Power SVG --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </button>
        </form>
    </div>
</nav>