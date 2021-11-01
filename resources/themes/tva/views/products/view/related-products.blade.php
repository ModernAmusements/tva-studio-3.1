<?php
    $relatedProducts = $product->related_products()->get();
?>

@if ($relatedProducts->count())
    <div class="attached-products-wrapper">

        <div class="related-title">
            <h2>Das könnte Ihnen auch gefallen</h2>

        </div>

        <section class="project-list no-scrollbar mask-right" data-toggle-class="toggled">

            @foreach ($relatedProducts as $related_product)

                @include ('shop::products.list.card', ['product' => $related_product])

            @endforeach

        </section>

    </div>
@endif