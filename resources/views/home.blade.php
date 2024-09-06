<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('home.css') }}">
</head>

<body>
    <div class="container">
        <h1>Enter your username to log in</h1>
        <form action="{{ route('user') }}" method="get" class="login-form">
            <input type="text" name="username" placeholder="Enter your username" class="form-input" pattern="[A-Za-z]+"
                title="Please enter only alphabetic characters"> <button type="submit"
                class="submit-btn">Submit</button>
        </form>
    </div>

</body>

</html>