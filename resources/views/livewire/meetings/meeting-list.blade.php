<section class="rounded-3xl bg-slate-900/70 p-6 ring-1 ring-white/10">
    <header class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h2 class="text-xl font-semibold text-white">Agenda colaborativa</h2>
            <p class="text-sm text-slate-400">Tu repositorio vivo de compromisos DDU.</p>
        </div>
        <button type="button" class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-primary-200 transition hover:border-primary-400/60">
            Exportar agenda
        </button>
    </header>

    <ul class="mt-6 space-y-4">
        @foreach ($meetings as $meeting)
            <li class="rounded-2xl border border-white/5 bg-white/5 p-4 transition hover:border-primary-400/60">
                <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
                    <div>
                        <p class="text-lg font-semibold text-white">{{ $meeting['title'] }}</p>
                        <p class="text-sm text-slate-400">Responsable: {{ $meeting['owner'] }}</p>
                    </div>
                    <div class="flex flex-col items-start gap-3 text-sm text-slate-200 md:items-end">
                        <span class="inline-flex items-center gap-2 rounded-full bg-slate-800/80 px-3 py-1">
                            @include('livewire.dashboard.svg-icon', ['name' => 'clock', 'classes' => 'h-4 w-4'])
                            {{ $meeting['date'] }}
                        </span>
                        <span class="inline-flex items-center gap-2 rounded-full bg-primary-500/20 px-3 py-1 font-semibold text-primary-200">
                            @include('livewire.dashboard.svg-icon', ['name' => 'bookmark', 'classes' => 'h-4 w-4'])
                            {{ $meeting['status'] }}
                        </span>
                    </div>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    @foreach ($meeting['tags'] as $tag)
                        <span class="rounded-full bg-slate-800/80 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-slate-300">{{ $tag }}</span>
                    @endforeach
                </div>
            </li>
        @endforeach
    </ul>
</section>
