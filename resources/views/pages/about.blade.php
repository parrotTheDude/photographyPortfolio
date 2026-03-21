@extends('layouts.app')

@section('title', 'About | Evie Bowerman')
@section('meta_description', 'Meet Evie Bowerman — a North Yorkshire-based graphic designer and Northumbria University graduate specialising in brand identity, packaging, and photography.')
@section('og_title', 'About Evie Bowerman')
@section('og_description', 'North Yorkshire-based graphic designer and photographer specialising in brand identity, packaging, and image-led storytelling.')
@section('og_image'){{ asset('images/evieP.webp') }}@endsection

@section('content')
<section class="max-w-7xl mx-auto px-4 md:px-8">

    {{-- Hero / intro --}}
    <div class="grid md:grid-cols-2 gap-10 lg:gap-14 items-center animate-fade-in-up">
        <div class="order-2 md:order-1 space-y-6">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">
                Hi, I'm Evie — designer & photographer.
            </h1>
            <p class="text-lg/relaxed text-white/70">
                I'm a North Yorkshire–based graphic designer and recent Northumbria University graduate.
                I specialise in brand identity, packaging, and image-led storytelling. When I'm not
                building clean, consistent brand systems, I'm behind the lens shooting products, people,
                and places with a focus on tone, texture, and mood.
            </p>

            {{-- Skill badges --}}
            <ul class="flex flex-wrap gap-2">
                @foreach ([
                    'Brand Identity','Packaging','Typography',
                    'Art Direction','Retouching','Photography'
                ] as $chip)
                    <li class="px-3 py-1.5 text-sm bg-white/5 border border-white/10 rounded-full text-white/70">
                        {{ $chip }}
                    </li>
                @endforeach
            </ul>

            {{-- CTAs --}}
            <div class="flex flex-wrap gap-4 pt-2">
                <a href="{{ route('home') }}"
                   class="px-6 py-3 bg-white/10 hover:bg-white/15 rounded-lg transition-all duration-200 font-medium">
                    View Work
                </a>
                <a href="{{ route('contact.create') }}"
                   class="px-6 py-3 bg-[#f0b46d] text-[#1b2421] font-semibold rounded-lg hover:bg-[#f5c585] active:scale-[0.98] transition-all duration-200">
                    Start a Project
                </a>
            </div>
        </div>

        {{-- Portrait --}}
        <div class="order-1 md:order-2 relative aspect-[4/5] overflow-hidden rounded-2xl
                    shadow-[0_12px_40px_rgba(0,0,0,0.5)]">
            @php [$evieW, $evieH] = \App\Helpers\ImageHelper::dimensions('evieP.webp'); @endphp
            <img
                src="{{ asset('images/evieP.webp') }}"
                srcset="{{ asset('images/evieP-480w.webp') }} 480w,
                       {{ asset('images/evieP-640w.webp') }} 640w,
                       {{ asset('images/evieP-1024w.webp') }} 1024w,
                       {{ asset('images/evieP-1920w.webp') }} 1920w"
                sizes="(max-width: 767px) 100vw, (max-width: 1280px) 45vw, 588px"
                width="{{ $evieW }}" height="{{ $evieH }}"
                alt="Evie Bowerman portrait"
                fetchpriority="high"
                class="w-full h-full object-cover">
            <div class="pointer-events-none absolute inset-0 ring-1 ring-white/10 rounded-2xl"></div>
        </div>
    </div>

    {{-- Capabilities --}}
    <h2 class="sr-only">Capabilities</h2>
    <div class="mt-20 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
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
            <div class="bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/15 transition-all duration-300 group">
                <h3 class="text-lg font-bold mb-2 group-hover:text-[#f0b46d] transition-colors">{{ $card['title'] }}</h3>
                <p class="text-white/60 text-sm leading-relaxed">{{ $card['copy'] }}</p>
            </div>
        @endforeach
    </div>

    {{-- Stats --}}
    <div class="mt-16 grid sm:grid-cols-3 gap-6">
        @foreach ([
            ['num'=>'4+', 'label'=>'Years creating'],
            ['num'=>'25+', 'label'=>'Projects & shoots'],
            ['num'=>'0% fluff', 'label'=>'All substance'],
        ] as $stat)
            <div class="text-center bg-white/5 border border-white/10 rounded-xl py-8">
                <div class="text-3xl font-extrabold text-[#f0b46d]">{{ $stat['num'] }}</div>
                <div class="text-sm uppercase tracking-wider text-white/50 mt-2">{{ $stat['label'] }}</div>
            </div>
        @endforeach
    </div>

    {{-- Process + Currently --}}
    <div class="mt-16 mb-4 grid md:grid-cols-3 gap-10 lg:gap-14">
        <div class="md:col-span-2 space-y-4">
            <h2 class="text-2xl font-bold tracking-tight">How I Work</h2>
            <p class="text-white/70 leading-relaxed">
                Every project starts with a goal — what should this brand or shoot achieve? From there I sketch
                directions, test typography and colour, build out systems, and validate with real contexts. For
                photography, I plan light, palette, and mood before the shutter clicks — post-production is about
                polish, not rescue.
            </p>
            <p class="text-white/70 leading-relaxed">
                The result is clean, flexible work that feels intentional and holds together across every touchpoint.
            </p>
        </div>
        <aside class="space-y-5">
            <h3 class="text-xl font-bold tracking-tight">Currently</h3>
            <ul class="space-y-3 text-white/70">
                <li class="flex items-start gap-2.5">
                    <span class="mt-2 w-1.5 h-1.5 rounded-full bg-[#f0b46d] shrink-0"></span>
                    Available for brand & packaging projects
                </li>
                <li class="flex items-start gap-2.5">
                    <span class="mt-2 w-1.5 h-1.5 rounded-full bg-[#f0b46d] shrink-0"></span>
                    Booking product & portrait shoots
                </li>
                <li class="flex items-start gap-2.5">
                    <span class="mt-2 w-1.5 h-1.5 rounded-full bg-[#f0b46d] shrink-0"></span>
                    Based in North Yorkshire, UK
                </li>
            </ul>
            <a href="{{ route('contact.create') }}"
               class="inline-block px-6 py-3 bg-white/10 hover:bg-white/15 rounded-lg transition-all duration-200 font-medium">
               Get in touch
            </a>
        </aside>
    </div>

</section>
@endsection
