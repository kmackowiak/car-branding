<!doctype html>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Car-branding.pl</title>
    <meta name="description" content="xxx">
    <meta name="author" content="xx">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include("navbar.php"); ?>

<header class="intro">
    <h1 class="intro__title">Kompleksowa kreacja graficzna<br>i oklejanie samochodów</h1>
    <div class="intro__scroll">
        <div class="intro__scroll--mouse">
            <div class="intro__scroll--scroller"></div>
        </div>
    </div>
</header>

<main>
    <section class="container">
        <div class="title">
            <h3 class="title__first-line">Nieograniczone możliwości</h3>
            <h2 class="title__second-line">Ostatnie realizacje <span class="title--red">oklejeń</span></h2>
        </div>

        <div class="gallery-slider-mobile">
            <button class="gallery-slider-mobile__arrow" onclick="gallerySliderPrev()"><i class="fa fa-chevron-left"></i></button>

            <div class="card" style="display: block;">
                <img class="card__image" src="images/realizations/realization-01-01.png">
                <h4 class="card__title">Mini Cooper - Trigon1</h4>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna... </p>
                <a class="card__link" href="#">Zobacz realizacje<i class="fa fa-angle-double-right"></i>
                </a>
            </div>

            <div class="card" style="display: none;">
                <img class="card__image" src="images/realizations/realization-01-01.png">
                <h4 class="card__title">Mini Cooper - Trigon2</h4>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna... </p>
                <a class="card__link" href="#">Zobacz realizacje<i class="fa fa-angle-double-right"></i>
                </a>
            </div>

            <div class="card" style="display: none;">
                <img class="card__image" src="images/realizations/realization-01-01.png">
                <h4 class="card__title">Mini Cooper - Trigon3</h4>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna... </p>
                <a class="card__link" href="#">Zobacz realizacje<i class="fa fa-angle-double-right"></i>
                </a>
            </div>

            <button class="gallery-slider-mobile__arrow" onclick="gallerySliderNext()"><i class="fa fa-chevron-right"></i></button>
        </div>

        <div class="gallery-slider">
            <div class="card">
                <img class="card__image" src="images/realizations/realization-01-01.png">
                <h4 class="card__title">Mini Cooper - Trigon1</h4>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna... </p>
                <a class="card__link" href="#">Zobacz realizacje<i class="fa fa-angle-double-right"></i>
                </a>
            </div>

            <div class="card">
                <img class="card__image" src="images/realizations/realization-01-01.png">
                <h4 class="card__title">Mini Cooper - Trigon2</h4>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna... </p>
                <a class="card__link" href="#">Zobacz realizacje<i class="fa fa-angle-double-right"></i>
                </a>
            </div>

            <div class="card">
                <img class="card__image" src="images/realizations/realization-01-01.png">
                <h4 class="card__title">Mini Cooper - Trigon3</h4>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna... </p>
                <a class="card__link" href="#">Zobacz realizacje<i class="fa fa-angle-double-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="container container--feature container--black">
        <div class="title">
            <h3 class="title__first-line title__first-line--black-background">Pokaż się z lepszej strony</h3>
            <h2 class="title__second-line title__second-line--black-background">Poznaj nasze <span
                        class="title--red-black">atuty</span></h2>
        </div>
        <div class="features">
            <div class="feature">
                <i class="feature__icon fa fa-child"></i>
                <span class="feature__description feature__description--first-line">50+</span>
                <span class="feature__description feature__description--second-line">zadowolonych klientów</span>
            </div>

            <div class="feature">
                <i class="feature__icon fa fa-car"></i>
                <span class="feature__description feature__description--first-line">100+</span>
                <span class="feature__description feature__description--second-line">oklejonych samochodów</span>
            </div>

            <div class="feature">
                <i class="feature__icon fa fa-diamond"></i>
                <span class="feature__description feature__description--first-line">24</span>
                <span class="feature__description feature__description--second-line">miesiące gwarancji</span>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="title">
            <h3 class="title__first-line">Możesz nam zaufać</h3>
            <h2 class="title__second-line">Kilka słów <span class="title--red">o nas</span></h2>
        </div>
        <div class="about">
            <p class="about__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in olfirst-linetate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cfirst-lineidatat non proident, sunt in culpa
                qui officia eserunt mollit anim id est laborum
            </p>
            <figure class="about__figure">
                <img class="about__image" src="images/firma.png" alt="Budynek naszej firmy">
                <figcaption class="about__figcaption">Budynek naszej firmy - ul. Morszyńska 36, Poznań</figcaption>
            </figure>
        </div>
    </section>
</main>

<?php include("footer.php"); ?>

<script src="javascript/main.js"></script>

</body>
</html>