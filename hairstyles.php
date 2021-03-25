<?php require 'src/coiffures.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/styles/hairstylecards.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="src/stylenav.css">

    <title>Document</title>
</head>
<body>
<section class="require">
    <?php require 'nav.php'?>
    <h1 class="title">Nos coiffures</h1>
</section>
    <div class= 'container flex-around'>
    <?php foreach($hairstyles as $hairstyleData): ?>
        <div class="card <?= $hairstyleData['new'] ? 'new-card' : ''?>">
        <img class ="hairstyleimg" src="<?= $hairstyleData['image'] ?>" alt=''>
        <h2> <?= $hairstyleData['name'] ?></h2>
        <p>
            <?= $hairstyleData['description']?>
        </p>
            <h1> <?= ($hairstyleData['price'] . '  -  ') . ($hairstyleData['time'])?></h1>
            <h3> <?= $hairstyleData['hairlength']?></h3>
        </div> 
        <?php endforeach; ?>
    </div>
    <?php require 'footer.php'?>
    <script src="scriptnav.js"></script>

</body>
</html>