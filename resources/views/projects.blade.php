@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto px-6 py-16">

        <div style="background-color:#6b7f96;" class="rounded-2xl p-8 mb-12 text-white shadow-lg text-center">
            <h1 class="text-4xl">Projects & Achievements</h1>
            <p class="mt-2 text-yellow-100 text-sm">A showcase of what I've built and accomplished.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-6">

            <!-- cards for each project -->
            <div class="bg-white rounded-2xl p-8 shadow hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2" style="color:#6b7f96;">Project Title</h2>
                <p class="text-sm text-gray-500 mb-4">date</p>
                <p class="text-sm leading-relaxed">description of the project, what problem it solves, and what was learned</p>
                <div class="mt-4 flex gap-2 flex-wrap">
                    <span class="text-xs px-3 py-1 rounded-full text-white" style="background:#6b7f96;">C#</span>
                    <span class="text-xs px-3 py-1 rounded-full text-white" style="background:#6b7f96;">SQL</span>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow hover:shadow-xl transition border-2" style="border-color:#b5c9a0;">
                <p class="text-gray-400 text-sm italic text-center mt-8">More projects coming soon...</p>
            </div>

        </div>
    </div>
@endsection
