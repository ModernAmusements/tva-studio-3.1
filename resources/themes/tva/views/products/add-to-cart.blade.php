<div class="article-cart article-cart-subpage  btn-grid btn-grid-primary">
<button type="submit" class="btn-hover" {{ ! $product->isSaleable() ? 'disabled' : '' }}>
    {{ __('shop::app.products.add-to-cart') }}
</button>
</div>
