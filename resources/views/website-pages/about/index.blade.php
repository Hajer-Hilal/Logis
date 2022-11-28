@extends('website-layout.layout')

@section('page-title','About page')

@section('main-contant')
  
 @include('website-shared.breadcrumbs',[
    'background_image' => 'assets/img/page-header.jpg',
    'title' => 'About',
    'links' => [['url' => '/' ,'title' => 'Home' ], ['title' => 'About']],
    'description' => 'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo 
    odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. 
    Quasi ratione sint. Sit quaerat ipsum dolorem.'

 ])

 @include('website-pages.home.section.about-us')

  @include('website-pages.about.section.stats-counter')

  @include('website-pages.about.section.our-team')

 @include('website-pages.home.section.testimonials')

 @include('website-pages.home.section.frequently-asked-questions')

@endsection
