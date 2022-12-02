<?php 
    
    require_once('./class/bdd.php'); 
    require_once('./class/crud.php'); 
    $db = new requettes();
    $vnom=$db->voir_nom();
    $vprenom=$db->voir_prenom();
    $vtel=$db->voir_tel();
    $vmail=$db->voir_mail();
    $vville=$db->voir_ville();
    $vcodepostal=$db->voir_codepostal();
    $vannee=$db->voir_annee();
    $vspe=$db->voir_spe();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <title>Filtrer par catégories</title>
</head>
<body>

<nav class="navbar" role="navigation">
        <div class="nav-logo">
            <a href="./"><img class="logo" src="img/logo-nws.png" alt="Logo NWS"></a>
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
<table class="table-liste">
                            <tr class="titre-tr">
                                <td > ID </td>
                                <td > Nom </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($vnom))
                                    {
                                ?>
                                    <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['nom'] ?></td>
                                   
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
</div>

<button class="accordion">Prénom</button>
<div class="panel">
<table class="table-liste">
                            <tr class="titre-tr">
                                <td > ID </td>
                                <td > Prénom </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($vprenom))
                                    {
                                ?>
                                    <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['prenom'] ?></td>
                                   
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
</div>

<button class="accordion">Téléphone</button>
<div class="panel">
<table class="table-liste">
                            <tr class="titre-tr">
                                <td > ID </td>
                                <td > Téléphone </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($vtel))
                                    {
                                ?>
                                    <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['tel'] ?></td>
                                   
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
</div>


<button class="accordion">Mail</button>
<div class="panel">
<table class="table-liste">
                            <tr class="titre-tr">
                                <td > ID </td>
                                <td > Mail </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($vmail))
                                    {
                                ?>
                                    <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['mail'] ?></td>
                                   
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
</div>

<button class="accordion">Ville</button>
<div class="panel">
<table class="table-liste">
                            <tr class="titre-tr">
                                <td > ID </td>
                                <td > Ville </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($vville))
                                    {
                                ?>
                                    <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['ville'] ?></td>
                                   
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
</div>


<button class="accordion">Code Postal</button>
<div class="panel">
<table class="table-liste">
                            <tr class="titre-tr">
                                <td > ID </td>
                                <td > Code Postal </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($vcodepostal))
                                    {
                                ?>
                                    <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['codepostal'] ?></td>
                                   
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
</div>


<button class="accordion">Année souhaitée</button>
<div class="panel">
<table class="table-liste">
                            <tr class="titre-tr">
                                <td > ID </td>
                                <td > Année souhaiter </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($vannee))
                                    {
                                ?>
                                    <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['annee'] ?></td>
                                   
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
</div>

<button class="accordion">Spécialité souhaité</button>
<div class="panel">
<table class="table-liste">
                            <tr class="titre-tr">
                                <td > ID </td>
                                <td > Spécialités souhaiter </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($vspe))
                                    {
                                ?>
                                    <td><?php echo $data['ID'] ?></td>
                                    <td><?php echo $data['spe'] ?></td>
                                   
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
</div>









<script  src="./js/accordeon.js"></script>
<script  src="./js/navbar.js"></script>
</body>
</html>