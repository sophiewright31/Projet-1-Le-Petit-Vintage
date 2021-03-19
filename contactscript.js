const message =
  "Merci d'avoir pris contact avec Le Petit Vintage! Votre message a bien été transmis, notre équipe va vous répondre rapidement.";

document
  .getElementById("contactForm")
  .addEventListener("submit", function(event) {
    event.preventDefault();
    alert(message);
  });