<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $produit = htmlspecialchars($_POST["produit"]);
    $quantite = htmlspecialchars($_POST["quantite"]);
    $messageClient = htmlspecialchars($_POST["message"]);

    $destinataire = "ministjo.nozay@gmail.com"; // 🔴 remplace par ton email
    $sujet = "Nouvelle commande reçue";

    $message = "
Nouvelle commande :

Nom : $nom
Email : $email
Produit : $produit
Quantité : $quantite

Message :
$messageClient
    ";

    $headers = "From: no-reply@monsite.com";

    if (mail($destinataire, $sujet, $message, $headers)) {
        echo "Commande envoyée avec succès !";
    } else {
        echo "Erreur lors de l'envoi de la commande.";
    }
}
?>

