<div class="space-y-8">
    <section class="rounded-3xl border border-white/5 bg-gradient-to-br from-slate-900 via-slate-950 to-slate-900/80 p-8 text-white shadow-xl shadow-primary-950/40">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-primary-300">DDU Meetings</p>
                <h1 class="mt-2 text-3xl font-semibold sm:text-4xl">Centro de reuniones</h1>
                <p class="mt-3 max-w-3xl text-base text-slate-300">Planifica, colabora y documenta cada reunión con la precisión y calidez de la identidad DDU.</p>
            </div>
            <div class="flex items-center gap-3">
                <button class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/10 px-5 py-3 text-sm font-semibold uppercase tracking-widest text-white transition hover:border-primary-400/60">
                    Importar desde calendario
                </button>
            </div>
        </div>
    </section>

    <div class="grid gap-6 lg:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] xl:grid-cols-[420px_minmax(0,1fr)]">
        <livewire:meetings.meeting-form />
        <livewire:meetings.meeting-list />
    </div>
</div>
