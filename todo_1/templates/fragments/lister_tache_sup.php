<?php

/* 
 * Contrôleur qui va lister les tâche edont la date d'écheance est inferieur ou = à la date du jour
 */

//on crée l'objet tache
$tache = new tache();

//on recupère l'id de l'utilisateur en cours
$id=$_SESSION['id_user'];

//on crée une liste des tache pour ce destintaire
$lister= $tache->listerTacheSup();

if(empty($lister)){
    echo "<p>Aucune tâche </p>";
}else{
    //pour chaque tache de la liste
    foreach ($lister as $tache){
        
        //on inclut l'objet dans le fragment html
        include "templates/fragments/liste_tache_sup.php";
        
    }
}    
    