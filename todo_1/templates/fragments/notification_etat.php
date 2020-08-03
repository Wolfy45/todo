<?php

/* 
 * 
 * Controlleur qui va afficher le logo notif en haut a droite du "post-it" en fonction de l'etat
 */

if($tache->etat->id == "1"){
    echo" <div class='afaire'></div>";
}elseif($tache->etat->id == "2"){
    echo" <div class='encour'></div>";
}elseif($tache->etat->id == "3"){
    echo" <div class='fait'></div>";
}elseif($tache->etat->id == "4"){
   echo" <div class='refuser'></div>";
}elseif($tache->etat->id == "5"){
    echo" <div class='abandonner'></div>";
}