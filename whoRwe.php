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
<?php require 'nav.php'?>

<section>
  <div class="title">
    <h1>Mais qui sommes nous ?</h1>
  </div>
</section>

<section>
  <div class="text">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
       ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud xercitation
       ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
       occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
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
        <img src="<?= $hairDresserData['image'] ?>" alt=''>
        <h2 class="coiffeusesName"><?= $hairDresserData['name'] ?></h2>
        <p class="coiffeusesSpe">
            spécialités:
            <?php foreach ($hairDresserData['specialties'] as $specialty)echo $specialty.', ';?>
        </p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php require 'footer.php'?>
</body>
</html>
