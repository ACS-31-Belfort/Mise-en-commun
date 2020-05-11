<?php

// On vérifie dans un premier temps que les variables POST existent (Attention, les variables sont en POST ou en GET en fonction de la méthode choisie dans le JS !)
if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['message']) && !empty($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = htmlspecialchars($_POST['message']);
        $dest = "contact@lucasvandenberg.fr";

        // On envoie l'email avec les paramètres corrects
        mail($dest, "New message from ".$name." <".$email.">",$message);
        // Return true permet de renvoyer une réponse HTTP 200 :) C'est ce qu'il nous faut pour afficher le message "Votre message a bien été envoyé".
        return true;
}
// Si un des champs est vide, on va renvoyer une réponse de type erreur au JavaScript.
else{
    // J'ai choisi le code d'erreur 422 : Invalid data submitted
    header('HTTP/1.1 422 Invalid data submitted');
    // Même chose que pour le JavaScript, on va encode les données envoyées, et indiquer quel est l'encodage de ces données.
    header('Content-Type: application/json; charset=UTF-8');
    // json_encode est une fonction qui permet de créer du JSON à partir d'un tableau.
    // La fonction "die" permet de quitter le code PHP.
    die(json_encode(array('message' => 'ERROR', 'code' => 422, "data" => $_POST)));
}
