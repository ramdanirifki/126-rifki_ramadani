<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('styles/login.css') }}">
</head>

<body>
    <form action="/all-menu" method="POST">
        <p>Sign In</p>
        <div class="form-input">
            <label for="username">
                Username :
            </label>
            <input type="text">
            <label for="password">
                Password :
            </label>
            <input type="password">
            <div class="checkbox">
                <input type="checkbox">
                <div class="container-label">
                    <label for="show-password">Show Password</label>
                </div>
            </div>
        </div>
        <div class="button">
            <button type="button">
                Continue
            </button>
        </div>
    </form>
</body>

</html>
