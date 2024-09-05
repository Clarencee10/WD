<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    
    <!-- Link to CSS stylesheets -->
    <link rel="stylesheet" href="{{ asset('styleabout.css') }}"> 
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

    <!-- About Section -->
<section id="about" class="about__section">
    <div class="about__container">
        <h2 class="section__title">About</h2>
        <p>Most Memorable Volleyball Experiences</p>
    </div>
</section>

<!-- Most Memorable Volleyball Experiences Section -->
<section id="experiences" class="experiences__section">
    <div class="experiences__container">

        <div class="experiences__items">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('images/Vb1.jpg') }}" alt="Volleyball Game">
                    </div>
                    <div class="flip-card-back">
                        <h3 class="flip-card-title">Team Albay U-18</h3>
                        <p>One of my most memorable experiences was being part of Team Albay U-18 for my first-ever national competition. Although we didn’t win, I was proud to have had the opportunity to represent our province.</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('images/Vb2.jpg') }}" alt="Volleyball Game">
                    </div>
                    <div class="flip-card-back">
                        <h3 class="flip-card-title">Team Bicol University</h3>
                        <p>In this picture, we were the 2nd runners-up at the Bicol Universities and Colleges Athletic League (BUCAL). It was a memorable experience for me because it was my first-ever competition in my college journey.</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('images/Vb3.jpg') }}" alt="Volleyball Game">
                    </div>
                    <div class="flip-card-back">
                        <h3 class="flip-card-title">Championship on Beach Volley</h3>
                        <p>This game was unexpected because when we saw the brackets, we realized we were up against the previous year’s champions in beach volleyball. Despite the challenge, we didn’t give up and gave our very best to claim the title.</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('images/Vb4.jpg') }}" alt="Volleyball Game">
                    </div>
                    <div class="flip-card-back">
                        <h3 class="flip-card-title">1st Runner Up at BUCAL</h3>
                        <p>This was another BUCAL experience, and although we didn’t achieve the top spot, it remains memorable to me. My teammates and I gave our best effort, but we fell just short. However, the memories we created during this journey are what truly make it unforgettable.</p>
                    </div>
                </div>
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
