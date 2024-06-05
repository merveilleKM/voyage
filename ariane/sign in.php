<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Page d'authentification</title>
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
     <div class="wrapper">
        <form action="login.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="tel" placeholder="telephone" name="tel" required>
                <i class='bx bxs-user-circle'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
            </div>
            <button type="submit" class="btn">Valider</button>
            <div class="register-link">
                <p>Vous n'avez pas de compte? <a href="sign up.php">ENREGISTRER</a></p>
            </div>
        </form>
     </div>
     <footer>
        <center>
            &copy; Avini
        </center>
     </footer>
</body>
</html>
