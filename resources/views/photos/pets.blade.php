@extends('layouts.app')

@section('title', 'Pet Photography | Evie Bowerman')
@section('meta_description', 'Pet photography by Evie Bowerman — portraits of dogs, cats, and everyone\'s favourite animals.')
@section('og_title', 'Pet Photography | Evie Bowerman')
@section('og_description', 'Pet photography portraits by Evie Bowerman.')
@section('og_image', asset('images/pets/p4.webp'))

@push('head')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ImageGallery",
  "name": "Pet Photography",
  "description": "Pet photography portraits by Evie Bowerman.",
  "url": "{{ url('/pets') }}",
  "author": { "@type": "Person", "name": "Evie Bowerman" },
  "about": { "@type": "Thing", "name": "Pets" },
  "image": "{{ asset('images/pets/p4.webp') }}"
}
</script>
@endpush

@section('content')
<x-photo-collection
  title="Pets"
  subtitle="Photographs of everyone’s favourite animals."
  hero="pets/p4.webp"

  :images="[
    'pets/p1.webp','pets/p2.webp',
    'pets/p3.webp','pets/p5.webp',
    'pets/p4.webp'
  ]"

  :related="[
    ['label' => 'Motion',   'href' => route('photos.motion')],
    ['label' => 'Wildlife', 'href' => route('photos.wildlife')],
  ]"
/>
@endsection