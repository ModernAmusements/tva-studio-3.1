<div class="article-cart article-cart-subpage  btn-grid btn-grid-primary">
<button  type="submit" class="btn-hover" {{ ! $product->isSaleable() ? 'disabled' : '' }}>
    <div class="stock-status {{! $product->haveSufficientQuantity(1) ? '' : 'active' }}">
        @if ( $product->haveSufficientQuantity(1) === true )
            {{ __('shop::app.products.add-to-cart') }}
        @elseif ( $product->haveSufficientQuantity(1) > 0 )
            {{ __('shop::app.products.add-to-cart') }}
        @else
            {{ __('shop::app.products.out-of-stock') }}
        @endif
    </div>
</button>
</div>
