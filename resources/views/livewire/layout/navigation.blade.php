<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

@php
    $links = [
        [
            'label' => 'Dashboard',
            'route' => 'dashboard',
            'icon' => 'sparkles',
            'description' => 'Resumen ejecutivo del ecosistema DDU.',
        ],
        [
            'label' => 'Reuniones',
            'route' => 'meetings',
            'icon' => 'calendar',
            'description' => 'Agenda inteligente y coordinación.',
        ],
        [
            'label' => 'Notas',
            'route' => 'notes',
            'icon' => 'document-text',
            'description' => 'Conocimiento compartido y minutas.',
        ],
        [
            'label' => 'Analítica',
            'route' => 'analytics',
            'icon' => 'chart-bar',
            'description' => 'Indicadores y tendencias de impacto.',
        ],
    ];
@endphp

<div x-data="{ open: false }" x-on:toggle-sidebar.window="open = !open" class="relative z-40">
    <aside class="hidden w-72 flex-shrink-0 flex-col justify-between border-r border-white/5 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900/80 px-6 py-8 text-slate-200 lg:flex">
        <div>
            <a href="{{ route('dashboard') }}" wire:navigate class="flex items-center gap-3">
                <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-primary-500 to-sky-500 text-2xl font-semibold text-slate-950">DDU</span>
                <span class="text-sm font-semibold uppercase tracking-[0.35em] text-primary-200">Experience Hub</span>
            </a>
            <p class="mt-6 text-xs text-slate-400">Orquesta tu experiencia DDU con foco humano + datos.</p>

            <nav class="mt-8 space-y-2">
                @foreach ($links as $link)
                    @php $active = request()->routeIs($link['route']); @endphp
                    <a href="{{ route($link['route']) }}" wire:navigate class="group block rounded-2xl border border-transparent px-4 py-3 transition {{ $active ? 'border-primary-400/60 bg-primary-500/10 text-white' : 'hover:border-primary-400/40 hover:bg-white/5' }}">
                        <div class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-white/5 text-primary-200">
                                @include('livewire.dashboard.svg-icon', ['name' => $link['icon']])
                            </span>
                            <div class="flex-1">
                                <p class="text-sm font-semibold">{{ $link['label'] }}</p>
                                <p class="text-xs text-slate-400">{{ $link['description'] }}</p>
                            </div>
                            @if ($active)
                                <span class="h-2 w-2 rounded-full bg-primary-400"></span>
                            @endif
                        </div>
                    </a>
                @endforeach
            </nav>
        </div>

        <div class="space-y-4">
            <div class="rounded-3xl border border-white/10 bg-white/5 p-4 text-sm text-slate-300">
                <p class="text-xs font-semibold uppercase tracking-widest text-primary-200">Estado</p>
                <p class="mt-2 text-sm text-white">Última sincronización hace 3 min.</p>
                <p class="mt-1 text-xs text-slate-400">Tu información está protegida con cifrado DDU Secure.</p>
            </div>
            <button wire:click="logout" class="flex w-full items-center justify-center gap-2 rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm font-semibold uppercase tracking-widest text-slate-200 transition hover:border-primary-400/60 hover:text-primary-200">
                Cerrar sesión
            </button>
        </div>
    </aside>

    <div x-cloak x-show="open" class="fixed inset-0 flex lg:hidden">
        <div class="absolute inset-0 bg-slate-950/80 backdrop-blur" @click="open = false"></div>
        <aside class="relative z-10 flex w-72 flex-col justify-between border-r border-white/5 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900/80 px-6 py-8 text-slate-200">
            <div class="flex items-center justify-between">
                <a href="{{ route('dashboard') }}" wire:navigate class="flex items-center gap-3">
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-primary-500 to-sky-500 text-2xl font-semibold text-slate-950">DDU</span>
                    <span class="text-sm font-semibold uppercase tracking-[0.35em] text-primary-200">Experience Hub</span>
                </a>
                <button class="rounded-full border border-white/10 bg-white/5 p-2" @click="open = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6m0 12L6 6" />
                    </svg>
                </button>
            </div>

            <nav class="mt-8 space-y-2">
                @foreach ($links as $link)
                    @php $active = request()->routeIs($link['route']); @endphp
                    <a href="{{ route($link['route']) }}" wire:navigate class="block rounded-2xl border border-transparent px-4 py-3 transition {{ $active ? 'border-primary-400/60 bg-primary-500/10 text-white' : 'hover:border-primary-400/40 hover:bg-white/5' }}" @click="open = false">
                        <p class="text-sm font-semibold">{{ $link['label'] }}</p>
                        <p class="text-xs text-slate-400">{{ $link['description'] }}</p>
                    </a>
                @endforeach
            </nav>

            <button wire:click="logout" class="flex w-full items-center justify-center gap-2 rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm font-semibold uppercase tracking-widest text-slate-200 transition hover:border-primary-400/60 hover:text-primary-200">
                Cerrar sesión
            </button>
        </aside>
    </div>
</div>
