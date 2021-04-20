@inject ('wishListHelper', 'Webkul\Customer\Helpers\Wishlist')

@auth('customer')
<div class="article-cart article-cart-subpage-now border-l btn-grid btn-grid-primary">
    <a
        @if ($wishListHelper->getWishlistProduct($product))
            class="add-to-wishlist already btn-hover"
        @else
            class="add-to-wishlist btn-hover"
        @endif

        id="wishlist-changer"
        href="{{ route('customer.wishlist.add', $product->product_id) }}">

    </a>
</div>
@endauth

