let h2 = document.querySelector("#h2");
const pre = document.querySelectorAll("pre");

//définition
function maFonction(texte, age){
  alert(texte+age);
};

//appel
// maFonction("j'ai", " 18 ans");

console.log(pre);

for (let i = 0; i < pre.length; i++) {
  console.log(pre[i].innerHTML);
}
let valeur = "oui";
//anatomie d'une condition
// il faut un test logique dans la condition (entre parenthèses)

if (valeur >= 5) {
  console.log("la variable est supérieure")
  //code si le boolean de la condition est vrai
};
else if(valeur < 5){
  // exécuté si le if est faux.
  console.log("la variable est inférieure")
}
else{
  //exécuté si le else if est faux.
}