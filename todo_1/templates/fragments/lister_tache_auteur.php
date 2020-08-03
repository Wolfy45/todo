<?php

/* 
 * Contrôleur qui va lister les tâche dont la date d'écheance est inferieur ou = à la date du jour
 */

//on crée l'objet tache
$tache = new tache();

//on recupère l'id de l'utilisateur en cours
$id=$_SESSION['id_user'];

//on crée une liste des tache pour ce destintaire
$lister= $tache->listerTacheAuteur($id);

if(empty($lister)){
    echo "<p>Aucune tâche en attentes</p>";
}else{
    //pour chaque tache de la liste
    foreach ($lister as $tache){
        //on affiche les tache dont l'etat est differend de "faite"
        if($tache->etat->id != "3"  and $tache->destinataire->id != $_SESSION['id_user']){
        //on inclut l'objet dans le fragment html
        include "templates/fragments/liste_tache_demande.php";
        }
    }
}    
    