@component('shop::emails.layouts.master')

<div style="text-align: center;">
    <a href="{{ config('app.url') }}">
        @include ('shop::emails.layouts.logo')
    </a>
</div>

<div style="padding: 30px;">

    <div style="font-size: 20px;color: #242424;line-height: 30px;margin-bottom: 34px;">
        <p style="font-size: 16px;color: #1b2c13;line-height: 24px;">
            {!! __('shop::app.mail.customer.verification.heading') !!}
        </p>

        <p style="font-size: 16px;color: #1b2c13;line-height: 24px;">
            {!! __('shop::app.mail.customer.verification.summary') !!}
        </p>

        <p style="text-align: center;padding: 20px 0;">
            <a href="{{ route('customer.verify', $data['token']) }}" style="padding: 10px 20px;background: #1b2c13;color: #e9e9e1 ;text-transform: uppercase;text-decoration: none; font-size: 16px">
                {!! __('shop::app.mail.customer.verification.verify') !!}
            </a>
        </p>
    </div>

</div>

@endcomponent