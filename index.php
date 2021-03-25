<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="src/stylenav.css">
    <link type="text/css" rel="stylesheet" href="src/styleAccueil.css">
    <title>Le petit Vintage</title>
</head>


<body>
  <section class="require">
    <?php require 'nav.php'?>
  </section>

<section>
    <div class="tramme"> <img id="trammeImg" src="src/background/tramme-redim.png" width="100%" height="100%"></div>
</section>

<section class="who">
    <div class="card-who">
        <div class="card-who-header">
            <h2>Qui sommes nous?</h2>
        </div>
        <div class="card-who-body">
            <p class="card-who-text">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor
                ncididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud xercitation
                ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in
                eprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur.</p>
            <button class="card-who-button" href="Qui-sommes-nous?.php">Lire la suite</button>
        </div>
    </div>
</section>

<section class="which">
    <div class="card-vintage">
        <div class="card-header">
            <h2>...une coupe vintage ?</h2>
        </div>
        <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor
                ncididunt ut labore</p>
        </div>
        <div class="vintage-choice">
            <article><img src="src/Coiffures/bonProfil.jpg" height="100%" width="100%"></article>
            <article><img src="src/Coiffures/myBad.jpg" height="100%" width="100%"></article>
            <article>Choice 3</article>
            <article><button class="card-button" href="hairstyles.php">voir la suite ></button></article>
        </div>
    </div>
</section>

<section class="which">
    <div class="card-classique">
        <div class="card-header">
            <h2>...une coupe classique ?</h2>
        </div>
        <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor
                ncididunt ut labore</p>
        </div>
        <div class="classique-choice">
            <article><img src="src/Coiffures/pink.jpg" height="100%" width="100%"></article>
            <article><img src="src/Coiffures/eiffel65.jpg" height="100%" width="100%"></article>
            <article class="color-choise">Choice 3</article>
            <article class="color-choise"><button class="card-button" href="hairstyles.php">voir la suite ></button></article>
        </div>
    </div>
</section>

</body>
<section class="which">
    <div class="card-rebel">
        <div class="card-header">
            <h2>...cheveux rebels ?</h2>
        </div>
        <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor
                ncididunt ut labore</p>
        </div>
        <div class="rebel-choice">
            <article><img src="src/Coiffures/curlyPeanut.jpg" height="100%" width="100%"></article>
            <article><img src="src/Coiffures/detresse.jpg" height="100%" width="100%"></article>
            <article>Choice 3</article>
            <article><button class="card-button" href="hairstyles.php">voir la suite ></button></article>
        </div>
    </div>
</section>
<script src="scriptnav.js">
<?php require 'footer.php'?>
</body>
</html>
