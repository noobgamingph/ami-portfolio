<section id="about" class="border-t border-white/5 bg-zinc-950 py-24">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-14 lg:grid-cols-2 lg:items-start">
            <div>
                <span class="text-xs font-semibold uppercase tracking-widest text-accent-400">About Me</span>
                <h2 class="mt-4 font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    I turn complex problems into clean, dependable code.
                </h2>
                <p class="mt-6 leading-relaxed text-zinc-400">
                    I'm Ami, a full-stack freelance developer with six years of experience
                    helping teams bring products to life. I specialise in the Laravel
                    ecosystem and modern JavaScript — pairing robust, testable backends
                    with interfaces people actually enjoy using.
                </p>
                <p class="mt-4 leading-relaxed text-zinc-400">
                    From scoping a first MVP to optimising systems handling millions of
                    requests, I own delivery end to end: architecture, implementation,
                    testing and deployment. Clear communication and clean code are the
                    two things I never compromise on.
                </p>

                <div class="mt-10 grid grid-cols-2 gap-4">
                    <div class="rounded-xl border border-white/10 bg-zinc-900/60 p-5">
                        <svg class="h-6 w-6 text-accent-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                        <h3 class="mt-4 font-semibold text-white">Full-cycle delivery</h3>
                        <p class="mt-2 text-sm text-zinc-400">From architecture and build to tests and deployment.</p>
                    </div>
                    <div class="rounded-xl border border-white/10 bg-zinc-900/60 p-5">
                        <svg class="h-6 w-6 text-accent-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                        <h3 class="mt-4 font-semibold text-white">Performance-first</h3>
                        <p class="mt-2 text-sm text-zinc-400">Fast apps, optimised queries, scalable architecture.</p>
                    </div>
                </div>
            </div>

            <div id="skills" class="lg:sticky lg:top-24">
                <span class="text-xs font-semibold uppercase tracking-widest text-accent-400">Tech Stack</span>
                <h2 class="mt-4 font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Tools I work with every day.
                </h2>
                <p class="mt-4 leading-relaxed text-zinc-400">
                    A pragmatic stack chosen for velocity, stability and long-term maintainability.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    @foreach ($skills as $skill)
                        <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-zinc-900/70 px-4 py-2 text-sm font-medium text-zinc-200 transition hover:border-accent-400/50 hover:bg-accent-400/10 hover:text-white">
                            <span class="h-1.5 w-1.5 rounded-full bg-accent-400"></span>
                            {{ $skill }}
                        </span>
                    @endforeach
                </div>

                <div class="mt-10 rounded-xl border border-white/10 bg-zinc-900/60 p-6">
                    <h3 class="font-semibold text-white">Currently exploring</h3>
                    <p class="mt-2 text-sm leading-relaxed text-zinc-400">
                        AI-powered product features, edge deployment and everything
                        that comes with Laravel 12 and the modern JS ecosystem.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
