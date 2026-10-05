@extends('layouts.auth')
@section('title')
Reset Password
@endsection
@section('content')
<div class="d-flex flex-column flex-column-fluid align-items-center mt-12 p-4">
    <div class="width-540">
        @include('layouts.errors')
    </div>
    <div class="bg-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
        <h1 class="text-center mb-2">{{__('messages.common.forgot_password').' ?'}}</h1>
        <div class="col-12 text-center mt-0">
            <a href="{{ route('home') }}" class="image mb-4">
                <img data-sizes="auto" data-src="{{ getLogoUrl() }}" title="{{ env('APP_NAME') }}" alt="{{ env('APP_NAME') }}" class="lazyload img-fluid logo-fix-size">
            </a>
        </div>
        <form class="form w-100" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="row">
                <div class="mb-10">
                    <label class="form-label" for="email">Email</label>
                    <input id="email" class="form-control" value="{{ old('email', $request->email) }}"
                    type="email" name="email" required autocomplete="off" autofocus/>

                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-10">
                    <label class="form-label" for="password">{{__('messages.user.password')}}</label>
                    <input id="password" class="form-control"
                    type="password"
                    name="password"
                    required  autocomplete="off" />
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="mb-5">
                    <label class="form-label" for="password_confirmation">{{__('messages.user.confirm_password')}}</label>
                    <input class="form-control" type="password"
                    id="password_confirmation" name="password_confirmation" autocomplete="off"/>
                    <div class="invalid-feedback">
                        {{ $errors->first('password_confirmation') }}
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Submit Field -->
                <div class="form-group col-sm-12 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">{{ __('Reset Password') }}</span>
                    </button>
                    <a href="{{ route('login') }}"
                    class="btn btn-secondary my-0 ms-5 me-0">{{__('messages.common.cancel')}}</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')

@endpush