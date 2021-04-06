@inject ('reviewHelper', 'Webkul\Product\Helpers\Review')


@if ($total = $reviewHelper->getTotalReviews($product))
    <div class="product-ratings mb-10">
        <span class="stars">
            @for ($i = 1; $i <= round($reviewHelper->getAverageRating($product)); $i++)
                <span class="icon star-icon"></span>
            @endfor
        </span>

        <div class="total-reviews">
            {{
                __('shop::app.products.total-rating', [
                        'total_rating' => $reviewHelper->getTotalRating($product),
                        'total_reviews' => $total,
                    ])
            }}
        </div>
    </div>
@endif
