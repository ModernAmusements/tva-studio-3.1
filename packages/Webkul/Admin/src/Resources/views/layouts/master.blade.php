<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>@yield('page_title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('vendor/backend/ui/assets/images/favicon/apple-icon-57x57.png') }}" />
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('vendor/backend/ui/assets/images/favicon/apple-icon-60x60.png') }}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('vendor/backend/ui/assets/images/favicon/apple-icon-72x72.png') }}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('vendor/backend/ui/assets/images/favicon/apple-icon-76x76.png') }}" />
        <link rel="apple-touch-icon" sizes="114x114" href={{ asset('"vendor/backend/ui/assets/images/favicon/apple-icon-114x114.png') }}" />
        <link rel="apple-touch-icon" sizes="120x120" href={{ asset('"vendor/backend/ui/assets/images/favicon/apple-icon-120x120.png') }}" />
        <link rel="apple-touch-icon" sizes="144x144" href={{ asset('"vendor/backend/ui/assets/images/favicon/apple-icon-144x144.png') }}" />
        <link rel="apple-touch-icon" sizes="152x152" href={{ asset('"vendor/backend/ui/assets/images/favicon/apple-icon-152x152.png') }}" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('vendor/backend/ui/assets/images/favicon/apple-icon-180x180.png') }}" />
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('vendor/backend/ui/assets/images/favicon/android-icon-192x192.png') }}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('vendor/backend/ui/assets/images/favicon/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('vendor/backend/ui/assets/images/favicon/favicon-96x96.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendor/backend/ui/assets/images/favicon/favicon-16x16.png') }}" />
        <link rel="manifest" href="{{ asset('vendor/backend/ui/assets/images/favicon/manifest.json') }}" />
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">



        <link rel="stylesheet" href="{{ asset('vendor/backend/ui/assets/css/ui-test.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/backend/admin/assets/css/admin-test.css') }}">

        {{-- @yield('head') --}}

        {{-- @yield('css') --}}



    </head>

    <body @if (core()->getCurrentLocale() && core()->getCurrentLocale()->direction == 'rtl') class="rtl" @endif style="scroll-behavior: smooth;">
        {!! view_render_event('bagisto.admin.layout.body.before') !!}

        <div id="app">

            <flash-wrapper ref='flashes'>

            </flash-wrapper>


            @include ('admin::layouts.nav-top')



            @include ('admin::layouts.nav-left')




            <div class="content-container">



                @yield('content-wrapper')



            </div>

        </div>

        <script type="text/javascript">
            window.flashMessages = [];

            @foreach (['success', 'warning', 'error', 'info'] as $key)
                @if ($value = session($key))
                    window.flashMessages.push({'type': 'alert-{{ $key }}', 'message': "{{ $value }}" });
                @endif
            @endforeach

            window.serverErrors = [];
            @if (isset($errors))
                @if (count($errors))
                    window.serverErrors = @json($errors->getMessages());
                @endif
            @endif
        </script>

        <script type="text/javascript" src="{{ asset('vendor/backend/admin/assets/js/admin.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/backend/ui/assets/js/ui.js') }}"></script>
        <script type="text/javascript">
            window.addEventListener('DOMContentLoaded', function() {
                moveDown = 60;
                moveUp =  -60;
                count = 0;
                countKeyUp = 0;
                pageDown = 60;
                pageUp = -60;
                scroll = 0;

                listLastElement = $('.menubar li:last-child').offset();

                if (listLastElement) {
                    lastElementOfNavBar = listLastElement.top;
                }

                navbarTop = $('.navbar-left').css("top");
                menuTopValue = $('.navbar-left').css('top');
                menubarTopValue = menuTopValue;

                documentHeight = $(document).height();
                menubarHeight = $('ul.menubar').height();
                navbarHeight = $('.navbar-left').height();
                windowHeight = $(window).height();
                contentHeight = $('.content').height();
                innerSectionHeight = $('.inner-section').height();
                gridHeight = $('.grid-container').height();
                pageContentHeight = $('.page-content').height();

                if (menubarHeight <= windowHeight) {
                    differenceInHeight = windowHeight - menubarHeight;
                } else {
                    differenceInHeight = menubarHeight - windowHeight;
                }

                if (menubarHeight > windowHeight) {
                    document.addEventListener("keydown", function(event) {
                        if ((event.keyCode == 38) && count <= 0) {
                            count = count + moveDown;

                            $('.navbar-left').css("top", count + "px");
                        } else if ((event.keyCode == 40) && count >= -differenceInHeight) {
                            count = count + moveUp;

                            $('.navbar-left').css("top", count + "px");
                        } else if ((event.keyCode == 33) && countKeyUp <= 0) {
                            countKeyUp = countKeyUp + pageDown;

                            $('.navbar-left').css("top", countKeyUp + "px");
                        } else if ((event.keyCode == 34) && countKeyUp >= -differenceInHeight) {
                            countKeyUp = countKeyUp + pageUp;

                            $('.navbar-left').css("top", countKeyUp + "px");
                        } else {
                            $('.navbar-left').css("position", "fixed");
                        }
                    });

                    $("body").css({minHeight: $(".menubar").outerHeight() + 100 + "px"});

                    window.addEventListener('scroll', function() {
                        documentScrollWhenScrolled = $(document).scrollTop();

                            if (documentScrollWhenScrolled <= differenceInHeight + 200) {
                                $('.navbar-left').css('top', -documentScrollWhenScrolled + 60 + 'px');
                                scrollTopValueWhenNavBarFixed = $(document).scrollTop();
                            }
                    });
                }
            });
        </script>
        @stack('scripts')


        <div class="modal-overlay"></div>
    </body>
</html>