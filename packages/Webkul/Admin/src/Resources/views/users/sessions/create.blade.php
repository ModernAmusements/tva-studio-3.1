@extends('admin::layouts.anonymous-master')

@section('page_title')
    {{ __('admin::app.users.sessions.title') }}
@stop

@section('content')

    <div class="panel">

        <div class="panel-content">

            <div class="brand-logo">
                @if (core()->getConfigData('general.design.admin_logo.logo_image'))
                    <img src="{{ \Illuminate\Support\Facades\Storage::url(core()->getConfigData('general.design.admin_logo.logo_image')) }}" alt="{{ config('app.name') }}"/>
                @else
                    <img src="{{ asset('vendor/backend/ui/assets/images/logo.png') }}" alt="{{ config('app.name') }}"/>
                @endif
            </div>

            <div class="mb-20" style="text-align: center">
                <h2>Quick integration</h2>
                <small>Built for unmatched customer experience</small>
            </div>


            <div class="form-container">

                <h1 style="text-align: center">{{ __('admin::app.users.sessions.title') }}</h1>

                <form method="POST" action="{{ route('admin.session.store') }}" @submit.prevent="onSubmit">
                    @csrf

                    <div class="control-group" :class="[errors.has('email') ? 'has-error' : '']">
                        <input type="text" placeholder="{{ __('admin::app.users.sessions.email') }}" v-validate="'required|email'" class="control" id="email" name="email" data-vv-as="&quot;{{ __('admin::app.users.sessions.email') }}&quot;"/>
                        <span class="control-error" v-if="errors.has('email')">@{{ errors.first('email') }}</span>
                    </div>

                    <div class="control-group" :class="[errors.has('password') ? 'has-error' : '']">
                        <input type="password" placeholder="{{ __('admin::app.users.sessions.password') }}" v-validate="'required|min:6'" class="control" id="password" name="password" data-vv-as="&quot;{{ __('admin::app.users.sessions.password') }}&quot;" value=""/>
                        <span class="control-error" v-if="errors.has('password')">@{{ errors.first('password') }}</span>
                    </div>


                    <div class="button-group">
                        <button class="btn btn-xl btn-primary">{{ __('admin::app.users.sessions.submit-btn-title') }}</button>
                    </div>


                    <div class="row mt-3">
                        <div class="col-6">
                            <a href="{{ route('admin.forget-password.create') }}" class="text-light">
                                <small>{{ __('admin::app.users.sessions.forget-password-link-title') }}</small>
                            </a>
                        </div>

                        <div class="col-6 text-right">
                            <a href="" class="text-light">
                                <small>Contact WebMaster</small>
                            </a>
                        </div>
                    </div>



                </form>

            </div>


        </div>

    </div>

@stop