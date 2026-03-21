@extends('layouts.app')

@section('title', 'Photography | Evie Bowerman')
@section('meta_description', 'Photography collections by Evie Bowerman — pets, motion, and wildlife photography with a focus on tone, texture, and mood.')
@section('og_title', 'Photography | Evie Bowerman')
@section('og_description', 'Pets, motion, and wildlife photography collections by Evie Bowerman.')
@section('og_image'){{ asset('images/pets/p4.webp') }}@endsection

@section('content')
<section class="max-w-7xl mx-auto px-4 lg:px-8 min-h-[calc(100vh-6rem)]">

    {{-- Heading + intro --}}
    <header class="mb-10 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">
            Photography
        </h1>
        <p class="mt-3 text-white/60 text-lg max-w-xl mx-auto">
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

    {{-- Collection grid --}}
    <h2 class="sr-only">Collections</h2>
    <div class="grid gap-6 md:gap-8 grid-cols-1 md:grid-cols-3 animate-fade-in-up">
        @foreach ($collections as $c)
            <a href="{{ $c['link'] }}"
               x-data="{ loading: false }"
               x-init="window.addEventListener('pageshow', () => loading = false)"
               @click="loading = true"
               class="group relative block overflow-hidden rounded-xl
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
                    sizes="(max-width: 767px) 100vw, 33vw"
                    width="{{ $colW }}" height="{{ $colH }}"
                    alt="{{ $c['title'] }} cover"
                    @if($loop->first) fetchpriority="high" @else loading="lazy" decoding="async" @endif
                    class="w-full h-[24rem] md:h-[30rem] lg:h-[36rem] xl:h-[42rem] object-cover
                           transition-transform duration-700 group-hover:scale-105" />

                {{-- Hover overlay with title --}}
                <div x-show="!loading"
                     class="pointer-events-none absolute inset-0
                            bg-white/70 backdrop-blur-md opacity-0
                            group-hover:opacity-100
                            transition duration-300 flex items-center justify-center">
                    <div class="text-center">
                        <h3 class="text-3xl lg:text-4xl font-extrabold text-[#27371C] tracking-wide">{{ $c['title'] }}</h3>
                        <p class="text-lg lg:text-xl text-[#27371C]/70 mt-1 font-medium">{{ $c['year'] }}</p>
                    </div>
                </div>

                {{-- Loading spinner overlay --}}
                <div x-show="loading" x-cloak
                     class="absolute inset-0 bg-white/70 backdrop-blur-md flex items-center justify-center">
                    <svg class="animate-spin h-8 w-8 text-[#27371C]" viewBox="0 0 24 24" fill="none">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                    </svg>
                </div>

                {{-- Mobile: persistent label at bottom --}}
                <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-black/50 to-transparent rounded-b-xl md:hidden"></div>
                <div class="absolute bottom-4 left-5 md:hidden">
                    <span class="text-white text-xl font-bold drop-shadow-lg tracking-wide">{{ $c['title'] }}</span>
                </div>
            </a>
        @endforeach
    </div>

    {{-- CTA --}}
    <div class="mt-14 text-center">
        <a href="{{ route('contact.create') }}"
           class="inline-block px-8 py-3.5 bg-[#f0b46d] text-[#1b2421] font-semibold rounded-lg hover:bg-[#f5c585] active:scale-[0.98] transition-all duration-200">
            Book a Shoot
        </a>
    </div>
</section>
@endsection
