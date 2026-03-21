@extends('layouts.app')

@section('title', 'L.A. Women, The Doors | Evie Bowerman')
@section('meta_description', 'L.A. Women, The Doors — album packaging concept exploring Jim Morrison\'s connection to Los Angeles. Designed by Evie Bowerman.')
@section('og_title', 'L.A. Women, The Doors | Evie Bowerman')
@section('og_description', 'Album packaging concept exploring Jim Morrison\'s connection to L.A. by Evie Bowerman.')
@section('og_image'){{ asset('images/displayImgs/doors.webp') }}@endsection

@push('head')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "name": "L.A. Women, The Doors",
  "description": "Album packaging concept exploring Jim Morrison's connection to Los Angeles.",
  "image": "{{ asset('images/displayImgs/doors.webp') }}",
  "dateCreated": "2023",
  "url": "{{ url('/doors') }}",
  "author": { "@type": "Person", "name": "Evie Bowerman" },
  "genre": "Packaging Design"
}
</script>
@endpush

@section('content')
<x-portfolio-page
  title="L.A. Women, The Doors"
  year="2023"
  subtitle="Album packaging concept exploring Jim Morrison’s connection to L.A."
  :description="'The brief was to design an album cover and packaging that visually interprets the music. The front symbolises Jim Morrison and the iconic “L.A. Women” — Morrison often personifies Los Angeles as a woman throughout the record. The back’s swoosh motif complements the interlinked theme of the front, while the use of fire nods to Morrison’s lyric imagery.'"

  {{-- Hero (opening) image --}}
  hero="doors/d5.webp"

  {{-- Gallery (remaining images) --}}
  :gallery="[
    'doors/d2.webp',
    'doors/d3.webp',
    'doors/d4.webp',
    'doors/d6.webp',
    'doors/d1.webp'
  ]"

  {{-- Related work --}}
  :related="[
    ['title'=>'Stitch Tailoring','year'=>'2024','img'=>'displayImgs/stitchOL.webp','link'=>route('projects.stitch')],
    ['title'=>'W7 Rebrand','year'=>'2023','img'=>'displayImgs/w7.webp','link'=>route('projects.w7')],
    ['title'=>'Label Less','year'=>'2022','img'=>'displayImgs/label.webp','link'=>route('projects.label')],
  ]"
/>
@endsection