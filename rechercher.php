
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/navbar.css">
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


<div class="recherche">
<h1 class="titre-liste">Recherche un ID<h1>
<form method="post" >
<input type="text" name="recherche-id">
<input type="submit" value="rechercher" name="bouton-id" class="bouton-recherche">
<?php

$con = new PDO("mysql:host=localhost;dbname=annuaire_nws",'root','');

if (isset($_POST["bouton-id"])) {
	$str = $_POST["recherche-id"];
	$sth = $con->prepare("SELECT * FROM `etudiant`WHERE ID = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table class="table-recherche">
			<tr class="titre-tr">
				<th>ID</th>
				<th>Nom</th>
                <th>Prénom</th>
				<th>N° Téléphone</th>
                <th>Mail</th>
				<th>Age</th>
                <th>Adresse</th>
				<th>Ville</th>
                <th>Code Postal</th>
				<th>Année de rentrée</th>
                <th>Spécialités souhaiter</th>
				<th>Situation actuel</th>
                <th>Commentaire</th>
			</tr>
			<tr>
            <td><?php echo $row->ID; ?></td>
				<td><?php echo $row->nom; ?></td>
				<td><?php echo $row->prenom;?></td>
                <td><?php echo $row->tel; ?></td>
				<td><?php echo $row->mail;?></td>
                <td><?php echo $row->age; ?></td>
				<td><?php echo $row->adresse;?></td>
                <td><?php echo $row->ville; ?></td>
				<td><?php echo $row->codepostal;?></td>
                <td><?php echo $row->annee; ?></td>
				<td><?php echo $row->spe;?></td>
                <td><?php echo $row->situation; ?></td>
				<td><?php echo $row->commentaire;?></td>
			</tr>
		
			

		</table>
<?php 
	}
		
		
		else{
			echo '<div class="erreur"> Recherche introuvable </div>';
		}


}

?>
</div>




<div class="recherche">
<h1 class="titre-liste">Recherche un nom<h1>
<form method="post" >
<input type="text" name="recherche-nom">
<input type="submit" value="rechercher" name="bouton-nom" class="bouton-recherche">
<?php

$con = new PDO("mysql:host=localhost;dbname=annuaire_nws",'root','');

if (isset($_POST["bouton-nom"])) {
	$str = $_POST["recherche-nom"];
	$sth = $con->prepare("SELECT * FROM `etudiant`WHERE nom = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table class="table-recherche">
			<tr class="titre-tr">
				<th>ID</th>
				<th>Nom</th>
                <th>Prénom</th>
				<th>N° Téléphone</th>
                <th>Mail</th>
				<th>Age</th>
                <th>Adresse</th>
				<th>Ville</th>
                <th>Code Postal</th>
				<th>Année de rentrée</th>
                <th>Spécialités souhaiter</th>
				<th>Situation actuel</th>
                <th>Commentaire</th>
			</tr>
			<tr>
            <td><?php echo $row->ID; ?></td>
				<td><?php echo $row->nom; ?></td>
				<td><?php echo $row->prenom;?></td>
                <td><?php echo $row->tel; ?></td>
				<td><?php echo $row->mail;?></td>
                <td><?php echo $row->age; ?></td>
				<td><?php echo $row->adresse;?></td>
                <td><?php echo $row->ville; ?></td>
				<td><?php echo $row->codepostal;?></td>
                <td><?php echo $row->annee; ?></td>
				<td><?php echo $row->spe;?></td>
                <td><?php echo $row->situation; ?></td>
				<td><?php echo $row->commentaire;?></td>
			</tr>
		
			

		</table>
<?php 
	}
		
		
		else{
			echo '<div class="erreur"> Recherche introuvable </div>';
		}


}

?>
</div>


<div class="recherche">
<h1 class="titre-liste">Recherche un prénom<h1>
<form method="post" >
<input type="text" name="recherche-prenom">
<input type="submit" value="rechercher" name="bouton-prenom" class="bouton-recherche">
<?php

$con = new PDO("mysql:host=localhost;dbname=annuaire_nws",'root','');

if (isset($_POST["bouton-prenom"])) {
	$str = $_POST["recherche-prenom"];
	$sth = $con->prepare("SELECT * FROM `etudiant`WHERE prenom = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table class="table-recherche">
			<tr class="titre-tr">
				<th>ID</th>
				<th>Nom</th>
                <th>Prénom</th>
				<th>N° Téléphone</th>
                <th>Mail</th>
				<th>Age</th>
                <th>Adresse</th>
				<th>Ville</th>
                <th>Code Postal</th>
				<th>Année de rentrée</th>
                <th>Spécialités souhaiter</th>
				<th>Situation actuel</th>
                <th>Commentaire</th>
			</tr>
			<tr>
            <td><?php echo $row->ID; ?></td>
				<td><?php echo $row->nom; ?></td>
				<td><?php echo $row->prenom;?></td>
                <td><?php echo $row->tel; ?></td>
				<td><?php echo $row->mail;?></td>
                <td><?php echo $row->age; ?></td>
				<td><?php echo $row->adresse;?></td>
                <td><?php echo $row->ville; ?></td>
				<td><?php echo $row->codepostal;?></td>
                <td><?php echo $row->annee; ?></td>
				<td><?php echo $row->spe;?></td>
                <td><?php echo $row->situation; ?></td>
				<td><?php echo $row->commentaire;?></td>
			</tr>
		
			

		</table>
<?php 
	}
		
		
		else{
			echo '<div class="erreur"> Recherche introuvable </div>';
		}


}

?>
</div>


<div class="recherche">
<h1 class="titre-liste">Recherche un mail<h1>
<form method="post" >
<input type="text" name="recherche-age">
<input type="submit" value="rechercher" name="bouton-age" class="bouton-recherche">
<?php

$con = new PDO("mysql:host=localhost;dbname=annuaire_nws",'root','');

if (isset($_POST["bouton-age"])) {
	$str = $_POST["recherche-age"];
	$sth = $con->prepare("SELECT * FROM `etudiant`WHERE age = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table class="table-recherche">
			<tr class="titre-tr">
				<th>ID</th>
				<th>Nom</th>
                <th>Prénom</th>
				<th>N° Téléphone</th>
                <th>Mail</th>
				<th>Age</th>
                <th>Adresse</th>
				<th>Ville</th>
                <th>Code Postal</th>
				<th>Année de rentrée</th>
                <th>Spécialités souhaiter</th>
				<th>Situation actuel</th>
                <th>Commentaire</th>
			</tr>
			<tr>
            <td><?php echo $row->ID; ?></td>
				<td><?php echo $row->nom; ?></td>
				<td><?php echo $row->prenom;?></td>
                <td><?php echo $row->tel; ?></td>
				<td><?php echo $row->mail;?></td>
                <td><?php echo $row->age; ?></td>
				<td><?php echo $row->adresse;?></td>
                <td><?php echo $row->ville; ?></td>
				<td><?php echo $row->codepostal;?></td>
                <td><?php echo $row->annee; ?></td>
				<td><?php echo $row->spe;?></td>
                <td><?php echo $row->situation; ?></td>
				<td><?php echo $row->commentaire;?></td>
			</tr>
		
			

		</table>
<?php 
	}
		
		
		else{
			echo '<div class="erreur"> Recherche introuvable </div>';
		}


}

?>
</div>

</body>
</html>