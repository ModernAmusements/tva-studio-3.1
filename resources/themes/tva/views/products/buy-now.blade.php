<div class="article-cart article-cart-subpage-now btn-grid btn-grid-black">
<button type="submit" class="btn-hover buynow" {{ ! $product->isSaleable(1) ? 'disabled' : '' }}>
    {{ __('shop::app.products.buy-now') }}
</button>
</div>