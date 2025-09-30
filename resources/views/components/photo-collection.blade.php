@props([
  'title',
  'subtitle' => null,
  // array of image paths relative to /public/images
  'images' => [],
  // optional related links: [['label'=>'Motion','href'=>'/motion'], ...]
  'related' => [],
])

<section class="max-w-7xl mx-auto px-4 md:px-8">
  {{-- Heading --}}
  <header class="text-center mb-10">
    <h1 class="text-4xl md:text-5xl font-extrabold tracking-wide">{{ $title }}</h1>
    @if($subtitle)
      <p class="mt-3 text-gray-300">{{ $subtitle }}</p>
    @endif
  </header>

  {{-- Static photo grid --}}
  <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    @foreach($images as $i => $src)
      <figure class="overflow-hidden shadow-[0_6px_26px_rgba(0,0,0,0.45)]
                     hover:shadow-[0_16px_42px_rgba(0,0,0,0.5)]
                     transition duration-500">
        <img
          src="{{ asset('images/'.$src) }}"
          alt="{{ $title }} photo {{ $i+1 }}"
          loading="lazy"
          class="w-full h-[22rem] md:h-[26rem] lg:h-[30rem] xl:h-[36rem]
                 object-cover transition-transform duration-700 hover:scale-105"
        />
      </figure>
    @endforeach
  </div>

  {{-- Related links --}}
  @if(!empty($related))
    <div class="mt-12 text-center">
      <h2 class="text-xl font-bold mb-4">More photography</h2>
      <div class="flex flex-wrap justify-center gap-3">
        @foreach($related as $r)
          <a href="{{ $r['href'] }}"
             class="px-4 py-2 bg-white/10 border border-white/10
                    hover:bg-white/20 transition">
            {{ $r['label'] }}
          </a>
        @endforeach
      </div>
    </div>
  @endif
</section>