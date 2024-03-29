@extends('shop::layouts.masterSignUp')

@section('page_title')
 {{ __('shop::app.customer.reset-password.title') }}
@endsection

@section('content-wrapper')

<div class="auth-content">

    {!! view_render_event('bagisto.shop.customers.reset_password.before') !!}

    <form method="post" action="{{ route('customer.reset-password.store') }}" >

        {{ csrf_field() }}

        <div class="login-form">

            <div class="login-text">
                <h2 class="single-line">{{ __('shop::app.customer.reset-password.title') }}</h2>
            </div>

            <input type="hidden" name="token" value="{{ old('token') ?: $token }}">

            {!! view_render_event('bagisto.shop.customers.reset_password_form_controls.before') !!}

            <div class="control-group" :class="[errors.has('email') ? 'has-error' : '']">
                <input type="text" placeholder="{{ __('shop::app.customer.reset-password.email') }}" v-validate="'required|email'" class="control form-sub border-t" id="email" name="email" value="{{ old('email') }}"/>
                <span class="control-error" v-if="errors.has('email')">@{{ errors.first('email') }}</span>
            </div>

            <div class="control-group" :class="[errors.has('password') ? 'has-error' : '']">
                <input type="password" placeholder="{{ __('shop::app.customer.reset-password.password') }}" class="control form-sub border-t " name="password" v-validate="'required|min:6'" ref="password">
                <span class="control-error" v-if="errors.has('password')">@{{ errors.first('password') }}</span>
            </div>

            <div class="control-group" :class="[errors.has('confirm_password') ? 'has-error' : '']">
                <input type="password" placeholder="{{ __('shop::app.customer.reset-password.confirm-password') }}" class="control form-sub border-t" name="password_confirmation"  v-validate="'required|min:6|confirmed:password'">
                <span class="control-error" v-if="errors.has('confirm_password')">@{{ errors.first('confirm_password') }}</span>
            </div>

            {!! view_render_event('bagisto.shop.customers.reset_password_form_controls.before') !!}


            <div class="btn-grid border-t btn-grid-secondary">
                <button type="submit" class="btn-hover">
                    <input type="submit" value="{{ __('shop::app.customer.reset-password.submit-btn-title') }}">
                </button>
            </div>




        </div>
    </form>

    {!! view_render_event('bagisto.shop.customers.reset_password.before') !!}
</div>
@endsection