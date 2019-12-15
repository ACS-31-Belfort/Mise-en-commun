  // Récupérer les valeurs des champs du formulaire
  const form = document.querySelector("#formulaire");
  const retour = document.querySelector("#retourUtilisateur");

  form.addEventListener("submit", function(e) {

    e.preventDefault();

    const 
      first = document.querySelector("#first"),
      last = document.querySelector("#last"),
      email = document.querySelector("#email"),
      password = document.querySelector("#password");
  
      // Asynchronous JavaScript And XML- JSON
    let xhttp = new XMLHttpRequest();
    
    xhttp.open("POST", "traitement.php", true);

    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhttp.send('first='+first.value+'&last='+last.value+'&email='+email.value+'&password='+password.value);

    xhttp.onreadystatechange = function() {
      // 0 1 2 3 4
      if (this.readyState == 4 && this.status == 200) {
        // code if success
        let response = JSON.parse(this.responseText);
        retour.innerHTML = "Bonjour "+response.first + " " + response.last + ", votre compte a bien été créé. Nom d'utilisateur : " + response.email; 
      }
      else if(this.status !== 200){
          // code if some errors were returned
          retour.innerHTML = "Il y a eu une erreur dans la requête...";
      }
      else{
          // request being sent...
          retour.innerHTML = "Requête en cours d'envoi...";
      }
    };
   /**         
    

    
    
    

    

   */
    });
  

  