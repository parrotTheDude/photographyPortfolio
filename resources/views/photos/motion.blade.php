@extends('layouts.app')

@section('title', 'Motion | Photography')

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