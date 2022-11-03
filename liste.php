<?php 
    
    require_once('./class/bdd.php'); 
    require_once('./class/crud.php'); 
    $db = new requettes();
    $result=$db->voir_tout();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <title>Liste des étudiants </title>
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


    
    <h2 class="titre-liste">Liste des étudiants</h2>
                        <?php
                              $db->affichage_message_ok(); 
                              $db->affichage_message_ok();
                        ?>
                        <table class="table-liste">
                            <tr class="titre-tr">
                                <td > ID </td>
                                <td > Nom </td>
                                <td > Prénom </td>
                                <td > Téléphone </td>
                                <td > Mail </td>
                                <td > Age </td>
                                <td >Adresse </td>
                                <td > Ville </td>
                                <td >Code Postal </td>
                                <td > Année de rentrée </td>
                                <td > Spécialité souhaitée </td>
                                <td > Situation actuelle <td>
                                <td > Commentaire </td>
                                <td class="table-interaction1">Modifier</td>
                                <td class="table-interaction2">Supprimer</td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['nom'] ?></td>
                                    <td><?php echo $data['prenom'] ?></td>
                                    <td><?php echo $data['tel'] ?></td>
                                    <td><?php echo $data['mail'] ?></td>
                                    <td><?php echo $data['age'] ?></td>
                                    <td><?php echo $data['adresse'] ?></td>
                                    <td><?php echo $data['ville'] ?></td>
                                    <td><?php echo $data['codepostal'] ?></td>
                                    <td><?php echo $data['annee'] ?></td>
                                    <td><?php echo $data['spe'] ?></td>
                                    <td><?php echo $data['situation']?></td>
                                    <td><?php echo $data['commentaire'] ?></td>
                                    <td><a href="modif.php?U_ID=<?php echo $data['ID'] ?>" class="bouton-modif none">Modifier</a></td>
                                    <td><a href="supp.php?D_ID=<?php echo $data['ID'] ?>" class="bouton-sup none">Supprimer</a></td>
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>


                        </body>
</html>