<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


<div class="auth-ui-wrapper">

    <div class="auth-ui-card">

        <div class="auth-ui-title">Create Account</div>

        @if ($errors->any())
        <div class="auth-ui-error">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="/register">
            @csrf

            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">

            <button type="submit">Register</button>

            <div class="auth-link">
                Don't have an account?
                <a href="{{ route('login') }}">Register</a>
            </div>
        </form>


    </div>

</div>

</body>

</html>