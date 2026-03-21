@extends('layouts.app')

@section('title', 'W7 Rebrand | Evie Bowerman')
@section('meta_description', 'W7 packaging refresh and brand world concept — redesigning affordable cosmetics with London-inspired identity. By Evie Bowerman.')
@section('og_title', 'W7 Rebrand | Evie Bowerman')
@section('og_description', 'Packaging refresh and brand world for W7 cosmetics by Evie Bowerman.')
@section('og_image', asset('images/displayImgs/w7.webp'))

@push('head')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "name": "W7 Rebrand",
  "description": "Packaging refresh and brand world for W7 cosmetics, drawing on London roots.",
  "image": "{{ asset('images/displayImgs/w7.webp') }}",
  "dateCreated": "2023",
  "url": "{{ url('/w7') }}",
  "author": { "@type": "Person", "name": "Evie Bowerman" },
  "genre": "Packaging Design"
}
</script>
@endpush

@section('content')
<x-portfolio-page
  title="W7 Rebrand"
  year="2023"
  subtitle="Reignite an old flame — packaging refresh and brand world."
  :description="'For the Fire Starters brief “Reignite an Old Flame,” I redesigned W7’s packaging and demonstrated how the identity scales across a broader brand world. W7’s mission is access: high-quality cosmetics at affordable prices. The redesign draws on the brand’s London roots, using the W7 mark as a window into the city’s beauty across packaging and advertising.'"

  {{-- Hero --}}
  hero="w7/w9.webp"

  {{-- Gallery --}}
  :gallery="[
    'w7/w3.webp','w7/w8.webp',
    'w7/w4.webp','w7/w5.webp',
    'w7/w6.webp','w7/w7.webp',
    'w7/w1.webp','w7/w2.webp'
  ]"

  {{-- Related --}}
  :related="[
    ['title'=>'Stitch Tailoring','year'=>'2024','img'=>'displayImgs/stitchOL.webp','link'=>'/stitch'],
    ['title'=>'Marble Blue','year'=>'2024','img'=>'displayImgs/marble.webp','link'=>'/marble'],
    ['title'=>'Label Less','year'=>'2022','img'=>'displayImgs/label.webp','link'=>'/label'],
  ]"
/>
@endsection