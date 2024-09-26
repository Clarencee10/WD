<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Verification</title>
    <link rel="stylesheet" href="{{ asset('home.css') }}">
</head>

<body>
    <div class="container">
        <h1>Verify Your Age to Log In</h1>
        <form action="{{ route('age.verify') }}" method="POST" class="age-verification-form">
            @csrf
            <label for="age">Enter your age:</label>
            <input type="number" name="age" id="age" required min="1" class="age-input">
            <button type="submit" class="submit-btn">Submit</button>
        </form>

        @if ($errors->has('age'))
            <div class="error-message">
                {{ $errors->first('age') }}
            </div>
        @endif
    </div>
</body>

</html>