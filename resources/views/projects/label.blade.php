@extends('layouts.app')

@section('title', 'Label Less | Clothing Brand')

@section('content')
<x-portfolio-page
  title="Label Less"
  year="2022"
  subtitle="Upcycling second-hand garments to reduce inequality through an anti-brand."
  :description="'This brief set out to address a social issue with design. In high-inequality contexts, status pressure pushes people—often lower-income parents—toward luxury labels, deepening debt. Label Less reframes value by upcycling garments into one-off pieces. The aim is confidence without logos: a classy anti-brand that restores uniqueness to pre-loved clothing.'"

  {{-- Hero image (opening) --}}
  hero="label/l1.webp"

  {{-- Gallery (remaining images, relative to /public/images) --}}
  :gallery="[
    'label/l7.webp','label/l4.webp',
    'label/l6.webp','label/l1.webp',
    'label/l5.webp','label/l8.webp',
    'label/l2.webp','label/l3.webp',
    'label/l9.webp'
  ]"

  {{-- Related work (use slugs you already have routed) --}}
  :related="[
    ['title'=>'Stitch Tailoring','year'=>'2024','img'=>'displayImgs/stitchOL.webp','link'=>'/stitch'],
    ['title'=>'W7 Rebrand','year'=>'2023','img'=>'displayImgs/w7.webp','link'=>'/w7'],
    ['title'=>'L.A. Women, The Doors','year'=>'2023','img'=>'displayImgs/doors.webp','link'=>'/doors'],
  ]"
/>
@endsection