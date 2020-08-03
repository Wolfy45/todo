<?php

/* 
 * Contrôleur qui va lister les tâche en cours dont la date d'écheance est inferieur à la date du jour
 */

//on crée l'objet tache
$tache = new tache();

//on recupère l'id de l'utilisateur en cours
$id=$_SESSION['id_user'];

//on crée une liste des tache pour ce destintaire
$lister= $tache->listerTacheEnCours($id);

if(empty($lister)){
    echo "<p>Aucune tâche en cours</p>";
}else{
    //pour chaque tache de la liste
    foreach ($lister as $tache){
        
        //on affiche les tache dont l'etat est differend de "faite"
        if($tache->etat->id != "3"){
            //on inclut l'objet dans le fragment html
            include "templates/fragments/liste_tache.php";
        }
    }
}    
    