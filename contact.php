<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ou nous trouver?</h1>

<h3>Nos horaires d'ouverture</h3>
    <p>Lundi : Fermé</p>
    <p>Mardi : 9h30-18h00</p>
    <p>Mercredi : 9h30-18h00</p>
    <p>Jeudi : 9h30-18h00</p>
    <p>Vendredi : 9h30-18h00</p>
    <p>Samedi : 9h30-17h00</p>
    <p>Dimanche : Fermé</p>

<h3>Téléphone</h3>
    <p>06 12 31 51 09</p>
<h3>Notre Adresse</h3>
    <p>7 Avenue Thiers, 33100 Bordeaux</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.05773409888!2d-0.560802984539665!3d44.84075758284621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd55262e0bf04b61%3A0xdf8d186291efe7a9!2sLe%20Petit%20Vintage!5e0!3m2!1sfr!2sfr!4v1615991983070!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <section class="maps">
        <h3>Notre localisation</h3>
        <div class="map-container" data-latitude="44.8408434" data-longitude="-0.5587234" data-zoom="18" data-icon-url="https://www.google.fr/url?sa=i&url=https%3A%2F%2Fwww.stocklib.fr%2Fmedia-60538192%2Fpin-drop-icon-pin-point-icon-geolocation-sign-or-symbol-location-icon-map-pin-drop-location-map-pointer-isolated-on-white-background.html&psig=AOvVaw1O3bpi1oxOrg3fCVc-4X_q&ust=1616077687796000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCLjlkdbEt-8CFQAAAAAdAAAAABBH" data-icon-alt="Map">
        <div class="map-canvas" id="localisation"></div>
      </div>
    </section>

    <form class = contactForm />
        <label for="name">Votre nom:</label><br />
        <input type="text" id="name" name="name" value="Entrez votre nom" /><br />
        <label for="email">Votre adresse email:</label><br />
        <input
            type="email"
            id="email"
            name="email"
            value="hairstyle@gmail.com"
            /><br />
        <label for="comments">Vos commentaires:</label><br />
        <textarea id="comments" name="comments"></textarea>
        <br /><br />
        <input type="submit" value="Envoyer" />
    </form>

<?php ?>
<script src="contactscript.js"></script>
</body>
</html>