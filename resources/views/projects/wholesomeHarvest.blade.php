@extends('layouts.app')

@section('title', 'Wholesome Harvest | Redesign')

@section('content')
<x-portfolio-page
  title="Wholesome Harvest"
  year="2024"
  subtitle="Logo, packaging, and seasonal campaign with a warm, nostalgic tone."
  :description="'Wholesome Harvest needed a refreshed logo and packaging set—including a Halloween special (pumpkin soup). To extend the story, I added social templates and a billboard. The direction leans into nostalgia and comfort: a hand-drawn logo and retro-friendly type to capture that homely, made-with-care feel.'"

  {{-- Hero --}}
  hero="wholesome/wh0.webp"

  {{-- Gallery --}}
  :gallery="[
    'wholesome/wh2.webp','wholesome/wh9.webp',
    'wholesome/wh3.webp','wholesome/wh1.webp',
    'wholesome/wh5.webp','wholesome/wh6.webp',
    'wholesome/wh7.webp','wholesome/wh4.webp',
    'wholesome/wh8.webp'
  ]"

  {{-- Related --}}
  :related="[
    ['title'=>'Stitch Tailoring','year'=>'2024','img'=>'displayImgs/stitchOL.webp','link'=>'/stitch'],
    ['title'=>'W7 Rebrand','year'=>'2023','img'=>'displayImgs/w7.webp','link'=>'/w7'],
    ['title'=>'Label Less','year'=>'2022','img'=>'displayImgs/label.webp','link'=>'/label'],
  ]"
/>
@endsection