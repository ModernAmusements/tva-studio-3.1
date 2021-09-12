<!DOCTYPE html>
<html lang="de">
<head>
    <title>@yield('page_title')</title>
    {{-- META --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-language" content="de">
    {{-- STYLE --}}
    <link rel="stylesheet prefetch" href="{{ mix('themes/tva/assets/css/index.css') }}">
    {{-- Favicon --}}
    @include('shop::layouts.header.favicon')
    {{-- G-Tag --}}
    @include('shop::layouts.header.gTag')
    {{-- Head --}}
    @yield('head')
    {{-- SEO --}}
    @section('seo')
        @if (! request()->is('/'))
            <meta name="description" content="{{ core()->getCurrentChannel()->description }}" />
        @endif
    @show
    @stack('css')
    {{-- Fonts --}}
    <link rel="prefetch" href="https://use.typekit.net/yxr4ufi.css">
</head>
<body>
    {{-- Preloader  --}}
     {{-- @include('shop::layouts.preloader.gatesPreLoader') --}}
      {{-- Nav --}}
      @include('shop::layouts.header.index')
        {{-- Vue + Main App--}}
        {{-- <div class="body-animation" id="app"> --}}
        <div class="" id="app">
            <flash-wrapper ref='flashes'>
            </flash-wrapper>
            {{-- Opening Loader --}}
            {{-- @include('shop::layouts.preloader.opening') --}}
            {{-- Main App--}}
            <div class="main-container-wrapper">
                <div class="content-container">
                    @yield('content-wrapper')
                </div>
            </div>
            {{-- FOOTER --}}
            @include('shop::layouts.footer.footer')
        </div>

    {{-- flashMessages --}}
    @include('shop::layouts.alerts.alerts')

    {{-- JSCRIPT --}}
    @include('shop::layouts.footer.javascript')
    @stack('scripts')

</body>
</html>