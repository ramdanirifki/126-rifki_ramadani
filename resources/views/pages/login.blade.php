<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('styles/login.css') }}">

	<script>
        document.addEventListener('DOMContentLoaded', function () {
            @if($errors->any())
                alert("{{ $errors->first('message') }}");
            @endif
        });
    </script>
</head>

<body>
    <form action="{{ route('main') }}" method="POST" id="loginForm">
		@csrf
        <p>Sign In</p>
        <div class="form-input">
            <label for="username">
                Username :
            </label>
            <input type="text" id="name" name="name" required autofocus>
            <label for="password">
                Password :
            </label>
            <input type="password" id="password" name="password" required>
            <div class="checkbox">
                <input type="checkbox">
                <div class="container-label">
                    <label for="show-password">Show Password</label>
                </div>
            </div>
        </div>
        <div class="button">
            <button type="submit">
                Continue
            </button>
        </div>
    </form>
</body>

</html>
