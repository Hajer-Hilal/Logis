@extends('website-layout.layout')

@section('page-title','Contact page')

@section('main-contant')
  
 @include('website-shared.breadcrumbs',[
    'background_image' => 'assets/img/page-header.jpg',
    'title' => 'Contact',
    'links' => [['url' => '/' ,'title' => 'Home' ], ['title' => 'Contact']],
    'description' => 'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo 
    odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. 
    Quasi ratione sint. Sit quaerat ipsum dolorem.'

 ])

@include('website-pages.contact.section.contact-section')

@endsection