@extends('shop::layouts.masterBreadCrumb')

@section('page_title')
    {{ __('shop::app.customer.account.wishlist.page-title') }}
@endsection

@section('content-wrapper')


<div class="bread-crumbs">
    {{ Breadcrumbs::render('profileWishlist') }}
</div>


    <div class="account-content">

        @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

        @include('shop::customers.account.partials.sidemenu')

        @inject ('reviewHelper', 'Webkul\Product\Helpers\Review')

        <div class="account-layout">

            <div class="heading border-b">
                <h2 class="single-line">{{ __('shop::app.customer.account.wishlist.title') }}</h2>

                @if (count($items))
                    <div class="account-action">
                        <a href="{{ route('customer.wishlist.removeall') }}">{{ __('shop::app.customer.account.wishlist.deleteall') }}</a>
                    </div>
                @endif


            </div>

            {!! view_render_event('bagisto.shop.customers.account.wishlist.list.before', ['wishlist' => $items]) !!}

            <div class="account-items-list">

                @if ($items->count())
                    @foreach ($items as $item)
                        <div class="account-item-card">
                            <div class="media-info">
                                @php
                                    $image = $item->product->getTypeInstance()->getBaseImage($item);
                                @endphp

                                <img class="media" alt="{{ config('app.name') }}" src="{{ $image['small_image_url'] }}" />

                                <div class="info">
                                    <div class="item-title">
                                       <h1 class="large">
                                        {{ $item->product->name }}
                                        </h1>

                                        @if (isset($item->additional['attributes']))
                                            <div class="item-options">

                                                @foreach ($item->additional['attributes'] as $attribute)
                                                    <b>{{ $attribute['attribute_name'] }} : </b>{{ $attribute['option_label'] }}</br>
                                                @endforeach

                                            </div>
                                        @endif
                                    </div>

                                    <span class="stars" style="display: inline">
                                        @for ($i = 1; $i <= $reviewHelper->getAverageRating($item->product); $i++)
                                            <span class="icon star-icon"></span>
                                        @endfor
                                    </span>
                                </div>
                            </div>

                            <div class="row-cta">

                                <div class="btn-grid border-b border-r btn-grid-neutral">
                                <a class="btn-hover" href="{{ route('customer.wishlist.remove', $item->id) }}">
                                    Löschen
                                </a>
                            </div>
                                <div class="btn-grid border-b btn-grid-black">
                                <a class="btn-hover" href="{{ route('customer.wishlist.move', $item->id) }}" class="btn btn-primary btn-md">
                                    {{ __('shop::app.customer.account.wishlist.move-to-cart') }}
                                </a>
                            </div>


                            </div>
                        </div>

                    @endforeach

                    <div class="bottom-toolbar">
                        {{ $items->links()  }}
                    </div>
                @else
                    <div class="empty">
                        {{ __('customer::app.wishlist.empty') }}
                    </div>
                @endif
            </div>

            {!! view_render_event('bagisto.shop.customers.account.wishlist.list.after', ['wishlist' => $items]) !!}

        </div>
    </div>
@endsection