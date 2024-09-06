<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Link to CSS stylesheets -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <nav>
        <div class="nav__content">
            <div class="logo">
                <div class="logo"><a href="{{ route('home') }}">Web<b>Dev</b></a></div>
            </div>
            <label for="check" class="checkbox">
                <i class="ri-menu-line"></i>
            </label>
            <input type="checkbox" name="check" id="check" />
            <ul>
                <li><a href="{{ route('home') }}">User</a></li>
                <li><a href="{{ route('homepage', ['username' => $username]) }}">Home</a></li>
                <li><a href="{{ route('about', ['username' => $username]) }}">About</a></li>
                <li><a href="{{ route('content', ['username' => $username]) }}">Content</a></li>
                <li><a href="{{ route('contactPage', ['username' => $username]) }}">Contact</a></li>
            </ul>
            <div class="links">
                <a href="https://www.facebook.com/john.maneja.3154?mibextid=LQQJ4d"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/cla_rencee10/"><i class="fab fa-instagram"></i></a>
                <a href="https://x.com/Cla_rencee10"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </nav>

    <section id="home" class="home__section">

        <div class="content">
            <h1 class="description">
                Welcome, {{ $username}}!
            </h1>
            <div class="textpar">
                <p>
                    Our team, composed of Clarence John Bernal Maneja, Jethro Jayson Manzanillo, and Janine Ishe Moral
                    Matamorosa, is currently learning Laravel through our course subject, Web Development. As BS
                    Information Technology students, we are focusing on understanding key concepts such as routing and
                    redirection to build more efficient and dynamic web applications. With a collaborative approach and
                    a passion for coding, we are dedicated to expanding our skills and applying what we learn to
                    real-world projects, enhancing our knowledge and proficiency in Laravel.
                </p>
            </div>
        </div>
    </section>
</body>
</html>