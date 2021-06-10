<?php
require 'connexion.php';


//Recupération des données dans la base de données
$req = $conn->query("SELECT * FROM Etudiant");
if ($req === false ){
    die("Une erreur est survenue ! \n");
}else {
    
while($result = $req->fetch(PDO::FETCH_ASSOC)):
    //Affichage des etudiants dans la base de données
    echo $result['id'].' '.$result['nom'].' '.$result['prenom'].' '.$result['age'].' '.$result['classe'].' '.$result['date_inscription']."\n";
endwhile;

    /*
    Afichage sur le navigateur
    echo'<h1>Liste Ordonné des Etudiants</h1>';
    echo'<table>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
            </tr>';
            while($result = $req->fetch(PDO::FETCH_ASSOC)):
                echo '<tr>';
                    echo'<td>';
                        echo $result['nom'];
                    echo'</td>';
                    echo'<td>';
                        echo $result['prenom'];
                    echo'</td>';
                echo'</tr>';    
            endwhile;
    echo '</table>';
    */
}