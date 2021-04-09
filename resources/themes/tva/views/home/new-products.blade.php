@if (app('Webkul\Product\Repositories\ProductRepository')->getNewProducts()->count())
<section class="featured-pro">

    <div class="featured-heading border-t">
            <h1 class="large">Herbst/Winter 2020/21</h1>
            <p class="small">{{ __('shop::app.home.new-products') }}</p>
    </div>

    <div class="product-grid-4">

        @foreach (app('Webkul\Product\Repositories\ProductRepository')->getNewProducts() as $productFlat)

        @include ('shop::products.list.card', ['product' => $productFlat])

        @endforeach

    </div>

</section>
@endif