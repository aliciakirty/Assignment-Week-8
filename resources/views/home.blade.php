@extends('layouts.app')

@section('title', 'About — Alicia Kirty')

@section('content')

    <section class="relative overflow-hidden bg-[#f5effb]">
        <div class="absolute -left-24 top-10 h-72 w-72 rounded-full bg-[#d9ecfa] blur-3xl"></div>
        <div class="absolute -right-24 bottom-0 h-80 w-80 rounded-full bg-[#f7dce8] blur-3xl"></div>
        <div
            class="grid-pattern relative mx-auto grid max-w-7xl gap-12 px-5 py-16 md:px-8 md:py-24 lg:grid-cols-[1.15fr_.85fr] lg:items-center">
            <div>
                <span
                    class="inline-flex rounded-full border border-[#d8cbe8] bg-white/70 px-4 py-2 text-xs font-bold uppercase tracking-[.2em] text-[#8d719e]">
                    Hello there ✦
                </span>
                <p class="mt-7 text-sm font-bold uppercase tracking-[.18em] text-[#9d7eb0]">I'm Alicia Kirty✦
                </p>
                <h1
                    class="mt-3 max-w-3xl text-5xl font-black leading-[1.02] tracking-tight text-[#40364f] sm:text-6xl lg:text-7xl">
                    Learning, building, and
                    <span class="text-[#9b7bb1]">growing along the way.</span>
                </h1>
                <p class="mt-7 max-w-2xl text-base leading-7 text-[#6e6678] md:text-lg">
                    I'm an Informatics student exploring Web Development, Laravel, Flutter,
                    UI design, and creative technology through the projects I build.
                </p>
                <div class="mt-9 flex flex-wrap gap-3"><a href="/about"
                        class="rounded-full bg-[#8f78b6] px-6 py-3 font-bold text-white shadow-xl shadow-[#b4a3d0]/30 transition hover:-translate-y-1">Explore
                        my work ↗</a><a href="/contact"
                        class="rounded-full border border-[#d8cbe5] bg-white/70 px-6 py-3 font-bold text-[#655a72] transition hover:bg-white">Get
                        in touch</a></div>
                <div class="mt-12 flex flex-wrap gap-7 text-sm text-[#71687b]"><span>✦ Web Development</span><span>✦
                        UI &amp; UX</span><span>✦ Creative Tech</span></div>
            </div>

            <div class="relative mx-auto w-full max-w-md">
                <div class="absolute -inset-5 rounded-[3rem] bg-[#dcd2f3]/50 blur-2xl"></div>
                <div
                    class="soft-shadow relative rounded-[2.5rem] border border-white bg-white/80 p-5 backdrop-blur transition hover:-translate-y-1 hover:shadow-md">
                    <div class="rounded-[2rem] bg-gradient-to-br from-[#cfe7f7] via-[#e6daf4] to-[#f7d7e5] p-7">
                        <div class="flex items-center justify-between"><span
                                class="rounded-full bg-white/70 px-3 py-1 text-xs font-bold">2026</span><span
                                class="text-xl">✿</span></div>
                        <div
                            class="mx-auto mt-10 grid h-48 w-48 place-items-center rounded-full border-8 border-white/70 bg-[#bda8d4] text-5xl font-black text-white shadow-2xl">
                            AK</div>
                        <div class="mt-8 rounded-3xl bg-white/75 p-5 backdrop-blur">
                            <p class="text-xs font-bold uppercase tracking-widest text-[#9c87a9]">Current Status</p>
                            <p class="mt-2 text-2xl font-black text-[#514565]">Bachelor's Student 🎓</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 py-16 md:px-8 md:py-20">
        <div class="grid gap-4 sm:grid-cols-3">
            <div class="rounded-3xl border border-[#eadff0] bg-[#f8f0ff] p-7">
                <p class="text-4xl font-black text-[#75619a]">03+</p>
                <p class="mt-2 text-sm text-[#746b7e]">Projects & Experiments</p>
            </div>

            <div class="rounded-3xl border border-[#e5e6f1] bg-[#fff0f5] p-7">
                <p class="text-4xl font-black text-[#a56d8b]">Always</p>
                <p class="mt-2 text-sm text-[#746b7e]">Curious to Learn</p>
            </div>

            <div class="rounded-3xl border border-[#f0dfeb] bg-[#eef7fb] p-7">
                <p class="text-4xl font-black text-[#6489a0]">Design</p>
                <p class="mt-2 text-sm text-[#746b7e]">Simple & Creative</p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 pb-20 md:px-8">
        <div class="mb-10 flex items-end justify-between gap-4">
            <div>
                <p class="text-xs font-bold uppercase tracking-[.2em] text-[#a184b2]">Selected work</p>
                <h2 class="mt-2 text-3xl font-black text-[#40364f] md:text-4xl">What I've been building</h2>
            </div>
            <a href="/blog"
                class="hidden rounded-full bg-[#f0e9f7] px-4 py-2 text-sm font-bold text-[#75618b] sm:block transition hover:-translate-y-1 hover:shadow-md">
                See journal →</a>
        </div>
        <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">

            <article
                class ="group rounded-[2rem] border border-[#e8deef] bg-white p-3 soft-shadow transition hover:-translate-y-1 hover:shadow-md">
                <div class="flex h-52 items-end rounded-[1.5rem] bg-[#fff0d9] p-5">
                    <span class="rounded-full bg-white/80 px-3 py-1 text-xs font-bold">
                        Laravel
                    </span>
                </div>

                <div class="p-5">
                    <h3 class="text-xl font-black">Laravel Web Development</h3>

                    <p class="mt-2 text-sm leading-6 text-[#756d7d]">
                        Building web applications with Laravel through routing,
                        controllers, Blade, migrations, databases, and MVC architecture.
                    </p>

                    <a href="/blog" class="mt-5 inline-block text-sm font-bold text-[#8c70a9]">
                        View project ↗
                    </a>
                </div>
            </article>

            <article
                class="group rounded-[2rem] border border-[#e8deef] bg-white p-3 soft-shadow transition hover:-translate-y-1 hover:shadow-md">
                <div class="flex h-52 items-end rounded-[1.5rem] bg-[#d9ecf7] p-5">
                    <span class="rounded-full bg-white/80 px-3 py-1 text-xs font-bold">
                        Database
                    </span>
                </div>

                <div class="p-5">
                    <h3 class="text-xl font-black">Database & MySQL</h3>

                    <p class="mt-2 text-sm leading-6 text-[#756d7d]">
                        Learning database management with MySQL, including tables,
                        migrations, relationships, and data handling.
                    </p>

                    <a href="/about" class="mt-5 inline-block text-sm font-bold text-[#8c70a9]">
                        View skills ↗
                    </a>
                </div>
            </article>

            <article
                class="group rounded-[2rem] border border-[#e8deef] bg-white p-3 soft-shadow transition hover:-translate-y-1 hover:shadow-md">
                <div class="flex h-52 items-end rounded-[1.5rem] bg-[#f7dce8] p-5">
                    <span class="rounded-full bg-white/80 px-3 py-1 text-xs font-bold">
                        Flutter
                    </span>
                </div>

                <div class="p-5">
                    <h3 class="text-xl font-black">Flutter Application</h3>

                    <p class="mt-2 text-sm leading-6 text-[#756d7d]">
                        Developing Flutter applications with responsive layouts,
                        Material Design, navigation, data handling, and local storage.
                    </p>

                    <a href="/about" class="mt-5 inline-block text-sm font-bold text-[#8c70a9]">
                        View process ↗
                    </a>
                </div>
            </article>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 pb-20 md:px-8">
        <div class="rounded-[2.5rem] bg-[#514565] px-7 py-12 text-center text-white md:px-12">
            <p class="text-xs font-bold uppercase tracking-[.2em] text-[#dfd2eb]">Let's create something</p>
            <h2 class="mx-auto mt-3 max-w-2xl text-3xl font-black md:text-5xl">Have an idea?</h2>
            <a href="/contact"
                class="mt-7 inline-flex rounded-full bg-[#f7dce8] px-6 py-3 font-bold text-[#5a4967] transition hover:-translate-y-1">
                Start a conversation →</a>
        </div>
    </section>
@endsection