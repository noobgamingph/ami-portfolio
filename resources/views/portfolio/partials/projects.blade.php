<section id="projects" class="border-t border-white/5 bg-zinc-900/30 py-24">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="text-xs font-semibold uppercase tracking-widest text-accent-400">Portfolio</span>
            <h2 class="mt-4 font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                Selected work
            </h2>
            <p class="mt-4 leading-relaxed text-zinc-400">
                Thesis systems, personal projects and business websites —
                here's the kind of work I take on.
            </p>
        </div>

        <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($projects as $project)
                <article class="group flex flex-col overflow-hidden rounded-2xl border border-white/10 bg-zinc-900/70 transition duration-300 hover:-translate-y-1 hover:border-accent-400/40 hover:shadow-xl hover:shadow-emerald-500/5">
                    <div class="relative flex aspect-video items-center justify-center overflow-hidden bg-gradient-to-br {{ $project['gradient'] }}">
                        <div class="bg-grid absolute inset-0" aria-hidden="true"></div>
                        <span class="relative font-display text-5xl font-bold tracking-tight text-white/90 transition duration-300 group-hover:scale-110">
                            {{ $project['icon'] }}
                        </span>
                        <span class="absolute right-4 top-4 rounded-full bg-zinc-950/70 px-3 py-1 text-[11px] font-semibold uppercase tracking-wider text-zinc-300 backdrop-blur">
                            {{ $project['category'] }}
                        </span>
                    </div>

                    <div class="flex flex-1 flex-col p-6">
                        <h3 class="font-display text-xl font-semibold text-white">
                            {{ $project['title'] }}
                        </h3>
                        <p class="mt-3 flex-1 text-sm leading-relaxed text-zinc-400">
                            {{ $project['description'] }}
                        </p>

                        <div class="mt-5 flex flex-wrap gap-2">
                            @foreach ($project['tags'] as $tag)
                                <span class="rounded-md border border-white/10 bg-zinc-950/60 px-2.5 py-1 text-xs font-medium text-zinc-300">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>

                        <a href="#contact" class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-accent-400 transition hover:text-accent-300">
                            Start a similar project
                            <svg class="h-4 w-4 transition group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
