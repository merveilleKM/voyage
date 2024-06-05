<?php
session_start();
$id_utilisateur = $_POST['id_utilisateur'];
                
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=gestion_personnel', 'root', '');

try {
    // Préparer et exécuter la requête de suppression
    $requete = $bdd->prepare("DELETE FROM enregistrement WHERE id = :id");
    $requete->execute(array(':id' => $id_utilisateur));
    
    // Vérifier si la suppression a réussi
    if($requete->rowCount() > 0) {
        
        header('Location: home.php' );
        echo "L'utilisateur a été supprimé avec succès.";
        
    } else {
        echo "Aucun utilisateur n'a été supprimé.";
        
    }
} catch (PDOException $e) {
    echo "Erreur lors de la suppression de l'utilisateur : " . $e->getMessage();
}
?>