<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    
    <!-- Link to CSS stylesheets -->
    <link rel="stylesheet" href="{{ asset('stylecontent.css') }}"> 
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
            <a href="#https://www.facebook.com/john.maneja.3154?mibextid=LQQJ4d"><i class="fab fa-facebook"></i></a>
            <a href="#https://www.instagram.com/cla_rencee10/"><i class="fab fa-instagram"></i></a>
            <a href="#https://x.com/Cla_rencee10"><i class="fab fa-twitter"></i></a>
      </div>
    </nav>

    <section id="content" class="content__section">
    <div class="content__container">
        <h2 class="section__title">Content</h2>

        <div class="content__grid">
            <div class="content__item">
                <h3>Things I Loved</h3>
                <p>I loved beach outings, savoring delicious burgers, and exploring new places with my family. 
                  Additionally, I cherish the time spent with my cat, Ven, who brings a lot of joy into my life.</p>
            </div>

            <div class="content__item">
                <h3>My Hobbies</h3>
                <p>In my free time, I enjoy playing online games, engaging in exciting volleyball matches, and watching captivating movies. 
                  These activities not only help me unwind but also keep me connected with my interests and passions.</p>           
            </div>

            <div class="content__item">
                <h3>Other Skills</h3>
                <p>Developed excellent customer service and sales skills while working at my aunt’s silver jewelry store. 
                  This experience honed my ability to understand customer needs, provide personalized service, and manage sales effectively.</p>
            </div>

            <div class="content__item">
                <h3>Education</h3>
                <p> <strong>Puro Elementary School</strong> (2009 - 2015) 
                <br> <strong>Daraga National High School</strong> (2015 - 2022)
                 <br> <strong>Bicol University</strong> (2022 - Present) </p>
            </div>
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
