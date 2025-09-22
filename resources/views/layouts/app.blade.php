<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

        <style>[x-cloak] { display: none !important; }</style>
    </head>
    <body class="font-sans antialiased bg-slate-950 text-slate-100">
        <div x-data="{}" class="flex min-h-screen bg-slate-950/95">
            <livewire:layout.navigation />

            <div class="flex flex-1 flex-col">
                <header class="sticky top-0 z-30 border-b border-white/5 bg-slate-950/80 backdrop-blur">
                    <div class="flex items-center justify-between px-6 py-4">
                        <div class="flex items-center gap-3">
                            <button class="inline-flex items-center justify-center rounded-full border border-white/10 bg-white/5 p-2 text-slate-200 transition hover:border-primary-400/60 hover:text-primary-200 lg:hidden" @click="$dispatch('toggle-sidebar')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-primary-300">Experiencia DDU</p>
                                <p class="text-sm text-slate-400">Bienvenido, {{ auth()->user()->name ?? 'DDU Member' }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="hidden items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-2 text-xs font-semibold uppercase tracking-widest text-slate-300 md:flex">
                                <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                                Sincronización activa
                            </div>
                            <div class="flex items-center gap-3 rounded-full border border-white/10 bg-white/5 px-3 py-2 text-sm text-slate-200">
                                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-gradient-to-br from-primary-500 to-sky-500 font-semibold text-slate-950">
                                    {{ \Illuminate\Support\Str::upper(\Illuminate\Support\Str::substr(auth()->user()->name ?? 'DDU', 0, 2)) }}
                                </div>
                                <div class="hidden text-xs font-semibold uppercase tracking-widest text-slate-300 sm:block">
                                    {{ auth()->user()->email ?? 'team@ddu' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <main class="flex-1 overflow-y-auto px-6 pb-12 pt-8">
                    <div class="mx-auto w-full max-w-7xl">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>

        @stack('modals')
        @livewireScripts
    </body>
</html>
