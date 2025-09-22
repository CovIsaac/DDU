<section class="rounded-3xl bg-gradient-to-br from-primary-500/20 via-sky-500/20 to-purple-500/10 p-6 ring-1 ring-white/10">
    <header>
        <h3 class="text-lg font-semibold text-white">Acciones rápidas</h3>
        <p class="mt-1 text-sm text-slate-200/80">Impulsa la coordinación del equipo sin salir del panel.</p>
    </header>

    <div class="mt-6 grid gap-4 lg:grid-cols-3">
        @foreach ($actions as $action)
            <a href="{{ $action['href'] }}" wire:navigate class="group flex flex-col justify-between rounded-2xl border border-white/5 bg-slate-900/80 p-4 transition hover:border-primary-400/60 hover:bg-slate-900">
                <div class="flex items-start gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary-500/20 text-primary-200">
                        @include('livewire.dashboard.svg-icon', ['name' => $action['icon'], 'classes' => 'h-5 w-5'])
                    </div>
                    <div>
                        <p class="text-base font-semibold text-white">{{ $action['label'] }}</p>
                        <p class="mt-1 text-sm text-slate-400">{{ $action['description'] }}</p>
                    </div>
                </div>
                <span class="mt-4 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-widest text-primary-200">
                    Ir ahora
                    @include('livewire.dashboard.svg-icon', ['name' => 'chevron-right', 'classes' => 'h-4 w-4 transition group-hover:translate-x-1'])
                </span>
            </a>
        @endforeach
    </div>
</section>
