@extends('layouts.app')

@section('title', 'Wildlife | Photography')

@section('content')
<x-photo-collection
  title="Wildlife"
  subtitle="Wildlife photography from my recent trip to Borneo."
  {{-- Optional hero (choose your favourite) --}}
  hero="wildlife/wildlife8.webp"

  :images="[
    'wildlife/wildlife8.webp','wildlife/wildlife3.webp',
    'wildlife/wildlife7.webp','wildlife/wildlife4.webp',
    'wildlife/wildlife5.webp','wildlife/wildlife6.webp',
    'wildlife/wildlife2.webp','wildlife/wildlife1.webp',
    'wildlife/wildlife9.webp','wildlife/wildlife10.webp',
    'wildlife/wildlife11.webp','wildlife/wildlife13.webp',
    'wildlife/wildlife12.webp','wildlife/wildlife14.webp',
    'wildlife/wildlife15.webp','wildlife/wildlife16.webp',
    'wildlife/wildlife17.webp'
  ]"

  :related="[
    ['label'=>'Motion','href'=>'/motion'],
    ['label'=>'Pets','href'=>'/pets'],
  ]"
/>
@endsection