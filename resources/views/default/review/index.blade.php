@extends('resource.index')
@php
$links['create'] = guard_url('ecommerce/review/create');
$links['search'] = guard_url('ecommerce/review');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('ecommerce::review.title.main') !!}
@stop

@section('sub.title') 
{!! __('ecommerce::review.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('ecommerce/review')!!}">{!! __('ecommerce::review.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('ecommerce::review.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$reviews->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
