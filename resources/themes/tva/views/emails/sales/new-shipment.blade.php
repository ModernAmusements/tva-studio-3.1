@component('shop::emails.layouts.master')

    <div style="text-align: center;">
        <a href="{{ config('app.url') }}">
            @include ('shop::emails.layouts.logo')
        </a>
    </div>

    <?php $order = $shipment->order; ?>

    <div style="padding: 30px;">

        <div style="font-size: 20px;color: #242424;line-height: 30px;margin-bottom: 34px;">

            <div style="color: #242424; font-weight: bold; text-transform:uppercase; border-top: solid 1px #2A2920; border-bottom: solid 1px #2A2920; text-align: center; line-height: 30px;margin-bottom: 20px !important;">
                {{ __('shop::app.mail.shipment.heading', ['order_id' => $order->increment_id, 'shipment_id' => $shipment->id]) }}
            </div>

            <br>

            <p style="font-size: 16px;color: #242424;line-height: 24px;">
                {{ __('shop::app.mail.order.dear', ['customer_name' => $order->customer_full_name]) }},
            </p>

            <p style="font-size: 16px;color: #242424;line-height: 24px;">
                {!! __('shop::app.mail.order.greeting', [
                    'order_id' => '<a href="' . route('customer.orders.view', $order->id) . '" style="color: #1b2c13; font-weight: bold;">#' . $order->increment_id . '</a>',
                    'created_at' => $order->created_at
                    ])
                !!}
            </p>
        </div>

        <div style="font-weight: bold; text-transform:uppercase; border-top: solid 1px #2A2920; border-bottom: solid 1px #2A2920; text-align: center; line-height: 30px;margin-bottom: 20px !important;">
            {{ __('shop::app.mail.shipment.summary') }}
        </div>

        <div style="display: flex;flex-direction: row;margin-top: 20px;justify-content: space-between;margin-bottom: 40px;">
            <div style="line-height: 25px;">
                <div style="font-weight: bold;font-size: 16px;color: #242424;">
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

                <div style="font-weight: bold;font-size: 16px;color: #242424;">
                    {{ __('shop::app.mail.order.shipping') }}
                </div>

                <div style="font-size: 16px;color: #242424;">
                    <div style="font-weight: bold;">
                        {{ $order->shipping_title }}
                    </div>

                    <div style="margin-top: 5px;">
                        <span style="font-weight: bold;">{{ __('shop::app.mail.shipment.carrier') }} : </span>{{ $shipment->carrier_title }}
                    </div>

                    <div style="margin-top: 5px;">
                        <span style="font-weight: bold;">{{ __('shop::app.mail.shipment.tracking-number') }} : </span>{{ $shipment->track_number }}
                    </div>
                </div>
            </div>

            <div style="line-height: 25px;">
                <div style="font-weight: bold;font-size: 16px;color: #242424;">
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

                <div style="font-weight: bold;font-size: 16px; color: #242424;">
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
                            <th style="text-align: left;padding: 8px">{{ __('shop::app.customer.account.order.view.SKU') }}</th>
                            <th style="text-align: left;padding: 8px">{{ __('shop::app.customer.account.order.view.product-name') }}</th>
                            <th style="text-align: left;padding: 8px">{{ __('shop::app.customer.account.order.view.price') }}</th>
                            <th style="text-align: left;padding: 8px">{{ __('shop::app.customer.account.order.view.qty') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($shipment->items as $item)
                            <tr>
                                <td data-value="{{ __('shop::app.customer.account.order.view.SKU') }}" style="text-align: left;padding: 8px">{{ $item->sku }}</td>

                                <td data-value="{{ __('shop::app.customer.account.order.view.product-name') }}" style="text-align: left;padding: 8px">
                                    {{ $item->name }}

                                    @if (isset($item->additional['attributes']))
                                        <div class="item-options">

                                            @foreach ($item->additional['attributes'] as $attribute)
                                                <b>{{ $attribute['attribute_name'] }} : </b>{{ $attribute['option_label'] }}</br>
                                            @endforeach

                                        </div>
                                    @endif
                                </td>

                                <td data-value="{{ __('shop::app.customer.account.order.view.price') }}" style="text-align: left;padding: 8px">{{ core()->formatPrice($item->price, $order->order_currency_code) }}</td>

                                <td data-value="{{ __('shop::app.customer.account.order.view.qty') }}" style="text-align: left;padding: 8px">{{ $item->qty }}</td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div style="margin-top: 20px;font-size: 16px;color: #242424;line-height: 24px;display: inline-block;width: 100%">
            <p style="font-size: 16px;color: #242424;line-height: 24px;">
                {!!
                    __('shop::app.mail.order.help', [
                        'support_email' => '<a style="color:#1b2c13" href="mailto:' . config('mail.from.address') . '">' . config('mail.from.address'). '</a>'
                        ])
                !!}
            </p>

            <p style="font-size: 16px;color: #242424;line-height: 24px;">
                {{ __('shop::app.mail.order.thanks') }}
            </p>
        </div>
    </div>
@endcomponent
