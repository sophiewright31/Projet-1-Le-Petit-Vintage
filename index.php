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
      <div class="trame"> <img id="trammeImg" src="src/background/tramme-redim.png" width="100%" height="100%"></div>
      <div class="tramepc"> <img id="trammeImg" src="src/background/BG_Tramme_PC.png" width="100%" height="100%"></div>
  </section>

<section>

</section>

<section class="who">
    <div class="staff-container" ><img id="staff" src="src/Coiffeuses/equipe_le_petit_vintage.png" alt="photo de l'équipe"></div>
    <div class="card-who">
        <div class="card-who-header">
            <h2>Qui sommes nous?</h2>
        </div>
        <div class="card-who-body">
            <p class="card-who-text">Dévouée à son métier, Frédérique a su s’imposer dans ce milieu grâce à un talent incomparable et à des idées toujours nouvelles et modernes.
            Spécialiste du chignon, Frédérique maîtrise à la perfection l’art de la couleur, ce qui lui permet d’être la créatrice de nouvelles lignes de coiffure et de rejoindre en tant que formatrice l’équipe Davines.
            Aussi à l’aise avec les coupes féminines que masculines, Frédérique Lacroux propose des conseils personnalisés destinés à révéler votre beauté.</p>
            <button class="card-who-button"><a href="whoRwe.php">Lire la suite</a></button>
        </div>
    </div>
</section>

<section class="which">
    <div class="card-vintage">
        <div class="card-header">
            <h2>...une coupe vintage ?</h2>
        </div>
        <div class="card-body">
            <p class="card-text">Se dit d'un vêtement, d'un accessoire, etc.,
                                 des décennies précédentes, remis au goût du jour.</p>
        </div>
        <div class="vintage-choice">
            <article><img src="src/Coiffures/bonProfil.jpg" height="100%" ></article>
            <article><img src="src/Coiffures/myBad.jpg" height="100%"></article>
            <article class="color-button"><button class="card-button"><a href="hairstyles.php">voir la suite </a></button></article>
        </div>
    </div>
</section>

<section class="which">
    <div class="card-classique">
        <div class="card-header">
            <h2>...une coupe classique ?</h2>
        </div>
        <div class="card-body">
            <p class="card-text">Se dit, d'une chose qui mérite d'appartenir à la culture générale et est enseigné dans des classes</p>
        </div>
        <div class="classique-choice">
            <article><img src="src/Coiffures/pink.jpg" height="100%" ></article>
            <article><img src="src/Coiffures/eiffel65.jpg" height="100%" ></article>
            <article class="color-choise"><button class="card-button"><a href="hairstyles.php">voir la suite </a></button></article>
        </div>
    </div>
</section>


<section class="which">
    <div class="card-rebel">
        <div class="card-header">
            <h2>...cheveux rebels ?</h2>
        </div>
        <div class="card-body">
            <p class="card-text">Se dit, d'une chose qui se prête difficilement/fortement opposé, à l'action à laquelle on le soumet</p>
        </div>
        <div class="rebel-choice">
            <article><img src="src/Coiffures/curlyPeanut.jpg" height="100%" ></article>
            <article><img src="src/Coiffures/detresse.jpg" height="100%" ></article>
            <article class="color-button"><button class="card-button"><a href="hairstyles.php">voir la suite </a></button></article>
        </div>
    </div>
</section>
<script src="scriptnav.js"></script>
<?php require 'footer.php'?>
</body>
</html>
