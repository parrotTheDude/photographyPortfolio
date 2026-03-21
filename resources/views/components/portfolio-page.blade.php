@props([
  'title',
  'year' => null,
  'subtitle' => null,
  'description' => '',
  'hero' => null,
  'gallery' => [],
  'related' => [],
])

@php
  $allImages = [];
  if ($hero) $allImages[] = asset('images/'.$hero);
  foreach ($gallery as $src) $allImages[] = asset('images/'.$src);
@endphp

<section class="max-w-7xl mx-auto px-4 md:px-8"
         x-data="{
           images: {{ Js::from($allImages) }},
           current: -1,
           touchStartX: 0,
           touchStartY: 0,
           get isOpen() { return this.current >= 0 },
           open(i) { this.current = i },
           close() { this.current = -1 },
           next() { if (this.current < this.images.length - 1) this.current++ },
           prev() { if (this.current > 0) this.current-- },
           onTouchStart(e) { this.touchStartX = e.touches[0].clientX; this.touchStartY = e.touches[0].clientY },
           onTouchEnd(e) {
             const dx = e.changedTouches[0].clientX - this.touchStartX;
             const dy = e.changedTouches[0].clientY - this.touchStartY;
             if (Math.abs(dx) < 50 || Math.abs(dy) > Math.abs(dx)) return;
             if (dx < 0) this.next(); else this.prev();
           },
         }">

  {{-- Hero --}}
  <div class="grid md:grid-cols-2 gap-10 lg:gap-14 items-center animate-fade-in-up">
    <div class="space-y-5 order-2 md:order-1">
      <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">
        {{ $title }}
      </h1>

      @if($year)
        <span class="inline-block text-sm uppercase tracking-widest text-[#f0b46d] font-medium">{{ $year }}</span>
      @endif

      @if($subtitle)
        <p class="text-lg text-white/60">{{ $subtitle }}</p>
      @endif

      @if($description)
        <p class="text-lg/relaxed text-white/70">{{ $description }}</p>
      @endif

      {{-- Back to work link --}}
      <a href="{{ route('home') }}"
         class="inline-flex items-center gap-2 text-sm text-white/50 hover:text-[#f0b46d] transition-colors mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
        Back to all work
      </a>
    </div>

    @if($hero)
      @php
        $heroBase = Str::replaceLast('.webp', '', $hero);
        [$heroW, $heroH] = \App\Helpers\ImageHelper::dimensions($hero);
      @endphp
      <figure class="relative overflow-hidden rounded-2xl shadow-[0_12px_40px_rgba(0,0,0,0.5)] cursor-pointer max-h-[calc(100vh-8rem)] order-1 md:order-2"
              @click="open(0)">
        <img src="{{ asset('images/'.$hero) }}"
             srcset="{{ asset('images/'.$heroBase.'-480w.webp') }} 480w,
                    {{ asset('images/'.$heroBase.'-640w.webp') }} 640w,
                    {{ asset('images/'.$heroBase.'-1024w.webp') }} 1024w,
                    {{ asset('images/'.$heroBase.'-1920w.webp') }} 1920w"
             sizes="(max-width: 767px) 100vw, (max-width: 1280px) 45vw, 588px"
             width="{{ $heroW }}" height="{{ $heroH }}"
             alt="{{ $title }} hero"
             fetchpriority="high"
             class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
        <span class="pointer-events-none absolute inset-0 ring-1 ring-white/10 rounded-2xl"></span>
      </figure>
    @endif
  </div>

  {{-- Gallery --}}
  @if(!empty($gallery))
    <div class="mt-16 grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
      @foreach($gallery as $i => $src)
        @php
          $galBase = Str::replaceLast('.webp', '', $src);
          [$galW, $galH] = \App\Helpers\ImageHelper::dimensions($src);
        @endphp
        <figure class="relative overflow-hidden rounded-xl shadow-[0_8px_28px_rgba(0,0,0,0.45)] cursor-pointer group"
                @click="open({{ $hero ? $i + 1 : $i }})">
          <img src="{{ asset('images/'.$src) }}"
               srcset="{{ asset('images/'.$galBase.'-480w.webp') }} 480w,
                      {{ asset('images/'.$galBase.'-640w.webp') }} 640w,
                      {{ asset('images/'.$galBase.'-1024w.webp') }} 1024w,
                      {{ asset('images/'.$galBase.'-1920w.webp') }} 1920w"
               sizes="(max-width: 639px) 100vw, (max-width: 1279px) 50vw, 33vw"
               width="{{ $galW }}" height="{{ $galH }}"
               alt="{{ $title }} image {{ $i + 1 }}"
               loading="lazy"
               class="w-full h-[26rem] md:h-[30rem] lg:h-[34rem] xl:h-[40rem] object-cover transition-transform duration-700 group-hover:scale-105">
          {{-- Expand hint on hover --}}
          <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition duration-300 flex items-center justify-center">
            <svg class="w-10 h-10 text-white opacity-0 group-hover:opacity-80 transition-opacity duration-300"
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="15 3 21 3 21 9"></polyline>
              <polyline points="9 21 3 21 3 15"></polyline>
              <line x1="21" y1="3" x2="14" y2="10"></line>
              <line x1="3" y1="21" x2="10" y2="14"></line>
            </svg>
          </div>
        </figure>
      @endforeach
    </div>
  @endif

  {{-- Lightbox with prev/next --}}
  <template x-teleport="body">
    <div x-cloak
         x-show="isOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="close()"
         @keydown.escape.window="close()"
         @keydown.right.window="next()"
         @keydown.left.window="prev()"
         @touchstart="onTouchStart($event)"
         @touchend="onTouchEnd($event)"
         style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999;background:rgba(0,0,0,0.92);cursor:pointer;">

      {{-- Centered image --}}
      <div @click.stop style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);display:flex;align-items:center;justify-content:center;">
        <img :src="images[current]"
             alt="Enlarged view"
             style="max-width:90vw;max-height:90vh;object-fit:contain;cursor:default;user-select:none;border-radius:0.5rem;">
      </div>

      {{-- Previous button --}}
      <button x-show="current > 0"
              @click.stop="prev()"
              style="position:absolute;left:1rem;top:50%;transform:translateY(-50%);z-index:10;"
              class="w-11 h-11 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition-all duration-200"
              aria-label="Previous image">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
      </button>

      {{-- Next button --}}
      <button x-show="current < images.length - 1"
              @click.stop="next()"
              style="position:absolute;right:1rem;top:50%;transform:translateY(-50%);z-index:10;"
              class="w-11 h-11 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition-all duration-200"
              aria-label="Next image">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="9 6 15 12 9 18"></polyline>
        </svg>
      </button>

      {{-- Close button --}}
      <button @click="close()"
              style="position:absolute;top:1rem;right:1rem;z-index:10;"
              class="w-11 h-11 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition-all duration-200"
              aria-label="Close lightbox">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>

      {{-- Counter --}}
      <div style="position:absolute;bottom:1.25rem;left:50%;transform:translateX(-50%);"
           class="text-white/50 text-sm tabular-nums"
           x-text="(current + 1) + ' / ' + images.length"></div>
    </div>
  </template>

  {{-- Related projects --}}
  @if(!empty($related))
    <div class="mt-20">
      <h2 class="text-2xl font-bold mb-8 tracking-tight">More Work</h2>
      <div class="grid gap-6 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
        @foreach($related as $p)
          <a href="{{ $p['link'] }}"
             x-data="{ loading: false }"
             x-init="window.addEventListener('pageshow', () => loading = false)"
             @click="loading = true"
             class="group relative block overflow-hidden rounded-xl
                    shadow-[0_6px_26px_rgba(0,0,0,0.45)]
                    hover:shadow-[0_16px_42px_rgba(0,0,0,0.5)]
                    transition duration-500 transform hover:-translate-y-1">
            @php
              $relBase = Str::replaceLast('.webp', '', $p['img']);
              [$relW, $relH] = \App\Helpers\ImageHelper::dimensions($p['img']);
            @endphp
            <img src="{{ asset('images/'.$p['img']) }}"
                 srcset="{{ asset('images/'.$relBase.'-480w.webp') }} 480w,
                        {{ asset('images/'.$relBase.'-640w.webp') }} 640w,
                        {{ asset('images/'.$relBase.'-1024w.webp') }} 1024w,
                        {{ asset('images/'.$relBase.'-1920w.webp') }} 1920w"
                 sizes="(max-width: 639px) 100vw, (max-width: 1279px) 50vw, 33vw"
                 width="{{ $relW }}" height="{{ $relH }}"
                 alt="{{ $p['title'] }}"
                 loading="lazy"
                 class="w-full h-[22rem] lg:h-[26rem] object-cover transition-transform duration-700 group-hover:scale-105">

            {{-- Hover overlay --}}
            <div x-show="!loading"
                 class="absolute inset-0 bg-white/70 backdrop-blur-md opacity-0 group-hover:opacity-100
                        transition duration-300 flex items-center justify-center">
              <div class="text-center">
                <h3 class="text-2xl font-extrabold text-[#27371C] tracking-wide">{{ $p['title'] }}</h3>
                @if(!empty($p['year']))
                  <p class="text-[#27371C]/70 mt-1 font-medium">{{ $p['year'] }}</p>
                @endif
              </div>
            </div>

            {{-- Loading spinner --}}
            <div x-show="loading" x-cloak
                 class="absolute inset-0 bg-white/70 backdrop-blur-md flex items-center justify-center">
              <svg class="animate-spin h-8 w-8 text-[#27371C]" viewBox="0 0 24 24" fill="none">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
              </svg>
            </div>

            {{-- Mobile label --}}
            <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-black/50 to-transparent rounded-b-xl md:hidden"></div>
            <div class="absolute bottom-4 left-5 md:hidden">
              <span class="text-white text-lg font-bold drop-shadow-lg tracking-wide">{{ $p['title'] }}</span>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  @endif
</section>
