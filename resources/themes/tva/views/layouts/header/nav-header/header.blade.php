<?php
header('X-Clacks-Overhead: "GNU Terry Pratchett"');
header('X-XSS-Protection: 1;mode=block');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Expect-CT: enforce,max-age=2592000');
header('Content-Language: en');
header('Referrer-Policy: origin-when-cross-origin');
header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
header('Permissions-Policy: geolocation=(self "https://shady-tawfik.de/"), microphone=()');
?>
<header class="title-animation">
    <!-- Header Logo -->
    <div class="header-logo">
        <a href="{{ route('shop.home.index') }}">
            <svg class="tva-desktop" viewBox="0 0 341 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M191.803 53.4404C191.302 52.3713 190.503 51.4695 189.503 50.8432C188.502 50.2168 187.342 49.8926 186.161 49.9092C185.45 49.8754 184.74 49.9906 184.076 50.2473C183.412 50.504 182.809 50.8966 182.306 51.3999C181.803 51.9033 181.41 52.5062 181.153 53.1701C180.897 53.834 180.781 54.5442 180.815 55.2553C180.815 58.3524 182.965 59.3782 185.846 60.7986C187.835 61.654 189.754 62.6631 191.586 63.8168C192.54 64.393 193.326 65.2107 193.863 66.1875C194.399 67.1643 194.669 68.2655 194.644 69.3799C194.619 70.5232 194.366 71.65 193.9 72.6943C193.434 73.7387 192.764 74.6797 191.93 75.4622C191.096 76.2447 190.115 76.8531 189.043 77.2517C187.971 77.6503 186.83 77.8311 185.688 77.7836C184.416 77.8293 183.151 77.5807 181.991 77.0572C180.831 76.5336 179.807 75.7493 179 74.7654C178.183 73.8439 177.553 72.7717 177.146 71.609L178.783 70.8397C179.15 71.8383 179.677 72.7709 180.342 73.6015C181.017 74.4061 181.868 75.0451 182.829 75.4692C183.79 75.8933 184.836 76.0912 185.885 76.0476C186.764 76.0686 187.638 75.9155 188.458 75.5972C189.278 75.2789 190.026 74.8016 190.66 74.1929C191.295 73.5842 191.803 72.856 192.154 72.0503C192.506 71.2446 192.695 70.3773 192.711 69.4982C192.722 68.5365 192.457 67.5916 191.946 66.7766C191.436 65.9615 190.701 65.3107 189.831 64.9018C189.022 64.4284 187.345 63.5604 184.978 62.3965C182.137 61.0156 180.717 60.2462 179.711 58.6089C179.115 57.6204 178.802 56.488 178.803 55.3342C178.78 54.3689 178.957 53.4093 179.322 52.5156C179.688 51.6219 180.234 50.8134 180.927 50.1409C181.62 49.4684 182.444 48.9465 183.348 48.6079C184.252 48.2692 185.217 48.1213 186.181 48.1732C187.611 48.1447 189.02 48.5131 190.253 49.2374C191.486 49.9618 192.494 51.0137 193.164 52.2765L191.803 53.4404Z" fill="#2A2920" stroke="#2A2920" stroke-width="2"/>
                    <path d="M210.583 50.2829V77.3879H208.61V50.3618H201.252V48.6455H218.04V50.3618L210.583 50.2829Z" fill="#2A2920" stroke="#2A2920" stroke-width="2"/>
                    <path d="M229.797 48.5674V66.5388C229.579 68.677 229.998 70.8319 231.001 72.7331C231.783 73.7631 232.792 74.5983 233.951 75.1733C235.109 75.7483 236.385 76.0475 237.678 76.0475C238.972 76.0475 240.247 75.7483 241.406 75.1733C242.564 74.5983 243.574 73.7631 244.356 72.7331C245.368 70.8352 245.787 68.6774 245.559 66.5388V48.5674H247.532V66.5388C247.814 69.1051 247.239 71.6927 245.895 73.897C244.915 75.1117 243.675 76.0917 242.267 76.7649C240.859 77.4381 239.318 77.7875 237.757 77.7875C236.196 77.7875 234.655 77.4381 233.247 76.7649C231.839 76.0917 230.6 75.1117 229.62 73.897C228.287 71.6882 227.712 69.1044 227.982 66.5388V48.5674H229.797Z" fill="#2A2920" stroke="#2A2920" stroke-width="2"/>
                    <path d="M260.591 77.3886V48.5673H266.273C268.213 48.4832 270.15 48.7891 271.969 49.4667C273.789 50.1444 275.454 51.1802 276.866 52.5128C279.527 55.3045 281.011 59.0131 281.011 62.8695C281.011 66.7259 279.527 70.4345 276.866 73.2262C275.456 74.5616 273.791 75.5991 271.971 76.277C270.151 76.9549 268.213 77.2591 266.273 77.1716L260.591 77.3886ZM262.564 75.6526H266.312C267.973 75.6527 269.617 75.3256 271.151 74.6901C272.685 74.0546 274.079 73.1232 275.254 71.949C276.428 70.7748 277.359 69.3808 277.995 67.8466C278.63 66.3125 278.957 64.6682 278.957 63.0076C278.957 61.347 278.63 59.7027 277.995 58.1685C277.359 56.6343 276.428 55.2404 275.254 54.0662C274.079 52.892 272.685 51.9605 271.151 51.3251C269.617 50.6896 267.973 50.3625 266.312 50.3625H262.564V75.6526Z" fill="#2A2920" stroke="#2A2920" stroke-width="2"/>
                    <path d="M294.483 48.5674V77.3887H292.51V48.5674H294.483Z" fill="#2A2920" stroke="#2A2920" stroke-width="2"/>
                    <path d="M335.811 63.0076C335.826 65.9606 334.965 68.8517 333.336 71.3146C331.706 73.7775 329.383 75.7013 326.659 76.8422C323.935 77.9831 320.934 78.2897 318.036 77.7232C315.138 77.1567 312.473 75.7425 310.38 73.66C308.286 71.5775 306.858 68.9203 306.276 66.0252C305.694 63.1301 305.985 60.1274 307.111 57.3977C308.237 54.6679 310.149 52.3341 312.603 50.6918C315.057 49.0496 317.944 48.1729 320.897 48.1728C322.857 48.1411 324.805 48.5025 326.623 49.2358C328.442 49.9691 330.095 51.0593 331.485 52.4422C332.875 53.825 333.974 55.4724 334.717 57.2871C335.46 59.1017 335.832 61.0469 335.811 63.0076ZM333.838 63.0076C333.815 60.4572 333.037 57.9707 331.603 55.8615C330.169 53.7522 328.143 52.1145 325.78 51.1546C323.417 50.1948 320.823 49.9557 318.324 50.4676C315.825 50.9794 313.534 52.2193 311.739 54.031C309.944 55.8427 308.725 58.1452 308.236 60.6484C307.747 63.1516 308.009 65.7435 308.991 68.0977C309.972 70.4518 311.628 72.4629 313.75 73.8775C315.873 75.2922 318.366 76.0471 320.917 76.0472C322.63 76.0716 324.331 75.75 325.918 75.1018C327.504 74.4536 328.943 73.4921 330.15 72.2748C331.356 71.0574 332.304 69.6093 332.938 68.017C333.572 66.4247 333.878 64.7209 333.838 63.0076V63.0076Z" fill="#2A2920" stroke="#2A2920" stroke-width="2"/>
                    <path d="M12.0927 59.1555V26.4479H0V18.3993H12.0927V2.08496H18.5632V18.3993H33.5361V26.4479H18.5632V57.814C18.5632 65.3892 22.3114 68.1707 29.3145 68.1707C32.0428 68.2687 34.7739 68.0769 37.4618 67.5987V75.9432C34.788 76.5515 32.0564 76.8689 29.3145 76.8901C19.372 76.8901 12.0927 71.1495 12.0927 59.1555Z" fill="#2A2920"/>
                    <path d="M41.9199 18.4004H48.7258L69.7351 66.8304H71.8262L93.0328 18.4004H101.082L76.1465 75.9443H66.855L41.9199 18.4004Z" fill="#2A2920"/>
                    <path d="M108.085 58.2868C108.085 50.0409 111.636 41.9922 128.897 41.9922H155.667V38.4413C155.667 27.7887 144.343 25.8752 135.802 25.8752C125.445 25.8752 118.166 28.4594 113.845 31.1423V22.7188C120.71 18.9044 128.441 16.9207 136.295 16.9585C148.368 16.9585 162.078 21.0815 162.078 39.4869V75.9426H155.667V66.4341H153.694C147.934 72.589 140.359 77.3826 131.245 77.3826C114.417 77.3826 108.085 67.9728 108.085 58.2868ZM155.667 58.2868V49.4688H128.897C115.759 49.4688 113.668 53.4142 113.668 58.1882C113.668 62.9621 119.586 68.2687 131.008 68.2687C140.21 68.2625 149.051 64.6837 155.667 58.2868Z" fill="#2A2920"/>
                    <path d="M136.749 13.7043C140.257 13.7043 143.101 10.8603 143.101 7.35213C143.101 3.84394 140.257 1 136.749 1C133.24 1 130.396 3.84394 130.396 7.35213C130.396 10.8603 133.24 13.7043 136.749 13.7043Z" fill="#2A2920"/>
            </svg>
        </a>
    </div>
    <!-- Search Field -->
    <div class="header-search">
        <form autocomplete="off" role="search" action="{{ route('shop.search.index') }}" method="GET">
            <input type="search" name="term" class="form-sub input-xl" placeholder=""/>
        </form>
        <svg class="search">
            <use xlink:href="/themes/tva/assets/images/iconsTva.svg#searchIcon"></use>
        </svg>
    </div>
    <?php
        $term = request()->input('term');
        if (! is_null($term)) {
            $serachQuery = 'term='.request()->input('term');
        }
    ?>
    <!-- Warenkorb -->
    @include('shop::checkout.cart.mini-cart')
    <!-- Navbar -->
    <!-- Nav-Desktop-Toggle -->
    @guest('customer')
    <div class="nav-login">
        <div class="twa-login-toggle border-l user-menu btn-grid btn-grid-primary">
            <a class="btn-hover">
                <span class="text">{{ ('Anmelden') }}</span>
            </a>
        </div>
    </div>
    @endguest
    @auth('customer')
    <div class="nav-login">
        <div class="twa-login-toggle border-l user-menu btn-grid btn-grid-primary">
            <a class="btn-hover">
                <span class="text">Hi, {{ auth()->guard('customer')->user()->first_name }}</span>
            </a>
        </div>
    </div>
    @endauth
    <!-- Login Panel -->
    <!-- guest -->
    @guest('customer')
    <div class="twa-login-panel account guest">
       <div class="login-panel-heading">
          <div class="btn-close twa-login-toggle">
                Close
          </div>
          <div class="menu-heading">
                Menu
          </div>
       </div>
       <div class="nav-menu">
            <ul>
            <li class="{{ Request::is('/') ? ' active' : '' }}" >
                <a href="/">Home</a>
            </li>

            <li class="{{ Request::is('all') ? ' active' : '' }}" >
                <a href="/all">Shop</a>
            </li>

            <li class="{{ Request::is('archive') ? ' active' : '' }}" >
                <a class="disabled" href="/">Archiv</a>
            </li>

            <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                <a href="/page/about-us">Philosophie</a>
            </li>

            <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                <a href="/page/about-us">Über uns</a>
            </li>

            <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                <a href="/page/about-us">Faq</a>
            </li>

            <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                <a href="/page/about-us">Impressum</a>
            </li>

            <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                <a href="/page/about-us">Soziale Medien</a>
            </li>
        </ul>
       </div>
    <div class="register-area">
        <div class="login-panel-heading p-1">
            <h1 class="single-line">Erstelle dein Konto und werde Teil des Tva-Universums.</h1>
         </div>
        <div class="login-heading-registered">
            <div class="login-heading">Bereits registriert?</div>
            <div class="login-content medium">
                <p>Wenn Sie bereits registriert sind, melden Sie sich bitte an.</p>
            </br>
                <ul>
                    <li class="">- Warenkorb verwalten</li>
                    <li class="">- Bestellungen</li>
                    <li class="">- Wishlist</li>
                </ul>
            </div>
            <div class="signup-area border-b  border-t btn-grid btn-grid-primary btn-grid-large">
                <a class="btn-hover btn-x-large" href="{{ route('customer.session.index') }}">
                    <span class="text"> {{ __('shop::app.header.sign-in') }}</span>
                </a>
            </div>
        </div>
    <div class="login-heading-sign-up">
        <div class="login-heading">Noch nicht registriert!?</div>
        <div class="login-content medium">
            <p>Wenn Sie bereits registriert sind, melden Sie sich bitte an.</p>
        </br>
            <ul>
                <li class="">- Aktualisierung der Bestellung</li>
                <li class="">- Personalisiert</li>
                <li class="">- Artikel speichern</li>
            </ul>
        </div>
        <div class="login-area  border-t btn-grid btn-grid-primary btn-grid-large">
            <a class="btn-hover" href="{{ route('customer.register.index') }}">
                <span class="text">{{ __('shop::app.header.sign-up') }}</span>
            </a>
        </div>
    </div>
</div>
    </div>
    @endguest
    <!-- auth -->
    @auth('customer')
    <div class="twa-login-panel account customer">
        <div class="login-panel-heading">
            <div class="twa-login-toggle btn-close">
                  Close
            </div>
            <div class="menu-heading">
                  Menü
            </div>
         </div>
             <div class="nav-menu">
            </ul>
                <li class="{{ Request::is('/') ? ' active' : '' }}" >
                    <a href="/">Home</a>
                </li>

                <li class="{{ Request::is('all') ? ' active' : '' }}" >
                    <a href="/all">Shop</a>
                </li>

                <li class="{{ Request::is('archive') ? ' active' : '' }}" >
                    <a class="disabled" href="">Archiv</a>
                </li>

                <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                    <a href="/page/about-us">Philosophie</a>
                </li>

                <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                    <a href="/page/about-us">Über uns</a>
                </li>

                <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                    <a href="/page/about-us">Faq</a>
                </li>

                <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                    <a href="/page/about-us">Impressum</a>
                </li>

                <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                    <a href="/page/about-us">Soziale Medien</a>
                </li>
            </ul>
        </div>
        <div class="register-area">
            <div class="login-panel-heading">
                <h1 class="single-line">Hallo {{ auth()->guard('customer')->user()->first_name }}, schön, Sie wiederzusehen.</h1>
             </div>
                <div class="nav-menu nav-menu-profile">
                </ul>
                    <li class="{{ Request::is('customer/account/profile') ? ' active' : '' }}" >
                        <a href="/customer/account/profile">Konto</a>
                    </li>

                    <li class="{{ Request::is('customer/account/wishlist') ? ' active' : '' }}" >
                        <a href="/customer/account/wishlist">Wishlist</a>
                    </li>

                    <li class="{{ Request::is('checkout/cart') ? ' active' : '' }}" >
                        <a href="/checkout/cart">Warenkorb</a>
                    </li>

                    <li class="{{ Request::is('customer/account/orders') ? ' active' : '' }}" >
                        <a href="/customer/account/orders">Bestellungen</a>
                    </li>
                </ul>
                    </div>
                <div class="login-area border-b border-t btn-grid btn-grid-neutral btn-grid-large">
                    <a class="btn-hover" href="{{ route('customer.session.destroy') }}">
                        <span class="text">{{ __('shop::app.header.logout') }}</span>
                    </a>
                </div>
        </div>
    </div>
    @endauth
      <!-- Nav-Mobile Text -->
    <div id="menu-desktop" class="nav-bar-mobile btn-grid btn-grid-primary">
        <a class="btn-hover">
            <span class="text">Menü</span>
        </a>
    </div>
    <!-- Nav-Mobile Burger  -->
    <div id="menu-mobile" class="nav-bar-mobile">
        <div class="burger">
            <div>
            </div>
        </div>
    </div>
    <!-- Cart bar -->
    <!-- ENTKOPPELT -->
</header>