




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" href="esthetique.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<!--<header>
    <div class="container col-md-12">
        <div class="col-md-6 float-left"> <h1 class="h1">C.U.Y</h1></div>
        <nav> 
            <ul class="col-md-6 ms-auto">
                <li> <a href="session.php" class="position_a1">Home</a></li>
                <li class="col-md-3"> <a href="membres.php">users</a> </li>
                <li class="col-md-3"> <a href="#">aide</a> </li>
                <li class="col-md-3"> <a href="deconnexion.php">Deconnexion</a> </li>
            </ul>
        </div>
    </nav>
</header>  -->




<div class="formulaire mt-5">
    <h1 style="text-align: center; font-size: 24px; font-weight: bold">Mis à Jour de votre compte</h1>
<form method="POST" action="">
<label for="name">Nouveau nom</label>
<input type="text" id="nom" name="nom" placeholder="entrez votre nom" required>
<br>
<label for="prename">Nouveau Prenom</label>
<input type="text" id="prenom" name="prenom" placeholder="entrez votre prenom" required>
<br>
<label for="contact">Nouveau Contact</label>
<input type="tel" id="phone" name="phone" placeholder="Entrez votre numéro de telephone" pattern="[0-9]{9}" required>

<!-- <label for="contact">Contact</label>
<input type="contact" id="nom" name="phone" placeholder="entrez votre numero de telephone" required> -->
<br>
<label for="email">e-mail</label>
<input type="email" id="email" name="email" placeholder="entrez votre email"required>
<br>
<label for="pass">password</label>
<input type="password" id="pass" name="pass" placeholder="entrez votre mot de passe" required>
<br>
<input type="submit" name="modifier" value="modifier">
</form>
</div>


</html>

<?php
if(isset( $_POST["nom"]) && isset( $_POST['prenom'] ) && isset( $_POST['email'] ) && isset( $_POST['phone'] ) && isset( $_POST['pass'] ) && isset( $_GET['id'] )){

    $nouveau_nom = $_POST["nom"];
    $nouveau_prenom = $_POST['prenom'];
    $nouveau_telephone = $_POST['phone'];
    $nouveau_email = $_POST['email'];
    $nouveau_mdp = sha1($_POST['pass']);
    $id_utilisateur=$_GET['id'];
    

   

     // Connexion à la base de données
     $bdd = new PDO('mysql:host=localhost;dbname=gestion_personnel', 'root', '');
    try {
       
        
        // Préparer et exécuter la requête de mise à jour
        $requete = $bdd->prepare("UPDATE enregistrement SET nom = :nom, prenom = :prenom, mail = :email, contact = :phone, password = :pass WHERE id = :id");
        $requete->execute(array(':nom' => $nouveau_nom, ':prenom' => $nouveau_prenom, ':email' => $nouveau_email, ':phone' => $nouveau_telephone,':pass' => $nouveau_mdp, ':id' => $id_utilisateur));
        
        // Redirection vers la page précédente après la mise à jour
        header('Location: Home.php');
        exit;
    } catch (PDOException $e) {
        echo "Erreur lors de la mise à jour de l'utilisateur : " . $e->getMessage();
    }
}
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
