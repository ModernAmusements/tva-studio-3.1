@if (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts()->count())
<section class="featured-pro">

    <div class="featured-heading">
        <h1 class="large">två studio - ROLLERCOASTER</h1>
        <p class="small">{{ __('shop::app.home.featured-products') }}</p>
    </div>

    <div class="featured-grid product-grid-4">

        @foreach (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts() as $productFlat)

        @include ('shop::products.list.card', ['product' => $productFlat])

        @endforeach

    </div>

</section>
@endif