<div class="article-cart article-cart-subpage-now btn-grid btn-grid-black">
<button  type="submit" class="btn-hover buynow" {{ ! $product->isSaleable(1) ? 'disabled' : '' }}>
    <div class="stock-status {{! $product->haveSufficientQuantity(1) ? '' : 'active' }}">
        @if ( $product->haveSufficientQuantity(1) === true )
            {{ __('shop::app.products.buy-now') }}
        @elseif ( $product->haveSufficientQuantity(1) > 0 )
            {{ __('shop::app.products.buy-now') }}
        @else
            Wunschzettel?
        @endif
    </div>
</button>
</div>