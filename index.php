<?php

require __DIR__ . '/header.php';

?>

<!-- insert hero image -->
<div class="hero">
    <img class="hero-text" src="images/hero-text.png" alt="Your local theater showcasing both new and classic films">
</div>

<section class="showingNow">
    <h2>NOW SHOWING <!-- insert camera icon --> </h2>
    <section class="nowShowingCarousel">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </section>
</section>
<section class="dealsSection">
    <article class="classicOfTheMonth">
        <h2>CLASSIC OF THE MONTH</h2>
        <div>
            <h3>TERMINATOR 2 - JUDGMENT DAY (1991)</h3>
            <!-- insert classic movie cover -->
        </div>
    </article>
    <article class="deals">
        <h2>DEALS OF THE WEEK</h2>
        <div>
            <div>
                <img src="images/octopus-glass 1.png">
            </div>
            <h3>DRINK SPECIAL</h3>
            <p>STAR JELLY SOUR - $10</p>
        </div>
        <div>
            <h3>FOOD SPECIAL</h3>
            <p>BOGO POPCORN - $5</p>
        </div>
    </article>
</section>

<section class="comingSoon">
    <h2>COMING SOON</h2>
    <section class="comingSoonCarousel">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </section>
</section>

<article class="signUp">
    <h3>SIGN UP FOR OUR NEWSLETTER</h3>
    <p>ENTER YOUR EMAIL HERE</p>
</article>

<?php
require __DIR__ . '/footer.php';
