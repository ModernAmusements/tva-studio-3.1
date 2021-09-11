<div class="product-card shop-article scroll">

    @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

    <?php $productBaseImage = $productImageHelper->getProductBaseImage($product); ?>

    @if ($product->new)
    <div class="sticker new">
        <span class="sticker-text">{{ __('shop::app.products.new') }}</span>
    </div>
    @endif

    <div class="article-image">
        <a  href="{{ route('shop.productOrCategory.index', $product->url_key) }}" title="{{ $product->name }}">
            <img class="tva-image hover"
                 alt="{{ $product->name }}"
                 src="{{ $productBaseImage['original_image_url'] }}"
                 onerror="this.src='{{ asset('vendor/backend/ui/assets/images/product/meduim-product-placeholder.png') }}'"
                 data-hover="{{ asset('cache/original/' . $product->images->pull('1')->path) }}"
                 onmouseover="{{ asset('cache/original/' . $product->images->pull('1')->path) }}"
                 onmouseout="{{ $productBaseImage['original_image_url'] }}"
                />
        </a>
    </div>

    <div class="article-information">

        <div class="description">

                <h1 class="large">
                    {{ $product->name }}
                </h1>

        </div>

        @include ('shop::products.price', ['product' => $product])


    </div>
    @include('shop::products.add-buttons', ['product' => $product])

</div>