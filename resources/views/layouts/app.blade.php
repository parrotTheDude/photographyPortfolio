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
            <span class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide leading-none">
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

            {{-- Animated hamburger / X button --}}
            <button type="button"
                    class="md:hidden relative w-8 h-8 flex items-center justify-center focus:outline-none"
                    @click="mobileOpen = !mobileOpen"
                    aria-label="Toggle menu"
                    :aria-expanded="mobileOpen"
                    aria-controls="mobile-nav">
            <span class="absolute w-6 h-0.5 bg-white rounded transition-all duration-300 ease-in-out"
                  :class="mobileOpen ? 'rotate-45' : '-translate-y-2'"></span>
            <span class="absolute w-6 h-0.5 bg-white rounded transition-all duration-300 ease-in-out"
                  :class="mobileOpen ? 'opacity-0 scale-0' : 'opacity-100'"></span>
            <span class="absolute w-6 h-0.5 bg-white rounded transition-all duration-300 ease-in-out"
                  :class="mobileOpen ? '-rotate-45' : 'translate-y-2'"></span>
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
        <p class="text-center text-xs text-gray-400 tracking-wide">
          Built & designed by
          <a href="https://www.bowermandigital.com/" target="_blank" rel="noopener"
             class="text-gray-300 underline decoration-gray-500 hover:text-[#f0b46d] hover:decoration-[#f0b46d] transition-colors">Bowerman Digital</a>
        </p>

      </div>
    </footer>

    {{-- MOBILE SLIDE-IN PANEL --}}
      {{-- Backdrop --}}
      <div x-cloak
           x-show="mobileOpen"
           x-transition:enter="transition ease-out duration-300"
           x-transition:enter-start="opacity-0"
           x-transition:enter-end="opacity-100"
           x-transition:leave="transition ease-in duration-200"
           x-transition:leave-start="opacity-100"
           x-transition:leave-end="opacity-0"
           @click="mobileOpen = false"
           class="fixed inset-0 z-[60] bg-black/60 backdrop-blur-sm"
           aria-hidden="true"></div>

      {{-- Panel --}}
      <div id="mobile-nav"
           x-cloak
           x-show="mobileOpen"
           x-transition:enter="transition ease-out duration-300"
           x-transition:enter-start="translate-x-full"
           x-transition:enter-end="translate-x-0"
           x-transition:leave="transition ease-in duration-200"
           x-transition:leave-start="translate-x-0"
           x-transition:leave-end="translate-x-full"
           @keydown.escape.window="mobileOpen = false"
           class="fixed top-0 right-0 z-[70] h-full w-[min(80vw,20rem)] bg-[#0f1714]/95 backdrop-blur-2xl border-l border-white/10 flex flex-col">

        {{-- Top: branding --}}
        <div class="px-8 pt-20 pb-6">
          <a href="/" @click="mobileOpen=false"
             class="block text-xl font-extrabold uppercase tracking-wide text-[#f1f3ee] hover:text-[#f0b46d] transition-colors">
            Evie Bowerman
          </a>
          <div class="mt-4 w-10 h-px bg-[#f0b46d]/40"></div>
        </div>

        {{-- Nav links with staggered animation --}}
        <nav class="flex-1 px-8 space-y-1" aria-label="Mobile navigation">
          @foreach (['/' => 'Graphics', '/photos' => 'Photography', '/about' => 'About', '/contact' => 'Contact'] as $link => $label)
            @php
              $isActive = request()->is(ltrim($link, '/') ?: '/');
              $delay = $loop->index * 75;
            @endphp
            <a href="{{ $link }}"
               @click="mobileOpen=false"
               x-show="mobileOpen"
               x-transition:enter="transition ease-out duration-300"
               x-transition:enter-start="opacity-0 translate-x-4"
               x-transition:enter-end="opacity-100 translate-x-0"
               style="transition-delay: {{ $delay }}ms"
               class="block py-3 text-lg uppercase tracking-widest transition-colors
                      {{ $isActive ? 'text-[#f0b46d]' : 'text-white/80 hover:text-[#f0b46d]' }}">
              <span class="flex items-center gap-3">
                @if($isActive)<span class="w-2 h-0.5 bg-[#f0b46d] rounded-full"></span>@endif
                {{ $label }}
              </span>
            </a>
          @endforeach
        </nav>

        {{-- Bottom: social icons --}}
        <div class="px-8 pb-10">
          <div class="w-full h-px bg-white/10 mb-6"></div>
          <div class="flex gap-6">
            @foreach ([
              'linkedin' => 'https://www.linkedin.com/in/evie-bowerman-2a56a7232/',
              'insta'    => 'https://www.instagram.com/bowermandesigns/',
              'email'    => '/contact'
            ] as $icon => $url)
              <a href="{{ $url }}" @click="mobileOpen=false"
                 @if(str_starts_with($url, 'http')) target="_blank" rel="noopener" @endif
                 class="group transition transform hover:scale-110">
                <img src="{{ asset("images/icons/$icon.svg") }}" alt="{{ ucfirst($icon) }}"
                     width="24" height="24"
                     class="w-6 invert opacity-50 group-hover:opacity-100 transition-opacity">
              </a>
            @endforeach
          </div>
        </div>
      </div>
  </div>
@stack('scripts')
</body>
</html>