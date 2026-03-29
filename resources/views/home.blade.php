@extends('layouts.app')

@section('content')
    <section class="min-h-screen flex flex-col items-center justify-center text-center px-6 py-20">

        <!-- Blue header card -->
        <div style="background-color:#6b7f96;" class="rounded-2xl px-12 py-10 max-w-2xl shadow-xl">
            <h1 class="text-5xl text-white mb-2">Welcome</h1>
            <p class="text-yellow-100 text-lg font-light mt-4 leading-relaxed">
                Hi, I'm Flor Bosch, a student Applied Computer Science at Thomas More University of Applied Sciences.
                This portfolio is a window into who I am, what I'm building, and where I'm headed.
            </p>
            <div class="mt-8 flex gap-4 justify-center flex-wrap">
                <a href="{{ route('about') }}"
                   style="background-color:#b5c9a0; color:#2e3a2f;"
                   class="px-6 py-3 rounded-full font-semibold hover:opacity-80 transition shadow">
                    About Me
                </a>
                <a href="{{ route('projects') }}"
                   class="px-6 py-3 rounded-full font-semibold border-2 border-white text-white hover:bg-white hover:text-[#6b7f96] transition shadow">
                    My Projects
                </a>
            </div>
        </div>

    </section>
@endsection
