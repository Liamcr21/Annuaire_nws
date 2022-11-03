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
                    echo '<div class="bon"> Etudiant sauvegardé avec succès  </div>';
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
            $requette = "insert into etudiant (nom,prenom, tel,mail,age,adresse,ville,codepostal,annee,spe,situation,commentaire) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
            $result = mysqli_query($db->connection,$requette);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }


        public function voir_tout()
        {
            global $db;
            $requette = "select * from etudiant";
            $result = mysqli_query($db->connection,$requette);
            return $result;
        }

        public function voir_nom()
        {
            global $db;
            $requette = "select * from etudiant";
            $vnom = mysqli_query($db->connection,$requette);
            return $vnom;
        }

        public function voir_prenom()
        {
            global $db;
            $requette = "select * from etudiant";
            $vprenom = mysqli_query($db->connection,$requette);
            return $vprenom;
        }

        public function voir_tel()
        {
            global $db;
            $requette = "select * from etudiant";
            $vtel = mysqli_query($db->connection,$requette);
            return $vtel;
        }

        public function voir_mail()
        {
            global $db;
            $requette = "select * from etudiant";
            $vmail = mysqli_query($db->connection,$requette);
            return $vmail;
        }

        public function voir_ville()
        {
            global $db;
            $requette = "select * from etudiant";
            $vville = mysqli_query($db->connection,$requette);
            return $vville;
        }

        public function voir_codepostal()
        {
            global $db;
            $requette = "select * from etudiant";
            $vcodepostal = mysqli_query($db->connection,$requette);
            return $vcodepostal;
        }

        public function voir_annee()
        {
            global $db;
            $requette = "select * from etudiant";
            $vannee = mysqli_query($db->connection,$requette);
            return $vannee;
        }

        public function voir_spe()
        {
            global $db;
            $requette = "select * from etudiant";
            $vspe = mysqli_query($db->connection,$requette);
            return $vspe;
        }

        public function requette_id($id)
        {
            global $db;
            $sql = "select * from etudiant where ID='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }

        public function modif()
        {
            global $db;

            if(isset($_POST['bouton-modif']))
            {
                $ID = $_POST['ID'];
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

                if($this->requette_modif($ID,$nom,$prenom,$tel,$mail,$age,$adresse,$ville,$codepostal,$annee,$spe,$situation,$commentaire ))
                {
                    $this->message_ok('<div class="bon"> Etudiant modifié avec succès </div>');
                    header("location:liste.php");
                }
                else
                {   
                    $this->message_ok('<div class="erreur"> Erreur modification étudiant (contacter un admin) </div>');
                }

               
            }
        }

        public function requette_modif($id,$nom,$prenom,$tel,$mail,$age,$adresse,$ville,$codepostal,$annee,$spe,$situation,$commentaire)
        {
            global $db;
            $sql = "update etudiant set nom='$nom', prenom='$prenom', tel='$tel', mail='$mail', age='$age', adresse='$adresse', ville='$ville', codepostal='$codepostal', annee='$annee', spe='$spe', situation='$situation', commentaire='$commentaire' where ID='$id'";
            $result = mysqli_query($db->connection,$sql);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }



        public function supp_et($id)
        {
            global $db;
            $requette = "delete from etudiant where ID='$id'";
            $result = mysqli_query($db->connection,$requette);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function message_ok($msg)
        {
            if(!empty($msg))
            {
                $_SESSION['Message']=$msg;
            }
            else
            {
                $msg = "";
            }
        }

        public function affichage_message_ok()
        {
            if(isset($_SESSION['Message']))
            {
                echo $_SESSION['Message'];
                unset($_SESSION['Message']);
            }
        }

    }




?>