@extends('resource.index')
@php
$links['create'] = guard_url('ecommerce/product/create');
$links['search'] = guard_url('ecommerce/product');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('ecommerce::product.title.main') !!}
@stop

@section('sub.title') 
{!! __('ecommerce::product.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('ecommerce/product')!!}">{!! __('ecommerce::product.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('ecommerce::product.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$products->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
