@extends('layouts.app')

@section('title', 'Stitch Tailoring | Clothing Brand')

@section('content')
<x-portfolio-page
  title="Stitch Tailoring"
  year="2024"
  subtitle="Clothing brand focused on fit-first confidence."
  :description="'Stitch is a clothing brand which strives to make people feel confident through garments. Empowering individuals to choose their style rather than being dictated by it. Unrealistic beauty standards lead to people wanting to lose weight to become a particular clothing size, which harms mental health and body image. Stitch Tailoring abolishes the sizing system, stitching each piece to fit your unique frame. To shop at Stitch, you become a member and create your own username to personalise each garment.'"
  hero="/stitch/s1.webp"
  :gallery="[
    '/stitch/s2.webp','/stitch/s3.webp',
    '/stitch/s4.webp','/stitch/s5.webp',
    '/stitch/s6.webp','/stitch/s8.webp',
    '/stitch/s7.webp','/stitch/s9.webp',
    '/stitch/s10.webp','/stitch/s11.webp',
    '/stitch/s12.webp','/stitch/s13.webp',
    '/stitch/s14.webp','/stitch/s17.webp',
    '/stitch/s15.webp','/stitch/s16.webp',
    '/stitch/s18.webp'
  ]"
  :related="[
    ['title'=>'Wholesome Harvest','year'=>'2024','img'=>'displayImgs/wholesome.webp','link'=>'/wholesomeHarvest'],
    ['title'=>'Marble Blue','year'=>'2024','img'=>'displayImgs/marble.webp','link'=>'/marble'],
    ['title'=>'Label Less','year'=>'2022','img'=>'displayImgs/label.webp','link'=>'/label'],
  ]"
/>
@endsection