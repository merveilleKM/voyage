<?php
session_start();

// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base_de_donnees = "gestion_personnel";

try {
    // Connexion à la base de données avec PDO
    $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $motdepasse);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si le formulaire de connexion a été soumis
    if (isset($_POST['ok'])) {
        if (!empty($_POST['email']) && !empty($_POST['pass'])) {
            // Récupérer les données du formulaire
            $email = htmlspecialchars( $_POST["email"]);
            $password = sha1($_POST["pass"]);

            // Préparer et exécuter la requête SQL pour vérifier les identifiants
            $stmt = $connexion->prepare("SELECT * FROM enregistrement WHERE mail = ? AND password = ?");
            $stmt->execute([$email, $password]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                // Stocker les informations de l'utilisateur dans la session
                $_SESSION['email'] = $email;
                $_SESSION['pass'] = $password;
                $_SESSION['id'] = $result['id'];
                $_SESSION['nom'] = $result['nom'];

                // Rediriger vers la page home.php
                header("Location: home.php");
                exit();
            } else {
                echo "Informations erronées";
            }
        } else {
            echo "Veuillez remplir tous les champs";
        }
    }
} catch (PDOException $e) {
    // Gérer les erreurs
    echo "Erreur : " . $e->getMessage();
}
?>





























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
    <link rel="stylesheet" href="esthetique.css">
</head>
<body class="body_enregistrement">
   
  
        <div class="formulaire">
            <h1 style="text-align: center;">Bienvenue à vous!</h1>
   
            <form method="POST" action="" align:center>
            <label for="email">e-mail</label>
            <input type="email" id="email" name="email" placeholder="entrez votre email"required>
            <br>
            <label for="pass">password</label>
            <input type="password" id="pass" name="pass" placeholder="entrez votre mot de passe" required>
            <br>
           
           
            <input type="submit" value="envoyer" name="ok">
            <br>
            <a href="page_enregistrement">Voulez-vous créer un compte?</a> 
            </form>
            </div>
</body>
</html>