<?php 
    
    require_once('./class/bdd.php'); 
    $db = new requettes();
    $result=$db->voir_tout();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleall.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Annuaire NWS</title>
</head>
<body>

<nav class="navbar" role="navigation">
        <div class="nav-logo">
            <a href="./"><img class="logo" src="./img/logo-nws.png" alt="Logo NWS"></a>
        </div>           
        <ul class="navbar-links">
		<li class="navbar-link lien "><a href="ajout.php">Ajouter un étudiant</a></li>
            <li class="navbar-link lien"><a href="liste.php">Liste des étudiants</a></li>
            <li class="navbar-link lien"><a href="rechercher.php">Rechercher un étudiant</a></li>
            <li class="navbar-link lien"><a href="filtrer.php">Filtrer les catégories</a></li>
        </ul>

        <button class="burger">
            <span class="bar"></span>
        </button>
    </nav>  
    




    <h2 class="titre-liste">Filtrer par catégories</h2>
    <button class="accordion">Nom</button>
<div class="panel">
 
</div>

<button class="accordion">Prenom</button>
<div class="panel">
 
</div>

<button class="accordion">Téléphone</button>
<div class="panel">

</div>



<script  src="./js/accordeon.js"></script>
</body>
</html>