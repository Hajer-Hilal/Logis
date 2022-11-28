@extends('website-layout.layout')

@section('page-title','Service Details')

@section('main-contant')
  
 @include('website-shared.breadcrumbs',[
    'background_image' => 'assets/img/page-header.jpg',
    'title' => 'Service Details',
    'links' => [['url' => '/' ,'title' => 'Home' ],['url' => '/Service' ,'title' => 'Service' ], ['title' => 'Service Details']],
    'description' => 'Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo 
    odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. 
    Quasi ratione sint. Sit quaerat ipsum dolorem.'
 ])

@include('website-pages.service-details.section.service-details-section')

@endsection
