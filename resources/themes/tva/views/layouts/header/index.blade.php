@include('shop::layouts.header.nav-header.header')
<!-- Header CATS -->
{{-- <div class="header-bottom shop-categories body-animation" id="header-bottom"> --}}
<div class="header-bottom shop-categories">
    <div class="categories-heading">
        <h1 class="single-line xxxlarge">@yield('page_title')</h1>
    </div>
    @include('shop::layouts.header.nav-menu.navmenu')
</div>
