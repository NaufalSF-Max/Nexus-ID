{{-- resources/views/components/primary-button.blade.php --}}

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150

/* --- GAYA NEON --- */
bg-cyan-600
border-cyan-400/50
hover:bg-cyan-500
active:bg-cyan-900
focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800
shadow-[0_0_15px_rgba(6,182,212,0.3)] hover:shadow-[0_0_25px_rgba(6,182,212,0.5)]
/* --------------------------- */
']) }}>
    {{ $slot }}
</button>