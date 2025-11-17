<?php

require __DIR__ . '/header.php';
require __DIR__ . '/variables.php';

?>

<!-- insert hero image -->
<div class="hero">
    <img class="hero-text" src="images/hero-text.png" alt="Your local theater showcasing both new and classic films">
</div>

<section class="now-showing">
    <div class="now-showing-title-container">
        <div class="title-container">
            <div class="title">NOW SHOWING</div>
        </div>
        <img class="camera-icon" src="/images/icons/camera-icon.png" alt="outline of a film camera">

    </div>
    <div class="film-container">
        <div class="film-carousel">
            <div class="teal-frame-movie">
                <img class="teal-image-icon" src="images/movie-posters/Ash.jpg" alt="Ash poster">

                <?= $tealFrame ?>

            </div>
            <div class="pink-frame-movie">
                <img class="pink-image-icon" src="/images/movie-posters/mickey17.jpg" alt="Mickey 17 poster">

                <?= $pinkFrame; ?>

            </div>
            <div class="teal-frame-movie">
                <img class="teal-image-icon" src="/images/movie-posters/star-trek-section-31.jpg" alt="Star Trek: Section 31 poster">

                <?= $tealFrame; ?>

            </div>
            <div class="pink-frame-movie">
                <img class="pink-image-icon" src="/images/movie-posters/tron-ares.jpg" alt="Tron: Ares">

                <?= $pinkFrame; ?>

            </div>
            <div class="teal-frame-movie">
                <img class="teal-image-icon" src="/images/movie-posters/predator-badlands.jpeg" alt="Predator: Badlands poster">

                <?= $tealFrame; ?>

            </div>
            <div class="pink-frame-movie">
                <img class="pink-image-icon" src="/images/movie-posters/companion.jpg" alt="Companion poster">

                <?= $pinkFrame; ?>

            </div>
        </div>
    </div>
</section>
<section class="dealsSection">
    <article class="classicOfTheMonth">
        <h2 class="classicHeading">CLASSIC OF THE MONTH</h2>
        <a class="classicLink" href="movie-info.php">
            <div class="classicSquare">

                <h3 class="classicTitle">TERMINATOR 2 - JUDGMENT DAY (1991)</h3>
                <div class="classicCoverFrame">
                    <img class="classicCover" src="/images/movie-posters/terminator2.jpg" alt="Classic movie cover">
                </div>
            </div>
        </a>
    </article>
    <article class="deals">
        <h2 class="dealsHeading">DEALS OF THE WEEK</h2>
        <div class="drinkDealFrame">
            <div>
                <img src="images/octopus-glass 1.png">
            </div>
            <div class="drinkTextFrame">
                <h3 class="drinkHeading">DRINK SPECIAL</h3>
                <p class="drinkDeal">STAR JELLY SOUR - $10</p>
            </div>
        </div>
        <div class="foodFrame">
            <h3 class="foodHeading">FOOD SPECIAL</h3>
            <p class="foodDeal">BOGO POPCORN - $5</p>
        </div>
    </article>
</section>

<section class="comingSoon">
    <h2>COMING SOON</h2>
    <a href="movie-info.php">
        <section class="comingSoonCarousel">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </section>
    </a>
</section>

<article class="signUp">
    <h3>SIGN UP FOR OUR NEWSLETTER</h3>
    <p>ENTER YOUR EMAIL HERE</p>
</article>

<?php
require __DIR__ . '/footer.php';
