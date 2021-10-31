@extends('admin::layouts.anonymous-master')

@section('page_title')
    {{ __('admin::app.users.sessions.title') }}
@stop

@section('content')
    <div class="panel">
        <div class="panel-content">
            <div class="brand-logo pt-2">
                <img src="{{ asset('/vendor/backend/ui/assets/images/bagzz-logo.svg') }}" alt="{{ config('app.name') }}"/>
            </div>
            <div class="mb-2 text-center">
                <h1 class="text-main">Quick integration</h1>
                <small class="color-black">Built for unmatched customer experience</small>
            </div>
            <div class="form-container form-signin">
                {{-- <h1 style="text-align: center">{{ __('admin::app.users.sessions.title') }}</h1> --}}
                <form method="POST" action="{{ route('admin.session.store') }}" @submit.prevent="onSubmit">
                    @csrf
                    <div class="form-floating" class="control-group" :class="[errors.has('email') ? 'has-error' : '']">
                        <input type="email" class="form-control" id="floatingInput" placeholder="{{ __('admin::app.users.sessions.email') }}" v-validate="'required|email'" class="control" id="email" name="email" data-vv-as="&quot;{{ __('admin::app.users.sessions.email') }}&quot;"/>
                        <label for="floatingInput">Email address</label>
                      </div>
                      <div class="form-floating control-group"  :class="[errors.has('password') ? 'has-error' : '']">
                        <input type="password" class="form-control" id="floatingPassword"  placeholder="{{ __('admin::app.users.sessions.password') }}" v-validate="'required|min:6'" class="control" id="password" name="password" data-vv-as="&quot;{{ __('admin::app.users.sessions.password') }}&quot;" value=""/>
                        <label for="floatingPassword">Password</label>
                      </div>
                      <span class="control-error" v-if="errors.has('email')">@{{ errors.first('email') }}</span>
                      <span class="control-error" v-if="errors.has('password')">@{{ errors.first('password') }}</span>
                    <div class="button-group">
                        <button class="btn btn-xl btn-primary">{{ __('admin::app.users.sessions.submit-btn-title') }}</button>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a href="{{ route('admin.forget-password.create') }}" class="">
                                <small>{{ __('admin::app.users.sessions.forget-password-link-title') }}</small>
                            </a>
                        </div>
                        <div class="col-6 text-end">
                            <a href="" class="">
                                <small>Contact WebMaster</small>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop