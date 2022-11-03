<?php 
    require_once('./class/bdd.php'); 
    require_once('./class/crud.php'); 
    $db = new requettes();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <title>Ajouter un étudiant</title>
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
    <div class="form-ajout">
                        <h2 class="titre-form"> Etudiant :  </h2>
                        <?php $db->ajout_et(); ?>
                            <form method="POST">
                                <input type="text" name="nom" placeholder="Nom..."  required>
                                <input type="text" name="prenom" placeholder="Prénom..."  required>
                                <input type="tel" name="tel" placeholder=" N° téléphone...(0123456789)" pattern="[0-9]{10}" required>
                                <input type="email" name="mail" placeholder="Mail..."  required>
                                <input type="text" name="age" placeholder=" Age..."  required>
                                <input type="text" name="adresse" placeholder=" Adresse..."  required>
                                <input type="text" name="ville" placeholder=" Ville..."  required>
                                <input type="text" name="codepostal" placeholder=" Code Postal"  required>
                                <input type="text" name="annee" placeholder=" Année de rentrée...(écrivez 1 ou 2 ou 3 ou Master )"  required>
                                <input type="text" name="spe" placeholder="Specialité potentielle... (écrivez Dev ou CG ou S2M ou EB)"  required>
                                <input type="text" name="situation" placeholder="Situation actuelle...(écrivez Lycée ou Bac+.. ou Parent)"  required>
                              <input type="text" name="commentaire" placeholder="Commentaires a ajouter... ( facultatif)"  required>
                            <button class="bouton-form" name="bouton-sauvegarder"> Sauvegarder </button>
                        </form>
</div>
</body>
</html>