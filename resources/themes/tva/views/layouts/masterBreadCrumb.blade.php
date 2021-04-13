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
    @if ($favicon = core()->getCurrentChannel()->favicon_url)
        <link rel="icon" sizes="16x16" href="{{ $favicon }}" />
    @else
        <link rel="icon" sizes="16x16" href="{{ tva_asset('images/favicon.ico') }}" />
    @endif
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
<body @if (core()->getCurrentLocale()->direction == 'rtl') class="rtl" @endif>
    <span id="body-pageloader">
      {{-- Nav --}}
      @include('shop::layouts.header.indexSignUp')
        {{-- Vue + Main App--}}
    <div id="app">
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
            }, 6000);
            setTimeout(function() {
                currentlyAdded.style.display='none';
            }, 9000);
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
    <script type="text/javascript" src="{{ mix('themes/tva/assets/js/pageLoader.js') }}"></script>
    <script type="text/javascript" src="{{ mix('themes/tva/assets/js/mainApp.js') }}"></script>
    @stack('scripts')
    {{-- MODAL --}}
    <div class="modal-overlay"></div>
    <div id="consent-popup" class="hidden">
        <p class="small">Wir verwenden Cookies für Analyse- und Marketingzwecke. Bitte akzeptieren Sie <a href="@php echo route('shop.cms.page', 'about-us') @endphp">diese Bedingungen</a> , bevor Sie die Seite nutzen.</p>
        <a id="accept" href="#">Akzeptieren</a>
    </div>
</span>
    <div id="page-loader">
        <div class="tva-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
      </div>

</body>
</html>