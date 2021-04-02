<header>
    <!-- Header Logo -->
    <div class="header-logo">
        <a href="{{ route('shop.home.index') }}">
            <svg class="tva-desktop"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82.44 64.43">
                <path  d="M53.72,87.25V70.67H47.59V66.59h6.13V58.32H57v8.27h7.59v4.08H57v15.9c0,3.84,1.9,5.25,5.45,5.25a19.57,19.57,0,0,0,4.13-.29v4.23a19.29,19.29,0,0,1-4.13.48C57.41,96.24,53.72,93.33,53.72,87.25Z" transform="translate(-47.59 -57.77)"/>
                <path  d="M68.84,66.59h3.45L82.94,91.14H84L94.75,66.59h4.08L86.19,95.76H81.48Z" transform="translate(-47.59 -57.77)"/>
                <path  d="M102.38,86.81c0-4.18,1.8-8.26,10.55-8.26H126.5v-1.8c0-5.4-5.74-6.37-10.07-6.37-5.25,0-8.94,1.31-11.13,2.67V68.78a23.2,23.2,0,0,1,11.38-2.92c6.12,0,13.07,2.09,13.07,11.42V95.76H126.5V90.94h-1c-2.92,3.12-6.76,5.55-11.38,5.55C105.59,96.49,102.38,91.72,102.38,86.81Zm24.12,0V82.34H112.93c-6.66,0-7.72,2-7.72,4.42s3,5.11,8.79,5.11A18,18,0,0,0,126.5,86.81Z" transform="translate(-47.59 -57.77)"/>
                <path  d="M57,109.86a3.11,3.11,0,0,0-2.86-1.79,2.59,2.59,0,0,0-2.71,2.71c0,1.57,1.09,2.09,2.55,2.81a21.12,21.12,0,0,1,2.91,1.53,3.21,3.21,0,0,1,1.55,2.82,4.36,4.36,0,0,1-4.54,4.26,4.19,4.19,0,0,1-3.39-1.53,4.8,4.8,0,0,1-.94-1.6l.83-.39a5,5,0,0,0,.79,1.4A3.48,3.48,0,0,0,54,121.32,3.38,3.38,0,0,0,57.46,118,2.54,2.54,0,0,0,56,115.67c-.41-.24-1.26-.68-2.46-1.27-1.44-.7-2.16-1.09-2.67-1.92a3.21,3.21,0,0,1-.46-1.66,3.55,3.55,0,0,1,3.74-3.63,3.92,3.92,0,0,1,3.54,2.08Z" transform="translate(-47.59 -57.77)"/>
                <path  d="M66.52,108.26V122h-1v-13.7H61.79v-.87H70.3v.87Z" transform="translate(-47.59 -57.77)"/><path class="cls-1" d="M76.26,107.39v9.11a5.53,5.53,0,0,0,.61,3.14,4.25,4.25,0,0,0,6.77,0,5.45,5.45,0,0,0,.61-3.14v-9.11h1v9.11a5.92,5.92,0,0,1-.83,3.73,5.3,5.3,0,0,1-8.25,0,6,6,0,0,1-.83-3.73v-9.11Z" transform="translate(-47.59 -57.77)"/>
                <path  d="M91.87,122V107.39h2.88a7.36,7.36,0,0,1,5.37,2,7.61,7.61,0,0,1,0,10.5,7.33,7.33,0,0,1-5.37,2Zm1-.88h1.9a6.41,6.41,0,1,0,0-12.82h-1.9Z" transform="translate(-47.59 -57.77)"/><path class="cls-1" d="M109.05,107.39V122h-1V107.39Z" transform="translate(-47.59 -57.77)"/>
                <path  d="M130,114.71a7.56,7.56,0,1,1-7.56-7.52A7.44,7.44,0,0,1,130,114.71Zm-1,0a6.55,6.55,0,1,0-6.55,6.61A6.46,6.46,0,0,0,129,114.71Z" transform="translate(-47.59 -57.77)"/>
                <circle  cx="69.32" cy="3.22" r="3.22"/>
            </svg>
        </a>
    </div>
    <!-- Search Field -->
    <div class="header-search">
        <form autocomplete="off" role="search" action="{{ route('shop.search.index') }}" method="GET">
            <input type="search" name="term" class="form-sub input-xl" placeholder="{{ ('Suche hier') }}"/>
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
                <a class="disabled" href="/">Archive</a>
            </li>

            <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                <a href="/page/about-us">Philosophy</a>
            </li>

            <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                <a href="/page/about-us">About</a>
            </li>

            <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                <a href="/page/about-us">Faq</a>
            </li>

            <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                <a href="/page/about-us">Imprint</a>
            </li>

            <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                <a href="/page/about-us">Social</a>
            </li>
        </ul>
       </div>
    <div class="register-area">
        <div class="login-panel-heading p-1">
            <h1 class="single-line">Erstelle dein Konto und werde Teil des Tva-Universums.</h1>
         </div>
        <div class="login-heading-registered">
            <div class="login-heading">Already registered?</div>
            <div class="login-content medium">
                <p>If you are already registered, please log in.</p>
                <ul>
                    <li class="">- Manage Cart</li>
                    <li class="">- Orders</li>
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
        <div class="login-heading">Not yet registered!</div>
        <div class="login-content medium">
            <p>If you are already registered, please log in.</p>
            <ul>
                <li class="">- Order updates</li>
                <li class="">- Personalized</li>
                <li class="">- Save items</li>
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
                  Menu
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
                    <a class="disabled" href="">Archive</a>
                </li>

                <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                    <a href="/page/about-us">Philosophy</a>
                </li>

                <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                    <a href="/page/about-us">About</a>
                </li>

                <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                    <a href="/page/about-us">Faq</a>
                </li>

                <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                    <a href="/page/about-us">Imprint</a>
                </li>

                <li class="{{ Request::is('page/about-us') ? ' active' : '' }}" >
                    <a href="/page/about-us">Social</a>
                </li>
            </ul>
        </div>
        <div class="register-area">
            <div class="login-panel-heading">
                <h1 class="single-line">Hey {{ auth()->guard('customer')->user()->first_name }}, nice to see you again</h1>
             </div>
                <div class="nav-menu nav-menu-profile">
                </ul>
                    <li class="{{ Request::is('customer/account/profile') ? ' active' : '' }}" >
                        <a href="/customer/account/profile">Account</a>
                    </li>

                    <li class="{{ Request::is('customer/account/wishlist') ? ' active' : '' }}" >
                        <a href="/customer/account/wishlist">Wishlist</a>
                    </li>

                    <li class="{{ Request::is('checkout/cart') ? ' active' : '' }}" >
                        <a href="/checkout/cart">Cart</a>
                    </li>

                    <li class="{{ Request::is('customer/account/orders') ? ' active' : '' }}" >
                        <a href="/customer/account/orders">Orders</a>
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