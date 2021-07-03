@component('shop::emails.layouts.master')

<div style="text-align: center;">
    <a href="{{ config('app.url') }}">
        @include ('shop::emails.layouts.logo')
    </a>
</div>

    <?php $order = $invoice->order; ?>

    <div style="padding: 30px;">

        <div style="font-size: 20px;color: #242424;line-height: 30px;margin-bottom: 34px;">

            <div style="color: #242424; font-weight: bold; text-transform:uppercase; border-top: solid 1px #2A2920; border-bottom: solid 1px #2A2920; text-align: center; line-height: 30px;margin-bottom: 20px !important;">
                {{ __('shop::app.mail.invoice.heading', ['order_id' => $order->increment_id, 'invoice_id' => $invoice->id]) }}
            </div>

            <br>

            <p style="font-size: 16px;color: #242424;line-height: 24px;">
                {{ __('shop::app.mail.order.dear', ['customer_name' => $order->customer_full_name]) }},
            </p>

            {{-- <p style="font-size: 16px;color: #242424;line-height: 24px;">
                {!! __('shop::app.mail.order.greeting', [
                    'order_id' => '<a href="' . route('customer.orders.view', $order->id) . '" style="color: #1b2c13; font-weight: bold;">#' . $order->increment_id . '</a>',
                    'created_at' => $order->created_at
                    ])
                !!}
            </p> --}}
            <p style="font-size: 16px;color: #242424;line-height: 24px;">
                bitte begleichen Sie diese Rechnung innerhalb von 7 Tagen nach erhalt dieser Email.<br/>
                Leistungsdatum = Datum dieser Email.<br/>
                Zahlungsziel: 7 Tage.<br/>
            </p>
        </div>

        <div style="font-weight: bold; text-transform:uppercase; border-top: solid 1px #2A2920; border-bottom: solid 1px #2A2920; text-align: center; line-height: 30px;margin-bottom: 20px !important;">
            {{ __('shop::app.mail.invoice.summary') }}
        </div>

        <div
            style="display: flex;flex-direction: row;margin-top: 20px;justify-content: space-between;margin-bottom: 40px;">
            @if ($order->shipping_address)
                <div style="line-height: 25px; margin-right: 25px;">
                    <div style="font-weight: bold;font-size: 16px;color: #242424;">
                        {{ __('shop::app.mail.order.shipping-address') }}
                    </div>

                    <div style="font-size: 16px;color: #242424;">
                        {{ $order->shipping_address->name }}
                    </div>

                    <div style="font-size: 16px;color: #242424;">
                        {{ $order->shipping_address->address1 }}, {{ $order->shipping_address->state }}
                    </div>

                    <div style="font-size: 16px;color: #242424;">
                        {{ core()->country_name($order->shipping_address->country) }} {{ $order->shipping_address->postcode }}
                    </div>

                    <div style="font-size: 16px;color: #242424;">
                        ---</div>

                    <div style="margin-bottom: 40px; color: #242424;">
                        {{ __('shop::app.mail.order.contact') }} : {{ $order->shipping_address->phone }}
                    </div>

                    <div style="font-size: 16px;color: #242424;">
                        {{ __('shop::app.mail.order.shipping') }}
                    </div>

                    <div style="font-weight: bold;font-size: 16px;color: #242424;">
                        {{ $order->shipping_title }}
                    </div>
                </div>
            @endif

            <div style="line-height: 25px;">
                <div style="font-weight: bold;font-size: 16px;color: #242424;">
                    {{ __('shop::app.mail.order.billing-address') }}
                </div>

                <div style="font-size: 16px;color: #242424;">
                    {{ $order->billing_address->name }}
                </div>

                <div style="font-size: 16px;color: #242424;">
                    {{ $order->billing_address->address1 }}, {{ $order->billing_address->state }}
                </div>

                <div style="font-size: 16px;color: #242424;">
                    {{ core()->country_name($order->billing_address->country) }} {{ $order->billing_address->postcode }}
                </div>

                <div style="font-size: 16px;color: #242424;">---</div>

                <div style="margin-bottom: 40px; color: #242424;">
                    {{ __('shop::app.mail.order.contact') }} : {{ $order->billing_address->phone }}
                </div>

                <div style="font-size: 16px; color: #242424;">
                    {{ __('shop::app.mail.order.payment') }}
                </div>

                <div style="font-weight: bold;font-size: 16px; color: #242424;">
                    {{ core()->getConfigData('sales.paymentmethods.' . $order->payment->method . '.title') }}
                </div>
            </div>
        </div>

        <div class="section-content">
            <div class="table mb-20">
                <table style="overflow-x: auto; border-collapse: collapse;
                border-spacing: 0;width: 100%">
                    <thead>
                    <tr style="border-top: solid 1px #2A2920; border-bottom: solid 1px #2A2920; text-align: center;">
                        <th style="text-align: left;padding: 8px">{{ __('shop::app.customer.account.order.view.product-name') }}</th>
                        <th style="text-align: left;padding: 8px">{{ __('shop::app.customer.account.order.view.price') }}</th>
                        <th style="text-align: left;padding: 8px">{{ __('shop::app.customer.account.order.view.qty') }}</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($invoice->items as $item)
                        <tr>
                            <td data-value="{{ __('shop::app.customer.account.order.view.product-name') }}"
                                style="text-align: left;padding: 8px">
                                {{ $item->name }}

                                @if (isset($item->additional['attributes']))
                                    <div class="item-options">

                                        @foreach ($item->additional['attributes'] as $attribute)
                                            <b>{{ $attribute['attribute_name'] }}
                                                : </b>{{ $attribute['option_label'] }}</br>
                                        @endforeach

                                    </div>
                                @endif
                            </td>

                            <td data-value="{{ __('shop::app.customer.account.order.view.price') }}"
                                style="text-align: left;padding: 8px">{{ core()->formatPrice($item->price, $order->order_currency_code) }}
                            </td>

                            <td data-value="{{ __('shop::app.customer.account.order.view.qty') }}"
                                style="text-align: left;padding: 8px">{{ $item->qty }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <div style="font-size: 16px;color: #242424;line-height: 30px;float: right;width: 100%;margin-top: 20px;">

            @foreach (Webkul\Tax\Helpers\Tax::getTaxRatesWithAmount($order, false) as $taxRate => $taxAmount )
            <div style="border-top: solid 1px #2A2920; font-size: 16px;color: #242424;">
                <span id="">Nettobetrag</span>
                <span id="taxamount-{{ core()->taxRateAsIdentifier($taxRate) }}" style="float: right;">
                    {{ core()->formatPrice($taxAmount, $order->order_currency_code) }}
                </span>
            </div>
            @endforeach

            <div style="font-size: 16px;color: #242424;">
                <span>{{ __('shop::app.mail.order.subtotal') }}</span>
                <span style="float: right;">
                    {{-- Zwischen Summe --}}
                    {{ core()->formatPrice($order->grand_total, $order->order_currency_code) }}
                </span>
            </div>

            @if ($order->shipping_address)
                <div>
                    <span>{{ __('shop::app.mail.order.shipping-handling') }}</span>
                    <span style="float: right;">
                        {{ core()->formatPrice($order->shipping_amount, $order->order_currency_code) }}
                    </span>
                </div>
            @endif


            @if ($order->discount_amount > 0)
                <div>
                    <span>{{ __('shop::app.mail.order.discount') }}</span>
                    <span style="float: right;">
                        {{ core()->formatPrice($order->discount_amount, $order->order_currency_code) }}
                    </span>
                </div>
            @endif

            <div style="font-weight: bold ; border-top: solid 1px #2A2920; border-bottom: solid 1px #2A2920;">
                <span>{{ __('shop::app.mail.order.grand-total') }}</span>
                <span style="float: right;">
                    {{-- Gesamtsumme --}}
                    {{ core()->formatPrice($order->sub_total, $order->order_currency_code) }}
                </span>
            </div>
        </div>

    </div>
@endcomponent
