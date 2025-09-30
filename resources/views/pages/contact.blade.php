@extends('layouts.app')

@section('title','Contact | Evie Bowerman')

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
      <label class="block text-sm mb-1">Name</label>
      <input type="text" name="name" value="{{ old('name') }}" required
             class="w-full px-4 py-3 bg-white/5 border border-white/10 focus:border-[#f0b46d] outline-none" />
      @error('name') <p class="text-red-300 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
      <label class="block text-sm mb-1">Email</label>
      <input type="email" name="email" value="{{ old('email') }}" required
             class="w-full px-4 py-3 bg-white/5 border border-white/10 focus:border-[#f0b46d] outline-none" />
      @error('email') <p class="text-red-300 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
      <label class="block text-sm mb-1">Message</label>
      <textarea name="message" rows="6" required
                class="w-full px-4 py-3 bg-white/5 border border-white/10 focus:border-[#f0b46d] outline-none">{{ old('message') }}</textarea>
      @error('message') <p class="text-red-300 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    {{-- Invisible reCAPTCHA mount point --}}
    <div id="recaptcha-container"></div>
    @error('captcha') <p class="text-red-300 text-sm mt-1">{{ $message }}</p> @enderror

    <div class="pt-4">
      <button id="contactSubmit" type="button"
              class="inline-flex items-center justify-center px-6 py-3 bg-[#f0b46d] text-[#1b2421] hover:brightness-110 transition">
        Send Message
      </button>
    </div>
  </form>
</section>
@endsection

@push('scripts')
<script>
  let recapWidget = null;
  let submitting = false;

  function onRecaptchaLoaded() {
    recapWidget = grecaptcha.render('recaptcha-container', {
      sitekey: "{{ env('RECAPTCHA_SITE_KEY') }}",
      size: 'invisible',
      badge: 'bottomright',
      callback: onRecaptchaSuccess,
      'error-callback': onRecaptchaError,
      'expired-callback': onRecaptchaError,
    });

    const form = document.getElementById('contactForm');
    const btn  = document.getElementById('contactSubmit');

    form.addEventListener('submit', function (e) {
      if (!submitting) e.preventDefault();
    });

    btn.addEventListener('click', function () {
      if (submitting) return;
      submitting = true;
      btn.disabled = true;
      try { grecaptcha.execute(recapWidget); }
      catch (e) { submitting = false; btn.disabled = false; console.error(e); }
    });
  }

  function onRecaptchaSuccess() {
    document.getElementById('contactForm').submit();
  }

  function onRecaptchaError() {
    submitting = false;
    const btn = document.getElementById('contactSubmit');
    if (btn) btn.disabled = false;
    try { grecaptcha.reset(recapWidget); } catch (e) {}
  }
</script>
<script src="https://www.google.com/recaptcha/api.js?render=explicit&onload=onRecaptchaLoaded" async defer></script>
@endpush