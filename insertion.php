<?php
require_once 'connexion.php';

$sql = "INSERT INTO Etudiant (id, nom, prenom, age, classe, date_inscription)
VALUES (Null, 'Ndiaye', 'Moussa', 24, 'terminale', NOW())";

$conn->exec($sql);
echo "Etudiant ajouté avec succes! \n";

?>