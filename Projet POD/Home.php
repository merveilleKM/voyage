<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="esthetique.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <header>
<div class="div_titre">R<span>H</span> Space</div>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="header_home" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <p class="navbar-brand">Bienvenue Monsieur <span class="text-info"><?php echo $_SESSION['nom']; ?></p></span>   
     

      <form class="d-flex ms-5  " method="post" action="rechercher.php">
        <input class="recherche_home" type="search" placeholder="Recherchez employé" aria-label="Search" name="recherche" autofocus>
        <button class="btn btn-outline-success " type="submit">Rechercher</button>
      </form>

     
     
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="deconnexion.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="deconnexion.php">Deconnexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" >Parametre</a>
        </li>
      
</ul>

     

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</nav>
    </header>
   

<main>

<div style="background-color: red;">
    <h2 style="margin-top: 50%;">Explorer</h2>
    <div style="margin-top: 35%;">
    <button class="btn"> <a href="#mon_ancre1">Liste employé</a></button>
    <button class="btn"> <a href="#mon_ancre2">Gestion salaire</a></button>
    <button class="btn"><a href="#mon_ancre3">Congés</a></button>
    <button class="btn"> <a href="#mon_ancre4"> Présences</a></button>
    <button class="btn">Autres</button>
    </div>
<h2 style="margin-top: 50%; font-size: 70%;"><i>RH <span>Space</span></i></h2>
<p> je suis un trèq gtand codeur</p>

</div>






</main>

    
</body>
</html>
