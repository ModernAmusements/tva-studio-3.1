@component('shop::emails.layouts.master')
    <div style="text-align: center;
                margin-bottom: 34px;">
        <a href="{{ config('app.url') }}">
            @include ('shop::emails.layouts.logo')
        </a>
    </div>
    <div>
        <div style="font-size: 20px;
                    line-height: 30px;
                    margin-bottom: 34px;">
            <div style="text-align: center;
                        border-top: 1px solid #2A2920;
                        padding-top: 10px;
                        ">
                {{ __('shop::app.mail.order.heading') }}
            </div>
            <br>
            <p style="font-size: 14px;
                      line-height: 18px;
                      padding: 0 1em;">
                {{ __('shop::app.mail.order.dear', ['customer_name' => $order->customer_full_name]) }},
            </p>
            <p style="font-size: 14px;
                      line-height: 18px;
                      padding: 0 1em;">
                {!! __('shop::app.mail.order.greeting', [
                    'order_id' => '<a href="' . route('customer.orders.view', $order->id) . '" ">#' . $order->increment_id . '</a>',
                    'created_at' => $order->created_at
                    ])
                !!}
            </p>
        </div>

        <div style="font-size: 20px;
                    line-height: 30px;
                    margin-bottom: 20px !important;
                    text-align: center;
                    border-bottom: 1px solid #2A2920;">
            {{ __('shop::app.mail.order.summary') }}
        </div>

        <div style="display: flex;
                    flex-direction: row;
                    margin-top: 20px;
                    justify-content: flex-start;
                    padding: 0 1em;
                    margin-bottom: 40px;">
            @if ($order->shipping_address)
                <div style="padding-right: 10%">
                    <div style=" font-size: 14px;">
                        {{ __('shop::app.mail.order.shipping-address') }}
                    </div>

                    <div>
                        {{ $order->shipping_address->name }}
                    </div>

                    <div>
                        {{ $order->shipping_address->address1 }}, {{ $order->shipping_address->state }}
                    </div>

                    <div>
                        {{ core()->country_name($order->shipping_address->country) }} {{ $order->shipping_address->postcode }}
                    </div>

                    <div>---</div>

                    <div style="margin-bottom: 40px;">
                        {{ __('shop::app.mail.order.contact') }} : {{ $order->shipping_address->phone }}
                    </div>
                </div>
            @endif
            <div style="padding-right: 10%">
                    <div style=" font-size: 14px;">
                        {{ __('shop::app.mail.order.billing-address') }}
                    </div>

                    <div>
                        {{ $order->billing_address->name }}
                    </div>

                    <div>
                        {{ $order->billing_address->address1 }}, {{ $order->billing_address->state }}
                    </div>

                    <div>
                        {{ core()->country_name($order->billing_address->country) }} {{ $order->billing_address->postcode }}
                    </div>

                    <div>---</div>

                    <div style="margin-bottom: 40px;">
                        {{ __('shop::app.mail.order.contact') }} : {{ $order->billing_address->phone }}
                    </div>

                </div>

            </div>

            <div style="display: flex;
                        flex-direction: column;
                        margin-top: 20px;
                        justify-content: space-between;
                        margin-bottom: 40px;
                        border-top: 1px solid #2A2920;">
                        <div style="font-size: 14px;
                                    padding: 0 1em;">
                            <strong>{{ __('shop::app.mail.order.shipping') }}</strong>
                            <br>
                            {{ $order->shipping_title }}
                        </div>
                        <div style="font-size: 14px;
                                    padding: 0 1em;">
                             <strong> {{ core()->getConfigData('sales.paymentmethods.' . $order->payment->method . '.title') }}</strong>
                            <br>
                                {{ __('shop::app.mail.order.payment') }}
                        </div>
            </div>
        </div>

        <div class="section-content">
            <div class="table mb-20">
                <table style="overflow-x: auto;
                              border-collapse: collapse;
                              border-spacing: 0;
                              width: 100%">
                    <thead>
                        <tr style="border-bottom: 1px solid #2A2920;
                                   border-top: 1px solid #2A2920;">
                            <th style="text-align: left;
                                       padding: 0 1em;">
                                       {{ __('shop::app.customer.account.order.view.SKU') }}
                                    </th>
                            <th style="text-align:left;
                                       padding: 0 1em;">
                                       {{ __('shop::app.customer.account.order.view.product-name') }}
                                    </th>
                            <th style="text-align: left;
                                       padding: 0 1em;">
                                        {{ __('shop::app.customer.account.order.view.price') }}
                                    </th>
                            <th style="text-align: left;
                                       padding: 0 1em;">
                                       {{ __('shop::app.customer.account.order.view.qty') }}
                                    </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($order->items as $item)
                            <tr>
                                <td data-value="{{ __('shop::app.customer.account.order.view.SKU') }}" style="text-align: left;padding: 0 1em;">{{ $item->getTypeInstance()->getOrderedItem($item)->sku }}</td>

                                <td data-value="{{ __('shop::app.customer.account.order.view.product-name') }}" style="text-align: left;padding: 0 1em;">
                                    {{ $item->name }}

                                    @if (isset($item->additional['attributes']))
                                        <div class="item-options">

                                            @foreach ($item->additional['attributes'] as $attribute)
                                                <b>{{ $attribute['attribute_name'] }} : </b>{{ $attribute['option_label'] }}</br>
                                            @endforeach

                                        </div>
                                    @endif
                                </td>

                                <td data-value="{{ __('shop::app.customer.account.order.view.price') }}" style="text-align: left;padding: 0 1em;">{{ core()->formatPrice($item->price, $order->order_currency_code) }}
                                </td>

                                <td data-value="{{ __('shop::app.customer.account.order.view.qty') }}" style="text-align: left;padding: 0 1em;">{{ $item->qty_ordered }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div style="font-size: 14px;
                    line-height: 30px;
                    float: right;
                    margin-top: 20px;">
            <div>
                <span>{{ __('shop::app.mail.order.subtotal') }}</span>
                <span style="float: right; padding: 0 1em;">
                    {{ core()->formatPrice($order->sub_total, $order->order_currency_code) }}
                </span>
            </div>

            @if ($order->shipping_address)
                <div>
                    <span>{{ __('shop::app.mail.order.shipping-handling') }}</span>
                    <span style="float: right; padding: 0 1em;">
                        {{ core()->formatPrice($order->shipping_amount, $order->order_currency_code) }}
                    </span>
                </div>
            @endif

            @foreach (Webkul\Tax\Helpers\Tax::getTaxRatesWithAmount($order, false) as $taxRate => $taxAmount )
            <div>
                <span id="taxrate-{{ core()->taxRateAsIdentifier($taxRate) }}">{{ __('shop::app.mail.order.tax') }} {{ $taxRate }} %</span>
                <span id="taxamount-{{ core()->taxRateAsIdentifier($taxRate) }}" style="float: right; padding: 0 1em;">
                    {{ core()->formatPrice($taxAmount, $order->order_currency_code) }}
                </span>
            </div>
            @endforeach

            @if ($order->discount_amount > 0)
                <div>
                    <span>{{ __('shop::app.mail.order.discount') }}</span>
                    <span style="float: right; padding: 0 1em;">
                        {{ core()->formatPrice($order->discount_amount, $order->order_currency_code) }}
                    </span>
                </div>
            @endif

            <div style="font-weight: bold">
                <span>
                    {{ __('shop::app.mail.order.grand-total') }}
                </span>
                <span style="float: right;
                             padding: 0 1em;
                             ">
                    {{ core()->formatPrice($order->grand_total, $order->order_currency_code) }}
                </span>
            </div>
        </div>

        <div style="margin-top: 65px;
                    display: inline-block">

            <p style="font-size: 14px;
                      padding: 0 1em;
                      line-height:18px;">
                {{ __('shop::app.mail.order.final-summary') }}
            </p>

            <p style="font-size: 14px;
                      padding: 0 1em;
                      line-height:18px;">
                      {!!__('shop::app.mail.order.help', ['support_email' => '<a style=" href="mailto:' . config('mail.from.address') . '">' . config('mail.from.address'). '</a>'])!!}
            </p>


            <p style="font-size: 14px;
                      padding: 0 1em;
                      line-height:18px;">
                {{ __('shop::app.mail.order.thanks') }}
            </p>
        </div>
    </div>
@endcomponent
