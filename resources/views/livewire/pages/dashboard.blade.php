<div class="space-y-8">
    <section class="flex flex-col gap-6 rounded-3xl border border-white/5 bg-gradient-to-br from-slate-900 via-slate-950 to-slate-900/80 p-8 text-white shadow-xl shadow-primary-950/40">
        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-primary-300">DDU Intelligence</p>
                <h1 class="mt-2 text-3xl font-semibold sm:text-4xl">Panel de control</h1>
                <p class="mt-3 max-w-3xl text-base text-slate-300">Visualiza el pulso operativo de tus reuniones, notas colaborativas y métricas de impacto en un mismo lugar.</p>
            </div>
            <div class="flex flex-col gap-3 sm:flex-row sm:flex-wrap sm:items-center sm:justify-end">
                <span class="w-full rounded-full bg-primary-500/20 px-4 py-2 text-center text-sm font-semibold text-primary-100 sm:w-auto">Semana 32</span>
                <button class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-primary-500 px-5 py-3 text-sm font-semibold uppercase tracking-widest text-slate-950 transition hover:bg-primary-400 sm:w-auto">
                    Generar reporte
                </button>
            </div>
        </div>
        <div class="flex flex-wrap gap-3 text-xs text-slate-400">
            <span class="inline-flex items-center gap-2 rounded-full bg-white/5 px-3 py-1">Ecosistema DDU</span>
            <span class="inline-flex items-center gap-2 rounded-full bg-white/5 px-3 py-1">Actualizado hace 5 min</span>
            <span class="inline-flex items-center gap-2 rounded-full bg-white/5 px-3 py-1">Modo colaborativo</span>
        </div>
    </section>

    <livewire:dashboard.stats-widget />

    <div class="grid gap-6 xl:grid-cols-3">
        <div class="xl:col-span-2 space-y-6">
            <livewire:dashboard.recent-meetings />
        </div>
        <livewire:dashboard.quick-actions />
    </div>
</div>
