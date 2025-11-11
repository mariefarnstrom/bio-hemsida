<?php
require __DIR__ . '/header.php';
?>

<!-- insert camera icon -->
<div class="movie">
    <h1 class="movieName">
        Project Hail Mary
    </h1>
    <section class="movieInfo">
        <div class="coverHolder">
            <img src="images/movie1.png" alt="'Project Hail Mary' movie cover">
        </div>
        <div class="description">
            <p>Science teacher Ryland Grace (Ryan Gosling) wakes up on a spaceship light years from home with no recollection of who he is or how he got there. As his memory returns, he begins to uncover his mission: solve the riddle of the mysterious substance causing the sun to die out. He must call on his scientific knowledge and unorthodox ideas to save everything on Earth from extinction... but an unexpected friendship means he may not have to do it alone.</p>
            <p>RELEASE DATE: March 20, 2026
                GENRE: Dystopian Sci-Fi<br>
                LANGUAGE: English<br>
                DIRECTORS: Phil Lord, Christopher Miller<br>
                CAST: Ryan Gosling, Milana Vayntrub, Sandra Hüller</p>
        </div>
    </section>
    <div class="carousel">
        <button class="carousel-btn prev" onclick="changeSlide(-1)">&#10094;</button>

        <div class="carousel-images">
            <img src="/images/movie-images/phm1.jpg" alt="Bild 1" class="carousel-slide active">
            <img src="/images/movie-images/phm2.jpg" alt="Bild 2" class="carousel-slide">
            <img src="/images/movie-images/phm3.jpg" alt="Bild 3" class="carousel-slide">
            <img src="/images/movie-images/phm4.jpg" alt="Bild 4" class="carousel-slide">
        </div>

        <button class="carousel-btn next" onclick="changeSlide(1)">&#10095;</button>

        <!-- Prickar för att visa vilken bild (valfritt) -->
        <div class="carousel-dots">
            <span class="dot active" onclick="goToSlide(0)"></span>
            <span class="dot" onclick="goToSlide(1)"></span>
            <span class="dot" onclick="goToSlide(2)"></span>
            <span class="dot" onclick="goToSlide(3)"></span>
        </div>
    </div>
</div>
<section class="dealsOfTheWeek">
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
</section>
<article class="signUp">
    <h3>SIGN UP FOR OUR NEWSLETTER</h3>
    <p>ENTER YOUR EMAIL HERE</p>
</article>

<?php
require __DIR__ . '/footer.php';
