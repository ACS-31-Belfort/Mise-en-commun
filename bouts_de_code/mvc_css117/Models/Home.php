<?php

require('env.php');

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$dbh = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass, $options);

//Function returning all columns from a table in your database.
function getAllRepos(){
    global $dbh;

    $all_repos = $dbh->prepare('SELECT * FROM my_table');
    $all_repos->execute();

    $all_repos = $all_repos->fetchAll();

    return $all_repos;
}

//Function returning one column from a given ID.
function getColumn($id){
    global $dbh;

    $one_col = $dbh->prepare('SELECT my_column FROM my_table WHERE id=?');
    $one_col->execute([$id]);

    $one_col = $one_col->fetchAll();

    return $one_col;
}