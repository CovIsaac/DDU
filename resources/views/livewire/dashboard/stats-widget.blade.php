<div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
    @foreach ($metrics as $metric)
        <article class="group relative overflow-hidden rounded-3xl bg-slate-900/70 p-5 ring-1 ring-white/10 transition hover:-translate-y-1 hover:ring-primary-400">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-300">{{ $metric['label'] }}</p>
                    <p class="mt-3 text-3xl font-semibold text-white">{{ $metric['value'] }}</p>
                </div>
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary-500/20 text-primary-300">
                    @include('livewire.dashboard.svg-icon', ['name' => $metric['icon']])
                </div>
            </div>
            <dl class="mt-6 flex items-center gap-2 text-xs font-medium text-primary-200">
                <dt class="rounded-full bg-primary-500/20 px-2 py-1 text-primary-100">{{ $metric['trend'] }}</dt>
                <dd class="text-slate-400">{{ $metric['trend_label'] }}</dd>
            </dl>
            <div class="pointer-events-none absolute inset-0 opacity-0 mix-blend-screen transition duration-500 group-hover:opacity-100">
                <div class="absolute -right-16 -top-16 h-32 w-32 rounded-full bg-primary-500/30 blur-3xl"></div>
                <div class="absolute -bottom-20 -left-10 h-36 w-36 rounded-full bg-sky-400/20 blur-3xl"></div>
            </div>
        </article>
    @endforeach
</div>
