@extends('layouts.app')

@section('title', 'Pets | Photography')

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