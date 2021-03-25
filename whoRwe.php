<?php require 'src/coiffeuses.php' ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link type="text/css" rel="stylesheet" href="src/whoRwe.css">
    <link type="text/css" rel="stylesheet" href="src/stylenav.css">
    <title>Qui sommes nous</title>

</head>

<body>


<section class="require">
    <?php require 'nav.php'?>
  <div >
    <h1 class="title">Mais qui sommes nous ?</h1>
  </div>
</section>

<section>
  <div class="text">
    <p>Passionnée de coiffure depuis toujours, c’est en famille dès l’âge de 16ans que Frédérique Lacroux commence sa formation.
       Son style unique, intemporel et sophistiqué ainsi que sa ténacité et sa rigueur lui permettent d’intégrer dès 2011 l’équipe régionale d’Alsace de coiffure.
       Sacrée Championne de France en coupe stylisée et coiffage en 2004, ce titre lui permet d’intégrer la prestigieuse équipe de France, qu’elle quittera après une victoire éclatante, celle du Grand Prix International en Chignon de Mariée de Prestige, au Mondial Coiffure Beauté.<br><br>
       C’est en 2005 qu’elle rencontre David Baehr. Ayant le même niveau d’excellence, les deux coiffeurs passent trois années à former les espoirs de la coiffure de demain, et à voyager dans le monde entier pour parfaire leur connaissances, créer de nouvelles lignes, et diffuser la passion de la coiffure jeune, belle et en constante évolution.
       Le salon Need nait de l’alliance entre l’excellence et la performance, de l’association de Frédérique avec David, pour créer un concept totalement inédit, où la coiffure trouve toute sa noblesse et son art.</p>
  </div>
</section>

<section>
  <div class="team">
    <h2>Notre équipe</h2>
  </div>
</section>

<section>
  <div class= 'container flex-around'>
    <?php foreach($hairDressers as $hairDresserData): ?>
      <div class="card">
        <img class="coiffeuseImg" src="<?= $hairDresserData['image'] ?>" >
        <h2 class="coiffeusesName"><?= $hairDresserData['name'] ?></h2>
        <p class="coiffeusesSpe">
            spécialités:
            <?php foreach ($hairDresserData['specialties'] as $specialty)echo $specialty.', ';?>
        </p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<script src="scriptnav.js"></script>
<?php require 'footer.php'?>
<script src="scriptnav.js"></script>
</body>
</html>
