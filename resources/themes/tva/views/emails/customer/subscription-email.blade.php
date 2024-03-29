@component('shop::emails.layouts.master')

<div style="text-align: center;">
    <a href="{{ config('app.url') }}">
        @include ('shop::emails.layouts.logo')
    </a>
</div>


<div style="padding: 30px;">
    <div style="font-size: 20px;
                color: #242424;
                line-height: 30px;
                margin-bottom: 34px;
                ">

        <p style="padding: 5px;
                  font-size: 28px;
                  color: #1b2c13;
                  font-weight:500;
                  line-height: 28px;
                  border-top: solid 1px #1b2c13;
                  border-bottom: solid 1px #1b2c13;
                  text-align: center;">
            {!! __('shop::app.mail.customer.subscription.greeting') !!}
        </p>

        <p style="color:#242424;
                  margin-top: 60px;
                  margin-bottom: 15px;
                  text-align: center;
                  text-transform: normal;">
            {!! __('shop::app.mail.customer.subscription.summary') !!}
        </p>

        {{-- <p style="text-align: center;padding: 20px 0;">
            <a href="{{ route('shop.unsubscribe', $data['token']) }}" style="padding: 10px 20px;background: #1b2c13;color: #e9e9e1 ;text-transform: uppercase;text-decoration: none; font-size: 16px">
                {!! __('shop::app.mail.customer.subscription.unsubscribe') !!}
            </a>
        </p> --}}

    </div>
</div>

@endcomponent