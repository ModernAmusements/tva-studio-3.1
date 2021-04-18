@component('shop::emails.layouts.master')

<div style="text-align: center;">
    <a href="{{ config('app.url') }}">
        @include ('shop::emails.layouts.logo')
    </a>
</div>


<div style="padding: 30px;">

    <div style="font-size: 20px;color: #242424;line-height: 30px;margin-bottom: 34px;">
        <p style="font-size: 16px;color: #1b2c13;line-height: 24px;">
            {{ __('shop::app.mail.customer.registration.dear', ['customer_name' => $data['first_name']. ' ' .$data['last_name']]) }},
        </p>

        <p style="font-size: 16px;color: #1b2c13;line-height: 24px;">
            {!! __('shop::app.mail.customer.registration.greeting') !!}
        </p>

        <p style="font-size: 16px;color: #1b2c13;line-height: 24px;">
            {{ __('shop::app.mail.customer.registration.summary') }}
        </p>

        <p style="font-size: 16px;color: #1b2c13;line-height: 24px;">
            {{ __('shop::app.mail.customer.registration.thanks') }}
        </p>
    </div>
</div>

@endcomponent