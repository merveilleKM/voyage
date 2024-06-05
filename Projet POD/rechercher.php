<?php
session_start();
$bdd = new PDO('mysql:host=localhost; dbname=gestion_personnel', 'root', '');

if(isset($_POST['recherche'])) {
    $recherche = $_POST['recherche'];

    if (!empty($recherche)){
        $requete = $bdd->prepare("SELECT * FROM enregistrement WHERE nom || contact  LIKE :recherche");
        $requete->execute(array(':recherche' => '%' . $recherche . '%'));
        

        echo '<table style="border: 1px solid black; border-collapse: collapse; margin: 0 auto; width: 70%; text-align:center">';
        echo '<tr style="background-color:#a2bfdd;">';
        echo '<th style="border: 1px solid black;">Nom</th>';
        echo '<th style="border: 1px solid black;">Prénom</th>';
        echo '<th style="border: 1px solid black;">Téléphone</th>';
        echo '<th style="border: 1px solid black;">Email</th>';
        echo '<th style="border: 1px solid black; padding:10px; padding-left:20px; padding-rigt:20px;;">Actions&nbsp;&nbsp;&nbsp;</th>';
        echo '</tr>';

        while ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
           // echo '<td style="border: 1px solid black; width: 25%;">' . $row['id'] . '</td>';
            echo '<td style="border: 1px solid black; width: 25%;">' . $row['nom'] . '</td>';
            echo '<td style="border: 1px solid black; width: 25%;">' . $row['prenom'] . '</td>';
            echo '<td style="border: 1px solid black; width: 25%;">' . $row['contact'] . '</td>';
            echo '<td style="border: 1px solid black; width: 25%;">' . $row['mail'] . '</td>';
            echo '<td style="border: 1px solid black; width: 25%;">';

            // Bouton pour supprimer l'utilisateur
            echo '<form method="POST" action="supprimer_utilisateur.php">';
            echo '<input type="hidden" name="id_utilisateur" value="' . $row['id'] . '">';
            echo '<button style="background-color:red; border: 1px solid black boder: radius 50px;" type="submit" name="supprimer">Supprimer</button>';
            echo '</form>';
            
            // Bouton pour modifier l'utilisateur
            echo '<a href="modifier_utilisateur.php?id=' . $row['id'] . '">Modifier</a>';


            // Bouton pour afficher plus de détails sur l'utilisateur
            echo '<form method="post">';
            echo '<input type="hidden" name="id_utilisateur" value="' . $row['id'] . '">';
            echo '<button type="submit" name="details">Plus</button>';
            echo '</form>';

            echo '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }  
}
?>