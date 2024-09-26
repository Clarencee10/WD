<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restricted Content</title>
    <link rel="stylesheet" href="{{ asset('home.css') }}">
</head>
<body>
    <div class="container">
        <h1>Welcome to Restricted Content</h1>
        <p>This content is only accessible to users over 18 years of age.</p>
        <p>Thank you for verifying your age. Enjoy your stay!</p>
        
        <div class="content-section">
            <h2>Exclusive Features</h2>
            <ul>
                <li>Feature 1: Premium Access</li>
                <li>Feature 2: Special Offers</li>
                <li>Feature 3: Members-Only Events</li>
            </ul>
        </div>
        
        <a href="{{ route('home') }}" class="btn"><b>View More</b></a>
    </div>
</body>
</html>
