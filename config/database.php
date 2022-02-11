<?php


$user = "boutique";
$pass = "123456789";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


