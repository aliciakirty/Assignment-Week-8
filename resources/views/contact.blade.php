@extends('layouts.app')

@section('title', 'About — Alicia Kirty')

@section('content')

    <section class="bg-[#f1ebf8] px-5 py-16 md:px-8 md:py-20">
        <div class="mx-auto max-w-7xl">
            <p class="text-xs font-bold uppercase tracking-[.2em] text-[#a184b2]">Let's connect</p>
            <h1 class="mt-3 max-w-4xl text-5xl font-black leading-tight text-[#40364f] md:text-7xl">Have something
                <span class="text-[#9b7bb1]">in mind?</span>
            </h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-[#746b7d]">
                Have a project, idea, or just want to say hello? I'd love to hear from you.
            </p>
        </div>
    </section>

    <section id="form" class="mx-auto grid max-w-7xl gap-7 px-5 py-16 md:px-8 lg:grid-cols-[1.15fr_.85fr]">
        <form class="rounded-[2rem] border border-[#eadff0] bg-white p-6 shadow-xl shadow-[#8f78b6]/5 md:p-8">
            <div class="grid gap-5 md:grid-cols-2">
                <label class="text-sm font-bold">Your name
                    <input type="text" placeholder="Enter your name"
                        class="mt-2 w-full rounded-2xl border border-[#e4d9eb] bg-[#fffafc] px-4 py-3.5 outline-none transition focus:border-[#a58bc0] focus:ring-4 focus:ring-[#eee6f8]">
                </label>
                <label class="text-sm font-bold">Email address
                    <input type="email" placeholder="Enter your email"
                        class="mt-2 w-full rounded-2xl border border-[#e4d9eb] bg-[#fffafc] px-4 py-3.5 outline-none transition focus:border-[#a58bc0] focus:ring-4 focus:ring-[#eee6f8]">
                </label>
            </div>
            <label class="mt-5 block text-sm font-bold">Subject
                <input type="text" placeholder="What would you like to discuss?"
                    class="mt-2 w-full rounded-2xl border border-[#e4d9eb] bg-[#fffafc] px-4 py-3.5 outline-none transition focus:border-[#a58bc0] focus:ring-4 focus:ring-[#eee6f8]">
            </label>
            <label class="mt-5 block text-sm font-bold">Your message
                <textarea rows="7" placeholder="Tell me a little about it..."
                    class="mt-2 w-full resize-none rounded-2xl border border-[#e4d9eb] bg-[#fffafc] px-4 py-3.5 outline-none transition focus:border-[#a58bc0] focus:ring-4 focus:ring-[#eee6f8]"></textarea>
            </label>
            <button type="submit"
                class="mt-5 rounded-full bg-[#8f78b6] px-6 py-3.5 font-bold text-white shadow-lg shadow-[#b9a7d5]/30 transition hover:-translate-y-0.5">
                Send message ↗
            </button>
        </form>

        <div class="rounded-[2rem] bg-gradient-to-br from-[#d8eafa] via-[#eee3f7] to-[#f7dce8] p-7 md:p-8">
            <p class="text-xs font-bold uppercase tracking-[.2em] text-[#806a91]">Contact information</p>
            <h2 class="mt-3 text-3xl font-black">
                Alicia Kirty.
            </h2>
            <p class="mt-4 leading-7 text-[#6e6575]">
                Let's connect and stay in touch through the social media and contact information below.
            </p>
            <div class="mt-8 space-y-4">
                <div class="rounded-3xl bg-white/70 p-5">
                    <p class="text-xs font-bold uppercase tracking-widest text-[#9a82a7]">Email</p>
                    <p class="mt-1 font-bold">aliciakirty01@student.ciputra.ac.id</p>
                </div>
                <div class="rounded-3xl bg-white/70 p-5">
                    <p class="text-xs font-bold uppercase tracking-widest text-[#9a82a7]">
                        Social
                    </p>

                    <div class="mt-3 flex gap-3">
                        <a href="#"
                            class="rounded-full bg-white px-4 py-2 text-sm font-bold shadow-sm transition hover:bg-[#8f78b6] hover:text-white">
                            Instagram
                        </a>

                        <a href="#"
                            class="rounded-full bg-white px-4 py-2 text-sm font-bold shadow-sm transition hover:bg-[#8f78b6] hover:text-white">
                            LinkedIn
                        </a>

                        <a href="#"
                            class="rounded-full bg-white px-4 py-2 text-sm font-bold shadow-sm transition hover:bg-[#8f78b6] hover:text-white">
                            GitHub
                        </a>
                    </div>
                </div>
                <div class="rounded-3xl bg-white/70 p-5">
                    <p class="text-xs font-bold uppercase tracking-widest text-[#9a82a7]">Location</p>
                    <p class="mt-1 font-bold">Makassar, Indonesia</p>
                </div>
            </div>
        </div>
    </section>
@endsection
