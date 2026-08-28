(() => {
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const openIcon = document.getElementById('menu-icon-open');
    const closeIcon = document.getElementById('menu-icon-close');

    if (toggle && menu) {
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
    }

    const yearEl = document.getElementById('year');
    if (yearEl) {
        yearEl.textContent = String(new Date().getFullYear());
    }

    const form = document.getElementById('contact-form');
    if (!form) return;

    const status = document.getElementById('form-status');

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const name = form.querySelector('#name').value.trim();
        const email = form.querySelector('#email').value.trim();
        const message = form.querySelector('#message').value.trim();

        if (!name || !email || !message) {
            status.classList.remove('hidden');
            status.className = 'mb-6 flex items-start gap-3 rounded-xl border border-rose-400/30 bg-rose-400/10 p-4 text-sm text-rose-200';
            status.textContent = 'Please fill in all fields before sending.';
            return;
        }

        const subject = encodeURIComponent(`Portfolio inquiry from ${name}`);
        const body = encodeURIComponent(`Name: ${name}\nEmail: ${email}\n\n${message}`);
        window.location.href = `mailto:hello@ami.dev?subject=${subject}&body=${body}`;

        status.className = 'mb-6 flex items-start gap-3 rounded-xl border border-emerald-400/30 bg-emerald-400/10 p-4 text-sm text-emerald-200';
        status.textContent = 'Your email app should open — thanks for reaching out!';
    });
})();
