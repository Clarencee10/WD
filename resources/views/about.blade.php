@extends('layout') 

@section('content')

<section id="content" class="content__section">
    <div class="content__container">
        <h2 class="section__title">Get to Know Us </h2>

        <div class="card">
            <div class="card__image">
                <img src="{{ asset('images/profile3.jpg') }}" alt="profile">
            </div>
            <div class="card__description">
                <h3>About Me</h3>
                <p>In my free time, I enjoy playing online games, engaging in exciting volleyball matches, and
                    watching captivating movies.
                    These activities not only help me unwind but also keep me connected with my interests and
                    passions.
                </p>
                <br>

                <h3>Other Skills</h3>
                <p>Developed excellent customer service and sales skills while working at my aunt’s silver jewelry
                    store.
                    This experience honed my ability to understand customer needs, provide personalized service, and
                    manage sales effectively.
                </p>
                <br>

                <h3>Education</h3>
                <p>
                    <strong>Puro Elementary School</strong> (2009 - 2015)<br>
                    <strong>Daraga National High School</strong> (2015 - 2022)<br>
                    <strong>Bicol University</strong> (2022 - Present)
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card__image">
                <img src="{{ asset('images/grad.jpg') }}" alt="profile">
            </div>
            <div class="card__description">
                <h3>About Me</h3>
                <p>I’m Janine Ishe Matamorosa, and I have a passion for baking, especially cookies, banana bread,
                    and cupcakes. I love spending my free time watching movies and exploring new genres. When I’m
                    not in the kitchen or at the movies, I’m enjoying the company of my nine beloved cats and dogs,
                    always ready for an adventure and eager to explore new experiences.
                </p>
                <br>

                <h3>Other Skills</h3>
                <p>I’m dedicated to continuous learning and always eager to expand my knowledge in both web
                    development and other areas of interest.
                </p>
                <br>

                <h3>Education</h3>
                <p>
                    <strong>Camalig South Central</strong> (2009 - 2015)<br>
                    <strong>Marcial O. Ranola Memorial School</strong> (2015 - 2022)<br>
                    <strong>Bicol University</strong> (2022 - Present)
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card__image">
                <img src="{{ asset('images/jet.jpg') }}" alt="profile">
            </div>
            <div class="card__description">
                <h3>About Me</h3>
                <p>My nickname is Jeth. My hobbies are drawing digital arts, playing online games such as Genshin
                    and Wuthering Waves.
                </p>
                <br>

                <h3>Other Skills</h3>
                <p>UI designing. I would love to work as a Front End Developer. I am also a freelance illustrator by
                    doing commissions by drawing.
                </p>
                <br>

                <h3>Education</h3>
                <p>
                    <strong>Don Jose Pavia Central School</strong> (2009 - 2015)<br>
                    <strong>Pioduran National High School</strong> (2015 - 2022)<br>
                    <strong>Bicol University</strong> (2022 - Present)
                </p>
            </div>
        </div>
    </div>
    @endsection