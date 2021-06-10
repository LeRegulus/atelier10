<?php
require 'connexion.php';

    // Création de la table Etudiant
    $sql = "CREATE TABLE Etudiant (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      nom VARCHAR(30) NOT NULL,
      prenom VARCHAR(30) NOT NULL,
      age VARCHAR(50) NOT NULL,
      classe VARCHAR(30) NOT NULL,
      date_inscription DATETIME NOT NULL
  )";
  $conn->exec($sql);
  echo "Table Etudiant crée avec succes ! \n";
?>