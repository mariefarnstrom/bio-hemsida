<?php
require __DIR__ . '/header.php';
require __DIR__ . '/variables.php';

$newsletterCont = '<svg class="newsletterCont" xmlns="http://www.w3.org/2000/svg" width="405" height="285" viewBox="0 0 405 285" fill="none">
  <g filter="url(#filter0_d_2248_352)">
    <path d="M376.168 274.07H13.6667C11.6804 274.07 10.0702 272.46 10.0702 270.474V13.6666C10.0702 11.6803 11.6804 10.0701 13.6667 10.0701H390.474C392.46 10.0701 394.07 11.6803 394.07 13.6666V265.422" stroke="var(--yellow)" stroke-opacity="0.89" stroke-width="1.4386" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"/>
  </g>
  <defs>
    <filter id="filter0_d_2248_352" x="1.43051e-05" y="-4.673e-05" width="404.14" height="284.14" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset/>
      <feGaussianBlur stdDeviation="4.67544"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.867014 0 0 0 0 0.386218 0 0 0 0.89 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2248_352"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2248_352" result="shape"/>
    </filter>
  </defs>
</svg>';
?>

<div class="movie">
    <div class="cam-titel">
        <img src="images/icons/camera-icon.png" alt="camera-icon">
        <h1 class="movieName">
            Project Hail Mary
        </h1>
    </div>
    <section class="movieInfo">
        <div class="coverHolder">
            <img src="images/movie1.png" alt="'Project Hail Mary' movie cover">
        </div>
        <div class="description">
            <p>Science teacher Ryland Grace (Ryan Gosling) wakes up on a spaceship light years from home with no recollection of who he is or how he got there. As his memory returns, he begins to uncover his mission: solve the riddle of the mysterious substance causing the sun to die out. He must call on his scientific knowledge and unorthodox ideas to save everything on Earth from extinction... but an unexpected friendship means he may not have to do it alone.</p>
            <p>RELEASE DATE: March 20, 2026<br>
                GENRE: Dystopian Sci-Fi<br>
                LANGUAGE: English<br>
                DIRECTORS: Phil Lord, Christopher Miller<br>
                CAST: Ryan Gosling, Milana Vayntrub, Sandra Hüller</p>
            <div class="buy-button-cont">
                <button class="buy-button">Buy ticket</button>
            </div>
        </div>
    </section>

    <section class="movie-images">
        <?php $total = 4; ?>

        <div class="image-wrapper">
            <img src="images/movie-images/phm1.jpg" alt="Project Hail Mary picture 1" />
            <div class="page-number">1/<?= $total ?></div>
        </div>

        <div class="image-wrapper">
            <img src="images/movie-images/phm2.jpg" alt="Project Hail Mary picture 2" />
            <div class="page-number">2/<?= $total ?></div>
        </div>

        <div class="image-wrapper">
            <img src="images/movie-images/phm3.jpg" alt="Project Hail Mary picture 3" />
            <div class="page-number">3/<?= $total ?></div>
        </div>

        <div class="image-wrapper">
            <img src="images/movie-images/phm4.jpg" alt="Project Hail Mary picture 4" />
            <div class="page-number">4/<?= $total ?></div>
        </div>
    </section>

    <div class="trailer-container">
        <iframe
            src="https://www.youtube.com/embed/m08TxIsFTRI"
            title="Project Hail Mary - Official Trailer"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen>
        </iframe>"
    </div>
</div>

<section class="calendar-container">
    <div class="calendar-day">
        <div class="date">
            <p>3 dec</p>
        </div>
        <div class="time">
            <p class="early">19:20</p>
            <p class="late">21:30</p>
        </div>
        <img src="images/icons/Union.svg">
    </div>
    <div class="calendar-day">
        <div class="date">
            <p>4 dec</p>
        </div>
        <div class="time">
            <p class="early">18:00</p>
            <p class="late">20:30</p>
        </div>
        <img src="images/icons/Union.svg">
    </div>
    <div class="calendar-day">
        <div class="date">
            <p>5 dec</p>
        </div>
        <div class="time">
            <p class="early">19:35</p>
            <p class="late">21:40</p>
        </div>
        <img src="images/icons/Union.svg">
    </div>
    <div class="calendar-day">
        <div class="date">
            <p>6 dec</p>
        </div>
        <div class="time">
            <p class="early">17:50</p>
            <p class="late">19:40</p>
        </div>
        <img src="images/icons/Union.svg">
    </div>
    <div class="calendar-day">
        <div class="date">
            <p>7 dec</p>
        </div>
        <div class="time">
            <p class="early">18:00</p>
            <p class="late">20:30</p>
        </div>
        <img src="images/icons/Union.svg">
    </div>
    <div class="calendar-day">
        <div class="date">
            <p>8 dec</p>
        </div>
        <div class="time">
            <p class="early">19:20</p>
            <p class="late">21:30</p>
        </div>
        <img src="images/icons/Union.svg">
    </div>
    <div class="calendar-day">
        <div class="date">
            <p>9 dec</p>
        </div>
        <div class="time">
            <p class="early">20:00</p>
            <p class="late">21:45</p>
        </div>
        <img src="images/icons/Union.svg">
    </div>
</section>

<section class="dealsSection">
    <article class="deals">
        <h2 class="dealsHead">Deals of the week</h2>
        <div class="drinksDealFrame">
            <div class="drinksImageFrame">
                <img class="drinksImage" src="images/octopus-glass 1.png">
            </div>
            <div class="drinksTextFrame">
                <h3 class="drinks-special">Drink special</h3>
                <p class="drinksDeal">Star jelly sour - $10</p>
            </div>
        </div>
        <div class="foodsFrame">
            <h3 class="foods-special">food special</h3>
            <p class="foodsDeal">bogo popcorn - $5</p>
        </div>
    </article>
</section>
<section class="newsletter-cont">
    <?= $newsletterCont; ?>
    <div class="newsletter-form-movie">
        <form action="/index.php" method="post" enctype="text/plain">
            <label for="email">sign up for our newsletter</label>
            <input type="email" name="email" id="email" placeholder="ENTER YOUR EMAIL HERE">
            <button class="button" type="submit">submit</button>
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
