<!doctype html>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Realizacje | Car-branding.pl</title>
    <meta name="description" content="xxx">
    <meta name="author" content="xx">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include("navbar.php"); ?>

<main>
    <section class="container">

        <div class="title title__up">
            <h3 class="title__first-line">Sprawdź nas w działaniu</h3>
            <h2 class="title__second-line">Opis <span class="title--red">realizacji</span></h2>
        </div>

        <div class="name-bar">
            <img class="name-bar__logo" src="images/logos/mini.jpg" alt="">
            <div class="name-bar__title">Mini Cooper - Trigon</div>
        </div>

        <div class="realization">
            <div class="gallery">
                <img class="gallery__active-image" src="images/realizations/realization-01-01.png" alt="">
                <div class="gallery__thumbnails">
                    <img class="gallery__thumbnail" src="images/realizations/realization-01-01.png" alt="">
                    <img class="gallery__thumbnail" src="images/realizations/realization-01-02.png" alt="">
                    <img class="gallery__thumbnail" src="images/realizations/realization-01-03.png" alt="">
                    <img class="gallery__thumbnail" src="images/realizations/realization-01-04.png" alt="">
                    <img class="gallery__thumbnail" src="images/realizations/realization-01-05.png" alt="">
                </div>
            </div>

            <div>
                <div class="title title__desc">
                    <h3 class="title__first-line">Sprawdź nas w działaniu</h3>
                    <h2 class="title__second-line">Opis <span class="title--red">realizacji</span></h2>
                </div>
                <ul class="description">
                    <li>
                        <i class="fa fa-cube"></i>
                        <span class="description__text">Użyty materiał:
                        <span class="description__text--desc">Lorem ipsum</span>
                    </span>
                    </li>
                    <li>
                        <i class="fa fa-clock-o"></i>
                        <span class="description__text">  Czas realizacji:
                        <span class="description__text--desc">4 dni</span>
                    </span>
                    </li>
                    <li>
                        <i class="fa fa-photo"></i>
                        <span class="description__text">Projekt graficzny:
                        <span class="description__text--desc">Reakcja Studio</span>
                    </span>
                    </li>
                    <li>
                        <i class="fa fa-gears"></i>
                        <span class="description__text">Przebieg projektowy:
                        <p class="description__text--para">
                            Lorem ipsum dolor sit amet, consectetur adipiscing lit, sed do eiusmo tempor ncididunt ut
                            labore et dolore magna aliqua. Ut enim ad minmveniam, quis nostrud.
                        </p>
                    </span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="switch-realization">
            <a class="switch-realization__link" href="#">
                <i class="switch-realization__arrow fa fa-chevron-left"></i> poprzednia realizacja
            </a>
            <a class="switch-realization__link" href="#">
                następna realizacja <i class="switch-realization__arrow fa fa-chevron-right"></i>
            </a>
        </div>
    </section>

</main>

<?php include("footer.php"); ?>

<script src="javascript/main.js"></script>

</body>
</html>