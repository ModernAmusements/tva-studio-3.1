@extends('shop::layouts.masterSignUp')

@section('page_title')
    {{ __('shop::app.customer.login-form.page-title') }}
@endsection

@section('content-wrapper')

<div class="bread-crumbs">
    {{ Breadcrumbs::render('login') }}
</div>
    <div class="auth-content">
        <div class="sign-up-text">
            {{ __('shop::app.customer.login-text.no_account') }} - <a href="{{ route('customer.register.index') }}">{{ __('shop::app.customer.login-text.title') }}</a>
        </div>
        <form method="POST" action="{{ route('customer.session.create') }}" @submit.prevent="onSubmit">
            {{ csrf_field() }}
            <div class="login-form">
                <div class="login-image">
                    <img class="border-b" src="/themes/tva/assets/images/tva-team.png" alt="tva team Sina und Alina" />
                </div>

                <div class="control-group"
                     :class="[errors.has('email') ? 'has-error' : '']">

                    <span class="control-error"
                          v-if="errors.has('email')">
                          @{{ errors.first('email') }}
                    </span>
                    <input type="text"
                           placeholder="{{ __('shop::app.customer.login-form.email') }}"
                           class="control form-sub border-b"
                           name="email"
                           v-validate="'required|email'"
                           value="{{ old('email') }}"
                           data-vv-as="&quot;{{ __('shop::app.customer.login-form.email') }}&quot;">
                </div>

                <div class="control-group"
                     :class="[errors.has('password') ? 'has-error' : '']">

                    <span class="control-error"
                          v-if="errors.has('password')">
                          @{{ errors.first('password') }}
                    </span>
                    <input type="password"
                           placeholder="{{ __('shop::app.customer.login-form.password') }}"
                           v-validate="'required|min:6'"
                           class="form-sub border-b control"
                           id="password"
                           name="password"
                           data-vv-as="&quot;{{ __('admin::app.users.sessions.password') }}&quot;" value=""/>
                </div>

                <div class="forgot-password-link">
                    <a class="left" href="{{ route('customer.forgot-password.create') }}">
                       {{ __('shop::app.customer.login-form.forgot_pass') }}
                    </a>
                    <div>
                        @if (Cookie::has('enable-resend'))
                            @if (Cookie::get('enable-resend') == true)
                                <a href="{{ route('customer.resend.verification-email', Cookie::get('email-for-resend')) }}">
                                    {{ __('shop::app.customer.login-form.resend-verification') }}
                                </a>
                            @endif
                        @endif
                    </div>
                </div>

                <div class="btn-grid border-t btn-grid-primary">
                    <button class="btn-hover"
                            type="submit"
                            value="{{ __('shop::app.customer.login-form.button_title') }}">
                        <span class="text">
                            {{ __('shop::app.customer.login-form.button_title') }}
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
@stop

