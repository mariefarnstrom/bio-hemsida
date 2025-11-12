<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futurity</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Text+Me+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="test-style-elsa.css">
    <link rel="stylesheet" href="movie-info.css">
</head>

<body>
    <header>
        <img class="futurity-logo" src="images/futurity-logo.png" alt="futurity">
        <div class="header-links">
            <a class="home">HOME</a>
            <a class="theaters">THEATERS</a>
            <a class="showtimes">SHOWTIMES</a>
            <img class="search-icon" src="images/icons/search.png" alt="magnifying glass">
            <img class="alien-icon" src="images/icons/alien-icon.png" alt="outline of an alien">
        </div>
    </header>

    <!-- insert hero image -->
    <div class="hero">
        <img class="hero-text" src="images/hero-text.png" alt="Your local theater showcasing both new and classic films">
    </div>

    <!-- <section class="showingNow">
    <h2>NOW SHOWING</h2>
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
</section> -->
    <div class="now-showing">
        <div class="now-showing-title-container">
            <div class="title-container">
                <div class="title">NOW SHOWING</div>
            </div>
            <img class="camera-icon" src="/images/icons/camera-icon.png" alt="outline of a film camera">

        </div>
        <div class="film-container">
            <div class="film-carousel">
                <div class="teal-frame-movie">
                    <img class="teal-image-icon" src="images/movie-posters/Ash.jpg" alt="movie poster for Ash">

                    <svg class="teal-frame" xmlns="http://www.w3.org/2000/svg" width="284" height="399" viewBox="0 0 284 399" fill="none">
                        <g filter="url(#filter0_d_2192_6)">
                            <path d="M258.471 385.137H18.1578C15.5188 385.137 13.3795 382.998 13.3795 380.359V18.1578C13.3795 15.5188 15.5188 13.3794 18.1578 13.3794H265.678C268.317 13.3794 270.456 15.5188 270.456 18.1578V372.959" stroke="#62FAFF" stroke-opacity="0.89" stroke-width="1.91135" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges" />
                        </g>
                        <defs>
                            <filter id="filter0_d_2192_6" x="0" y="-7.62939e-06" width="283.835" height="398.516" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="6.21189" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.386218 0 0 0 0 0.979541 0 0 0 0 1 0 0 0 0.89 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2192_6" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2192_6" result="shape" />
                            </filter>
                        </defs>
                    </svg>

                </div>
                <div class="pink-frame-movie">
                    <img class="pink-image-icon" alt="">

                    <img class="pink-frame" alt="">

                </div>
                <div class="teal-frame-movie">
                    <img class="image-icon" alt="">

                    <img class="teal-frame-movie-child" alt="">

                </div>
                <div class="pink-frame-movie">
                    <img class="now-showing-image-icon" alt="">

                    <img class="teal-frame-movie-child" alt="">

                </div>
                <div class="teal-frame-movie">
                    <img class="image-icon" alt="">

                    <img class="teal-frame-movie-child" alt="">

                </div>
                <div class="pink-frame-movie">
                    <img class="now-showing-image-icon" alt="">

                    <img class="teal-frame-movie-child" alt="">

                </div>
            </div>
        </div>
    </div>
    <section class="dealsSection">
        <article class="classicOfTheMonth">
            <h2>CLASSIC OF THE MONTH</h2>
            <a href="movie-info.php">
                <div>
                    <h3>TERMINATOR 2 - JUDGMENT DAY (1991)</h3>
                    <!-- insert classic movie cover -->
                </div>
            </a>
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
