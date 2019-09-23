@extends('resource.show')

@php
$links['back'] = guard_url('ecommerce/review');
$links['edit'] = guard_url('ecommerce/review') . '/' . $review->getRouteKey() . '/edit';
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('ecommerce::review.title.main') !!}
@stop

@section('sub.title') 
{!! __('ecommerce::review.title.show') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('$ecommerce/review')!!}">{!! __('ecommerce::review.name') !!}</a></li>
  <li>{{ __('app.show') }}</li>
@stop

@section('tabs') 
@stop

@section('tools') 
    <a href="{!!guard_url('$ecommerce/review')!!}" rel="tooltip" class="btn btn-white btn-round btn-simple btn-icon pull-right add-new" data-original-title="" title="">
            <i class="fa fa-chevron-left"></i>
    </a>
@stop

@section('content') 
    @include('ecommerce::review.partial.show', ['mode' => 'show'])
@stop
