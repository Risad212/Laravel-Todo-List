@extends('layouts.app')

@section('content')

<div class="auth-ui-wrapper">

    <div class="auth-ui-card">

        <div class="auth-ui-title">Login</div>

        @if ($errors->any())
        <div class="auth-ui-error">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="/login">
            @csrf

            <input class="auth-ui-input" type="email" name="email" placeholder="Email" required>

            <input class="auth-ui-input" type="password" name="password" placeholder="Password" required>

            <!-- Remember + Forgot section -->
            <div class="auth-login-extra">

                <div class="rm-remember">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember Me</label>
                </div>

                <a class="auth-forgot-link" href="{{ route('password.request') }}">
                    Forgot Password?
                </a>

            </div>

            <button class="auth-ui-btn" type="submit">Login</button>

            <div class="auth-link">
                Don't have an account?
                <a href="{{ route('register') }}">Register</a>
            </div>

        </form>

    </div>

</div>

@endsection