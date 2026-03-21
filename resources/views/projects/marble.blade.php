@extends('layouts.app')

@section('title', 'Marble Blue | Evie Bowerman')
@section('meta_description', 'Marble Blue — beach bar and hotel identity with textured, water-inspired typography and menu design. By Evie Bowerman.')
@section('og_title', 'Marble Blue | Evie Bowerman')
@section('og_description', 'Beach bar and hotel brand identity by Evie Bowerman.')
@section('og_image', asset('images/displayImgs/marble.webp'))

@push('head')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "name": "Marble Blue",
  "description": "Beach bar and hotel identity with textured, water-inspired typography and menu design.",
  "image": "{{ asset('images/displayImgs/marble.webp') }}",
  "dateCreated": "2024",
  "url": "{{ url('/marble') }}",
  "author": { "@type": "Person", "name": "Evie Bowerman" },
  "genre": "Brand Identity"
}
</script>
@endpush

@section('content')
<x-portfolio-page
  title="Marble Blue"
  year="2024"
  subtitle="Beach bar & hotel identity with textured, water-inspired typography."
  :description="'Marble Blue is a beach bar and hotel that needed a refreshed logo and menu set. Water-drop detailing inside the mark nods to the coastal setting, while the rocky, uneven type echoes shoreline textures. The system extends across menus and on-site touchpoints.'"

  {{-- Hero --}}
  hero="marble/m1.webp"

  {{-- Gallery --}}
  :gallery="[
    'marble/m5.webp','marble/m6.webp',
    'marble/m4.webp','marble/m2.webp',
    'marble/m3.webp'
  ]"

  {{-- Related --}}
  :related="[
    ['title'=>'Stitch Tailoring','year'=>'2024','img'=>'displayImgs/stitchOL.webp','link'=>'/stitch'],
    ['title'=>'W7 Rebrand','year'=>'2023','img'=>'displayImgs/w7.webp','link'=>'/w7'],
    ['title'=>'Label Less','year'=>'2022','img'=>'displayImgs/label.webp','link'=>'/label'],
  ]"
/>
@endsection