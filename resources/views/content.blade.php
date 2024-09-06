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
                <a href="#https://www.facebook.com/john.maneja.3154?mibextid=LQQJ4d"><i class="fab fa-facebook"></i></a>
                <a href="#https://www.instagram.com/cla_rencee10/"><i class="fab fa-instagram"></i></a>
                <a href="#https://x.com/Cla_rencee10"><i class="fab fa-twitter"></i></a>
            </div>
    </nav>

    <!-- content Section -->
    <section id="about" class="about__section">
        <div class="about__container">
            <h2 class="section__title">Content</h2>
            <p>Our Projects</p>
        </div>
    </section>

    <!-- our Projects Section -->
    <section id="experiences" class="experiences__section">
        <div class="experiences__container">

            <div class="experiences__items">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('images/SolarX.png') }}" alt="Solar System">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="flip-card-title">Solar X</h3>
                            <h4>FrontEnd Developer
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>PHP</li>
                                <li>JS</li>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('images/PreggyHealth.png') }}" alt="Preggy Health Website">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="flip-card-title">Preggy Health</h3>
                            <h4>Lead Developer
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>SQL</li>
                                <li>JS</li>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('images/Viaje.png') }}" alt="Viaje Dental Clinic">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="flip-card-title">Viaje - Dental Appointment System (Web Sys) </h3>
                            <h4> Backend Developer
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>PHP</li>
                                <li>JS</li>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('images/javainventory.png') }}" alt="Java Bean Cafe (OOP)">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="flip-card-title">Java Bean Cafe (OOP)</h3>
                            <h4>Lead Developer
                                <li>Java</li>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('images/librarymanagementsystem.png') }}"
                                alt="Library Management System">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="flip-card-title">Library Management System - Book Shelf</h3>
                            <h4> Developer
                                <li>Java</li>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('images/loginui.png') }}" alt="Aboutme">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="flip-card-title">Portfolio</h3>
                            <h4>Developer
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JS</li>
                            </h4>
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
                    <li><a href="{{ route('home') }}" class="footer__link">User</a></li>
                    <li><a href="{{ route('homepage') }}" class="footer__link">Home</a></li>
                    <li><a href="{{ route('content') }}" class="footer__link">Content</a></li>
                    <li><a href="{{ route('about') }}" class="footer__link">About</a></li>
                </ul>
            </div>
            <div class="footer__column">
                <h4 class="footer__title">Contact</h4>
                <p class="footer__contact-info">
                    <span><a href="mailto:itwebdev10@gmail.com" class="footer__link"><i
                                class="fas fa-envelope"></i></a></span>
                    <span>itwebdev10@gmail.com</span><br>
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
