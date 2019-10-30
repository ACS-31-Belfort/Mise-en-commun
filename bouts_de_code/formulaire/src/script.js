let form = document.querySelector("#formulaire");

form.addEventListener("submit", function(e){
  e.preventDefault();
  //vérification
  if(nom.match(/^[a-zA-Z ]+$/)){
    //le nom est OK, on peut passer au suivant
  }

  form.submit();
  console.log("form submitted");
})