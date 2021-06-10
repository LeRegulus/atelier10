<?php
require_once 'env.php';

//Creation de la base de données
try {
  $conn = new PDO("mysql:host=$server", $user, $mdp);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE atelier10";
  $conn->exec($sql);
  echo "Base de données crée avec succes ! \n";

} catch(PDOException $e) {
  echo $sql . "\n" . $e->getMessage();
}
