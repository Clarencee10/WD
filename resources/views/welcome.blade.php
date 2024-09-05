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
            <div class="logo"><a href="{{ route('home') }}">Web<b>Dev</b></a></div>
            <label for="check" class="checkbox">
                <i class="ri-menu-line"></i>
            </label>
            <input type="checkbox" name="check" id="check" />
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('content') }}">Content</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
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
                <p class="subtitle">HELLO</p>
                <h1 class="title">I'm <span>Clarence</span></h1>
               
                <p class="description">
                    My name is Clarence John B. Maneja, 19 years old, and I live in Puro, Legazpi City. 
                    I am a third-year student at Bicol University, pursuing a Bachelor of Science in Information Technology. 
                    In addition to my academic endeavors, I am a dedicated student-athlete, balancing my commitment to both sports and studies. 
                    Through this dual role, I have developed strong time management skills, discipline, and a relentless drive to excel in all areas of my life. 
                    As I continue to grow academically and athletically, I am eager to apply my skills to real-world challenges and make meaningful contributions to the tech industry.
                </p>
                <a href="{{ route('about') }}" class="action__btns">
                    <button class="hire__me">Meh!</button>
                </a>
            <div class="image">
                <img src="{{ asset('images/profile3.jpg') }}" alt="profile"> 
                <h2>3rd Year Student of Bicol University</h2>       
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="footer__container">
            <div class="footer__column">
                <h3 class="footer__logo">WebDev</h3>
            </div>
            <div class="footer__column">
                <h4 class="footer__title">Resources</h4>
                <ul class="footer__list">
                    <li><a href="{{ route('home') }}" class="footer__link">Home</a></li>
                    <li><a href="{{ route('content') }}" class="footer__link">Content</a></li>
                    <li><a href="{{ route('about') }}" class="footer__link">About</a></li>
                </ul>
            </div>
            <div class="footer__column">
            <h4 class="footer__title">Contact</h4>
            <p class="footer__contact-info">
                <span><a href="mailto:cjbm2022-7360-36736@bicol-u.edu.ph" class="footer__link"><i class="fas fa-envelope"></i></a></span>
                <span>cjbm2022-7360-36736@bicol-u.edu.ph</span><br>
                <span><a href="tel:09922831271" class="footer__link"><i class="fas fa-phone"></i></a></span>
                <span>0992 283 1271</span>
            </p>
        </div>
        </div>
        <div class="footer__bottom">
            <p>&copy; 2024 All rights reserved.</p>
        </div>
    </section>
</body>
</html>
