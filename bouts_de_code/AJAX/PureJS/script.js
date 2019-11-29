const formulaire = document.querySelector("#formulaire");

formulaire.addEventListener("submit", function(e){
    // J'empêche l'envoi du formulaire... afin de l'envoyer plus tard
    e.preventDefault();

    // Vérification en JS des champs du formulaire

    // J'instancie la classe XMLHttpRequest, pour créer un nouvel objet.
    let xhttp = new XMLHttpRequest();
            
    // Je place un event listener sur tous les changements de statuts de cette requête.
    // Les status vont de 0 à 4 en fonction de la complétion de cette requête.
    xhttp.onreadystatechange = function() {

        // Série de if else qui varient en fonction de la réponse HTTP et du statut de complétion de la requête
        if (this.readyState == 4 && this.status == 200) {
            // La fonction "displayErrors" est une fonction créée au préalable qui affiche du code dans une div.
          displayErrors("Votre message a été envoyé avec succès.");
        }
        else if(this.status == 422 || this.status == 400 || this.status == 500){
            displayErrors("Il y a eu un problème lors de l'envoi du message");
        }
        else{
            displayErrors("Envoi...");
        }
      };

      // Les 3 étapes à réaliser pour l'envoi de la requête en elle-même
      // 1ère étape : ouvrir une requête, en spécifiant :
      // - la méthode de l'envoi de la requête, POST ou GET
      // - le fichier à qui envoyer le formulaire. Cela correspond à l'attribut "action" du formulaire
      // - un booléen (true ou false) pour indiquer si la requête doit être synchrone ou asynchrone. Par true correspond à asynchrone. C'est ce qu'on veut dans la majorité des cas.
    xhttp.open("POST", "post_process.php", true);
    
    // On spécifie l'encodage des données qui doivent être envoyées.
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    // On envoie la requête en elle-même, en spécifiant les variable POST ou GET à envoyer.
    // On les écrit comme ceci: 'variable='+variableJS+'&autre_variable='+autre_variableJS ...
    xhttp.send('name='+f_name.value+'&email='+f_email.value+'&message='+f_message.value);
});

