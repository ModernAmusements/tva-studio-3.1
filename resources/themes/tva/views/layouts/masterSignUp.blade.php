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
<body @if (core()->getCurrentLocale()->direction == 'rtl') class="rtl" @endif>
    {{-- Between Loader --}}
    @include('shop::layouts.preloader.betweenLoader')
    {{-- Nav --}}
    @include('shop::layouts.header.indexSignUp')
   {{-- Vue + Main App--}}
    <div id="app">
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
    <script type="text/javascript">
        window.flashMessages = [];
        @if ($success = session('success'))
            window.flashMessages = [{'type': 'alert-success', 'message': "{{ $success }}" }];
        @elseif ($warning = session('warning'))
            window.flashMessages = [{'type': 'alert-warning', 'message': "{{ $warning }}" }];
        @elseif ($error = session('error'))
            window.flashMessages = [{'type': 'alert-error', 'message': "{{ $error }}" }
            ];
        @elseif ($info = session('info'))
            window.flashMessages = [{'type': 'alert-info', 'message': "{{ $info }}" }
            ];
        @endif
        window.serverErrors = [];
        @if(isset($errors))
            @if (count($errors))
                window.serverErrors = @json($errors->getMessages());
            @endif
        @endif
    </script>
    {{-- JSCRIPT --}}
    @include('shop::layouts.footer.javascript')
    @stack('scripts')
</body>
</html>