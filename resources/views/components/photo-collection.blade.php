@props([
  'title',
  'subtitle' => null,
  'images' => [],
  'related' => [],
])

@php
  $allImages = [];
  foreach ($images as $src) $allImages[] = asset('images/'.$src);
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

  {{-- Heading --}}
  <header class="text-center mb-10 animate-fade-in-up">
    <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">{{ $title }}</h1>
    @if($subtitle)
      <p class="mt-3 text-white/60 text-lg max-w-xl mx-auto">{{ $subtitle }}</p>
    @endif
  </header>

  {{-- Photo grid --}}
  <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 animate-fade-in-up">
    @foreach($images as $i => $src)
      <figure class="relative overflow-hidden rounded-xl shadow-[0_6px_26px_rgba(0,0,0,0.45)]
                     hover:shadow-[0_16px_42px_rgba(0,0,0,0.5)]
                     transition duration-500 cursor-pointer group"
              @click="open({{ $i }})">
        @php
          $photoBase = Str::replaceLast('.webp', '', $src);
          [$photoW, $photoH] = \App\Helpers\ImageHelper::dimensions($src);
        @endphp
        <img
          src="{{ asset('images/'.$src) }}"
          srcset="{{ asset('images/'.$photoBase.'-480w.webp') }} 480w,
                 {{ asset('images/'.$photoBase.'-640w.webp') }} 640w,
                 {{ asset('images/'.$photoBase.'-1024w.webp') }} 1024w,
                 {{ asset('images/'.$photoBase.'-1920w.webp') }} 1920w"
          sizes="(max-width: 639px) 100vw, (max-width: 1023px) 50vw, 33vw"
          width="{{ $photoW }}" height="{{ $photoH }}"
          alt="{{ $title }} photo {{ $i+1 }}"
          @if($i === 0) fetchpriority="high" @else loading="lazy" @endif
          class="w-full h-[22rem] md:h-[26rem] lg:h-[30rem] xl:h-[36rem]
                 object-cover transition-transform duration-700 group-hover:scale-105"
        />
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

  {{-- Lightbox with prev/next and swipe --}}
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

  {{-- Related links --}}
  @if(!empty($related))
    <div class="mt-14 text-center">
      <h2 class="text-xl font-bold mb-5 tracking-tight">More Photography</h2>
      <div class="flex flex-wrap justify-center gap-3">
        @foreach($related as $r)
          <a href="{{ $r['href'] }}"
             class="px-5 py-2.5 bg-white/10 border border-white/10 rounded-lg
                    hover:bg-white/15 hover:border-white/15 transition-all duration-200 font-medium">
            {{ $r['label'] }}
          </a>
        @endforeach
      </div>
    </div>
  @endif
</section>
