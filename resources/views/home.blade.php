@extends('layouts.app')

@section('title', 'Graphic Design & Photography | Evie Bowerman')
@section('meta_description', 'Portfolio of Evie Bowerman — graphic designer and photographer based in North Yorkshire, specialising in brand identity, packaging, and image-led storytelling.')
@section('og_title', 'Evie Bowerman — Graphic Design & Photography')
@section('og_description', 'Brand identity, packaging, and photography portfolio by Evie Bowerman.')
@section('og_image'){{ asset('images/displayImgs/stitchOL.webp') }}@endsection

@push('head')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "CollectionPage",
  "name": "Evie Bowerman — Graphic Design & Photography Portfolio",
  "description": "Brand identity, packaging, and photography portfolio by Evie Bowerman.",
  "url": "{{ config('app.url') }}",
  "author": { "@@type": "Person", "name": "Evie Bowerman" },
  "hasPart": [
    { "@@type": "CreativeWork", "name": "Stitch Tailoring", "url": "{{ url('/stitch') }}" },
    { "@@type": "CreativeWork", "name": "Wholesome Harvest", "url": "{{ url('/wholesomeHarvest') }}" },
    { "@@type": "CreativeWork", "name": "W7 Rebrand", "url": "{{ url('/w7') }}" },
    { "@@type": "CreativeWork", "name": "Marble Blue", "url": "{{ url('/marble') }}" },
    { "@@type": "CreativeWork", "name": "Label Less", "url": "{{ url('/label') }}" },
    { "@@type": "CreativeWork", "name": "Stump Cross Caverns", "url": "{{ url('/stump-cross-caverns') }}" },
    { "@@type": "CreativeWork", "name": "L.A. Women, The Doors", "url": "{{ url('/doors') }}" }
  ]
}
</script>
@endpush

@section('content')
<div class="max-w-8xl mx-auto px-4 lg:px-8
            min-h-[calc(100vh-6rem)]   {{-- ensures full-page height --}}
            flex flex-col justify-start">
    
    <h2 class="sr-only">Selected Work</h2>

    {{-- Portfolio grid --}}
    <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 flex-1">
        @php
            $projects = [
                ['title'=>'Stitch Tailoring','year'=>'2024','img'=>'displayImgs/stitchOL.webp','link'=>'/stitch'],
                ['title'=>'Wholesome Harvest','year'=>'2024','img'=>'displayImgs/wholesome.webp','link'=>'/wholesomeHarvest'],
                ['title'=>'W7 Rebrand','year'=>'2023','img'=>'displayImgs/w7.webp','link'=>'/w7'],
                ['title'=>'Marble Blue','year'=>'2024','img'=>'displayImgs/marble.webp','link'=>'/marble'],
                ['title'=>'Label Less','year'=>'2022','img'=>'displayImgs/label.webp','link'=>'/label'],
                ['title'=>'Stump Cross Caverns','year'=>'2025','img'=>'displayImgs/sxcOL.webp','link'=>'/stump-cross-caverns'],
                ['title'=>'LA Women, The Doors','year'=>'2023','img'=>'displayImgs/doors.webp','link'=>'/doors'],
            ];
        @endphp

        @foreach($projects as $p)
            <a href="{{ $p['link'] }}"
               x-data="{ loading: false }"
               x-init="window.addEventListener('pageshow', () => loading = false)"
               @click="loading = true"
               class="group relative block overflow-hidden
                      shadow-[0_4px_20px_rgba(0,0,0,0.35)]
                      hover:shadow-[0_12px_35px_rgba(0,0,0,0.45)]
                      transition duration-500 transform hover:-translate-y-1">

                @php
                    $imgBase = Str::replaceLast('.webp', '', $p['img']);
                    [$imgW, $imgH] = \App\Helpers\ImageHelper::dimensions($p['img']);
                @endphp
                <img src="{{ asset('images/'.$p['img']) }}"
                     srcset="{{ asset('images/'.$imgBase.'-480w.webp') }} 480w,
                            {{ asset('images/'.$imgBase.'-640w.webp') }} 640w,
                            {{ asset('images/'.$imgBase.'-1024w.webp') }} 1024w,
                            {{ asset('images/'.$imgBase.'-1920w.webp') }} 1920w"
                     sizes="(max-width: 767px) 100vw, (max-width: 1279px) 50vw, 33vw"
                     width="{{ $imgW }}" height="{{ $imgH }}"
                     alt="{{ $p['title'] }}"
                     @if($loop->first) fetchpriority="high" @else loading="lazy" @endif
                     class="w-full h-[26rem] md:h-[30rem] lg:h-[34rem] xl:h-[40rem]
                            object-cover transition-transform duration-500 group-hover:scale-110">

                {{-- Hover overlay with title --}}
                <div x-show="!loading"
                     class="absolute inset-0 bg-white/70 backdrop-blur-md
                            opacity-0 group-hover:opacity-100 flex flex-col justify-center
                            items-center text-center transition duration-300">
                    <h3 class="text-3xl lg:text-4xl font-extrabold text-[#27371C] tracking-wide mb-2">
                        {{ $p['title'] }}
                    </h3>
                    <span class="text-xl lg:text-2xl text-[#27371C] font-medium">
                        {{ $p['year'] }}
                    </span>
                </div>

                {{-- Loading spinner overlay --}}
                <div x-show="loading" x-cloak
                     class="absolute inset-0 bg-white/70 backdrop-blur-md flex items-center justify-center">
                    <svg class="animate-spin h-8 w-8 text-[#27371C]" viewBox="0 0 24 24" fill="none">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                    </svg>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection