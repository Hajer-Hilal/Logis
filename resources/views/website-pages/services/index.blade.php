@extends('website-layout.layout')

@section('page-title','Services')

@section('main-contant')
  
 @include('website-shared.breadcrumbs',[
    'background_image' => 'assets/img/page-header.jpg',
    'title' => 'Services',
    'links' => [['url' => '/' ,'title' => 'Home' ], ['title' => 'Services']],
    'description' => 'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo 
    odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. 
    Quasi ratione sint. Sit quaerat ipsum dolorem.'

 ])
@include('website-pages.home.section.Featured-services')

@include('website-pages.home.section.services')

 @include('website-pages.home.section.features')

@include('website-pages.home.section.testimonials')

@include('website-pages.home.section.frequently-asked-questions')


@endsection