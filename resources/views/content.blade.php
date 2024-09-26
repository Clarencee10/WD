@extends('layout') 

@section('content')

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
                        <img src="{{ asset('images/librarymanagementsystem.png') }}" alt="Library Management System">
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
@endsection