<!doctype html>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Informacje | Car-branding.pl</title>
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

        <div class="title">
            <h3 class="title__first-line">Odmień swój pojazd</h3>
            <h2 class="title__second-line">Przydatne <span class="title--red">informacje</span></h2>
        </div>

        <div class="articles">

            <?php include("articles-select.php"); ?>

            <div class="article">
                <h1 class="article__title">Zasady korzystania oraz polityka prywatności</h1>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.
                </p>
                <figure class="article__figure">
                    <img class="article__image" src="images/place-holder.jpg" alt="placeholder">
                    <figcaption class="article__figcaption">Lorem ipsum dolor sit amet</figcaption>
                </figure>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                </p>
                <figure class="article__figure">
                    <img class="article__image" src="images/place-holder.jpg" alt="placeholder">
                    <figcaption class="article__figcaption">Lorem ipsum dolor sit amet</figcaption>
                </figure>
                <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                    quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
            </div>

            <?php include("sidebar.php"); ?>

        </div>
    </section>
</main>

<?php include("footer.php"); ?>

<script src="javascript/main.js"></script>

</body>
</html>