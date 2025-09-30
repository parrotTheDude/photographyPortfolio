@extends('layouts.app')

@section('title', 'About | Evie Bowerman')

@section('content')
<section class="max-w-7xl mx-auto px-4 md:px-8">

    {{-- Hero / intro --}}
    <div class="grid md:grid-cols-2 gap-10 items-center animate-fade-in-up">
        <div class="order-2 md:order-1 space-y-6">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-wide">
                Hi, I’m Evie — designer & photographer.
            </h1>
            <p class="text-lg/relaxed text-gray-200">
                I’m a North Yorkshire–based graphic designer and recent Northumbria University graduate.
                I specialise in brand identity, packaging, and image-led storytelling. When I’m not
                building clean, consistent brand systems, I’m behind the lens shooting products, people,
                and places with a focus on tone, texture, and mood.
            </p>

            {{-- badges / quick facts --}}
            <ul class="flex flex-wrap gap-2">
                @foreach ([
                    'Brand Identity','Packaging','Typography',
                    'Art Direction','Retouching','Photography'
                ] as $chip)
                    <li class="px-3 py-1 text-sm bg-white/10 border border-white/10">
                        {{ $chip }}
                    </li>
                @endforeach
            </ul>

            {{-- CTAs --}}
            <div class="flex flex-wrap gap-4 pt-2">
                <a href="{{ route('home') }}"
                   class="px-5 py-3 bg-white/10 hover:bg-white/20 transition">
                    View Work
                </a>
                <a href="{{ route('contact.create') }}"
                   class="px-5 py-3 bg-[#f0b46d] text-[#1b2421] hover:brightness-110 transition">
                    Start a Project
                </a>
            </div>
        </div>

        {{-- Portrait --}}
        <div class="order-1 md:order-2 relative aspect-[4/5] overflow-hidden
                    shadow-[0_12px_40px_rgba(0,0,0,0.5)]">
            <img
                src="{{ asset('images/evieP.webp') }}"
                alt="Evie Bowerman portrait"
                class="w-full h-full object-cover">
            {{-- subtle overlay corners for depth --}}
            <div class="pointer-events-none absolute inset-0 ring-1 ring-white/10"></div>
        </div>
    </div>

    {{-- Capabilities + Approach --}}
    <div class="mt-16 grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ([
            ['title'=>'Brand Identity',
             'copy'=>'Logos, colour, typography, and usage rules that scale from packaging to social.'],
            ['title'=>'Packaging & Print',
             'copy'=>'CMYK-ready artwork, dielines, layouts, and production-ready files.'],
            ['title'=>'Photography',
             'copy'=>'Product, lifestyle, and portrait sets with consistent grading and detail.'],
            ['title'=>'Art Direction',
             'copy'=>'Concepts, moodboards, and shot lists for cohesive visual campaigns.'],
            ['title'=>'Digital & Social',
             'copy'=>'Ad creatives, social kits, landing pages and lightweight web builds.'],
            ['title'=>'Retouching',
             'copy'=>'Colour work, cleanup, compositing, and polished image sets.'],
        ] as $card)
            <div class="bg-white/5 border border-white/10 p-6 hover:bg-white/10 transition">
                <h3 class="text-xl font-bold mb-2">{{ $card['title'] }}</h3>
                <p class="text-gray-300">{{ $card['copy'] }}</p>
            </div>
        @endforeach
    </div>

    {{-- Stats / highlights --}}
    <div class="mt-14 grid sm:grid-cols-3 gap-6">
        @foreach ([
            ['num'=>'4+', 'label'=>'Years creating'],
            ['num'=>'25+', 'label'=>'Projects & shoots'],
            ['num'=>'0% fluff', 'label'=>'All substance'],
        ] as $stat)
            <div class="text-center bg-white/5 border border-white/10 py-6">
                <div class="text-3xl font-extrabold">{{ $stat['num'] }}</div>
                <div class="text-sm uppercase tracking-wider text-gray-300 mt-1">{{ $stat['label'] }}</div>
            </div>
        @endforeach
    </div>

    {{-- Bio blurb / story --}}
    <div class="mt-14 grid md:grid-cols-3 gap-10">
        <div class="md:col-span-2 space-y-4">
            <h2 class="text-2xl font-bold">Process</h2>
            <p class="text-gray-200">
                I start with goals—what should this brand or shoot achieve? From there I sketch directions,
                test typography/colour, build out systems, and validate with real contexts. For photography,
                I plan light, palette, and mood before the shutter clicks—post is about polish, not rescue.
            </p>
            <p class="text-gray-200">
                The result is clean, flexible work that feels intentional and holds together across touchpoints.
            </p>
        </div>
        <aside class="space-y-4">
            <h3 class="text-xl font-bold">Currently</h3>
            <ul class="space-y-2 text-gray-200">
                <li>• Available for brand & packaging projects</li>
                <li>• Booking product & portrait shoots</li>
                <li>• Based in North Yorkshire, UK</li>
            </ul>
            <a href="{{ route('contact.create') }}"
               class="inline-block mt-2 px-4 py-2 bg-white/10 hover:bg-white/20 transition">
               Get in touch
            </a>
        </aside>
    </div>

</section>
@endsection