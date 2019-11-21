<?php 

$dsn = 'mysql:host=localhost;dbname=correction_pdo;charset=utf8';
$user = 'root';
$password = '';

try {
    $bdd = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    header("Location:404.php");
}

if(isset($_POST['nom'])){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}

echo "votre message a bien été envoyé, <br>";
echo "nom : ".$nom."<br>";
echo "email : ".$email."<br>";
echo "message : ".$message."<br>";

$query = $bdd->query("INSERT INTO contact (name, email, message) VALUES ('{$nom}', '{$email}', '{$message}');");































// foreach ($query as $value) {
//     foreach ($value as $col => $val) {
//         echo $col."<br>\t".$val."<br>\t";
//     }
// }





// $id = ;
// $query = $query->fetchAll(PDO::FETCH_ASSOC);

