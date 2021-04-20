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
<header>
    <!-- Header Logo -->
    <div class="header-logo">
        <a href="{{ route('shop.home.index') }}">
                <svg class="tva-desktop" viewBox="0 0 200 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.35179 30.5414V13.3643H0V9.13733H6.35179V0.569644H9.74996V9.13733H17.6145V13.3643H9.74996V29.8394C9.74996 33.8176 11.7188 35.2784 15.3975 35.2784C16.8307 35.3296 18.2652 35.2281 19.6769 34.9756V39.358C18.2728 39.6777 16.8382 39.8445 15.3982 39.8557C10.1751 39.8557 6.35179 36.8406 6.35179 30.5414Z" fill="#2A2920"/>
                    <path d="M22.0183 9.13733H25.5927L36.6282 34.5721H37.7266L48.8649 9.13733H53.0925L39.9954 39.358H35.1154L22.0183 9.13733Z" fill="#2A2920"/>
                    <path d="M56.7705 30.0861C56.7705 25.7555 58.6357 21.5271 67.7044 21.5271H81.7647V19.6635C81.7647 14.0692 75.8172 13.0644 71.3342 13.0644C65.8946 13.0644 62.0713 14.4216 59.8018 15.8306V11.4066C63.4076 9.40331 67.4682 8.36152 71.5932 8.3814C77.9349 8.3814 85.1363 10.5463 85.1363 20.213V39.358H81.7683V34.3649H80.7324C77.7069 37.5972 73.7282 40.1146 68.941 40.1146C60.0967 40.1146 56.7705 35.1727 56.7705 30.0861ZM81.7625 30.0861V25.452H67.7023C60.8016 25.452 59.7032 27.5242 59.7032 30.0315C59.7032 32.5388 62.8115 35.3251 68.8108 35.3251C73.6439 35.323 78.2874 33.4447 81.7625 30.0861Z" fill="#2A2920"/>
                    <path d="M110.138 19.3751C109.826 18.7075 109.326 18.1444 108.701 17.7536C108.076 17.3628 107.351 17.1608 106.614 17.172C105.769 17.1322 104.943 17.4293 104.318 17.9981C103.692 18.5668 103.318 19.3607 103.278 20.2051C103.273 20.3058 103.273 20.4065 103.278 20.5072C103.278 22.4398 104.62 23.0799 106.417 23.9661C107.658 24.4997 108.856 25.1292 109.999 25.849C110.594 26.2084 111.084 26.7185 111.419 27.3279C111.754 27.9372 111.923 28.6242 111.907 29.3194C111.892 30.0243 111.738 30.7193 111.455 31.3647C111.171 32.0102 110.763 32.5933 110.253 33.0809C109.744 33.5686 109.144 33.951 108.486 34.2065C107.829 34.462 107.128 34.5855 106.423 34.5699L106.319 34.5663C105.525 34.5948 104.736 34.4398 104.012 34.1131C103.288 33.7865 102.65 33.2972 102.147 32.6833C101.636 32.1085 101.243 31.4395 100.989 30.714L102.011 30.2343C102.24 30.8583 102.568 31.4412 102.983 31.9605C103.405 32.4624 103.936 32.8609 104.535 33.1254C105.135 33.3898 105.788 33.5132 106.442 33.486C107.546 33.5123 108.614 33.0994 109.412 32.3381C110.211 31.5768 110.675 30.5295 110.701 29.4266C110.701 29.418 110.701 29.4086 110.701 29.4C110.708 28.7998 110.543 28.2102 110.224 27.7016C109.905 27.1931 109.446 26.7872 108.903 26.5323C108.399 26.2367 107.352 25.6951 105.875 24.9694C104.102 24.1063 103.213 23.628 102.588 22.606C102.217 21.9895 102.021 21.2831 102.022 20.5633C102.008 19.9897 102.108 19.4189 102.314 18.8837C102.521 18.3484 102.831 17.8591 103.227 17.4437C103.623 17.0284 104.097 16.6951 104.622 16.4628C105.147 16.2306 105.712 16.104 106.286 16.0903C106.399 16.0903 106.512 16.0903 106.626 16.0953C107.518 16.0775 108.397 16.3073 109.166 16.7592C109.936 17.2111 110.564 17.8674 110.983 18.6551L110.138 19.3751Z" fill="#2A2920"/>
                    <path d="M121.856 17.4058V34.3168H120.626V17.4547H116.034V16.3845H126.51V17.4547L121.856 17.4058Z" fill="#2A2920"/>
                    <path d="M133.846 16.3348V27.5472C133.711 28.8814 133.972 30.226 134.597 31.4124C135.085 32.0551 135.715 32.5761 136.438 32.9348C137.161 33.2935 137.957 33.4802 138.764 33.4802C139.571 33.4802 140.367 33.2935 141.089 32.9348C141.812 32.5761 142.442 32.0551 142.93 31.4124C143.562 30.2282 143.824 28.8817 143.681 27.5472V16.3348H144.914V27.5472C145.091 29.1484 144.732 30.7629 143.893 32.1382C143.281 32.896 142.508 33.5074 141.629 33.9274C140.751 34.3474 139.789 34.5654 138.815 34.5654C137.841 34.5654 136.88 34.3474 136.001 33.9274C135.123 33.5074 134.349 32.896 133.738 32.1382C132.906 30.7602 132.547 29.148 132.716 27.5472V16.3348H133.846Z" fill="#2A2920"/>
                    <path d="M153.062 34.3168V16.3356H156.606C157.817 16.2831 159.026 16.4739 160.161 16.8968C161.296 17.3197 162.335 17.966 163.216 18.7975C164.877 20.5392 165.803 22.8529 165.803 25.2589C165.803 27.6649 164.877 29.9786 163.216 31.7203C162.337 32.5535 161.298 33.2009 160.162 33.6239C159.026 34.0469 157.817 34.2368 156.606 34.1823L153.062 34.3168ZM154.292 33.2336H156.631C157.667 33.2336 158.693 33.0295 159.65 32.633C160.608 32.2365 161.478 31.6554 162.21 30.9228C162.943 30.1902 163.524 29.3205 163.921 28.3633C164.317 27.4061 164.521 26.3802 164.521 25.3441C164.521 24.3081 164.317 23.2822 163.921 22.325C163.524 21.3678 162.943 20.4981 162.21 19.7655C161.478 19.0329 160.608 18.4517 159.65 18.0553C158.693 17.6588 157.667 17.4547 156.631 17.4547H154.292V33.2336Z" fill="#2A2920"/>
                    <path d="M174.209 16.3348V34.316H172.978V16.3348H174.209Z" fill="#2A2920"/>
                    <path d="M199.997 25.3441C200.007 27.1846 199.471 28.9867 198.456 30.5224C197.441 32.0581 195.994 33.2584 194.297 33.9716C192.6 34.6848 190.73 34.8788 188.923 34.529C187.116 34.1793 185.453 33.3015 184.144 32.0067C182.836 30.7119 181.941 29.0583 181.573 27.255C181.205 25.4517 181.38 23.5797 182.076 21.8758C182.772 20.1719 183.957 18.7126 185.483 17.6825C187.008 16.6525 188.805 16.0978 190.646 16.0889H190.695C191.898 16.0693 193.092 16.2869 194.211 16.729C195.329 17.1711 196.35 17.8292 197.214 18.6657C198.078 19.5022 198.769 20.5007 199.247 21.6041C199.725 22.7076 199.981 23.8943 200 25.0967C199.998 25.1787 199.999 25.2614 199.997 25.3441ZM198.766 25.3441C198.752 23.753 198.266 22.2018 197.372 20.8859C196.477 19.57 195.213 18.5483 193.738 17.9495C192.264 17.3507 190.645 17.2016 189.086 17.5209C187.527 17.8403 186.097 18.6138 184.977 19.7441C183.857 20.8744 183.097 22.3109 182.792 23.8726C182.486 25.4343 182.65 27.0513 183.263 28.52C183.875 29.9887 184.908 31.2434 186.233 32.1259C187.557 33.0085 189.113 33.4795 190.704 33.4796C191.748 33.4944 192.785 33.3034 193.756 32.9174C194.726 32.5314 195.611 31.958 196.36 31.23C197.109 30.5019 197.707 29.6335 198.12 28.6743C198.533 27.7151 198.753 26.684 198.768 25.6397C198.769 25.5434 198.768 25.4441 198.766 25.3441Z" fill="#2A2920"/>
                    <path d="M71.8263 6.67174C73.6689 6.67174 75.1626 5.17822 75.1626 3.33587C75.1626 1.49352 73.6689 0 71.8263 0C69.9837 0 68.49 1.49352 68.49 3.33587C68.49 5.17822 69.9837 6.67174 71.8263 6.67174Z" fill="#2A2920"/>
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
                        <a href="/customer/account/wishlist">Wunschzettel</a>
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