<?php 

    
    require_once('./class/bdd.php');
    $db = new bdd();

    class requettes extends bdd
    {
        public function ajout_et()
        {
            global $db;
            if(isset($_POST['bouton-sauvegarder']))
            {
                $nom = $db->check($_POST['nom']);
                $prenom = $db->check($_POST['prenom']);
                $tel = $db->check($_POST['tel']);
                $mail = $db->check($_POST['mail']);
                $age = $db->check($_POST['age']);
                $adresse = $db->check($_POST['adresse']);
                $ville = $db->check($_POST['ville']);
                $codepostal = $db->check($_POST['codepostal']);
                $annee = $db->check($_POST['annee']);
                $spe = $db->check($_POST['spe']);
                $situation = $db->check($_POST['situation']);
                $commentaire = $db->check($_POST['commentaire']);

                if($this->requette_ajout($nom,$prenom,$tel,$mail,$age,$adresse,$ville,$codepostal,$annee,$spe,$situation,$commentaire))
                {
                    echo '<div class="bon"> Etudiant sauvegarder avec succès  </div>';
                }
                else
                {
                    echo '<div class=erreur"> Erreur sauvegarde étudiant (contacter un admin) </div>';
                }
            }
        }

        function requette_ajout($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l)
        {
            global $db;
            $query = "insert into etudiant (nom,prenom, tel,mail,age,adresse,ville,codepostal,annee,spe,situation,commentaire) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
            $result = mysqli_query($db->connection,$query);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }