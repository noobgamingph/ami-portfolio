<section id="contact" class="border-t border-white/5 bg-zinc-950 py-24">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-14 lg:grid-cols-5">
            <div class="lg:col-span-2">
                <span class="text-xs font-semibold uppercase tracking-widest text-accent-400">Contact</span>
                <h2 class="mt-4 font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Let's build something great together.
                </h2>
                <p class="mt-6 leading-relaxed text-zinc-400">
                    Have a project in mind or just want to talk shop? Drop me a message —
                    I'll get back to you within 24 hours. You can also reach me directly
                    through the channels below.
                </p>

                <ul class="mt-10 space-y-4">
                    @foreach ($socials as $social)
                        <li>
                            <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer"
                                class="group flex items-center justify-between rounded-xl border border-white/10 bg-zinc-900/60 p-4 transition hover:border-accent-400/40 hover:bg-zinc-900">
                                <span class="flex items-center gap-4">
                                    <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-accent-400/10 text-accent-400">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            @if ($loop->first)
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            @elseif ($loop->iteration === 2)
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0" />
                                            @else
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                            @endif
                                        </svg>
                                    </span>
                                    <span>
                                        <span class="block font-semibold text-white">{{ $social['name'] }}</span>
                                        <span class="block text-sm text-zinc-400">{{ $social['handle'] }}</span>
                                    </span>
                                </span>
                                <svg class="h-4 w-4 text-zinc-500 transition group-hover:translate-x-0.5 group-hover:text-accent-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="lg:col-span-3">
                @if (session('status'))
                    <div class="mb-6 flex items-start gap-3 rounded-xl border border-emerald-400/30 bg-emerald-400/10 p-4 text-sm text-emerald-200">
                        <svg class="mt-0.5 h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->has('send'))
                    <div class="mb-6 flex items-start gap-3 rounded-xl border border-rose-400/30 bg-rose-400/10 p-4 text-sm text-rose-200">
                        <svg class="mt-0.5 h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                        {{ $errors->first('send') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST"
                    class="rounded-2xl border border-white/10 bg-zinc-900/60 p-6 sm:p-8">
                    @csrf

                    <div class="grid gap-6 sm:grid-cols-2">
                        <div>
                            <label for="name" class="mb-2 block text-sm font-medium text-zinc-200">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required maxlength="120"
                                placeholder="Jane Doe"
                                class="w-full rounded-lg border border-white/10 bg-zinc-950/60 px-4 py-3 text-sm text-white placeholder-zinc-500 outline-none transition focus:border-accent-400/60 focus:ring-2 focus:ring-accent-400/20 @error('name') border-rose-400/60 @enderror">
                            @error('name')
                                <p class="mt-2 text-xs text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="mb-2 block text-sm font-medium text-zinc-200">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required maxlength="255"
                                placeholder="jane@example.com"
                                class="w-full rounded-lg border border-white/10 bg-zinc-950/60 px-4 py-3 text-sm text-white placeholder-zinc-500 outline-none transition focus:border-accent-400/60 focus:ring-2 focus:ring-accent-400/20 @error('email') border-rose-400/60 @enderror">
                            @error('email')
                                <p class="mt-2 text-xs text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="message" class="mb-2 block text-sm font-medium text-zinc-200">Message</label>
                        <textarea id="message" name="message" rows="6" required maxlength="5000"
                            placeholder="Tell me about your project — goals, timeline and budget if you can."
                            class="w-full resize-none rounded-lg border border-white/10 bg-zinc-950/60 px-4 py-3 text-sm text-white placeholder-zinc-500 outline-none transition focus:border-accent-400/60 focus:ring-2 focus:ring-accent-400/20 @error('message') border-rose-400/60 @enderror">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-2 text-xs text-rose-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-8 flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center">
                        <p class="text-xs text-zinc-500">
                            Your details stay private and are only used to reply to your inquiry.
                        </p>
                        <button type="submit"
                            class="glow-accent inline-flex items-center gap-2 rounded-lg bg-accent-500 px-6 py-3 text-sm font-semibold text-zinc-950 transition hover:bg-accent-400">
                            Send Message
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
