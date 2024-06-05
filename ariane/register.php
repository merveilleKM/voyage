<?php
// Démarrer la session
session_start();

// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root"; // Remplacez par votre nom d'utilisateur MySQL
$password = ""; // Remplacez par votre mot de passe MySQL
$dbname = "auth"; // Remplacez par le nom de votre base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $tel = $_POST['tel'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Vérifier que tous les champs sont remplis
    if (!empty($nom) && !empty($prenom) && !empty($tel) && !empty($email) && !empty($password)) {
        // Hacher le mot de passe
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Préparer et exécuter la requête SQL
        $sql = "INSERT INTO users (nom, prenom, telephone, email, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $nom, $prenom, $tel, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "Enregistrement réussi !";
            header("Location: sign in.php");
            exit();
        } else {
            echo "Erreur: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Tous les champs sont obligatoires.";
    }
}

$conn->close();
?>
