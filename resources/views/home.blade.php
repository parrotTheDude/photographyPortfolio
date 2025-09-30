@extends('layouts.app')

@section('title', 'Graphic Design & Photography | Evie Bowerman')

@section('content')
<div class="max-w-8xl mx-auto px-4 lg:px-8
            min-h-[calc(100vh-6rem)]   {{-- ensures full-page height --}}
            flex flex-col justify-start">
    
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
               class="group relative block overflow-hidden
                      shadow-[0_4px_20px_rgba(0,0,0,0.35)]
                      hover:shadow-[0_12px_35px_rgba(0,0,0,0.45)]
                      transition duration-500 transform hover:-translate-y-1">
               
                <img src="{{ asset('images/'.$p['img']) }}"
                     alt="{{ $p['title'] }}"
                     class="w-full h-[26rem] md:h-[30rem] lg:h-[34rem] xl:h-[40rem]
                            object-cover transition-transform duration-500 group-hover:scale-110">
                
                <div class="absolute inset-0 bg-white/70 backdrop-blur-md
                            opacity-0 group-hover:opacity-100 flex flex-col justify-center
                            items-center text-center transition duration-300">
                    <h3 class="text-3xl lg:text-4xl font-extrabold text-[#27371C] tracking-wide mb-2">
                        {{ $p['title'] }}
                    </h3>
                    <span class="text-xl lg:text-2xl text-[#27371C] font-medium">
                        {{ $p['year'] }}
                    </span>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection