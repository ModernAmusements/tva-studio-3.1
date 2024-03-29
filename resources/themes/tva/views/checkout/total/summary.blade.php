<div class="order-summary medium">
    <div class="summary-titel">
        <p>{{ __('shop::app.checkout.total.order-summary') }}</p>
    </div>
    {{-- Netto Price --}}
    @if ($cart->base_tax_total)
        @foreach (Webkul\Tax\Helpers\Tax::getTaxRatesWithAmount($cart, true) as $taxRate => $baseTaxAmount )
        <div class="item-detail">
            <label id="taxrate-{{ core()->taxRateAsIdentifier($taxRate) }}">Nettobetrag</label>
            <label class="right" id="basetaxamount-{{ core()->taxRateAsIdentifier($taxRate) }}">{{ core()->currency($baseTaxAmount) }}</label>
        </div>
        @endforeach
    @endif

    {{-- Netto reduce --}}
    <div class="item-detail">
        <label>{{ __('shop::app.checkout.total.grand-total') }}</label>
        <label class="right" id="grand-total-amount-detail">
            {{ core()->currency($cart->base_grand_total) }}
        </label>
    </div>
    {{-- Discount --}}
    <div class="item-detail" id="discount-detail" @if ($cart->base_discount_amount && $cart->base_discount_amount > 0) style="display: block;" @else style="display: none;" @endif>
        <label>
            {{ __('shop::app.checkout.total.disc-amount') }}
        </label>
        <label class="right">
            -{{ core()->currency($cart->base_discount_amount) }}
        </label>
    </div>
    {{-- SHIPPING --}}
    @if ($cart->selected_shipping_rate)
        <div class="item-detail">
            <label>{{ __('shop::app.checkout.total.delivery-charges') }}</label>
            <label class="right">{{ core()->currency($cart->selected_shipping_rate->base_price) }}</label>
        </div>
    @endif
    {{-- Brutto --}}
    <div class="payable-amount" id="grand-total-detail">
        <label>
            {{ intval($cart->items_qty) }}
            {{ __('shop::app.checkout.total.sub-total') }}
            {{ __('shop::app.checkout.total.price') }}
        </label>
        <label class="right">{{ core()->currency($cart->base_sub_total) }}</label>
    </div>
</div>