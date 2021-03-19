<?php require 'src/coiffures.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
    <div class= 'container flex-around'>
    <?php foreach($hairstyles as $hairstyleData): ?>
        <div class="card <?= $hairstyleData['new'] ? 'new-card' : ''?>">
        <img src="<?= $hairstyleData['image'] ?>" alt=''>
        <h2><?= $hairstyleData['name'] ?></h2>
        <p>
            <?= $hairstyleData['description'] ?>
        </p>
        </div> 
        <?php endforeach; ?>
    </div> 

</body>
</html>