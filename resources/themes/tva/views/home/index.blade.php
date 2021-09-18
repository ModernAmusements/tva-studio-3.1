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

    {{-- @if ($velocityMetaData)
        <section class="homepage-cms">
            {!! DbView::make($velocityMetaData)->field('home_page_content')->render() !!}
        </section>
        @include('shop::home.advertisements.advertisement-two')
    @else --}}
        {{-- @include('shop::home.advertisements.advertisement-four')
        @include('shop::home.advertisements.advertisement-three') --}}
        @include('shop::home.featured-products')
        @include('shop::home.advertisements.advertisement-two')
        {{-- @include('shop::home.product-policy') --}}

        {{-- @include('shop::home.new-products') --}}
    {{-- @endif --}}


@endsection