<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/login/login.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body >
    <div class="container">
        <form role="form" method="POST" action="{{ route('login') }}">
            <h1>BLOG</h1>
            <div class="white-box">
                <input id="email" type="email" class="form-control" name="email" required autofocus>
              <input id="password" type="password" class="form-control" name="password" required>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <input type='submit' value='Log in'>

            <p><a href="{{ route('password.request') }}">Forgot your password?</a></p>
            <p><a href="{{ url('/register') }}">Sign up for a new account.</a></p>
        </form>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

