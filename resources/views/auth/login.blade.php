@extends('admin.layouts.blank')

@section('content')

    <!-- Main Form -->
    <div class="login-form-1 form-tip">
            <form method="POST" action="{{ route('login') }}" id="login-form" class="text-left">
            @csrf

            <h2>{{ __('login') }}</h2>

            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="lg_username" class="sr-only">Username</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="lg_password" class="sr-only">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password">
                    </div>
                    <div class="form-group login-group-checkbox">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
            </div>
            @if (Route::has('password.request'))
                <div class="etc-login-form">
                    <p>forgot your password? <a href="{{ route('password.request') }}" data-toggle="modal" data-target="#forgotPassword">click here</a></p>
                </div>
            @endif
        </form>
    </div><!-- end:Main Form -->

@endsection
