@extends('layouts.app')

@section('title', 'Contact | Evie Bowerman')
@section('meta_description', 'Get in touch with Evie Bowerman for brand identity, packaging design, or photography enquiries.')
@section('og_title', 'Contact Evie Bowerman')
@section('og_description', 'Start a project or book a shoot with Evie Bowerman.')

@section('content')
<section class="max-w-3xl mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold mb-6">Contact</h1>

  {{-- ✅ Success or error messages directly under heading --}}
  @if(session('success'))
    <div class="mb-8 p-4 bg-green-600/20 border border-green-500/40 text-green-100 rounded">
      {{ session('success') }}
    </div>
  @elseif($errors->any())
    <div class="mb-8 p-4 bg-red-600/20 border border-red-500/40 text-red-100 rounded">
      {{ $errors->first() }}
    </div>
  @endif

  <form id="contactForm" method="POST" action="{{ route('contact.store') }}" class="space-y-5 relative">
    @csrf

    <div>
      <label for="name" class="block text-sm mb-1">Name</label>
      <input type="text" id="name" name="name" value="{{ old('name') }}" required
             class="w-full px-4 py-3 bg-white/5 border border-white/10 focus:border-[#f0b46d] outline-none" />
      @error('name') <p class="text-red-300 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
      <label for="email" class="block text-sm mb-1">Email</label>
      <input type="email" id="email" name="email" value="{{ old('email') }}" required
             class="w-full px-4 py-3 bg-white/5 border border-white/10 focus:border-[#f0b46d] outline-none" />
      @error('email') <p class="text-red-300 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
      <label for="message" class="block text-sm mb-1">Message</label>
      <textarea id="message" name="message" rows="6" required
                class="w-full px-4 py-3 bg-white/5 border border-white/10 focus:border-[#f0b46d] outline-none">{{ old('message') }}</textarea>
      @error('message') <p class="text-red-300 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    {{-- Invisible reCAPTCHA mount point --}}
    <div id="recaptcha-container"></div>
    @error('captcha') <p class="text-red-300 text-sm mt-1">{{ $message }}</p> @enderror

    <div class="pt-4">
      <button id="contactSubmit" type="button"
              class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-[#f0b46d] text-[#1b2421] hover:brightness-110 transition min-w-[10rem]">
        <svg id="contactSpinner" class="hidden animate-spin h-5 w-5" viewBox="0 0 24 24" fill="none">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
        </svg>
        <span id="contactBtnText">Send Message</span>
      </button>
      <p class="text-xs text-gray-400 pt-4">
        This site is protected by reCAPTCHA and the 
        <a href="https://policies.google.com/privacy" target="_blank" class="underline hover:text-[#f0b46d]">Google Privacy Policy</a> 
        and 
        <a href="https://policies.google.com/terms" target="_blank" class="underline hover:text-[#f0b46d]">Terms of Service</a> 
        apply.
      </p>
    </div>
  </form>
</section>
@endsection

@push('head')
<style>
  .grecaptcha-badge {
    visibility: hidden;
  }
</style>
@endpush

@push('scripts')
<script>
  let recapWidget = null;
  let submitting = false;
  let recaptchaReady = false;
  let pendingSubmit = false;

  // Lazy-load reCAPTCHA: only fetch the script when the user
  // first interacts with the form (focus, click, or touch).
  // This keeps it off the main thread during initial page load.
  function loadRecaptcha() {
    if (document.getElementById('recaptcha-script')) return;
    const s = document.createElement('script');
    s.id = 'recaptcha-script';
    s.src = 'https://www.google.com/recaptcha/api.js?render=explicit&onload=onRecaptchaLoaded';
    s.async = true;
    s.defer = true;
    document.head.appendChild(s);
  }

  // Trigger load on first interaction with the form
  const form = document.getElementById('contactForm');
  ['focusin', 'click', 'touchstart'].forEach(function (evt) {
    form.addEventListener(evt, loadRecaptcha, { once: true, passive: true });
  });

  function onRecaptchaLoaded() {
    recapWidget = grecaptcha.render('recaptcha-container', {
      sitekey: "{{ config('services.recaptcha.site_key') }}",
      size: 'invisible',
      badge: 'bottomright',
      callback: onRecaptchaSuccess,
      'error-callback': onRecaptchaError,
      'expired-callback': onRecaptchaError,
    });
    recaptchaReady = true;

    // If the user already clicked Send while reCAPTCHA was loading, fire now
    if (pendingSubmit) {
      pendingSubmit = false;
      grecaptcha.execute(recapWidget);
    }
  }

  form.addEventListener('submit', function (e) {
    if (!submitting) e.preventDefault();
  });

  document.getElementById('contactSubmit').addEventListener('click', function () {
    if (submitting) return;
    submitting = true;
    this.disabled = true;
    document.getElementById('contactSpinner').classList.remove('hidden');
    document.getElementById('contactBtnText').textContent = 'Sending...';

    // If reCAPTCHA hasn't loaded yet, start loading and queue the submit
    if (!recaptchaReady) {
      loadRecaptcha();
      pendingSubmit = true;
      return;
    }

    try { grecaptcha.execute(recapWidget); }
    catch (e) {
      resetButton();
      console.error(e);
    }
  });

  function onRecaptchaSuccess() {
    form.submit();
  }

  function onRecaptchaError() {
    resetButton();
    try { grecaptcha.reset(recapWidget); } catch (e) {}
  }

  function resetButton() {
    submitting = false;
    pendingSubmit = false;
    const btn = document.getElementById('contactSubmit');
    if (btn) btn.disabled = false;
    document.getElementById('contactSpinner').classList.add('hidden');
    document.getElementById('contactBtnText').textContent = 'Send Message';
  }
</script>
@endpush