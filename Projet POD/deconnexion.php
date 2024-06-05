<?php
session_start();

// Détruire la session
session_destroy();

// Rediriger l'utilisateur vers la page de connexion
header("Location: accueil.html");
exit();
?>
