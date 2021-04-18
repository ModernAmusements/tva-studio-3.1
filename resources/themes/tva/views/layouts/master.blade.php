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

    <link rel="stylesheet prefetch" href="{{ mix('themes/tva/assets/css/index.css') }}">

    @include('shop::layouts.header.favicon')

    @yield('head')
    {{-- SEO --}}
    @section('seo')
        @if (! request()->is('/'))
            <meta name="description" content="{{ core()->getCurrentChannel()->description }}" />
        @endif
    @show
    @stack('css')
    {{-- STYLE --}}
    <link rel="prefetch" href="https://use.typekit.net/yxr4ufi.css">
</head>
<body class="animation">
    <div id="preload-homepage">
        <div class="intro">
            <svg class="tva-logo-preload"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82.44 64.43">
                <path  d="M53.72,87.25V70.67H47.59V66.59h6.13V58.32H57v8.27h7.59v4.08H57v15.9c0,3.84,1.9,5.25,5.45,5.25a19.57,19.57,0,0,0,4.13-.29v4.23a19.29,19.29,0,0,1-4.13.48C57.41,96.24,53.72,93.33,53.72,87.25Z" transform="translate(-47.59 -57.77)"/>
                <path  d="M68.84,66.59h3.45L82.94,91.14H84L94.75,66.59h4.08L86.19,95.76H81.48Z" transform="translate(-47.59 -57.77)"/>
                <path  d="M102.38,86.81c0-4.18,1.8-8.26,10.55-8.26H126.5v-1.8c0-5.4-5.74-6.37-10.07-6.37-5.25,0-8.94,1.31-11.13,2.67V68.78a23.2,23.2,0,0,1,11.38-2.92c6.12,0,13.07,2.09,13.07,11.42V95.76H126.5V90.94h-1c-2.92,3.12-6.76,5.55-11.38,5.55C105.59,96.49,102.38,91.72,102.38,86.81Zm24.12,0V82.34H112.93c-6.66,0-7.72,2-7.72,4.42s3,5.11,8.79,5.11A18,18,0,0,0,126.5,86.81Z" transform="translate(-47.59 -57.77)"/>
                <path  d="M57,109.86a3.11,3.11,0,0,0-2.86-1.79,2.59,2.59,0,0,0-2.71,2.71c0,1.57,1.09,2.09,2.55,2.81a21.12,21.12,0,0,1,2.91,1.53,3.21,3.21,0,0,1,1.55,2.82,4.36,4.36,0,0,1-4.54,4.26,4.19,4.19,0,0,1-3.39-1.53,4.8,4.8,0,0,1-.94-1.6l.83-.39a5,5,0,0,0,.79,1.4A3.48,3.48,0,0,0,54,121.32,3.38,3.38,0,0,0,57.46,118,2.54,2.54,0,0,0,56,115.67c-.41-.24-1.26-.68-2.46-1.27-1.44-.7-2.16-1.09-2.67-1.92a3.21,3.21,0,0,1-.46-1.66,3.55,3.55,0,0,1,3.74-3.63,3.92,3.92,0,0,1,3.54,2.08Z" transform="translate(-47.59 -57.77)"/>
                <path  d="M66.52,108.26V122h-1v-13.7H61.79v-.87H70.3v.87Z" transform="translate(-47.59 -57.77)"/><path class="cls-1" d="M76.26,107.39v9.11a5.53,5.53,0,0,0,.61,3.14,4.25,4.25,0,0,0,6.77,0,5.45,5.45,0,0,0,.61-3.14v-9.11h1v9.11a5.92,5.92,0,0,1-.83,3.73,5.3,5.3,0,0,1-8.25,0,6,6,0,0,1-.83-3.73v-9.11Z" transform="translate(-47.59 -57.77)"/>
                <path  d="M91.87,122V107.39h2.88a7.36,7.36,0,0,1,5.37,2,7.61,7.61,0,0,1,0,10.5,7.33,7.33,0,0,1-5.37,2Zm1-.88h1.9a6.41,6.41,0,1,0,0-12.82h-1.9Z" transform="translate(-47.59 -57.77)"/><path class="cls-1" d="M109.05,107.39V122h-1V107.39Z" transform="translate(-47.59 -57.77)"/>
                <path  d="M130,114.71a7.56,7.56,0,1,1-7.56-7.52A7.44,7.44,0,0,1,130,114.71Zm-1,0a6.55,6.55,0,1,0-6.55,6.61A6.46,6.46,0,0,0,129,114.71Z" transform="translate(-47.59 -57.77)"/>
                <circle  cx="69.32" cy="3.22" r="3.22"/>
            </svg>
            <h1 class="large"><em>Ceramics Handmade In Germany</em></h1>
            <h3 class="">2016-<?=date('Y')?></h1>
        </div>
      </div>
      {{-- Nav --}}
      @include('shop::layouts.header.index')
        {{-- Vue + Main App--}}
    <div class="title-animation" id="app">
        <flash-wrapper ref='flashes'>
        </flash-wrapper>
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
        @elseif ($addToCart = session('addToCart'))
            const currentlyAdded  = document.getElementById('currentlyAdded');
             currentlyAdded.style.opacity='1';
             currentlyAdded.style.left='0';
             setTimeout(function() {
                currentlyAdded.style.opacity='0';
            }, 4000);
            setTimeout(function() {
                currentlyAdded.style.display='none';
            }, 5000);
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
    <script type="text/javascript" src="{{ tva_asset('js/shop.js') }}"></script>
    <script type="text/javascript" src="{{ tva_asset('js/ui.js') }}"></script>
    <script type="text/javascript" src="{{ mix('themes/tva/assets/js/mainApp.js') }}"></script>
    @stack('scripts')
    {{-- MODAL --}}
    <div class="modal-overlay"></div>
    <div id="consent-popup" class="hidden">
        <p class="small">Wir verwenden Cookies für Analyse- und Marketingzwecke. Bitte akzeptieren Sie <a href="@php echo route('shop.cms.page', 'about-us') @endphp">diese Bedingungen</a> , bevor Sie die Seite nutzen.</p>
        <a id="accept" href="#">Akzeptieren</a>
    </div>
</body>
</html>