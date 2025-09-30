@extends('layouts.app')

@section('title', 'Stump Cross Caverns | Design Work')

@section('content')
<x-portfolio-page
  title="Stump Cross Caverns"
  year="2025"
  subtitle="Design support for a Yorkshire show cave, cafe, and gift shop."
  :description="'Stump Cross Caverns is a tourist attraction with a show cave, gift shop, and cafe. I’ve produced a variety of pieces for them—from leaflets and posters to a roadside billboard in Leeds, West Yorkshire. Most recently I redesigned the menus to better align with brand guidelines and improve readability and consistency across touchpoints.'"

  {{-- Hero image (opening) --}}
  hero="sxc/sx3.webp"

  {{-- Gallery (remaining images) --}}
  :gallery="[
    'sxc/sx2.webp','sxc/sx7.webp',
    'sxc/sx4.webp','sxc/sx5.webp',
    'sxc/sx6.webp','sxc/sx8.webp',
    'sxc/sx1.webp'
  ]"

  {{-- Related work --}}
  :related="[
    ['title'=>'Wholesome Harvest','year'=>'2024','img'=>'displayImgs/wholesome.webp','link'=>'/wholesomeHarvest'],
    ['title'=>'Marble Blue','year'=>'2024','img'=>'displayImgs/marble.webp','link'=>'/marble'],
    ['title'=>'Label Less','year'=>'2022','img'=>'displayImgs/label.webp','link'=>'/label'],
  ]"
/>
@endsection