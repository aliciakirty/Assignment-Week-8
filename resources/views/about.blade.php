@extends('layouts.app')

@section('title', 'About — Alicia Kirty')

@section('content')

<section class="bg-[#eee8f8] px-5 py-6 md:px-8 md:py-8">
    <div class="mx-auto max-w-7xl">
        <p class="text-xs font-bold uppercase tracking-[.2em] text-[#9478a8]">
            A little about me
        </p>
    </div>
</section>

<section class="mx-auto grid max-w-7xl gap-8 px-5 py-16 md:px-8 lg:grid-cols-[.8fr_1.2fr]">

    <div class="rounded-[2.5rem] bg-gradient-to-br from-[#d8eafa] via-[#e8ddf5] to-[#f7dce8] p-8 transition hover:-translate-y-1 hover:shadow-md">

        <div class="grid h-64 place-items-center rounded-[2rem] bg-white/50 text-6xl font-black text-[#8f78b6]">
            AK
        </div>

        <div class="mt-6 rounded-3xl bg-white/70 p-5">
            <p class="text-xs font-bold uppercase tracking-widest text-[#9a82a7]">
                Currently
            </p>

            <p class="mt-2 text-xl font-black">
                Learning, building, and growing.
            </p>
        </div>

    </div>

    <div>
        <p class="text-xs font-bold uppercase tracking-[.2em] text-[#a184b2]">
            My story
        </p>

        <h2 class="mt-2 text-3xl font-black md:text-4xl">
            From learning concepts to building projects.
        </h2>

        <p class="mt-6 leading-7 text-[#746b7d]">
            I'm an Informatics student at Universitas Ciputra, currently learning
            technology through projects and experiments. I'm also exploring how
            applications are built, structured, and used.
        </p>

        <p class="mt-5 leading-7 text-[#746b7d]">
            I'm currently exploring Laravel and Web Development, Database, Flutter,
            and UI and responsive design. Each project gives me an opportunity to
            try something new, improve my skills, and understand the development
            process better.
        </p>

        <div class="mt-8 grid gap-4 sm:grid-cols-2">

            <div class="rounded-3xl bg-[#f8f0ff] p-5">
                <p class="font-black">Web Development</p>

                <p class="mt-2 text-sm text-[#756d7d]">
                    Laravel · PHP · HTML · CSS · Tailwind
                </p>
            </div>

            <div class="rounded-3xl bg-[#eef7fb] p-5">
                <p class="font-black">UI & Design</p>

                <p class="mt-2 text-sm text-[#756d7d]">
                    Responsive · Layout · Visual Design
                </p>
            </div>

        </div>
    </div>

</section>

<section class="bg-[#f8f1fa] px-5 py-16 md:px-8">

    <div class="mx-auto max-w-7xl">

        <p class="text-xs font-bold uppercase tracking-[.2em] text-[#a184b2]">
            What I'm learning
        </p>

        <h2 class="mt-2 text-3xl font-black md:text-4xl">
            Things I'm exploring.
        </h2>

        <p class="mt-2 text-sm text-[#756d7d]">
            Exploring MySQL, data management, migrations, and how applications work with data.
        </p>

        <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

            <div class="rounded-3xl bg-white p-6 transition hover:-translate-y-1 hover:shadow-md">
                <span class="text-2xl">✦</span>

                <h3 class="mt-4 font-black">
                    Laravel
                </h3>

                <p class="mt-2 text-sm text-[#756d7d]">
                    Building web applications with PHP and Laravel.
                </p>
            </div>

            <div class="rounded-3xl bg-[#fff0f5] p-6 transition hover:-translate-y-1 hover:shadow-md">
                <span class="text-2xl">✦</span>

                <h3 class="mt-4 font-black">
                    Web Development
                </h3>

                <p class="mt-2 text-sm text-[#756d7d]">
                    Exploring HTML, CSS, Tailwind, routing, and responsive layouts.
                </p>
            </div>

            <div class="rounded-3xl bg-[#eef7fb] p-6 transition hover:-translate-y-1 hover:shadow-md">
                <span class="text-2xl">✦</span>

                <h3 class="mt-4 font-black">
                    Database
                </h3>

                <p class="mt-2 text-sm text-[#756d7d]">
                    Learning MySQL, data management, and how applications work with data.
                </p>
            </div>

            <div class="rounded-3xl bg-[#f8f0ff] p-6 transition hover:-translate-y-1 hover:shadow-md">
                <span class="text-2xl">✦</span>

                <h3 class="mt-4 font-black">
                    Flutter
                </h3>

                <p class="mt-2 text-sm text-[#756d7d]">
                    Exploring mobile application development and interface design.
                </p>
            </div>

        </div>

    </div>

</section>

<section class="mx-auto max-w-5xl px-5 py-16 md:px-8">

    <p class="text-xs font-bold uppercase tracking-[.2em] text-[#a184b2]">
        My journey
    </p>

    <h2 class="mt-2 text-3xl font-black md:text-4xl">
        Learning, building, and growing.
    </h2>

    <p class="mt-4 leading-7 text-[#746b7d]">
        A continuous journey of learning, building projects, and improving
        my technical and creative skills.
    </p>

    <div class="mt-8 space-y-4">

        <div class="rounded-3xl border border-[#eadff0] bg-white p-6">

            <span class="text-sm font-bold text-[#a184b2]">
                01
            </span>

            <h3 class="mt-2 text-xl font-black text-[#40364f]">
                Learn the fundamentals
            </h3>

            <p class="mt-2 text-sm leading-6 text-[#756d7d]">
                Building a strong foundation in programming, databases, Git,
                and project structure.
            </p>

        </div>

        <div class="rounded-3xl border border-[#eadff0] bg-[#f8f0ff] p-6">

            <span class="text-sm font-bold text-[#a184b2]">
                02
            </span>

            <h3 class="mt-2 text-xl font-black text-[#40364f]">
                Build real projects
            </h3>

            <p class="mt-2 text-sm leading-6 text-[#756d7d]">
                Applying what I learn through web and application projects
                using Laravel, Flutter, and other technologies.
            </p>

        </div>

        <div class="rounded-3xl border border-[#eadff0] bg-[#eef7fb] p-6">

            <span class="text-sm font-bold text-[#a184b2]">
                03
            </span>

            <h3 class="mt-2 text-xl font-black text-[#40364f]">
                Keep improving
            </h3>

            <p class="mt-2 text-sm leading-6 text-[#756d7d]">
                Learning from each project while improving my technical,
                problem-solving, and design skills.
            </p>

        </div>

    </div>

</section>

@endsection