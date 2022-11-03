<?php 

    require_once('./class/bdd.php');
    require_once('./class/crud.php'); 
    $db = new requettes();
    
    if(isset($_GET['D_ID']))
    {
        global $db;
        $ID = $_GET['D_ID'];

        if($db->supp_et($ID))
        {
            $db->message_ok('<div class="bon">  Etudiant supprimé avec succès</div>');
            header("location:liste.php");
        }
        else
        {
            $db->message_ok('<div class="erreur"> Erreur de la suppression (contacter un admin) </div>'); 
        }
    }


?>