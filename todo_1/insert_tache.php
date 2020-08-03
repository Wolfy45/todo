<?php

/* 
 * contrôlleur qui va crée la tache dans la bdd
 * param: $post : titre, description,destinataire,echeance (date)
 * 
 * retour-> si ok retour tab de bord
 * si non ->retour page connection
 * 
 */

//intialisation
include"lib/init.php";

if(!empty($_SESSION['connecte'])){
    
    $tache=new tache();
    
    $tache->loadFromTab($_POST);
    
    $tache->creation=date("y-m-d");
    
    $tache->etat="1"; // 1= A faire (voir bdd pour la liste des état)
    
    $tache->auteur=$_SESSION['id_user'];
    
    $tache->insert();
    
    
    //on charge l'utilisateur en cours
    $user=new user($_SESSION['id_user']);
    
   //on donne le titre de la pag (title du head)
    $title = "Tableaux de bord";

    //on affiche la page de connection
    include"templates/pages/tab_bord.php";
    
    
}else{
    //on donne le titre de la pag (title du head)
    $title = "Connection";

    //on affiche la page de connection
    include"templates/pages/connection.php";
}