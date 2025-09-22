@php
    $notes = [
        [
            'title' => 'Decisiones Comité DDU',
            'summary' => 'Priorizar roadmap de automatización, habilitar pilotos en dos regiones y reforzar acompañamiento de onboarding.',
            'author' => 'Carolina Ortiz',
            'updated_at' => 'Hace 2 horas',
            'tags' => ['Estrategia', 'Onboarding'],
        ],
        [
            'title' => 'Minuta Kick-off Atlas',
            'summary' => 'Objetivos compartidos, responsables asignados y KPI de éxito definidos con el equipo interdisciplinario.',
            'author' => 'Equipo Proyecto Atlas',
            'updated_at' => 'Hace 5 horas',
            'tags' => ['Proyecto Atlas', 'KPIs'],
        ],
        [
            'title' => 'Insights sesión clientes',
            'summary' => 'Clientes valoran seguimiento post-reunión, solicitan más automatización y visualizaciones en tiempo real.',
            'author' => 'Customer Success',
            'updated_at' => 'Ayer',
            'tags' => ['Clientes', 'Experiencia'],
        ],
    ];
@endphp

<div class="space-y-8">
    <section class="rounded-3xl border border-white/5 bg-gradient-to-br from-slate-900 via-slate-950 to-slate-900/80 p-8 text-white shadow-xl shadow-primary-950/40">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-primary-300">DDU Notes</p>
                <h1 class="mt-2 text-3xl font-semibold sm:text-4xl">Notas colaborativas</h1>
                <p class="mt-3 max-w-3xl text-base text-slate-300">Convierte las conversaciones en conocimiento accionable y accesible para todo el equipo.</p>
            </div>
            <button class="inline-flex items-center gap-2 rounded-full bg-primary-500 px-5 py-3 text-sm font-semibold uppercase tracking-widest text-slate-950 transition hover:bg-primary-400">
                Nueva nota
            </button>
        </div>
    </section>

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($notes as $note)
            <article class="relative flex h-full flex-col justify-between overflow-hidden rounded-3xl border border-white/5 bg-white/5 p-6 text-white transition hover:border-primary-400/60">
                <div>
                    <span class="inline-flex items-center gap-2 rounded-full bg-primary-500/20 px-3 py-1 text-xs font-semibold uppercase tracking-widest text-primary-200">{{ $note['updated_at'] }}</span>
                    <h2 class="mt-4 text-2xl font-semibold">{{ $note['title'] }}</h2>
                    <p class="mt-3 text-sm text-slate-300">{{ $note['summary'] }}</p>
                </div>
                <footer class="mt-6 flex flex-wrap items-center justify-between gap-3 text-sm text-slate-400">
                    <div class="inline-flex items-center gap-2">
                        @include('livewire.dashboard.svg-icon', ['name' => 'user-group', 'classes' => 'h-5 w-5 text-primary-200'])
                        {{ $note['author'] }}
                    </div>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($note['tags'] as $tag)
                            <span class="rounded-full bg-slate-900/80 px-3 py-1 text-xs font-semibold uppercase tracking-widest text-slate-300">{{ $tag }}</span>
                        @endforeach
                    </div>
                </footer>
                <div class="pointer-events-none absolute inset-0 opacity-0 mix-blend-screen transition duration-500 hover:opacity-100">
                    <div class="absolute -right-12 top-10 h-40 w-40 rounded-full bg-primary-500/20 blur-3xl"></div>
                    <div class="absolute -left-10 bottom-4 h-32 w-32 rounded-full bg-sky-500/20 blur-3xl"></div>
                </div>
            </article>
        @endforeach
    </div>
</div>
