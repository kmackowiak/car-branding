<!doctype html>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Car-branding.pl</title>
    <meta name="description" content="Zapewniamy całościowe relizacje oklejeń samochodów - od kreacji
                graficznej począwszy, poprzez wydruk materiałów, a skończywszy na nałożeniu folii.">
    <meta name="author" content="Car-branding.pl">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">


    <!-- __________ Favicon Start __________ -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- __________ Favicon End __________ -->
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
                <img class="card__image" src="images/realizations/bmw-e46_struensee_01.jpg">
                <h4 class="card__title">BMW E46 - Struensee</h4>
                <p class="card__description">Pełen projekt i oklejenie samochodu wyścigowego BMW E46 dla teamu
                    Struensee </p>
                <a class="card__link" href="bmw-e46-struensee.php">Zobacz realizacje<i class="fa fa-angle-double-right"></i>
                </a>
            </div>
            
            <div class="card" style="display: none;">
                <img class="card__image" src="images/realizations/mercedes-arocs_pawlica_01.jpg">
                <h4 class="card__title">Mercedes Arocs - Pawlica</h4>
                <p class="card__description">Kreacja graficzna i oklejenie serii ciężarówek marki
                    Mercedes dla firmy budowlanej </p>
                <a class="card__link" href="mercedes-arocs-pawlica.php">Zobacz realizacje<i class="fa fa-angle-double-right"></i>
                </a>
            </div>
            
            <div class="card" style="display: none;">
                <img class="card__image" src="images/realizations/bmw-e93_01.jpg">
                <h4 class="card__title">BMW E93</h4>
                <p class="card__description">Projekt i częsciowe oklejenie samochodu BMW E93 przy zachowaniu
                    oryginalnego koloru karoserii</p>
                <a class="card__link" href="bmw-e93.php">Zobacz realizacje<i class="fa fa-angle-double-right"></i>
                </a>
            </div>

            <button class="gallery-slider-mobile__arrow" onclick="gallerySliderNext()"><i class="fa fa-chevron-right"></i></button>
        </div>

        <div class="gallery-slider">
            <div class="card">
                <img class="card__image" src="images/realizations/bmw-e46_struensee_01.jpg">
                <h4 class="card__title">BMW E46 - Struensee</h4>
                <p class="card__description">Pełen projekt i oklejenie samochodu wyścigowego BMW E46 dla teamu
                    Struensee</p>
                <a class="card__link" href="bmw-e46-struensee.php">Zobacz realizacje<i class="fa fa-angle-double-right"></i>
                </a>
            </div>
            
            <div class="card">
                <img class="card__image" src="images/realizations/mercedes-arocs_pawlica_01.jpg">
                <h4 class="card__title">Mercedes Arocs - Pawlica</h4>
                <p class="card__description">Kreacja graficzna i oklejenie serii ciężarówek marki
                    Mercedes dla firmy budowlanej</p>
                <a class="card__link" href="mercedes-arocs-pawlica.php">Zobacz realizacje<i class="fa fa-angle-double-right"></i>
                </a>
            </div>
            
            <div class="card">
                <img class="card__image" src="images/realizations/bmw-e93_01.jpg">
                <h4 class="card__title">BMW E93</h4>
                <p class="card__description">Projekt i częsciowe oklejenie samochodu BMW E93 przy zachowaniu
                    oryginalnego koloru karoserii</p>
                <a class="card__link" href="bmw-e93.php">Zobacz realizacje<i class="fa fa-angle-double-right"></i>
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
                <span class="feature__description feature__description--first-line">500 m<sup>2</sup></span>
                <span class="feature__description feature__description--second-line">nałożonej folii</span>
            </div>

            <div class="feature">
                <i class="feature__icon fa fa-car"></i>
                <span class="feature__description feature__description--first-line">25+</span>
                <span class="feature__description feature__description--second-line">wykonanych projektów</span>
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
                Od 2009 r. działamy na rynku reklamowym. Rok temu uruchomilismy nowy dział związany z kompleksowym
                brandingiem pojazdów. <br>
                Zapewniamy całościowe relizacje oklejeń samochodów - od kreacji
                graficznej począwszy, poprzez wydruk materiałów, a skończywszy na nałożeniu folii.<br>
                Nasz zespół składa się z: wykwalifikowanych i kreatywnych grafików, drukarzy i naklejaczy
                posiadających niezwykle trudny do uzyskania certyfikat Avery Dennison potwierdzający ich umiejętności.
            </ul>
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