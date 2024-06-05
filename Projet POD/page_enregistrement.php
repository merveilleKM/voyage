<?php
// Paramètres de connexion
session_start();
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base_de_donnees = "gestion_personnel";

try {
    // Connexion à la base de données
    $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $base_de_donnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        throw new Exception("Échec de la connexion : " . $connexion->connect_error);
    }

    // Vérifier si le formulaire a été soumis
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['pass'])) {
        // Récupérer les données du formulaire
        $nom = $connexion->real_escape_string($_POST["nom"]);
        $prenom = $connexion->real_escape_string($_POST["prenom"]);
        $contact = $connexion->real_escape_string($_POST["phone"]);
        $mail = $connexion->real_escape_string($_POST["email"]);
        $password = sha1($_POST["pass"]);

        // Vérifier si l'adresse e-mail existe déjà dans la base de données
        $stmt = $connexion->prepare("SELECT * FROM enregistrement WHERE mail = ?");
        $stmt->bind_param("s", $mail);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Vérifier si le numéro de contact existe déjà
            $row = $result->fetch_assoc();
            if ($row['contact'] == $contact) {
                // Afficher un message d'erreur ou de notification à l'utilisateur
                echo '<script>alert(" cette adresse e-mail et ce numéro de contact existent déjà, impossible de créer un compte avec les mêmes informations !");</script>';
                //header('Location:page_enregistrement.php');
            } else {
                // Préparer et exécuter la requête SQL
                $stmt = $connexion->prepare("INSERT INTO enregistrement (nom, prenom, contact, mail, password) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $nom, $prenom, $contact, $mail, $password);

                if ($stmt->execute()) {
                    // Redirection vers la page de succès
                    header("Location: page_connexion.php");
                    exit();
                } else {
                    throw new Exception("Erreur lors de l'enregistrement : " . $stmt->error);
                    echo '<script>alert(" Erreur lors de l\'enregistrement !");</script>';
                }

                $stmt->close(); // Fermer le curseur
            }
        } elseif (strlen($_POST["pass"]) >= 8) {
            // Préparer et exécuter la requête SQL
            $stmt = $connexion->prepare("INSERT INTO enregistrement (nom, prenom, contact, mail, password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $nom, $prenom, $contact, $mail, $password);

            if ($stmt->execute()) {
                // Redirection vers la page de succès
                header("Location: page_connexion.php");
                exit();
            } else {
                throw new Exception("Erreur lors de l'enregistrement : " . $stmt->error);
                echo '<script>alert(" Erreur lors de l\'enregistrement !");</script>';
            }

            $stmt->close(); // Fermer le curseur
        } else {
            $mdpcourt = "Votre mot de passe est trop court !";
            //header("Location:page_enregistrement.php");
        }
    }

    // Fermer la connexion
    $connexion->close();
} catch (Exception $e) {
    // Gérer les erreurs
    echo "Erreur : " . $e->getMessage();
}
?>







<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="esthetique.css">
</head>
<body class="body_page2">


        <div class="formulaire mt-5">
            <form method="POST" action="">
            <label for="name">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="entrez votre nom" autocomplete="off" required>
            <br>
            <label for="prename">Prenom</label>
            <input type="text" id="prenom" name="prenom" placeholder="entrez votre prenom" autocomplete="off" required>
            <br>
            <label for="contact">Contact</label>
            <input type="tel" id="phone" name="phone" placeholder="Entrez votre numéro de telephone" autocomplete="off" pattern="[0-9]{9}" required>
            <br>
            <label for="email">e-mail</label>
            <input type="email" id="email" name="email" placeholder="entrez votre email"autocomplete="off" required>
            <br>
            <label for="pass">password</label>
            <input type="password" id="pass" name="pass" placeholder="entrez votre mot de passe" autocomplete="off" required>
            <br>
            <input type="submit" value="S'inscrire" name="envoyer">
            <div style="text-align: center;">
            <p style="text-align: center; font-weight:bold;"> <i style="color: red;">  <?php 
            if(isset($mdpcourt))
            echo $mdpcourt; ?></i></p> <br>
            <p> En cliquant sur S'inscrire, vous acceptez nos <a href="#" >conditions générales</a>, <a href="#">notre politique de confidentialité </a>  et notre <a href="#"> Politique d'utilisation </a>  des cookies</p>

            <p>Vous avez déjà un compte?<a href="Page_connexion"> Connexion  </a> </p>
            </div>
            </form>
            </div>
       
    
</body>
</html>