<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <title>Modifier un étudiant</title>
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

    
    <h2 class="titre-modif"> Modifier l'étudiant </h2>
                        <?php $db->ajout_et(); ?>
                    <div class="form-modif">
                            <form method="POST">
                                <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">
                                <?php echo $data['nom']; ?>  <input type="text" name="nom" placeholder="Nouveau nom..."  required>
                                <?php echo $data['prenom']; ?><input type="text" name="prenom" placeholder="Nouveau prénom..."  required>
                                <?php echo $data['tel']; ?> <input type="text" name="tel" placeholder="Nouveau n° téléphone..."  required>
                                <?php echo $data['mail']; ?><input type="email" name="mail" placeholder="Nouveau mail..." required>
                                <?php echo $data['age']; ?><input type="text" name="age" placeholder="Nouvelle age..." required>
                                <?php echo $data['adresse']; ?><input type="text" name="adresse" placeholder="Nouvelle adresse..."  required>
                                <?php echo $data['ville']; ?> <input type="text" name="ville" placeholder="Nouvelle ville..."  required>
                                <?php echo $data['codepostal']; ?><input type="text" name="codepostal" placeholder="Nouveau code postal"  required>
                                <?php echo $data['annee']; ?><input type="text" name="annee" placeholder="Nouvelle snnée de rentré...( 1 , 2 , 3 , Master )"  required>
                                <?php echo $data['spe']; ?><input type="text" name="spe" placeholder="Nouvelle specialité potentiel... (Dev, CG, S2M, EB)"  required>
                                <?php echo $data['situation']; ?> <input type="text" name="situation" placeholder="Nouvelle situation actuel..."  required>
                                <?php echo $data['commentaire']; ?><input type="text" name="commentaire" placeholder="Nouveau commentaires a ajouter... ( facultatif)"  required>
                    
                            <button class="bouton-form" name="bouton-modif"> Modifier </button>
                        </form>
                        </div>
</body>
</html>
