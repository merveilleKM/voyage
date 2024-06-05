<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Page d'authentification</title>
    <link rel="stylesheet" href="./css/register.css" />
</head>
<body>
    <div class="containe">
        <form action="register.php" method="post" enctype="multipart/form-data">
            <h1>S'ENREGISTRER</h1>
            <div class="input-box">
                <input type="text" placeholder="nom" name="nom" required>
                <i class='bx bxs-user-circle'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="prenom" name="prenom" required>
                <i class='bx bxs-user-circle'></i>
            </div>
            <div class="input-box">
                <input type="tel" placeholder="telephone" name="tel" required>
                <i class='bx bxs-user-circle'></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="email" name="email" required>
                <i class='bx bxs-user-circle'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn">s'enregistrer</button>
            <div class="login-link">
                <p>Avez-vous un compte!!!!!<a href="sign in.php">Login</a></p>
            </div>
            <footer>
                <center>
                    &copy; Avini
                </center>
             </footer>
        </form>
    </div>
</body>
</html>
