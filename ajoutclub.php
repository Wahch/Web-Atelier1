<?php include './Club.php';


$c = new Club(
    $_POST['id'],
    $_POST['name'],
    $_POST['description'],
    $_POST['adresse'],
    $_POST['domaine']
);

echo var_dump($c->afficher());
