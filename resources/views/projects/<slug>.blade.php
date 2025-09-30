@extends('layouts.app')

@section('title', 'Project Title | Evie Bowerman')

@section('content')
<x-portfolio-page
    {{-- Basic details --}}
    title="Project Title"
    year="2024"
    subtitle="Optional short tagline"
    :description="'Write a short paragraph describing this project—what it is, goals, etc.'"

    {{-- Main hero image --}}
    hero="/<slug>/hero.webp"

    {{-- Gallery images (relative to /public/images) --}}
    :gallery="[
        '/<slug>/img1.webp',
        '/<slug>/img2.webp',
        '/<slug>/img3.webp',
    ]"

    {{-- Related projects to display at the bottom --}}
    :related="[
        ['title' => 'Stitch Tailoring', 'year' => '2024',
         'img'   => 'displayImgs/stitchOL-min.webp', 'link' => '/stitch'],
        ['title' => 'Marble Blue', 'year' => '2024',
         'img'   => 'displayImgs/marble.webp',       'link' => '/marble'],
    ]"
/>
@endsection