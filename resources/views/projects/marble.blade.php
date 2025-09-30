@extends('layouts.app')

@section('title', 'Marble Blue | Beach Bar Rebrand')

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