<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futurity</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Text+Me+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="movie-info.css">
    <link rel="stylesheet" href="media-queries.css">
</head>

<body>
    <header>
        <img class="futurity-logo" src="images/futurity-logo.png" alt="futurity">

        <!-- Hamburger-knapp (mobil) -->
        <button class="hamburger" onclick="toggleMenu()" aria-label="Toggle menu">
            <img src="images/icons/menu.svg" alt="" class="hamburger-icon">
            <img src="images/icons/cancel.svg" alt="" class="close-icon">
        </button>

        <!-- Desktop meny -->
        <div class="header-links">
            <a href="/index.php" class="home">HOME</a>
            <a href="#theaters" class="theaters">THEATERS</a>
            <a href="#showtimes" class="showtimes">SHOWTIMES</a>
            <img class="search-icon" src="images/icons/search.png" alt="Search">
            <img class="alien-icon" src="images/icons/alien-icon.png" alt="Profile">
        </div>
    </header>

    <!-- Mobil meny (overlay) -->
    <div class="mobile-menu">
        <div class="mobile-menu-content">
            <img class="alien-icon-large" src="images/icons/alien-icon.png" alt="Profile">

            <a href="/index.php">HOME</a>
            <a href="#theaters">THEATERS</a>
            <a href="#showtimes">SHOWTIMES</a>

            <div class="search-box">
                <img src="images/icons/search.png" alt="">
                <input type="text" placeholder="Search">
            </div>
        </div>
    </div>