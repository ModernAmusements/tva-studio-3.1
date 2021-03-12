@extends('shop::layouts.master')

@php
$channel = core()->getCurrentChannel();

$homeSEO = $channel->home_seo;

if (isset($homeSEO)) {
$homeSEO = json_decode($channel->home_seo);

$metaTitle = $homeSEO->meta_title;

$metaDescription = $homeSEO->meta_description;

$metaKeywords = $homeSEO->meta_keywords;
}
@endphp

@section('page_title')
{{ isset($metaTitle) ? $metaTitle : "" }}
@endsection

@section('head')

@if (isset($homeSEO))
@isset($metaTitle)
<meta name="title" content="{{ $metaTitle }}" />
@endisset

@isset($metaDescription)
<meta name="description" content="{{ $metaDescription }}" />
@endisset

@isset($metaKeywords)
<meta name="keywords" content="{{ $metaKeywords }}" />
@endisset
@endif
@endsection

@section('content-wrapper')
{!! view_render_event('bagisto.shop.home.content.before') !!}

{!! DbView::make($channel)->field('home_page_content')->with(['sliderData' => $sliderData])->render() !!}



{{ view_render_event('bagisto.shop.home.content.after') }}

<div id="preload-homepage">
    <div class="intro">
        <h1 class="xxxlarge">två studio</h1>
        <h1 class="xlarge">ceramics handmade in germany</h1>
        <h1 class="">2016-<?=date('Y')?></h1>
        <span class="intro-enter medium">(Click to Enter)</span>
    </div>
  </div>

@endsection