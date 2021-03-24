<?php
    require 'src/coiffures.php';
    require 'src/coiffeuses.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/styles/stylerdv.css">
    <title>Le petit Vintage prendre rendez vous</title>
</head>
<body>
<div class="window">
        <div id="slide-container">
            <div class="slide" id="slide1">
                <h2 class="title2">Vos coordonnées </h2>
                <div class="container-form">
                    <input type="text" name="first-name" id="first-name" class="input-form" placeholder="prénom">
                    <p class="errror-first-name alert inactive"></p>
                    <input type="text" name="last-name" id="last-name" class="input-form" placeholder="nom">
                    <p class="errror-first-name alert inactive"></p>
                    <input type="email" name="email" id="email" class="input-form" placeholder="adresse e-mail">
                    <p class="errror-email alert inactive"></p>
                    <input type="tel" name="tel" id="tel" class="input-form" placeholder="téléphone">
                    <p class="errror-tel alert inactive"></p>
                    <button id= "submit0" class="slideButton next input-form">Valider</button>
                </div>
            </div>
            <div class="slide" id="slide2">
                <h2 class="title2">Votre choix de coupe de cheveux </h2>
                <div class="card-container">
                    <div id="hair-cut-selector" class="card">
                        <select name="hair-cut-choice" id="hair-cut-choice">
                            <?php foreach ($hairstyles as $hairstyle):?>
                                <option class="hair-cut-option" value="<?=$hairstyle['image']?>"><?=$hairstyle['name']?></option>
                            <?php endforeach;?>
                        </select>
                        <img src="" alt="" id="hair-cut-img">
                    <button id= "submit1" class="slideButton next">Ok</button>
                    </div>
                </div>
            </div>
            <div class="slide" id="slide3">
                <h2 class="title2">Votre coiffeuse</h2>
                <div class="card-container" id="hairdressers">
                    <?php foreach ($hairDressers as $hairDresser):?>
                    <div class="card">
                        <h4><?=$hairDresser['name']?></h4>
                        <img src="<?=$hairDresser['image']?>" alt="" class="hair-cut-img " >
                        <img src="<?=$hairDresser['imageBW']?>" alt="" class="hair-cut-img img-bw" >
                        <button id= "submit20" class="next choose-me hidden">Choisir</button>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="slide" id="slide4">
                <h2 class="title2">Votre rendez-vous</h2>
                <div class="agenda">
                    <input type="date" name="" id="">
                    <button id= "submit3" class="submit">prendre rendez-vous</button>
                </div>
                <p class="error-display inactive alert">
                    Veuillez remplir le formulaire "Vos coordonnées"
                </p>
                <p class="error-display inactive alert">
                    Veuillez choisir votre coupe
                </p>
                <p class="error-display inactive alert">
                    Veuillez choisir notre coiffeuse qui s'occupera de vous
                </p>
            </div>
            <div class="slide" id="slide5">
                <h2 class="title2">Votre réservation a été enregistrée</h2>
                <div class="result">
                    <p>
                        Nous avons noté votre rendez-vous pour le <?='/date'?>  à <?='/heure'?> avec notre coiffeuse <?='/coiffeuse'?>, vous avez choisi <?='/coupe'?>.
                        Un email à <?='/email'?> vous a été envoyé.
                    </p>
                    <a href="">retour à l'accueil</a>

                </div>
            </div>
        </div>
    </div>
    <div class="timeline">
        <span id="dot0" class="dot dot-current"></span>
        <span id="dot1" class="dot"></span>
        <span id="dot2" class="dot"></span>
        <span id="dot3" class="dot"></span>
    </div>

    <script src="slides.js"></script>
    <script src="haircut.js"></script>
    <script src="hairdresser.js"></script>
</body>
</html>