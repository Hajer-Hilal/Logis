@extends('website-layout.layout')

@section('page-title','Get a Quote')

@section('main-contant')
  
 @include('website-shared.breadcrumbs',[
    'background_image' => 'assets/img/page-header.jpg',
    'title' => 'Get a Quote',
    'links' => [['url' => '/' ,'title' => 'Home' ], ['title' => 'Get a Quote']],
    'description' => 'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo 
    odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. 
    Quasi ratione sint. Sit quaerat ipsum dolorem.'

 ])

@include('website-pages.Quote.section.get-quote')

@endsection