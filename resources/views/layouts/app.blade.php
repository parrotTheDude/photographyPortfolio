<!DOCTYPE html>
<html lang="en" class="bg-[#0f1714]">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- Title + Meta --}}
  <title>@yield('title', 'Evie Bowerman')</title>
  <meta name="description" content="@yield('meta_description', 'Graphic design & photography by Evie Bowerman')">
  <link rel="canonical" href="{{ url()->current() }}">

  {{-- Favicons / PWA --}}

  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('appleTouch.webp') }}">
  <link rel="manifest" href="{{ asset('site.webmanifest') }}">
  <meta name="theme-color" content="#0f1714">

  {{-- Open Graph / Twitter --}}
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="@yield('og_title', 'Evie Bowerman')">
  <meta property="og:description" content="@yield('og_description', 'Graphic design & photography by Evie Bowerman')">
  <meta property="og:image" content="@yield('og_image', asset('images/displayImgs/stitchOL.webp'))">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="@yield('og_title', 'Evie Bowerman')">
  <meta name="twitter:description" content="@yield('og_description', 'Graphic design & photography by Evie Bowerman')">
  <meta name="twitter:image" content="@yield('og_image', asset('images/displayImgs/stitchOL.webp'))">

  {{-- CSRF --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- Assets --}}
  @vite(['resources/css/app.css','resources/js/app.js'])

  {{-- Scripts --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>

  {{-- Sitewide JSON-LD --}}
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "Person",
    "name": "Evie Bowerman",
    "url": "{{ config('app.url') }}",
    "image": "{{ asset('images/evieP.webp') }}",
    "jobTitle": "Graphic Designer & Photographer",
    "description": "North Yorkshire-based graphic designer and photographer specialising in brand identity, packaging, and image-led storytelling.",
    "address": {
      "@@type": "PostalAddress",
      "addressRegion": "North Yorkshire",
      "addressCountry": "GB"
    },
    "sameAs": [
      "https://www.linkedin.com/in/evie-bowerman-2a56a7232/",
      "https://www.instagram.com/bowermandesigns/"
    ]
  }
  </script>

  {{-- Allow page-specific extra tags --}}
  @stack('head')
</head>
<body class="text-[#f1f3ee] antialiased">
  {{-- Fixed background layers --}}
  <div class="fixed inset-0 -z-10 bg-[#0f1714]"></div>
  <div class="fixed inset-0 -z-10 bg-gradient-to-b from-[#1b2421] via-[#22332d] to-[#1b2421]"></div>

  <style>[x-cloak]{display:none !important}</style>

  {{-- Alpine state wrapper so header + overlay share mobileOpen --}}
  <div x-data="{ scrolled:false, mobileOpen:false }"
       x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 8)"
       x-effect="document.body.classList.toggle('overflow-hidden', mobileOpen)">

        {{-- GLASSY FIXED HEADER (transparent until scrolled) --}}
        <header
        class="fixed top-0 left-0 w-full z-50 transition-all duration-300"
        :class="scrolled
            ? 'bg-[#0f1714]/65 backdrop-blur-xl shadow-[0_6px_24px_rgba(0,0,0,0.35)] border-b border-white/10'
            : 'bg-transparent border-b-0'"
        >
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4 md:px-8 h-16 md:h-20">

            {{-- Left: Name / Logo --}}
            <span class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide">
            <a href="/" class="text-[#f1f3ee] hover:text-[#f0b46d] transition-colors">
                Evie Bowerman
            </a>
            </span>

            {{-- Right: Desktop Nav --}}
            <nav class="hidden md:flex gap-6 uppercase text-sm tracking-wide" aria-label="Main navigation">
            @foreach (['/' => 'Graphics','/photos' => 'Photography','/about' => 'About','/contact' => 'Contact'] as $link => $label)
                @php $isActive = request()->is(ltrim($link, '/') ?: '/'); @endphp
                <a href="{{ $link }}" class="relative group text-[#f1f3ee] transition-colors">
                <span class="group-hover:text-[#f0b46d] transition-colors {{ $isActive ? 'text-[#f0b46d]' : '' }}">{{ $label }}</span>
                <span class="absolute left-0 -bottom-1 h-0.5 bg-[#f0b46d] transition-all duration-300 {{ $isActive ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </a>
            @endforeach
            </nav>

            {{-- Mobile menu button --}}
            <button type="button"
                    class="md:hidden flex flex-col gap-1.5 focus:outline-none"
                    @click="mobileOpen = true"
                    aria-label="Open menu"
                    :aria-expanded="mobileOpen"
                    aria-controls="mobile-nav">
            <span class="w-7 h-0.5 bg-white rounded"></span>
            <span class="w-7 h-0.5 bg-white rounded"></span>
            <span class="w-7 h-0.5 bg-white rounded"></span>
            </button>
        </div>

        </header>

    {{-- MAIN CONTENT (comfortable spacing from fixed header) --}}
    <main
    class="px-4 animate-fade-in-up
            pt-[calc(env(safe-area-inset-top)+4.5rem)]
            md:pt-[calc(env(safe-area-inset-top)+5.5rem)]
            lg:pt-[calc(env(safe-area-inset-top)+6rem)]"
    >
    @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="mt-20 border-t border-white/10">
      <div class="max-w-7xl mx-auto px-4 md:px-8 py-10">

        {{-- Social icons centred --}}
        <div class="flex justify-center gap-8 mb-8">
          @foreach ([
            'linkedin' => 'https://www.linkedin.com/in/evie-bowerman-2a56a7232/',
            'insta'    => 'https://www.instagram.com/bowermandesigns/',
            'email'    => '/contact'
          ] as $icon => $url)
            <a href="{{ $url }}"
               @if(str_starts_with($url, 'http')) target="_blank" rel="noopener" @endif
               class="group transition transform hover:scale-110">
              <img src="{{ asset("images/icons/$icon.svg") }}" alt="{{ ucfirst($icon) }}"
                   width="28" height="28"
                   class="w-7 invert opacity-60 group-hover:opacity-100 transition-opacity">
            </a>
          @endforeach
        </div>

        {{-- Divider --}}
        <div class="w-16 h-px bg-white/15 mx-auto mb-6"></div>

        {{-- Credit --}}
        <p class="text-center text-xs text-gray-500 tracking-wide">
          Built & designed by
          <a href="https://www.bowermandigital.com/" target="_blank" rel="noopener"
             class="text-gray-400 hover:text-[#f0b46d] transition-colors">Bowerman Digital</a>
        </p>

      </div>
    </footer>

    {{-- MOBILE FULLSCREEN OVERLAY – centered + glassy (HIGHER z-index than header) --}}
    <div id="mobile-nav"
         x-cloak
         x-show="mobileOpen"
         x-transition.opacity
         @keydown.escape.window="mobileOpen = false"
         class="fixed inset-0 z-[60] flex items-center justify-center text-center">

      {{-- Backdrop that closes on click --}}
      <button class="absolute inset-0 bg-black/70 backdrop-blur-xl"
              @click="mobileOpen = false"
              aria-label="Close menu backdrop"></button>

      {{-- Close button --}}
      <button class="absolute top-5 right-5 text-white/90 hover:text-white text-3xl z-[61]"
              @click="mobileOpen = false"
              aria-label="Close menu">✕</button>

      {{-- Centered content --}}
      <div class="relative z-[61] w-full max-w-sm px-8 space-y-10">
        <a href="/" @click="mobileOpen=false"
           class="block text-3xl font-extrabold uppercase tracking-wide hover:text-[#f0b46d] transition">
          Evie Bowerman
        </a>

        <nav class="space-y-6" aria-label="Mobile navigation">
          @foreach (['/' => 'Graphics','/photos' => 'Photography','/about' => 'About','/contact' => 'Contact'] as $link => $label)
            @php $isActive = request()->is(ltrim($link, '/') ?: '/'); @endphp
            <a href="{{ $link }}"
               @click="mobileOpen=false"
               class="block text-2xl uppercase tracking-wide hover:text-[#f0b46d] transition {{ $isActive ? 'text-[#f0b46d]' : '' }}">
              {{ $label }}
            </a>
          @endforeach
        </nav>

        <div class="flex justify-center gap-6">
          @foreach ([
            'linkedin' => 'https://www.linkedin.com/in/evie-bowerman-2a56a7232/',
            'insta'    => 'https://www.instagram.com/bowermandesigns/',
            'email'    => '/contact'
          ] as $icon => $url)
            <a href="{{ $url }}" @click="mobileOpen=false"
               @if(str_starts_with($url, 'http')) target="_blank" rel="noopener" @endif>
              <img src="{{ asset("images/icons/$icon.svg") }}" alt="{{ ucfirst($icon) }}"
                   width="28" height="28" class="w-7 invert opacity-90 hover:opacity-100">
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@stack('scripts')
</body>
</html>