<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f0f2f5;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #3b5998;
        padding: 10px 20px;
        color: white;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar .logo {
        font-size: 24px;
        font-weight: bold;
        text-decoration: none;
        color: white;
    }

    .navbar .search-bar {
        padding: 5px;
        border-radius: 5px;
        border: none;
        width: 300px;
    }

    .navbar .nav-link {
        color: white;
        text-decoration: none;
        margin: 0 10px;
        display: flex;
        align-items: center;
    }

    .navbar .nav-link i {
        margin-right: 5px;
    }

    .navbar .nav-link:hover {
        text-decoration: underline;
    }

    .content {
        padding: 20px;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        background: linear-gradient(to bottom, #ffffff, #f0f2f5);
    }

    table, th, td {
        border: 1px solid black;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #3b5998;
        color: white;
    }

    footer {
        padding: 10px;
        background-color: #3b5998;
        color: white;
        position: fixed;
        width: 100%;
        bottom: 0;
        box-shadow: 0px -2px 4px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>
<body>
<header>
    <div class="navbar">
        <div class="navbar-left">
            <a href="#" class="logo">MonSite</a>
            <input type="text" class="search-bar" placeholder="Rechercher sur MonSite">
        </div>
        <div class="navbar-center">
            <a href="#" class="nav-link"><i class='bx bx-home'></i> Accueil</a>
            <a href="#" class="nav-link"><i class='bx bx-user'></i> Profil</a>
            <a href="#" class="nav-link"><i class='bx bx-bell'></i> Notifications</a>
            <a href="#" class="nav-link"><i class='bx bx-message'></i> Messages</a>
        </div>
        <div class="navbar-right">
            <a href="#" class="nav-link"><i class='bx bx-cog'></i> Paramètres</a>
            <a href="logout.php" class="nav-link"><i class='bx bx-log-out'></i> Déconnexion</a>
        </div>
    </div>
</header>
<main>
    <div class="content">
        <h1>Bienvenue sur MonSite!</h1>
        <p>Ceci est votre tableau de bord.</p>
        <!-- Tableau des utilisateurs -->
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody id="user-table">
                <?php
                // Connexion à la base de données
                $servername = "localhost";
                $username = "root"; // Remplacez par votre nom d'utilisateur MySQL
                $password = ""; // Remplacez par votre mot de passe MySQL
                $dbname = "auth"; // Remplacez par le nom de votre base de données

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Vérifier la connexion
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Récupérer les utilisateurs
                $sql = "SELECT nom, prenom, telephone, email, password FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Afficher les données de chaque ligne
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['telephone']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td>********</td>"; // Vous pouvez masquer le mot de passe
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Aucun utilisateur trouvé</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</main>
<footer>
    <center>&copy; 2024 MonSite</center>
</footer>
</body>
</html
