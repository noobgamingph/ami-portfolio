<header class="fixed inset-x-0 top-0 z-50 border-b border-white/5 bg-zinc-950/80 backdrop-blur-md">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 sm:px-8" aria-label="Main navigation">
        <a href="#home" class="font-display text-lg font-bold tracking-tight text-white">
            ami<span class="text-accent-400">.dev</span>
        </a>

        <div class="hidden items-center gap-8 text-sm font-medium text-zinc-400 md:flex">
            <a href="#about" class="transition hover:text-white">About</a>
            <a href="#skills" class="transition hover:text-white">Skills</a>
            <a href="#projects" class="transition hover:text-white">Projects</a>
            <a href="#contact" class="transition hover:text-white">Contact</a>
        </div>

        <div class="flex items-center gap-3">
            <a href="#contact"
                class="hidden rounded-lg bg-accent-500 px-4 py-2 text-sm font-semibold text-zinc-950 transition hover:bg-accent-400 hover:shadow-lg hover:shadow-emerald-500/25 sm:inline-flex">
                Hire Me
            </a>

            <button type="button" id="menu-toggle" aria-label="Toggle navigation menu" aria-expanded="false"
                class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 text-zinc-300 transition hover:border-emerald-400/40 hover:text-white md:hidden">
                <svg id="menu-icon-open" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="menu-icon-close" class="hidden h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </nav>

    <div id="mobile-menu" class="hidden border-t border-white/5 bg-zinc-950/95 px-5 pb-5 pt-2 md:hidden">
        <div class="flex flex-col gap-1 text-sm font-medium text-zinc-400">
            <a href="#about" class="rounded-lg px-3 py-2 transition hover:bg-white/5 hover:text-white">About</a>
            <a href="#skills" class="rounded-lg px-3 py-2 transition hover:bg-white/5 hover:text-white">Skills</a>
            <a href="#projects" class="rounded-lg px-3 py-2 transition hover:bg-white/5 hover:text-white">Projects</a>
            <a href="#contact" class="rounded-lg px-3 py-2 transition hover:bg-white/5 hover:text-white">Contact</a>
            <a href="#contact" class="mt-2 rounded-lg bg-accent-500 px-4 py-2 text-center font-semibold text-zinc-950 transition hover:bg-accent-400">
                Hire Me
            </a>
        </div>
    </div>
</header>

@push('scripts')
<script>
    (() => {
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');
        const openIcon = document.getElementById('menu-icon-open');
        const closeIcon = document.getElementById('menu-icon-close');

        if (!toggle || !menu) return;

        toggle.addEventListener('click', () => {
            const isOpen = menu.classList.toggle('hidden');
            toggle.setAttribute('aria-expanded', String(!isOpen));
            openIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        menu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                openIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });
    })();
</script>
@endpush
