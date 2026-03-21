@props([
  'title',
  'year' => null,
  'subtitle' => null,          // optional short tagline
  'description' => '',         // long text
  'hero' => null,              // "projects/stitch/hero.webp"
  'gallery' => [],             // ['projects/stitch/s1.webp', ...]
  'related' => [],             // [['title'=>'Marble Blue','year'=>'2024','img'=>'displayImgs/marble.webp','link'=>'/marble'], ...]
])

<section class="max-w-7xl mx-auto px-4 md:px-8">
  {{-- Header / Hero --}}
  <div class="grid md:grid-cols-2 gap-10 items-center">
    <div class="space-y-5">
      <h1 class="text-4xl md:text-5xl font-extrabold tracking-wide">
        {{ $title }}
        @if($year)
          <span class="block text-lg font-normal text-gray-300">{{ $year }}</span>
        @endif
      </h1>

      @if($subtitle)
        <p class="text-base text-gray-200">{{ $subtitle }}</p>
      @endif

      @if($description)
        <p class="text-lg/relaxed text-gray-100">{{ $description }}</p>
      @endif
    </div>

    @if($hero)
      @php
        $heroBase = Str::replaceLast('.webp', '', $hero);
        [$heroW, $heroH] = \App\Helpers\ImageHelper::dimensions($hero);
      @endphp
      <figure class="relative aspect-[4/5] overflow-hidden shadow-[0_12px_40px_rgba(0,0,0,0.5)]">
        <img src="{{ asset('images/'.$hero) }}"
             srcset="{{ asset('images/'.$heroBase.'-640w.webp') }} 640w,
                    {{ asset('images/'.$heroBase.'-1024w.webp') }} 1024w,
                    {{ asset('images/'.$heroBase.'-1920w.webp') }} 1920w"
             sizes="(max-width: 767px) 100vw, 50vw"
             width="{{ $heroW }}" height="{{ $heroH }}"
             alt="{{ $title }} hero"
             fetchpriority="high"
             class="w-full h-full object-cover">
        <span class="pointer-events-none absolute inset-0 ring-1 ring-white/10"></span>
      </figure>
    @endif
  </div>

  {{-- Gallery --}}
  @if(!empty($gallery))
    <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
      @foreach($gallery as $src)
        <figure class="relative overflow-hidden shadow-[0_8px_28px_rgba(0,0,0,0.45)]">
          @php
            $galBase = Str::replaceLast('.webp', '', $src);
            [$galW, $galH] = \App\Helpers\ImageHelper::dimensions($src);
          @endphp
          <img src="{{ asset('images/'.$src) }}"
               srcset="{{ asset('images/'.$galBase.'-640w.webp') }} 640w,
                      {{ asset('images/'.$galBase.'-1024w.webp') }} 1024w,
                      {{ asset('images/'.$galBase.'-1920w.webp') }} 1920w"
               sizes="(max-width: 639px) 100vw, (max-width: 1279px) 50vw, 33vw"
               width="{{ $galW }}" height="{{ $galH }}"
               alt="{{ $title }} image"
               loading="lazy"
               class="w-full h-[26rem] md:h-[30rem] lg:h-[34rem] xl:h-[40rem] object-cover transition duration-700 hover:scale-105">
        </figure>
      @endforeach
    </div>
  @endif

  {{-- Related projects --}}
  @if(!empty($related))
    <div class="mt-16">
      <h2 class="text-2xl font-bold mb-6">More work</h2>
      <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
        @foreach($related as $p)
          <a href="{{ $p['link'] }}"
             class="group relative block overflow-hidden
                    shadow-[0_6px_26px_rgba(0,0,0,0.45)]
                    hover:shadow-[0_16px_42px_rgba(0,0,0,0.5)]
                    transition duration-500 transform hover:-translate-y-1">
            @php
              $relBase = Str::replaceLast('.webp', '', $p['img']);
              [$relW, $relH] = \App\Helpers\ImageHelper::dimensions($p['img']);
            @endphp
            <img src="{{ asset('images/'.$p['img']) }}"
                 srcset="{{ asset('images/'.$relBase.'-640w.webp') }} 640w,
                        {{ asset('images/'.$relBase.'-1024w.webp') }} 1024w,
                        {{ asset('images/'.$relBase.'-1920w.webp') }} 1920w"
                 sizes="(max-width: 639px) 100vw, (max-width: 1279px) 50vw, 33vw"
                 width="{{ $relW }}" height="{{ $relH }}"
                 alt="{{ $p['title'] }}"
                 loading="lazy"
                 class="w-full h-[22rem] lg:h-[26rem] object-cover transition duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-white/70 backdrop-blur-md opacity-0 group-hover:opacity-100
                        transition duration-500 flex items-center justify-center">
              <div class="text-center">
                <h3 class="text-2xl font-extrabold text-[#27371C]">{{ $p['title'] }}</h3>
                @if(!empty($p['year']))
                  <p class="text-[#27371C] mt-1">{{ $p['year'] }}</p>
                @endif
              </div>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  @endif
</section>