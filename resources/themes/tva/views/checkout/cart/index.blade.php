@extends('shop::layouts.masterBreadCrumb')

@section('page_title')
    {{ __('shop::app.checkout.cart.title') }}
@stop

@section('content-wrapper')
<div class="bread-crumbs">
    {{ Breadcrumbs::render('cart') }}
</div>
    @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')
    <section class="cart">
        @if ($cart)
            <div class="cart-content">
                <div class="left-side">
                    <form action="{{ route('shop.checkout.cart.update') }}" method="POST" @submit.prevent="onSubmit">
                        <div class="cart-item-list">
                        @csrf
                        @foreach ($cart->items as $key => $item)
                        @php
                            $productBaseImage = $item->product->getTypeInstance()->getBaseImage($item);
                        @endphp

                        <div class="item">
                            <div class="item-image">
                                <a href="{{ route('shop.productOrCategory.index', $item->product->url_key) }}">
                                    <img alt="{{ $item->product->name }}" class="cart-img" src="{{ $productBaseImage['medium_image_url'] }}" />
                                </a>
                            </div>

                            <div class="item-details">
                                <div class="item-title">
                                    <a href="{{ route('shop.productOrCategory.index', $item->product->url_key) }}">
                                        <h1 class="large">{{ $item->product->name }}</h1>
                                    </a>
                                </div>
                                @if (isset($item->additional['attributes']))
                                    <div class="item-options">
                                        @foreach ($item->additional['attributes'] as $attribute)
                                            <b>{{ $attribute['attribute_name'] }} : </b>{{ $attribute['option_label'] }}</br>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="misc medium">
                                    @if ($item->product->getTypeInstance()->showQuantityBox() === true)
                                        <quantity-changer
                                            :control-name="'qty[{{$item->id}}]'"
                                            quantity="{{$item->quantity}}">
                                        </quantity-changer>
                                    @endif
                                    <span class="remove">
                                        <a href="{{ route('shop.checkout.cart.remove', $item->id) }}" onclick="removeLink('{{ __('shop::app.checkout.cart.cart-remove-action') }}')">{{ __('shop::app.checkout.cart.remove-link') }}</a>
                                    </span>
                                    {{--
                                    @auth('customer')
                                        <span class="towishlist">
                                            @if ($item->parent_id != 'null' ||$item->parent_id != null)
                                                <a href="{{ route('shop.movetowishlist', $item->id) }}" onclick="removeLink('{{ __('shop::app.checkout.cart.cart-remove-action') }}')">{{ __('shop::app.checkout.cart.move-to-wishlist') }}</a>
                                            @else
                                                <a href="{{ route('shop.movetowishlist', $item->child->id) }}" onclick="removeLink('{{ __('shop::app.checkout.cart.cart-remove-action') }}')">{{ __('shop::app.checkout.cart.move-to-wishlist') }}</a>
                                            @endif
                                        </span>
                                    @endauth --}}
                                    <div class="price">
                                        {{ core()->currency($item->base_price) }}
                                    </div>
                                </div>
                                @if (! cart()->isItemHaveQuantity($item))
                                    <div class="error-message">
                                        * {{ __('shop::app.checkout.cart.quantity-error') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    </div>

                        <div class="misc-controls">
                            <a href="{{ route('shop.home.index') }}" class="left">
                                {{ __('shop::app.checkout.cart.continue-shopping') }}
                            </a>
                            <div class="btn-grid border btn-grid-primary">
                                @if ($cart->hasProductsWithQuantityBox())
                                    <button type="submit" class="btn-hover" id="update_cart_button">
                                       <span>{{ __('shop::app.checkout.cart.update-cart') }}</span>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>

                <div class="right-side">
                    @include('shop::checkout.total.summary', ['cart' => $cart])
                    <coupon-component>
                    </coupon-component>
                    @if (! cart()->hasError())
                    <div class="btn-grid border-b border-r btn-grid-primary">
                        @if ($cart->hasProductsWithQuantityBox())
                        <a href="{{ route('shop.checkout.onepage.index') }}" class="btn-hover">
                            <span>{{ __('shop::app.checkout.cart.proceed-to-checkout') }}</span>
                        </a>
                    @endif
                    </div>

                    @endif
                </div>
            </div>

            @include ('shop::products.view.cross-sells')

            @else
            <div class="left-side">

                <div class="item-title">
                    <h1 class="xlarge">
                        {{ __('shop::app.checkout.cart.title') }}
                    </h1>
                </div>
                <div style="text-align: center">
                    <p class="medium">
                        {{ __('shop::app.checkout.cart.empty') }}
                    </p>

                <div class="empty-cart">

                    <svg viewBox="0 0 220 305" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M91.9201 101.37C91.2901 105.73 97.9201 114.81 107.82 114.89C114.21 114.94 120.59 115.45 126.97 115.73C141.65 116.35 142.6 115.38 142.16 100.14C142.16 99.8797 142.16 99.6197 142.16 99.3697C141.51 94.2197 140.85 89.7697 134.3 87.9897C131.03 87.0897 129.02 82.0497 126.01 79.3697C123.24 76.9197 119.78 73.2697 116.85 73.4697C112.56 73.7597 107.1 75.9497 104.58 79.2497C99.5801 85.8097 91.8901 91.1397 91.9301 101.37H91.9201ZM183.1 91.1897C189.84 95.0797 196.26 98.9797 202.85 102.54C209.67 106.22 212.17 111.76 210.13 119.14C203.07 144.67 193.94 154.88 168.13 154.23C166.32 154.23 163.57 154.53 162.79 155.73C158.37 162.51 153.28 169.17 150.56 176.67C145.46 190.77 137.04 200.22 122.45 204.08C110.62 207.21 100.18 201.57 98.0501 189.46C96.4801 180.55 96.0501 171.46 94.9801 161.58C93.1401 162.27 90.6501 163.13 88.2301 164.15C77.9701 168.47 67.3901 170.25 56.3301 168.35C44.0001 166.22 34.4901 157.23 33.0001 146.36C31.8901 138.16 33.4401 131.28 41.0001 126.45C45.1301 123.82 48.5501 120.04 51.5801 117.38C40.2801 110.21 28.9201 103.76 18.4701 96.0597C12.8901 91.9497 8.5601 85.9197 4.2001 80.3297C-1.0799 73.5497 -1.1199 66.7297 4.5301 59.5897C9.3001 53.5897 15.1601 53.9697 21.6001 54.3197C33.1901 54.9597 44.7901 55.3197 56.4001 55.4897C62.4001 55.5897 64.1501 51.9497 63.2601 46.2897C62.2601 39.9897 61.2601 33.6597 60.9001 27.2897C60.5401 21.2897 63.4101 17.2897 69.2501 15.1397C80.2501 11.1397 91.3901 7.40967 101.99 2.48967C115.86 -3.95033 133.79 8.10967 135.1 20.8697C135.54 25.1897 137.84 26.4897 141.69 26.3497C145.69 26.1997 149.78 26.3497 153.82 26.1397C168.54 25.5397 181.66 29.4797 193.11 39.2097C197.94 43.3097 199.11 48.4697 197.4 53.6897C193.9 64.5797 189.5 75.1797 185.4 85.8897C184.78 87.5197 183.97 89.0797 183.01 91.1797" fill="#2A2920"/>
                        <path d="M135.35 144.69C158.53 157.44 175.41 174.69 186.49 193.36C199.14 214.67 204.55 237.51 207 260.31C208.49 274.08 209 287.89 209.44 301.69C209.59 305.98 219.44 306 219.31 301.69C218.45 276.63 217.5 251.43 210.73 226.69C204.91 205.44 194.38 184.48 176.88 166.29C166.755 155.834 155.107 146.97 142.33 140C141.266 139.385 140.059 139.062 138.83 139.062C137.601 139.062 136.394 139.385 135.33 140C133.6 141.18 133.26 143.58 135.33 144.73" fill="#2A2920"/>

                    </svg>
                </div>
                    <div class="btn-grid mt-s border btn-grid-primary">
                        <a href="{{ route('shop.home.index') }}" class="btn-hover">
                            {{ __('shop::app.checkout.cart.continue-shopping') }}
                        </a>
                    </div>
                </div>
            </div>

        @endif
    </section>

@endsection

@push('scripts')
    @include('shop::checkout.cart.coupon')

    <script type="text/x-template" id="quantity-changer-template">
        <div class="quantity control-group" :class="[errors.has(controlName) ? 'has-error' : '']">
            <div class="wrap">
                <label>{{ __('shop::app.products.quantity') }}</label>

                <button type="button" class="decrease" @click="decreaseQty()">-</button>

                <input :name="controlName" class="control" :value="qty" v-validate="'required|numeric|min_value:1'" data-vv-as="&quot;{{ __('shop::app.products.quantity') }}&quot;" readonly>

                <button type="button" class="increase" @click="increaseQty()">+</button>

                <span class="control-error" v-if="errors.has(controlName)">@{{ errors.first(controlName) }}</span>
            </div>
        </div>
    </script>

    <script>
        Vue.component('quantity-changer', {
            template: '#quantity-changer-template',

            inject: ['$validator'],

            props: {
                controlName: {
                    type: String,
                    default: 'quantity'
                },

                quantity: {
                    type: [Number, String],
                    default: 1
                }
            },

            data: function() {
                return {
                    qty: this.quantity
                }
            },

            watch: {
                quantity: function (val) {
                    this.qty = val;

                    this.$emit('onQtyUpdated', this.qty)
                }
            },

            methods: {
                decreaseQty: function() {
                    if (this.qty > 1)
                        this.qty = parseInt(this.qty) - 1;

                    this.$emit('onQtyUpdated', this.qty)
                },

                increaseQty: function() {
                    this.qty = parseInt(this.qty) + 1;

                    this.$emit('onQtyUpdated', this.qty)
                }
            }
        });

        function removeLink(message) {
            if (!confirm(message))
            event.preventDefault();
        }

        function updateCartQunatity(operation, index) {
            var quantity = document.getElementById('cart-quantity'+index).value;

            if (operation == 'add') {
                quantity = parseInt(quantity) + 1;
            } else if (operation == 'remove') {
                if (quantity > 1) {
                    quantity = parseInt(quantity) - 1;
                } else {
                    alert('{{ __('shop::app.products.less-quantity') }}');
                }
            }
            document.getElementById('cart-quantity'+index).value = quantity;
            event.preventDefault();
        }
    </script>
@endpush