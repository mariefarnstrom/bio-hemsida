<?php

require __DIR__ . '/header.php';
require __DIR__ . '/variables.php';

?>

<!-- insert hero image -->
<div class="hero">
    <img class="hero-text" src="images/hero-text.png" alt="Your local theater showcasing both new and classic films">
</div>

<section class="film-carousel-container">
    <div class="carousel-title-container">
        <div class="title-container">
            <div class="title">NOW SHOWING</div>
        </div>
        <img class="camera-icon" src="images/icons/camera-icon.png" alt="outline of a film camera">

    </div>
    <div class="film-container">
        <div class="film-carousel">
            <div>
                <div class="teal-frame-movie">
                    <img class="teal-image-icon" src="images/movie-posters/Ash.jpg" alt="Ash poster">
                    <div class="hover-img" id="carousel">
                        <a href="movie-info.php"><button class="info-tix" id="teal">INFO & TICKETS</button></a>
                    </div>
                    <?= $tealFrame ?>

                </div>
                <h4>Ash</h4>
            </div>
            <div>
                <div class="pink-frame-movie">
                    <img class="pink-image-icon" src="images/movie-posters/mickey17.jpg" alt="Mickey 17 poster">
                    <div class="hover-img" id="carousel">
                        <a href="movie-info.php"><button class="info-tix" id="pink">INFO & TICKETS</button></a>
                    </div>
                    <?= $pinkFrame; ?>

                </div>
                <h4 class="pink-title">Mickey 17</h4>
            </div>
            <div>
                <div class="teal-frame-movie">
                    <img class="teal-image-icon" src="images/movie-posters/star-trek-section-31.jpg" alt="Star Trek: Section 31 poster">
                    <div class="hover-img" id="carousel">
                        <a href="movie-info.php"><button class="info-tix" id="teal">INFO & TICKETS</button></a>
                    </div>
                    <?= $tealFrame; ?>

                </div>
                <h4>Star trek: Section 31</h4>
            </div>
            <div>
                <div class="pink-frame-movie">
                    <img class="pink-image-icon" src="images/movie-posters/tron-ares.jpg" alt="Tron: Ares poster">
                    <div class="hover-img" id="carousel">
                        <a href="movie-info.php"><button class="info-tix" id="pink">INFO & TICKETS</button></a>
                    </div>
                    <?= $pinkFrame; ?>

                </div>
                <h4 class="pink-title">Tron: Ares</h4>
            </div>
            <div>
                <div class="teal-frame-movie">
                    <img class="teal-image-icon" src="images/movie-posters/predator-badlands.jpeg" alt="Predator: Badlands poster">
                    <div class="hover-img" id="carousel">
                        <a href="movie-info.php"><button class="info-tix" id="teal">INFO & TICKETS</button></a>
                    </div>
                    <?= $tealFrame; ?>

                </div>
                <h4>Predator: Badlands</h4>
            </div>
            <div>
                <div class="pink-frame-movie">
                    <img class="pink-image-icon" src="images/movie-posters/companion.jpg" alt="Companion poster">
                    <div class="hover-img" id="carousel">
                        <a href="movie-info.php"><button class="info-tix" id="pink">INFO & TICKETS</button></a>
                    </div>
                    <?= $pinkFrame; ?>

                </div>
                <h4 class="pink-title">Companion</h4>
            </div>
        </div>
    </div>
</section>
<section class="dealsSection">
    <article class="classicOfTheMonth">
        <h2 class="classicHeading">CLASSIC OF THE MONTH</h2>
        <div class="classicLink">
            <div class="classicSquare">
                <h3 class="classicTitle">TERMINATOR 2 - JUDGMENT DAY (1991)</h3>
                <div class="classicCoverFrame ">
                    <img class="classicCover" src="images/movie-posters/terminator2.jpg" alt="Classic movie cover">
                    <div class="hover-img">
                        <a href="movie-info.php"><button class="info-tix">INFO & TICKETS</button></a>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="deals">
        <h2 class="dealsHeading">DEALS OF THE WEEK</h2>
        <div class="drinkDealFrame">
            <div class="drinkImageFrame">
                <img class="drinkImage" src="images/octopus-glass 1.png">
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

<section class="film-carousel-container">
    <div class="carousel-title-container">
        <div class="title-container">
            <div class="title">COMING SOON</div>
        </div>

    </div>
    <div class="film-container">
        <div class="film-carousel">
            <div>
                <div class="teal-frame-movie">
                    <img class="teal-image-icon" src="images/movie-posters/avatar-fireandash.jpeg" alt="Avatar: Fire and Ash poster">
                    <div class="hover-img" id="carousel">
                        <a href="movie-info.php"><button class="info-tix" id="teal">INFO & TICKETS</button></a>
                    </div>
                    <?= $tealFrame ?>

                </div>
                <h4>Avatar: Fire and ash</h4>
            </div>
            <div>
                <div class="pink-frame-movie">
                    <img class="pink-image-icon" src="images/movie-posters/the-dog-stars.jpg" alt="The Dog Stars poster">
                    <div class="hover-img" id="carousel">
                        <a href="movie-info.php"><button class="info-tix" id="pink">INFO & TICKETS</button></a>
                    </div>
                    <?= $pinkFrame; ?>

                </div>
                <h4 class="pink-title">The dog stars</h4>
            </div>
            <div>
                <div class="teal-frame-movie">
                    <img class="teal-image-icon" src="images/movie-posters/project-hail-mary.jpg" alt="Project Hail Mary poster">
                    <div class="hover-img" id="carousel">
                        <a href="movie-info.php"><button class="info-tix" id="teal">INFO & TICKETS</button></a>
                    </div>
                    <?= $tealFrame; ?>

                </div>
                <h4>Project hail Mary</h4>
            </div>
            <div>
                <div class="pink-frame-movie">
                    <img class="pink-image-icon" src="images/movie-posters/dune-part-three.jpg" alt="Dune Part Three">
                    <div class="hover-img" id="carousel">
                        <a href="movie-info.php"><button class="info-tix" id="pink">INFO & TICKETS</button></a>
                    </div>
                    <?= $pinkFrame; ?>

                </div>
                <h4 class="pink-title">Dune: Part three</h4>
            </div>
            <div>
                <div class="teal-frame-movie">
                    <img class="teal-image-icon" src="images/movie-posters/the-mandalorian-and-grogu.jpg" alt="Star Wars: The Mandalorian and Grogu poster">
                    <div class="hover-img" id="carousel">
                        <a href="movie-info.php"><button class="info-tix" id="teal">INFO & TICKETS</button></a>
                    </div>
                    <?= $tealFrame; ?>

                </div>
                <h4>Star Wars: The Mandalorian and Grogu</h4>
            </div>
            <div>
                <div class="pink-frame-movie">
                    <img class="pink-image-icon" src="images/movie-posters/28yearslater.jpg" alt="28 Years Later poster">
                    <div class="hover-img" id="carousel">
                        <a href="movie-info.php"><button class="info-tix" id="pink">INFO & TICKETS</button></a>
                    </div>
                    <?= $pinkFrame; ?>

                </div>
                <h4 class="pink-title">28 years later</h4>
            </div>
        </div>
    </div>
</section>

<section class="newsletter-container">
    <?= $newsletterBox; ?>
    <div class="newsletter-form">
        <form action="/index.php" method="post" enctype="text/plain">
            <label for="email">SIGN UP FOR OUR NEWSLETTER</label>
            <input type="email" name="email" id="email" placeholder="ENTER YOUR EMAIL HERE">
            <button class="button" type="submit">SUBMIT</button>
        </form>
    </div>
</section>

<script>
    function toggleMenu() {
        const menu = document.querySelector('.mobile-menu');
        const hamburger = document.querySelector('.hamburger');
        const body = document.body;

        menu.classList.toggle('active');
        hamburger.classList.toggle('active');

        // Förhindra scrollning när menyn är öppen
        if (menu.classList.contains('active')) {
            body.style.overflow = 'hidden';
        } else {
            body.style.overflow = '';
        }
    }
</script>

<?php
require __DIR__ . '/footer.php';
