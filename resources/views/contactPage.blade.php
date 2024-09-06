<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    
    <!-- Link to CSS stylesheets -->
    <link rel="stylesheet" href="{{ asset('contact.css') }}"> 
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
                <li><a href="{{ route('home') }}">User</a></li>
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><a href="{{ route('content') }}">About</a></li>
                <li><a href="{{ route('about') }}">Content</a></li>
                <li><a href="{{ route('contactPage') }}">Contact</a></li>
            </ul>
            <div class="links">
                <a href="https://www.facebook.com/john.maneja.3154?mibextid=LQQJ4d"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/cla_rencee10/"><i class="fab fa-instagram"></i></a>
                <a href="https://x.com/Cla_rencee10"><i class="fab fa-twitter"></i></a>
            </div> 
        </div>
    </nav>

    @if(session('flash'))
        <p style="color: lawngreen" >{{ session('flash ') }}</p>
    @endif

    <h1>WebDev Contact Form</h1>
<form class="cf" action="/contact" method="post">
  @csrf
  <div class="half left cf">
    <input type="text" id="input-name" placeholder="Name" name="name">
    <input type="email" id="input-email" placeholder="Email address" name="email">
    <input type="text" id="input-subject" placeholder="Subject" name="subject">
  </div>
  <div class="half right cf">
        <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
  </div>  
        <input type="submit" value="Submit" id="input-submit">
</form>

<section class="footer">
  <div class="footer__container">
    <div class="footer__column">
      <h3 class="footer__logo">WebDev</h3>
    </div>
    <div class="footer__column">
      <h4 class="footer__title">Resources</h4>
      <ul class="footer__list">
        <li><a href="{{ route('home') }}" class="footer__link">Home</a></li>
        <li><a href="{{ route('homepage') }}" class="footer__link">Home</a></li>
        <li><a href="{{ route('content') }}" class="footer__link">Content</a></li>
        <li><a href="{{ route('about') }}" class="footer__link">About</a></li>
      </ul>
    </div>
    <div class="footer__column">
      <h4 class="footer__title">Contact</h4>
      <p class="footer__contact-info">
        <span><a href="mailto:itwebdev10@gmail.com" class="footer__link"><i class="fas fa-envelope"></i></a></span>
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