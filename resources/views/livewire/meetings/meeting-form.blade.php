<section class="rounded-3xl bg-gradient-to-br from-slate-900 via-slate-900/80 to-slate-900/60 p-6 ring-1 ring-white/10">
    <header>
        <h2 class="text-xl font-semibold text-white">Programar reunión</h2>
        <p class="mt-1 text-sm text-slate-400">Coordina y comunica la próxima conversación estratégica.</p>
    </header>

    @if ($showConfirmation)
        <div x-data="{ visible: true }" x-show="visible" x-transition.opacity.duration.300ms x-init="setTimeout(() => visible = false, 4000)" class="mt-4 rounded-2xl border border-primary-400/40 bg-primary-500/20 px-4 py-3 text-sm text-primary-100">
            ¡Reunión creada con éxito! El equipo recibirá la notificación en minutos.
        </div>
    @endif

    <form wire:submit.prevent="schedule" class="mt-6 space-y-5">
        <div>
            <label for="title" class="text-sm font-semibold uppercase tracking-widest text-slate-300">Título</label>
            <input id="title" type="text" wire:model.defer="title" class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-primary-400 focus:outline-none focus:ring-2 focus:ring-primary-500/40" placeholder="Ej. Comité de innovación" />
            @error('title')
                <p class="mt-1 text-xs font-semibold text-rose-400">{{ $message }}</p>
            @enderror
        </div>
        <div class="grid gap-4 md:grid-cols-2">
            <div>
                <label for="date" class="text-sm font-semibold uppercase tracking-widest text-slate-300">Fecha</label>
                <input id="date" type="date" wire:model.defer="date" class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white focus:border-primary-400 focus:outline-none focus:ring-2 focus:ring-primary-500/40" />
                @error('date')
                    <p class="mt-1 text-xs font-semibold text-rose-400">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="time" class="text-sm font-semibold uppercase tracking-widest text-slate-300">Hora</label>
                <input id="time" type="time" wire:model.defer="time" class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white focus:border-primary-400 focus:outline-none focus:ring-2 focus:ring-primary-500/40" />
                @error('time')
                    <p class="mt-1 text-xs font-semibold text-rose-400">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div>
            <label for="participants" class="text-sm font-semibold uppercase tracking-widest text-slate-300">Participantes</label>
            <input id="participants" type="text" wire:model.defer="participants" class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-primary-400 focus:outline-none focus:ring-2 focus:ring-primary-500/40" placeholder="Añade correos separados por coma" />
            @error('participants')
                <p class="mt-1 text-xs font-semibold text-rose-400">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="notes" class="text-sm font-semibold uppercase tracking-widest text-slate-300">Notas</label>
            <textarea id="notes" rows="3" wire:model.defer="notes" class="mt-2 w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-primary-400 focus:outline-none focus:ring-2 focus:ring-primary-500/40" placeholder="Comparte la intención y los resultados esperados."></textarea>
            @error('notes')
                <p class="mt-1 text-xs font-semibold text-rose-400">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <p class="text-xs text-slate-400">Tus invitados recibirán recordatorios automáticos DDU.</p>
            <button type="submit" class="inline-flex items-center gap-2 rounded-full bg-primary-500 px-5 py-3 text-sm font-semibold uppercase tracking-widest text-slate-950 transition hover:bg-primary-400">
                @include('livewire.dashboard.svg-icon', ['name' => 'plus', 'classes' => 'h-4 w-4'])
                Programar
            </button>
        </div>
    </form>
</section>
