<?php

require __DIR__ . '/header.php';
require __DIR__ . '/variables.php';

?>

<!-- insert hero image -->
<div class="hero">
    <img class="hero-text" src="images/hero-text.png" alt="Your local theater showcasing both new and classic films">
</div>

<section class="showingNow">
    <h2>NOW SHOWING <!-- insert camera icon --> </h2>
    <a href="movie-info.php">
        <section class="nowShowingCarousel">
            <div>
                <img src="/images/movie-posters/Ash.jpg" alt="Ash">
                <p>Ash</p>
            </div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </section>
    </a>
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
