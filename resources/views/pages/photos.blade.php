@extends('layouts.app')

@section('title', 'Photography | Evie Bowerman')
@section('meta_description', 'Photography collections by Evie Bowerman — pets, motion, and wildlife photography with a focus on tone, texture, and mood.')
@section('og_title', 'Photography | Evie Bowerman')
@section('og_description', 'Pets, motion, and wildlife photography collections by Evie Bowerman.')
@section('og_image'){{ asset('images/pets/p4.webp') }}@endsection

@section('content')
<section class="max-w-8xl mx-auto px-4 lg:px-8 min-h-[calc(100vh-6rem)]">

    {{-- Centered heading + intro --}}
    <header class="mb-8 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-wide">
            Photography
        </h1>
        <p class="mt-3 text-gray-200">
            A collection of my best photography organised into sub-collections.
        </p>
    </header>

    @php
        $collections = [
            ['title'=>'Pets','year'=>'2024','img'=>'pets/p4.webp','placeholder'=>'pets/p4-min.webp','link'=>'/pets'],
            ['title'=>'Motion','year'=>'2024','img'=>'motion/m4.webp','placeholder'=>null,'link'=>'/motion'],
            ['title'=>'Wildlife','year'=>'2024','img'=>'wildlife/wildlife1.webp','placeholder'=>null,'link'=>'/wildlife'],
        ];
    @endphp

    {{-- Big tiles, responsive grid --}}
    <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 animate-fade-in-up">
        @foreach ($collections as $c)
            <a href="{{ $c['link'] }}"
               class="group relative block overflow-hidden
                      shadow-[0_6px_26px_rgba(0,0,0,0.45)]
                      hover:shadow-[0_16px_42px_rgba(0,0,0,0.5)]
                      transition duration-500 transform hover:-translate-y-1">

                @php
                    $colBase = Str::replaceLast('.webp', '', $c['img']);
                    [$colW, $colH] = \App\Helpers\ImageHelper::dimensions($c['img']);
                @endphp
                <img
                    src="{{ asset('images/'.$c['img']) }}"
                    srcset="{{ asset('images/'.$colBase.'-480w.webp') }} 480w,
                           {{ asset('images/'.$colBase.'-640w.webp') }} 640w,
                           {{ asset('images/'.$colBase.'-1024w.webp') }} 1024w,
                           {{ asset('images/'.$colBase.'-1920w.webp') }} 1920w"
                    sizes="(max-width: 767px) 100vw, (max-width: 1279px) 50vw, 33vw"
                    width="{{ $colW }}" height="{{ $colH }}"
                    alt="{{ $c['title'] }} cover"
                    @if($loop->first) fetchpriority="high" @else loading="lazy" @endif
                    class="w-full h-[26rem] md:h-[32rem] lg:h-[36rem] xl:h-[42rem] object-cover
                           transition-transform duration-700 group-hover:scale-110" />

                <div class="pointer-events-none absolute inset-0
                            bg-white/70 backdrop-blur-md opacity-0
                            group-hover:opacity-100
                            transition duration-500 flex items-center justify-center">
                    <div class="text-center">
                        <h3 class="text-3xl lg:text-4xl font-extrabold text-[#27371C] tracking-wide">{{ $c['title'] }}</h3>
                        <p class="text-lg lg:text-xl text-[#27371C] mt-1">{{ $c['year'] }}</p>
                    </div>
                </div>

                <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-black/40 to-transparent md:hidden"></div>
                <div class="absolute bottom-4 left-4 md:hidden">
                    <span class="text-white text-xl font-semibold drop-shadow">{{ $c['title'] }}</span>
                </div>
            </a>
        @endforeach
    </div>

    <div class="mt-12 text-center">
        <a href="{{ route('contact.create') }}"
           class="inline-block px-6 py-3 bg-[#f0b46d] text-[#1b2421] hover:brightness-110 transition">
            Book a Shoot
        </a>
    </div>
</section>
@endsection