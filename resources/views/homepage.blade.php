@extends('layout') 

@section('content')

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
    @endsection 