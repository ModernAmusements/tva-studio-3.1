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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('vendor/backend/ui/assets/css/ui-test.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/backend/admin/assets/css/admin-test.css') }}">

        @yield('css')
    </head>
    <style>
        html,
        body {
        height: 100%;
        }

        body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #F5F5F7;
        }

        .container {
            text-align: center;
            width: 100%;
            height: 100%;
            display: table;
            z-index: 1;
        }
        .center-box {
            display: table-cell;
            vertical-align: middle;
        }
        .adjacent-center {
            width: 365px;
            display: inline-block;
            text-align: left;
        }

        .form-container .control-group .control {
            width: 100%;
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .brand-logo {
            margin-bottom: 30px;
            text-align: center;
        }

        .footer {
            margin-top: 40px;
            padding: 0 20px;
        }

        .footer p {
            font-size: 14px;
            color: #8E8E8E;
            text-align: center;
        }

        .btn.btn-primary {
            width: 100%;
        }

        .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }

        .form-signin .checkbox {
        font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
        z-index: 2;
        }

        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
    </style>
    <body @if (core()->getCurrentLocale()->direction == 'rtl') class="rtl" @endif style="scroll-behavior: smooth;">
        <div id="app" class="container">
            <flash-wrapper ref='flashes'></flash-wrapper>
            <div class="center-box">
                <div class="adjacent-center">
                    @yield('content')
                    <div class="footer">
                        <p style="text-align: center;">©2017–2021
                            <a href="" target="_blank">
                                Modern Amusements
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            window.flashMessages = [];
            @if ($success = session('success'))
                window.flashMessages = [{'type': 'alert-success', 'message': "{{ $success }}" }];
            @elseif ($warning = session('warning'))
                window.flashMessages = [{'type': 'alert-warning', 'message': "{{ $warning }}" }];
            @elseif ($error = session('error'))
                window.flashMessages = [{'type': 'alert-error', 'message': "{{ $error }}" }];
            @endif

            window.serverErrors = [];
            @if (isset($errors))
                @if (count($errors))
                    window.serverErrors = @json($errors->getMessages());
                @endif
            @endif
        </script>

        <script type="text/javascript" src="{{ asset('vendor/backend/admin/assets/js/admin.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/backend/ui/assets/js/ui.js') }}"></script>

        @stack('javascript')



        <div class="modal-overlay"></div>
    </body>
</html>
