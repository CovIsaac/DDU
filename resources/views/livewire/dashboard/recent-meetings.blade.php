<section class="rounded-3xl bg-slate-900/70 p-6 ring-1 ring-white/10">
    <header class="flex items-center justify-between">
        <div>
            <h3 class="text-lg font-semibold text-white">Reuniones recientes</h3>
            <p class="mt-1 text-sm text-slate-400">Seguimiento inmediato a las conversaciones clave de DDU.</p>
        </div>
        <a href="/meetings" wire:navigate class="inline-flex items-center gap-2 rounded-full bg-white/5 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-primary-200 transition hover:bg-primary-500/10">
            Ver todas
            @include('livewire.dashboard.svg-icon', ['name' => 'chevron-right', 'classes' => 'h-4 w-4'])
        </a>
    </header>

    <ul class="mt-6 space-y-4">
        @foreach ($meetings as $meeting)
            <li class="rounded-2xl border border-white/5 bg-white/5 px-4 py-3 transition hover:border-primary-400/60">
                <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <p class="text-base font-medium text-white">{{ $meeting['title'] }}</p>
                        <p class="text-sm text-slate-400">{{ $meeting['owner'] }}</p>
                    </div>
                    <div class="flex flex-wrap items-center gap-3 text-sm text-slate-300">
                        <span class="inline-flex items-center gap-2 rounded-full bg-slate-800/80 px-3 py-1 font-medium">
                            @include('livewire.dashboard.svg-icon', ['name' => 'clock', 'classes' => 'h-4 w-4'])
                            {{ $meeting['time'] }}
                        </span>
                        <span class="inline-flex items-center gap-2 rounded-full bg-primary-500/20 px-3 py-1 font-semibold text-primary-200">
                            {{ $meeting['status'] }}
                        </span>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</section>
