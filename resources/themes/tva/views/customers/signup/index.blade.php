@extends('shop::layouts.masterSignUp')


@section('page_title')
    {{ __('shop::app.customer.signup-form.page-title') }}
@endsection



@section('content-wrapper')

<div class="bread-crumbs">
    {{ Breadcrumbs::render('register') }}
</div>

<div class="auth-content">

    <div class="sign-up-text">
        {{ __('shop::app.customer.signup-text.account_exists') }} - <a href="{{ route('customer.session.index') }}">{{ __('shop::app.customer.signup-text.title') }}</a>
    </div>

    <form method="post" action="{{ route('customer.register.create') }}" @submit.prevent="onSubmit">
        {{ csrf_field() }}
        <div class="login-form">
            <div class="login-image">
                <img class="border-b" src="/themes/tva/assets/images/tva-team.png" alt="tva team Sina und Alina" />
            </div>
            <div class="control-group"
                 :class="[errors.has('first_name') ? 'has-error' : '']">
                    <span class="control-error"
                        v-if="errors.has('first_name')">{{ __('shop::app.customer.login-form.invalid-name') }}
                    </span>
                <input type="text"
                       placeholder="{{ __('shop::app.customer.signup-form.firstname') }}"
                       class="control form-sub border-b"
                       name="first_name"
                       v-validate="'required'"
                       value="{{ old('first_name') }}"
                       data-vv-as="&quot;{{ __('shop::app.customer.signup-form.firstname') }}&quot;">
            </div>
            <div class="control-group"
                 :class="[errors.has('last_name') ? 'has-error' : '']">
                <span class="control-error" v-if="errors.has('last_name')">{{ __('shop::app.customer.login-form.invalid-lastname') }}

                </span>
                <input type="text"
                       placeholder="{{ __('shop::app.customer.signup-form.lastname') }}"
                       class="control form-sub border-b "
                       name="last_name"
                       v-validate="'required'"
                       value="{{ old('last_name') }}"
                       data-vv-as="&quot;{{ __('shop::app.customer.signup-form.lastname') }}&quot;">
            </div>
            <div class="control-group"
                 :class="[errors.has('email') ? 'has-error' : '']">
                <span class="control-error" v-if="errors.has('email')">
                    {{ __('shop::app.customer.login-form.invalid-email') }}
                </span>
                <input type="email"
                       placeholder="{{ __('shop::app.customer.signup-form.email') }}"
                       class="control form-sub border-b"
                       name="email" v-validate="'required|email'"
                       value="{{ old('email') }}"
                       data-vv-as="&quot;{{ __('shop::app.customer.signup-form.email') }}&quot;">
            </div>
            <div class="control-group"
                 :class="[errors.has('password') ? 'has-error' : '']">
                <span class="control-error" v-if="errors.has('password')">
                    {{ __('shop::app.customer.login-form.invalid-password') }}
                </span>
                <input type="password"
                       placeholder="{{ __('shop::app.customer.signup-form.password') }}"
                       class="control form-sub border-b"
                       name="password"
                       v-validate="'required|min:6'"
                       ref="password"
                       value="{{ old('password') }}"
                       data-vv-as="&quot;{{ __('shop::app.customer.signup-form.password') }}&quot;">
            </div>
            <div class="control-group"
                 :class="[errors.has('password_confirmation') ? 'has-error' : '']">
                <span class="control-error" v-if="errors.has('password_confirmation')">
                    {{ __('shop::app.customer.login-form.invalid-match') }}
                </span>
                <input type="password"
                       placeholder="{{ __('shop::app.customer.signup-form.confirm_pass') }}"
                       class="control form-sub border-b"
                       name="password_confirmation"
                       v-validate="'required|min:6|confirmed:password'"
                       data-vv-as="&quot;{{ __('shop::app.customer.signup-form.confirm_pass') }}&quot;">
            </div>
            <div class="signup-confirm"
                 :class="[errors.has('agreement') ? 'has-error' : '']">
                <span class="control-error" v-if="errors.has('agreement')">
                    {{ __('shop::app.customer.login-form.invalid-agreement') }}
                </span>
                <div class="confirm-group">
                    <input type="checkbox"
                           id="checkbox2"
                           name="agreement"
                           v-validate="'required'">
                    <label class="checkbox-view"
                            for="checkbox2">
                    </label>
                    <span>{{ __('shop::app.customer.signup-form.agree') }}
                        <a href="">{{ __('shop::app.customer.signup-form.terms') }}
                        </a> &
                        <a href="">{{ __('shop::app.customer.signup-form.conditions') }}
                        </a> {{ __('shop::app.customer.signup-form.using') }}.
                    </span>
                </div>
            </div>
        <div class="btn-grid btn-grid-primary">
            <button class="btn-hover"
                    type="submit">
                <span class="text">
                    {{ __('shop::app.customer.signup-form.button_title') }}
                </span>
            </button>
        </div>
        </div>
    </form>
</div>
@endsection
