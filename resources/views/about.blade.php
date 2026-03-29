@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto px-6 py-16">

        <!-- Header -->
        <div style="background-color:#6b7f96;" class="rounded-2xl p-10 flex flex-col md:flex-row items-center gap-8 mb-12 shadow-lg">
            <img src="{{ asset('images/picture.jpg') }}" alt="Flor Bosch"
                 class="w-36 h-36 rounded-full border-4 border-white object-cover shadow-md">
            <div class="text-white text-center md:text-left">
                <h1 class="text-4xl">Flor Bosch</h1>
                <p class="text-yellow-100 mt-1 tracking-wide uppercase text-sm">Student — Applied Computer Science</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- About -->
            <div class="bg-white rounded-2xl p-8 shadow">
                <h2 class="text-2xl mb-4" style="color:#6b7f96;">About Me</h2>
                <p class="leading-relaxed text-sm">
                    I am a calm and confident individual with strong self-promotion and public speaking skills.
                    My efficiency-driven mindset helps me achieve results quickly, and my adaptability ensures
                    I can learn and contribute to new workflows seamlessly. I value resilience, curiosity, and
                    empathy — using these to build strong connections and overcome challenges.
                </p>

                <h3 class="text-lg font-semibold mt-6 mb-2" style="color:#6b7f96;">Why Applied Computer Science?</h3>
                <p class="text-sm leading-relaxed">

                    I chose Applied Computer Science because I enjoy solving problems and building practical solutions with technology. The program offers a strong mix of theory and hands-on experience, which prepares me well for real-world challenges. It also opens up many career opportunities in a fast-growing and innovative field.
                </p>

                <h3 class="text-lg font-semibold mt-6 mb-2" style="color:#6b7f96;">Future Ambitions</h3>
                <p class="text-sm leading-relaxed">
                    My future ambition is to grow into a skilled software developer who can build efficient and user-friendly applications. I hope to work on innovative projects, continue learning new technologies, and eventually take on more responsibility within a development team. In the long term, I would like to contribute to meaningful solutions that have a real impact on people’s daily lives.
                </p>
            </div>

            <!-- Skills -->
            <div class="bg-white rounded-2xl p-8 shadow">
                <h2 class="text-2xl mb-6" style="color:#6b7f96;">Skills</h2>

                <h3 class="font-semibold text-sm uppercase tracking-wider mb-3">Technical</h3>
                <ul class="space-y-2 text-sm mb-6">
                    @foreach([
                        ['C#', 85], ['Python', 80], ['JavaScript', 75],
                        ['Java', 70], ['SQL / MySQL', 75], ['HTML & CSS', 80],
                        ['Linux', 65],
                    ] as [$skill, $pct])
                        <li>
                            <div class="flex justify-between mb-1">
                                <span>{{ $skill }}</span>
                            </div>
                            <div class="w-full rounded-full h-2" style="background:#e5e7eb;">
                                <div class="h-2 rounded-full" style="width:{{ $pct }}%; background-color:#6b7f96;"></div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <h3 class="font-semibold text-sm uppercase tracking-wider mb-3">Soft Skills</h3>
                <div class="flex flex-wrap gap-2 text-sm">
                    @foreach(['Public Speaking','Adaptability','Resilience','Curiosity','Empathy','Goal-Oriented','Analytical Thinking'] as $soft)
                        <span class="px-3 py-1 rounded-full text-white text-xs" style="background-color:#6b7f96;">{{ $soft }}</span>
                    @endforeach
                </div>
            </div>

            <!-- Hobbies -->
            <div class="bg-white rounded-2xl p-8 shadow">
                <h2 class="text-2xl mb-4" style="color:#6b7f96;">Hobbies</h2>
                <ul class="space-y-3 text-sm">
                    <li>🏕️ <strong>Boy Scout Leader</strong> — building leadership and teamwork</li>
                    <li>🚶 <strong>Walking</strong> — staying grounded and clear-headed</li>
                    <li>🎙️ <strong>Podcasts</strong> — keeping up with world events and ideas</li>
                    <li>🎮 <strong>Speedrunning</strong> — goal-oriented analytical problem-solving, optimizing for record-breaking times</li>
                </ul>
            </div>

            <!-- CV -->
            <div class="bg-white rounded-2xl p-8 shadow flex flex-col justify-between">
                <div>
                    <h2 class="text-2xl mb-4" style="color:#6b7f96;">My CV</h2>
                    <p class="text-sm mb-6 leading-relaxed">View or download my full CV below.</p>
                </div>
                <div class="flex flex-col gap-3">
                    <a href="{{ asset('cv/CV_BoschFlor.pdf') }}" target="_blank"
                       style="background-color:#6b7f96;"
                       class="text-center text-white px-6 py-3 rounded-full font-medium hover:opacity-80 transition shadow">
                        📄 View CV
                    </a>
                    <a href="{{ asset('cv/CV_BoschFlor.pdf') }}" download="CV_BoschFlor.pdf"
                       style="border: 2px solid #6b7f96; color:#6b7f96;"
                       class="text-center px-6 py-3 rounded-full font-medium hover:bg-[#6b7f96] hover:text-white transition shadow">
                        ⬇️ Download CV
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
