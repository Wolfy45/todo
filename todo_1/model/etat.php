<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of etat
 *
 * @author eleve
 */
class etat extends table{
    protected $table="etat";
    protected $champs=["nom_etat"];
    protected $liens=[];
    
    public function listerEtat(){
        //rôle: lister les etat
        //retour : listes des tache
        //paramaètre : néant
        
        //construction sql;
        $sql="SELECT * FROM `{$this->table}`";
        $param= [];
        
        //préparation et execution sql
        global $bdd;
        $req=$bdd->prepare($sql);
        if(! $req->execute($param)){
            echo "Erreur dans la requete sql $sql";
            return false;
        }
        //on récupère la 1er ligne de resultat
        $lignes = $req->fetchALL(PDO::FETCH_ASSOC);
        
        //on crée une liste vide;
        $liste=[];
        
        //pour chaque ligne de la liste
        foreach ($lignes as $tabligne){
            //on crée l'objet
            $etat = new tache;
            
            $etat->id= $tabligne["id"];
            $etat->nom_etat= $tabligne["nom_etat"];
    
            //on remplit la liste avec la ligne dobjet charger
            $liste[]=$etat;
            
        }
        
        return $liste;         
        
    }
}
