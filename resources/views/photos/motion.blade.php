@extends('layouts.app')

@section('title', 'Motion Photography | Evie Bowerman')
@section('meta_description', 'Motion photography by Evie Bowerman — scenes full of movement and energy captured in dynamic compositions.')
@section('og_title', 'Motion Photography | Evie Bowerman')
@section('og_description', 'Motion photography by Evie Bowerman — movement, energy, and dynamic compositions.')
@section('og_image', asset('images/motion/m4.webp'))

@push('head')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ImageGallery",
  "name": "Motion Photography",
  "description": "Motion photography by Evie Bowerman — scenes full of movement and energy.",
  "url": "{{ url('/motion') }}",
  "author": { "@type": "Person", "name": "Evie Bowerman" },
  "about": { "@type": "Thing", "name": "Motion and Movement" },
  "image": "{{ asset('images/motion/m4.webp') }}"
}
</script>
@endpush

@section('content')
<x-photo-collection
  title="Motion"
  subtitle="Scenes full of movement and energy."
  hero="motion/m4.webp"

  :images="[
    'motion/m1.webp',
    'motion/m2.webp',
    'motion/m3.webp',
    'motion/m4.webp'
  ]"

  :related="[
    ['label' => 'Pets',     'href' => route('photos.pets')],
    ['label' => 'Wildlife', 'href' => route('photos.wildlife')],
  ]"
/>
@endsection