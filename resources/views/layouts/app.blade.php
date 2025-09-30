<!DOCTYPE html>
<html lang="en" class="bg-[#0f1714]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Evie Bowerman')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>
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
        x-data="{ scrolled:false }"
        x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 8)"
        class="fixed top-0 left-0 w-full z-50 transition-all duration-300"
        :class="scrolled
            ? 'bg-[#0f1714]/65 backdrop-blur-xl shadow-[0_6px_24px_rgba(0,0,0,0.35)] border-b border-white/10'
            : 'bg-transparent border-b-0'"
        >
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4 md:px-8 h-16 md:h-20">

            {{-- Left: Name / Logo --}}
            <h1 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide">
            <a href="/"
                class="transition-colors"
                :class="scrolled ? 'text-[#f1f3ee] hover:text-[#f0b46d]' : 'text-[#f1f3ee] hover:text-[#f0b46d]'">
                Evie Bowerman
            </a>
            </h1>

            {{-- Right: Desktop Nav --}}
            <nav class="hidden md:flex gap-6 uppercase text-sm tracking-wide">
            @foreach (['/' => 'Graphics','/photos' => 'Photography','/about' => 'About','/contact' => 'Contact'] as $link => $label)
                <a href="{{ $link }}" class="relative group transition-colors"
                :class="scrolled ? 'text-[#f1f3ee]' : 'text-[#f1f3ee]'">
                <span class="group-hover:text-[#f0b46d] transition-colors">{{ $label }}</span>
                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-[#f0b46d] transition-all duration-300 group-hover:w-full"></span>
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

        {{-- Optional soft gradient only AFTER scroll (subtle separation) --}}
        <div x-show="scrolled" x-transition.opacity
            class="pointer-events-none h-3 w-full bg-gradient-to-b from-black/20 to-transparent"></div>
        </header>

    {{-- MAIN CONTENT (comfortable spacing from fixed header) --}}
    <main
    class="px-4 animate-fade-in-up
            pt-[calc(env(safe-area-inset-top)+5.5rem)]
            md:pt-[calc(env(safe-area-inset-top)+6.5rem)]
            lg:pt-[calc(env(safe-area-inset-top)+7rem)]"
    >
    @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="mt-16 border-t border-white/20">
      <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center px-4 py-8 gap-4">
        <p class="text-sm text-gray-300">
          Built & designed by
          <a href="https://www.bowermandigital.com/" target="_blank" class="underline hover:text-[#f0b46d]">Bowerman Digital</a>
        </p>
        <div class="flex gap-6">
          @foreach ([
            'linkedin' => 'https://www.linkedin.com/in/evie-bowerman-2a56a7232/',
            'insta'    => 'https://www.instagram.com/bowermandesigns/',
            'email'    => '/contact'
          ] as $icon => $url)
            <a href="{{ $url }}" target="_blank"
               class="transition transform hover:scale-115 hover:drop-shadow-[0_0_6px_rgba(240,180,109,0.7)]">
              <img src="{{ asset("images/icons/$icon.svg") }}" alt="{{ ucfirst($icon) }}" class="w-6 invert">
            </a>
          @endforeach
        </div>
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

        <nav class="space-y-6">
          @foreach (['/' => 'Graphics','/photos' => 'Photography','/about' => 'About','/contact' => 'Contact'] as $link => $label)
            <a href="{{ $link }}"
               @click="mobileOpen=false"
               class="block text-2xl uppercase tracking-wide hover:text-[#f0b46d] transition">
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
            <a href="{{ $url }}" @click="mobileOpen=false">
              <img src="{{ asset("images/icons/$icon.svg") }}" alt="{{ ucfirst($icon) }}"
                   class="w-7 invert opacity-90 hover:opacity-100">
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</body>
@stack('scripts')
</html>