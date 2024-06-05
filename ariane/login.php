<?php
session_start();

// Vérifier si les champs "tel" et "password" sont définis dans le tableau $_POST
if(isset($_POST['tel']) && isset($_POST['password'])) {
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

    // Récupérer les données du formulaire
    $tel = $_POST['tel'];
    $password = $_POST['password'];

    // Préparer et exécuter la requête SQL pour récupérer le mot de passe haché
    $sql = "SELECT password FROM users WHERE telephone = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $tel);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Utilisateur trouvé, vérifier le mot de passe
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Vérifier si le mot de passe fourni correspond au mot de passe haché en base de données
        if (password_verify($password, $hashed_password)) {
            // Mot de passe correct, connexion réussie
            $_SESSION['tel'] = $tel;
            header("Location: menu.php");
        } else {
            // Mot de passe incorrect, connexion échouée
            echo "Numéro de téléphone ou mot de passe incorrect";
        }
    } else {
        // Utilisateur non trouvé, connexion échouée
        echo "Numéro de téléphone ou mot de passe incorrect";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Les champs numéro de téléphone et mot de passe sont requis.";
}
?>
