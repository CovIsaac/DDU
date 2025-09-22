@php
    $kpis = [
        [
            'label' => 'Impacto DDU',
            'value' => '87%',
            'description' => 'Porcentaje de equipos que reportan mejora en coordinación tras implementar el playbook DDU.',
        ],
        [
            'label' => 'Tiempo promedio de respuesta',
            'value' => '3.4 h',
            'description' => 'Reducción del 25% frente a la línea base del trimestre anterior.',
        ],
        [
            'label' => 'Engagement en notas',
            'value' => '68 contribuciones',
            'description' => 'Comentarios y coediciones realizadas en los últimos 14 días.',
        ],
    ];
@endphp

<div class="space-y-8">
    <section class="rounded-3xl border border-white/5 bg-gradient-to-br from-slate-900 via-slate-950 to-slate-900/80 p-8 text-white shadow-xl shadow-primary-950/40">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-primary-300">DDU Analytics</p>
                <h1 class="mt-2 text-3xl font-semibold sm:text-4xl">Inteligencia operativa</h1>
                <p class="mt-3 max-w-3xl text-base text-slate-300">Descubre cómo las dinámicas de reunión y colaboración impactan la experiencia DDU en toda la organización.</p>
            </div>
            <div class="flex items-center gap-3">
                <button class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/10 px-5 py-3 text-sm font-semibold uppercase tracking-widest text-white transition hover:border-primary-400/60">
                    Descargar reporte mensual
                </button>
            </div>
        </div>
    </section>

    <div class="grid gap-6 lg:grid-cols-3">
        @foreach ($kpis as $kpi)
            <article class="group relative overflow-hidden rounded-3xl border border-white/5 bg-white/5 p-6 text-white transition hover:border-primary-400/60">
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-primary-200">{{ $kpi['label'] }}</p>
                <p class="mt-4 text-4xl font-semibold">{{ $kpi['value'] }}</p>
                <p class="mt-4 text-sm text-slate-300">{{ $kpi['description'] }}</p>
                <div class="pointer-events-none absolute inset-0 opacity-0 mix-blend-screen transition duration-500 group-hover:opacity-100">
                    <div class="absolute -right-12 top-10 h-40 w-40 rounded-full bg-primary-500/20 blur-3xl"></div>
                    <div class="absolute -left-10 bottom-4 h-32 w-32 rounded-full bg-sky-500/20 blur-3xl"></div>
                </div>
            </article>
        @endforeach
    </div>

    <section class="grid gap-6 lg:grid-cols-[minmax(0,3fr)_minmax(0,2fr)]">
        <div class="rounded-3xl border border-white/5 bg-slate-900/70 p-6 text-white">
            <header class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-semibold">Tendencia semanal</h2>
                    <p class="text-sm text-slate-400">Comparativa de reuniones realizadas vs. planificadas.</p>
                </div>
                <span class="rounded-full bg-primary-500/20 px-3 py-1 text-xs font-semibold uppercase tracking-widest text-primary-200">+14% crecimiento</span>
            </header>
            <div class="mt-8 h-48 rounded-2xl bg-gradient-to-br from-primary-500/10 via-slate-900 to-slate-900/80">
                <div class="flex h-full items-end justify-between gap-2 px-4 pb-4">
                    @foreach (['L', 'M', 'X', 'J', 'V', 'S', 'D'] as $index => $day)
                        @php
                            $height = [40, 70, 55, 80, 65, 30, 45][$index];
                        @endphp
                        <div class="flex flex-col items-center gap-2 text-xs text-slate-400">
                            <div class="flex h-32 w-8 items-end rounded-full bg-white/5">
                                <div class="w-full rounded-full bg-gradient-to-t from-primary-500 to-sky-400" style="height: {{ $height }}%"></div>
                            </div>
                            <span>{{ $day }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="rounded-3xl border border-white/5 bg-slate-900/70 p-6 text-white">
            <h2 class="text-xl font-semibold">Top responsables</h2>
            <ul class="mt-4 space-y-4">
                @foreach ([
                    ['name' => 'Laura Martínez', 'meetings' => 12],
                    ['name' => 'Equipo Producto', 'meetings' => 9],
                    ['name' => 'Customer Success', 'meetings' => 7],
                    ['name' => 'Operaciones', 'meetings' => 6],
                ] as $leader)
                    <li class="flex items-center justify-between rounded-2xl border border-white/5 bg-white/5 px-4 py-3 text-sm text-slate-200">
                        <span>{{ $leader['name'] }}</span>
                        <span class="inline-flex items-center gap-2 text-primary-200">
                            @include('livewire.dashboard.svg-icon', ['name' => 'user-group', 'classes' => 'h-4 w-4'])
                            {{ $leader['meetings'] }}
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>
