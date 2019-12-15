<?php

//INSERT INTO DB
$dbh = new PDO("mysql:host=localhost;dbname=atelier_ajax;charset=utf8", "root", "", [
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

// traitement des données envoyées
if (isset($_POST)) {
  if (
    isset($_POST['first']) && !empty($_POST['first']) &&
    isset($_POST['last']) && !empty($_POST['last']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['password']) && !empty($_POST['password'])
  ) {
    // sanitize first, last and email, encode password
    $first = filter_var($_POST['first'], FILTER_SANITIZE_STRING);
    $last = filter_var($_POST['last'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_ARGON2_DEFAULT_THREADS);

    // Insert into db
    try {
      $query = $dbh->prepare('INSERT INTO `users` (first, last, email, password) VALUES (?, ?, ?, ?);');
      $query->execute([$first, $last, $email, $password]);
    } catch (\Throwable $th) {
      $th->getMessage();
    }

    //Données à renvoyer au JS :)
    // JSON = JavaScript Object Notation
    $tableau_reponse = [
      "first" => $first,
      "last" => $last,
      "email" => $email,
      "password" => "Le mot de passe que vous avez choisi."
    ];

    $reponse = json_encode($tableau_reponse);
    header('Content-Type: application/json');
    echo $reponse;
  }
}







































// Login
// $getPw = $dbh->query('SELECT * FROM users;');
//     $Pw = $getPw->fetchAll();
//     var_dump($Pw);
//       foreach ($Pw as $key => $value) {
//         if(password_verify("test", $value['password'])){
//           echo "true";
//         }
//         else{
//           echo "false";
//         }
//       }
