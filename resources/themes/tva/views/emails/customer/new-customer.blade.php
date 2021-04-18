@component('shop::emails.layouts.master')

<div style="text-align: center;">
    <a href="{{ config('app.url') }}">
        @include ('shop::emails.layouts.logo')
    </a>
</div>

<div style="padding: 30px;">
    <div style="font-size: 20px;color: #242424;line-height: 30px;margin-bottom: 34px;">

        <p style="font-size: 16px;color: #1b2c13;line-height: 24px;">
            {{ __('shop::app.mail.customer.new.dear', ['customer_name' => $customer['name']]) }},
        </p>

        <p style="font-size: 16px;color: #1b2c13;line-height: 24px;">
            {!! __('shop::app.mail.customer.new.summary') !!}
        </p>

        <p style="font-size: 16px;color: #1b2c13;line-height: 24px;">
            <b> {!! __('shop::app.mail.customer.new.username-email') !!} </b> - {{ $customer['email'] }} <br>
            <b> {!! __('shop::app.mail.customer.new.password') !!} </b> - {{ $password}}
        </p>
        <p style="font-size: 16px;color: #1b2c13;line-height: 24px;">
            {{ __('shop::app.mail.customer.new.thanks') }}
        </p>
    </div>
</div>

@endcomponent