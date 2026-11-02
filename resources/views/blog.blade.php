@extends('layouts.app')

@section('title', 'About — Alicia Kirty')

@section('content')

    <section class="bg-[#f1ebf8] px-5 py-16 md:px-8 md:py-20">
        <div class="mx-auto max-w-7xl">

            <span class="rounded-full bg-white px-4 py-2 text-xs font-bold uppercase tracking-[.2em] text-[#9478a8]">
                My Blog
            </span>

            <h1 class="mt-6 max-w-5xl text-5xl font-black leading-tight text-[#40364f] md:text-7xl">
                A little look into my
                <span class="text-[#9b7bb1]">learning process.</span>
            </h1>

            <p class="mt-6 text-lg leading-8 text-[#746b7d]">
                Exploring Laravel, Flutter, and Design while turning what I learn into projects, ideas, and
                experiences along the way.
            </p>

        </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 py-16 md:px-8">

        <div class="grid gap-6 lg:grid-cols-2">

            <article
                class="rounded-[2rem] border border-[#eadff0] bg-white p-4 shadow-xl shadow-[#8f78b6]/5 lg:col-span-2 transition hover:-translate-y-1 hover:shadow-md">

                <div class="grid gap-7 md:grid-cols-[.9fr_1.1fr] md:items-center">

                    <div class="flex min-h-64 items-end rounded-[1.5rem] bg-[#fff0d9] p-6">

                        <span class="rounded-full bg-white/80 px-3 py-1 text-xs font-bold">
                            Laravel
                        </span>

                    </div>

                    <div class="p-2 md:p-5">

                        <p class="text-xs font-bold uppercase tracking-widest text-[#a184b2]">
                            Featured note · 2026
                        </p>

                        <h2 class="mt-3 text-3xl font-black">
                            My Journey with Laravel
                        </h2>

                        <p class="mt-4 leading-7 text-[#756d7d]">
                            I'm currently exploring Laravel and learning how routing, controllers, Blade,
                            migrations, databases, and MVC work together to build web applications.
                        </p>

                        <a href="/about"
                            class="mt-6 inline-flex rounded-full bg-[#8f78b6] transition hover:-translate-y-1 hover:shadow-md px-5 py-3 text-sm font-bold text-white">
                            Explore my work →
                        </a>

                    </div>

                </div>

            </article>

            <article class="rounded-[2rem] bg-[#fff0f5] p-7 transition hover:-translate-y-1 hover:shadow-md">

                <span class="text-3xl">🎀</span>

                <p class="mt-8 text-xs font-bold uppercase tracking-widest text-[#a56d8b]">
                    Web Development
                </p>

                <h2 class="mt-2 text-2xl font-black">
                    Building with Laravel
                </h2>

                <p class="mt-3 text-sm leading-6 text-[#756d7d]">
                    Exploring routes, controllers, Blade, migrations, databases, and MVC while building web
                    applications with Laravel.
                </p>

                <a href="/about" class="mt-6 inline-block text-sm font-bold text-[#9a6e88]">
                    View project ↗
                </a>

            </article>

            <article class="rounded-[2rem] bg-[#eef7fb] p-7 transition hover:-translate-y-1 hover:shadow-md">

                <span class="text-3xl">☁️</span>

                <p class="mt-8 text-xs font-bold uppercase tracking-widest text-[#6489a0]">
                    Database
                </p>

                <h2 class="mt-2 text-2xl font-black">
                    Exploring Database & MySQL
                </h2>

                <p class="mt-3 text-sm leading-6 text-[#756d7d]">
                    Learning how to manage application data using MySQL, including tables, migrations,
                    relationships, and data management.
                </p>

                <a href="/about" class="mt-6 inline-block text-sm font-bold text-[#6489a0]">
                    View skills ↗
                </a>

            </article>

            <article class="rounded-[2rem] bg-[#f8f0ff] p-7 transition hover:-translate-y-1 hover:shadow-md">

                <span class="text-3xl">🪻</span>

                <p class="mt-8 text-xs font-bold uppercase tracking-widest text-[#8f78b6]">
                    Flutter
                </p>

                <h2 class="mt-2 text-2xl font-black">
                    Building with Flutter
                </h2>

                <p class="mt-3 text-sm leading-6 text-[#756d7d]">
                    Exploring mobile application development through responsive layouts, Material Design,
                    navigation, data handling, and local storage.
                </p>

                <a href="/about" class="mt-6 inline-block text-sm font-bold text-[#8f78b6]">
                    View process ↗
                </a>

            </article>

            <article class="rounded-[2rem] bg-[#fff6e8] p-7 transition hover:-translate-y-1 hover:shadow-md">

                <span class="text-3xl">✨</span>

                <p class="mt-8 text-xs font-bold uppercase tracking-widest text-[#aa8760]">
                    UI / UX
                </p>

                <h2 class="mt-2 text-2xl font-black">
                    Designing Simple Interfaces
                </h2>

                <p class="mt-3 text-sm leading-6 text-[#756d7d]">
                    Exploring simple and expressive interfaces through layout, visual hierarchy, responsive design,
                    and consistent styling.
                </p>

                <a href="/about" class="mt-6 inline-block text-sm font-bold text-[#9a7a5b]">
                    Explore design ↗
                </a>

            </article>

        </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 pb-20 md:px-8">

        <div class="rounded-[2.5rem] bg-[#514565] px-7 py-12 text-white md:px-12">

            <p class="text-xs font-bold uppercase tracking-[.2em] text-[#dfd2eb]">
                Learning Journey
            </p>

            <h2 class="mt-3 max-w-3xl text-3xl font-black md:text-5xl">
                Still learning, still building, still exploring.
            </h2>

            <p class="mt-5 max-w-2xl leading-7 text-[#e5ddec]">
                Every project is part of my learning process, helping me understand technology better while turning
                ideas into something useful.
            </p>

            <a href="/contact"
                class="mt-7 inline-flex rounded-full bg-[#f7dce8] px-6 py-3 font-bold text-[#5a4967] transition hover:-translate-y-1">
                Start a conversation →
            </a>

        </div>
    </section>
@endsection