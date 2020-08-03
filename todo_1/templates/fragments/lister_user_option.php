<?php

/* 
 * contrôleur qui va crée une liste d'utilisateur puis les inserer dans une balise <option> pour la création de tâche
 */



$user= new user();

$lister= $user->listerUser();


foreach ($lister as $user){
    if ($user->id != $_SESSION['id_user']){
        include"templates/fragments/option_user.php";
     }
} 